var data;
var request = new XMLHttpRequest();
window.onload = function(){
    LoadPage();
    ChangeTheme();
}
function ChangeTheme(){
    var e = document.getElementById("select");
    var selected = e.options[e.selectedIndex].value;
    var styles = document.getElementById("style");
    console.log(selected);
        if(selected == "light")
        {
            styles.innerHTML = "<link href='CSS/light.css' rel='stylesheet'>";
        }else if(selected == "dark")
        {
            styles.innerHTML = "<link href='CSS/style.css' rel='stylesheet'>";
        }else
        {
            styles.innerHTML = "<link href='CSS/color.css' rel='stylesheet'>";
        }
    }
function LoadPage() {
  var page = document.getElementById("title").innerHTML;
  console.log(page);
 
  var search = 'http://localhost/class/DonutCms/CRUD/LoadData.php' + '?page=' + page;

  console.log(search);
  request.open('POST', search);
  request.onload = loadComplete;
  request.send();
}
function loadComplete(evt) 
{
  data = JSON.parse(request.responseText);
  //data = request.responseText;
  console.log(data);
  console.log(data.AllData[0].content);
  var loadedCon = data.AllData[0].content;
  var con = document.getElementById("content");
  if(con.value == null)
  {//for non editable pages
    con.innerHTML = loadedCon;
    console.log(loadedCon);
  }
  else
  {//for editable pages
    con.value = loadedCon;
  }
  }