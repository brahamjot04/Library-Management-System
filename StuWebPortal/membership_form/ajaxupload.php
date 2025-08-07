<?php
$valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
$path = 'upload/'; // upload directory
if(!empty($_POST['membership_no']) || !empty($_POST['current_date']) || !empty($_POST['s_name'])|| !empty($_POST['f_name']) || !empty($_POST['mob_no']) || !empty($_POST['academic_year']) || !empty($_POST['dept_name']) || !empty($_POST['sem']) || !empty($_POST['roll_no']) || !empty($_POST['full_address']) || $_FILES['image'])
{
    $img = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    // can upload same image using rand function
    $final_image = rand(1000,1000000).$img;
    // check's valid format
    if(in_array($ext, $valid_extensions)) 
    { 
        $path = $path.strtolower($final_image); 
        if(move_uploaded_file($tmp,$path)) 
        {
            // echo "<img src='$path' />";
            $Membership_No=$_POST['membership_no'];
            $Date=$_POST['current_date'];
            $S_Name=$_POST['s_name'];
            $F_Name=$_POST['f_name'];
            $Mobile_Number=$_POST['mob_no'];
            $Academic_Year=$_POST['academic_year'];
            $Department=$_POST['dept_name'];
            $Semester=$_POST['sem'];
            $Roll_no=$_POST['roll_no'];
            $Registration_Number=$_POST['reg_no'];
            $Full_Address=$_POST['full_address'];
            // $Student_Profile=$_FILES['image'];
            //include database configuration file
            include_once 'db.inc.php';
            //insert form data in the database
            $insert = $conn->query("INSERT INTO library_membership_form (
            Membership_No,`Date`,S_Name,F_Name,Mobile_Number,Department,Semester,Academic_Year,Roll_Number,Registration_Number, Full_Address) VALUES ('$Membership_No','$Date','$S_Name','$F_Name','$Mobile_Number','$Department','$Semester','$Academic_Year','$Roll_no','$Registration_Number','$Full_Address')");
            //echo $insert?'ok':'err';
        }
    } 
    else 
    {
        echo 'invalid';
    }   
}
?>