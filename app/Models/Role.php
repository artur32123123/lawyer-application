<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    public function Permissions() {
        return $this->belongsToMany(Permission::class, 'role_permissions', 'role_id');
    }
}
