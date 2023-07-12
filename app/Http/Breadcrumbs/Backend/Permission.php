<?php

Breadcrumbs::register('admin.permissions.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.permissions.management'), route('admin.permissions.index'));
});

Breadcrumbs::register('admin.permissions.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.permissions.index');
    $breadcrumbs->push(trans('menus.backend.permissions.create'), route('admin.permissions.create'));
});

Breadcrumbs::register('admin.permissions.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.permissions.index');
    $breadcrumbs->push(trans('menus.backend.permissions.edit'), route('admin.permissions.edit', $id));
});
