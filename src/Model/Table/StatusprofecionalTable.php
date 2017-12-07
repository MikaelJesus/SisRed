<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Statusprofecional Model
 *
 * @property \App\Model\Table\StatusprofecionalsTable|\Cake\ORM\Association\BelongsTo $Statusprofecionals
 *
 * @method \App\Model\Entity\Statusprofecional get($primaryKey, $options = [])
 * @method \App\Model\Entity\Statusprofecional newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Statusprofecional[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Statusprofecional|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Statusprofecional patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Statusprofecional[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Statusprofecional findOrCreate($search, callable $callback = null, $options = [])
 */
class StatusprofecionalTable extends Table
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

        $this->setTable('statusprofecional');
        $this->setDisplayField('statusprofecional_id');
        $this->setPrimaryKey('statusprofecional_id');

        $this->belongsTo('Statusprofecional', [
            'foreignKey' => 'statusprofecional_id',
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
            ->scalar('des_statusprofecional')
            ->requirePresence('des_statusprofecional', 'create')
            ->notEmpty('des_statusprofecional');

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
        $rules->add($rules->existsIn(['statusprofecional_id'], 'Statusprofecional'));

        return $rules;
    }
}
