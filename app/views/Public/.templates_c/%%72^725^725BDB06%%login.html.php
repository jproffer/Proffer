<?php /* Smarty version 2.6.25-dev, created on 2014-09-17 12:14:39
         compiled from Auth/login.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/iheader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form method="post" action="/accounts/login/">
	<div class="center w300px">
		<div class="w300px">
			<div class="w100px di label-l">Username:</div>
			<div class="w200px di"><input type="text" name="uid" id="uid" /></div>
		</div>
		<div class="w300px">
			<div class="w100px di label-l">Password:</div>
			<div class="w200px di"><input type="password" name="pwd" id="pwd" /></div>
		</div>
		<div class="label-s center">
			<div class="w300px di center"><a href="/accounts/recover/">Forgot Password?</a>&nbsp;&nbsp;<a href="/accounts/register/">Register</a></div>
		</div>
	</div>
<div style='position: relative; margin-top: 0px; height: 50px;'>
	<a class='next right button'>Next &raquo;</a>
</div>
	 <div class="center w300px">
		<a class='button'>test</a>
	</div>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>