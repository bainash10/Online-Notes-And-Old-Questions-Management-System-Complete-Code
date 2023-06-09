function sendEmail() {
    var recipient = "bainashbaidar@gmail.com";
    var subject = "This is Project By Nischal Baidar";
    var body = "Hello Everyone.";
  
    var mailtoLink = "mailto:" + recipient + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);
  
    window.location.href = mailtoLink;
  }