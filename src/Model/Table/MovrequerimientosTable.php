<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movrequerimientos Model
 *
 * @property \App\Model\Table\MovrequerimientosTable|\Cake\ORM\Association\BelongsTo $Movrequerimientos
 * @property \App\Model\Table\RequerimientosTable|\Cake\ORM\Association\BelongsTo $Requerimientos
 * @property \App\Model\Table\StatusrequerimientoTable|\Cake\ORM\Association\BelongsTo $Statusrequerimiento
 * @property \App\Model\Table\RecibidoTable|\Cake\ORM\Association\BelongsTo $Recibido
 *
 * @method \App\Model\Entity\Movrequerimiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Movrequerimiento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Movrequerimiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Movrequerimiento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movrequerimiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Movrequerimiento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Movrequerimiento findOrCreate($search, callable $callback = null, $options = [])
 */
class MovrequerimientosTable extends Table
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

        $this->setTable('movrequerimientos');
        $this->setDisplayField('movrequerimientos_id');
        $this->setPrimaryKey('movrequerimientos_id');

        $this->belongsTo('Movrequerimientos', [
            'foreignKey' => 'movrequerimientos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Requerimientos', [
            'foreignKey' => 'requerimientos_requerimiento_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Statusrequerimiento', [
            'foreignKey' => 'statusrequerimiento_statusrequerimiento_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Recibido', [
            'foreignKey' => 'recibido_recibido_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'users_user_id1',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'users_user_id2',
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
            ->date('fech_req')
            ->requirePresence('fech_req', 'create')
            ->notEmpty('fech_req');

        $validator
            ->scalar('peticion')
            ->allowEmpty('peticion');

        $validator
            ->scalar('cpu')
            ->allowEmpty('cpu');

        $validator
            ->scalar('monitor')
            ->allowEmpty('monitor');

        $validator
            ->scalar('teclado')
            ->allowEmpty('teclado');

        $validator
            ->scalar('mouse')
            ->allowEmpty('mouse');

        $validator
            ->scalar('impresora')
            ->allowEmpty('impresora');

        $validator
            ->scalar('corriente_pc')
            ->allowEmpty('corriente_pc');

        $validator
            ->scalar('corriente_impresora')
            ->allowEmpty('corriente_impresora');

        $validator
            ->scalar('usb_impresora')
            ->allowEmpty('usb_impresora');

        $validator
            ->scalar('otro')
            ->allowEmpty('otro');

        $validator
            ->scalar('solicitud')
            ->requirePresence('solicitud', 'create')
            ->notEmpty('solicitud');

        $validator
            ->date('fech_entrega')
            ->allowEmpty('fech_entrega');

        $validator
            ->scalar('comentario')
            ->allowEmpty('comentario');

        $validator
            ->integer('users_user_id1')
            ->requirePresence('users_user_id1', 'create')
            ->notEmpty('users_user_id1');

        $validator
            ->integer('users_user_id2')
            ->allowEmpty('users_user_id2');

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
        $rules->add($rules->existsIn(['movrequerimientos_id'], 'Movrequerimientos'));
        $rules->add($rules->existsIn(['requerimientos_requerimiento_id'], 'Requerimientos'));
        $rules->add($rules->existsIn(['statusrequerimiento_statusrequerimiento_id'], 'Statusrequerimiento'));
        $rules->add($rules->existsIn(['recibido_recibido_id'], 'Recibido'));
        $rules->add($rules->existsIn(['users_user_id1'], 'Users'));
        $rules->add($rules->existsIn(['users_user_id2'], 'Users'));

        return $rules;
    }
}
