<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('admin.dashboard.index', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard.index'));
});

// menu
Breadcrumbs::for('admin.menu.index', function ($trail) {
    $trail->parent('admin.dashboard.index');
    $trail->push('Menu', route('admin.menu.index'));
});
// menu
Breadcrumbs::for('admin.insight.index', function ($trail) {
    $trail->parent('admin.dashboard.index');
    $trail->push('Insight', route('admin.insight.index'));
});
Breadcrumbs::for('admin.insight.create', function ($trail) {
    $trail->parent('admin.insight.index');
    $trail->push('Tambah', route('admin.insight.create'));
});
Breadcrumbs::for('admin.insight.edit', function ($trail, $model) {
    $trail->parent('admin.insight.index');
    $trail->push('Edit', route('admin.insight.edit', $model));
});
