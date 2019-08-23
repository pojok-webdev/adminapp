<ul class="page-sidebar-menu">
    <li>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler hidden-phone"></div>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>
    <li class="start <?php echo $menuactive['dashboard'];?> ">
        <a href="/admin_dashboard">
        <i class="icon-home"></i> 
        <span class="title">Dashboard</span>
        </a>
    </li>
    <li class="start <?php echo $menuactive['users'];?>" >
        <a href="/admin_users/">
        <i class="icon-group"></i> 
        <span class="title">Users</span>
        </a>
    </li>
    <li class="start <?php echo $menuactive['clients'];?>" >
        <a href="/admin_clients/">
        <i class="icon-group"></i> 
        <span class="title">Clients</span>
        </a>
    </li>
</ul>
