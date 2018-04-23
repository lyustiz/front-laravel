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
        //$this->call(StatusTableSeeder::class);

    	//factory(App\Status::class, 20)->create();
        Status::create([
            'nb_status' => 'activo',
            'tx_grupo'  => 'gral',
            'bo_activo' => true,
        ]);

        Status::create([
            'nb_status' => 'inactivo',
            'tx_grupo'  => 'gral',
            'bo_activo' => true,
        ]);


        TipoUsuario::create([
            'nb_tipo_usuario'   => 'Administrador', 
            'id_status'         => '1', 
            'id_usuario'        => '1',
        ]);

        Usuario::create([
            'nb_usuario'      => 'admin', 
            'tx_password'     => '1234546', 
            'nb_nombre'       => 'Administrador',
            'nb_apellido'     => '', 
            'tx_correo'       => 'lyustiz@corpovex.gob.ve', 
            'id_tipo_usuario' => 1, 
            'id_status'       => 1, 
            'id_usuario_ed'   => 1,
        ]);
    }
}
