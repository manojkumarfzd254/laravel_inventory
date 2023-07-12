<?php

Breadcrumbs::register('admin.roles.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.roles.management'), route('admin.roles.index'));
});

Breadcrumbs::register('admin.roles.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.roles.index');
    $breadcrumbs->push(trans('menus.backend.roles.create'), route('admin.roles.create'));
});

Breadcrumbs::register('admin.roles.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.roles.index');
    $breadcrumbs->push(trans('menus.backend.roles.edit'), route('admin.roles.edit', $id));
});
