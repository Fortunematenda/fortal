// Event listener for keyup on #serviceTxt
$(document).on("keyup", "#serviceTxt", function() {
    let serviceTxt = $(this).val().trim();
    let _token = $('input[name="_token"]').val(); // CSRF token
    $("#inner-service").empty();

    // Proceed with AJAX only if input has more than 2 characters
    if (serviceTxt.length > 2) {
        $.ajax({
            url: '/getservices',
            type: 'POST',
            data: { serviceTxt, _token }, // Send data in one object
            beforeSend: function() {
                $("#search-service").show(); // Show loading or search div
            },
            success: function(data) {
                let services = data.services; // Simplified access to services array
                $.each(services, function(index, service) {
                    let serviceName = service.service_name;
                    let serviceId = service.id;
                    $("#inner-service").append(`
                        <li class='service' id='${serviceId}' service_name='${serviceName}'>${serviceName}</li>
                    `);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error:', status, error); // Improved error logging
            },
            complete: function() {
                 // Hide loading or search div after request completes
            }
        });
    }
});

// Event listener for clicking on a service from the list
$(document).on("click", ".service", function() {
    let serviceId = $(this).attr("id");
    let serviceName = $(this).attr("service_name");
    $("#serviceTxt").val(serviceName); // Update input box with selected service
    $("#serviceID").val(serviceId); // Set hidden field with service ID
    $("#inner-service").empty(); // Clear the service list
    $("#step").attr("href", `/profession/create-account/${serviceId}?service=${serviceName}`);
    $("#search-service").hide();
});

// Function to purchase credits when a package is clicked
function purchaseCredits(element) {
    const planId = element.getAttribute('data-plan-id');
    const discount = element.getAttribute('data-discount');
    const discountPrice = element.getAttribute('data-discountprice');
    const nCredits = element.getAttribute('data-ncredits');
    const pricePerCredit = element.getAttribute('data-price-per-credit');
    let _token = $('input[name="_token"]').val(); // CSRF token

    // Logging the values for debugging
    console.log('Plan ID:', planId);
    console.log('Discount:', discount);
    console.log('Discount Price:', discountPrice);
    console.log('Number of Credits:', nCredits);
    console.log('Price per Credit:', pricePerCredit);

    // Check if any required field is not defined
    if (!planId || !discount || !discountPrice || !nCredits || !pricePerCredit) {
        alert("All fields are required!"); // Notify user about the missing fields
        return; // Stop further execution
    }

    // AJAX request to purchase credits
    $.ajax({
        url: '/buy-credits', // Your backend endpoint for purchasing credits
        type: 'POST',
        data: {
            package_id: planId, // Ensure you're sending package_id
            discount: discount,
            discount_price: discountPrice,
            ncredits: nCredits,
            price_per_credit: pricePerCredit,
            _token // CSRF token for Laravel
        },
        success: function(data) {
            if (data.success) {
                alert('Credits purchased successfully!');
                // Redirect or update UI as necessary
                window.location.href = "/user/dashboard"; // Adjust as needed
            } else {
                alert("Error: " + data.message);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error:', status, error); // Improved error logging
            alert('An error occurred while purchasing credits. Please try again.');
        }
    });
}


// Slideshow for images
$(document).ready(function() {
    let currentIndex = 0;
    const images = $('.slideshow img');
    const imageCount = images.length;

    function showNextImage() {
        images.eq(currentIndex).removeClass('active').fadeOut(1000);
        currentIndex = (currentIndex + 1) % imageCount; // Cycle through images
        images.eq(currentIndex).addClass('active').fadeIn(1000);
    }

    images.eq(currentIndex).addClass('active').fadeIn(1000);
    setInterval(showNextImage, 3000); // Change image every 3 seconds

    $(document).ready(function() {
        // Get the current URL path
        var currentPath = window.location.pathname;
    
        // Loop through each nav item and compare the href with the current URL
        $('.navbar-nav .nav-item a').each(function() {
            var linkPath = $(this).attr('href');
            
            // If the href matches the current URL path, add 'active' to the parent <li>
            if (currentPath === linkPath) {
                $(this).closest('li').addClass('active');
            } else {
                $(this).closest('li').removeClass('active');
            }
        });
    });
});

// Function to load credit history
function loadCreditHistory(userId) {
    fetch(`/credit/${userId}/credit-history`)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Network response was not ok: ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            if (data.error) {
                throw new Error(data.error);
            }
            let history = data.creditHistory; 
            let historyList = document.getElementById('credit-history-list');
            historyList.innerHTML = ''; 

            history.forEach(transaction => {
                let listItem = document.createElement('li');
                listItem.innerHTML = `Credits Changed: ${transaction.credits_changed} | Type: ${transaction.transaction_type} | Description: ${transaction.description} | Date: ${new Date(transaction.created_at).toLocaleString()}`;
                historyList.appendChild(listItem);
            });
        })
        .catch(error => {
            console.error('Error fetching credit history:', error);
        });
}


$(document).on("click", ".credits", function() {
    let product_id = $(this).attr("identity");
    let _token = $('input[name="_token"]').val(); // CSRF token

        $.ajax({
            url: '/purchase',
            type: 'POST',
            data: { product_id, _token }, // Send data in one object
            beforeSend: function() {               
            },
            success: function(data) {                
               console.log(data);
            },
            error: function(xhr, status, error) {
                console.error('Error:', status, error); // Improved error logging
            },
            complete: function() {
           
            }
        });  
          // Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('notificationForm');

    // Load checkbox states from localStorage
    const checkboxes = form.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(checkbox => {
        const checkboxName = checkbox.name;
        // Set checkbox state based on localStorage
        if (localStorage.getItem(checkboxName) === 'true') {
            checkbox.checked = true;
        }

        // Add an event listener to update localStorage on change
        checkbox.addEventListener('change', function() {
            localStorage.setItem(checkboxName, checkbox.checked);
        });
    });

    // Add an event listener for the form submission
    form.addEventListener('submit', function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Prepare the data to be sent
        const formData = new FormData(form);

        // Send the data using fetch API
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            //console.log('Response from server:', data);
            toast('success', 'Notification settings updated successfully!', 3000);
        })
        .catch(error => {
            console.error('Error:', error);
            toast('error', 'Failed to update notification settings.', 3000);
        });
    });
});

// Your toast function
function toast(icon, txt, time) {
    yoyoToast.fire({
        type: icon,
        title: 'Status',
        message: txt,
        timeout: time,
        position: 'top-right',
        timeoutFunction: () => {},
    });
}  
});

$(document).on("click", "#start_lead", function() {
    currentTab = 0;
    let service_id = $("#serviceID").val();
    let location = $("#searchLocation").val();
    let longitude = $("#longitude").val();
    let latitude = $("#latitude").val();
    var _token = $('input[name="_token"]').val();
    console.log(`${service_id} - ${location} - ${longitude} - ${latitude}`);
    if (!service_id || !location || !longitude || !latitude) {
        toast('error', 'Please complete the fields', 3000);
    }
    else{
        UIkit.modal("#modal-create").show();
        const obj = {
            _token,service_id
        };
        $.ajax({
            url: '/getservicesquestions',
            type: 'POST',
            data: obj, // Send data in one object
            beforeSend: function() {
               $("#loader").show();
            },
            success: function(data) {
                console.log(data);
               let questionsArr = data["questions"];
               let num = questionsArr.length;
               bullets(num);
               steps(questionsArr);
               showTab(currentTab);
            },
            error: function(xhr, status, error) {
                console.error('Error:', status, error); // Improved error logging
            },
            complete: function() {
                $("#loader").hide();
            }
        });
    
    }
});

function steps(arr)
{
    let txt ="";
for(key in arr)
{
    let question = arr[key]["question"];    
    let answers = arr[key]["answers"];
    txt += "<div class='tab'><h3 class='hsd'>"+question+"</h3><br/><div class=''>";
    for(i = 0; i<answers.length; i++)
    {
        let lect  = "x"+key;
        let answer  = answers[i];
        txt += "<p class='hsd1'><label><input type='radio' class='uk-radio' name='"+lect+"'> "+answer+"</label></p>";
    }
   
    txt += "</div></div>";
}
let ext = "<div class='tab'><p><label>Upload Photos:</label></p>";
ext += "<div class='drop-area' id='drop-area'><p>Drag & Drop Photos Here or Click to Upload</p>";
ext += "<input type='file' id='file-input' name='files' multiple accept='image/*' style='display: none;'></div>";
ext += "<div class='preview-container' id='preview-container'></div></div>";
ext += "<div class='tab'><p><label>First Name:</label><input type='text' id='first_name' name='first_name' placeholder='Enter your first name' REQUIRED></p>";
ext += "<p><label>Last Name:</label><input type='text' id='last_name' name='last_name' placeholder='Enter your last name' REQUIRED></p>";
ext += "<p><label>Phone Number:</label><input type='tel' id='contact_number' name='contact_number' placeholder='Enter your phone number' REQUIRED></p>";
ext += "<p><label>Email:</label><input type='email' id='email' name='email' placeholder='Enter your email' REQUIRED></p></div>";

txt += ext;
$("#insteps").html(txt);

numC();
}

function bullets(num)
{
    let txt = "";
for(let i=0; i<num+2; i++)
{
txt += "<span class='step'></span>";
}
$("#bullets").html(txt);
}
initializeDragAndDrop();

function initializeDragAndDrop() {
    const dropArea = document.getElementById("drop-area");
    const fileInput = document.getElementById("file-input");
    const previewContainer = document.getElementById("preview-container");

    // Event listener for clicking on the drop area
    dropArea.addEventListener("click", () => fileInput.click());

    // Event listener for handling file selection
    fileInput.addEventListener("change", handleFiles);

    // Drag and drop events
    ["dragenter", "dragover"].forEach(eventName => {
        dropArea.addEventListener(eventName, (e) => {
            e.preventDefault();
            dropArea.classList.add("highlight");
        });
    });

    ["dragleave", "drop"].forEach(eventName => {
        dropArea.addEventListener(eventName, (e) => {
            e.preventDefault();
            dropArea.classList.remove("highlight");
        });
    });

    dropArea.addEventListener("drop", (e) => {
        const files = e.dataTransfer.files;
        handleFiles({ target: { files: files } });
    });

    // Handle selected or dropped files
    function handleFiles(event) {
        const files = event.target.files;
        previewContainer.innerHTML = ""; // Clear previous previews
        Array.from(files).forEach(file => {
            if (file.type.startsWith("image/")) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    const img = document.createElement("img");
                    img.src = e.target.result;
                    img.classList.add("preview-image");
                    img.style.width = "100px";
                    img.style.height = "100px";
                    img.style.objectFit = "cover";
                    img.style.margin = "5px";
                    previewContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            } else {
                alert("Please upload only image files.");
            }
        });
    }
}
