<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
<div class="menu_section active">
<ul class="nav side-menu">
<!--   <li class="active"><a><i class="fa fa-home"></i> 菜单权限管理 <span class="fa fa-chevron-down"></span></a> -->
    <ul class="nav child_menu" style="display: block;">
<!--       <li class="current-page"><a href="{{url('intranet/Privilege/list')}}">权限设置</a></li> -->
<!--       <li><a href="{{url('intranet/AdminUserManage/list')}}">管理员设置</a></li> -->
<!--       <li><a href="{{url('intranet/RoleManage/list')}}">角色设置</a></li> -->
<!--       <li><a href="{{url('intranet/MenuManage/list')}}">菜单设置</a></li> -->
<!--     </ul> -->
<!--   </li> -->
<!--   <li><a><i class="fa fa-home"></i> 基础设置 <span class="fa fa-chevron-down"></span></a> -->
<!--     <ul class="nav child_menu"> -->
<!--       <li><a href="{{url('intranet/SafeSetting/detail')}}">安全设置</a></li> -->
<!--     </ul> -->
<!--   </li> -->
  @if (! empty($menuList))
      @foreach ($menuList as $item)
      <li class="active"><a><i class="fa fa-home"></i> {{$item['menu_name']}} <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu" style="display: block;">
          @if (! empty($item['children']))
          @foreach ($item['children'] as $secondItem)
          <li class="@php if ($secondItem['menu_route'] == $currentRoute) echo 'current-page';@endphp"><a href="@php echo url('intranet/' . $secondItem['menu_route'])@endphp">{{$secondItem['menu_name']}}</a></li>
          @endforeach
          @endif
        </ul>
      </li>
      @endforeach
  @endif
</ul>
</div>
</div>