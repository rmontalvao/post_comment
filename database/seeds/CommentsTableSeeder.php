<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => 'Hi how r u?',
                'post_id' => 3,
                'user_id' => 2,
                'created_at' => '2017-01-23 12:42:51',
                'updated_at' => '2017-01-23 12:42:51',
            ),
            1 => 
            array (
                'id' => 2,
                'text' => 'thh oityrtyutyu',
                'post_id' => 4,
                'user_id' => 1,
                'created_at' => '2017-01-23 12:43:17',
                'updated_at' => '2017-01-23 12:43:17',
            ),
            2 => 
            array (
                'id' => 3,
                'text' => 'I am good, how r u?',
                'post_id' => 3,
                'user_id' => 1,
                'created_at' => '2017-01-24 13:47:34',
                'updated_at' => '2017-01-24 13:47:34',
            ),
            3 => 
            array (
                'id' => 4,
                'text' => 'ghfghjfghj',
                'post_id' => 4,
                'user_id' => 1,
                'created_at' => '2017-01-24 13:49:37',
                'updated_at' => '2017-01-24 13:49:37',
            ),
            4 => 
            array (
                'id' => 5,
                'text' => 'Hello All!!!!',
                'post_id' => 8,
                'user_id' => 1,
                'created_at' => '2017-01-24 13:57:38',
                'updated_at' => '2017-01-24 13:57:38',
            ),
            5 => 
            array (
                'id' => 6,
                'text' => 'new comment',
                'post_id' => 3,
                'user_id' => 1,
                'created_at' => '2017-01-27 10:44:52',
                'updated_at' => '2017-01-27 10:44:52',
            ),
            6 => 
            array (
                'id' => 7,
                'text' => 'new comment by first user',
                'post_id' => 5,
                'user_id' => 1,
                'created_at' => '2017-01-27 10:45:09',
                'updated_at' => '2017-01-27 10:45:09',
            ),
            7 => 
            array (
                'id' => 8,
                'text' => 'comment on post 6',
                'post_id' => 6,
                'user_id' => 1,
                'created_at' => '2017-01-27 10:45:26',
                'updated_at' => '2017-01-27 10:45:26',
            ),
            8 => 
            array (
                'id' => 9,
                'text' => 'asd sa',
                'post_id' => 3,
                'user_id' => 1,
                'created_at' => '2017-01-27 10:58:09',
                'updated_at' => '2017-01-27 10:58:09',
            ),
            9 => 
            array (
                'id' => 10,
            'text' => 'hello everyone :)',
            'post_id' => 3,
            'user_id' => 3,
            'created_at' => '2017-01-27 11:12:52',
            'updated_at' => '2017-01-27 11:12:52',
        ),
        10 => 
        array (
            'id' => 11,
            'text' => 'fgjfkdgsfgsf',
            'post_id' => 4,
            'user_id' => 3,
            'created_at' => '2017-01-27 11:13:00',
            'updated_at' => '2017-01-27 11:13:00',
        ),
        11 => 
        array (
            'id' => 12,
            'text' => 'thanks ....',
            'post_id' => 4,
            'user_id' => 3,
            'created_at' => '2017-01-27 11:13:09',
            'updated_at' => '2017-01-27 11:13:09',
        ),
        12 => 
        array (
            'id' => 13,
            'text' => 'new comment by third user - albert@gmail.com',
            'post_id' => 5,
            'user_id' => 3,
            'created_at' => '2017-01-27 11:13:30',
            'updated_at' => '2017-01-27 11:13:30',
        ),
        13 => 
        array (
            'id' => 14,
            'text' => 'comment on post 6 by another user',
            'post_id' => 6,
            'user_id' => 3,
            'created_at' => '2017-01-27 11:13:49',
            'updated_at' => '2017-01-27 11:13:49',
        ),
        14 => 
        array (
            'id' => 15,
            'text' => 'hellooooooo',
            'post_id' => 7,
            'user_id' => 3,
            'created_at' => '2017-01-27 11:13:59',
            'updated_at' => '2017-01-27 11:13:59',
        ),
        15 => 
        array (
            'id' => 16,
            'text' => 'Hi, what\'s up',
            'post_id' => 8,
            'user_id' => 3,
            'created_at' => '2017-01-27 11:14:21',
            'updated_at' => '2017-01-27 11:14:21',
        ),
        16 => 
        array (
            'id' => 17,
            'text' => 'testing comment',
            'post_id' => 12,
            'user_id' => 3,
            'created_at' => '2017-01-27 11:14:31',
            'updated_at' => '2017-01-27 11:14:31',
        ),
        17 => 
        array (
            'id' => 18,
            'text' => 'new comment',
            'post_id' => 13,
            'user_id' => 3,
            'created_at' => '2017-01-27 11:50:53',
            'updated_at' => '2017-01-27 11:50:53',
        ),
        18 => 
        array (
            'id' => 19,
            'text' => 'testing comment',
            'post_id' => 15,
            'user_id' => 2,
            'created_at' => '2017-01-30 06:56:52',
            'updated_at' => '2017-01-30 06:56:52',
        ),
    ));
        
        
    }
}