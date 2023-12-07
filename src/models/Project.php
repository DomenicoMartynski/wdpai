<?php

class Project
{
    private $title;
    private $description;
    private $image;

    public function __construct($title,$description,$image){
        $this->title=$title;
        $this->description=$description;
        $this->image=$image;    
    }
    public function getTitle(){
        return $this->title;
    }
    public function setTitle(string $title):string{
        $this->title=$title;
    }
    
    public function getDescription():string{
        return $this->title;
    }
        
    public function setDescription(string $description){
        $this->description=$description;
    }
    
    public function getImage():string{
        return $this->image;
    }

    public function setImage(string $image){
        $this->image=$image;
    }

}
