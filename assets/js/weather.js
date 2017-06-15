
$(function() {
  $.simpleWeather({
    location: 'Seattle',
    unit: 'f',
    success: function(weather) {
      html = '<p>weather.title: '+weather.title+'</p>';
      html += '<p>weather.temp: '+weather.temp+'</p>';
      html += '<p>weather.code: '+weather.code+'</p>';
      html += '<p>weather.todayCode: '+weather.todayCode+'</p>';
      html += '<p>weather.currently: '+weather.currently+'</p>';
      html += '<p>weather.high: '+weather.high+'</p>';
      html += '<p>weather.low: '+weather.low+'</p>';
      html += '<p>weather.text: '+weather.text+'</p>';
      html += '<p>weather.humidity: '+weather.humidity+'</p>';
      html += '<p>weather.pressure: '+weather.pressure+'</p>';
      html += '<p>weather.rising: '+weather.rising+'</p>';
      html += '<p>weather.visbility: '+weather.visibility+'</p>';
      html += '<p>weather.sunrise: '+weather.sunrise+'</p>';
      html += '<p>weather.sunset: '+weather.sunset+'</p>';
      html += '<p>weather.city: '+weather.city+'</p>';
      html += '<p>weather.country: '+weather.country+'</p>';
      html += '<p>weather.region: '+weather.region+'</p>';
      html += '<p>weather.updated: '+weather.updated+'</p>';
      html += '<p>weather.link: '+weather.link+'</p>';
      html += '<p>weather.heatindex: '+weather.heatindex+'</p>';
      html += '<p>weather.thumbnail: '+weather.thumbnail+'</p>';
      html += '<p>weather.image: '+weather.image+'</p>';

      html += '<p>weather.units.temp: '+weather.units.temp+'</p>';
      html += '<p>weather.units.distance: '+weather.units.distance+'</p>';
      html += '<p>weather.units.pressure: '+weather.units.pressure+'</p>';
      html += '<p>weather.units.speed: '+weather.units.speed+'</p>';

      html += '<p>weather.wind.chill: '+weather.wind.chill+'</p>';
      html += '<p>weather.wind.direction: '+weather.wind.direction+'</p>';
      html += '<p>weather.wind.speed: '+weather.wind.speed+'</p>';

      html += '<p>weather.alt.temp: '+weather.alt.temp+'</p>';
      html += '<p>weather.alt.high: '+weather.alt.high+'</p>';
      html += '<p>weather.alt.low: '+weather.alt.low+'</p>';
      html += '<p>weather.alt.unit: '+weather.alt.unit+'</p>';

      for(var i=0;i<weather.forecast.length;i++) {
        html += '<p>weather.forecast['+i+'].date: '+weather.forecast[i].date+'</p>';
        html += '<p>weather.forecast['+i+'].day: '+weather.forecast[i].day+'</p>';
        html += '<p>weather.forecast['+i+'].code: '+weather.forecast[i].code+'</p>';
        html += '<p>weather.forecast['+i+'].high: '+weather.forecast[i].high+'</p>';
        html += '<p>weather.forecast['+i+'].low: '+weather.forecast[i].low+'</p>';
        html += '<p>weather.forecast['+i+'].alt.high: '+weather.forecast[i].alt.high+'</p>';
        html += '<p>weather.forecast['+i+'].alt.low: '+weather.forecast[i].alt.low+'</p>';
        html += '<p>weather.forecast['+i+'].thumbnail: '+weather.forecast[i].thumbnail+'</p>';
        html += '<p>weather.forecast['+i+'].image: '+weather.forecast[i].image+'</p>';
        html += '<p>weather.forecast['+i+'].text: '+weather.forecast[i].text+'</p>';
      }

      html += '<p>weather.description: '+weather.description+'</p>';

      
      $("#location").html(weather.city);
      
      $("#icon-holder").attr("src", weather.image);
      $("#high").html('H: ' + weather.high + 'º');
      $("#lo").html('L: ' + weather.low + 'º');
      $("#temperature").html(weather.temp + 'º');
	   $("#humidity").html(weather.humidity + '%');
      $("#day0").html(weather.forecast[0].day);
      $("#hi0").html(weather.forecast[0].high + 'º');
	  
      $("#low0").html(weather.forecast[0].low + 'º');
      $("#icon0").attr("src", weather.forecast[0].thumbnail);
      $("#day1").html(weather.forecast[1].day);
      $("#hi1").html(weather.forecast[1].high + 'º');
      $("#low1").html(weather.forecast[1].low + 'º');
      $("#icon1").attr("src", weather.forecast[1].thumbnail);
      $("#day2").html(weather.forecast[2].day);
      $("#hi2").html(weather.forecast[2].high + 'º');
      $("#low2").html(weather.forecast[2].low + 'º');
      $("#icon2").attr("src", weather.forecast[2].thumbnail);
      $("#day3").html(weather.forecast[3].day);
      $("#hi3").html(weather.forecast[3].high + 'º');
      $("#low3").html(weather.forecast[3].low + 'º');
      $("#icon3").attr("src", weather.forecast[3].thumbnail);
      $("#day4").html(weather.forecast[4].day);
      $("#hi4").html(weather.forecast[4].high + 'º');
      $("#low4").html(weather.forecast[4].low + 'º');
      $("#icon4").attr("src", weather.forecast[4].thumbnail);
      $("#day5").html(weather.forecast[5].day);
      $("#hi5").html(weather.forecast[5].high + 'º');
      $("#low5").html(weather.forecast[5].low + 'º');
      $("#icon5").attr("src", weather.forecast[5].thumbnail);
     
     
      
      
    },
    error: function(error) {
      $("#weather").html('<p>'+error.message+'</p>');
    }
  });
});