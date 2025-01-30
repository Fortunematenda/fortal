<x-app-layout>

      
<form  action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('Patch')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="https://d3a1eo0ozlzntn.cloudfront.net/assets/css/main_v2-built.87872c72ad.v2.css">
        <link rel="stylesheet" href="https://d1w7gvu0kpf6fl.cloudfront.net/fonts/marin-icons-032019/Marin-Icons.css">
    
      <link rel="stylesheet" href="{{asset('build/assets/css/main_v2-built.645e5822f3.v2.css')}}">


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
    <div class="card-body media align-items-center wUjgt ">
    <img src="{{ $user->profile_picture && file_exists(public_path('storage/profile_pictures/' . $user->profile_picture)) 
            ? asset('storage/profile_pictures/' . $user->profile_picture) 
            : 'https://bootdey.com/img/Content/avatar/avatar1.png' }}" 
            alt="Profile Picture" 
            class="d-block ui-w-80">

            <div class="media-body ml-4 ">
            <label for="profile_picture" class="btn btn-outline-primary">
                {{ __('Upload Profile Picture') }}
                <input type="file" id="profile_picture" name="profile_picture" class="account-settings-fileinput block w-full focus:ring focus:ring-indigo-200" accept="image/*">
            </label> &nbsp;
            <div class="text-light small mt-1">Allowed JPG, GIF, or PNG. Max size of 800K</div>
        </div>
    </div>
    <hr class="border-light m-0">

    <div class="card-body">
        <!-- First Name -->
        <div class="form-group">
            <label class="form-label">First Name</label>
            <input type="text" id="first_name" name="first_name" class="form-control mb-1" value="{{ old('first_name', $user->first_name) }}" required autofocus autocomplete="first_name"/>
        </div>

        <!-- Last Name -->
        <div class="form-group">
            <label class="form-label">Last Name</label>
            <input type="text" id="last_name" name="last_name" class="form-control mb-1" value="{{ old('last_name', $user->last_name) }}" required />
        </div>

        <!-- E-mail -->
        <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control mb-1" value="{{ old('email', $user->email) }}" required autocomplete="username" />
        </div>

        <!-- Contact Number -->
        <div class="form-group">
            <label class="form-label">Contact Number</label>
            <input type="text" id="contact_number" name="contact_number" class="form-control mb-1" value="{{ old('contact_number', $user->contact_number) }}" />
        </div>
        <!-- Location -->
        <div class="form-group">
                            <label class="form-label">Location</label>
                            <input type="text" id="searchLocation" name="location" class="form-control mb-1" value="{{ old('location', $user->location) }}" placeholder="Enter your location" />
                            <input type="hidden" name="latitude" id="latitude" value="{{ old('latitude', $user->latitude) }}">
                            <input type="hidden" name="longitude" id="longitude" value="{{ old('longitude', $user->longitude) }}">
                        </div>

   
                  </div>
    <div class="text-right mt-3">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('profile.edit') }}" class="btn btn-secondary">Cancel</a>
    </div>
</form>
</x-app-layout>