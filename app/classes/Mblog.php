<?php

namespace app\classes;


class Mblog
{
    public function prepareBlog($page_id)
    {
        $sql = "SELECT * FROM blog WHERE page_id='{$page_id}'";
        $result = Db::getInstance()->read($sql);
        return $result;
    }

}