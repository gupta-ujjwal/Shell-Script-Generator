<?php

$curr_loc = @$_POST['curr_loc'];
$dest_loc= @$_POST['dest_loc'];
$filename = "mydata.sh";

if(isset($_POST['copy_file']))//for copying file //for windows
{
$f_data= '
xcopy '.$curr_loc.' '.$dest_loc.'
';
}


else if(isset($_POST['move_file']))//for moving file
{
$f_data='
mv '.$curr_loc.' '.$dest_loc.''
}

else if(isset($_POST['rename']))//for renaming
{
$f_data='
mv '.$curr_loc.' '.$curr_loc.''.$dest_loc.'
';
}

else if(isset($_POST['make']))//for creating new directory
{
$f_data='
mkdir '.$curr_loc.'
';
}

else if(isset($_POST['to']))//for creating new file
{
$f_data='
touch '.$curr_loc.'
';
}


else if(isset($_POST['delete']))//for deleting directory
{
$f_data='
rmdir '.$curr_loc.'
';
}



else if()
{

}
else
{
    echo 'BIEEEE';
}
echo 'Your Bat file has been created'.$filename.' <br>
<a href="'.$filename.'">Click here to Download Your Bat File </a> ';
$file = fopen($filename, "w");
fwrite($file,$f_data);
fclose($file);
?>