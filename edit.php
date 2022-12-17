<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body>

    <div class="container">
            <form action="edit.php" method="POST" name="update_user" class="login-email">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit Siswa</p>
                <div class="input-group">
                    <input type="text" placeholder="Nama" name="name" value=<?php echo $name;?> required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Email" name="email" value=<?php echo $email;?> required>
                </div>
                <div class="input-group">
                    <input type="number" placeholder="Mobile" name="mobile" value=<?php echo $mobile;?> required>
                </div>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <div class="input-group">
                    <button type="sumbit" name="submit" class="btn">Ubah</button>
                </div>
            </form>
    </div>
    
    <!-- <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form> -->
</body>
</html>