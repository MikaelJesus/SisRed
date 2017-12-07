<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tipoconexion Entity
 *
 * @property int $tipoconexion_id
 * @property string $des_tipoconexion
 *
 * @property \App\Model\Entity\Tipoconexion $tipoconexion
 */
class Tipoconexion extends Entity
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
        'des_tipoconexion' => true,
        'tipoconexion' => true
    ];
}
