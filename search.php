<?php
if (isset($_POST['str'])) {
    try {
        $res = array('search' => $_POST['str'], 'name' => 'Example Search' . $_POST['str']);        

        echo '<ul id="search-list">';
        if(!empty($res)) {
          
            foreach($res as $item) { ?>
                <li class="sugg" data-search="<?php echo $item["search"]; ?>"><?php echo $item['name']; ?></li>
            <?php }
        
            echo '</ul>';
        }
    } catch (Exception $e) {
       //do something 
    }
}
break;
?>