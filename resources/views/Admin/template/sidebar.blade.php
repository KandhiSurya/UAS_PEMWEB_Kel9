<style>
/* .row .sidebar ul li a:hover{
    color: black;
} */
.nav-item a:hover{
    background-color: rgb(196, 187, 187) !important;
}

</style>

<div class="row">
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
          <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 {{$tittle === 'home' ? 'active' : ''}} " aria-current="page" href="/admin">
                <svg class="bi"><use xlink:href="#house-fill"/></svg>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 {{$tittle === 'HomepageUser' ? 'active' : ''}} " aria-current="page" href="/user/homepage">
                <svg class="bi"><use xlink:href="#house-fill"/></svg>
                HomepageUser
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 {{$tittle === 'timbangan' ? 'active' : ''}}" href="/admin/timbangan">
                <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                Hasil timbangan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 {{$tittle === 'pembayaran' ? 'active' : ''}}" href="/admin/pembayaran">
                <svg class="bi"><use xlink:href="#cart"/></svg>
                Hasil pembayaran
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 {{$tittle === 'jadwal' ? 'active' : ''}}" href="#">
                <svg class="bi"><use xlink:href="#cart"/></svg>
                Jadwal Pengambilan Sampah
              </a>
            </li>
          </ul>

          <hr class="my-3">

          <ul class="nav flex-column mb-auto">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi"><use xlink:href="#door-closed"/></svg>
                Sign out
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
