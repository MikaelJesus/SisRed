<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contratacione Entity
 *
 * @property int $contratacion_id
 * @property string $des_contratacion
 *
 * @property \App\Model\Entity\Contratacion $contratacion
 */
class Contratacione extends Entity
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
        'des_contratacion' => true,
        'contratacion' => true
    ];
}
