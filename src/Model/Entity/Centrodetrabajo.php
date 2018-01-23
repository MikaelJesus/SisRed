<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Centrodetrabajo Entity
 *
 * @property string $departamento_id
 * @property string $des_departamento
 *
 * @property \App\Model\Entity\Departamento $departamento
 */
class Centrodetrabajo extends Entity
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
        'des_departamento' => true,
        'departamento_id' => true
    ];
}
