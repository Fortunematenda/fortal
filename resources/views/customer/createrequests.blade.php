
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Preload Fonts -->
    <link rel="stylesheet" href="{{asset('build/assets/css/uikit.min.css')}}">
    <link rel="preload" as="font" type="font/woff2" crossorigin="" href="{{asset('build/assets/fonts/gordita-medium-webfont.woff2')}}">
    <link rel="preload" as="font" type="font/woff2" crossorigin="" href="{{asset('build/assets/fonts/gordita-bold-webfont.woff2')}}">
    <link rel="preload" as="font" type="font/woff2" crossorigin="" href="{{asset('build/assets/fonts/gordita-regular-webfont.woff2')}}">

    <!-- Stylesheets -->
    
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
   
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://d1w7gvu0kpf6fl.cloudfront.net/images/favicon/20190628/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://d1w7gvu0kpf6fl.cloudfront.net/images/favicon/20190628/favicon-16x16.png">
    <link rel="mask-icon" href="https://d1w7gvu0kpf6fl.cloudfront.net/images/favicon/20190628/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="https://d1w7gvu0kpf6fl.cloudfront.net/images/favicon/20190628/favicon.ico">

    <!-- Social Media Sharing -->
    <meta property="og:image" content="https://d1w7gvu0kpf6fl.cloudfront.net/img/frontend-v2/sharing-images/linkedin-cover.jpg">
    <meta property="twitter:image" content="https://d1w7gvu0kpf6fl.cloudfront.net/img/frontend-v2/sharing-images/linkedin-cover.jpg">

    <!-- Additional Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <title>{{ config('app.name', 'Fortai') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.customer')

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-blue shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/67b3271e45f68c1909a69513/1ik9t1k3o';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

 

    <!-- Scripts -->
    <script type="text/javascript" charset="utf-8" src="{{asset('build/assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('build/assets/js/main.js')}}"></script>
    <script src="{{asset('build/assets/js/signupsteps.js')}}"></script>
    <script src="{{asset('build/assets/js/yoyoToast.umd.min.js')}}"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{asset('build/assets/js/uikit-icons.min.js')}}"></script>
    <script src="{{asset('build/assets/js/uikit.min.js')}}"></script>

<link rel="stylesheet" href="{{asset('build/assets/css/create.css')}}">
<link rel="stylesheet" href="{{asset('build/assets/css/5a8bc88891d37fb6.css')}}">
<link rel="stylesheet" href="{{asset('build/assets/css/f1fa6a291d39df4d.css')}}">
<link rel="stylesheet" href="{{asset('build/assets/css/css/createrequest.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"/>

 <!-- Two-Column Section with Get Started and Image -->

 <div class="bg-black">
      <div class="px-4">
        <div class="py-4 flex items-center justify-between">
          <div class="relative cursor-pointer" tabindex="0" style="opacity: 1; will-change: auto; transform: none;">
          <div class="max-w-12">
  <div class="absolute w-full top-2 bottom-0 bg-[linear-gradient(to_right,#F87BFF,#FB92CF,#FFDD98,#C2F0B1,#2FD8FE)] blur-md"></div>
  <a class="navbar-brand py-3" href="/profession/create">
  <img alt="LeadFinder Logo" loading="lazy" width="200" height="100" decoding="async" data-nimg="1" class="h-12 w-100 max-w-none relative" srcset="\build\assets\img\fortailogo.png 1x, \build\assets\img\fortailogo.png 2x" src="\build\assets\img\fortailogo.png" style="">
</a>
</div>

          </div>
          <div class="border border-white border-opacity-30 h-10 w-10 inline-flex justify-center items-center rounded-lg close-button-nav" style="opacity: 1; will-change: auto; transform: none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-white">
              <path d="M3 12h18M3 6h18M3 18h18"></path>
            </svg>
          </div>
          <nav class="gap-6 items-center hidden list-items-nav">
          @auth
            <div style="opacity: 1; will-change: auto; transform: none;">
              <a class="text-opacity-60 text-white hover:text-opacity-100 transition relative group" href="/customer/dashboard/">
                Home
                <span class="absolute -bottom-1 left-0 w-0 h-[2px] bg-white group-hover:w-full" style="width: 0px;"></span>
              </a>
            </div>
            @endauth

            @guest
            <div style="opacity: 1; will-change: auto; transform: none;">
              <a class="text-opacity-60 text-white hover:text-opacity-100 transition relative group" href="/profession/create">
                Join As a Pro
                <span class="absolute -bottom-1 left-0 w-0 h-[2px] bg-white group-hover:w-full" style="width: 0px;"></span>
              </a>
            </div>
            <div style="opacity: 1; will-change: auto; transform: none;">
              <div class="inline-block mr-4" style="will-change: auto; transform: none; opacity: 1;">
                <a class="text-opacity-60 text-white hover:text-opacity-100 transition relative group" href="/login">
                  Login
                  <span class="absolute -bottom-1 left-0 w-0 h-[2px] bg-white group-hover:w-full" style="width: 0px;"></span>
                </a>
              
          </div>
          @endguest
        </div></nav>
        </div>
      </div>
    </div>
 <div class="container1 bg-black text-white bg-[linear-gradient(to_bottom,#000,#200D42_34%,#4F21A1_65%,#A46EDB_82%)] py-[72px] sm:py-24 relative overflow-clip">
        <!-- Left Column -->
         <form style="z-index:1000 !important">
            @csrf
        <div class="left-column absolute h-[375px] w-[750px] sm:w-[1536px] sm:h-[768px] lg:w-[2400px] lg:h-[1200px] rounded-[100%] bg-black left-1/2 -translate-x-1/2 border border-[#B48CDE] bg-[radial-gradient(closest-side,#000_82%,#9560EB)] top-[calc(100%-96px)] sm:top-[calc(100%-120px)]">
          
           
        </div>
        <h1 class="uk-animation-scale-down">Get the Best Services, <br>Hassle-Free!</h1>
        
        <div class="stars absolute top-0 left-0 w-full h-[900px]" style="opacity: 1; will-change: auto;"></div>
   
       <div class="txtclas uk-animation-slide-left">
        <p id="text" class="text-center text-xl mt-2 max-w-md bg-[linear-gradient(to_right,#F87AFF,#FB93D0,#FFDD99,#C3F0B2,#2FD8FE)] text-transparent bg-clip-text [-webkit-background-clip:text]">
        Find Trusted Experts Instantly!
        </p>
        </div>
        <div class="row" style="display: flex; justify-content: space-between; gap: 20px; flex-wrap: wrap;">

<div class="search-container ">
  <div class="search-box">
    <div class="search-icon"><i class="bi bi-search search-icon"></i></div>
    <input type="text" class="uk-animation-slide-left" placeholder="Service you're looking for?" id="serviceTxt" autocomplete="off">
    <input type="hidden" id="serviceID" >
    <svg class="search-border" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 671 111">
      <path class="border" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280"></path>
      <path class="border" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280"></path>
    </svg>
   
  </div>
  <span id="search-service">
                <ul id="inner-service" class="searched-list"></ul>
            </span>
</div>

<div class="location-container uk-animation-slide-bottom">
  <div class="search-box1">
    <div class="search-icon1"><i class="bi bi-crosshair search-icon1"></i></div>
    <form action="" class="search-form1">
      <input type="text" placeholder="Enter location in SA" id="searchLocation" autocomplete="off">
    </form>
    <svg class="search-border1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 671 111">
      <path class="border1" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280"></path>
      <path class="border1" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280"></path>
    </svg>
  </div>
</div>
<input id="latitude" hidden></input>
        <input id="longitude" hidden></input>
<div class="btn-main uk-animation-slide-bottom">
<button class="search-btn" type="button" id="start_lead">
  <i class="bi bi-search"></i> Search
</button>
</div>

</div>

           
         
       
              </form>

        
        <!-- Right Column -->
        <div class="right-column uk-animation-slide-right">
    <div>
        <img src=" {{asset('build/assets/img/digital_marketing.png')}}" alt="Homepage Image 1" height="500" width="500">
       
    </div>
</div>
</div>

<div class="bg-black text-white py-[72px] sm:py-24" style="opacity: 1; transform: none; will-change: auto;">
  <div class="container uk-animation-slide-right"><h2 class="text-xl text-center text-white/70" style="opacity: 1; transform: none; will-change: auto;">
Trusted By The Best Organisations in South Africa
</h2>
<style>
  @keyframes marquee {
    0% {
      transform: translateX(100%);
    }
    100% {
      transform: translateX(-100%);
    }
  }

  .marquee {
    animation: marquee 20s linear infinite;
    animation-delay: 0s; /* Start immediately */
    /* Do not preserve the end state between page loads */
    animation-fill-mode: forwards;
    will-change: transform;
  }
</style>

<div class="flex overflow-hidden mt-9 relative w-full before:content-[''] after:content-[''] before:z-10 before:absolute after:absolute before:h-full after:h-full before:w-5 after:w-5 after:right-0 before:left-0 before:top-0 after:top-0 before:bg-[linear-gradient(to_right,#000,rgba(0,0,0,0))] after:bg-[linear-gradient(to_left,#000,rgba(0,0,0,0))]">
<div class="marquee-container">
        <div class="marquee-content" id="marqueeContent">
            <!-- Images will be dynamically inserted here using JavaScript -->
        </div>
    </div>

    <!-- UIkit JS (if needed for other UIkit components) -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/js/uikit-icons.min.js"></script>
</div>
</div>
</div>
<div id="features" class="bg-black text-white py-[72px] sm:py-24" style="opacity: 1; will-change: auto;">
  <div class="container">
    <h2 class="text-center text-3xl md:text-4xl md:max-w-[648px] mx-auto font-bold tracking-tighter" style="opacity: 1; transform: none; will-change: auto;">
      Everything You Need
    </h2>
    <div class="max-w-xl mx-auto" style="opacity: 1; transform: none; will-change: auto;">
      <p class="text-center mt-5 text-xl text-white/70">
      Looking for Reliable and Professional Services?
      </p>
      </div>
      <div class="mt-16 flex flex-col sm:flex-row gap-4" style="opacity: 1; will-change: auto;">
        <div class="border border-white/30 px-5 py-10 text-center rounded-xl sm:flex-1 relative" style="opacity: 1; transform: none; will-change: auto;">
          
          <div class="absolute inset-0 border-2 border-purple-400 rounded-xl" 
     style="mask-image: radial-gradient(100px 100px at 309px -908px, black, );
            background-image: url('/build/assets/img/electrician.jpg');
            background-size: cover;
            background-position: center;">
</div>

          <h3 class="mt-6 font-bold" style="opacity: 0; will-change: auto;">
            Complete Suite
          </h3>
          <p class="mt-2 text-white/70" style="opacity: 0; will-change: auto;">
            LeadFinder includes multiple lead generation tools that you can use to grow your business.
          </p>
        </div>
        <div class="border border-white/30 px-5 py-10 text-center rounded-xl sm:flex-1 relative" style="opacity: 1; transform: none; will-change: auto;">
         
          <div class="absolute inset-0 border-2 border-purple-400 rounded-xl" 
     style="mask-image: radial-gradient(100px 100px at 309px -908px, black, );
            background-image: url('/build/assets/img/wifitech.jpg');
            background-size: cover;
            background-position: center;">
</div>
<h3 class="mt-6 font-bold" style="opacity: 0; will-change: auto;">
Unlimited Leads
</h3>
<p class="mt-2 text-white/70" style="opacity: 0; will-change: auto;">
Save thousands of dollars in costs compared to other lead generation apps. LeadFinder is the only app in the market to offer unlimited leads.
</p>
</div>
<div class="border border-white/30 px-5 py-10 text-center rounded-xl sm:flex-1 relative" style="opacity: 1; transform: none; will-change: auto;">
  
  <div class="absolute inset-0 border-2 border-purple-400 rounded-xl" 
     style="mask-image: radial-gradient(100px 100px at 309px -908px, black, );
            background-image: url('/build/assets/img/handyman.jpg');
            background-size: cover;
            background-position: center;">
</div>
  <h3 class="mt-6 font-bold" style="opacity: 0; will-change: auto;">
    Beautiful &amp; Minimal
  </h3>
  <p class="mt-2 text-white/70" style="opacity: 0; will-change: auto;">They say that complexity is the enemy of productivity. Therefore, we have designed our tools to be so minimal that even your grandma can use them.</p>
</div>
</div>
</div></div>
  
  
  <div class="bg-black text-white bg-gradient-to-b from-black to-[#5D2CAB] py-[72px] sm:py-24 overflow-hidden max-w-full" style="opacity: 1; will-change: auto;">
    <div class="container">
      <h2 class="text-center text-3xl md:text-4xl md:max-w-[648px] mx-auto font-bold tracking-tighter" style="opacity: 1; transform: none; will-change: auto;">
        Beyond Expectations
      </h2>
      <div class="max-w-xl mx-auto" style="opacity: 1; transform: none; will-change: auto;">
        <p class="text-xl text-center text-white/70 mt-5">
        Professional solutions designed to connect you with the right experts
        </p>
      </div>
      <div class="flex justify-center overflow-hidden" style="opacity: 0.5; transform: perspective(800px) rotateX(15deg);">
        
</div>

</div></div></div>
<div id="modal-create" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
    <button class="uk-modal-close-default" type="button" uk-close></button>

    <br/>
    <h2 align="center" class="uk-modal-title">New lead</h2>

        <form id="regForm" method="POST" action="/action_page.php" enctype="multipart/form-data">
 
  <!-- One "tab" for each step in the form: -->
  
    <div id="insteps">

    </div>
    <div style="text-align: center;margin-left: auto; margin-right: auto; width: 50%; display:none" id="loader">
        <img src="{{asset('build/assets/img/loader.svg')}}"/>
    </div>

  <div style="overflow:auto; margin-top:23px">
    <div style="float:right;">
      <button type="button" class="uk-button uk-button-default" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" class="uk-button uk-button-primary" id="nextBtn" onclick="nextPrev(1)">Next</button>
      <button type="submit" style="display:none" id="subm" class="uk-button uk-button-primary">SUBMIT</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;" id="bullets">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

    </div>
</div> 

<input id="isLogged" value = "{{ auth()->check() ? 'Logged' : 'Guest' }}" hidden/>

    <script>
 

        var currentTab = 0;


function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    $("#subm").show();
    $("#nextBtn").hide();
  } else {
    $("#subm").hide();
    $("#nextBtn").show();
    $("#prevBtn").show();
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function validateForm() {
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");

  for (i = 0; i < y.length; i++) {
    if (y[i].type === "radio") {
      var name = y[i].name; 
      var radios = document.getElementsByName(name); 
      var isGroupValid = Array.from(radios).some(radio => radio.checked);

      // If no radio button in the group is selected, mark as invalid
      if (!isGroupValid) {
        radios.forEach(radio => radio.className += " invalid"); // Add "invalid" class to each radio
        valid = false; // Set the valid status to false
      }
    }

  }

  // If valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }

  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
function numC()
{
const phoneInputField = document.querySelector("#contact_number");
        const iti = window.intlTelInput(phoneInputField, {
            utilsScript: "{{asset('build/assets/js/utils.js')}}", // for formatting and validation
            initialCountry: "auto", // detect the user's country
            geoIpLookup: function(callback) {
                fetch('') 
                    .then((response) => response.json())
                    .then((data) => callback(data.country))
                    .catch(() => callback("za")); // default to 'us' if geolocation fails
            },
            preferredCountries: ["za"], // Customize preferred countries as desired
            separateDialCode: true, // Optional: shows dial code separately
        });

        // Optional: Add event listener for validation
        phoneInputField.addEventListener("GFFG", function() {
            const phoneNumber = iti.getNumber(); // gets the complete international phone number
            const isValid = iti.isValidNumber(); // validates the number
            if (!isValid) {
                alert("Invalid phone number");
            } else {
                alert(`Phone number is valid: ${phoneNumber}`);
            }
        });

        
    }
   
    </script>

<script src="{{asset('build/assets/js/intlTelInput.min.js')}}"></script>
<script src="{{asset('build/assets/js/utils.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Qd54wgjWo4t-Klmi3m_pz8HbHz0GQto&libraries=places&callback=initializeAutocomplete" type="text/javascript"></script>
<script>
  $(document).ready(function(){
    $("#serviceTxt").focus(function() {
      $(".search-box").addClass("border-searching");
      $(".search-icon").addClass("si-rotate");
      $("#serviceTxt").css('padding', '0 68px');
      $("#serviceTxt").attr('placeholder', 'Start searching...');
    });
    $("#serviceTxt").blur(function() {
      $(".search-box").removeClass("border-searching");
      $(".search-icon").removeClass("si-rotate");
      $("#serviceTxt").css('padding', '0 30px 0 50px');
      $("#serviceTxt").attr('placeholder', 'Service you\'re looking for?');
     
    });
    $("#serviceTxt").keyup(function() {
        if($(this).val().length > 0) {
          $(".go-icon").addClass("go-in");
        }
        else {
          $(".go-icon").removeClass("go-in");
        }
    });

    $("#searchLocation").focus(function() {
      $(".search-box1").addClass("border-searching1");
      $(".search-icon1").addClass("si-rotate");
      $("#searchLocation").css('padding', '0 68px');
      $("#searchLocation").attr('placeholder', 'Start searching...');
    });
    $("#searchLocation").blur(function() {
      $(".search-box1").removeClass("border-searching1");
      $(".search-icon1").removeClass("si-rotate");
      $("#searchLocation").css('padding', '0 30px 0 50px');
      $("#searchLocation").attr('placeholder', 'Enter location in SA');
    });
    $("#searchLocation").keyup(function() {
        if($(this).val().length > 0) {
          $(".go-icon").addClass("go-in");
        }
        else {
          $(".go-icon").removeClass("go-in");
        }
    });
    $(".go-icon").click(function(){
      $(".search-form").submit();
    });
});

const phrases = [
            "Find Trusted Experts",
            "Get Instant Quotes",
            "Hire with Confidence"
        ];
        let index = 0;
        let charIndex = 0;
        let isDeleting = false;
        const speed = 100;
        const delay = 2000;
        const textElement = document.getElementById("text");

        function typeEffect() {
            const currentPhrase = phrases[index];
            if (isDeleting) {
                charIndex--;
            } else {
                charIndex++;
            }
            textElement.textContent = currentPhrase.substring(0, charIndex);
            
            if (!isDeleting && charIndex === currentPhrase.length) {
                setTimeout(() => isDeleting = true, delay);
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                index = (index + 1) % phrases.length;
            }
            setTimeout(typeEffect, isDeleting ? speed / 2 : speed);
        }

        typeEffect();
</script>

    <style>
        /* Marquee container */
        .marquee-container {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            position: relative;
            background: black;
            padding: 10px 0;
        }

        /* Marquee inner wrapper */
        .marquee-content {
            display: flex;
            gap: 40px; /* Adjust spacing between images */
            animation: scrollMarquee 30s linear infinite;
        }

        /* Marquee animation */
        @keyframes scrollMarquee {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-50%);
            }
        }

        /* Image styles */
        .marquee-content img {
            height: 30px; /* Adjust image height */
            width: auto;
        }
    </style>
    <script>
        // Array of image sources
        const imageSources = [
            '/build/assets/img/bluedoglogo.png',
            '/build/assets/img/Genius.png',
            '/build/assets/img/LevelUp.png',
            '/build/assets/img/Scoutbird.png',
            '/build/assets/img/bluedoglogo.png',
            '/build/assets/img/Mobiosoft.png',
            '/build/assets/img/RocketDigital.png',
            '/build/assets/img/Shopido.png',
            '/build/assets/img/bluedoglogo.png',
            '/build/assets/img/Genius.png',
            '/build/assets/img/LevelUp.png',
            '/build/assets/img/Scoutbird.png',
            '/build/assets/img/bluedoglogo.png',
            '/build/assets/img/Mobiosoft.png',
            '/build/assets/img/RocketDigital.png',
            '/build/assets/img/Shopido.png'
            
        ];

        // Get the marquee content container
        const marqueeContent = document.getElementById('marqueeContent');

        // Loop through the imageSources array and create img elements
        imageSources.forEach(src => {
            // Create the image element
            const imgElement = document.createElement('img');
            imgElement.src = src;
            imgElement.alt = src.split('/').pop().split('.')[0] + " Logo"; // Set alt text from file name
            
            // Append the image to the marquee container
            marqueeContent.appendChild(imgElement);

           
        });
    </script>
