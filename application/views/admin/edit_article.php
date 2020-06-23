<?php include('header.php');

 ?>

<div class="container" style="margin-top:20px;">
<h1>Edit Articles</h1>

 <?php echo form_open_multipart("admin/updatearticle/{$article->id} "); ?>
<!--<?php echo form_hidden('article_id',$article->id); ?> -->
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="Title">Article Title:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Article Title','name'=>'article_title','value'=>set_value('article_title',$article->article_title)]);  ?>
  </div>
  </div>
  <div class="col-lg-6" style="margin-top:40px;">
   <?php  echo form_error('article_title');  ?>
  </div>
  </div>
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="body">Article Body</label>
  
   <?php  echo form_textarea(['class'=>'form-control','placeholder'=>'Article Body','name'=>'article_body','value'=>set_value('article_body',$article->article_body)]); ?>
   </div>
   </div>
   <div class="col-lg-6" style="margin-top:40px;">
   <?php  echo form_error('article_body');  ?>
  </div>
   </div>
   
   <div class="row">
 <div class="col-lg-6">
 <label for="body">Image</label>
  <div class="form-group">
    
	<table><tr><td>
	<?php if($article->image_path !='') { ?>
        <img src="<?php echo $article->image_path ?>" alt="" width="280" height="200">
         <?php } else { ?>
		<img src="http://localhost/First_CI_Procejct/upload/download.png" alt="" width="280" height="200">
		 <?php } ?>
		</tr></td>
	<input type="hidden" name="image_path" value="<?php echo $article->image_path ?>">
	<tr><td>
	<div class="col-lg-6" style="margin-top:10px;">
   <?php echo form_upload(['name'=>'userfile']);?>
   </div>
    </td><td>
 
 
 </td></tr></table>
 </div></div></div>
   
  <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']);  ?>
 <?php  echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']);  ?>

</div>

<?php include('footer.php'); ?>