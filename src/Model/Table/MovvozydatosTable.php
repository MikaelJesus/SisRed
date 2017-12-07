<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movvozydatos Model
 *
 * @property \App\Model\Table\MovvozydatosTable|\Cake\ORM\Association\BelongsTo $Movvozydatos
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\EmpleadosTable|\Cake\ORM\Association\BelongsTo $Empleados
 *
 * @method \App\Model\Entity\Movvozydato get($primaryKey, $options = [])
 * @method \App\Model\Entity\Movvozydato newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Movvozydato[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Movvozydato|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movvozydato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Movvozydato[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Movvozydato findOrCreate($search, callable $callback = null, $options = [])
 */
class MovvozydatosTable extends Table
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

        $this->setTable('movvozydatos');
        $this->setDisplayField('movvozydatos_id');
        $this->setPrimaryKey('movvozydatos_id');

        $this->belongsTo('Movvozydatos', [
            'foreignKey' => 'movvozydatos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'users_user_id',
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
            ->scalar('tipo_movimiento')
            ->requirePresence('tipo_movimiento', 'create')
            ->notEmpty('tipo_movimiento');

        $validator
            ->date('fecha_movimiento')
            ->requirePresence('fecha_movimiento', 'create')
            ->notEmpty('fecha_movimiento');

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
        $rules->add($rules->existsIn(['movvozydatos_id'], 'Movvozydatos'));
        $rules->add($rules->existsIn(['users_user_id'], 'Users'));
        $rules->add($rules->existsIn(['empleados_empleado_id'], 'Empleados'));

        return $rules;
    }
}
