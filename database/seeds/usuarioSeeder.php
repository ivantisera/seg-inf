<?php

use Illuminate\Database\Seeder;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
        	'id_usuario' => '1',
        	'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'is_admin' => '1',
        	'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
