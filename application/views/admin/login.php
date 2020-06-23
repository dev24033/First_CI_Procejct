<?php
include('header.php');?>

<div class="container" style="margin-top:20px;">
<h1>Admin Form </h1>
<?php if($error=$this->session->flashdata('login_failed')): ?>
<div class="row">
<div class="col-lg-6">
<div class="alert alert-danger">
<?php echo $error; ?>
</div></div></div>
<?php endif;?>
<?php echo form_open('login/index');?>

<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for ="Username">User Name</label>
<!--<input type ='admin' class="form-control" id="admin">
<input type ='password' class="form-control" id="pwd">
<button type="submit" class="btn btn-default">Submit</button>
<?php echo form_error('uname',"<div class='text-danger'>","</div>") ?> // use this for indivisual error message show in red color.
 -->

<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]);?>
</div></div>
<div class="col-lg-6" style="margin-top:35px;">
<?php echo form_error('uname') ?>
 </div></div>

<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for ="pwd">Password</label>
<?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','name'=>'pwd','value'=>set_value('pwd')]);?>
</div></div>
<div class="col-lg-6" style="margin-top:35px;">
<?php echo form_error('pwd') ?>
 </div></div>

<?php echo form_submit(['input type'=>'submit','class'=>'btn btn-default','value'=>'Submit']); ?>
<?php echo form_reset(['input type'=>'submit','class'=>'btn btn-default','value'=>'Reset']); ?>
<?php echo anchor('login/register','Sign up?','class="link-class"')?>
<?php //echo anchor('users/register', 'Sign up?', 'class="link-class"') ?>
</div>
<?php
include('footer.php');
?>