<?php

namespace Tests\Feature;

use Auth;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserCreateIsRendering()
    {
        $this->actingAs(factory(User::class)->create());

        $response = $this->get('/user/create');

        $response->assertStatus(200);
    }

    public function testUserCreateIsValidated()
    {
        $response = $this->post('/user/store',[
            'first_name' => 'Admin',
            'last_name' => 'user',
            'email' => 'admin@admin.com',
            'password' => '123456789',

            'company_name' => 'Senburn',
            'role'=>'Stuff Engineer',
            'job_start_date' => '2020-01-01',
            'job_end_date' => '2020-12-31',
            'company_description' => 'Senburn is a multinational company',

            'organization_name' => 'Blockchain Foundation',
            'associated_as'=>'Junior Developer',
            'organization_start_date' =>'1980-01-01',
            'organization_end_date' => '2020-12-31',
            'organization_description' => 'Senburn organization has many company',

        ]);
        $response->assertSessionHasNoErrors();
    }

    public function testUserListIsRendering()
    {
        $this->actingAs(factory(User::class)->create());

        $response = $this->get('/user');

        $response->assertStatus(200);
    }

}
