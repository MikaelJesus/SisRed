<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Statusrequerimiento Controller
 *
 * @property \App\Model\Table\StatusrequerimientoTable $Statusrequerimiento
 *
 * @method \App\Model\Entity\Statusrequerimiento[] paginate($object = null, array $settings = [])
 */
class StatusrequerimientoController extends AppController
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
        $statusrequerimiento = $this->paginate($this->Statusrequerimiento);

        $this->set(compact('statusrequerimiento'));
        $this->set('_serialize', ['statusrequerimiento']);
    }

    /**
     * View method
     *
     * @param string|null $id Statusrequerimiento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statusrequerimiento = $this->Statusrequerimiento->get($id, [
            'contain' => []
        ]);

        $this->set('statusrequerimiento', $statusrequerimiento);
        $this->set('_serialize', ['statusrequerimiento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statusrequerimiento = $this->Statusrequerimiento->newEntity();
        if ($this->request->is('post')) {
            $statusrequerimiento = $this->Statusrequerimiento->patchEntity($statusrequerimiento, $this->request->getData());
            if ($this->Statusrequerimiento->save($statusrequerimiento)) {
                $this->Flash->success(__('The statusrequerimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statusrequerimiento could not be saved. Please, try again.'));
        }
        $statusrequerimientos = $this->Statusrequerimiento->Statusrequerimiento->find('list', ['limit' => 200]);
        $this->set(compact('statusrequerimiento', 'statusrequerimientos'));
        $this->set('_serialize', ['statusrequerimiento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Statusrequerimiento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statusrequerimiento = $this->Statusrequerimiento->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statusrequerimiento = $this->Statusrequerimiento->patchEntity($statusrequerimiento, $this->request->getData());
            if ($this->Statusrequerimiento->save($statusrequerimiento)) {
                $this->Flash->success(__('The statusrequerimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statusrequerimiento could not be saved. Please, try again.'));
        }
        $statusrequerimientos = $this->Statusrequerimiento->Statusrequerimiento->find('list', ['limit' => 200]);
        $this->set(compact('statusrequerimiento', 'statusrequerimientos'));
        $this->set('_serialize', ['statusrequerimiento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Statusrequerimiento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statusrequerimiento = $this->Statusrequerimiento->get($id);
        if ($this->Statusrequerimiento->delete($statusrequerimiento)) {
            $this->Flash->success(__('The statusrequerimiento has been deleted.'));
        } else {
            $this->Flash->error(__('The statusrequerimiento could not be deleted. Please, try again.'));
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
