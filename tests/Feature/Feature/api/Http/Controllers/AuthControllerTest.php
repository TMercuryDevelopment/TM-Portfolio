<?php

use PHPUnit\Framework\TestCase;

class AuthControllerTest extends TestCase
{

    public function createApplication()
    {
        return require './bootstrap/app.php';
    }

    public function setUp(): void
    {
        parent::setUp();
    }

}
