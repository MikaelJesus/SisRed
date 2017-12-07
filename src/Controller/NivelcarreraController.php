<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Nivelcarrera Controller
 *
 * @property \App\Model\Table\NivelcarreraTable $Nivelcarrera
 *
 * @method \App\Model\Entity\Nivelcarrera[] paginate($object = null, array $settings = [])
 */
class NivelcarreraController extends AppController
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
        $nivelcarrera = $this->paginate($this->Nivelcarrera);

        $this->set(compact('nivelcarrera'));
        $this->set('_serialize', ['nivelcarrera']);
    }

    /**
     * View method
     *
     * @param string|null $id Nivelcarrera id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nivelcarrera = $this->Nivelcarrera->get($id, [
            'contain' => []
        ]);

        $this->set('nivelcarrera', $nivelcarrera);
        $this->set('_serialize', ['nivelcarrera']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nivelcarrera = $this->Nivelcarrera->newEntity();
        if ($this->request->is('post')) {
            $nivelcarrera = $this->Nivelcarrera->patchEntity($nivelcarrera, $this->request->getData());
            if ($this->Nivelcarrera->save($nivelcarrera)) {
                $this->Flash->success(__('The nivelcarrera has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nivelcarrera could not be saved. Please, try again.'));
        }
        $nivelcarreras = $this->Nivelcarrera->Nivelcarrera->find('list', ['limit' => 200]);
        $this->set(compact('nivelcarrera', 'nivelcarreras'));
        $this->set('_serialize', ['nivelcarrera']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Nivelcarrera id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nivelcarrera = $this->Nivelcarrera->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nivelcarrera = $this->Nivelcarrera->patchEntity($nivelcarrera, $this->request->getData());
            if ($this->Nivelcarrera->save($nivelcarrera)) {
                $this->Flash->success(__('The nivelcarrera has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nivelcarrera could not be saved. Please, try again.'));
        }
        $nivelcarreras = $this->Nivelcarrera->Nivelcarrera->find('list', ['limit' => 200]);
        $this->set(compact('nivelcarrera', 'nivelcarreras'));
        $this->set('_serialize', ['nivelcarrera']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Nivelcarrera id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nivelcarrera = $this->Nivelcarrera->get($id);
        if ($this->Nivelcarrera->delete($nivelcarrera)) {
            $this->Flash->success(__('The nivelcarrera has been deleted.'));
        } else {
            $this->Flash->error(__('The nivelcarrera could not be deleted. Please, try again.'));
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
