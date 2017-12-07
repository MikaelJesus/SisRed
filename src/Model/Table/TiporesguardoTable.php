<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tiporesguardo Model
 *
 * @property \App\Model\Table\TiporesguardosTable|\Cake\ORM\Association\BelongsTo $Tiporesguardos
 *
 * @method \App\Model\Entity\Tiporesguardo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tiporesguardo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tiporesguardo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tiporesguardo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tiporesguardo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tiporesguardo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tiporesguardo findOrCreate($search, callable $callback = null, $options = [])
 */
class TiporesguardoTable extends Table
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

        $this->setTable('tiporesguardo');
        $this->setDisplayField('tiporesguardo_id');
        $this->setPrimaryKey('tiporesguardo_id');

        $this->belongsTo('Tiporesguardo', [
            'foreignKey' => 'tiporesguardo_id',
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
            ->scalar('des_resguardo')
            ->requirePresence('des_resguardo', 'create')
            ->notEmpty('des_resguardo');

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
        $rules->add($rules->existsIn(['tiporesguardo_id'], 'Tiporesguardo'));

        return $rules;
    }
}
