<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="background">
        <div class="header">
            <H1>Group8 Cooperative Incorporated</H1>
            <h3>5 Most Cute St. Dimatagpuan City</h3>
            <h3>Telephone #: 222-1211</h3>
        </div>

        <div class="information">
            <?php
                $lname = $_POST["lName"];
                $fname = $_POST["fName"];
                $minitial = $_POST["mInitial"];
                $address = $_POST["address"];
                $contact = $_POST["contact"];
                $dateBirth = $_POST["dateBirth"];
                $gender = $_POST["gender"];
                $offAddress = $_POST["offAddress"];
                $position = $_POST["position"];
                $offContact = $_POST["offContact"];
                $employment = $_POST["employment"];
                $salary = $_POST["salary"];
                $coborrower = $_POST["coborrower"];
            ?>

            <h1>Personal Information</h1>
            <div class="personal">
                <div class="name">
                    <?php echo "<h3>$lname, $fname $minitial</h3>"; ?>
                </div>
                <div class="picture">
                    <img src="img/profile.png" alt="profile">
                </div>
            </div>
            <div class="fullinfo">
                <div class="Info">
                    <h5>Address:</h5>
                    <h5>Contact:</h5>
                    <h5>Date of Birth:</h5>
                    <h5>Gender:</h5>
                    <h5>Office Address:</h5>
                    <h5>Position:</h5>
                    <h5>Office Contact:</h5>
                    <h5>Employment:</h5>
                    <h5>Salary:</h5>
                    <h5>Co-Borrower:</h5>
                </div>
                <div class="myInfo">
                    <?php 
                        echo "<h5>$address</h5>";
                        echo "<h5>$contact</h5>";
                        echo "<h5>$dateBirth</h5>";
                        echo "<h5>$gender</h5>";
                        echo "<h5>$offAddress</h5>";
                        echo "<h5>$position</h5>";
                        echo "<h5>$offContact</h5>";
                        echo "<h5>$employment</h5>";
                        echo "<h5>$salary</h5>";
                        echo "<h5>$coborrower</h5>";
                    ?>
                </div>
            </div>
            <div class="return">
                <a href="GROUP8_Registration.php">Go back to Registration</a>
            </div>
        </div>
    </div>
    <div class="footer">
        <h6>copyright Group8 2022</h6>
    </div>
</body>
</html>