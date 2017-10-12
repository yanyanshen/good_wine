;
var LINK_SERVER_ERROR = '连接服务器失败，请稍后再试。';
var mHeaderActs = {prev: function() {
    }, ltext: function() {
    }, title: function() {
    }, menu: function() {
    }, rtext: function() {
    }};
$(document).ready(function() {
    var $header = $('.m_header');
    if ($header.length) {
        $header.on('click', '.bt_menu', function() {
            var _menu = $('.m_menu').removeClass('hidden');
            _menu.off('click').on('click', function() {
                _mask.click();
            });
            var _mask = Model.mask({color: '#ffffff', opacity: .01, zIndex: 19, time: 0});
            _mask.click(function() {
                _menu.addClass('hidden');
                _mask.remove();
            });
        }).on('click', '.bt_menu', mHeaderActs.menu).on('click', '.bt_prev', mHeaderActs.prev).on('click', '.bt_ltext', mHeaderActs.ltext).on('click', '.bt_rtext', mHeaderActs.rtext).on('click', '.bt_title', mHeaderActs.title)
    }
    ;
});
var Model = (function() {
    function Model() {
    }
    ;
    Model.phoneCodeTime = 60;
    Model.verify = function() {
    };
    Model.verify.realname = function(value) {
        value = $.trim(value);
        if (value == '')
            return'请填写收货人的姓名';
        if (!/^[\u4e00-\u9fa5]{2,10}$/.test(value))
            return'请填写正确的收货人姓名';
        return'';
    };
    Model.verify.address = function(value) {
        value = $.trim(value);
        if (value == '')
            return'请填写详细的收货地址';
        if (!/^.{5,40}$/.test(value))
            return'请填写正确的收货地址';
        return'';
    };
    Model.verify.zipcode = function(value) {
        value = $.trim(value);
        if (value != '') {
            if (!/^\d+$/.test(value))
                return'请填写正确的邮政编码';
        }
        ;
        return'';
    };
    Model.verify.phone = function(value) {
        value = $.trim(value);
        if (value == '') {
            return'手机号码不能为空';
        }
        ;
        if (!/^\d{10,11}$/.test(value)) {
            return'手机号码格式错误';
        }
        ;
        return'';
    };
    Model.verify.email = function(value) {
        if (value == '') {
            return'邮箱不能为空';
        }
        ;
        if (!/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/.test(value)) {
            return'邮箱格式错误';
        }
        ;
        return'';
    };
    Model.verify.imgcode = function(value) {
        value = $.trim(value);
        if (value == '') {
            return'图形验证码不能为空';
        }
        ;
        if (!/^.{4}$/.test(value)) {
            return'图形验证码格式错误';
        }
        ;
        return'';
    };
    Model.verify.phonecode = function(value) {
        value = $.trim(value);
        if (value == '') {
            return'手机验证码不能为空';
        }
        ;
        if (!/^\d{6}$/.test(value)) {
            return'手机验证码格式错误';
        }
        ;
        return'';
    };
    Model.verify.password = function(value) {
        value = $.trim(value);
        if (value == '') {
            return'密码不能为空';
        }
        ;
        if (!/^.{6,20}$/.test(value)) {
            return'密码为6-20位数字与字母组合，区分大小写！';
        }
        ;
        if (value.indexOf(' ') >= 0) {
            return'密码不能包含空格';
        }
        ;
        if (/^((\d+)|([a-zA-Z]+)){1}$/.test(value)) {
            return'密码太简单，请您更改密码，如字母+数字的组合';
        }
        ;
        return'';
    };
    Model.checkStrong = (function() {
        function CharMode(iN) {
            if (iN >= 48 && iN <= 57) {
                return 1;
            } else if ((iN >= 65 && iN <= 90) || (iN >= 97 && iN <= 122)) {
                return 2;
            } else {
                return 4;
            }
            ;
        }
        ;
        var modes;
        function bitTotal(num) {
            modes = 0;
            for (i = 0; i < 3; i++) {
                if (num & 1) {
                    modes++;
                }
                num >>>= 1;
            }
            ;
            return modes;
        }
        ;
        function checkStrong(sPW) {
            if (Model.verify.password(sPW)) {
                return 0;
            }
            ;
            modes = 0;
            for (i = 0; i < sPW.length; i++) {
                modes |= CharMode(sPW.charCodeAt(i));
            }
            ;
            return bitTotal(modes);
        }
        ;
        return checkStrong;
    })();
    Model.time = function() {
        var d, s;
        d = new Date();
        s = d.getFullYear() + "-";
        s = s + (((d.getMonth() + 1) > 9) ? (d.getMonth() + 1) : ('0' + (d.getMonth() + 1))) + "-";
        s += ((d.getDate() > 9) ? d.getDate() : ('0' + d.getDate())) + " ";
        s += ((d.getHours() > 9) ? d.getHours() : ('0' + d.getHours())) + ":";
        s += ((d.getMinutes() > 9) ? d.getMinutes() : ('0' + d.getMinutes())) + ":";
        s += ((d.getSeconds() > 9) ? d.getSeconds() : ('0' + d.getSeconds()));
        return s;
    };
    Model.timestamp = function() {
        return(new Date()).valueOf();
    };
    Model.guid = function() {
        var _guid = '';
        for (var i = 1; i <= 32; i++) {
            var n = Math.floor(Math.random() * 16.0).toString(16);
            _guid += n;
            if ((i == 8) || (i == 12) || (i == 16) || (i == 20)) {
                _guid += '-';
            }
            ;
        }
        ;
        return _guid;
    };
    Model.promise = function(fun) {
        var self = this;
        self.queues = [];
        self.resolve = function() {
            var fun = self.queues && self.queues[0];
            if (fun) {
                var ret = fun.apply(self, arguments);
                self.queues.shift();
                if (ret && ret.toString() == 'promise') {
                    ret.queues = self.queues;
                } else if (ret) {
                    self.resolve.apply(self, ret);
                }
                ;
            }
            ;
            return self;
        };
        self.then = function(fun) {
            if (fun.constructor !== Function)
                return;
            self.queues.push(fun);
            return self;
        };
        self.toString = function() {
            return'promise';
        };
        if (fun)
            self.then(fun);
    };
    Model.mask = function(op) {
        op = $.extend({color: '#000000', opacity: .5, zIndex: 1000, time: 500}, op);
        return $('<div class="m_mask"></div>').css({'background-color': op.color, 'opacity': op.opacity, 'z-index': op.zIndex}).appendTo('body').fadeIn(op.time);
    };
    Model.message = function(message, time) {
        time = time || 3000;
        var message = $('<div class="m_message text-v">' + message + '</div>').appendTo('body');
        message.css({'margin-left': -message.width() / 2, 'margin-top': -message.height() / 2});
        var isclose = false;
        var _setTimeout;
        if (time != 0) {
            _setTimeout = setTimeout(function() {
                if (isclose)
                    return;
                isclose = true;
                message.fadeOut(500, function() {
                    message.remove();
                });
            }, time);
        }
        ;
        return{close: function() {
                if (isclose)
                    return;
                isclose = true;
                clearTimeout(_setTimeout);
                message.fadeOut(500, function() {
                    message.remove();
                });
            }, element: message};
    };
    Model.dialog = function(message, buttons) {
        var _mask = Model.mask();
        var _dialog = $('<div class="m_dialog"><div class="content">' + message + '</div><div class="buttons"></div></div>').appendTo('body');
        var $buttons = _dialog.children('.buttons');
        $.each(buttons || [], function(index, button) {
            button.click = button.click || function() {
            };
            $('<a class="m_button m_button_' + button.type + '" href="javascript:void(0)">' + button.text + '</a>').appendTo($buttons).click(button.click);
        });
        if (buttons.length == 1) {
            $buttons.addClass('only_one');
        }
        ;
        _dialog.css('margin-top', -_dialog.height() / 2);
        return{close: function() {
                _dialog.remove();
                _mask.remove();
            }, element: _dialog};
    };
    Model.confirm = function(message, callback, type) {
        var dialog = Model.dialog(message, [{text: '取消', click: function() {
                    dialog.close();
                }}, {text: '确认', click: function() {
                    if (callback) {
                        callback();
                    }
                    ;
                    dialog.close();
                }, type: type || 'orange'}]);
        return dialog;
    };
    Model.alert = function(message, callback) {
        var dialog = Model.dialog(message, [{text: '确认', click: function() {
                    if (callback) {
                        callback();
                    }
                    ;
                    dialog.close();
                }, type: 'orange'}]);
        return dialog;
    };
    return Model;
})();
if ($('#js_lib_content').length) {
    function resize() {
        $('#js_lib_content').css('min-height', ($(window).height() - $('.m_header').height() - $('.m_footer').height()) + 'px');
    }
    ;
    $(window).resize(resize);
    resize();
}
;
$('.m_checkbox input[type="checkbox"],.m_radio input[type="radio"]').each(function() {
    if ($(this).prop('checked')) {
        $(this).parent().addClass('m_checked');
    } else {
        $(this).parent().removeClass('m_checked');
    }
    ;
});
$('.m_order_checkbox input[type="checkbox"]').each(function() {
    if ($(this).prop('checked')) {
        $(this).parent().addClass('m_checked');
    } else {
        $(this).parent().removeClass('m_checked');
    }
    ;
});
$('.m_setting input[type="checkbox"]').each(function() {
    if ($(this).parent().hasClass('m_setting_password')) {
        if ($(this).prop('checked')) {
            $(this).parent().addClass('m_settinged m_settinged_password');
        } else {
            $(this).parent().removeClass('m_settinged m_settinged_password');
        }
        ;
    } else {
        if ($(this).prop('checked')) {
            $(this).parent().addClass('m_settinged');
        } else {
            $(this).parent().removeClass('m_settinged');
        }
        ;
    }
    ;
});
$('.m_list input[type="text"],.m_list input[type="password"],.m_list textarea').each(function() {
    $(this).parent().find('.right .m_icon_del').hide();
});
$('.m_list .password .right .m_setting input[type="checkbox"]').each(function() {
    if ($(this).prop('checked')) {
        $(this).parent().parent().parent().children('input[type="password"],input[type="password"]').attr('type', 'text');
    } else {
        $(this).parent().parent().parent().children('input[type="password"],input[type="password"]').attr('type', 'password');
    }
    ;
});
$('.m_select select').each(function(index, el) {
    if ($(this).val() != '' && $(this).val() != '0') {
        $(this).prev().html($(this).children('option:selected').html()).removeClass('gray');
    } else {
        $(this).prev().html($(this).children('option:selected').html()).addClass('gray');
    }
    ;
});
$('body').on('keyup', '.m_list input[type="text"],.m_list input[type="password"],.m_list select,.m_list textarea', function(event) {
    if (event.keyCode == '13') {
        var btn = $('#' + $(this).parents('.m_list').first().attr('from-submit') + ':visible');
        if (!btn.hasClass('disabled') && btn.attr('disabled') == null) {
            btn.click();
        }
        ;
    }
    ;
}).on('change', '.m_radio input[type="radio"]', function(event) {
    if ($(this).prop('checked')) {
        var name = $(this).attr('name');
        if (name) {
            $('.m_radio input[type="radio"][name="' + name + '"]').each(function() {
                if ($(this).prop('checked')) {
                    $(this).parent().addClass('m_checked');
                } else {
                    $(this).parent().removeClass('m_checked');
                }
                ;
            });
        }
        ;
        $(this).parent().addClass('m_checked');
    } else {
        $(this).parent().removeClass('m_checked');
    }
    ;
}).on('change', '.m_checkbox input[type="checkbox"]', function(event) {
    if ($(this).prop('checked')) {
        $(this).parent().addClass('m_checked');
    } else {
        $(this).parent().removeClass('m_checked');
    }
    ;
}).on('change', '.m_setting input[type="checkbox"]', function(event) {
    if ($(this).parent().hasClass('m_setting_password')) {
        if ($(this).prop('checked')) {
            $(this).parent().addClass('m_settinged m_settinged_password');
        } else {
            $(this).parent().removeClass('m_settinged m_settinged_password');
        }
        ;
    } else {
        if ($(this).prop('checked')) {
            $(this).parent().addClass('m_settinged');
        } else {
            $(this).parent().removeClass('m_settinged');
        }
        ;
    }
    ;
}).on('focus keyup', '.m_list input[type="text"],.m_list input[type="password"],.m_list textarea', function() {
    if ($(this).prop('readonly') || $(this).prop('disabled'))
        return;
    var value = $.trim($(this).val());
    if (!value) {
        $(this).parent().find('.right .m_icon_del').hide();
    } else {
        $(this).parent().find('.right .m_icon_del').show();
    }
    ;
}).on('blur', '.m_list input[type="text"],.m_list input[type="password"],.m_list textarea', function() {
    $(this).parent().find('.right .m_icon_del').fadeOut(100);
}).on('touchend mouseup', '.m_list .right .m_icon_del', function(event) {
    $(this).parent().parent().children('input[type="text"],input[type="password"],textarea').val('').change().focus();
}).on('click', '.m_list .imgcode .right .m_icon_reload', function(event) {
    var src = $(this).prev().attr('data-src');
    $(this).prev().attr('src', src.replace(/@time/gim, Model.timestamp()));
}).on('click', '.m_list .imgcode .right img', function(event) {
    var src = $(this).attr('data-src');
    $(this).attr('src', src.replace(/@time/gim, Model.timestamp()));
}).on('change', '.m_list .password .right .m_setting input[type="checkbox"]', function(event) {
    if ($(this).prop('checked')) {
        $(this).parent().parent().parent().children('input[type="text"],input[type="password"]').attr('type', 'text');
    } else {
        $(this).parent().parent().parent().children('input[type="text"],input[type="password"]').attr('type', 'password');
    }
    ;
}).on('change', '.m_list .select-text select', function(event) {
    $(this).parent().children('input[type="text"]').val($(this).val());
}).on('change', '.m_list .select-text input[type="text"]', function(event) {
    $(this).parent().children('select').val('');
}).on('change', '.m_select select', function(event) {
    if ($(this).val() != '' && $(this).val() != '0') {
        $(this).prev().html($(this).children('option:selected').html()).removeClass('gray');
    } else {
        $(this).prev().html($(this).children('option:selected').html()).addClass('gray');
    }
    ;
}).on('click', '#js_classify_all', function() {
    var $list = $(this).next('#js_classify_list');
    if ($(this).data('open') == 'no') {
        $list.removeClass('hidden').animate({'top': '0.93rem'}, 500);
        $(this).data('open', 'yes');
        Model.mask({color: '#000000', opacity: .5, zIndex: 1, time: 500});
    } else {
        $list.animate({'top': '0'}, 300).addClass('hidden');
        $(this).data('open', 'no');
        $(".m_mask").hide();
    }
}).on('change', '.m_order_checkbox input[type="checkbox"]', function(event) {
    if ($(this).prop('checked')) {
        $(this).parent().addClass('m_checked');
        $('.m_opera').each(function() {
            $(this).data('select', 'on').addClass('selected');
        });
    } else {
        $(this).parent().removeClass('m_checked');
        $('.m_opera').each(function() {
            $(this).data('select', 'off').removeClass('selected');
        });
    }
    ;
}).on('click', '.m_opera', function(event) {
    if ($(this).data('select') == 'off') {
        $(this).data('select', 'on').addClass('selected');
    } else {
        $(this).data('select', 'off').removeClass('selected');
    }
    ;
});
var goodsid_str = '';
$('body').on('click', '#js_goods_delete', function() {
    $('#goods_list').addClass('show_delete');
    $('.goods_bottom').animate({"opacity": "1"}, 300);
    $(this).addClass('hidden');
    $('#js_delete_goods_ok').removeClass('hidden');
}).on('click', '#js_cancel', function() {
    $('.m_opera').each(function() {
        $(this).data('select', 'off').removeClass('selected');
    });
}).on('click', '#js_delete_goods_ok', function() {
    $('#goods_list').removeClass('show_delete');
    $('.goods_bottom').animate({"opacity": "0"}, 300);
    window.location.reload();
}).on('click', '#js_goods_maybe_delete', function() {
    var url = $('#js_goods_maybe_delete').data('url');
    $('.m_opera').each(function() {
        var goodsid = $(this).parent('.m_goods_cell').data('goodsid');
        if ($(this).data('select') == 'on') {
            goodsid_str = goodsid_str + goodsid + ',';
            $(this).parent('.m_goods_cell').remove();
        }
        ;
    });
    if (goodsid_str == '') {
        Model.message('请选择商品', 1000);
    } else {
        $.ajax({url: url, type: 'post', data: {goodsid_str: goodsid_str}, dataType: 'json', error: function() {
                Model.alert('服务器连接失败');
            }, success: function(data) {
                if (data.IsSuccess) {
                    Model.message("删除成功");
                    if (data.isEmpty) {
                        window.location.reload();
                    }
                } else {
                    Model.message(data.Message);
                }
            }});
    }
}).on('click', '.m_icon_gotop', function(event) {
    $(window).scrollTop(0);
    return false;
});
$('#js_order_search').click(function() {
    $('#js_order_searchbox').animate({'display': 'block'}, 300);
    Model.mask({color: '#000000', opacity: .5, zIndex: 10, time: 300});
});
$('#js_search_cancel').click(function() {
    $('#js_order_searchbox').animate({'display': 'none'}, 300);
    $(".m_mask").hide();
})
$('#js_search_input').keyup(function() {
    if ($(this).val() != '') {
        $("#js_search_cancel").addClass('hidden');
        $("#js_search_ok").removeClass('hidden');
    } else {
        $("#js_search_cancel").removeClass('hidden');
        $("#js_search_ok").addClass('hidden');
    }
});
var _notice_count = $('.p_notice_list li').length;
var _count_i = 1;
function notice() {
    $('.p_notice_list').animate({'margin-top': '-' + (0.6 * _count_i) + 'rem'}, 500);
    if (_notice_count == 1) {
        $('.p_notice_list').css('margin-top', '0');
        _notice_count = $('.p_notice_list li').length + 1;
        _count_i = 0;
    }
    _notice_count--;
    _count_i++;
}
var notice = setInterval(notice, 3000);
$(document).ready(function() {
    try {
        $('img[truesrc]').lazyload({threshold: $(window).height()});
    }
    catch (ex) {
    }
    ;
});
var loadings = [];
$('.m_loading').each(function(index, el) {
    loadings.push($(this));
});
function _run_loading($el, index) {
    if ($el.hasClass('m_loaded')) {
        var url = $el.removeClass('m_loaded m_manually').data('url');
        var lastid = $el.data('lastid');
        var listid = $el.data('listid');
        var templateid = $el.data('template');
        window['TEMPLATE_D'] = window['TEMPLATE_D'] || {};
        var _template = window['TEMPLATE_D'][templateid] || (window['TEMPLATE_D'][templateid] = template.compile($('#' + templateid).html()));
        url = url.replace(/@lastid/g, lastid);
        $.ajax({url: url, dataType: 'json', error: function() {
                $el.addClass('m_loaded');
                if (index != null) {
                    loadings.splice(index, 1);
                }
                ;
            }, success: function(data) {
                if (data.notMessage) {
                    if (window['add_class']) {
                        $('.lib_content .' + add_class).html(data.notMessage);
                    } else {
                        $('.lib_content').html(data.notMessage);
                    }
                } else {
                    if ($el.data('count')) {
                        $el.data('count', $el.data('count') + 1);
                    } else {
                        $el.data('count', 1);
                    }
                    ;
                    $el.addClass('m_loaded');
                    $('#' + listid).append(_template({data: data})).find('img[truesrc]').lazyload({threshold: $(window).height()});
                    if (data.isend == 0) {
                        $el.data('lastid', data.lastid);
                        if ($el.data('count') >= 999999) {
                            if (index != null) {
                                loadings.splice(index, 1);
                            }
                            ;
                            $el.addClass('m_manually');
                            if (!$el.children('a').length) {
                                $el.html('<a class="m_button m_button_radius js_check_more" href="javascript:void(0);">查看更多<i class="m_icon m_icon_loading"></i></a>');
                            }
                            ;
                            if (!$el.data('bindclick')) {
                                $el.data('bindclick', true);
                                $el.children('a.m_button_radius').click(function() {
                                    _run_loading($el);
                                });
                            }
                            ;
                        }
                        ;
                    } else {
                        if (index != null) {
                            loadings.splice(index, 1);
                        }
                        ;
                    }
                    ;
                }
                ;
            }});
    }
    ;
}
;
var $gotop = $('.m_icon_gotop');
function run_loading() {
    var height = $(window).height();
    var top = $(window).scrollTop();
    if (top > height / 2) {
        $gotop.removeClass('hidden');
    } else {
        $gotop.addClass('hidden');
    }
    ;
    var bottom = top + height * 1.5;
    top -= height * .5;
    $.each(loadings, function(index, $el) {
        var _top = $el.offset().top;
        if (_top > bottom) {
            return false;
        } else if (_top > top) {
            _run_loading($el, index);
        }
        ;
    });
}
;
$(window).scroll(run_loading);
run_loading();
;
;
;
function init() {
    $('.m_order_checkbox input[type="checkbox"]').each(function() {
        if ($(this).prop('checked')) {
            $(this).parent().addClass('m_checked');
        } else {
            $(this).parent().removeClass('m_checked');
        }
        ;
    });
    $('body').on('change', '.m_order_checkbox input[type="checkbox"]', function(event) {
        if ($(this).prop('checked')) {
            $(this).parent().addClass('m_checked');
        } else {
            $(this).parent().removeClass('m_checked');
        }
        ;
    })
    $(".js_cancle").unbind().on("click", function() {
        var _orderid = $(this).data("orderid");
        Model.mask({color: '#000000', opacity: .5, zIndex: 1, time: 500});
        $(".p_order_canclereason").show(400).data("orderid", _orderid);
    });
    $(".js_receive").unbind().on("click", function() {
        var self = this;
        var _orderid = $(this).data("orderid");
        var _d_id = $(this).data("d_id");
        var _isdetail = $(this).data("isdetail");
        var url = '/member/orderdetail?act=setreceived';
        var dialog = Model.dialog('是否确认收货？', [{text: '取消', click: function() {
                    dialog.close();
                }}, {text: '确认', click: function() {
                    dialog.close();
                    $.ajax({url: url, type: 'post', data: {order_id: _orderid, d_id: _d_id}, dataType: 'json', error: function() {
                            Model.alert('服务器连接失败');
                        }, success: function(data) {
                            if (data.IsSuccess) {
                                Model.alert(data.Message);
                                if (_isdetail == 1) {
                                    window.location.reload();
                                } else {
                                    html = '<a class="m_button" href="/member/logistics?order_id=' + _orderid + '&d_id=' + _d_id + '">查看物流</a>';
                                    html += '<a class="m_button m_button_orange" href="member/comments?order_sn=' + _orderid + '&d_id=' + _d_id + '">评价</a>';
                                }
                                $(self).parent().html(html);
                            } else {
                                Model.alert(data.Message);
                            }
                        }});
                }, type: 'orange'}]);
    });
    $(".js_delete").unbind().on("click", function() {
        var _orderid = $(this).data("orderid");
        var _jumpurl = $(this).data("jumpurl");
        var _d_id = $(this).data("d_id");
        var url = '/member/orderdetail?act=cancel';
        var dialog = Model.dialog('确认删除订单，删除之后将无法恢复？', [{text: '取消', click: function() {
                    dialog.close();
                }}, {text: '确认', click: function() {
                    dialog.close();
                    $.ajax({url: url, type: 'post', data: {order_id: _orderid, act: "setreceived", d_id: _d_id}, dataType: 'json', error: function() {
                            Model.alert('服务器连接失败');
                        }, success: function(data) {
                            if (data.IsSuccess) {
                                Model.alert(data.Message)
                                window.location.href = _jumpurl;
                            } else {
                                Model.alert(data.Message);
                            }
                        }});
                }, type: 'orange'}]);
    });
    $(".js_reminder").unbind().on("click", function() {
        var _orderid = $(this).data("orderid");
        var _jumpurl = $(this).data("jumpurl");
        var _d_id = $(this).data("d_id");
        var url = '/member/orderdetail?act=reminder';
        $.ajax({url: url, type: 'post', data: {order_id: _orderid, act: "reminder", d_id: _d_id}, dataType: 'json', error: function() {
                Model.alert('服务器连接失败');
            }, success: function(data) {
                if (data.IsSuccess) {
                    Model.alert(data.Message)
                } else {
                    Model.alert(data.Message);
                }
            }});
    });
}
init();
/*$("body").on("touchend mousedown", ".p_order_canclereason .reason", function() {
    var $this = $(this);
    var _orderid = $(this).parent().data("orderid");
    var _reasonid = $this.data("reasonid");
    var _isdetail = $(".m_order_bottom").find(".js_cancle").data("isdetail");
    var url = "/index.php/Mobile/Member/cancelOrder.html";
    $(".m_mask").hide();
    $this.parent().hide();
    $.ajax({url: url, type: 'post', data: {order_id: _orderid, reasonid: _reasonid, act: 'cancel'}, dataType: 'json', error: function() {
            Model.alert('服务器连接失败');
        }, success: function(data) {
            if (data.IsSuccess) {
                Model.alert('取消订单成功!');
                if (_isdetail == 1) {
                    window.location.reload();
                } else {
                    $("#order_" + _orderid).find(".m_order_static").html("交易关闭");
                    $("#order_" + _orderid).find(".buttons").hide();
                }
            } else {
                Model.alert('很抱歉，您的订单已审核，需要取消请联系客服，谢谢。');
            }
        }});
});*/
$("body").on("click", ".p_order_canclereason .js_close", function() {
    $(".m_mask").hide();
    $(this).parent().hide();
});
if ($('#js_countdown').length) {
    var second = parseInt($('#js_countdown').data('second') || '0');
    var _setInterval = setInterval(function() {
        if (--second <= 0) {
            window.location.reload();
            return;
        } else {
            $('#js_hours').html(parseInt(second / 3600));
            $('#js_minute').html(parseInt(second % 3600 / 60));
        }
        ;
    }, 1000);
}
;
$('.js_more').on('click', function() {
    $.ajax({url: "ajax_member_order.php?type=" + _type + "&page=" + _page + "&ajax=1&key=" + _key, context: document.body, success: function(data) {
            $("#js_form").append(data);
            init();
        }});
    _page++;
    if (_page > _total_page) {
        $('.js_more').hide();
    }
});
$(document).ready(function() {
    $('.js_more').click();
});
;