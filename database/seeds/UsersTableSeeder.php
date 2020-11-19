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
        
        $param = [
            'name' => 'トノサマン',
            'username' => 'tonosaman',
            'email' => 'info5@gmail.com',
            'password' => 'kkkkkkkk',
            'detail' => '大江戸戦士トノサマン！大江戸戦士トノサマン！大江戸戦士トノサマン！大江戸戦士トノサマン！大江戸戦士トノサマン！大江戸戦士トノサマン！大江戸戦士トノサマン！大江戸戦士トノサマン！大江戸戦士トノサマン！大江戸戦士トノサマン！大江戸戦士トノサマン！大江戸戦士トノサマン！',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'ヒメサマン',
            'username' => 'himesaman',
            'email' => 'info6@gmail.com',
            'password' => 'kkkkkkkk',
            'detail' => '大江戸戦士ヒメサマン！大江戸戦士ヒメサマン！大江戸戦士ヒメサマン！',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'あいが',
            'username' => 'aiga',
            'email' => 'info7@gmail.com',
            'password' => 'kkkkkkkk',
            'detail' => '哀れなピエロでござあああああああああああああああああああいい・・・・・・・・・・・・・・・・・・・・・・',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'アイガ',
            'username' => 'aiga2',
            'email' => 'info8@gmail.com',
            'password' => 'kkkkkkkk',
            'detail' => 'beatmania好きですbeatmania好きですbeatmania好きですbeatmania好きですbeatmania好きですbeatmania好きですbeatmania好きですbeatmania好きですbeatmania好きですbeatmania好きです',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'リュウ',
            'username' => 'ryuuichi',
            'email' => 'info9@gmail.com',
            'password' => 'kkkkkkkk',
            'detail' => '弐寺好きです弐寺好きです弐寺好きです弐寺好きです弐寺好きです弐寺好きです弐寺好きです弐寺好きです弐寺好きです弐寺好きです弐寺好きです弐寺好きです弐寺好きです弐寺好きです',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => '成歩堂龍一',
            'username' => 'naruhodo',
            'email' => 'info10@gmail.com',
            'password' => 'kkkkkkkk',
            'detail' => 'popn好きですpopn好きですpopn好きですpopn好きですpopn好きですpopn好きですpopn好きですpopn好きですpopn好きですpopn好きですpopn好きですpopn好きです',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'セリカ',
            'username' => 'serika',
            'email' => 'info11@gmail.com',
            'password' => 'kkkkkkkk',
            'detail' => 'ポップン好きですポップン好きですポップン好きですポップン好きですポップン好きですポップン好きですポップン好きですポップン好きですポップン好きですポップン好きです',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'エリカ',
            'username' => 'erika',
            'email' => 'info12@gmail.com',
            'password' => 'kkkkkkkk',
            'detail' => 'ボルテ好きですボルテ好きですボルテ好きですボルテ好きですボルテ好きですボルテ好きですボルテ好きですボルテ好きですボルテ好きですボルテ好きですボルテ好きですボルテ好きですボルテ好きです',
        ];
        // DB::table('users')->insert($param);
        // $param = [
        //     'name' => '御剣怜侍',
        //     'email' => 'info13@gmail.com',
        //     'password' => 'kkkkkkkk',
        // ];
        // DB::table('users')->insert($param);
        // $param = [
        //     'name' => '綾里春美',
        //     'email' => 'info14@gmail.com',
        //     'password' => 'kkkkkkkk',
        // ];
        // DB::table('users')->insert($param);
        // $param = [
        //     'name' => '綾里真宵',
        //     'email' => 'info15@gmail.com',
        //     'password' => 'DDR',
        // ];
        // DB::table('users')->insert($param);
        // $param = [
        //     'name' => 'オバチャン',
        //     'email' => 'info16@gmail.com',
        //     'password' => 'kkkkkkkk',
        // ];
        // DB::table('users')->insert($param);
        // $param = [
        //     'name' => '大場薫',
        //     'email' => 'info17@gmail.com',
        //     'password' => 'kkkkkkkk',
        // ];
        // DB::table('users')->insert($param);
        // $param = [
        //     'name' => 'ゴドー',
        //     'email' => 'info18@gmail.com',
        //     'password' => 'kkkkkkkk',
        // ];
        // DB::table('users')->insert($param);
        // $param = [
        //     'name' => '矢張政志',
        //     'email' => 'info19@gmail.com',
        //     'password' => 'kkkkkkkk',
        // ];
        // DB::table('users')->insert($param);
        // $param = [
        //     'name' => '王泥喜法介',
        //     'email' => 'info20@gmail.com',
        //     'password' => 'kkkkkkkk',
        // ];
        // DB::table('users')->insert($param);
        // $param = [
        //     'name' => '綾里千尋',
        //     'email' => 'info21@gmail.com',
        //     'password' => 'kkkkkkkk',
        // ];
        // DB::table('users')->insert($param);
        // $param = [
        //     'name' => '王都楼真悟',
        //     'email' => 'info22@gmail.com',
        //     'password' => 'kkkkkkkk',
        // ];
        // DB::table('users')->insert($param);
        // $param = [
        //     'name' => '虎狼死家左々右エ門',
        //     'email' => 'info23@gmail.com',
        //     'password' => 'kkkkkkkk',
        // ];
        // DB::table('users')->insert($param);
        // $param = [
        //     'name' => '内藤馬乃介',
        //     'email' => 'info24@gmail.com',
        //     'password' => 'kkkkkkkk',
        // ];
        // DB::table('users')->insert($param);
        // $param = [
        //     'name' => '猿代草太',
        //     'email' => 'info25@gmail.com',
        //     'password' => 'kkkkkkkk',
        // ];
        // DB::table('users')->insert($param);
        // $param = [
        //     'name' => '風見豊',
        //     'email' => 'info26@gmail.com',
        //     'password' => 'kkkkkkkk',
        // ];
        // DB::table('users')->insert($param);
        // $param = [
        //     'name' => '氷堂伊作',
        //     'email' => 'info27@gmail.com',
        //     'password' => 'kkkkkkkk',
        // ];
        // DB::table('users')->insert($param);
    }
}
