var app = angular.module('myApp',[]);

app.controller("myCtrl" ,function ($scope) {
      $scope.commands = [
        {
          "name":"List Files",
          "desc":"List all your files in the current directory .",
        }, 
        {
          "name":"Create File",
          "desc":"Create a new text file",
          "extra":""
        },
        {
            "name":"Delete File",
            "desc":"Delete a file "
        },
        {
            "name":"Move File",
            "desc":"Move a file from one location to another location"
        },
        {
            "name":"Rename File",
            "desc":"Rename an already existing file"
        },
        {
            "name":"Create Directory",
            "desc":"Create a new Folder/Directory "
        },
        {
            "name":"Rename Directory",
            "desc":"Rename an already existing directory"
        }
      ];
        $scope.al = function(item) {
          if(item.name==($scope.commands[0].name)) {
                del();
                alert("Add function");
          }
          else if(item.name==($scope.commands[1].name)) {
              del();
              $scope.showPath=true;
              $scope.showFileName=true;
              $scope.showButton=true;
          }
          else if(item.name==($scope.commands[2].name)) {
              del();
              $scope.showPath=true;
              $scope.showFileName=true;
              $scope.showButton=true;
          }
          else if(item.name==($scope.commands[3].name)) {
              del();
              $scope.showPath=true;
              $scope.showFileName=true;
              $scope.showNewPath=true;
              $scope.showButton=true;
          }
          else if(item.name==($scope.commands[4].name)) {
            del();
            $scope.showPath=true;
            $scope.showFileName=true;
            $scope.showNewFileName=true;
            $scope.showButton=true;
          }
          else if(item.name==($scope.commands[5].name)) {
            del();
            $scope.showDirLocate=true;
            $scope.showDirName=true;
            $scope.showButton=true;
          }
          else  {
            del();
            $scope.showDirLocate=true;
            $scope.showDirName=true;
            $scope.showNewDirName=true;
            $scope.showButton=true;  
          }
      }
     function del() {
        $scope.showPath=false;
        $scope.showFileName=false;
        $scope.showNewFileName=false;
        $scope.showDirLocate=false;
        $scope.showNewPath=false;
        $scope.showDirName=false;
        $scope.showNewDirName=false;
        $scope.showButton=false;  
      }
    });



