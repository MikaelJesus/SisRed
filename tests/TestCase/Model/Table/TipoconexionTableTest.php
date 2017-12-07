<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoconexionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoconexionTable Test Case
 */
class TipoconexionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoconexionTable
     */
    public $Tipoconexion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipoconexion',
        'app.tipoconexions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tipoconexion') ? [] : ['className' => TipoconexionTable::class];
        $this->Tipoconexion = TableRegistry::get('Tipoconexion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tipoconexion);

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
