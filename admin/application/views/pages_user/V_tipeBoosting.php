<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Warboost</a></li>
                        <li class="breadcrumb-item active">Add Boosting Type</li>
                    </ol>
                </div>
                <h4 class="page-title">Add Boosting Type</h4>
            </div>
        </div>
    </div>

    <form method="post" action="<?php echo base_url();?>addTipeBoosting">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Boosting</label>
            <div class="col-sm-10">
                <input name="nama_boosting" type="text" class="form-control" value="">
            </div>

        </div>

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
            <label class="col-sm-2 col-form-label">Jenis Boost</label>
            <div class="col-sm-10">
                <select class="form-control" name="jenis_boost">
                    <option value="0">Rank Boost</option>
                    <option value="1">Level Boost</option>
                    <option value="2">Win Boost</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <button class="btn btn-primary" type="submit">Add Tipe Boosting</button>
        </div>

    </form>


</div>