<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Empleados Controller
 *
 * @property \App\Model\Table\EmpleadosTable $Empleados
 *
 * @method \App\Model\Entity\Empleado[] paginate($object = null, array $settings = [])
 */
class EmpleadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categorias', 'Dependencias', 'Areas', 'Departamentos', 'Unidades', 'Carreras', 'Statusprofecional', 'Contrataciones', 'Status', 'Privilegiosinternet', 'Categoriatelefono']
        ];
        $empleados = $this->paginate($this->Empleados);

        $this->set(compact('empleados'));
        $this->set('_serialize', ['empleados']);
    }

    /**
     * View method
     *
     * @param string|null $id Empleado id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empleado = $this->Empleados->get($id, [
            'contain' => ['Categorias', 'Dependencias', 'Areas', 'Departamentos', 'Unidades', 'Carreras', 'Statusprofecional', 'Contrataciones', 'Status', 'Privilegiosinternet', 'Categoriatelefono']
        ]);

        $this->set('empleado', $empleado);
        $this->set('_serialize', ['empleado']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empleado = $this->Empleados->newEntity();
        if ($this->request->is('post')) {
            $empleado = $this->Empleados->patchEntity($empleado, $this->request->getData());
            if ($this->Empleados->save($empleado)) {
                $this->Flash->success(__('The empleado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empleado could not be saved. Please, try again.'));
        }
        $empleados = $this->Empleados->Empleados->find('list', ['limit' => 200]);
        $categorias = $this->Empleados->Categorias->find('list',['keyField' => 'categoria_id','valueField' => 'des_categoria']);
        $dependencias = $this->Empleados->Dependencias->find('list',['keyField' => 'dependencia_id','valueField' => 'des_dependencia']);
        $areas = $this->Empleados->Areas->find('list',['keyField' => 'area_id','valueField' => 'des_area']);
        $departamentos = $this->Empleados->Departamentos->find('list',['keyField' => 'departamento_id','valueField' => 'des_departamento']);
        $unidades = $this->Empleados->Unidades->find('list',['keyField' => 'unidad_id','valueField' => 'des_unidad']);
        $carreras = $this->Empleados->Carreras->find('list',['keyField' => 'carrera_id','valueField' => 'des_carrera']);
        $statusprofecional = $this->Empleados->Statusprofecional->find('list',['keyField' => 'statusprofecional_id','valueField' => 'des_statusprofecional']);
        $contrataciones = $this->Empleados->Contrataciones->find('list',['keyField' => 'contratacion_id','valueField' => 'des_contratacion']);
        $status = $this->Empleados->Status->find('list',['keyField' => 'status_id','valueField' => 'des_status']);
        $privilegiosinternet = $this->Empleados->Privilegiosinternet->find('list');
        $categoriatelefono = $this->Empleados->Categoriatelefono->find('list',['keyField' => 'categoriatelefono_id','valueField' => 'des_categoriatelefono']);
        $this->set(compact('empleado', 'empleados', 'categorias', 'dependencias', 'areas', 'departamentos', 'unidades', 'carreras', 'statusprofecional', 'contrataciones', 'status', 'privilegiosinternet', 'categoriatelefono'));
        $this->set('_serialize', ['empleado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Empleado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empleado = $this->Empleados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empleado = $this->Empleados->patchEntity($empleado, $this->request->getData());
            if ($this->Empleados->save($empleado)) {
                $this->Flash->success(__('The empleado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empleado could not be saved. Please, try again.'));
        }
        $empleados = $this->Empleados->Empleados->find('list', ['limit' => 200]);
        $categorias = $this->Empleados->Categorias->find('list',['keyField' => 'categoria_id','valueField' => 'des_categoria']);
        $dependencias = $this->Empleados->Dependencias->find('list',['keyField' => 'dependencia_id','valueField' => 'des_dependencia']);
        $areas = $this->Empleados->Areas->find('list',['keyField' => 'area_id','valueField' => 'des_area']);
        $departamentos = $this->Empleados->Departamentos->find('list',['keyField' => 'departamento_id','valueField' => 'des_departamento']);
        $unidades = $this->Empleados->Unidades->find('list',['keyField' => 'unidad_id','valueField' => 'des_unidad']);
        $carreras = $this->Empleados->Carreras->find('list',['keyField' => 'carrera_id','valueField' => 'des_carrera']);
        $statusprofecional = $this->Empleados->Statusprofecional->find('list',['keyField' => 'statusprofecional_id','valueField' => 'des_statusprofecional']);
        $contrataciones = $this->Empleados->Contrataciones->find('list',['keyField' => 'contratacion_id','valueField' => 'des_contratacion']);
        $status = $this->Empleados->Status->find('list',['keyField' => 'status_id','valueField' => 'des_status']);
        $privilegiosinternet = $this->Empleados->Privilegiosinternet->find('list',['keyField' => 'privilegiosinternet_id','valueField' => 'nivel']);
        $categoriatelefono = $this->Empleados->Categoriatelefono->find('list',['keyField' => 'categoriatelefono_id','valueField' => 'des_categoriatelefono']);
        $this->set(compact('empleado', 'empleados', 'categorias', 'dependencias', 'areas', 'departamentos', 'unidades', 'carreras', 'statusprofecional', 'contrataciones', 'status', 'privilegiosinternet', 'categoriatelefono'));
        $this->set('_serialize', ['empleado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Empleado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empleado = $this->Empleados->get($id);
        if ($this->Empleados->delete($empleado)) {
            $this->Flash->success(__('The empleado has been deleted.'));
        } else {
            $this->Flash->error(__('The empleado could not be deleted. Please, try again.'));
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
