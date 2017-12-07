<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PcsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PcsTable Test Case
 */
class PcsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PcsTable
     */
    public $Pcs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pcs',
        'app.tiporesguardo',
        'app.tiporesguardos',
        'app.tipoconexion',
        'app.tipoconexions',
        'app.tipoequipo',
        'app.tipoequipos',
        'app.empleados',
        'app.categorias',
        'app.dependencias',
        'app.areas',
        'app.departamentos',
        'app.unidades',
        'app.unidads',
        'app.carreras',
        'app.nivelcarrera',
        'app.statusprofecional',
        'app.statusprofecionals',
        'app.contrataciones',
        'app.contratacions',
        'app.status',
        'app.statuses',
        'app.privilegiosinternet',
        'app.nivels',
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
        $config = TableRegistry::exists('Pcs') ? [] : ['className' => PcsTable::class];
        $this->Pcs = TableRegistry::get('Pcs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pcs);

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
