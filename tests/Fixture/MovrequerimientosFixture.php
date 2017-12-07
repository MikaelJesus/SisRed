<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MovrequerimientosFixture
 *
 */
class MovrequerimientosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'movrequerimientos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'fech_req' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'requerimientos_requerimiento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'peticion' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cpu' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'monitor' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'teclado' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'mouse' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'impresora' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'corriente_pc' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'corriente_impresora' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'usb_impresora' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'otro' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'solicitud' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fech_entrega' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'comentario' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'statusrequerimiento_statusrequerimiento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'recibido_recibido_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '2', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'users_user_id1' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'users_user_id2' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_movrequerimientos_requerimientos1_idx' => ['type' => 'index', 'columns' => ['requerimientos_requerimiento_id'], 'length' => []],
            'fk_movrequerimientos_statusrequerimiento1_idx' => ['type' => 'index', 'columns' => ['statusrequerimiento_statusrequerimiento_id'], 'length' => []],
            'fk_movrequerimientos_recibido1_idx' => ['type' => 'index', 'columns' => ['recibido_recibido_id'], 'length' => []],
            'fk_movrequerimientos_users2_idx' => ['type' => 'index', 'columns' => ['users_user_id1'], 'length' => []],
            'fk_movrequerimientos_users3_idx' => ['type' => 'index', 'columns' => ['users_user_id2'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['movrequerimientos_id'], 'length' => []],
            'fk_movrequerimientos_recibido1' => ['type' => 'foreign', 'columns' => ['recibido_recibido_id'], 'references' => ['recibido', 'recibido_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_movrequerimientos_requerimientos1' => ['type' => 'foreign', 'columns' => ['requerimientos_requerimiento_id'], 'references' => ['requerimientos', 'requerimiento_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_movrequerimientos_statusrequerimiento1' => ['type' => 'foreign', 'columns' => ['statusrequerimiento_statusrequerimiento_id'], 'references' => ['statusrequerimiento', 'statusrequerimiento_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_movrequerimientos_users2' => ['type' => 'foreign', 'columns' => ['users_user_id1'], 'references' => ['users', 'user_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_movrequerimientos_users3' => ['type' => 'foreign', 'columns' => ['users_user_id2'], 'references' => ['users', 'user_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'movrequerimientos_id' => 1,
            'fech_req' => '2017-12-05',
            'requerimientos_requerimiento_id' => 1,
            'peticion' => 'Lorem ipsum dolor sit ame',
            'cpu' => 'Lorem ipsum dolor sit ame',
            'monitor' => 'Lorem ipsum dolor sit ame',
            'teclado' => 'Lorem ipsum dolor sit ame',
            'mouse' => 'Lorem ipsum dolor sit ame',
            'impresora' => 'Lorem ipsum dolor sit ame',
            'corriente_pc' => 'Lorem ipsum dolor sit ame',
            'corriente_impresora' => 'Lorem ipsum dolor sit ame',
            'usb_impresora' => 'Lorem ipsum dolor sit ame',
            'otro' => 'Lorem ipsum dolor sit amet',
            'solicitud' => 'Lorem ipsum dolor sit amet',
            'fech_entrega' => '2017-12-05',
            'comentario' => 'Lorem ipsum dolor sit amet',
            'statusrequerimiento_statusrequerimiento_id' => 1,
            'recibido_recibido_id' => 1,
            'users_user_id1' => 1,
            'users_user_id2' => 1
        ],
    ];
}
