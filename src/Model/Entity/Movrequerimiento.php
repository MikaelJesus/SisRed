<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Movrequerimiento Entity
 *
 * @property int $movrequerimientos_id
 * @property \Cake\I18n\FrozenDate $fech_req
 * @property int $requerimientos_requerimiento_id
 * @property string $peticion
 * @property string $cpu
 * @property string $monitor
 * @property string $teclado
 * @property string $mouse
 * @property string $impresora
 * @property string $corriente_pc
 * @property string $corriente_impresora
 * @property string $usb_impresora
 * @property string $otro
 * @property string $solicitud
 * @property \Cake\I18n\FrozenDate $fech_entrega
 * @property string $comentario
 * @property int $statusrequerimiento_statusrequerimiento_id
 * @property int $recibido_recibido_id
 * @property int $users_user_id1
 * @property int $users_user_id2
 *
 * @property \App\Model\Entity\Movrequerimiento $movrequerimiento
 * @property \App\Model\Entity\Requerimiento $requerimiento
 * @property \App\Model\Entity\Statusrequerimiento $statusrequerimiento
 * @property \App\Model\Entity\Recibido $recibido
 * @property \App\Model\Entity\User $user
 */
class Movrequerimiento extends Entity
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
        'fech_req' => true,
        'requerimientos_requerimiento_id' => true,
        'peticion' => true,
        'cpu' => true,
        'monitor' => true,
        'teclado' => true,
        'mouse' => true,
        'impresora' => true,
        'corriente_pc' => true,
        'corriente_impresora' => true,
        'usb_impresora' => true,
        'otro' => true,
        'solicitud' => true,
        'fech_entrega' => true,
        'comentario' => true,
        'statusrequerimiento_statusrequerimiento_id' => true,
        'recibido_recibido_id' => true,
        'users_user_id1' => true,
        'users_user_id2' => true,
        'movrequerimiento' => true,
        'requerimiento' => true,
        'statusrequerimiento' => true,
        'recibido' => true,
        'user' => true
    ];
}
