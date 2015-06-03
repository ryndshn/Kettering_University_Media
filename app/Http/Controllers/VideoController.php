<?php
/**
 * Created by PhpStorm.
 * User: ryandushane
 * Date: 6/2/15
 * Time: 10:18 PM
 */

namespace App\Http\Controllers;

use App\MediaRetrieval;

class VideoController extends Controller {

    public function index() {

        $media = MediaRetrieval::getVideoPageMedia();
        return view('video', ['media' => $media]);

    }

}