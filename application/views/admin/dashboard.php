<?php include('header.php');
error_reporting(0)
?>
<html>
<?php $name=$this->session->userdata('uname'); ?>
<h1 style="margin-left:400px">Welcome To <?php echo $name; ?></h1>
<div class="container" style="margin-top:30px;">
 <div class="row">
 <a href="add_article" class="btn btn-lg btn-primary"> Add Article</a>
 </div>
 


</div>
<div class="container" style="margin-top:30px;">

 <?php if($msg=$this->session->flashdata('msg')):     //start flash
 $msg_class=$this->session->flashdata('msg_class')
 ?>
<div class="row">
<div class="col-lg-6">
<div class="alert <?= $msg_class ?>">
<?php echo $msg; ?>
</div></div></div>
<?php endif;?>

<!-- <?= $this->db->last_query(); ?>  //show last query in page--> 

<div class="table">
<table>
<thead>
<tr>
<th>S.No</th>
<th>Article Title</th>
<th>Article Body</th>
<th>Image</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php if(count($articles)): 
$count=$this->uri->segment(3);
?>
<?php foreach($articles as $art ):


?>

<tr>
	<!--<td>1</td>                      // static data
	<td>Demo test</td>
	<td><a href="#" class="btn btn-primary">Edit</td>
	<td><a href="#" class="btn btn-danger">Delete</td> -->
	
	<td><?php echo ++$count; ?></td>                   
	<td><?=$art->article_title; ?></td>
	<td><?=$art->article_body; ?></td>
	
        <?php if($art->image_path !='') { ?>
        <td><img src="<?php echo $art->image_path ?>" alt="" width="80" height="50"></td>
         <?php } else { ?>
		<td><img src="http://localhost/First_CI_Procejct/upload/download.png" alt="" width="80" height="50"></td>
		 <?php } ?>
		 
	<td><a href="edituser/<?= $art->id ?>" class="btn btn-primary">Edit</td>
	<td>
	<?=
	form_open('admin/del_article'),
	form_hidden('id',$art->id),
	form_submit(['name'=>'submit','value'=>'Delete', 'class'=>'btn btn-danger']),
	form_close();
	?>
	</td>
</tr>
<?php endforeach;
else:?>
<tr>
<td colspam="3">Not data available</td>
</tr>
 <?php endif;?>
</tbody>
</table>
<?= $this->pagination->create_links(); ?>

</div>


</html>
<?php include('footer.php');?>