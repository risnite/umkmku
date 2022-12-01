<x-app-layout>
  <!-- Page header -->
  <x-header name="Customer"/>
  <div class="card">
    <x-card-header name="Daftar Customer" href="/customer/create"/>
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
              <tr>
                  <th style="width: 1%">
                      Id
                  </th>
                  <th style="width: 20%">
                      Customer
                  </th>
                  <th style="width: 30%">
                      Alamat
                  </th>
                  <th>
                      No. Telp
                  </th>
                  <th style="width: 20%">
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td>
                  {{ $customer->id }}
                </td>
                <td>
                  {{ $customer->nama }}
                </td>
                <td>
                  {{ $customer->alamat }}
                </td>
                <td class="project_progress">
                  {{ $customer->telp }}
                </td>
                <td class="project-actions text-right">
                  <a class="btn btn-primary btn-sm" href="#">
                      <i class="fas fa-folder">
                      </i>
                      View
                  </a>
                  <a class="btn btn-info btn-sm" href="/customer/edit/{{ $customer->id }}">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Ubah
                  </a>
                  <form action="/customer/delete/{{ $customer->id }}" method="POST" class="d-inline" id="delete-customer{{ $customer->id }}">
                    @csrf
                    <button type="button" class="btn btn-danger btn-sm" onclick="swalConfirm('delete-customer{{ $customer->id }}')">
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