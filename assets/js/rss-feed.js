 jQuery(function($) {
      $("#rss-feeds").rss("http://www.cannalawblog.com/feed/",
      {
        limit: 20,
        entryTemplate:'<div class="panel-body"> <a class="thumb pull-left m-r" href="{url}"><div class="image-wrapper">{teaserImage}</div></a><div class="clear"> <a class="text-info" href="{url}"><i class="icon-rss"></i>  {title}<small class="block text-muted">{shortBodyPlain}</small> <a class="btn btn-xs btn-info m-t-xs" href="{url}">{date}</a> </div></div>'
      })
    })
