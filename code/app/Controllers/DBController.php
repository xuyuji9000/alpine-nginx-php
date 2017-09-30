<?php
namespace App\Controllers;

use App\Models\User;

class DBController extends HomeController
{
    public function index($request, $response, $args)
    {
        $user = User::find(1);
        $response->getBody()->write($user->toArray()['name']);
        return $response;
    }
}
