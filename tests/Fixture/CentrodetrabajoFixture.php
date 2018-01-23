<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CentrodetrabajoFixture
 *
 */
class CentrodetrabajoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'centrodetrabajo';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'departamento_id' => ['type' => 'string', 'length' => 19, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'des_departamento' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['departamento_id'], 'length' => []],
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
            'departamento_id' => '8fffcc63-3c86-4a74-b5d8-66f110584954',
            'des_departamento' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
