
<?php
function card($cardname, $cardtxt, $cardprice, $cardid,$cardpic)
{

    floatval(preg_replace('/[^\d.],/', '', '"'.$cardprice.'"'));
    $cardprice = number_format($cardprice,2);
if ($cardprice == 0) {
        $cardprice = 'Free to Play';
    }
    
    $element = '<div class="col-xl-3 col-sm-6">
  <form action="" method="POST">
<div class="card p-2 airy2">
  <a href="prop.php?idg=' . $cardid . '"><img class="card-img-top" src="'.$cardpic.'" alt="Card image cap"></a>
  <div class="card-body text-center d-flex flex-column">
    <h5 class="card-title  text-truncate d-block mw-25">' . $cardname . '</h5>
    <p class="card-text">' . $cardtxt . '</p>
      <h4><span class="price">' . $cardprice . '</span></h4>
    <button type="submit" class="btn btn-warning mt-auto" name="add">Add to Cart<i class="bi bi-cart-fill"></i></button>
    <input type="hidden" name="cardid" value="'.$cardid.'">
  </div>
</div>
</form>
</div>';
    echo $element;
}
function navbar()
{
if(isset($_SESSION['cart'])){
  $count = count($_SESSION['cart']);
  $cartc = '<span id="cart-count" class="ps-2">'.$count.'</span>';
}
else{
  $cartc = '<span id="cart-count" class="ps-2">0</span>';
}
    $nav = '<link rel="stylesheet" href="style.css">
    <nav class="navbar navbar-expand-lg navbar-dark bgnav position-fixed w-100">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="index.php"><img src="webtechpic/logo/logo.png" width = "50" height = "50"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-start ms-5" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown" style="--color: black">
            <a data-url="#" data-text="&nbsp;Dropdown" class="nav-link text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              &nbsp;Dropdown
            </a>
            <ul id="drop2" class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
              <li style="--color: black">
              <a data-url="#" data-text="&nbsp;All&nbsp;Games" class="spacedrop" href="cate.php?cat=all">&nbsp;All&nbsp;Games</a>
              </li>
              <li style="--color: black">
              <a data-url="#" data-text="&nbsp;Adventure" class="spacedrop" href="cate.php?cat=Adventure">&nbsp;Adventure</a>
              </li>
              <li style="--color: black">
              <a data-url="#" data-text="&nbsp;Action" href="cate.php?cat=Action" class="spacedrop">&nbsp;Action</a>
              </li>
              <li style="--color: black">
              <a data-url="#" data-text="&nbsp;Horror" href="cate.php?cat=Horror" class="spacedrop">&nbspHorror</a>
              </li>
              <li style="--color: black">
              <a data-url="#" data-text="&nbsp;Simulator" href="cate.php?cat=Simulation" class="spacedrop">&nbspSimulator</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" style="--color: black">
            <a data-url="#" data-text="&nbsp;News" class="nav-link text-dark" aria-current="page" href="new.php">&nbsp;News</a>
          </li>
          <li class="nav-item" style="--color: black">
          <a data-url="#" data-text="&nbsp;Cart" class="nav-link text-dark" aria-current="page" href="cart.php">&nbsp;Cart'.$cartc.'<i class="bi bi-cart-fill"></i></a>
          
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="p-4 nav-item">
            <form class="d-flex w-100 h-75 my-2" id="searchbar" method="get" action="cate.php">
            <!--<input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="search">-->
            <div class="box">
              <input type="text" name="search" placeholder="Search game all you want">
              <button class="btn" type="submit"><i class="bi bi-search"></i></button>
            </div>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>';
    echo $nav;
}
function carttitem()
{
    $cart = '<form action="cart.php" method="get" class="cart-item">
    <div class="border rounded border-dark">
        <div class="row bg-light">
            <div class="col-md-3">
                <img src="https://wallpapercave.com/wp/wp4610112.jpg" alt="img1" class="img-fluid h-100 w-100">
            </div>
            <div class="col-md-6 py-5">
                <h5 class="pt-2">ga</h5>
                <small class="text-secondary">ga</small>
                <h5 class="pt-2">123</h5>
                <button type="submit" class="btn btn-danger">Remove</button>
            </div>
            <div class="col-md-3 py-5">
                <div>
                <button type="button" class="btn bg-light border rounded-circle"><i class="bi bi-dash-circle"></i></button>
                <input type="text" class="form-control w-25 d-inline">
                <button type="button" class="btn bg-light border rounded-circle"><i class="bi bi-plus-circle"></i></button>
                </div>
            </div>
        </div>
    </div>
</form>';
    echo $cart;
}


function slideitem(){
  
  $citem = '<div class="carousel-item active">
  <div class="container">
    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" alt="Chicago"
      class="img-fluid d-block h-100">
  </div>
</div>';
echo $citem;

}

?>