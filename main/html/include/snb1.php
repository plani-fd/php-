<div id="snb" class="snb<?php echo $file_depth[0]?>">
    <h2 class="title"><?php echo $path[1]?></h2>
    <nav class="list">
        <ul>
            <li class="<?php echo menu('1-1', 'active'); ?>">
                <a href="sub1_1.php">메뉴1-1</a>
                <ul>
                    <li class="active"><a href="sub1_1.php">서브메뉴1-1-1</a></li>
                    <li><a href="sub1_1_2.php">서브메뉴1-1-2</a></li>
                    <li><a href="sub1_1_3.php">서브메뉴1-1-3</a></li>
                    <li><a href="sub1_1_4.php">서브메뉴1-1-4</a></li>
                </ul>
            </li>
            <li class="<?php echo menu('1-2', 'active'); ?>"><a href="sub1_2.php">메뉴1-2</a></li>
            <li class="<?php echo menu('1-3', 'active'); ?>"><a href="sub1_3.php">메뉴1-3</a></li>
            <li class="<?php echo menu('1-4', 'active'); ?>"><a href="sub1_4.php">메뉴1-4</a></li>
            <li class="<?php echo menu('1-5', 'active'); ?>"><a href="sub1_5.php">메뉴1-5</a></li>
        </ul>
    </nav>
</div>