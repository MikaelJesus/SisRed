<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SwitchesFixture
 *
 */
class SwitchesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'switch_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'numero_serie' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'marca' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'numero_puertos' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'numero_inventario' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'numero_equipos' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_alta' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modelo' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tiporesguardo_tiporesguardo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'empleados_empleado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_switches_tiporesguardo1_idx' => ['type' => 'index', 'columns' => ['tiporesguardo_tiporesguardo_id'], 'length' => []],
            'fk_switches_empleados1_idx' => ['type' => 'index', 'columns' => ['empleados_empleado_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['switch_id'], 'length' => []],
            'fk_switches_empleados1' => ['type' => 'foreign', 'columns' => ['empleados_empleado_id'], 'references' => ['empleados', 'empleado_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_switches_tiporesguardo1' => ['type' => 'foreign', 'columns' => ['tiporesguardo_tiporesguardo_id'], 'references' => ['tiporesguardo', 'tiporesguardo_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'switch_id' => 1,
            'numero_serie' => 'Lorem ipsum dolor sit amet',
            'marca' => 'Lorem ipsum dolor sit amet',
            'numero_puertos' => 'Lorem ipsum dolor sit amet',
            'numero_inventario' => 'Lorem ipsum dolor ',
            'numero_equipos' => 'Lorem ipsum dolor sit amet',
            'fecha_alta' => '2017-11-08',
            'modelo' => 'Lorem ipsum dolor sit amet',
            'tiporesguardo_tiporesguardo_id' => 1,
            'empleados_empleado_id' => 1
        ],
    ];
}
