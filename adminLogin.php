<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Welcome Admin!</title>
        <style>
            body{
                background: linear-gradient(to bottom,#053d02,#187f13,#18d22e,#60ff04);;
                background-size: cover;
                margin: auto;
                padding: 0;
            }

            form{
                margin-top: 300px;
                margin-left: 90px;
                max-width: 800px;
                text-align: center;
                padding: 0 20px;
                background-color: none;
            }

            .container-form {
                text-align: center;
                position: block;
                display: block;
                justify-content: center;
                align-items: center;
                height: 100vh; 
               
            }

            .logo-container {
                text-align: center; 
            }

            .logo {
                max-width: 90%;
                margin-top: auto;
            }
            p{
                text-align: left;
                margin-bottom: 5px;
                color: white;
                font-size: 18px;
                font-family: "Poppins", sans-serif;
                font-weight: 400;
                font-style: normal;
                
            }
            .username_txtbox{
                position: relative;
                margin: 15px 0;
            }
            .username_txtbox input{
                background-color: whitesmoke;
                outline: none;
                width: 100%;
                color: black;
                height: 60px;
                font-size: 15px;
                border-radius: 25px;
                padding: 10px; 
                box-sizing: border-box; 
                text-decoration: none;
                border:none;
                font-family: "Poppins", sans-serif;
                font-weight: 400;
                font-style: normal;
            }
            .password_txtbox{
                position: relative;
                margin: 15px 0;
            }
            .password_txtbox input{
                background-color: whitesmoke;
                outline: none;
                width: 100%;
                color: black;
                height: 60px;
                font-size: 15px;
                border-radius: 25px;
                padding: 10px; 
                box-sizing: border-box; 
                text-decoration: none;
                border:none;
                font-family: "Poppins", sans-serif;
                font-weight: 400;
                font-style: normal;
            }
            .loginBtn{
                height: 80px;
                width: 50%;
                margin-top: 50px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                border: none;
                outline: none;
                background: #053d02;
                background-size: 200%;
                color: white;
                font-size: 16px;
                cursor: pointer;
                border-radius: 50px;
                font-family: "Poppins", sans-serif;
                font-weight: 400;
                font-style: normal;
            }
            .loginBtn:hover {
                background-color: #0bd830; 
                background-position: right;
                font-size: 16px;
                color: black;
            }
            .GoBackBtn {
                
                text-decoration: none;
                height: 80px;
                width: 50%;
                margin-top: 15px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                border: none;
                outline: none;
                background: #053d02;
                background-size: 200%;
                color: white;
                font-size: 16px;
                font-family: "Poppins", sans-serif;
                font-weight: 400;
                font-style: normal;
                cursor: pointer;
                border-radius: 50px;
                text-align: center;
                line-height: 45px;
               
            }

            .GoBackBtn:hover {
                background-color: #0bd830;
                background-position: right;
                font-size: 16px;
                color: black;
            }

            ::placeholder {

                font-size: 20px; 
                color: black;     
            }
        </style>
    </head>
    <body>
        <div class = "container-form">
            <form class = "form">
        <div class = "logo-container">
             <img src="logoEarn.png" class = "logo" alt="logo">
            <p>Username:</p>
            <div class="username_txtbox">
                <input type="text" placeholder="Enter username" name="userName">
            </div>
            <p>Password:</p>
            <div class="password_txtbox">
                <input type="passWord" placeholder="Enter password" name="passWord">
            </div>
            <input type="submit" value="Login" class="loginBtn" name="login_Btn">
            <button type = "button" class="GoBackBtn" onclick="redirectToForm()">Go Back</button>
            </div>
        </form>

        <script>
        function redirectToForm() {
            window.history.back();
        }
    </script>

    </body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "owner_login"); // specify the database name
if(isset($_POST['login_Btn'])){
    $userName = $_POST['userName'];
    $passWord = $_POST['passWord'];
    $sql = "SELECT * FROM owner_details WHERE userName = '$userName' AND passWord = '$passWord'";
    $result = mysqli_query($conn, $sql); // execute the query

    if ($result) { // check if the query was successful
        if (mysqli_num_rows($result) > 0) { // check if any rows were returned
            // Redirect to dashboard if username and password match
            header('Location: adminDashboard.php');
            exit(); // stop further execution
        } else {
            echo "<script>alert('Invalid username or password!');</script>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_free_result($result); // free the result set
    mysqli_close($conn); // close the connection
}
?>