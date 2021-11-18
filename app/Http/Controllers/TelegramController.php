<?php

namespace App\Http\Controllers;

use App\Notifications\ToTelegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class TelegramController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function toTelegram(Request $request)
    {
        Notification::send($request, new ToTelegram());

        return back();
    }
}
