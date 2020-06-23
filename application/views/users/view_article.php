 <?php include('header.php'); ?>


 <div class="container" style="margin-top:20px;">
 <div class="row">
<h1>Articles details</h1>

  <table class="table table-bordered">
<thead >
<tr>
<th>Article Image</th>
<th>Article Title</th>
<th>Blog</th>

<th>Published On</th>
</tr>
</thead>
<tbody id="myTable">
<?php if($articles):
//print_r($count);
 ?> 
<?php foreach ($articles as $art): ?>
<tr>
	   
        
        <?php if($art->image_path !='') { ?>
        <td><img src="<?php echo $art->image_path ?>" alt="" width="280" height="200"></td>
         <?php } else { ?>
		<td><img src="http://localhost/First_CI_Procejct/upload/download.png" alt="" width="280" height="200"></td>
		 <?php } ?>
		 
		<td><?= $art->article_title; ?></td>
		<td><?= $art->article_body; ?></td>
		<td><?= date('d M Y ',strtotime($art->created_at)); ?></td>
		
		
	</tr>
	<?php endforeach; ?>
<?php else: ?>
	<tr>
	<td colspan="3">Not data available</td>
	</tr>
   <?php endif; ?>
</tbody>




</table>


<?php  echo $this->pagination->create_links();  ?> 

</div>





</div>
<?php include('footer.php'); ?>