<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Categoriatelefono Controller
 *
 * @property \App\Model\Table\CategoriatelefonoTable $Categoriatelefono
 *
 * @method \App\Model\Entity\Categoriatelefono[] paginate($object = null, array $settings = [])
 */
class CategoriatelefonoController extends AppController
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
        $categoriatelefono = $this->paginate($this->Categoriatelefono);

        $this->set(compact('categoriatelefono'));
        $this->set('_serialize', ['categoriatelefono']);
    }

    /**
     * View method
     *
     * @param string|null $id Categoriatelefono id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriatelefono = $this->Categoriatelefono->get($id, [
            'contain' => []
        ]);

        $this->set('categoriatelefono', $categoriatelefono);
        $this->set('_serialize', ['categoriatelefono']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriatelefono = $this->Categoriatelefono->newEntity();
        if ($this->request->is('post')) {
            $categoriatelefono = $this->Categoriatelefono->patchEntity($categoriatelefono, $this->request->getData());
            if ($this->Categoriatelefono->save($categoriatelefono)) {
                $this->Flash->success(__('The categoriatelefono has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categoriatelefono could not be saved. Please, try again.'));
        }
        $categoriatelefonos = $this->Categoriatelefono->Categoriatelefono->find('list', ['limit' => 200]);
        $this->set(compact('categoriatelefono', 'categoriatelefonos'));
        $this->set('_serialize', ['categoriatelefono']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categoriatelefono id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriatelefono_tabla= TableRegistry::get('Categoriatelefono');
        $categoriatelefono = $categoriatelefono_tabla->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $query=$categoriatelefono_tabla->query();
            if ($query->update()->set(['categoriatelefono_id'=>$this->request->getData('categoriatelefono_id'),'des_categoriatelefono'=>$this->request->getData('des_categoriatelefono'),'des_nivelasignacion'=>$this->request->getData('des_nivelasignacion')])->where(['categoriatelefono_id'=>$id])->execute()) {
                $this->Flash->success(__('The categoriatelefono has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categoriatelefono could not be saved. Please, try again.'));
        }
        $categoriatelefonos = $this->Categoriatelefono->Categoriatelefono->find('list', ['limit' => 200]);
        $this->set(compact('categoriatelefono', 'categoriatelefonos'));
        $this->set('_serialize', ['categoriatelefono']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categoriatelefono id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriatelefono = $this->Categoriatelefono->get($id);
        if ($this->Categoriatelefono->delete($categoriatelefono)) {
            $this->Flash->success(__('The categoriatelefono has been deleted.'));
        } else {
            $this->Flash->error(__('The categoriatelefono could not be deleted. Please, try again.'));
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