<div class="container-fluid bg-white mt-5">
     <div class="row">
      <div class="col-lg-4 p-4">
          <h3 class="h-font fw-bold fs-3 mb-2">JD-Hotel</h3>
           <p>
           A great hotel website provides visitors with information about the hotel or its resort such as photos, prices, locations, and services. The key is that it does this in an attractive way, making it as easy as possible for visitors to book a room. 
           A comfortable and convenient user experience will also be a bonus that impresses website visitors.
           </p>
      </div>
      <div class="col-lg-4 p-4">
          <h5 class="mb-3">Links</h5>
           <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
           <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
           <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
           <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
           <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Follow us</h5>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
          <i class="bi bi-twitter me-1"></i>Twitter
        </a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
          <i class="bi bi-facebook me-1"></i>Facebook
        </a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
          <i class="bi bi-instagram"></i>Instagram
        </a><br>
      </div>
     </div>
  </div>
  <h6 class="text-center bg-dark text-white p-3">Designed and developed by JD-Hotel</h6>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    function setactive(){
    let register_form = document.getElementById('register-form');

    register_form.addEventListener('submit', (e)=>{
      e.preventDefault();

      let data = new FormData();

      data.append('name',register_form.elements['name'].value);
      data.append('email',register_form.elements['email'].value);
      data.append('phonenum',register_form.elements['phonenum'].value);
      data.append('address',register_form.elements['address'].value);
      data.append('pincode',register_form.elements['pincode'].value);
      data.append('dob',register_form.elements['dob'].value);
      data.append('pass',register_form.elements['pass'].value);
      data.append('cpass',register_form.elements['cpass'].value);
      data.append('profile',register_form.elements['profile'].files[0]);
      data.append('register','');

      var myModal = document.getElementById('registerModal');
      var modal = bootstrap.Modal.getInstance(myModal);
      modal.hide();

      let xhr  = new XMLHttpRequest();
      xhr.open("POST","ajax/login_register.php",true);

      xhr.onload = function(){
        if(this.responseText == 'pass_mismatch'){
          alert('error',"Password Mismatch!");
        }
        else{
          alert("Registration successful");
          register_form.reset();
        }
      }

      xhr.send(data);
    })
  }
    
  </script>