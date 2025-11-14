<?php
namespace App\Models;
class Post{
    public static function data() {
    return [
        ["name" => "Special Sambal", "branch" => 100],
        ["name" => "Sate Pak Pong", "branch" => 24],
        ["name" => "Gudeg Sagan", "branch" => 18],
        ["name" => "Sushi Cerita", "branch" => 12],
         ];
    }

    public static function count(){
        return count(self::data());
    }

}