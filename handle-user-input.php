<?php
header(‘Content-type: text/xml’);
echo ‘<?xml version=”1.0″ encoding=”UTF-8″?>';
echo ‘<Response>';
//Create variable with user input.
$user_pushed = (int) $_REQUEST[‘Digits’];
if ($user_pushed == 1)
{
echo ‘<Play>https://dl.dropboxusercontent.com/u/44041444/1.%20You%20Know%20How%20I%20Do.mp3</Play>';
}
elseif ($user_pushed == 2)
{
echo ‘<Play>https://dl.dropboxusercontent.com/u/44041444/Brand%20New%20-%20Jude%20Law%20and%20A%20Semester%20Abroad.mp3</Play>';
}
elseif ($user_pushed ==3)
{
echo ‘<Play>https://dl.dropboxusercontent.com/u/44041444/Saves%20The%20Day%20-%20You%20Vandal.mp3</Play>';
}
elseif ($user_pushed ==4)
{
echo ‘<Play>https://dl.dropboxusercontent.com/u/44041444/SAY%20ANYTHING%20-%20Alive%20With%20The%20Glory%20Of%20Love.mp3</Play>';
}
else
{
echo “<Say>Sorry, I can’t do that yet.</Say>”;
echo ‘<Redirect>handle-incoming-call.php</Redirect>';
}
echo ‘</Response>';
?>
