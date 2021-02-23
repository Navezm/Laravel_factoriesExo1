<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buildings')->insert(
            [
                [
                    'name' => 'Molengeek',
                    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus et consequatur provident, hic neque, totam officiis quisquam cumque minus itaque ratione labore dolorem fuga incidunt saepe magnam obcaecati repellat cum velit beatae officia vel? Similique culpa non vero obcaecati repellat odio facilis, facere eligendi vel veritatis deleniti architecto fugiat ut quis quaerat totam! Natus, voluptatibus, ex, deserunt obcaecati tempora voluptatem corrupti a porro aliquam unde mollitia omnis iure ea consectetur dolores nisi rem tempore repudiandae nemo rerum veritatis. Placeat sunt adipisci dolorum suscipit enim incidunt debitis reiciendis illum temporibus fugiat, esse non eum maiores nihil atque maxime fuga voluptatibus porro?'
                ]
            ]
        );
    }
}
