<?php

namespace App\CustomClasses;

class DatabaseMigration
{
    public static function flags()
    {
        $flag_arr = array(
            "1"=>"PHAT HIEN LOI API1",
            "2"=>"PHAT HIEN LOI API2",
            "3"=>"PHAT HIEN LOI API3",
            "4"=>"PHAT HIEN LOI API4",
            "5"=>"PHAT HIEN LOI API5",
            "6"=>"PHAT HIEN LOI API6",
            "7"=>"PHAT HIEN LOI API7",
            "8"=>"PHAT HIEN LOI API8",
            "9"=>"PHAT HIEN LOI API9",
            "10"=>"PHAT HIEN LOI API10",
        );

        return $flag_arr;
    }
}
