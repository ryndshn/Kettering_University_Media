<?php
/**
 * Created by PhpStorm.
 * User: ryandushane
 * Date: 6/3/15
 * Time: 2:02 AM
 */

namespace App\Http\Controllers;

use App\Submit;

class SubmitController extends Controller {

    public function index() {

        $result = false;

        return view('submit', ['result' => $result]);

    }

    public function submit() {

        $result = Submit::submitNewMedia();

        return view('submit', ['result' => $result]);

    }

}