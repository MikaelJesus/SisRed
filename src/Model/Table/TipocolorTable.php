<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipocolor Model
 *
 * @property \App\Model\Table\TipocolorsTable|\Cake\ORM\Association\BelongsTo $Tipocolors
 *
 * @method \App\Model\Entity\Tipocolor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tipocolor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tipocolor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipocolor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipocolor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tipocolor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipocolor findOrCreate($search, callable $callback = null, $options = [])
 */
class TipocolorTable extends Table
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

        $this->setTable('tipocolor');
        $this->setDisplayField('tipocolor_id');
        $this->setPrimaryKey('tipocolor_id');

        $this->belongsTo('Tipocolor', [
            'foreignKey' => 'tipocolor_id',
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
            ->scalar('des_tipocolor')
            ->requirePresence('des_tipocolor', 'create')
            ->notEmpty('des_tipocolor');

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
        $rules->add($rules->existsIn(['tipocolor_id'], 'Tipocolor'));

        return $rules;
    }
}
