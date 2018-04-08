<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News From <?php echo $rss_title; ?></h1>
  </div>
    <div class="alert alert-success">
        <?php echo $message;?>
    </div>

	<?php  foreach ($items as $i ) { ?>
	<h4><a href="<?php echo $i->link ?>"><?php echo $i->title ; ?></a> (<?php echo $i->pubDate .")<br>"?></h4>
	<p><?php echo $i->description;?></p><br><hr>

	<?php }?>


</div>
<?php include('views/elements/footer.php');?>
