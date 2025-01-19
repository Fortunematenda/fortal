
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lea Replies</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: white;
        }

        .container {
            display: flex;
            height: 100vh;
            width: 100%;
            position: fixed
        }

        /* Left Navigation */
        .left-nav {
            width: 250px;
            background-color: #ca6cc4;;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            transition: all 0.3s ease;
        }

        .left-nav.collapsed {
            width: 80px;
        }

        .nav-toggle {
            position: absolute;
            top: 10px;
            left: 10px;
            cursor: pointer;
            font-size: 24px;
        }

        .client-list {
            margin-top: 50px;
            flex-grow: 1;

        }

        .client-item {
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .client-item:hover {
            background-color: #3498db;
        }

        .client-name {
            font-size: 16px;
        }

        /* Chat Container */
        .chat-container {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            height: 85vh;
            overflow-y: scroll;
        }

        .chat-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(0, 0, 0, 0);
            background-image: linear-gradient(to right, rgb(255, 255, 255), rgb(128, 0, 128));
            padding: 15px;
            color: white;
            font-size: 20px;
            position: sticky;
            top: 0;
            z-index: 10;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .chat-header .header-left {
            display: flex;
            align-items: center;
            
        }

        .chat-header .header-left .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            cursor: pointer;
        }

        .chat-header .header-left .header-name {
            font-weight: 600;
            font-size: 18px;
            color: #1c1a1a;
        }

        .chat-header .header-right {
            display: flex;
            align-items: center;
        }

        .chat-header .header-right .header-icon {
            margin-left: 20px;
            cursor: pointer;
            font-size: 22px;
            color: #ffffff;
            transition: color 0.3s ease;
        }

        .chat-header .header-right .header-icon:hover {
            color: #f1c40f;
        }

        .profile-modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  z-index: 1000;
  justify-content: center;
  align-items: center;
}

.profile-modal-content {
  background: #fff;
  border-radius: 10px;
  width: 90%;
  max-width: 600px;
  padding: 20px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  position: relative;
  overflow-y: auto;
  max-height: 90%;
}

.close-btn {
  background: none;
  border: none;
  font-size: 1.5rem;
  position: absolute;
  top: 10px;
  right: 10px;
  cursor: pointer;
  color: #888;
  transition: color 0.2s ease-in-out;
}

.close-btn:hover {
  color: #000;
}

/* Profile header */
.profile-header {
  text-align: center;
  margin-bottom: 20px;
}

.avatar {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-bottom: 10px;
}

.role {
  font-size: 0.9rem;
  color: #666;
}

/* Profile information */
.profile-info {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.info-section {
  border-top: 1px solid #eee;
  padding-top: 10px;
}

.info-section h3 {
  margin-bottom: 10px;
  font-size: 1.1rem;
  color: #333;
}

.info-section p {
  margin: 5px 0;
  color: black;
}

.info-section strong {
  color: #000;
}

        /* Chat Body */
        .chat-body {
            flex-grow: 1;
            padding: 10px;
            overflow-y: auto;
            background-color:#ffffff70;;
        }

        .chat-input {
            display: flex;
            padding: 10px;
            border-top: 1px solid #ccc;
            background-color: #f8f8f8;
        }

        .chat-input input {
            flex-grow: 1;
            padding: 10px;
            border-radius: 20px;
            border: 1px solid #ccc;
            font-size: 14px;
            color: black;
        }

        .chat-input button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 20px;
            margin-left: 10px;
            cursor: pointer;
        }

        .chat-input button:hover {
            background-color: #128c7e;
        }

        .message {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .message.bot {
            justify-content: flex-start;
        }

        .message.user {
            justify-content: flex-end;
        }

        .message p {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 10px;
            background-color: grey;
        }

        .message.user p {
            background-color: #ca6cc4;
            color: white;
        }

        .timestamp {
            font-size: 12px;
            color: #888;
            margin-top: 5px;
        }

        .avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
        @media (min-width: 1536px) {
  .container {
    max-width: 100% !important;
  }
}
    </style>
</head>
<body>
<form>
@csrf
</form>

<!-- Container for Left Navbar and Chat -->
<div class="container">
    <!-- Left Navigation -->
     @if(count($replyexperts)>0)
    <div class="left-nav">
      
        <div class="client-list">
            @foreach($replyexperts as $expert)
            <div class="client-item dexpert" contacted_user_id="{{$expert->user_id}}" onclick="selectClient('{{ $expert->first_name }} {{ $expert->last_name }}')">

            <img src="https://www.w3schools.com/w3images/avatar2.png" alt="Avatar" class="avatar" onclick="toggleProfileModal()"><span class="client-name">{{$expert->first_name}} {{$expert->last_name}}</span>
            </div><hr>
            @endforeach
           
        </div>
    </div>
        <!-- Chat Container -->
    <div class="chat-container">
        <div class="chat-header" id="chat-header">
            <div class="header-left">
                <img src="https://www.w3schools.com/w3images/avatar2.png" alt="Avatar" class="avatar" onclick="toggleProfileModal()">
                <span class="header-name" id="chat-title">{{$replyexperts[0]->first_name}} {{$replyexperts[0]->last_name}}</span>
            </div>
           
        </div>

        <!-- Chat Body -->
        <div class="chat-body" id="chat-body">
            <!-- Chat messages will appear here --> 
          
            @foreach($expertnotes as $note)

            @if($note->user_id == $note->leads_user_id)
            <div class="message user"><img class="avatar" src="https://www.w3schools.com/w3images/avatar2.png"><div>
                <p>{{$note->description}}</p><span class="timestamp"> {{$note->date_entered}}</span></div>
            </div>
            @else
            <div class="message bot"><img class="avatar" src="https://www.w3schools.com/w3images/avatar5.png"><div>
                <p>{{$note->description}}</p>
                <span class="timestamp"> {{$note->date_entered}}</span>
            </div></div>
            @endif
      

            @endforeach
        </div>

        <!-- Input Area -->
        <div class="chat-input">
            <input type="text" id="user-input" placeholder="Type a message..." />
            <button id="send-button">Send</button>
        </div>
        <input value="{{$lead_id}}" id="xkk" hidden/>
        <input value="{{$user_id}}" id="uuus"/>
    </div>
    @else
    <h3 align="center">No Experts</h3>
    @endif
</div>

<div class="profile-modal" id="profile-modal">
  <div class="profile-modal-content">
    <button class="close-btn" onclick="closeProfileModal()">&times;</button>
    <!-- resources/views/customer/requests.blade.php -->

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


 

  </div>
</div>

<script>
    
    let currentClient = '';
    let chatHistory = {}; // Store chat history for each client

    function toggleNav() {
        const leftNav = document.querySelector('.left-nav');
        leftNav.classList.toggle('collapsed');
    }

    function selectClient(clientName) {
        currentClient = clientName;
        document.getElementById('chat-title').textContent = currentClient;

        // Check if there's chat history for the client
        if (chatHistory[currentClient]) {
            document.getElementById('chat-body').innerHTML = chatHistory[currentClient];
        } else {
            document.getElementById('chat-body').innerHTML = ''; // No history for the new client
        }
    }

 

    function sendMessage() {
        let userInput = document.getElementById('user-input').value.trim();
        if (userInput === '') return;

        // Display user message
        addMessage(userInput, 'user');
        document.getElementById('user-input').value = '';

        // Store the chat history
        storeChatHistory();

        
    }

    function addMessage(message, sender) {
        const messageContainer = document.createElement('div');
        messageContainer.classList.add('message', sender);

        // Add avatar and message content
        const avatar = document.createElement('img');
        avatar.classList.add('avatar');
        avatar.src = sender === 'user' ? "https://www.w3schools.com/w3images/avatar2.png" : "https://www.w3schools.com/w3images/avatar5.png"; // Add different avatar for bot

        const messageText = document.createElement('p');
        messageText.textContent = message;

        const timestamp = document.createElement('span');
        timestamp.classList.add('timestamp');
        timestamp.textContent = new Date().toLocaleTimeString();

        const messageContent = document.createElement('div');
        messageContent.appendChild(messageText);
        messageContent.appendChild(timestamp);

        messageContainer.appendChild(avatar);
        messageContainer.appendChild(messageContent);

        const chatBody = document.getElementById('chat-body');
        chatBody.appendChild(messageContainer);
        chatBody.scrollTop = chatBody.scrollHeight; // Auto-scroll to the bottom
    }

    function storeChatHistory() {
        const chatBody = document.getElementById('chat-body').innerHTML;
        chatHistory[currentClient] = chatBody; // Store the chat history for the current client
    }

    function toggleProfileModal() {
        const modal = document.getElementById('profile-modal');
        modal.style.display = modal.style.display === 'flex' ? 'none' : 'flex';
    }

    function closeProfileModal() {
        const modal = document.getElementById('profile-modal');
        modal.style.display = 'none';
    }
</script>


<script>
    $(document).on('click','.dexpert',function(){
        let lead_id = $("#xkk").val();
        let contacted_user_id = $(this).attr("contacted_user_id"); 
        let _token = $('input[name="_token"]').val(); 
        const obj = {
            lead_id,
            contacted_user_id,
            _token
        };
        $("#uuus").val(contacted_user_id);
        $.ajax({
            url: '/getleadnotes',
            type: 'POST',
            data: obj, // Send data in one object
            beforeSend: function() {
                $("#chat-body").empty();
            },
            success: function(data) {
                const json = data["expertnotes"];
                let txt = "";
                for(let key in json)
            {
                if(json[key]["user_id"] == json[key]["leads_user_id"])
            {
            txt += '<div class="message user"><img class="avatar" src="https://www.w3schools.com/w3images/avatar2.png"><div>';
            txt += '<p>'+json[key]["description"]+'</p><span class="timestamp"> '+json[key]["date_entered"]+'</span></div></div>';
            
            }
            else
            {
                txt += '<div class="message bot"><img class="avatar" src="https://www.w3schools.com/w3images/avatar2.png"><div>';
            txt += '<p>'+json[key]["description"]+'</p><span class="timestamp"> '+json[key]["date_entered"]+'</span></div></div>';
            }  

            }
            $("#chat-body").html(txt);                             
            },
            error: function(xhr, status, error) {
                console.error('Error:', status, error); // Improved error logging
            },
            complete: function() {
                $("#loader").hide();
            }
        });

    })
    $(document).on("click", "#send-button", function() {
        let lead_id = $("#xkk").val();
        let contacted_user_id = $("#uuus").val();
        let _token = $('input[name="_token"]').val(); 
        let description = $("#user-input").val();
        const obj = {
            lead_id,
            contacted_user_id,
            description,
            _token
        };
   
        $.ajax({
            url: '/addleadnote',
            type: 'POST',
            data: obj, // Send data in one object
            beforeSend: function() {
            },
            success: function(data) {
                sendMessage();
              
            },
            error: function(xhr, status, error) {
                console.error('Error:', status, error); // Improved error logging
            },
            complete: function() {
                $("#loader").hide();
            }
        });    
});

</script>