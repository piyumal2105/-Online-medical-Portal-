<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="..//css/sign-up.css">
</head>
<body>

    <div class="form-box">
                <!--text description field-->
                <div class="description-field" id="desc-field">

                    <div class="home-btn">
                        <img id="back-logo" src="..//images/sign up/back logo.png" alt="">
                        <button type="button" id="H-btn"><a href="..//html/About Us.html">Home</a></button>
                    </div>
        
                    <div class="text-description">
                        <h2>Welcome to the health care <br> Medical Portal</h2>
        
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing <br> elit. Est quidem impedit nobis in porro provident <br> obcaecati eaque officia? Possimus ipsa cum aut <br> corporis veritatis saepe illum, corrupti in animi <br> praesentium! Minus totam non reprehenderit <br> accusamus iusto, esse rerum autem quidem <br> temporibus delectus quia commodi placeat! <br> Molestias blanditiis saepe id rerum.</p>
                    </div>
        
                    <div class="read-more">
                        <button type="button" id="RM-btn"><a href="..//html/About Us.php">Read more</a></button>
                    </div>
        
                </div>
                <!--text description field end-->

        
        <!--form-->
        <form id="form-container" action="..//includes/signup-val.php" method="POST">
            <h2>Sign up</h2>

            <div class="input-field-first">
                <label>Name : </label>
                <div class="first-input-combine">
                    <input type="text" name="first-name" id="first-name" placeholder="First Name" required>
                    <input type="text" name="last-name" id="last-name" placeholder="Last Name" required>
                </div>
            </div>

            <div class="input-field">
                <label>Email : </label>
                <input type="email" name="email" id="e-mail" placeholder="Email" required>
            </div>

            <div class="input-field">
                <label>Address : </label>
                <input type="text" name="address" id="address" placeholder="Address" required>
            </div>

            <div class="input-field">
                <label>Gender : </label>
                <select name="gender" id="gender" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="input-field">
                <label>Date Of Birth : </label>
                <input type="date" name="DOB" id="DOB" required>
            </div>

            <div class="input-field">
                <label>Phone : </label>
                <input type="text" name="phone" id="phone" placeholder="Phone" required>
            </div>

            <div class="input-field">
                <label>Password : </label>
                <input type="text" name="password" id="password" placeholder="Password" required>
            </div>

            <div class="input-field">
                <label>Confirm Password : </label>
                <input type="text" name="confirm-password" id="confirm-password" placeholder="Confirm Password" required>
            </div>

            <div class="submit">
                <button id="sign-up" type="submit" name="sign-up" value="Submit">sign up</button>
            </div>

            <div class="sign-in-link">
                <label><a href="..//html/log-in.php">Sign in</a></label>
            </div>

        </form>
        <!--form end-->
    </div>

    <script src="..//js/sign-up.js"></script>

</body>
</html>