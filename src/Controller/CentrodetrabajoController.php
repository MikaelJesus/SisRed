<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Centrodetrabajo Controller
 *
 * @property \App\Model\Table\CentrodetrabajoTable $Centrodetrabajo
 *
 * @method \App\Model\Entity\Departamento[] paginate($object = null, array $settings = [])
 */
class CentrodetrabajoController extends AppController
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
        $departamentos = $this->paginate($this->Centrodetrabajo);

        $this->set(compact('departamentos'));
        $this->set('_serialize', ['departamentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Departamento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $departamento = $this->Centrodetrabajo->get($id, [
            'contain' => []
        ]);

        $this->set('departamento', $departamento);
        $this->set('_serialize', ['departamento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departamento = $this->Centrodetrabajo->newEntity();
        if ($this->request->is('post')) {
            $departamento = $this->Centrodetrabajo->patchEntity($departamento, $this->request->getData());
            if ($this->Centrodetrabajo->save($departamento)) {
                $this->Flash->success(__('The departamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departamento could not be saved. Please, try again.'));
        }
        $departamentos = $this->Centrodetrabajo->Centrodetrabajo->find('list', ['limit' => 200]);
        $this->set(compact('departamento', 'departamentos'));
        $this->set('_serialize', ['departamento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Departamento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departamento = $this->Centrodetrabajo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departamento = $this->Centrodetrabajo->patchEntity($departamento, $this->request->getData());
            if ($this->Centrodetrabajo->save($departamento)) {
                $this->Flash->success(__('The departamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departamento could not be saved. Please, try again.'));
        }
        $departamentos = $this->Centrodetrabajo->Centrodetrabajo->find('list', ['limit' => 200]);
        $this->set(compact('departamento', 'departamentos'));
        $this->set('_serialize', ['departamento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Departamento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $departamento = $this->Centrodetrabajo->get($id);
        if ($this->Centrodetrabajo->delete($departamento)) {
            $this->Flash->success(__('The departamento has been deleted.'));
        } else {
            $this->Flash->error(__('The departamento could not be deleted. Please, try again.'));
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
