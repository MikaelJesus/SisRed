<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Programa Model
 *
 * @property \App\Model\Table\UnidadsTable|\Cake\ORM\Association\BelongsTo $Unidads
 *
 * @method \App\Model\Entity\Programa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Programa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Programa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Programa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Programa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Programa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Programa findOrCreate($search, callable $callback = null, $options = [])
 */
class ProgramaTable extends Table
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

        $this->setTable('programa');
        $this->setDisplayField('unidad_id');
        $this->setPrimaryKey('unidad_id');

        $this->belongsTo('Programa', [
            'foreignKey' => 'unidad_id',
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
            ->scalar('des_unidad')
            ->requirePresence('des_unidad', 'create')
            ->notEmpty('des_unidad');

            $validator
            ->scalar('unidad_id')
            ->requirePresence('unidad_id', 'create')
            ->notEmpty('unidad_id')
            ->add('unidad_id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['unidad_id']));

        return $rules;
    }
}
