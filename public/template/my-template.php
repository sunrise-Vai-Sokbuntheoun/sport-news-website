<?php
function header_template()
{ 
    return "
<section id='top' class='bg-warning'>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-3 col-md-3 col-sm-12'>
                <div class='logo'>
                    <a href=''>
                        <img src='public/assets/images/logos/logo200x200.png' alt='Logo'>
                    </a>
                </div>
            </div>
            <div class='col-lg-9 col-md-9 col-sm-12'>
                <div class='ads'>
                    <a href=''>
                        <img src='public/assets/images/banner-sponser/ads.gif' alt='Logo'>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id='top-menu' class='bg-primary'>
    <div class='container'>
        <nav class='navbar  navbar-light bg-primary'>
            <ul class='nav'>
                <li class='nav-item'>
                    <a class='nav-link' href='#'>
                        <button class='btn btn-outline-warning'>
                            <i class='fas fa-home'></i> Home
                        </button>
                    </a>
                </li>
                <li class='nav-item dropdown'>

                    <button style='margin-top: 5px;' class='nav-link btn btn-outline-warning dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <i class='fas fa-volleyball-ball'></i> Sport Category
                    </button>
                    <div class='dropdown-menu bg-warning' aria-labelledby='dropdownMenuButton'>
                        <a class='dropdown-item' href='#'>Action</a>
                        <a class='dropdown-item' href='#'>Another action</a>
                        <a class='dropdown-item' href='#'>Something else here</a>
                    </div>

                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'><button class='btn btn-outline-warning'>
                            <i class='fas fa-users'></i> About
                        </button></a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'><button class='btn btn-outline-warning'>
                            <i class='fas fa-address-book'></i> Contact US
                        </button></a>
                </li>
            </ul>
            <form class='form-inline'>
                <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
                <button class='btn btn-outline-warning my-2 my-sm-0' type='submit'>Search</button>
            </form>
        </nav>
    </div>
    <div class='pos-f-t'>
        <nav class='navbar navbar-dark bg-primary'>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarToggleExternalContent' aria-controls='navbarToggleExternalContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
        </nav>
        <div class='collapse' id='navbarToggleExternalContent'>
            <div class='bg-warning p-4'>
            <div class='row'>
            <div class='col-12'>
              <div class='nav flex-column nav-pills' id='v-pills-tab' role='tablist' aria-orientation='vertical'>
                <a class='nav-link' id='v-pills-home-tab' data-toggle='pill' href='#v-pills-home' role='tab' aria-controls='v-pills-home' aria-selected='true'>Home</a>
                <a class='nav-link' id='v-pills-profile-tab' data-toggle='pill' href='#v-pills-profile' role='tab' aria-controls='v-pills-profile' aria-selected='false'>Profile</a>
                <a class='nav-link' id='v-pills-messages-tab' data-toggle='pill' href='#v-pills-messages' role='tab' aria-controls='v-pills-messages' aria-selected='false'>Messages</a>
                <a class='nav-link' id='v-pills-settings-tab' data-toggle='pill' href='#v-pills-settings' role='tab' aria-controls='v-pills-settings' aria-selected='false'>Settings</a>
              </div>
            </div>
          </div>
            </div>
        </div>
    </div>
</section>
";

}
?>