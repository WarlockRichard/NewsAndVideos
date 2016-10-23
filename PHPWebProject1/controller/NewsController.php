<?php

require_once($_SERVER[DOCUMENT_ROOT]."/controller/AbstractController.php");
require_once($_SERVER[DOCUMENT_ROOT]."/model/NewsFactory.php");
require_once($_SERVER[DOCUMENT_ROOT]."/model/News.php");
/**
 * NewsController short summary.
 *
 * NewsController description.
 *
 * @version 1.0
 * @author Ярослав
 */
class NewsController extends AbstractController{
    private static $instance;
	private function __construct(){
        $this->templateSingle=$_SERVER[DOCUMENT_ROOT]."/view/news_id.php";
        $this->templateMultiple=$_SERVER[DOCUMENT_ROOT]."/view/news.php";
        $this->abstractFactory=NewsFactory::getInstance();
        $this->template404=$_SERVER[DOCUMENT_ROOT]."/view/404.php";
    }
	private function __clone(){}
	private function __wakeup(){}
    public static function getInstance() {
		if ( empty(self::$instance) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}
}