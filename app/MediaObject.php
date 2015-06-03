<?php
/**
 * Created by PhpStorm.
 * User: ryandushane
 * Date: 6/2/15
 * Time: 8:23 PM
 */

namespace App;


use Illuminate\Support\Facades\DB;

class MediaObject {

    public $id;
    public $user_id;
    public $username;
    public $title;
    public $embed;
    public $type;

    function __construct($id, $user_id, $title, $embed, $type)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->username = DB::select('SELECT name FROM users WHERE id='.$user_id)[0]->name;
        $this->title = $title;
        $this->embed = $embed;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }


    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getEmbed()
    {
        return $this->embed;
    }

    /**
     * @param mixed $embed
     */
    public function setEmbed($embed)
    {
        $this->embed = $embed;
    }



}