<?php
session_start();
if(($_GET['y']=="d")){


include '../conexao.php';


$id = $_SESSION['id'];
$sql = "SELECT * FROM usuarios WHERE id = $id";
$result = $con->query($sql);

$row = mysql_num_rows($result);
if($row->num_rows > 0){
    $sqlDelete = "DELETE * FROM usuarios WHERE id = $id";
    $resultDelete = $con->query($sqlDelete);

}
}


/*$stmt = $con->prepare($sql);
$stmt->execute([':id' => $id]);*/

/*header("Location:../auth/logout.php");*/
