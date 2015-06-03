<?php
/**
 * Created by PhpStorm.
 * User: ryandushane
 * Date: 6/3/15
 * Time: 2:39 AM
 */

namespace App;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Submit {

    public static function submitNewMedia() {

        $user = Auth::user()['attributes'];

        $id = $user['id'];

        $result = DB::insert("INSERT INTO media (user_id, title, embed, type) VALUES ('". $id ."','". $_POST['title'] ."',
        '". $_POST['url'] ."', '". $_POST['subject'] ."')");

        return $result;

    }

}