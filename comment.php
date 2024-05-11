<?php
	if(isset($_POST['submit'])){
 
		session_start();
		include('conn.php');
 
		$name=$_POST['name'];
		$comment=$_POST['comment'];
        $sql = "INSERT INTO `comment`(`name`, `comment`) 
            VALUES ('$name','$comment')";
        $result = $conn->query($sql);
        
        
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Using Cookie with Logout</title>
</head>
<body>
    <form method="POST" action="">
        <input type="hidden" value="">
        <label>Comment:</label><br><textarea rows="4" cols="50" value="ahihi" name="comment"></textarea>
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>


    <a href="success.php">back</a>

</body>
</html>