<!DOCTUPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Admin panel</title>
    {{ HTML::style('css/admin.css') }}
  </head>
  <body>
    <header>
      <div class="container">
        <h1>Admin panel</h1>
      </div>
    </header>
    <main class="container">
      @yield('content')
    </main>

    <footer>
      <div class="container">
        &copy; {{ date('Y') }} My Awesome Company
      </div>
    </footer>
  </body>
</html>
