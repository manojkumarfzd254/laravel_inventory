<?php

Breadcrumbs::register('admin.users.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.users.management'), route('admin.users.index'));
});

Breadcrumbs::register('admin.users.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push(trans('menus.backend.users.create'), route('admin.users.create'));
});

Breadcrumbs::register('admin.users.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push(trans('menus.backend.users.edit'), route('admin.users.edit', $id));
});

Breadcrumbs::register('admin.users.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push(trans('menus.backend.users.show'), route('admin.users.show', $id));
});
