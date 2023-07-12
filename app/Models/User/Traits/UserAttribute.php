<?php

namespace App\Models\User\Traits;

/**
 * Class UserAttribute.
 */
trait UserAttribute
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
                ' . $this->getShowButtonAttribute("show-user", "admin.users.show") . '
                '.$this->getEditButtonAttribute("edit-user", "admin.users.edit").'
                '.$this->getDeleteButtonAttribute("delete-user", "admin.users.destroy").'
                </div>';

    }
}
