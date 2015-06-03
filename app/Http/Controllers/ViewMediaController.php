<?php
/**
 * Created by PhpStorm.
 * User: ryandushane
 * Date: 6/3/15
 * Time: 1:25 AM
 */

namespace App\Http\Controllers;

use App\MediaRetrieval;

class ViewMediaController extends Controller {

    public function index($id) {

        $media = MediaRetrieval::getMedia($id);
        return view('view_media', ['media' => $media]);

    }

}