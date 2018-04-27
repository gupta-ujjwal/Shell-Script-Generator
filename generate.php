<?php
    echo "<body style='background-color:rgb(73, 73, 73)'>";
// $curr_loc=@$_POST['curr_loc'];



$fileCr=@$_POST['fileCr'];
$fileCrPath=@$_POST['fileCrPath'];

$fileDel=@$_POST['fileDel'];
$fileDelPath=@$_POST['fileDelPath'];

$fileMove=@$_POST['fileMove'];
$fileMovePath=@$_POST['fileMovePath'];
$fileMoveNewPath=@$_POST['fileMoveNewPath'];

$fileRe=@$_POST['fileRe'];
$fileRePath=@$_POST['fileRePath'];
$fileReNewName=@$_POST['fileReNewName'];

$fileCrDir=@$_POST['fileCrDir'];
$fileCrDirPath=@$_POST['fileCrDirPath'];

$fileReDir=@$_POST['fileReDir'];
$fileReDirPath=@$_POST['fileReDirPath'];
$fileReDirNewName=@$_POST['fileReDirNewName'];

$filename="mydata.bat";



if(isset($_POST['createFile']))
{
    $f_data='
fsutil file createnew '.$fileCrPath.''.$fileCr.' 0
';
}

else if(isset($_POST['deleteFile']))
{
    $f_data='
del '.$fileDelPath.''.$fileDel.'
';
}

else if(isset($_POST['moveFile']))
{
    $f_data='
MOVE '.$fileMovePath.''.$fileMove.' '.$fileMoveNewPath.'
';
}

else if(isset($_POST['reFile']))
{
    $f_data='
rename '.$fileRePath.''.$fileRe.' '.$fileReNewName.'
';
}

else if(isset($_POST['crFile']))
{
    $f_data='
mkdir '.$fileCrDirPath.''.$fileCrDir.'
';
}

else if(isset($_POST['reDirFile']))
{
    $f_data='
rmdir '.$fileReDirPath.''.$fileReDir.'
';
}

else{
    echo 'BIEEE';
}
echo '<span style="color:rgb(110,190,236); font-size:30px; text-align:center;">Your Bat file has been created'.$filename.' <br>
<a href="'.$filename.'">Click here to Download Your Bat File  </span>';

$file = fopen($filename, "w");
fwrite($file,$f_data);
fclose($file);
?>