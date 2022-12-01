<x-app-layout>
    <!-- Page header -->
    <x-header name="Dashboard"/>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ count($orders) }}</h3>

                <p>Order Belum Terkirim</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/order" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ count($customers) }}</h3>
                <p>Total Customer</p>
              </div>
              <div class="icon">
                <i class="nav-icon fa-solid fa-users"></i>            
              </div>
              <a href="/customer" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ count($suppliers) }}</h3>
                <p>Total Supplier</p>
              </div>
              <div class="icon">
                <i class="nav-icon fa-solid fa-truck"></i>            
              </div>
              <a href="/supplier" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</x-applayout>