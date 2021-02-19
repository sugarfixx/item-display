<?php


namespace ItemDisplay;


class AudioDisplay implements ItemsInterface
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function makeDisplay() : Item
    {
        $book = new Item();
        $book->setTitle($this->title);
        $book->setImage('Album Cover');
        return $book;
    }
}
