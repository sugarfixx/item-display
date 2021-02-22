# Item-display

An item display factory to produce different display depending on item type.
The following types: Book, Video, Audio.


## Install

If you are starting a blank project from a clean composer.json
```angular2html

{
   "require":{
      "sugarfixx/item-display":"0.1"
   },
   "repositories":[
      {
         "type":"vcs",
         "url":"git@github.com:sugarfixx/item-display.git"
      }
   ]
}
```


## Assignment

Using the factory method pattern, create an Item Display factory processing books, video and audio items and outputting them as uniform Items. A fallback to Default item should be included.

The factory has defined both Item Creator and Items Interface.  
All creators are extending the Item creator, all Item Displays implement Items Interface and return an instance of Item.
  
