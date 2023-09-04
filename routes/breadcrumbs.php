<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push(__('web/menu.home'), route('Page_HomePage'));
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

Breadcrumbs::for('FaqList', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/menu.Faq'), route('Page_FaqList'));
});

Breadcrumbs::for('LatestNews', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/menu.Latest_News'), route('Page_FaqList'));
});

Breadcrumbs::for('TermsConditions', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('web/menu.Terms'), route('Page_TermsConditions'));
});



//
//Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
//    $trail->parent('home');
//    $trail->push(__('web/menu.blog'), route('menu-blog'));
//});
//
//Breadcrumbs::for('blogCatList', function (BreadcrumbTrail $trail, $Category) {
//    $trail->parent('blog');
//    $trail->push($Category->name, route('blogCatList', $Category->slug));
//});
//
//Breadcrumbs::for('post_view', function (BreadcrumbTrail $trail, $Category,$Post) {
//    $trail->parent('blog');
//    $trail->push($Category->name, route('blogCatList', $Category->slug));
//    $trail->push($Post->name, route('blogCatList', $Post->slug));
//});
//
//Breadcrumbs::for('developer_list', function (BreadcrumbTrail $trail) {
//    $trail->parent('home');
//    $trail->push(__('web/menu.developer'), route('menu-developers'));
//});
//
//Breadcrumbs::for('developer_view', function (BreadcrumbTrail $trail,$Developer) {
//    $trail->parent('developer_list');
//    $trail->push( $Developer->name , route('page-developer-view',$Developer->slug));
//});


