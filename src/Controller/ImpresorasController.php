<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Impresoras Controller
 *
 * @property \App\Model\Table\ImpresorasTable $Impresoras
 *
 * @method \App\Model\Entity\Impresora[] paginate($object = null, array $settings = [])
 */
class ImpresorasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Empleados', 'Tipocolor', 'Tipoimpresora', 'Tiporesguardo', 'Tipoconexion']
        ];
        $impresoras = $this->paginate($this->Impresoras);

        $this->set(compact('impresoras'));
        $this->set('_serialize', ['impresoras']);
    }

    /**
     * View method
     *
     * @param string|null $id Impresora id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $impresora = $this->Impresoras->get($id, [
            'contain' => ['Empleados', 'Tipocolor', 'Tipoimpresora', 'Tiporesguardo', 'Tipoconexion']
        ]);

        $this->set('impresora', $impresora);
        $this->set('_serialize', ['impresora']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $impresora = $this->Impresoras->newEntity();
        if ($this->request->is('post')) {
            $impresora = $this->Impresoras->patchEntity($impresora, $this->request->getData());
            if ($this->Impresoras->save($impresora)) {
                $this->Flash->success(__('The impresora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The impresora could not be saved. Please, try again.'));
        }
        $impresoras = $this->Impresoras->Impresoras->find('list', ['limit' => 200]);
        $empleados = $this->Impresoras->Empleados->find('list', ['keyField' => 'empleado_id','valueField' => 'nue']);
        $tipocolor = $this->Impresoras->Tipocolor->find('list', ['keyField' => 'tipocolor_id','valueField' => 'des_tipocolor']);
        $tipoimpresora = $this->Impresoras->Tipoimpresora->find('list', ['keyField' => 'tipoimpresora_id','valueField' => 'des_tipoimpresora']);
        $tiporesguardo = $this->Impresoras->Tiporesguardo->find('list', ['keyField' => 'tiporesguardo_id','valueField' => 'des_resguardo']);
        $tipoconexion = $this->Impresoras->Tipoconexion->find('list', ['keyField' => 'tipoconexion_id','valueField' => 'des_tipoconexion']);
        $this->set(compact('impresora', 'impresoras', 'empleados', 'tipocolor', 'tipoimpresora', 'tiporesguardo', 'tipoconexion'));
        $this->set('_serialize', ['impresora']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Impresora id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $impresora = $this->Impresoras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $impresora = $this->Impresoras->patchEntity($impresora, $this->request->getData());
            if ($this->Impresoras->save($impresora)) {
                $this->Flash->success(__('The impresora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The impresora could not be saved. Please, try again.'));
        }
        $impresoras = $this->Impresoras->Impresoras->find('list', ['limit' => 200]);
        $empleados = $this->Impresoras->Empleados->find('list', ['keyField' => 'empleado_id','valueField' => 'nue']);
        $tipocolor = $this->Impresoras->Tipocolor->find('list', ['keyField' => 'tipocolor_id','valueField' => 'des_tipocolor']);
        $tipoimpresora = $this->Impresoras->Tipoimpresora->find('list', ['keyField' => 'tipoimpresora_id','valueField' => 'des_tipoimpresora']);
        $tiporesguardo = $this->Impresoras->Tiporesguardo->find('list', ['keyField' => 'tiporesguardo_id','valueField' => 'des_resguardo']);
        $tipoconexion = $this->Impresoras->Tipoconexion->find('list', ['keyField' => 'tipoconexion_id','valueField' => 'des_tipoconexion']);
        $this->set(compact('impresora', 'impresoras', 'empleados', 'tipocolor', 'tipoimpresora', 'tiporesguardo', 'tipoconexion'));
        $this->set('_serialize', ['impresora']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Impresora id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $impresora = $this->Impresoras->get($id);
        if ($this->Impresoras->delete($impresora)) {
            $this->Flash->success(__('The impresora has been deleted.'));
        } else {
            $this->Flash->error(__('The impresora could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



    public function pdf()
    {
            $query = [
            'Impresoras.impresora_id LIKE '=> '%'.$this->request->getData('impresora_id').'%',
            'numero_serie LIKE '=> '%'.$this->request->getData('numero_serie').'%',
            'marca LIKE '=> '%'.$this->request->getData('marca').'%',
            'modelo LIKE '=> '%'.$this->request->getData('modelo').'%',
            'mac_impresora LIKE '=> '%'.$this->request->getData('mac_impresora').'%',
            'ip_impresora LIKE '=> '%'.$this->request->getData('ip_impresora').'%',
            'numero_inventario LIKE '=> '%'.$this->request->getData('numero_inventario').'%',
            'fecha_alta LIKE '=> '%'.$this->request->getData('fecha_alta').'%',
            'velocidad_imprecion LIKE '=> '%'.$this->request->getData('velocidad_imprecion').'%',
            'nodo LIKE '=> '%'.$this->request->getData('nodo').'%',
            'Impresoras.empleados_empleado_id LIKE '=> '%'.$this->request->getData('empleados_empleado_id').'%',
            'Impresoras.tipocolor_tipocolor_id LIKE '=> '%'.$this->request->getData('tipocolor_tipocolor_id').'%',
            'Impresoras.tipoimpresora_tipoimpresora_id LIKE '=> '%'.$this->request->getData('tipoimpresora_tipoimpresora_id').'%',
            'Impresoras.tiporesguardo_tiporesguardo_id LIKE '=> '%'.$this->request->getData('tiporesguardo_tiporesguardo_id').'%',
            'Impresoras.tipoconexion_tipoconexion_id LIKE '=> '%'.$this->request->getData('tipoconexion_tipoconexion_id').'%'
            
            ];
            $newdataquery =[];
            foreach($query as $key => $data) {
                if (strlen($data) > 0 ){
                    $newdataquery[$key] = $data;
                }
            }
            $impresoras=$this->Impresoras->find('all')->where(($newdataquery),[
                'Impresoras.impresora_id' => 'string',
                'Impresoras.empleados_empleado_id' => 'string',
                'Impresoras.tipocolor_tipocolor_id' => 'string',
                'Impresoras.tipoimpresora_tipoimpresora_id' => 'string',
                'Impresoras.tiporesguardo_tiporesguardo_id' => 'string',
                'Impresoras.tipoconexion_tipoconexion_id' => 'string'
            ]);
        $this->viewBuilder()->options([
            'pdfConfig'=>[
                'orientation'=>'landscape',
                'filename'=>'Impresoras.pdf'
            ]
        ]);
        $this->set(compact('impresoras'));
        $this->set('_serialize', ['impresoras']);
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
