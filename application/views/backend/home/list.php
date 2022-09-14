<?php $this->load->view('backend/admin/layouts/header');?>

<div id="global">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <?php if (!empty($query)) {?>
                        <?php $i = 1;foreach ($query as $val) {?>
                            <div class="panel-heading"><h3><?php echo @$val['page_menu']; ?></h3>
                            <?php }?>
                            <?php }?>
                            </div>
                            <div class="panel-body table_data">

                                <table class="table table-striped table-bordered" style="margin-bottom:0">

                                    <thead>
                                        <tr>

                                            <th>Page Menu</th>
                                            <th>Content</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php if (!empty($query)) {
	?>
                                        <?php foreach ($query as $val) {
		?>

                                        <tr>

                                          <td><?php echo @$val['page_menu']; ?></td>
                                          <td><?php echo @$val['content']; ?></td>
                                          <td><?php echo @$val['status'] == 1 ? 'Active' : 'Inactive'; ?></td>
                                          <td><a class="md-edit" href="<?php echo base_url() . 'home/update/' . $val['id']; ?>"></a>
                                          </td>


                                        </tr>
                                     <?php }?>
                                     <?php }?>
                                    </tbody>
                                </table>

                                  <!-- <div class="add-button">
                                    <a href="<?php echo base_url(); ?>home/add" class="btn btn-default content-found" style="float: right; margin-top: -40px;">Add Page Content</a>
                                  </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php $this->load->view('backend/admin/layouts/footer');?>
