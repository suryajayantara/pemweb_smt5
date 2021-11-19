<?= $this->extend('layout/layout_page.php') ?>

<?= $this->section('content') ?>


<div class="flex justify-center content-center h-full w-100">


    <div class="flex flex-col m-5 bg-gray-200 w-100 lg:w-1/3  p-5 rounded-md shadow shadow-lg">
        
        <h1 class="text-gray-700 font-bold text-xl mb-2">Daftar Buku</h1>
        <small>Berikut merupakan daftar dari buku yang ada di perpustakaan ini. Kamu dapat berkontribusi untuk melengkapi data dari buku yang ada di sini ✨</small>
        <a href="<?= route_to('buku_new') ?>" class="my-3 p-1 bg-blue-500 w-1/2 md:w-1/4 text-center text-white font-normal text-sm rounded rounded-md"> <span class="font-black text-lg">+</span> Tambah Data  </a>

    
        
         

    <?php foreach($buku as $e) { ?>

    <div class="bg-gray-100 hover:shadow-xl shadow-sm duration-200 rounded rounded-lg p-3 my-3">  
        <h1 class="font-bold text-gray-700"> <?= $e['judul_buku'] ?> (<?= $e['tahun_terbit'] ?>) </h1>
        <p class="font-normal text-xs text-gray-500"> <?= $e['penulis'] ?> </p>    
        <div class="flex flex-row">
        <a href="<?= site_url("buku/edit/$e[kd_buku]") ?>" class=" text-center p-1 bg-yellow-500 w-1/6 my-2 text-xs text-white font-medium rounded rounded-md"> Edit </a>
            <a href="<?= site_url("buku/delete/$e[kd_buku]") ?>" class=" text-center p-1 bg-red-500 w-1/6 my-2 text-xs text-white font-medium rounded rounded-md ml-2"> Delete </a>
        </div>
    </div>

    <?php } ?>
        

    </div>

</div>



<?= $this->endSection() ?>