<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PcsFixture
 *
 */
class PcsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'pc_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'direccion_mac' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'marca' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'modelo_pc' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'sistema_operativo' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombre_red' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'grupo_trabajo' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ip' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'antivirus' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nodo' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'edificio' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'piso' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_alta' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'marca_procesador' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'modelo_procesador' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'velocidad_procesador' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'capacidad_disco' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'capacidad_ram' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tiporesguardo_tiporesguardo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipoconexion_tipoconexion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipoequipo_tipoequipo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'empleados_empleado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_pcs_tiporesguardo1_idx' => ['type' => 'index', 'columns' => ['tiporesguardo_tiporesguardo_id'], 'length' => []],
            'fk_pcs_tipoconexion1_idx' => ['type' => 'index', 'columns' => ['tipoconexion_tipoconexion_id'], 'length' => []],
            'fk_pcs_tipoequipo1_idx' => ['type' => 'index', 'columns' => ['tipoequipo_tipoequipo_id'], 'length' => []],
            'fk_pcs_empleados1_idx' => ['type' => 'index', 'columns' => ['empleados_empleado_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['pc_id'], 'length' => []],
            'MacN_UNIQUE' => ['type' => 'unique', 'columns' => ['direccion_mac'], 'length' => []],
            'fk_pcs_empleados1' => ['type' => 'foreign', 'columns' => ['empleados_empleado_id'], 'references' => ['empleados', 'empleado_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_pcs_tipoconexion1' => ['type' => 'foreign', 'columns' => ['tipoconexion_tipoconexion_id'], 'references' => ['tipoconexion', 'tipoconexion_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_pcs_tipoequipo1' => ['type' => 'foreign', 'columns' => ['tipoequipo_tipoequipo_id'], 'references' => ['tipoequipo', 'tipoequipo_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_pcs_tiporesguardo1' => ['type' => 'foreign', 'columns' => ['tiporesguardo_tiporesguardo_id'], 'references' => ['tiporesguardo', 'tiporesguardo_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'pc_id' => 1,
            'direccion_mac' => 'Lorem ipsum dolor sit amet',
            'marca' => 'Lorem ipsum dolor sit amet',
            'modelo_pc' => 'Lorem ipsum dolor sit amet',
            'sistema_operativo' => 'Lorem ipsum dolor sit amet',
            'nombre_red' => 'Lorem ipsum dolor sit amet',
            'grupo_trabajo' => 'Lorem ipsum dolor sit amet',
            'ip' => 'Lorem ipsum d',
            'antivirus' => 'Lorem ipsum dolor sit amet',
            'nodo' => 'Lorem ipsum dolor sit amet',
            'edificio' => 'Lorem ipsum dolor sit ame',
            'piso' => 'Lorem ipsum dolor sit ame',
            'fecha_alta' => '2017-11-08',
            'marca_procesador' => 'Lorem ipsum dolor sit amet',
            'modelo_procesador' => 'Lorem ipsum dolor sit amet',
            'velocidad_procesador' => 'Lorem ipsum dolor sit amet',
            'capacidad_disco' => 'Lorem ipsum dolor sit amet',
            'capacidad_ram' => 'Lorem ipsum dolor sit amet',
            'tiporesguardo_tiporesguardo_id' => 1,
            'tipoconexion_tipoconexion_id' => 1,
            'tipoequipo_tipoequipo_id' => 1,
            'empleados_empleado_id' => 1
        ],
    ];
}
