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

          <form class="form-layout form-layout-2" action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4)?>/realizations_tiles/<?php echo $this->uri->segment(5)?>/<?php echo @$value->id; ?>" method="post"  enctype="multipart/form-data">

            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="row"> <!-- set -->
                        <div class="col-md-6 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="title" value="<?php echo @$value->title; ?>" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-2 px-0">
                            <div class="form-group bd-l-0-force">
                                <label class="form-control-label">Numer:</label>
                                <input class="form-control" type="text" name="number" value="<?php echo @$value->number; ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-4 px-0">
                            <div class="form-group bd-l-0-force">
                                <label class="form-control-label">Sekcja:</label>
                                        <div class="pl-5 form-check">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="section"
                                                id="section_socialbox"
                                                value="SocialBox"
                                                <?php if(@$value->section=="SocialBox"){echo 'checked';} ?>
                                            />
                                            <label class="form-check-label" for="section_socialbox">Social Box</label>
                                        </div>

                                        <div class="pl-5 form-check">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="section"
                                                id="section_ecommerce"
                                                value="eCommerce"
                                                <?php if(@$value->section=="eCommerce"){echo 'checked';} ?>
                                            />
                                            <label class="form-check-label" for="section_ecommerce">eCommerce</label>
                                        </div>
                                        <div class="pl-5 form-check">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="section"
                                                id="section_leadgenaration"
                                                value="LeadGenaration"
                                                <?php if(@$value->section=="LeadGenaration"){echo 'checked';} ?>
                                            />
                                            <label class="form-check-label" for="section_leadgenaration">Lead Genaration</label>
                                        </div>
                                        <div class="pl-5 form-check">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="section"
                                                id="section_socialcampaign"
                                                value="SocialCampaign"
                                                <?php if(@$value->section=="SocialCampaign"){echo 'checked';} ?>
                                            />
                                            <label class="form-check-label" for="section_socialcampaign">Social Campaign</label>
                                        </div>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="form-layout-footer bd pd-20 bd-t-0-force">
                                <button class="btn btn-info" type="submit">Zapisz</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                            </div><!-- form-group -->
                        </div>
                    </div>
                </div>
            </div><!-- row -->
          </form><!-- form-layout -->