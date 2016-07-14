<?php
    
pylon_include_sdk("/home/q/php/sdk_base", "sdk_base.php");

class SendTC extends PHPUnit_Framework_TestCase
{
   public function __construct() 
   {
       $this->client = LocalHttpClient::ins();
   }

   public function test_send()
   {
       $id     = "1459130224358923";
       $sign   = DataGenter::getSign1();

       $content = "";
//       $arr = array(0xB1, 0x8A, 0xB6, 0x8A, 0x5f, 0xd5, 0x66, 0xf9, 0x28, 0x56, 0x4f, 0x10, 0x22, 0x5a, 0x69, 0x53, 0x90, 0x16, 0xea, 0x0e);
//       $arr = array(0x01, 0x8a, 0xb0, 0x8a, 0x4c, 0x52, 0x5c, 0xb6, 0x8a, 0x0c, 0x22, 0x38, 0x4e, 0x5b, 0xb1, 0x8a, 0x2e, 0xb0, 0x17, 0x0a, 0x4c, 0x50, 0x49, 0xb0, 0x8a, 0xb1, 0xa6, 0x28, 0x64, 0x32, 0x0c, 0xb5, 0xa6, 0x0b, 0x74, 0x17, 0x3c, 0x1e, 0xa6, 0x32, 0xa6, 0xb0, 0xa6, 0xb0, 0xa6, 0x0e, 0x3b, 0x1e, 0x50, 0x50, 0x8d, 0x50, 0x87, 0xd6, 0x21, 0x30, 0x0d, 0x6b, 0x19, 0xe9, 0x30, 0x0b, 0x65, 0x64, 0x42, 0xa8); 
       $arr = array(0xb2, 0x8a, 0xb0, 0x8a, 0x4c, 0x52, 0x5c, 0xb6, 0x8a, 0x0c, 0x22, 0x38, 0x4e, 0x5b, 0xb1, 0x8a, 0x2e, 0xb0, 0x45, 0xb0, 0x0a, 0x0f, 0x2f, 0xb0, 0x8a, 0xb3, 0xa6, 0x2e, 0xb0, 0xa6, 0xb1, 0xa6, 0x2b, 0x16, 0xfc, 0x2b, 0x16, 0xfc, 0x2b, 0x16, 0xa6, 0x1a, 0x25, 0xb3, 0xfc, 0x0a, 0x14, 0xb8, 0xfc, 0x0c, 0x32, 0xb1, 0xa6, 0x31, 0xfc, 0x54, 0xfc, 0x12, 0xa6, 0x32, 0xa6, 0xb0, 0xa6, 0xb0, 0xa6, 0x15, 0x2f, 0x8a, 0xb3, 0xa6, 0x2e, 0xb0, 0xa6, 0xb1, 0xa6, 0x2b, 0x16, 0xfc, 0x2b, 0x16, 0xfc, 0x2b, 0x16, 0xa6, 0x1a, 0x25, 0xb3, 0xfc, 0x0a, 0x14, 0xb8, 0xfc, 0x0c, 0x32, 0xb1, 0xa6, 0x31, 0xfc, 0x54, 0xfc, 0x12, 0xa6, 0x32, 0xa6, 0xb0, 0xa6, 0xb0, 0xa6, 0x15, 0x39, 0x8a, 0xb3, 0xa6, 0x2e, 0xb0, 0xa6, 0xb1, 0xa6, 0x2b, 0x16, 0xfc, 0x2b, 0x16, 0xfc, 0x2b, 0x16, 0xa6, 0x1a, 0x25, 0xb3, 0xfc, 0x0a, 0x14, 0xb8, 0xfc, 0x0c, 0x32, 0xb1, 0xa6, 0x31, 0xfc, 0x54, 0xfc, 0x12, 0xa6, 0x32, 0xa6, 0xb0, 0xa6, 0xb0, 0xa6, 0x15, 0x43, 0x8a, 0xb3, 0xa6, 0x2e, 0xb0, 0xa6, 0xb1, 0xa6, 0x2b, 0x16, 0xfc, 0x2b, 0x16, 0xfc, 0x2b, 0x16, 0xa6, 0x1a,0x25, 0xb3, 0xfc, 0x0a, 0x14, 0xb8, 0xfc, 0x0c, 0x32, 0xb1, 0xa6, 0x31, 0xfc, 0x54, 0xfc, 0x12, 0xa6, 0x32, 0xa6, 0xb0, 0xa6, 0xb0, 0xa6, 0x15, 0x4d, 0x8a, 0xb3, 0xa6, 0x2e, 0xb0, 0xa6, 0xb1, 0xa6, 0x2b, 0x16, 0xfc, 0x2b, 0x16, 0xfc, 0x2b, 0x16, 0xa6, 0x1a, 0x25, 0xb3, 0xfc, 0x0a, 0x14, 0xb8, 0xfc, 0x0c, 0x32, 0xb1, 0xa6, 0x31, 0xfc, 0x54, 0xfc, 0x12, 0xa6, 0x32, 0xa6, 0xb0, 0xa6, 0xb0, 0xa6, 0x15, 0x57,0x8a, 0x2f, 0xc5, 0x1b, 0x59, 0x5b, 0xcb, 0x32, 0xea, 0x6a, 0xa2, 0x64, 0xb5, 0x44, 0xd0, 0x42);
       foreach($arr as $v) {
           $content .= chr($v);
       }

       $result = $this->client->postStream("/s", array(
            "id" => $id
       ), $content);

       var_dump($result);
       $result = $result->toArray();
       $this->assertTrue($result['rb'] == 1);
   } 
}