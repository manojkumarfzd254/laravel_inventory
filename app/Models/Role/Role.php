<?php

namespace App\Models\Role;

use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role\Traits\RoleAttribute;
use App\Models\Role\Traits\RoleRelationship;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Role\Traits\RoleAccess;
use App\Models\Role\Traits\RoleScope;

class Role extends Model
{
    use RoleScope,
        ModelTrait,
        RoleAccess,
        RoleAttribute,
        RoleRelationship,
        SoftDeletes {
        RoleAttribute::getEditButtonAttribute insteadof ModelTrait;
        RoleAttribute::getDeleteButtonAttribute insteadof ModelTrait;
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'all', 'sort'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('access.roles_table');
    }
}
