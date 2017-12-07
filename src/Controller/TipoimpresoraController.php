<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipoimpresora Controller
 *
 * @property \App\Model\Table\TipoimpresoraTable $Tipoimpresora
 *
 * @method \App\Model\Entity\Tipoimpresora[] paginate($object = null, array $settings = [])
 */
class TipoimpresoraController extends AppController
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
        $tipoimpresora = $this->paginate($this->Tipoimpresora);

        $this->set(compact('tipoimpresora'));
        $this->set('_serialize', ['tipoimpresora']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipoimpresora id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoimpresora = $this->Tipoimpresora->get($id, [
            'contain' => []
        ]);

        $this->set('tipoimpresora', $tipoimpresora);
        $this->set('_serialize', ['tipoimpresora']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoimpresora = $this->Tipoimpresora->newEntity();
        if ($this->request->is('post')) {
            $tipoimpresora = $this->Tipoimpresora->patchEntity($tipoimpresora, $this->request->getData());
            if ($this->Tipoimpresora->save($tipoimpresora)) {
                $this->Flash->success(__('The tipoimpresora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoimpresora could not be saved. Please, try again.'));
        }
        $tipoimpresoras = $this->Tipoimpresora->Tipoimpresora->find('list', ['limit' => 200]);
        $this->set(compact('tipoimpresora', 'tipoimpresoras'));
        $this->set('_serialize', ['tipoimpresora']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipoimpresora id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoimpresora = $this->Tipoimpresora->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoimpresora = $this->Tipoimpresora->patchEntity($tipoimpresora, $this->request->getData());
            if ($this->Tipoimpresora->save($tipoimpresora)) {
                $this->Flash->success(__('The tipoimpresora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoimpresora could not be saved. Please, try again.'));
        }
        $tipoimpresoras = $this->Tipoimpresora->Tipoimpresora->find('list', ['limit' => 200]);
        $this->set(compact('tipoimpresora', 'tipoimpresoras'));
        $this->set('_serialize', ['tipoimpresora']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipoimpresora id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoimpresora = $this->Tipoimpresora->get($id);
        if ($this->Tipoimpresora->delete($tipoimpresora)) {
            $this->Flash->success(__('The tipoimpresora has been deleted.'));
        } else {
            $this->Flash->error(__('The tipoimpresora could not be deleted. Please, try again.'));
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
