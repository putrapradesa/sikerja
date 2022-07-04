<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h4 class="m-0"><?php echo $icon?>&nbsp;&nbsp;&nbsp;<?php echo $menu?></h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>

            <li class="breadcrumb-item <?php if ($submenu == "") { echo 'active'; } else { echo ''; } ?>"><?php echo $menu?></li>

            <?php if ($submenu != "") { echo '<li class="breadcrumb-item active">'.$submenu.'</li>'; }?>

        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>