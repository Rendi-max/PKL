<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Api dan Web</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-contain sm:bg-cover" style="background-image: url('background1.png')">
    <div class="w-[300px] h-[400px] sm:w-[400px] sm:h-[500px] bg-white rounded-xl mx-auto my-10 py-3 sm:py-5">
            <form action="" method="post">
                <div class="font-serif py-5 sm:py-10">
                    <h2 class="text-xl sm:text-2xl text-center font-bold">Register Form</h2>
                    <div class="space-y-4 px-6 sm:px-10">
                        <div class="">
                            <p class="text-[13px] sm:text-lg font-bold">Email</p>
                            <input type="text" class="border-2 py-2 px-2 rounded-xl w-full border-purple-600 hover:border-blue-500 focus:outline-none focus:border-blue-600" name="email" required>
                        </div>
                        <div class="">
                            <p class="text-[13px] sm:text-lg font-bold">Name</p>
                            <input type="text" class="border-2 py-2 px-2 rounded-xl w-full border-purple-600 hover:border-blue-500 focus:outline-none focus:border-blue-600" name="name" required>
                        </div>
                        <div class="">
                            <p class="text-[13px] sm:text-lg font-bold">Password</p>
                            <input type="password" class="border-2 py-2 px-2 rounded-xl w-full border-purple-600 hover:border-blue-500 focus:outline-none focus:border-blue-600" name="password" required>
                        </div>
                        <div class="">
                            <a href="/" class="text-blue-600 text-decoration-none">- Back to Login</a>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="bg-blue-600 hover:bg-purple-600 text-white rounded-lg py-1 px-6 font-bold">Register</button>
                        </div>
                    </div>
                </div>
            </form>
    </div>
</body>
</html>