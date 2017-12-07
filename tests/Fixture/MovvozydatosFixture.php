<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MovvozydatosFixture
 *
 */
class MovvozydatosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'movvozydatos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'tipo_movimiento' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_movimiento' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'users_user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'empleados_empleado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_movvozydatos_users1_idx' => ['type' => 'index', 'columns' => ['users_user_id'], 'length' => []],
            'fk_movvozydatos_empleados1_idx' => ['type' => 'index', 'columns' => ['empleados_empleado_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['movvozydatos_id'], 'length' => []],
            'fk_movvozydatos_empleados1' => ['type' => 'foreign', 'columns' => ['empleados_empleado_id'], 'references' => ['empleados', 'empleado_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_movvozydatos_users1' => ['type' => 'foreign', 'columns' => ['users_user_id'], 'references' => ['users', 'user_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'movvozydatos_id' => 1,
            'tipo_movimiento' => 'Lorem ipsum dolor sit amet',
            'fecha_movimiento' => '2017-11-08',
            'users_user_id' => 1,
            'empleados_empleado_id' => 1
        ],
    ];
}
