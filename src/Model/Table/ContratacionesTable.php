<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contrataciones Model
 *
 * @property \App\Model\Table\ContratacionsTable|\Cake\ORM\Association\BelongsTo $Contratacions
 *
 * @method \App\Model\Entity\Contratacione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contratacione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contratacione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contratacione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contratacione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contratacione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contratacione findOrCreate($search, callable $callback = null, $options = [])
 */
class ContratacionesTable extends Table
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

        $this->setTable('contrataciones');
        $this->setDisplayField('contratacion_id');
        $this->setPrimaryKey('contratacion_id');

        $this->belongsTo('Contrataciones', [
            'foreignKey' => 'contratacion_id',
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
            ->scalar('des_contratacion')
            ->requirePresence('des_contratacion', 'create')
            ->notEmpty('des_contratacion');

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
        $rules->add($rules->existsIn(['contratacion_id'], 'Contrataciones'));

        return $rules;
    }
}
