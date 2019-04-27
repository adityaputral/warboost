<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Warboost</a></li>
                        <li class="breadcrumb-item active">Add Boosting Type</li>
                        <li class="breadcrumb-item active">Add Specification</li>
                    </ol>
                </div>
                <h4 class="page-title">Add Specification</h4>
            </div>
        </div>
    </div>

    <?php if($jenisBoost == 1){?>
        <form method="post" action="<?php echo base_url();?>addSpek">
            <input name="jenis_boost" type="text" class="form-control" value="1" hidden>
            <input name="jumlah_level" type="text" class="form-control" value="1" hidden>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Game</label>
                <div class="col-sm-10">
                    <select class="form-control" name="game">
                        <?php foreach ($listGame as $game) { ?>
                            <option value="<?php echo $game['id']; ?>"><?php echo $game['nama_game']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Base Price</label>
                <div class="col-sm-10">
                    <input name="base_price" type="text" class="form-control" value="">
                </div>
            </div>

            <div class="form-group row">
                <button class="btn btn-primary" type="submit">Add Spek</button>
            </div>

        </form>
    <?php } else if($jenisBoost == 2){?>
        <form method="post" action="<?php echo base_url();?>addSpek">
            <input name="jenis_boost" type="text" class="form-control" value="2" hidden>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Game</label>
                <div class="col-sm-10">
                    <select class="form-control" name="game">
                        <?php foreach ($listGame as $game) { ?>
                            <option value="<?php echo $game['id']; ?>"><?php echo $game['nama_game']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">1 Win</label>
                <input name="jumlah_win1" type="text" class="form-control" value="1" hidden>
                <div class="col-sm-10">
                    <input name="base_price1" type="text" class="form-control" value="" placeholder="Base Price">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">2 Win</label>
                <input name="jumlah_win2" type="text" class="form-control" value="2" hidden>
                <div class="col-sm-10">
                    <input name="base_price2" type="text" class="form-control" value="" placeholder="Base Price">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">3 Win</label>
                <input name="jumlah_win3" type="text" class="form-control" value="3" hidden>
                <div class="col-sm-10">
                    <input name="base_price3" type="text" class="form-control" value="" placeholder="Base Price">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">5 Win</label>
                <input name="jumlah_win4" type="text" class="form-control" value="5" hidden>
                <div class="col-sm-10">
                    <input name="base_price4" type="text" class="form-control" value="" placeholder="Base Price">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">10 Win</label>
                <input name="jumlah_win5" type="text" class="form-control" value="10" hidden>
                <div class="col-sm-10">
                    <input name="base_price5" type="text" class="form-control" value="" placeholder="Base Price">
                </div>
            </div>

            <div class="form-group row">
                <button class="btn btn-primary" type="submit">Add Spek</button>
            </div>

        </form>
    <?php } ?>


</div>