function pNotifyMessage(e){new PNotify({title:"error"===e.level?"Error.":"Info.",text:e.message,type:e.level,animation:"slide",animate_speed:"slow",hide:"true",shadow:"true",delay:3e3,addclass:"stack-topleft"})}var stackTopLeft={dir1:"down",dir2:"right",push:"top"};$(function(){PNotify.prototype.options.styling="fontawesome";var e=jQuery.parseJSON($("input[name=notifications]").val());for(var t in e)new pNotifyMessage(e[t])});