<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Impresora Entity
 *
 * @property int $impresora_id
 * @property string $numero_serie
 * @property string $marca
 * @property string $modelo
 * @property string $mac_impresora
 * @property string $ip_impresora
 * @property string $numero_inventario
 * @property \Cake\I18n\FrozenDate $fecha_alta
 * @property string $velocidad_imprecion
 * @property string $nodo
 * @property int $empleados_empleado_id
 * @property int $tipocolor_tipocolor_id
 * @property int $tipoimpresora_tipoimpresora_id
 * @property int $tiporesguardo_tiporesguardo_id
 * @property int $tipoconexion_tipoconexion_id
 *
 * @property \App\Model\Entity\Impresora $impresora
 * @property \App\Model\Entity\Empleado $empleado
 * @property \App\Model\Entity\Tipocolor $tipocolor
 * @property \App\Model\Entity\Tipoimpresora $tipoimpresora
 * @property \App\Model\Entity\Tiporesguardo $tiporesguardo
 * @property \App\Model\Entity\Tipoconexion $tipoconexion
 */
class Impresora extends Entity
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
        'modelo' => true,
        'mac_impresora' => true,
        'ip_impresora' => true,
        'numero_inventario' => true,
        'fecha_alta' => true,
        'velocidad_imprecion' => true,
        'nodo' => true,
        'empleados_empleado_id' => true,
        'tipocolor_tipocolor_id' => true,
        'tipoimpresora_tipoimpresora_id' => true,
        'tiporesguardo_tiporesguardo_id' => true,
        'tipoconexion_tipoconexion_id' => true,
        'impresora' => true,
        'empleado' => true,
        'tipocolor' => true,
        'tipoimpresora' => true,
        'tiporesguardo' => true,
        'tipoconexion' => true
    ];
}
