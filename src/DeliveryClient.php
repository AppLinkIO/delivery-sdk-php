<?php 
namespace AppLinkIO\Delivery;


class DeliveryClient {
    private $sdkVersion = '0.0.1';

    public function __construct($token = null) {

    } 

    public function getContentItems($params = null) {
      
      return "getContentItems";
    } 

    public function getContentItem($item_id, $params = null) {
      
      return "getContentItem";
    }

    public function getAssets($params = null) {
      
      return "getContentItems";
    }

    public function getAsset($asset_id, $params = null) {
      
      return "getAsset";
    }

}