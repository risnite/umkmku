<x-app-layout>
  <!-- Page header -->
  <x-header name="Supplier"/>
  <div class="card">
    <x-card-header name="Daftar Supplier" href="/supplier/create"/>
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
              <tr>
                  <th style="width: 1%">
                      Id
                  </th>
                  <th style="width: 20%">
                      Supplier
                  </th>
                  <th style="width: 30%">
                      Alamat
                  </th>
                  <th>
                      No. Telp
                  </th>
                  <th>
                    Produk
                  </th>
                  <th style="width: 20%">
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($suppliers as $supplier)
            <tr>
                <td>
                  {{ $supplier->id }}
                </td>
                <td>
                  {{ $supplier->nama }}
                </td>
                <td>
                  {{ $supplier->alamat }}
                </td>
                <td class="project_progress">
                  {{ $supplier->telp }}
                </td>
                <td>
                  @foreach ($supplier->produk as $produk)
                    {{ $produk['nama'] }} <br>
                  @endforeach
                </td>
                <td class="project-actions text-right">
                  <a class="btn btn-primary btn-sm" href="#">
                      <i class="fas fa-folder">
                      </i>
                      View
                  </a>
                  <a class="btn btn-info btn-sm" href="/supplier/edit/{{ $supplier->id }}">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Ubah
                  </a>
                  <form action="/supplier/delete/{{ $supplier->id }}" method="POST" class="d-inline" id="delete-supplier{{ $supplier->id }}">
                    @csrf
                    <button type="button" class="btn btn-danger btn-sm" onclick="swalConfirm('delete-supplier{{ $supplier->id }}')">
                      <i class="fas fa-trash"></i>
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