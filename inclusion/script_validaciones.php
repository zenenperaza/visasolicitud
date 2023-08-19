        <!-- jQuery Validate plugin files-->
        <script src="plugins/validate/validate.min.js"></script>
        <!-- jQuery Steps plugin files-->
        <link href="plugins/jquery-steps/jquery.steps.css" rel="stylesheet">
        <script src="plugins/jquery-steps/jquery.steps.min.js"></script>
        <script>
            $('#wizard1').steps({
                headerTag: 'h3',
                bodyTag: '.wizard-content',
                autoFocus: true,
                enableAllSteps: true,
                titleTemplate: '<span class="number">#index#</span><span class="title">#title#</span>',
                onFinished: function(event, currentIndex) {
                    INSPIRO.elements.notification("Submited",
                        "Thank you, your account has been registed successfully", "success");
                }
            });
            $('#wizard2').steps({
                headerTag: 'h3',
                bodyTag: '.wizard-content',
                autoFocus: true,
                enableAllSteps: true,
                titleTemplate: '<span class="number">#index#</span><span class="title">#title#</span>',
                onFinished: function(event, currentIndex) {
                    INSPIRO.elements.notification("Submited",
                        "Thank you, your account has been registed successfully", "success");
                }
            });
            $('#wizard3').steps({
                headerTag: 'h3',
                bodyTag: '.wizard-content',
                autoFocus: true,
                enableAllSteps: true,
                titleTemplate: '<span class="number">#index#</span><span class="title">#title#</span>',
                onFinished: function(event, currentIndex) {
                    INSPIRO.elements.notification("Submited",
                        "Thank you, your account has been registed successfully", "success");
                }
            });
            $('#wizard4').steps({
                headerTag: 'h3',
                bodyTag: '.wizard-content',
                autoFocus: true,
                enableAllSteps: true,
                titleTemplate: '<span class="number">#index#</span><span class="title">#title#</span>',
                onFinished: function(event, currentIndex) {
                    INSPIRO.elements.notification("Submited",
                        "Thank you, your account has been registed successfully", "success");
                }
            });
            $('#wizard5').steps({
                headerTag: 'h3',
                bodyTag: '.wizard-content',
                autoFocus: true,
                enableAllSteps: true,
                titleTemplate: '<span class="number">#index#</span><span class="title">#title#</span>',
                onFinished: function(event, currentIndex) {
                    INSPIRO.elements.notification("Submited",
                        "Thank you, your account has been registed successfully", "success");
                }
            });
            $('#wizard6').steps({
                headerTag: 'h3',
                bodyTag: '.wizard-content',
                autoFocus: true,
                enableAllSteps: true,
                titleTemplate: '<span class="number">#index#</span><span class="title">#title#</span>',
                onFinished: function(event, currentIndex) {
                    INSPIRO.elements.notification("Submited",
                        "Thank you, your account has been registed successfully", "success");
                }
            });
            //Advanced - with validation
            var wizard7 = $('#wizard7');
            wizard7.steps({
                headerTag: "h3",
                bodyTag: '.wizard-content',
                autoFocus: true,
                enableAllSteps: true,
                titleTemplate: '<span class="number">#index#</span><span class="title">#title#</span>',
                onStepChanging: function(event, currentIndex, newIndex) {
                    // Allways allow previous action even if the current form is not valid!
                    if (currentIndex > newIndex) {
                        return true;
                    }
                    return wizard7.valid();
                },
                onStepChanged: function(event, currentIndex, priorIndex) {},
                onFinishing: function(event, currentIndex) {
                    return wizard7.valid();
                },
                onFinished: function(event, currentIndex) {
                    INSPIRO.elements.notification("Submited",
                        "Thank you, your account has been registed successfully", "success");
                }
            });
            //Validation
            wizard7.validate({
                errorClass: 'is-invalid',
                validClass: 'is-valid',
                errorElement: "div",
                rules: {
                    // Step 1 - Account information
                    username: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true,
                        minlength: 8
                    },
                    password: {
                        required: true,
                        minlength: 5,
                        maxlength: 12
                    },
                    password2: {
                        required: true,
                        minlength: 5,
                        maxlength: 12
                    },
                    // Step 4 - Confirmation
                    reminders: {
                        required: true
                    },
                    terms_conditions: {
                        required: true
                    },
                },
                errorPlacement: function(error, element) {
                    $(element).parents(".form-group").append(error);
                }
            });
            $('.wizard').find(".actions ul > li > a").addClass("btn");
        </script>