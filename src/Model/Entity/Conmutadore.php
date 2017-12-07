<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Conmutadore Entity
 *
 * @property int $switch_id
 * @property string $numero_serie
 * @property string $marca
 * @property string $numero_puertos
 * @property string $numero_inventario
 * @property string $numero_equipos
 * @property \Cake\I18n\FrozenDate $fecha_alta
 * @property string $modelo
 * @property int $tiporesguardo_tiporesguardo_id
 * @property int $empleados_empleado_id
 *
 * @property \App\Model\Entity\Switch $switch
 * @property \App\Model\Entity\Tiporesguardo $tiporesguardo
 * @property \App\Model\Entity\Empleado $empleado
 */
class Conmutadore extends Entity
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
        'numero_serie' => true,
        'marca' => true,
        'numero_puertos' => true,
        'numero_inventario' => true,
        'numero_equipos' => true,
        'fecha_alta' => true,
        'modelo' => true,
        'tiporesguardo_tiporesguardo_id' => true,
        'empleados_empleado_id' => true,
        'switch' => true,
        'tiporesguardo' => true,
        'empleado' => true
    ];
}
