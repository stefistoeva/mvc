<?php

include "model/Cookie.php";
include "model/Jar.php";
include "view/ConsoleHelpView.php";
include "view/ConsoleDrawView.php";
include "view/ConsoleDrawViewAdvanced.php";

class ConsoleController
{
    private $jar;

    public function __construct()
    {
        $this->jar = new Jar();
    }

    public function help()
    {
        $view = new ConsoleHelpView();
        $view->render();
    }

    public function checkLuck($params)
    {
        if ($params)
            $chances = explode("/", $params);
        else
            $chances = [1,10];

        $this->fillJar($chances[1]);

        $luck = [];
        for ($i = 0 ; $i < $chances[0]; $i++)
            $luck[] = $this->drawLuck();

        if (count($luck) > 10)
            $view = new ConsoleDrawViewAdvanced(["jar" => $this->jar, "luck" => $luck]);
        else
            $view = new ConsoleDrawView(["jar" => $this->jar, "luck" => $luck]);
        $view->render();
    }

    public function checkLuckBig()
    {
        $this->checkLuck("2/1000");
    }

    protected function fillJar($cookiesCount)
    {
        $this->jar->fill($cookiesCount);
        return $this->jar;
    }

    protected function drawLuck()
    {
        try
        {
            $cookie = $this->jar->draw();
            return $cookie->open();
        }
        catch (Exception $ex)
        {
            return $ex->getMessage();
        }

    }
}
