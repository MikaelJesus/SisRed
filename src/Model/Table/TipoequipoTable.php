<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipoequipo Model
 *
 * @property \App\Model\Table\TipoequiposTable|\Cake\ORM\Association\BelongsTo $Tipoequipos
 *
 * @method \App\Model\Entity\Tipoequipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tipoequipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tipoequipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipoequipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipoequipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tipoequipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipoequipo findOrCreate($search, callable $callback = null, $options = [])
 */
class TipoequipoTable extends Table
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

        $this->setTable('tipoequipo');
        $this->setDisplayField('tipoequipo_id');
        $this->setPrimaryKey('tipoequipo_id');

        $this->belongsTo('Tipoequipo', [
            'foreignKey' => 'tipoequipo_id',
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
            ->scalar('des_tipoequipo')
            ->requirePresence('des_tipoequipo', 'create')
            ->notEmpty('des_tipoequipo');

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
        $rules->add($rules->existsIn(['tipoequipo_id'], 'Tipoequipo'));

        return $rules;
    }
}
