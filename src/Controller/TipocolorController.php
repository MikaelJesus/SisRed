<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipocolor Controller
 *
 * @property \App\Model\Table\TipocolorTable $Tipocolor
 *
 * @method \App\Model\Entity\Tipocolor[] paginate($object = null, array $settings = [])
 */
class TipocolorController extends AppController
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
        $tipocolor = $this->paginate($this->Tipocolor);

        $this->set(compact('tipocolor'));
        $this->set('_serialize', ['tipocolor']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipocolor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipocolor = $this->Tipocolor->get($id, [
            'contain' => []
        ]);

        $this->set('tipocolor', $tipocolor);
        $this->set('_serialize', ['tipocolor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipocolor = $this->Tipocolor->newEntity();
        if ($this->request->is('post')) {
            $tipocolor = $this->Tipocolor->patchEntity($tipocolor, $this->request->getData());
            if ($this->Tipocolor->save($tipocolor)) {
                $this->Flash->success(__('The tipocolor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipocolor could not be saved. Please, try again.'));
        }
        $tipocolors = $this->Tipocolor->Tipocolor->find('list', ['limit' => 200]);
        $this->set(compact('tipocolor', 'tipocolors'));
        $this->set('_serialize', ['tipocolor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipocolor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipocolor = $this->Tipocolor->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipocolor = $this->Tipocolor->patchEntity($tipocolor, $this->request->getData());
            if ($this->Tipocolor->save($tipocolor)) {
                $this->Flash->success(__('The tipocolor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipocolor could not be saved. Please, try again.'));
        }
        $tipocolors = $this->Tipocolor->Tipocolor->find('list', ['limit' => 200]);
        $this->set(compact('tipocolor', 'tipocolors'));
        $this->set('_serialize', ['tipocolor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipocolor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipocolor = $this->Tipocolor->get($id);
        if ($this->Tipocolor->delete($tipocolor)) {
            $this->Flash->success(__('The tipocolor has been deleted.'));
        } else {
            $this->Flash->error(__('The tipocolor could not be deleted. Please, try again.'));
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
