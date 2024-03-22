<html>
    <head>
        <title>Welcome</title>
        <style>
           body{
                min-height: 100vh;
                background: linear-gradient(to bottom,#053d02,#187f13,#18d22e,#60ff04);;
            }

            form{
                background:linear-gradient(to bottom,#053d02,#187f13,#18d22e,#60ff04);
                max-width: 600px; 
                width: auto; 
                height: auto; 
                padding: 75px 50px;
                position:absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                border-radius: 20px;
                border-color: black;
            }

            h1 {
                
                text-align: center;
                margin-bottom: 65px;
                color: white;
                font-size: 45px;
                font-family: cursive;                
                font-weight: 400;
            }
            p{
                text-align: left;
                margin-bottom: 5px;
                color: white;
                font-size: 18px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
            }
            .textBoxdiv{
                
                position: relative;
                margin: 15px 0;
            }
            .textBoxdiv input{
                margin-top: 50px;
                background-color: whitesmoke;
                outline: none;
                width: 100%;
                color: black;
                height: 40px;
                font-size: 15px;
                border-radius: 25px;
                padding: 10px; 
                box-sizing: border-box; 
                text-decoration: none;
                
                
            }
            .loginBtn{
                height: 45px;
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
               
            }
            .loginBtn:hover {
                background-color: #0bd830;
                background-position: right;
                font-size: 16px;
                color: black;
            }
            .error-message {
                text-align: center;
                margin-top: 10px;
                margin-left: auto;
                margin-right: auto;
                padding: 10px;
                background-color: #ffcccc; 
                color: #cc0000;
                border: 1px solid #cc0000; 
                border-radius: 5px; 
                width: 300px; 
            }


            .GoBackBtn {
                
                text-decoration: none;
                height: 45px;
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
                cursor: pointer;
                border-radius: 50px;
                text-align: center;
                line-height: 45px; 
                font-family: Arial, Helvetica, sans-serif;
            }

            .GoBackBtn:hover {
                background-color: #0bd830;
                background-position: right;
                font-size: 16px;
                color: black;
            }

            .logo {
            
            width: 300px; 
            height: auto; +
            }

            .bordertext {

                border: 0px solid white;
            }
        
        </style>
    </head>
    <body>
        <form method="post" action="studentLogin.php">
            <img src="logoEarn.png" class = "logo" alt="logo">
            <p>ID Number:</p>
        <div class="textBoxdiv">
            <input type="text" class = "bordertext" placeholder="Enter School ID number"> 
            <button type="submit" class="loginBtn" onclick = "redirectToLoginDashboard()"> Login </button>
            <button type = "button" class="GoBackBtn" onclick="redirectToForm()">Go Back</button>
        </div>
        </form>

<script>
    function redirectToForm() {
        window.location.href = "form0.php";
    }

    function redirectToLoginDashboard() {
        window.location.href = "adminDashboard.php"
    }
</script>

    </body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "studentdetails"); // specify the database name
if(isset($_POST['login_Btn'])){
    $idnumber = $_POST['idnumber'];
    $sql = "SELECT * FROM studtable WHERE idnumber = '$idnumber'";
    $result = mysqli_query($conn, $sql); // execute the query

    if ($result) { // check if the query was successful
        if (mysqli_num_rows($result) > 0) { // check if any rows were returned
            // Redirect to dashboard if ID number is registered
            header('Location:studentDashboard.php');
            exit(); // stop further execution
        } else {
            echo "<script>alert('ID number not registered!');</script>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_free_result($result); // free the result set
    mysqli_close($conn); // close the connection
}
?>







