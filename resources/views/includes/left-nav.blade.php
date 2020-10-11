   <!-- BEGIN: Left SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index-2.html"><img class="hide-on-med-and-down" src="{{ asset('images/logo/materialize-logo-color.png') }}" alt="materialize logo"/><img class="show-on-medium-and-down hide-on-med-and-up" src="../../../app-assets/images/logo/materialize-logo.png" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">

        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Shareholder</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="{{route('user.index')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Shareholder List</span></a>
              </li>
              <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">Add Shareholder</span></a>
              </li>
              {{-- <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Analytics</span></a>
              </li> --}}
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Project Management</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="{{route('project.index')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Project List</span></a>
              </li>
              <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">Add Project</span></a>
              </li>
              {{-- <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Analytics</span></a>
              </li> --}}
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Financial Management</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="{{route('financial.index')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Financial List</span></a>
              </li>

              {{-- <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Analytics</span></a>
              </li> --}}
            </ul>
          </div>
        </li>



        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Disbursh Management</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="{{route('disburshment.index')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Disburshment List</span></a>
              </li>

              {{-- <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Analytics</span></a>
              </li> --}}
            </ul>
          </div>
        </li>


      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->