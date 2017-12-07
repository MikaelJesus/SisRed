<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MovgafetesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MovgafetesTable Test Case
 */
class MovgafetesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MovgafetesTable
     */
    public $Movgafetes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.movgafetes',
        'app.users',
        'app.role',
        'app.roles',
        'app.empleados',
        'app.categorias',
        'app.dependencias',
        'app.areas',
        'app.departamentos',
        'app.unidades',
        'app.unidads',
        'app.carreras',
        'app.nivelcarrera',
        'app.statusprofecional',
        'app.statusprofecionals',
        'app.contrataciones',
        'app.contratacions',
        'app.status',
        'app.statuses',
        'app.privilegiosinternet',
        'app.nivels',
        'app.categoriatelefono',
        'app.categoriatelefonos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Movgafetes') ? [] : ['className' => MovgafetesTable::class];
        $this->Movgafetes = TableRegistry::get('Movgafetes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Movgafetes);

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
