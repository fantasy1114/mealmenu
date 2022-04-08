@include('layouts.header')
<link rel="stylesheet" href="{{ asset('/assets/style/css/home.css')}}">

@section('title', 'Home')

<style>

</style>
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
                            <h2 class="content-header-title float-left mb-0" data-i18n="Template">Template</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                      {{-- <a href="/" data-i18n="Template">Template</a> --}}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <main>
                    <div class="input-container">
                      <input type="text" placeholder='Search' id='input'>
                    </div>
                  
                    <div class="gallery_title">
                      <h1>Templates</h1>
                    </div>
                  
                    <article class='gallery'>
                      <a href="/template/lunch" data-caption='Lunch' class='item' title='Lunch'>
                        <img src="{{ asset('assets/images/Template/lunch.png') }}" alt="Lunch">
                      </a>
                      <a href="{{ asset('assets/images/Template/1logo.png') }}" data-caption='A' class='item' title='Lake'>
                        <img src="{{ asset('assets/images/Template/1logo.png') }}" alt="second image">
                      </a>
                      <a href="{{ asset('assets/images/Template/1logo.png') }}" data-caption='A' title='Canyon' class='item'>
                        <img src="{{ asset('assets/images/Template/1logo.png') }}" alt="third image">
                      </a>
                      <a href="{{ asset('assets/images/Template/1logo.png') }}" data-caption="A." title='Iceberg' class='item'>
                        <img src="{{ asset('assets/images/Template/1logo.png') }}" alt="fourth image">
                      </a>
                      <a href="{{ asset('assets/images/Template/1logo.png') }}" data-caption="A" title='Desert' class='item'>
                        <img src="{{ asset('assets/images/Template/1logo.png') }}" alt="fifth image">
                      </a>
                      <a href="{{ asset('assets/images/Template/1logo.png') }}" data-caption='A' title='Fall' class='item'>
                        <img src="{{ asset('assets/images/Template/1logo.png') }}" alt="sixth image">
                      </a>
                        <a href="{{ asset('assets/images/Template/1logo.png') }}" data-caption="A" title='Iceberg' class='item'>
                        <img src="{{ asset('assets/images/Template/1logo.png')}}" alt="fourth image">
                      </a>
                      <a href="{{ asset('assets/images/Template/1logo.png') }}" data-caption='A' class='item' title='Lake'>
                        <img src="{{ asset('assets/images/Template/1logo.png') }}" alt="second image">
                      </a>
                    </article>
                </main>                  
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('layouts.footer')
    <script>
        '@if (session()->has('message'))<div class="alert alert-success">' + toastr["success"]("{{ session()->get('message') }}") + '</div> @endif'

       

        let input = document.getElementById('input')

        const handleSearch = (e) => {
        let inputValue = e.target.value.toLowerCase();
        let array = document.getElementsByClassName('item')

        for (let i = 0; i < array.length; i++) {
            let image = array[i]
            let caption = image.getAttribute('data-caption').toLowerCase()
            let title = image.getAttribute('title').toLowerCase()
            caption.includes(inputValue) || title.includes(inputValue)? image.style.display = 'inline' : image.style.display = 'none'
        }
        }
        input.addEventListener('keyup', handleSearch)
    </script>
</body>
