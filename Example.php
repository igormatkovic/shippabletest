<?php
class Example {
  public function test() {
  	$text = file_get_contents("http://host1.local");
    return $text;
  }
  public function test2() {
  	$text = file_get_contents("http://localhost");
    return $text;
  }
}
?>
