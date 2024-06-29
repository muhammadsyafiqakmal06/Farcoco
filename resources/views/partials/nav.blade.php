<nav class="navbar navbar-expand-md navbar-dark fixed-top">
  <style>
    nav{
      background-color: #698474;
      font-family: 'Roboto';
    }
  </style>
  <div class="container-fluid">
    <a class="navbar-brand" href="/"> <img src="LOGO.png" alt="Logo" width="50px" height="50px"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link m-3 {{ ($title) === "Home" ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link m-3 {{ ($title) === "product" ? 'active' : '' }}" href="/product" tabindex="-1" aria-disabled="true">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link m-3 {{ ($title) === "contact" ? 'active' : '' }}" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link m-3 {{ ($title) === "About" ? 'active' : '' }}" href="/about">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<link href="css/nav.style.css" rel="stylesheet">
<a href="https://api.whatsapp.com/send?phone=6281329794672">
  <img src="../img/whatsapp.png" class="wabutton" alt="Whatsapp-Button" /></a>