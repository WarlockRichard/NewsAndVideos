<?php

require_once($_SERVER[DOCUMENT_ROOT]."/model/AbstractFactory.php");
require_once($_SERVER[DOCUMENT_ROOT]."/model/Model.php");
/**
 * AbstractController short summary.
 *
 * AbstractController description.
 *
 * @version 1.0
 * @author Ярослав
 */
abstract class AbstractController
{
	abstract public static function getInstance();
    var $templateSingle;
    var $templateMultiple;
    var $abstractFactory;
    var $template404;
	public function View($id=""){
        if($id == ""){
            $model = $this->abstractFactory->FindAll();
            include($this->templateMultiple);
        }
        elseif ((int)$id >0){
            $model = $this->abstractFactory->Find($id);
            include($this->templateSingle);
        }
        else{
            include($this->template404);
        }
    }


}