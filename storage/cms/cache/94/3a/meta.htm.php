<?php 
class Cms5f76c6b9f2c3b182124196_ce70e98eea406d5f1eb8b86453245dd6Class extends Cms\Classes\PartialCode
{
public function onStart($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    $this['cssrandom'] = $randomString;;
}
}
