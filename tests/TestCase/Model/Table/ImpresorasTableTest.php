<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImpresorasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImpresorasTable Test Case
 */
class ImpresorasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImpresorasTable
     */
    public $Impresoras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.impresoras',
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
        'app.categoriatelefonos',
        'app.tipocolor',
        'app.tipocolors',
        'app.tipoimpresora',
        'app.tipoimpresoras',
        'app.tiporesguardo',
        'app.tiporesguardos',
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
        $config = TableRegistry::exists('Impresoras') ? [] : ['className' => ImpresorasTable::class];
        $this->Impresoras = TableRegistry::get('Impresoras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Impresoras);

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
