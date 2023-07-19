$(document).ready(function() {

    // Regex if surname doesnt exist
    var forename_regex, forename_error;
    if ($('input[name="surname"]').length == 0) {
        forename_regex = /^[A-Za-zА-Яа-яЁё]+[ ][A-Za-zА-Яа-яЁё*\-?]+$/i;
        forename_error = "";
    } else {
        forename_regex = /^[A-Za-zА-Яа-яЁё]{2,20}$/i;
        forename_error = "";
    }

    // Form input validation

    jQuery.extend(jQuery.validator.messages, {
        required: ""
    });

    $.validator.addMethod("forename", function(value, element) {
        return this.optional(element) || forename_regex.test(value);
    }, forename_error);

    $.validator.addMethod("surname", function(value, element) {
        return this.optional(element) || /^[A-Za-zА-Яа-яЁё*\-? ]{2,20}$/i.test(value);
    }, "");

    $.validator.addMethod("email", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value);
    }, "");

    $("form input, :submit").click(function() {
        var form = $(this).parents('form:first');
        form.validate({
            rules: {
                forename: {
                    required: true,
                },
                surname: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                phone: {
                    required: true,
                },
                forename: "required forename",
                surname: "required surname",
                email: "required email",
                phone: "required phone",
            }
        });
    });

    $(":submit").click(function() {
        var form = $(this).parents('form:first');
        if (form.valid()) {
            var data = $(this).closest("form").serialize();
            console.log(data);
            form.submit();
        }
    });

    // Phone validation

    let ary = Array.prototype.slice.call(document.querySelectorAll("input[name=phone]"));

    ary.forEach(function(el) {
        PhoneDisplay(el);
    })

    function PhoneDisplay(input) {

        //AlterCPA code

        function intlTelSetGeoCode(code) {
            var geofields = document.querySelectorAll("input[name=country]");
            for (var gid = 0; gid < geofields.length; gid++) geofields[gid].value = code;
        }

        function intlTelSetPhoneCode(code) {
            var phonecode = document.querySelectorAll(".phonecc");
            for (var pid = 0; pid < phonecode.length; pid++) phonecode[pid].value = code;
        }
        var initialphonecc = 0;
        var initialphonegc = false;
            var iti = window.intlTelInput(input, {
                initialCountry: "auto",
                nationalMode: true,
                autoPlaceholder: 'aggressive',
                formatOnDisplay: true,
                separateDialCode: true,
                utilsScript: "assets/landing/js/utils.js",
                geoIpLookup: function(setgeo) {
                    fetch("https://ipinfo.io", { headers: { 'Accept': 'application/json' } })
                        .then(response => response.json())
                        .then(r => setgeo((r && r.country) ? r.country : "ru"));
                }
            });
            var itg = iti.getSelectedCountryData();
            if (itg.dialCode) initialphonecc = itg.dialCode;
            if (itg.iso2) initialphonegc = itg.iso2;
            input.addEventListener("countrychange", function(event) {
                var iti = window.intlTelInputGlobals.getInstance(event.target);
                if (iti != undefined) {
                    var geo = iti.getSelectedCountryData();
                    intlTelSetPhoneCode(geo.dialCode);
                    intlTelSetGeoCode(geo.iso2);
                }
            });
        if (initialphonecc) intlTelSetPhoneCode(initialphonecc);
        if (initialphonegc) intlTelSetGeoCode(initialphonegc);


        // Valid number
        $(input).on("change keyup", function() {
            $.validator.addMethod("phone", function(value, element) {
                if (iti.isValidNumber()) {
                    return true;
                } else {
                    return false;
                }
            }, "");
        });


        // Mask
        $("input[name=phone]").on("change keyup", function() {
            var mask_regex = $("input[name=phone]").attr('placeholder').replace(/[0-9]/g, 0);
            $("input[name=phone]").mask(mask_regex);
        });
        $("input[name=phone]").on("countrychange", function(e, countryData) {
            $("input[name=phone]").val('');
        });
    }

    // Email input
    var EmailDomainSuggester = {
        domains: ["yahoo.com", "gmail.com", "google.com", "hotmail.com", "me.com", "aol.com", "mac.com", "live.com", "comcast.com", "googlemail.com", "msn.com", "hotmail.co.uk", "yahoo.co.uk", "facebook.com", "verizon.net", "att.net", "gmz.com", "mail.com"],
        bindTo: $('input[name="email"]'),
        init: function() {
            this.addElements();
            this.bindEvents();
        },
        addElements: function() {
            this.datalist = $("<datalist />", {
                id: 'email-options'
            }).insertAfter(this.bindTo);
            this.bindTo.attr("list", "email-options");
        },
        bindEvents: function() {
            this.bindTo.on("keyup", this.testValue);
        },
        testValue: function(event) {
            var el = $(this),
                value = el.val();
            if (value.indexOf("@") != -1) {
                value = value.split("@")[0];
                EmailDomainSuggester.addDatalist(value);
            } else {
                EmailDomainSuggester.datalist.empty();
            }

        },
        addDatalist: function(value) {
            var i, newOptionsString = "";
            for (i = 0; i < this.domains.length; i++) {
                newOptionsString +=
                    "<option value='" +
                    value +
                    "@" +
                    this.domains[i] +
                    "'>";
            }
            this.datalist.html(newOptionsString);
        }
    }
    EmailDomainSuggester.init();

});