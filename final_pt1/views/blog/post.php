
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);

}?>

<div class="container">
  <div class="page-header">



    <h1><?php echo $title;?></h1>
  </div>
    <p>
      <?php echo $content;?>
    </p>
    <sub>
      <?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
    </sub>

    <?php if($u->isRegistered()) { ?>
      <?php if($u->isAdmin()) { ?>
        <div style="margin-top:15px;">
            <a class="btn btn-primary" href="<?php echo BASE_URL?>/manageposts/edit/<?php echo $pID;?>">Edit</a>
            <a class="btn btn-primary" href="<?php echo BASE_URL?>/manageposts/delete/<?php echo $pID;?>">Delete</a>
        </div>
      <?php } ?>
    <?php } ?>

    <h2>View Comments</h2>
    <!-- <?php if (is_array($comments)) {
      echo 'TEST TEST TEST';
    } ?> -->
    <?php foreach($comments as $c){ ?>
      <p><?php echo $c['commentText'];?></p>
    <?php } ?>

    <?php // set timezone
    // date_default_timezone_set('America/Indiana/Indianapolis');
    // date('Y-m-d H:i:s');
    ?>


    <?php if ($u->isRegistered()) { ?>
      <form class="" action="<?php echo BASE_URL?>blog/<?php echo $task ?>" method="post" onsubmit="editor.post()">
        <input type="hidden" id="uID" name="uID" value="<?php echo $_SESSION['uID'];?>">
        <input id="commentText" class="" name="commentText" type="text">
        <input name="date" id="date" size="16" type="hidden" value="<?php echo $date;?>">
        <input type="hidden" id="pID" name="pID" value="<?php echo $pID;?>">
        <button id="submit" type="submit" class="btn btn-primary">Submit</button>
      </form>

    <?php
    }
    else { ?>

        <a href="<?php echo BASE_URL?>login/" class="btn btn-primary">Login to Comment</a>

    <?php } ?>

</div>


<?php include('views/elements/footer.php');?>
