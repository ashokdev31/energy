<?php $this->load->view('backend/admin/layouts/header');?>

<div id="global">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>Services Page</h3>
                            </div>
                            <div class="panel-body table_data">

                                <table class="table table-striped table-bordered" style="margin-bottom:0" >

                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php if (!empty($query)) {
	?>
                                        <?php $i = 1;foreach ($query as $val) {
		?>

                                        <tr>
                                          <td><?php echo $i++ ?></td>
                                          <td><?php if (empty($val->services_title)) {echo "";} else {echo $val->services_title;}
		;?></td>
                                          <td><?php if (empty($val->services_content)) {echo "";} else {echo $val->services_content;}
		;?></td>



                                          <td><a class="md-edit" href="<?php echo base_url() . 'services/update/' . $val->id; ?>"></a>
                                          <a  class="md-delete" href="<?php echo base_url() . 'services/delete/' . $val->id; ?>" onclick="return confirm('Are you sure you want to delete this service content ?');" ></a>
                                          </td>


                                        </tr>
                                     <?php }?>
                                     <?php }?>
                                    </tbody>
                                </table>
                              <?php if (@$count->count == 0) {?>
                                  <div class="add-button">
                                    <a href="<?php echo base_url(); ?>services/add" class="btn btn-default content-found" style="float: right; margin-top: -40px;">Add Page Content</a>
                                  </div>
                            <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php $this->load->view('backend/admin/layouts/footer');?>
