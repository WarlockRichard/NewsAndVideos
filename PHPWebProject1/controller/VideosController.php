<?php

require_once($_SERVER[DOCUMENT_ROOT]."/controller/AbstractController.php");
require_once($_SERVER[DOCUMENT_ROOT]."/model/VideoFactory.php");
require_once($_SERVER[DOCUMENT_ROOT]."/model/Video.php");
/**
 * VideosController short summary.
 *
 * VideosController description.
 *
 * @version 1.0
 * @author Ярослав
 */
class VideosController extends AbstractController{
    private static $instance;
	private function __construct(){
        $this->templateSingle=$_SERVER[DOCUMENT_ROOT]."/view/videos_id.php";
        $this->templateMultiple=$_SERVER[DOCUMENT_ROOT]."/view/videos.php";
        $this->abstractFactory=VideoFactory::getInstance();
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