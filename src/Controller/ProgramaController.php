<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Programa Controller
 *
 * @property \App\Model\Table\ProgramaTable $Programa
 *
 * @method \App\Model\Entity\Programa[] paginate($object = null, array $settings = [])
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
            'contain' => ['Unidads']
        ];
        $programa = $this->paginate($this->Programa);

        $this->set(compact('programa'));
        $this->set('_serialize', ['programa']);
    }

    /**
     * View method
     *
     * @param string|null $id Programa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $programa = $this->Programa->get($id, [
            'contain' => ['Unidads']
        ]);

        $this->set('programa', $programa);
        $this->set('_serialize', ['programa']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $programa = $this->Programa->newEntity();
        if ($this->request->is('post')) {
            $programa = $this->Programa->patchEntity($programa, $this->request->getData());
            if ($this->Programa->save($programa)) {
                $this->Flash->success(__('The programa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programa could not be saved. Please, try again.'));
        }
        $unidads = $this->Programa->Unidads->find('list', ['limit' => 200]);
        $this->set(compact('programa', 'unidads'));
        $this->set('_serialize', ['programa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Programa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $programa = $this->Programa->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $programa = $this->Programa->patchEntity($programa, $this->request->getData());
            if ($this->Programa->save($programa)) {
                $this->Flash->success(__('The programa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programa could not be saved. Please, try again.'));
        }
        $unidads = $this->Programa->Unidads->find('list', ['limit' => 200]);
        $this->set(compact('programa', 'unidads'));
        $this->set('_serialize', ['programa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Programa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $programa = $this->Programa->get($id);
        if ($this->Programa->delete($programa)) {
            $this->Flash->success(__('The programa has been deleted.'));
        } else {
            $this->Flash->error(__('The programa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
