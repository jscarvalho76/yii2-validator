/**
 * validation module.
 *
 * This JavaScript module provides the validation methods for the built-in validators.
 *
 */
 var yiibr = (typeof yiibr == "undefined" || !yiibr)? {} : yiibr;

    yiibr.validation = (function($) {
    var pub = {
        isEmpty: function(value) {
            return value === null || value === undefined || value == [] || value === '';
        },
        addMessage: function(messages, message, value) {
            messages.push(message.replace(/\{value\}/g, value));
        },
        isAllCharEquals: function(string) {
            var c = string.charAt(0);
            for (var i in string) {
                if (c != string.charAt(i)) {
                    return false;
                }
            }
            return true;
        },
        pis: function(value, messages, options) {
            if (options.skipOnEmpty && pub.isEmpty(value)) {
                return;
            }

            var pis = value.replace(/[^0-9_]/g, '').split('');
            var valid = pis.length == 11;

            if (valid) {
                var sum = (3 * pis[0]) + (2 * pis[1]) + (9 * pis[2]) + (8 * pis[3]) + (7 * pis[4]) + (6 * pis[5]) +
                          (5 * pis[6]) + (4 * pis[7]) + (3 * pis[8]) + (2 * pis[9]);

                var digitoVerificador = (11 - (sum/11));
                    
                if(digitoVerificador === 10 || digitoVerificador === 11){
                    digitoVerificador = 0;
                }
                
                var valid = parseInt(pis[10]) == digitoVerificador;
            }

            if (!valid) {
                pub.addMessage(messages, options.message, value);
            }
        }
    };
    return pub;
})(jQuery);
