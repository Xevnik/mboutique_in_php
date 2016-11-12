<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 11/11/16
 * Time: 5:46 PM
 */
?>
<header>
    <nav>
        <ul>
            <?php
            foreach($mboutiquePages as $key=>$pages){
                ?>
                <li><a href="?page=<?=$key?>"><?=$pages['nav']?></a></li>
                <?php
            }
            ?>
        </ul>
    </nav>
</header>
