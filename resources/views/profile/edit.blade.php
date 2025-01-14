<x-app-layout>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="utf-8">
      <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
      <!--  All snippets are MIT license http://bootdey.com/license -->
      <title>account settings - Bootdey.com</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
      
      <style type="text/css">
  
  
  .ui-w-80 {
      width: 80px !important;
      height: auto;
  }
  
  .btn-default {
      border-color: rgba(24,28,33,0.1);
      background: rgba(189, 3, 226, 0);
      color: #4E5155;
  }
  
  label.btn {
      margin-bottom: 0;
  }
  
  .btn-outline-primary {
      border-color: #26B4FF;
      background: transparent;
      color: #26B4FF;
  }
  
  .btn {
      cursor: pointer;
  }
  
  .text-light {
      color: #babbbc !important;
  }
  
  .btn-facebook {
      border-color: rgba(0,0,0,0);
      background: #3B5998;
      color: #fff;
  }
  
  .btn-instagram {
      border-color: rgba(0,0,0,0);
      background: #000;
      color: #fff;
  }
  
  .card {
      background-clip: padding-box;
      box-shadow: 0 1px 4px rgba(24,28,33,0.012);
  }
  
  .row-bordered {
      overflow: hidden;
  }
  
  .account-settings-fileinput {
      position: absolute;
      visibility: hidden;
      width: 1px;
      height: 1px;
      opacity: 0;
  }
  .account-settings-links .list-group-item.active {
      font-weight: bold !important;
  }
  html:not(.dark-style) .account-settings-links .list-group-item.active {
      background: transparent !important;
  }
  .account-settings-multiselect ~ .select2-container {
      width: 100% !important;
  }
  .light-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(24, 28, 33, 0.03) !important;
  }
  .light-style .account-settings-links .list-group-item.active {
      color: #4e5155 !important;
  }
  .material-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(24, 28, 33, 0.03) !important;
  }
  .material-style .account-settings-links .list-group-item.active {
      color: #4e5155 !important;
  }
  .dark-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(255, 255, 255, 0.03) !important;
  }
  .dark-style .account-settings-links .list-group-item.active {
      color: #fff !important;
  }
  .light-style .account-settings-links .list-group-item.active {
      color: #4E5155 !important;
  }
  .light-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(24,28,33,0.03) !important;
  }
  
  
  
      </style>
  </head>
  <body>
  <div class="container light-style flex-grow-1 container-p-y">
  
      <h4 class="font-weight-bold py-3 mb-4">
        Account settings
      </h4>
  
      @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @endif
      <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <!-- Form fields go here -->
    

        
      <div class="card overflow-hidden ">
        <div class="row no-gutters row-bordered row-border-light">
          <div class="col-md-3 pt-0 ">
          <div class="list-group list-group-flush account-settings-links overflow-auto scroll-touch">
    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#profile">General</a>
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#lead_settings">Lead Settings</a>
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#services">Services</a>
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#purchase_credits">Purchase Credits</a>
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#social-links">Social links</a>
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#password">Update Password</a>
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#notifications">Notifications</a>
</div>
</div>
          <div class="col-md-9">
            <div class="tab-content">

             <!--General-->
                <div class="tab-pane fade active show" id="profile">
                @include('profile.partials.update-profile-information-form')
                    <div class="card-body media align-items-center"></div>
                        <div class="media-body ml-4"></div>
                        <div class="card-body"></div>
                    </div>

                    <!--Password-->
                    <div class="tab-pane fade" id="profile">
                        <div class="card-body pb-2">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div> 
                    <div class="tab-pane fade" id="services">
                        <div class="card-body pb-2">
                            @include('profile.partials.update-services')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="password">
                        <div class="card-body pb-2">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <!--Lead Settings-->
                    <div class="tab-pane fade" id="lead_settings">
                        <div class="card-body pb-2">
                            @include('profile.partials.leads-settings-form')
                        </div>
                    </div>
                    <!--Purchase Credits-->
                    <div class="tab-pane fade" id="purchase_credits">
                        @include('profile.partials.buy-credits-form')
                        <div class="container my-5"></div>
                    </div>  
                    
                    <!--Notifications-->
                    <div class="tab-pane fade" id="notifications">
                    @include('profile.partials.notifications-form')
                        <div class="container my-5"></div>
                    </div>
                    
                    <div class="tab-pane fade" id="social-links">
                    @include('profile.partials.social-links-form')
                        <div class="container my-5"></div>
                    </div>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
     
  
    </div>
   </div>
        </div>
        </form>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript"></script>
  </body>
  </html>
  </x-app-layout>
  
  <script>
      function showContent(contentId, tab) {
          // Hide all content divs
          const contents = document.querySelectorAll('.content');
          contents.forEach(content => {
              content.classList.add('hidden');
          });
  
          // Remove active styles from all tabs
          const allTabs = document.querySelectorAll('.tab-button');
          allTabs.forEach(function(t) {
              t.classList.remove('text-blue-500', 'border-b-2', 'border-blue-500');
              t.classList.add('text-gray-500');
          });
  
          // Show the selected content and style the active tab
          tab.classList.remove('text-gray-500');
          tab.classList.add('text-blue-500', 'border-b-2', 'border-blue-500');
          document.getElementById(contentId).classList.remove('hidden');
      }
  
     
      window.onload = function() {
          const profileTab = document.querySelector('.tab-button');
          showContent('profile', profileTab);
      };
  
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
  
   
      document.getElementById('saveButton').addEventListener('click', function() {
          toast('success', 'Profile updated successfully!', 3000);
      });
      
  </script>
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Qd54wgjWo4t-Klmi3m_pz8HbHz0GQto&libraries=places&callback=initializeAutocomplete" type="text/javascript"></script>
  
  