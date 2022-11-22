
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  @php $errorEnable = true; @endphp
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InterviewO | @yield('title')</title>

    @includeIf('admin.layouts.header-script')
  </head>
  <body>
    <main class="main" id="top">
      <div class="container-fluid" data-layout="container-fluid">
       @includeIf('admin.layouts.nav')
        <div class="content">
          @includeIf('admin.layouts.top-bar')
          @includeIf('admin.layouts.components.errors')
          @yield('content')
          @includeIf('admin.layouts.footer')
        </div>
      </div>
    </main>
    @includeIf('admin.layouts.footer-script')
    @yield('footer-script')
  </body>
</html>