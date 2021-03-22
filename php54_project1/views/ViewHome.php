<?php
//load file LayoutTrangChu.php
$this->fileLayout = "LayoutTrangChu.php";
?>

<!-- main -->

<div class="special-collection">
    <div class="tabs-container">
        <div class="row" style="margin-top:10px;">
            <div class="col-lg-10">
                <h2>HOT PRODUCT</h2>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="tabs-content row">
        <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
            <div class="clearfix">
                <!-- box product -->

                <?php $hotProduct = $this->modelHotProduct(); ?>
                <style>
                    .discount{
                        position: absolute;
                        width: 45px;
                        line-height: 45px;
                        text-align: center;
                        border-radius: 50%;
                        background-color:black;
                        color: white;
                        font-weight: bold;
                        top: -10px;
                        left: -2%;
                    }
                </style>
                <?php foreach ($hotProduct as $rows) : ?>
                    <div class="col-xs-6 col-md-2 col-sm-6 " style="position: relative;">

                    <div class="discount"><?php echo $rows->discount; ?> % </div>

                        <div class="product-grid" id="product-1168979" style="height: 350px; overflow: hidden;">
                            <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->name; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="product ..." alt="product ..." class="img-responsive"></a> </div>
                            <div class="info">

                                <h3 class="name"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>

                                <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                                <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount / 100)); ?> </span>₫ </span> </p>

                                <p class="price-box">
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a>
                                </p>
                                <div class="action-btn">
                                    <form>
                                        <a href="#" class="button">Add to Cart</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- end box product -->
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-md-12"> <img src="assets/frontend/images/adv1.jpg" class="img-thumbnail"> </div>
</div>
<?php $categories = $this->modelCategories(); ?>
<?php foreach ($categories as $rowsCategories) : ?>
    <!-- category product -->
    <div class="special-collection">
        <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
                <div class="head-tabs head-tab1 col-lg-11">
                    <h2><?php echo $rowsCategories->name; ?></h2>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="tabs-content row">
            <div id="content-taba4" class="content-tab content-tab-proindex">
                <?php $products = $this->modelProducts($rowsCategories->id); ?>
                <?php foreach ($products as $rows) : ?>
                    <div class="col-xs-6 col-md-2 col-sm-6 ">
                        <div class="product-grid" id="product-1168979" style="height: 350px; overflow: hidden;">
                            <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->name; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="product ..." alt="product ..." class="img-responsive"></a> </div>
                            <div class="info">

                                <h3 class="name"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>

                                <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                                <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount / 100)); ?> </span>₫ </span> </p>

                                <p class="price-box">
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a>
                                </p>
                                <div class="action-btn">
                                    <form>
                                        <a href="#" class="button">Add to Cart</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- /category product -->

<!-- adv -->
<div class="widebanner"> <a href="#"><img src="assets/frontend/100/047/633/themes/517833/assets/widebanner221b.jpg?1481775169361" alt="#" class="img-responsive"></a> </div>
<!-- end adv -->

<!-- hot news -->
<div class="home-blog">
    <h2 class="title"> <span>Tin tức</span></h2>
    <div class="row">
        <div class="owl-home-blog owl-home-blog-bottompage">
            <?php $news = $this->modelHotNews(); ?>
            <?php foreach ($news as $rows) : ?>
                <!-- new item -->
                <div class="item">
                    <div class="article">
                        <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive"> </a>
                        <div class="info">
                            <h3><a class="text3line" href="#" style="font-weight: bold;">Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?</a></h3>
                            <p class="desc"> Không ai có thể phủ nhận sức hút từ vẻ đẹp của những chiếc điện thoại của hãng Apple. Đặc biệt hơn, khi mà ở thời điểm hiện tại, giá iPhone 6s và iPhone 6s Plus đang giảm và dần dần trở nên vừa vặn với túi tiền của...</p>
                        </div>
                    </div>
                </div>
                <!-- /news item -->
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- /hotnews -->

<!-- end main -->