<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConmutadoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConmutadoresTable Test Case
 */
class ConmutadoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConmutadoresTable
     */
    public $Conmutadores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.conmutadores',
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
        $config = TableRegistry::exists('Conmutadores') ? [] : ['className' => ConmutadoresTable::class];
        $this->Conmutadores = TableRegistry::get('Conmutadores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Conmutadores);

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
