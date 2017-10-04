function validate()
{
  var errors = [];

  //Ensures wands, cards, suits gt/eq 0
  var wands = document.getElementById("wands").value;
  var cards = document.getElementById("cards").value;
  var suits = document.getElementById("suits").value;

  if(wands==""){
    errors.push("Must input a quantity of Wands");
  }
  else if(wands<0){
    errors.push("Quantity of Wands cannot be negative");
  }

  if(cards==""){
    errors.push("Must input a quantity of Cards");
  }
  else if(cards<0){
    errors.push("Quantity of Cards cannot be negative");
  }

  if(suits==""){
    errors.push("Must input a quantity of Suits");
  }
  else if(suits<0){
    errors.push("Quantity of Suits cannot be negative");
  }

  //email is non-empty, and in proper form

  var username = document.getElementById("username").value;

  if(username=="")
  {
    errors.push("Must input a User Name")
  }
  else if(username.includes("@")){
    var user_split = username.split("@");
    if(user_split[1].includes("."))
    {
      var email = user_split[0];
      var domain = user_split[1];
      user_split = domain.split("."); //reusing variables
      var extension = user_split[1];
      domain = user_split[0];
      if(email=="" || domain=="" || extension==""){
        errors.push("User Name must be a valid email address");
      }
    }
    else {
      errors.push("User Name must be a valid email address");
    }
  }
  else{
    errors.push("User Name must be a valid email address");
  }

  //password is not blank
  var password = document.getElementById("password").value;
  if(password=="")
  {
    errors.push("Must enter a Password");
  }

  //one of the shipping options is chosen
  var s1 = document.getElementById("s1");
  var s2 = document.getElementById("s2");
  var s3 = document.getElementById("s3");
  if(!(s1.checked || s2.checked || s3.checked)){
    errors.push("Must select a Shipping Option");
  }

  //display errors
  if(errors.length > 0)
  {
    var message = "Error:\n";
    errors.forEach(function(errMsg){
      message+=errMsg+"\n";
    })
    alert(message.replace(/\n$/,"")); //fancy method that removes last /n
    return false;
  }
  return true;
}
