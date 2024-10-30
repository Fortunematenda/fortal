// Event listener for keyup on #serviceTxt 
$(document).on("keyup", "#serviceTxt", function() {
    let serviceTxt = $(this).val();
    let _token = $('input[name="_token"]').val(); // CSRF token
    $("#inner-service").empty();

    if (serviceTxt.length > 2) {
        $.ajax({
            url: '/getservices',
            type: 'POST',
            data: { serviceTxt, _token }, // Send data in one object
            beforeSend: function() {
                $("#search-service").show(); // Show loading or search div
                
            },
            success: function(data) {
                console.log(data);
                let services = data.services; // Simplified access to services array
                $.each(services, function(index, service) {
                    let serviceName = service.service_name;
                    let serviceId = service.id;
                    console.log(serviceName);
                    console.log(serviceId);
                    $("#inner-service").append(`
                        <li class='service' id='${serviceId}' service_name='${serviceName}'>${serviceName}</li>
                    `);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error:', status, error); // Improved error logging
            },
            complete: function() {
                //$("#search-service").hide(); // Hide loading or search div after request completes
            }
        });
    }
});

// Event listener for clicking on a service from the list
$(document).on("click", ".service", function() {
    let serviceId = $(this).attr("id");
    let serviceName = $(this).attr("service_name");
    $("#serviceTxt").val(serviceName);
    $("#serviceID").val(serviceId);
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
});
