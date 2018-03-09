<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest() {
        $this->assertTrue(1 == 1);
    }

    public function testFancyTest() {
        $_this = true;
        $_that = true;
        $this->assertTrue($_this == $_that);
    }

    public function testFailingTest() {
        $_this = true;
        $_that = false;
        /* $this->assertTrue($this == $that); */
    }
}
