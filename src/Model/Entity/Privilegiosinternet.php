<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Privilegiosinternet Entity
 *
 * @property int $privilegio_id
 * @property string $nivel
 * @property string $des_privilegio
 *
 * @property \App\Model\Entity\Privilegio $privilegio
 */
class Privilegiosinternet extends Entity
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
        'nivel' => true,
        'des_privilegio' => true,
        'privilegio' => true
    ];
}
