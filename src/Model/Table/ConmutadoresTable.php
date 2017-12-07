<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Conmutadores Model
 *
 * @property \App\Model\Table\SwitchesTable|\Cake\ORM\Association\BelongsTo $Switches
 * @property \App\Model\Table\TiporesguardoTable|\Cake\ORM\Association\BelongsTo $Tiporesguardo
 * @property \App\Model\Table\EmpleadosTable|\Cake\ORM\Association\BelongsTo $Empleados
 *
 * @method \App\Model\Entity\Conmutadore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conmutadore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Conmutadore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conmutadore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conmutadore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conmutadore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conmutadore findOrCreate($search, callable $callback = null, $options = [])
 */
class ConmutadoresTable extends Table
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

        $this->setTable('conmutadores');
        $this->setDisplayField('switch_id');
        $this->setPrimaryKey('switch_id');

        $this->belongsTo('Conmutadores', [
            'foreignKey' => 'switch_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tiporesguardo', [
            'foreignKey' => 'tiporesguardo_tiporesguardo_id',
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
            ->scalar('numero_serie')
            ->requirePresence('numero_serie', 'create')
            ->notEmpty('numero_serie');

        $validator
            ->scalar('marca')
            ->requirePresence('marca', 'create')
            ->notEmpty('marca');

        $validator
            ->scalar('numero_puertos')
            ->requirePresence('numero_puertos', 'create')
            ->notEmpty('numero_puertos');

        $validator
            ->scalar('numero_inventario')
            ->requirePresence('numero_inventario', 'create')
            ->notEmpty('numero_inventario');

        $validator
            ->scalar('numero_equipos')
            ->requirePresence('numero_equipos', 'create')
            ->notEmpty('numero_equipos');

        $validator
            ->date('fecha_alta')
            ->requirePresence('fecha_alta', 'create')
            ->notEmpty('fecha_alta');

        $validator
            ->scalar('modelo')
            ->requirePresence('modelo', 'create')
            ->notEmpty('modelo');

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
        $rules->add($rules->existsIn(['switch_id'], 'Conmutadores'));
        $rules->add($rules->existsIn(['tiporesguardo_tiporesguardo_id'], 'Tiporesguardo'));
        $rules->add($rules->existsIn(['empleados_empleado_id'], 'Empleados'));

        return $rules;
    }
}
