<?php include('elements/header.php');?>

<!-- Form to get user info -->
<div class="container">
  <div class="page-header">
    <h1>Register</h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label>First Name:</label>
          <input class="span3" name="first_name" type="text">
          <label>Last Name:</label>
          <input class="span3" name="last_name" type="text">
          <label>Email:</label>
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
