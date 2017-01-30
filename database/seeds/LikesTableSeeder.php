<?php

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('likes')->delete();
        
        \DB::table('likes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'post_id' => 3,
                'user_id' => 3,
                'liked' => 1,
                'disliked' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'post_id' => 4,
                'user_id' => 3,
                'liked' => 0,
                'disliked' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'post_id' => 6,
                'user_id' => 1,
                'liked' => 0,
                'disliked' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'post_id' => 6,
                'user_id' => 3,
                'liked' => 1,
                'disliked' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'post_id' => 7,
                'user_id' => 2,
                'liked' => 1,
                'disliked' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'post_id' => 8,
                'user_id' => 2,
                'liked' => 0,
                'disliked' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'post_id' => 5,
                'user_id' => 1,
                'liked' => 1,
                'disliked' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'post_id' => 9,
                'user_id' => 1,
                'liked' => 0,
                'disliked' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'post_id' => 13,
                'user_id' => 1,
                'liked' => 0,
                'disliked' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'post_id' => 12,
                'user_id' => 1,
                'liked' => 1,
                'disliked' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'post_id' => 3,
                'user_id' => 1,
                'liked' => 1,
                'disliked' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'post_id' => 4,
                'user_id' => 1,
                'liked' => 1,
                'disliked' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'post_id' => 8,
                'user_id' => 1,
                'liked' => 1,
                'disliked' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'post_id' => 11,
                'user_id' => 1,
                'liked' => 0,
                'disliked' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'post_id' => 4,
                'user_id' => 2,
                'liked' => 0,
                'disliked' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'post_id' => 6,
                'user_id' => 2,
                'liked' => 1,
                'disliked' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'post_id' => 13,
                'user_id' => 2,
                'liked' => 0,
                'disliked' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'post_id' => 12,
                'user_id' => 2,
                'liked' => 1,
                'disliked' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'post_id' => 11,
                'user_id' => 2,
                'liked' => 0,
                'disliked' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'post_id' => 10,
                'user_id' => 2,
                'liked' => 1,
                'disliked' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'post_id' => 9,
                'user_id' => 2,
                'liked' => 0,
                'disliked' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'post_id' => 5,
                'user_id' => 2,
                'liked' => 1,
                'disliked' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'post_id' => 3,
                'user_id' => 2,
                'liked' => 1,
                'disliked' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'post_id' => 14,
                'user_id' => 2,
                'liked' => 1,
                'disliked' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'post_id' => 15,
                'user_id' => 2,
                'liked' => 1,
                'disliked' => 0,
            ),
        ));
        
        
    }
}