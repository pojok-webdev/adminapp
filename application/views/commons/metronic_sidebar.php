<ul class="page-sidebar-menu">
    <li>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler hidden-phone"></div>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>
    <?php
    foreach($this->common->getmenus() as $menu){
    ?>
    <li class="start <?php echo $menuactive[$menu['name']];?>" >
        <a href="<?php echo $menu['url']?>">
        <i class="icon-group"></i> 
        <span class="title"><?php echo $menu['title']?></span>
        </a>
    </li>
    <?php
    }
    ?>
</ul>
