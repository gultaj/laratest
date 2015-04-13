<!DOCTUPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Blog</title>
    {{ HTML::style('css/style.css') }}
  </head>
  <body>
    <header>
      <div class="container">
        <h1>My blog</h1>
      </div>
    </header>
    <main class="container">
      @yield('content')
    </main>

    <footer>
      <div class="container">
        &copy; {{ date('Y') }} My Awesome Company | {{ link_to_route('admin.posts.index', 'Admin') }}
      </div>
    </footer>
  </body>
</html>
