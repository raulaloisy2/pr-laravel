<?php

namespace Database\Seeders;
use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 

class Car_tableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            ['name' => 'Toyota', 'description' => 'Camry', 'year' => 2022],
            ['name' => 'Honda', 'description' => 'Civic', 'year' => 2021],
            ['name' => 'Ford', 'description' => 'Fusion', 'year' => 2020],
            ['name' => 'Chevrolet', 'description' => 'Malibu', 'year' => 2023],
            ['name' => 'Nissan', 'description' => 'Altima', 'year' => 2021],
            ['name' => 'BMW', 'description' => '3 Series', 'year' => 2022],
            ['name' => 'Mercedes-Benz', 'description' => 'C-Class', 'year' => 2020],
            ['name' => 'Audi', 'description' => 'A4', 'year' => 2023],
            ['name' => 'Hyundai', 'description' => 'Sonata', 'year' => 2021],
            ['name' => 'Kia', 'description' => 'Optima', 'year' => 2022],
        ];

        foreach ($cars as $carData) {
            $car = new Car();

            $car->name = $carData['name'];
            $car->description = $carData['description'];
            $car->year = $carData['year'];

            $car->save();
        }
    }
}
