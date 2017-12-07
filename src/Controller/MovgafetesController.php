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
