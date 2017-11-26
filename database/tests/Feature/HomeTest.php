<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{	
	//@test
	
	function HomeTest()
    {
        $this->assertStatus(200);
    }
}
