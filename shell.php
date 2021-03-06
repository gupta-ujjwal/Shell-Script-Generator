<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shell Scripting</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="app.js"></script>
    

</head>
<body ng-controller="myCtrl">
    <div class="container-fluid" >
        <span>
            <h1 class="heading">Shell Script Generator</h1>
        </span>
    <div class="row">
        <div class="col-md-2">
            <p>
                Search : 
                <input style="color:black" ng-model="query"/> 
            </p>
        </div>
        <div class="col-md-10">
            <ul class="commands">
                <li class="thumbnail" ng-repeat="command in commands | filter:query">
                    <a href="#" ng-click="al(command)">
                        <span><h3  class="set-sp">{{command.name}}</h3></span>
                        <p class="set-p">{{command.desc}}</p>
                    </a>
                </li>
            </ul>

            <!-- To create Shell Files to do tasks -->
            <form class="form-cm" name="myform" action="generate.php" method="post" >
            
                    <!--Create File-->
                    <p ng-show="showCreateFile">Path : </p> 
                    <input ng-show="showCreateFile" name="fileCrPath" style="color:black; float: left; margin:10px" />
                    <p ng-show="showCreateFile">File Name : </p> 
                    <input  ng-show="showCreateFile" name="fileCr" style="color:black; float: left; margin:10px" />
                    <input type="submit" name="createFile" ng-show="showCreateFile" class="btn btn-primary" value=" Generate Batch File ">

                    <!-- Delete File-->
                    <p ng-show="showDelFile">Path : </p> 
                    <input ng-show="showDelFile" name="fileDelPath" style="color:black; float: left; margin:10px" />
                    <p ng-show="showDelFile">File Name : </p> 
                    <input ng-show="showDelFile" name="fileDel" style="color:black; float: left; margin:10px" />
                    <input type="submit" ng-show="showDelFile" name="deleteFile" class="btn btn-primary" value=" Generate Batch File ">

                    <!--Move File-->
                    <p ng-show="showMoveFile">Current Path : </p> 
                    <input ng-show="showMoveFile" name="fileMovePath" style="color:black; float: left; margin:10px" />
                    <p ng-show="showMoveFile">File Name : </p> 
                    <input ng-show="showMoveFile" name="fileMove" style="color:black; float: left; margin:10px" />
                    <p ng-show="showMoveFile">New Path : </p> 
                    <input ng-show="showMoveFile" name="fileMoveNewPath" style="color:black; float: left; margin:10px" />
                    <input type="submit" ng-show="showMoveFile" name="moveFile" class="btn btn-primary" value=" Generate Batch File ">

                    <!--Rename a File-->
                    <p ng-show="showReFile">Path : </p> 
                    <input ng-show="showReFile" name="fileRePath" style="color:black; float: left; margin:10px" />
                    <p ng-show="showReFile">File Name : </p> 
                    <input  ng-show="showReFile" name="fileRe" style="color:black; float: left; margin:10px" />
                    <p ng-show="showReFile">New Name : </p> 
                    <input  ng-show="showReFile" name="fileReNewName" style="color:black; float: left; margin:10px" />
                    <input type="submit" ng-show="showReFile" name="reFile" class="btn btn-primary" value=" Generate Batch File ">

                    <!--Create a Directory-->
                    <p ng-show="showCrDir">Path : </p> 
                    <input ng-show="showCrDir" name="fileCrDirPath" style="color:black; float: left; margin:10px" />
                    <p ng-show="showCrDir">Directory Name : </p> 
                    <input  ng-show="showCrDir" name="fileCrDir" style="color:black; float: left; margin:10px" />
                    <input type="submit" ng-show="showCrDir" name="crFile" class="btn btn-primary" value=" Generate Batch File ">

                    <!--Rename a Directory-->
                    <p ng-show="showReDir">Path : </p> 
                    <input ng-show="showReDir" name="fileReDirPath" style="color:black; float: left; margin:10px" />
                    <p ng-show="showReDir">Directory Name : </p> 
                    <input  ng-show="showReDir" name="fileReDir" style="color:black; float: left; margin:10px" />
                    <input type="submit" ng-show="showReDir" name="reDirFile" class="btn btn-primary" value=" Generate Batch File ">

            </form>
        </div>
    </div>
</div>
</body>
</html>