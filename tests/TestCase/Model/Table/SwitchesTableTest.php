<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SwitchesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SwitchesTable Test Case
 */
class SwitchesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SwitchesTable
     */
    public $Switches;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.switches',
        'app.tiporesguardo',
        'app.tiporesguardos',
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
        $config = TableRegistry::exists('Switches') ? [] : ['className' => SwitchesTable::class];
        $this->Switches = TableRegistry::get('Switches', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Switches);

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
