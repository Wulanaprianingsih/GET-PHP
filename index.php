<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
  <style>
    body {
      background-color: #3A6D8C;
      display: flex;
      justify-content: center;
      font-family: 'Poppins';
    }
    input[type=text] {
      margin-left: 10px;
      border-radius: 15px;
      border-color: #3A6D8C;
      width: 75%;
      padding-left: 12px;
      font-size:15px
    }
    input[type=submit] {
      margin-top: 20px;
      font-size: 15px;
      background-color: #C7253E;
      color: white;
      padding: 8px;
      border-radius: 15px;
      border-style: none;
      width: 25%;
      cursor: pointer;
      
    }
    input[type=submit]:hover {
      background-color: #821131;
    }
    .formContainer{
      background-color:white; width: 30%; border-radius: 30px; padding:30px;font-size:20px
    }
  </style>
</head>

<body>
  <div class="formContainer">
    <form action="get.php" method="get">
      <h2 style="text-align:center">Formulir</h2>
      <div style="display:flex;">
        <label style="width:25%">NIM:</label>
        <input type="text" name="nim" /><br />
      </div>
      <div style="display:flex; margin-top:20px;">
        <label style="width:25%">Nama:</label>
        <input type="text" name="nama" /><br />
      </div>
      <input type="submit" />
    </form>
  </div>
</body>

</html>