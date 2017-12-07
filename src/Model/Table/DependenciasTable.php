<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dependencias Model
 *
 * @property \App\Model\Table\DependenciasTable|\Cake\ORM\Association\BelongsTo $Dependencias
 *
 * @method \App\Model\Entity\Dependencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dependencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dependencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dependencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dependencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dependencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dependencia findOrCreate($search, callable $callback = null, $options = [])
 */
class DependenciasTable extends Table
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

        $this->setTable('dependencias');
        $this->setDisplayField('dependencia_id');
        $this->setPrimaryKey('dependencia_id');

        $this->belongsTo('Dependencias', [
            'foreignKey' => 'dependencia_id',
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
            ->scalar('des_dependencia')
            ->requirePresence('des_dependencia', 'create')
            ->notEmpty('des_dependencia');

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
        $rules->add($rules->existsIn(['dependencia_id'], 'Dependencias'));

        return $rules;
    }
}
