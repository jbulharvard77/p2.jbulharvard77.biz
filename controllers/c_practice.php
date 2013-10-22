<?php
class practice_controller extends base_controller{
  public function test1(){
    require(APP_PATH.'/libraries/image.php');
    $imgObj = new Image(APP_PATH.'/images/1000.jpeg');
       $imgObj->resize(200, 200);
    $imgObj->display();
  }
}
?>