<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categoriatelefono Model
 *
 * @property \App\Model\Table\CategoriatelefonosTable|\Cake\ORM\Association\BelongsTo $Categoriatelefonos
 *
 * @method \App\Model\Entity\Categoriatelefono get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categoriatelefono newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Categoriatelefono[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categoriatelefono|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categoriatelefono patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categoriatelefono[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categoriatelefono findOrCreate($search, callable $callback = null, $options = [])
 */
class CategoriatelefonoTable extends Table
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

        $this->setTable('categoriatelefono');
        $this->setDisplayField('categoriatelefono_id');
        $this->setPrimaryKey('categoriatelefono_id');

        $this->belongsTo('Categoriatelefono', [
            'foreignKey' => 'categoriatelefono_id',
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
            ->scalar('des_categoriatelefono')
            ->requirePresence('des_categoriatelefono', 'create')
            ->notEmpty('des_categoriatelefono');

        $validator
            ->scalar('des_nivelasignacion')
            ->requirePresence('des_nivelasignacion', 'create')
            ->notEmpty('des_nivelasignacion');

        $validator
            ->scalar('categoriatelefono_id')
            ->requirePresence('categoriatelefono_id', 'create')
            ->notEmpty('categoriatelefono_id')
            ->add('categoriatelefono_id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['categoriatelefono_id']));

        return $rules;
    }
}
