<?php

Breadcrumbs::register('admin.dashboard', function ($breadcrumbs) {
    $breadcrumbs->push(__('navs.backend.dashboard'), route('admin.dashboard'));
});
Breadcrumbs::register('admin.profile.show', function ($breadcrumbs) {
    $breadcrumbs->push(__('navs.backend.profile'), route('admin.profile.show'));
});


require __DIR__.'/User.php';
require __DIR__.'/Permission.php';
require __DIR__.'/Role.php';
require __DIR__.'/Menu.php';
require __DIR__.'/Setting.php';

require __DIR__.'/Page.php';

require __DIR__.'/Product.php';