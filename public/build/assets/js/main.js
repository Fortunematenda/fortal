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
                let services = data["services"];
                $.each(services, function(index, service) {
                    let serviceName = service.service_name;
                    let serviceId = service.id;
                    $("#inner-service").append(`<li class='service' id='${serviceId}' service_name='${serviceName}'>${serviceName}</li>`);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error:', status, error); // Improved error logging
            },
            complete: function() {
                // Optional complete action
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
    $("#search-service").hide();
    $("#inner-service").empty();
    $("#step").attr("href", `/profession/create-account/${serviceId}?service=${serviceName}`);
});

// Slideshow for images
$(document).ready(function() {
    let currentIndex = 0;
    const images = $('.slideshow img');
    const imageCount = images.length;

    function showNextImage() {
        images.eq(currentIndex).removeClass('active').fadeOut(1000);
        currentIndex = (currentIndex + 1) % imageCount;
        images.eq(currentIndex).addClass('active').fadeIn(1000);
    }

    images.eq(currentIndex).addClass('active').fadeIn(1000);
    setInterval(showNextImage, 3000); // Change image every 3 seconds
});

// Profile picture preview on change
document.getElementById('profile_picture').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('profilePicturePreview').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});

