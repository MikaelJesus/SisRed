<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pcs Controller
 *
 * @property \App\Model\Table\PcsTable $Pcs
 *
 * @method \App\Model\Entity\Pc[] paginate($object = null, array $settings = [])
 */
class PcsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tiporesguardo', 'Tipoconexion', 'Tipoequipo', 'Empleados']
        ];
        $pcs = $this->paginate($this->Pcs);

        $this->set(compact('pcs'));
        $this->set('_serialize', ['pcs']);
    }

    /**
     * View method
     *
     * @param string|null $id Pc id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pc = $this->Pcs->get($id, [
            'contain' => ['Tiporesguardo', 'Tipoconexion', 'Tipoequipo', 'Empleados']
        ]);

        $this->set('pc', $pc);
        $this->set('_serialize', ['pc']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pc = $this->Pcs->newEntity();
        if ($this->request->is('post')) {
            $pc = $this->Pcs->patchEntity($pc, $this->request->getData());
            if ($this->Pcs->save($pc)) {
                $this->Flash->success(__('The pc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pc could not be saved. Please, try again.'));
        }
        $pcs = $this->Pcs->Pcs->find('list', ['limit' => 200]);
        $tiporesguardo = $this->Pcs->Tiporesguardo->find('list', ['keyField' => 'tiporesguardo_id','valueField' => 'des_resguardo']);
        $tipoconexion = $this->Pcs->Tipoconexion->find('list', ['keyField' => 'tipoconexion_id','valueField' => 'des_tipoconexion']);
        $tipoequipo = $this->Pcs->Tipoequipo->find('list', ['keyField' => 'tipoequipo','valueField' => 'des_tipoequipo']);
        $empleados = $this->Pcs->Empleados->find('list', ['keyField' => 'empleado_id','valueField' => 'nue']);
        $this->set(compact('pc', 'pcs', 'tiporesguardo', 'tipoconexion', 'tipoequipo', 'empleados'));
        $this->set(compact('pc', 'pcs', 'tiporesguardo', 'tipoconexion', 'tipoequipo', 'empleados'));
        $this->set('_serialize', ['pc']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pc id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pc = $this->Pcs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pc = $this->Pcs->patchEntity($pc, $this->request->getData());
            if ($this->Pcs->save($pc)) {
                $this->Flash->success(__('The pc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pc could not be saved. Please, try again.'));
        }
        $pcs = $this->Pcs->Pcs->find('list', ['limit' => 200]);
        $tiporesguardo = $this->Pcs->Tiporesguardo->find('list', ['keyField' => 'tiporesguardo_id','valueField' => 'des_resguardo']);
        $tipoconexion = $this->Pcs->Tipoconexion->find('list', ['keyField' => 'tipoconexion_id','valueField' => 'des_tipoconexion']);
        $tipoequipo = $this->Pcs->Tipoequipo->find('list', ['keyField' => 'tipoequipo','valueField' => 'des_tipoequipo']);
        $empleados = $this->Pcs->Empleados->find('list', ['keyField' => 'empleado_id','valueField' => 'nue']);
        $this->set(compact('pc', 'pcs', 'tiporesguardo', 'tipoconexion', 'tipoequipo', 'empleados'));
        $this->set('_serialize', ['pc']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pc = $this->Pcs->get($id);
        if ($this->Pcs->delete($pc)) {
            $this->Flash->success(__('The pc has been deleted.'));
        } else {
            $this->Flash->error(__('The pc could not be deleted. Please, try again.'));
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
