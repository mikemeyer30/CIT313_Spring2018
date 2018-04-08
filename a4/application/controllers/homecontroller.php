<?php

class HomeController extends Controller{

	public function index(){

		$feed = "http://rss.cnn.com/rss/edition.rss";
		$rss = new RssDisplay($feed);

		$feed_items = $rss->getFeedItems(8);
		$channel_data = $rss->getChannelInfo();
		$channel_title = $channel_data->title;


		$this->set('items', $feed_items);
		$this->set('rss_title', $channel_title);






	}

}

?>
