<!-- INCLUDE FILE DATE PICKER   -->
        <meta charset="utf-8">
        <title>jQuery UI Datepicker - Restrict date range</title>
            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
                <script src="//code.jquery.com/jquery-1.10.2.js"></script>
                <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
                <link rel="stylesheet" href="/resources/demos/style.css">
                <script>
                    $(function() {
                    $("#datepicker").datepicker({ minDate: "-12M", maxDate: "+12M" });
                    $("#datepicker").datepicker("option", "dateFormat", "yy/mm/dd");
                    });
        
        </script>
        
        <!-- second Datepicker -->
        <script>
        
          $(function() {
            $( "#datepicker2" ).datepicker({  minDate: "-12M", maxDate: "+12M"  });
            //$("#datepicker2" ).datepicker("option", "dateFormat", "dd.mm.yy");
          });
        
        $(function() {
            $( "#datepicker3" ).datepicker({ minDate: "-12M" });
            //$("#datepicker2" ).datepicker("option", "dateFormat", "dd.mm.yy");
          });
        
        $(function() {
            $( "#datepicker4" ).datepicker({ minDate: 0, maxDate: "+12M" });
            //$("#datepicker2" ).datepicker("option", "dateFormat", "dd.mm.yy");
          });
        </script>
