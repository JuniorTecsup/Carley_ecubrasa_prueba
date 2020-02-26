<?php

use Illuminate\Database\Seeder;

use App\ordentrabajoModel;

class OrdentrabajosTableSeeder extends Seeder
{
    public function run()
    {   
    	DB::table('ordentrabajo')->delete();
 
        $ordentrabajos = [
             ['id' => '1',
              'correlativo' => '001490',
              'conductor' => 'Jose peña Castro',
              'fecha_ingreso' => '2020-01-22',
              'fecha_salida' => '2020-01-23',
              'h_ingreso' => '11:17:11',
              'tipo_vehiculo' => 'Ballena',
              'dni' => '75600611',
              'area_id' => '1',
              'acoplado' => 'CCC-CCC',
              'estado' => '1',
              'observaciones' => 'Ninguna',
              'vehiculo_id' => 'AAA-AAA',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad' => '1'
             ],
             ['id' => '2',
              'correlativo' => '001491',
              'conductor' => 'Leonardo Curaca',
              'fecha_ingreso' => '2020-01-26',
              'fecha_salida' => '2020-01-27',
              'h_ingreso' => '11:17:19',
              'tipo_vehiculo' => 'Furgon',
              'dni' => '75600612',
              'area_id' => '1',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'Todo correcto',
              'vehiculo_id' => 'AAA-AAA',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad' => '1'
             ],
             ['id' => '3',
              'correlativo' => '001492',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-30',
              'fecha_salida' => '2020-01-31',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '1',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'AAA-AAA',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '4',
              'correlativo' => '001493',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-03',
              'fecha_salida' => '2020-02-04',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '1',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'AAA-AAA',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '5',
              'correlativo' => '001494',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-07',
              'fecha_salida' => '2020-02-08',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '1',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'AAA-AAA',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '6',
              'correlativo' => '001495',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-11',
              'fecha_salida' => '2020-02-12',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '1',
              'acoplado' => 'CCC-CCC',
              'estado' => '1',
              'observaciones' => 'Ninguna',
              'vehiculo_id' => 'AAA-AAA',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '7',
              'correlativo' => '001496',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-22',
              'fecha_salida' => '2020-01-23',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '2',
              'acoplado' => 'CCC-CCC',
              'estado' => '1',
              'observaciones' => 'Ninguna',
              'vehiculo_id' => 'AAA-AAA',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '8',
              'correlativo' => '001497',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-26',
              'fecha_salida' => '2020-01-27',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '2',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'BBB-BBB',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '9',
              'correlativo' => '001498',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-30',
              'fecha_salida' => '2020-01-31',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '2',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'BBB-BBB',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '10',
              'correlativo' => '001499',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-03',
              'fecha_salida' => '2020-02-04',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '2',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'BBB-BBB',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '11',
              'correlativo' => '001500',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-07',
              'fecha_salida' => '2020-02-08',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '2',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'BBB-BBB',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '12',
              'correlativo' => '001501',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-11',
              'fecha_salida' => '2020-02-12',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '2',
              'acoplado' => 'CCC-CCC',
              'estado' => '1',
              'observaciones' => 'Ninguna',
              'vehiculo_id' => 'BBB-BBB',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '13',
              'correlativo' => '001502',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-22',
              'fecha_salida' => '2020-01-23',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '3',
              'acoplado' => 'CCC-CCC',
              'estado' => '1',
              'observaciones' => 'Ninguna',
              'vehiculo_id' => 'BBB-BBB',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '14',
              'correlativo' => '001503',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-26',
              'fecha_salida' => '2020-01-27',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '3',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'BBB-BBB',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '15',
              'correlativo' => '001504',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-30',
              'fecha_salida' => '2020-01-31',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '3',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'BBB-BBB',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '16',
              'correlativo' => '001505',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-03',
              'fecha_salida' => '2020-02-04',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '3',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'ABC-DEF',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '17',
              'correlativo' => '001506',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-07',
              'fecha_salida' => '2020-02-08',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '3',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'ABC-DEF',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '18',
              'correlativo' => '001507',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-11',
              'fecha_salida' => '2020-02-12',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '3',
              'acoplado' => 'CCC-CCC',
              'estado' => '1',
              'observaciones' => 'Ninguna',
              'vehiculo_id' => 'ABC-DEF',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '19',
              'correlativo' => '001508',
              'conductor' => 'Johatan vera',
              'fecha_ingreso' => '2020-01-22',
              'fecha_salida' => '2020-01-23',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '4',
              'acoplado' => 'CCC-CCC',
              'estado' => '1',
              'observaciones' => 'Ninguna',
              'vehiculo_id' => 'ABC-DEF',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '20',
              'correlativo' => '001509',
              'conductor' => 'Julio villa',
              'fecha_ingreso' => '2020-01-26',
              'fecha_salida' => '2020-01-27',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '4',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'ABC-DEF',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '21',
              'correlativo' => '001510',
              'conductor' => 'Jose Peña',
              'fecha_ingreso' => '2020-01-30',
              'fecha_salida' => '2020-01-31',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '4',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'ABC-DEF',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '22',
              'correlativo' => '001511',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-03',
              'fecha_salida' => '2020-02-04',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '4',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'ABC-DEF',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '23',
              'correlativo' => '001512',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-07',
              'fecha_salida' => '2020-02-08',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '4',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'RBC-ARR',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '24',
              'correlativo' => '001513',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-11',
              'fecha_salida' => '2020-02-12',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '4',
              'acoplado' => 'CCC-CCC',
              'estado' => '1',
              'observaciones' => 'Ninguna',
              'vehiculo_id' => 'RBC-ARR',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '25',
              'correlativo' => '001514',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-22',
              'fecha_salida' => '2020-01-23',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '5',
              'acoplado' => 'CCC-CCC',
              'estado' => '1',
              'observaciones' => 'Ninguna',
              'vehiculo_id' => 'RBC-ARR',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '26',
              'correlativo' => '001515',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-26',
              'fecha_salida' => '2020-01-27',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '5',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'RBC-ARR',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '27',
              'correlativo' => '001516',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-30',
              'fecha_salida' => '2020-01-31',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '5',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'RBC-ARR',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '28',
              'correlativo' => '001517',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-03',
              'fecha_salida' => '2020-02-04',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '5',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'RBC-ARR',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '29',
              'correlativo' => '001518',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-07',
              'fecha_salida' => '2020-02-08',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '5',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'RBC-ARR',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '30',
              'correlativo' => '001519',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-11',
              'fecha_salida' => '2020-02-12',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '5',
              'acoplado' => 'CCC-CCC',
              'estado' => '1',
              'observaciones' => 'Ninguna',
              'vehiculo_id' => 'RBC-ARR',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '31',
              'correlativo' => '001520',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-22',
              'fecha_salida' => '2020-01-23',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '6',
              'acoplado' => 'CCC-CCC',
              'estado' => '1',
              'observaciones' => 'Ninguna',
              'vehiculo_id' => 'RBC-ARR',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '32',
              'correlativo' => '001521',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-26',
              'fecha_salida' => '2020-01-27',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '6',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'RBC-ARR',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '33',
              'correlativo' => '001522',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-30',
              'fecha_salida' => '2020-01-31',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '6',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'AAA-AAA',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '34',
              'correlativo' => '001523',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-03',
              'fecha_salida' => '2020-02-04',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '6',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'RBC-ARR',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '35',
              'correlativo' => '001524',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-07',
              'fecha_salida' => '2020-02-08',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '6',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'RBC-ARR',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '36',
              'correlativo' => '001525',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-11',
              'fecha_salida' => '2020-02-12',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '6',
              'acoplado' => 'CCC-CCC',
              'estado' => '1',
              'observaciones' => 'Ninguna',
              'vehiculo_id' => 'BBB-BBB',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '37',
              'correlativo' => '001526',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-22',
              'fecha_salida' => '2020-01-23',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '7',
              'acoplado' => 'CCC-CCC',
              'estado' => '1',
              'observaciones' => 'Ninguna',
              'vehiculo_id' => 'ABC-DEF',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '38',
              'correlativo' => '001527',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-26',
              'fecha_salida' => '2020-01-27',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '7',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'ABC-DEF',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '39',
              'correlativo' => '001528',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-01-30',
              'fecha_salida' => '2020-01-31',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '7',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'AAA-AAA',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '40',
              'correlativo' => '001529',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-03',
              'fecha_salida' => '2020-02-04',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '7',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'BBB-BBB',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '41',
              'correlativo' => '001530',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-07',
              'fecha_salida' => '2020-02-08',
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '7',
              'acoplado' => 'CCC-CCC',
              'estado' => '2',
              'observaciones' => 'El kilmetraje excedio el limite permitido para su mantenimiento',
              'vehiculo_id' => 'AAA-AAA',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ],
             ['id' => '42',
              'correlativo' => '001531',
              'conductor' => 'Junior Vilchez',
              'fecha_ingreso' => '2020-02-11',
              'fecha_salida' => '2020-02-12', 
              'h_ingreso' => '11:17:25',
              'tipo_vehiculo' => 'Cisterna',
              'dni' => '75600611',
              'area_id' => '7',
              'acoplado' => 'CCC-CCC',
              'estado' => '1',
              'observaciones' => 'Ninguna',
              'vehiculo_id' => 'BBB-BBB',
              'operacion' => 'Tottus',
              'aprobadas' => '50',
              'progreso_tareas' => '50',
              'prioridad'=> '1'
             ]
        ];

        ordentrabajoModel::insert($ordentrabajos);

    }
}
