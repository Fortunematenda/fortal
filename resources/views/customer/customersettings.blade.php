<x-customernav>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
 
    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="py-5 px-2 px-md-4 col-md-8 container px-2">
            <div class="row">
                <div class="col-12">
                    <h1 class="h3 mb-3">Account settings</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form">
                        <div class="d-flex rounded bg-grey-25 p-3">
                            <div class="">
                                <span class="bark-svg-icon bsi-primary-primary mr-2 bsi-hover-dark-blue info-is-private">
                                    <!-- SVG icon -->
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Icon/info_medium" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="info_medium" transform="translate(2.000000, 2.000000)" class="primary-color">
                                                <path d="M10,0 C4.48,0 0,4.48 0,10 C0,15.52 4.48,20 10,20 C15.52,20 20,15.52 20,10 C20,4.48 15.52,0 10,0 Z M10,15 C9.45,15 9,14.55 9,14 L9,10 C9,9.45 9.45,9 10,9 C10.55,9 11,9.45 11,10 L11,14 C11,14.55 10.55,15 10,15 Z M10.05,7.5 C9.35964406,7.5 8.8,6.94035594 8.8,6.25 C8.8,5.55964406 9.35964406,5 10.05,5 C10.7403559,5 11.3,5.55964406 11.3,6.25 C11.3,6.94035594 10.7403559,7.5 10.05,7.5 Z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="mb-0 text-xs">
                                Keep your details updated so that professionals can get in touch. If you no longer require the service, please close the request.
                                <a class="text-primary text-underline d-block pt-2" href="/customer/dashboard">Go to My Requests</a>
                            </div>
                        </div>

                        <!-- Profile Picture Section -->
                        <div class="form-stroke-container px-3 px-md-4 my-4 name-profile-picture-container">
                            <div class="mb-3 waiting">
                                <h4 class="setting-subsection-title">My details</h4>
                            </div>
                            <div class="waiting-hidden">
                                <div class="mx-0 form-group row align-items-center">
                                    <div class="w-auto">
                                        <img id="profile_picture" name="profile_picture" src="https://d1w7gvu0kpf6fl.cloudfront.net/img/frontend-v2/settings/default-avatar.png" class="rounded-circle profile_picture" style="height: 100px; width:100px; object-fit: cover;">
                                    </div>
                                    <div id="profile_photo_div" class="col col-md-3 px-3 align-items-middle justify-content-center">
                                        <input type="hidden" id="profile_picture" name="profile_picture" class="profile_picture_new_ref">
                                        <input type="file" id="profile_picture_file" name="profile_picture_file" class="form-control profile_picture_file" style="visibility:hidden;position:absolute;top:-50;left:-50;" accept=".jpg,.jpeg,.png,.x-png,.tif,.tiff,.webp">
                                        <a href="#" class="btn btn-outline-blue d-block  settings-submit profile_picture_link">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <span class="submit-spinner spinner-border spinner-border-sm mr-3" role="status" aria-hidden="true"></span>
                                                <span class="submit-text">Upload</span>
                                            </div>
                                        </a>
                                        <a href="#" class="btn font-primary my-2 btn-tertiary d-block  profile_picture_cam" id="profile_picture_cam" name="profile_picture_cam">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <span class="d-flex">Take photo</span>
                                            </div>
                                        </a>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>

                                <!-- Name and Phone Section -->
                                <div class="form-group mb-3">
                                    <label for="profile_name">Name</label>
                                    <input id="profile_name" name="profile_name" type="text" placeholder="Name" class="form-control">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="profile_tel">Phone number</label>
                                    <input id="profile_tel" name="profile_tel" type="text" placeholder="Telephone" class="form-control">
                                    <div class="invalid-feedback mt-0 pt-2"></div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="profile_email">Email</label>
                                    <input id="profile_email" name="profile_email" type="text" placeholder="Email" class="form-control">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Password Change Section -->
                        <div class="row">
                            <div class="col-12">
                                <div class="form-stroke-container px-2 px-md-4 mb-4">
                                    <div class="js-account-change-password waiting-hidden">
                                        <h4 class="setting-subsection-title mb-3">Password</h4>
                                        <div class="btn btn-outline-clear-blue btn-outline-blue border-blue px-3 py-2" data-toggle="modal" data-target="#change-password-modal">
                                            Change password
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Save Changes Button -->
                        <div class="row">
                            <div class="col-12">
                                <button id="form-manager-save" class="btn btn-primary d-block d-md-inline-block settings-submit">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="submit-spinner spinner-border spinner-border-sm mr-3" role="status" aria-hidden="true"></span>
                                        <span class="submit-text px-3 py-2">Save changes</span>
                                        <span class="submit-success-text px-3 py-2"></span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Handling Profile Picture Upload
                const profilePictureFileInput = document.getElementById('profile_picture_file');
                const profilePictureLink = document.querySelector('.profile_picture_link');
                const submitSpinner = document.querySelector('.submit-spinner');
                const submitText = document.querySelector('.submit-text');

                // Handle the file upload button click
                profilePictureLink.addEventListener('click', function (e) {
                    e.preventDefault();
                    profilePictureFileInput.click();
                });

                // When file is selected, update profile picture preview
                profilePictureFileInput.addEventListener('change', function () {
                    const file = profilePictureFileInput.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function () {
                            document.getElementById('profile_picture').src = reader.result;
                        };
                        reader.readAsDataURL(file);
                    }
                });

                // Handle profile picture upload action (simulating network request)
                profilePictureLink.addEventListener('click', function () {
                    submitSpinner.style.display = 'inline-block'; // Show spinner
                    submitText.textContent = 'Uploading...'; // Change text to "Uploading..."
                    
                    setTimeout(function () {
                        submitSpinner.style.display = 'none'; // Hide spinner
                        submitText.textContent = 'Upload'; // Reset text back to "Upload"
                        alert('Profile picture updated successfully!');
                    }, 2000); // Simulate a 2-second upload delay
                });

                // Handling the Save Changes button click
                const saveButton = document.getElementById('form-manager-save');
                saveButton.addEventListener('click', function () {
                    const saveButtonText = saveButton.querySelector('.submit-text');
                    const saveButtonSpinner = saveButton.querySelector('.submit-spinner');
                    
                    saveButtonSpinner.style.display = 'inline-block'; // Show spinner
                    saveButtonText.textContent = 'Saving...'; // Change text to "Saving..."

                    setTimeout(function () {
                        saveButtonSpinner.style.display = 'none'; // Hide spinner
                        saveButtonText.textContent = 'Save changes'; // Reset text to original
                        alert('Changes saved successfully!');
                    }, 3000); // Simulate a 3-second save delay
                });
            });
        </script> 
</x-customernav>
