
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class='mt-2'  style="text-align:center;">Daftar Buku</h1>
            <a class="btn btn-outline-primary mb-3" href="/buku/create">+ Tambah Daftar Buku</a>
        <table class="table table-bordered" >
            <thead class="thead-dark">
                <tr>
                 <th scope="col">No</th>
                 <th scope="col">Nomor Buku</th>
                 <th scope="col">Nama Buku</th>
                 <th scope="col">Deskripsi</th>
                 <th scope="col">Stok Buku</th>
                 <th scope="col">Penerbit</th>
                 <th scope="col">Update Data</th>
                 <th scope="col">Delete Data</th>
                </tr>
            </thead>
        <tbody>
            <?php $i =1; ?>
            <?php foreach ($buku as $o):?>
                <tr>
                <th scope="row"><?= $i++;?></th>
                <td><?= $o['nomor']; ?></td>
                <td><?= $o['nama']; ?></td>
                <td><?= $o['deskripsi']; ?></td>
                <td><?= $o['stok']; ?></td>
                <td><?= $o['penerbit']; ?></td>
                <td><a class="btn btn-outline-dark" href="/buku/edit/<?=$o['id'];?>">Update</a></td>
                <td><a class="btn btn-outline-dark" href="/buku/delete/<?=$o['id'];?>">Delete</a></td>
                
    
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
        
    
    
        </div>
    </div>
</div>