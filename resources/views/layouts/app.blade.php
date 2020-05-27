<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="{{ asset('images/apple-icon.png') }}"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    />
    <link 
      rel="stylesheet"
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
    />
    <title>{{ isset($title) ? $title . " | Kampreto" : "Kampreto | Send anonymous message" }}</title>
  </head>
  <body>
    <main>
      @yield('body')
    </main>
  @stack('js')
  </body>
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>
</html>
