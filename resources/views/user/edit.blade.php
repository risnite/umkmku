<x-app-layout>
  <!-- Page header -->
  <x-header name="User"/>
  <x-form action="/user/update/{{ $user->id }}" title="Formulir Ubah Data User" submit="Ubah User" cancel="/user" color="info">
    @method('PUT')
    <div class="form-group">
      <label for="name">Nama</label>
      <input type="text" id="name" class="form-control" name="name" value="{{ $user->name }}">
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div class="form-group">
      <label for="customer">Role</label>
      <select id="customer" class="form-control custom-select" name="role">
        @if($user->role == 'admin')
          <option value="admin" @if($user->role == 'admin') selected @endif>Admin</option>
        @endif
        <option value="owner" @if($user->role == 'owner')   selected @endif>Owner</option>
        <option value="pegawai" @if($user->role == 'pegawai')   selected @endif>Pegawai</option>
      </select>
      <x-input-error :messages="$errors->get('role')" class="mt-2" />
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" class="form-control" rows="4" name="email" value="{{ $user->email }}">
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" class="form-control" name="password">
      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>
    <div class="form-group">
      <label for="confirm-password">Confirm Password</label>
      <input type="password" id="confirm-password" class="form-control" name="password_confirmation">
      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>
  </x-form>
</x-applayout>