<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(ApartamentosTableSeeder::class);
         $this->call(GastosTableSeeder::class);
         $this->call(PropietariosTableSeeder::class);
         $this->call(FondoTableSeeder::class);
         $this->call(SaldoTableSeeder::class);
         $this->call(PrestacionesTableSeeder::class);
    }
}
