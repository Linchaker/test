<?php

namespace App\Http\Controllers;

use App\Area;
use App\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use src\games\Game;

class AreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        abort(404);
    }

    public static function create()
    {
        $area = new Area();

        $area->link = Str::random(20);
        $area->expire_date = date('Y-m-d H:i:s', strtotime('+7 days'));

        $area->save();

        return $area->link;
    }

    public function link($link)
    {
        if ($this->checkLink($link)) {
            $data['link'] = $link;
            return view('area', $data);
        }
        abort(404);
    }

    private function checkLink($link)
    {
        return Area::checkLink($link);
    }

    public function deactivate(Request $request)
    {
        return Area::deactivate($request->input('link'));
    }

    public function play()
    {
        $result = Game::play();

        History::add($result);

        return $result;
    }

    public function history()
    {
        return History::get();
    }
}
