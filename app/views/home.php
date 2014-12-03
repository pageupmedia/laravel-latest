<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Resturent</title>
    <link href="<?php echo URL::to('/') ;?>/frontend/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="admin-header">
	<div class="admin-nav">
	    <ul>
            <li><a href="#">Resturent List</a></li>
            <li><a href="#">Resturent Description</a></li>
        </ul>
    
    </div>
</div>

<div class="clear"></div>


	<div class="findjobpanel">

		<p style="font-size:20px; color:#303030; border-bottom:1px solid #ddd; padding-bottom:5px; margin-bottom:20px;"><strong>Resturent List</strong><Span style="float:right"><small>0 Resturent available</small></span></p>
	
		<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td align="center"> No record found</td>

		</tr>
		
		</table>
	
	</div>


<?php # Initialize composer autoloader
include('api/ordrin/api.php');
$API_KEY="PUBLIC LF-8bzKUkPErOnPiBjb8f46AY7GNARtWTUdxpEP9a4A
SECRET2QQCrE22uMLqSkUYHqq6VSKm-BWMSSWHzjsyqZ9VBtE";
$server="https://r-test.ordr.in";
use Ordrin;
//$ordrin_api = new Ordrin::APIs($API_KEY, $server);
$ordrin_api = new Ordrin\APIs($API_KEY, Ordrin\APIs::TEST);
$ordrin_api->delivery_list(array("datetime" => "ASAP",
                                                  "addr" => "900 Broadway",
                                                  "city" => "New York",
                                                  "zip" => "10003"));

?>	
	


</body>
</html>