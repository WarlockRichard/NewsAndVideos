<?php session_start();

	  require_once($_SERVER[DOCUMENT_ROOT]."/cfg/Core.php");
	  require_once($_SERVER[DOCUMENT_ROOT]."/Router.php");
	  // ����������� � ��
	  DBGateway::connect();

	  // ��������� �������
	  $request = !empty($_SERVER['REQUEST_URI'])
			? trim($_SERVER['REQUEST_URI'])
			: "";
	  Router::handle($request);

	  DBGateway::close();