<?php
if (isset($_POST['name'])) {
    $submit = true;
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection failed due to" . mysqli_connect_error());
    }
    // echo "successfully connecting to the database";
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $weight = $_POST['weight'];
    $bodytype = $_POST['bodytype'];
    $target = $_POST['target'];
    $subscription = $_POST['subscription'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];



    $sql = "INSERT INTO `joinus`.`joinus` (`name`, `gender`, `weight`, `bodytype`, `target`, `subscription`, `address`,`phone`) VALUES ('$name', '$gender', '$weight', '$bodytype', '$target', '$subscription', '$address', '$phone');";

    // echo $sql;
    if ($con->query($sql) == true) {
        // echo "successfully executed";
        $insert = true;
    } else {
        echo "not inserted: $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>join us</title>
    <link rel="stylesheet" href="joinus.css">
</head>

<body>
    <div class="heading">
        <h1>MEMBERSHIP</h1>
        <!--<?php
            if ($insert == true) {
                echo "data saved in the form successfully";
            }
            ?>-->
    </div>

    <div class="form">
        <form action="join.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your Name"><br>
            <input type="text" name="gender" id="gender" placeholder="Your Gender"><br>
            <input type="number" name="weight" id="weight" placeholder="Weight in Kg"><br>

            <label for="bodytype"><br> </label>
            <select name="bodytype" id="bodytype">
                <option value="Skinny"> Skinny</option>
                <option value="Fat"> Fat</option>
                <option value="Overweight"> Overweight</option>
                <option value="Obese">Obese</option>
            </select><br>
            <label for="target"><br> </label>
            <select name="target" id="target">
                <option value="loose weight"> Loose Weight</option>
                <option value="build muscle"> Build Muscle</option>
                <option value="gain weight"> Gain Weight</option>
                <option value="just for fitness"> Just For Fitness</option>
            </select><br>
            <label for="subscription"> <br></label>
            <select name="subscription" id="subscription">
                <option value="monthly"> Monthly</option>
                <option value="quaterly"> Quaterly</option>
                <option value="half yearly"> Half Yearly</option>
                <option value="yearly"> Yearly</option>
            </select>
            <input type="text" name="address" id="address" placeholder="Address">
            <input type="number" name="phone" id="phone" placeholder="Phone No."><br>
            <button class="btn">Submit</button>




        </form>
    </div>
</body>

</html>