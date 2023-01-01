<?php

use App\Models\Menu;

$menu = new Menu();
?>


<nav class="navbar navbar-expand-lg text-black-50" style="background-color: #e3f2fd;">
    <div class=" container">
        <!-- <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php foreach ($menu->main_menu() as $main) {
                    $sub = $menu->sub_menu($main['id']);
                ?>
                <?php if ($sub) { ?>
                <li class=" nav-item dropdown active">

                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $main['title'] ?>
                    </a>
                    <ul class=" dropdown-menu">
                        <?php foreach ($sub as $item) { ?>
                        <li><a href="<?= $item['link'] ?>" class="dropdown-item"><?= $item['title'] ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <?php } else { ?>
                <li class=" nav-item active">
                    <a href="<?= $main['link'] ?>" class="nav-link">
                        <?= $main['title'] ?>
                    </a>
                </li>
                <?php } ?>
                <?php } ?>
            </ul>

        </div>
    </div>
</nav>