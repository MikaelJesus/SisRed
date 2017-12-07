<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recibido Model
 *
 * @property \App\Model\Table\RecibidosTable|\Cake\ORM\Association\BelongsTo $Recibidos
 *
 * @method \App\Model\Entity\Recibido get($primaryKey, $options = [])
 * @method \App\Model\Entity\Recibido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Recibido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recibido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recibido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Recibido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recibido findOrCreate($search, callable $callback = null, $options = [])
 */
class RecibidoTable extends Table
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

        $this->setTable('recibido');
        $this->setDisplayField('recibido_id');
        $this->setPrimaryKey('recibido_id');

        $this->belongsTo('Recibido', [
            'foreignKey' => 'recibido_id',
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
            ->scalar('des_recibido')
            ->requirePresence('des_recibido', 'create')
            ->notEmpty('des_recibido');

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
        $rules->add($rules->existsIn(['recibido_id'], 'Recibido'));

        return $rules;
    }
}
