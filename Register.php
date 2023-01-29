<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!--BootstrapScipt-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <!-- My Own CSS-->
  <link rel="stylesheet" href="css/style.css" />
  <!--my javascript -->
  <script src="js/register.js"></script>
  <title>Heidis Language About</title>
</head>
<body>
  <!--Navigation Bar with Logo and Titel-->
  <nav class="navbar navbar-dark navbar-expand-lg bg-success z-index-1 ">
    <div class="container-fluid">
      <a id="title" class="navbar-brand align-text-top m-auto text-lg-start text-wrap" href="Register.php">
        <img class="d-inline-block" src="image/logo.jpeg" alt="logo" width="100" height="100">
        Heidi`s Language School</a>
      <!--Navbar button to open menu-->
      <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation justify-content-end">
        <span class="navbar-toggler-icon">
        </span>
      </button>
      <!--Pages link and titel-->
      <div class="collapse navbar-collapse me-5 pt-5" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active pt-5 me-5">
            <a class="nav-link" href="Index.php">Home</a>
          </li>
          <li class="nav-item active pt-5 me-5">
            <a class="nav-link" href="Register.php">Register</a>
          </li>
          <li class="nav-item active pt-5 me-5">
            <a class="nav-link" href="Certificate.php">Certificat</a>
          </li>
          <li class="nav-item active pt-5 me-5">
            <a class="nav-link" href="About.php">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--pagecontext body with image-->
  <div class="bg-image mh-auto" style="background-image: url('image/1260521.jpg');">
    <!-- form start-->
    <form action="confirmation.php"  method="post" class="w-60 p-3 m-auto col formul" id="contactForm" onsubmit="return validateForm() && validateCheckboxes();">
    <label><span class="display">Gender please select at least one</span></label>
    <!--gender-->
      <div class="form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male">
        <label class="form-check-label" for="inlineRadio1">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female">
        <label class="form-check-label" for="inlineRadio2">Female</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Other">
        <label class="form-check-label" for="inlineRadio3">Other</label>
      </div>
      <!-- Name input -->
      
      <div class="row justify-content-sm-start g-3">
        <label class="form-label py-2" for="fname"></label>
        <p class="mb-0">First Name</p>
        <input class="form-control py-1" id="fname" name="fname" type="text" placeholder="First Name"
          data-sb-validations="required" />
        <div class="invalid-feedback" data-sb-feedback="name:required"> First Name is required.</div>
      </div>
      <div class="row justify-content-sm-start g-3">
        <label class="form-label py-2" for="lname"></label>
        <p class="mb-0">Last Name</p>
        <input class="form-control py-1" id="lname" type="text" name="lname" placeholder="Last Name" data-sb-validations="required">
        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
      </div>
      <!--StreetName-->
      <div class="row justify-content-sm-start g-3">
        <label class="form-label py-2" for="streetName"></label>
        <p class="mb-0">StreetName</p>
        <input class="form-control py-1" id="streetName" name="streetName" type="text" placeholder="Street Name examplestreet.2"
          data-sb-validations="required">
        <div class="invalid-feedback" data-sb-feedback="street:required">Street is required.
        </div>
      </div>
      <!--Postcode-->
      <div class="row justify-content-sm-start g-3">
        <label class="form-label py-2" for="postCode"></label>
        <p class="mb-0">Post Code</p>
        <input class="form-control py-1" id="postCode" type="number" name="postCode" placeholder="Post Code 8000"
          data-sb-validations="required" value="PostCode" />
        <div class="invalid-feedback" data-sb-feedback="postCode:required">Post Code is required.</div>
      </div>
      <!--CityName-->
      <div class="row justify-content-sm-start g-3">
        <label class="form-label py-2" for="city"></label>
        <p class="mb-0">City</p>
        <input class="form-control py-1" id="city" type="text" name="city" placeholder="City" data-sb-validations="required" />
        <div class="invalid-feedback" data-sb-feedback="city:required">City is required.</div>
      </div>
      <!--Country Name-->
      <div class="row justify-content-sm-start g-3">
        <label class="form-label py-2" for="country"></label>
        <p class="mb-0">Country</p>
        <input class="form-control py-1" id="country" name="country" type="text" placeholder="Country"
          data-sb-validations="required" />
        <div class="invalid-feedback" data-sb-feedback="country:required">Country is required.</div>
      </div>
      <!--Age-->
      <div class="row justify-content-sm-start g-3">
        <label class="form-label py-2" for="DateOfBirth"></label>
        <p class="mb-0">Age</p>
        <input class="form-control py-1" id="DateOfBirth" name="DateOfBirth" type="number" placeholder="Age"
          data-sb-validations="required" value="BirthDate" />
        <div class="invalid-feedback" data-sb-feedback="dateOfBirth:required">Age</div>
      </div>
      <!--Phone Number-->
      <div class="row justify-content-sm-start g-3">
        <label class="form-label py-2" for="phoneNr"></label>
        <p class="mb-0">Phone Number</p>
        <input class="form-control py-1" id="phoneNr" name="phoneNr" type="number" placeholder="Phone Number 044 xxx xx xx"
          data-sb-validations="required" />
        <div class="invalid-feedback" data-sb-feedback="phoneNr:required">Phone Nr is required.</div>
      </div>
      <!--Email-->
      <div class="row justify-content-sm-start g-3">
        <label class="form-label py-2" for="email"></label>
        <p class="mb-0">Email</p>
        <input class="form-control py-1" id="email" type="email" name="email" placeholder="Email" data-sb-validations="required" />
        <div class="invalid-feedback" data-sb-feedback="email:required">Email is required.</div>
      </div>
      <!--Language Selection-->
      <div class="py-2 justify-content-sm-start g-3 mt-5">
        <label><span class="display">Language please select at least one</span></label>
      </div>
      <div class="row justify-content-center">
      <div>
        <input class="form-check-input" id="english" type="checkbox" name="language" value="English" />
        <label class="form-check-label" for="english">English</label>
      </div>
      <div>
        <input class="form-check-input" id="russian" type="checkbox" name="language" value="Russian" />
        <label class="form-check-label" for="russian">Russian</label>
      </div>
      <div>
        <input class="form-check-input" id="german" type="checkbox" name="language" value="German" />
        <label class="form-check-label" for="german">German</label>
      </div>
      <div>
        <input class="form-check-input" id="greek" type="checkbox" name="language" value="Greek" />
        <label class="form-check-label" for="greek">Greek</label>
      </div>
      <div>
        <input class="form-check-input" id="french" type="checkbox" name="language" value="French" />
        <label class="form-check-label" for="french">French</label>
      </div>
      <div>
        <input class="form-check-input" id="dutch" type="checkbox" name="language" value="Dutch" />
        <label class="form-check-label" for="dutch">Dutch</label>
      </div>
      <div>
        <input class="form-check-input" id="spanish" type="checkbox" name="language" value="Spanish" />
        <label class="form-check-label" for="spanish">Spanish</label>
      </div>
      <div>
        <input class="form-check-input" id="hungarian" type="checkbox" name="language" value="Hungarian" />
        <label class="form-check-label" for="hungarian">Hungarian</label>
      </div>
      <!--Payment-->
      <div class="row py-2 g-3">
        <label>Payment</label>
        <div class="form-check-inline">
          <input class="form-check-input" id="bills" type="checkbox" name="payment" value="bill" />
          <label class="form-check-label" for="bills">Bills</label>
          <div>
            <input class="form-check-input" id="creditCard" type="checkbox" name="payment" value="CreditCard" />
            <label class="form-check-label" for="creditCard">Credit Card</label>
          </div>
        </div>
      </div>
      <!--Terms and Conditon-->
      <div class="row py-2 g-3">
        <label class="form-label form-check-inline">Terms and Conditions</label>
        <div>
          <input class="form-check-input" id="termsAndConditions" type="radio" name="termsAndConditions"
            data-sb-validations="" />
          <label class="form-check-label" for="termsAndConditions">I have Read</label>
        </div>
        <div class="mt-5 mb-3 form-check">
          <button class="form-check btn btn-primary btn-lg" id="submitButton" type="submit"
            >Submit</button>
        </div>
      </div>
    </form>
  </div>
</body>
 <!--footer-->
 <footer class="bg-success text-center mh-auto mb-0 foot">
  <div class="container text-white">
    <img class="d-inline-block" src="image/logo.jpeg" alt="Logo" width="100" height="100">
    <p>Heidis Helvetic</p>
    <p>Mountain street 4</p>
    <p>80W0 Alps</p>
    <p>Switzereland</p>
    <p>Schwarz Agency Switzerland Oppertunity Zuerich</p>
  </div>
</footer>
</html>