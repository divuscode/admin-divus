<div class="col-lg-6">    
    <div class="secondary-menu">
        <div class="menu-title">
            <h4><i class="fa fa-home"></i> Secondary menu</h4>
            <div class="pages-edit-icon">
                <span class="confirm-icon" data-toggle="tooltip" data-placement="top" title="Confirm new order"><i class="fa fa-check"></i></span>
                <span class="add-icon" data-toggle="tooltip" data-placement="top" title="Add new page"><i class="fa fa-plus"></i></span>
            </div>
        </div>
        <ul id="sortable" data-sortable="sortable">
            <li class="pages-sortable">
                <a href="">News</a>
                <?php include('pages-edit-icon.php') ?>
            </li>
            <li class="pages-sortable">
                <a href="">Blog</a>
                <?php include('pages-edit-icon.php') ?>
            </li>
            <li class="pages-sortable">
                <a href="">Products</a>
                <?php include('pages-edit-icon.php') ?>
                <ul id="sortable2" data-sortable="sortable">
                    <li class="pages-sortable pages-sortable-submenu">
                        <a href="">Multi</a>
                        <?php include('pages-edit-icon.php') ?>
                    </li>
                    <li class="pages-sortable pages-sortable-submenu">
                        <a href="">Single</a>
                        <?php include('pages-edit-icon.php') ?>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>