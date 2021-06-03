<?php

use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run()
    {
        factory(Guest::class, 10) -> create();
    }
