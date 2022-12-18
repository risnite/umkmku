<x-app-layout>
  <!-- Page header -->
  <x-header name="Order"/>
  <x-form action="/order/{{ $order->id }}" title="Formulir Perubahan Order" submit="Ubah Order" cancel="/order" color="info">
    @method('PUT')
    <div class="form-group">
      <label for="customer">Customer</label>
      <select id="customer" class="form-control custom-select" name="customer_id">
        @foreach ($customers as $customer)
          <option value="{{ $customer->id }}" @if ($customer->id == $customerId) selected @endif>{{ $customer->nama }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="produk">Produk yang Dipesan</label>
      @foreach ($order->produk as $key => $produk)
        <div class="d-flex fieldGroup mb-1">
          <input type="text" id="produk" class="form-control" placeholder="Nama Produk" name="produk[{{ $key }}][nama]" value="{{ $produk['nama'] }}">
          <input type="number" id="produk" class="form-control col-3 mr-2" placeholder="Jumlah" name="produk[{{ $key }}][jumlah]" value="{{ $produk['jumlah'] }}">
          @if ($key == 'produk1')
            <a href="javascript:void(0)" class="btn btn-success d-flex align-items-center col-1 addMore">
              <i class="fa-solid fa-plus"></i>
              <span class="d-none d-sm-block ml-2">Tambah</span> 
            </a>    
          @else
            <a href="javascript:void(0)" class="btn btn-danger d-flex align-items-center col-1 remove">
              <i class="fa-solid fa-trash"></i>
              <span class="d-none d-sm-block ml-2">Hapus</span> 
            </a>
          @endif
        </div>
      @endforeach
    </div>
    <div class="form-group">
      <label for="catatan">Catatan</label>
      <textarea id="catatan" class="form-control" name="catatan">{{ $order->catatan }}</textarea>
    </div>
  </x-form>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script>
		$(document).ready(function(){
      // membatasi jumlah inputan
      var maxGroup = 10;
      let i = $('body').find('.fieldGroup').length;
      
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