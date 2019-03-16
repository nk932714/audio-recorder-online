<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Audio Recorder Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type = "text/javascript"><!-- rename script-->
         <!--
            function getValue(pili) {
               var retVal = prompt("Enter new name : ", "your name here");
                if(retVal == null || retVal == ""){   } 
                else { var text = "<a href='1.php?rename=" + retVal +'&oldName='+ pili +"'>Click to Rename</a>"; document.getElementById(pili).innerHTML = text;
                /*THIS LINE TO CHANGE WHOLE PAGE CONTENT document.write("click to Rename : <a href='1.php?rename=" + retVal +'&oldName='+ pili +"'>rename</a>");*/ }
            }
         //-->
      </script>
  </head>
  <body>
    <h1>Audio Recorder Online</h1>
    <div id="controls">
  	<button id="recordButton" onclick="window.location.href='<?php $ref = $_SERVER['PHP_SELF']; echo $ref; ?>'">Refresh</button>
  	<button id="recordButton" onclick="window.location.href='.'">Main Page</button>
    </div> <br><br>
<?php error_reporting(0);
    /********** Rename coding start ***********/
    if (isset($_GET['rename'])) { 
        $new_name = 'rec/'.$_GET['rename'].'.wav';
        $old_name = 'rec/'.$_GET['oldName'];
        // Checking If File Already Exists 
        if(file_exists($new_name)) 
             {            echo "Error While Renaming $old_name" ;          } 
         else {
                    if(rename( $old_name, $new_name))
                    { echo "Successfully Renamed $old_name to $new_name" ;  } 
                     else
                     {   echo "A File With The Same Name Already Exists" ;  } 
               } 
        } /* Rename coding end */

    /************ delete coding start *******/
    if (isset($_GET['delete'])) { 
     $file = 'rec/'.$_GET["delete"];
             if (!unlink($file)){       echo ("(Error deleting file<b><i>".$_GET["delete"]."</i></b>. <br> This file is already deleted)<br>");    }
                        else    {         echo ("Deleted $file".$_GET["delete"]."<br>");         }
                 } 
                 else {  } /* delete coding end */

                $files = glob("rec/*.wav");
                $files_names = str_replace("rec/","",$files);
                $total = count($files_names);
                if($total==0) die("No files found");
                for ($x = 0; $x < $total; $x++) {
                    $data[] = '<li class="dele">'.$files_names[$x].'&emsp;&emsp;<a href="1.php?delete='.$files_names[$x].'">Delete</a>&emsp;<c id="'.$files_names[$x].'"><input type = "button" value = "Rename" onclick = "getValue(\''.$files_names[$x].'\');" /></c><br><audio controls=""><source src="'.$files[$x].'"></audio></li>';
                }
                $files_name1 = implode("",$data);
                echo "<ol>";
                echo$files_name1;
?>
