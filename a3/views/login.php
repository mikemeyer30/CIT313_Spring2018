<?php include('elements/header.php');?>

   <!-- <?php echo $numbers ?> -->

	 <div class="container">
	   <div class="page-header">
	     <h1>The Login View</h1>
	   </div>
	   <?php if(isset($message)){?>
	     <div class="alert alert-success">
	     <button type="button" class="close" data-dismiss="alert">×</button>
	     	<?php echo $message?>
	     </div>
	   <?php }?>
	   <div class="row">
	       <div class="span8">
	         <form action="<?php echo BASE_URL?>logincontroller/do_login" method="post" onsubmit="editor.post()">
	           <label>Username/E-mail Address:</label>
	           <input class="span3" name="email" type="text">
	           <label>Password:</label>
	           <input class="span3" name="password" type="text">
	           <br/>
	           <input type="hidden" name="pID" value="<?php echo $pID?>"/>
	           <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
	         </form>
	       </div>
	     </div>
	   </div>
<?php include('elements/footer.php');?>
