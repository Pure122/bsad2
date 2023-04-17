<?php
function navhead(){
  if (isset($_SESSION['username'])) {
    $navh = '<header class="header-top-strip py-3">
    <div class="container-xxl">
      <div class="row">
        <div class="col-1">
          <p class="text-white text-end mb-0"><a href="index.php">Logo</a></p>
        </div>
        <div class="col-2">
          <div class="dropdown">
            <button class="btn dropdown-toggle text-white p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item text-white">All</a></li>
              <li><a class="dropdown-item text-white" href="#">Another action</a></li>
              <li><a class="dropdown-item text-white" href="#">Something else here</a></li>
            </ul>
          </div>
        </div>
        <div class="col">
          <p class="text-white text-end mb-0">Upgrade</p>
        </div>
        <div class="col">
          <p class="text-white text-end mb-0">cart</p>
        </div>
        <div class="col">
          <p class="text-white text-end mb-0">transfer</p>
        </div>
        <div class="col">
          <p class="text-white text-end mb-0">status</p>
        </div>
        <div class="col-3">
          <p class="text-white text-end mb-0"><a href="account.php" ><i class="bi bi-person-circle"></i></a> '.$_SESSION['username'].'   <a href="index.php?logout="1"">Logout</a></p>
        </div>
      </div>
    </div>
  </header>
  <header class="header-upper py-3">
    <div class="container-xxl">
      <div class="row align-items-center">
        <div class="col-7"></div>
        <div class="col-5">
          <div class="input-group">
            <input type="text"
              class="form-control py-2"
              placeholder="Search....."
              aria-label="Search....."
              aria-describedby="basic-addon2" />
            <span class="input-group-text p-3" id="basic-addon2">
            <i class="bi bi-search"></i>
            </span>

          </div>
        </div>

      </div>
    </div>
  </header>';
  }else{    $navh = '<header class="header-top-strip py-3">
    <div class="container-xxl">
      <div class="row">
        <div class="col-1">
          <p class="text-white text-end mb-0"><a href="index.php">Logo</a></p>
        </div>
        <div class="col-2">
          <div class="dropdown">
            <button class="btn dropdown-toggle text-white p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item text-white">All</a></li>
              <li><a class="dropdown-item text-white" href="#">Another action</a></li>
              <li><a class="dropdown-item text-white" href="#">Something else here</a></li>
            </ul>
          </div>
        </div>
        <div class="col">
          <p class="text-white text-end mb-0">Upgrade</p>
        </div>
        <div class="col">
          <p class="text-white text-end mb-0">cart</p>
        </div>
        <div class="col">
          <p class="text-white text-end mb-0">transfer</p>
        </div>
        <div class="col">
          <p class="text-white text-end mb-0">status</p>
        </div>
        <div class="col-3">
          <p class="text-white text-end mb-0"><a href="login.php">Login</a></p>
        </div>
      </div>
    </div>
  </header>
  <header class="header-upper py-3">
    <div class="container-xxl">
      <div class="row align-items-center">
        <div class="col-7"></div>
        <div class="col-5">
          <div class="input-group">
            <input type="text"
              class="form-control py-2"
              placeholder="Search....."
              aria-label="Search....."
              aria-describedby="basic-addon2" />
            <span class="input-group-text p-3" id="basic-addon2">
            <i class="bi bi-search"></i>
            </span>

          </div>
        </div>

      </div>
    </div>
  </header>';
}
echo $navh;
}
function footer(){
    $footer = "<footer class='py-4'></footer>
<footer class='py-4'>
  <div class='container-xxl'>
    <div class='row'>
      <div class='col-3'>
        <h4 class='text-white mb-4'>Contact us</h4>
        <div></div>
      </div>
      <div class='col-3'>
        <h4 class='text-white mb-4'>Inform</h4>
        <div></div>
      </div>
      <div class='col-3'>
        <h4 class='text-white mb-4'>Account</h4>
        <div></div>
      </div>
      <div class='col-3'>
        <h4 class='text-white mb-4'>Links</h4>
        <div></div>
      </div>
    </div>
  </div>
</footer>
<footer class='py-4'>
  <div class='container-xxl'>
    <div class='row'>
      <div class='col-12'>
        <p class='text-center mb-0 text-white'>&copy ; 2023; Powered by Pure</p>
      </div>
    </div>
  </div>
</footer>";
    echo $footer;
}
function prodcard(){
  $prod = '    <div class="col-3 my-3">
  <div class="product-card">
      <div class="product-image">
          <img class="img-fluid" src="picture/elden.webp"/>
      </div>
      <div class="product-details pt-3">
          <h6>Elden Ring</h6>
          <h5 class="product-title">Game of the year 2022</h5>
          <p class="price">Price 59.99$</p>
      </div>
  </div>
</div>';
echo $prod;
}
?>