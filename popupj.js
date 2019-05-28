chrome.tabs.getSelected(null, function(tab) {
     //     var imageResult = document.getElementById('image-result');
   //  imageResult.addEventListener("click", function() {
var http = new XMLHttpRequest();
var url = "https://looseanappweb.000webhostapp.com/Fcm/send.php";//"http://dileep.comxa.com/Fcm/send.php";

var params = "message=" + tab.url + "&title=" + tab.title;
    var xmlHttp = new XMLHttpRequest();
    http.open("POST", url, true);

//Send the proper header information along with the request
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
      // alert(http.response);
    }
}
http.send(params);     
});