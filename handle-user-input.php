<?php
  $digitPushed = $_POST['Digits'];
?>
<Response>
  <?php
  switch ($digitPushed) {
    case "1":
  ?>
    <Play>https://dl.dropboxusercontent.com/u/44041444/TakingBackSunday.mp3</Play>;
  <?php
      break;
    case "2":
  ?>
    <Play>https://dl.dropboxusercontent.com/u/44041444/BrandNew.mp3</Play>;
  <?php
      break;    
    case "3":
  ?>
    <Play>https://dl.dropboxusercontent.com/u/44041444/SavesTheDay.mp3</Play>;
  <?php
      break;
    case "4":
  ?>
    <Play>https://dl.dropboxusercontent.com/u/44041444/SayAnything.mp3</Play>
  <?php
      break;
    default:
  ?>
    <Redirect>incoming-call.xml</Redirect>
  <?php
      break;
  }
  ?>
  <Pause length="8"/>
</Response>
