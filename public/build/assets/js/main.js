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
            $("#search-service").hide(); // Hide loading or search div after request completes
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
});

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
                throw new Error(data.error); // Handle any server-side errors
            }
            let history = data.creditHistory; // Assuming 'creditHistory' is the correct property
            let historyList = document.getElementById('credit-history-list');
            historyList.innerHTML = ''; // Clear existing history

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
