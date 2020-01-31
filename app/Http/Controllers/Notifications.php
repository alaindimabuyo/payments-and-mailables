<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Notifications extends Controller
{
    // 

    

    public function show(){

        $notifications = auth()->user()->unreadNotifcations;

        $notifications->markAsRead();
        
        return view('notifications.show', [
            'notifications' => $notifications
        ]);
    }
}
