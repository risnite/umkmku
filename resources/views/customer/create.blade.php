<x-app-layout>
  <!-- Page header -->
  <x-header name="Customer"/>
  <x-form action="/customer/store" title="Formulir Customer Baru" submit="Tambah Customer Baru" cancel="/customer" color="success">
    <div class="form-group">
      <label for="name">Nama</label>
      <input type="text" id="name" class="form-control" name="nama">
    </div>
    <div class="form-group">
      <label for="inputDescription">Alamat</label>
      <textarea id="inputDescription" class="form-control" rows="4" name="alamat"></textarea>
    </div>
    <div class="form-group">
      <label for="inputClientCompany">No. Telp</label>
      <input type="tel" id="inputClientCompany" class="form-control" name="telp">
    </div>
  </x-form>
</x-applayout>