<?php

$servername = "localhost";
$username = "root";
$password = "";
$DB = "smartmethod";
$conn = new mysqli($servername,$username,$password,$DB);
$Table = "motors";
$Query ="Select * from $Table";
$result = $conn->query($Query);
if($result->num_rows>0){
    while ($r = $result->fetch_assoc()) {
        $row = $r;
    }
    $m1=$row['Motor1'];
    $m2=$row['Motor2'];
    $m3=$row['Motor3'];
    $m4=$row['Motor4'];
    $m5=$row['Motor5'];
}else{
    $m1=0;
    $m2=0;
    $m3=0;
    $m4=0;
    $m5=0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="FTask.css">
    <title>First Task</title>
</head>
<body>

<h2>Control panel</h2>
    <div class="container">
		
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            
            <div class="card"> 
                <input type="range" name="Motor1" id="Motor1" min="0" max="180" value="<?php echo $m1?>" oninput="ChangeInput()">
                <label id="Label1"></label>
            </div>
            <div class="card"> 
                <input type="range" name="Motor2" id="Motor2" min="0" max="180" value="<?php echo $m2?>" oninput="ChangeInput()">
                <label id="Label2"></label>
            </div>
            <div class="card"> 
                <input type="range" name="Motor3" id="Motor3" min="0" max="180" value="<?php echo $m3?>" oninput="ChangeInput()">
                <label id="Label3"></label>
            </div>
            <div class="card"> 
                <input type="range" name="Motor4" id="Motor4" min="0" max="180" value="<?php echo $m4?>" oninput="ChangeInput()">
                <label id="Label4"></label>
            </div>
            <div class="card"> 
                <input type="range" name="Motor5" id="Motor5" min="0" max="180" value="<?php echo $m5?>" oninput="ChangeInput()">
                <label id="Label5"></label>
            </div>
            <button type="submit">Save</button>

            <?php

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                try {
                    $m1=$_POST['Motor1'];
                    $m2=$_POST['Motor2'];
                    $m3=$_POST['Motor3'];
                    $m4=$_POST['Motor4'];
                    $m5=$_POST['Motor5'];
                    $SQuery = "insert into motors(Motor1,Motor2,Motor3,Motor4,Motor5) values($m1,$m2,$m3,$m4,$m5);";
                    $conn->query($SQuery);
                    header("Location: /Robot arm/First Task/FTask.php");
                } catch (\Throwable $th) {
                    //throw $th;
                    echo "Bad";
                }
            }
?>

        </form>
        
    </div>

    <script>
        var motor1 = document.getElementById("Motor1");
        var label1 = document.getElementById("Label1");
        label1.innerHTML = motor1.value;
        
        var motor2 = document.getElementById("Motor2");
        var label2 = document.getElementById("Label2");
        label2.innerHTML = motor2.value;
        
        var motor3 = document.getElementById("Motor3");
        var label3 = document.getElementById("Label3");
        label3.innerHTML = motor3.value;
        
        var motor4 = document.getElementById("Motor4");
        var label4 = document.getElementById("Label4");
        label4.innerHTML = motor4.value;
        
        var motor5 = document.getElementById("Motor5");
        var label5 = document.getElementById("Label5");
        label5.innerHTML = motor5.value;
        
        function ChangeInput() {
            
        label1.innerHTML = motor1.value;
        label2.innerHTML = motor2.value;
        label3.innerHTML = motor3.value;
        label4.innerHTML = motor4.value;
        label5.innerHTML = motor5.value;
            
        }

        
    </script>

</body>
</html>