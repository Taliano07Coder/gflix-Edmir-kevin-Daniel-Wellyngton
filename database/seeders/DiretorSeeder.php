<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiretorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diretores')->insert(
            [
                ['nome'=>"Andrew Adamson",'foto'=>"",'descricao'=>"",'nascimento'=>"1996-12-01",'nacionalidade_id'=>3],
            ]
        );
    }
}