

<!--event info -->
<section class="pt100 pb100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-calendar-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            Tanggal
                        </h5>
                        <p>
                            <?= date("D M Y"); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-location-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            Lokasi
                        </h5>
                        <p>
                            Dunia
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-person-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            Positif
                        </h5>
                        <p>
                            <?= $positif['value']; ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-sad-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            Meninggal
                        </h5>
                        <p>
                            <?= $meninggal['value']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--event info end -->


<!--event countdown -->
<section class="bg-img pt70 pb70" style="background-image: url('<?= base_url('assets/evento'); ?>/assets/img/bg/bg-img.png');">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <h4 class="mb30 text-center color-light">Sembuh</h4>
                <div class=""><h1 class="text-center color-light"><?= $sembuh['value']; ?></h1></div>
            </div>
        </div>
    </div>
</section>
<!--event count down end-->


<!--about the event -->
<section class="pt100 pb100">
    <div class="container">
        <div class="section_title">
            <h3 class="title">
                Tentang Pandemi
            </h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <p>
                    Pandemi (dari bahasa Yunani πᾶν pan yang artinya semua dan δήμος demos yang artinya orang) adalah epidemi penyakit yang menyebar di wilayah yang luas, misalnya beberapa benua, atau di seluruh dunia. Penyakit endemik yang meluas dengan jumlah orang yang terinfeksi yang stabil bukan merupakan pandemi. Kejadian pandemi flu pada umumnya mengecualikan kasus flu musiman. Sepanjang sejarah, sejumlah pandemi penyakit telah terjadi, seperti cacar (variola) dan tuberkulosis. Salah satu pandemi yang paling menghancurkan adalah maut hitam, yang menewaskan sekitar 75–200 juta orang pada abad ke-14.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <p>
                    Pandemi saat ini adalah HIV/AIDS dan Pandemi koronavirus 2019–2020 (COVID-19). Pandemi terkenal lainnya di antaranya pandemi influenza 1918 (flu Spanyol) dan pandemi flu 2009 atau "H1N1".
                </p>
            </div>
        </div>

        <!--event features-->
        <div class="row justify-content-center mt30">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-link mt30"></i>
                    <div class="content">
                        <h4>Pandemi Di Dunia</h4>
                        <a href="<?= base_url('index.php/world'); ?>">Lihat Lebih</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-link mt30"></i>
                    <div class="content">
                        <h4>Pandemi Di Indonesia</h4>
                        <a href="<?= base_url('index.php/indonesia'); ?>">Lihat Lebih</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-link mt30"></i>
                    <div class="content">
                        <h4>Rumah Sakit Rujukan</h4>
                        <a href="<?= base_url('index.php/indonesia/hospital'); ?>">Lihat Lebih</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-link mt30"></i>
                    <div class="content">
                        <h4>Pemetaan Di Indonesia</h4>
                        <a href="<?= base_url('index.php/indonesia/mapping/Indonesia'); ?>">Lihat Lebih</a>
                    </div>
                </div>
            </div>
        </div>
        <!--event features end-->
    </div>
</section>
<!--about the event end -->



