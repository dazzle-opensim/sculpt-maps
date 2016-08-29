<?php
// opensim login uri WITHOUT HTTP/HTTPS or port
if(!defined('OPENSIM_SERVER'))
{
	define('OPENSIM_SERVER', 'localhost');
}

// OpenSim Port normally 8002
if(!defined('OPENSIM_PORT'))
{
	define('OPENSIM_PORT', '8002');
}

// OpenSim Hostname normally localhost or ip to robust
if(!defined('OPENSIM_HOSTNAME'))
{
	define('OPENSIM_HOSTNAME', 'localhost');
}
// OpenSim username
if(!defined('OPENSIM_USERNAME'))
{
	define('OPENSIM_USERNAME', 'root');
}
// OpenSim database name
if(!defined('OPENSIM_DATABASE'))
{
	define('OPENSIM_DATABASE', 'opensim');
}
// OpenSim database password
if(!defined('OPENSIM_PASSWORD'))
{
	define('OPENSIM_PASSWORD', 'mysql');
}

// Grid Hostname normally localhost
if(!defined('GRID_HOSTNAME'))
{
	define('GRID_HOSTNAME', 'localhost');
}
// Grid username
if(!defined('GRID_USERNAME'))
{
	define('GRID_USERNAME', 'root');
}
// Grid database name
if(!defined('GRID_DATABASE'))
{
	define('GRID_DATABASE', 'grid');
}
// Grid database password
if(!defined('GRID_PASSWORD'))
{
	define('GRID_PASSWORD', 'mysql');
}