<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Statusprofecional Controller
 *
 * @property \App\Model\Table\StatusprofecionalTable $Statusprofecional
 *
 * @method \App\Model\Entity\Statusprofecional[] paginate($object = null, array $settings = [])
 */
class StatusprofecionalController extends AppController
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
        $statusprofecional = $this->paginate($this->Statusprofecional);

        $this->set(compact('statusprofecional'));
        $this->set('_serialize', ['statusprofecional']);
    }

    /**
     * View method
     *
     * @param string|null $id Statusprofecional id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statusprofecional = $this->Statusprofecional->get($id, [
            'contain' => []
        ]);

        $this->set('statusprofecional', $statusprofecional);
        $this->set('_serialize', ['statusprofecional']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statusprofecional = $this->Statusprofecional->newEntity();
        if ($this->request->is('post')) {
            $statusprofecional = $this->Statusprofecional->patchEntity($statusprofecional, $this->request->getData());
            if ($this->Statusprofecional->save($statusprofecional)) {
                $this->Flash->success(__('The statusprofecional has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statusprofecional could not be saved. Please, try again.'));
        }
        $statusprofecionals = $this->Statusprofecional->Statusprofecional->find('list', ['limit' => 200]);
        $this->set(compact('statusprofecional', 'statusprofecionals'));
        $this->set('_serialize', ['statusprofecional']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Statusprofecional id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statusprofecional = $this->Statusprofecional->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statusprofecional = $this->Statusprofecional->patchEntity($statusprofecional, $this->request->getData());
            if ($this->Statusprofecional->save($statusprofecional)) {
                $this->Flash->success(__('The statusprofecional has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statusprofecional could not be saved. Please, try again.'));
        }
        $statusprofecionals = $this->Statusprofecional->Statusprofecional->find('list', ['limit' => 200]);
        $this->set(compact('statusprofecional', 'statusprofecionals'));
        $this->set('_serialize', ['statusprofecional']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Statusprofecional id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statusprofecional = $this->Statusprofecional->get($id);
        if ($this->Statusprofecional->delete($statusprofecional)) {
            $this->Flash->success(__('The statusprofecional has been deleted.'));
        } else {
            $this->Flash->error(__('The statusprofecional could not be deleted. Please, try again.'));
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
