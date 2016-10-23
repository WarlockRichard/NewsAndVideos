<?php

require_once($_SERVER[DOCUMENT_ROOT]."/controller/AbstractController.php");
require_once($_SERVER[DOCUMENT_ROOT]."/model/NewsFactory.php");
require_once($_SERVER[DOCUMENT_ROOT]."/model/News.php");
require_once($_SERVER[DOCUMENT_ROOT]."/model/VideoFactory.php");
require_once($_SERVER[DOCUMENT_ROOT]."/model/Video.php");
/**
 * HomeController short summary.
 *
 * HomeController description.
 *
 * @version 1.0
 * @author Ярослав
 */
class HomeController extends AbstractController
{
    private static $instance;
	private function __construct(){}
	private function __clone(){}
	private function __wakeup(){}
    public static function getInstance() {
		if ( empty(self::$instance) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	public function View(){
		$newsFactory = NewsFactory::getInstance();
        $news = $newsFactory->FindMultiple(3);
		$videoFactory = VideoFactory::getInstance();
        $videos = $videoFactory->FindMultiple(3);
        include($_SERVER[DOCUMENT_ROOT]."/view/home.php");
	}
}