<?php include 'views/header.php' ?>

<div class="h-screen bg-kuning flex flex-col justify-center items-center">
    <div>
        <h1 class="text-4xl text-white font-poppins pb-10 font-bold">Selamat Datang</h1>
    </div>
    <div class="w-full px-10 ">
        <form class="bg-white/30 p-3 rounded-md">
            <div class="mb-6">
                <input type="text" id="username" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-hijau focus:outline-none focus:ring-0 focus:border-hijau peer" required="" placeholder="Username">

            </div>
            <div class="mb-6">
                <input type="password" id="password" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-hijau focus:outline-none focus:ring-0 focus:border-hijau peer" required="" placeholder="Password">
            </div>
            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="">
                </div>
                <div class="ml-3 text-sm">
                    <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                </div>
            </div>
            <button type="submit" name="login" class="text-white bg-hijau hover:bg-hijau focus:ring-4 focus:outline-none focus:ring-hijau font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-hijau dark:hover:bg-hijau dark:focus:ring-hijau">Submit</button>
        </form>
    </div>
</div>