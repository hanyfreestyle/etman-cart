<?php
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    defWebAssets
use App\Http\Controllers\WebMainController;

if (!function_exists('defWebAssets')) {
    function defWebAssets($path, $secure = null): string
    {
        return app('url')->asset('assets/web/' . $path, $secure);
    }
}
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     webContainer
if (!function_exists('webContainer')) {
    function webContainer($type=1) :string
    {
        if($type == 1){
            $webContainer = 'custom-container';
        }else{
            $webContainer = 'container';
        }
        return  $webContainer;
    }
}
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     webContainer
if (!function_exists('webChangeLocale')) {
    function webChangeLocale(){
        $Current =  LaravelLocalization::getCurrentLocale() ;
        if($Current == 'ar'){
            $change = 'en';
        }else{
            $change = 'ar';
        }
        return $change;
    }
}
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     webContainer
if (!function_exists('webChangeLocaletext')) {
    function webChangeLocaletext(){
        $Current =  LaravelLocalization::getCurrentLocale() ;
        if($Current == 'ar'){
            $change = 'English';
        }else{
            $change = 'عربى';
        }
        return $change;
    }
}

if (!function_exists('getPhotoPath')) {
    function getPhotoPath($file,$defPhoto){
        $defPhoto_file = WebMainController::getDefPhotoById($defPhoto);
        if($file){
            $sendImg = defImagesDir($file);
        }else{
            $sendImg = defImagesDir($defPhoto_file->photo);
        }
        return $sendImg ;
    }
}


if (!function_exists('getDefPhotoPath')) {
    function getDefPhotoPath($DefPhotoList,$cat_id){
        if ($DefPhotoList->has($cat_id)) {
            $file =  $DefPhotoList[$cat_id]['photo'] ;
            $sendImg = defImagesDir($file);

        }else{
              $sendImg = "ddddd"  ;
        }


        return $sendImg ;
    }
}







