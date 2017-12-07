<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EmpleadosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EmpleadosController Test Case
 */
class EmpleadosControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.empleados',
        'app.categorias',
        'app.dependencias',
        'app.areas',
        'app.departamentos',
        'app.unidades',
        'app.carreras',
        'app.nivelcarrera',
        'app.statusprofecional',
        'app.contrataciones',
        'app.status',
        'app.privilegiosinternet',
        'app.privilegios',
        'app.categoriatelefono'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
