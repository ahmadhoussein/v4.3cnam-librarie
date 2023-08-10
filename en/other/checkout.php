<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CNAM Library</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/extras/bootstrap.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/extras/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/extras/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/extras/custom.css" />

    <!-- import css and js of main components -->
    <link rel="stylesheet" href="../css/main.css" />
    <script src="../js/main.js" defer></script>
  </head>
  <body onload="loading()">
    <header id="checkout" class="level-2"></header>
    <nav id="navBar"></nav>
    <form id="searchLayer"></form>
    <aside id="menu"></aside>

    <main>
      <!-- Start Cart  -->
      <div class="cart-box-main">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-6 mb-3">
              <div class="checkout-address">
                <div class="title-left">
                  <h3>Billing address</h3>
                </div>
                <form class="needs-validation" novalidate>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="firstName">First name *</label>
                      <input
                        type="text"
                        class="form-control"
                        id="firstName"
                        placeholder=""
                        value=""
                        required
                      />
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="lastName">Last name *</label>
                      <input
                        type="text"
                        class="form-control"
                        id="lastName"
                        placeholder=""
                        value=""
                        required
                      />
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="username">Username *</label>
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        id="username"
                        placeholder=""
                        required
                      />
                      <div class="invalid-feedback" style="width: 100%">
                        Your username is required.
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="email">Email Address *</label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder=""
                    />
                    <div class="invalid-feedback">
                      Please enter a valid email address for shipping updates.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="address">Address *</label>
                    <input
                      type="text"
                      class="form-control"
                      id="address"
                      placeholder=""
                      required
                    />
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="address2">Address 2 *</label>
                    <input
                      type="text"
                      class="form-control"
                      id="address2"
                      placeholder=""
                    />
                  </div>
                  <div class="row">
                    <div class="col-md-5 mb-3">
                      <label for="country">Country *</label>
                      <select class="wide w-100" id="country">
                        <option value="Choose..." data-display="Select">
                          Choose...
                        </option>
                        <option value="United States">United States</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid country.
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="state">State *</label>
                      <select class="wide w-100" id="state">
                        <option data-display="Select">Choose...</option>
                        <option>California</option>
                      </select>
                      <div class="invalid-feedback">
                        Please provide a valid state.
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="zip">Zip *</label>
                      <input
                        type="text"
                        class="form-control"
                        id="zip"
                        placeholder=""
                        required
                      />
                      <div class="invalid-feedback">Zip code required.</div>
                    </div>
                  </div>
                  <hr class="mb-4" />
                  <div class="custom-control custom-checkbox">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      id="same-address"
                    />
                    <label class="custom-control-label" for="same-address"
                      >Shipping address is the same as my billing address</label
                    >
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      id="save-info"
                    />
                    <label class="custom-control-label" for="save-info"
                      >Save this information for next time</label
                    >
                  </div>
                  <hr class="mb-4" />
                </form>
              </div>
            </div>
            <div class="col-sm-6 col-lg-6 mb-3">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="shipping-method-box">
                    <div class="title-left">
                      <h3>Shipping Method</h3>
                    </div>
                    <div class="mb-4">
                      <div class="custom-control custom-radio">
                        <input
                          id="shippingOption1"
                          name="shipping-option"
                          class="custom-control-input"
                          checked="checked"
                          type="radio"
                        />
                        <label
                          class="custom-control-label"
                          for="shippingOption1"
                          >Standard Delivery</label
                        >
                        <span class="float-right font-weight-bold">FREE</span>
                      </div>
                      <div class="ml-4 mb-2 small">(3-7 business days)</div>
                      <div class="custom-control custom-radio">
                        <input
                          id="shippingOption2"
                          name="shipping-option"
                          class="custom-control-input"
                          type="radio"
                        />
                        <label
                          class="custom-control-label"
                          for="shippingOption2"
                          >Express Delivery</label
                        >
                        <span class="float-right font-weight-bold">$10.00</span>
                      </div>
                      <div class="ml-4 mb-2 small">(2-4 business days)</div>
                      <div class="custom-control custom-radio">
                        <input
                          id="shippingOption3"
                          name="shipping-option"
                          class="custom-control-input"
                          type="radio"
                        />
                        <label
                          class="custom-control-label"
                          for="shippingOption3"
                          >Next Business day</label
                        >
                        <span class="float-right font-weight-bold">$20.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-12">
                  <div class="odr-box">
                    <div class="title-left">
                      <h3>Shopping cart</h3>
                    </div>
                    <div class="rounded p-2 bg-light">
                      <div class="media mb-2 border-bottom">
                        <div class="media-body">
                          <a href="detail.html"> Lorem ipsum dolor sit amet</a>
                          <div class="small text-muted">
                            Price: $80.00 <span class="mx-2">|</span> Qty: 1
                            <span class="mx-2">|</span> Subtotal: $80.00
                          </div>
                        </div>
                      </div>
                      <div class="media mb-2 border-bottom">
                        <div class="media-body">
                          <a href="detail.html"> Lorem ipsum dolor sit amet</a>
                          <div class="small text-muted">
                            Price: $60.00 <span class="mx-2">|</span> Qty: 1
                            <span class="mx-2">|</span> Subtotal: $60.00
                          </div>
                        </div>
                      </div>
                      <div class="media mb-2">
                        <div class="media-body">
                          <a href="detail.html"> Lorem ipsum dolor sit amet</a>
                          <div class="small text-muted">
                            Price: $40.00 <span class="mx-2">|</span> Qty: 1
                            <span class="mx-2">|</span> Subtotal: $40.00
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-12">
                  <div class="order-box">
                    <div class="title-left">
                      <h3>Your order</h3>
                    </div>
                    <div class="d-flex">
                      <div class="font-weight-bold">Product</div>
                      <div class="ml-auto font-weight-bold">Total</div>
                    </div>
                    <hr class="my-1" />
                    <div class="d-flex">
                      <h4>Sub Total</h4>
                      <div class="ml-auto font-weight-bold">$ 440</div>
                    </div>
                    <div class="d-flex">
                      <h4>Discount</h4>
                      <div class="ml-auto font-weight-bold">$ 40</div>
                    </div>
                    <hr class="my-1" />
                    <div class="d-flex">
                      <h4>Coupon Discount</h4>
                      <div class="ml-auto font-weight-bold">$ 10</div>
                    </div>
                    <div class="d-flex">
                      <h4>Tax</h4>
                      <div class="ml-auto font-weight-bold">$ 2</div>
                    </div>
                    <div class="d-flex">
                      <h4>Shipping Cost</h4>
                      <div class="ml-auto font-weight-bold">Free</div>
                    </div>
                    <hr />
                    <div class="d-flex gr-total">
                      <h5>Grand Total</h5>
                      <div class="ml-auto h5">$ 388</div>
                    </div>
                    <hr />
                  </div>
                </div>
                <div class="col-12 d-flex shopping-box">
                  <a href="./../php/buy.php" class="ml-auto btn hvr-hover">Place Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer></footer>
    <script>
      setTimeout( () => {
        // here username
        document.querySelector('#profile span').innerHTML = '{{User}}';
        
        // here the icon of the user
        // document.querySelector('#profile img').src; 
      }, 200);
    </script>
    <!-- End Cart -->

    <!-- ALL JS FILES -->
    <script src="../extras/js/jquery-3.2.1.min.js"></script>
    <script src="../extras/js/popper.min.js"></script>
    <script src="../extras/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../extras/js/jquery.superslides.min.js"></script>
    <script src="../extras/js/bootstrap-select.js"></script>
    <script src="../extras/js/inewsticker.js"></script>
    <script src="../extras/js/bootsnav.js."></script>
    <script src="../extras/js/images-loded.min.js"></script>
    <script src="../extras/js/isotope.min.js"></script>
    <script src="../extras/js/owl.carousel.min.js"></script>
    <script src="../extras/js/baguetteBox.min.js"></script>
    <script src="../extras/js/form-validator.min.js"></script>
    <script src="../extras/js/contact-form-script.js"></script>
    <script src="../extras/js/custom.js"></script>
  </body>
</html>
