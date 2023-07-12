<?php

namespace App\Models\Setting;

use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Setting\Traits\SettingAttribute;
use App\Models\Setting\Traits\SettingRelationship;

class Setting extends Model
{
    use ModelTrait,
        SettingAttribute,
    	SettingRelationship {
            // SettingAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/8.x/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'settings';

    /**
     * Mass Assignable fields of model
     * @var array
     */
    protected $fillable = ['logo', 'favicon', 'seo_title', 'seo_keyword', 'seo_description', 'company_contact', 'company_address', 'from_name', 'from_email', 'footer_text', 'copyright_text', 'terms', 'disclaimer', 'google_analytics','name','version','description','mobile','email','timing','contact_description','location'];


    /**
     * Default values for model fields
     * @var array
     */
    protected $attributes = [

    ];


        /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * Dates
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * Guarded fields of model
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * Constructor of Model
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
