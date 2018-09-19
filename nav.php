<!-- ######################     Main Navigation   ########################## -->
<nav>
    <ol>
        <?php
        // This sets a class for current page so you can style it differently
        
        print '<li ';
        if ($PATH_PARTS['filename'] == 'lab3') {
            print ' class="activePage" ';
        }
        print '><a href="index.php">Home Lab3</a></li>';
        
        print '<li ';
        if ($PATH_PARTS['filename'] == 'sitemap') {
            print ' class="activePage" ';
        }
        print '><a href="../sitemap.php">Sitemap</a></li>';

        ?>
    </ol>
</nav>
<!-- #################### Ends Main Navigation    ########################## -->

