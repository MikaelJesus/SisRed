<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImpresorasFixture
 *
 */
class ImpresorasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'impresora_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'numero_serie' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'marca' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'modelo' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'mac_impresora' => ['type' => 'string', 'length' => 18, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ip_impresora' => ['type' => 'string', 'length' => 18, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'numero_inventario' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_alta' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'velocidad_imprecion' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nodo' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'empleados_empleado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipocolor_tipocolor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipoimpresora_tipoimpresora_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tiporesguardo_tiporesguardo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipoconexion_tipoconexion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_impresoras_tipocolor_idx' => ['type' => 'index', 'columns' => ['tipocolor_tipocolor_id'], 'length' => []],
            'fk_impresoras_tipoimpresora1_idx' => ['type' => 'index', 'columns' => ['tipoimpresora_tipoimpresora_id'], 'length' => []],
            'fk_impresoras_tiporesguardo1_idx' => ['type' => 'index', 'columns' => ['tiporesguardo_tiporesguardo_id'], 'length' => []],
            'fk_impresoras_tipoconexion1_idx' => ['type' => 'index', 'columns' => ['tipoconexion_tipoconexion_id'], 'length' => []],
            'fk_impresoras_empleados1_idx' => ['type' => 'index', 'columns' => ['empleados_empleado_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['impresora_id'], 'length' => []],
            'fk_impresoras_empleados1' => ['type' => 'foreign', 'columns' => ['empleados_empleado_id'], 'references' => ['empleados', 'empleado_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_impresoras_tipocolor' => ['type' => 'foreign', 'columns' => ['tipocolor_tipocolor_id'], 'references' => ['tipocolor', 'tipocolor_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_impresoras_tipoconexion1' => ['type' => 'foreign', 'columns' => ['tipoconexion_tipoconexion_id'], 'references' => ['tipoconexion', 'tipoconexion_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_impresoras_tipoimpresora1' => ['type' => 'foreign', 'columns' => ['tipoimpresora_tipoimpresora_id'], 'references' => ['tipoimpresora', 'tipoimpresora_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_impresoras_tiporesguardo1' => ['type' => 'foreign', 'columns' => ['tiporesguardo_tiporesguardo_id'], 'references' => ['tiporesguardo', 'tiporesguardo_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'impresora_id' => 1,
            'numero_serie' => 'Lorem ipsum dolor sit amet',
            'marca' => 'Lorem ipsum dolor sit amet',
            'modelo' => 'Lorem ipsum dolor sit amet',
            'mac_impresora' => 'Lorem ipsum dolo',
            'ip_impresora' => 'Lorem ipsum dolo',
            'numero_inventario' => 'Lorem ipsum dolor sit amet',
            'fecha_alta' => '2017-11-08',
            'velocidad_imprecion' => 'Lorem ipsum dolor sit amet',
            'nodo' => 'Lorem ipsum dolor sit amet',
            'empleados_empleado_id' => 1,
            'tipocolor_tipocolor_id' => 1,
            'tipoimpresora_tipoimpresora_id' => 1,
            'tiporesguardo_tiporesguardo_id' => 1,
            'tipoconexion_tipoconexion_id' => 1
        ],
    ];
}
