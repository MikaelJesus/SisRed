<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Unidadejecutora Entity
 *
 * @property string $area_id
 * @property string $des_area
 *
 * @property \App\Model\Entity\Area $area
 */
class Unidadejecutora extends Entity
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
        'des_area' => true,
        'area_id' => true
    ];
}
