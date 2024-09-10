<?php

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;

function isMobile()
{
    if (!empty($_SERVER['HTTP_USER_AGENT'])) {
        $user_ag = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/(Mobile|Android|Tablet|GoBrowser|[0-9]x[0-9]*|uZardWeb\/|Mini|Doris\/|Skyfire\/|iPhone|Fennec\/|Maemo|Iris\/|CLDC\-|Mobi\/)/uis', $user_ag)) {
            return true;
        };
    };
    return false;
}



function redirect_link($key = null)
{
    if ($key) {
        Session::put('_redirect', URL::current());
    }
    return Session::get('_redirect');
}

// create function for return this 0=incomplete profile,1=reviewd,2=verified,3= not verified	

function profileType($key)
{
    $profileTypes = [
        0 => "Incomplete Profile",
        1 => "Reviewed",
        2 => "Verified",
        3 => "Not Verified",
    ];

    return $profileTypes[$key] ?? "Unknown Profile Type";
}

// getGender function

function getGender($key)
{
    $genders = [
        1 => "Male",
        2 => "Female",
        3 => "Other",
    ];
    return $genders[$key] ?? "Unknown Gender";
}
