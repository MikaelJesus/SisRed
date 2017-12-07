<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Categoriatelefono Entity
 *
 * @property int $categoriatelefono_id
 * @property string $des_categoriatelefono
 * @property string $des_nivelasignacion
 *
 * @property \App\Model\Entity\Categoriatelefono $categoriatelefono
 */
class Categoriatelefono extends Entity
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
        'des_categoriatelefono' => true,
        'des_nivelasignacion' => true,
        'categoriatelefono' => true
    ];
}
