<div class="content">
    <h2 class="intro-y text-lg font-medium mt-10">
        Product List
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">


            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
            </div>
        </div>
         <!-- BEGIN: Users Layout -->
         <style>
            .image-container {
                position: relative;
                width: 100%;
                /* Lebar kontainer mengikuti lebar elemen */
                padding-top: 56.25%;
                /* Rasio aspek 16:9 untuk desktop */
                background-color: #f0f0f0;
                /* Warna latar belakang jika gambar tidak ada */
                overflow: hidden;
            }

            .feature {
                background-color: #0F67B1;
            }

            .image-container img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                /* Mengisi kontainer tanpa distorsi */
            }

            /* Media query untuk perangkat mobile */
            @media (max-width: 480px) {
                .image-container {
                    padding-top: 56.25%;
                    /* Ubah jika perlu untuk perangkat kecil */
                }
            }
        </style>

        <?php foreach ($elektronik as $row) : ?>
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                <div class="box">
                    <div class="p-5">
                        <div class="image-container rounded-md overflow-hidden relative">
                            <img alt="IEG PHOTO" src="<?= base_url() . '/uploads/' . $row->gambar ?>">
                            <!-- <span class="feature absolute top-0 bg-pending/80 text-white text-xs m-5 px-2 py-1 rounded z-10">Featured</span> -->
                        </div>
                        <div class="text-slate-600 dark:text-slate-500 mt-5">
                            <p class="block font-medium text-base" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bold;"><?= $row->nama_brg ?></p>
                            <span class="text-black/90 text-xs mt-3"><?= $row->kategori ?></span>
                            <p class="text-black/90 text-xs mt-1" style="font-weight:bold; font-size:13px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><?= $row->keterangan ?></p>
                            <span class="text-black/90 text-xs">Note: Live chat untuk demo dan detail aplikasinya. </span>
                            <div class="flex items-center mt-5">
                                <i data-lucide="link" class="w-4 h-4 mr-2"></i> Price: IDR <?= number_format($row->harga, 0, ',', '.') ?>
                            </div>
                            <div class="flex items-center mt-2">
                                <i data-lucide="layers" class="w-4 h-4 mr-2"></i> Remaining Stock: <?= number_format($row->stok, 0, ',', '.') ?>
                            </div>
                            <div class="flex items-center mt-2">
                                <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Status: Active
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                        <a class="flex items-center btn btn-sm btn-primary mr-3" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                            <i data-lucide="shopping-cart" class="w-4 h-4 mr-1"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- BEGIN: Pagination -->
        <!-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                    </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                    <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div> -->
        <!-- END: Pagination -->
    </div>
</div>

<!-- BEGIN: Delete Confirmation Modal -->
<div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="p-5 text-center">
                    <i data-lucide="alert-circle" class="w-16 h-16 text-primary mx-auto mt-3"></i> 
                    <div class="text-3xl mt-5">Please Wait</div>
                    <div class="text-slate-500 mt-2">
                        Anda harus melakukan login terlebih dahulu 
                        <br>
                        Untuk melanjutkan proses checkout item.
                    </div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <a href="<?= site_url('welcome')?>" class="btn btn-primary w-24">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
                    <!-- END: Delete Confirmation Modal -->