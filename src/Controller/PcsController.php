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
        $tipoequipo = $this->Pcs->Tipoequipo->find('list', ['keyField' => 'tipoequipo_id','valueField' => 'des_tipoequipo']);
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




    public function pdf()
    {
            $query = ['Pcs.pc_id LIKE '=> '%'.$this->request->getData('pc_id').'%',
            'direccion_mac LIKE '=> '%'.$this->request->getData('direccion_mac').'%',
            'marca LIKE '=> '%'.$this->request->getData('marca').'%',
            'modelo_pc LIKE '=> '%'.$this->request->getData('modelo_pc').'%',
            'sistema_operativo LIKE '=> '%'.$this->request->getData('sistema_operativo').'%',
            'nombre_red LIKE '=> '%'.$this->request->getData('nombre_red').'%',
            'grupo_trabajo LIKE '=> '%'.$this->request->getData('grupo_trabajo').'%',
            'ip LIKE '=> '%'.$this->request->getData('ip').'%',
            'antivirus LIKE '=> '%'.$this->request->getData('antivirus').'%',
            'nodo LIKE '=> '%'.$this->request->getData('nodo').'%',
            'edificio LIKE '=> '%'.$this->request->getData('edificio').'%',
            'piso LIKE '=> '%'.$this->request->getData('piso').'%',
            'fecha_alta LIKE '=> '%'.$this->request->getData('fecha_alta').'%',
            'marca_procesador LIKE '=> '%'.$this->request->getData('marca_procesador').'%',
            'modelo_procesador LIKE '=> '%'.$this->request->getData('modelo_procesador').'%',
            'velocidad_procesador LIKE '=> '%'.$this->request->getData('velocidad_procesador').'%',
            'capacidad_disco LIKE '=> '%'.$this->request->getData('capacidad_disco').'%',
            'capacidad_ram LIKE '=> '%'.$this->request->getData('capacidad_ram').'%',
            'Pcs.tiporesguardo_tiporesguardo_id LIKE '=> '%'.$this->request->getData('tiporesguardo_tiporesguardo_id').'%',
            'Pcs.tipoconexion_tipoconexion_id LIKE '=> '%'.$this->request->getData('tipoconexion_tipoconexion_id').'%',
            'Pcs.tipoequipo_tipoequipo_id LIKE '=> '%'.$this->request->getData('tipoequipo_tipoequipo_id').'%',
            'Pcs.empleados_empleado_id LIKE '=> '%'.$this->request->getData('empleados_empleado_id').'%'
            ];
            $newdataquery =[];
            foreach($query as $key => $data) {
                if (strlen($data) > 0 ){
                    $newdataquery[$key] = $data;
                }
            }
            $pcs=$this->Pcs->find('all')->where(($newdataquery),[
                'Pcs.pc_id' => 'string','Pcs.tiporesguardo_tiporesguardo_id' => 'string',
                'Pcs.pc_id' => 'string','Pcs.tipoconexion_tipoconexion_id' => 'string',
                'Pcs.pc_id' => 'string','Pcs.tipoequipo_tipoequipo_id' => 'string',
                'Pcs.empleados_empleado_id' => 'string'
            ]);
        $this->viewBuilder()->options([
            'pdfConfig'=>[
                'orientation'=>'landscape',
                'filename'=>'Pcs.pdf'
            ]
        ]);
        $this->set(compact('pcs'));
        $this->set('_serialize', ['pcs']);
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
