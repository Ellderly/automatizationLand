/*if ($('input[name=forename]').length) {
    $("input[name=forename]").addClass('loading');
    $("input[name=forename]").attr('disabled', 'disabled');
}
if ($('input[name=surname]').length) {
    $("input[name=surname]").addClass('loading');
    $("input[name=surname]").attr('disabled', 'disabled');
}
if ($('input[name=email]').length) {
    $("input[name=email]").addClass('loading');
    $("input[name=email]").attr('disabled', 'disabled');
}
if ($('input[name=phone]').length) {
    $("input[name=phone]").addClass('loading');
    $("input[name=phone]").attr('disabled', 'disabled');
}
if ($('button[name=submit]').length) {
    $("button[name=submit]").addClass('loading');
    $("button[name=submit]").attr('disabled', 'disabled');
}*/

$(document).ready(function() {

    // Form input validation

    jQuery.extend(jQuery.validator.messages, {
        required: ""
    });

    $.validator.addMethod("forename", function(value, element) {
        return this.optional(element) || /^[\p{Letter}\p{Mark}\- ]{2,25}$/u.test(value);
    }, "");

    $.validator.addMethod("surname", function(value, element) {
        return this.optional(element) || /^[\p{Letter}\p{Mark}\- ]{2,25}$/u.test(value);
    }, "");
    
    $.validator.addMethod("email", function (value, element) {
        return (this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value));
    }, "");

    $.validator.addMethod("phone", function (value, element) {
          return this.optional(element) || /^5[0-9]{9}$/i.test(value);
    }, "");

    function functionError() {
        window.location.href = 'success.html';
    }

    function functionBeforeSend() {
        $("form button[name=submit]").attr("disabled", true);
    }

    function functionSuccess(data) {
        $("form button[name=submit]").removeAttr('disabled');
        //console.log(data);
        window.location.href = data;
    }

    $("form input, form button[name=submit]").click(function() {

        var form = $(this).parents('form:first');
        form.validate({
            rules: {
                forename: {
                    required: true,
                },
                surname: {
                    required: true,
                },
                phone: {
                    required: true,
                },
                email: {
                    required: true,
                },
                forename: "required forename",
                surname: "required surname",
                phone: "required phone",
                email: "required email",
            }
        });

    });

    (function($) {
        $.fn.inputFilter = function(inputFilter) {
            return this.on(
                "input keydown keyup mousedown mouseup select contextmenu drop",
                function() {
                    if (inputFilter(this.value)) {
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                        this.value = this.oldValue;
                        this.setSelectionRange(
                            this.oldSelectionStart,
                            this.oldSelectionEnd
                        );
                    } else {
                        this.value = "";
                    }
                }
            );
        };
    })(jQuery);

    function limitText(field, maxChar) {
        var ref = $(field),
            val = ref.val();
        if (val.length >= maxChar) {
            ref.val(function() {
                console.log(val.substr(0, maxChar))
                return val.substr(0, maxChar);
            });
        }
    }
    $(document).ready(function() {
        $(".phone").inputFilter(function(value) {
            return /^\d*$/.test(value);
        });
        $(".phone").on('keyup', function() {
            limitText(this, 10)
        });
    });

    $("form button[name=submit]").click(function() {

        var form = $(this).parents('form:first');
        if (form.valid()) {
            var data = $(this).closest("form").serialize();
            $.ajax({
                url: '../mail.php?' + ((typeof($('base').attr("href")) != "undefined" && $('base').attr("href") !== null) ? $('base').attr("href").slice(0,-1) : ''),
                type: "POST",
                data: data,
                dataType: "html",
                error: functionError,
                beforeSend: functionBeforeSend,
                success: functionSuccess
            });
        }

    });

});

$(window).on('load', function() {
    $("form input").removeAttr('disabled');
    $("form button[name=submit]").removeAttr('disabled');
    $("form input").removeClass('loading');
});