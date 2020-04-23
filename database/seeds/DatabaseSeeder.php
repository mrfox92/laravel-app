<?php

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
        // $this->call(UserSeeder::class);
        Storage::deleteDirectory('services');
        Storage::deleteDirectory('users');

        Storage::makeDirectory('services');
        Storage::makeDirectory('users');

        //  creamos los roles de usuario
        factory(App\Role::class, 1)->create(['name' => 'admin']);
        factory(App\Role::class, 1)->create(['name' => 'service']);
        factory(App\Role::class, 1)->create(['name' => 'customer']);

        //  usuarios
        factory(App\User::class, 1)->create([
            'name'  =>  'admin',
            'email' =>  'admin@gmail.com',
            'password'  =>  bcrypt('test1234'),
            'role_id'   =>  \App\Role::ADMIN
        ])->each( function ($user) {
            factory(App\Customer::class, 1)->create(['user_id' => $user->id]);
        });

        //  50 usuarios de prueba
        factory(App\User::class, 50)->create()
            ->each( function ($user) {
                factory(App\Customer::class, 1)->create(['user_id' => $user->id]);
            });

        //  10 usuarios que serán vendedores
        //  creamos la relacion con la tabla customers, ya que antes de ser vendedores fueron consumidores
        factory(App\User::class, 10)->create()
            ->each( function ($user) {
                factory(App\Customer::class, 1)->create(['user_id' => $user->id]);
                factory(App\Seller::class, 1)->create(['user_id' => $user->id]);
            });
        
        
        //  creamos las categorias
        factory(App\Category::class, 10)->create();

        //  creamos las regiones
        //  creamos 2 comunas por región
        factory(App\Region::class, 16)->create()
            ->each( function ($region) {
                factory(App\Commune::class, 2)->create(['region_id' => $region->id]);
            });

        //  creamos 50 servicios
        factory(App\Service::class, 50)->create();

    }
}
