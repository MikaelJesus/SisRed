<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatusrequerimientoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatusrequerimientoTable Test Case
 */
class StatusrequerimientoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatusrequerimientoTable
     */
    public $Statusrequerimiento;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.statusrequerimiento',
        'app.statusrequerimientos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Statusrequerimiento') ? [] : ['className' => StatusrequerimientoTable::class];
        $this->Statusrequerimiento = TableRegistry::get('Statusrequerimiento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Statusrequerimiento);

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
