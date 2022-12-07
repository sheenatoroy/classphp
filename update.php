<?php
    include 'data.php';
    $person = new People();
    if(isset($_POST['search']) == "Search")  
    {  
        $person -> setContact($_POST['currentContact']);
        $person->findPeople();
    }
    else if(isset($_POST['update']) == "Update")  
    {  
        $currentNumber = $_POST['currentContact'];
        $person->setName($_POST['name']);
        $person->setContact($_POST['contact']);
        $person->setAddress($_POST['address']); 
        $person-> updatePeople($currentNumber); 
        $person = new People();

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
            <h1>Update People Information</h1>
            <br/><br/>
            <form method="post">
                <label>Current Contact Number</label>  
                <input type="text" name="currentContact" value = "<?= $person->getContact();?>" class="form-control" />  
                <br/>
                <center>
                <input type="submit" name="search" class="btn btn-info" value="Search"/>
                <input type="button" onclick="location.href='index.php';" class="btn btn-info" value="Back" />
                </center>

                <br/>
                <label>Full Name</label> 
                <input type="text" name="name" value = "<?= $person->getName();?>" class="form-control" />  
                <br/> <br/> 
                <label>Contact Number</label>  
                <input type="text" name="contact" value = "<?= $person->getContact();?>" class="form-control" />  
                <br/> <br/>
                <label>Address</label>  
                <input type="text" name="address" value = "<?= $person->getAddress();?>" class="form-control" />
                <br/>
                <center><input type="submit" name="update" class="btn btn-info" value="Update"/></center>

            </form>  
        </div>
    </body>  
</html>
