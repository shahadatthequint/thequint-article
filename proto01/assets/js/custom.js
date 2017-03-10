$("#contact_frm").submit(function(event) {
        var sname = $("#name").val(),
        	semail = $("#email_id").val(),
        	scomment = $("#comment").val(),
			process = true;
			
        if (sname == "") {
            $("#name").redField();
            process = false;
        }
        if (semail == "") {
            $("#email_id").redField();
            process = false;
        }
       
        if (scomment == "") {
            $("#comment").redField();
            process = false;
        }
		
        if (process) {
			$(this).css("display", "none");
            $(".suc").css("display","");
        }

        event.preventDefault();
    });

