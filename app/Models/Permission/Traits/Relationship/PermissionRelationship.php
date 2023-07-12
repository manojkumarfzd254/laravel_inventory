<?php

namespace App\Models\Permission\Traits\Relationship;

/**
 * Class PermissionRelationship.
 */
trait PermissionRelationship
{
    /**
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'permission_role', 'permission_id', 'role_id');
    }
}
