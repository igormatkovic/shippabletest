<?php
require_once('Example.php');

class ExampleTest extends PHPUnit_Framework_TestCase {
    public function testExamplee() {
        $exmp = new Example();
        $this->assertEquals('burel', 'neee', $exmp->la());

    }
    public function testExample() {
        $exmp = new Example();
        $this->assertEquals('burel', 'neee', $exmp->ola());
    }
}
?>
