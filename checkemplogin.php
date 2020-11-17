<?php
    session_start();
    $errors = array(); 
    if(isset($_POST['login_emp'])){
        include('connection.php');
        $employeeNumber = $_POST['employeeNumber'];
        $password = $_POST['password'];
        if (empty($employeeNumber)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM employees WHERE employeeNumber = '$employeeNumber' AND password = '$password'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1 ){
            $row = mysqli_fetch_array($result);
            $_SESSION['jobTitle'] = $row['jobTitle'];

            if($_SESSION['jobTitle'] == 'President' or $_SESSION['jobTitle'] == 'VP Sales' or $_SESSION['jobTitle'] == 'VP Marketing') {
                $_SESSION['Header'] = $employeeNumber;
                header("Location: index.php");
            }
            if($_SESSION['jobTitle'] == 'Sales Rep' or $_SESSION['jobTitle'] == 'VP Sales') {
                $_SESSION['Employee'] = $employeeNumber;
                header("Location: index.php");
            }
            if($_SESSION['jobTitle'] == $_SESSION['jobTitle'] == 'VP Marketing') {
                $_SESSION['Discount Create'] = $employeeNumber;
                header("Location: index.php");
            }
        }
        else {
            array_push($errors, "Wrong username/password combination");
        }
    }
 }
?>

