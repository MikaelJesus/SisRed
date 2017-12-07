<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pc Entity
 *
 * @property int $pc_id
 * @property string $direccion_mac
 * @property string $marca
 * @property string $modelo_pc
 * @property string $sistema_operativo
 * @property string $nombre_red
 * @property string $grupo_trabajo
 * @property string $ip
 * @property string $antivirus
 * @property string $nodo
 * @property string $edificio
 * @property string $piso
 * @property \Cake\I18n\FrozenDate $fecha_alta
 * @property string $marca_procesador
 * @property string $modelo_procesador
 * @property string $velocidad_procesador
 * @property string $capacidad_disco
 * @property string $capacidad_ram
 * @property int $tiporesguardo_tiporesguardo_id
 * @property int $tipoconexion_tipoconexion_id
 * @property int $tipoequipo_tipoequipo_id
 * @property int $empleados_empleado_id
 *
 * @property \App\Model\Entity\Pc $pc
 * @property \App\Model\Entity\Tiporesguardo $tiporesguardo
 * @property \App\Model\Entity\Tipoconexion $tipoconexion
 * @property \App\Model\Entity\Tipoequipo $tipoequipo
 * @property \App\Model\Entity\Empleado $empleado
 */
class Pc extends Entity
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
        'direccion_mac' => true,
        'marca' => true,
        'modelo_pc' => true,
        'sistema_operativo' => true,
        'nombre_red' => true,
        'grupo_trabajo' => true,
        'ip' => true,
        'antivirus' => true,
        'nodo' => true,
        'edificio' => true,
        'piso' => true,
        'fecha_alta' => true,
        'marca_procesador' => true,
        'modelo_procesador' => true,
        'velocidad_procesador' => true,
        'capacidad_disco' => true,
        'capacidad_ram' => true,
        'tiporesguardo_tiporesguardo_id' => true,
        'tipoconexion_tipoconexion_id' => true,
        'tipoequipo_tipoequipo_id' => true,
        'empleados_empleado_id' => true,
        'pc' => true,
        'tiporesguardo' => true,
        'tipoconexion' => true,
        'tipoequipo' => true,
        'empleado' => true
    ];
}
