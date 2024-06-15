<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CV - Farhan</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Curriculum Vitae</h1>
    </div>
    <div class="navbar">
      <ul class="list-nav">
        <li><a href="/">About</a></li> 
				{{-- href="/" akan mengarahkan kehalaman yang memiliki url / pada file routes/web.php --}}
        <li><a href="/blog/portofolio">Portofolio</a></li>
        <li><a href="/blog/kontak">Contact</a></li>
      </ul>
    </div>
    <div class="content">
        @yield('konten')
    </div>
    </div>
    <footer>
      <p class="footer-text">Copyright &copy; 2024</p>
    </footer> 
  </div>
</body>
</html>