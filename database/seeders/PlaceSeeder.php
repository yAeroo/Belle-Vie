<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $place1 = new Place();
        $place1->owner_id = '1';
        $place1->place_name = 'Rancho Risueño del monte';
        $place1->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, temporibus, voluptas esse ipsum totam nobis delectus iusto consequatur optio placeat deserunt earum eligendi modi obcaecati eaque quidem at harum qui.";
        $place1->location = "El Congo, Santa Ana";
        $place1->price = 40.20;
        $place1->img = "example-place.jpg";
        $place1->availability = 1;
        $place1->save();

        $place2 = new Place();
        $place2->owner_id = '2';
        $place2->place_name = 'Rancho del gran Perú';
        $place2->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, temporibus, voluptas esse ipsum totam nobis delectus iusto consequatur optio placeat deserunt earum eligendi modi obcaecati eaque quidem at harum qui.";
        $place2->location = "Alegría, Usulután";
        $place2->price = 30.20;
        $place2->img = "example-place.jpg";
        $place2->availability = 1;
        $place2->save();

    }
}
