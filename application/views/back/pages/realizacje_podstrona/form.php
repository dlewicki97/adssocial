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

          <form class="form-layout form-layout-2" action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4)?>/realizations/<?php echo @$value->id; ?>" method="post"  enctype="multipart/form-data">

            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Nazwa: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name" value="<?php echo @$value->name; ?>" required>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row">
                        <div class="col-md-6 pr-0">
                            <div class="input-group form-group bd-t-0-force bd-r-0-force ">
                                <label class="ckbox">
                                    <input type="checkbox" id="checkECommerce" name="ecommerce" value="1" <?php if($value->ecommerce == 1){echo 'checked';} ?>>
                                    <span></span>
                                    eCommerce
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 px-0">
                            <div class="input-group form-group bd-t-0-force ">
                                <label class="ckbox">
                                    <input type="checkbox" id="checkSocialBox" name="social_box" value="1" <?php if($value->social_box == 1){echo 'checked';} ?>>
                                    <span></span>
                                    Social Box
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-0">
                            <div class="input-group form-group bd-t-0-force bd-r-0-force ">
                                <label class="ckbox">
                                    <input type="checkbox" id="checkLeadGeneration" name="lead_generation" value="1" <?php if($value->lead_generation == 1){echo 'checked';} ?>>
                                    <span></span>
                                    Lead Generation
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 px-0">
                            <div class="input-group form-group bd-t-0-force ">
                                <label class="ckbox">
                                    <input type="checkbox" id="checkSocialCampaign" name="social_campaign" value="1" <?php if($value->social_campaign == 1){echo 'checked';} ?>>
                                    <span></span>
                                    Social Campaign
                                </label>
                            </div>
                        </div>
                    </div>        
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force bd-b-0-force">
                                <label class="form-control-label">eCommerce opis:</label>
                                <textarea class="summernote" name="ecommerce_desc"><?php echo @$value->ecommerce_desc; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force bd-b-0-force">
                                <label class="form-control-label">Social Box opis:</label>
                                <textarea class="summernote" name="social_box_desc"><?php echo @$value->social_box_desc; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force bd-b-0-force">
                                <label class="form-control-label">Lead Generation opis:</label>
                                <textarea class="summernote" name="lead_generation_desc"><?php echo @$value->lead_generation_desc; ?></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force bd-b-0-force">
                                <label class="form-control-label">Social Campaign opis:</label>
                                <textarea class="summernote" name="social_campaign_desc"><?php echo @$value->social_campaign_desc; ?></textarea>
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
                <div class="col-md-4">
                    <div class="col-md-12">
                        <div id="photoViewer_1" class="form-group  text-center delete_photo cursor bd-l-0-force" onclick="clear_box(1);">
                            <?php if(@$value->photo3 != '') {
                                echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @$value->photo3. '" width=75%>';
                            } else {
                                echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group  bd-t-0-force bd-l-0-force">
                            <label class="form-control-label">Tło:</label>
                            <input type="hidden" id="name_photo_1" name="name_photo_1">
                            <button type="button" class="btn btn-info white w-100" onclick="openModal(1);">Dodaj</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force bd-l-0-force">
                            <label class="form-control-label">eCommerce tytuł galerii: </label>
                            <input class="form-control" type="text" name="ecommerce_images_title" value="<?php echo @$value->ecommerce_images_title; ?>">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force bd-l-0-force">
                            <label class="form-control-label">Social Box tytuł galerii: </label>
                            <input class="form-control" type="text" name="social_box_images_title" value="<?php echo @$value->social_box_images_title; ?>">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force bd-l-0-force">
                            <label class="form-control-label">Lead Generation tytuł galerii: </label>
                            <input class="form-control" type="text" name="lead_generation_images_title" value="<?php echo @$value->lead_generation_images_title; ?>">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force bd-l-0-force">
                            <label class="form-control-label">Social Campaign tytuł galerii: </label>
                            <input class="form-control" type="text" name="social_campaign_images_title" value="<?php echo @$value->social_campaign_images_title; ?>">
                        </div>
                    </div><!-- col-4 -->
                    
                </div>
            </div><!-- row -->
            <?php $this->load->view('back/forms/double_modal'); ?>
          </form><!-- form-layout -->
        <!-- <script type="text/javascript">

            function active(id, table, column) {
                value = document.getElementById('check'+id).checked;
                if(value == true) { value = 1;} else {value = 0;}
                $.ajax({  
                    type: "post", 
                    url:"<?php echo base_url(); ?>panel/realizacje_podstrona/active", 
                    data: {id:id, value:value, table:table, column:column}, 
                    cache: false,
                    beforeSend:function(html){
                    console.log(html);
                    },
                    complete:function(html){
                    console.log(html);
                    }  
                });  
            }
        </script> -->