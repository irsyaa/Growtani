<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Kelasku</title>
      <link rel="icon" type="image/x-icon" href="./img/favicon.jpg">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="./css/style.css">
      <link rel="stylesheet" href="./fontawesome-free/css/all.css">
      <link rel="stylesheet" href="./css/bootstrap.css">
      <style>
        .bg-color{
          background-color:#7d9fe7;
        }

        .bg-color-bunder{
          background-color:#7d9fe7;
        }

      </style>
    </head>
    <body>
    
       <section class="h-100 w-100" style="
				box-sizing: border-box;
				position: relative;
				background-color: #FAFCFF;
			">

<div class="wrapper">
      <div class="sidebar py-2" id="sidebar">
        <div class="sidebar-nav">
          <li class="active">
        <div class="list active mb-2">
          <i class="fas fa-user fa-sm fa-fw mr-2 d-inline-block" style="color: gray; margin-right: 20px;"></i>
          <a href="#" class="d-inline-block ml-5">My Dues</a>
        </div>
        <div class="list mb-2">
          <img src="./img/calendar.png" alt="" style="
          height: 20px;
          width: 20px;">
          <i class="d-inline-block" style="color: gray; margin-right: 20px;"></i>
          <a href="#" class="d-inline-block ml-5">Date</a>
        </div>
        
        <hr>
        <div class="sidebar-heading" style="margin-left: 10px;">
                Terdaftar
            </div>
        <div class="list mb-2">
          <a href="#"  class="d-inline-block ml-5">Iuran Mingguan Kelas</a>
        </div>
        <div class="list mb-2" style="color: gray; margin-right: 20px;">
          <a href="#"  class="d-inline-block ml-5">Reuni SD</a>
        </div>
        <div class="list mb-2" style="color: gray; margin-right: 20px;">
          <a href="#"  class="d-inline-block ml-5">Pengajian</a>
        </div>
        <div class="list mb-2" style="color: gray; margin-right: 20px;">
          <a href="#" class="d-inline-block ml-5" >Gym</a>
t          <a href="#" class="d-inline-block ml-5">Pengaturan</a>
        </div>
        </li>

        <!-- <ul class="list-group">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
          <li class="list-group-item">A fourth item</li>
          <li class="list-group-item">And a fifth one</li>
        </ul> -->
        </div>
      </div>
    
    <div class="header-3-3 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="sidebar-menu ">
          <div class="img">
          <img src="./img/menu.png" style="
          height: 20px;
          width: 20px;"  alt="">
          

          </div>

         <!--  <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    
          </div> -->
          </div> 

        <a href="index3.html" class="navbar-brand">
          <strong><span class="text-primary-alt" style="color: #7d9fe7">KELASKU</span>.COM</strong>
        </a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown no-arrow d-flex">
                <a class="nav-link dropdown-toggle toggle-menu d-inline-block mt-2" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-light fa-plus"></i>
                </a>
                <div class="img-profile rounded-circle custom-search-picture"></div>
               
                <div class="dropdown-menu-tambah dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Gabung Ke Iuran
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Buat Iuran
                    </a>
                    
                </div>
            </li>
            
            <li class="nav-item dropdown no-arrow d-flex">
                <a class="nav-link dropdown-toggle toggle-custom-menu d-inline-block mt-2" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small profile-name">Douglas McGee</span>
                </a>
                <div class="img-profile rounded-circle custom-profile-picture"></div>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>
            </div>


      </li>
    </ul>
      </nav>
      <div class="hr">
        <hr style="
							border-color: #F4F4F4;
							background-color: #F4F4F4;
							opacity: 1;
							margin: 0 !important;
						" />
      
      <div class="row" style="margin-top:20px">
        <div class="col text-center">
        <div class="list mb-2">
          <a href="#"  class="d-inline-block ml-5">Daftar Iuran</a>
        </div>
        <div class="list mb-2">
          <a href="#">Date</a>
        </div>
        </div>
      </div>
      <div class="row" style="margin-top: 20px">
        <div class="col-md" style="margin-bottom: 20px">
        <div class="card h-100" style="width: 18rem;">
          <img src="./img/3cd.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title text-center"ms>Iuran Renang Kelas</h5>
          </div>
          <ul class="list-group list-group-flush" style="
             height: 3.5rem;
             align-items: center;
             padding-top: 6px;">  
              <li class="list-group-item">Setiap Bulan</li>
              
             </ul>
            <div class="card-body">
               <a href="#" class="card-link">Laporan</a>
               <a href="#" class="card-link">Anggota</a>
             </div>
           </div>
        </div>
      
      
        <div class="col-md" style="margin-bottom: 20px">
        <div class="card h-100" style="width: 18rem;">
          <img src="./img/2cd.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title text-center">Reuni </h5>
          
          </div>
             <ul class="list-group list-group-flush" style="
             height: 3.5rem;
             align-items: center;
             padding-top: 6px;">
              <li class="list-group-item">Di bayar 1 bulan 1 kali</li>
              </ul>
            <div class="card-body">
               <a href="#" class="card-link">Laporan</a>
               <a href="#" class="card-link">Anggota</a>
             </div>
           </div>
        </div>
      

      
      
        <div class="col-md" style="margin-bottom: 20px">
        <div class="card h-100" style="width: 18rem;">
          <img src="./img/1cd.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title text-center">Iuran Mingguan Kelas</h5>
         
          </div>
             <ul class="list-group list-group-flush">
              <li class="list-group-item">Seminggu 1 kali , Pada hari Jum'at</li> 
             </ul>
            <div class="card-body">
               <a href="#" class="card-link">Laporan</a>
               <a href="#" class="card-link">Anggota </a>
             </div>
           </div>
        </div>
        </div>
      </div>
</div>
<script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
              alert("hello world");
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="./js/typed.js"></script>
  <script src="./fontawesome-free/js/all.js"></script>
  <!-- <script src="./js/three.min.js"></script>
  <script src="./js/three.module.min.js"></script>
   <script src="./js/canvas/canvas-logo.js"></script> -->
  <script src="./js/custom.js"></script>
</body>
  </html>