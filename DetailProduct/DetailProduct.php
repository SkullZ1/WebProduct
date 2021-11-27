<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sora">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css_detailproduct.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="jquery.nice-number.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script
		src="https://code.jquery.com/jquery-3.6.0.js"
		integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
		crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(function(){
            $('input[type="number"]').niceNumber();
        });
    </script> 
    <script src="jquery.nice-number.js"></script>

    <title>NAVBAR</title>
  </head>
  <body>
    <!--NAVBAR-->
  <nav class="navbar fixed-top navbar-dark navbar-expand-lg navbar-template navbar-custom">
    <a class="navbar-brand" href="#">
      <img src="asset/logo.png" width="50" height="50" alt="logo">
    </a>
    <div class="d-flex flex-row order-2 order-lg-3">
        <ul class="right-nav navbar-nav flex-row">
            <!--search icon-->
            <li class="nav-item">
                 <div class="nav-link">
                    <i class="btn-search fas fa-search fa-lg"data-toggle="modal" data-target="#searchmodal"></i>
                </div>
            </li>
            <!--cart icon-->
            <li class="nav-item">
                <a class="nav-link" href="#" >
                    <img class="cart" src="asset/cart.png" width="28" height="28" alt="" data-toggle="modal" data-target="#CartModal">
                </a>
            </li>
            <li class="nav-item">
                <div class="nav-link" href="#">
                    <!--profile dropdown-->
                    <div class="dropdown ">
                        <img id="avatar" class="dropbtn" onclick="myFunction()" src="asset/img_avatar.png" width="30" height="30" alt="Avatar">
                        <div id="myDropdown" class="dropdown-content">
                            <a href="#img"><img id="avatar2" src="asset/img_avatar.png" width="30" height="30" alt="Avatar">Account Name</a>
                            <a href="#details">Account Details</a>
                            <a href="#logout">Log Out</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
        <div class="collapse navbar-collapse order-3 order-lg-2" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">          
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--Search Modal -->
    <div class="modal fade" id="searchmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="search-bar" action="/action_page.php">
                        <input class="input-search" type="text" placeholder="Search.." name="search">
                        <button class="search-submit" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Modal -->
    <div class="cart_modal modal fade" id="CartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img src="https://img.icons8.com/material/28/000000/shopping-cart--v1.png"/>
                <h5 class="modal-title" style="margin-left: 10px;" id="exampleModalLabel">Cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!---Cart Card--->
                <div class="phone-card card mb-3" style="max-width: 765px;">
                    <div class="row no-gutters">
                        <div class="col-sm-2">
                            <center>
                            <img class="phone" src="asset/phone.png" width="60" height="70" alt="...">
                            </center>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body">
                                <h5>Title</h5>
                                <p class="price">x.xxx.xxx</p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                        <center>
                            <!--COUNTER-->
                            <div class="container">
                                <div class="count-input space-bottom">
                                    <a class="incr-btn" data-action="decrease" href="#">–</a>
                                    <input class="quantity" type="text" name="quantity" value="1"/>
                                    <a class="incr-btn" data-action="increase" href="#">&plus;</a>
                                </div>
                                <div class="trash">
                                    <img src="https://img.icons8.com/material-outlined/24/000000/trash--v1.png"/>
                                </div>
                            </div>    
                        </center>
                        </div>
                    </div>
                </div>
            </div>
            <!--modal footer-->
            <div class="modal-footer">
                <div class="card mb-3" style="width: 765px;background-color:#22577A;">
                    <div class="row no-gutters" style="background-color: transparent;">
                        <div class="col-md-9 my-auto">
                            <p class="label">Total Price : </p> 
                            <p class="nominal">x.xxx.xxxx</p>
                        </div>
                        <div class="col-md-3">
                        <div class="card-body text-center mx-auto">
                            <button type="button" class="btn btn-light" style="background-color:#F8F8FA" >Check Out</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <br>
    <br>
    <br>
    <br>

        <!-- Table Carousel -->
    <div class="container" id="container-body">
        <div class="row">
            <div class="col-lg-6">
                <div class="container">
                    <div id="demo" class="carousel slide" id="carousel-slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active" style="background-color:#717171" ></li>
                        <li data-target="#demo" data-slide-to="1" style="background-color:#717171"></li>
                        <li data-target="#demo" data-slide-to="2" style="background-color:#717171"></li>
                    </ul>
                        <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="redmi10.png"  class="rounded mx-auto img-fluid" >    
                        </div>
                        <div class="carousel-item">
                            <img src="redmi10.png" class="rounded mx-auto d-block img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="redmi10.png" class="rounded mx-auto img-fluid">
                        </div>
                    </div>
                        
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev" style="margin">
                        <span class="carousel-control-prev-icon" style="background-color:black"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next" >
                        <span class="carousel-control-next-icon"style="background-color:black"></span>
                        </a>
                    </div> 
                </div>
            </div>
            <div class="col">
                <td style="margin-top:10px">
                <br>
                    <h2>Title Product</h2>
                    <h4>Price</h4>
                    <br>
                    <p style="font-size: 20px;">Storage<p>
                        <button type="button" class="btn btn-outline-dark" style="text-color:black">
                            <label class="form-check-label" value="...">6GB+64GB</label>
                        </button>
                        <button type="button" class="btn btn-outline-dark" style="margin-left:10px">8GB+128GB</button>
                        <p style="font-size: 20px;">Color<p>
                            <button type="button" class="btn btn-outline-dark" id="button-colorname" style="width:145px;height:50px;" class="form-check-btn" for="inlineRadio1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Color Name</label>
                            </button>
                            <button type="button" class="btn btn-outline-dark" style="margin-left:20px; width:145px;height:50px" id="button-colorname" class="form-check-btn" for="inlineRadio2">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
                                <label class="form-check-label" for="inlineRadio2">Color Name</label>
                            </button>
                            <button type="button" class="btn btn-outline-dark" style="margin-left:20px;width:145px;height:50px" id="button-colorname" class="form-check-btn" for="inlineRadio3">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">
                                <label class="form-check-label" for="inlineRadio3">Color Name</label>
                            </button>
                        <br>
                        <br>
                        <br>
                        <br>
                        <table>
                            <tbody>
                                <td>
                                    <p style="font-size: 20px;">Quantity<p>
                                </td>
                                <td>
                                    <div class="nice-number" style="margin-left:50px; margin:0 5px !important">
                                        <input type="number" value="1" min="1" style="width: 4ch;">
                                    </div>
                                </td>
                            </tbody>
                        </table>
                        <br>
                        <button type="button" class="btn btn-outline-success"style="width:200px;height:65px;text-color:black;image-color:#16C79A">
                            <img src="keranjang2.png" style="width:30px; margin-left:-20px;image-color:#16C79A">
                            Add To Chart 
                        </button>
                        <button type="button" class="btn btn-light text-white"style="background-color:#16C79A;margin-left:20px;width:150px;height:65px;border-top-left-radius : 5%;border-top-right-radius : 5%;">
                            Buy Now
                        </button>
            </div>
        </div>   
    </div>
        <!-- Deskripsi -->
        <br>
        <div class="container" style="font-size:20px" id="deskripsi">
        <br>
            <h1>Deskrpisi<h1>
            <p> 

            </p>
            <p style="font-size:20px">
                Redmi Note 10 5G meluncur dengan menggunakan layar berukuran 6,5 inci Full HD Plus yang 
                membawa desain DotDisplay dengan refresh rate 90 Hz. 
                HP 5G murah ini menjanjikan tampilan yang lebih memukau dan responsif.
            </p>
            <p style="font-size:20px">
                Perangkat satu ini cukup ciamik dengan kamera utama beresolusi 48 MP yang ditemani sensor 2 MP 
                untuk makro dan 2 MP lainnya untuk depth sensor. 
                Untuk selfie, HP murah ini datang dengan sensor 8 MP.
            </p>
        </div>
        <br>
        <div class="container" style="font-size:20px" id="spesifikasi">
        <br>
            <h1>Specification<h1>
            <p> 
                
            </p>
            <p style="font-size:20px">
                Redmi Note 10 5G meluncur dengan menggunakan layar berukuran 6,5 inci Full HD Plus yang 
                membawa desain DotDisplay dengan refresh rate 90 Hz. 
                HP 5G murah ini menjanjikan tampilan yang lebih memukau dan responsif.
            </p>
            <p style="font-size:20px">
                Perangkat satu ini cukup ciamik dengan kamera utama beresolusi 48 MP yang ditemani sensor 2 MP 
                untuk makro dan 2 MP lainnya untuk depth sensor. 
                Untuk selfie, HP murah ini datang dengan sensor 8 MP.
            </p>
        </div>
        <br>
        <br>
        
        <!-- Review -->
        <div class="container"id="container-reviews">
            <h1>Reviews</h1>
            <br>
            <div class="col mb-3">
                <a href="" class="cardlink">
                    <div class="card" style="text-color:black">
                        <img src="default.png" class="img-card" id="cardimage" alt="..." style="background-color:grey;border-top-left-radius : 5%;border-top-right-radius : 5%;height : 300px">
                            <div class="card-body">
                                <p class="text-dark">Reviews</p>
                                <h5 class="text-dark" style="text-weight:bold;">Title Reviews</h5>
                            </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Ulasan -->
        <div class="container" id="container-Ulasan">
            <div class="col mb-3">
                <a href="" class="cardlink">
                    <div class="card" style="text-color;black">
                        <h2 class="text-dark">Ulasan</h2>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Tulis Komentar Disini" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2"></label>
                        </div>
                        <div class="Button" id="ButtonUlasan">
                            <button type="button" class="btn btn-primary plus float-right">Kirim</button>
                        </div>                        
                    </div>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="card-footer">
                <div class="container" style="font-size:20px" id="nama-user">
                    <br>
                        <p style="font-size:20px; text-weight;bold;"class="text-dark">Nama User</p>
                        <p style="font-size:14px;"class="text-dark">Rating : 7/10</p>
                        <p style="font-size:15px;"class="text-dark">Ulasan User Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo vulputate ridiculus faucibus sed risus elementum tempus. Lorem pulvinar nulla nunc, senectus. Sit integer proin sed fermentum, sed. Amet curabitur consectetur amet id duis risus sed.
                        </p> 
                    </br>
                    <br>
                        <p style="font-size:20px; text-weight;bold;"class="text-dark">Nama User</p>
                        <p style="font-size:14px;"class="text-dark">Rating : 7/10</p>
                        <p style="font-size:15px;"class="text-dark">Ulasan User Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo vulputate ridiculus faucibus sed risus elementum tempus. Lorem pulvinar nulla nunc, senectus. Sit integer proin sed fermentum, sed. Amet curabitur consectetur amet id duis risus sed.
                        </p> 
                    </br>    
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            </div>
        </div>


    </div>

    <!--footer-->
    <div class="footer">
        <img src="asset/logo.png" width="125" height="125" alt="logo">
        
        <div class="text-center p-3">
        <a class="footer-link" href=" ">About Us</a>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>$('#myModal').modal({backdrop: 'static', keyboard: true})  </script>
    <script>
      /* When the user clicks on the button, 
      toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
    </script>
    <script>
        $(".incr-btn").on("click", function (e) {
        var $button = $(this);
        var oldValue = $button.parent().find('.quantity').val();
        $button.parent().find('.incr-btn[data-action="decrease"]').removeClass('inactive');
        if ($button.data('action') == "increase") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below 1
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
                $button.addClass('inactive');
            }
        }
        $button.parent().find('.quantity').val(newVal);
        e.preventDefault();
    });
    </script>
    <script>
(function ($) {
	$.fn.niceNumber = function (options) {
		var defaults = {
			autoSize: true,
			autoSizeBuffer: 1,
			buttonDecrement: '-',
			buttonIncrement: '+',
			buttonPosition: 'around',

			/**
				callbackFunction
				@param {$input} currentInput - the input running the callback
				@param {number} amount - the amount after increase/decrease
				@param {object} settings - the passed niceNumber settings
			**/
			onDecrement: false,
			onIncrement: false,
		};
		var settings = $.extend(defaults, options);

		return this.each(function () {
			var currentInput = this,
				$currentInput = $(currentInput),
				maxValue = $currentInput.attr('max'),
				minValue = $currentInput.attr('min'),
				attrMax = null,
				attrMin = null;

			// Skip already initialized input
			if ($currentInput.attr('data-nice-number-initialized')) return;

			// Handle max and min values
			if (
				maxValue !== undefined &&
				maxValue !== false
			) {
				attrMax = parseFloat(maxValue);
			}

			if (
				minValue !== undefined &&
				minValue !== false
			) {
				attrMin = parseFloat(minValue);
			}

			// Fix issue with initial value being < min
			if (attrMin && !currentInput.value) {
				$currentInput.val(attrMin);
			}

			// Generate container
			var $inputContainer = $('<div/>', {
				class: 'nice-number',
			}).insertAfter(currentInput);

			// Generate interval (object so it is passed by reference)
			var interval = {};

			// Generate buttons
			var $minusButton = $('<button/>')
				.attr('type', 'button')
				.html(settings.buttonDecrement)
				.on('mousedown mouseup mouseleave', function (event) {
					changeInterval(event.type, interval, function () {
						var currentValue = parseFloat($currentInput.val() || 0);
						if (
							attrMin == null ||
							attrMin < currentValue
						) {
							var newValue = currentValue - 1;
							$currentInput.val(newValue);
							if (settings.onDecrement) {
								settings.onDecrement(
									$currentInput,
									newValue,
									settings
								);
							}
						}
					});

					// Trigger the input event here to avoid event spam
					if (event.type == 'mouseup' || event.type == 'mouseleave') {
						$currentInput.trigger('input');
					}
				});

			var $plusButton = $('<button/>')
				.attr('type', 'button')
				.html(settings.buttonIncrement)
				.on('mousedown mouseup mouseleave', function (event) {
					changeInterval(event.type, interval, function () {
						var currentValue = parseFloat($currentInput.val() || 0);
						if (
							attrMax == null ||
							attrMax > currentValue
						) {
							var newValue = currentValue + 1;
							$currentInput.val(newValue);
							if (settings.onIncrement) {
								settings.onIncrement(
									$currentInput,
									newValue,
									settings
								);
							}
						}
					});

					// Trigger the input event here to avoid event spam
					if (event.type == 'mouseup' || event.type == 'mouseleave') {
						$currentInput.trigger('input');
					}
				});

			// Remember that we have initialized this input
			$currentInput.attr('data-nice-number-initialized', true);

			// Append elements
			switch (settings.buttonPosition) {
				case 'left':
					$minusButton.appendTo($inputContainer);
					$plusButton.appendTo($inputContainer);
					$currentInput.appendTo($inputContainer);
					break;
				case 'right':
					$currentInput.appendTo($inputContainer);
					$minusButton.appendTo($inputContainer);
					$plusButton.appendTo($inputContainer);
					break;
				case 'around':
				default:
					$minusButton.appendTo($inputContainer);
					$currentInput.appendTo($inputContainer);
					$plusButton.appendTo($inputContainer);
					break;
			}

			// Nicely size input
			if (settings.autoSize) {
				$currentInput.width(
					$currentInput.val().length + settings.autoSizeBuffer + 'ch'
				);
				$currentInput.on('keyup input', function () {
					$currentInput.animate(
						{
							width:
								$currentInput.val().length +
								settings.autoSizeBuffer +
								'ch'
						},
						200
					);
				});
			}
		});
	};

	function changeInterval(eventType, interval, callback) {
		if (eventType == 'mousedown') {
			interval.timeout = setTimeout(function () {
				interval.actualInterval = setInterval(function () {
					callback();
				}, 100);
			}, 200);
			callback();
		} else {
			if (interval.timeout) {
				clearTimeout(interval.timeout);
			}
			if (interval.actualInterval) {
				clearInterval(interval.actualInterval);
			}
		}
	}
})(jQuery);

</script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>