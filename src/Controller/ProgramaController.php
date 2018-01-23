<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Programa Controller
 *
 * @property \App\Model\Table\ProgramaTable $Programa
 *
 * @method \App\Model\Entity\Unidade[] paginate($object = null, array $settings = [])
 */
class ProgramaController extends AppController
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
        $unidades = $this->paginate($this->Programa);

        $this->set(compact('unidades'));
        $this->set('_serialize', ['unidades']);
    }

    /**
     * View method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $unidade = $this->Programa->get($id, [
            'contain' => []
        ]);

        $this->set('unidade', $unidade);
        $this->set('_serialize', ['unidade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $unidade = $this->Programa->newEntity();
        if ($this->request->is('post')) {
            $unidade = $this->Programa->patchEntity($unidade, $this->request->getData());
            if ($this->Programa->save($unidade)) {
                $this->Flash->success(__('The unidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The unidade could not be saved. Please, try again.'));
        }
        $unidads = $this->Programa->Programa->find('list', ['limit' => 200]);
        $this->set(compact('unidade', 'unidads'));
        $this->set('_serialize', ['unidade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $unidade = $this->Programa->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $unidade = $this->Programa->patchEntity($unidade, $this->request->getData());
            if ($this->Programa->save($unidade)) {
                $this->Flash->success(__('The unidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The unidade could not be saved. Please, try again.'));
        }
        $unidads = $this->Programa->Programa->find('list', ['limit' => 200]);
        $this->set(compact('unidade', 'unidads'));
        $this->set('_serialize', ['unidade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $unidade = $this->Programa->get($id);
        if ($this->Programa->delete($unidade)) {
            $this->Flash->success(__('The unidade has been deleted.'));
        } else {
            $this->Flash->error(__('The unidade could not be deleted. Please, try again.'));
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
