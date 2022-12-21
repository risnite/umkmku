<x-app-layout>
  <!-- Page header -->
  <x-header name="Supplier"/>
  <x-form action="/supplier/store" title="Formulir Supplier Baru" submit="Tambah Supplier Baru" cancel="/supplier" color="success">
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
    <div class="form-group">
      <label for="produk">Produk</label>
      <div class="d-flex fieldGroup mb-1">
        <input type="text" id="produk" class="form-control" placeholder="Nama Produk" name="produk[][nama]">
        <a href="javascript:void(0)" class="btn btn-success d-flex align-items-center col-1 addMore">
          <i class="fa-solid fa-plus"></i>
          <span class="d-none d-sm-block ml-2">Tambah</span> 
        </a>
      </div>
    </div>
  </x-form>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script>
		$(document).ready(function(){
      // membatasi jumlah inputan
      var maxGroup = 10;
      
      //melakukan proses multiple input 
      $(".addMore").click(function(){
          if($('body').find('.fieldGroup').length < maxGroup){
              var fieldHTML = `
              <div class="d-flex fieldGroup mb-1">
                <input type="text" id="produk" class="form-control" placeholder="Nama Produk" name="produk[][nama]">
                <a href="javascript:void(0)" class="btn btn-danger d-flex align-items-center col-1 remove">
                  <i class="fa-solid fa-trash"></i>
                  <span class="d-none d-sm-block ml-2">Hapus</span> 
                </a>
              </div>
              `;
              $('body').find('.fieldGroup:last').after(fieldHTML);
          }else{
              alert('Maximum '+maxGroup+' groups are allowed.');
          }
      });
      
      //remove fields group
      $("body").on("click",".remove",function(){ 
          $(this).parents(".fieldGroup").remove();
      });
    });
	</script>
</x-applayout>