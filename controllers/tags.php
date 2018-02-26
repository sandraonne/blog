<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 15.02.2018
 * Time: 14:35
 */

namespace App;


class tags extends Controller
{
    function index() {
        $this->tags = get_all("SELECT tag_name, COUNT(post_id) AS count FROM post_tags NATURAL JOIN tag GROUP BY tag_id");
    }

    function view(){
       /** $_tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag");
        foreach ($_tags as $tag){
            $this->tags[$tag['post_id']][] = $tag['tag_name'];
        }*/
       $tag_name = $this->params[0];
       $this->posts = get_all("SELECT * FROM post_tags NATURAL JOIN tag NATURAL JOIN post WHERE tag_name = '$tag_name'");
    }
}