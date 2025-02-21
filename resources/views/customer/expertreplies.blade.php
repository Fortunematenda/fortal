<x-app-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lea Replies</title>
    <!-- Bootstrap CSS -->
 <script>console.log("fumm");</script>
<link rel="stylesheet" href="https://sliderm.com/dist/1.0.8/sliderm.css">
<script src="https://sliderm.com/dist/1.0.8/sliderm.js">console.log("dzdz");</script>
<script>console.log("fff");</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJQ8l7f+K2wL3g60kF3gnm+f6X8QO5r57WfRpxVS43v7wBfeJY4p+V3joEJe" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybR12FwBfj6vvZQvi4z5BvNK1HhZ1Xc2/3pJZqLFfINkQeK6e" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0zUtb6O9yVemH7A0/Tl5PpRxmA7hP5r9pMQzF+X0ZqC5C3xZ" crossorigin="anonymous"></script>

   <style>
        

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
.text-yellow-400{
    color:#f1c40f !important;
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
            background-color: #eee;
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
* {
    margin: 0;
    padding: 0
}

body {
    background-color: #000
}

.card {
    width: 350px;
    background-color: #efefef;
    border: none;
    cursor: pointer;
    transition: all 0.5s;
}

.image img {
    transition: all 0.5s
}

.card:hover .image img {
    transform: scale(1.5)
}

.btn {
    height: 140px;
    width: 140px;
    border-radius: 50%
}

.name {
    font-size: 22px;
    font-weight: bold
}

.idd {
    font-size: 14px;
    font-weight: 600
}

.idd1 {
    font-size: 12px
}

.number {
    font-size: 22px;
    font-weight: bold
}

.follow {
    font-size: 12px;
    font-weight: 500;
    color: #444444
}

.btn1 {
    height: 40px;
    width: 150px;
    border: none;
    background-color: #000;
    color: #aeaeae;
    font-size: 15px
}

.text span {
    font-size: 13px;
    color: #545454;
    font-weight: 500
}

.icons i {
    font-size: 19px
}

hr .new1 {
    border: 1px solid
}

.join {
    font-size: 14px;
    color: #a0a0a0;
    font-weight: bold
}

.date {
    background-color: #ccc
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
        animation: scroll 15s linear infinite;
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

    .profile-photos {
        margin: 20px 0;
        text-align: center;
    }

    .section-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
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
        .profile-container {
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            text-align: center;
            padding: 20px;
            background: #850385ab;
            color: white;
        }

        .header img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto;
            display: block;
        }

        .header h1 {
            margin: 10px 0 5px;
            font-size: 1.8em;
        }

        .header p {
            margin: 5px 0;
            font-size: 1em;
        }

        .content {
            padding: 20px;
        }

        .content h3 {
            border-bottom: 2px solid #850385ab;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        .info-list {
            list-style: none;
            padding: 0;
        }

        .info-list li {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .info-list li span {
            font-weight: bold;
        }

        .skills, .social {
            margin-top: 20px;
        }

        .skills ul, .social ul {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skills li, .social li {
            padding: 8px 12px;
            background: #850385ab;
            color: white;
            border-radius: 5px;
            font-size: 0.9em;
        }

        .social li a {
            color: white;
            text-decoration: none;
        }

        @media (max-width: 600px) {
            .profile-container {
                margin: 10px;
            }

            .header h1 {
                font-size: 1.5em;
            }

            .header p {
                font-size: 0.9em;
            }
        }
        #modal-overflow{
z-index: 10000 !important;
        }

        
        .modal {
            z-index: 100000 !important;
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 8px;
        }

        .modal.close {
            cursor: pointer;
            position: absolute;
            top: 20px;
            right: 20px;
            color: white !important;
            font-size: 24px;
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
      <!-- $path = strlen($img)>5?Storage::url('uploads/' . $img):"https://www.w3schools.com/w3images/avatar2.png"; -->
        <div class="client-list">
            @foreach($replyexperts as $expert)
            <div class="client-item dexpert" contacted_user_id="{{$expert->user_id}}" onclick="selectClient('{{ $expert->first_name }} {{ $expert->last_name }}')">

            @php
    $img = $expert->profile_picture;
    $path = "https://www.w3schools.com/w3images/avatar2.png";
@endphp

                <img src="{{ $path }}" alt="Profile" class="avatar" ><span class="client-name">{{$expert->first_name}} {{$expert->last_name}}</span>
                
            </div><hr>
            @endforeach
           
        </div>
    </div>
        <!-- Chat Container -->
    <div class="chat-container">
        <div class="chat-header" id="chat-header">
            <div class="header-left">
            <a class="" href="#modal-overflow" uk-toggle>
                <img src="" alt="Avatar" class="avatar path">
                </a>
                <span class="header-name" id="chat-title">{{$replyexperts[0]->first_name}} {{$replyexperts[0]->last_name}}</span>
            </div>
           
        </div>

        <!-- Chat Body -->
        <div class="chat-body" id="chat-body">
         
        </div>
       
        <!-- Input Area -->
        <div class="chat-input">
            <input type="text" id="user-input" placeholder="Type a message..." />
            <button id="send-button">Send</button>
        </div>
        <input value="{{$lead_id}}" id="xkk" hidden/>
        <input value="{{$user_id}}" id="uuus" hidden/>
    </div>
    @else
    <h3 align="center">No Experts</h3>
    @endif
</div>


<div id="modal-overflow" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="uk-modal-header header">
        <img id="path" class="avatar path" src="#" alt="Profile Photo">
            <h1 style="color:white" id="name"></h1>
            <p>{{$expertnotes[0]->service_name}}</p>
        </div>

        <div class="uk-modal-body infod" uk-overflow-auto>
      
        </div>
       

    </div>
</div>


                                                     
</div>
                      </div>
    
    </div>
  </div>
</div>

<div id="imageModal" class="modal">
    <span class="close" id="closeModal">&times;</span>
    <img id="modalImage" src="" alt="Zoomed Image">
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
        chatHistory[currentClient] = chatBody;
    }

</script>
</x-app-layout>
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
                $("#chat-body").html("loading....");
            },
            success: function(data) {
                console.log(data);
                const json = data["expertnotes"];
                const details = data["details"];
                const name = data["name"];
                const path = data["profile_pic"];
                let txt = "";
                for(let key in json)
            {
                if(json[key]["user_id"] == json[key]["leads_user_id"])
            {
            txt += '<div class="message user"><img class="avatar" src="'+path+'"><div>';
            txt += '<p>'+json[key]["description"]+'</p><span class="timestamp"> '+json[key]["date_entered"]+'</span></div></div>';
            
            }
            else
            {
                txt += '<div class="message bot"><img class="avatar" src="'+path+'"><div>';
            txt += '<p>'+json[key]["description"]+'</p><span class="timestamp"> '+json[key]["date_entered"]+'</span></div></div>';
            }  

            }
            $("#chat-body").html(txt);  
            $(".infod").html(details);    
            $("#name").html(name);
            $(".path").attr('src',path);                       
            },
            error: function(xhr, status, error) {
                console.error('Error:', status, error); // Improved error logging
            },
            complete: function() {
                $("#loader").hide();
                activateSlide();
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


 

    document.getElementById('closeModal').addEventListener('click', () => {
        const modal = document.getElementById('imageModal');
        modal.style.display = 'none';
    });

    document.getElementById('imageModal').addEventListener('click', (e) => {
        if (e.target === e.currentTarget) {
            e.currentTarget.style.display = 'none';
        }
    });

    $(document).ready(function(){
        var firstDexpert = $('.dexpert:first');
firstDexpert.click();

    });


  
        let currentRating = 0;

        function setRating(rating) {
            currentRating = rating;
            let stars = document.querySelectorAll("span.cursor-pointer");
            stars.forEach((star, index) => {
                star.style.color = index < rating ? "#facc15" : "#d1d5db"; // Yellow for selected stars
            });
        }

        function submitReview() {
        
            let comment = document.getElementById("comment").value;
            if (currentRating === 0 || comment.trim() === "") {
                alert("Please provide a rating and a comment.");
                return;
            }

            let lead_id = $("#xkk").val();
        let contacted_user_id = $("#uuus").val();
        let _token = $('input[name="_token"]').val(); 
       
        const obj = {
            lead_id,
            contacted_user_id,
            comment,
            _token,
            rating:currentRating
        };

        $.ajax({
            url: '/postrating',
            type: 'POST',
            data: obj, // Send data in one object
            beforeSend: function() {
            },
            success: function(data) {
              
                if(data.status === "success")     
                {
            let reviewList = document.getElementById("reviewList");
            let newReview = document.createElement("li");
            newReview.className = "border p-3 rounded-lg bg-gray-50";
            newReview.innerHTML = `<strong>⭐ ${currentRating} Stars</strong> - ${comment}`;

            reviewList.appendChild(newReview);
            document.getElementById("comment").value = ""; // Clear input
            setRating(0); // Reset stars
                }       
            },
            error: function(xhr, status, error) {
                console.error('Error:', status, error); // Improved error logging
            },
            complete: function() {
                //$("#loader").hide();
            }
        });    

           
        }

       function activateSlide(){
            const sliderm = new Sliderm('#exampe-slider', {
  arrow: true,
  pagination: true,
  grouping: false,
  loop: true,
  preview: true,
  columns: 4,
  duration: 1000,
  spacing: 10,
  align: 'center',
});

    document.querySelectorAll('.sliderm__slide img').forEach(img => {
        img.addEventListener('click', (e) => {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            modal.style.display = 'flex';
            modalImg.src = e.target.src;
        });
    });
        }

</script>