<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Nivelcarrera Model
 *
 * @property \App\Model\Table\NivelcarrerasTable|\Cake\ORM\Association\BelongsTo $Nivelcarreras
 *
 * @method \App\Model\Entity\Nivelcarrera get($primaryKey, $options = [])
 * @method \App\Model\Entity\Nivelcarrera newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Nivelcarrera[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Nivelcarrera|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nivelcarrera patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Nivelcarrera[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Nivelcarrera findOrCreate($search, callable $callback = null, $options = [])
 */
class NivelcarreraTable extends Table
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

        $this->setTable('nivelcarrera');
        $this->setDisplayField('nivelcarrera_id');
        $this->setPrimaryKey('nivelcarrera_id');

        $this->belongsTo('Nivelcarrera', [
            'foreignKey' => 'nivelcarrera_id',
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
            ->scalar('des_nivelcarrera')
            ->requirePresence('des_nivelcarrera', 'create')
            ->notEmpty('des_nivelcarrera');

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
        $rules->add($rules->existsIn(['nivelcarrera_id'], 'Nivelcarrera'));

        return $rules;
    }
}
