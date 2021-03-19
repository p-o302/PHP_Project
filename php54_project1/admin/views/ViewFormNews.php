<?php
    //load view layout
    $this->fileLayout = "Layout.php";
?>

<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit product</div>
        <div class="panel-body">
        <!-- muon load file (anh, cac thu do) thi phai dung enctype="multipart/form-data" -->
            <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Name</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->name) ? $record->name : ""; ?>" name="name" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <input type="checkbox" <?php if (isset($record->hot) && $record->hot == 1) : ?> checked <?php endif; ?> name="hot" id="hot">
                        <label for="hot">Hot Product</label>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Gioi thieu</div>
                    <div class="col-md-10">
                        <textarea name="description">
                            <?php
                                echo isset($record->description)?$record->description: "" ;
                            ?>
                        </textarea>
                        <script>CKEDITOR.replace("description")</script>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Chi tiet</div>
                    <div class="col-md-10">
                        <textarea name="content">
                            <?php
                                echo isset($record->contet)?$record->content: "" ;
                            ?>
                        </textarea>
                        <script>CKEDITOR.replace("content")</script>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Anh</div>
                    <div class="col-md-10">
                        <input type="file" name="photo">
                    </div>
                </div>
                <!-- end rows -->
                <?php if( isset($record->photo) && file_exists("../assets/upload/news".$record->photo)):  ?>
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <img src="../assets/upload/news/<?php echo $record->photo; ?>" style="width: 100px;" alt="">
                    </div>
                </div>
                <!-- end rows -->
                <?php endif; ?>
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <input type="submit" value="Process" class="btn btn-primary">
                    </div>
                </div>
                <!-- end rows -->
            </form>
        </div>
    </div>
</div>