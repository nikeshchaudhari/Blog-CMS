<?php 
include "config.php";
if(isset($_POST["register-btn"])){
    $fullName = $_POST["full_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmpassword"];
    $hash = password_hash($password,PASSWORD_DEFAULT);

    // check empty
    if($fullName==""||$email==""||$password==""||$confirmPassword==""){
        echo "All fields are required";
        // exit;
    }
    // check match
    if($password !== $confirmPassword){
        echo "password doesnot match";
        // exit;
    }

    $query="INSERT INTO user(fullname,email,password)VALUES('$fullName','$email','$hash')";
$data = mysqli_query($conn,$query);
// echo "Register successful";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog || Register</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
    <main class="w-full h-screen flex justify-center bg-gray-200/100">
        <div class="w-[400px] h-[450px] m-auto bg-white/20  shadow-xl p-2 rounded">
            <h2 class="text-center text-[25px] font-bold">Register</h2>
            <form method="post" class="flex flex-col m-2">
                <div class="flex flex-col">
                    <label for="username" class="mb-2">FullName</label>
                <input type="text" id="username" name="full_name" placeholder="Enter FullName" class="border p-2 rounded mb-2 ">
                </div>
        
              <div  class="flex flex-col">
                  <label for="email" class="mb-2">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Email" class="border p-2 rounded mb-4">
              </div>
                <div  class="flex flex-col">
                     <label for="password" class="mb-2">Password</label>
                <input type="password" id="password" name="password" placeholder="Create New Password" class="border p-2 rounded mb-2 ">
                </div>
                 <div  class="flex flex-col">
                      <label for="conpassword" class="mb-2">Confirm Password</label>
                <input type="password" id="conpassword" name="confirmpassword" placeholder="Confirm Password" class="border p-2 rounded mb-4">
                 </div>
                <button type="submit" name="register-btn" class="bg-gray-800 p-2 text-white rounded-lg hover:bg-gray-700 cursor-pointer">Register</button>
            </form>
          
        </div>
    </main>
</body>
</html>