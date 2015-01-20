<style type="text/css">
.center_page{
	position:absolute;
	top:50%;
	left:50%;
	overflow:hidden;
	/*background-color: ;*/
	margin-top:-150px;
	margin-left:-100px;
}
</style>
<div class="center_page">
	<h2>Register Account</h2>
	<?php echo form_open('Account/_register');?>
	<table>
		<tr>
			<td>E-mail</td>
			<td><input type='text' name='email'></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name='password'></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type='text' name='name'></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input type='text' name='phone'></td>
		</tr>
		<tr >
			<td><input type="submit" value="Register"></td>
			<td><input type="button" value="Cancle"></td>
		</tr>
		
	</table>
	
</div>
