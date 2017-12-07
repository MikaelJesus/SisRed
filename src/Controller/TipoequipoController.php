<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipoequipo Controller
 *
 * @property \App\Model\Table\TipoequipoTable $Tipoequipo
 *
 * @method \App\Model\Entity\Tipoequipo[] paginate($object = null, array $settings = [])
 */
class TipoequipoController extends AppController
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
        $tipoequipo = $this->paginate($this->Tipoequipo);

        $this->set(compact('tipoequipo'));
        $this->set('_serialize', ['tipoequipo']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipoequipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoequipo = $this->Tipoequipo->get($id, [
            'contain' => []
        ]);

        $this->set('tipoequipo', $tipoequipo);
        $this->set('_serialize', ['tipoequipo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoequipo = $this->Tipoequipo->newEntity();
        if ($this->request->is('post')) {
            $tipoequipo = $this->Tipoequipo->patchEntity($tipoequipo, $this->request->getData());
            if ($this->Tipoequipo->save($tipoequipo)) {
                $this->Flash->success(__('The tipoequipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoequipo could not be saved. Please, try again.'));
        }
        $tipoequipos = $this->Tipoequipo->Tipoequipo->find('list', ['limit' => 200]);
        $this->set(compact('tipoequipo', 'tipoequipos'));
        $this->set('_serialize', ['tipoequipo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipoequipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoequipo = $this->Tipoequipo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoequipo = $this->Tipoequipo->patchEntity($tipoequipo, $this->request->getData());
            if ($this->Tipoequipo->save($tipoequipo)) {
                $this->Flash->success(__('The tipoequipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoequipo could not be saved. Please, try again.'));
        }
        $tipoequipos = $this->Tipoequipo->Tipoequipo->find('list', ['limit' => 200]);
        $this->set(compact('tipoequipo', 'tipoequipos'));
        $this->set('_serialize', ['tipoequipo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipoequipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoequipo = $this->Tipoequipo->get($id);
        if ($this->Tipoequipo->delete($tipoequipo)) {
            $this->Flash->success(__('The tipoequipo has been deleted.'));
        } else {
            $this->Flash->error(__('The tipoequipo could not be deleted. Please, try again.'));
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
