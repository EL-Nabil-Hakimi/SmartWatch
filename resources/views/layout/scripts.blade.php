<script>
    $(document).ready(function() {
      $('.signin_user').click(function() {
        var href = $(this).data('href'); 
        Swal.fire({
          title: 'Vous devez vous connecter pour accéder à cette fonctionnalité.',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Se connecter'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = href;
          }
        });
      });
    });
  </script>
  

<script>
                    $('.ADDPRODUCT').click(function(event) {
                    event.preventDefault();

                    var productId = $(this).data('product-id');

                    $.ajax({
                        type: 'GET',
                        url: '/api/reservation/' + <?php echo session()->get('user_id'); ?> + '/' + productId,
                        success: function(response) {
                            var countresElement = document.getElementById('countres');
                            var currentValue = parseInt(countresElement.innerHTML);	
                            countresElement.innerHTML = currentValue + 1;
                            Swal.fire("Produit ajouté !", "Le produit a été ajouté avec succès à votre réservation.", "success");
                        },
                        error: function(xhr, status, error) {
                            Swal.fire("Produit déjà ajouté !", "Le produit a déjà été réservé.", "error");
                        }
                    });
                });

</script>