<?php


namespace ItemDisplay;


class VideoDisplay implements ItemsInterface
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
        $book->setImage('Video Poster');
        return $book;
    }
}
