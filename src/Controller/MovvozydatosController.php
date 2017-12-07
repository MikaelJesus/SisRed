<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Movvozydatos Controller
 *
 * @property \App\Model\Table\MovvozydatosTable $Movvozydatos
 *
 * @method \App\Model\Entity\Movvozydato[] paginate($object = null, array $settings = [])
 */
class MovvozydatosController extends AppController
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
        $movvozydatos = $this->paginate($this->Movvozydatos);

        $this->set(compact('movvozydatos'));
        $this->set('_serialize', ['movvozydatos']);
    }

    /**
     * View method
     *
     * @param string|null $id Movvozydato id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movvozydato = $this->Movvozydatos->get($id, [
            'contain' => ['Users', 'Empleados']
        ]);

        $this->set('movvozydato', $movvozydato);
        $this->set('_serialize', ['movvozydato']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $movvozydato = $this->Movvozydatos->newEntity();
        if ($this->request->is('post')) {
            $movvozydato = $this->Movvozydatos->patchEntity($movvozydato, $this->request->getData());
            if ($this->Movvozydatos->save($movvozydato)) {
                $this->Flash->success(__('The movvozydato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movvozydato could not be saved. Please, try again.'));
        }
        $movvozydatos = $this->Movvozydatos->Movvozydatos->find('list', ['limit' => 200]);
        $users = $this->Movvozydatos->Users->find('list', ['limit' => 200]);
        $empleados = $this->Movvozydatos->Empleados->find('list', ['keyField' => 'empleado_id','valueField' => 'nue']);
        $this->set(compact('movvozydato', 'movvozydatos', 'users', 'empleados'));
        $this->set('_serialize', ['movvozydato']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Movvozydato id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movvozydato = $this->Movvozydatos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movvozydato = $this->Movvozydatos->patchEntity($movvozydato, $this->request->getData());
            if ($this->Movvozydatos->save($movvozydato)) {
                $this->Flash->success(__('The movvozydato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movvozydato could not be saved. Please, try again.'));
        }
        $movvozydatos = $this->Movvozydatos->Movvozydatos->find('list', ['limit' => 200]);
        $users = $this->Movvozydatos->Users->find('list', ['limit' => 200]);
        $empleados = $this->Movvozydatos->Empleados->find('list', ['keyField' => 'empleado_id','valueField' => 'nue']);
        $this->set(compact('movvozydato', 'movvozydatos', 'users', 'empleados'));
        $this->set('_serialize', ['movvozydato']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Movvozydato id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movvozydato = $this->Movvozydatos->get($id);
        if ($this->Movvozydatos->delete($movvozydato)) {
            $this->Flash->success(__('The movvozydato has been deleted.'));
        } else {
            $this->Flash->error(__('The movvozydato could not be deleted. Please, try again.'));
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
