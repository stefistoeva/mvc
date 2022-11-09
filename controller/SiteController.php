<?php
include "view/WebView.php";
include "model/Cookie.php";
include "model/Jar.php";

class SiteController
{
    private $jar;

    public function index()
    {
        $view = new WebView();
        $view->render();
    }

    public function draw()
    {
        $trys = $_POST["trys"];
        $options = $_POST["options"];

        $jar = new Jar();
        $jar->fill($options);

        $lucks = [];
        for ($i = 0 ; $i < $trys; $i++) {
            $lucks[] = $jar->draw()->open();
        }

        $params = ["jar" => $jar, "lucks" => $lucks];
        $view = new WebView($params);
        $view->render();
    }
}
