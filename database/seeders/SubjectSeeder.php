<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $subjects[] = [
            'name' => 'Redes de computadores',
        ];

        $subjects[] = [
            'name' => 'Estrutura de dados'
        ];

        foreach ($subjects as $subject) {
            Subject::create([
                'name' => $subject['name'],
            ]);
        }
    }
}
