<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db = "feedback";

$conn = new mysqli($servername,$user,$pass,$db);

if($conn->error){
    echo "database error ".$conn->error."";
}
else{
    echo "Connection successful";
}
if(isset($_POST['save'])){
    echo "<br>";
    

 $name = $_POST['fullname'];
 $email = $_POST['email'];
 $Location = $_POST['Location'];
 $Comment = $_POST['comment'];

    $sql = "insert into info (name,email,Location,Comment) values ('$name,'$email', '$Location', '$Comment')";

    if($conn->query($sql)){
        echo "Inserted";
    }
    else{
        echo "There's an error in: ".$conn->error;
    }

}
//header("refresh:10; url=Intro.php")
?>

<!DOCTYPE html>
<html>
<head>
<title>Fill In Forms</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="Edy.css">
</head>
<body>
<h1>Customer Info</h1>
<h3>Thank You For Your Response</h3>
<br>
Your name is
<?php echo $_POST['fullname']; ?>
<br>
E-Mail is
<?php echo $_POST['email']; ?>
<br>
Your location is
<?php echo $_POST['Location']; ?>
<br>
Your comment was received
<br>
<br>
Once Again, thanks for the response!
<footer>
visit my social media pages
<p>
    <a href="https://pinterest.com/ainedwins"><img src="ico_pinterest.svg" alt="pinterest"></a>
    <a href="https://twitter.com/ainedwins"><img src="ico_twitter.svg" alt="twitter"></a>
    <a href="https://youtube.com/ainedwins"><img src="ico_youtube.svg" alt="Youtube"></a>
    <a href="https://instagram.com/ainedwins"><img src="ico_instagram.svg" alt="Instagram"></a>
</p>
<br>
</footer>
</body>
</html>
