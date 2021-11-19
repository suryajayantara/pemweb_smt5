<?= $this->extend('layout/layout_page.php') ?>

<?= $this->section('content') ?>


<div class="flex justify-center content-center h-full w-100">


    <div class="flex flex-col m-5 bg-gray-100 w-100 lg:w-1/3  p-5 rounded-md shadow shadow-lg">
        <h1 class="text-gray-700 font-bold text-xl mb-2">List Buku</h1>
        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dicta labore nihil maiores ullam explicabo.</small>
        <hr class="my-5">

    <?php foreach($buku as $e) { ?>

    <div class="bg-gray-300 rounded rounded-lg p-3 mb-2">  
        <h1 class="font-bold"> <?= $e['judul_buku'] ?> </h1>
        <p>Lorem ipsum dolor sit amet consectetur.</p>    
    </div>

    <?php } ?>
        

    </div>

</div>



<?= $this->endSection() ?>