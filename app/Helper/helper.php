<?php

use Carbon\Carbon;

if (!function_exists('getGreeting')) {
    function getGreeting()
    {

        $currentHour = Carbon::now('Asia/Dhaka')->hour;

        if ($currentHour < 12) {
            return 'Good Morning';
        } elseif ($currentHour < 15) {
            return 'Good Noon';
        } elseif ($currentHour < 18) {
            return 'Good Afternoon';
        } elseif ($currentHour < 21) {
            return 'Good Evening';
        } else {
            return 'Good Night';
        }
    }
}
