<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatusprofecionalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatusprofecionalTable Test Case
 */
class StatusprofecionalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatusprofecionalTable
     */
    public $Statusprofecional;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.statusprofecional',
        'app.statusprofecionals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Statusprofecional') ? [] : ['className' => StatusprofecionalTable::class];
        $this->Statusprofecional = TableRegistry::get('Statusprofecional', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Statusprofecional);

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
