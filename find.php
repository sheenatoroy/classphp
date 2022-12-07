<?php
    include 'data.php';
    $person = new People();
    
    if(isset($_POST["submit"]))  
    {  
        $person->setContact($_POST['contact']);
        $person->findPeople();
    }
?>
<!DOCTYPE html>
<html>
     <head>  
           <title>OOP</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
     </head>  
      <body>  
      <div class="container" style="width:700px;">  
            <h1>Find people</h1>
            <br/><br/>
            <form method="post">
                <label>Contact Number</label>  
                <input type="search" name="contact" class="form-control" />  
                <br/>
                <center><input type="submit" name="submit" class="btn btn-info" value="Search"/>
                <input type="button" onclick="location.href='index.php';" class="btn btn-info" value="Back" />
                </center>
            </form>
            <br/>
            <form>  
                <label >Full Name</label>  
                <label class="form-control" ><?= $person->getName();?></label>  
                <br/> <br/> 
                <label>Contact Number</label>  
                <label class="form-control" ><?= $person->getContact();?></label>  
                <br/> <br/>
                <label>Address</label>  
                <label class="form-control" ><?= $person->getAddress();?></label>  
            </form>  
        </div>
    </body>  
</html>