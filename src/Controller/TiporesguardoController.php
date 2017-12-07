<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tiporesguardo Controller
 *
 * @property \App\Model\Table\TiporesguardoTable $Tiporesguardo
 *
 * @method \App\Model\Entity\Tiporesguardo[] paginate($object = null, array $settings = [])
 */
class TiporesguardoController extends AppController
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
        $tiporesguardo = $this->paginate($this->Tiporesguardo);

        $this->set(compact('tiporesguardo'));
        $this->set('_serialize', ['tiporesguardo']);
    }

    /**
     * View method
     *
     * @param string|null $id Tiporesguardo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiporesguardo = $this->Tiporesguardo->get($id, [
            'contain' => []
        ]);

        $this->set('tiporesguardo', $tiporesguardo);
        $this->set('_serialize', ['tiporesguardo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiporesguardo = $this->Tiporesguardo->newEntity();
        if ($this->request->is('post')) {
            $tiporesguardo = $this->Tiporesguardo->patchEntity($tiporesguardo, $this->request->getData());
            if ($this->Tiporesguardo->save($tiporesguardo)) {
                $this->Flash->success(__('The tiporesguardo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiporesguardo could not be saved. Please, try again.'));
        }
        $tiporesguardos = $this->Tiporesguardo->Tiporesguardo->find('list', ['limit' => 200]);
        $this->set(compact('tiporesguardo', 'tiporesguardos'));
        $this->set('_serialize', ['tiporesguardo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tiporesguardo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiporesguardo = $this->Tiporesguardo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiporesguardo = $this->Tiporesguardo->patchEntity($tiporesguardo, $this->request->getData());
            if ($this->Tiporesguardo->save($tiporesguardo)) {
                $this->Flash->success(__('The tiporesguardo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiporesguardo could not be saved. Please, try again.'));
        }
        $tiporesguardos = $this->Tiporesguardo->Tiporesguardo->find('list', ['limit' => 200]);
        $this->set(compact('tiporesguardo', 'tiporesguardos'));
        $this->set('_serialize', ['tiporesguardo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tiporesguardo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiporesguardo = $this->Tiporesguardo->get($id);
        if ($this->Tiporesguardo->delete($tiporesguardo)) {
            $this->Flash->success(__('The tiporesguardo has been deleted.'));
        } else {
            $this->Flash->error(__('The tiporesguardo could not be deleted. Please, try again.'));
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
