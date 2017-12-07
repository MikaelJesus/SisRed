<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContratacionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContratacionesTable Test Case
 */
class ContratacionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContratacionesTable
     */
    public $Contrataciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contrataciones',
        'app.contratacions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Contrataciones') ? [] : ['className' => ContratacionesTable::class];
        $this->Contrataciones = TableRegistry::get('Contrataciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contrataciones);

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
