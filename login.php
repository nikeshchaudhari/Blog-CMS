<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>
    <main class="w-full h-screen flex justify-center bg-gray-100/20  ">
       <div class="w-[400px] h-[300px] m-auto bg-white/20  shadow-xl p-2 rounded">
        <h2 class="text-center text-[25px] font-bold">Login</h2>
         <form method="post" class="flex flex-col m-2">
            <label for="username" class="mb-2">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter username" class="border p-2 rounded mb-2 ">
            <label for="pass" class="mb-2">Password</label>
            <input type="password" id="pass" name="password" placeholder="Enter password" class="border p-2 rounded mb-4">
            <button type="submit" name="login-btn" class="bg-gray-900 p-2 text-white rounded-lg hover:bg-gray-800 cursor-pointer">Login</button>
        </form>
       </div>
    </main>
</body>

</html>