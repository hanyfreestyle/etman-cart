<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\admin\AttributeTableSeeder;
use Database\Seeders\admin\AttributeTableTranslationSeeder;
use Database\Seeders\admin\BannerCategorySeeder;
use Database\Seeders\admin\BannerCategoryTranslationSeeder;
use Database\Seeders\admin\BannerSeeder;
use Database\Seeders\admin\BannerTranslationSeeder;
use Database\Seeders\admin\BlogPostSeeder;
use Database\Seeders\admin\BlogPostTranslationSeeder;
use Database\Seeders\admin\CategorySeeder;
use Database\Seeders\admin\CategoryTableSeeder;
use Database\Seeders\admin\CategoryTableTranslationSeeder;
use Database\Seeders\admin\CategoryTranslationSeeder;
use Database\Seeders\admin\FaqCategorySeeder;
use Database\Seeders\admin\FaqCategoryTranslationSeeder;
use Database\Seeders\admin\FaqPivotSeeder;
use Database\Seeders\admin\FaqSeeder;
use Database\Seeders\admin\FaqTranslationSeeder;
use Database\Seeders\admin\OurClientSeeder;
use Database\Seeders\admin\OurClientTranslationSeeder;
use Database\Seeders\admin\PageSeeder;
use Database\Seeders\admin\PageTranslationSeeder;
use Database\Seeders\admin\ProductCategorySeeder;
use Database\Seeders\admin\ProductPhotoSeeder;
use Database\Seeders\admin\ProductSeeder;
use Database\Seeders\admin\ProductTableSeeder;
use Database\Seeders\admin\ProductTableTranslationSeeder;
use Database\Seeders\admin\ProductTranslationSeeder;
use Database\Seeders\config\WebPrivacySeeder;
use Database\Seeders\config\WebPrivacyTranslationSeeder;
use Database\Seeders\customer\UserCustomersProductSeeder;
use Database\Seeders\customer\UsersCustomersAddressSeeder;
use Database\Seeders\customer\UsersCustomersSeeder;
use Database\Seeders\data\DataCitySeeder;
use Database\Seeders\roles\AdminUserSeeder;
use Database\Seeders\roles\DBModelHasRolesSeeder;
use Database\Seeders\roles\DBRoleHasPermissionsSeeder;
use Database\Seeders\roles\DBRoleSeeder;
use Database\Seeders\roles\DBUsersSeeder;
use Database\Seeders\roles\PermissionSeeder;
use Database\Seeders\roles\RoleSeeder;
use Database\Seeders\config\DefPhotoSeeder;
use Database\Seeders\config\SettingsTableSeeder;
use Database\Seeders\config\SettingsTranslationsTableSeeder;
use Database\Seeders\config\UploadFilterSeeder;
use Database\Seeders\config\UploadFilterSizeSeeder;
use Database\Seeders\config\UsersTableSeeder;
use Database\Seeders\shopping\ShoppingOrderAddressSeeder;
use Database\Seeders\shopping\ShoppingOrderLogSeeder;
use Database\Seeders\shopping\ShoppingOrderProductSeeder;
use Database\Seeders\shopping\ShoppingOrderSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(PermissionSeeder::class);
        $this->call(DBUsersSeeder::class);
        $this->call(DBRoleSeeder::class);
        $this->call(DBModelHasRolesSeeder::class);
        $this->call(DBRoleHasPermissionsSeeder::class);

//        $this->call(AdminUserSeeder::class);
//        $this->call(RoleSeeder::class);
//        $this->call(UsersTableSeeder::class);

        $this->call(SettingsTableSeeder::class);
        $this->call(SettingsTranslationsTableSeeder::class);
        $this->call(UploadFilterSeeder::class);
        $this->call(UploadFilterSizeSeeder::class);
        $this->call(DefPhotoSeeder::class);
        $this->call(WebPrivacySeeder::class);
        $this->call(WebPrivacyTranslationSeeder::class);


        $this->call(CategorySeeder::class);
        $this->call(CategoryTranslationSeeder::class);
        $this->call(AttributeTableSeeder::class);
        $this->call(AttributeTableTranslationSeeder::class);

        $this->call(CategoryTableSeeder::class);
        $this->call(CategoryTableTranslationSeeder::class);

        $this->call(ProductSeeder::class);
        $this->call(ProductTranslationSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProductTableTranslationSeeder::class);
        $this->call(ProductPhotoSeeder::class);
        $this->call(ProductCategorySeeder::class);

        $this->call(OurClientSeeder::class);
        $this->call(OurClientTranslationSeeder::class);

        $this->call(BlogPostSeeder::class);
        $this->call(BlogPostTranslationSeeder::class);

        $this->call(BannerCategorySeeder::class);
        $this->call(BannerCategoryTranslationSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(BannerTranslationSeeder::class);

        $this->call(FaqCategorySeeder::class);
        $this->call(FaqCategoryTranslationSeeder::class);

        $this->call(FaqSeeder::class);
        $this->call(FaqTranslationSeeder::class);

        $this->call(FaqPivotSeeder::class);

        $this->call(PageSeeder::class);
        $this->call(PageTranslationSeeder::class);


        $this->call(DataCitySeeder::class);
        $this->call(UsersCustomersSeeder::class);
        $this->call(UsersCustomersAddressSeeder::class);
        $this->call(UserCustomersProductSeeder::class);

        $this->call(ShoppingOrderAddressSeeder::class);
        $this->call(ShoppingOrderSeeder::class);
        $this->call(ShoppingOrderProductSeeder::class);
        $this->call(ShoppingOrderLogSeeder::class);

    }
}
