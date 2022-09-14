<?php $this->load->view('backend/admin/layouts/header');?>

<div id="global">
            <div class="container-fluid">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <?php foreach ($query as $val) {?>
                    <form class="form-horizontal create_user" action="<?=site_url('about/edit')?>" method="post" enctype = "multipart/form-data">
                         <input type="hidden" name="id" value="<?=!empty($val->id) ? $val->id : ''?>">

                       <span style="color: red; margin-left:10px;   color: #ff0000;    left: 0;    position: absolute;    text-align: center;    top: -15px;    width: 100%;"><?php echo $this->session->flashdata('error'); ?></span>
                       <div class="col-sm-12">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name= "about_title" value="<?php echo @$val->about_title; ?>" class="form-control" placeholder="Enter Title" required>
                        </div>
                       </div>

                       <div class="col-sm-12">
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="about_content" required><?php echo @$val->about_content; ?></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('about_content');
                            </script>
                        </div>
                        </div>

                        <div class="form-group text-right" style="margin-top:20px">
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
                        </div>
                        </form>
                        <?php }?>
                    </div>
                </div>
            </div>

<?php $this->load->view('backend/admin/layouts/footer');?>
