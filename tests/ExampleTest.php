<?php
require_once('Example.php');

class ExampleTest extends PHPUnit_Framework_TestCase {
    public function testExamplee() {
        $exmp = new Example();
        fwrite(STDERR,  $exmp->la());

        $myfile = fopen("testfile.txt", "w");
        fwrite($myfile, $exmp->la().' '.$exmp->ola());
        fclose($myfile);


        $this->assertEquals('burel',  $exmp->ola(), $exmp->la());

    }
    public function testExample() {
        $exmp = new Example();
        fwrite(STDERR,  $exmp->ola());
        $this->assertEquals('burel',  $exmp->ola(), $exmp->ola());
    }
}
?>
