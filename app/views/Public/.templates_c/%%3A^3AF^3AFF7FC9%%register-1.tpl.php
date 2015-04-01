<?php /* Smarty version 2.6.25-dev, created on 2014-09-17 19:31:10
         compiled from Accounts/register-1.tpl */ ?>
<div style='position: relative; margin-top: 0px; height: 50px;'>
	<a class='next right button'>Next &raquo;</a>
</div>
<table class="center w400px">
	<tbody>
		<tr>
			<td ><label for="email">Your Email:</label></td>
		</tr>
			<td ><div class="input-container"><input type="text" id="email" name="email"><br />This will be your login!</div><br /></td>
		</tr>
		<tr>
			<td ><label for="pass">New Password:</label></td>
		</tr>
		<tr>
			<td ><div class="input-container"><input type="password" id="pass" name="pass"></div></td>
		</tr>
		<tr>
			<td><br /><label for="accountType">Type of Account:</label></td>
		</tr>
		<tr>
			<td>
				<div class="input-container">
					<select name="accountType" id="accountType">
						<option value="1">Tutoring</option>
						<option value="2">Educator</option>
					</select>
				</div>
			</td>
		</tr>
	</tbody>
</table>