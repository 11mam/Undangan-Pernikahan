<?php 
include 'koneksi.php';
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Signika:wght@400;600&family=Work+Sans:wght@400;500&display=swap');
</style>
<?php 
    $data = mysqli_query($kon,"SELECT * from tbundangan ORDER BY id DESC");
    while($d = mysqli_fetch_array($data)){ ?>

<div class="selamat">
     <h4><?php echo $d['nama'] ?> </h4>
    <h5><?php echo $d['pesan'] ?></h5>
</div>

<?php } ?>

