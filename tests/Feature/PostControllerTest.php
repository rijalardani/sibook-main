<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
  public function testBlog()
  {
    $this->get('/blog')
      ->assertSee('Cake croissant');
  }
}
