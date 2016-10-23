<?php

/**
 * Video short summary.
 *
 * Video description.
 *
 * @version 1.0
 * @author Ярослав
 */
class Video extends Model
{
    function __construct($id, $title,$description, $path, $type){
        $this->id=$id;
	    $this->title=$title;
	    $this->description=$description;
	    $this->path=$path;
	    $this->type=$type;
    }
    public $id;
	public $title;
    public $description;
	public $path;
    public $type;
}