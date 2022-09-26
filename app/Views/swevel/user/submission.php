<?= $this->extend('layout/user-template'); ?>
<?= $this->section('content'); ?>
<div id="submission">
    <div class="container mt-4">
        <div class="h4 fw-bold mb-4">Submission Tugas Akhir : Pemrograman Dengan Kotlin</div>
        <div>
            Selamat! Anda berada di penghujung akhir kelas. Sejauh ini Anda telah:
            <ul>
                <li>mengetahui car menjalankan dan menangani proses asynchronous di komponen Kotlin</li>
                <li>mengetahui fase mounting, updating, dan unmounting di komponen Kotlin,</li>
                <li>mengetahui cara bypass props drilling dalam mengirimkan state antar komponen dengan Kotlin Context, dan</li>
                <li>menuliskan kode React yang lebih baik dengan memanfaatkan fitur Hooks.</li>
            </ul>

            <div class="mt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ratione ut reiciendis porro ex ipsam dolorum consectetur, unde dignissimos perferendis fuga est dolore sit modi animi at cumque in. Provident quis laudantium optio nesciunt at repellat doloribus, vel ducimus, magnam veritatis dolorum quisquam, sit aspernatur asperiores consequatur enim porro saepe dolore numquam fugiat vero cum. Provident ad quasi aperiam. Quidem maxime laudantium fuga id porro, voluptatum cupiditate nostrum? Neque itaque quidem iste officia, dolorem aperiam veniam culpa qui velit non ea magnam sequi quis consequuntur omnis eaque dolorum voluptatem provident. Officiis earum rem facere consectetur suscipit quae numquam? Vitae, voluptate.
                <br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quos error. Dolore sunt recusandae reiciendis quae voluptates, vero cupiditate totam eaque natus sequi consequuntur possimus in eveniet dignissimos obcaecati facere voluptatum impedit voluptate illum suscipit! Et, rem ducimus commodi, quod, incidunt eveniet odio repudiandae porro natus quasi quae reiciendis consequuntur quia labore nesciunt. Inventore unde eum veritatis sint reprehenderit odio, doloribus dignissimos officiis dolorum explicabo illum magni nam adipisci quam iste quo consectetur nihil ab facilis tempore tempora et! Doloribus corrupti modi laudantium, ipsa et quia unde asperiores ducimus molestiae perspiciatis, laboriosam magni nulla nobis commodi! Doloribus esse cupiditate molestias.
            </div>
        </div>
        <div class="file-upload mt-5 mb-5 pb-5">
            <div class="col-7 mx-auto">
                <div class="card bg-purple-50 border-0 border-radius-15px p-4">
                    <div class="card-body">
                        <div class="text-center fw-bold h4">Kirim tugas disini</div>
                        <div class="text-center">
                            <button class="btn btn-purple mt-4 mx-auto">Submit Tugas Akhir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-end mb-5">
            <a href="#" class="btn btn-purple text-decoration-none w-25">Home</a>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>