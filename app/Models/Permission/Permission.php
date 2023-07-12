<?php

namespace App\Models\Permission;

use App\Models\Permission\Traits\Attribute\PermissionAttribute;
use App\Models\Permission\Traits\Relationship\PermissionRelationship;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Role;

/**
 * Class Permission.
 */
class Permission extends Model
{
    use ModelTrait,
        SoftDeletes,
        PermissionAttribute,
        PermissionRelationship {
            // PermissionAttribute::getEditButtonAttribute insteadof ModelTrait;
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
    protected $fillable = ['name', 'display_name', 'sort'];

    protected $attributes = [
        'created_by' => 1,
    ];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = 'permissions';
    }
}
