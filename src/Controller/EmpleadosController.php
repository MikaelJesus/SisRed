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
        // $this->paginate = [
        //     'contain' => ['Categorias', 'Dependencias', 'Unidadejecutora', 'Centrodetrabajo', 'Programa', 'Carreras', 'Statusprofecional', 'Contrataciones', 'Privilegiosinternet', 'Categoriatelefono']
        // ];
        // $empleados = $this->paginate($this->Empleados);
        // $this->set(compact('empleados'));
        // $this->set('_serialize', ['empleados']);


        $query = $this->Empleados
        // Use the plugins 'search' custom finder and pass in the
        // processed query params
        ->find('search', ['search' => $this->request->query]);

    $this->set('empleados', $this->paginate($query));
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
            'contain' => ['Categorias', 'Dependencias', 'Unidadejecutora', 'Centrodetrabajo', 'Programa', 'Carreras', 'Statusprofecional', 'Contrataciones', 'Privilegiosinternet', 'Categoriatelefono']
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
        $areas = $this->Empleados->Unidadejecutora->find('list',['keyField' => 'area_id','valueField' => 'des_area']);
        $departamentos = $this->Empleados->Centrodetrabajo->find('list',['keyField' => 'departamento_id','valueField' => 'des_departamento']);
        $unidades = $this->Empleados->Programa->find('list',['keyField' => 'unidad_id','valueField' => 'des_unidad']);
        $carreras = $this->Empleados->Carreras->find('list',['keyField' => 'carrera_id','valueField' => 'des_carrera']);
        $statusprofecional = $this->Empleados->Statusprofecional->find('list',['keyField' => 'statusprofecional_id','valueField' => 'des_statusprofecional']);
        $contrataciones = $this->Empleados->Contrataciones->find('list',['keyField' => 'contratacion_id','valueField' => 'des_contratacion']);
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
        $areas = $this->Empleados->Unidadejecutora->find('list',['keyField' => 'area_id','valueField' => 'des_area']);
        $departamentos = $this->Empleados->Centrodetrabajo->find('list',['keyField' => 'departamento_id','valueField' => 'des_departamento']);
        $unidades = $this->Empleados->Programa->find('list',['keyField' => 'unidad_id','valueField' => 'des_unidad']);
        $carreras = $this->Empleados->Carreras->find('list',['keyField' => 'carrera_id','valueField' => 'des_carrera']);
        $statusprofecional = $this->Empleados->Statusprofecional->find('list',['keyField' => 'statusprofecional_id','valueField' => 'des_statusprofecional']);
        $contrataciones = $this->Empleados->Contrataciones->find('list',['keyField' => 'contratacion_id','valueField' => 'des_contratacion']);
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



    public function pdf()
    {
            $query = ['Empleados.empleado_id LIKE '=> '%'.$this->request->getData('empleado_id').'%',
            'nue LIKE '=> '%'.$this->request->getData('nue').'%'
            // 'nup LIKE '=> '%'.$this->request->getData('nup').'%',
            // 'nombre LIKE '=> '%'.$this->request->getData('nombre').'%',
            // 'apellidop LIKE '=> '%'.$this->request->getData('apellidop').'%',
            // 'apellidom LIKE '=> '%'.$this->request->getData('apellidom').'%',
            // 'curp LIKE '=> '%'.$this->request->getData('curp').'%',
            // 'rfc LIKE '=> '%'.$this->request->getData('rfc').'%',
            // 'empleados.categorias_categoria_id LIKE '=> '%'.$this->request->getData('categorias_categoria_id').'%',
            // 'empleados.dependencias_dependencia_id LIKE '=> '%'.$this->request->getData('dependencias_dependencia_id').'%',
            // 'empleados.areas_area_id LIKE '=> '%'.$this->request->getData('areas_area_id').'%',
            // 'empleados.unidades_unidad_id LIKE '=> '%'.$this->request->getData('unidades_unidad_id').'%',
            // 'empleados.departamentos_departamento_id LIKE '=> '%'.$this->request->getData('departamentos_departamento_id').'%',
            // 'fecha_gafete LIKE '=> '%'.$this->request->getData('fecha_gafete').'%',
            // 'sexo LIKE '=> '%'.$this->request->getData('sexo').'%',
            // 'empleados.carreras_carrera_id LIKE '=> '%'.$this->request->getData('carreras_carrera_id').'%',
            // 'empleados.statusprofecional_statusprofecional_id LIKE '=> '%'.$this->request->getData('statusprofecional_statusprofecional_id').'%',
            // 'empleados.contrataciones_contratacion_id LIKE '=> '%'.$this->request->getData('contrataciones_contratacion_id').'%',
            // 'domicilio LIKE '=> '%'.$this->request->getData('domicilio').'%',
            // 'telefono_local LIKE '=> '%'.$this->request->getData('telefono_local').'%',
            // 'telefono_celular LIKE '=> '%'.$this->request->getData('telefono_celular').'%',
            // 'email LIKE '=> '%'.$this->request->getData('email').'%',
            // 'empleados.privilegiosinternet_privilegio_id LIKE '=> '%'.$this->request->getData('privilegiosinternet_privilegio_id').'%',
            // 'empleados.categoriatelefono_categoriatelefono_id LIKE '=> '%'.$this->request->getData('categoriatelefono_categoriatelefono_id').'%',
            // 'observaciones LIKE '=> '%'.$this->request->getData('observaciones').'%',
            // 'clave_imss LIKE '=> '%'.$this->request->getData('clave_imss').'%',
            // 'nombre_emergencia LIKE '=> '%'.$this->request->getData('nombre_emergencia').'%',
            // 'apellidop_emergencia LIKE '=> '%'.$this->request->getData('apellidop_emergencia').'%',
            // 'apellidom_emergencia LIKE '=> '%'.$this->request->getData('apellidom_emergencia').'%',
            // 'tel_emergencia LIKE '=> '%'.$this->request->getData('tel_emergencia').'%',
            // 'tipo_sangre LIKE '=> '%'.$this->request->getData('tipo_sangre').'%',
            // 'alergias LIKE '=> '%'.$this->request->getData('alergias').'%'
            ];
            $newdataquery =[];
            foreach($query as $key => $data) {
                if (strlen($data) > 0 ){
                    $newdataquery[$key] = $data;
                }
            }
            $empleados=$this->Empleados->find('all')->where(($newdataquery),['Empleados.empleado_id' => 'string']);
        $this->viewBuilder()->options([
            'pdfConfig'=>[
                'orientation'=>'landscape',
                'filename'=>'Empleados.pdf'
            ]
        ]);
        $this->set(compact('empleados'));
        $this->set('_serialize', ['empleados']);
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
