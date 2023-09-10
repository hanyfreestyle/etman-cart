<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
   // $trail->push(__('web/menu.home'), route('Page_HomePage'));
    $trail->push('<i class="fa fa-home"></i>', route('Page_HomePage'));
});

Breadcrumbs::for('AboutUs', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/menu.About_Us'), route('Page_AboutUs'));
});


Breadcrumbs::for('OurClient', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/menu.Our_Client'), route('Page_OurClient'));
});

Breadcrumbs::for('ContactUs', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/menu.contatc_us'), route('Page_ContactUs'));
});

Breadcrumbs::for('TermsConditions', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/menu.Terms'), route('Page_TermsConditions'));
});

Breadcrumbs::for('FaqList', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/menu.Faq'), route('Page_FaqList'));
});

Breadcrumbs::for('FaqCatView', function (BreadcrumbTrail $trail, $FaqCategory) {
    $trail->parent('FaqList');
    $trail->push($FaqCategory->name, route('Page_FaqCatView', $FaqCategory->slug));
});



Breadcrumbs::for('LatestNews', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/menu.Latest_News'), route('Page_FaqList'));
});

Breadcrumbs::for('LatestNewsView', function (BreadcrumbTrail $trail, $Post) {
    $trail->parent('LatestNews');
    $trail->push(\Illuminate\Support\Str::limit($Post->name,35), route('Page_FaqCatView', $Post->slug));
});



Breadcrumbs::for('MainCategory', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/def.Main_Categories'), route('Page_MainCategory'));
});

Breadcrumbs::for('WebCategoryView', function (BreadcrumbTrail $trail, $trees) {
    $trail->parent('MainCategory');
    foreach($trees as $tree){
        $trail->push($tree->name, route('Page_WebCategoryView', $tree->slug));
    }
});

Breadcrumbs::for('WebProductView', function (BreadcrumbTrail $trail, $trees,$Product) {
    $trail->parent('MainCategory');
    foreach($trees as $tree){
        $trail->push($tree->name, route('Page_WebCategoryView', $tree->slug));
    }
    $trail->push($Product->name, route('Page_WebProductView', $Product->slug));
});


