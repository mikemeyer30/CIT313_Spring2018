<?php
class RssDisplay extends Model {

    protected $feed_url;
    protected $num_feed_items;

    public function __construct($url){
      parent::__construct();

      $this->feed_url = $url;
    }

    public function getFeedItems($num_feed_items) {
      $xml = simplexml_load_file($this->feed_url);

      $items = array();
      for ($i=0; $i < $num_feed_items; $i++) {
        $items[$i] = $xml->channel->item[$i];
      }

      return $items;


    }

    public function getChannelInfo() {
      $xml = simplexml_load_file($this->feed_url);
      $channel_info = $xml->channel;

      return $channel_info;
    }

}
