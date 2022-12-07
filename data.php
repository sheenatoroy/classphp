<?php

    class People{

        private $name;
        private $contact;
        private $address;

        function setName($name){
            $this -> name = $name;
        }
        function setContact($contact){
            $this -> contact = $contact;
        }
        function setAddress($address){
            $this -> address = $address;
        }

        function getName(){
            return $this -> name;
        }

        function getContact(){
            return $this -> contact;
        }
        
        function getAddress(){
            return $this -> address;
        }

        function savePeople(){
            $conn = mysqli_connect('localhost', 'root', ' ', 'db_record');


            $conn = mysqli_connect('localhost', 'root', ' ', 'db_record');
            $sql = "select person_name,person_contact,person_address 
            from tbl_record";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    if($this -> getContact() == $row["person_contact"]){
                    echo '<script>alert("Phone number is already used")</script>';
                    break;
                    }
                    else{
                        $sql = "insert into tbl_record(person_name,person_contact,person_address) 
                        values('".$this -> getName()."','".$this -> getContact()."', '".$this -> getAddress()."');";
                        mysqli_query($conn, $sql);
                        echo '<script>alert("Record saved")</script>';
                    }
                }
            }
            $conn->close();
        }

        function findPeople(){

            $conn = mysqli_connect('localhost', 'root', ' ', 'db_record');
            $sql = "select person_name,person_contact,person_address 
            from tbl_record where person_contact = '".$this -> getContact()."'";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    $this -> setName($row["person_name"]);
                    $this -> setContact($row["person_contact"]); 
                    $this -> setAddress($row["person_address"]);
                    }
                }else{
                    $this -> setContact("");
                    echo '<script>alert("No record found!")</script>';
                }
            $conn->close();
        }
        
        function updatePeople($currentNumber){
            $conn = mysqli_connect('localhost', 'root', ' ', 'db_record');
            $sql = "UPDATE tbl_record SET person_name = '".$this -> getName()."', 
                    person_contact = '".$this -> getContact()."',
                    person_address = '".$this -> getAddress()."' WHERE person_contact = '$currentNumber' ";
            $result = mysqli_query($conn, $sql);
            echo '<script>alert("Information updated")</script>';   
            $conn->close();
            
        }
    }
?>
