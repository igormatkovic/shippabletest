<?php
require_once('Example.php');

class ExampleTest extends PHPUnit_Framework_TestCase {
    public function testExamplee() {
        $exmp = new Example();
        fwrite(STDERR,  $exmp->la());
        $this->assertEquals('burel',  $exmp->ola(), $exmp->la());

    }
    public function testExample() {
        $exmp = new Example();
        fwrite(STDERR,  $exmp->ola());
        $this->assertEquals('burel',  $exmp->ola(), $exmp->ola());

    }
}
?>
