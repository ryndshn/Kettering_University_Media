<?php
/**
 * Created by PhpStorm.
 * User: ryandushane
 * Date: 6/2/15
 * Time: 10:14 PM
 */

namespace App\Http\Controllers;

use App\MediaRetrieval;

class ImageController extends Controller {

    public function index() {

        $media = MediaRetrieval::getImagePageMedia();
        return view('image', ['media' => $media]);

    }

}