<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    /**
     * return true if link working
     * @param $link
     * @return bool
     */
    public static function checkLink($link)
    {
        $area = Area::where('link', $link)->get('expire_date')->first();

        if ($area) {
            return $area->expire_date > date('Y-m-d H:i:s') ? true : false;
        }
        return false;

    }

    public static function deactivate($link)
    {
        return Area::where('link', $link)->update(['expire_date' => date('Y-m-d H:i:s')]);
    }
}
