<?php 

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use App\Models\Website;

class Helper {

    public static function getAddress()
    {
        $info = Website::find(1);
        return $info->address;
    }

    public static function getContactNumber()
    {
        $info = Website::find(1);
        return $info->contact_number;
    }

    public static function getFacebook()
    {
        $info = Website::find(1);
        return $info->facebook;
    }

    public static function getEmail()
    {
        $info = Website::find(1);
        return $info->email;
    }

    public static function getMap()
    {
        $info = Website::find(1);
        return $info->map;
    }
    
    public static function nameFormat($first_name, $middle_name, $last_name, $suffix)
    {
        $full_name = $last_name;
        if($suffix) {
            $full_name .= ' '.$suffix;
        }
        $full_name .= ', '.$first_name;
        if($middle_name) {
            $full_name .= ' '.$middle_name[0].'.';
        }

        return $full_name;
    }


}