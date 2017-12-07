<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pcs Model
 *
 * @property \App\Model\Table\PcsTable|\Cake\ORM\Association\BelongsTo $Pcs
 * @property \App\Model\Table\TiporesguardoTable|\Cake\ORM\Association\BelongsTo $Tiporesguardo
 * @property \App\Model\Table\TipoconexionTable|\Cake\ORM\Association\BelongsTo $Tipoconexion
 * @property \App\Model\Table\TipoequipoTable|\Cake\ORM\Association\BelongsTo $Tipoequipo
 * @property \App\Model\Table\EmpleadosTable|\Cake\ORM\Association\BelongsTo $Empleados
 *
 * @method \App\Model\Entity\Pc get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pc findOrCreate($search, callable $callback = null, $options = [])
 */
class PcsTable extends Table
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

        $this->setTable('pcs');
        $this->setDisplayField('pc_id');
        $this->setPrimaryKey('pc_id');

        $this->belongsTo('Pcs', [
            'foreignKey' => 'pc_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tiporesguardo', [
            'foreignKey' => 'tiporesguardo_tiporesguardo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tipoconexion', [
            'foreignKey' => 'tipoconexion_tipoconexion_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tipoequipo', [
            'foreignKey' => 'tipoequipo_tipoequipo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Empleados', [
            'foreignKey' => 'empleados_empleado_id',
            'joinType' => 'INNER'
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
            ->scalar('direccion_mac')
            ->requirePresence('direccion_mac', 'create')
            ->notEmpty('direccion_mac')
            ->add('direccion_mac', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('marca')
            ->requirePresence('marca', 'create')
            ->notEmpty('marca');

        $validator
            ->scalar('modelo_pc')
            ->requirePresence('modelo_pc', 'create')
            ->notEmpty('modelo_pc');

        $validator
            ->scalar('sistema_operativo')
            ->requirePresence('sistema_operativo', 'create')
            ->notEmpty('sistema_operativo');

        $validator
            ->scalar('nombre_red')
            ->requirePresence('nombre_red', 'create')
            ->notEmpty('nombre_red');

        $validator
            ->scalar('grupo_trabajo')
            ->requirePresence('grupo_trabajo', 'create')
            ->notEmpty('grupo_trabajo');

        $validator
            ->scalar('ip')
            ->requirePresence('ip', 'create')
            ->notEmpty('ip');

        $validator
            ->scalar('antivirus')
            ->allowEmpty('antivirus');

        $validator
            ->scalar('nodo')
            ->allowEmpty('nodo');

        $validator
            ->scalar('edificio')
            ->requirePresence('edificio', 'create')
            ->notEmpty('edificio');

        $validator
            ->scalar('piso')
            ->requirePresence('piso', 'create')
            ->notEmpty('piso');

        $validator
            ->date('fecha_alta')
            ->requirePresence('fecha_alta', 'create')
            ->notEmpty('fecha_alta');

        $validator
            ->scalar('marca_procesador')
            ->allowEmpty('marca_procesador');

        $validator
            ->scalar('modelo_procesador')
            ->allowEmpty('modelo_procesador');

        $validator
            ->scalar('velocidad_procesador')
            ->allowEmpty('velocidad_procesador');

        $validator
            ->scalar('capacidad_disco')
            ->allowEmpty('capacidad_disco');

        $validator
            ->scalar('capacidad_ram')
            ->allowEmpty('capacidad_ram');

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
        $rules->add($rules->isUnique(['direccion_mac']));
        $rules->add($rules->existsIn(['pc_id'], 'Pcs'));
        $rules->add($rules->existsIn(['tiporesguardo_tiporesguardo_id'], 'Tiporesguardo'));
        $rules->add($rules->existsIn(['tipoconexion_tipoconexion_id'], 'Tipoconexion'));
        $rules->add($rules->existsIn(['tipoequipo_tipoequipo_id'], 'Tipoequipo'));
        $rules->add($rules->existsIn(['empleados_empleado_id'], 'Empleados'));

        return $rules;
    }
}
