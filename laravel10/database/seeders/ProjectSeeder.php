<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project_ids = ['AA100', 'AA100', 'AA100', 'B200', 'B200', 'CS300', 'CS300', 'CS300', 'CS300', 'DY400', 'DY400', 'DY400'];
        $step_nbrs = [0, 1, 2, 0, 1, 0, 1, 2, 3, 0, 1, 2];
        $statuses = ['完了', '待機', '待機', '待機', '待機', '完了', '完了', '待機', '待機', '完了', '完了', '完了'];

        for ($i = 0; $i < count($project_ids); $i++) {
            Project::create([
                'project_id' => $project_ids[$i],
                'step_nbr' => $step_nbrs[$i],
                'status' => $statuses[$i],
            ]);
        }
    }
}
