<?php
/**
 * Created by PhpStorm.
 * User: Sandra
 * Date: 15.02.2018
 * Time: 14:35
 */

namespace App;


class tags
{
    function index() {
        $this->tags = get_all("SELECT tag_name, COUNT(post_id) AS count FROM post_tags NATURAL JOIN tag GROUP BY tag_id");
    }
}