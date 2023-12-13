<?php
//$name=$_POST['name'];
//$email=$_POST['emai'];
//$pass=$_POST['pas'];
//$con=mysqli_connect("localhost","root","","test",3306);
//$bb="insert into table values("$name","$email","$pass")";
?>
<html>
    <head><style>
        body {
  width: 300px;
  height: 200px;
  background: white;
  animation: mymove 5s infinite;
}

@keyframes mymove {
  from {background-color: white;}
  to {background-color: lightblue;}
}
body{
    text-align:center;
}
        </style>

        
</head>
<body style="background-image: url('img_girl.jpg');">

 <form action="validate.php" method="POST">
    <div>
    <input type="text" name="name" placeholder="FULL NAME">
</div>
<br><div>
    <input type="password" name="pas" placeholder="password">
</div><br><div>
    <input type="password" name="pas" placeholder="RE_ENTER password">
</div><br><div>
    <input type="email" name="emai" placeholder="mobile number or email">
</div><br><div>
    <input type="submit" name="subbb" value="submit">
</div>
</form>
    
</body>
</html>
