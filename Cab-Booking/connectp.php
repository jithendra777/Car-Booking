<?php 
            session_start();
            $user=$_SESSION["username"];
            $conn = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($conn, 'seproject');
            $query ="SELECT * from dl where `login_id`='$user'";
            $result=mysqli_query($conn, $query);
            $rows=mysqli_num_rows($result);
            $ph=$_POST['phone_no'];
            if ($rows==0)
            {
            $imageData = $_FILES['image']['tmp_name'];
            $image = base64_encode(file_get_contents(addslashes($imageData)));
            $Data1 = $_FILES['name1']['tmp_name'];
            $Date1 = base64_encode(file_get_contents(addslashes($Data1)));
            $Data2 = $_FILES['name2']['tmp_name'];
            $Date2 = base64_encode(file_get_contents(addslashes($Data2)));
            $sql = "INSERT INTO dl (`Phone Number`,`dl`,`dl1`,`ac`,`login_id`) VALUES ('$ph','$image','$Data1','$Data2','$user')";
            mysqli_query($conn, $sql);
            }
            else if($rows==1){
                $imageData = $_FILES['image']['tmp_name'];
                $image = base64_encode(file_get_contents(addslashes($imageData)));
                $Data1 = $_FILES['name1']['tmp_name'];
                $Date1 = base64_encode(file_get_contents(addslashes($Data1)));
                $Data2 = $_FILES['name2']['tmp_name'];
                $Date2 = base64_encode(file_get_contents(addslashes($Data2)));    
                $sql ="UPDATE dl SET `Phone Number`='$ph', `dl`='$image',`dl1`='$Data1',`ac`='$Data2',`login_id`='$user' where `login_id`='$user'";
                mysqli_query($conn, $sql);
            }
            header("Location: p9.php");
?>