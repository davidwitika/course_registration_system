<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Course;
class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        $users->each(function ($user){

            $course = factory(Course::class)->make();
             $user->courses()->save($course);

        });

    }
}
