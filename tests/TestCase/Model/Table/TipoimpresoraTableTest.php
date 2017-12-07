<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoimpresoraTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoimpresoraTable Test Case
 */
class TipoimpresoraTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoimpresoraTable
     */
    public $Tipoimpresora;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipoimpresora',
        'app.tipoimpresoras'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tipoimpresora') ? [] : ['className' => TipoimpresoraTable::class];
        $this->Tipoimpresora = TableRegistry::get('Tipoimpresora', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tipoimpresora);

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
