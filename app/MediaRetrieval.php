<?php
/**
 * Created by PhpStorm.
 * User: ryandushane
 * Date: 6/2/15
 * Time: 7:58 PM
 */

namespace App;


use Illuminate\Support\Facades\DB;
use App\Media;

use Auth;

class MediaRetrieval {

    public static function getHomePageMedia() {

        $media = array();

        $results = DB::select('SELECT * FROM media');

        $resultsArray = json_decode(json_encode($results), true);

        for($i = 0; $i < count($resultsArray); $i++) {

            $resultsRow = $resultsArray[$i];

            $media_object = new Media($resultsRow['id'], $resultsRow['user_id'], $resultsRow['title'], $resultsRow['embed'], $resultsRow['type']);

            array_push($media, $media_object);
        }

        return $media;

    }

    public static function getImagePageMedia() {

        $media = array();

        $results = DB::select('SELECT * FROM media WHERE type=\'image\'');

        $resultsArray = json_decode(json_encode($results), true);

        for($i = 0; $i < count($resultsArray); $i++) {

            $resultsRow = $resultsArray[$i];

            $media_object = new Media($resultsRow['id'], $resultsRow['user_id'], $resultsRow['title'], $resultsRow['embed'], $resultsRow['type']);

            array_push($media, $media_object);
        }

        return $media;

    }

    public static function getVideoPageMedia() {

        $media = array();

        $results = DB::select('SELECT * FROM media WHERE type=\'video\'');

        $resultsArray = json_decode(json_encode($results), true);

        for($i = 0; $i < count($resultsArray); $i++) {

            $resultsRow = $resultsArray[$i];

            $media_object = new Media($resultsRow['id'], $resultsRow['user_id'], $resultsRow['title'], $resultsRow['embed'], $resultsRow['type']);

            array_push($media, $media_object);
        }

        return $media;

    }

}