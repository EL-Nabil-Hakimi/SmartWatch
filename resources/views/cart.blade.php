<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>ISTYLE </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		@include('layout.nav')

		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Cart</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section before-footer-section">
            <div class="container">
              <div class="row mb-5">
                <form class="col-md-12" method="post">
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Image</th>
                          <th class="product-name">Product</th>
                          <th class="product-price">Price</th>
                          <th class="product-quantity">Quantity</th>
                          <th class="product-total">Total</th>
                          <th class="product-remove">Remove</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($products as $pro)
                        <tr>
                          <td class="product-thumbnail">
                            <img src="{{$pro->product->image}}" alt="Image" class="img-fluid">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black">{{$pro->product->name}}</h2>
                          </td>
                          <td >$<span class="prix1">{{$pro->product->prix}}</span></td>
                          <td>
                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                              <div class="input-group-prepend">
                                <button class="btn btn-outline-black decrease" type="button" onclick="calculateTotal()">&minus;</button>
                              </div>
                              <input type="text" class="form-control text-center quantity-amount plusProduct"   value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              <div class="input-group-append">
                                <button class="btn btn-outline-black increase" type="button" onclick="calculateTotal()">&plus;</button>
                              </div>
                            </div>
        
                          </td>
                          <td class="total-price">${{$pro->product->prix}}</td>
                          <td>
                            <a href="/remove/product/{{$pro->id}}" class="btn btn-black btn-sm removeProduct">X</a>
                          </td>
                          
                        </tr>

                        @empty
                            Pnier vide
                        @endforelse
                        
        
                       
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
        
              <div class="row">
                <div class="col-md-6">
                    <!-- Cart items here -->
                </div>
                <div class="col-md-6 pl-5">
                    <div class="row justify-content-end">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 text-right border-bottom mb-5">
                                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <span class="text-black">Subtotal</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="subtotal text-black">$0.00</strong>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <span class="text-black">Total + TVA</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="total text-black">$0.00</strong>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-black btn-lg py-3 btn-block" onclick="showmodal()">Proceed To Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
          </div>
		

		<!-- Start Footer Section -->
          
		<!-- End Footer Section -->	
@include('layout.footer')

		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var increaseButtons = document.querySelectorAll('.increase');
        var decreaseButtons = document.querySelectorAll('.decrease');
    
        increaseButtons.forEach(function(button) {
          button.addEventListener('click', function() {
            updateTotalPrice(this, 1);
          });
        });
    
        decreaseButtons.forEach(function(button) {
          button.addEventListener('click', function() {
            updateTotalPrice(this, -1);
          });
        });
    
        function updateTotalPrice(button, change) {
          var parentRow = button.closest('tr');
          var prixElement = parentRow.querySelector('.prix1');
          var quantityInput = parentRow.querySelector('.quantity-amount');
    
          var prix = parseFloat(prixElement.textContent.replace('$', ''));
          var quantity = parseInt(quantityInput.value);
    
          if (isNaN(prix) || isNaN(quantity)) {
            console.error('Invalid price or quantity');
            return;
          }
    
          
    
          var totalPrice = prix * quantity;
          parentRow.querySelector('.total-price').textContent = '$' + totalPrice;
          calculateTotal();
        }
    
        function calculateTotal() {
          var total = 0;
          document.querySelectorAll('.total-price').forEach(function(item) {
            total += parseFloat(item.textContent.replace('$', ''));
          });
          document.querySelector('.subtotal').textContent = '$' + total;
          tva = total * 0.20;
          document.querySelector('.total').textContent = '$' + (total + tva) ;
        }
    
        calculateTotal();
      });
    </script>
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var removeProductBtns = document.querySelectorAll('.removeProduct');
    
        removeProductBtns.forEach(function(removeProductBtn) {
          removeProductBtn.addEventListener('click', function(event) {
            confirmDeleteProduct(removeProductBtn, event);
          });
        });
    
        function confirmDeleteProduct(removeProductBtn, event) {
          event.preventDefault();
          Swal.fire({
            title: 'Êtes-vous sûr(e) ?',
            text: 'Vous êtes sur le point de supprimer ce produit.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprimez-le !'
          }).then((result) => {
            if (result.isConfirmed) {
              // Redirige l'utilisateur vers le lien spécifié
              window.location.href = removeProductBtn.getAttribute('href');
            }
          });
        }
      });



      var showmodal = function(){
         Swal.fire({
            title: 'Commande effectuée avec succès',
            text: 'Votre commande a été effectuée avec succès',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = '/';
            }
          });
      }
    </script>
    
    
  
  

  
	</body>




  

</html>
