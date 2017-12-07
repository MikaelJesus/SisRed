<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Telefono Entity
 *
 * @property int $telefono_id
 * @property string $mac_telefono
 * @property string $extencion_telefono
 * @property string $modelo_telefono
 * @property string $numero_serie
 * @property string $numero_inventario
 * @property \Cake\I18n\FrozenDate $fecha_alta
 * @property int $empleados_empleado_id
 *
 * @property \App\Model\Entity\Telefono $telefono
 * @property \App\Model\Entity\Empleado $empleado
 */
class Telefono extends Entity
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
        'mac_telefono' => true,
        'extencion_telefono' => true,
        'modelo_telefono' => true,
        'numero_serie' => true,
        'numero_inventario' => true,
        'fecha_alta' => true,
        'empleados_empleado_id' => true,
        'telefono' => true,
        'empleado' => true
    ];
}
