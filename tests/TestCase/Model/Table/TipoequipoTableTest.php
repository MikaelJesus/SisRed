<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoequipoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoequipoTable Test Case
 */
class TipoequipoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoequipoTable
     */
    public $Tipoequipo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipoequipo',
        'app.tipoequipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tipoequipo') ? [] : ['className' => TipoequipoTable::class];
        $this->Tipoequipo = TableRegistry::get('Tipoequipo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tipoequipo);

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
