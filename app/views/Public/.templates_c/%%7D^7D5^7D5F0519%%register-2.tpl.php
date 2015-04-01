<?php /* Smarty version 2.6.25-dev, created on 2014-09-17 19:31:10
         compiled from Accounts/register-2.tpl */ ?>
<div style='position: relative; margin-top: 0px; height: 50px;'>
	<a class='prev button'>&laquo; Back</a>&nbsp;&nbsp;<a class='next right button'>Next &raquo;</a>
</div>
<table>
	<tbody>
		<tr>
			<td><label for="fname">First Name:</label></td>
			<td><label for="mi">M.I:</label></td>
			<td><label for="lname">Last Name:</label></td>
		</tr>
		<tr>
			<td><div class="input-container"><input type="text" id="fname" name="fname"></div></td>
			<td><div class="input-container"><input type="text" id="mi" name="mi" style="width: 30px;"></div></td>
			<td><div class="input-container"><input type="text" id="lname" name="lname"></div></td>
		</tr>
	<tr><td colspan="2"><label for="sex-select">I am:</label></td></tr>
	<tr>
		<td colspan="2">
		<div class="input-container">
		<select id="sex-select" name="sex-select">
		<option value="0">Select Sex:</option>
		<option value="1">Female</option>
		<option value="2">Male</option>
		</select>
		</div>
		
		</td>
	</tr>
	<tr><td colspan="3"><label>Birthday:</label></td></tr>
	<tr>
		<td colspan="3">
			<div class="input-container">
				<select name="month"><option value="0">Month:</option>
					<option value="1">Jan</option>
					<option value="2">Feb</option>
					<option value="3">Mar</option>
					<option value="4">Apr</option>
					<option value="5">May</option>
					<option value="6">Jun</option>
					<option value="7">Jul</option>
					<option value="8">Aug</option>
					<option value="9">Sep</option>
					<option value="10">Oct</option>
					<option value="11">Nov</option>
					<option value="12">Dec</option>
				</select>
				<select name="day"><option value="0">Day:</option>
				<?php unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['loop'] = is_array($_loop=31) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
$this->_sections['foo']['start'] = $this->_sections['foo']['step'] > 0 ? 0 : $this->_sections['foo']['loop']-1;
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = $this->_sections['foo']['loop'];
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
?>
					<option value="<?php echo $this->_sections['foo']['iteration']; ?>
"><?php echo $this->_sections['foo']['iteration']; ?>
</option>
				<?php endfor; endif; ?>
				</select>
				<select name="year"><option value="0">Year:</option>
					<?php echo $this->_tpl_vars['yearvalues']; ?>

				</select>
			</div>
		</td>
	</tr>
	</tbody>
</table>