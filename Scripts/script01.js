	$(document).ready(function(){
    $("#button1").click(function(){
        if ($(this).val() == "Show Schedule") {
      $(this).val("Hide Schedule");
   }
   else {
      $(this).val("Show Schedule");
   }
        $("#div1").fadeToggle(1000);
    });
	});
    