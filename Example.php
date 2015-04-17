<?php
class Example {
  public function la() {
  	$text = file_get_contents("http://laundrapp.dev");
    return $text;
  }
  public function ola() {
  	$text = file_get_contents("http://order.laundrapp.dev");
    return $text;
  }
}
?>
