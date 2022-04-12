<?php


namespace App\Controller;


class BaseController
{
    public function render(string $template, array $params = [])
    {
        extract($params);
        ob_start();
        include(__DIR__.'/../Resources/View/'.$template);
        $content = ob_get_contents();
        ob_clean();

        return $content;
    }
}