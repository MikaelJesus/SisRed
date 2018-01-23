<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProgramaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProgramaTable Test Case
 */
class ProgramaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProgramaTable
     */
    public $Programa;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.programa',
        'app.unidads'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Programa') ? [] : ['className' => ProgramaTable::class];
        $this->Programa = TableRegistry::get('Programa', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Programa);

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
