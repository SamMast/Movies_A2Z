<?php

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
       {
         //delete movie_list table records
         DB::table('movie_list')->delete();
         //insert some dummy movie records
         DB::table('movie_list')->insert(array(
             array('title'=>'Step Brothers','year'=>'2008'),
             array('title'=>'Black Hawk Down','year'=>'2002'),
             array('title'=>'Dumb and Dumber','year'=>'1994'),
             array('title'=>'The Last of the Mohicans','year'=>'1992'),
             array('title'=>'The Godfather','year'=>'1972')
          ));
       }
    }
}
