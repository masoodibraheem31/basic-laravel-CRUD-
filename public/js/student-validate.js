$(document).ready(function () {
    $("#student-form").validate({
        rules:{
            name:{
                required:true,
            },
            email:{
                required:true,
                email:true
            },
            contact:{
                required:true,
                digits:true
            }
        },
        messages:{
            name:{
                required:"*Name is required"
            },
            email:{
                required:"*Email is required",
                email:"*Invalid email format"
            },
            contact:{
                required:"*Contact is required",
                digits:"*Invalid contact number"
            }
        }
    });
});