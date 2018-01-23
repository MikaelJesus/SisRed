<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CentrodetrabajoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CentrodetrabajoTable Test Case
 */
class CentrodetrabajoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CentrodetrabajoTable
     */
    public $Centrodetrabajo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.centrodetrabajo',
        'app.departamentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Centrodetrabajo') ? [] : ['className' => CentrodetrabajoTable::class];
        $this->Centrodetrabajo = TableRegistry::get('Centrodetrabajo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Centrodetrabajo);

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
