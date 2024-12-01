<!-- resources/views/customer/requests.blade.php -->
<x-customernav>
<link rel="stylesheet" href="{{asset('build/assets/css/main_v2-built.645e5822f3.v2.css')}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expert Profile</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        /* Container */
        .profile-container {
            max-width: 900px;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        /* Header Section */
        .profile-header {
            text-align: center;
            background-color: #6c63ff;
            color: white;
            padding: 30px 20px;
        }

        .profile-logo {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 3px solid white;
        }

        .profile-header h1 {
            font-size: 26px;
            margin-bottom: 10px;
        }

        .tags {
            margin: 10px 0;
        }

        .tags span {
            background-color: #ffffff;
            color: #6c63ff;
            padding: 6px 12px;
            border-radius: 16px;
            font-size: 14px;
            margin: 5px;
            display: inline-block;
            font-weight: bold;
        }

        .request-reply-btn {
            margin-top: 20px;
            background-color: #ffffff;
            color: #6c63ff;
            border: none;
            padding: 12px 24px;
            border-radius: 24px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .request-reply-btn:hover {
            background-color: #f4f4f4;
            color: #6c63ff;
        }

        /* Body Section */
        .profile-body {
            padding: 20px 30px;
        }

        .section-title {
            font-size: 20px;
            margin-bottom: 15px;
            color: #6c63ff;
            font-weight: bold;
        }

        .profile-about p {
            margin-bottom: 15px;
            color: #555;
        }

        .profile-overview p {
            margin: 5px 0;
        }

        .profile-overview strong {
            color: #6c63ff;
        }

        /* Photos Section */
        .profile-photos {
            padding: 20px 30px;
            border-top: 1px solid #eaeaea;
        }

        .photos-grid {
            display: flex;
            gap: 15px;
            overflow-x: scroll;
            padding-bottom: 10px;
        }

        .photos-grid img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Reviews Section */
        .profile-reviews {
            padding: 20px 30px;
            border-top: 1px solid #eaeaea;
        }

        .review {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .review h4 {
            margin: 0;
            color: #6c63ff;
            font-size: 18px;
        }

        .review p {
            color: #555;
            font-size: 14px;
        }

        .review .rating {
            color: #ffcc00;
            font-size: 18px;
        }

        /* Footer */
        .profile-footer {
            text-align: center;
            background-color: #f4f4f4;
            padding: 10px;
            font-size: 14px;
            color: #666;
        }

        /* Hidden Services */
        .more-services {
            display: none;
            margin-top: 10px;
        }




    .profile-photos {
        margin: 20px 0;
        text-align: center;
    }

    .section-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    /* Marquee Styling */
    .marquee {
        overflow: hidden;
        white-space: nowrap;
        width: 100%;
        padding: 10px 0;
        background: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 10px;
    }

    .marquee-content {
        display: inline-flex;
        animation: scroll 30s linear infinite;
    }

    /* Images in the marquee */
    .marquee-content img {
        height: 200px;
        margin: 0 10px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    /* Hover effect for images */
    .marquee-content img:hover {
        transform: scale(1.1);
    }

    /* Keyframes for marquee scrolling */
    @keyframes scroll {
        0% {
            transform: translateX(100%);
        }
        100% {
            transform: translateX(-100%);
        }
    }


    </style>
</head>
<body>
    <div class="profile-container">
        <!-- Header -->
        <div class="profile-header">
            <img src="logo.png" alt="Company Logo" class="profile-logo">
            <h1>Real Connection Carpet Cleaning</h1>
            <div class="tags">
                <span>Carpet Cleaning</span>
                <span>Deep Cleaning Services</span>
                <span>Pest Control</span>
                <span id="more-services-toggle" class="request-reply-btn">Show More Services</span>
            </div>
        </div>

        <!-- About Section -->
        <div class="profile-body">
            <div class="profile-about">
                <h2 class="section-title">About</h2>
                <p>At SNVL Real Connection Carpet Cleaning, we specialize in delivering professional cleaning services to both residential and commercial properties in Cape Town and surrounding areas. Our commitment lies in offering top-notch deep cleaning services at competitive rates.</p>
            </div>

            <!-- Overview Section -->
            <div class="profile-overview">
                <h2 class="section-title">Overview</h2>
                <p><strong>Elite Pro:</strong> 8 min response time</p>
                <p><strong>Hires:</strong> 1 hire on Fortai</p>
                <p><strong>Team:</strong> 2-10 staff</p>
            </div>

            <!-- More Services Section -->
            <div id="more-services" class="more-services">
                <h2 class="section-title">More Services</h2>
                <ul>
                    <li>Upholstery Cleaning</li>
                    <li>Tile and Grout Cleaning</li>
                    <li>Rug Cleaning</li>
                    <li>Odor Removal</li>
                    <li>Water Damage Restoration</li>
                </ul>
            </div>
        </div>

        <!-- Photos Section -->
        <div class="profile-photos">
    <h2 class="section-title">Photos</h2>
    <div class="marquee">
        <div class="marquee-content">
            <img src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/35-1479228507889087712.png!d=72Qsoe" alt="Cleaning Equipment">
            <img src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal-thumbnail/1212-15656972151119486286.png!d=72Qsoe" alt="Cleaning Machine">
            <img src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal_thumbnail_1119.jpg!d=72Qsoe" alt="Team at Work">
            <img src="https://d1vbfnp4jhzk1f.cloudfront.net/s/modal_thumbnail_132.jpg!d=72Qsoe" alt="Service Van">
        </div>
    </div>
  

        <!-- Reviews Section -->
        <div class="profile-reviews">
            <h2 class="section-title">Reviews</h2>
            <div class="review">
                <h4>John Doe</h4>
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <p>Excellent service! The team arrived on time and did a fantastic job cleaning my carpets. Highly recommend!</p>
            </div>
            <div class="review">
                <h4>Jane Smith</h4>
                <div class="rating">⭐⭐⭐⭐</div>
                <p>Very satisfied with the results. The team was professional and efficient. I would use them again!</p>
            </div>
            <div class="review">
                <h4>Mark Brown</h4>
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <p>Fantastic job! My carpets look brand new, and the staff was friendly and thorough. Highly recommended.</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="profile-footer">
            &copy; 2024 Real Connection Carpet Cleaning. All Rights Reserved.
        </div>
    </div>

    <script>
        // JavaScript to toggle more services visibility
        document.getElementById('more-services-toggle').addEventListener('click', function() {
            var services = document.getElementById('more-services');
            if (services.style.display === 'none' || services.style.display === '') {
                services.style.display = 'block';
                this.textContent = 'Show Less Services';
            } else {
                services.style.display = 'none';
                this.textContent = 'Show More Services';
            }
        });
    </script>
</body>


 
</x-customernav>