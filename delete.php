<?php
 //include connection file
 include "Connection.php";
$sqll1="DROP PROCEDURE deleteImage";
$sqll1="CREATE PROCEDURE images.deleteImage
(
in strID int
)
begin 
delete from images.images where id=strID;
end;";
$c1=$con->prepare($sqll1);
$c2=$con->prepare($sqll2);
$c1->execute();
$c2->execute();
  $sql="CREATE TRIGGER after_delete AFTER DELETE ON images.images FOR EACH ROW
                BEGIN
                INSERT INTO images.images_updated(title,status,edtime)VALUES(OLD.title,'DELETED',NOW());
                END;
";
        $stmt=$con->prepare($sql);
        $stmt->execute();
 $sql1="SELECT * FROM images.images WHERE id='{$_GET['id']}'";
 //$query=mysqli_query($con, $sql1)or die(mysqli_error($con));
$query=$con->query($sql1);
 $row=mysqli_fetch_array($query);

unlink($row["image"]);

 //$sql2="DELETE FROM images.images WHERE id='{$_GET['id']}'";
  $sql2="call deleteImage('{$_GET['id']}')";

 //=mysqli_query($con, $sql2)or die(mysqli_error($con));
 $query=$con->query($sql2);

header('location:welcome.php');



 ?>
