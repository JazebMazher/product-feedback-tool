<?php

namespace Database\Seeders;

use App\Models\Feedback\Feedback;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feedback::factory(100)
            ->create();
    }
}
