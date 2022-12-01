<x-app-layout>
  <!-- Page header -->
  <x-header name="User"/>
  <x-form action="/user/store" title="Formulir User Baru" submit="Tambah User Baru" cancel="/user" color="success">
    <div class="form-group">
      <label for="name">Nama</label>
      <input type="text" id="name" class="form-control" name="name">
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div class="form-group">
      <label for="customer">Role</label>
      <select id="customer" class="form-control custom-select" name="role">
        <option selected disabled>Pilih role</option>
        <option value="owner">Owner</option>
        <option value="pegawai">Pegawai</option>
      </select>
      <x-input-error :messages="$errors->get('role')" class="mt-2" />
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" class="form-control" rows="4" name="email">
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