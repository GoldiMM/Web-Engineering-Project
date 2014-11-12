<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Datepicker - Restrict date range</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+12M" });
    //$("#datepicker" ).datepicker("option", "dateFormat", "dd.mm.yy");
  });
  </script>
    <script>
  $(function() {
    $( "#datepicker2" ).datepicker({ minDate: 0, maxDate: "+12M " });
    //$("#datepicker2" ).datepicker("option", "dateFormat", "dd.mm.yy");
  });
  </script>

</head>
<body>
    <form name="form" action="uebung4.php" method="POST">
<p>Datum von: <input type="text" id="datepicker" name="datum1"></p>
<p>Datum bis: <input type="text" id="datepicker2" name="datum2"></p>
<input type="submit" value="abschicken">
    </form>
 
</body>
</html>
