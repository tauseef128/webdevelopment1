   
<?php  require_once 'session.php' ; ?>
 <?php  require_once 'top-header.php' ; ?>

<?php require_once 'sidebar.php'?>
            <!-- END HEADER DESKTOP-->

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong><i class="fas fa-plus"></i> Add Product</strong>
                            <a href="product-list.php" class="btn btn-primary btn-md right-button">
                              <i class="fas fa-arrow-left"> </i>   Back
                            </a>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                                        <small class="form-text text-muted">This is a help text</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-multiple-input" class=" form-control-label">Multiple File input</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-multiple-input" name="file-multiple-input[]" multiple="" class="form-control-file">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-md right-button">
                                <i class="fa fa-dot-circle-o"></i> <b>Submit</b>
                            </button>
                            <button type="reset" class="btn btn-danger btn-md right-button">
                                <i class="fa fa-ban"></i>  <b>Reset</b>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

           <?php  require_once 'main-footer.php'?>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

   <?php require_once 'footer.php' ?>