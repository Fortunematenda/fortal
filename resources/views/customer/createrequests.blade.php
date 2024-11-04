<x-app-layout>
<link rel="stylesheet" href="{{asset('build/assets/css/create.css')}}">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Qd54wgjWo4t-Klmi3m_pz8HbHz0GQto&libraries=places" type="text/javascript"></script>

<style>
   

        .container-home {
            max-width: 600px;
            padding: 20px;
        }

        h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #1e1e1e;
            margin-bottom: 10px;
        }

        p {
            font-size: 1rem;
            color: #1e1e1e;
            margin-bottom: 20px;
        }

        .search-box {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .search-box input[type="text"] {
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .search-box input[type="text"]::placeholder {
            color: #b0b0b0;
        }

      

        .search-box button {
            padding: 12px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-box button:hover {
            background-color: #0056b3;
        }

        .popular {
            font-size: 0.9rem;
            color: #1e1e1e;
        }
</style>
 <!-- Two-Column Section with Get Started and Image -->
 <div class="container1">
        <!-- Left Column -->
         <form>
            @csrf
        <div class="left-column">
          
           
        </div>
 
    <div class="container-home">
        <h1>Find the best professionals in South Africa</h1>
        <p>Get free quotes within minutes</p>
        <div class="search-box">
            <div style="width:100%">
            <input type="text" id="serviceTxt" placeholder="What service are you looking for?">
            <input type="" id="serviceID" hidden>
            <span id="search-service">
                <ul id="inner-service" class="searched-list"></ul>
            </span>
            </div>
            <input type="text" id="searchLocation" placeholder="Enter location in South Africa or Zimbabwe">
            <button type="button" id="start_lead">Search</button>
        </div>
        <input id="latitude" hidden></input>
        <input id="longitude" hidden></input>
        <div class="popular">Popular: House Cleaning, Web Design, Personal Trainers</div>
    </div>
        </form>
        <!-- Right Column -->
        <div class="right-column">
    <div>
        <img src="{{asset('build/assets/img/handy2.png')}}" alt="Freelance Services Image 1" height="500" width="500">
    </div>
</div>

    </div>

    <!-- Services Section -->

    <!-- Popular Services Section -->

    <div class="popular-services">
        <div class="service-item">
        <img src="{{asset('build/assets/img/networking.jpg')}}" alt="Freelance Services Image" height="50" width="50">
            <p>Networking and IT Services</p>
            <div class="rating">★★★★★</div>
        </div>
        <div class="service-item">
        <img src="{{asset('build/assets/img/cctv.jpg')}}" alt="Freelance Services Image" height="50" width="50">
            <p>Security and Surveillance</p>
            <div class="rating">★★★★☆</div>
        </div>
        <div class="service-item">
        <img src="{{asset('build/assets/img/webdesign.jpg')}}" alt="Freelance Services Image" height="50" width="50">
            <p>Web Design</p>
            <div class="rating">★★★★★</div>
        </div>
        <div class="service-item">
        <img src="{{asset('build/assets/img/builders.jpg')}}" alt="Freelance Services Image" height="50" width="50">
            <p>General Builders</p>
            <div class="rating">★★★☆☆</div>
        </div>
    </div> 
    <div id="modal-create" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
    <div class="v2-loading-overlay">
        <div class="loading-box fade show mx-auto">
            <div class="d-flex flex-column py-4 align-items-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <h4 class="loading-text pt-2">
                    Please wait ...
                </h4>
            </div>
        </div>
    </div>
        <h2 class="uk-modal-title">Headline</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="button">Save</button>
        </p>
    </div>
</div>
    <script>
 function initialize() {
        var input = document.getElementById('searchLocation');
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            
            document.getElementById('latitude').value = place.geometry.location.lat();
            document.getElementById('longitude').value = place.geometry.location.lng();
            

        });
    }
    google.maps.event.addDomListener(window, 'load', initialize); 

 // if( form_valid && ($('#cityLat').val().trim() == '' || $('#cityLng').val().trim() == '') ){
 //           toastr.remove();
//         toastr.warning('Please choose some location from the suggesstions');
 //       form_valid = false;
    //}


        function initAutocomplete() {
            const input = document.getElementById("searchLocation");
            const options = {
                types: ["geocode"],
                componentRestrictions: { country: ["ZA", "ZW"] }
            };
            new google.maps.places.Autocomplete(input, options);
        }

        google.maps.event.addDomListener(window, "load", initAutocomplete);
    </script>
</x-app-layout>
