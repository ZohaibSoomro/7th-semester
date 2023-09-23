<?php
    session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19SW42</title>
    <style>
    .nav {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        background-color: grey;
        color: white;
    }

    button {
        padding: 10px 25px;
        background-color: lightblue;
        border-radius: 10px;
    }

    .form {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        padding-top: 10vh;
    }

    .formContent {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 2px solid red;
        border-radius: 20px;
        width: 30%;
        height: 40vh;
        background-color: azure;

    }

    .field {
        display: flex;
        justify-content: center;
        margin: 10px;
    }

    input {
        margin: 10px;
    }
    </style>
</head>

<body>
    <div class="nav">
        <h2>Menu Bar</h2>
        <button>Logout</button>
    </div>

    <div class="form">
        <div class="formContent">
            <div class="field">
                <h3>User name</h3>
                <input type="text">
            </div>

            <div class="field">
                <h3>Password</h3>
                <input type="text">
            </div>
            <div class="field">
                <button>Login</button>
            </div>
        </div>
    </div>
</body>

</html>