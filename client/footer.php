
    <!-- Javascript -->          
    <script src="../assets/plugins/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Page Specific JS -->
    <script src="../assets/js/app.js"></script>
    <script src="../assets/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/tinymce/tinymce.min.js"></script>
  

  <!-- Template Main JS File -->
  <script src="../assets/simple-datatables/main.js"></script> 
  <script src="../assets/jquery/jquery.js"></script>

</body>
</html> 
<script>
  function ordernow()
{ 
    var req = new XMLHttpRequest();
    req.onreadystatechange = function() 
    { 
        if(req.readyState == 4 && req.status == 200)
        { 
            document.getElementById('ordernow').innerHTML = req.responseText; 
        }
    }
    req.open('POST', "ordernow", true);
    req.send();
} 
function ordernownum()
{ 
    var req = new XMLHttpRequest();
    req.onreadystatechange = function() 
    { 
        if(req.readyState == 4 && req.status == 200)
        { 
            document.getElementById('ordernownum').innerHTML = req.responseText; 
        }
    }
    req.open('POST', "ordernownum", true);
    req.send();
} 

setInterval(function(){ 
  ordernow();
  ordernownum();
}, 2000); 
</script>