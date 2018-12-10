<?php
if($action=='server_start')
{
	//rename(LOG_FILE_LOCATION, "$ROOT/logs/$NAME.".date('Y-m-d-H-i-s').'.log');
	$res = $worker->server_start($server);
	// $remoteServer->request($res, 'server_start', Array());
	echo $res['status'].$res['message'];
}
elseif($action=='server_stop')
{
	$res = $worker->server_stop($server);
	// $remoteServer->request($res, 'server_stop', Array());
	echo $res['status'].$res['message'];
}
elseif($action=='server_kill')
{
	$res = $worker->server_kill($server);
	// $remoteServer->request($res, 'server_kill', Array());
	echo $res['status'].$res['message'];
}
elseif($action=='server_status')
{
	$res = $worker->server_status($server);
	// $remoteServer->request($res, 'server_status', Array());
	echo $res['status'].$res['message'];
}
elseif($action=='server_control')
{
	// Create the output
	$title = 'Server Control Panel';
	$menu = Array(
		Array(
			Array(
				'class'    => 'tdlink',
				'action'   => "window.location.href = '$url[prefix]&amp;action=redirect_server_status';",
				'tdparams' => '',
				'icon'     => 'img/status.png',
				'caption'  => 'Server Status View'
			),
			Array(
				'class'    => 'tdlink',
				'action'   => "window.location.href = '$url[prefix]&amp;action=log_view';",
				'tdparams' => '',
				'icon'     => 'img/logs.png',
				'caption'  => 'Current Logbook'
			),
			Array(
				'class'    => 'tdlink',
				'action'   => "window.location.href = '$url[prefix]&amp;action=oldlog_list';",
				'tdparams' => '',
				'icon'     => 'img/archive.png',
				'caption'  => 'Older Logbooks'
			)
		),
		Array(
			Array(
				'class'    => 'tdlink',
				'action'   => "window.location.href = '$url[prefix]&amp;action=config_edit';",
				'tdparams' => '',
				'icon'     => 'img/configuration.png',
				'caption'  => 'Configuration'
			),
			Array(
				'class'    => 'tdlink',
				'action'   => "window.location.href = '$url[prefix]&amp;action=auth_list';",
				'tdparams' => '',
				'icon'     => 'img/authorization.png',
				'caption'  => 'Authorizations'
			),
			Array(
				'class'    => 'tdlink',
				'action'   => "window.location.href = '$url[prefix]&amp;action=motd_edit';",
				'tdparams' => '',
				'icon'     => 'img/motd.png',
				'caption'  => 'Message of the Day'
			),
			Array(
				'class'    => 'tdlink',
				'action'   => "window.location.href = '$url[prefix]&amp;action=rules_edit';",
				'tdparams' => '',
				'icon'     => 'img/rules.png',
				'caption'  => 'Rules'
			)
		),
		Array(
			Array(
				'class'    => 'tdlink',
				'action'   => 'startServer();',
				'tdparams' => 'style="border-top: 1px solid #000000;"',
				'icon'     => 'img/start.png',
				'caption'  => 'Start Server'
			),
			Array(
				'class'    => 'tdlink',
				'action'   => 'printServerStatus2();',
				'tdparams' => 'style="border-top: 1px solid #000000;"',
				'icon'     => 'img/refresh.png',
				'caption'  => 'Refresh Server Status'
			),
			Array(
				'class'    => 'tdlink',
				'action'   => 'stopServer();',
				'tdparams' => 'style="border-top: 1px solid #000000;"',
				'icon'     => 'img/stop.png',
				'caption'  => 'Stop Server'
			),
			Array(
				'class'    => 'tdlink',
				'action'   => 'killServer();',
				'tdparams' => 'style="border-top: 1px solid #000000;"',
				'icon'     => 'img/kill.png',
				'caption'  => 'Kill Server (do not use this!)'
			)
		)
	);
	$content = '<div id="msgBox"></div>';
	$parentText = 'back to serverlist';
	$parentLink = 'mngmnt_list_servers';
	sendOutput();
}
?>