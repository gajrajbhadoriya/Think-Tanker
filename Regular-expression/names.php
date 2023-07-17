<?php
$givenName = "ronak singh rajput";

if(preg_match("/^([a-zA-Z' ]+)$/",$givenName)){
    echo 'Valid name given.';
}else{
    echo 'Invalid name given.';
}