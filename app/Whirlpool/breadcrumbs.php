<?php

/** @var \DaveJamesMiller\Breadcrumbs\Manager $b */
$b = app('breadcrumbs');

$b->register('panel.index', function ($breadcrumbs) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->push('管理后台', route('panel.index'));
});

$b->register('panel.news.index', function ($breadcrumbs) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.index');
    $breadcrumbs->push('新闻中心', route('panel.news.index'));
});

$b->register('panel.news.create', function ($breadcrumbs) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.news.index');
    $breadcrumbs->push('新建', route('panel.news.create'));
});


$b->register('panel.news.edit', function ($breadcrumbs, $id) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.news.index');
    $breadcrumbs->push('编辑', route('panel.news.edit', ['id' => $id]));
});



$b->register('panel.life.index', function ($breadcrumbs) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.index');
    $breadcrumbs->push('“会”生活', route('panel.life.index'));
});

$b->register('panel.life.create', function ($breadcrumbs) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.life.index');
    $breadcrumbs->push('新建', route('panel.life.create'));
});


$b->register('panel.life.edit', function ($breadcrumbs, $id) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.life.index');
    $breadcrumbs->push('编辑', route('panel.life.edit', ['id' => $id]));
});


$b->register('panel.terminal.index', function ($breadcrumbs) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.index');
    $breadcrumbs->push('终端形象', route('panel.terminal.index'));
});

$b->register('panel.terminal.create', function ($breadcrumbs) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.terminal.index');
    $breadcrumbs->push('新建', route('panel.terminal.create'));
});


$b->register('panel.terminal.edit', function ($breadcrumbs, $id) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.terminal.index');
    $breadcrumbs->push('编辑', route('panel.terminal.edit', ['id' => $id]));
});


$b->register('panel.site-config.index', function ($breadcrumbs) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.index');
    $breadcrumbs->push('基本信息编辑', route('panel.site-config.index'));
});


$b->register('panel.product.index', function ($breadcrumbs) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.index');
    $breadcrumbs->push('厨房电器', route('panel.product.index'));
});

$b->register('panel.product.create', function ($breadcrumbs) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.product.index');
    $breadcrumbs->push('新建', route('panel.product.create'));
});


$b->register('panel.product.edit', function ($breadcrumbs, $id) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.product.index');
    $breadcrumbs->push('编辑', route('panel.product.edit', ['id' => $id]));
});


$b->register('panel.product-type.index', function ($breadcrumbs) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.product.index');
    $breadcrumbs->push('分类管理', route('panel.product-type.index'));
});

$b->register('panel.product-type.create', function ($breadcrumbs) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.product.index');
    $breadcrumbs->push('新建', route('panel.product-type.create'));
});

$b->register('panel.product-type.edit', function ($breadcrumbs, $id) {
    /** @var \DaveJamesMiller\Breadcrumbs\Generator $breadcrumbs */
    $breadcrumbs->parent('panel.product.index');
    $breadcrumbs->push('编辑', route('panel.product-type.edit', ['id' => $id]));
});

