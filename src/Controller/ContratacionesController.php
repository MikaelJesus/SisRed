<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Contrataciones Controller
 *
 * @property \App\Model\Table\ContratacionesTable $Contrataciones
 *
 * @method \App\Model\Entity\Contratacione[] paginate($object = null, array $settings = [])
 */
class ContratacionesController extends AppController
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
        $contrataciones = $this->paginate($this->Contrataciones);

        $this->set(compact('contrataciones'));
        $this->set('_serialize', ['contrataciones']);
    }

    /**
     * View method
     *
     * @param string|null $id Contratacione id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contratacione = $this->Contrataciones->get($id, [
            'contain' => []
        ]);

        $this->set('contratacione', $contratacione);
        $this->set('_serialize', ['contratacione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contratacione = $this->Contrataciones->newEntity();
        if ($this->request->is('post')) {
            $contratacione = $this->Contrataciones->patchEntity($contratacione, $this->request->getData());
            if ($this->Contrataciones->save($contratacione)) {
                $this->Flash->success(__('The contratacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contratacione could not be saved. Please, try again.'));
        }
        $contratacions = $this->Contrataciones->Contrataciones->find('list', ['limit' => 200]);
        $this->set(compact('contratacione', 'contratacionse'));
        $this->set('_serialize', ['contratacione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contratacione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contratacion_tabla= TableRegistry::get('Contrataciones');
        $contratacione = $contratacion_tabla->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $query=$contratacion_tabla->query();
            if ($query->update()->set(['contratacion_id'=>$this->request->getData('contratacion_id'),'des_contratacion'=>$this->request->getData('des_contratacion')])->where(['contratacion_id'=>$id])->execute()) {
                $this->Flash->success(__('The contratacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contratacion could not be saved. Please, try again.'));
        }
        $contratacions = $this->Contrataciones->Contrataciones->find('list', ['limit' => 200]);
        $this->set(compact('contratacione', 'contratacions'));
        $this->set('_serialize', ['contratacione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contratacione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contratacione = $this->Contrataciones->get($id);
        if ($this->Contrataciones->delete($contratacione)) {
            $this->Flash->success(__('The contratacione has been deleted.'));
        } else {
            $this->Flash->error(__('The contratacione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



    public function pdf()
    {
            $query = ['Contrataciones.contratacion_id LIKE '=> '%'.$this->request->getData('contratacion_id').'%',
            'des_contratacion LIKE '=> '%'.$this->request->getData('des_contratacion').'%'
            ];
            $newdataquery =[];
            foreach($query as $key => $data) {
                if (strlen($data) > 0 ){
                    $newdataquery[$key] = $data;
                }
            }
            $contrataciones=$this->Contrataciones->find('all')->where(($newdataquery),['Contrataciones.contratacion_id' => 'string']);
        $this->viewBuilder()->options([
            'pdfConfig'=>[
                'orientation'=>'landscape',
                'filename'=>'Contrataciones.pdf'
            ]
        ]);
        $this->set(compact('contrataciones'));
        $this->set('_serialize', ['contrataciones']);
    }
    public function vistapdf()
    {
        
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
