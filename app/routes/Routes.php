<?php
namespace app\routes;

class Routes
{
    public static function get()
    {
        return [
            "get" => [
                "/" => "HomeController@index",
                "/register" => "RegisterBookController@index",
                "/borrow" => "RegisterBorrowController@index",
                "/book/[0-9]+" => "BookController@index",
                "/books" => "BookController@getAll",
                "/borrows" => "BorrowController@getAll"
            ],
            "post" => [
                "/register" => "RegisterBookController@insert",
                "/borrow" => "BorrowController@insert"
            ]
        ];
    }
}