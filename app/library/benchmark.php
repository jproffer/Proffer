<?php
/**
* @filename benchmark.php
* @desc Provides easy, simple process benchmarking.
* @Copyright (c) Johnathan Proffer
* @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public Licence 
*/
namespace library;

	class benchmark {
		static $start=0;
		static $end=0;
		use \library\FB;
		public static function start() {
			$timeparts = explode(' ',microtime());
			self::$start = $timeparts[1].substr($timeparts[0],1);
			self::$end=0;
		}
		public static function stop($show=true,$decimals=5, $usefb=true) {
			$timeparts = explode(" ",microtime());
			self::$end = $timeparts[1].substr($timeparts[0],1);
			
			if($show) self::display($decimals,$usefb);
		}
		private static function display($decimals=5,$usefb=true) {
			$time = number_format(self::$end - self::$start,$decimals);
			$mem=memory_get_peak_usage(true);
			$_max=ini_get("memory_limit");
			$max=explode("M",$_max);
			
			$max=$max[0]*1048576;
			$usage=round(($mem*100)/$max,1);
			if ($mem>=1000000) { $mem=round($mem/1048576,2)." Mb"; }
			elseif ($mem>=1000) { $mem=round($mem/1024,2)." Kb"; }
			else { $mem="$mem b"; }
			if ($usefb) {
				FB::log("P: {$time}s, Mem: $mem ($usage%/$_max)");
			} else {
				echo "P: {$time}s, Mem: $mem ($usage%/$_max)\n";
			}
			
		}
	}
?>
