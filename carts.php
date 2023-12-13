<html>
    <head>
        <style>
            body{
                text-align:center;
            }
            hr{
                border:5px solid black;
            }
            div{
                location:relative;
                left:200px;
               
               
            }
            </style>
</head>
<body>
    <h1>RESMA STORE</h1>
    <hr>
    <div>
<table border="1">
    <form name="mform" method="POST">
        <tr>
            <th>SN</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th></th>
</tr>
<?php 
$a=array(
    'potato',
    'tomato',
    'chilly',
    'lauli flower',
    'cabbage',
    'bean',
    'ladyfinger',
    'turmeric',
    'bringle',
    'capsicum',
    'onion',
    'ginger'
);
$b=array(
    20,30,40,50,60,56,45,67,23,23,45,45
);
$k=1;
$j=0;
for($i=1;$i<=12;$i++){
    ?>
    
    <tr>
    <td><?php echo $j?></td>
    <td><input type="submit" name=name[$a] value=<?php echo $a[$j]?>></td>
    <td><input type="submit" name=price[$b] value=<?php echo $b[$j]?>></td>
    <td><input type="submit" name=less value=<?php echo "-"?> >
    <input type="submit" name=quantity value=<?php echo 1?>>
   <input type="submit" value=<?php echo "+"?> name=add>
  <?php if(isset($less))
     {
        $quantity--;
        echo $quantity;
     }
      if(isset($add))
     {
        $quantity++;
        echo $quantity;
     }?></td>
</td>
    <td><input type="submit" name=buynow value="buynow"
    <?php 
  
   
   ?>
    >
 
</td>
</tr>
<?php $j++;}
?>
</table>
    </div>
</body></html>


        
