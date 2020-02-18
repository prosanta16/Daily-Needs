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
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="img/kb.jpg" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="img/kb.jpg" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="img/kb.jpg" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>	
				<!-- slide end-->

        
				<!--main content started-->
			<div class ="productCard">
        <h3 class="text-center">Fresh Fruit</h3>
        <div class="row" >
         <!--product list -->
          <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/fruit/china-fuji-apple.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Apple">Apple 1kg</h4>
                <h6 class="text-danger" data-price = "225">225 tk </h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/fruit/dalimbedana.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Bedana">Bedana 1kg</h4>
                <h6 class="text-danger" data-price = "325">325 tk </h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/fruit/green-coconut.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="green-coconut">Green-coconut 1 piece</h4>
                <h6 class="text-danger" data-price = "60">60 tk </h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/fruit/greengrapes.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="greengrapes">Green-grapes 250g</h4>
                <h6 class="text-danger" data-price = "125">125 tk </h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/fruit/himsagor.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Mango">Mango 1kg</h4>
                <h6 class="text-danger" data-price = "125">125 tk </h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

         

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/fruit/malta.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Malta">Malta 1kg</h4>
                <h6 class="text-danger" data-price = "130">130 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/fruit/nashpati.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Nashpati">Nashpati 500g</h4>
                <h6 class="text-danger" data-price = "140">140 tk </h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/fruit/pineapple.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="pineapple">Pineapple 1 piece</h4>
                <h6 class="text-danger" data-price = "50">50 tk </h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/fruit/redgrapes.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="redgrapes">Redgrapes 250g</h4>
                <h6 class="text-danger" data-price = "125">125 tk </h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <div class="col-sm-2">
            <div class="card" style="text-align: center; margin: 10px;">
              <div class="card-body">
                <img src="img/fruit/sagor.jpg" class="img-fluid" alt="Responsive image">
                <h4 class="text-info" data-text="Banana">Banana 12 pieces</h4>
                <h6 class="text-danger" data-price = "110">110 tk</h6>
                <input type="text" name="count" class="form-control" >
                <a href="#" class="cartBtn btn btn-success btn-block" style="margin-top: 5px;">Add to Cart</a>
              </div>
            </div>
           </div>

           <!--product list end-->
          </div>
      </div>
				
           
        </div>
</div>
    







<script type="text/javascript">
	

     $(".btn").click(function(event){
     	event.preventDefault();
     	var name = $(this).siblings(".text-info").attr("data-text");
     	var price = $(this).siblings(".text-danger").attr("data-price");
     	var cnt = Number($(this).siblings(".form-control").val());
      if(cnt == "NAN")
      {
        return;
      }

     	
     	addItemToCart(name,price,cnt)
     	saveCart();
     	displayCart();


     })
  
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