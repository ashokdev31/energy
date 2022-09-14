<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-clearmin.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/roboto.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-design.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/small-n-flat.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-multiselect.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.timepicker.css" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
        <script src="https://cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>

        <title><?php echo @$this->title; ?></title>

    </head>
    <body class="cm-no-transition cm-1-navbar">
        <div id="cm-menu">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="cm-flex"><a href="<?php echo base_url(); ?>admin/dashboard"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Logo" /></a></div>
                <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
            </nav>
            <?php $uri = $this->uri->segment(2);?>
            <div id="cm-menu-content">
                <div id="cm-menu-items-wrapper">
                    <div id="cm-menu-scroller">
                        <ul class="cm-menu-items">
                            <li><a href="<?php echo base_url(); ?>admin/dashboard" class="sf-dashboard-alt">Dashboard</a></li>

                            <?php $page_menu = getLeftmenubar();?>

                            <li class="cm-submenu open">
                                <a class="sf-window-layout">Manage Content<span class="caret"></span></a>
                             <ul>
                               <?php foreach ($page_menu as $menu) {?>
                               <li class="active"><a href="<?php echo base_url(); ?>home/homelist/<?php echo $menu['id']; ?>" ><?php echo $menu['page_menu'] ?></a></li>
                               <?php }?>

                             </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <header id="cm-header">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
                <div class="cm-flex">
                    <h1><?php echo @$this->dashboard_title; ?></h1>
                    <form id="cm-search" action="index.html" method="get">
                        <input type="search" name="q" autocomplete="off" placeholder="Search...">
                    </form>
                </div>


                <div class="dropdown pull-right">
                    <button class="btn btn-primary md-account-circle-white" data-toggle="dropdown"></button>
                    <ul class="dropdown-menu">
                        <li class="disabled text-center" >
                            <a style="cursor:default; float: left;"><i class="fa fa-fw fa-user"></i><strong><?php echo $this->session->userdata('name'); ?></strong></a>
                        </li>
                        <li class="divider"></li>

                        <li>
                            <a href="<?php echo base_url(); ?>admin/logout/"><i class="fa fa-fw fa-sign-out"></i> Sign out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
