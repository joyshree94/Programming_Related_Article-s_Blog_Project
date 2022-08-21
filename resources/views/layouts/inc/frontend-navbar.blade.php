<div class="global-navbar bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-3 d-none d-sm-none d-md-inline">
              <div class="logo">
                @php
                   $setting=App\Models\Setting::find(1)
               @endphp
                <img src="{{ asset('uploads/settings/'.$setting->logo) }}" class="w-100" alt="logo">
              </div>
            </div>
            <div class="col-md-9 my-auto">
                <div class="border text-center p-2 advertise">
                  <h5>Advertise Here</h5>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="sticky-top">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-green">
      <div class="container">
        <a href="" class="navbar-brand d-inline d-sm-inline d-md-none">
          <div class="logo">
            @php
               $setting=App\Models\Setting::find(1)
            @endphp
            <img src="{{ asset('uploads/settings/'.$setting->favicon) }}" class="w-100" alt="logo">
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/') ? 'active' :'' }}" href="{{ url('/') }}">Home</a>
            </li>

             @php
               $categories= App\Models\Category::where('navbar_status','0')->where('status','0')->get();
             @endphp

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                JavaScript
              </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach ($categories as $item)
                  @if ($item->id>3 && $item->id<14)
                <li><a class="dropdown-item {{ Request::is('tutorial/'.$item->slug) ? 'active' :'' }}" href="{{ url('tutorial/'.$item->slug) }}">{{ $item->name }}</a></li>
                @endif
                @endforeach
              </ul>
            </li> 
            @foreach ($categories as $item)
            @if ($item->id<10 )
              <li class="nav-item">
                <a class="nav-link {{ Request::is('tutorial/'.$item->slug) ? 'active' :'' }}" href="{{ url('tutorial/'.$item->slug) }}">{{ $item->name }}</a>
              </li>
            @endif
            @if ($item->id>13 )
              <li class="nav-item">
                <a class="nav-link {{ Request::is('tutorial/'.$item->slug) ? 'active' :'' }}" href="{{ url('tutorial/'.$item->slug) }}">{{ $item->name }}</a>
              </li>
            @endif
             @endforeach
             @if (Auth::check())
             <li class="nav-item logclass">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-done">
              @csrf
              @endif
            </form>
            </li>
            @if (!Auth::check())
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/login') }}"><i class="fa-solid fa-right-to-bracket"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/register') }}"><i class="fa-solid fa-address-card"></i></a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
  </div>
  