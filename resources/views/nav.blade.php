<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">BOOK OF LIFE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>

            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index">Book</a>
            </li>
          
          @if(auth()->guest())
                <li class="nav-item">
                    <a class="nav-link active" href="/">Login</a>
                </li>
                
                @else
                <li class="nav-item">
                    <a class="nav-link active" href="/logout">Logout</a>
                </li>
                @endif
      </div>
    </div>
  </nav>
  <style>
    .navbar {
     background: #000000
 }

 .nav-item::after {
     content: '';
     display: block;
     width: 0px;
     height: 2px;
     background: rgb(72, 255, 0);
     transition: 0.4s
 }

 .nav-item:hover::after {
     width: 100%
 }

 .navbar-dark .navbar-nav .active>.nav-link,
 .navbar-dark .navbar-nav .nav-link.active,
 .navbar-dark .navbar-nav .nav-link.show,
 .navbar-dark .navbar-nav .show>.nav-link,
 .navbar-dark .navbar-nav .nav-link:focus,
 .navbar-dark .navbar-nav .nav-link:hover {
     color: #0400fe
 }
 </style>