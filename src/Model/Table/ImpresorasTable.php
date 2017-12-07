<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Impresoras Model
 *
 * @property \App\Model\Table\ImpresorasTable|\Cake\ORM\Association\BelongsTo $Impresoras
 * @property \App\Model\Table\EmpleadosTable|\Cake\ORM\Association\BelongsTo $Empleados
 * @property \App\Model\Table\TipocolorTable|\Cake\ORM\Association\BelongsTo $Tipocolor
 * @property \App\Model\Table\TipoimpresoraTable|\Cake\ORM\Association\BelongsTo $Tipoimpresora
 * @property \App\Model\Table\TiporesguardoTable|\Cake\ORM\Association\BelongsTo $Tiporesguardo
 * @property \App\Model\Table\TipoconexionTable|\Cake\ORM\Association\BelongsTo $Tipoconexion
 *
 * @method \App\Model\Entity\Impresora get($primaryKey, $options = [])
 * @method \App\Model\Entity\Impresora newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Impresora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Impresora|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Impresora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Impresora[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Impresora findOrCreate($search, callable $callback = null, $options = [])
 */
class ImpresorasTable extends Table
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

        $this->setTable('impresoras');
        $this->setDisplayField('impresora_id');
        $this->setPrimaryKey('impresora_id');

        $this->belongsTo('Impresoras', [
            'foreignKey' => 'impresora_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Empleados', [
            'foreignKey' => 'empleados_empleado_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tipocolor', [
            'foreignKey' => 'tipocolor_tipocolor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tipoimpresora', [
            'foreignKey' => 'tipoimpresora_tipoimpresora_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tiporesguardo', [
            'foreignKey' => 'tiporesguardo_tiporesguardo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tipoconexion', [
            'foreignKey' => 'tipoconexion_tipoconexion_id',
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
            ->scalar('numero_serie')
            ->requirePresence('numero_serie', 'create')
            ->notEmpty('numero_serie');

        $validator
            ->scalar('marca')
            ->requirePresence('marca', 'create')
            ->notEmpty('marca');

        $validator
            ->scalar('modelo')
            ->requirePresence('modelo', 'create')
            ->notEmpty('modelo');

        $validator
            ->scalar('mac_impresora')
            ->allowEmpty('mac_impresora');

        $validator
            ->scalar('ip_impresora')
            ->allowEmpty('ip_impresora');

        $validator
            ->scalar('numero_inventario')
            ->requirePresence('numero_inventario', 'create')
            ->notEmpty('numero_inventario');

        $validator
            ->date('fecha_alta')
            ->requirePresence('fecha_alta', 'create')
            ->notEmpty('fecha_alta');

        $validator
            ->scalar('velocidad_imprecion')
            ->requirePresence('velocidad_imprecion', 'create')
            ->notEmpty('velocidad_imprecion');

        $validator
            ->scalar('nodo')
            ->allowEmpty('nodo');

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
        $rules->add($rules->existsIn(['impresora_id'], 'Impresoras'));
        $rules->add($rules->existsIn(['empleados_empleado_id'], 'Empleados'));
        $rules->add($rules->existsIn(['tipocolor_tipocolor_id'], 'Tipocolor'));
        $rules->add($rules->existsIn(['tipoimpresora_tipoimpresora_id'], 'Tipoimpresora'));
        $rules->add($rules->existsIn(['tiporesguardo_tiporesguardo_id'], 'Tiporesguardo'));
        $rules->add($rules->existsIn(['tipoconexion_tipoconexion_id'], 'Tipoconexion'));

        return $rules;
    }
}
