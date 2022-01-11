<x-app-layout>
    <x-slot name="header">
      {{ __('Dashboard') }}
    </x-slot>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="offset-1 col-5">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Novos pedidos</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-bag"></i>
              </div>
            </div>
          </div>

          <div class="col-5">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>150</h3>

                <p>Novos clientes</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

</x-app-layout>
