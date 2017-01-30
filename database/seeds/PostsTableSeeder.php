<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 3,
            'text' => 'An InfoWindow displays content (usually text or images) in a popup window above the map, at a given location. The info window has a content area and a tapered stem. The tip of the stem is attached to a specified location on the map.

Typically you will ',
                'user_id' => 1,
                'created_at' => '2017-01-01 00:00:00',
                'updated_at' => '2017-01-03 00:00:00',
            ),
            1 => 
            array (
                'id' => 4,
                'text' => 'Cibirix offers smart strategies, cutting-edge technology & futuristic design to win prospects, engage customers & empower employees.',
                'user_id' => 2,
                'created_at' => '2017-01-02 00:00:00',
                'updated_at' => '2017-01-17 00:00:00',
            ),
            2 => 
            array (
                'id' => 5,
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt euismod dui vel egestas. Nunc gravida diam ut dui ornare, non molestie neque convallis. Nullam auctor eros non nisl iaculis, in lobortis eros tristique. In ac semper lectus. Nullam ',
                'user_id' => 1,
                'created_at' => '2017-01-23 13:27:09',
                'updated_at' => '2017-01-23 13:27:09',
            ),
            3 => 
            array (
                'id' => 6,
            'text' => 'Cicero\'s version of Liber Primus (first Book), sections 1.10.32–3 (fragments included in most Lorem Ipsum variants in red):',
                'user_id' => 2,
                'created_at' => '2017-01-23 13:29:26',
                'updated_at' => '2017-01-23 13:29:26',
            ),
            4 => 
            array (
                'id' => 7,
                'text' => 'hiiii',
                'user_id' => 1,
                'created_at' => '2017-01-24 13:02:15',
                'updated_at' => '2017-01-24 13:02:15',
            ),
            5 => 
            array (
                'id' => 8,
                'text' => 'hello Friends!!',
                'user_id' => 1,
                'created_at' => '2017-01-24 13:05:17',
                'updated_at' => '2017-01-24 13:05:17',
            ),
            6 => 
            array (
                'id' => 9,
                'text' => 'new post added by me',
                'user_id' => 1,
                'created_at' => '2017-01-27 10:34:05',
                'updated_at' => '2017-01-27 10:34:05',
            ),
            7 => 
            array (
                'id' => 10,
                'text' => 'new post added by first user - 1',
                'user_id' => 1,
                'created_at' => '2017-01-27 10:35:13',
                'updated_at' => '2017-01-27 10:35:13',
            ),
            8 => 
            array (
                'id' => 11,
                'text' => 'new post added by first user -2',
                'user_id' => 1,
                'created_at' => '2017-01-27 10:35:28',
                'updated_at' => '2017-01-27 10:35:28',
            ),
            9 => 
            array (
                'id' => 12,
                'text' => 'new post added by first user -3',
                'user_id' => 1,
                'created_at' => '2017-01-27 10:36:40',
                'updated_at' => '2017-01-27 10:36:40',
            ),
            10 => 
            array (
                'id' => 13,
                'text' => 'new post',
                'user_id' => 3,
                'created_at' => '2017-01-27 11:50:44',
                'updated_at' => '2017-01-27 11:50:44',
            ),
            11 => 
            array (
                'id' => 14,
                'text' => 'Hi',
                'user_id' => 2,
                'created_at' => '2017-01-30 06:27:56',
                'updated_at' => '2017-01-30 06:27:56',
            ),
            12 => 
            array (
                'id' => 15,
                'text' => 'testing',
                'user_id' => 2,
                'created_at' => '2017-01-30 06:56:41',
                'updated_at' => '2017-01-30 06:56:41',
            ),
        ));
        
        
    }
}