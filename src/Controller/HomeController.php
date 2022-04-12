<?php


namespace App\Controller;


class HomeController extends BaseController
{
    public function __invoke()
    {
        $hello = 'Is home page';
        return $this->render('home.php', [
            'hello' => $hello
        ]);
    }
}