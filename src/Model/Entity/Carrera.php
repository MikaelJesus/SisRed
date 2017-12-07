<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Carrera Entity
 *
 * @property int $carrera_id
 * @property string $des_carrera
 * @property int $nivelcarrera_nivelcarrera_id
 *
 * @property \App\Model\Entity\Carrera $carrera
 * @property \App\Model\Entity\Nivelcarrera $nivelcarrera
 */
class Carrera extends Entity
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
        'des_carrera' => true,
        'nivelcarrera_nivelcarrera_id' => true,
        'carrera' => true,
        'nivelcarrera' => true
    ];
}
