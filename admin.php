<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./content/bootstrap/css/bootstrap.min.css">
  <script defer src="./content/font-awesome/js/brands.js"></script>
  <script defer src="./content/font-awesome/js/solid.js"></script>
  <script defer src="./content/font-awesome/js/fontawesome.js"></script>
  <link rel="stylesheet" href="./content/css/adminDashboard.css">
  <title>Admin Dashboard</title>
</head>
<body>

  <header>
    <nav class="navbar navbar-dark bg-dark navbar-expand-md">
      <a href="#" class="navbar-brand">EaseOfCodes</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navCloseBtn">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navCloseBtn">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-user"></i> Profile</a>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-key"></i> Change Password</a>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="container-fluid">
    <div class="row m-0 align-items-center">
      <div class="col-auto">

      <button class="btn btn-outline-warning closed" id="hello" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle sidebar">
          &#9776;
      </button>
      </div>
      <div class="col">
        <h1 class="m-0 ">Dashboard</h1>
      </div>
    </div>
    <div class="row">
      <div class="sidebar col-0" >
        <div class="list-group list-group-flush">
          <div class="category-courses">
            <a href="#" class="list-group-item disabled">Category Courses</a>
            <div class="category-courses-view">
              <a href="#" id="viewDropdownMenuLink" class="list-group-item list-group-item-action"><i class="fas fa-binoculars"></i> View</a>
              <div class="d-none" aria-labelledby="viewDropdownMenuLink">
                <a class="dropdown-item" href="#">View</a>
                <a class="dropdown-item" href="#">Add</a>
                <a class="dropdown-item" href="#">Update</a>
                <a class="dropdown-item" href="#">Delete</a>
              </div>
            </div>
            <div class="category-courses-add">
            <a href="#" id="addDropdownMenuLink" class="list-group-item list-group-item-action"><i class="fas fa-plus"></i> Add</a>
            <div class="d-none" aria-labelledby="addDropdownMenuLink">
              <a class="dropdown-item" href="#">View</a>
              <a class="dropdown-item" href="#">Add</a>
              <a class="dropdown-item" href="#">Update</a>
              <a class="dropdown-item" href="#">Delete</a>
            </div>
          </div>
          <div class="category-courses-update">
            <a href="#" id="updateDropdownMenuLink" class="list-group-item list-group-item-action"><i class="fas fa-edit"></i> Update</a>
            <div class="d-none" aria-labelledby="updateDropdownMenuLink">
              <a class="dropdown-item" href="#">View</a>
              <a class="dropdown-item" href="#">Add</a>
              <a class="dropdown-item" href="#">Update</a>
              <a class="dropdown-item" href="#">Delete</a>
            </div>
          </div>
          <div class="category-courses-delete">
            <a href="#" id="updateDropdownMenuLink" class="list-group-item list-group-item-action"><i class="fas fa-trash"></i> Delete</a>
            <div class="d-none" aria-labelledby="addDropdownMenuLink">
              <a class="dropdown-item" href="#">View</a>
              <a class="dropdown-item" href="#">Add</a>
              <a class="dropdown-item" href="#">Update</a>
              <a class="dropdown-item" href="#">Delete</a>
            </div>
          </div>
          </div>
          <div class="manage pt-3">
            <a href="#" class="list-group-item disabled">Manage</a>
            <a href="#" class="list-group-item  list-group-item-action "><i class="fas fa-tasks"></i> Manage companies</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-tasks"></i> Manage courses</a>
          </div>
        </div>
      </div>
      <div class="col py-3">
        <div class="top-row py-3 d-flex align-items-start justify-content-around">
          <div class="card" style="max-width:25rem; width:100%" >
            <div class="card-body">
              <h5 class="card-title"><i class="fa fa-building"></i> Companies</h5>
              <h1 class=" text-center">15</h1>
              <p class="card-text text-muted text-center"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, iste </small></p>
            </div>
          </div>
          <div class="card" style="max-width:25rem; width:100%" >
            <div class="card-body">
              <h5 class="card-title"><i class="fa fa-newspaper"></i> Active Course</h5>
              <h1 class=" text-center">10k</h1>
              <p class="card-text text-muted text-center"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, iste </small></p>
          	</div>
          </div>
        </div>
        <div class="bottom-row py-3 d-flex align-items-start justify-content-around">
          <div class="card" style="max-width:25rem; width:100%" >
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-book"></i> Total Courses</h5>
              <h1 class=" text-center text-danger">25k</h1>
              <p class="card-text text-muted text-center"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, iste </small></p>
            </div>
          </div>
          <div class="card" style="max-width:25rem; width:100%" >
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-user-graduate"></i> Users</h5>
              <h1 class="text-center text-success">1La</h1>
              <p class="card-text text-muted text-center"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, iste </small></p>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
  <script src="./content/js/jquery-3.5.1.min.js" charset="utf-8"></script>
  <script src="./content/bootstrap/js/bootstrap.js" charset="utf-8"></script>
  <script type="text/javascript">
    document.querySelector("#hello").addEventListener("click", (e)=>{
      if(document.querySelector("#hello.closed")){
        document.querySelector(".sidebar").style.display="block";
        document.querySelector(".sidebar").style.opacity="1";

        document.querySelector(".sidebar").style.width="250px";
        document.querySelector("#hello").classList.remove("closed");
        document.querySelector("#hello").classList.add("open");
        document.querySelector("#hello").innerHTML="&times;";
        document.querySelector("#hello").parentElement.classList.add("col-2");
        console.log(document.querySelector("#hello").parentElement.nextElementSibling);
        document.querySelector("#hello").parentElement.nextElementSibling.classList.add("offset-sm-2");
        document.querySelector("#hello").parentElement.nextElementSibling.classList.add("offset-lg-0");
        document.querySelector("#hello").parentElement.classList.remove("col-auto");
      }
      else{
        document.querySelector(".sidebar").style.display="none";
        document.querySelector(".sidebar").style.opacity="0";

        document.querySelector(".sidebar").style.width="0";
        document.querySelector("#hello").classList.remove("open");
        document.querySelector("#hello").classList.add("closed");
        document.querySelector("#hello").innerHTML="&#9776;";

        document.querySelector("#hello").parentElement.classList.add("col-auto");
        document.querySelector("#hello").parentElement.classList.remove("col-2");
      }
    });
    const cards = [...document.querySelectorAll(".card")];

    cards.forEach((card)=>{
      card.addEventListener("mouseenter", e=>{
        card.querySelector(".card-title").style.color="#f79e02";
      });
      card.addEventListener("mouseleave", e=>{
        card.querySelector(".card-title").style.color="#20123a";
      });
    });

    window.addEventListener("DOMContentLoaded", resizeHandler);
    window.addEventListener("resize", resizeHandler);

    function resizeHandler(){
      console.log(window.innerWidth);
      if((window.innerWidth < 991) && (document.querySelector("#hello").classList.contains("open"))){
        cards.forEach(card=>{
          card.classList.add("my-3");
        });
      }
      else if(window.innerWidth < 768){
        cards.forEach(card=>{
          card.classList.add("my-3");
        });
      }
    }
    const sidebarLinks = document.querySelectorAll(".category-courses .list-group-item-action");
    sidebarLinks.forEach(sidebarLink =>{
      sidebarLink.addEventListener("click", sidebarLinkListener);
    });
    function sidebarLinkListener(e){
      sidebarLinks.forEach(sidebarLink => {
        sidebarLink.classList.remove("sidebarLinkactive");
        // console.log(sidebarLink.nextElementSibling);
        // sidebarLink.nextElementSibling.classList.remove("dropdownMenu");
      });
      e.target.nextElementSibling.classList.toggle("dropdownMenu");
      e.target.classList.add("sidebarLinkactive");
      console.log("clicked", e.target.nextElementSibling);
    }

  </script>
</body>
</html>
