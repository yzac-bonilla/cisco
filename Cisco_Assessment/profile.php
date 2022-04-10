<?php
  //session_start();
  //if (!isset($_SESSION['usuario'])) {header('Location:index.html');}
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <link type="text/css" rel="stylesheet" href="api/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="api/css/custom-style.css">
        <link type="image/x-icon" href="api/img/cisco-logo.png" rel="icon" />
        
        <script src="api/js/jquery.min.js"></script>
        <script src="api/js/bootstrap.min.js"></script>
        
        <title>Cisco Assessment Center</title>
        
    </head>

    <body>
        
        <nav class="navbar navbar-default navbar-fixed-top nav-shadow">
          <div class="container-fluid">
            
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://www.cisco.com"> Cisco Digital Tool </a>
            </div>
              
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="profile.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home </a></li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Menu 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Page 1</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Menu 2 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Page 2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Help <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="mailto:nombre@dominio.com?subject=Assessment Center"><i>Email</i></a></li>
                    </ul>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="Usuarios/Cerrar_Sesion.php"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
              
          </div>
        </nav>

        <div class="container">
            
            <div class="panel panel-info">
                
                <div class="panel-heading">
                    
                    <center>
                    <header>User Profile</header>
                    </center>
                    
                </div>
                
                <div class="panel-body">
                    
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Personal Info</a></li>
                      <li><a data-toggle="tab" href="#menu1">Agenda</a></li>
                      <li><a data-toggle="tab" href="#menu2">Progress</a></li>
                    </ul>

                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                        <div class="row">
                        
                        <div class="col-sm-4">
                            <br><img src="api/img/user_default.png" class="img-thumbnail" alt="User Picture" width="auto" height="256" >
                        </div>
                        <div class="col-sm-4">
                            <br>Name: <input type="text" name="Name" class="form-control" placeholder="Name" value="Isaac" disabled>
                            <br>Surname: <input type="text" name="Surname" class="form-control" placeholder="Surame" value="Bonilla" disabled>
                            <br>University: <input type="text" name="University" class="form-control" placeholder="University" value="Instituo Politécnico Nacional" disabled>
                            <br>Degree: <input type="text" name="Degree" class="form-control" placeholder="Degree" value="Communications and Electronics Engineering" disabled>
                        </div>
                        <div class="col-sm-4">
                            <br>Country: <input type="text" name="Country" class="form-control" placeholder="Country" value="Mexico" disabled>
                            <br>Email: <input type="text" name="Email" class="form-control" placeholder="Email" value="ibonilla@cisco.com" disabled>
                        </div>

                        </div>
                      </div>
                      <div id="menu1" class="tab-pane fade">
                        <br>
                        <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>Activity</th>
                                <th>Date</th>
                                <th>Hour</th>
                                <th>Place</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Technical Interview</td>
                                <td>Aug 23 2017</td>
                                <td>9:00 am</td>
                                <td>-</td>
                              </tr>
                              <tr>
                                <td>Interview</td>
                                <td>Aug 24 2017</td>
                                <td>1:00 pm</td>
                                <td>-</td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                      <div id="menu2" class="tab-pane fade">
                        <br>
                        Overall progress
                        <br>
                        <div class="progress">
                          <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                          aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width:33%">
                            33%
                          </div>
                        </div>
                        <hr>
                        Stage 1
                        <br>
                        <div class="progress">
                          <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
                          aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                            100%
                          </div>
                        </div> 
                        <br>
                        Stage 2
                        <br>
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                          aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width:7%">
                            7%
                          </div>
                        </div>
                        <br>
                        Stage 3
                        <br>
                        <div class="progress">
                          <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                          aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                            0%
                          </div>
                        </div>
                          
                      </div>
                    </div>
            
                    
                </div>
            
            </div>
            
            <center><img src="api/img/cisco-blue.gif" height="100" width="100"></center>
                
        </div>
    
    </body>
    
</html>