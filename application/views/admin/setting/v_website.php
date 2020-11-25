<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1><?= $tittle; ?></h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><?= $tittle; ?></li>
            </ol>
            </div>
        </div>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
        </div>
    </section>

    <section class="content">
    <div id="main-wrapper">
                    <div class="row">
                        <form class="form-horizontal" action="<?php echo base_url().'backend/home_setting/update'?>" method="post" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Caption 1</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="caption1" class="form-control" id="input1" value="<?php echo $caption_1;?>" placeholder="Site Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Caption 2</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="caption2" class="form-control" id="input1" value="<?php echo $caption_2;?>" placeholder="Site Title">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Image Heading</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="img_heading" class="form-control" id="input1">
                                                <p class="help-block">Image Heading harus beresolusi 1800 x 1110 Pixels.</p>
                                                <img src="<?php echo base_url().'theme/images/'.$image_heading;?>" width="560" class="thumbnail">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Background Testimonial</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="img_testimonial" class="form-control" id="input1">
                                                <p class="help-block">Background Testimonial harus beresolusi 925 x 617 Pixels.</p>
                                                <img src="<?php echo base_url().'theme/images/'.$image_testimonial;?>" width="560" class="thumbnail">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="home_id" value="<?php echo $home_id?>" required>
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-success btn-lg">UPDATE</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
    </section>
</div>