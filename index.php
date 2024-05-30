<?php include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Josefin Sans', sans-serif;
    }







    /* main2 start */





    .datas {
        border-radius: 10px;
        box-shadow: 0 5px 12px rgba(0, 0, 0, 0.5);
    }

    .data {
        width: 100%;
        height: 50px;
        border: none;
        outline: none;
        margin-top: 15px;
        box-shadow: 0px 5px 5px -5px black !important;
        padding-left: 20px;
    }

    .data3,
    .data4 {
        box-shadow: 10px 5px 10px -10px black;
    }

    .data5 {
        margin-top: 20px;
        height: 120px;
    }

    .data6 {
        margin-top: 30px;
        height: 40px;
        width: 160px;
        border-radius: 10px;
        background-color: #91493B;
        color: white;
        border: none;
        font-weight: 550;
        font-size: 16PX;
        transition: 0.5s;
        box-shadow: 0px 5px 5px -5px black;

    }
</style>

<body>
    <form action="" method="post">
        <div class="container main3 mt-5">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 datas">
                    <div class="container mt-2">
                        <div class="row">
                            <div class="col-lg-12"><input type="text" class="data data1" id="box1" name="name" placeholder="Name" pattern="^([a-zA-Z]|\s)*$" required></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6"><input type="email" class="data data3" name="email" id="box3" placeholder="Enter Email" required>
                            </div>

                            <div class="col-lg-6"><input type="text" class="data data4" id="box4" name="number" placeholder="Enter Number" pattern="^([0-9]{11,11})*$" required></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12"><textarea name="issue" id="" cols="30" rows="10" class="data data5" id="box5" onclick="rafay5()" placeholder="Describe Your Issue" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-12"><button type="submit" name="btn" class=" button1 data6">Send</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Form End -->

</body>

</html>
<?php
if (isset($_POST["btn"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $issue = $_POST["issue"];

    $insert = "INSERT INTO `php2`(name, email, number, issue) VALUES ('$name','$email','$number','$issue')";

    $result = mysqli_query($conn, $insert);

    if ($result) {
        echo "We will solve your problem ASAP";
        header("location:contactdata.php");
    } else {
        echo "Some Error Problem";
    }
}

?>