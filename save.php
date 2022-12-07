<?php
    include 'data.php';
    $person = new People();
    
    if(isset($_POST["submit"]))  
    {  
        $person->setName($_POST['name']);
        $person->setContact($_POST['contact']);
        $person->setAddress($_POST['address']);
        $person->savePeople();
    }
   

?>
<!DOCTYPE html>
<html>
     <head>  
           <title>OOP</title>  
     </head>  
      <body>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <div class="container" style="width:700px;">  
               <form method="post">  
                    <h1>Add people</h1>
                     <br/><br/>
                    <label>Full Name</label>  
                    <input type="text" name="name" class="form-control" />  
                    <br/> <br/> 
                    <label>Contact Number</label>  
                    <input type="text" name="contact" class="form-control" />  
                    <br/> <br/>
                    <label>Address</label>  
                    <input type="text" name="address" class="form-control" />  
                    <br/><br/>
                    <center><input type="submit" name="submit" class="btn btn-info" value="Submit" />
                    <input type="button" onclick="location.href='index.php';" class="btn btn-info" value="Back" /></center>
                </form>  
          </div>

      </body>  
</html>