<?php
/**
 * Upgrade script
	* @author Johnathan Proffer
	* @Copyright (c) Johnathan Proffer
	* @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
 **/

namespace Core;

class SysUpgrade {
	
	public $status = array();
	private $readpath;
	private $sqlpath;
	
	public function __construct() {
		$this->readpath = PATH_ROOT."/updates/mysql/.".gethostname().".read";
		$this->sqlpath = PATH_ROOT."/updates/mysql/*.sql";
	}
	
	public function check() {
		
		$status = array();
		$res = $this->checkMySQL();
		if ($res) {
			$status[] = $res;
		}
		if (!empty($status)) {
			echo "<!DOCTYPE html ><html><body><div style='position: absolute; top: 0px; left: 0px; width: 100%; overflow: hidden; background-color: #DFDFDF; border: solid black 1px; padding: 10px;'><pre>";
			print_r($status);
			echo "</div></body></html>";
			flush();
			exit;
		}
		
	}
	
	private function checkMySQL() {
		$files = glob($this->sqlpath);
		usort($files, create_function('$a,$b', 'return filemtime($a) - filemtime($b);'));
		$readfiles = array();
		if (file_exists($this->readpath)) {
			$readfiles = preg_split("/\n/", file_get_contents($this->readpath), -1, PREG_SPLIT_NO_EMPTY);
			$readfiles = array_combine(array_values($readfiles), array_values($readfiles));
		}
		if (count($files)==0) { return "MySQL: no updates needed"; }
		$dbm = new \Core\MDbm();
		$filestatus = array();
		foreach ($files as $file) {
			if (!empty($readfiles[basename($file)])) { continue; }
			$data = file_get_contents($file);
			$header = preg_match('/\/\*([^\*\/]*)/m',$data,$matches);
			$header=$matches[1];
			$headersplit = preg_match_all('/\@\w+\:(.*?)$/im', $header, $matches,PREG_SPLIT_DELIM_CAPTURE);
			$data = explode("*/", $data, 2)[1];
			$data = preg_split("/\;/m", $data, -1, PREG_SPLIT_NO_EMPTY);
			$error=false;
			foreach ($data as $sql) {
				$res = $dbm->query($sql);
				if ($res!=1) {
					$error=true;
					$filestatus[] = basename($file).": Error: ".$dbm->error."<br /><hr>$sql<hr>";
				}
			}
			if (!$error) {
				$filestatus[] = basename($file).": Success";
				$readfiles[] = basename($file);
			}
		}
		if (count($filestatus) == 0) { return false; }
		$fp = fopen($this->readpath, "w+") or die("Error: ".$this->readpath." is not writeable!");
		fwrite($fp, implode("\n", $readfiles));
		fclose($fp);
		return $filestatus;
	}
}

?>
