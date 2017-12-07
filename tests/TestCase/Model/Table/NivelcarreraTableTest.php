<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NivelcarreraTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NivelcarreraTable Test Case
 */
class NivelcarreraTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NivelcarreraTable
     */
    public $Nivelcarrera;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nivelcarrera',
        'app.nivelcarreras'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Nivelcarrera') ? [] : ['className' => NivelcarreraTable::class];
        $this->Nivelcarrera = TableRegistry::get('Nivelcarrera', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Nivelcarrera);

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
