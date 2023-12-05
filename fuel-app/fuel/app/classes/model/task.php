<?php

namespace Model;

class Task extends \Model
{
    public static function get_list()
    {
        $query = \DB::select()->from('tasks');
        $result = $query->execute();
        return $result->as_array();
    }
}