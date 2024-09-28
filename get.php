<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <style>
        body {
            background-color: #3A6D8C;
            display: flex;
            justify-content: center;
            text-align: center;
            font-family: 'Poppins';
        }

        .icon {
            width: 100px;
        }
        .divImg{
            display:flex; justify-content:center
        }
        .welcomeContainer {
            background-color: white;
            padding: 30px;
            width: 30%;
            border-radius: 30px;
            font-size: 20px
        }
    </style>
</head>

<body>
    <div class="welcomeContainer">
        <div class="divImg">
            <img src="hello.png" alt="hello-icon" class="icon" />
        </div>
        <div>
            <h3>Selamat Datang, <?php echo $_GET["nama"]; ?>!<br></h3>
            <p> NIM kamu adalah <?php echo $_GET["nim"]; ?></p>
        </div>
    </div>
</body>

</html>