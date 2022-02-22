<?php

function get_alphanum_id($length)
{
    $id = "";
    $chars = implode('', range('a', 'z')) . implode('', range('A', 'Z')) . implode('', range('0', '9'));
    
    while (strlen($id) < $length)
    {
        $id .= str_shuffle($chars)[rand(0, strlen($chars)-1)];
    }
    
    return $id;
}

?>
