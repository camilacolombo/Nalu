<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeModuleTesT extends TestCase
{
	@test 

    function testDelHome()
    {
        $this->get('/home')
        ->assertStatus(200);
        //->asserSee('')
    }
    function testDelPerfil()
    {
    	$this->get('perfil/{id}')
    	->assertStatus(200);
    	//->assertSee()
    }
    function testSubeUser()
    {
    	$this->get()
    }
}
