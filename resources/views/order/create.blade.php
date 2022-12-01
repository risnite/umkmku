<x-app-layout>
  <!-- Page header -->
  <x-header name="Order"/>
  <x-form action="/order/store" title="Formulir Order Baru" submit="Tambah Order Baru" cancel="/order" color="success">
    <div class="form-group">
      <label for="customer">Customer</label>
      <select id="customer" class="form-control custom-select" name="customer_id">
        <option selected disabled>Pilih customer</option>
        @foreach ($customers as $customer)
          <option value="{{ $customer->id }}">{{ $customer->nama }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="produk">Produk yang Dipesan</label>
      <div class="d-flex fieldGroup mb-1">
        <input type="text" id="produk" class="form-control" placeholder="Nama Produk" name="produk[produk1][nama]">
        <input type="number" id="produk" class="form-control col-3 mr-2" placeholder="Jumlah" name="produk[produk1][jumlah]">
        <a href="javascript:void(0)" class="btn btn-success d-flex align-items-center col-1 addMore">
          <i class="fa-solid fa-plus"></i>
          <span class="d-none d-sm-block ml-2">Tambah</span> 
        </a>
      </div>
    </div>
    <div class="form-group">
      <label for="catatan">Catatan</label>
      <textarea id="catatan" class="form-control" name="catatan"></textarea>
    </div>
  </x-form>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script>
		$(document).ready(function(){
      // membatasi jumlah inputan
      var maxGroup = 10;
      let i = 1;
      
      //melakukan proses multiple input 
      $(".addMore").click(function(){
          if($('body').find('.fieldGroup').length < maxGroup){
            i++;
              var fieldHTML = `
              <div class="d-flex fieldGroup mb-1">
                <input type="text" id="produk" class="form-control" placeholder="Nama Produk" name="produk[produk${i}][nama]">
                <input type="number" id="produk" class="form-control col-3 mr-2" placeholder="Jumlah" name="produk[produk${i}][jumlah]">
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
        i--;
          $(this).parents(".fieldGroup").remove();
      });
    });
	</script>
</x-applayout>