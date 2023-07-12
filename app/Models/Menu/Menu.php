<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Menu\Traits\Attribute\MenuAttribute;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory;
    use ModelTrait,
        MenuAttribute,
        SoftDeletes {
        // MenuAttribute::getEditButtonAttribute insteadof ModelTrait;
    }
    protected $fillable = [
        'type',
        'name',
        'items',
        'created_by'
    ];

}
