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
                <div class="col-md-8">
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force">
                                <label class="form-control-label">Tytuł: </label>
                                <input class="form-control" type="text" name="title" value="<?php echo @$value->title; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force bd-r-0-force">
                                <label class="form-control-label">Podtytuł:</label>
                                <textarea class="summernote" name="subtitle"><?php echo @$value->subtitle; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-t-0-force">
                                <label class="form-control-label">Franczyzobiorca: </label>
                                <input class="form-control" type="text" name="franchisee" value="<?php echo @$value->franchisee; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-t-0-force">
                                <label class="form-control-label">AdsSocial.pl: </label>
                                <input class="form-control" type="text" name="website" value="<?php echo @$value->website; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-t-0-force">
                                <label class="form-control-label">Umówienie spotkania: </label>
                                <input class="form-control" type="text" name="attr_1" value="<?php echo @$value->attr_1; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-t-0-force">
                                <label class="form-control-label">Spotkanie z klientem + propozycja współpracy: </label>
                                <input class="form-control" type="text" name="attr_2" value="<?php echo @$value->attr_2; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-t-0-force">
                                <label class="form-control-label">Nawiązanie współpracy: </label>
                                <input class="form-control" type="text" name="attr_3" value="<?php echo @$value->attr_3; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-t-0-force">
                                <label class="form-control-label">FV, wpłata i prowizja: </label>
                                <input class="form-control" type="text" name="attr_4" value="<?php echo @$value->attr_4; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-t-0-force">
                                <label class="form-control-label">Kontakt działu produkcji AdsSocial.pl: </label>
                                <input class="form-control" type="text" name="attr_5" value="<?php echo @$value->attr_5; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-t-0-force">
                                <label class="form-control-label">Pozyskanie dostępów, ustalenie contentu, kreacje graficzne: </label>
                                <input class="form-control" type="text" name="attr_6" value="<?php echo @$value->attr_6; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-t-0-force">
                                <label class="form-control-label">Realizacja kampanii: </label>
                                <input class="form-control" type="text" name="attr_7" value="<?php echo @$value->attr_7; ?>" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-r-0-force bd-t-0-force">
                                <label class="form-control-label">Kontakt z klientem + raport z kampanii: </label>
                                <input class="form-control" type="text" name="attr_8" value="<?php echo @$value->attr_8; ?>" >
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="form-layout-footer bd pd-20 bd-t-0-force bd-r-0-force">
                                <button class="btn btn-info" type="submit">Zapisz</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                            </div><!-- form-group -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php $names = ['Ikona franczyzobiorcy', 'Ikona adssocial.pl', 'Żółta klamra', 'Niebieska klamra', 'Żółta kropka', 'Niebieska kropka', 'Żółtoniebieska kropka']; for($i=1 ; $i<8 ; $i++): ?>
                        <div class="col-md-12">
                            <div id="photoViewer_<?= $i ?>" class="form-group  text-center delete_photo cursor" onclick="clear_box(<?= $i ?>);">
                                <?php if(@get_object_vars(@$value)["photo". ($i==1 ? '' : $i) ] != '') {
                                    echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @get_object_vars(@$value)["photo". ($i==1 ? '' : $i) ] . '" width=75%>';
                                } else {
                                    echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                                } ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group  bd-t-0-force ">
                                <label class="form-control-label"><?= $names[$i-1] ?>:</label>
                                <input type="hidden" id="name_photo_<?= $i ?>" name="name_photo_<?= $i ?>">
                                <button type="button" class="btn btn-info white w-100" onclick="openModal(<?= $i ?>);">Dodaj</button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="photoViewer_<?= $i ?>" class="form-group <?php if($i != count($names)) echo 'bd-b-0-force' ?>  bd-t-0-force ">
                                <label class="form-control-label">Tekst alternatywny zdjęcia:</label>
                                <input class="form-control" type="text" name="alt<?= $i==1 ? '' : $i ?>" value="<?php echo @get_object_vars(@$value)["alt". $i==1 ? '' : $i ]; ?>">
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div><!-- row -->
            <?php $this->load->view('back/forms/double_modal'); ?>
          </form><!-- form-layout -->