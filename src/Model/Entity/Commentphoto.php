<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Commentphoto Entity
 *
 * @property int $id
 * @property int $Photos_id
 * @property int $Users_id
 * @property string $IsiKomentar
 * @property \Cake\I18n\Date $TanggalKomentar
 *
 * @property \App\Model\Entity\Photo $photo
 * @property \App\Model\Entity\User $user
 */
class Commentphoto extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'Photos_id' => true,
        'Users_id' => true,
        'IsiKomentar' => true,
        'TanggalKomentar' => true,
        'photo' => true,
        'user' => true,
    ];
}
