<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- assets -->
    <!-- assets -->
    <link rel="stylesheet" href="Assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="Assets/fonts/fonts.css">
    <link rel="stylesheet" href="nav.css">

    <!-- script -->
    <!-- script -->
    <script src="Assets/tailwind.js"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className == "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</head>

<body style="font-family: poppins;" class="bg-gray-800 pt-6 pl-6 pr-6">
    <!-- navigation bar -->
    <!-- navigation bar -->
    <div class="topnav lg:!ml-auto register" id="myTopnav">
        <a class="a !text-blue-100 hover:!text-white" href="index.php">Home</a>
        <a class="a !text-blue-100 hover:!text-white" href="#">Contact</a>
        <a class="a !text-blue-100 hover:!text-white" href="#">About</a>
        <a class="a !text-blue-100 hover:!text-white" href="services.php">Services</a>
        <a class="a !text-blue-100 hover:!text-white" href="login.php">Order Services</a>
        <a href="javascript:void(0)" class="icon a -mt-6" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="mt-4 h-[0.1px] bg-gray-500"></div>

    <div class="grid grid-cols-1 lg:grid-cols-2 pt-8">
        <div class="">
            <p class="text-white text-[30px]">
                All the services you needed are <br> right at you finger tips
            </p>
            <p class="mt-6 text-gray-400 text-[14px]">
                Delivering the highest quality auto repair services is the <br> way we forgo relationships with our customers and the way we <br> have always done business
            </p>
            <button class="h-9 bg-blue-600 w-[200px] mt-4 rounded-md text-white">Contact Us</button>
            <div class="flex mt-8 gap-20 pb-10">
                <div class="text-center">
                    <p class="text-[25px] text-white">389</p>
                    <p class="text-gray-400 text-[13px]">Experienced <br> Technician</p>
                </div>
                <div class="text-center ">
                    <p class="text-[25px] text-white">38934</p>
                    <p class="text-gray-500 text-[13px]">Projects <br> Completed</p>
                </div>
            </div>
        </div>
        <div class="">
            <img class="lg:h-[360px] h-[320px] w-screen " src="images/auto-mechanic-working-in-garage-repair-service.webp" alt="">
        </div>
    </div>
    <div class="mt-4 h-[0.1px] bg-gray-500"></div>


    <!-- services -->
    <!-- services -->
    <div class="grid grid-ols-1 lg:grid-cols-3 mt-20">
        <div class="h-[150px] border border-gray-500 border-[0.1px] lg:w-[420px] pl-8 pr-8">
            <div class="h-10 w-10 rounded-full bg-gray-800 -mt-[20px] flex items-center justiy-center text-center">
                <i class="fa-regular fa-car-wrench m-auto text-white"></i>
            </div>
            <p class="text-white text-20 mt-4"> All cars make</p>
            <p class="text-[13px] text-gray-400 ">
                We give an assortment of fix and support administration for all vehicles makes and <br> models
            </p>
        </div>
        <div class="h-[150px] border border-gray-500 border-[0.1px] mt-8 lg:mt-0 lg:w-[420px] pl-8 pr-8 lg:ml-2">
            <div class="h-10 w-10 rounded-full bg-gray-800 -mt-[20px] flex items-center justiy-center text-center">
                <i class="fa-brands fa-servicestack text-white m-auto "></i>
            </div>
            <p class="text-white text-20 mt-4"> Variety of services</p>
            <p class="text-[13px] text-gray-400">
                The main principle of our work is to offer a wide scope of value quality car repairs <br> services
            </p>
        </div>
        <div class="h-[150px] border border-gray-500 border-[0.1px] lg:w-[420px] pl-8 pr-8 lg:ml-2 mt-8 lg:mt-0 ">
            <div class="h-10 w-10 rounded-full bg-gray-800 -mt-[20px] flex items-center justiy-center text-center">
                <i class="fa-duotone fa-hands-holding-circle m-auto text-white"></i>
            </div>
            <p class="text-white text-20 mt-4"> Quality Support</p>
            <p class="text-[13px] text-gray-400">
                We offer quality support for any vehichel that allows them to alway stay fully <br> functional
            </p>
        </div>
    </div>

    <!-- booking appointment-->
    <!-- booking appointment-->
    <div class="">
        <div class=" mt-8 bg-[url(images/auto-mechanic-working-in-garage-repair-service.webp)] bg-cover bg-no-repeat bg-h-[500px] lg:h-[500px] w-[80vw] m-auto p-10 grid grid-cols-1 lg:grid-cols-2">
            <div>
                <P class="text-[30px]">
                    Details about our working <br> processes
                </P>
                <button class="h-9 w-[200px] bg-blue-600 mt-10 text-white rounded-sm outline-none">See More</button>
            </div>
            <div class="mt-4 lg:w-[320px] bg-gray-800 lg:ml-40 p-8">
                <div class="flex">
                    <div class="h-10 w-[1px] bg-blue-600">

                    </div>
                    <a href="">
                        <p class="text-[13px]"> Book Appointment</p>
                    </a>
                </div>
                <hr class="border-gray-500 mt-2">
                <div class="flex mt-4">
                    <div class="h-10 w-[1px] bg-blue-600">

                    </div>
                    <a href="">
                        <p class="text-[13px]">Our Services</p>
                    </a>
                </div>
                <hr class="border-gray-500 mt-2">
                <div class="flex mt-4">
                    <div class="h-10 w-[1px] bg-blue-600">

                    </div>
                    <a href="">
                        <p class="text-[13px]">Our services</p>
                    </a>
                </div>
                <hr class="border-gray-500 mt-2">
                <div class="flex mt-4">
                    <div class="h-10 w-[1px] bg-blue-600">

                    </div>
                    <a href="">
                        <p class="text-[13px]">Request a service</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- why choose us -->
    <!-- why choose us -->
    <p class="text-white text-[27px] mt-20">Why <br>choose us</p>
    <div class="grid grid-ols-1 lg:grid-cols-3 mt-8">
        <div class="h-[150px] border border-gray-500 border-[0.1px] lg:w-[420px] p-6 text-center">
            <div class="h-10 w-10 rounded-full border border-gray-600  flex items-center justiy-center text-center m-auto">
                <i class="fa-regular fa-car-wrench m-auto text-white"></i>
            </div>
            <p class="text-white text-20 mt-1"> Knowledge and <br> Experience</p>

        </div>
        <div class="h-[150px] border border-gray-500 mt-4 lg:mt-0 border-[0.1px] lg:w-[420px] p-6 text-center">
            <div class="h-10 w-10 rounded-full border border-gray-600  flex items-center justiy-center text-center m-auto">
                <i class="fa-regular fa-car-wrench m-auto text-white"></i>
            </div>
            <p class="text-white text-20 mt-1"> commitment and <br> Satisfaction</p>

        </div>
        <div class="h-[150px] mt-4 lg:mt-0 border border-gray-500 border-[0.1px] lg:w-[420px] p-6 text-center">
            <div class="h-10 w-10 rounded-full border border-gray-600  flex items-center justiy-center text-center m-auto">
                <i class="fa-regular fa-car-wrench m-auto text-white"></i>
            </div>
            <p class="text-white text-20 mt-1"> Quality Service and <br> Quarantteed</p>

        </div>
    </div>


    <!--footer -->
    <!--footer -->
    <footer class="bg-gray-900 text-gray-300 py-8 mt-20 -mr-6 -ml-6 ">
        <div class="container mx-auto px-10 grid grid-cols-1 lg:grid-cols-3">
            <div class="">
                <h2 class="text-lg font-bold mb-4">Contact Us</h2>
                <p class="mb-2"><i class="fas fa-map-marker-alt mr-2"></i>123 Main St, Anytown USA</p>
                <p class="mb-2"><i class="fas fa-phone mr-2"></i>555-555-5555</p>
                <p class="mb-2"><i class="fas fa-envelope mr-2"></i>info@mechanicorderservice.com</p>
            </div>
            <div class="mt-8 lg:mt-0">
                <h2 class="text-lg font-bold mb-4">Services</h2>
                <ul class="list-disc pl-4">
                    <li class="mb-2"><a href="#">Oil Changes</a></li>
                    <li class="mb-2"><a href="#">Tire Rotation</a></li>
                    <li class="mb-2"><a href="#">Brake Repair</a></li>
                    <li class="mb-2"><a href="#">Engine Diagnostics</a></li>
                </ul>
            </div>
            <div class="mt-8 lg:mt-0">
                <h2 class="text-lg font-bold mb-">Follow Us</h2>
                <div class="flex items-center mb-2">
                    <i class="fab fa-facebook-square mr-2"></i>
                    <a href="#">Facebook</a>
                </div>
                <div class="flex items-center mb-2">
                    <i class="fab fa-twitter-square mr-2"></i>
                    <a href="#">Twitter</a>
                </div>
                <div class="flex items-center mb-2">
                    <i class="fab fa-instagram-square mr-2"></i>
                    <a href="#">Instagram</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>