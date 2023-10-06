<?php

 return [
    'menu' => [
        [
            'view'=>true,
            'sel_routs'=>'ShopOrders',
            'type'=>'many',
            'text'=> 'admin/menu.shop_orders',
            'icon'=>'fas fa-money-check-alt',
            'roleView'=>'ShopOrders_view',
            'submenu'=>[
                [
                    'sel_routs'=> 'New',
                    'url'=> 'ShopOrders.New.index',
                    'roleView'=>'ShopOrders_view',
                    'text'=> 'admin/order.status_1',
                    'icon'=>'fas fa-bolt'
                ],
                [
                    'sel_routs'=> 'Pending',
                    'url'=> 'ShopOrders.Pending.index',
                    'roleView'=>'ShopOrders_view',
                    'text'=> 'admin/order.status_2',
                    'icon'=>'fas fa-wrench'
                ],
                [
                    'sel_routs'=> 'Recipient',
                    'url'=> 'ShopOrders.Recipient.index',
                    'roleView'=>'ShopOrders_view',
                    'text'=> 'admin/order.status_3',
                    'icon'=>'fas fa-thumbs-up'
                ],
                [
                    'sel_routs'=> 'Rejected',
                    'url'=> 'ShopOrders.Rejected.index',
                    'roleView'=>'ShopOrders_view',
                    'text'=> 'admin/order.status_4',
                    'icon'=>'fas fa-times-circle'
                ],
                [
                    'sel_routs'=> 'Canceled',
                    'url'=> 'ShopOrders.Canceled.index',
                    'roleView'=>'ShopOrders_view',
                    'text'=> 'admin/order.status_5',
                    'icon'=>'fas fa-power-off'
                ],
                [
                    'sel_routs'=> 'OrderConfig',
                    'url'=> 'ShopOrders.OrderConfig.Config',
                    'roleView'=>'ShopOrders_view',
                    'text'=> 'admin/menu.setting',
                    'icon'=>'fas fa-cogs'
                ],

            ],
        ], #ShopOrders

        [
            'view'=>true,
            'sel_routs'=>'ShopCustomer',
            'type'=>'many',
            'text'=> 'admin/menu.shop_customer',
            'icon'=>'fas fa-user-tie',
            'roleView'=>'ShopCustomer_view',
            'submenu'=>[
                [
                    'sel_routs'=> 'Customer',
                    'url'=> 'ShopCustomer.Customer.index',
                    'roleView'=>'ShopCustomer_view',
                    'text'=> 'admin/menu.shop_customer_list',
                    'icon'=>'fas fa-list'
                ],
                [
                    'sel_routs'=> 'Export',
                    'url'=> 'ShopCustomer.Export.ExportLogin',
                    'roleView'=>'ShopCustomer_edit',
                    'text'=> 'تصدير كلمة المرور',
                    'icon'=>'fas fa-lock'
                ],

            ],
        ], #ShopCustomer

        [
            'view'=>true,
            'sel_routs'=>'Shop',
            'type'=>'many',
            'text'=> 'admin/menu.shop_product_menu',
            'icon'=>'fas fa-shopping-cart',
            'roleView'=>'shopProduct_view',
            'submenu'=>[
                [
                    'sel_routs'=> 'shopCategory',
                    'url'=> 'Shop.shopCategory.index',
                    'roleView'=>'shopCategory_view',
                    'text'=> 'admin/menu.web_category',
                    'icon'=>'fas fa-sitemap'
                ],
                [
                    'sel_routs'=> 'ShopProduct',
                    'url'=> 'Shop.ShopProduct.index',
                    'roleView'=>'shopProduct_view',
                    'text'=> 'admin/menu.web_product',
                    'icon'=>'fas fa-shopping-cart'
                ],
                [
                    'sel_routs'=> 'shopCategoryConfig',
                    'url'=> 'Shop.shopCategoryConfig.Config',
                    'roleView'=>'category_edit',
                    'text'=> 'admin/menu.setting',
                    'icon'=>'fas fa-cogs'
                ],

            ],
        ], #Shop Product

        [
            'view'=>true,
            'sel_routs'=>'webPro',
            'type'=>'many',
            'text'=> 'admin/menu.web_product_menu',
            'icon'=>'fas fa-warehouse',
            'roleView'=>'category_view',
            'submenu'=>[
                [
                    'sel_routs'=> 'category',
                    'url'=> 'webPro.category.index',
                    'roleView'=>'category_view',
                    'text'=> 'admin/menu.web_category',
                    'icon'=>'fas fa-sitemap'
                ],
                [
                    'sel_routs'=> 'Product',
                    'url'=> 'webPro.Product.index',
                    'roleView'=>'product_view',
                    'text'=> 'admin/menu.web_product',
                    'icon'=>'fas fa-shopping-cart'
                ],
                [
                    'sel_routs'=> 'AttributeTables',
                    'url'=> 'webPro.AttributeTables.index',
                    'roleView'=>'category_view',
                    'text'=> 'admin/menu.web_attribute_Table',
                    'icon'=>'fas fa-table'
                ],
                [
                    'sel_routs'=> 'categoryConfig',
                    'url'=> 'webPro.categoryConfig.Config',
                    'roleView'=>'category_edit',
                    'text'=> 'admin/menu.setting',
                    'icon'=>'fas fa-cogs'
                ],

            ],
        ], #Web Product

        [
            'view'=>true,
            'sel_routs'=>'FAQ',
            'type'=>'one',
            'text'=> 'admin/menu.faq',
            'url'=> 'FAQ.FaqList.index',
            'icon'=>'fas fa-question',
            'roleView'=>'Faq_view',
        ],#FAQ

        [
            'view'=>true,
            'sel_routs'=>'BlogPost',
            'type'=>'one',
            'text'=> 'admin/menu.blog',
            'url'=> 'BlogPost.index',
            'icon'=>'fas fa-calendar-alt',
            'roleView'=>'BlogPost_view',
        ], #Blog Post

        [
            'view'=>true,
            'sel_routs'=>'OurClient',
            'type'=>'one',
            'text'=> 'admin/menu.OurClient',
            'url'=> 'OurClient.index',
            'icon'=>'fas fa-users',
            'roleView'=>'OurClient_view',
        ], #Our Client

        [
            'view'=>true,
            'sel_routs'=>'Banners',
            'type'=>'one',
            'text'=> 'admin/menu.web_banner',
            'url'=> 'Banners.Banner.index',
            'icon'=>'fas fa-images',
            'roleView'=>'Banner_view',
        ], #Banners

        [
            'view'=>true,
            'sel_routs'=>'Pages',
            'type'=>'one',
            'text'=> 'admin/menu.web_pages',
            'url'=> 'Pages.pageList.index',
            'icon'=>'fab fa-html5',
            'roleView'=>'Pages_view',
        ],#PAge

        [
            'view'=>true,
            'sel_routs'=>'weblang',
            'type'=>'one',
            'text'=> 'admin/menu.lang_file_web',
            'url'=> 'weblang.index',
            'icon'=>'fas fa-globe-africa',
            'roleView'=>'weblang_view',
        ], #Web Lang

        [
            'view'=>true,
            'sel_routs'=>'adminlang',
            'type'=>'one',
            'text'=> 'admin/menu.lang_file_admin',
            'url'=> 'adminlang.index',
            'icon'=>'fas fa-globe-africa',
            'roleView'=>'adminlang_view',
        ], #Admin Lang

        [
            'view'=>true,
            'sel_routs'=>'config',
            'type'=>'many',
            'text'=> 'admin/menu.setting',
            'icon'=>'fas fa-cogs',
            'roleView'=>'config_section',
            'submenu'=>[

                ['roleView'=>'website_config','text'=> 'admin/menu.setting_web','url'=> 'config.web.index','sel_routs'=> 'web','icon'=>'fas fa-cog'],
//                ['roleView'=>'website_config','text'=> 'admin/menu.setting_model','url'=> 'config.model.index','sel_routs'=> 'model', 'icon'=>'fas fa-cog'],
                ['roleView'=>'webPrivacy_view','text'=> 'admin/menu.webPrivacy','url'=> 'config.webPrivacy.index','sel_routs'=> 'webPrivacy', 'icon'=>'fas fa-file-invoice'],
                ['roleView'=>'defPhoto_view','text'=> 'admin/menu.setting_def_photo','url'=> 'config.defPhoto.index','sel_routs'=> 'defPhoto','icon'=>'fas fa-image'],
                ['roleView'=>'upFilter_view','text'=> 'admin/menu.uploadFilter','url'=> 'config.upFilter.index','sel_routs'=> 'upFilter','icon'=>'fas fa-filter'],


//                ['roleView'=>'config_section','text'=> 'admin/menu.setting_icon','url'=> 'config.defIcon.show','sel_routs'=> 'defIcon','icon'=>'fab fa-fonticons'],
            ],
        ], #Setting

        [
            'view'=>true,
            'sel_routs'=>'users',
            'type'=>'many',
            'text'=> 'admin/menu.roles',
            'icon'=>'fas fa-unlock-alt',
            'roleView'=>'users_view',
            'submenu'=>[

                ['roleView'=>'users_view','text'=> 'admin/menu.roles_users' ,'url'=> 'users.users.index', 'sel_routs'=> 'users','icon'=>'fas fa-users'],
                ['roleView'=>'roles_view','text'=> 'admin/menu.roles_role','url'=>  'users.roles.index','sel_routs'=> 'roles','icon'=>'fas fa-traffic-light'],
                ['roleView'=>'permissions_view','text'=> 'admin/menu.roles_permissions' ,'url'=> 'users.permissions.index','sel_routs'=> 'permissions','icon'=>'fas fa-user-shield'],
            ],

        ], #Permissions

    ],

];
