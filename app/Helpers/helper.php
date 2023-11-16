<?php

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
