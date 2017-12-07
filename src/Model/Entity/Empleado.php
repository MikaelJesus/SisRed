<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empleado Entity
 *
 * @property int $empleado_id
 * @property string $nue
 * @property string $nup
 * @property string $nombre
 * @property string $apellidop
 * @property string $apellidom
 * @property string $curp
 * @property string $rfc
 * @property string $categorias_categoria_id
 * @property string $dependencias_dependencia_id
 * @property string $areas_area_id
 * @property string $departamentos_departamento_id
 * @property string $unidades_unidad_id
 * @property \Cake\I18n\FrozenDate $fecha_gafete
 * @property string $sexo
 * @property int $carreras_carrera_id
 * @property int $statusprofecional_statusprofecional_id
 * @property int $contrataciones_contratacion_id
 * @property int $status_status_id
 * @property string $domicilio
 * @property string $telefono_local
 * @property string $telefono_celular
 * @property string $foto
 * @property string $email
 * @property int $privilegiosinternet_privilegio_id
 * @property int $categoriatelefono_categoriatelefono_id
 * @property string $observaciones
 * @property int $clave_imss
 * @property string $nombre_emergencia
 * @property string $apellidop_emergencia
 * @property string $apellidom_emergencia
 * @property string $tel_emergencia
 * @property string $tipo_sangre
 * @property string $alergias
 *
 * @property \App\Model\Entity\Empleado $empleado
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Dependencia $dependencia
 * @property \App\Model\Entity\Area $area
 * @property \App\Model\Entity\Departamento $departamento
 * @property \App\Model\Entity\Unidade $unidade
 * @property \App\Model\Entity\Carrera $carrera
 * @property \App\Model\Entity\Statusprofecional $statusprofecional
 * @property \App\Model\Entity\Contratacione $contratacione
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\Privilegiosinternet $privilegiosinternet
 * @property \App\Model\Entity\Categoriatelefono $categoriatelefono
 */
class Empleado extends Entity
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
        'nue' => true,
        'nup' => true,
        'nombre' => true,
        'apellidop' => true,
        'apellidom' => true,
        'curp' => true,
        'rfc' => true,
        'categorias_categoria_id' => true,
        'dependencias_dependencia_id' => true,
        'areas_area_id' => true,
        'departamentos_departamento_id' => true,
        'unidades_unidad_id' => true,
        'fecha_gafete' => true,
        'sexo' => true,
        'carreras_carrera_id' => true,
        'statusprofecional_statusprofecional_id' => true,
        'contrataciones_contratacion_id' => true,
        'status_status_id' => true,
        'domicilio' => true,
        'telefono_local' => true,
        'telefono_celular' => true,
        'foto' => true,
        'email' => true,
        'privilegiosinternet_privilegio_id' => true,
        'categoriatelefono_categoriatelefono_id' => true,
        'observaciones' => true,
        'clave_imss' => true,
        'nombre_emergencia' => true,
        'apellidop_emergencia' => true,
        'apellidom_emergencia' => true,
        'tel_emergencia' => true,
        'tipo_sangre' => true,
        'alergias' => true,
        'empleado' => true,
        'categoria' => true,
        'dependencia' => true,
        'area' => true,
        'departamento' => true,
        'unidade' => true,
        'carrera' => true,
        'statusprofecional' => true,
        'contratacione' => true,
        'status' => true,
        'privilegiosinternet' => true,
        'categoriatelefono' => true
    ];
}
