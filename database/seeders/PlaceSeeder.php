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
        // Ejemplo rancho 1
        $place1 = new Place();
        $place1->owner_id = '1';
        $place1->place_name = 'Rancho Risueño del monte';
        $place1->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, temporibus, voluptas esse ipsum totam nobis delectus iusto consequatur optio placeat deserunt earum eligendi modi obcaecati eaque quidem at harum qui.";
        $place1->location = "Santa Ana";
        $place1->price = 40.20;
        $place1->img = "example-place.jpg";
        $place1->availability = 1;
        $place1->save();

        // Ejemplo rancho 2
        $place2 = new Place();
        $place2->owner_id = '2';
        $place2->place_name = 'Rancho del gran Perú';
        $place2->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, temporibus, voluptas esse ipsum totam nobis delectus iusto consequatur optio placeat deserunt earum eligendi modi obcaecati eaque quidem at harum qui.";
        $place2->location = "Usulután";
        $place2->price = 30.20;
        $place2->img = "example-place.jpg";
        $place2->availability = 1;
        $place2->save();

        // Ejemplo rancho 3
        $place3 = new Place();
        $place3->owner_id = '1';
        $place3->place_name = 'Rancho Vista al Mar';
        $place3->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, temporibus, voluptas esse ipsum totam nobis delectus iusto consequatur optio placeat deserunt earum eligendi modi obcaecati eaque quidem at harum qui.";
        $place3->location = "San Salvador";
        $place3->price = 25.50;
        $place3->img = "example-place2.jpg";
        $place3->availability = 1;
        $place3->save();

        // Ejemplo rancho 4
        $place4 = new Place();
        $place4->owner_id = '2';
        $place4->place_name = 'Rancho Charizard';
        $place4->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, temporibus, voluptas esse ipsum totam nobis delectus iusto consequatur optio placeat deserunt earum eligendi modi obcaecati eaque quidem at harum qui.";
        $place4->location = "La Libertad";
        $place4->price = 70.50;
        $place4->img = "example-place2.jpg";
        $place4->availability = 1;
        $place4->save();

        // Ejemplo rancho 5
        $place5 = new Place();
        $place5->owner_id = '5';
        $place5->place_name = 'Playa el Pig';
        $place5->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, temporibus, voluptas esse ipsum totam nobis delectus iusto consequatur optio placeat deserunt earum eligendi modi obcaecati eaque quidem at harum qui.";
        $place5->location = "San Miguel";
        $place5->price = 43.50;
        $place5->img = "example-place3.jpg";
        $place5->availability = 1;
        $place5->save();

        // Ejemplo rancho 6
        $place6 = new Place();
        $place6->owner_id = '5';
        $place6->place_name = 'Rancho Belle Vie';
        $place6->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, temporibus, voluptas esse ipsum totam nobis delectus iusto consequatur optio placeat deserunt earum eligendi modi obcaecati eaque quidem at harum qui.";
        $place6->location = "San Miguel";
        $place6->price = 43.50;
        $place6->img = "example-place4.jpg";
        $place6->availability = 1;
        $place6->save();

        // Ejemplo rancho 7
        $place7 = new Place();
        $place7->owner_id = '5';
        $place7->place_name = 'Rancho San Fierro';
        $place7->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, temporibus, voluptas esse ipsum totam nobis delectus iusto consequatur optio placeat deserunt earum eligendi modi obcaecati eaque quidem at harum qui.";
        $place7->location = "Sonsonate";
        $place7->price = 43.50;
        $place7->img = "example-place4.jpg";
        $place7->availability = 1;
        $place7->save();

    }
}
