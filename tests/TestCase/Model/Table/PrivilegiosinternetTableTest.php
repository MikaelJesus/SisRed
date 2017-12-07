<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrivilegiosinternetTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrivilegiosinternetTable Test Case
 */
class PrivilegiosinternetTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PrivilegiosinternetTable
     */
    public $Privilegiosinternet;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.privilegiosinternet',
        'app.privilegios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Privilegiosinternet') ? [] : ['className' => PrivilegiosinternetTable::class];
        $this->Privilegiosinternet = TableRegistry::get('Privilegiosinternet', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Privilegiosinternet);

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
