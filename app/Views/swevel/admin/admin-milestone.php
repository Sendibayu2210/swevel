<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>
<div id="admin-milestone">
    <div class="container mt-2">
        <?php if (session()->getFlashdata('message')) : ?>
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header bg-white">Success</div>
                    <div class="toast-body bg-light"><?= session()->getFlashdata('message'); ?></div>
                </div>
            </div>
        <?php endif; ?>
        <div class="d-flex justify-content-between mb-5 pb-5">
            <a href="/add-milestone" class="btn btn-purple btn-sm">Add Milestone</a>
            <div class="h3 text-center text-purple fw-bold my-auto">Milestone</div>
        </div>
        <?php foreach ($milestone as $y) : ?>
            <div class="row milestone-content admin">
                <div class="col-lg-2 col-md-12 col-sm-12 text-lg-end text-md-center text-sm-center fw-bold h4  "><?= $y['year']; ?></div>
                <div class="col-lg-1 col-md-12 col-sm-12 box-line d-sm-none d-md-none d-lg-block">
                    <div class="line-milestone-1"></div>
                    <div class="bead"></div>
                    <div class="line-milestone-2"></div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 text-center "><img src="/img/milestone/<?= $y['image']; ?>" alt="" style="max-width: 10rem;border-radius: 15px;"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 ">
                    <div><?= $y['description']; ?></div>
                    <div class="mt-5 action d-none">
                        <div class="d-flex">
                            <a href="/edit-milestone/<?= $y['id_milestone']; ?>" class="btn btn-purple btn-sm me-2">Edit</a>
                            <form action="/delete-milestone/<?= $y['id_milestone']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-purple btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Milestone
        // mengatur tinggi garis
        let heightBoxLine = $(".row.milestone-content.admin")[0].scrollHeight;
        let heightBead = $(".bead")[0].scrollHeight;
        $('.line-milestone-1').css('height', (heightBoxLine / 2) - heightBead);
        $('.line-milestone-2').css('height', (heightBoxLine / 2) + heightBead + 50);

        $(".milestone-content").hover(function() {
            $(this).addClass("active").css('transition', 'ease .5s').prevAll().removeClass("active");
            $(this).nextAll().removeClass("active");
            $(this).find('.bead').addClass('active').css('transition', 'all .7s');
            $('.line-milestone-1, .line-milestone-2').css('opacity', '.4')
            $(this).find('.action').removeClass("d-none")
        });
        $('.milestone-content').mouseleave(function() {
            $(this).find('.bead').removeClass('active');
            $(this).find('.action').addClass("d-none")
        })

        $('.modal-content-milestone').css('border-radius', '20px');
    })
</script>

<?= $this->endSection(); ?>