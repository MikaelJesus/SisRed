<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Nivelcarrera Entity
 *
 * @property int $nivelcarrera_id
 * @property string $des_nivelcarrera
 *
 * @property \App\Model\Entity\Nivelcarrera $nivelcarrera
 */
class Nivelcarrera extends Entity
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
        'des_nivelcarrera' => true,
        'nivelcarrera' => true
    ];
}
