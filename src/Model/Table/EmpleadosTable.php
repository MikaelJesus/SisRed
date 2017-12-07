<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empleados Model
 *
 * @property \App\Model\Table\EmpleadosTable|\Cake\ORM\Association\BelongsTo $Empleados
 * @property \App\Model\Table\CategoriasTable|\Cake\ORM\Association\BelongsTo $Categorias
 * @property \App\Model\Table\DependenciasTable|\Cake\ORM\Association\BelongsTo $Dependencias
 * @property \App\Model\Table\AreasTable|\Cake\ORM\Association\BelongsTo $Areas
 * @property \App\Model\Table\DepartamentosTable|\Cake\ORM\Association\BelongsTo $Departamentos
 * @property \App\Model\Table\UnidadesTable|\Cake\ORM\Association\BelongsTo $Unidades
 * @property \App\Model\Table\CarrerasTable|\Cake\ORM\Association\BelongsTo $Carreras
 * @property \App\Model\Table\StatusprofecionalTable|\Cake\ORM\Association\BelongsTo $Statusprofecional
 * @property \App\Model\Table\ContratacionesTable|\Cake\ORM\Association\BelongsTo $Contrataciones
 * @property \App\Model\Table\StatusTable|\Cake\ORM\Association\BelongsTo $Status
 * @property \App\Model\Table\PrivilegiosinternetTable|\Cake\ORM\Association\BelongsTo $Privilegiosinternet
 * @property \App\Model\Table\CategoriatelefonoTable|\Cake\ORM\Association\BelongsTo $Categoriatelefono
 *
 * @method \App\Model\Entity\Empleado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empleado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Empleado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empleado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empleado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empleado findOrCreate($search, callable $callback = null, $options = [])
 */
class EmpleadosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('empleados');
        $this->setDisplayField('empleado_id');
        $this->setPrimaryKey('empleado_id');

        $this->belongsTo('Empleados', [
            'foreignKey' => 'empleado_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Categorias', [
            'foreignKey' => 'categorias_categoria_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Dependencias', [
            'foreignKey' => 'dependencias_dependencia_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Areas', [
            'foreignKey' => 'areas_area_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamentos_departamento_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Unidades', [
            'foreignKey' => 'unidades_unidad_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Carreras', [
            'foreignKey' => 'carreras_carrera_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Statusprofecional', [
            'foreignKey' => 'statusprofecional_statusprofecional_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Contrataciones', [
            'foreignKey' => 'contrataciones_contratacion_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Status', [
            'foreignKey' => 'status_status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Privilegiosinternet', [
            'foreignKey' => 'privilegiosinternet_privilegio_id'
        ]);
        $this->belongsTo('Categoriatelefono', [
            'foreignKey' => 'categoriatelefono_categoriatelefono_id'
        ]);


        $this->addBehavior('Proffer.Proffer', [

    'foto' => [    // The name of your upload field
        'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
        'dir' => 'fotodir',   // The name of the field to store the folder
        'thumbnailSizes' => [ // Declare your thumbnails
            'square' => [   // Define the prefix of your thumbnail
                'w' => 200, // Width
                'h' => 200, // Height
                'jpeg_quality'  => 100
            ],
            'portrait' => [     // Define a second thumbnail
                'w' => 100,
                'h' => 300
            ],
        ],
        'thumbnailMethod' => 'gd'   // Options are Imagick or Gd
    ]
]);
    }

    

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->scalar('nue')
            ->requirePresence('nue', 'create')
            ->notEmpty('nue')
            ->add('nue', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('nup')
            ->requirePresence('nup', 'create')
            ->notEmpty('nup')
            ->add('nup', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('nombre')
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->scalar('apellidop')
            ->requirePresence('apellidop', 'create')
            ->notEmpty('apellidop');

        $validator
            ->scalar('apellidom')
            ->requirePresence('apellidom', 'create')
            ->notEmpty('apellidom');

        $validator
            ->scalar('curp')
            ->requirePresence('curp', 'create')
            ->notEmpty('curp')
            ->add('curp', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('rfc')
            ->requirePresence('rfc', 'create')
            ->notEmpty('rfc')
            ->add('rfc', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->date('fecha_gafete')
            ->requirePresence('fecha_gafete', 'create')
            ->notEmpty('fecha_gafete');

        $validator
            ->scalar('sexo')
            ->requirePresence('sexo', 'create')
            ->notEmpty('sexo');

        $validator
            ->scalar('domicilio')
            ->requirePresence('domicilio', 'create')
            ->notEmpty('domicilio');

        $validator
            ->scalar('telefono_local')
            ->allowEmpty('telefono_local');

        $validator
            ->scalar('telefono_celular')
            ->allowEmpty('telefono_celular');

        $validator
            // ->scalar('foto')
            ->allowEmpty('foto');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('observaciones')
            ->allowEmpty('observaciones');

        $validator
            ->integer('clave_imss')
            ->requirePresence('clave_imss', 'create')
            ->notEmpty('clave_imss');

        $validator
            ->scalar('nombre_emergencia')
            ->requirePresence('nombre_emergencia', 'create')
            ->notEmpty('nombre_emergencia');

        $validator
            ->scalar('apellidop_emergencia')
            ->requirePresence('apellidop_emergencia', 'create')
            ->notEmpty('apellidop_emergencia');

        $validator
            ->scalar('apellidom_emergencia')
            ->requirePresence('apellidom_emergencia', 'create')
            ->notEmpty('apellidom_emergencia');

        $validator
            ->scalar('tel_emergencia')
            ->requirePresence('tel_emergencia', 'create')
            ->notEmpty('tel_emergencia');

        $validator
            ->scalar('tipo_sangre')
            ->requirePresence('tipo_sangre', 'create')
            ->notEmpty('tipo_sangre');

        $validator
            ->scalar('alergias')
            ->allowEmpty('alergias');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['nue']));
        $rules->add($rules->isUnique(['nup']));
        $rules->add($rules->isUnique(['rfc']));
        $rules->add($rules->isUnique(['curp']));
        $rules->add($rules->existsIn(['empleado_id'], 'Empleados'));
        $rules->add($rules->existsIn(['categorias_categoria_id'], 'Categorias'));
        $rules->add($rules->existsIn(['dependencias_dependencia_id'], 'Dependencias'));
        $rules->add($rules->existsIn(['areas_area_id'], 'Areas'));
        $rules->add($rules->existsIn(['departamentos_departamento_id'], 'Departamentos'));
        $rules->add($rules->existsIn(['unidades_unidad_id'], 'Unidades'));
        $rules->add($rules->existsIn(['carreras_carrera_id'], 'Carreras'));
        $rules->add($rules->existsIn(['statusprofecional_statusprofecional_id'], 'Statusprofecional'));
        $rules->add($rules->existsIn(['contrataciones_contratacion_id'], 'Contrataciones'));
        $rules->add($rules->existsIn(['status_status_id'], 'Status'));
        $rules->add($rules->existsIn(['privilegiosinternet_privilegio_id'], 'Privilegiosinternet'));
        $rules->add($rules->existsIn(['categoriatelefono_categoriatelefono_id'], 'Categoriatelefono'));

        return $rules;
    }
}
