<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipoimpresora Model
 *
 * @property \App\Model\Table\TipoimpresorasTable|\Cake\ORM\Association\BelongsTo $Tipoimpresoras
 *
 * @method \App\Model\Entity\Tipoimpresora get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tipoimpresora newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tipoimpresora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipoimpresora|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipoimpresora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tipoimpresora[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipoimpresora findOrCreate($search, callable $callback = null, $options = [])
 */
class TipoimpresoraTable extends Table
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

        $this->setTable('tipoimpresora');
        $this->setDisplayField('tipoimpresora_id');
        $this->setPrimaryKey('tipoimpresora_id');

        $this->belongsTo('Tipoimpresora', [
            'foreignKey' => 'tipoimpresora_id',
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
            ->scalar('des_tipoimpresora')
            ->requirePresence('des_tipoimpresora', 'create')
            ->notEmpty('des_tipoimpresora');

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
        $rules->add($rules->existsIn(['tipoimpresora_id'], 'Tipoimpresora'));

        return $rules;
    }
}
