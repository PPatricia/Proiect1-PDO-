<?php
require_once "Connection.php";
//procedua pentru insert
$sqle1="DROP PROCEDURE IF EXISTS insertImage";
$sqle2="CREATE PROCEDURE images.insertImage
(
in strTitle varchar(30),
in strImage varchar(100000)
)
begin 
insert into images.images(title,image) values (strTitle,strImage);
end;";
$c1=$con->prepare($sqle1);
$c2=$con->prepare($sqle2);
$c1->execute();
$c2->execute();
$msg="";

if(isset($_POST['upload'])){
    
//TRIGGER
    $text=$_POST['text'];
    $sqlp="CREATE TRIGGER before_insert BEFORE INSERT ON images.images FOR EACH ROW
                BEGIN
                INSERT INTO images.images_updated(title,status,edtime)VALUES(NEW.title,'INSERTED',NOW());
                END;
";
 $stmt=$con->prepare($sqlp);
        $stmt->execute();
        $target="./images/".md5(uniqid(time())).basename($_FILES['image']['name']);
    //$sql="INSERT INTO images.images(title,image)VALUES('$text','$target')";
    $sql="CALL insertImage('{$text}','{$target}')";
   
     $q=$con->query($sql);
     
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        header('location:welcome.php');
        
    }else{
        $msg="vai!";
    }
  
}

