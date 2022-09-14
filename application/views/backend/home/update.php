<?php $this->load->view('backend/admin/layouts/header');?>

<div id="global">
            <div class="container-fluid">
                <div class="panel panel-default">
                    <div class="panel-body">

                    <?php foreach ($query as $val) {?>
                    <form class="form-horizontal create_user" action="<?=site_url('home/edit/') . $val['id']?>" method="post" enctype = "multipart/form-data">
                         <input type="hidden" name="id" value="<?=!empty($val['id']) ? $val['id'] : ''?>">

                       <span style="color: red; margin-left:10px;   color: #ff0000;    left: 0;    position: absolute;    text-align: center;    top: -15px;    width: 100%;"><?php echo $this->session->flashdata('error'); ?></span>
                       <div class="col-sm-12">
                        <div class="form-group">
                            <label>Page Menu</label>
                            <input type="text" name= "page_menu" value="<?php echo @$val['page_menu']; ?>" class="form-control" placeholder="Enter Page Menu" required>
                        </div>
                       </div>

                       <div class="col-sm-12">
                        <div class="form-group">
                            <label>Page Title</label>
                            <input type="text" name= "page_title" value="<?php echo @$val['page_title']; ?>" class="form-control" placeholder="Enter Page Title">
                        </div>
                       </div>

                       <div class="col-sm-12">
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content"><?php echo @$val['content']; ?></textarea>
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
