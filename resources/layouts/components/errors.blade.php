<script>
    toastr.options.closeButton = true;
</script>
@if(count($errors))
    @foreach($errors->all() as $error)
          <script>
            toastr.error('{{ $error }}');
        </script>
    @endforeach
@endif

@if(Session::has('success'))
    <div class="alert alert-success border-2 d-flex align-items-center" role="alert">
        <div class="bg-success me-3 icon-item"><span class="fas fa-check-circle text-white fs-3"></span></div>
        <p class="mb-0 flex-1"><b>{{ Session::get('success')[0] }}</b> {{ Session::get('success')[1] }}</p>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@if(Session::has('danger'))
    <script>
        toastr.error('{{ Session::get('danger') }}!');
    </script>
@endif

@if(Session::has('sorry'))
    <script>
        toastr.warning('{{ Session::get('sorry') }}!');
    </script>
@endif