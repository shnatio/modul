<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script type="text/javascript" src="{{ URL::asset('js/main.min.js') }} "></script>
    <script src="https://cdn.tailwindcss.com"></script>

<body class="bg-[url('/img/cvr.jpg')]">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Welcome to</h2>
            <h4 class=" text-center text-xl leading-9 tracking-tight text-white">JKT48 Official Shop</h4>
        </div>

        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        <div>
                    <button type="btn"
                        class="flex w-full justify-center rounded-md bg-red-800 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log In</button>
                </div>
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <div>
                    <button type="btn"
                        class="flex w-full justify-center rounded-md bg-red-800 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                </div>
                            </a>
                        @endif
                    @endauth
                </div>
                <div class="flex mx-[20%] my-[5%] items-center gap-[7%]">

                <div>
                
                <div class="w-[100%] ">
		<h1 class="text-center text-2xl text-white py-4">Best Seller Menu</h1>
		<div class="grid grid-cols-4 gap-2 container mx-auto items-center">
			<div><img class="mx auto" src="{{URL::asset('/img/reboost.jpg'); }}">
				<p class="py-2 text-white text-center text-xs">T-Shirt Reboost</p></div>
			<div><img class="mx-auto" src="{{URL::asset('/img/ls.jpg'); }}">
				<p class="py-2 text-white text-center text-xs">Lightstick NewEra</p></div>
			<div><img class="mx-auto" src="{{URL::asset('/img/pc.jpg'); }}">
				<p class="py-2 text-white text-center text-xs">Photo Card: Sushi No Hi</p></div>
			<div><img class="mx-auto" src="{{URL::asset('/img/ts.jpg'); }}">
				<p class="py-2 text-white text-center text-xs">Birthday T-Shirt Shani</p></div>
		</div></div>

            @endif

</body>

</html>
