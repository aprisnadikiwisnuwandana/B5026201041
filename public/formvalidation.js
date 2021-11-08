function validation() {
    var userid = document.registration.userid;
    var password = document.registration.password;
    var name = document.registration.name;
    var address = document.registration.address;
    var country = document.registration.country;
    var zipcode = document.registration.zipcode;
    var email = document.registration.email;
    var malesex = document.registration.malesex;
    var femalesex = document.registration.femalesex;

if(userid_validation(userid, 5, 12)) {
}
if(password_validation(password, 7, 12)) {
}
if(name_validation(name)) {
}
if(address_validation(address)) {
} 
if(country_validation(country)) {
}
if(zipcode_validation(zipcode)) {
}
if(email_validation(email)) {
}
if(sex_validation(malesex, femalesex)) {
}
return false;
}

function userid_validation(userid, x, y) {
    var userid_leng = userid.value.length;
    if (userid_leng == 0 || userid_leng >= y || userid_leng < x) {
        alert("Use Id must be of length "+x+" to "+y);
        userid.focus();
        return false;
    }
    return true;
}

function password_validation(password, a, b) {
    var password_leng = password.value.length;
    if (password_leng == 0 ||password_leng >= b || password_leng < a) {
        alert("Password must be of length "+a+" to "+b);
        password.focus();
        return false;
    }
    return true;
}

function name_validation(name) { 
    var letters = /^[A-Za-z]+$/;
    if(name.value.match(letters)) {
        return true;
    }
    else {
        alert('Alphabates only');
        name.focus();
        return false;
    }
}

function address_validation(address) { 
    var letters = /^[0-9a-zA-Z]+$/;
    if(address.value.match(letters)) {
        return true;
    }
}

function country_validation(country) {
    if(country.value == "Default") {
        alert('Must select a country');
        country.focus();
        return false;
    }
    else {
        return true;
    }
}

function zipcode_validation(zipcode) { 
    var numbers = /^[0-9]+$/;
    if(zipcode.value.match(numbers)) {
        return true;
    }
    else {
        alert('Must be numeric only');
        zipcode.focus();
        return false;
    }
}

function email_validation(email) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email.value.match(mailformat)) {
        return true;
    }
    else {
        alert("Must be a valid email");
        return false;
    }
}

function sex_validation(malesex,femalesex) {
    x=0;
    if(malesex.checked) {
        x++;
    }

    if(femalesex.checked) {
        x++; 
    }

    if (x==2) {
        alert('Both Male/Female are checked');
        femalesex.checked=false
        malesex.checked=false
        malesex.focus();
        return false;
    }

    if (x==0) {
        alert('Select Male/Female');
        malesex.focus();
        return false;
    }
    else {
        alert('Form Succesfully Submitted');
        window.location.reload()
        return true;
    }
}