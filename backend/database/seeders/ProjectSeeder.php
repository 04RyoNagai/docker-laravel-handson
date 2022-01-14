<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectTable = DB::table('projects');
        $carbonNow = \Carbon\Carbon::now();
        $projects = [
            'title' => 'test',
            'status' => 'open',
            'description' => 'test project.',
            'deleted_at' => null,
            'created_at' => $carbonNow,
            'updated_at' => $carbonNow,
        ];
        $projectTable->insert($projects);
    }
}
