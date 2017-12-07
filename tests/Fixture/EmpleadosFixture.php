<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmpleadosFixture
 *
 */
class EmpleadosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'empleado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Identificador del Empleado usado solamente para el sistema', 'autoIncrement' => true, 'precision' => null],
        'nue' => ['type' => 'string', 'length' => 6, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nup' => ['type' => 'string', 'length' => 6, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombre' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellidop' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellidom' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'curp' => ['type' => 'string', 'length' => 18, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'rfc' => ['type' => 'string', 'length' => 13, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'categorias_categoria_id' => ['type' => 'string', 'length' => 7, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'dependencias_dependencia_id' => ['type' => 'string', 'length' => 3, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'areas_area_id' => ['type' => 'string', 'length' => 6, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'departamentos_departamento_id' => ['type' => 'string', 'length' => 17, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'unidades_unidad_id' => ['type' => 'string', 'length' => 19, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_gafete' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'sexo' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'carreras_carrera_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'statusprofecional_statusprofecional_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contrataciones_contratacion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'status_status_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'domicilio' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'telefono_local' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'telefono_celular' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'foto' => ['type' => 'string', 'length' => 35, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'privilegiosinternet_privilegio_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'categoriatelefono_categoriatelefono_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'clave_imss' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nombre_emergencia' => ['type' => 'string', 'length' => 55, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellidop_emergencia' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellidom_emergencia' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tel_emergencia' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipo_sangre' => ['type' => 'string', 'length' => 5, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'alergias' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_empleados_categorias1_idx' => ['type' => 'index', 'columns' => ['categorias_categoria_id'], 'length' => []],
            'fk_empleados_carreras1_idx' => ['type' => 'index', 'columns' => ['carreras_carrera_id'], 'length' => []],
            'fk_empleados_categoriatelefono1_idx' => ['type' => 'index', 'columns' => ['categoriatelefono_categoriatelefono_id'], 'length' => []],
            'fk_empleados_dependencias1_idx' => ['type' => 'index', 'columns' => ['dependencias_dependencia_id'], 'length' => []],
            'fk_empleados_areas1_idx' => ['type' => 'index', 'columns' => ['areas_area_id'], 'length' => []],
            'fk_empleados_departamentos1_idx' => ['type' => 'index', 'columns' => ['departamentos_departamento_id'], 'length' => []],
            'fk_empleados_unidades1_idx' => ['type' => 'index', 'columns' => ['unidades_unidad_id'], 'length' => []],
            'fk_empleados_statusprofecional1_idx' => ['type' => 'index', 'columns' => ['statusprofecional_statusprofecional_id'], 'length' => []],
            'fk_empleados_contrataciones1_idx' => ['type' => 'index', 'columns' => ['contrataciones_contratacion_id'], 'length' => []],
            'fk_empleados_status1_idx' => ['type' => 'index', 'columns' => ['status_status_id'], 'length' => []],
            'fk_empleados_privilegiosinternet1_idx1' => ['type' => 'index', 'columns' => ['privilegiosinternet_privilegio_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['empleado_id'], 'length' => []],
            'ind_nue' => ['type' => 'unique', 'columns' => ['nue'], 'length' => []],
            'nup_UNIQUE' => ['type' => 'unique', 'columns' => ['nup'], 'length' => []],
            'rfc_UNIQUE' => ['type' => 'unique', 'columns' => ['rfc'], 'length' => []],
            'curp_UNIQUE' => ['type' => 'unique', 'columns' => ['curp'], 'length' => []],
            'fk_empleados_areas1' => ['type' => 'foreign', 'columns' => ['areas_area_id'], 'references' => ['areas', 'area_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_empleados_carreras1' => ['type' => 'foreign', 'columns' => ['carreras_carrera_id'], 'references' => ['carreras', 'carrera_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_empleados_categorias1' => ['type' => 'foreign', 'columns' => ['categorias_categoria_id'], 'references' => ['categorias', 'categoria_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_empleados_categoriatelefono1' => ['type' => 'foreign', 'columns' => ['categoriatelefono_categoriatelefono_id'], 'references' => ['categoriatelefono', 'categoriatelefono_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_empleados_contrataciones1' => ['type' => 'foreign', 'columns' => ['contrataciones_contratacion_id'], 'references' => ['contrataciones', 'contratacion_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_empleados_departamentos1' => ['type' => 'foreign', 'columns' => ['departamentos_departamento_id'], 'references' => ['departamentos', 'departamento_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_empleados_dependencias1' => ['type' => 'foreign', 'columns' => ['dependencias_dependencia_id'], 'references' => ['dependencias', 'dependencia_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_empleados_privilegiosinternet1' => ['type' => 'foreign', 'columns' => ['privilegiosinternet_privilegio_id'], 'references' => ['privilegiosinternet', 'privilegio_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_empleados_status1' => ['type' => 'foreign', 'columns' => ['status_status_id'], 'references' => ['status', 'status_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_empleados_statusprofecional1' => ['type' => 'foreign', 'columns' => ['statusprofecional_statusprofecional_id'], 'references' => ['statusprofecional', 'statusprofecional_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_empleados_unidades1' => ['type' => 'foreign', 'columns' => ['unidades_unidad_id'], 'references' => ['unidades', 'unidad_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'empleado_id' => 1,
            'nue' => 'Lore',
            'nup' => 'Lore',
            'nombre' => 'Lorem ipsum dolor sit amet',
            'apellidop' => 'Lorem ipsum dolor sit amet',
            'apellidom' => 'Lorem ipsum dolor sit amet',
            'curp' => 'Lorem ipsum dolo',
            'rfc' => 'Lorem ipsum',
            'categorias_categoria_id' => 'Lorem',
            'dependencias_dependencia_id' => 'L',
            'areas_area_id' => 'Lore',
            'departamentos_departamento_id' => 'Lorem ipsum dol',
            'unidades_unidad_id' => 'Lorem ipsum dolor',
            'fecha_gafete' => '2017-11-17',
            'sexo' => 'Lorem ipsum dolor sit amet',
            'carreras_carrera_id' => 1,
            'statusprofecional_statusprofecional_id' => 1,
            'contrataciones_contratacion_id' => 1,
            'status_status_id' => 1,
            'domicilio' => 'Lorem ipsum dolor sit amet',
            'telefono_local' => 'Lorem ipsum dolor sit amet',
            'telefono_celular' => 'Lorem ipsum dolor sit amet',
            'foto' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet',
            'privilegiosinternet_privilegio_id' => 1,
            'categoriatelefono_categoriatelefono_id' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet',
            'clave_imss' => 1,
            'nombre_emergencia' => 'Lorem ipsum dolor sit amet',
            'apellidop_emergencia' => 'Lorem ipsum dolor sit amet',
            'apellidom_emergencia' => 'Lorem ipsum dolor sit amet',
            'tel_emergencia' => 'Lorem ipsum dolor sit amet',
            'tipo_sangre' => 'Lor',
            'alergias' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
