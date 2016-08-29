<?php
/*
default
{
    state_entry()
    {
    string url = "http://gcse.dyndns.org:8002/";
    vector sim_coord = llGetRegionCorner();
    string x = (string)((integer)(sim_coord.x / 256.0));
    string y = (string)((integer)(sim_coord.y / 256.0));
    url += "map-1-" + x + "-" + y + "-objects.jpg";       
    llSay(0,url);
    osSetDynamicTextureURL("", "image" ,url  , "", 600 ); 
        
    }
}
*/
require_once __DIR__ .'/config.php';

//region_name
$separator = ( isset($_POST['separator']) ) ? urldecode($_POST['separator']) : urldecode($_GET['separator']);

$region = ( isset($_POST['region']) ) ? urldecode($_POST['region']) : urldecode($_GET['region']);

echo "Region=" . $region;
$opensim = new mysqli(OPENSIM_HOSTNAME, OPENSIM_USERNAME, OPENSIM_PASSWORD, OPENSIM_DATABASE);

if ($opensim->connect_error) {
    die('Connect Error (' . $opensim->connect_errno . ') '
            . $opensim->connect_error);
}

//$sql = "SELECT `regionName`, `regionMapTexture`, `locX`, `locY` FROM `regions`";
$sql = "SELECT `regionName`, `regionMapTexture`, `locX`, `locY` FROM `regions` WHERE `regionName` = '{$region}' LIMIT 1";
$result = $opensim->query($sql);

if($region && $separator)
{
	if ($result->num_rows > 0)
	{
		// output data of each row
		while($row = $result->fetch_assoc())
		{
			echo $row["regionName"] . $separator;
			echo $row["regionMapTexture"] . $separator;
			echo ($row["locX"] / 256.0) . $separator;
			echo ($row["locY"] / 256.0) . $separator;
			//echo "Region Name: " . $row["regionName"]. "<br>";
			//echo "Region UUID: " . $row["regionMapTexture"]. "<br>";
			//echo "locX: " . ($row["locX"] / 256.0). "<br>";
			//echo "locY: " . ($row["locY"] / 256.0). "<br>";
			//echo "<img src='http://".OPENSIM_SERVER.":" . OPENSIM_PORT . "/map-1-" . ($row["locX"] / 256.0). "-" . ($row["locY"] / 256.0). "-objects.jpg' width='228' height='228'>";
		}
	}
	else
	{
		echo "0 results";
	}
}
//echo 'Success... ' . $opensim->host_info . "\n";

$opensim->close();