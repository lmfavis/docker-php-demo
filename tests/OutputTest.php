<?php

use PHPUnit\Framework\TestCase;
require './src/index.php';

class OutputTest extends TestCase
{
    public function testOutput() {
        $expected = "Hello, World from Docker! <br>";
        $output = getOutput();
        $this->assertEquals($expected, $output);
    }
}
