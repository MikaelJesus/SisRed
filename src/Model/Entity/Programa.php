<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Programa Entity
 *
 * @property string $unidad_id
 * @property string $des_unidad
 *
 * @property \App\Model\Entity\Unidad $unidad
 */
class Programa extends Entity
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
        'des_unidad' => true,
        'unidad_id' => true
    ];
}
