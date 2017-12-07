<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Telefonos Model
 *
 * @property \App\Model\Table\TelefonosTable|\Cake\ORM\Association\BelongsTo $Telefonos
 * @property \App\Model\Table\EmpleadosTable|\Cake\ORM\Association\BelongsTo $Empleados
 *
 * @method \App\Model\Entity\Telefono get($primaryKey, $options = [])
 * @method \App\Model\Entity\Telefono newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Telefono[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Telefono|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Telefono patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Telefono[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Telefono findOrCreate($search, callable $callback = null, $options = [])
 */
class TelefonosTable extends Table
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

        $this->setTable('telefonos');
        $this->setDisplayField('telefono_id');
        $this->setPrimaryKey('telefono_id');

        $this->belongsTo('Telefonos', [
            'foreignKey' => 'telefono_id',
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
            ->scalar('mac_telefono')
            ->requirePresence('mac_telefono', 'create')
            ->notEmpty('mac_telefono')
            ->add('mac_telefono', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('extencion_telefono')
            ->requirePresence('extencion_telefono', 'create')
            ->notEmpty('extencion_telefono');

        $validator
            ->scalar('modelo_telefono')
            ->requirePresence('modelo_telefono', 'create')
            ->notEmpty('modelo_telefono');

        $validator
            ->scalar('numero_serie')
            ->requirePresence('numero_serie', 'create')
            ->notEmpty('numero_serie');

        $validator
            ->scalar('numero_inventario')
            ->requirePresence('numero_inventario', 'create')
            ->notEmpty('numero_inventario');

        $validator
            ->date('fecha_alta')
            ->requirePresence('fecha_alta', 'create')
            ->notEmpty('fecha_alta');

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
        $rules->add($rules->isUnique(['mac_telefono']));
        $rules->add($rules->existsIn(['telefono_id'], 'Telefonos'));
        $rules->add($rules->existsIn(['empleados_empleado_id'], 'Empleados'));

        return $rules;
    }
}
