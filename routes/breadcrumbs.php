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

Breadcrumbs::for('admin.contact.index', function ($trail) {
    $trail->parent('admin.dashboard.index');
    $trail->push('Contact', route('admin.contact.index'));
});
Breadcrumbs::for('admin.products.index', function ($trail) {
    $trail->parent('admin.dashboard.index');
    $trail->push('Products', route('admin.products.index'));
});
Breadcrumbs::for('admin.contents.index', function ($trail) {
    $trail->parent('admin.dashboard.index');
    $trail->push('Content', route('admin.contents.index'));
});
Breadcrumbs::for('admin.contents.create', function ($trail) {
    $trail->parent('admin.contents.index');
    $trail->push('Create', route('admin.contents.create'));
});
Breadcrumbs::for('admin.contents.edit', function ($trail, $author) {
    $trail->parent('admin.contents.index');
    $trail->push('Update', route('admin.contents.edit', $author));
});
Breadcrumbs::for('admin.partner.index', function ($trail) {
    $trail->parent('admin.dashboard.index');
    $trail->push('Partner', route('admin.partner.index'));
});
