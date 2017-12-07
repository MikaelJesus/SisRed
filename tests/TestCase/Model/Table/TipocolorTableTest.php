<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipocolorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipocolorTable Test Case
 */
class TipocolorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipocolorTable
     */
    public $Tipocolor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipocolor',
        'app.tipocolors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tipocolor') ? [] : ['className' => TipocolorTable::class];
        $this->Tipocolor = TableRegistry::get('Tipocolor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tipocolor);

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
