<?php


class ConsoleDrawView
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        $count = $this->data["jar"]->initialCookiesCount();
        echo "New jar created with $count cookies inside \n";
        echo "we draw the following cookies \n";
        foreach ($this->data["luck"] as $luck)
            echo "$luck" . "\n";
        echo "Cookies left in the jar: " . $this->data["jar"]->cookiesInside();
        echo "\n";
    }
}
