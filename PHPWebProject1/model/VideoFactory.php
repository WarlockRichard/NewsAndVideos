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
	function Find($id){
		$dbVideo = DBGateway::Get("video", $id);
		if ($dbVideo != NULL){
			$video = new Video(['id' => $dbVideo[0], 'title' => $dbVideo[1], 'description' => $dbVideo[2], 'path' => $dbVideo[3], 'type' => $dbVideo[4]]);
			return $video;
		}
		else{
			return (FALSE);
		}
	}
	function FindAll(){
		$dbVideos = DBGateway::GetMultiple("video");
		if ($dbVideos != NULL){
			$allVideos = array();
			foreach($dbVideos as $video)
				$allVideos[] = new Video(['id' => $video[0], 'title' => $video[1], 'description' => $video[2], 'path' => $video[3], 'type' => $video[4]]);
			return $allVideos;
		}
		else{
			return (FALSE);
		}
	}
	function FindMultiple($quantity){
		$dbVideos = DBGateway::GetMultiple("video", $quantity);
		if ($dbVideos != NULL){
			$multVideos = array();
			foreach($dbVideos as $video)
				$multVideos[] = new Video(['id' => $video[0], 'title' => $video[1], 'description' => $video[2], 'path' => $video[3], 'type' => $video[4]]);
			return $multVideos;
		}
		else{
			return (FALSE);
		}
	}
}