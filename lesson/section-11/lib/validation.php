<?php
function is_username($username){
    $partten ="/^[A-Za-z0-9_\.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
        if(!preg_match($partten ,$username))
            return false;
        else
            return true;
}
function is_password($password){
    $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        if(!preg_match($partten ,$password, $matchs)){
            return false;
        }else{
            return true;
        }
}
function form_error($lable_field){
    global $error;
    if(!empty($error[$lable_field])) return "<p>{$error[$lable_field]}</p>";
}
function set_value($lable_field){
    global $$lable_field;
    if(!empty($$lable_field)) return $$lable_field;
}