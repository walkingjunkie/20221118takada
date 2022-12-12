<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('Todos')->insert([
    "name"=>"test",
    "created_at" => timestamp(),
    "updated_at" => timestamp(),
]);
    }
}
