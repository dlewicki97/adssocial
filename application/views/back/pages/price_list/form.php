    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5"><?php echo ucfirst(str_replace('_', ' ', $this->uri->segment(2))); ?></h4>
        <p class="mg-b-0"><?php echo subtitle(); ?></p>
        <hr>
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-0 pd-x-30">
        <?php if(isset($_SESSION['flashdata'])): ?>
        <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
        <?php endif; ?>

          <form class="form-layout form-layout-2" action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4) . '/' . $this->uri->segment(2); ?>/<?php echo @$value->id; ?>" method="post"  enctype="multipart/form-data">

            <div class="row no-gutters">
                <div class="col-md-12 mx-auto">
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Komórka 1: </label>
                                <input class="form-control" type="text" name="column_1" value="<?php echo @$value->column_1; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Komórka 2: </label>
                                <input class="form-control" type="text" name="column_2" value="<?php echo @$value->column_2; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Komórka 3: </label>
                                <input class="form-control" type="text" name="column_3" value="<?php echo @$value->column_3; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Komórka 4: </label>
                                <input class="form-control" type="text" name="column_4" value="<?php echo @$value->column_4; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Komórka 5: </label>
                                <input class="form-control" type="text" name="column_5" value="<?php echo @$value->column_5; ?>" >
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="form-layout-footer bd pd-20">
                                <button class="btn btn-info" type="submit">Zapisz</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                            </div><!-- form-group -->
                        </div>
                    </div>
                </div>
            </div><!-- row -->
            <?php $this->load->view('back/forms/double_modal'); ?>
            <?php if(isset($item_id)): ?><input type="hidden" name="item_id" value="<?= $item_id?>"><?php endif; ?>
          </form><!-- form-layout -->