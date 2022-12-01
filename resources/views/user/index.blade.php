<x-app-layout>
  <!-- Page header -->
  <x-header name="User"/>
  <div class="card">
    <x-card-header name="Daftar User" href="/user/create"/>
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
              <tr>
                  <th style="width: 1%">
                      Id
                  </th>
                  <th style="width: 20%">
                      Nama
                  </th>
                  <th style="width: 20%">
                      Role
                  </th>
                  <th style="width: 30%">
                      Email
                  </th>
                  <th style="width: 20%">
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
                <td>
                  {{ $user->id }}
                </td>
                <td>
                  {{ $user->name }}
                </td>
                <td>
                  {{ $user->role }}
                </td>
                <td>
                  {{ $user->email }}
                </td>
                <td class="project-actions text-right">
                  <a class="btn btn-primary btn-sm" href="#">
                      <i class="fas fa-folder">
                      </i>
                      View
                  </a>
                  <a class="btn btn-info btn-sm" href="/user/edit/{{ $user->id }}">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Ubah
                  </a>
                  <form action="/user/delete/{{ $user->id }}" method="POST" class="d-inline" id="delete-user{{ $user->id }}">
                    @csrf
                    <button type="button" class="btn btn-danger btn-sm" onclick="swalConfirm('delete-user{{ $user->id }}')">
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