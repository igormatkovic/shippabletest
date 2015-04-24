<?php
require_once('Example.php');

class ExampleTest extends PHPUnit_Framework_TestCase {
    public function testExamplee() {
        $exmp = new Example();

        $file = 'testing.txt';
        $current = file_get_contents($file);
        $current .= $exmp->la()."\n";
        file_put_contents($file, $current);

        $this->assertEquals('burel',  $exmp->ola(), $exmp->la());

    }
    public function testExample() {
        $exmp = new Example();

        $file = 'testing.txt';
        $current = file_get_contents($file);
        $current .= $exmp->ola()."\n";
        file_put_contents($file, $current);
        $this->assertEquals('burel',  $exmp->ola(), $exmp->ola());
    }
}
?>
