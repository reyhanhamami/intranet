@extends('templates.main')

@section('metaExternal')
<meta http-equiv="Refresh" content="1; url=http://zulfikar.bwa.id:88/intranet/home" />
@endsection('metaExternal')

@section('title', 'Intranet - Dashboard')
    

          <!-- Page Heading -->
            @section('judul', 'Dashboard')
            @section('sub', 'BWA')
     
       
        @section('shortcut')
         
            
        @endsection('shortcut')
     

        @section('konten') 
        @endsection('konten')
        </div>
        <!-- /.container-fluid -->
        @section('scriptExternal')
         
         <script type="e06d6829e1db31ee20f2cfa4-text/javascript">
                 function checkIP(url, cFunction) {
                     var xhttp;
                     xhttp=new XMLHttpRequest();
                     xhttp.onreadystatechange = function() {
                         if (this.readyState == 4 && this.status == 200) {
                             cFunction(this);
                         }
                         else{
                             document.getElementById("ip-version-check").innerHTML = "Your IPv6 is: Not Detected";
                         }
                     };
                     xhttp.open("GET", url, true);
                     xhttp.timeout = 5000;
                     xhttp.ontimeout = function(e) {
                         document.getElementById("ip-version-check").innerHTML = "Your IPv6 is: Not Detected";
                     };
                     xhttp.send();
                 }
                 function loadResult(xhttp) {
                     document.getElementById("ip-version-check").innerHTML =
                         "Your IPv6 is: " + xhttp.responseText;
                 }
                 function checkLocal() {
                     window.RTCPeerConnection = window.RTCPeerConnection || window.mozRTCPeerConnection || window.webkitRTCPeerConnection;   //compatibility for firefox and chrome
                     var pc = new RTCPeerConnection({iceServers: []}), noop = function () {
                     };
                     pc.createDataChannel("");    //create a bogus data channel
                     pc.createOffer(pc.setLocalDescription.bind(pc), noop);    // create offer and set local description
                     pc.onicecandidate = function (ice) {  //listen for candidate events
                         if (!ice || !ice.candidate || !ice.candidate.candidate) return;
                         var myIP = /([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7})/.exec(ice.candidate.candidate)[1];
                         document.cookie = "myIP = " + myIP;
                         jQuery(document).ready(function () {
                             jQuery("#local-ip").append("<li class=\"list-group-item\">Your Local IP is: " + myIP + "</li>");
                             jQuery("#local-ip").show("slow");
                         });
     
                         pc.onicecandidate = noop;
                     };
     
     
                 }
             </script>
            
         @endsection('scriptExternal')