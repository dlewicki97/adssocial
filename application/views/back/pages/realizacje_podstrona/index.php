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
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-5p align-top">L.p.</th>
                  <th class="wd-45p align-top">Tytuł</th>
                  <th class="wd-50p text-right no-sort">
                    <!-- <a href="<?php echo base_url(); ?>panel/realizacje_podstrona/form/insert" class="btn btn-sm btn-info"><i class="fa fa-plus mg-r-10"></i> Dodaj</a> -->
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php $i=0; foreach (array_reverse($rows) as $value): $i++; ?>
                <tr>
                  <td class="align-middle"><?php echo $i; ?>.</td>
                  <td class="align-middle"><?php echo $value->name; ?></td>
                  <td class="text-right">
                    <?php if($value->ecommerce==1): ?>
                      <a href="<?php echo base_url(); ?>panel/settings/gallery/eCommerce/<?php echo $value->id; ?>" class="btn btn-sm btn-info"><i class="icon ion-images mg-r-10"></i>eCommerce</a>
                      <a href="<?php echo base_url(); ?>panel/settings/gallery/realizations_bestsellers/<?php echo $value->id; ?>" class="btn btn-sm btn-secondary"><i class="icon ion-images mg-r-10"></i>Galeria</a>
                    <?php endif; ?>
                    <?php if($value->social_box==1): ?>
                      <a href="<?php echo base_url(); ?>panel/settings/gallery/SocialBox/<?php echo $value->id; ?>" class="btn btn-sm btn-info"><i class="icon ion-images mg-r-10"></i>Social Box</a>
                      <a href="<?php echo base_url(); ?>panel/settings/gallery/realizations_campaign/<?php echo $value->id; ?>" class="btn btn-sm btn-secondary"><i class="icon ion-images mg-r-10"></i>Galeria</a>
                    <?php endif; ?>
                    <?php if($value->lead_generation==1): ?>
                      <a href="<?php echo base_url(); ?>panel/settings/gallery/LeadGeneration/<?php echo $value->id; ?>" class="btn btn-sm btn-info"><i class="icon ion-images mg-r-10"></i>Lead Generation</a>
                      <a href="<?php echo base_url(); ?>panel/settings/gallery/leadGeneration_galeria/<?php echo $value->id; ?>" class="btn btn-sm btn-secondary"><i class="icon ion-images mg-r-10"></i>Galeria</a>
                    <?php endif; ?>
                    <?php if($value->social_campaign==1): ?>
                      <a href="<?php echo base_url(); ?>panel/settings/gallery/SocialCampaign/<?php echo $value->id; ?>" class="btn btn-sm btn-info"><i class="icon ion-images mg-r-10"></i>Social Campaign</a>
                      <a href="<?php echo base_url(); ?>panel/settings/gallery/socialCampaign_galeria/<?php echo $value->id; ?>" class="btn btn-sm btn-secondary"><i class="icon ion-images mg-r-10"></i>Galeria</a>
                    <?php endif; ?>
                      <a href="<?php echo base_url(); ?>panel/tiles/show/<?php echo $value->id; ?>" class="btn btn-sm btn-info"><i class="fas fa-square mg-r-10"></i> Kafelki</a>
                      <a href="<?php echo base_url(); ?>panel/realizacje_podstrona/form/update/<?php echo $value->id; ?>" class="btn btn-sm btn-info"><i class="icon ion-compose mg-r-10"></i> Edytuj</a>
                      <!-- <a href="<?php echo base_url(); ?>panel/settings/delete/realizacje_podstrona/<?php echo $value->id; ?>" class="btn btn-sm btn-secondary" 
                      onclick="return confirm('Czy na pewno chcesz usunąć <?php echo $value->title; ?>? #<?php echo $value->id; ?>')" >
                        <i class="fa fa-close mg-r-10"></i> Usuń
                      </a> -->
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->