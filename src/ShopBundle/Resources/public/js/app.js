var app = {
    ajax: {
        blog_feed: function(){
            $.ajax({
                type: "GET",
                url: api_blog_feed,
                dataType: "xml",
                success: app.load.blog_feed
            });
        },
    },
    load: {
        blog_feed: function(xml){
            var item = $(xml).find("item")[0];
            var title = $(item).find("title").text();
            $("#titreBlog").text("Le dernier article : " + title);
        },
        ephemeride: function(){
            $today = new Date();
            $tomorrow = app.tools.add_days(new Date(), 1); //modifie la date pour le lendemain
            $afterTomorrow = app.tools.add_days(new Date(), 2); //pour le sur-lendemain

            $ephemeride = $("#ephemeride");
            $ephemeride.find('#today .today').html(ephemeris.getTodayEphemeris());
            $ephemeride.find('#tomorrow .tomorrow').html(ephemeris.getEphemeris($tomorrow.getDate(), $tomorrow.getMonth() + 1));
            $ephemeride.find('#aftertomorrow .aftertomorrow').html(ephemeris.getEphemeris($afterTomorrow.getDate(), $afterTomorrow.getMonth() + 1));
        },
        player_yt: function(){
            $('#carousel .item').each(function(){
                $id = $(this).data("id");
                $number = $(this).data("number");
                $video = $(this).data("video");
                $player = new YT.Player($id, {
                    height: 1060,
                    width: 1880,
                    videoId: $video,
                    events: {
                        /*'onReady': function(event){
                            event.target.playVideo();
                        },*/
                        'onStateChange': function(event){
                            if(event.data === 0) {
                                app.load.carousel_next();
                            }
                        }
                    }
                });
                playerList[$number] = $player;
            });
        },
        carousel: function(){
            $item = $(".active");
            $number = $item.data("number");
            if (typeof $number !== 'undefined') {
                if(typeof playerList[$number] !== 'undefined'){
                    playerList[$number].playVideo();
                }
            }else{
                $duration = $item.data("duration") * 1000;
                setTimeout(app.load.carousel_next, $duration);
            }
        },
        carousel_next: function(){
            $('#carousel').carousel('next').carousel('pause');
        }
    },
    scroll: {
        twitter: function(){
            var total = $("#twitter-widget-0").contents().find(".timeline-TweetList-tweet").length;
            var actuelle = $("#twitter-widget-0").contents().find(".timeline-TweetList-tweet")[i];
            height += $(actuelle).height() + 2;
            $("#twitter-widget-0").contents().find(".timeline-Viewport").animate({
                scrollTop: height
            }, 1000);
            i++;
            if(i == total){
                i = 0;
                height = 0;
            }
        }
    },
    tools: {
        add_days: function(date, days){
            var result = new Date(date);
            result.setDate(date.getDate() + days);
            return result;
        },
        carousel: function(){
            var $imgs = $(".fader").find("div"),
                i = 0;
            function changeImage(){
                var next = (++i % $imgs.length);
                $($imgs.get(next - 1)).fadeOut(500);
                $($imgs.get(next)).fadeIn(500);
            }
            var interval = setInterval(changeImage, 4000); //intervalle des produits
        }
    }
};
