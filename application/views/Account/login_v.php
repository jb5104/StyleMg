<style type="text/css">
.center_page{
	position:absolute;
	top:50%;
	left:50%;
	overflow:hidden;
	background-color:#FC0;
	margin-top:-150px;
	margin-left:-100px;
}
.login_title{
	text-align: center;
}
.btn_sbm{
	width: 100%;
}
.box_input{
	width: 98%;
}

</style>
	
<!-- page -->
<div class="center_page">
	<!-- form -->
	<div class = "form_login">
		<div class="login_title">
			<h2 class='test'>endostylus<sup>&#0153;</sup></h2>
		</div>
		<?php
		//Form create helper : form_open(1. target, 2. attributes array, 3. hidden fields);
		//Add form attributes
		$attributes = array('class' => 'class_name', 'id' => 'id_name');
		$hidden = array('ID' => 'id value');
		
		echo form_open ( 'Account/_login', $attributes, $hidden);
		?>
		<div class="ip_login">
			<input type='text' name="email" class="box_input" placeholder="email"> 
			<br>
			<input type="password" name="password" class="box_input" placeholder="password">
			<br>
			<input class="btn_sbm" type="submit" value="login" >
		</div> 
		<?php
			/* Form close*/
			 form_close() 
		 ?>
	 </div> <!-- end of form -->
	 <div>
	 	<?php //anchor(uri segments, text, attributes) ?>
	 	<span><?php echo anchor('/Account/register','Register Account','class=reg')?></span>
	 	<span>or</span>
	 	<span><?php echo anchor('/Account/retrieve','Retrieve Password','class=chpw')?></span>
	 </div>
</div> <!-- end of page -->



