<?php
include('header.php');?>

<div class="container" style="margin-top:20px;">
<h1>Add Articles </h1>

<?php echo form_open_multipart('admin/userValidation');?>
<?php echo form_hidden('user_id',$this->session->userdata('id'));?>

<?php echo form_hidden('created_at',date('Y-m-d h:i:s'));?>



<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for ="title">Article Title</label>


<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Article Title','name'=>'article_title','value'=>set_value('article_title')]);?>
</div></div>
<div class="col-lg-6" style="margin-top:35px;color:red;">
<?php echo form_error('article_title') ?>
 </div></div>

<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label for ="body">Article Body</label>
<?php echo form_textarea(['class'=>'form-control','placeholder'=>'Enter Article text','name'=>'article_body','value'=>set_value('article_body')]);?>
</div></div>
<div class="col-lg-6" style="margin-top:35px;color:red;">
<?php echo form_error('article_body')?>
 </div></div>
 
 <div class="row">
 <div class="col-lg-6">
 <div class="form-group">
 <label for="body">Select Image</label>
 <?php echo form_upload(['name'=>'userfile']);?>
 </div></div>
 <div class="col-lg-6" style="margin-top:40px;">
 <?php if(isset($upload_error)) { echo $upload_error; }  ?>
 </div></div>

<?php echo form_submit(['input type'=>'submit','class'=>'btn btn-default','value'=>'Submit']); ?>
<?php echo form_reset(['input type'=>'submit','class'=>'btn btn-default','value'=>'Reset']); ?>
</div>
<?php
include('footer.php');
?>