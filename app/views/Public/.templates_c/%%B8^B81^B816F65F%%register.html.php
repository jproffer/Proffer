<?php /* Smarty version 2.6.25-dev, created on 2011-05-13 13:48:23
         compiled from Auth/register.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div class='container'>
	<div style="margin-left: auto; margin-right: auto; overflow: hidden;">
	    <div class="cycleContainer"  style='height: 124px; width: 484px; margin-top: 250px; text-align: center; vertical-align: center; position: relative; overflow: hidden;'>
		<div class='dlgpanel ui-corner-all8'>
		    <form method="post" name="frmLogin" id="frmLogin">
		    <table cellpadding="2" cellspacing="2" border="0">
			<tr>
			    <td>Username</td>
			    <td><input type="text" name="uid" id="uid"></td>
			</tr>
			<tr>
			    <td>Password</td>
			    <td><input type="password" name="pwd" id="pwd"></td>
			</tr>
		    </table><br />
		    <br />
		     <a href="#" id='btnLogin' class=' ui-button ui-corner-all ui-state-default fg-button' style='padding: 5px;' onclick="$('#frmLogin').submit()">Login</a>
		    </form>
		</div>
	    </div>
	</div>
    </div>
    <div id="footer" style='text-align: center;'>
	<a href='#'>About</a>
	<img src='<?php echo $this->_tpl_vars['themepath']; ?>
/images/orange-dot.png'> <a href='#'>Sample Deals</a>
	<img src='<?php echo $this->_tpl_vars['themepath']; ?>
/images/orange-dot.png'> <a href='#'>Contact Us</a>
	<img src='<?php echo $this->_tpl_vars['themepath']; ?>
/images/orange-dot.png'> <a href='/auth/login'>Login</a>
	<img src='<?php echo $this->_tpl_vars['themepath']; ?>
/images/orange-dot.png'> <a href='/auth/register'>Register</a>
</div>
</body>
</html>