<?php

use App\Actions\UserStoreAction;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
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

            ],
        ];

        foreach ($users as $user) {
            UserStoreAction::execute($user);
        }
    }
}
