<?php


class ConsoleHelpView
{
    public function render()
    {
        echo "Help: \n";
        echo "Example: php console.php checkLuck 2/30 \n";
        echo "draw 2 lucks out of 30 options \n";
    }
}