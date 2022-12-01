<x-app-layout>
  <!-- Page header -->
  <x-header name="Order"/>
  <div class="card">
    <x-card-header name=" Daftar Order" href="/order/create"/>
    <div class="card-body p-0">
      <table class="table table-striped projects container-fluid">
          <thead>
              <tr>
                  <th class="col-1">
                      Id
                  </th>
                  <th class="col-2">
                      Customer
                  </th>
                  <th class="col-2">
                      Produk
                  </th>
                  <th class="col-1">
                      Jumlah
                  </th>
                  <th class="col-3 text-center">
                      Catatan
                  </th>
                  <th class="col-1 text-center">
                    Status
                  </th>
                  <th class="col-2 text-right">
                    
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($orders as $order)    
              <tr>
                  <td>
                      {{ $order->id }}
                  </td>
                  <td>
                    <a>
                        {{ $order->customer->nama }}
                    </a>
                    <br>
                    <small>
                      {{ $order->customer->alamat }}
                    </small>
                  </td>
                  <td>
                    @foreach ($order->produk as $produk)
                      {{ $produk['nama'] }} <br>
                    @endforeach
                  </td>
                  <td class="">
                    @foreach ($order->produk as $produk)
                      {{ $produk['jumlah'] }} <br>
                    @endforeach
                  </td>
                  <td class="project-state">
                      {{ $order->catatan }}
                  </td>
                  <td class="d-flex align-items-center">
                    @if ($order->terkirim)
                      <form action="/order/update/{{ $order->id }}" method="POST">
                        @csrf
                        <input name="terkirim" type="hidden" value="" />
                        <button class="btn btn-success btn-sm mr-1">Terkirim</button>
                      </form>
                    @else
                      <form action="/order/update/{{ $order->id }}" method="POST">
                        @csrf
                        <input name="terkirim" type="hidden" value="1" />
                        <button type="submit" class="btn btn-danger btn-sm mr-1">Belum Terkirim</button>
                      </form>
                    @endif
                    @if ($order->lunas)
                      <form action="/order/update/{{ $order->id }}" method="POST">
                        @csrf
                        <input name="lunas" type="hidden" value="" />
                        <button class="btn btn-success btn-sm">Lunas</button>
                      </form>
                    @else
                      <form action="/order/update/{{ $order->id }}" method="POST">
                        @csrf
                        <input name="lunas" type="hidden" value="1" />
                        <button type="submit" class="btn btn-danger btn-sm">Belum Lunas</button>
                      </form>
                    @endif
                  </td>
                  <td class="project-actions text-right">
                      <a class="btn btn-info btn-sm" href="/order/edit/{{ $order->id }}">
                          <i class="fas fa-pencil-alt"></i>
                          Ubah
                      </a>
                      <form action="/order/delete/{{ $order->id }}" method="POST" class="d-inline" id="delete-order{{ $order->id }}">
                        @csrf
                        <button type="button" class="btn btn-danger btn-sm" onclick="swalConfirm('delete-order{{ $order->id }}')">
                          <i class="fas fa-trash">
                          </i>
                          Hapus
                        </button>
                      </form>
                  </td>
              </tr>
            @endforeach
          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</x-applayout>