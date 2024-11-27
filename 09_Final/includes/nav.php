<ul>
    <?php
    foreach ($navItems as $item) {
        echo "<li><a href=\"$item[slug]\">$item[link]</a></li>";
    }
    ;
    ?>
</ul>