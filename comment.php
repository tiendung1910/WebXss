<?php
    include('conn.php');
	if(isset($_POST['submit'])){
 
		session_start();
		
 
		$name=$_POST['name'];
		$comment=$_POST['comment'];
        $sql = "INSERT INTO `comment`(`name`, `comment`) 
            VALUES ('$name','$comment')";
        $result = $conn->query($sql);
        header('location:comment.php');

    }
    $result2 =  mysqli_query($conn,"select * from comment");

?>

<!DOCTYPE html>
<html>
<head>
<title>Login Using Cookie with Logout</title>
</head>
<body>
    <form method="POST" action="">
        <label>Name: </label><br><input type="text" name="name"/>
        <br>
        <label>Comment:</label><br><textarea rows="4" cols="50" value="" name="comment"></textarea>
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>

    <?php
        if (mysqli_num_rows($result2) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result2)) {
                echo "Name: " . $row["name"]. "\n". "Comment: " . $row["comment"]. "<br>";
                
            }
        }else{

        }
        
    ?>

    <a href="success.php">back</a>

</body>
</html>