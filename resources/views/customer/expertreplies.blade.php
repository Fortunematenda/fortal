<x-customernav>

<link rel="stylesheet" type="text/css" href="https://frontend-production.bark.com/124-becvahpe4pxa2o6n/buyer-app/605.7a64858592b4bf03.css">
<link rel="stylesheet" type="text/css" href="https://frontend-production.bark.com/124-becvahpe4pxa2o6n/buyer-app/155.9e63495fc5b25540.css">
<style>


.chat-container {
    display: flex;
    width: 100%;
}

.contacts {
    width: 25%;
    background-color: #f0f0f0;
    border-right: 1px solid #ccc;
    padding: 10px;
}

.contacts h2 {
    margin-top: 0;
}

.contacts ul {
    list-style-type: none;
    padding: 0;
}

.contacts li {
    padding: 10px;
    cursor: pointer;
    border-bottom: 1px solid #ccc;
}

.contacts li:hover {
    background-color: #e0e0e0;
}

.chat-window {
    width: 75%;
    padding: 10px;
    overflow-y: auto;
}

.chat {
    display: none;
}

.hidden {
    display: none;
}

.chat p {
    margin: 5px 0;
}

.chat .user {
    font-weight: bold;
}

</style>

<div class="v2-loading-overlay">
    <div class="loading-box fade show mx-auto">
        <div class="d-flex flex-column py-4 align-items-center">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">
                    Loading...
                </span>
            </div>
            <h4 class="loading-text pt-2">
                Please wait ...
            </h4>
        </div>
    </div>
</div>

<div>

    <div class="chat-container">
        <div class="contacts">
        <div class="pb-4">
            <h2 class="">Expert Replies</h2>
        </div>
            <ul id="contact-list">
                <li onclick="showChat('bie-my-baby')">Bie My Babie</li>
                <li onclick="showChat('ndema-union')">Ndema Union</li>
                <li onclick="showChat('bruce-hoffman')">Bruce Hoffman</li>
            </ul>
        </div>
        <div class="chat-window">
            <div id="bie-my-baby" class="chat hidden">
                <p><span class="user">Bie My Babie:</span> Mapiritsi amai haafaniri kutengwa nanaBrian wo here 😅</p>
                <p><span class="user">You:</span> Kkkkkkkk hayas</p>
                <p><span class="user">Bie My Babie:</span> Oh shame ko rakaita sei</p>
                <p><span class="user">You:</span> Raive rakazvimba</p>
            </div>
            <div id="ndema-union" class="chat hidden">
                <p><span class="user">Ndema Union:</span> Chikonas or daddy Atipa: vanhu vashe munofara hr</p>
            </div>
            <div id="bruce-hoffman" class="chat hidden">
                <p><span class="user">Bruce Hoffman:</span> Thank you Bruce, I saw your email. Much appreciated</p>
            </div>
        </div>
    </div>
    <script>

function showChat(chatId) {
    const chats = document.querySelectorAll('.chat');
    chats.forEach(chat => chat.classList.add('hidden'));
    
    const selectedChat = document.getElementById(chatId);
    selectedChat.classList.remove('hidden');
}

    </script>


</div>

</x-customernav>
