<?php $this->load->view('backend/admin/layouts/header');?>

<div id="global">
            <div class="container-fluid">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Content</div>
                    <div class="panel-body">
                    <form class="form-horizontal create_user" action="<?=site_url('staff/create')?>" method="post" enctype = "multipart/form-data">
                       <span style="color: red; margin-left:10px;   color: #ff0000;    left: 0;    position: absolute;    text-align: center;    top: -15px;    width: 100%;"><?php echo $this->session->flashdata('error'); ?></span>
                       <div class="col-sm-12">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name= "staff_title" class="form-control" placeholder="Enter Title" required>
                        </div>
                       </div>
                       <div class="col-sm-12">
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="staff_content" required></textarea>
                            <script type="text/javascript">
                                 CKEDITOR.replace('staff_content');
                            </script>
                        </div>
                        </div>

                        <div class="form-group text-right" style="margin-top:20px">
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
                        </div>
                        </form>
                    </div>
                </div>
            </div>
<?php $this->load->view('backend/admin/layouts/footer');?>
