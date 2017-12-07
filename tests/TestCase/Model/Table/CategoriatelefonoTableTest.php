<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriatelefonoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriatelefonoTable Test Case
 */
class CategoriatelefonoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriatelefonoTable
     */
    public $Categoriatelefono;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categoriatelefono',
        'app.categoriatelefonos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Categoriatelefono') ? [] : ['className' => CategoriatelefonoTable::class];
        $this->Categoriatelefono = TableRegistry::get('Categoriatelefono', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Categoriatelefono);

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
