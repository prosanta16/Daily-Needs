<?php include "server.php"?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> সারাদিনের যাবতীয় সবকিছু এখানে পাওয়া যাবে</title>
   
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <script src="https://code.jquery.com/jquery-1.11.3.js" integrity="sha256-IGWuzKD7mwVnNY01LtXxq3L84Tm/RJtNCYBfXZw3Je0=" crossorigin="anonymous"></script>

   
</head>
<body>
  <div class="wrapper-wide">
    <div id="header">
      <div id="sidebar" >
        <div class="sidebar-header">
                  <h3>Category</h3>
              </div>

              <ul class="list-unstyled components">
                  
                  <li class="active">
                      <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                      <ul class="collapse list-unstyled" id="homeSubmenu">
                      <li>
	                            <a href="fruit.php">Fruit</a>
	                        </li>
	                        <li>
	                            <a href="veg.php">Fresh Vegetable</a>
	                        </li>
	                        <li>
	                            <a href="fish.php">Fish and Meat</a>
	                        </li>
							            <li>
	                            <a href="grocery.php">Grocery</a>
	                        </li>
							            <li>
	                            <a href="tech.php">Worker Service</a>
	                        </li>
                      </ul>
                  </li>
              </ul>
        
      </div>

      <div class="topnav">
        <button class="openbtn" id="sidebarCollapse">☰</button>
        <a href="index.php"> DAILY NEEDS</a>
        <div class="search-container">
          <form action="/action_page.php">
            <input class="form-control" type="text" placeholder="Search.." name="search">
            <button  type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>

        <a href=""> Needs Help ?</a>
        <a href="login.php" id="log"> Login <i class="fa fa-user"></i> </a>
        <a href="#" id="user" style="display: none;"><?php echo "<a>".$_SESSION["name"]."</a>";?></a>
        <a id="logu" href="index.php?logout='1'" name = 'logout' style="display: none;">Logout</a>
        
        <!--Login user subtab-->
        <?php 
        if (isset($_SESSION["name"])) {
        $hide = 'log';
        $show = 'user';
        $show2 = 'logu';
        echo "<script type=\"text/javascript\">document.getElementById('".$hide."').style.display = 'none';</script>";
        echo "<script type=\"text/javascript\">document.getElementById('".$show."').style.display = 'block';</script>";
        echo "<script type=\"text/javascript\">document.getElementById('".$show2."').style.display = 'block';</script>";
           }
             ?>
       
        <a href="finalcart.php" > Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>


      </div>
    </div>

    <div id="content">
		
				<!--main content started-->
	   <div class="regForm"  > 
        <h1> Worker </h1>
        

		<form method="post" >

		   <div class="form-group  has-feedback">
				<label>Worker Type</label>
					<select name="type" class="form-control">
					<option >Daily Worker</option>
					<option >Electritian</option>
					<option >Plumber</option>
					<option >Carpenter</option>
				</select>
			</div>

			<div class="form-group  has-feedback">
				<label>Address</label>
				<input type="text" class="form-control"  placeholder="Enter your location" name="address" >
			</div>

			<div class="form-group  has-feedback">
				<label>Days to work</label>
				<input type="text" class="form-control" id="day" placeholder="Enter how many days to work" name="day"  >
			</div>

			<div class="form-group  has-feedback">
				<label>Phone No.</label>
				<input type="text" class="form-control" id="phone" placeholder="Enter your Phone No" name="phone"  >
			</div>


			<button type="submit" name="tech" class="btn btn-danger btn-block">Confirm</button>
			</form> 
		</div>

			
	</div>

 







<script type="text/javascript">
  
 
  
     $("#clear").click(function()
     {
          var url = $(this).attr('href').attr('target','_blank');
          loadCart();
          displayCart();
     })
     
     

     function displayCart()
     {
      var cartArray = listCart();
      var output =""
      for(i in cartArray)
      {
            output +="<li>"+cartArray[i].name+" "+cartArray[i].count+" </li>";
      }
      $("#show").html(output);
     }

  //********************************
  //functions
  var cart = [];

  var Item = function(name,price,count){
        this.name = name
        this.price = price
        this.count = count
  };
     
    //addItemToCart()
    function addItemToCart(name, price, count)
    {
      for (var i in cart) {
        if(cart[i].name === name)
        {
          cart[i].count +=count;
          return;
        }
        
      }
      var item = new Item(name, price, count);
      cart.push(item);
      saveCart();     
      
    }
    
    
    
    //removeItemFromCart()
    function removeItemFromCart(name)
    {
       for (var i in cart) {
        if(cart[i].name === name)
        {
          cart[i].count --;
          if (cart[i].count===0) {
            cart.splice(i,1);
          }
          
          break;
        }
        
      }
      saveCart();
    }
    

    //removeItemFromCartAll()
    function removeItemFromCartAll(name)
    {
      for (var i in cart) {
        if(cart[i].name === name)
        {
          cart.splice(i,1);
          break;
        }
        
      }
      saveCart();
    }

    
   
   
    //clearCart()
    function clearCart()
    {
      cart = [];
      saveCart();
    }


    //countCart()--> return total items no
    function countCart(){
      var totalCount =0;
      for(var i in cart)
      {
          totalCount += cart[i].count;   
      }
      return totalCount;
    }

 

    //totalCart()-->return total cost
    function totalCart(){
      var totalCost =0;
      for(var i in cart)
      {
          totalCost += cart[i].count * cart[i].price;   
      }
      return totalCost;
    }
    
    
    //list cart --> array of all items
    function listCart()
    {
      var cartCopy =[];
      for(var i in cart)
      {
        var item = cart[i];
        var itemCopy = {};
        for(var p in item)
        {
          itemCopy[p]=item[p];
        } 
        cartCopy.push(itemCopy)
      }
      return cartCopy;
    }


    //saveCart()
    function saveCart()
    {
      localStorage.setItem("shoppingCart",JSON.stringify(cart));
    }
   

    //loadCart()
    function loadCart()
    {
      cart = JSON.parse(localStorage.getItem("shoppingCart"));

    }
    


    
 </script>   



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });
        });
    </script>
</body>
</html>