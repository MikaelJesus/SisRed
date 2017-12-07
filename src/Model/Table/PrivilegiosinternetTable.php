<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Privilegiosinternet Model
 *
 * @property \App\Model\Table\PrivilegiosTable|\Cake\ORM\Association\BelongsTo $Privilegios
 *
 * @method \App\Model\Entity\Privilegiosinternet get($primaryKey, $options = [])
 * @method \App\Model\Entity\Privilegiosinternet newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Privilegiosinternet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Privilegiosinternet|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Privilegiosinternet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Privilegiosinternet[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Privilegiosinternet findOrCreate($search, callable $callback = null, $options = [])
 */
class PrivilegiosinternetTable extends Table
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

        $this->setTable('privilegiosinternet');
        $this->setDisplayField('privilegio_id');
        $this->setPrimaryKey('privilegio_id');

        $this->belongsTo('Privilegiosinternet', [
            'foreignKey' => 'privilegio_id',
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
            ->scalar('nivel')
            ->requirePresence('nivel', 'create')
            ->notEmpty('nivel');

        $validator
            ->scalar('des_privilegio')
            ->requirePresence('des_privilegio', 'create')
            ->notEmpty('des_privilegio');

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
        $rules->add($rules->existsIn(['privilegio_id'], 'Privilegiosinternet'));

        return $rules;
    }
}
