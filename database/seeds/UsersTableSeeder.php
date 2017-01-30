<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'John Smith',
                'user_name' => 'john',
                'email' => 'john@gmail.com',
                'password' => '$2y$10$lKCt0epApm9U8LSYlL01ie5WhKe2anH3Jc7HSuTNfV2Rz.VYXYnRS',
                'api_token' => 'DPZfAbJ2rjohKHLwVnoVItz6Y4XnznxqQDCZrP0jOTXvAK38tKyMaLkWa8jf',
                'remember_token' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Jay lara',
                'user_name' => 'jay',
                'email' => 'jay@gmail.com',
                'password' => '$2y$10$lKCt0epApm9U8LSYlL01ie5WhKe2anH3Jc7HSuTNfV2Rz.VYXYnRS',
                'api_token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9',
                'remember_token' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Albert',
                'user_name' => 'albert',
                'email' => 'albert@gmail.com',
                'password' => '$2y$10$lKCt0epApm9U8LSYlL01ie5WhKe2anH3Jc7HSuTNfV2Rz.VYXYnRS',
                'api_token' => 'yRQYnWzskCZUxPwaQupWkiUzKELZ49eM7oWxAQK_ZXw',
                'remember_token' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'test user',
                'user_name' => 'test',
                'email' => 'test@gmail.com',
                'password' => '$2y$10$lKCt0epApm9U8LSYlL01ie5WhKe2anH3Jc7HSuTNfV2Rz.VYXYnRS',
                'api_token' => '',
                'remember_token' => '',
            ),
        ));
        
        
    }
}