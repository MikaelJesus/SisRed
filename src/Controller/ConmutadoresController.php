<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Conmutadores Controller
 *
 * @property \App\Model\Table\ConmutadoresTable $Conmutadores
 *
 * @method \App\Model\Entity\Conmutadore[] paginate($object = null, array $settings = [])
 */
class ConmutadoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tiporesguardo', 'Empleados']
        ];
        $conmutadores = $this->paginate($this->Conmutadores);

        $this->set(compact('conmutadores'));
        $this->set('_serialize', ['conmutadores']);
    }

    /**
     * View method
     *
     * @param string|null $id Conmutadore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conmutadore = $this->Conmutadores->get($id, [
            'contain' => ['Tiporesguardo', 'Empleados']
        ]);

        $this->set('conmutadore', $conmutadore);
        $this->set('_serialize', ['conmutadore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conmutadore = $this->Conmutadores->newEntity();
        if ($this->request->is('post')) {
            $conmutadore = $this->Conmutadores->patchEntity($conmutadore, $this->request->getData());
            if ($this->Conmutadores->save($conmutadore)) {
                $this->Flash->success(__('The conmutadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conmutadore could not be saved. Please, try again.'));
        }
        $switches = $this->Conmutadores->Conmutadores->find('list', ['limit' => 200]);
        $tiporesguardo = $this->Conmutadores->Tiporesguardo->find('list',['keyField' => 'tiporesguardo_id','valueField' => 'des_resguardo']);
        $empleados = $this->Conmutadores->Empleados->find('list',['keyField' => 'empleado_id','valueField' => 'nue']);
        $this->set(compact('conmutadore', 'switches', 'tiporesguardo', 'empleados'));
        $this->set('_serialize', ['conmutadore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Conmutadore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conmutadore = $this->Conmutadores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conmutadore = $this->Conmutadores->patchEntity($conmutadore, $this->request->getData());
            if ($this->Conmutadores->save($conmutadore)) {
                $this->Flash->success(__('The conmutadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conmutadore could not be saved. Please, try again.'));
        }
        $switches = $this->Conmutadores->Conmutadores->find('list', ['limit' => 200]);
        $tiporesguardo = $this->Conmutadores->Tiporesguardo->find('list',['keyField' => 'tiporesguardo_id','valueField' => 'des_resguardo']);
        $empleados = $this->Conmutadores->Empleados->find('list',['keyField' => 'empleado_id','valueField' => 'nue']);
        $this->set(compact('conmutadore', 'switches', 'tiporesguardo', 'empleados'));
        $this->set(compact('conmutadore', 'switches', 'tiporesguardo', 'empleados'));
        $this->set('_serialize', ['conmutadore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Conmutadore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conmutadore = $this->Conmutadores->get($id);
        if ($this->Conmutadores->delete($conmutadore)) {
            $this->Flash->success(__('The conmutadore has been deleted.'));
        } else {
            $this->Flash->error(__('The conmutadore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function isAuthorized($user)
    {
        // All registered users can add articles
        if (in_array($this->request->action, ['add', 'delete','edit','index','view']) && ($user['role_role_id'] != 1)) {
            return true;
        }
        return parent::isAuthorized($user);
    }
}
