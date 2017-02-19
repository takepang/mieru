<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $loginid
 * @property string $email
 * @property string $password
 * @property string $temp_pass
 * @property \Cake\I18n\Time $temp_limit_time
 * @property \Cake\I18n\Time $last_change_pass_time
 * @property \Cake\I18n\Time $last_login_time
 * @property string $salt
 * @property int $reset
 * @property int $group_id
 * @property bool $status
 * @property \Cake\I18n\Time $create_at
 * @property \Cake\I18n\Time $update_at
 */
class User extends Entity
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
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
}
