<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Requerimientos Model
 *
 * @property \App\Model\Table\RequerimientosTable|\Cake\ORM\Association\BelongsTo $Requerimientos
 *
 * @method \App\Model\Entity\Requerimiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Requerimiento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Requerimiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Requerimiento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Requerimiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Requerimiento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Requerimiento findOrCreate($search, callable $callback = null, $options = [])
 */
class RequerimientosTable extends Table
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

        $this->setTable('requerimientos');
        $this->setDisplayField('requerimiento_id');
        $this->setPrimaryKey('requerimiento_id');

        $this->belongsTo('Requerimientos', [
            'foreignKey' => 'requerimiento_id',
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
            ->scalar('des_requerimiento')
            ->requirePresence('des_requerimiento', 'create')
            ->notEmpty('des_requerimiento');

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
        $rules->add($rules->existsIn(['requerimiento_id'], 'Requerimientos'));

        return $rules;
    }
}
