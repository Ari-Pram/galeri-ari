
      <?php
        if(session()->get('level')== 1){
          ?>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">DATA BARANG</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                   <thead class="green-header">
  <a href="<?= base_url('/home/tambah_barang') ?>"><button class="btn btn-success"><i class="fa fa-plus "></i></button></a>
  <tr>
    <th>NO</th>
    <th>Nama Barang</th>
    <th>Tanggal</th>
    <th>Harga Awal</th>
     <th>Deskripsi</th>
   
  <th>Action</th>
  </tr>
</thead>
<style>
  .green-header {
    background-color: blue;
    color: white; /* You can adjust the text color as needed */
  }
</style>



       <style>      

@keyframes slideDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.animated-header {
    animation: slideDown 0.5s ease-in-out forwards;
    /* Adjust animation duration and easing as needed */
}
</style>      

           <tbody>
                        <?php
      $no=1;
      foreach ($okta as $evan) {

        ?>

        <tr>

          <td><?php echo $no++ ?></td>
          <td><?php echo $evan->nama_barang?> </td>
          <td><?php echo $evan->tgl?> </td>
          <td><?php echo $evan->harga_awal?> </td>
          <td><?php echo $evan->des?> </td>

          
          
          
           <td> 
            <a href="<?=base_url('/home/edit_barang/'.$evan->id_barang)?>"> <button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>

            <a href="<?=base_url('/home/hapus_barang/'.$evan->id_barang)?>"> <button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>

          </td> 
          

        </tr>
        <?php
      }
      ?>
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>

                <?php
        }else if(session()->get('level')== 2){
          ?>

            <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">DATA BARANG</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                   <thead class="green-header">
  <a href="<?= base_url('/home/tambah_barang') ?>"><button class="btn btn-success"><i class="fa fa-plus "></i></button></a>
  <tr>
    <th>NO</th>
    <th>Nama Barang</th>
    <th>Tanggal</th>
    <th>Harga Awal</th>
     <th>Deskripsi</th>
   
  <th>Action</th>
  </tr>
</thead>
<style>
  .green-header {
    background-color: blue;
    color: white; /* You can adjust the text color as needed */
  }
</style>



       <style>      

@keyframes slideDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.animated-header {
    animation: slideDown 0.5s ease-in-out forwards;
    /* Adjust animation duration and easing as needed */
}
</style>      

           <tbody>
                        <?php
      $no=1;
      foreach ($okta as $evan) {

        ?>

        <tr>

          <td><?php echo $no++ ?></td>
          <td><?php echo $evan->nama_barang?> </td>
          <td><?php echo $evan->tgl?> </td>
          <td><?php echo $evan->harga_awal?> </td>
          <td><?php echo $evan->des?> </td>

          
          
          
           <td> 
            <a href="<?=base_url('/home/edit_barang/'.$evan->id_barang)?>"> <button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>

            <a href="<?=base_url('/home/hapus_barang/'.$evan->id_barang)?>"> <button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>

          </td> 
          

        </tr>
        <?php
      }
      ?>

      </tbody>
                    </table>
                  </div>
                </div>

<?php
        }else if(session()->get('level')== 3){
          ?>

  <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">DATA BARANG</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                   <thead class="green-header">

    <th>NO</th>
    <th>Nama Barang</th>
    <th>Tanggal</th>
    <th>Harga Awal</th>
     <th>Deskripsi</th>
   

  </tr>
</thead>
<style>
  .green-header {
    background-color: blue;
    color: white; /* You can adjust the text color as needed */
  }
</style>



       <style>      

@keyframes slideDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.animated-header {
    animation: slideDown 0.5s ease-in-out forwards;
    /* Adjust animation duration and easing as needed */
}
</style>      

           <tbody>
                        <?php
      $no=1;
      foreach ($okta as $evan) {

        ?>

        <tr>

          <td><?php echo $no++ ?></td>
          <td><?php echo $evan->nama_barang?> </td>
          <td><?php echo $evan->tgl?> </td>
          <td><?php echo $evan->harga_awal?> </td>
          <td><?php echo $evan->des?> </td>

          
          
          
          

        </tr>
        <?php
      }
      ?>

      </tbody>
                    </table>
                  </div>
                </div>
               
  <?php
      }
      ?>