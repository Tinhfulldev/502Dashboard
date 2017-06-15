 jQuery(function($) {
      $("#rss-feeds").rss("http://www.cannalawblog.com/feed/",
      {
        limit: 10,
        entryTemplate:'<div class="wrapper"><div class="image-wrapper">{teaserImage}</div><div class="content-wrapper"><a href="{url}">{title}</a><br/>{shortBodyPlain}...<br><br>{date}</div></div>'
      })
    })