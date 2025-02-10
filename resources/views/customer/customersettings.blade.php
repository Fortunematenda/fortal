<x-app-layout>


      <div style="width:90%;margin:auto;padding:10px">
     
<form  action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('Patch')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="https://d3a1eo0ozlzntn.cloudfront.net/assets/css/main_v2-built.87872c72ad.v2.css">
        <link rel="stylesheet" href="https://d1w7gvu0kpf6fl.cloudfront.net/fonts/marin-icons-032019/Marin-Icons.css">
    
      <link rel="stylesheet" href="{{asset('build/assets/css/main_v2-built.645e5822f3.v2.css')}}">
      <form  action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('Patch')

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    {{-- Display Validation Errors --}}
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
    @endif

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class=" p-0">
    <h3 class="h3 mb-3">Settings</h3>
    <div class="row">
        <div class="col-md-5 col-xl-4">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Profile Settings</h5>
                </div>

                <div class="list-group list-group-flush" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab">
                      Account
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">
                      Password
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                      Privacy and safety
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                      Email notifications
                    </a>
                    
                </div>
            </div>
        </div>

        <div class="col-md-7 col-xl-8">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="account" role="tabpanel">

                    <div class="card">
                        <div class="card-header">
                           
                            <h5 class="card-title mb-0">Profile Picture</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                   
                                    <div class="col-md-4">
                                        <div class="text-center">
                                            <img alt="Profile Picture" src="{{ $user->profile_picture && file_exists(public_path('storage/profile_pictures/' . $user->profile_picture)) 
            ? asset('storage/profile_pictures/' . $user->profile_picture) 
            : 'https://bootdey.com/img/Content/avatar/avatar1.png' }}" class="rounded-circle img-responsive mt-2" width="128" height="128">
                                            <div class="mt-2">
                                            <span class="btn btn-primary">
    <label for="profile_picture" class="m-0">
        <i class="fa fa-upload"></i>
        <input type="file" id="profile_picture" name="profile_picture" class="d-none" accept="image/*">
    </label>
</span>
</div>
<small>For best results, use an image at least 128px by 128px in .jpg format</small>
                                        </div>
                                    </div>
                                </div>

                               
                            </form>
 
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            
                            <h5 class="card-title mb-0">Personal info</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="first_name">First name</label>
                                        <input type="text" class="form-control" id="first_name" placeholder="First name" value="{{ old('first_name', $user->first_name) }}" required autofocus autocomplete="first_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Last name</label>
                                        <input type="text" class="form-control" id="last_name" placeholder="Last name" value="{{ old('last_name', $user->last_name) }}" required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email" value="{{ old('email', $user->email) }}" required autocomplete="username" >
                                </div>
                                 <div class="form-group">
                                    <label for="contact_number">Contact Number</label>
                                    <input type="contact_number" class="form-control" id="contact_number" placeholder="Contact Number" value="{{ old('contact_number', $user->contact_number) }}"  >
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" placeholder="Location" value="{{ old('location', $user->location) }}" placeholder="Enter your location">
                                    <input type="hidden" name="latitude" id="latitude" value="{{ old('latitude', $user->latitude) }}">
                                    <input type="hidden" name="longitude" id="longitude" value="{{ old('longitude', $user->longitude) }}">
                                </div>
                              
                                <div class="text-right mt-3">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <a href="{{ route('profile.edit') }}" class="btn btn-secondary">Cancel</a>
    </div>
                            </form>

                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="password" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                  
                            <h5 class="card-title">Password</h5>

                            <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('Put')
                                <div class="form-group">
                                    <label for="update_password_current_password" :value="__('Current Password')">Current password</label>
                                    <input type="password" class="form-control" id="update_password_current_password" name="current_password" autocomplete="current-password">
                                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                    <small><a href="#">Forgot your password?</a></small>
                                </div>
                                <div class="form-group">
                                    <label for="update_password_password" :value="__('New Password')">New password</label>
                                    <input type="password" name="password" class="form-control" id="update_password_password" autocomplete="new-password">
                                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                    
                                </div>
                                <div class="form-group">
                                    <label for="update_password_password_confirmation" :value="__('Confirm Password')">Verify password</label>
                                    <input type="password" class="form-control" id="update_password_password_confirmation" name="password_confirmation" autocomplete="new-password">
                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                </div>
                                <div class="flex items-center gap-4 mt-4">
            <x-primary-button type="submit" class="btn btn-primary">{{ __('Save') }}</x-primary-button>
            <a href="{{ route('profile.edit') }}" class="btn btn-secondary">Cancel</a>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>





</form>

</x-app-layout>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>