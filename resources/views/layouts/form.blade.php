<section class="content">
  <form action="{{ $action }}" method="POST">
  @csrf
  <div class="row">
    <div class="col">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">{{ $title }}</h3>
        </div>
        <div class="card-body">
          {{ $slot }}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <a href="{{ $cancel }}" class="btn btn-secondary">Batal</a>
      <input type="submit" value="{{ $submit }}" class="btn btn-{{$color}} float-right">
    </div>
  </div>
  </form>
</section>