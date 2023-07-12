<?php

namespace App\Models\Setting\Traits;

/**
 * Class SettingAttribute.
 */
trait SettingAttribute
{
    // Make your attributes functions here
    // Further, see the documentation : https://laravel.com/docs/8.x/eloquent-mutators#defining-an-accessor


    /**
     * Action Button Attribute to show in grid
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
                '.$this->getEditButtonAttribute("edit-setting", "admin.settings.edit").'
                '.$this->getDeleteButtonAttribute("delete-setting", "admin.settings.destroy").'
                </div>';
    }
}
