<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MovrequerimientosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MovrequerimientosTable Test Case
 */
class MovrequerimientosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MovrequerimientosTable
     */
    public $Movrequerimientos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.movrequerimientos',
        'app.requerimientos',
        'app.statusrequerimiento',
        'app.recibido',
        'app.users',
        'app.role',
        'app.empleados',
        'app.categorias',
        'app.dependencias',
        'app.areas',
        'app.departamentos',
        'app.unidades',
        'app.carreras',
        'app.nivelcarrera',
        'app.statusprofecional',
        'app.contrataciones',
        'app.status',
        'app.privilegiosinternet',
        'app.categoriatelefono'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Movrequerimientos') ? [] : ['className' => MovrequerimientosTable::class];
        $this->Movrequerimientos = TableRegistry::get('Movrequerimientos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Movrequerimientos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
