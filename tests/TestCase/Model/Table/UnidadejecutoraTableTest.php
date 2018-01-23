<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UnidadejecutoraTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UnidadejecutoraTable Test Case
 */
class UnidadejecutoraTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UnidadejecutoraTable
     */
    public $Unidadejecutora;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.unidadejecutora',
        'app.areas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Unidadejecutora') ? [] : ['className' => UnidadejecutoraTable::class];
        $this->Unidadejecutora = TableRegistry::get('Unidadejecutora', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Unidadejecutora);

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
