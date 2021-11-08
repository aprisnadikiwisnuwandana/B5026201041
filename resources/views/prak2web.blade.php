<!DOCTYPE html>
<html lang="en">
<head>
  <title>Praktikum Modul 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel='stylesheet' href='form_validation.css' type='text/css' />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="formvalidation.js"></script>
</head>
<body onload="document.registration.userid.focus();">
  <form name='registration' onSubmit="return validation();">
    <div class="container">
        <h1>Registration Form</h1><br>
        </div>
        <div class="container">
        <div class="form-inline">
        <form class="form-inline" action="/action_page.php">
            <label for="userid" class="mb-2 mr-sm-2">User Id:</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="userid" placeholder="Enter user id" name="userid" required>
          </div>
            <div class="form-inline">
              <form class="form-inline" action="/action_page.php">
                  <label for="password" class="mb-2 mr-sm-2">Password:</label>
                  <input type="text" class="form-control mb-2 mr-sm-2" id="password" placeholder="Enter password" name="password" required>
                </div>
                    <div class="form-inline">
                      <form class="form-inline" action="/action_page.php">
                          <label for="name" class="mb-2 mr-sm-2">Name:</label>
                          <input type="text" class="form-control mb-2 mr-sm-2" id="name" placeholder="Enter name" name="name" required>
                        </div>
                        <div class="form-inline">
                            <form class="form-inline" action="/action_page.php">
                                <label for="address" class="mb-2 mr-sm-2">Address:</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" id="address" placeholder="Enter address" name="address">
                              </div>
                              <div class="form-inline">
                                <form class="form-inline" action="/action_page.php">
                                    <label for="country" class="mb-2 mr-sm-2">Country:</label>
                                    <select name="country" class="custom-select mb-3" required>
                                        <option selected="" value="Default">(Please select a country)</option>
                                        <option value="indonesia">Indonesia</option>
                                        <option value="malaysia">Malaysia</option>
                                        <option value="vietnam">Vietnam</option>
                                        <option value="thailand">Thailand</option>
                                        <option value="china">China</option>
                                        <option value="india">India</option>
                                        </select>
                                  </div>
                                    <div class="form-inline">
                                    <form class="form-inline" action="/action_page.php">
                                        <label for="zipcode" class="mb-2 mr-sm-2">ZIP Code:</label>
                                        <input type="text" class="form-control mb-2 mr-sm-2" id="zipcode" placeholder="Enter zip code" name="zipcode" required>
                                      </div>
                                      <div class="form-inline">
                                        <form class="form-inline" action="/action_page.php">
                                            <label for="email" class="mb-2 mr-sm-2">Email:</label>
                                            <input type="text" class="form-control mb-2 mr-sm-2" id="email" placeholder="Enter email" name="email" required>
                                          </div>
                                          <div class="form-inline">
                                            <form class="form-inline" action="/action_page.php">
                                                <label for="sex" class="mb-2 mr-sm-2">Sex:</label>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="malesex" name="malesex">
                                                  <label for="malesex">Male</label>
                                                  </div>
                                                  <input type="radio" id="femalesex custom-control-inline" name="femalesex">
                                                  <label for="femalesex">Female</label>
                                                </div>
                                                    <div class="form-inline">
                                                    <form class="form-inline" action="/action_page.php">
                                                        <label for="language" class="mb-2 mr-sm-2">Language:</label>
                                                      <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" id="english" name="english" required>
                                                        <label class="custom-control-label" for="english">English</label>
                                                      </div>
                                                      <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" id="non_english" name="non_english">
                                                        <label class="custom-control-label" for="non_english">Non English</label>
                                                      </div>
                                                    </div>
                                                      <div class="form-inline">
                                                        <form class="form-inline" action="/action_page.php">
                                                            <label for="about" class="mb-2 mr-sm-2">About:</label>
                                                            <textarea name="about" id="about"></textarea>
                                                          </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                      </form>
                                                    </div>

