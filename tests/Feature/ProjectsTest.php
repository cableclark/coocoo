<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsTest extends TestCase
{
    use WithFaker, RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_only_authenticated_users_can_make_a_project()

    {

        $attributes = factory('App\Project')->raw();


        $this->post('/projects', $attributes)
        ->assertRedirect('login');

    }

    public function testExample()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(factory('App\User')->create());

        $attributes = [
            'title'=> $this->faker->sentence,
            'description'=> $this->faker->paragraph
        ];

        $this->post('/projects', $attributes);

        $this->assertDatabaseHas('projects', $attributes);

        $this->get('/projects', $attributes)->assertSee($attributes['title']);;

    }

    public function test_a_project_needs_a_title()

    {
        $this->actingAs(factory('App\User')->create());

        $atttributes = factory('App\Project')->raw(['title'=>'']);

        $this->post('/projects', $atttributes)->assertSessionHasErrors('title');

    }

    public function test_a_user_can_view_a_project()

    {
        $this->withoutExceptionHandling();

        $this->actingAs(factory('App\User')->create());

        $project= factory('App\Project')->create();

        $this->get('/projects/', [$project->id])
            ->assertSee($project->title)
            ->assertSee($project->description);

    }


    public function test_a_project_needs_a_description()

    {
        $this->withoutExceptionHandling();

        $attributes = factory('App\Project')->raw(['description'=>'']);

        $this->post('/projects', $attributes)->assertSessionHasErrors('description');

    }



}
