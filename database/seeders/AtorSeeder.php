<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('atores')->insert(
            [
                ['nome'=>"Wagner Moura", 'descricao'=>"Ator Brasileiro", 'nacionalidade_id'=>1],
                ['nome'=>"Leonardo DiCaprio", 'descricao'=>"Ator Estadunidense", 'nacionalidade_id'=>2]
            ]
            );
    }
}
