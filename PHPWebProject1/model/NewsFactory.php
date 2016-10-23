<?php

require_once($_SERVER[DOCUMENT_ROOT]."/model/AbstractFactory.php");
require_once($_SERVER[DOCUMENT_ROOT]."/model/News.php");
/**
 * NewsFactory short summary.
 *
 * NewsFactory description.
 *
 * @version 1.0
 * @author Ярослав
 */
class NewsFactory extends AbstractFactory
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
	function Find($id){
		$dbNews = DBGateway::Get("news", $id);
		if ($dbNews != NULL){
			$news = new News($dbNews[0], $dbNews[1], $dbNews[2], $dbNews[3]);
			return $news;
		}
		else{
			return (FALSE);
		}
	}
	function FindAll(){
		$dbNews = DBGateway::GetMultiple("news");
		if ($dbNews != NULL){
			$allNews = array();
			foreach($dbNews as $news)
				$allNews[] = new News($news[0], $news[1], $news[2], $news[3]);
			return $allNews;
		}
		else{
			return (FALSE);
		}
	}
	function FindMultiple($quantity){
		$dbNews = DBGateway::GetMultiple("news", $quantity);
		if ($dbNews != NULL){
			$multNews = array();
			foreach($dbNews as $news)
				$multNews[] = new News($news[0], $news[1], $news[2], $news[3]);
			return $multNews;
		}
		else{
			return (FALSE);
		}
	}
}