@include('layouts.header')

@section('title', 'Home')

{{-- @include('layouts.layout') --}}

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('layouts.nav')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('layouts.layout')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Setting</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('setting.page')}}">Setting</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <section id="page-account-settings">
                    <div class="row">
                        <!-- left menu section -->
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column nav-left">
                                <!-- general -->
                                <li class="nav-item">
                                    <a class="nav-link active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                        <i data-feather="user" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">General</span>
                                    </a>
                                </li>
                                <!-- change password -->
                                <li class="nav-item">
                                    <a class="nav-link" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                        <i data-feather="lock" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">Change Password</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                        <!--/ left menu section -->

                        <!-- right content section -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <!-- general tab -->
                                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">

                                            <!-- form -->
                                            <form class="general-form mt-2">
                                                {{ csrf_field() }}
                                                <!-- header media -->
                                                <div class="media">
                                                    <a href="javascript:void(0);" class="mr-25">
                                                        <img src="{{Auth::user()->user_img}}" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                                    </a>
                                                    <!-- upload and reset button -->
                                                    <div class="media-body mt-75 ml-1 d-flex align-items-center ">
                                                        <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75">Upload</label>
                                                        <input type="file" id="account-upload" name="user_img" hidden accept="image/*" />

                                                    </div>
                                                    <!--/ upload and reset button -->
                                                </div>
                                                <!--/ header media -->

                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-username">Username</label>
                                                            <input type="text" class="form-control" id="account-username" name="username" placeholder="Username" value="{{Auth::user()->name}}" required/>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-e-mail">E-mail</label>
                                                            <input type="email" class="form-control" id="account-e-mail" name="useremail" placeholder="Email" value="{{Auth::user()->email}}" required/>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                                                        <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--/ form -->
                                        </div>
                                        <!--/ general tab -->

                                        <!-- change password -->
                                        <div class="tab-pane fade" id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                            <!-- form -->
                                            <form class="changepass-form" novalidate>
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-old-password">Old Password</label>
                                                            <div class="input-group form-password-toggle input-group-merge">
                                                                <input type="password" class="form-control" id="account-old-password" name="password" placeholder="Old Password" required/>
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text cursor-pointer">
                                                                        <i data-feather="eye"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-new-password">New Password</label>
                                                            <div class="input-group form-password-toggle input-group-merge">
                                                                <input type="password" id="account-new-password" name="new_password" class="form-control" placeholder="New Password" required/>
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text cursor-pointer">
                                                                        <i data-feather="eye"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-retype-new-password">Retype New Password</label>
                                                            <div class="input-group form-password-toggle input-group-merge">
                                                                <input type="password" class="form-control" id="account-retype-new-password" name="confirm_new_password" placeholder="New Password" required/>
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mt-1">Save changes</button>
                                                        <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--/ form -->
                                        </div>
                                        <!--/ change password -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ right content section -->
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('layouts.footer')
    <script>
        
        '@if (session()->has('message'))<div class="alert alert-success">' + toastr["success"]("{{ session()->get('message') }}") + '</div> @endif'

        var generalform = $('.general-form'),
            changepassform = $('.changepass-form'),
            accountUploadImg = $('#account-upload-img'),
            accountUploadBtn = $('#account-upload');

        // Update user photo on click of button
        if (accountUploadBtn) {
            accountUploadBtn.on('change', function (e) {
            var reader = new FileReader(),
                files = e.target.files;
            reader.onload = function () {
                if (accountUploadImg) {
                accountUploadImg.attr('src', reader.result);
                }
            };
            reader.readAsDataURL(files[0]);
            });
        }
        // Change Password
        if (changepassform.length) {
            changepassform.each(function () {
                var $this = $(this);

                $this.validate({
                    rules: {
                        // username: {
                        //     required: true
                        // },
                        // name: {
                        //     required: true
                        // },
                        // email: {
                        //     required: true,
                        //     email: true
                        // },
                        password: {
                            required: true
                        },
                        new_password: {
                            required: true,
                            minlength: 6
                        },
                        confirm_new_password: {
                            required: true,
                            minlength: 6,
                            equalTo: '#account-new-password'
                        }
                    }
                });
                $this.on('submit', function (e) {
                    var isValid = $this.valid();
                    var formData = new FormData(this);
                    var url = '/change-password/' + '{{Auth::user()->id}}';
                    e.preventDefault();
                    if(isValid){
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'post',
                            url: url,
                            cache:false,
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(data) {
                                if(data['success']){
                                    toastr["success"]("Changed successfully.")
                                }
                                else{
                                    toastr["error"]("You entered an incorrect password!")
                                }
                            }
                        });
                    }
                    
                });
            });
        }
        // Profile Change
        if (generalform.length) {
            generalform.each(function () {
                var $this = $(this);
                $this.validate({
                    rules: {
                        username: {
                            required: true
                        },
                        useremail: {
                            required: true,
                            email: true
                        },
                    }
                });
                $this.on('submit', function (e) {
                    var isValid = $this.valid();
                    var formData = new FormData(this);
                    var url = '/change-profile/' + '{{Auth::user()->id}}';
                    e.preventDefault();
                    if(isValid){
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'post',
                            url: url,
                            cache:false,
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(data) {
                                if(data['success']){
                                    $('.avatar img').attr("src", $('.media a img').attr('src'));
                                    toastr["success"]("Changed successfully.")
                                }
                                else{
                                    toastr["error"]("Already a registered user.")
                                }
                            }
                        });
                    }
                    
                });
            });
        }


    </script>
</body>
