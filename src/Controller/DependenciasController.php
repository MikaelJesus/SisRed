<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Dependencias Controller
 *
 * @property \App\Model\Table\DependenciasTable $Dependencias
 *
 * @method \App\Model\Entity\Dependencia[] paginate($object = null, array $settings = [])
 */
class DependenciasController extends AppController
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
        $dependencias = $this->paginate($this->Dependencias);

        $this->set(compact('dependencias'));
        $this->set('_serialize', ['dependencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Dependencia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dependencia = $this->Dependencias->get($id, [
            'contain' => []
        ]);

        $this->set('dependencia', $dependencia);
        $this->set('_serialize', ['dependencia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dependencia = $this->Dependencias->newEntity();
        if ($this->request->is('post')) {
            $dependencia = $this->Dependencias->patchEntity($dependencia, $this->request->getData());
            if ($this->Dependencias->save($dependencia)) {
                $this->Flash->success(__('The dependencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dependencia could not be saved. Please, try again.'));
        }
        // $dependencias = $this->Dependencias->Dependencias->find('list', ['limit' => 200]);
        $this->set(compact('dependencia', 'dependencias'));
        $this->set('_serialize', ['dependencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dependencia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dependencia_tabla= TableRegistry::get('Dependencias');
        $dependencia = $dependencia_tabla->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $query=$dependencia_tabla->query();
            if ($query->update()->set(['dependencia_id'=>$this->request->getData('dependencia_id'),'des_dependencia'=>$this->request->getData('des_dependencia')])->where(['dependencia_id'=>$id])->execute()) {
                $this->Flash->success(__('The dependencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dependencia could not be saved. Please, try again.'));
        }
        $dependencias = $this->Dependencias->Dependencias->find('list', ['limit' => 200]);
        $this->set(compact('dependencia', 'dependencias'));
        $this->set('_serialize', ['dependencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dependencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dependencia = $this->Dependencias->get($id);
        if ($this->Dependencias->delete($dependencia)) {
            $this->Flash->success(__('The dependencia has been deleted.'));
        } else {
            $this->Flash->error(__('The dependencia could not be deleted. Please, try again.'));
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
