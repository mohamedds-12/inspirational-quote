<?php

namespace App;

use App\Events\ShowQuoteWindow;
use Illuminate\Support\Facades\Artisan;
use Native\Laravel\Facades\Notification;


class InspirationalWisdom
{

    public static function generateOne()
    {
        Artisan::call('inspire');
        $wisdom = Artisan::output();

        Notification::title("Get inspired !")
            ->message($wisdom)
            ->event(ShowQuoteWindow::class)
            ->show();

        return $wisdom;
    }
}
