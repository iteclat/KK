<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/15/2015
 * Time: 4:56 PM
 */

namespace App;
use Zizaco\Entrust\EntrustPermission;
class Permission extends EntrustPermission {
    protected $table = 'permissions';
} 