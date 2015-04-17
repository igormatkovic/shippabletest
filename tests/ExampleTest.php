<?php
require_once('Example.php');

class ExampleTest extends PHPUnit_Framework_TestCase {
    public function testExamplee() {
        $exmp = new Example();
        echo $exmp->test2();

        $this->assertTrue(true, true);

    }
    public function testExample() {
        $exmp = new Example();

        echo $exmp->test();
        $this->assertEquals(strpos($exmp->test(), 'h') == 1, true, $exmp->test());
    }
}
?>
