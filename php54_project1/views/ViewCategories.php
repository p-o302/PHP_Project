<ul class="main-nav hidden-xs hidden-sm list-unstyled">
        <li class="active"><a href="index.php">Trang chủ</a></li>
        <li class="has-submenu"> <a href="/collections/all"> <span>Sản phẩm</span><i class="fa fa-caret-down" style="margin-left: 5px;"></i> </a>
          <ul class="list-unstyled level1">
              <?php
                    $categories = $this->modelListCategories();
              ?>
              <?php foreach($categories as $rows): ?>
            <li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
            <?php
                $categoriesSub = $this->modelListCategorySub($rows->id);
            ?>
                <?php foreach($categoriesSub as $rowsSub) : ?>
                    <li style="padding-left: 20px;"> <a href="index.php?controller=product&action=cxategory&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub -> name; ?></a></li>
                    <?php endforeach;?>
            <?php endforeach; ?>
          </ul>
        </li>
        <li><a href="/Cart">Giỏ hàng</a></li>
        <li><a href="#">Tin tức</a></li>
        <li><a href="#">Liên hệ</a></li>
      </ul>