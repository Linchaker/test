<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class History extends Model
{
    public static function add($result)
    {
        $history = new History();

        $history->user_id = Auth::id();
        $history->points = $result['points'];
        $history->prize = $result['prize'];

        $history->save();
    }

    public static function get()
    {
        return History::where('user_id', Auth::id())->orderBy('id', 'DESC')->take(3)->get();
    }
}
