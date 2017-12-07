<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipoconexion Controller
 *
 * @property \App\Model\Table\TipoconexionTable $Tipoconexion
 *
 * @method \App\Model\Entity\Tipoconexion[] paginate($object = null, array $settings = [])
 */
class TipoconexionController extends AppController
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
        $tipoconexion = $this->paginate($this->Tipoconexion);

        $this->set(compact('tipoconexion'));
        $this->set('_serialize', ['tipoconexion']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipoconexion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoconexion = $this->Tipoconexion->get($id, [
            'contain' => []
        ]);

        $this->set('tipoconexion', $tipoconexion);
        $this->set('_serialize', ['tipoconexion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoconexion = $this->Tipoconexion->newEntity();
        if ($this->request->is('post')) {
            $tipoconexion = $this->Tipoconexion->patchEntity($tipoconexion, $this->request->getData());
            if ($this->Tipoconexion->save($tipoconexion)) {
                $this->Flash->success(__('The tipoconexion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoconexion could not be saved. Please, try again.'));
        }
        $tipoconexions = $this->Tipoconexion->Tipoconexion->find('list', ['limit' => 200]);
        $this->set(compact('tipoconexion', 'tipoconexions'));
        $this->set('_serialize', ['tipoconexion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipoconexion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoconexion = $this->Tipoconexion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoconexion = $this->Tipoconexion->patchEntity($tipoconexion, $this->request->getData());
            if ($this->Tipoconexion->save($tipoconexion)) {
                $this->Flash->success(__('The tipoconexion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoconexion could not be saved. Please, try again.'));
        }
        $tipoconexions = $this->Tipoconexion->Tipoconexion->find('list', ['limit' => 200]);
        $this->set(compact('tipoconexion', 'tipoconexions'));
        $this->set('_serialize', ['tipoconexion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipoconexion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoconexion = $this->Tipoconexion->get($id);
        if ($this->Tipoconexion->delete($tipoconexion)) {
            $this->Flash->success(__('The tipoconexion has been deleted.'));
        } else {
            $this->Flash->error(__('The tipoconexion could not be deleted. Please, try again.'));
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
