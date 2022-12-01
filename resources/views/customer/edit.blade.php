<x-app-layout>
  <!-- Page header -->
  <x-header name="Customer"/>
  <x-form action="/customer/update/{{ $customer->id }}" title="Formulir Perubahan Data Customer" submit="Ubah Data Customer" cancel="/customer" color="info">
    <div class="form-group">
      <label for="name">Nama</label>
      <input type="text" id="name" class="form-control" name="nama" value="{{ $customer->nama }}">
    </div>
    <div class="form-group">
      <label for="inputDescription">Alamat</label>
      <textarea id="inputDescription" class="form-control" rows="4" name="alamat">{{ $customer->alamat }}</textarea>
    </div>
    <div class="form-group">
      <label for="inputClientCompany">No. Telp</label>
      <input type="tel" id="inputClientCompany" class="form-control" name="telp" value="{{ $customer->telp }}">
    </div>
  </x-form>
</x-applayout>