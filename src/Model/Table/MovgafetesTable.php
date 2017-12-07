<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movgafetes Model
 *
 * @property \App\Model\Table\MovgafetesTable|\Cake\ORM\Association\BelongsTo $Movgafetes
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\EmpleadosTable|\Cake\ORM\Association\BelongsTo $Empleados
 *
 * @method \App\Model\Entity\Movgafete get($primaryKey, $options = [])
 * @method \App\Model\Entity\Movgafete newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Movgafete[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Movgafete|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movgafete patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Movgafete[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Movgafete findOrCreate($search, callable $callback = null, $options = [])
 */
class MovgafetesTable extends Table
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

        $this->setTable('movgafetes');
        $this->setDisplayField('movgafete_id');
        $this->setPrimaryKey('movgafete_id');

        $this->belongsTo('Movgafetes', [
            'foreignKey' => 'movgafete_id',
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
            ->integer('tipo_movimiento')
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
        $rules->add($rules->existsIn(['movgafete_id'], 'Movgafetes'));
        $rules->add($rules->existsIn(['users_user_id'], 'Users'));
        $rules->add($rules->existsIn(['empleados_empleado_id'], 'Empleados'));

        return $rules;
    }
}
