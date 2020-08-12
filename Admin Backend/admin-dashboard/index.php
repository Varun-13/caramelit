<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
      
        <title>Caramel</title>
      
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
        <link href = "https://code.jquery.com/ui/1.12.1/themes/dot-luv/jquery-ui.css"
        rel = "stylesheet">

        <!-- Custom style -->
        <link href="css/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--chart js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>


        <script>
            function openNav() {
                document.getElementById("mySidebar").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }
            function closeNav() {
                document.getElementById("mySidebar").style.width = "0";
                document.getElementById("main").style.marginLeft= "0";
              }
            $(function() {
               var availableTutorials = [
               'Core UI','Advanced UI','React.js','Vue.js','AngularJS','Asp.net','GoLang','Coure UI Stack','Node.js','Java','Python','Core Java','Advance Java','.Net','.Net Core','MEAN Stack','MESN Stack','MEVN Stack','Ruby'    
               ];
               $( "#automplete-3" ).autocomplete({
                  minLength:1,   
                  delay:500,   
                  source: availableTutorials
               });
            });

            
         </script>
      
        </head>
    
        <div id="mySidebar" class="sidebar">
            <label href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</label>
            <img class="logo2" src="images/caramelacademy.png" width="200px" height="70px">
            <label class="name" href="#">Hello Admin!</label>
        
            <a href="#manageSubmenu" data-toggle="collapse" aria-expanded="true" ><i class="fa fa-address-book" aria-hidden="true" style="color: aliceblue"></i>
                 Manage Contacts</a>
                
            <a href="#udashboardSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle option"><i class="fa fa-user-circle" aria-hidden="true" style="color: aliceblue"></i>
                Manage User Dashboard</a>
                <ul class="list-unstyled collapse" id="udashboardSubmenu">
                    <li class="suboption">
                    <a href="#">Student</a>
                    </li>
                    <li class="suboption">
                    <a href="#">Instructor</a>
                    </li>
                </ul>
            <a href="#edashboardSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle option"><i class="fa fa-user-circle" aria-hidden="true" style="color: aliceblue"></i>
                Manage Entity Dashboard</a>
                <ul class="list-unstyled collapse" id="edashboardSubmenu">
                    <li class="suboption">
                    <a href="#">Organization</a>
                    </li>
                    <li class="suboption">
                        <a href="#">University</a>
                    </li>
                </ul>
            
            
         
        
            <a href="../admin_login.php" class=""><i class="fa fa-sign-out" aria-hidden="true" style="color: aliceblue"></i>Logout</a>
          </div>
          
          <body>
          <div class="acaheader" id="topheader">
            <div class="container-fluid text5">
                <nav class="navbar navbar-expand-lg bg navbar-light">
                    <a class="navbar-brand" href="">
                    
                    <button class="navbar-toggler" onclick="openNav()" type="button">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <label class="dash">Dashboard <i class="fa fa-home" aria-hidden="true" style="color: black"></i></label>
                    
                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <!-- Navbar links -->
                    <div class="navbar-collapse collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item" class="pull-right">
                        <button class="button-report">View Reports</button>
                    </li>
                        </ul>
                        <ul class="navbar-nav ml-auto font-weight-bold">
                            <a href="#" class="notification">
                                <span><i class="fa fa-envelope" style="color:black;font-size:25px;" aria-hidden="true"></i></span>
                                <span class="badge">3</span>
                            </a>
                            <li class="nav-item">
                                <form autocomplete="off" action="#">
                                    <span class="search-input">
                                    <div class="autocomplete searchbar">
                                        <input id = "automplete-3" placeholder="Search">
                                        <a><i class="fa fa-search" type="submit" for="autocomplete-3" style="font-size:25px;background-color:white;" aria-hidden="true"></i></a>
                                    </div>
                                </form>
                                
                            </li>
                            <li class="nav-item"><img src="php-mysql-logo.jpg" class="pull-right" style="width:50px; height:35px; "></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
      
        
    </body>
</html>
<style type="text/css">
    body{
        background-image: url(../adminbg.png);
    }
    .navbar{
        background-color:transparent;
    }
    .button-report{
        width: 250px;
        display: inline-block;
    }
</style>