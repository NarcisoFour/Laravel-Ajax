<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductoTableSeeder extends Seeder
{
    public function run()
    {
        factory(Producto::class, 50)->create();
    }
}
