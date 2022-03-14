<!DOCTYPE html >

<html lang="en" class="font-mono bg-gradient-to-r from-indigo-800 to-fuchsia-900 ">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPV TFT</title>
    <link rel="icon" href="./img/tft.png">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="main.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="javascript.js"></script>
    
</head>

<body>

<div class="flex items-center justify-center min-h-screen ">
    <div class="px-8 py-6 text-left bg-white shadow-2xl shadow-indigo-400">

        <h3 class="text-2xl font-bold text-center">Login to your account</h3>
        <form method="POST" action="home.php">
            <div class="mt-4">
                <div>
                    <label class="block" for="email">Username<label>
                            <input type="text" required minlength="1" name="nombre" placeholder="Email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" required minlength="1" name="pass" placeholder="Password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="flex items-baseline justify-between">
                    <button name="Login" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
