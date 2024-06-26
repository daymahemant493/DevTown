<?php
include('letter_image.php');
include('comment_server.php');
error_reporting(0);
$con = new mysqli('localhost', 'root', '', 'devtown');
if (!$con)
    die(mysqli_error($con));
?>
<html lang="en">

<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="png" href="Logo/Circle_1980x1980.png" />
    <link rel="stylesheet" href="style.css" />
    <title>DevTown About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="overflow: unset; -webkit-tap-highlight-color: transparent; font-family: 'Rubik', sans-serif;">
    <!-- data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0"  -->
    <div id="__next">
        <div class="overflow-hidden animate-opacityanim bg-[#fff]">
            <div class="fixed z-[9999] w-full">
                <!-- Navbar -->
                <nav class="navbar h-16 sm:h-20 backdrop-blur-sm" style="box-shadow: rgba(157, 157, 157, 0.3) 0 4px 10px">
                    <ul class="flex justify-between items-center">
                        <li class="flex justify-center items-center">
                            <a href="index.php"><img src="Logo/Circle_1980x1980.png" alt="DevTown" class="w-14 m-1 p-1 sm:w-[74px]" /></a>
                            <p class="text-3xl sm:text-[40px] text-[#30559E]" style="font-family: 'Lobster', cursive;">
                                DevTown
                            </p>
                        </li>
                        <li class="flex justify-center items-center hidden lg:block lg:text-xl xl:text-2xl"><a href="about.php">About us</a></li>
                        <li class="flex justify-center items-center hidden md:block md:text-xl xl:text-2xl"><a href="Course.php">Courses</a></li>
                        <li class="flex justify-center items-center hidden md:inline-block md:text-xl xl:text-2xl relative">
                            <!--<div class="compiler bg-[#e0f1ff] shadow-lg rounded-2xl w-72 -ml-10 mt-6 absolute animate__animated" id="compiler">
                            <ul class="flex flex-col justify-start">
                                <li class="text-sm px-5 pt-5 text-gray-600"><a href="final_compiler/home.php"><span class="text-xl font-medium text-gray-700 hover:text-black">Programming Compiler</span><br><span>Write and run code in multiple <br>programming language from anywhere.</span></a></li>
                                <li class="text-sm p-5 text-gray-600"><a href="codeeditor/index.php"><span class="text-xl font-medium text-gray-700 hover:text-black">Web Designing</span><br><span>Write and run code for Web <br>Designing from anywhere.</span></a></li>
                            </ul>
                        </div> -->
                            <div class="hover-container">
                                <h1 id="labs" class="cursor-pointer">Labs</h1>
                                <div class="compiler bg-[#e0f1ff] shadow-lg rounded-2xl w-72 -ml-10 mt-6 absolute animate__animated" id="compiler" style="display: none;">
                                    <ul class="flex flex-col justify-start">
                                        <li class="text-sm px-5 pt-5 text-gray-600"><a href="final_compiler/home.php"><span class="text-xl font-medium text-gray-700 hover:text-black">Programming Compiler</span><br><span>Write and run code in multiple <br>programming language from anywhere.</span></a></li>
                                        <li class="text-sm p-5 text-gray-600"><a href="codeeditor/index.php"><span class="text-xl font-medium text-gray-700 hover:text-black">Web Designing</span><br><span>Write and run code for Web <br>Designing from anywhere.</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="flex justify-center items-center hidden md:block md:text-xl xl:text-2xl"><a href="Blog.php">Blog</a>
                        </li>
                        <li class="flex justify-center items-center hidden lg:block lg:text-xl xl:text-2xl"><a href="contact.php">Contact</a></li>
                        <!-- <li class="flex justify-center items-center hidden md:block md:text-xl xl:text-2xl "><a href="final_compiler/home.php" class="list-none">Compiler</a></li> -->
                        <?php
                        if (!$_SESSION['User']) {
                            echo '<li class="flex hidden md:block justify-center items-center mr-3"><a href="login.php"><button class="bg-[#30559E] text-xl sm:text-2xl md:text-xl md:font-medium md:px-5 md:py-1 w-fit px-8 sm:px-10 py-2 text-white rounded-lg flex justify-center items-center shadow-xl">Login<img src="Logo/icons8-login-64.png" alt="Login" width="38px" class="sm:w-[42px]"></button></a></li>';
                        } else {
                            echo '<li class="flex hidden md:block justify-center items-center">
                        <div class="avatar cursor-pointer flex items-center text-xl gap-3 capitalize bg-[#759DEa] py-2 px-3 font-medium rounded-full" id="avatar">';
                            echo letters_images();
                            echo $_SESSION['User'];
                            echo '</div>
                        <div class="avatar-dropdown bg-[#e0f1ff] shadow-lg rounded-2xl w-60 -ml-2 mt-5 absolute animate__animated" id="avatar-dropdown" style="display: none;">
                            <ul class="flex flex-col justify-start">
                                <li class="px-5 pt-3 flex justify-start items-center">
                                    <div>';
                            echo letters_images();
                            echo '</div>
                                    <div class="ml-2 flex flex-col items-start">
                                        <h1 class="capitalize text-lg text-gray-900">';
                            echo $_SESSION['User'];
                            echo '</h1>
                                        <small class="text-gray-700">';
                            echo $_SESSION['email'];
                            echo '</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="border-b-2 border-gray-400 mx-3 mt-2 h-1"></div>
                                </li>
                                <li>
                                    <a href="dashboard/index.php" class="hover:bg-gray-500">
                                    <div class="flex justify-center items-center gap-3 py-3">
                                        <img src="Logo/dashboard.svg" alt="" class="w-7">
                                        <h1 class="text-lg font-medium text-gray-700 hover:text-gray-950">Dashboard</h1>
                                    </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard/my_courses.php" class="hover:bg-gray-500">
                                    <div class="flex justify-center items-center gap-3 pb-3">
                                        <img src="Logo/profile.svg" alt="" class="w-8">
                                        <h1 class="text-lg font-medium text-gray-700 hover:text-gray-950">My Profile</h1>
                                    </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="border-b-2 border-gray-400 mx-3 h-1"></div>
                                </li>
                                <li>
                                <a href="logout.php" class="hover:bg-gray-500">
                                    <div class="flex justify-center items-center gap-3 py-3">
                                        <img src="Logo/power.svg" alt="" class="w-7">
                                        <h1 class="text-lg font-medium text-gray-700 hover:text-gray-950">Logout</h1>
                                    </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>';
                        }

                        ?>
                        <!-- <li class="flex hidden md:block justify-center items-center mr-3"><form method="post"><a href="login.php"><button type="submit" class="bg-[#30559E] text-xl sm:text-2xl md:text-xl md:font-medium md:px-5 md:py-1 w-fit px-8 sm:px-10 py-2 text-white rounded-lg flex justify-center items-center shadow-xl">Logout<img src="Logo/icons8-login-64.png" alt="Login" width="38px" class="sm:w-[42px]"></button></a></form></li> -->
                        <li class="flex justify-center items-center">
                            <input type="hidden" value="0" id="menu_toggle" />
                            <div class="relative flex h-[40px] w-[40px] cursor-pointer flex-col items-end justify-between p-[0.4rem] md:hidden" style="-webkit-tap-highlight-color: transparent" id="menu">
                                <span class="w-10 rounded-md py-[2px] false bg-[#011229] transition-all duration-300" id="first"></span>
                                <span class="w-8 py-[2px] rounded-md bg-[#011229] transition-all duration-300" id="second"></span>
                                <span class="w-6 false rounded-md bg-[#011229] py-[2px] transition-all duration-300" id="third"></span>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="animate__animated animate__fadeIn animate__faster absolute top-full left-0 right-0 z-[9998] backdrop-blur-lg pt-[8vh] pb-[8vh] font-rubik md:hidden  opacity-1 pointer-events-auto visible transition-all duration-300 menu" style="background-color: rgba(255, 255, 255, 0.25); box-shadow: rgba(157, 157, 157, 0.2) 0px 4px 10px; display: none;">
                    <ul class="flex flex-col items-center gap-y-6 md:hidden select-none">
                        <li class="text-center text-xl sm:text-2xl"><a href="about.php">About Us</a></li>
                        <li class="text-center text-xl sm:text-2xl"><a href="Course.php">Courses</a></li>
                        <li class="text-center text-xl sm:text-2xl"><a href="Blog.php">Blogs</a></li>
                        <li class="text-center text-xl sm:text-2xl"><a href="final_compiler/home.php">Programming Compiler</a></li>
                        <li class="text-center text-xl sm:text-2xl"><a href="codeeditor/index.php">Web Design Compiler</a></li>
                        <li class="text-center text-xl sm:text-2xl"><a href="contact.php">Contact</a></li>
                        <?php
                        if (!$_SESSION['User']) {
                            echo '<li><a href="login.php"><button class="bg-[#30559E] text-xl sm:text-2xl w-fit px-8 sm:px-10 py-2 text-white rounded-lg flex justify-center items-center shadow-lg active:outline-none active:ring-2 active:ring-[#30559E] active:ring-offset-2">Login<img src="Logo/icons8-login-64.png" alt="Login" width="38px" class="sm:w-[42px]"></button></a>
                            </li>';
                        } else {
                            echo '<li class="flex md:block justify-center items-center mr-3"><form method="post"><input type="submit" value="Logout" name="logout" class="bg-[#30559E] cursor-pointer text-xl sm:text-2xl md:text-xl md:font-medium md:px-5 md:py-1 w-fit px-8 sm:px-10 py-2 text-white rounded-lg flex justify-center items-center shadow-xl" /></form></li>';
                        }
                        ?>
                    </ul>
                    <div class="mt-6 flex w-full flex-col items-center justify-center gap-x-2 md:hidden">

                    </div>
                </div>
            </div>
        </div>
        <div class="animate__animated animate__fadeIn animate__faster absolute top-full left-0 right-0 z-[9998] backdrop-blur-lg pt-[10vh] pb-[8vh] font-rubik md:hidden  pointer-events-none hidden opacity-0 transition-all duration-300" style="background-color: rgba(255, 255, 255, 0.25); box-shadow: rgba(157, 157, 157, 0.2) 0px 4px 10px;">
            <ul class="flex flex-col items-center gap-y-6 md:hidden select-none">
                <li class="text-center"><a class="font-rubik false text-xl leading-5" href="about.php">About Us</a>
                </li>
                <li class="text-center"><a class="font-rubik false text-xl leading-5" href="Course.php">Courses</a></li>
                <li class="text-center"><a class="font-rubik false text-xl leading-5" href="final_compiler/home.php">Programming Compiler</a></li>
                <li class="text-center"><a class="font-rubik false text-xl leading-5" href="codeeditor/index.php">Web Design Compiler</a></li>
                <li class="text-center"><a class="font-rubik false text-xl leading-5" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="mt-[85px]">
        <div class="animate__animated animate__fadeIn animate__fast font-rubik ">
            <div class="w-full bg-[#30559E]  relative -mt-5 sm:-mt-0">
                <div class="absolute bottom-0 right-0">
                </div><img src="Logo/purchase_course_bg.svg" alt="bg-illus" class="hidden md:block absolute top-0 left-0 h-[850px] w-[100vw] object-cover md:-translate-y-72 -translate-y-52">
                <div class="2xl:relative mx-auto grid min-h-[590px] max-w-[1300px] md:grid-cols-2 grid-cols-1">
                    <div class="hidden md:block absolute top-0 right-0 z-30 w-full h-full overflow-hidden">
                        <div class="absolute bottom-0 right-0 xl:w-[600px] w-[500px] xl:h-[600px] h-[500px] overflow-hidden">
                            <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="hero_img" src="Logo/about_us.jpg" decoding="async" data-nimg="fill" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;" sizes="100vw"><noscript></noscript></span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 place-self-center md:p-5 px-8 text-[#fff] z-30">
                        <p class="text-[42px] font-bold">A platform for the next generation of learners!</p>
                        <p class="text-[20px] text-HeroSubText">Place for imparting education to next-generation
                            students.</p>
                        <div class="flex gap-2 items-center"><span>4.7</span><span class="flex gap-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" class="text-yellow-500 text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.1 11.3l3.6 3.3-1 4.6c-.1.6.1 1.2.6 1.5.2.2.5.3.8.3.2 0 .4 0 .6-.1 0 0 .1 0 .1-.1l4.1-2.3 4.1 2.3s.1 0 .1.1c.5.2 1.1.2 1.5-.1.5-.3.7-.9.6-1.5l-1-4.6c.4-.3 1-.9 1.6-1.5l1.9-1.7.1-.1c.4-.4.5-1 .3-1.5s-.6-.9-1.2-1h-.1l-4.7-.5-1.9-4.3s0-.1-.1-.1c-.1-.7-.6-1-1.1-1-.5 0-1 .3-1.3.8 0 0 0 .1-.1.1l-1.9 4.3-4.7.5h-.1c-.5.1-1 .5-1.2 1-.1.6 0 1.2.4 1.6z">
                                    </path>
                                </svg><svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" class="text-yellow-500 text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.1 11.3l3.6 3.3-1 4.6c-.1.6.1 1.2.6 1.5.2.2.5.3.8.3.2 0 .4 0 .6-.1 0 0 .1 0 .1-.1l4.1-2.3 4.1 2.3s.1 0 .1.1c.5.2 1.1.2 1.5-.1.5-.3.7-.9.6-1.5l-1-4.6c.4-.3 1-.9 1.6-1.5l1.9-1.7.1-.1c.4-.4.5-1 .3-1.5s-.6-.9-1.2-1h-.1l-4.7-.5-1.9-4.3s0-.1-.1-.1c-.1-.7-.6-1-1.1-1-.5 0-1 .3-1.3.8 0 0 0 .1-.1.1l-1.9 4.3-4.7.5h-.1c-.5.1-1 .5-1.2 1-.1.6 0 1.2.4 1.6z">
                                    </path>
                                </svg><svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" class="text-yellow-500 text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.1 11.3l3.6 3.3-1 4.6c-.1.6.1 1.2.6 1.5.2.2.5.3.8.3.2 0 .4 0 .6-.1 0 0 .1 0 .1-.1l4.1-2.3 4.1 2.3s.1 0 .1.1c.5.2 1.1.2 1.5-.1.5-.3.7-.9.6-1.5l-1-4.6c.4-.3 1-.9 1.6-1.5l1.9-1.7.1-.1c.4-.4.5-1 .3-1.5s-.6-.9-1.2-1h-.1l-4.7-.5-1.9-4.3s0-.1-.1-.1c-.1-.7-.6-1-1.1-1-.5 0-1 .3-1.3.8 0 0 0 .1-.1.1l-1.9 4.3-4.7.5h-.1c-.5.1-1 .5-1.2 1-.1.6 0 1.2.4 1.6z">
                                    </path>
                                </svg><svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" class="text-yellow-500 text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.1 11.3l3.6 3.3-1 4.6c-.1.6.1 1.2.6 1.5.2.2.5.3.8.3.2 0 .4 0 .6-.1 0 0 .1 0 .1-.1l4.1-2.3 4.1 2.3s.1 0 .1.1c.5.2 1.1.2 1.5-.1.5-.3.7-.9.6-1.5l-1-4.6c.4-.3 1-.9 1.6-1.5l1.9-1.7.1-.1c.4-.4.5-1 .3-1.5s-.6-.9-1.2-1h-.1l-4.7-.5-1.9-4.3s0-.1-.1-.1c-.1-.7-.6-1-1.1-1-.5 0-1 .3-1.3.8 0 0 0 .1-.1.1l-1.9 4.3-4.7.5h-.1c-.5.1-1 .5-1.2 1-.1.6 0 1.2.4 1.6z">
                                    </path>
                                </svg><svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" class="text-yellow-500 text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.1 11.3l3.6 3.3-1 4.6c-.1.6.1 1.2.6 1.5.2.2.5.3.8.3.2 0 .4 0 .6-.1 0 0 .1 0 .1-.1l4.1-2.3 4.1 2.3s.1 0 .1.1c.5.2 1.1.2 1.5-.1.5-.3.7-.9.6-1.5l-1-4.6c.4-.3 1-.9 1.6-1.5l1.9-1.7.1-.1c.4-.4.5-1 .3-1.5s-.6-.9-1.2-1h-.1l-4.7-.5-1.9-4.3s0-.1-.1-.1c-.1-.7-.6-1-1.1-1-.5 0-1 .3-1.3.8 0 0 0 .1-.1.1l-1.9 4.3-4.7.5h-.1c-.5.1-1 .5-1.2 1-.1.6 0 1.2.4 1.6z">
                                    </path>
                                </svg></span></div>
                        <div class="flex gap-5 text-lg">
                            <p class="flex gap-2 items-center"> <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                                    </path>
                                </svg> Engilsh / Hindi</p>
                            <p class="flex gap-1 items-center"> <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <desc></desc>
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z">
                                    </path>
                                    <rect x="3" y="6" width="12" height="12" rx="2"></rect>
                                </svg> 10+ courses</p>
                        </div>
                        <div><a href="Course.php"><button class="focus:outline-none focus:ring-1 focus:ring-white focus:ring-offset-1 
      cursor-pointer
      place-items-center rounded-md border xl:text-lg text-sm border-[#30559E] bg-white text-[#30559E] px-6 py-[0.5rem] text-[#000]">Start Learning</button></a></div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="mx-auto my-10 grid min-h-[564px] max-w-[1300px] px-8 md:grid-cols-2 md:px-4">
                    <img src="Logo/Square_1980x1980.png" alt="img" class="-pt-1 mx-auto h-[80vw] w-[80vw] place-self-center rounded-3xl object-cover object-top sm:h-[475px] sm:w-[80%] sm:rounded-3xl md:w-[600px] md:h-[400px] lg:h-[540px] xl:h-[600px]">
                    <div class="flex flex-col items-center justify-center gap-4 px-4 py-10 md:items-start md:px-12 lg:px-20">
                        <p class="section_heading text-headText">About us</p>
                        <p class="section_subheading text-center md:text-start text-subText ">Hello! Welcome to
                            <span class="font-medium">DevTown</span>, an e-learning platform dedicated to providing computer science students with top-quality, accessible education.
                        </p>
                        <p class="content_text text-justify md:text-start text-grey100">At DevTown, we understand the unique needs and challenges faced by computer science students. That's why we offer a wide range of courses across various computer science disciplines, including programming, web development, Datastructures & Algorithms, Operating Systems, and more. Our courses are designed and taught by experienced instructors who bring real-world expertise to the classroom.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="px-4 divide-y bg-[#759DEA]">
        <div class="container flex flex-col justify-between py-10 mx-auto space-y-8 lg:flex-row lg:space-y-0">
            <div class="lg:w-1/3">
                <a rel="" href="index.php" class="flex justify-center space-x-3 lg:justify-center lg:mt-10">
                    <span class="self-center text-[#30559E] text-4xl sm:text-5xl xl:text-7xl font-semibold" style="font-family: 'Lobster', cursive;">DevTown</span>
                </a>
            </div>
            <div class="grid grid-cols-2 text-sm gap-x-3 gap-y-8 lg:w-2/3 sm:grid-cols-2 sm:text-center pl-6">
                <div class="space-y-3">
                    <h3 class="tracking-wide font-semibold text-lg uppercase text-[#30559E] sm:text-2xl xl:text-3xl">Menu
                    </h3>
                    <ul class="space-y-1 text-white text-md sm:text-lg sm:space-y-3 xl:text-2xl">
                        <li>
                            <a rel="noopener noreferrer" href="about.php">About Us</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="contact.php">Contact Us</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="Course.php">Courses</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="Blog.php">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-3">
                    <h3 class="tracking-wide text-[#30559E] font-semibold text-lg uppercase sm:text-2xl xl:text-3xl">
                        Compilers</h3>
                    <ul class="space-y-1 text-white text-md sm:space-y-3 sm:text-lg xl:text-2xl">
                        <li>
                            <a rel="noopener noreferrer" href="final_compiler/home.php">Programming</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="codeeditor/index.php">Web Design</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="py-6 text-sm text-center text-white sm:text-lg xl:text-2xl">Copyright © 2023 DevTown. <br> All rights
            reserved.</div>
    </footer>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
        // Hamburger Menu Animate
        $(document).ready(function() {
            $("#menu").click(function() {
                var menu_toggle_click = $("#menu_toggle").val();
                if (menu_toggle_click == 0) {
                    $("#first").removeClass();
                    $("#second").removeClass();
                    $("#third").removeClass();
                    $("#first").addClass(
                        "w-10 rounded-md py-[2px] absolute top-1/2 rotate-45 bg-[#011229] transition-all duration-300"
                    );
                    $("#second").addClass(
                        "w-10 absolute top-1/2 py-0 opacity-0 rounded-md bg-[#011229] transition-all duration-300"
                    );
                    $("#third").addClass(
                        "w-10 absolute top-1/2 -rotate-45 bg-[#011229] rounded-md py-[2px] transition-all duration-300"
                    );
                    menu_toggle_click = $("#menu_toggle").val("1");
                    $(".menu").css('display', 'block');
                } else {
                    $("#first").removeClass();
                    $("#second").removeClass();
                    $("#third").removeClass();
                    $("#first").addClass(
                        "w-10 rounded-md py-[2px] false bg-[#011229] transition-all duration-300"
                    );
                    $("#second").addClass(
                        "w-8 py-[2px] rounded-md bg-[#011229] transition-all duration-300"
                    );
                    $("#third").addClass(
                        "w-6 false rounded-md bg-[#011229] py-[2px] transition-all duration-300"
                    );
                    menu_toggle_click = $("#menu_toggle").val("0");
                    $(".menu").css('display', 'none');
                }
            });
        });
    </script>
    <!-- AOS animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>

    <!-- card slider -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var element = document.getElementById("labs");
        var compiler = document.getElementById("compiler");
        element.addEventListener("click", function() {
            if (compiler.style.display === "block") {
                compiler.style.display = "none"; // wait for 3 seconds (3000 milliseconds) before hiding the element
            } else {
                compiler.style.display = "block";
            }
        });

        var avatar = document.getElementById("avatar");
        var avatar_dropdown = document.getElementById("avatar-dropdown");
        avatar.addEventListener("click", function() {
            if (avatar_dropdown.style.display === "block") {
                avatar_dropdown.style.display = "none"; // wait for 3 seconds (3000 milliseconds) before hiding the element
            } else {
                avatar_dropdown.style.display = "block";
            }
        });

    </script>
</body>

</html>