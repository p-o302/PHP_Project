<?php
//load file LayoutTrangChu.php
$this->fileLayout = "LayoutTrangTrong.php";
?>

<div class="top">
    <div class="row">
        <div class="col-xs-12 col-md-6 product-image">
            <div class="featured-image">
                <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;" class="img-responsive" />
            </div>
        </div>
        <div class="col-xs-12 col-md-6 info">
            <h1 itemprop="name"><?php echo $record->name; ?></h1>
            <!-- <p class="vendor"> Category:&nbsp; <span> Samsung </span></p> -->
            <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($record->price); ?> ₫ </span></span></p>
            <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($record->price - ($record->price * $record->discount) / 100); ?> </span></span></p>
            </p>
            <a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" class="btn btn-primary">Cho vào giỏ hàng</a>
            <!-- rating -->
            <div style="border:1px solid #dddddd; margin-top: 15px;">
                <h4 style="padding-left: 10px;">Rating</h4>
                <table style="width: 100%;">
                    <tr>
                        <td style="width: 80%; padding-left: 10px;">
                            <img src="assets/frontend/images/star.jpg">
                        </td>
                        <td><span class="label label-primary">
                                <?php echo $this->modelGetStar($record->id, 1); ?> vote</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 80%; padding-left: 10px;">
                            <img src="assets/frontend/images/star.jpg">
                            <img src="assets/frontend/images/star.jpg">
                        </td>
                        <td><span class="label label-warning">
                                <?php echo $this->modelGetStar($record->id, 2); ?> vote</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 80%; padding-left: 10px;">
                            <img src="assets/frontend/images/star.jpg">
                            <img src="assets/frontend/images/star.jpg">
                            <img src="assets/frontend/images/star.jpg">
                        </td>
                        <td>
                            <span class="label label-danger">
                                <?php echo $this->modelGetStar($record->id, 3); ?> vote
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 80%; padding-left: 10px;">
                            <img src="assets/frontend/images/star.jpg">
                            <img src="assets/frontend/images/star.jpg">
                            <img src="assets/frontend/images/star.jpg">
                            <img src="assets/frontend/images/star.jpg">
                        </td>
                        <td><span class="label label-info">
                                <?php echo $this->modelGetStar($record->id, 4); ?> vote</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
                        <td><span class="label label-success"><?php echo $this->modelGetStar($record->id, 5); ?> vote</span></td>
                    </tr>
                </table>
                <br>
            </div>
            <!-- /rating -->
        </div>
    </div>
    <div style="clear: both;"></div>
    <div class="middle" style="margin-top: 20px;">
        <!-- chi tiet -->
        <?php echo $record->description; ?>
        <?php echo $record->content; ?>
        <!-- chi tiet -->
    </div>
</div>