<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Oscar Castellanos',
            'email' => 'castellanos@gmail.com',
        ]);

        \App\Models\Categoria::factory()->create([
            'nombre' => 'Ahorros',
            'deleted_at' => null,
        ]);

        \App\Models\Categoria::factory()->create([
            'nombre' => 'Prestamos',
            'deleted_at' => null,
        ]);

        \App\Models\Categoria::factory()->create([
            'nombre' => 'Seguros',
            'deleted_at' => null,
        ]);

        \App\Models\Producto::factory()->create([
            'nombre' => 'Corriente',
            'categoria_id' => '1',
            'deleted_at' => null,
        ]);

        \App\Models\Producto::factory()->create([
            'nombre' => 'Plazo Fijo',
            'categoria_id' => '1',
            'deleted_at' => null,
        ]);

        \App\Models\Producto::factory()->create([
            'nombre' => 'Programado',
            'categoria_id' => '1',
            'deleted_at' => null,
        ]);

        \App\Models\Producto::factory()->create([
            'nombre' => 'Agricultura',
            'categoria_id' => '2',
            'deleted_at' => null,
        ]);

        \App\Models\Producto::factory()->create([
            'nombre' => 'Comercio',
            'categoria_id' => '2',
            'deleted_at' => null,
        ]);

        \App\Models\Producto::factory()->create([
            'nombre' => 'Consumo',
            'categoria_id' => '2',
            'deleted_at' => null,
        ]);

        \App\Models\Producto::factory()->create([
            'nombre' => 'Vivienda',
            'categoria_id' => '2',
            'deleted_at' => null,
        ]);

        \App\Models\Producto::factory()->create([
            'nombre' => 'Vehiculos',
            'categoria_id' => '3',
            'deleted_at' => null,
        ]);

        \App\Models\Producto::factory()->create([
            'nombre' => 'Vida Especial',
            'categoria_id' => '3',
            'deleted_at' => null,
        ]);

        \App\Models\Producto::factory()->create([
            'nombre' => 'Vida Saludable',
            'categoria_id' => '3',
            'deleted_at' => null,
        ]);

        \App\Models\Cliente::factory()->create([
            'nombres' => 'Jose Luis',
            'apellidos' => 'perez Garcia',
            'telefono' => '12345678',
            'direccion' => 'Sanarate',
            'cui' => '123456789',
            'deleted_at' => null,
        ]);

        \App\Models\Cliente::factory()->create([
            'nombres' => 'Milton Jose',
            'apellidos' => 'Mendez Perez',
            'telefono' => '12345678',
            'direccion' => 'Sanarate',
            'cui' => '123456789',
            'deleted_at' => null,
        ]);

        \App\Models\Cliente::factory()->create([
            'nombres' => 'Edwin Leonel',
            'apellidos' => 'Rodriguez Garcia',
            'telefono' => '12345678',
            'direccion' => 'Sanarate',
            'cui' => '123456789',
            'deleted_at' => null,
        ]);
    }
}
