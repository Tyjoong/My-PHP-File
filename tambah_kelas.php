<?php
    include("header.php");
?>

<div class="container mt-3">
    <h3>Data Kelas</h3>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalKelas">Tambah Kelas</button>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA KELAS</th>
            <th scope="col">KELOMPOK</th>
            <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>XI</td>
                <td>RPL 1</td>
                <td>
                    <button type="button" class="btn btn-sm btn-primary">Ubah</button>
                    <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
            <tr>
                <th>2</th>
                <td>XI</td>
                <td>RPL 2</td>
                <td>
                    <button type="button" class="btn btn-sm btn-primary">Ubah</button>
                    <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="modalKelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="proses_tambah_kelas.php" method="post">
            <div class="modal-body">
                
                    nama kelas :
                    <input type="text" placeholder="Masukan nama kelas" name="nama_kelas" value="" class="form-control">
                    kelompok : 
                    <input type="text" placeholder="Masukan kelompokx" name="kelompok" value="" class="form-control">
                    
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-primary">
            </div>
        </form>
        </div>
    </div>
</div>

        
<?php
include("footer.php");
?>