<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Movrequerimientos Controller
 *
 * @property \App\Model\Table\MovrequerimientosTable $Movrequerimientos
 *
 * @method \App\Model\Entity\Movrequerimiento[] paginate($object = null, array $settings = [])
 */
class MovrequerimientosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Requerimientos', 'Statusrequerimiento', 'Recibido']
        ];
        $movrequerimientos = $this->paginate($this->Movrequerimientos);

        $this->set(compact('movrequerimientos'));
        $this->set('_serialize', ['movrequerimientos']);
    }

    /**
     * View method
     *
     * @param string|null $id Movrequerimiento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movrequerimiento = $this->Movrequerimientos->get($id, [
            'contain' => ['Requerimientos', 'Statusrequerimiento', 'Recibido']
        ]);

        $this->set('movrequerimiento', $movrequerimiento);
        $this->set('_serialize', ['movrequerimiento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $movrequerimiento = $this->Movrequerimientos->newEntity();
        if ($this->request->is('post')) {
            $movrequerimiento = $this->Movrequerimientos->patchEntity($movrequerimiento, $this->request->getData());
            if ($this->Movrequerimientos->save($movrequerimiento)) {
                $this->Flash->success(__('The movrequerimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movrequerimiento could not be saved. Please, try again.'));
        }
        $movrequerimientos = $this->Movrequerimientos->Movrequerimientos->find('list', ['limit' => 200]);
        $requerimientos = $this->Movrequerimientos->Requerimientos->find('list', ['limit' => 200]);
        $statusrequerimiento = $this->Movrequerimientos->Statusrequerimiento->find('list', ['limit' => 200]);
        $recibido = $this->Movrequerimientos->Recibido->find('list', ['limit' => 200]);
        $users = $this->Movrequerimientos->Users->find('list');
        $this->set(compact('movrequerimiento', 'movrequerimientos', 'requerimientos', 'statusrequerimiento', 'recibido','users'));
        $this->set('_serialize', ['movrequerimiento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Movrequerimiento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movrequerimiento = $this->Movrequerimientos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movrequerimiento = $this->Movrequerimientos->patchEntity($movrequerimiento, $this->request->getData());
            if ($this->Movrequerimientos->save($movrequerimiento)) {
                $this->Flash->success(__('The movrequerimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movrequerimiento could not be saved. Please, try again.'));
        }
        $movrequerimientos = $this->Movrequerimientos->Movrequerimientos->find('list', ['limit' => 200]);
        $requerimientos = $this->Movrequerimientos->Requerimientos->find('list', ['limit' => 200]);
        $statusrequerimiento = $this->Movrequerimientos->Statusrequerimiento->find('list', ['limit' => 200]);
        $recibido = $this->Movrequerimientos->Recibido->find('list', ['limit' => 200]);
        $users = $this->Movrequerimientos->Users->find('list');
        $this->set(compact('movrequerimiento', 'movrequerimientos', 'requerimientos', 'statusrequerimiento', 'recibido','users'));
        $this->set('_serialize', ['movrequerimiento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Movrequerimiento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movrequerimiento = $this->Movrequerimientos->get($id);
        if ($this->Movrequerimientos->delete($movrequerimiento)) {
            $this->Flash->success(__('The movrequerimiento has been deleted.'));
        } else {
            $this->Flash->error(__('The movrequerimiento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function isAuthorized($user)
    {
        // All registered users can add articles
        if (in_array($this->request->action, ['add', 'delete','edit','index','view']) && ($user['role_role_id'] === 1)) {
            return true;
        }
        if (in_array($this->request->action, ['add','edit','index','view']) && ($user['role_role_id'] === 3)) {
            return true;
        }
        return parent::isAuthorized($user);
    }
}
