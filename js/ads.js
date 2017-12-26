(function() {
    this.AdsJs = (function() {
        function AdsJs() {}

        
        AdsJs.getAnotherAd = function(the_button) {
            var old_onclick, old_text;
            old_onclick = $(the_button).attr('onclick');
            old_text = $(the_button).text();
            $(the_button).attr('onclick', false).text('Sending...');
            $('#ad_itself').css('opacity', 0.8);
            return $.ajax('/getAnotherAd', {
                method: 'GET',
                success: function(data) {
                    $('#ad_itself').html(data);
                    $(the_button).text(old_text);
                    $(the_button).attr('onclick', old_onclick);
                    return $('#ad_itself').css('opacity', 1);
                },
                error: function(jqXHR, textStatus, err) {
                    alert("Error: " + textStatus);
                    $('#ad_itself').css('opacity', 1);
                    $(the_button).text(old_text);
                    return $(the_button).attr('onclick', old_onclick);
                }
            });
        };

        
        return AdsJs;
    })();
}).call(this);
