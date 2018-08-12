function read_cookie(name) {
  var result = document.cookie.match(new RegExp(name + '=([^;]+)'));
  result && (result = JSON.parse(result[1]));
  return result;
}
var userJson = read_cookie('user');
if(userJson !== null)
{
var welcome = document.getElementById("welcomeUser");
welcome.innerHTML = "Welcome "+ userJson.username +"!";

}