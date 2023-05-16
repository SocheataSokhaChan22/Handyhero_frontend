@extends('layout.main')
@section('content')
<section class="container bg-white dark:bg-gray-900 flex justify-center items-center h-screen">
    <div class="grid max-w-screen-xl px-4 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 font-semibold tracking-tight leading-none text-3xl md:text-5xl xl:text-4xl dark:text-white"
                style="color: #2C6775;">
                Book Fence and gate repair
            </h1>
            <span class="bg-cyan-500 shadow-lg shadow-cyan-500/50 p-2 text-xs rounded-full"><i
                    class="fa fa-briefcase pr-2 "></i>Handyman
            </span>
            <p style="color: #2C6775;" class="mt-3 tracking-tight my-2 lead">from <span
                    class=" font-semibold text-sm/11">៛20,000</span></p>
           
                <h2 class="mr-auto tracking-tight my-2 lead">
                    <span style="color: #2C6775;" class="font-semibold">Service</span> by
                    <a style="color:#1B9C85" href="/home" class="underline font-bold">FixMeHome</a>
                    <span class="rounded-full bg-cyan-500 text-xs p-2">logo</span>
                </h2>
               
    

            <p class="max-w-2xl my-3 font-semibold text-black  lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From
                Please fill information below for our service provider contact you</p>

            <form>
                <div class="flex items-start mb-4">
                    <input type="text" id="fname"
                        class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="First Name" required>

                    <input type="name" id="lname"
                        class="ml-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Last Name" required>
                </div>
                <div class="flex items-start mb-4">
                    <input type="tel" id="tel"
                        class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Phone Number" required>

                    <input type="email" id="email"
                        class="ml-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Email" required>
                </div>
                <div class="mb-4">
                    <input type="text" id="add"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Street Address" required>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-10 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

            </form>
        </div>
    </div>

</section>

@endsection