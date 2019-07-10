<?php

use Illuminate\Database\Seeder;

class Kk_kakugensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) {
            DB::table('kk_kakugens')->insert([
                'kakugen_person' => 'フェデリコ・フェリーニ ',
                'kakugen_naiyo' => 'もう終わりだと思うのも、さあ始まりだと思うのも、どちらも自分だ'
            ]);
        }
    }
    
}
