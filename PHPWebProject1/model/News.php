<?php

/**
 * News short summary.
 *
 * News description.
 *
 * @version 1.0
 * @author Ярослав
 */
class News extends Model
{
    function __construct($id, $title, $preview, $text){
        $this->id=$id;
	    $this->title=$title;
	    $this->preview=$preview;
	    $this->text=$text;
    }
    public $id;
	public $title;
    public $preview;
	public $text;
}