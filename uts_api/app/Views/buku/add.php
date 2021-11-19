<?= $this->extend('layout/layout_page.php') ?>

<?= $this->section('content') ?>


<div class="flex justify-center content-center h-full w-100">


    <div class="flex flex-col m-5 bg-gray-100 w-100 lg:w-1/3  p-5 rounded-md shadow shadow-lg">
    <h1 class="text-gray-700 font-bold text-xl mb-2">Tambah Buku</h1>
    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dicta labore nihil maiores ullam explicabo.</small>
    <hr class="my-5">
        <form class="w-full max-w-lg lg:max-w-full" method="POST" action="<?= route_to('buku/create') ?>">
        	
     <?= csrf_field(); ?>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-100 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-judul">
                        Judul Buku
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-judul" type="text" placeholder="Das Kapitalis" name="judul_buku">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                
                <div class="w-full w-1/2 md:w-100  px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-kode-buku">
                        Penulis
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-kode-buku" type="text" placeholder="Karl Marx" name="penulis">
                </div>
            </div>
            
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-tahun-terbit">
                        Tahun Terbit
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-tahun-terbit" type="number"  type="text" placeholder="2020" name="tahun_terbit">
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-penerbit">
                        Penerbit
                    </label>
                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-penerbit" name="penerbit">
                            <option value="gramedia">Gramedia</option>
                            <option value="alex">Penerbit Alex</option>
                            <option value="airlangga">Penerbit Airlangga</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                
                <div class="w-full w-1/2 md:w-100  px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-kode-buku">
                        Harga
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-kode-buku" type="text" placeholder="Rp.10.000" name="harga">
                </div>
            </div>

            <button type="submit" class="bg-blue-700 w-full rounded-2xl p-2 md:mt-5 text-white"> Tambahkan Data </button>  
            </div>
        </form>


    </div>

</div>



<?= $this->endSection() ?>