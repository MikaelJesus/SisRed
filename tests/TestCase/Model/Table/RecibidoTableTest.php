<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecibidoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecibidoTable Test Case
 */
class RecibidoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecibidoTable
     */
    public $Recibido;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recibido',
        'app.recibidos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Recibido') ? [] : ['className' => RecibidoTable::class];
        $this->Recibido = TableRegistry::get('Recibido', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Recibido);

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
