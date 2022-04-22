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

        <form action="GROUP8_MemberInfo.php" method="post">
            <div class="base">
                <h1>Registration</h1>
                <div class="row row1">
                    <div>
                        <p>Name:</p>
                    </div>
                    <div class="input">
                        <input type="text" name="lName" placeholder="Last Name" required>
                        <input type="text" name="fName" placeholder="First Name" required>
                        <input type="text" name="mInitial" placeholder="Middle Initial" required>
                    </div>
                </div>

                <div class="row row2">
                    <div>
                        <p>Address:</p>
                        <input type="text" name="address" placeholder="House No, Street Name, Barangay, Municipality" required>
                    </div>
                </div>

                <div class="row row3">
                    <div>
                        <p>Contact Number:</p>
                        <input type="number" name="contact" placeholder="09*********" maxlength="11" required>
                    </div>
                    <div>
                        <p>Date of Birth:</p>
                        <input type="text" name="dateBirth" placeholder="YYYY-MM-DD" required>
                    </div>
                    <div>
                        <p>Gender:</p>
                        <select name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
    
                <div class="row row4">
                    <div>
                        <p>Office Address:</p>
                        <input type="text" name="offAddress" placeholder="Building No., Street Name, District Name, Municipality" required>
                    </div>
                </div>

                <div class="row row5">
                    <div>
                        <p>Position:</p>
                        <input type="text" name="position" required>
                    </div>
                    <div>
                        <p>Office Contact:</p>
                        <input type="tel" name="offContact" placeholder="09*********" required>
                    </div>
                </div>

                <div class="row row6">
                    <div>  
                        <p>Employment Status:</p>
                        <select name="employment">
                            <option value="Permanent">Permanent</option>
                            <option value="Casual">Casual</option>
                        </select>
                    </div>
                    <div>
                        <p>Monthly Salary:</p>
                        <select name="salary">
                            <option value="Below Php10,000.00">Below Php10,000.00</option>
                            <option value="Php10,000.00 - Php20,000.00">Php10,000.00 - Php20,000.00</option>
                            <option value="Above Php20,000.00">Above Php20,000.00</option>
                        </select>
                    </div>
                </div>

                <div class="row row7">
                    <div>
                        <p>Co-Borrower:</p>
                        <input type="text" name="coborrower">
                    </div>
                </div>

                <div class="row8">
                    <input type="checkbox" name="agree" required>
                    <label>I hereby certify that the above informations are true and agree to send this information to the company.<label>
                </div>

                <div class="btn">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Clear Form">
                </div>
            </div>
        </form>
    </div>
    <div class="footer">
        <h6>copyright Group8 2022</h6>
    </div>
</body>
</html>