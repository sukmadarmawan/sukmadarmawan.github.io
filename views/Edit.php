<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Pelanggan </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <?php foreach ($Penduduk as $pdk  ): ?>
   
     <form action="<?php echo base_url(), 'penduduk/update'?>"method="post">

          <div class="form-group">
            <!--<label for="nama">id</label>--->
            <input type="hidden" class="form-control" id="id" name="id" value ="<?php echo $pdk->id ; ?>">
          </div>

          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $pdk->nama ; ?>">
          </div>
          
          <div class="form-group">
            <label for="nik">No Handphone</label>
            <input type="text" class="form-control" id="nik" name="nik" 
            value="<?php echo $pdk->nik ; ?>">
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat"
            value="<?php echo $pdk->alamat ; ?>">
          </div>

           <div class="form-group">
            <label for="panjang">Panjang</label>
            <input type="text" class="form-control" id="panjang" name="panjang"
            value="<?php echo $pdk->panjang ; ?>">
          </div>

            <div class="form-group">
            <label for="lebar">Lebar</label>
            <input type="text" class="form-control" id="lebar" name="lebar"
            value="<?php echo $pdk->lebar ; ?>">
            </div>

             <div class="form-group">
            <label for="tinggi">Tinggi</label>
            <input type="text" class="form-control" id="tinggi" name="tinggi"
            value="<?php echo $pdk->tinggi ; ?>">
          </div>
          <div>
        <button type="reset" class="btn btn-secondary" >Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>
    <?php endforeach ?>
  </section>
</div>
    