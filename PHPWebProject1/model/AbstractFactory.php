<?php

require_once($_SERVER[DOCUMENT_ROOT]."/model/Model.php");
/**
 * AbstractFactory short summary.
 *
 * AbstractFactory description.
 *
 * @version 1.0
 * @author Ярослав
 */
abstract class AbstractFactory
{
	abstract public static function getInstance();
	abstract function Find($id);
	abstract function FindAll();
	abstract function FindMultiple($quantity);
}