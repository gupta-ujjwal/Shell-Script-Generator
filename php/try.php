<html>
<head>
<title> My Form </title>
</head>
<body>
<form name="myform" action="create.php" method="post">
<!-- COPY FILE -->
<h1>To copy files from one Directory to Another</h1>
<p>
The File URL(ex:-"  Desktop\ac.txt ") :  <input type="text" name="curr_loc"><br>
<br>
Location You want to copy the File      :  <input type="text" name="dest_loc"><br>
<br>
<input type="submit" name="copy_file" value=" Create "><br>


<!-- MOVE FILE -->
<h1>To move files from one Directory to Another</h1>
<p>
The File URL(ex:-"  Desktop\ac.txt ") :  <input type="text" name="curr_loc"><br>
<br>
Location You want to copy the File      :  <input type="text" name="dest_loc"><br>
<br>
<input type="submit" name="move_file" value=" Create "><br>


<!-- RENAME FILE -->
<h1>To Remane a file/folder</h1>
<p>
The File URL(ex:-" Desktop\ac.txt ") :  <input type="text" name="curr_loc"><br>
<br>
New Name you want to give to your file(ex:- abc :  <input type="text" name="dest_loc"><br>
<br>
<input type="submit" name="rename" value=" Create "><br>


<!-- Create A NEW DIRECTORY -->
<h1>To Create a new Directory</h1>
<p>
The Directory name which u want to create(ex:-" Directory_name ") :  <input type="text" name="curr_loc"><br>
<br>

<input type="submit" name="make" value=" Create "><br>


<!-- Create A NEW File -->
<h1>To Create a new Directory</h1>
<p>
The File name which u want to create(ex:-" ac.txt or ac.doc ") :  <input type="text" name="curr_loc"><br>
<br>

<input type="submit" name="to" value=" Create "><br>


<!-- DELETE DIRECTORY -->
<h1>To Delete a file/folder</h1>
<p>
The File URL(ex:-" Desktop\Directory_name ") :  <input type="text" name="curr_loc"><br>
<br>

<input type="submit" name="delete" value=" Create "><br>



<!-- COMBINE 2 FILE -->
<h1>To Combine 2 file/folder</h1>
<p>
The File URL(ex:-" Desktop\ac.txt ") :  <input type="text" name="curr_loc"><br>
<br>
New Name you want to give to your file(ex:- abc :  <input type="text" name="dest_loc"><br>
<br>
<input type="submit" name="combine" value=" Create "><br>

</form>
</body>
</html>