<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Carreras Controller
 *
 * @property \App\Model\Table\CarrerasTable $Carreras
 *
 * @method \App\Model\Entity\Carrera[] paginate($object = null, array $settings = [])
 */
class CarrerasController extends AppController
{


    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {   
        $this->paginate = [
            'contain' => ['Nivelcarrera']
        ];
        $carreras = $this->paginate($this->Carreras);
        // $nivelcarrera = $this->Carreras->Nivelcarrera->find('list',['keyField' => 'nivelcarrera_id','valueField' => 'des_nivelcarrera']);
        $this->set(compact('carreras'));
        $this->set('_serialize', ['carreras']);
    }

    /**
     * View method
     *
     * @param string|null $id Carrera id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carrera = $this->Carreras->get($id, [
            'contain' => ['Nivelcarrera']
        ]);

        $this->set('carrera', $carrera);
        $this->set('_serialize', ['carrera']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carrera = $this->Carreras->newEntity();
        if ($this->request->is('post')) {
            $carrera = $this->Carreras->patchEntity($carrera, $this->request->getData());
            if ($this->Carreras->save($carrera)) {
                $this->Flash->success(__('The carrera has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carrera could not be saved. Please, try again.'));
        }
        // $carreras = $this->Carreras->Carreras->find('list', ['limit' => 200]);
        $nivelcarrera = $this->Carreras->Nivelcarrera->find('list',['keyField' => 'nivelcarrera_id','valueField' => 'des_nivelcarrera']);
        $this->set(compact('carrera', 'carreras', 'nivelcarrera'));
        $this->set('_serialize', ['carrera']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Carrera id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carrera = $this->Carreras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carrera = $this->Carreras->patchEntity($carrera, $this->request->getData());
            if ($this->Carreras->save($carrera)) {
                $this->Flash->success(__('The carrera has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carrera could not be saved. Please, try again.'));
        }
        $carreras = $this->Carreras->Carreras->find('list', ['limit' => 200]);
        $nivelcarrera = $this->Carreras->Nivelcarrera->find('list',['keyField' => 'nivelcarrera_id','valueField' => 'des_nivelcarrera']);
        $this->set(compact('carrera', 'carreras', 'nivelcarrera'));
        $this->set('_serialize', ['carrera']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Carrera id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carrera = $this->Carreras->get($id);
        if ($this->Carreras->delete($carrera)) {
            $this->Flash->success(__('The carrera has been deleted.'));
        } else {
            $this->Flash->error(__('The carrera could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function export()
    {
        // $this->loadModel('Empleados');
        $data = $this->Carreras->find('all');
        // $data1 = $this->Empleados->find('all');
        $_serialize = ['data'];
        $_header = ['Carrera_ID', 'Descripcion', 'Nivel'];
        $this->response->download('Carreras.csv');
        $this->viewBuilder()->className('CsvView.Csv');
        $this->set(compact('data', '_serialize','_header'));
    }

    public function pdf()
    {
            $query = ['des_carrera LIKE '=> '%'.$this->request->getData('des_carrera').'%','Carreras.carrera_id LIKE '=> '%'.$this->request->getData('carrera_id').'%','Carreras.nivelcarrera_nivelcarrera_id LIKE '=> '%'.$this->request->getData('nivelcarrera_nivelcarrera_id').'%'];
            $newdataquery =[];
            foreach($query as $key => $data) {
                if (strlen($data) > 0 ){
                    $newdataquery[$key] = $data;
                }
            }
            $carreras=$this->Carreras->find('all')->where(($newdataquery),['Carreras.carrera_id' => 'string','Carreras.nivelcarrera_nivelcarrera_id' => 'string']);
        // $query = ['Empleados.empleado_id LIKE '=> $code_transaction,'nombre LIKE '=>'%MIK%'];
        // $carreras= $this->Carreras->find('all')->where(['Carreras.carrera_id LIKE' => ('%' . 1 . '%')],['Carreras.carrera_id' => 'string']);
        // $carreras=$this->Dependencias->find('all')->where(($newdataquery),['Dependencias.dependencia_id'=>'string']);
        // echo var_dump($carreras);
        $this->viewBuilder()->options([
            'pdfConfig'=>[
                'orientation'=>'landscape',
                'filename'=>'Carreras.pdf'
            ]
        ]);
        $this->set(compact('carreras'));
        $this->set('_serialize', ['carreras']);
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
