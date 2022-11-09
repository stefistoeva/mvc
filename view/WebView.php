<?php


class WebView
{
    private $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function render()
    {
        $DATA = $this->data;

        include "view/indexView.php";
    }
}
