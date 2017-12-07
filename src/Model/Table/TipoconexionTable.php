<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipoconexion Model
 *
 * @property \App\Model\Table\TipoconexionsTable|\Cake\ORM\Association\BelongsTo $Tipoconexions
 *
 * @method \App\Model\Entity\Tipoconexion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tipoconexion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tipoconexion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipoconexion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipoconexion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tipoconexion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipoconexion findOrCreate($search, callable $callback = null, $options = [])
 */
class TipoconexionTable extends Table
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

        $this->setTable('tipoconexion');
        $this->setDisplayField('tipoconexion_id');
        $this->setPrimaryKey('tipoconexion_id');

        $this->belongsTo('Tipoconexion', [
            'foreignKey' => 'tipoconexion_id',
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
            ->scalar('des_tipoconexion')
            ->requirePresence('des_tipoconexion', 'create')
            ->notEmpty('des_tipoconexion');

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
        $rules->add($rules->existsIn(['tipoconexion_id'], 'Tipoconexion'));

        return $rules;
    }
}
