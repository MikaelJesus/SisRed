<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Movvozydato Entity
 *
 * @property int $movvozydatos_id
 * @property string $tipo_movimiento
 * @property \Cake\I18n\FrozenDate $fecha_movimiento
 * @property int $users_user_id
 * @property int $empleados_empleado_id
 *
 * @property \App\Model\Entity\Movvozydato $movvozydato
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Empleado $empleado
 */
class Movvozydato extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'tipo_movimiento' => true,
        'fecha_movimiento' => true,
        'users_user_id' => true,
        'empleados_empleado_id' => true,
        'movvozydato' => true,
        'user' => true,
        'empleado' => true
    ];
}
