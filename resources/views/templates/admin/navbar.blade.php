     <!-- Navbar -->
     <header class="navbar navbar-expand-md d-print-none">
         <div class="container-xl">
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                 aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                 <a href=".">
                     <img src="{{ asset('assets/images/logo.webp') }}" width="110" height="32" alt="Tabler"
                         class="navbar-brand-image">
                 </a>
             </h1>
             <div class="navbar-nav flex-row order-md-last">
                 <div class="d-none d-md-flex">
                     <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
                         data-bs-toggle="tooltip" data-bs-placement="bottom">
                         <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                         <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                             <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                         </svg>
                     </a>
                     <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
                         data-bs-toggle="tooltip" data-bs-placement="bottom">
                         <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                         <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                             <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                             <path
                                 d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                         </svg>
                     </a>
                     <div class="nav-item dropdown d-none d-md-flex me-3">
                         <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                             aria-label="Show notifications">
                             <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                             <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                 <path
                                     d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                 <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                             </svg>
                             <span class="badge bg-red"></span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                             <div class="card">
                                 <div class="card-header">
                                     <h3 class="card-title">Last updates</h3>
                                 </div>
                                 <div class="list-group list-group-flush list-group-hoverable">
                                     <div class="list-group-item">
                                         <div class="row align-items-center">
                                             <div class="col-auto"><span
                                                     class="status-dot status-dot-animated bg-green d-block"></span>
                                             </div>
                                             <div class="col text-truncate">
                                                 <a href="#" class="text-body d-block">Example 4</a>
                                                 <div class="d-block text-muted text-truncate mt-n1">
                                                     Regenerate package-lock.json (#29730)
                                                 </div>
                                             </div>
                                             <div class="col-auto">
                                                 <a href="#" class="list-group-item-actions">
                                                     <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                     <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
                                                         width="24" height="24" viewBox="0 0 24 24"
                                                         stroke-width="2" stroke="currentColor" fill="none"
                                                         stroke-linecap="round" stroke-linejoin="round">
                                                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                         <path
                                                             d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                     </svg>
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                         aria-label="Open user menu">
                         <span class="avatar avatar-sm"
                             style="background-image: url({{ asset('assets/template/img/000m.jpg') }})"></span>
                         <div class="d-none d-xl-block ps-2">
                             <div>{{ Auth::user()->name }}</div>
                             <div class="mt-1 small text-muted">ADMIN</div>
                         </div>
                     </a>
                     <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                         <div class="dropdown-divider"></div>
                         <a href="#" class="dropdown-item" id="logout">Logout</a>
                     </div>
                     <form action="{{ route('logout') }}" method="post" id="logout-form">
                         @method('DELETE')
                         @csrf
                     </form>
                 </div>
             </div>
         </div>
     </header>
     <header class="navbar-expand-md">
         <div class="collapse navbar-collapse" id="navbar-menu">
             <div class="navbar">
                 <div class="container-xl">
                     <ul class="navbar-nav">
                         <li class="nav-item ">
                             <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                                 <span
                                     class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                     <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                         <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                         <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                         <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                     </svg>
                                 </span>
                                 <span class="nav-link-title">
                                     Home
                                 </span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('admin.insight.index') }}">
                                 <span
                                     class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                                     <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                         <path
                                             d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                                         <path d="M10 10l.01 0" />
                                         <path d="M14 10l.01 0" />
                                         <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                                     </svg>
                                 </span>
                                 <span class="nav-link-title">
                                     Insight
                                 </span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('admin.contact.index') }}">
                                 <span class="nav-link-icon d-md-none d-lg-inline-block">
                                     <svg xmlns="http://www.w3.org/2000/svg"
                                         class="icon icon-tabler icon-tabler-phone" width="24" height="24"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round">
                                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                         <path
                                             d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                     </svg>
                                 </span>
                                 <span class="nav-link-title">
                                     Contact
                                 </span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('admin.products.index') }}">
                                 <span class="nav-link-icon d-md-none d-lg-inline-block">
                                     <svg xmlns="http://www.w3.org/2000/svg"
                                         class="icon icon-tabler icon-tabler-devices-plus" width="24"
                                         height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                         <path d="M13 16.5v-7.5a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v3.5" />
                                         <path d="M18 8v-3a1 1 0 0 0 -1 -1h-13a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h8" />
                                         <path d="M16 9h2" />
                                         <path d="M16 19h6" />
                                         <path d="M19 16v6" />
                                     </svg>
                                 </span>
                                 <span class="nav-link-title">
                                     Products & Services
                                 </span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('admin.partner.index') }}">
                                 <span class="nav-link-icon d-md-none d-lg-inline-block">
                                     <svg xmlns="http://www.w3.org/2000/svg"
                                         class="icon icon-tabler icon-tabler-box-padding" width="24"
                                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                         <path
                                             d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                         <path d="M8 16v.01" />
                                         <path d="M8 12v.01" />
                                         <path d="M8 8v.01" />
                                         <path d="M16 16v.01" />
                                         <path d="M16 12v.01" />
                                         <path d="M16 8v.01" />
                                         <path d="M12 8v.01" />
                                         <path d="M12 16v.01" />
                                     </svg>
                                 </span>
                                 <span class="nav-link-title">
                                     Partner
                                 </span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('admin.contents.index') }}">
                                 <span class="nav-link-icon d-md-none d-lg-inline-block">
                                     <svg xmlns="http://www.w3.org/2000/svg"
                                         class="icon icon-tabler icon-tabler-businessplan" width="24"
                                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                         <path d="M16 6m-5 0a5 3 0 1 0 10 0a5 3 0 1 0 -10 0" />
                                         <path d="M11 6v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4" />
                                         <path d="M11 10v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4" />
                                         <path d="M11 14v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4" />
                                         <path d="M7 9h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                                         <path d="M5 15v1m0 -8v1" />
                                     </svg>
                                 </span>
                                 <span class="nav-link-title">
                                     Content
                                 </span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('admin.career') }}">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                     height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                                     <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                     <path
                                         d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                     </path>
                                 </svg>
                                 <span class="nav-link-title">
                                     Career
                                 </span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('admin.menu.index') }}">
                                 <span
                                     class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                                     <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                         <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                         <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                         <path d="M15 15l3.35 3.35" />
                                         <path d="M9 15l-3.35 3.35" />
                                         <path d="M5.65 5.65l3.35 3.35" />
                                         <path d="M18.35 5.65l-3.35 3.35" />
                                     </svg>
                                 </span>
                                 <span class="nav-link-title">
                                     Menu
                                 </span>
                             </a>
                         </li>
                     </ul>
                     <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                         <form action="./" method="get" autocomplete="off" novalidate>
                             <div class="input-icon">
                                 <span class="input-icon-addon">
                                     <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                     <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                         <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                         <path d="M21 21l-6 -6" />
                                     </svg>
                                 </span>
                                 <input type="text" value="" class="form-control" placeholder="Search…"
                                     aria-label="Search in website">
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </header>
