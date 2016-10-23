<?php

require_once($_SERVER[DOCUMENT_ROOT]."/model/AbstractFactory.php");
require_once($_SERVER[DOCUMENT_ROOT]."/model/Video.php");
/**
 * VideoFactory short summary.
 *
 * VideoFactory description.
 *
 * @version 1.0
 * @author Ярослав
 */
class VideoFactory extends AbstractFactory
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
	function Get($id){
		$dbVideo = DBGateway::Get("video", $id);
		if ($dbVideo != NULL){
			$video = new Video($dbVideo[0], $dbVideo[1], $dbVideo[2], $dbVideo[3], $dbVideo[4]);
			return $video;
		}
		else{
			return (FALSE);
		}
	}
	function GetAll(){
		$dbVideos = DBGateway::GetMultiple("video");
		if ($dbVideos != NULL){
			$allVideos = array();
			foreach($dbVideos as $video)
				$allVideos[] = new Video($video[0], $video[1], $video[2], $video[3], $video[4]);
			return $allVideos;
		}
		else{
			return (FALSE);
		}
	}
	function GetMultiple($quantity){
		$dbVideos = DBGateway::GetMultiple("video", $quantity);
		if ($dbVideos != NULL){
			$multVideos = array();
			foreach($dbVideos as $video)
				$multVideos[] = new Video($video[0], $video[1], $video[2], $video[3], $video[4]);
			return $multVideos;
		}
		else{
			return (FALSE);
		}
	}
}