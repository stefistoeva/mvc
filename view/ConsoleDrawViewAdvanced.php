<?php


class ConsoleDrawViewAdvanced
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        echo "ADVANCED VIEW FOR YOU! \n";
        $count = $this->data["jar"]->initialCookiesCount();
        echo "New jar created with $count cookies inside \n";
        echo "we draw the following cookies \n";
        foreach ($this->data["luck"] as $luck)
            echo "$luck" . "\n";
        echo "Cookies left in the jar: " . $this->data["jar"]->cookiesInside();
        echo "\n";
    }
}
