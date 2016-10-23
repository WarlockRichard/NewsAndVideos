<?php session_start();

	  require_once($_SERVER[DOCUMENT_ROOT]."/Router.php");
	  require_once($_SERVER[DOCUMENT_ROOT]."/controller/AbstractController.php");
	  require_once($_SERVER[DOCUMENT_ROOT]."/controller/HomeController.php");
	  require_once($_SERVER[DOCUMENT_ROOT]."/controller/NewsController.php");
	  require_once($_SERVER[DOCUMENT_ROOT]."/controller/VideosController.php");
	  require_once($_SERVER[DOCUMENT_ROOT]."/model/DBGateway.php");

	  DBGateway::connect();

	  // Обработка запроса
	  $request = !empty($_SERVER['REQUEST_URI'])
			? trim($_SERVER['REQUEST_URI'])
			: "";
	  Router::handle($request);

	  DBGateway::close();