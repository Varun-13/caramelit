
<!DOCTYPE html>
<html>
  <head>
    
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <?php
    if ($_SERVER['REQUEST_METHOD']=='POST') {
    require 'entity_reg_proc.php';
  }
    ?>
    <title>Registration</title>

    <style>
      body{
          /* fallback for old browsers */
              background-image: url(entityreg.jpg);
              
              background-size: cover;
              background-repeat: no-repeat;

              font-family:Arial, Helvetica, sans-serif;
            }
      .col-lg-4{
    
      height:630px;
  }
   .col-lg-5{
    
    height:630px;
   }
   .form-control{
    border-radius:15px;
   }

    </style>

  </head>
  <body >
    <section >
    <nav class="navbar navbar-expand-lg navbar-light ">
      <img src="Caramel-Horz.png " style="width:200px; height:60px; margin:0px 0px 0px 0px; margin-top:0px; padding-left: 10px; padding-block-start: 0%; " alt="logo">
    
      <!--  <a class="navbar-brand" href="#">Caramel IT</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item active">
              <a class="nav-link" href="#"><b>Home</b> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Features</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Pricing</b></a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#"><b>Contact Us</b></a>
            </li>
           
          </ul>
        </div>
      </nav>
 </section>

<section>

  <div class="container-fluid " >
      <div class="text-center" style="margin-top: 20px;">
        <h3 style="font-weight:600;">Entity Registration</h3><br>
        <form action="#" method="POST">
          
           
          <div class="row" style="margin-left: 50px;">
          <div style="width: 100%; max-width: 887.16px;">
            <div class="row" >
              <div class="col">
                <input type="text" class="form-control" placeholder="First name" name="fname" >
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Last name" name="lname">
              </div>
            </div><br>
            <div class="row" >
              <div class="col">
                <input type="email" class="form-control" required placeholder="Email Address" name="email">
              </div>
              <div class="col">
                <input type="date" class="form-control" placeholder="mm-dd-yy" name="birthDate">
              </div>
            </div><br>
            <div class="row" >
              <div class="col">
                <input type="text" class="form-control" placeholder=" contact No" name="phone">
              </div>
              <div class="col">
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
            </div><br>
            <div class="row" >
              <div class="col">
                <select name="country" class="form-control" placeholder="   --Select your Country--" >
                  <option value="" >--Select Your Country--</option>
                  <option value="India">India</option>
                  <option value="USA">USA</option>
                  <option value="Australia">Australia</option>
                  <option value="UK">UK</option>
              </select>  
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="State" name="state">
              </div>
            </div><br>
            <div class="row" >
              <div class="col">
                <input type="text" class="form-control" placeholder="College/University" name="college">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Enter The 6 Best Skills Ex like c,c++" name="skill">
              </div>
            </div>
          </div>
          <br>
          <div style="margin-left: 0px;">
            <div class="col-lg-4"  id="div1" style="width: 150%; max-width: 400px;">
      
      
            <!--Display Content Under this Div Based On what user selected here is the sample form which user selects student copy paste same for professional but diaplay when user selects it-->
      
      
              <div style="background-color: white;border-radius:20px; height:auto;"><br>
                <i class="fas fa-university" style='font-size:40px'></i>
                            <center>   <h5 style="color:black;" >Enter College Details</h5></center><br>
                        <div class="form-group text-center">
                  
                  <input class="form-control"
                   name="college_name" placeholder="Enter College Name" style="width: 70%;margin-left:60px;">
      
                </div><br>
                <div class="form-group">
               
                  <input type="text" class="form-control" name="university_name" placeholder="Enter The University Name" style="width: 70%;margin-left:60px;">
                </div><br>
                <div class="form-group text-center">
                  
                  <input type="text" class="form-control"
                   name="college_skill" placeholder="Enter The Skills" style="width: 70%;margin-left:60px;">
      
                </div><br>
                <div class="form-group text-center">
                  
                  <input type="text" class="form-control"
                    name="college_description" placeholder="Others..." style="width: 70%;margin-left:60px; padding-bottom: 10px;">
      
                </div>
                    <br>
      
      
      
              </div>
            </div>
          
        <div class="col-lg-4"  id="div2" style="display: none; width: 150%; max-width: 400px;">
            
            
          <!--Display Content Under this Div Based On what user selected here is the sample form which user selects student copy paste same for professional but diaplay when user selects it-->
      
      
            <div style="background-color:white; border-radius:20px; height:auto;"><br>
                <i class="fa fa-group" style="font-size:40px"></i>
                            <center>   <h5 style="color:black">Enter Organization Details</h5></center><br>
                        <div class="form-group text-center">
                  
                  <input type="text" class="form-control"
                   name="organization_name" placeholder="Organization Name" style="width: 70%;margin-left:60px;">
        
                </div><br>
                <div class="form-group">
               
                  <input type="text" class="form-control"  name="organization_email" placeholder="Organization Email Address" style="width: 70%;margin-left:60px;">
                </div><br>
              <!--  <div class="form-group text-center">
                  
                  <input type="text" class="form-control"
                   id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter The Branch Be/B-Tech/BCA" style="width: 70%;margin-left:60px;">
        
                </div><br>
                -->
                <div class="form-group text-center">
                  
                  <input type="text" class="form-control"
                    name="organization_description" placeholder="Others.." style="width: 70%;margin-left:60px; padding-bottom: 10px;">
        
                </div>
                    <br><br>
      
      
      
            </div>
        </div>
        </div>
        </div><br><br>
<p style="font-size:1em; font-weight:bold; margin-top: -250px;">Select Your Role</p>
    <center> 
            <div class="form-row text-center" style="margin-left: 23%;">
            <div class="form-check form-check-inline"  style="margin-left: 320px;" >
             
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" onclick="document.getElementById('div2').style.display = 'none';
              document.getElementById('div1').style.display = '';" value="College">
              <label class="form-check-label" for="inlineRadio1" style="font-size:1em;" >College</label>
            </div>
            <div class="form-check form-check-inline"  style="margin-left: 50px;">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" onclick="organization()" value="Organization">
              <label class="form-check-label" for="inlineRadio2" style="font-size:1em;">Organization</label>
            </div>
          
          </div>
          
    </center>
          <br>
          <br>
          <br>
          <br>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
               I accept all the Terms & Conditions of the company
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" style="margin-bottom: 20px;width:150px;background-color:#1D2B64; color:white;"> Register</button>
      
        </form>


<script>
  function college() {
    document.getElementById('div2').style.display = 'none';
    document.getElementById('div1').style.display = '';
  }
  function organization() {
    document.getElementById('div2').style.display = '';
    document.getElementById('div1').style.display = 'none';
  }
</script>
      
  </div>
</div>

</section>






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>