<?php
/**
 * Created by PhpStorm.
 * User: serjay
 * Date: 14.05.18
 * Time: 18:21
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function home() {
        return new Response("Home page");
    }
}