<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarrerasFixture
 *
 */
class CarrerasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'carrera_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'des_carrera' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nivelcarrera_nivelcarrera_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_carreras_nivelcarrera1_idx' => ['type' => 'index', 'columns' => ['nivelcarrera_nivelcarrera_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['carrera_id'], 'length' => []],
            'fk_carreras_nivelcarrera1' => ['type' => 'foreign', 'columns' => ['nivelcarrera_nivelcarrera_id'], 'references' => ['nivelcarrera', 'nivelcarrera_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'carrera_id' => 1,
            'des_carrera' => 'Lorem ipsum dolor sit amet',
            'nivelcarrera_nivelcarrera_id' => 1
        ],
    ];
}
