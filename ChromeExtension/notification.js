 var options = {
    type: "basic",
    title: "WeblinksReceive Notification",
    iconUrl: "icon.png"
};
    var theUrl = 'http://loosenappweb.freeiz.com/Retrievefromfile.php';
               chrome.notifications.create('limitNotif', options);

  //  setInterval( {
/*    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() { 
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200){
            options.message = xmlHttp.responseText;
        }   
    }
    xmlHttp.open("GET", theUrl, true); // true for asynchronous 
    xmlHttp.send(null);*/
//}, 5000);    

