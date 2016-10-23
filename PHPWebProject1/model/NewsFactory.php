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
			$news = new News(['id' => $dbNews[0], 'title' => $dbNews[1], 'preview' => $dbNews[2], 'text' => $dbNews[3]]);
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
				$allNews[] = new News(['id' => $news[0], 'title' => $news[1], 'preview' => $news[2], 'text' => $news[3]]);
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
				$multNews[] = new News(['id' => $news[0], 'title' => $news[1], 'preview' => $news[2], 'text' => $news[3]]);
			return $multNews;
		}
		else{
			return (FALSE);
		}
	}
}