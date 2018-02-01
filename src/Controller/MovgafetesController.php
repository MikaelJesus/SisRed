<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Movgafetes Controller
 *
 * @property \App\Model\Table\MovgafetesTable $Movgafetes
 *
 * @method \App\Model\Entity\Movgafete[] paginate($object = null, array $settings = [])
 */
class MovgafetesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Empleados']
        ];
        $movgafetes = $this->paginate($this->Movgafetes);

        $this->set(compact('movgafetes'));
        $this->set('_serialize', ['movgafetes']);
    }

    public function indexempleados()
    {
        $this->loadModel('Empleados');
        $query = $this->Empleados
        // Use the plugins 'search' custom finder and pass in the
        // processed query params
        ->find('search', ['search' => $this->request->query]);

    $this->set('empleados', $this->paginate($query));
    }

    /**
     * View method
     *
     * @param string|null $id Movgafete id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movgafete = $this->Movgafetes->get($id, [
            'contain' => ['Users', 'Empleados']
        ]);

        $this->set('movgafete', $movgafete);
        $this->set('_serialize', ['movgafete']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $movgafete = $this->Movgafetes->newEntity();
        if ($this->request->is('post')) {
            $movgafete = $this->Movgafetes->patchEntity($movgafete, $this->request->getData());
            if ($this->Movgafetes->save($movgafete)) {
                $this->Flash->success(__('The movgafete has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movgafete could not be saved. Please, try again.'));
        }
        $movgafetes = $this->Movgafetes->Movgafetes->find('list', ['limit' => 200]);
        $users = $this->Movgafetes->Users->find('list', ['limit' => 200]);
        $empleados = $this->Movgafetes->Empleados->find('list', ['keyField' => 'empleado_id','valueField' => 'nue']);
        $this->set(compact('movgafete', 'movgafetes', 'users', 'empleados'));
        $this->set('_serialize', ['movgafete']);
    }

    public function addempleados()
    {
        $this->loadModel('Empleados');
        $movgafete = $this->Movgafetes->newEntity();
        $empleado = $this->Empleados->newEntity();



        if ($this->request->is('post')) {

            $empleado = $this->Empleados->patchEntity($empleado, $this->request->getData());
            $movgafete = $this->Movgafetes->patchEntity($movgafete, $this->request->getData());
            if (($this->Empleados->save($empleado))&&($this->Movgafetes->save($movgafete))) {
                $this->Flash->success(__('The empleado has been saved.'));

                return $this->redirect(['action' => 'indexempleados']);
            }
            $this->Flash->error(__('The movgafete could not be saved. Please, try again.'));
        }
        // $empleados = $this->Empleados->Empleados->find('list', ['limit' => 200]);
        $categorias = $this->Empleados->Categorias->find('list',['keyField' => 'categoria_id','valueField' => 'des_categoria']);
        $dependencias = $this->Empleados->Dependencias->find('list',['keyField' => 'dependencia_id','valueField' => 'des_dependencia']);
        $areas = $this->Empleados->Unidadejecutora->find('list',['keyField' => 'area_id','valueField' => 'des_area']);
        $departamentos = $this->Empleados->Centrodetrabajo->find('list',['keyField' => 'departamento_id','valueField' => 'des_departamento']);
        $unidades = $this->Empleados->Programa->find('list',['keyField' => 'unidad_id','valueField' => 'des_unidad']);
        $carreras = $this->Empleados->Carreras->find('list',['keyField' => 'carrera_id','valueField' => 'des_carrera']);
        $statusprofecional = $this->Empleados->Statusprofecional->find('list',['keyField' => 'statusprofecional_id','valueField' => 'des_statusprofecional']);
        $contrataciones = $this->Empleados->Contrataciones->find('list',['keyField' => 'contratacion_id','valueField' => 'des_contratacion']);
        $privilegiosinternet = $this->Empleados->Privilegiosinternet->find('list');
        $categoriatelefono = $this->Empleados->Categoriatelefono->find('list',['keyField' => 'categoriatelefono_id','valueField' => 'des_categoriatelefono']);


        $movgafetes = $this->Movgafetes->Movgafetes->find('list', ['limit' => 200]);
        $users = $this->Movgafetes->Users->find('list', ['limit' => 200]);
        $empleados = $this->Movgafetes->Empleados->find('list', ['keyField' => 'empleado_id','valueField' => 'nue']);
        $this->set(compact('movgafete', 'movgafetes', 'users', 'empleados','empleado','categorias', 'dependencias', 'areas', 'departamentos', 'unidades', 'carreras', 'statusprofecional', 'contrataciones', 'status', 'privilegiosinternet', 'categoriatelefono'));
        $this->set('_serialize', ['movgafete']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Movgafete id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movgafete = $this->Movgafetes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movgafete = $this->Movgafetes->patchEntity($movgafete, $this->request->getData());
            if ($this->Movgafetes->save($movgafete)) {
                $this->Flash->success(__('The movgafete has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movgafete could not be saved. Please, try again.'));
        }
        $movgafetes = $this->Movgafetes->Movgafetes->find('list', ['limit' => 200]);
        $users = $this->Movgafetes->Users->find('list', ['limit' => 200]);
        $empleados = $this->Movgafetes->Empleados->find('list', ['keyField' => 'empleado_id','valueField' => 'nue']);
        $this->set(compact('movgafete', 'movgafetes', 'users', 'empleados'));
        $this->set('_serialize', ['movgafete']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Movgafete id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movgafete = $this->Movgafetes->get($id);
        if ($this->Movgafetes->delete($movgafete)) {
            $this->Flash->success(__('The movgafete has been deleted.'));
        } else {
            $this->Flash->error(__('The movgafete could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function isAuthorized($user)
    {
        // All registered users can add articles
        if (in_array($this->request->action, ['add', 'delete','edit','index','view']) && ($user['role_role_id'] === 1)) {
            return true;
        }
        return parent::isAuthorized($user);
    }
}
