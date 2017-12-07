<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelefonosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelefonosTable Test Case
 */
class TelefonosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TelefonosTable
     */
    public $Telefonos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.telefonos',
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
        $config = TableRegistry::exists('Telefonos') ? [] : ['className' => TelefonosTable::class];
        $this->Telefonos = TableRegistry::get('Telefonos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Telefonos);

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
