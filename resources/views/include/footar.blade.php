  <!-- Newsletter Start -->
  <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="row justify-content-center">
          <div class="col-lg-10 border rounded p-1">
              <div class="border rounded text-center p-1">
                  <div class="bg-white rounded text-center p-5">
                      <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                      <div class="position-relative mx-auto" style="max-width: 400px;">
                          <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                          <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Newsletter Start -->


  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
      <div class="container pb-5">
          <div class="row g-5">
              <div class="col-md-6 col-lg-4">
                  <div class="bg-primary rounded p-4">
                      <a href="index.html">
                          <h1 class="text-white text-uppercase mb-3">Hotelier</h1>
                      </a>
                      <p class="text-white mb-0">
                          Download <a class="text-dark fw-medium" href="https://htmlcodex.com/hotel-html-template-pro">Hotelier – Premium Version</a>, build a professional website for your hotel business and grab the attention of new visitors upon your site’s launch.
                      </p>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                  <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                  <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                  <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                  <div class="d-flex pt-2">
                      <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                      <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
              <div class="col-lg-5 col-md-12">
                  <div class="row gy-5 g-4">
                      <div class="col-md-6">
                          <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                          <a class="btn btn-link" href="">About Us</a>
                          <a class="btn btn-link" href="">Contact Us</a>
                          <a class="btn btn-link" href="">Privacy Policy</a>
                          <a class="btn btn-link" href="">Terms & Condition</a>
                          <a class="btn btn-link" href="">Support</a>
                      </div>
                      <div class="col-md-6">
                          <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                          <a class="btn btn-link" href="">Food & Restaurant</a>
                          <a class="btn btn-link" href="">Spa & Fitness</a>
                          <a class="btn btn-link" href="">Sports & Gaming</a>
                          <a class="btn btn-link" href="">Event & Party</a>
                          <a class="btn btn-link" href="">GYM & Yoga</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="copyright">
              <div class="row">
                  <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                      &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                      <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                      Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                  </div>
                  <div class="col-md-6 text-center text-md-end">
                      <div class="footer-menu">
                          <a href="">Home</a>
                          <a href="">Cookies</a>
                          <a href="">Help</a>
                          <a href="">FQAs</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>
  <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel" aria-hidden="true">

      <!-- <input type="hidden" name="payment_method" id="payment_method" value=""> -->
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="bookingModalLabel">Booking Form</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form id="formdata">
                      <!-- Your form fields here -->
                      <input type="hidden" id="room_code" name="room_code" value="{{$room->room_code}}">
                      <input type="hidden" id="price" name="price" value="{{$room->price}}">
                      <input type="hidden" name="payment_id" id="payment_id" value="">
                      <div class="form-group">
                          <label for="name">Your Name</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                      </div>
                      <div class="form-group">
                          <label for="email">Your Email</label>
                          <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                      </div>
                      <div class="form-group">
                          <label for="email">Number</label>
                          <input type="text" class="form-control" name="number" id="number" placeholder="Your Number">
                      </div>
                      <br>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <div class="input-group date" id="date3" data-target-input="nearest">
                                      <input type="text" name="check_in" id="check_in" class="form-control datetimepicker-input" data-target="#date3" />
                                      <div class="input-group-append" data-target="#date3" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                  </div>
                                  <label for="date3">Check In</label>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <div class="input-group date" id="date4" data-target-input="nearest">
                                      <input type="text" name="check_out" id="check_out" class="form-control datetimepicker-input" data-target="#date4" />
                                      <div class="input-group-append" data-target="#date4" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                  </div>
                                  <label for="date4">Check Out</label>
                              </div>
                          </div>
                      </div>
                      <label for="payment_method">Select a Payment Method:</label>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="payment_method" id="flexRadioDefault1" value="cash">
                          <label class="form-check-label" for="flexRadioDefault1">
                              Cash
                          </label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="payment_method" id="flexRadioDefault2" value="online_payment" checked>
                          <label class="form-check-label" for="flexRadioDefault2">
                              Online payment
                          </label>
                      </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <!-- Update the button ID to "booking-form-btn" -->
                  <button type="button" class="btn btn-primary" id="booking-form-btn">Submit</button>
              </div>
              </form>
          </div>
      </div>
  </div>
  <!-- Your other HTML code here -->
  <!-- Add the Bootstrap modal markup -->
  <!-- Include jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Add the SweetAlert CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

  <!-- Add the SweetAlert library -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>

  <!-- Include Razorpay script with your API key -->
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script>
      // Replace "YOUR_RAZORPAY_API_KEY" with your actual Razorpay API key
      const razorpayApiKey = "rzp_test_gAHyV0EcZvy7Xn";
  </script>

  <script>
      function getCSRFToken() {
          return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      }

      $(document).ready(function() {

          // Click event handler for the "Submit" button
          $("#booking-form-btn").on("click", function() {
              const paymentMethod = $("input[name='payment_method']:checked").val();

              if (paymentMethod === "online_payment") {
                  // Call the function to initiate the Razorpay payment gateway
                  initiateRazorpayPayment();
              } else {
                  // Submit the form directly
                  // You can use AJAX to send the form data to your Laravel backend for processing
                  const formData = $("#formdata").serialize();
                  $.ajax({
                      url: "/process-cash-payment",
                      type: "POST",
                      data: formData,
                      headers: {
                          "X-CSRF-TOKEN": getCSRFToken(),
                      },
                      success: function(data) {
                          Swal.fire({
                              icon: 'success',
                              title: 'Payment Successful (Cash)',
                              text: 'Your payment has been successfully processed!',
                          }).then(function() {
                              // Reload the page after the user clicks "OK"
                              location.reload();
                          });
                      },
                      error: function(error) {
                          console.error("Error processing cash payment:", error);
                      },
                  });
              }
          });


          function initiateRazorpayPayment() {
              var Name = $('#name').val();
              var Email = $('#email').val();
              var Number = $('#Number').val();
              var Price = $('#price').val();
              var roomcode = $('#room_code').val();
              const options = {
                  key: razorpayApiKey,
                  amount: Price * 100, // Replace with the actual amount in paise (example: 1000 paise = ₹10)
                  currency: "INR",
                  name: "Hotal management",
                  description: "Payment for Room Booking",
                  // Add any additional options and parameters as needed

                  handler: function(response) {
                      // Handle the payment response
                      handleRazorpayResponse(response);
                  },
                  prefill: {
                      email: Email,
                      contact: Number,
                      name: Name,

                      // Add any other pre-filled customer details if needed
                  },
              };

              // Open the Razorpay payment gateway
              const razorpayInstance = new Razorpay(options);
              razorpayInstance.open();
          }



          function handleRazorpayResponse(response) {
              // $("#payment_id").val();
              var Name = $('#name').val();
              var Email = $('#email').val();
              var Number = $('#number').val();
              var Price = $('#price').val();
              const paymentMethod = $("input[name='payment_method']:checked").val();
              var roomcode = $('#room_code').val();
              var checkout = $('#check_out').val();
              var checkin = $('#check_out').val();
              $.ajax({
                  url: "/process-cash-payment",
                  type: "POST",
                  headers: {
                      "X-CSRF-TOKEN": getCSRFToken(),
                  },
                  data: {
                      payment_id: response.razorpay_payment_id,
                      name: Name,
                      email: Email,
                      number: Number,
                      price: Price,
                      payment_method: paymentMethod,
                      room_code: roomcode,
                      check_out: checkout,
                      check_in: checkin,
                  },
                  success: function(data) {
                      // Handle the success response from the server if needed
                      Swal.fire({
                          icon: 'success',
                          title: 'Payment Successful',
                          text: 'Your payment has been successfully processed!',
                      }).then(function() {
                          // Reload the page after the user clicks "OK"
                          location.reload();
                      });
                      console.log("Payment details stored successfully:", data);
                  },
                  error: function(error) {
                      // Handle the error response from the server if needed
                      console.error("Error storing payment details:", error);
                  },
              });
          }

      });
  </script>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
  <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
  <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

  <!-- Template Javascript -->
  <script src="{{ asset('js/main.js') }}"></script>
  </body>

  </html>