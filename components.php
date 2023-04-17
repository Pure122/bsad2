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
function prodcard($cardname,$carddesc,$cardprice,$cardid,$cardpic){
      floatval(preg_replace('/[^\d.],/', '', '"'.$cardprice.'"'));
    $cardprice = number_format($cardprice,2);
  $prod = '    <div class="col-3 my-3">
  <form action="" method="POST">
  <div class="product-card">
      <div class="product-image">
          <a href="prop.php?idg=' . $cardid . '"><img class="img-fluid" src="'.$cardpic.'"/></a>
      </div>
      <div class="product-details mt-2">
          <h6 class="product-name mt-2">'.$cardname.'</h6>
          <h5 class="product-title">'.$carddesc.'</h5>
          
          <p class="price m-0">'.$cardprice.' Bath</p>
          <button type="submit" class="btn btn-warning mt-2" name="add">Add to Cart<i class="bi bi-cart-fill"></i></button>
          <input type="hidden" name="cardid" value="'.$cardid.'">
      </div>
  </div>
  </form>
</div>';
echo $prod;
}
?>