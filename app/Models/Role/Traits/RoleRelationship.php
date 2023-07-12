<?php

namespace App\Models\Role\Traits;

use App\Models\Permission\Permission;
/**
 * Class RoleRelationship
 */
trait RoleRelationship
{
    /**
     * @return mixed
     */
    public function users()
    {
        return $this->belongsToMany(config('auth.providers.users.model'), 'role_user', 'role_id', 'user_id');
    }

    /**
     * @return mixed
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_role', 'role_id', 'permission_id')
            ->orderBy('display_name', 'asc');
    }
}
