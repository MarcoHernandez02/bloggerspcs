<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class temasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temas')->insert([
            'id' => '4',
            'tema' => 'PRESENTACION LOGICA ',
            'concepto' => 'Una red lógica es una representación virtual de una red que aparece para el usuario como una red completamente separada y autónoma, aunque físicamente podría ser solo una parte de una red más grande o una red de área local.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('temas')->insert([
            'id' => '5',
            'tema' => 'PROCESO DISTRIBUIDO',
            'concepto' => ' En este modelo, la capa que implementa la lógica de negocio se encuentra dividida entre el cliente y el servidor. El acceso a la base de datos se encuentra en el servidor y la capa de presentación en el cliente.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('temas')->insert([
            'id' => '6',
            'tema' => 'BASE DE DATOS REMOTA',
            'concepto' => 'Las capas de negocio y de presentación se ejecutan completamente en el cliente, mientras que la base de datos está completamente en el servidor',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('temas')->insert([
            'id' => '7',
            'tema' => 'BASE DE DATOS DISTRIBUIDA',
            'concepto' => 'Las capas de negocio y de presentación se ejecutan completamente en el cliente, mientras que la base de datos está distribuida entre el cliente y el servidor. Se requieren de mecanismos para asegurar la coherencia en los datos.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('temas')->insert([
            'id' => '8',
            'tema' => 'DEFINIR LOS CONCEPTOS DE LÓGICA DE ACCESO',
            'concepto' => 'El acceso lógico en TI a menudo se define como interacciones con el hardware a través del acceso remoto.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('temas')->insert([
            'id' => '9',
            'tema' => 'DEFINIR LOS CONCEPTO PRESENTACIÓN',
            'concepto' => 'Un Programa de Presentaciones es un software utilizado para mostrar información normalmente esquematizada en una o más diapositivas. ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('temas')->insert([
            'id' => '10',
            'tema' => 'DISEÑO DE LOGICA DE ACCESO',
            'concepto' => 'El proceso de diseño de bases de datos consiste en definir la estructura lógica y física de una o más bases de datos para responder a las necesidades de los usuarios con respecto a la información y para un conjunto concreto de aplicaciones.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('temas')->insert([
            'id' => '11',
            'tema' => 'LÓGICA DE PRESENTACIÓN DE DATOS',
            'concepto' => 'Una arquitectura cliente-servidor: lógica de negocios, capa de presentación y capa de datos. ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('temas')->insert([
            'id' => '12',
            'tema' => 'LÓGICA DE NEGOCIO',
            'concepto' => 'Capa de negocio: es donde residen los programas que se ejecutan, se reciben las peticiones del usuario y se envían las respuestas tras el proceso. Se denomina capa de negocio (e incluso de lógica del negocio) ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('temas')->insert([
            'id' => '13',
            'tema' => 'LÓGICA DE APLICACIÓN',
            'concepto' => 'Capa de presentación: la que ve el usuario (también se la denomina «capa de usuario»), presenta el sistema al usuario, le comunica la información y captura la información del usuario en un mínimo de proceso.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('temas')->insert([
            'id' => '14',
            'tema' => 'NIVEL VINCULADO',
            'concepto' => 'La definición de nivel de servicio en el perfil de gestión de servicios especifica los mecanismos de comunicación física que utiliza un servicio.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('temas')->insert([
            'id' => '15',
            'tema' => 'PROGRAMACIÓN WEB.',
            'concepto' => 'La programación web es la herramienta más importante del Internet ya que permite generar un diálogo constante, dinámico y amigable entre los usuarios y la información que se encuentra en los sitios web.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('temas')->insert([
            'id' => '16',
            'tema' => 'PROBLEMAS DE ACTUALIZACIÓN Y MANTENIMIENTO DE APLICACIONES MULTINIVEL.',
            'concepto' => 'Los sistemas típicos cliente/servidor pertenecen a la categoría de las aplicaciones de dos niveles. La aplicación reside en el cliente mientras que la base de datos se encuentra en el servidor. ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}

