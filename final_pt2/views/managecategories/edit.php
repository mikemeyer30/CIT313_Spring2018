<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Edit Category</h1>
  </div>
	<?php if( is_array($category) ) {
	    extract($category);

	}?>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>managecategories/update" method="post" onsubmit="editor.post()">
          <h3>Category Title</h3>
						<input class="hidden" name="categoryID" type="text" value="<?php echo $categoryID;?>"><br>
						<input type="text" class="span4" name="categoryName" value="<?php echo $name;?>" required="categoryName">
        		<button id="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>
