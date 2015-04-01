<?php /* Smarty version 2.6.25-dev, created on 2014-09-17 19:31:10
         compiled from Accounts/register.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/iheader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="form-sub-title"><b>Sign Up</b> - It's free, and anyone can join!</div>
<form method="post" action="/accounts/login/">
	<div class="center">
		<!-- scrollable root element -->
		<div id="wizard">

			<!-- status bar -->
			<ul id="status">
				<li class="active"><strong>1.</strong> Create Login</li>
				<li><strong>2.</strong> Profile &amp; Contact Information</li>
				<li><strong>3.</strong> Confirmation</li>
			</ul>		
			<!-- scrollable items -->
			<div class="items">
				<div class="page"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Accounts/register-1.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
				<div class="page"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Accounts/register-2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
				<div class="page"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Accounts/register-3.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
			</div>
		</div>
	</div>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>