<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'path' => '/storage/dummy.png',
            'detail' => 'リザルトですリザルトですリザルトですリザルトですリザルトですリザルトですリザルトですリザルトですリザルトですリザルトですリザルトですリザルトですリザルトですリザルトですリザルトですリザルトですリザルトですリザルトです',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
        $param = [
            'user_id' => 1,
            'path' => '/storage/dummy.png',
            'detail' => 'beatmaniaの天空の夜明けbeatmaniaの天空の夜明けbeatmaniaの天空の夜明けbeatmaniaの天空の夜明けbeatmaniaの天空の夜明けbeatmaniaの天空の夜明けbeatmaniaの天空の夜明けbeatmaniaの天空の夜明け',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
        $param = [
            'user_id' => 1,
            'path' => '/storage/dummy.png',
            'detail' => '新曲新曲新曲新曲新曲新曲新曲新曲新曲新曲新曲新曲新曲新曲新曲新曲',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
        $param = [
            'user_id' => 1,
            'path' => '/storage/dummy.png',
            'detail' => 'ハードハードハードハードハード',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
        $param = [
            'user_id' => 4,
            'path' => '/storage/dummy.png',
            'detail' => 'エクハエクハエクハエクハエクハエクハエクハエクハエクハエクハエクハエクハエクハエクハエクハ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
        $param = [
            'user_id' => 1,
            'path' => '/storage/dummy.png',
            'detail' => 'AAAAAAAAAAA',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'user_id' => 3,
            'path' => '/storage/dummy.png',
            'detail' => 'AA出た',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'user_id' => 4,
            'path' => '/storage/dummy.png',
            'detail' => 'AAAでた',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'user_id' => 3,
            'path' => '/storage/dummy.png',
            'detail' => '鳥',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
        
    }
}
