<section class="youplay-banner banner-top youplay-banner-parallax xsmall">

    <div class="image" data-speed="0.4">
        <img src="<?php echo base_url(); ?>assets/images/banner-bg.jpg" alt="" class="jarallax-img">
    </div>


    <div class="info">
        <div>
            <div class="container">

                <h1 class="h1">Warung Boosting</h1>

            </div>
        </div>
    </div>
</section>


<div class="container youplay-content">


    <div class="row">

        <div class="col-md-9">

            <h2 class="h2">
                <?php echo $dataBooster['username']; ?>
            </h2>

            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td style="width: 200px;">
                            <p>Full Name</p>
                        </td>
                        <td>
                            <p><?php echo $dataBooster['nama']; ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Nickname</p>
                        </td>
                        <td>
                            <p><?php echo $dataBooster['ingame_nickname']; ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Date of Birth</p>
                        </td>
                        <td>
                            <p><?php echo $dataBooster['tanggal_lahir']; ?></p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h3 class="mt-40 mb-20">Contact Information</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>
                            <p>Mobile</p>
                        </td>
                        <td>
                            <p><?php echo $dataBooster['nomor_hp']; ?></p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h3 class="mt-40 mb-20">Personal Information</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>
                            <p>Specialty Game</p>
                        </td>
                        <td>
                            <p><?php echo $dataBooster['nama_game']; ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>About Me</p>
                        </td>
                        <td>
                            <p>
                                <?php echo $dataBooster['about_me']; ?>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

        <!-- Right Side -->
        <div class="col-md-3">
            <div class="side-block">
                <h4 class="block-title">Profile Picture</h4>
                <div class="block-content">
                    <img src="<?php echo base_url(); ?>assets/images/profile/booster/<?php echo $dataBooster['path_profilpic']; ?>" alt="">
                </div>
            </div>

        </div>
        <!-- Right Side -->

    </div>

</div>