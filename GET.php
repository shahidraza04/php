<?php
echo"
<html>
<head><title>welcome page</title></head>
<body>
<form action=''method='GET'>
<input type='text' name='email' id='email' placeholder'enter email id'/> 
<button type=''submit>submit</button>
</form>
</body>
</html>
"; 

if(isset($_GET['email'])){
    $email = $_GET['email'];
    echo "email=".$_email;
}
?>
