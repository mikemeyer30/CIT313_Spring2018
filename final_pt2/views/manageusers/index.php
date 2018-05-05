<?php
include('views/elements/header.php');?>

<div class="container">
<div class="page-header">

  <?php if(isset($message1)) { ?>
       <div class="alert alert-danger">
           <?php echo $message1;?>
       </div>
     <?php } elseif(isset($message2)){?>
          <div class="alert alert-success">
              <?php echo $message2;?>
          </div>
      <?php }?>

<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($users as $u){?>
    <div class="">
    <h3><a href="<?php echo BASE_URL?>members/users/<?php echo $u['uID'];?>" title="<?php echo $u['first_name'];?> <?php echo $u['last_name'];?>"><?php echo $u['email'];?></a></h3>
    <p><?php echo $u['first_name'];?> <?php echo $u['last_name'];?></p>
    <p><a href="mailto:<?php echo $u['email'];?>"><?php echo $u['email'];?></a></p>
    <?php if($u['user_type'] == "2"){ ?>
      <a class="btn btn-primary" href="<?php echo BASE_URL?>/manageusers/delete/<?php echo $u['uID'];?>">Delete</a><br>
      <a class="btn btn-primary" href="<?php echo BASE_URL?>/manageusers/approve/<?php echo $u['uID'];?>">Approve</a><br>
    <?php }?>
    <?php }?>
  </div>


</div>

<?php include('views/elements/footer.php');?>
