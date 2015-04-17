<?php
class Example {
  public function test() {
  	$text = file_get_contents("http://host1.local");
    return $text;
  }
}
?>
