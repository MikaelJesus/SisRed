<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Privilegiosinternet Controller
 *
 * @property \App\Model\Table\PrivilegiosinternetTable $Privilegiosinternet
 *
 * @method \App\Model\Entity\Privilegiosinternet[] paginate($object = null, array $settings = [])
 */
class PrivilegiosinternetController extends AppController
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
        $privilegiosinternet = $this->paginate($this->Privilegiosinternet);

        $this->set(compact('privilegiosinternet'));
        $this->set('_serialize', ['privilegiosinternet']);
    }

    /**
     * View method
     *
     * @param string|null $id Privilegiosinternet id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $privilegiosinternet = $this->Privilegiosinternet->get($id, [
            'contain' => []
        ]);

        $this->set('privilegiosinternet', $privilegiosinternet);
        $this->set('_serialize', ['privilegiosinternet']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $privilegiosinternet = $this->Privilegiosinternet->newEntity();
        if ($this->request->is('post')) {
            $privilegiosinternet = $this->Privilegiosinternet->patchEntity($privilegiosinternet, $this->request->getData());
            if ($this->Privilegiosinternet->save($privilegiosinternet)) {
                $this->Flash->success(__('The privilegiosinternet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The privilegiosinternet could not be saved. Please, try again.'));
        }
        $privilegios = $this->Privilegiosinternet->Privilegiosinternet->find('list', ['limit' => 200]);
        $this->set(compact('privilegiosinternet', 'privilegios'));
        $this->set('_serialize', ['privilegiosinternet']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Privilegiosinternet id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $privilegiosinternet = $this->Privilegiosinternet->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $privilegiosinternet = $this->Privilegiosinternet->patchEntity($privilegiosinternet, $this->request->getData());
            if ($this->Privilegiosinternet->save($privilegiosinternet)) {
                $this->Flash->success(__('The privilegiosinternet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The privilegiosinternet could not be saved. Please, try again.'));
        }
        $privilegios = $this->Privilegiosinternet->Privilegiosinternet->find('list', ['limit' => 200]);
        $this->set(compact('privilegiosinternet', 'privilegios'));
        $this->set('_serialize', ['privilegiosinternet']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Privilegiosinternet id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $privilegiosinternet = $this->Privilegiosinternet->get($id);
        if ($this->Privilegiosinternet->delete($privilegiosinternet)) {
            $this->Flash->success(__('The privilegiosinternet has been deleted.'));
        } else {
            $this->Flash->error(__('The privilegiosinternet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function pdf()
    {
            $query = ['Privilegiosinternet.privilegio_id LIKE '=> '%'.$this->request->getData('privilegio_id').'%',
            'nivel LIKE '=> '%'.$this->request->getData('nivel').'%',
            'des_privilegio LIKE '=> '%'.$this->request->getData('des_privilegio').'%'
            ];
            $newdataquery =[];
            foreach($query as $key => $data) {
                if (strlen($data) > 0 ){
                    $newdataquery[$key] = $data;
                }
            }
            $privilegiosinternet=$this->Privilegiosinternet->find('all')->where(($newdataquery),['Privilegiosinternet.privilegio_id' => 'string']);
        $this->viewBuilder()->options([
            'pdfConfig'=>[
                'orientation'=>'landscape',
                'filename'=>'Privilegiosinternet.pdf'
            ]
        ]);
        $this->set(compact('privilegiosinternet'));
        $this->set('_serialize', ['privilegiosinternet']);
    }
    public function vistapdf()
    {
        
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
