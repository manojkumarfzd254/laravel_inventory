<?php

namespace App\Models\Role\Traits;

/**
 * Class RoleAttribute.
 */
trait RoleAttribute
{
    /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        if (accessAllow('edit-role')) {
            return '<a class="btn btn-light border" href="' . route('admin.roles.edit', $this) . '">
                    <i data-toggle="tooltip" data-placement="top" title="Edit" class="fa fa-pencil"></i>
                </a>';
        }
    }
    public function getviewButtonAttribute()
    {
        if (accessAllow('edit-role')) {
            return '<a class="btn btn-flat btn-default" href="' . route('admin.roles.edit', $this) . '">
                    <i data-toggle="tooltip" data-placement="top" title="Edit" class="fa fa-pencil"></i>
                </a>';
        }
    }
    /**
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
        //Can't delete master admin role
        if ($this->id != 1 && accessAllow('delete-role')) {
            return '<a data-href="' . route('admin.roles.destroy', $this) . '" class="btn btn-light border lb_item_delete" data-method="delete"
                    data-trans-button-cancel="' . trans('buttons.general.cancel') . '"
                    data-trans-button-confirm="' . trans('buttons.general.crud.delete') . '" 
                    data-trans-title="' . trans('strings.backend.general.acan_not_revert') . '"
                    data-trans-title="' . trans('strings.backend.general.are_you_sure') . '" onclick="lbdelete(this);">
                        <i data-toggle="tooltip" data-placement="top" title="Delete" class="fa fa-trash"></i>

                </a>';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
                    ' . $this->getEditButtonAttribute('edit-role', 'admin.roles.edit') . '
                    ' . $this->getDeleteButtonAttribute() . '
                </div>';
    }
}