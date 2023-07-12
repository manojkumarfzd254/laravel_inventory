<?php

namespace App\Models\Page\Traits;

/**
 * Class PageAttribute.
 */
trait PageAttribute
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
                '.$this->getEditButtonAttribute("edit-page", "admin.pages.edit").'
                '.$this->getDeleteButtonAttribute("delete-page", "admin.pages.destroy").'
                </div>';
    }


        /**
     * @return string
     */
    public function getStatusLabelAttribute()
    {
        if ($this->isActive()) {
            return "<label class='badge badge-success'>".trans('labels.general.active').'</label>';
        }

        return "<label class='badge badge-danger'>".trans('labels.general.inactive').'</label>';
    }

      /**
     * @return bool
     */
    public function isActive()
    {
        return $this->status == 1;
    }

}
