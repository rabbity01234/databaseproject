<?php 
    session_start();
    include('connection.php');
    $employeeNumber = "";
    $errors = array(); 
    $db = mysqli_connect('localhost', 'root', '', 'projectdb');
    if(!isset($_SESSION['Header'])){
        header("Location: index.php");
    }
    if(isset($_POST['changerole'])){
        $employeeNumber = $_POST['employeeNumber']; 
        $newrole = $_POST['jobTitle'];  
        $user_check_query = "SELECT * FROM employees WHERE employeeNumber='$employeeNumber'" ;
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        if ($user== 0) {
            if ($user['employeeNumber'] = $employeeNumber) {
              array_push($errors, "There are no Employee Number in the system");
            }
            if (empty($employeeNumber)) { array_push($errors, "Employee Number is required"); }
          }
    if (count($errors) == 0) {
            $update = "UPDATE employees SET jobTitle = '$newrole' WHERE employeeNumber = '$employeeNumber'";
            $result = mysqli_query($db, $update);
            if($newrole == 'VP Marketing' or $newrole == 'VP Sales'){
            $update = "UPDATE employees SET reportsTo = 1002 WHERE employeeNumber = '$employeeNumber'";
            header("Location: admin.php");
            $result = mysqli_query($db, $update);
        }
            elseif($newrole == 'Sale Manager (EMEA)' or $newrole == 'Sale Manager (EMEA)' or $newrole == 'Sale Manager (EMEA)' ){
            $update = "UPDATE employees SET reportsTo = 1056 WHERE employeeNumber = '$employeeNumber'";
            header("Location: admin.php");
            $result = mysqli_query($db, $update);
        }
        elseif($newrole == 'Sales Rep'){
            $update = "UPDATE employees SET reportsTo = 1143 WHERE employeeNumber = '$employeeNumber'";
            header("Location: admin.php");
            $result = mysqli_query($db, $update);
        }
     } 
}
?>
