    <?php 
    require_once 'session.php';
        $data['view'] = 'dashboard.php';
        require_once 'top-header.php';
        require_once 'header.php';
    ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            
        <?php 
            require_once 'sidebar.php';
            
            // current file content 
            require_once $data['view'] ; 
        ?>
            
        </div>

       <?php require_once 'footer.php'?>