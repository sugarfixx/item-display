
<?php


namespace ItemDisplay;


class BookDisplay implements ItemsInterface
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function makeDisplay()
    {
        // TODO: Implement makeDisplay() method.
    }
}
