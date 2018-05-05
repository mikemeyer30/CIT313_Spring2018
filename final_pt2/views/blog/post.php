
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

    <h2>Comments</h2>
    <hr>
    <?php date_default_timezone_set('America/Indiana/Indianapolis');?>
    <?php foreach($comments as $row){ ?>
      <div class="commentBox">
        <h4><?php echo $row['commentText'];?></h4>
        <sub>Posted by <?php echo $row['first_name'] . " " . $row['last_name']; ?>  on <?php echo $row['date'];?></sub>
        <?php if($u->isAdmin()){ ?>
          <form style="float:right" class="" action="<?php echo BASE_URL?>/blog/deletecomment/<?php echo $row['commentID'];?>" method="post">
            <input class="" name="pID" id="pID" type="hidden" value="<?php echo $pID;?>">
            <button type="submit" class="btn btn-primary">Delete</button>
          </form>
          <!-- <a style="float: right;" class="btn btn-primary" href="<?php echo BASE_URL?>/blog/deletecomment/<?php echo $row['commentID'];?>">Delete</a> -->
        <?php  } ?>
      </div>
      <br>
    <?php } ?>


    <?php if (isset($_SESSION['uID'])) { ?>
      <form class="" action="<?php echo BASE_URL?>blog/addcomment" method="post">
        <input type="hidden" id="uID" name="uID" value="<?php echo $_SESSION['uID'];?>">
        <textarea name="commentText" id="commentText" class="form-control" placeholder="Enter Comment" rows="3" cols="9" ></textarea><br>
        <input name="date" type="hidden" id="date" value="<?php echo $date = $date = date('Y-m-d H:i:s');?>">
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
