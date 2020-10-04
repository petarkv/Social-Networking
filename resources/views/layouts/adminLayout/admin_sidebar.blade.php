<?php $url = url()->current(); ?>
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li <?php if (preg_match("/dashboard/i", $url)) { ?> class="active" <?php } ?>>
      <a href="{{ url('/admin/dashboard') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Members</span> <span class="label label-important">2</span></a>
      <ul <?php if (preg_match("/user/i", $url)) { ?> style="display: block;" <?php } ?>>
        <li <?php if (preg_match("/add-user/i", $url)) { ?> class="active" <?php } ?>>
            <a href="{{ url('/admin/add-user') }}">Add Member</a></li>
        <li <?php if (preg_match("/view-users/i", $url)) { ?> class="active" <?php } ?>>
            <a href="{{ url('/admin/view-users') }}">View Members</a></li>          
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Services</span> <span class="label label-important">2</span></a>
      <ul <?php if (preg_match("/cervice/i", $url)) { ?> style="display: block;" <?php } ?>>
        <li <?php if (preg_match("/add-service/i", $url)) { ?> class="active" <?php } ?>>
            <a href="{{ url('/admin/add-service') }}">Add Service</a></li>
        <li <?php if (preg_match("/view-services/i", $url)) { ?> class="active" <?php } ?>>
            <a href="{{ url('/admin/view-services') }}">View Services</a></li>          
      </ul>
    </li>
  
  </ul>
</div>
  <!--sidebar-menu-->