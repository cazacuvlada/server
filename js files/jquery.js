jQuery('#frm').validate({


        rules: {
            username: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
        }, messages: {
            username: "Please enter your username",
            email: {
                required: "Please enter email",
                email: "Please enter valid email"
            },
            password: {
                required: "please enter your password",
                minlength: "Password must be 5 characters long"

            },
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
