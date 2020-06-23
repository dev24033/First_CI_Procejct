<html>
<head>
<title>Article List </title>

<!--<link href="<?=base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet" type="text/css">-->
<?=link_tag("assets/css/bootstrap.min.css")?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<?php 
if($this->session->userdata('id'))
{?>

<?php } else { ?> 
<a class="navbar-brand" href="<?php echo base_url()?>">Home</a>
<?php } ?>  
  <a class="navbar-brand" href="#">Login Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<?php 
if($this->session->userdata('id'))
{?>
	<li><a href="<?=base_url('admin/logout');?>" class="btn btn-danger" >Logout</a></li>
<?php } ?>
<?php //anchor('admin/logout','Logout');      // also use this for link?>               
</nav>