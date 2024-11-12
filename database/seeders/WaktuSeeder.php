<?php

namespace Database\Seeders;

use App\Models\Waktu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WaktuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Waktu::insert([
            [
                'waktu' => '06:00:00',
            ],
            [
                'waktu' => '07:00:00',
            ],
            [
                'waktu' => '08:00:00',
            ],
            [
                'waktu' => '09:00:00',
            ],
            [
                'waktu' => '10:00:00',
            ],
            [
                'waktu' => '11:00:00',
            ],
            [
                'waktu' => '12:00:00',
            ],
            [
                'waktu' => '13:00:00',
            ],
            [
                'waktu' => '14:00:00',
            ],
            [
                'waktu' => '15:00:00',
            ],
            [
                'waktu' => '16:00:00',
            ],
            [
                'waktu' => '17:00:00',
            ],
            [
                'waktu' => '18:00:00',
            ],
            [
                'waktu' => '19:00:00',
            ],
            [
                'waktu' => '20:00:00',
            ],
            [
                'waktu' => '21:00:00',
            ],
            [
                'waktu' => '22:00:00',
            ],
            [
                'waktu' => '23:00:00',
            ],
            [
                'waktu' => '24:00:00',
            ]
        ]);
    }
}
