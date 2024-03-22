<html>
<head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
            
        <title>Recycle Earn</title>
    <style>
        body{
            
            background: linear-gradient(to bottom,#053d02,#187f13,#18d22e,#60ff04);;
            background-size: cover;
            margin: auto;
            padding: 0;
        }
        .container{
            text-align: center;
            margin-top: auto;
            display: flex;
            flex-direction: column
        }
 
        p{
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
            text-align: center;
            margin-bottom: 20px;
            color: #ffff;
            font-size: 40px;
        }
        .studentBtn{
            height: 100px;
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
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 30px;
            cursor: pointer;
            border-radius: 50px;
        }
        .studentBtn:hover {
            background-color: #0bd830;
            background-position: center;
            font-size: 30px;
            color: black;
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;

        }
        .adminBtn{
            height: 100px;
            width: 50%;
            margin-top: 25px;
            margin-left: auto;
            margin-right: auto;
            display: block;
            border: none;
            outline: none;
            background: #053d02;
            background-size: 200%;
            color: white;
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 30px;
            cursor: pointer;
            border-radius: 50px;
        }
        .adminBtn:hover {
            background-color: #0bd830; 
            background-position: center;
            font-size: 30px;
            color: black;
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .logo-container{
            text-align: center; 
            
        }

        form   {
            margin-top: 500px;
            max-width: 800px;
            margin: auto;
            padding: 0 20px;
            background-color: none;

        }
        
        .logo {
          max-width: 90%;
          margin-top: auto;
         
        }

        .container-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Set height to 100% of the viewport height */
            margin: 0;

        }

    </style>
</head>
<body>
        <div class = "container-form">
    <form class = "form">
        <div class = "logo-container">
        <img src="logoEarn.png" class = "logo" alt="logo">
    </div>
        <p>Select your Role:</p>
        <div class="container">
            <input type="submit" value="Student User" class="studentBtn" name="student_Btn" formaction="studentLogin.php" target="_blank">
            <input type="submit" value="System Admin" class="adminBtn" name="admin_Btn" formaction="adminLogin.php" target="_blank">
        </div>
    </form>
</body>
</html>