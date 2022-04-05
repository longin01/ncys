(function($, win) {
    $.fn.wrpage = function(options) {
        if (options.pagesize <= 0) {
            return
        }
        var defaults = { //defaults 使我们设置的默认参数。
            pagesize: 10,
            wr_current: 1,
            baseUrl: './',
            cb: function() {}
        };
        var options = $.extend(defaults, options); //将传入参数和默认参数合并
        var size = Number(options.pagesize);
        var cur = Number(options.wr_current)
        var baseUrl = options.baseUrl
        var cb = options.cb
        var em = $(this);

        init(size, cur)

        function init(size, cur) {
            var _html = ""
            //头
            if (cur <= 1) {
                _html += ''
            } else {
                _html +=
                    '<li class="wr_pagefirst"><a href="javascript:;">首</a></li>'
            }
            //中间
            if (cur < 5) {
                var midpage = size < 6?size:6;
                for (var i = 1; i <= midpage; i++) {
                    if (i == cur) {
                        _html += '<li class="active"><a href="">' + cur + '</a></li>'
                    } else {
                        _html += '<li class="wrpage_number"><a href="javascript:;">' + i + '</a></li>'
                    }
                }
            } else if (cur >= 5) {

                // _html += '<span class="wr_dotted">...</span>'

                if (size - cur - 1 >= 5) {
                    for (var i = cur - 1; i <= cur * 1 + 5; i++) {
                        if (i == cur) {
                            _html += '<li class="active"><a href="">' + cur + '</a></li>'
                        } else {
                            _html += '<li class="wrpage_number"><a href="javascript:;">' + i + '</a></li>'
                        }
                    }
                    // _html += '<span class="wr_dotted">...</span>'
                } else {
                    if (size == 6) {

                        for (var i = 2; i <= size; i++) {
                            if (i == cur) {
                                _html += '<li class="active"><a href="">' + cur + '</a></li>'
                            } else {
                                _html += '<li class="wrpage_number"><a href="javascript:;">' + i + '</a></li>'
                            }
                        }
                    } else {

                        for (var i = size - 6; i <= size; i++) {
                            if (i == cur) {
                                _html += '<li class="active"><a href="">' + cur + '</a></li>'
                            } else {
                                _html += '<li class="wrpage_number"><a href="javascript:;">' + i + '</a></li>'
                            }
                        }
                    }
                }
                //
            }
            //尾
            if (cur >= size) {
                _html +=
                    ''
            } else {
                _html +=
                    '<li class="wr_pagenext"><a href="javascript:;">下</a></li><li class="wr_pageend"><a href="javascript:;">尾</a></li>'
            }
            em.append(_html)
        }

        function jumpPage(page){
            window.location.href = baseUrl.replace(/currentPage/, page);
        }

        em.on("click", "li.wrpage_number", function() {
            jumpPage($(this).text());
            em.empty($(this).text())
            init(size, $(this).text());
            cb($(this).text())

        });
        em.on("click", "li.wr_pagefirst", function() {
            jumpPage(1);
            em.empty()
            init(size, 1);
            cb(1)
        });
        em.on("click", "li.wr_pageend", function() {
            jumpPage(size);
            em.empty()
            init(size, size);
            cb(size)
        });
        em.on("click", "li.wr_pagenext", function() {
            var cu = parseInt(em.children("li.active").text());
            jumpPage(cu+ 1);
            em.empty()
            init(size, cu + 1);
            cb(cu + 1)
        });
        em.on("click", "li.wr_pagepre", function() {
            var cu = parseInt(em.children("li.active").text());
            em.empty()
            jumpPage(cu+ 1);
            init(size, cu - 1);
            cb(cu - 1)
        });
    }
})(jQuery, window)
