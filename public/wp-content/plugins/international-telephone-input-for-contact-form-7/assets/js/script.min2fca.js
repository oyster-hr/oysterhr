function intl_tel_object_assign(t){var n={};return t.forEach(function(t){Object.keys(t).forEach(function(e){t.hasOwnProperty(e)&&(n[e]=t[e])})}),n}jQuery(".wpcf7-intl-tel").each(function(){var t=jQuery(this),n={},e={};null!=t.data("preferredcountries")&&""!=t.data("preferredcountries")&&(n.preferredCountries=t.data("preferredcountries").split("-")),e=null!=t.data("initialcountry")&&""!=t.data("initialcountry")?t.data("initialcountry"):"auto";var r={initialCountry:e,utilsScript:wpcf7_utils_url,geoIpLookup:function(t){jQuery.get("//extreme-ip-lookup.com/json",function(){},"jsonp").always(function(n){var e=n&&n.countryCode?n.countryCode:"";t(e)})}};t.intlTelInput(intl_tel_object_assign([r,n]));var i=t.parents("span")[0],l=t.parents("form");l.submit(function(){jQuery(i).children("input.wpcf7-intl-tel-full").val(t.intlTelInput("getNumber")),jQuery(i).children("input.wpcf7-intl-tel-country-name").val(t.intlTelInput("getSelectedCountryData").name),jQuery(i).children("input.wpcf7-intl-tel-country-code").val(t.intlTelInput("getSelectedCountryData").dialCode),jQuery(i).children("input.wpcf7-intl-tel-country-iso2").val(t.intlTelInput("getSelectedCountryData").iso2)})});