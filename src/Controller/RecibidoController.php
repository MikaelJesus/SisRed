<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Recibido Controller
 *
 * @property \App\Model\Table\RecibidoTable $Recibido
 *
 * @method \App\Model\Entity\Recibido[] paginate($object = null, array $settings = [])
 */
class RecibidoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => []
        ];
        $recibido = $this->paginate($this->Recibido);

        $this->set(compact('recibido'));
        $this->set('_serialize', ['recibido']);
    }

    /**
     * View method
     *
     * @param string|null $id Recibido id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recibido = $this->Recibido->get($id, [
            'contain' => []
        ]);

        $this->set('recibido', $recibido);
        $this->set('_serialize', ['recibido']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recibido = $this->Recibido->newEntity();
        if ($this->request->is('post')) {
            $recibido = $this->Recibido->patchEntity($recibido, $this->request->getData());
            if ($this->Recibido->save($recibido)) {
                $this->Flash->success(__('The recibido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recibido could not be saved. Please, try again.'));
        }
        $recibidos = $this->Recibido->Recibido->find('list', ['limit' => 200]);
        $this->set(compact('recibido', 'recibidos'));
        $this->set('_serialize', ['recibido']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recibido id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recibido = $this->Recibido->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recibido = $this->Recibido->patchEntity($recibido, $this->request->getData());
            if ($this->Recibido->save($recibido)) {
                $this->Flash->success(__('The recibido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recibido could not be saved. Please, try again.'));
        }
        $recibidos = $this->Recibido->Recibido->find('list', ['limit' => 200]);
        $this->set(compact('recibido', 'recibidos'));
        $this->set('_serialize', ['recibido']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recibido id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recibido = $this->Recibido->get($id);
        if ($this->Recibido->delete($recibido)) {
            $this->Flash->success(__('The recibido has been deleted.'));
        } else {
            $this->Flash->error(__('The recibido could not be deleted. Please, try again.'));
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
