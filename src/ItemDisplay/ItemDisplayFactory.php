<?php


namespace ItemDisplay;


class ItemDisplayFactory
{
    public function makeDisplay($type, $title)
    {
        switch (strtolower($type)) {
            case "book" :
                $creator = 'a';
                break;
            case "video" :
                $creator = 'b';
                break;
            case "audio" :
                $creator = 'c';
        }
        return $this->client($creator);
    }

    public function client(ItemCreator $creator)
    {
        return $creator->makeDisplay();
    }
}
