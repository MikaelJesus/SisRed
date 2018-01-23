<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Unidadejecutora Model
 *
 * @property \App\Model\Table\AreasTable|\Cake\ORM\Association\BelongsTo $Areas
 *
 * @method \App\Model\Entity\Unidadejecutora get($primaryKey, $options = [])
 * @method \App\Model\Entity\Unidadejecutora newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Unidadejecutora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Unidadejecutora|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Unidadejecutora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Unidadejecutora[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Unidadejecutora findOrCreate($search, callable $callback = null, $options = [])
 */
class UnidadejecutoraTable extends Table
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

        $this->setTable('unidadejecutora');
        $this->setDisplayField('area_id');
        $this->setPrimaryKey('area_id');

        $this->belongsTo('Unidadejecutora', [
            'foreignKey' => 'area_id',
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
            ->scalar('des_area')
            ->requirePresence('des_area', 'create')
            ->notEmpty('des_area');

            $validator
            ->scalar('area_id')
            ->requirePresence('area_id', 'create')
            ->notEmpty('area_id')
            ->add('area_id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['area_id']));

        return $rules;
    }
}
