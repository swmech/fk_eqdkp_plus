
/*!
* Built: 23-05-2026 00:05:22
*/ 
 
/* ./infotooltip/jquery.infotooltip.js*/ 
/*	Project:	EQdkp-Plus
 *	Package:	EQdkp-plus
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2016 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

(function($){
	$.fn.extend({

		//pass the options variable to the function
		infotooltips: function(options) {

		return this.each(function() {
				var mid = $(this).attr('id');

				//code to be inserted here
				var title = $('#'+mid).attr('title');
				if (title != '') {
					var url = mmocms_root_path + 'infotooltip/infotooltip_feed.php?data='+title+'&divid='+mid;
					$.get(url, function(data) {
						$('#'+mid).empty();
						$('#'+mid).prepend(data);
					});
				}
				// end of custom code...

			});
		}
	});
})(jQuery); 
/* ./libraries/tinyMCE/tinymce/jquery.tinymce.min.js*/ 
!function(){var f,c,u,p,d,s=[];d="undefined"!=typeof global?global:window,p=d.jQuery;var v=function(){return d.tinymce};p.fn.tinymce=function(o){var e,t,i,l=this,r="";if(!l.length)return l;if(!o)return v()?v().get(l[0].id):null;l.css("visibility","hidden");var n=function(){var a=[],c=0;u||(m(),u=!0),l.each(function(e,t){var n,i=t.id,r=o.oninit;i||(t.id=i=v().DOM.uniqueId()),v().get(i)||(n=v().createEditor(i,o),a.push(n),n.on("init",function(){var e,t=r;l.css("visibility",""),r&&++c==a.length&&("string"==typeof t&&(e=-1===t.indexOf(".")?null:v().resolve(t.replace(/\.\w+$/,"")),t=v().resolve(t)),t.apply(e||v(),a))}))}),p.each(a,function(e,t){t.render()})};if(d.tinymce||c||!(e=o.script_url))1===c?s.push(n):n();else{c=1,t=e.substring(0,e.lastIndexOf("/")),-1!=e.indexOf(".min")&&(r=".min"),d.tinymce=d.tinyMCEPreInit||{base:t,suffix:r},-1!=e.indexOf("gzip")&&(i=o.language||"en",e=e+(/\?/.test(e)?"&":"?")+"js=true&core=true&suffix="+escape(r)+"&themes="+escape(o.theme||"modern")+"&plugins="+escape(o.plugins||"")+"&languages="+(i||""),d.tinyMCE_GZ||(d.tinyMCE_GZ={start:function(){var n=function(e){v().ScriptLoader.markDone(v().baseURI.toAbsolute(e))};n("langs/"+i+".js"),n("themes/"+o.theme+"/theme"+r+".js"),n("themes/"+o.theme+"/langs/"+i+".js"),p.each(o.plugins.split(","),function(e,t){t&&(n("plugins/"+t+"/plugin"+r+".js"),n("plugins/"+t+"/langs/"+i+".js"))})},end:function(){}}));var a=document.createElement("script");a.type="text/javascript",a.onload=a.onreadystatechange=function(e){e=e||window.event,2===c||"load"!=e.type&&!/complete|loaded/.test(a.readyState)||(v().dom.Event.domLoaded=1,c=2,o.script_loaded&&o.script_loaded(),n(),p.each(s,function(e,t){t()}))},a.src=e,document.body.appendChild(a)}return l},p.extend(p.expr[":"],{tinymce:function(e){var t;return!!(e.id&&"tinymce"in d&&(t=v().get(e.id))&&t.editorManager===v())}});var m=function(){var r=function(e){"remove"===e&&this.each(function(e,t){var n=l(t);n&&n.remove()}),this.find("span.mceEditor,div.mceEditor").each(function(e,t){var n=v().get(t.id.replace(/_parent$/,""));n&&n.remove()})},o=function(i){var e,t=this;if(null!=i)r.call(t),t.each(function(e,t){var n;(n=v().get(t.id))&&n.setContent(i)});else if(0<t.length&&(e=v().get(t[0].id)))return e.getContent()},l=function(e){var t=null;return e&&e.id&&d.tinymce&&(t=v().get(e.id)),t},u=function(e){return!!(e&&e.length&&d.tinymce&&e.is(":tinymce"))},s={};p.each(["text","html","val"],function(e,t){var a=s[t]=p.fn[t],c="text"===t;p.fn[t]=function(e){var t=this;if(!u(t))return a.apply(t,arguments);if(e!==f)return o.call(t.filter(":tinymce"),e),a.apply(t.not(":tinymce"),arguments),t;var i="",r=arguments;return(c?t:t.eq(0)).each(function(e,t){var n=l(t);i+=n?c?n.getContent().replace(/<(?:"[^"]*"|'[^']*'|[^'">])*>/g,""):n.getContent({save:!0}):a.apply(p(t),r)}),i}}),p.each(["append","prepend"],function(e,t){var n=s[t]=p.fn[t],r="prepend"===t;p.fn[t]=function(i){var e=this;return u(e)?i!==f?("string"==typeof i&&e.filter(":tinymce").each(function(e,t){var n=l(t);n&&n.setContent(r?i+n.getContent():n.getContent()+i)}),n.apply(e.not(":tinymce"),arguments),e):void 0:n.apply(e,arguments)}}),p.each(["remove","replaceWith","replaceAll","empty"],function(e,t){var n=s[t]=p.fn[t];p.fn[t]=function(){return r.call(this,t),n.apply(this,arguments)}}),s.attr=p.fn.attr,p.fn.attr=function(e,t){var n=this,i=arguments;if(!e||"value"!==e||!u(n))return s.attr.apply(n,i);if(t!==f)return o.call(n.filter(":tinymce"),t),s.attr.apply(n.not(":tinymce"),i),n;var r=n[0],a=l(r);return a?a.getContent({save:!0}):s.attr.apply(p(r),i)}}}(); 
/* ./templates/eqdkp_bluesky/eqdkp_bluesky.js*/ 
$(function(){
	if(mmocms_header_type == 'full'){
		/* My Chars Points */
		$('.mychars-points-tooltip .char').on('click', function(){
			$(this).parent().parent().children('tr').removeClass("active");
			$(this).parent().addClass("active");
			var current = $(this).parent().find('.current').html();
			var icons = $(this).parent().find('.icons').html();
			$(".mychars-points-target").html(icons + " "+current);
			var id = $(this).parent().attr('id');
			if(JQisLocalStorageNameSupported()) localStorage.setItem('mcp_'+mmocms_userid, id);
		});
		var saved = (JQisLocalStorageNameSupported()) ? localStorage.getItem('mcp_'+mmocms_userid) : "";

		if (saved && saved != "" && $('#'+saved).find('.current').html() != undefined){
			$('#'+saved).addClass("active");
			var current = $('#'+saved).find('.current').html();
			var icons = $('#'+saved).find('.icons').html();
			$(".mychars-points-target").html(icons + " "+current);
		} else {
			$('.mychars-points-tooltip .main').addClass("active");
			var current = $('.mychars-points-tooltip .main').find('.current').html();
			var icons = $('.mychars-points-tooltip .main').find('.icons').html();
			$(".mychars-points-target").html(icons + " "+current);
		}

		/* Main Menu */
		$('ul.mainmenu li.link_li_indexphp a.link_indexphp, ul.mainmenu li.link_li_entry_home a.link_entry_home').html('');

		/* Mobile Menu */
		var mobile_menu_wrapper		= $('.mainmenu-mobile-wrapper, .adminmenu-mobile-wrapper'),
			mobile_menu_position	= [];
		mobile_menu_wrapper.find('a.sub-menu-arrow').on('click', function(){
			var depth		= $(this).parentsUntil(mobile_menu_wrapper).parents('.sub-menu').length,
				is_admin	= $(this).parentsUntil(mobile_menu_wrapper).last().hasClass('adminmenu-mobile');
			
			if( $(this).parent().hasClass('open') ){
				if(is_admin && depth == 0) $('.mainmenu-mobile-wrapper').removeClass('hidden');
				mobile_menu_wrapper.css('transform','translate3d('+( -100 * depth)+'% ,0,0)');
				$(this).parent().removeClass('open');
				mobile_menu_wrapper.removeClass('open');
				$('.nav-mobile .mobile-overlay').scrollTop( mobile_menu_position.pop() );
				
			}else{
				mobile_menu_position.push( $('.nav-mobile .mobile-overlay').scrollTop() );
				$(this).parent().addClass('open');
				mobile_menu_wrapper.addClass('open');
				mobile_menu_wrapper.css('transform','translate3d('+( -100 * (depth + 1))+'% ,0,0)');
				if(is_admin && depth == 0) $('.mainmenu-mobile-wrapper').addClass('hidden');
				$('.nav-mobile .mobile-overlay').scrollTop(0);
			}
		});

		/* Tooltip Triggers */
		$('.tooltip-trigger').on('click', function(event){
			event.preventDefault();
			var mytooltip = $(this).data('tooltip');
			$("#"+mytooltip).show('fast');
			$(document).on('click', function(event) {
				var count = $(event.target).parents('.'+mytooltip+'-container').length;
				if (count == 0){
					$("#"+mytooltip).hide('fast');
				}
			});
		});

		/* User Tooltip Doubleclick */
		$('.user-tooltip-trigger').on('dblclick', function(event){
			$("#user-tooltip").hide('fast');
			window.location=mmocms_controller_path+"Settings"+mmocms_seo_extension+mmocms_sid;
		});

		/* Admin Tooltip Doubleclick */
		$('.admin-tooltip-trigger').on('dblclick', function(event){
			$("#admin-tooltip").hide('fast');
			window.location=mmocms_root_path+"admin"+mmocms_sid;
		});

		user_clock();

		$( ".openLoginModal" ).on('click', function() {
			$( "#dialog-login" ).dialog( "open" );
		});

		/* Notifications */
		$('.notification-tooltip-trigger').on('click', function(event){
			$(".notification-tooltip").hide('fast');
			$("#notification-tooltip-all").show('fast');
			notification_show_only('all');
			var classList = $(this).attr('class').split(/\s+/);
			for (var i = 0; i < classList.length; i++) {
			   if (classList[i] === 'notification-bubble-red' || classList[i] === 'notification-bubble-yellow' || classList[i] === 'notification-bubble-green') {
			     notification_show_only(classList[i]);
			     break;
			   }
			}

			$(document).on('click', function(event) {
				var count = $(event.target).parents('.notification-tooltip-container').length;
				if (count == 0 && (!$(event.target).hasClass('notification-markasread')) ){
					$(".notification-tooltip").hide('fast');
				}
			});

		});

		$('.notification-content').on('click', '.notification-markasread', function() {
			var ids = $(this).parent().parent().data('ids');
			$(this).parent().parent().remove();
			recalculate_notification_bubbles();
			$.get(mmocms_controller_path+"Notifications"+mmocms_seo_extension+mmocms_sid+"&markread&ids="+ids);
		});
		$('.notification-filter').on('click', function(event){
			if ($(this).hasClass('filtered')){
				//Show all of this
				if ($(this).hasClass('notification-bubble-green')) $('.notification-content ul li.prio_0').show();
				if ($(this).hasClass('notification-bubble-yellow')) $('.notification-content ul li.prio_1').show();
				if ($(this).hasClass('notification-bubble-red')) $('.notification-content ul li.prio_2').show();

				$(this).removeClass('filtered');
			} else {
				//hide all of this
				if ($(this).hasClass('notification-bubble-green')) $('.notification-content ul li.prio_0').hide();
				if ($(this).hasClass('notification-bubble-yellow')) $('.notification-content ul li.prio_1').hide();
				if ($(this).hasClass('notification-bubble-red')) $('.notification-content ul li.prio_2').hide();
				$(this).addClass('filtered');
			}
		});
		//Periodic Update of Notifications
		window.setTimeout("notification_update()", 300000);
	}
})

/* User clock */
function user_clock(){
	var mydate = mymoment.format(user_clock_format);
	$('.user_time').html(mydate);
	mymoment.add(1, 's');
	window.setTimeout("user_clock()", 1000);
}

/* Some static Notification Functions */
var favicon;
function notification_favicon(red, yellow, green){
	if (typeof favicon === 'undefined') return;

	if (red > 0) {
		favicon.badge(red, {bgColor: '#d00'});
		return;
	}
	if (yellow > 0) {
		favicon.badge(yellow, {bgColor: '#F89406'});
		return;
	}
	if (green > 0) {
		favicon.badge(green, {bgColor: '#468847'});
		return;
	}
	favicon.reset();
}

function notification_show_only(name){
	if (name === 'all'){
		$('.notification-filter').removeClass('filtered');
		$('.notification-content ul li.prio_0, .notification-content ul li.prio_1, .notification-content ul li.prio_2').show();
	} else {
		$('.notification-content ul li.prio_0, .notification-content ul li.prio_1, .notification-content ul li.prio_2').hide();
		$('.notification-filter').addClass('filtered');
		$('.'+name+'.notification-filter').removeClass('filtered');
		if (name === 'notification-bubble-green') $('.notification-content ul li.prio_0').show();
		if (name === 'notification-bubble-yellow') $('.notification-content ul li.prio_1').show();
		if (name === 'notification-bubble-red') $('.notification-content ul li.prio_2').show();
	}
}

function notification_update(){
	$.get(mmocms_controller_path+"Notifications"+mmocms_seo_extension+mmocms_sid+"&load", function(data){
		$('.notification-content ul').html(data);
		recalculate_notification_bubbles();
	});

	//5 Minute
	window.setTimeout("notification_update()", 300000);
}

 /* static code*/ 

				function show_embedded_content(obj){
					var parent = $(obj).parent().parent().parent();
					var embeddedContent = parent.find(".embed-consent-content").html();
					var provider = parent.find(".embed-consent-provider").html();
					var decoded = $("<div/>").html(embeddedContent).text();
					parent.html(decoded);
					$(parent).trigger("load");
					if(JQisLocalStorageNameSupported()) {
						localStorage.setItem("embedd_consent_"+provider, 1);
					}
				}
			$(function(){$('.trcheckboxclick tr').on('click', function(event) {
						if (event.target.type !== 'checkbox') {
							$(':checkbox', this).trigger('click');
						}
					});

					$(function(){
						var search = $('#loginarea_search');
						original_val = search.val();
						search.focus(function(){
							if($(this).val()===original_val){
								$(this).val('');
							}
						})
						.on('blur', function(){
							if($(this).val()===''){
								$(this).val(original_val);
							}
						});

					});

			$('a.lightbox,  a[rel="lightbox"]').each(function(index) {
				var image = $(this).html();
				var image_obj = $(this).find('img');
				var image_parent = image_obj.parent();
				var image_string = image_parent.html();

				var fullimage = $(this).attr('href');
				var imagetitle = image_obj.attr('alt');
				$(this).attr('title', imagetitle);

				var image_style = $(this).children().attr('style');
				if (image_style) {
					if (image_style == "display: block; margin-left: auto; margin-right: auto;") image_style = image_style + " text-align:center;";
					$(this).attr('style', image_style);
				}
				var randomId = parseInt(Math.random() * 1000);
				var zoomIcon = '<div class="image_resized" onmouseover="$(\'#imgresize_'+randomId+'\').show()" onmouseout="$(\'#imgresize_' +randomId+'\').hide()" style="display:inline-block;"><div id="imgresize_'+randomId+'" class="markImageResized"><a title="'+imagetitle+'" href="'+fullimage+'" class="lightbox"><span class="fa-stack fa-lg"><i class="fa fa-square fa-stack-2x image_zoom"></i><i class="fa fa-search-plus fa-stack-1x fa-inverse"></i></span><\/a><\/div>'+image_string+'<\/div>';
				$(this).html(zoomIcon);
			});
			});