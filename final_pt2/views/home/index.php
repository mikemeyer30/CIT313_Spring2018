<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <!-- <h1>CIT 313 Blog Page <?php echo $rss_title; ?></h1> -->
		<h1>Cyber-Security Central</h1>
  </div>

<!-- Image source: https://technews100.com/wp-content/uploads/2017/12/720x90banner.jpg -->
	<div id="image">
		<img class="image no-repeat center top" src="images/banner1.jpg" width="100%" alt="">
	</div>

	<div id="textContent" style="float: left;">
		<h2>Staying secure in today's evolving technological market</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in aliquam est, id cursus diam.
			 In molestie sollicitudin lectus, quis convallis est hendrerit nec. Nam ut enim quis ex rutrum elementum
			 at eu enim. Curabitur rutrum magna quis feugiat tempus. Nunc sit amet mauris a lectus ullamcorper
			 scelerisque. Cras non eros ut sapien facilisis faucibus. Mauris scelerisque et tellus eget semper.
			 Donec accumsan libero vitae justo ultricies, vel lacinia elit tincidunt. Vivamus mattis ullamcorper
			 efficitur. Duis tempor, ligula nec mollis dictum, neque urna vehicula risus, vel tempor tortor nibh
			 sit amet purus. Nunc scelerisque massa nec orci cursus commodo. Vivamus aliquet nisi at elit porttitor
			 gravida. In hac habitasse platea dictumst. Ut vitae leo commodo, scelerisque magna dignissim, sodales
			 diam. Aliquam sed purus imperdiet, ornare ante tincidunt, posuere magna. Aliquam volutpat lectus eu
			 ipsum pharetra volutpat.
		</p>
			 Integer interdum tincidunt magna, et feugiat urna pulvinar a. Morbi sit amet eros tincidunt,
			 pretium urna id, accumsan purus. Curabitur vitae pharetra nibh. Pellentesque habitant morbi
			 tristique senectus et netus et malesuada fames ac turpis egestas. Ut imperdiet libero dui,
			 et facilisis nunc bibendum sit amet. Sed venenatis tristique felis, in pretium dolor maximus et.
			 Nulla elementum lorem sit amet molestie elementum. Nullam eu tempor turpis, eu convallis dui.
			 Duis eu tortor vel arcu   pellentesque lacinia. Ut sapien felis, feugiat vitae dolor ut,
			 lobortis commodo odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
			 cubilia Curae; Sed eu semper elit, in aliquam lorem. Proin et augue lacus. Donec non arcu pulvinar,
			 imperdiet purus eget, pellentesque lorem. Integer tempus dui vel risus convallis, commodo mollis nibh congue.
		</p>
		<p>
			 Praesent efficitur felis sapien, eget porta quam placerat in. Vivamus nec urna mollis, sagittis est vel,
			 luctus urna. Proin ex ante, fringilla quis ante at, dictum pellentesque tortor. Pellentesque consequat a
			 nulla sit amet pellentesque. Mauris sit amet ante dapibus, mollis lectus ut, finibus dui. Mauris eu vestibulum
			 justo. Maecenas sed commodo sem. Vestibulum sagittis ex nunc, vehicula lobortis libero malesuada et.
			 Donec et enim mi. Maecenas scelerisque libero non mi venenatis, rutrum dignissim ex tristique. Nullam
			 nec dignissim elit, at finibus enim. Praesent quis dolor vel elit suscipit volutpat at in leo. Nam eleifend,
			 mauris vel tristique auctor, dui nisi malesuada neque, non pharetra nulla velit non eros. Praesent quis lacus
			 vitae metus convallis malesuada eu vel nisi. Fusce quis purus justo. Aenean eget fringilla ex.
		</p>



		<?php if (!$u->isRegistered()) {?>
			<h5>Register Now!</h5>
			<button type="button" name="button"><a href="<?php echo BASE_URL?>register/">Create Account</a></a></button>
		<?php } ?>


	</div>


	<div id="sideBar" class="">
		<h4>View your weather!</h4>
		<h6>Enter your zipcode</h6>
		<form method="post" action="<?php echo BASE_URL?>weather/getresults">
				<label for "zip">Enter Your Zip Code</label>
				<input type="text" name="zip" id="zip" required="zip" />
				<br/>
				<button type="submit" class="btn">Load Results</button>
		</form>
	</div>



    <!-- <div class="alert alert-success">
        <?php echo $message;?>
    </div> -->

<!-- RSS Feed for CNN  -->
	<!-- <?php  foreach ($items as $i ) { ?>
	<h4><a href="<?php echo $i->link ?>"><?php echo $i->title ; ?></a> (<?php echo $i->pubDate .")<br>"?></h4>
	<p><?php echo $i->description;?></p><br><hr>

	<?php }?> -->


</div>
<?php include('views/elements/footer.php');?>
