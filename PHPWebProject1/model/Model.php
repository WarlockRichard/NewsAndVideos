<?php

/**
 * Model short summary.
 *
 * Model description.
 *
 * @version 1.0
 * @author Ярослав
 */
abstract class Model
{
    function __construct($data = false){
        if($data){
            foreach($data as $key => $value){
                $this->$key = $value;
            }
        }
    }
	public $id;
}