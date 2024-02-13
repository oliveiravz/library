<?php
namespace app\routes;
class Routes
{
    public static function get() {
        return [
                "get" => [
                    "/" => "HomeController@index",
                    "/register" => "RegisterBookController@index",
                    "/borrow" => "BorrowController@index",
                    "/book/[0-9]+" => "BookController@index",
                    "/books" => "BookController@getAll"
                ],
                "post" => [
                    "/register" => "RegisterBookController@insert",
                ]
            ];
    }
}