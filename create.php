<?php

// $curr_loc=@$_POST['curr_loc'];

$fileCr=@$_POST['fileCr'];
$fileCrPath=@$_POST['fileCrPath'];

$fileDel=@$_POST['fileDel'];
$fileDelPath=@$_POST['fileDelPath'];

$fileMove=@$_POST['fileMove'];
$fileMovePath=@$_POST['fileMovePath'];
$fileMoveNewPath=@$_POST['fileMoveNewPath'];

$fileCrDir=@$_POST['fileCrDir'];
$fileCrDirPath=@$_POST['fileCrDirPath'];

$fileRe=@$_POST['fileRe'];
$fileRePath=@$_POST['fileRePath'];
$fileReNewName=@$_POST['fileReNewName'];

$fileReDir=@$_POST['fileReDir'];
$fileReDirPath=@$_POST['fileReDirPath'];
$fileReDirNewName=@$_POST['fileReDirNewName'];

$filename="mydata.sh";

if(isset($_POST['createFile']))
{
    $f_data='
touch '.$fileCr.'
';
}

else if(isset($_POST['deleteFile']))
{
    $f_data='
mkdir '.$fileDel.'
';
}

else if(isset($_POST['moveFile']))
{
    $f_data='
mv '.$fileMove.' '.$fileMoveNewPath.'/'.$fileMove.'
';
}

else if(isset($_POST['reFile']))
{
    $f_data='
mv '.$fileRe.' '.$fileReNewName.'
';
}


else if(isset($_POST['crDir']))
{
    $f_data='
mkdir '.$fileCrDirPath.'/'.$fileCrDir.'
';
}

else if(isset($_POST['reDir']))
{
    $f_data='
rmdir '.$fileReDir.' '.$fileReDirNewName.'
';
}


else{
    echo 'BIEEE';
}

echo 'Your Bat file has been created'.$filename.' <br>
<a href="'.$filename.'">Click here to Download Your Bat File </a> ';
$file = fopen($filename, "w");
fwrite($file,$f_data);
fclose($file);

?>