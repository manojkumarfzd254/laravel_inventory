<?php

namespace App\Models\Permission\Traits\Attribute;

/**
 * Class PermissionAttribute.
 */
trait PermissionAttribute
{
    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
                    '.$this->getEditButtonAttribute('edit-permission', 'admin.permissions.edit').'
                    '.$this->getDeleteButtonAttribute('delete-permission', 'admin.permissions.destroy').'
                </div>';
    }
}
