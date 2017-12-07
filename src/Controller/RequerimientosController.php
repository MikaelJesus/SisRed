<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Requerimientos Controller
 *
 * @property \App\Model\Table\RequerimientosTable $Requerimientos
 *
 * @method \App\Model\Entity\Requerimiento[] paginate($object = null, array $settings = [])
 */
class RequerimientosController extends AppController
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
        $requerimientos = $this->paginate($this->Requerimientos);

        $this->set(compact('requerimientos'));
        $this->set('_serialize', ['requerimientos']);
    }

    /**
     * View method
     *
     * @param string|null $id Requerimiento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $requerimiento = $this->Requerimientos->get($id, [
            'contain' => []
        ]);

        $this->set('requerimiento', $requerimiento);
        $this->set('_serialize', ['requerimiento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $requerimiento = $this->Requerimientos->newEntity();
        if ($this->request->is('post')) {
            $requerimiento = $this->Requerimientos->patchEntity($requerimiento, $this->request->getData());
            if ($this->Requerimientos->save($requerimiento)) {
                $this->Flash->success(__('The requerimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requerimiento could not be saved. Please, try again.'));
        }
        $requerimientos = $this->Requerimientos->Requerimientos->find('list', ['limit' => 200]);
        $this->set(compact('requerimiento', 'requerimientos'));
        $this->set('_serialize', ['requerimiento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Requerimiento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $requerimiento = $this->Requerimientos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $requerimiento = $this->Requerimientos->patchEntity($requerimiento, $this->request->getData());
            if ($this->Requerimientos->save($requerimiento)) {
                $this->Flash->success(__('The requerimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requerimiento could not be saved. Please, try again.'));
        }
        $requerimientos = $this->Requerimientos->Requerimientos->find('list', ['limit' => 200]);
        $this->set(compact('requerimiento', 'requerimientos'));
        $this->set('_serialize', ['requerimiento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Requerimiento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $requerimiento = $this->Requerimientos->get($id);
        if ($this->Requerimientos->delete($requerimiento)) {
            $this->Flash->success(__('The requerimiento has been deleted.'));
        } else {
            $this->Flash->error(__('The requerimiento could not be deleted. Please, try again.'));
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
