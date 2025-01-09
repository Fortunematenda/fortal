<x-customernav>
<link rel="stylesheet" href="{{asset('build/assets/css/create.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"/>
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

        .search-box input[type="text"], .textarea, input[type="number"] {
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #ddd !important;
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

        #regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 100%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}


/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: purple;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 0.8;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: purple;
}
.uk-button-primary{
    background-color:purple !important;
}
.hsd{
    font-weight:bolder !important;
    font-size:24px !important;
    color:purple !important;
}
.hsd1{
    font-size: 20px !important;
}
input[type=email], input[type=email], input[type=tel], input[type=text]{
    border:1px solid lightgray;
}
label {
    display: block !important;
}
.iti{
    display: block !important;
}
.drop-area {
        width: 100%;
        max-width: 400px;
        padding: 20px;
        border: 2px dashed #a569bd;
        border-radius: 10px;
        text-align: center;
        cursor: pointer;
        color: #555;
        font-size: 18px;
    }
    .preview-container {
        display: flex;
        flex-wrap: wrap;
        margin-top: 10px;
        margin-bottom: 20px;
        border-bottom: 1px solid #e3c5e3;
    }
    .preview-image {
        border-radius: 5px;
    }
    .error {
    color: red;
    font-size: 12px;
    margin-top: 5px;
    display: block;
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
        <h1>Discover top professionals in South Africa</h1>
        <p>Receive free quotes in just minutes</p>
        <div class="search-box">
            <div style="width:100%">
            <input type="text" id="serviceTxt" placeholder="What service are you looking for?">
            <input type="hidden" id="serviceID" >
            <span id="search-service">
                <ul id="inner-service" class="searched-list"></ul>
            </span>
            </div>
            <input type="text" id="searchLocation" placeholder="Enter location in South Africa">
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
 function initializeAutocomplete() {
    const input = document.getElementById("searchLocation");

    const options = {
        types: ["geocode"],
        componentRestrictions: { country: ["ZA", "ZW"] }, // Restrict to specific countries
    };

    const autocomplete = new google.maps.places.Autocomplete(input, options);

    autocomplete.addListener("place_changed", function () {
        const place = autocomplete.getPlace();

        if (!place.geometry) {
            console.error("No geometry available for this place.");
            return;
        }

        // Update the latitude and longitude fields
        document.getElementById("latitude").value = place.geometry.location.lat();
        document.getElementById("longitude").value = place.geometry.location.lng();
    });
}




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

    {

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
            preferredCountries: ["za","zw"], // Customize preferred countries as desired
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
</x-customernav>
<script src="{{asset('build/assets/js/intlTelInput.min.js')}}"></script>
<script src="{{asset('build/assets/js/utils.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Qd54wgjWo4t-Klmi3m_pz8HbHz0GQto&libraries=places&callback=initializeAutocomplete" type="text/javascript"></script>