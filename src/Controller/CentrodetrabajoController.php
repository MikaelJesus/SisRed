<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Centrodetrabajo Controller
 *
 * @property \App\Model\Table\CentrodetrabajoTable $Centrodetrabajo
 *
 * @method \App\Model\Entity\Centrodetrabajo[] paginate($object = null, array $settings = [])
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
            'contain' => ['Departamentos']
        ];
        $centrodetrabajo = $this->paginate($this->Centrodetrabajo);

        $this->set(compact('centrodetrabajo'));
        $this->set('_serialize', ['centrodetrabajo']);
    }

    /**
     * View method
     *
     * @param string|null $id Centrodetrabajo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $centrodetrabajo = $this->Centrodetrabajo->get($id, [
            'contain' => ['Departamentos']
        ]);

        $this->set('centrodetrabajo', $centrodetrabajo);
        $this->set('_serialize', ['centrodetrabajo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $centrodetrabajo = $this->Centrodetrabajo->newEntity();
        if ($this->request->is('post')) {
            $centrodetrabajo = $this->Centrodetrabajo->patchEntity($centrodetrabajo, $this->request->getData());
            if ($this->Centrodetrabajo->save($centrodetrabajo)) {
                $this->Flash->success(__('The centrodetrabajo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The centrodetrabajo could not be saved. Please, try again.'));
        }
        $departamentos = $this->Centrodetrabajo->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('centrodetrabajo', 'departamentos'));
        $this->set('_serialize', ['centrodetrabajo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Centrodetrabajo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $centrodetrabajo = $this->Centrodetrabajo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $centrodetrabajo = $this->Centrodetrabajo->patchEntity($centrodetrabajo, $this->request->getData());
            if ($this->Centrodetrabajo->save($centrodetrabajo)) {
                $this->Flash->success(__('The centrodetrabajo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The centrodetrabajo could not be saved. Please, try again.'));
        }
        $departamentos = $this->Centrodetrabajo->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('centrodetrabajo', 'departamentos'));
        $this->set('_serialize', ['centrodetrabajo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Centrodetrabajo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $centrodetrabajo = $this->Centrodetrabajo->get($id);
        if ($this->Centrodetrabajo->delete($centrodetrabajo)) {
            $this->Flash->success(__('The centrodetrabajo has been deleted.'));
        } else {
            $this->Flash->error(__('The centrodetrabajo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
