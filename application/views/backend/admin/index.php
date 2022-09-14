  <?php $this->load->view('backend/admin/layouts/header');?>

        <div id="global">
            <div class="container-fluid cm-container-white">
                <h2 style="margin-top:0;">Welcome to Dashboard !</h2>

            </div>
            <div class="container-fluid dashboard_main">
                   <?php foreach ($content as $page_content) {?>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="<?php echo base_url(); ?>home/homelist/<?php echo $page_content['id']; ?>"  class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center" style="min-height: 168px;">
                                <span class="svg-48">

                                </span>
                                <h4><?php echo $page_content['page_menu']; ?></h4>

                                <form class="form-horizontal create_user" action="<?=site_url('home/enabledisablePage/'), $page_content['id'];?>" method="post">
                                  <input type="hidden" name="status" value="<?php echo $page_content['status']; ?>">
                                    <button type="submit" class="btn-sm btn-<?php echo $page_content['status'] == 1 ? 'success' : 'danger' ?>"><?php echo $page_content['status'] == 1 ? 'Active' : 'Deactivated' ?></button>
                                </form>

                            </div>
                        </a>
                    </div>
                    <?php }?>

             </div>

            </div>
         </div>


<?php $this->load->view('backend/admin/layouts/footer');?>
