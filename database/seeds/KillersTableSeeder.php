<?php

use Illuminate\Database\Seeder;

class KillersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table_name = "killers";

        // テーブルの初期化
        DB::table($table_name)->truncate();

        $datas = [
            [
                'name' => 'トラッパー',

            ]
        ];

        foreach($datas as $data) {
            \App\Killer::create($data);
        }
    }
}
