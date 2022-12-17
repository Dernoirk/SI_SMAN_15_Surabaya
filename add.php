<html>
<head>
    <title>Add Users</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body>
    
    <div class="container">
            <form action="add.php" method="POST" name="form1" class="login-email">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">Tambah Siswa</p>
                <div class="input-group">
                    <input type="text" placeholder="Nama" name="name" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Email" name="email" required>
                </div>
                <div class="input-group">
                    <input type="number" placeholder="Mobile" name="mobile" required>
                </div>
                <div class="input-group">
                    <button type="sumbit" name="Submit" class="btn">Tambah</button>
                </div>
            </form>
    </div>
    



    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
        
        // Show message when user added
        // echo "User added successfully. <a href='siswa.php'>Lihat Siswa</a>";
        header("Location:siswa.php");
    }
    ?>
</body>
</html>