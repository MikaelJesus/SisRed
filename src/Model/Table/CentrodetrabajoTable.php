<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Centrodetrabajo Model
 *
 * @property \App\Model\Table\DepartamentosTable|\Cake\ORM\Association\BelongsTo $Departamentos
 *
 * @method \App\Model\Entity\Centrodetrabajo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Centrodetrabajo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Centrodetrabajo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Centrodetrabajo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Centrodetrabajo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Centrodetrabajo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Centrodetrabajo findOrCreate($search, callable $callback = null, $options = [])
 */
class CentrodetrabajoTable extends Table
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

        $this->setTable('centrodetrabajo');
        $this->setDisplayField('departamento_id');
        $this->setPrimaryKey('departamento_id');

        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamento_id',
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
            ->scalar('des_departamento')
            ->requirePresence('des_departamento', 'create')
            ->notEmpty('des_departamento');

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
        $rules->add($rules->existsIn(['departamento_id'], 'Departamentos'));

        return $rules;
    }
}
