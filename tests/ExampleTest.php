<?php
require_once('Example.php');
class ExampleTest extends PHPUnit_Framework_TestCase {
  public function testExample() {
  	$exmp = new Example();
    $this->assertEquals(strpos($exmp->test(), 'h') == 1, true);
  }
}
?>
