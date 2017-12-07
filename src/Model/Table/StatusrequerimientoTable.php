<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Statusrequerimiento Model
 *
 * @property \App\Model\Table\StatusrequerimientosTable|\Cake\ORM\Association\BelongsTo $Statusrequerimientos
 *
 * @method \App\Model\Entity\Statusrequerimiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Statusrequerimiento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Statusrequerimiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Statusrequerimiento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Statusrequerimiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Statusrequerimiento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Statusrequerimiento findOrCreate($search, callable $callback = null, $options = [])
 */
class StatusrequerimientoTable extends Table
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

        $this->setTable('statusrequerimiento');
        $this->setDisplayField('statusrequerimiento_id');
        $this->setPrimaryKey('statusrequerimiento_id');

        $this->belongsTo('Statusrequerimiento', [
            'foreignKey' => 'statusrequerimiento_id',
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
            ->scalar('des_statusrequerimiento')
            ->requirePresence('des_statusrequerimiento', 'create')
            ->notEmpty('des_statusrequerimiento');

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
        $rules->add($rules->existsIn(['statusrequerimiento_id'], 'Statusrequerimiento'));

        return $rules;
    }
}
