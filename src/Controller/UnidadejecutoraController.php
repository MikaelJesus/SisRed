<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Unidadejecutora Controller
 *
 * @property \App\Model\Table\UnidadejecutoraTable $Unidadejecutora
 *
 * @method \App\Model\Entity\Area[] paginate($object = null, array $settings = [])
 */
class UnidadejecutoraController extends AppController
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
        $areas = $this->paginate($this->Unidadejecutora);

        $this->set(compact('areas'));
        $this->set('_serialize', ['areas']);
    }

    /**
     * View method
     *
     * @param string|null $id Area id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $area = $this->Unidadejecutora->get($id, [
            'contain' => []
        ]);

        $this->set('area', $area);
        $this->set('_serialize', ['area']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $area = $this->Unidadejecutora->newEntity();
        if ($this->request->is('post')) {
            $area = $this->Unidadejecutora->patchEntity($area, $this->request->getData());
            if ($this->Unidadejecutora->save($area)) {
                $this->Flash->success(__('The area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The area could not be saved. Please, try again.'));
        }
        $areas = $this->Unidadejecutora->Unidadejecutora->find('list', ['limit' => 200]);
        $this->set(compact('area', 'areas'));
        $this->set('_serialize', ['area']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Area id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $area = $this->Unidadejecutora->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $area = $this->Unidadejecutora->patchEntity($area, $this->request->getData());
            if ($this->Unidadejecutora->save($area)) {
                $this->Flash->success(__('The area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The area could not be saved. Please, try again.'));
        }
        $areas = $this->Unidadejecutora->Unidadejecutora->find('list', ['limit' => 200]);
        $this->set(compact('area', 'areas'));
        $this->set('_serialize', ['area']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Area id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $area = $this->Unidadejecutora->get($id);
        if ($this->Unidadejecutora->delete($area)) {
            $this->Flash->success(__('The area has been deleted.'));
        } else {
            $this->Flash->error(__('The area could not be deleted. Please, try again.'));
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
