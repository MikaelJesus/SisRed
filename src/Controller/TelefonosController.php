<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Telefonos Controller
 *
 * @property \App\Model\Table\TelefonosTable $Telefonos
 *
 * @method \App\Model\Entity\Telefono[] paginate($object = null, array $settings = [])
 */
class TelefonosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Empleados']
        ];
        $telefonos = $this->paginate($this->Telefonos);

        $this->set(compact('telefonos'));
        $this->set('_serialize', ['telefonos']);
    }

    /**
     * View method
     *
     * @param string|null $id Telefono id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $telefono = $this->Telefonos->get($id, [
            'contain' => ['Empleados']
        ]);

        $this->set('telefono', $telefono);
        $this->set('_serialize', ['telefono']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $telefono = $this->Telefonos->newEntity();
        if ($this->request->is('post')) {
            $telefono = $this->Telefonos->patchEntity($telefono, $this->request->getData());
            if ($this->Telefonos->save($telefono)) {
                $this->Flash->success(__('The telefono has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The telefono could not be saved. Please, try again.'));
        }
        $telefonos = $this->Telefonos->Telefonos->find('list', ['limit' => 200]);
        $empleados = $this->Telefonos->Empleados->find('list', ['keyField'=>'empleado_id','valueField'=>'nue']);
        $this->set(compact('telefono', 'telefonos', 'empleados'));
        $this->set('_serialize', ['telefono']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Telefono id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $telefono = $this->Telefonos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telefono = $this->Telefonos->patchEntity($telefono, $this->request->getData());
            if ($this->Telefonos->save($telefono)) {
                $this->Flash->success(__('The telefono has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The telefono could not be saved. Please, try again.'));
        }
        $telefonos = $this->Telefonos->Telefonos->find('list', ['limit' => 200]);
        $empleados = $this->Telefonos->Empleados->find('list', ['keyField'=>'empleado_id','valueField'=>'nue']);
        $this->set(compact('telefono', 'telefonos', 'empleados'));
        $this->set('_serialize', ['telefono']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Telefono id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telefono = $this->Telefonos->get($id);
        if ($this->Telefonos->delete($telefono)) {
            $this->Flash->success(__('The telefono has been deleted.'));
        } else {
            $this->Flash->error(__('The telefono could not be deleted. Please, try again.'));
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
