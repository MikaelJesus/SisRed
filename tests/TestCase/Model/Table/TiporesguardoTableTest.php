<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiporesguardoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiporesguardoTable Test Case
 */
class TiporesguardoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TiporesguardoTable
     */
    public $Tiporesguardo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tiporesguardo',
        'app.tiporesguardos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tiporesguardo') ? [] : ['className' => TiporesguardoTable::class];
        $this->Tiporesguardo = TableRegistry::get('Tiporesguardo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tiporesguardo);

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
