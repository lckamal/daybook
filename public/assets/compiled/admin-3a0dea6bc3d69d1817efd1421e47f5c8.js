+function($){"use strict";var Affix=function(element,options){this.options=$.extend({},Affix.DEFAULTS,options)
this.$window=$(window).on('scroll.bs.affix.data-api',$.proxy(this.checkPosition,this)).on('click.bs.affix.data-api',$.proxy(this.checkPositionWithEventLoop,this))
this.$element=$(element)
this.affixed=this.unpin=null
this.checkPosition()}
Affix.RESET='affix affix-top affix-bottom'
Affix.DEFAULTS={offset:0}
Affix.prototype.checkPositionWithEventLoop=function(){setTimeout($.proxy(this.checkPosition,this),1)}
Affix.prototype.checkPosition=function(){if(!this.$element.is(':visible'))return
var scrollHeight=$(document).height()
var scrollTop=this.$window.scrollTop()
var position=this.$element.offset()
var offset=this.options.offset
var offsetTop=offset.top
var offsetBottom=offset.bottom
if(typeof offset!='object')offsetBottom=offsetTop=offset
if(typeof offsetTop=='function')offsetTop=offset.top()
if(typeof offsetBottom=='function')offsetBottom=offset.bottom()
var affix=this.unpin!=null&&(scrollTop+this.unpin<=position.top)?false:offsetBottom!=null&&(position.top+this.$element.height()>=scrollHeight-offsetBottom)?'bottom':offsetTop!=null&&(scrollTop<=offsetTop)?'top':false
if(this.affixed===affix)return
if(this.unpin)this.$element.css('top','')
this.affixed=affix
this.unpin=affix=='bottom'?position.top-scrollTop:null
this.$element.removeClass(Affix.RESET).addClass('affix'+(affix?'-'+affix:''))
if(affix=='bottom'){this.$element.offset({top:document.body.offsetHeight-offsetBottom-this.$element.height()})}}
var old=$.fn.affix
$.fn.affix=function(option){return this.each(function(){var $this=$(this)
var data=$this.data('bs.affix')
var options=typeof option=='object'&&option
if(!data)$this.data('bs.affix',(data=new Affix(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.affix.Constructor=Affix
$.fn.affix.noConflict=function(){$.fn.affix=old
return this}
$(window).on('load',function(){$('[data-spy="affix"]').each(function(){var $spy=$(this)
var data=$spy.data()
data.offset=data.offset||{}
if(data.offsetBottom)data.offset.bottom=data.offsetBottom
if(data.offsetTop)data.offset.top=data.offsetTop
$spy.affix(data)})})}(window.jQuery);
+function($){"use strict";var dismiss='[data-dismiss="alert"]'
var Alert=function(el){$(el).on('click',dismiss,this.close)}
Alert.prototype.close=function(e){var $this=$(this)
var selector=$this.attr('data-target')
if(!selector){selector=$this.attr('href')
selector=selector&&selector.replace(/.*(?=#[^\s]*$)/,'')}
var $parent=$(selector)
if(e)e.preventDefault()
if(!$parent.length){$parent=$this.hasClass('alert')?$this:$this.parent()}
$parent.trigger(e=$.Event('close.bs.alert'))
if(e.isDefaultPrevented())return
$parent.removeClass('in')
function removeElement(){$parent.trigger('closed.bs.alert').remove()}
$.support.transition&&$parent.hasClass('fade')?$parent.one($.support.transition.end,removeElement).emulateTransitionEnd(150):removeElement()}
var old=$.fn.alert
$.fn.alert=function(option){return this.each(function(){var $this=$(this)
var data=$this.data('bs.alert')
if(!data)$this.data('bs.alert',(data=new Alert(this)))
if(typeof option=='string')data[option].call($this)})}
$.fn.alert.Constructor=Alert
$.fn.alert.noConflict=function(){$.fn.alert=old
return this}
$(document).on('click.bs.alert.data-api',dismiss,Alert.prototype.close)}(window.jQuery);
!function($){"use strict";var Modal=function(element,options){this.options=options
this.$element=$(element).delegate('[data-dismiss="modal"]','click.dismiss.modal',$.proxy(this.hide,this))
this.options.remote&&this.$element.find('.modal-body').load(this.options.remote)}
Modal.prototype={constructor:Modal,toggle:function(){return this[!this.isShown?'show':'hide']()},show:function(){var that=this,e=$.Event('show')
this.$element.trigger(e)
if(this.isShown||e.isDefaultPrevented())return
this.isShown=true
this.escape()
this.backdrop(function(){var transition=$.support.transition&&that.$element.hasClass('fade')
if(!that.$element.parent().length){that.$element.appendTo(document.body)}
that.$element.show()
if(transition){that.$element[0].offsetWidth}
that.$element.addClass('in').attr('aria-hidden',false)
that.enforceFocus()
transition?that.$element.one($.support.transition.end,function(){that.$element.focus().trigger('shown')}):that.$element.focus().trigger('shown')})},hide:function(e){e&&e.preventDefault()
var that=this
e=$.Event('hide')
this.$element.trigger(e)
if(!this.isShown||e.isDefaultPrevented())return
this.isShown=false
this.escape()
$(document).off('focusin.modal')
this.$element.removeClass('in').attr('aria-hidden',true)
$.support.transition&&this.$element.hasClass('fade')?this.hideWithTransition():this.hideModal()},enforceFocus:function(){var that=this
$(document).on('focusin.modal',function(e){if(that.$element[0]!==e.target&&!that.$element.has(e.target).length){that.$element.focus()}})},escape:function(){var that=this
if(this.isShown&&this.options.keyboard){this.$element.on('keyup.dismiss.modal',function(e){e.which==27&&that.hide()})}else if(!this.isShown){this.$element.off('keyup.dismiss.modal')}},hideWithTransition:function(){var that=this,timeout=setTimeout(function(){that.$element.off($.support.transition.end)
that.hideModal()},500)
this.$element.one($.support.transition.end,function(){clearTimeout(timeout)
that.hideModal()})},hideModal:function(){var that=this
this.$element.hide()
this.backdrop(function(){that.removeBackdrop()
that.$element.trigger('hidden')})},removeBackdrop:function(){this.$backdrop&&this.$backdrop.remove()
this.$backdrop=null},backdrop:function(callback){var that=this,animate=this.$element.hasClass('fade')?'fade':''
if(this.isShown&&this.options.backdrop){var doAnimate=$.support.transition&&animate
this.$backdrop=$('<div class="modal-backdrop '+animate+'" />').appendTo(document.body)
this.$backdrop.click(this.options.backdrop=='static'?$.proxy(this.$element[0].focus,this.$element[0]):$.proxy(this.hide,this))
if(doAnimate)this.$backdrop[0].offsetWidth
this.$backdrop.addClass('in')
if(!callback)return
doAnimate?this.$backdrop.one($.support.transition.end,callback):callback()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass('in')
$.support.transition&&this.$element.hasClass('fade')?this.$backdrop.one($.support.transition.end,callback):callback()}else if(callback){callback()}}}
var old=$.fn.modal
$.fn.modal=function(option){return this.each(function(){var $this=$(this),data=$this.data('modal'),options=$.extend({},$.fn.modal.defaults,$this.data(),typeof option=='object'&&option)
if(!data)$this.data('modal',(data=new Modal(this,options)))
if(typeof option=='string')data[option]()
else if(options.show)data.show()})}
$.fn.modal.defaults={backdrop:true,keyboard:true,show:true}
$.fn.modal.Constructor=Modal
$.fn.modal.noConflict=function(){$.fn.modal=old
return this}
$(document).on('click.modal.data-api','[data-toggle="modal"]',function(e){var $this=$(this),href=$this.attr('href'),$target=$($this.attr('data-target')||(href&&href.replace(/.*(?=#[^\s]+$)/,''))),option=$target.data('modal')?'toggle':$.extend({remote:!/#/.test(href)&&href},$target.data(),$this.data())
e.preventDefault()
$target.modal(option).one('hide',function(){$this.focus()})})}(window.jQuery);
+function($){"use strict";var Button=function(element,options){this.$element=$(element)
this.options=$.extend({},Button.DEFAULTS,options)}
Button.DEFAULTS={loadingText:'loading...'}
Button.prototype.setState=function(state){var d='disabled'
var $el=this.$element
var val=$el.is('input')?'val':'html'
var data=$el.data()
state=state+'Text'
if(!data.resetText)$el.data('resetText',$el[val]())
$el[val](data[state]||this.options[state])
setTimeout(function(){state=='loadingText'?$el.addClass(d).attr(d,d):$el.removeClass(d).removeAttr(d);},0)}
Button.prototype.toggle=function(){var $parent=this.$element.closest('[data-toggle="buttons"]')
if($parent.length){var $input=this.$element.find('input').prop('checked',!this.$element.hasClass('active')).trigger('change')
if($input.prop('type')==='radio')$parent.find('.active').removeClass('active')}
this.$element.toggleClass('active')}
var old=$.fn.button
$.fn.button=function(option){return this.each(function(){var $this=$(this)
var data=$this.data('bs.button')
var options=typeof option=='object'&&option
if(!data)$this.data('bs.button',(data=new Button(this,options)))
if(option=='toggle')data.toggle()
else if(option)data.setState(option)})}
$.fn.button.Constructor=Button
$.fn.button.noConflict=function(){$.fn.button=old
return this}
$(document).on('click.bs.button.data-api','[data-toggle^=button]',function(e){var $btn=$(e.target)
if(!$btn.hasClass('btn'))$btn=$btn.closest('.btn')
$btn.button('toggle')
e.preventDefault()})}(window.jQuery);
+function($){"use strict";var Carousel=function(element,options){this.$element=$(element)
this.$indicators=this.$element.find('.carousel-indicators')
this.options=options
this.paused=this.sliding=this.interval=this.$active=this.$items=null
this.options.pause=='hover'&&this.$element.on('mouseenter',$.proxy(this.pause,this)).on('mouseleave',$.proxy(this.cycle,this))}
Carousel.DEFAULTS={interval:5000,pause:'hover'}
Carousel.prototype.cycle=function(e){e||(this.paused=false)
this.interval&&clearInterval(this.interval)
this.options.interval&&!this.paused&&(this.interval=setInterval($.proxy(this.next,this),this.options.interval))
return this}
Carousel.prototype.getActiveIndex=function(){this.$active=this.$element.find('.item.active')
this.$items=this.$active.parent().children()
return this.$items.index(this.$active)}
Carousel.prototype.to=function(pos){var that=this
var activeIndex=this.getActiveIndex()
if(pos>(this.$items.length-1)||pos<0)return
if(this.sliding)return this.$element.one('slid',function(){that.to(pos)})
if(activeIndex==pos)return this.pause().cycle()
return this.slide(pos>activeIndex?'next':'prev',$(this.$items[pos]))}
Carousel.prototype.pause=function(e){e||(this.paused=true)
if(this.$element.find('.next, .prev').length&&$.support.transition.end){this.$element.trigger($.support.transition.end)
this.cycle(true)}
this.interval=clearInterval(this.interval)
return this}
Carousel.prototype.next=function(){if(this.sliding)return
return this.slide('next')}
Carousel.prototype.prev=function(){if(this.sliding)return
return this.slide('prev')}
Carousel.prototype.slide=function(type,next){var $active=this.$element.find('.item.active')
var $next=next||$active[type]()
var isCycling=this.interval
var direction=type=='next'?'left':'right'
var fallback=type=='next'?'first':'last'
var that=this
this.sliding=true
isCycling&&this.pause()
$next=$next.length?$next:this.$element.find('.item')[fallback]()
var e=$.Event('slide.bs.carousel',{relatedTarget:$next[0],direction:direction})
if($next.hasClass('active'))return
if(this.$indicators.length){this.$indicators.find('.active').removeClass('active')
this.$element.one('slid',function(){var $nextIndicator=$(that.$indicators.children()[that.getActiveIndex()])
$nextIndicator&&$nextIndicator.addClass('active')})}
if($.support.transition&&this.$element.hasClass('slide')){this.$element.trigger(e)
if(e.isDefaultPrevented())return
$next.addClass(type)
$next[0].offsetWidth
$active.addClass(direction)
$next.addClass(direction)
$active.one($.support.transition.end,function(){$next.removeClass([type,direction].join(' ')).addClass('active')
$active.removeClass(['active',direction].join(' '))
that.sliding=false
setTimeout(function(){that.$element.trigger('slid')},0)}).emulateTransitionEnd(600)}else{this.$element.trigger(e)
if(e.isDefaultPrevented())return
$active.removeClass('active')
$next.addClass('active')
this.sliding=false
this.$element.trigger('slid')}
isCycling&&this.cycle()
return this}
var old=$.fn.carousel
$.fn.carousel=function(option){return this.each(function(){var $this=$(this)
var data=$this.data('bs.carousel')
var options=$.extend({},Carousel.DEFAULTS,$this.data(),typeof option=='object'&&option)
var action=typeof option=='string'?option:options.slide
if(!data)$this.data('bs.carousel',(data=new Carousel(this,options)))
if(typeof option=='number')data.to(option)
else if(action)data[action]()
else if(options.interval)data.pause().cycle()})}
$.fn.carousel.Constructor=Carousel
$.fn.carousel.noConflict=function(){$.fn.carousel=old
return this}
$(document).on('click.bs.carousel.data-api','[data-slide], [data-slide-to]',function(e){var $this=$(this),href
var $target=$($this.attr('data-target')||(href=$this.attr('href'))&&href.replace(/.*(?=#[^\s]+$)/,''))
var options=$.extend({},$target.data(),$this.data())
var slideIndex=$this.attr('data-slide-to')
if(slideIndex)options.interval=false
$target.carousel(options)
if(slideIndex=$this.attr('data-slide-to')){$target.data('bs.carousel').to(slideIndex)}
e.preventDefault()})
$(window).on('load',function(){$('[data-ride="carousel"]').each(function(){var $carousel=$(this)
$carousel.carousel($carousel.data())})})}(window.jQuery);
+function($){"use strict";var Collapse=function(element,options){this.$element=$(element)
this.options=$.extend({},Collapse.DEFAULTS,options)
this.transitioning=null
if(this.options.parent)this.$parent=$(this.options.parent)
if(this.options.toggle)this.toggle()}
Collapse.DEFAULTS={toggle:true}
Collapse.prototype.dimension=function(){var hasWidth=this.$element.hasClass('width')
return hasWidth?'width':'height'}
Collapse.prototype.show=function(){if(this.transitioning||this.$element.hasClass('in'))return
var startEvent=$.Event('show.bs.collapse')
this.$element.trigger(startEvent)
if(startEvent.isDefaultPrevented())return
var actives=this.$parent&&this.$parent.find('> .accordion-group > .in')
if(actives&&actives.length){var hasData=actives.data('bs.collapse')
if(hasData&&hasData.transitioning)return
actives.collapse('hide')
hasData||actives.data('bs.collapse',null)}
var dimension=this.dimension()
this.$element.removeClass('collapse').addClass('collapsing')
[dimension](0)
this.transitioning=1
var complete=function(){this.$element.removeClass('collapsing').addClass('in')
[dimension]('auto')
this.transitioning=0
this.$element.trigger('shown.bs.collapse')}
if(!$.support.transition)return complete.call(this)
var scrollSize=$.camelCase(['scroll',dimension].join('-'))
this.$element.one($.support.transition.end,$.proxy(complete,this)).emulateTransitionEnd(350)
[dimension](this.$element[0][scrollSize])}
Collapse.prototype.hide=function(){if(this.transitioning||!this.$element.hasClass('in'))return
var startEvent=$.Event('hide.bs.collapse')
this.$element.trigger(startEvent)
if(startEvent.isDefaultPrevented())return
var dimension=this.dimension()
this.$element
[dimension](this.$element[dimension]())
[0].offsetHeight
this.$element.addClass('collapsing').removeClass('collapse').removeClass('in')
this.transitioning=1
var complete=function(){this.transitioning=0
this.$element.trigger('hidden.bs.collapse').removeClass('collapsing').addClass('collapse')}
if(!$.support.transition)return complete.call(this)
this.$element
[dimension](0).one($.support.transition.end,$.proxy(complete,this)).emulateTransitionEnd(350)}
Collapse.prototype.toggle=function(){this[this.$element.hasClass('in')?'hide':'show']()}
var old=$.fn.collapse
$.fn.collapse=function(option){return this.each(function(){var $this=$(this)
var data=$this.data('bs.collapse')
var options=$.extend({},Collapse.DEFAULTS,$this.data(),typeof option=='object'&&option)
if(!data)$this.data('bs.collapse',(data=new Collapse(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.collapse.Constructor=Collapse
$.fn.collapse.noConflict=function(){$.fn.collapse=old
return this}
$(document).on('click.bs.collapse.data-api','[data-toggle=collapse]',function(e){var $this=$(this),href
var target=$this.attr('data-target')||e.preventDefault()||(href=$this.attr('href'))&&href.replace(/.*(?=#[^\s]+$)/,'')
var $target=$(target)
var data=$target.data('bs.collapse')
var option=data?'toggle':$this.data()
var parent=$this.attr('data-parent')
var $parent=parent&&$(parent)
if(!data||!data.transitioning){if($parent)$parent.find('[data-toggle=collapse][data-parent='+parent+']').not($this).addClass('collapsed')
$this[$target.hasClass('in')?'addClass':'removeClass']('collapsed')}
$target.collapse(option)})}(window.jQuery);
+function($){"use strict";var backdrop='.dropdown-backdrop'
var toggle='[data-toggle=dropdown]'
var Dropdown=function(element){var $el=$(element).on('click.bs.dropdown',this.toggle)}
Dropdown.prototype.toggle=function(e){var $this=$(this)
if($this.is('.disabled, :disabled'))return
var $parent=getParent($this)
var isActive=$parent.hasClass('open')
clearMenus()
if(!isActive){if('ontouchstart'in document.documentElement){$('<div class="dropdown-backdrop"/>').insertAfter($(this)).on('click',clearMenus)}
$parent.trigger(e=$.Event('show.bs.dropdown'))
if(e.isDefaultPrevented())return
$parent.toggleClass('open').trigger('shown.bs.dropdown')}
$this.focus()
return false}
Dropdown.prototype.keydown=function(e){if(!/(38|40|27)/.test(e.keyCode))return
var $this=$(this)
e.preventDefault()
e.stopPropagation()
if($this.is('.disabled, :disabled'))return
var $parent=getParent($this)
var isActive=$parent.hasClass('open')
if(!isActive||(isActive&&e.keyCode==27)){if(e.which==27)$parent.find(toggle).focus()
return $this.click()}
var $items=$('[role=menu] li:not(.divider):visible a',$parent)
if(!$items.length)return
var index=$items.index($items.filter(':focus'))
if(e.keyCode==38&&index>0)index--
if(e.keyCode==40&&index<$items.length-1)index++
if(!~index)index=0
$items.eq(index).focus()}
function clearMenus(){$(backdrop).remove()
$(toggle).each(function(e){var $parent=getParent($(this))
if(!$parent.hasClass('open'))return
$parent.trigger(e=$.Event('hide.bs.dropdown'))
if(e.isDefaultPrevented())return
$parent.removeClass('open').trigger('hidden.bs.dropdown')})}
function getParent($this){var selector=$this.attr('data-target')
if(!selector){selector=$this.attr('href')
selector=selector&&/#/.test(selector)&&selector.replace(/.*(?=#[^\s]*$)/,'')}
var $parent=selector&&$(selector)
return $parent&&$parent.length?$parent:$this.parent()}
var old=$.fn.dropdown
$.fn.dropdown=function(option){return this.each(function(){var $this=$(this)
var data=$this.data('dropdown')
if(!data)$this.data('dropdown',(data=new Dropdown(this)))
if(typeof option=='string')data[option].call($this)})}
$.fn.dropdown.Constructor=Dropdown
$.fn.dropdown.noConflict=function(){$.fn.dropdown=old
return this}
$(document).on('click.bs.dropdown.data-api',clearMenus).on('click.bs.dropdown.data-api','.dropdown form',function(e){e.stopPropagation()}).on('click.bs.dropdown.data-api',toggle,Dropdown.prototype.toggle).on('keydown.bs.dropdown.data-api',toggle+', [role=menu]',Dropdown.prototype.keydown)}(window.jQuery);
+function($){"use strict";var Modal=function(element,options){this.options=options
this.$element=$(element).on('click.dismiss.modal','[data-dismiss="modal"]',$.proxy(this.hide,this))
this.$backdrop=this.isShown=null
if(this.options.remote)this.$element.find('.modal-body').load(this.options.remote)}
Modal.DEFAULTS={backdrop:true,keyboard:true,show:true}
Modal.prototype.toggle=function(){return this[!this.isShown?'show':'hide']()}
Modal.prototype.show=function(){var that=this
var e=$.Event('show.bs.modal')
this.$element.trigger(e)
if(this.isShown||e.isDefaultPrevented())return
this.isShown=true
this.escape()
this.backdrop(function(){var transition=$.support.transition&&that.$element.hasClass('fade')
if(!that.$element.parent().length){that.$element.appendTo(document.body)}
that.$element.show()
if(transition){that.$element[0].offsetWidth}
that.$element.addClass('in').attr('aria-hidden',false)
that.enforceFocus()
transition?that.$element.one($.support.transition.end,function(){that.$element.focus().trigger('shown.bs.modal')}).emulateTransitionEnd(300):that.$element.focus().trigger('shown.bs.modal')})}
Modal.prototype.hide=function(e){if(e)e.preventDefault()
e=$.Event('hide.bs.modal')
this.$element.trigger(e)
if(!this.isShown||e.isDefaultPrevented())return
this.isShown=false
this.escape()
$(document).off('focusin.bs.modal')
this.$element.removeClass('in').attr('aria-hidden',true)
$.support.transition&&this.$element.hasClass('fade')?this.$element.one($.support.transition.end,$.proxy(this.hideModal,this)).emulateTransitionEnd(300):this.hideModal()}
Modal.prototype.enforceFocus=function(){$(document).off('focusin.bs.modal').on('focusin.bs.modal',$.proxy(function(e){if(this.$element[0]!==e.target&&!this.$element.has(e.target).length){this.$element.focus()}},this))}
Modal.prototype.escape=function(){if(this.isShown&&this.options.keyboard){this.$element.on('keyup.dismiss.bs.modal',$.proxy(function(e){e.which==27&&this.hide()},this))}else if(!this.isShown){this.$element.off('keyup.dismiss.bs.modal')}}
Modal.prototype.hideModal=function(){var that=this
this.$element.hide()
this.backdrop(function(){that.removeBackdrop()
that.$element.trigger('hidden.bs.modal')})}
Modal.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove()
this.$backdrop=null}
Modal.prototype.backdrop=function(callback){var that=this
var animate=this.$element.hasClass('fade')?'fade':''
if(this.isShown&&this.options.backdrop){var doAnimate=$.support.transition&&animate
this.$backdrop=$('<div class="modal-backdrop '+animate+'" />').appendTo(document.body)
this.$element.on('click',$.proxy(function(e){if(e.target!==e.currentTarget)return
this.options.backdrop=='static'?this.$element[0].focus.call(this.$element[0]):this.hide.call(this)},this))
if(doAnimate)this.$backdrop[0].offsetWidth
this.$backdrop.addClass('in')
if(!callback)return
doAnimate?this.$backdrop.one($.support.transition.end,callback).emulateTransitionEnd(150):callback()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass('in')
$.support.transition&&this.$element.hasClass('fade')?this.$backdrop.one($.support.transition.end,callback).emulateTransitionEnd(150):callback()}else if(callback){callback()}}
var old=$.fn.modal
$.fn.modal=function(option){return this.each(function(){var $this=$(this)
var data=$this.data('bs.modal')
var options=$.extend({},Modal.DEFAULTS,$this.data(),typeof option=='object'&&option)
if(!data)$this.data('bs.modal',(data=new Modal(this,options)))
if(typeof option=='string')data[option]()
else if(options.show)data.show()})}
$.fn.modal.Constructor=Modal
$.fn.modal.noConflict=function(){$.fn.modal=old
return this}
$(document).on('click.bs.modal.data-api','[data-toggle="modal"]',function(e){var $this=$(this)
var href=$this.attr('href')
var $target=$($this.attr('data-target')||(href&&href.replace(/.*(?=#[^\s]+$)/,'')))
var option=$target.data('modal')?'toggle':$.extend({remote:!/#/.test(href)&&href},$target.data(),$this.data())
e.preventDefault()
$target.modal(option).one('hide',function(){$this.is(':visible')&&$this.focus()})})
$(function(){var $body=$(document.body).on('shown.bs.modal','.modal',function(){$body.addClass('modal-open')}).on('hidden.bs.modal','.modal',function(){$body.removeClass('modal-open')})})}(window.jQuery);
+function($){"use strict";var Popover=function(element,options){this.init('popover',element,options)}
if(!$.fn.tooltip)throw new Error('Popover requires tooltip.js')
Popover.DEFAULTS=$.extend({},$.fn.tooltip.Constructor.DEFAULTS,{placement:'right',trigger:'click',content:'',template:'<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'})
Popover.prototype=$.extend({},$.fn.tooltip.Constructor.prototype)
Popover.prototype.constructor=Popover
Popover.prototype.getDefaults=function(){return Popover.DEFAULTS}
Popover.prototype.setContent=function(){var $tip=this.tip()
var title=this.getTitle()
var content=this.getContent()
$tip.find('.popover-title')[this.options.html?'html':'text'](title)
$tip.find('.popover-content')[this.options.html?'html':'text'](content)
$tip.removeClass('fade top bottom left right in')
$tip.find('.popover-title:empty').hide()}
Popover.prototype.hasContent=function(){return this.getTitle()||this.getContent()}
Popover.prototype.getContent=function(){var $e=this.$element
var o=this.options
return $e.attr('data-content')||(typeof o.content=='function'?o.content.call($e[0]):o.content)}
Popover.prototype.tip=function(){if(!this.$tip)this.$tip=$(this.options.template)
return this.$tip}
var old=$.fn.popover
$.fn.popover=function(option){return this.each(function(){var $this=$(this)
var data=$this.data('bs.popover')
var options=typeof option=='object'&&option
if(!data)$this.data('bs.popover',(data=new Popover(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.popover.Constructor=Popover
$.fn.popover.noConflict=function(){$.fn.popover=old
return this}}(window.jQuery);
+function($){"use strict";function ScrollSpy(element,options){var href
var process=$.proxy(this.process,this)
this.$element=$(element).is('body')?$(window):$(element)
this.$body=$('body')
this.$scrollElement=this.$element.on('scroll.bs.scroll-spy.data-api',process)
this.options=$.extend({},ScrollSpy.DEFAULTS,options)
this.selector=(this.options.target||((href=$(element).attr('href'))&&href.replace(/.*(?=#[^\s]+$)/,''))||'')+' .nav li > a'
this.offsets=$([])
this.targets=$([])
this.activeTarget=null
this.refresh()
this.process()}
ScrollSpy.DEFAULTS={offset:10}
ScrollSpy.prototype.refresh=function(){var offsetMethod=this.$element[0]==window?'offset':'position'
this.offsets=$([])
this.targets=$([])
var self=this
var $targets=this.$body.find(this.selector).map(function(){var $el=$(this)
var href=$el.data('target')||$el.attr('href')
var $href=/^#\w/.test(href)&&$(href)
return($href&&$href.length&&[[$href[offsetMethod]().top+(!$.isWindow(self.$scrollElement.get(0))&&self.$scrollElement.scrollTop()),href]])||null}).sort(function(a,b){return a[0]-b[0]}).each(function(){self.offsets.push(this[0])
self.targets.push(this[1])})}
ScrollSpy.prototype.process=function(){var scrollTop=this.$scrollElement.scrollTop()+this.options.offset
var scrollHeight=this.$scrollElement[0].scrollHeight||this.$body[0].scrollHeight
var maxScroll=scrollHeight-this.$scrollElement.height()
var offsets=this.offsets
var targets=this.targets
var activeTarget=this.activeTarget
var i
if(scrollTop>=maxScroll){return activeTarget!=(i=targets.last()[0])&&this.activate(i)}
for(i=offsets.length;i--;){activeTarget!=targets[i]&&scrollTop>=offsets[i]&&(!offsets[i+1]||scrollTop<=offsets[i+1])&&this.activate(targets[i])}}
ScrollSpy.prototype.activate=function(target){this.activeTarget=target
$(this.selector).parents('.active').removeClass('active')
var selector=this.selector
+'[data-target="'+target+'"],'
+this.selector+'[href="'+target+'"]'
var active=$(selector).parents('li').addClass('active')
if(active.parent('.dropdown-menu').length){active=active.closest('li.dropdown').addClass('active')}
active.trigger('activate')}
var old=$.fn.scrollspy
$.fn.scrollspy=function(option){return this.each(function(){var $this=$(this)
var data=$this.data('bs.scrollspy')
var options=typeof option=='object'&&option
if(!data)$this.data('bs.scrollspy',(data=new ScrollSpy(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.scrollspy.Constructor=ScrollSpy
$.fn.scrollspy.noConflict=function(){$.fn.scrollspy=old
return this}
$(window).on('load',function(){$('[data-spy="scroll"]').each(function(){var $spy=$(this)
$spy.scrollspy($spy.data())})})}(window.jQuery);
+function($){"use strict";var Tab=function(element){this.element=$(element)}
Tab.prototype.show=function(){var $this=this.element
var $ul=$this.closest('ul:not(.dropdown-menu)')
var selector=$this.attr('data-target')
if(!selector){selector=$this.attr('href')
selector=selector&&selector.replace(/.*(?=#[^\s]*$)/,'')}
if($this.parent('li').hasClass('active'))return
var previous=$ul.find('.active:last a')[0]
var e=$.Event('show.bs.tab',{relatedTarget:previous})
$this.trigger(e)
if(e.isDefaultPrevented())return
var $target=$(selector)
this.activate($this.parent('li'),$ul)
this.activate($target,$target.parent(),function(){$this.trigger({type:'shown.bs.tab',relatedTarget:previous})})}
Tab.prototype.activate=function(element,container,callback){var $active=container.find('> .active')
var transition=callback&&$.support.transition&&$active.hasClass('fade')
function next(){$active.removeClass('active').find('> .dropdown-menu > .active').removeClass('active')
element.addClass('active')
if(transition){element[0].offsetWidth
element.addClass('in')}else{element.removeClass('fade')}
if(element.parent('.dropdown-menu')){element.closest('li.dropdown').addClass('active')}
callback&&callback()}
transition?$active.one($.support.transition.end,next).emulateTransitionEnd(150):next()
$active.removeClass('in')}
var old=$.fn.tab
$.fn.tab=function(option){return this.each(function(){var $this=$(this)
var data=$this.data('bs.tab')
if(!data)$this.data('bs.tab',(data=new Tab(this)))
if(typeof option=='string')data[option]()})}
$.fn.tab.Constructor=Tab
$.fn.tab.noConflict=function(){$.fn.tab=old
return this}
$(document).on('click.bs.tab.data-api','[data-toggle="tab"], [data-toggle="pill"]',function(e){e.preventDefault()
$(this).tab('show')})}(window.jQuery);
+function($){"use strict";var Tooltip=function(element,options){this.type=this.options=this.enabled=this.timeout=this.hoverState=this.$element=null
this.init('tooltip',element,options)}
Tooltip.DEFAULTS={animation:true,placement:'top',selector:false,template:'<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:'hover focus',title:'',delay:0,html:false,container:false}
Tooltip.prototype.init=function(type,element,options){this.enabled=true
this.type=type
this.$element=$(element)
this.options=this.getOptions(options)
var triggers=this.options.trigger.split(' ')
for(var i=triggers.length;i--;){var trigger=triggers[i]
if(trigger=='click'){this.$element.on('click.'+this.type,this.options.selector,$.proxy(this.toggle,this))}else if(trigger!='manual'){var eventIn=trigger=='hover'?'mouseenter':'focus'
var eventOut=trigger=='hover'?'mouseleave':'blur'
this.$element.on(eventIn+'.'+this.type,this.options.selector,$.proxy(this.enter,this))
this.$element.on(eventOut+'.'+this.type,this.options.selector,$.proxy(this.leave,this))}}
this.options.selector?(this._options=$.extend({},this.options,{trigger:'manual',selector:''})):this.fixTitle()}
Tooltip.prototype.getDefaults=function(){return Tooltip.DEFAULTS}
Tooltip.prototype.getOptions=function(options){options=$.extend({},this.getDefaults(),this.$element.data(),options)
if(options.delay&&typeof options.delay=='number'){options.delay={show:options.delay,hide:options.delay}}
return options}
Tooltip.prototype.enter=function(obj){var defaults=this.getDefaults()
var options={}
this._options&&$.each(this._options,function(key,value){if(defaults[key]!=value)options[key]=value})
var self=obj instanceof this.constructor?obj:$(obj.currentTarget)[this.type](options).data('bs.'+this.type)
clearTimeout(self.timeout)
if(!self.options.delay||!self.options.delay.show)return self.show()
self.hoverState='in'
self.timeout=setTimeout(function(){if(self.hoverState=='in')self.show()},self.options.delay.show)}
Tooltip.prototype.leave=function(obj){var self=obj instanceof this.constructor?obj:$(obj.currentTarget)[this.type](this._options).data('bs.'+this.type)
clearTimeout(self.timeout)
if(!self.options.delay||!self.options.delay.hide)return self.hide()
self.hoverState='out'
self.timeout=setTimeout(function(){if(self.hoverState=='out')self.hide()},self.options.delay.hide)}
Tooltip.prototype.show=function(){var e=$.Event('show.bs.'+this.type)
if(this.hasContent()&&this.enabled){this.$element.trigger(e)
if(e.isDefaultPrevented())return
var $tip=this.tip()
this.setContent()
if(this.options.animation)$tip.addClass('fade')
var placement=typeof this.options.placement=='function'?this.options.placement.call(this,$tip[0],this.$element[0]):this.options.placement
var autoToken=/\s?auto?\s?/i
var autoPlace=autoToken.test(placement)
if(autoPlace)placement=placement.replace(autoToken,'')||'top'
$tip.detach().css({top:0,left:0,display:'block'}).addClass(placement)
this.options.container?$tip.appendTo(this.options.container):$tip.insertAfter(this.$element)
var pos=this.getPosition()
var actualWidth=$tip[0].offsetWidth
var actualHeight=$tip[0].offsetHeight
if(autoPlace){var $parent=this.$element.parent()
var orgPlacement=placement
var docScroll=document.documentElement.scrollTop||document.body.scrollTop
var parentWidth=this.options.container=='body'?window.innerWidth:$parent.outerWidth()
var parentHeight=this.options.container=='body'?window.innerHeight:$parent.outerHeight()
var parentLeft=this.options.container=='body'?0:$parent.offset().left
placement=placement=='bottom'&&pos.top+pos.height+actualHeight-docScroll>parentHeight?'top':placement=='top'&&pos.top-docScroll-actualHeight<0?'bottom':placement=='right'&&pos.right+actualWidth>parentWidth?'left':placement=='left'&&pos.left-actualWidth<parentLeft?'right':placement
$tip.removeClass(orgPlacement).addClass(placement)}
var tp=placement=='bottom'?{top:pos.top+pos.height,left:pos.left+pos.width/2-actualWidth/2}:placement=='top'?{top:pos.top-actualHeight,left:pos.left+pos.width/2-actualWidth/2}:placement=='left'?{top:pos.top+pos.height/2-actualHeight/2,left:pos.left-actualWidth}:{top:pos.top+pos.height/2-actualHeight/2,left:pos.left+pos.width}
this.applyPlacement(tp,placement)
this.$element.trigger('shown.bs.'+this.type)}}
Tooltip.prototype.applyPlacement=function(offset,placement){var replace
var $tip=this.tip()
var width=$tip[0].offsetWidth
var height=$tip[0].offsetHeight
offset.top=offset.top+parseInt($tip.css('margin-top'),10)
offset.left=offset.left+parseInt($tip.css('margin-left'),10)
$tip.offset(offset).addClass('in')
var actualWidth=$tip[0].offsetWidth
var actualHeight=$tip[0].offsetHeight
if(placement=='top'&&actualHeight!=height){replace=true
offset.top=offset.top+height-actualHeight}
if(placement=='bottom'||placement=='top'){var delta=0
if(offset.left<0){delta=offset.left*-2
offset.left=0
$tip.offset(offset)
actualWidth=$tip[0].offsetWidth
actualHeight=$tip[0].offsetHeight}
this.replaceArrow(delta-width+actualWidth,actualWidth,'left')}else{this.replaceArrow(actualHeight-height,actualHeight,'top')}
if(replace)$tip.offset(offset)}
Tooltip.prototype.replaceArrow=function(delta,dimension,position){this.arrow().css(position,delta?(50*(1-delta/dimension)+"%"):'')}
Tooltip.prototype.setContent=function(){var $tip=this.tip()
var title=this.getTitle()
$tip.find('.tooltip-inner')[this.options.html?'html':'text'](title)
$tip.removeClass('fade in top bottom left right')}
Tooltip.prototype.hide=function(){var that=this
var $tip=this.tip()
var e=$.Event('hide.bs.'+this.type)
function complete(){$tip.detach()}
this.$element.trigger(e)
if(e.isDefaultPrevented())return
$tip.removeClass('in')
$.support.transition&&this.$tip.hasClass('fade')?$tip.one($.support.transition.end,complete).emulateTransitionEnd(150):complete()
this.$element.trigger('hidden.bs.'+this.type)
return this}
Tooltip.prototype.fixTitle=function(){var $e=this.$element
if($e.attr('title')||typeof($e.attr('data-original-title'))!='string'){$e.attr('data-original-title',$e.attr('title')||'').attr('title','')}}
Tooltip.prototype.hasContent=function(){return this.getTitle()}
Tooltip.prototype.getPosition=function(){var el=this.$element[0]
return $.extend({},(typeof el.getBoundingClientRect=='function')?el.getBoundingClientRect():{width:el.offsetWidth,height:el.offsetHeight},this.$element.offset())}
Tooltip.prototype.getTitle=function(){var title
var $e=this.$element
var o=this.options
title=$e.attr('data-original-title')||(typeof o.title=='function'?o.title.call($e[0]):o.title)
return title}
Tooltip.prototype.tip=function(){return this.$tip=this.$tip||$(this.options.template)}
Tooltip.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")}
Tooltip.prototype.validate=function(){if(!this.$element[0].parentNode){this.hide()
this.$element=null
this.options=null}}
Tooltip.prototype.enable=function(){this.enabled=true}
Tooltip.prototype.disable=function(){this.enabled=false}
Tooltip.prototype.toggleEnabled=function(){this.enabled=!this.enabled}
Tooltip.prototype.toggle=function(e){var self=e?$(e.currentTarget)[this.type](this._options).data('bs.'+this.type):this
self.tip().hasClass('in')?self.leave(self):self.enter(self)}
Tooltip.prototype.destroy=function(){this.hide().$element.off('.'+this.type).removeData('bs.'+this.type)}
var old=$.fn.tooltip
$.fn.tooltip=function(option){return this.each(function(){var $this=$(this)
var data=$this.data('bs.tooltip')
var options=typeof option=='object'&&option
if(!data)$this.data('bs.tooltip',(data=new Tooltip(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.tooltip.Constructor=Tooltip
$.fn.tooltip.noConflict=function(){$.fn.tooltip=old
return this}}(window.jQuery);
+function($){"use strict";function transitionEnd(){var el=document.createElement('bootstrap')
var transEndEventNames={'WebkitTransition':'webkitTransitionEnd','MozTransition':'transitionend','OTransition':'oTransitionEnd otransitionend','transition':'transitionend'}
for(var name in transEndEventNames){if(el.style[name]!==undefined){return{end:transEndEventNames[name]}}}}
$.fn.emulateTransitionEnd=function(duration){var called=false,$el=this
$(this).one($.support.transition.end,function(){called=true})
var callback=function(){if(!called)$($el).trigger($.support.transition.end)}
setTimeout(callback,duration)
return this}
$(function(){$.support.transition=transitionEnd()})}(window.jQuery);
!function($){"use strict";var Affix=function(element,options){this.options=$.extend({},$.fn.affix.defaults,options)
this.$window=$(window).on('scroll.affix.data-api',$.proxy(this.checkPosition,this)).on('click.affix.data-api',$.proxy(function(){setTimeout($.proxy(this.checkPosition,this),1)},this))
this.$element=$(element)
this.checkPosition()}
Affix.prototype.checkPosition=function(){if(!this.$element.is(':visible'))return
var scrollHeight=$(document).height(),scrollTop=this.$window.scrollTop(),position=this.$element.offset(),offset=this.options.offset,offsetBottom=offset.bottom,offsetTop=offset.top,reset='affix affix-top affix-bottom',affix
if(typeof offset!='object')offsetBottom=offsetTop=offset
if(typeof offsetTop=='function')offsetTop=offset.top()
if(typeof offsetBottom=='function')offsetBottom=offset.bottom()
affix=this.unpin!=null&&(scrollTop+this.unpin<=position.top)?false:offsetBottom!=null&&(position.top+this.$element.height()>=scrollHeight-offsetBottom)?'bottom':offsetTop!=null&&scrollTop<=offsetTop?'top':false
if(this.affixed===affix)return
this.affixed=affix
this.unpin=affix=='bottom'?position.top-scrollTop:null
this.$element.removeClass(reset).addClass('affix'+(affix?'-'+affix:''))}
var old=$.fn.affix
$.fn.affix=function(option){return this.each(function(){var $this=$(this),data=$this.data('affix'),options=typeof option=='object'&&option
if(!data)$this.data('affix',(data=new Affix(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.affix.Constructor=Affix
$.fn.affix.defaults={offset:0}
$.fn.affix.noConflict=function(){$.fn.affix=old
return this}
$(window).on('load',function(){$('[data-spy="affix"]').each(function(){var $spy=$(this),data=$spy.data()
data.offset=data.offset||{}
data.offsetBottom&&(data.offset.bottom=data.offsetBottom)
data.offsetTop&&(data.offset.top=data.offsetTop)
$spy.affix(data)})})}(window.jQuery);
!function($){"use strict";var dismiss='[data-dismiss="alert"]',Alert=function(el){$(el).on('click',dismiss,this.close)}
Alert.prototype.close=function(e){var $this=$(this),selector=$this.attr('data-target'),$parent
if(!selector){selector=$this.attr('href')
selector=selector&&selector.replace(/.*(?=#[^\s]*$)/,'')}
$parent=$(selector)
e&&e.preventDefault()
$parent.length||($parent=$this.hasClass('alert')?$this:$this.parent())
$parent.trigger(e=$.Event('close'))
if(e.isDefaultPrevented())return
$parent.removeClass('in')
function removeElement(){$parent.trigger('closed').remove()}
$.support.transition&&$parent.hasClass('fade')?$parent.on($.support.transition.end,removeElement):removeElement()}
var old=$.fn.alert
$.fn.alert=function(option){return this.each(function(){var $this=$(this),data=$this.data('alert')
if(!data)$this.data('alert',(data=new Alert(this)))
if(typeof option=='string')data[option].call($this)})}
$.fn.alert.Constructor=Alert
$.fn.alert.noConflict=function(){$.fn.alert=old
return this}
$(document).on('click.alert.data-api',dismiss,Alert.prototype.close)}(window.jQuery);
!function($){"use strict";var Button=function(element,options){this.$element=$(element)
this.options=$.extend({},$.fn.button.defaults,options)}
Button.prototype.setState=function(state){var d='disabled',$el=this.$element,data=$el.data(),val=$el.is('input')?'val':'html'
state=state+'Text'
data.resetText||$el.data('resetText',$el[val]())
$el[val](data[state]||this.options[state])
setTimeout(function(){state=='loadingText'?$el.addClass(d).attr(d,d):$el.removeClass(d).removeAttr(d)},0)}
Button.prototype.toggle=function(){var $parent=this.$element.closest('[data-toggle="buttons-radio"]')
$parent&&$parent.find('.active').removeClass('active')
this.$element.toggleClass('active')}
var old=$.fn.button
$.fn.button=function(option){return this.each(function(){var $this=$(this),data=$this.data('button'),options=typeof option=='object'&&option
if(!data)$this.data('button',(data=new Button(this,options)))
if(option=='toggle')data.toggle()
else if(option)data.setState(option)})}
$.fn.button.defaults={loadingText:'loading...'}
$.fn.button.Constructor=Button
$.fn.button.noConflict=function(){$.fn.button=old
return this}
$(document).on('click.button.data-api','[data-toggle^=button]',function(e){var $btn=$(e.target)
if(!$btn.hasClass('btn'))$btn=$btn.closest('.btn')
$btn.button('toggle')})}(window.jQuery);
!function($){"use strict";var Carousel=function(element,options){this.$element=$(element)
this.$indicators=this.$element.find('.carousel-indicators')
this.options=options
this.options.pause=='hover'&&this.$element.on('mouseenter',$.proxy(this.pause,this)).on('mouseleave',$.proxy(this.cycle,this))}
Carousel.prototype={cycle:function(e){if(!e)this.paused=false
if(this.interval)clearInterval(this.interval);this.options.interval&&!this.paused&&(this.interval=setInterval($.proxy(this.next,this),this.options.interval))
return this},getActiveIndex:function(){this.$active=this.$element.find('.item.active')
this.$items=this.$active.parent().children()
return this.$items.index(this.$active)},to:function(pos){var activeIndex=this.getActiveIndex(),that=this
if(pos>(this.$items.length-1)||pos<0)return
if(this.sliding){return this.$element.one('slid',function(){that.to(pos)})}
if(activeIndex==pos){return this.pause().cycle()}
return this.slide(pos>activeIndex?'next':'prev',$(this.$items[pos]))},pause:function(e){if(!e)this.paused=true
if(this.$element.find('.next, .prev').length&&$.support.transition.end){this.$element.trigger($.support.transition.end)
this.cycle(true)}
clearInterval(this.interval)
this.interval=null
return this},next:function(){if(this.sliding)return
return this.slide('next')},prev:function(){if(this.sliding)return
return this.slide('prev')},slide:function(type,next){var $active=this.$element.find('.item.active'),$next=next||$active[type](),isCycling=this.interval,direction=type=='next'?'left':'right',fallback=type=='next'?'first':'last',that=this,e
this.sliding=true
isCycling&&this.pause()
$next=$next.length?$next:this.$element.find('.item')[fallback]()
e=$.Event('slide',{relatedTarget:$next[0],direction:direction})
if($next.hasClass('active'))return
if(this.$indicators.length){this.$indicators.find('.active').removeClass('active')
this.$element.one('slid',function(){var $nextIndicator=$(that.$indicators.children()[that.getActiveIndex()])
$nextIndicator&&$nextIndicator.addClass('active')})}
if($.support.transition&&this.$element.hasClass('slide')){this.$element.trigger(e)
if(e.isDefaultPrevented())return
$next.addClass(type)
$next[0].offsetWidth
$active.addClass(direction)
$next.addClass(direction)
this.$element.one($.support.transition.end,function(){$next.removeClass([type,direction].join(' ')).addClass('active')
$active.removeClass(['active',direction].join(' '))
that.sliding=false
setTimeout(function(){that.$element.trigger('slid')},0)})}else{this.$element.trigger(e)
if(e.isDefaultPrevented())return
$active.removeClass('active')
$next.addClass('active')
this.sliding=false
this.$element.trigger('slid')}
isCycling&&this.cycle()
return this}}
var old=$.fn.carousel
$.fn.carousel=function(option){return this.each(function(){var $this=$(this),data=$this.data('carousel'),options=$.extend({},$.fn.carousel.defaults,typeof option=='object'&&option),action=typeof option=='string'?option:options.slide
if(!data)$this.data('carousel',(data=new Carousel(this,options)))
if(typeof option=='number')data.to(option)
else if(action)data[action]()
else if(options.interval)data.pause().cycle()})}
$.fn.carousel.defaults={interval:5000,pause:'hover'}
$.fn.carousel.Constructor=Carousel
$.fn.carousel.noConflict=function(){$.fn.carousel=old
return this}
$(document).on('click.carousel.data-api','[data-slide], [data-slide-to]',function(e){var $this=$(this),href,$target=$($this.attr('data-target')||(href=$this.attr('href'))&&href.replace(/.*(?=#[^\s]+$)/,'')),options=$.extend({},$target.data(),$this.data()),slideIndex
$target.carousel(options)
if(slideIndex=$this.attr('data-slide-to')){$target.data('carousel').pause().to(slideIndex).cycle()}
e.preventDefault()})}(window.jQuery);
!function($){"use strict";var Collapse=function(element,options){this.$element=$(element)
this.options=$.extend({},$.fn.collapse.defaults,options)
if(this.options.parent){this.$parent=$(this.options.parent)}
this.options.toggle&&this.toggle()}
Collapse.prototype={constructor:Collapse,dimension:function(){var hasWidth=this.$element.hasClass('width')
return hasWidth?'width':'height'},show:function(){var dimension,scroll,actives,hasData
if(this.transitioning||this.$element.hasClass('in'))return
dimension=this.dimension()
scroll=$.camelCase(['scroll',dimension].join('-'))
actives=this.$parent&&this.$parent.find('> .accordion-group > .in')
if(actives&&actives.length){hasData=actives.data('collapse')
if(hasData&&hasData.transitioning)return
actives.collapse('hide')
hasData||actives.data('collapse',null)}
this.$element[dimension](0)
this.transition('addClass',$.Event('show'),'shown')
$.support.transition&&this.$element[dimension](this.$element[0][scroll])},hide:function(){var dimension
if(this.transitioning||!this.$element.hasClass('in'))return
dimension=this.dimension()
this.reset(this.$element[dimension]())
this.transition('removeClass',$.Event('hide'),'hidden')
this.$element[dimension](0)},reset:function(size){var dimension=this.dimension()
this.$element.removeClass('collapse')
[dimension](size||'auto')
[0].offsetWidth
this.$element[size!==null?'addClass':'removeClass']('collapse')
return this},transition:function(method,startEvent,completeEvent){var that=this,complete=function(){if(startEvent.type=='show')that.reset()
that.transitioning=0
that.$element.trigger(completeEvent)}
this.$element.trigger(startEvent)
if(startEvent.isDefaultPrevented())return
this.transitioning=1
this.$element[method]('in')
$.support.transition&&this.$element.hasClass('collapse')?this.$element.one($.support.transition.end,complete):complete()},toggle:function(){this[this.$element.hasClass('in')?'hide':'show']()}}
var old=$.fn.collapse
$.fn.collapse=function(option){return this.each(function(){var $this=$(this),data=$this.data('collapse'),options=$.extend({},$.fn.collapse.defaults,$this.data(),typeof option=='object'&&option)
if(!data)$this.data('collapse',(data=new Collapse(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.collapse.defaults={toggle:true}
$.fn.collapse.Constructor=Collapse
$.fn.collapse.noConflict=function(){$.fn.collapse=old
return this}
$(document).on('click.collapse.data-api','[data-toggle=collapse]',function(e){var $this=$(this),href,target=$this.attr('data-target')||e.preventDefault()||(href=$this.attr('href'))&&href.replace(/.*(?=#[^\s]+$)/,''),option=$(target).data('collapse')?'toggle':$this.data()
$this[$(target).hasClass('in')?'addClass':'removeClass']('collapsed')
$(target).collapse(option)})}(window.jQuery);
!function($){"use strict";var toggle='[data-toggle=dropdown]',Dropdown=function(element){var $el=$(element).on('click.dropdown.data-api',this.toggle)
$('html').on('click.dropdown.data-api',function(){$el.parent().removeClass('open')})}
Dropdown.prototype={constructor:Dropdown,toggle:function(e){var $this=$(this),$parent,isActive
if($this.is('.disabled, :disabled'))return
$parent=getParent($this)
isActive=$parent.hasClass('open')
clearMenus()
if(!isActive){if('ontouchstart'in document.documentElement){$('<div class="dropdown-backdrop"/>').insertBefore($(this)).on('click',clearMenus)}
$parent.toggleClass('open')}
$this.focus()
return false},keydown:function(e){var $this,$items,$active,$parent,isActive,index
if(!/(38|40|27)/.test(e.keyCode))return
$this=$(this)
e.preventDefault()
e.stopPropagation()
if($this.is('.disabled, :disabled'))return
$parent=getParent($this)
isActive=$parent.hasClass('open')
if(!isActive||(isActive&&e.keyCode==27)){if(e.which==27)$parent.find(toggle).focus()
return $this.click()}
$items=$('[role=menu] li:not(.divider):visible a',$parent)
if(!$items.length)return
index=$items.index($items.filter(':focus'))
if(e.keyCode==38&&index>0)index--
if(e.keyCode==40&&index<$items.length-1)index++
if(!~index)index=0
$items.eq(index).focus()}}
function clearMenus(){$('.dropdown-backdrop').remove()
$(toggle).each(function(){getParent($(this)).removeClass('open')})}
function getParent($this){var selector=$this.attr('data-target'),$parent
if(!selector){selector=$this.attr('href')
selector=selector&&/#/.test(selector)&&selector.replace(/.*(?=#[^\s]*$)/,'')}
$parent=selector&&$(selector)
if(!$parent||!$parent.length)$parent=$this.parent()
return $parent}
var old=$.fn.dropdown
$.fn.dropdown=function(option){return this.each(function(){var $this=$(this),data=$this.data('dropdown')
if(!data)$this.data('dropdown',(data=new Dropdown(this)))
if(typeof option=='string')data[option].call($this)})}
$.fn.dropdown.Constructor=Dropdown
$.fn.dropdown.noConflict=function(){$.fn.dropdown=old
return this}
$(document).on('click.dropdown.data-api',clearMenus).on('click.dropdown.data-api','.dropdown form',function(e){e.stopPropagation()}).on('click.dropdown.data-api',toggle,Dropdown.prototype.toggle).on('keydown.dropdown.data-api',toggle+', [role=menu]',Dropdown.prototype.keydown)}(window.jQuery);
!function($){"use strict";var Tooltip=function(element,options){this.init('tooltip',element,options)}
Tooltip.prototype={constructor:Tooltip,init:function(type,element,options){var eventIn,eventOut,triggers,trigger,i
this.type=type
this.$element=$(element)
this.options=this.getOptions(options)
this.enabled=true
triggers=this.options.trigger.split(' ')
for(i=triggers.length;i--;){trigger=triggers[i]
if(trigger=='click'){this.$element.on('click.'+this.type,this.options.selector,$.proxy(this.toggle,this))}else if(trigger!='manual'){eventIn=trigger=='hover'?'mouseenter':'focus'
eventOut=trigger=='hover'?'mouseleave':'blur'
this.$element.on(eventIn+'.'+this.type,this.options.selector,$.proxy(this.enter,this))
this.$element.on(eventOut+'.'+this.type,this.options.selector,$.proxy(this.leave,this))}}
this.options.selector?(this._options=$.extend({},this.options,{trigger:'manual',selector:''})):this.fixTitle()},getOptions:function(options){options=$.extend({},$.fn[this.type].defaults,this.$element.data(),options)
if(options.delay&&typeof options.delay=='number'){options.delay={show:options.delay,hide:options.delay}}
return options},enter:function(e){var defaults=$.fn[this.type].defaults,options={},self
this._options&&$.each(this._options,function(key,value){if(defaults[key]!=value)options[key]=value},this)
self=$(e.currentTarget)[this.type](options).data(this.type)
if(!self.options.delay||!self.options.delay.show)return self.show()
clearTimeout(this.timeout)
self.hoverState='in'
this.timeout=setTimeout(function(){if(self.hoverState=='in')self.show()},self.options.delay.show)},leave:function(e){var self=$(e.currentTarget)[this.type](this._options).data(this.type)
if(this.timeout)clearTimeout(this.timeout)
if(!self.options.delay||!self.options.delay.hide)return self.hide()
self.hoverState='out'
this.timeout=setTimeout(function(){if(self.hoverState=='out')self.hide()},self.options.delay.hide)},show:function(){var $tip,pos,actualWidth,actualHeight,placement,tp,e=$.Event('show')
if(this.hasContent()&&this.enabled){this.$element.trigger(e)
if(e.isDefaultPrevented())return
$tip=this.tip()
this.setContent()
if(this.options.animation){$tip.addClass('fade')}
placement=typeof this.options.placement=='function'?this.options.placement.call(this,$tip[0],this.$element[0]):this.options.placement
$tip.detach().css({top:0,left:0,display:'block'})
this.options.container?$tip.appendTo(this.options.container):$tip.insertAfter(this.$element)
pos=this.getPosition()
actualWidth=$tip[0].offsetWidth
actualHeight=$tip[0].offsetHeight
switch(placement){case'bottom':tp={top:pos.top+pos.height,left:pos.left+pos.width/2-actualWidth/2}
break
case'top':tp={top:pos.top-actualHeight,left:pos.left+pos.width/2-actualWidth/2}
break
case'left':tp={top:pos.top+pos.height/2-actualHeight/2,left:pos.left-actualWidth}
break
case'right':tp={top:pos.top+pos.height/2-actualHeight/2,left:pos.left+pos.width}
break}
this.applyPlacement(tp,placement)
this.$element.trigger('shown')}},applyPlacement:function(offset,placement){var $tip=this.tip(),width=$tip[0].offsetWidth,height=$tip[0].offsetHeight,actualWidth,actualHeight,delta,replace
$tip.offset(offset).addClass(placement).addClass('in')
actualWidth=$tip[0].offsetWidth
actualHeight=$tip[0].offsetHeight
if(placement=='top'&&actualHeight!=height){offset.top=offset.top+height-actualHeight
replace=true}
if(placement=='bottom'||placement=='top'){delta=0
if(offset.left<0){delta=offset.left*-2
offset.left=0
$tip.offset(offset)
actualWidth=$tip[0].offsetWidth
actualHeight=$tip[0].offsetHeight}
this.replaceArrow(delta-width+actualWidth,actualWidth,'left')}else{this.replaceArrow(actualHeight-height,actualHeight,'top')}
if(replace)$tip.offset(offset)},replaceArrow:function(delta,dimension,position){this.arrow().css(position,delta?(50*(1-delta/dimension)+"%"):'')},setContent:function(){var $tip=this.tip(),title=this.getTitle()
$tip.find('.tooltip-inner')[this.options.html?'html':'text'](title)
$tip.removeClass('fade in top bottom left right')},hide:function(){var that=this,$tip=this.tip(),e=$.Event('hide')
this.$element.trigger(e)
if(e.isDefaultPrevented())return
$tip.removeClass('in')
function removeWithAnimation(){var timeout=setTimeout(function(){$tip.off($.support.transition.end).detach()},500)
$tip.one($.support.transition.end,function(){clearTimeout(timeout)
$tip.detach()})}
$.support.transition&&this.$tip.hasClass('fade')?removeWithAnimation():$tip.detach()
this.$element.trigger('hidden')
return this},fixTitle:function(){var $e=this.$element
if($e.attr('title')||typeof($e.attr('data-original-title'))!='string'){$e.attr('data-original-title',$e.attr('title')||'').attr('title','')}},hasContent:function(){return this.getTitle()},getPosition:function(){var el=this.$element[0]
return $.extend({},(typeof el.getBoundingClientRect=='function')?el.getBoundingClientRect():{width:el.offsetWidth,height:el.offsetHeight},this.$element.offset())},getTitle:function(){var title,$e=this.$element,o=this.options
title=$e.attr('data-original-title')||(typeof o.title=='function'?o.title.call($e[0]):o.title)
return title},tip:function(){return this.$tip=this.$tip||$(this.options.template)},arrow:function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},validate:function(){if(!this.$element[0].parentNode){this.hide()
this.$element=null
this.options=null}},enable:function(){this.enabled=true},disable:function(){this.enabled=false},toggleEnabled:function(){this.enabled=!this.enabled},toggle:function(e){var self=e?$(e.currentTarget)[this.type](this._options).data(this.type):this
self.tip().hasClass('in')?self.hide():self.show()},destroy:function(){this.hide().$element.off('.'+this.type).removeData(this.type)}}
var old=$.fn.tooltip
$.fn.tooltip=function(option){return this.each(function(){var $this=$(this),data=$this.data('tooltip'),options=typeof option=='object'&&option
if(!data)$this.data('tooltip',(data=new Tooltip(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.tooltip.Constructor=Tooltip
$.fn.tooltip.defaults={animation:true,placement:'top',selector:false,template:'<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:'hover focus',title:'',delay:0,html:false,container:false}
$.fn.tooltip.noConflict=function(){$.fn.tooltip=old
return this}}(window.jQuery);
!function($){"use strict";var Popover=function(element,options){this.init('popover',element,options)}
Popover.prototype=$.extend({},$.fn.tooltip.Constructor.prototype,{constructor:Popover,setContent:function(){var $tip=this.tip(),title=this.getTitle(),content=this.getContent()
$tip.find('.popover-title')[this.options.html?'html':'text'](title)
$tip.find('.popover-content')[this.options.html?'html':'text'](content)
$tip.removeClass('fade top bottom left right in')},hasContent:function(){return this.getTitle()||this.getContent()},getContent:function(){var content,$e=this.$element,o=this.options
content=(typeof o.content=='function'?o.content.call($e[0]):o.content)||$e.attr('data-content')
return content},tip:function(){if(!this.$tip){this.$tip=$(this.options.template)}
return this.$tip},destroy:function(){this.hide().$element.off('.'+this.type).removeData(this.type)}})
var old=$.fn.popover
$.fn.popover=function(option){return this.each(function(){var $this=$(this),data=$this.data('popover'),options=typeof option=='object'&&option
if(!data)$this.data('popover',(data=new Popover(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.popover.Constructor=Popover
$.fn.popover.defaults=$.extend({},$.fn.tooltip.defaults,{placement:'right',trigger:'click',content:'',template:'<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'})
$.fn.popover.noConflict=function(){$.fn.popover=old
return this}}(window.jQuery);
!function($){"use strict";function ScrollSpy(element,options){var process=$.proxy(this.process,this),$element=$(element).is('body')?$(window):$(element),href
this.options=$.extend({},$.fn.scrollspy.defaults,options)
this.$scrollElement=$element.on('scroll.scroll-spy.data-api',process)
this.selector=(this.options.target||((href=$(element).attr('href'))&&href.replace(/.*(?=#[^\s]+$)/,''))||'')+' .nav li > a'
this.$body=$('body')
this.refresh()
this.process()}
ScrollSpy.prototype={constructor:ScrollSpy,refresh:function(){var self=this,$targets
this.offsets=$([])
this.targets=$([])
$targets=this.$body.find(this.selector).map(function(){var $el=$(this),href=$el.data('target')||$el.attr('href'),$href=/^#\w/.test(href)&&$(href)
return($href&&$href.length&&[[$href.position().top+(!$.isWindow(self.$scrollElement.get(0))&&self.$scrollElement.scrollTop()),href]])||null}).sort(function(a,b){return a[0]-b[0]}).each(function(){self.offsets.push(this[0])
self.targets.push(this[1])})},process:function(){var scrollTop=this.$scrollElement.scrollTop()+this.options.offset,scrollHeight=this.$scrollElement[0].scrollHeight||this.$body[0].scrollHeight,maxScroll=scrollHeight-this.$scrollElement.height(),offsets=this.offsets,targets=this.targets,activeTarget=this.activeTarget,i
if(scrollTop>=maxScroll){return activeTarget!=(i=targets.last()[0])&&this.activate(i)}
for(i=offsets.length;i--;){activeTarget!=targets[i]&&scrollTop>=offsets[i]&&(!offsets[i+1]||scrollTop<=offsets[i+1])&&this.activate(targets[i])}},activate:function(target){var active,selector
this.activeTarget=target
$(this.selector).parent('.active').removeClass('active')
selector=this.selector
+'[data-target="'+target+'"],'
+this.selector+'[href="'+target+'"]'
active=$(selector).parent('li').addClass('active')
if(active.parent('.dropdown-menu').length){active=active.closest('li.dropdown').addClass('active')}
active.trigger('activate')}}
var old=$.fn.scrollspy
$.fn.scrollspy=function(option){return this.each(function(){var $this=$(this),data=$this.data('scrollspy'),options=typeof option=='object'&&option
if(!data)$this.data('scrollspy',(data=new ScrollSpy(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.scrollspy.Constructor=ScrollSpy
$.fn.scrollspy.defaults={offset:10}
$.fn.scrollspy.noConflict=function(){$.fn.scrollspy=old
return this}
$(window).on('load',function(){$('[data-spy="scroll"]').each(function(){var $spy=$(this)
$spy.scrollspy($spy.data())})})}(window.jQuery);
!function($){"use strict";var Tab=function(element){this.element=$(element)}
Tab.prototype={constructor:Tab,show:function(){var $this=this.element,$ul=$this.closest('ul:not(.dropdown-menu)'),selector=$this.attr('data-target'),previous,$target,e
if(!selector){selector=$this.attr('href')
selector=selector&&selector.replace(/.*(?=#[^\s]*$)/,'')}
if($this.parent('li').hasClass('active'))return
previous=$ul.find('.active:last a')[0]
e=$.Event('show',{relatedTarget:previous})
$this.trigger(e)
if(e.isDefaultPrevented())return
$target=$(selector)
this.activate($this.parent('li'),$ul)
this.activate($target,$target.parent(),function(){$this.trigger({type:'shown',relatedTarget:previous})})},activate:function(element,container,callback){var $active=container.find('> .active'),transition=callback&&$.support.transition&&$active.hasClass('fade')
function next(){$active.removeClass('active').find('> .dropdown-menu > .active').removeClass('active')
element.addClass('active')
if(transition){element[0].offsetWidth
element.addClass('in')}else{element.removeClass('fade')}
if(element.parent('.dropdown-menu')){element.closest('li.dropdown').addClass('active')}
callback&&callback()}
transition?$active.one($.support.transition.end,next):next()
$active.removeClass('in')}}
var old=$.fn.tab
$.fn.tab=function(option){return this.each(function(){var $this=$(this),data=$this.data('tab')
if(!data)$this.data('tab',(data=new Tab(this)))
if(typeof option=='string')data[option]()})}
$.fn.tab.Constructor=Tab
$.fn.tab.noConflict=function(){$.fn.tab=old
return this}
$(document).on('click.tab.data-api','[data-toggle="tab"], [data-toggle="pill"]',function(e){e.preventDefault()
$(this).tab('show')})}(window.jQuery);
!function($){"use strict";$(function(){$.support.transition=(function(){var transitionEnd=(function(){var el=document.createElement('bootstrap'),transEndEventNames={'WebkitTransition':'webkitTransitionEnd','MozTransition':'transitionend','OTransition':'oTransitionEnd otransitionend','transition':'transitionend'},name
for(name in transEndEventNames){if(el.style[name]!==undefined){return transEndEventNames[name]}}}())
return transitionEnd&&{end:transitionEnd}})()})}(window.jQuery);
!function($){"use strict";var Typeahead=function(element,options){this.$element=$(element)
this.options=$.extend({},$.fn.typeahead.defaults,options)
this.matcher=this.options.matcher||this.matcher
this.sorter=this.options.sorter||this.sorter
this.highlighter=this.options.highlighter||this.highlighter
this.updater=this.options.updater||this.updater
this.source=this.options.source
this.$menu=$(this.options.menu)
this.shown=false
this.listen()}
Typeahead.prototype={constructor:Typeahead,select:function(){var val=this.$menu.find('.active').attr('data-value')
this.$element.val(this.updater(val)).change()
return this.hide()},updater:function(item){return item},show:function(){var pos=$.extend({},this.$element.position(),{height:this.$element[0].offsetHeight})
this.$menu.insertAfter(this.$element).css({top:pos.top+pos.height,left:pos.left}).show()
this.shown=true
return this},hide:function(){this.$menu.hide()
this.shown=false
return this},lookup:function(event){var items
this.query=this.$element.val()
if(!this.query||this.query.length<this.options.minLength){return this.shown?this.hide():this}
items=$.isFunction(this.source)?this.source(this.query,$.proxy(this.process,this)):this.source
return items?this.process(items):this},process:function(items){var that=this
items=$.grep(items,function(item){return that.matcher(item)})
items=this.sorter(items)
if(!items.length){return this.shown?this.hide():this}
return this.render(items.slice(0,this.options.items)).show()},matcher:function(item){return~item.toLowerCase().indexOf(this.query.toLowerCase())},sorter:function(items){var beginswith=[],caseSensitive=[],caseInsensitive=[],item
while(item=items.shift()){if(!item.toLowerCase().indexOf(this.query.toLowerCase()))beginswith.push(item)
else if(~item.indexOf(this.query))caseSensitive.push(item)
else caseInsensitive.push(item)}
return beginswith.concat(caseSensitive,caseInsensitive)},highlighter:function(item){var query=this.query.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,'\\$&')
return item.replace(new RegExp('('+query+')','ig'),function($1,match){return'<strong>'+match+'</strong>'})},render:function(items){var that=this
items=$(items).map(function(i,item){i=$(that.options.item).attr('data-value',item)
i.find('a').html(that.highlighter(item))
return i[0]})
items.first().addClass('active')
this.$menu.html(items)
return this},next:function(event){var active=this.$menu.find('.active').removeClass('active'),next=active.next()
if(!next.length){next=$(this.$menu.find('li')[0])}
next.addClass('active')},prev:function(event){var active=this.$menu.find('.active').removeClass('active'),prev=active.prev()
if(!prev.length){prev=this.$menu.find('li').last()}
prev.addClass('active')},listen:function(){this.$element.on('focus',$.proxy(this.focus,this)).on('blur',$.proxy(this.blur,this)).on('keypress',$.proxy(this.keypress,this)).on('keyup',$.proxy(this.keyup,this))
if(this.eventSupported('keydown')){this.$element.on('keydown',$.proxy(this.keydown,this))}
this.$menu.on('click',$.proxy(this.click,this)).on('mouseenter','li',$.proxy(this.mouseenter,this)).on('mouseleave','li',$.proxy(this.mouseleave,this))},eventSupported:function(eventName){var isSupported=eventName in this.$element
if(!isSupported){this.$element.setAttribute(eventName,'return;')
isSupported=typeof this.$element[eventName]==='function'}
return isSupported},move:function(e){if(!this.shown)return
switch(e.keyCode){case 9:case 13:case 27:e.preventDefault()
break
case 38:e.preventDefault()
this.prev()
break
case 40:e.preventDefault()
this.next()
break}
e.stopPropagation()},keydown:function(e){this.suppressKeyPressRepeat=~$.inArray(e.keyCode,[40,38,9,13,27])
this.move(e)},keypress:function(e){if(this.suppressKeyPressRepeat)return
this.move(e)},keyup:function(e){switch(e.keyCode){case 40:case 38:case 16:case 17:case 18:break
case 9:case 13:if(!this.shown)return
this.select()
break
case 27:if(!this.shown)return
this.hide()
break
default:this.lookup()}
e.stopPropagation()
e.preventDefault()},focus:function(e){this.focused=true},blur:function(e){this.focused=false
if(!this.mousedover&&this.shown)this.hide()},click:function(e){e.stopPropagation()
e.preventDefault()
this.select()
this.$element.focus()},mouseenter:function(e){this.mousedover=true
this.$menu.find('.active').removeClass('active')
$(e.currentTarget).addClass('active')},mouseleave:function(e){this.mousedover=false
if(!this.focused&&this.shown)this.hide()}}
var old=$.fn.typeahead
$.fn.typeahead=function(option){return this.each(function(){var $this=$(this),data=$this.data('typeahead'),options=typeof option=='object'&&option
if(!data)$this.data('typeahead',(data=new Typeahead(this,options)))
if(typeof option=='string')data[option]()})}
$.fn.typeahead.defaults={source:[],items:8,menu:'<ul class="typeahead dropdown-menu"></ul>',item:'<li><a href="#"></a></li>',minLength:1}
$.fn.typeahead.Constructor=Typeahead
$.fn.typeahead.noConflict=function(){$.fn.typeahead=old
return this}
$(document).on('focus.typeahead.data-api','[data-provide="typeahead"]',function(e){var $this=$(this)
if($this.data('typeahead'))return
$this.typeahead($this.data())})}(window.jQuery);
var wysihtml5={version:"0.3.0",commands:{},dom:{},quirks:{},toolbar:{},lang:{},selection:{},views:{},INVISIBLE_SPACE:"\uFEFF",EMPTY_FUNCTION:function(){},ELEMENT_NODE:1,TEXT_NODE:3,BACKSPACE_KEY:8,ENTER_KEY:13,ESCAPE_KEY:27,SPACE_KEY:32,DELETE_KEY:46};window['rangy']=(function(){var OBJECT="object",FUNCTION="function",UNDEFINED="undefined";var domRangeProperties=["startContainer","startOffset","endContainer","endOffset","collapsed","commonAncestorContainer","START_TO_START","START_TO_END","END_TO_START","END_TO_END"];var domRangeMethods=["setStart","setStartBefore","setStartAfter","setEnd","setEndBefore","setEndAfter","collapse","selectNode","selectNodeContents","compareBoundaryPoints","deleteContents","extractContents","cloneContents","insertNode","surroundContents","cloneRange","toString","detach"];var textRangeProperties=["boundingHeight","boundingLeft","boundingTop","boundingWidth","htmlText","text"];var textRangeMethods=["collapse","compareEndPoints","duplicate","getBookmark","moveToBookmark","moveToElementText","parentElement","pasteHTML","select","setEndPoint","getBoundingClientRect"];function isHostMethod(o,p){var t=typeof o[p];return t==FUNCTION||(!!(t==OBJECT&&o[p]))||t=="unknown";}
function isHostObject(o,p){return!!(typeof o[p]==OBJECT&&o[p]);}
function isHostProperty(o,p){return typeof o[p]!=UNDEFINED;}
function createMultiplePropertyTest(testFunc){return function(o,props){var i=props.length;while(i--){if(!testFunc(o,props[i])){return false;}}
return true;};}
var areHostMethods=createMultiplePropertyTest(isHostMethod);var areHostObjects=createMultiplePropertyTest(isHostObject);var areHostProperties=createMultiplePropertyTest(isHostProperty);function isTextRange(range){return range&&areHostMethods(range,textRangeMethods)&&areHostProperties(range,textRangeProperties);}
var api={version:"1.2.2",initialized:false,supported:true,util:{isHostMethod:isHostMethod,isHostObject:isHostObject,isHostProperty:isHostProperty,areHostMethods:areHostMethods,areHostObjects:areHostObjects,areHostProperties:areHostProperties,isTextRange:isTextRange},features:{},modules:{},config:{alertOnWarn:false,preferTextRange:false}};function fail(reason){window.alert("Rangy not supported in your browser. Reason: "+reason);api.initialized=true;api.supported=false;}
api.fail=fail;function warn(msg){var warningMessage="Rangy warning: "+msg;if(api.config.alertOnWarn){window.alert(warningMessage);}else if(typeof window.console!=UNDEFINED&&typeof window.console.log!=UNDEFINED){window.console.log(warningMessage);}}
api.warn=warn;if({}.hasOwnProperty){api.util.extend=function(o,props){for(var i in props){if(props.hasOwnProperty(i)){o[i]=props[i];}}};}else{fail("hasOwnProperty not supported");}
var initListeners=[];var moduleInitializers=[];function init(){if(api.initialized){return;}
var testRange;var implementsDomRange=false,implementsTextRange=false;if(isHostMethod(document,"createRange")){testRange=document.createRange();if(areHostMethods(testRange,domRangeMethods)&&areHostProperties(testRange,domRangeProperties)){implementsDomRange=true;}
testRange.detach();}
var body=isHostObject(document,"body")?document.body:document.getElementsByTagName("body")[0];if(body&&isHostMethod(body,"createTextRange")){testRange=body.createTextRange();if(isTextRange(testRange)){implementsTextRange=true;}}
if(!implementsDomRange&&!implementsTextRange){fail("Neither Range nor TextRange are implemented");}
api.initialized=true;api.features={implementsDomRange:implementsDomRange,implementsTextRange:implementsTextRange};var allListeners=moduleInitializers.concat(initListeners);for(var i=0,len=allListeners.length;i<len;++i){try{allListeners[i](api);}catch(ex){if(isHostObject(window,"console")&&isHostMethod(window.console,"log")){window.console.log("Init listener threw an exception. Continuing.",ex);}}}}
api.init=init;api.addInitListener=function(listener){if(api.initialized){listener(api);}else{initListeners.push(listener);}};var createMissingNativeApiListeners=[];api.addCreateMissingNativeApiListener=function(listener){createMissingNativeApiListeners.push(listener);};function createMissingNativeApi(win){win=win||window;init();for(var i=0,len=createMissingNativeApiListeners.length;i<len;++i){createMissingNativeApiListeners[i](win);}}
api.createMissingNativeApi=createMissingNativeApi;function Module(name){this.name=name;this.initialized=false;this.supported=false;}
Module.prototype.fail=function(reason){this.initialized=true;this.supported=false;throw new Error("Module '"+this.name+"' failed to load: "+reason);};Module.prototype.warn=function(msg){api.warn("Module "+this.name+": "+msg);};Module.prototype.createError=function(msg){return new Error("Error in Rangy "+this.name+" module: "+msg);};api.createModule=function(name,initFunc){var module=new Module(name);api.modules[name]=module;moduleInitializers.push(function(api){initFunc(api,module);module.initialized=true;module.supported=true;});};api.requireModules=function(modules){for(var i=0,len=modules.length,module,moduleName;i<len;++i){moduleName=modules[i];module=api.modules[moduleName];if(!module||!(module instanceof Module)){throw new Error("Module '"+moduleName+"' not found");}
if(!module.supported){throw new Error("Module '"+moduleName+"' not supported");}}};var docReady=false;var loadHandler=function(e){if(!docReady){docReady=true;if(!api.initialized){init();}}};if(typeof window==UNDEFINED){fail("No window found");return;}
if(typeof document==UNDEFINED){fail("No document found");return;}
if(isHostMethod(document,"addEventListener")){document.addEventListener("DOMContentLoaded",loadHandler,false);}
if(isHostMethod(window,"addEventListener")){window.addEventListener("load",loadHandler,false);}else if(isHostMethod(window,"attachEvent")){window.attachEvent("onload",loadHandler);}else{fail("Window does not have required addEventListener or attachEvent method");}
return api;})();rangy.createModule("DomUtil",function(api,module){var UNDEF="undefined";var util=api.util;if(!util.areHostMethods(document,["createDocumentFragment","createElement","createTextNode"])){module.fail("document missing a Node creation method");}
if(!util.isHostMethod(document,"getElementsByTagName")){module.fail("document missing getElementsByTagName method");}
var el=document.createElement("div");if(!util.areHostMethods(el,["insertBefore","appendChild","cloneNode"]||!util.areHostObjects(el,["previousSibling","nextSibling","childNodes","parentNode"]))){module.fail("Incomplete Element implementation");}
if(!util.isHostProperty(el,"innerHTML")){module.fail("Element is missing innerHTML property");}
var textNode=document.createTextNode("test");if(!util.areHostMethods(textNode,["splitText","deleteData","insertData","appendData","cloneNode"]||!util.areHostObjects(el,["previousSibling","nextSibling","childNodes","parentNode"])||!util.areHostProperties(textNode,["data"]))){module.fail("Incomplete Text Node implementation");}
var arrayContains=function(arr,val){var i=arr.length;while(i--){if(arr[i]===val){return true;}}
return false;};function isHtmlNamespace(node){var ns;return typeof node.namespaceURI==UNDEF||((ns=node.namespaceURI)===null||ns=="http://www.w3.org/1999/xhtml");}
function parentElement(node){var parent=node.parentNode;return(parent.nodeType==1)?parent:null;}
function getNodeIndex(node){var i=0;while((node=node.previousSibling)){i++;}
return i;}
function getNodeLength(node){var childNodes;return isCharacterDataNode(node)?node.length:((childNodes=node.childNodes)?childNodes.length:0);}
function getCommonAncestor(node1,node2){var ancestors=[],n;for(n=node1;n;n=n.parentNode){ancestors.push(n);}
for(n=node2;n;n=n.parentNode){if(arrayContains(ancestors,n)){return n;}}
return null;}
function isAncestorOf(ancestor,descendant,selfIsAncestor){var n=selfIsAncestor?descendant:descendant.parentNode;while(n){if(n===ancestor){return true;}else{n=n.parentNode;}}
return false;}
function getClosestAncestorIn(node,ancestor,selfIsAncestor){var p,n=selfIsAncestor?node:node.parentNode;while(n){p=n.parentNode;if(p===ancestor){return n;}
n=p;}
return null;}
function isCharacterDataNode(node){var t=node.nodeType;return t==3||t==4||t==8;}
function insertAfter(node,precedingNode){var nextNode=precedingNode.nextSibling,parent=precedingNode.parentNode;if(nextNode){parent.insertBefore(node,nextNode);}else{parent.appendChild(node);}
return node;}
function splitDataNode(node,index){var newNode=node.cloneNode(false);newNode.deleteData(0,index);node.deleteData(index,node.length-index);insertAfter(newNode,node);return newNode;}
function getDocument(node){if(node.nodeType==9){return node;}else if(typeof node.ownerDocument!=UNDEF){return node.ownerDocument;}else if(typeof node.document!=UNDEF){return node.document;}else if(node.parentNode){return getDocument(node.parentNode);}else{throw new Error("getDocument: no document found for node");}}
function getWindow(node){var doc=getDocument(node);if(typeof doc.defaultView!=UNDEF){return doc.defaultView;}else if(typeof doc.parentWindow!=UNDEF){return doc.parentWindow;}else{throw new Error("Cannot get a window object for node");}}
function getIframeDocument(iframeEl){if(typeof iframeEl.contentDocument!=UNDEF){return iframeEl.contentDocument;}else if(typeof iframeEl.contentWindow!=UNDEF){return iframeEl.contentWindow.document;}else{throw new Error("getIframeWindow: No Document object found for iframe element");}}
function getIframeWindow(iframeEl){if(typeof iframeEl.contentWindow!=UNDEF){return iframeEl.contentWindow;}else if(typeof iframeEl.contentDocument!=UNDEF){return iframeEl.contentDocument.defaultView;}else{throw new Error("getIframeWindow: No Window object found for iframe element");}}
function getBody(doc){return util.isHostObject(doc,"body")?doc.body:doc.getElementsByTagName("body")[0];}
function getRootContainer(node){var parent;while((parent=node.parentNode)){node=parent;}
return node;}
function comparePoints(nodeA,offsetA,nodeB,offsetB){var nodeC,root,childA,childB,n;if(nodeA==nodeB){return offsetA===offsetB?0:(offsetA<offsetB)?-1:1;}else if((nodeC=getClosestAncestorIn(nodeB,nodeA,true))){return offsetA<=getNodeIndex(nodeC)?-1:1;}else if((nodeC=getClosestAncestorIn(nodeA,nodeB,true))){return getNodeIndex(nodeC)<offsetB?-1:1;}else{root=getCommonAncestor(nodeA,nodeB);childA=(nodeA===root)?root:getClosestAncestorIn(nodeA,root,true);childB=(nodeB===root)?root:getClosestAncestorIn(nodeB,root,true);if(childA===childB){throw new Error("comparePoints got to case 4 and childA and childB are the same!");}else{n=root.firstChild;while(n){if(n===childA){return-1;}else if(n===childB){return 1;}
n=n.nextSibling;}
throw new Error("Should not be here!");}}}
function fragmentFromNodeChildren(node){var fragment=getDocument(node).createDocumentFragment(),child;while((child=node.firstChild)){fragment.appendChild(child);}
return fragment;}
function inspectNode(node){if(!node){return"[No node]";}
if(isCharacterDataNode(node)){return'"'+node.data+'"';}else if(node.nodeType==1){var idAttr=node.id?' id="'+node.id+'"':"";return"<"+node.nodeName+idAttr+">["+node.childNodes.length+"]";}else{return node.nodeName;}}
function NodeIterator(root){this.root=root;this._next=root;}
NodeIterator.prototype={_current:null,hasNext:function(){return!!this._next;},next:function(){var n=this._current=this._next;var child,next;if(this._current){child=n.firstChild;if(child){this._next=child;}else{next=null;while((n!==this.root)&&!(next=n.nextSibling)){n=n.parentNode;}
this._next=next;}}
return this._current;},detach:function(){this._current=this._next=this.root=null;}};function createIterator(root){return new NodeIterator(root);}
function DomPosition(node,offset){this.node=node;this.offset=offset;}
DomPosition.prototype={equals:function(pos){return this.node===pos.node&this.offset==pos.offset;},inspect:function(){return"[DomPosition("+inspectNode(this.node)+":"+this.offset+")]";}};function DOMException(codeName){this.code=this[codeName];this.codeName=codeName;this.message="DOMException: "+this.codeName;}
DOMException.prototype={INDEX_SIZE_ERR:1,HIERARCHY_REQUEST_ERR:3,WRONG_DOCUMENT_ERR:4,NO_MODIFICATION_ALLOWED_ERR:7,NOT_FOUND_ERR:8,NOT_SUPPORTED_ERR:9,INVALID_STATE_ERR:11};DOMException.prototype.toString=function(){return this.message;};api.dom={arrayContains:arrayContains,isHtmlNamespace:isHtmlNamespace,parentElement:parentElement,getNodeIndex:getNodeIndex,getNodeLength:getNodeLength,getCommonAncestor:getCommonAncestor,isAncestorOf:isAncestorOf,getClosestAncestorIn:getClosestAncestorIn,isCharacterDataNode:isCharacterDataNode,insertAfter:insertAfter,splitDataNode:splitDataNode,getDocument:getDocument,getWindow:getWindow,getIframeWindow:getIframeWindow,getIframeDocument:getIframeDocument,getBody:getBody,getRootContainer:getRootContainer,comparePoints:comparePoints,inspectNode:inspectNode,fragmentFromNodeChildren:fragmentFromNodeChildren,createIterator:createIterator,DomPosition:DomPosition};api.DOMException=DOMException;});rangy.createModule("DomRange",function(api,module){api.requireModules(["DomUtil"]);var dom=api.dom;var DomPosition=dom.DomPosition;var DOMException=api.DOMException;function isNonTextPartiallySelected(node,range){return(node.nodeType!=3)&&(dom.isAncestorOf(node,range.startContainer,true)||dom.isAncestorOf(node,range.endContainer,true));}
function getRangeDocument(range){return dom.getDocument(range.startContainer);}
function dispatchEvent(range,type,args){var listeners=range._listeners[type];if(listeners){for(var i=0,len=listeners.length;i<len;++i){listeners[i].call(range,{target:range,args:args});}}}
function getBoundaryBeforeNode(node){return new DomPosition(node.parentNode,dom.getNodeIndex(node));}
function getBoundaryAfterNode(node){return new DomPosition(node.parentNode,dom.getNodeIndex(node)+1);}
function insertNodeAtPosition(node,n,o){var firstNodeInserted=node.nodeType==11?node.firstChild:node;if(dom.isCharacterDataNode(n)){if(o==n.length){dom.insertAfter(node,n);}else{n.parentNode.insertBefore(node,o==0?n:dom.splitDataNode(n,o));}}else if(o>=n.childNodes.length){n.appendChild(node);}else{n.insertBefore(node,n.childNodes[o]);}
return firstNodeInserted;}
function cloneSubtree(iterator){var partiallySelected;for(var node,frag=getRangeDocument(iterator.range).createDocumentFragment(),subIterator;node=iterator.next();){partiallySelected=iterator.isPartiallySelectedSubtree();node=node.cloneNode(!partiallySelected);if(partiallySelected){subIterator=iterator.getSubtreeIterator();node.appendChild(cloneSubtree(subIterator));subIterator.detach(true);}
if(node.nodeType==10){throw new DOMException("HIERARCHY_REQUEST_ERR");}
frag.appendChild(node);}
return frag;}
function iterateSubtree(rangeIterator,func,iteratorState){var it,n;iteratorState=iteratorState||{stop:false};for(var node,subRangeIterator;node=rangeIterator.next();){if(rangeIterator.isPartiallySelectedSubtree()){if(func(node)===false){iteratorState.stop=true;return;}else{subRangeIterator=rangeIterator.getSubtreeIterator();iterateSubtree(subRangeIterator,func,iteratorState);subRangeIterator.detach(true);if(iteratorState.stop){return;}}}else{it=dom.createIterator(node);while((n=it.next())){if(func(n)===false){iteratorState.stop=true;return;}}}}}
function deleteSubtree(iterator){var subIterator;while(iterator.next()){if(iterator.isPartiallySelectedSubtree()){subIterator=iterator.getSubtreeIterator();deleteSubtree(subIterator);subIterator.detach(true);}else{iterator.remove();}}}
function extractSubtree(iterator){for(var node,frag=getRangeDocument(iterator.range).createDocumentFragment(),subIterator;node=iterator.next();){if(iterator.isPartiallySelectedSubtree()){node=node.cloneNode(false);subIterator=iterator.getSubtreeIterator();node.appendChild(extractSubtree(subIterator));subIterator.detach(true);}else{iterator.remove();}
if(node.nodeType==10){throw new DOMException("HIERARCHY_REQUEST_ERR");}
frag.appendChild(node);}
return frag;}
function getNodesInRange(range,nodeTypes,filter){var filterNodeTypes=!!(nodeTypes&&nodeTypes.length),regex;var filterExists=!!filter;if(filterNodeTypes){regex=new RegExp("^("+nodeTypes.join("|")+")$");}
var nodes=[];iterateSubtree(new RangeIterator(range,false),function(node){if((!filterNodeTypes||regex.test(node.nodeType))&&(!filterExists||filter(node))){nodes.push(node);}});return nodes;}
function inspect(range){var name=(typeof range.getName=="undefined")?"Range":range.getName();return"["+name+"("+dom.inspectNode(range.startContainer)+":"+range.startOffset+", "+
dom.inspectNode(range.endContainer)+":"+range.endOffset+")]";}
function RangeIterator(range,clonePartiallySelectedTextNodes){this.range=range;this.clonePartiallySelectedTextNodes=clonePartiallySelectedTextNodes;if(!range.collapsed){this.sc=range.startContainer;this.so=range.startOffset;this.ec=range.endContainer;this.eo=range.endOffset;var root=range.commonAncestorContainer;if(this.sc===this.ec&&dom.isCharacterDataNode(this.sc)){this.isSingleCharacterDataNode=true;this._first=this._last=this._next=this.sc;}else{this._first=this._next=(this.sc===root&&!dom.isCharacterDataNode(this.sc))?this.sc.childNodes[this.so]:dom.getClosestAncestorIn(this.sc,root,true);this._last=(this.ec===root&&!dom.isCharacterDataNode(this.ec))?this.ec.childNodes[this.eo-1]:dom.getClosestAncestorIn(this.ec,root,true);}}}
RangeIterator.prototype={_current:null,_next:null,_first:null,_last:null,isSingleCharacterDataNode:false,reset:function(){this._current=null;this._next=this._first;},hasNext:function(){return!!this._next;},next:function(){var current=this._current=this._next;if(current){this._next=(current!==this._last)?current.nextSibling:null;if(dom.isCharacterDataNode(current)&&this.clonePartiallySelectedTextNodes){if(current===this.ec){(current=current.cloneNode(true)).deleteData(this.eo,current.length-this.eo);}
if(this._current===this.sc){(current=current.cloneNode(true)).deleteData(0,this.so);}}}
return current;},remove:function(){var current=this._current,start,end;if(dom.isCharacterDataNode(current)&&(current===this.sc||current===this.ec)){start=(current===this.sc)?this.so:0;end=(current===this.ec)?this.eo:current.length;if(start!=end){current.deleteData(start,end-start);}}else{if(current.parentNode){current.parentNode.removeChild(current);}else{}}},isPartiallySelectedSubtree:function(){var current=this._current;return isNonTextPartiallySelected(current,this.range);},getSubtreeIterator:function(){var subRange;if(this.isSingleCharacterDataNode){subRange=this.range.cloneRange();subRange.collapse();}else{subRange=new Range(getRangeDocument(this.range));var current=this._current;var startContainer=current,startOffset=0,endContainer=current,endOffset=dom.getNodeLength(current);if(dom.isAncestorOf(current,this.sc,true)){startContainer=this.sc;startOffset=this.so;}
if(dom.isAncestorOf(current,this.ec,true)){endContainer=this.ec;endOffset=this.eo;}
updateBoundaries(subRange,startContainer,startOffset,endContainer,endOffset);}
return new RangeIterator(subRange,this.clonePartiallySelectedTextNodes);},detach:function(detachRange){if(detachRange){this.range.detach();}
this.range=this._current=this._next=this._first=this._last=this.sc=this.so=this.ec=this.eo=null;}};function RangeException(codeName){this.code=this[codeName];this.codeName=codeName;this.message="RangeException: "+this.codeName;}
RangeException.prototype={BAD_BOUNDARYPOINTS_ERR:1,INVALID_NODE_TYPE_ERR:2};RangeException.prototype.toString=function(){return this.message;};function RangeNodeIterator(range,nodeTypes,filter){this.nodes=getNodesInRange(range,nodeTypes,filter);this._next=this.nodes[0];this._position=0;}
RangeNodeIterator.prototype={_current:null,hasNext:function(){return!!this._next;},next:function(){this._current=this._next;this._next=this.nodes[++this._position];return this._current;},detach:function(){this._current=this._next=this.nodes=null;}};var beforeAfterNodeTypes=[1,3,4,5,7,8,10];var rootContainerNodeTypes=[2,9,11];var readonlyNodeTypes=[5,6,10,12];var insertableNodeTypes=[1,3,4,5,7,8,10,11];var surroundNodeTypes=[1,3,4,5,7,8];function createAncestorFinder(nodeTypes){return function(node,selfIsAncestor){var t,n=selfIsAncestor?node:node.parentNode;while(n){t=n.nodeType;if(dom.arrayContains(nodeTypes,t)){return n;}
n=n.parentNode;}
return null;};}
var getRootContainer=dom.getRootContainer;var getDocumentOrFragmentContainer=createAncestorFinder([9,11]);var getReadonlyAncestor=createAncestorFinder(readonlyNodeTypes);var getDocTypeNotationEntityAncestor=createAncestorFinder([6,10,12]);function assertNoDocTypeNotationEntityAncestor(node,allowSelf){if(getDocTypeNotationEntityAncestor(node,allowSelf)){throw new RangeException("INVALID_NODE_TYPE_ERR");}}
function assertNotDetached(range){if(!range.startContainer){throw new DOMException("INVALID_STATE_ERR");}}
function assertValidNodeType(node,invalidTypes){if(!dom.arrayContains(invalidTypes,node.nodeType)){throw new RangeException("INVALID_NODE_TYPE_ERR");}}
function assertValidOffset(node,offset){if(offset<0||offset>(dom.isCharacterDataNode(node)?node.length:node.childNodes.length)){throw new DOMException("INDEX_SIZE_ERR");}}
function assertSameDocumentOrFragment(node1,node2){if(getDocumentOrFragmentContainer(node1,true)!==getDocumentOrFragmentContainer(node2,true)){throw new DOMException("WRONG_DOCUMENT_ERR");}}
function assertNodeNotReadOnly(node){if(getReadonlyAncestor(node,true)){throw new DOMException("NO_MODIFICATION_ALLOWED_ERR");}}
function assertNode(node,codeName){if(!node){throw new DOMException(codeName);}}
function isOrphan(node){return!dom.arrayContains(rootContainerNodeTypes,node.nodeType)&&!getDocumentOrFragmentContainer(node,true);}
function isValidOffset(node,offset){return offset<=(dom.isCharacterDataNode(node)?node.length:node.childNodes.length);}
function assertRangeValid(range){assertNotDetached(range);if(isOrphan(range.startContainer)||isOrphan(range.endContainer)||!isValidOffset(range.startContainer,range.startOffset)||!isValidOffset(range.endContainer,range.endOffset)){throw new Error("Range error: Range is no longer valid after DOM mutation ("+range.inspect()+")");}}
var styleEl=document.createElement("style");var htmlParsingConforms=false;try{styleEl.innerHTML="<b>x</b>";htmlParsingConforms=(styleEl.firstChild.nodeType==3);}catch(e){}
api.features.htmlParsingConforms=htmlParsingConforms;var createContextualFragment=htmlParsingConforms?function(fragmentStr){var node=this.startContainer;var doc=dom.getDocument(node);if(!node){throw new DOMException("INVALID_STATE_ERR");}
var el=null;if(node.nodeType==1){el=node;}else if(dom.isCharacterDataNode(node)){el=dom.parentElement(node);}
if(el===null||(el.nodeName=="HTML"&&dom.isHtmlNamespace(dom.getDocument(el).documentElement)&&dom.isHtmlNamespace(el))){el=doc.createElement("body");}else{el=el.cloneNode(false);}
el.innerHTML=fragmentStr;return dom.fragmentFromNodeChildren(el);}:function(fragmentStr){assertNotDetached(this);var doc=getRangeDocument(this);var el=doc.createElement("body");el.innerHTML=fragmentStr;return dom.fragmentFromNodeChildren(el);};var rangeProperties=["startContainer","startOffset","endContainer","endOffset","collapsed","commonAncestorContainer"];var s2s=0,s2e=1,e2e=2,e2s=3;var n_b=0,n_a=1,n_b_a=2,n_i=3;function RangePrototype(){}
RangePrototype.prototype={attachListener:function(type,listener){this._listeners[type].push(listener);},compareBoundaryPoints:function(how,range){assertRangeValid(this);assertSameDocumentOrFragment(this.startContainer,range.startContainer);var nodeA,offsetA,nodeB,offsetB;var prefixA=(how==e2s||how==s2s)?"start":"end";var prefixB=(how==s2e||how==s2s)?"start":"end";nodeA=this[prefixA+"Container"];offsetA=this[prefixA+"Offset"];nodeB=range[prefixB+"Container"];offsetB=range[prefixB+"Offset"];return dom.comparePoints(nodeA,offsetA,nodeB,offsetB);},insertNode:function(node){assertRangeValid(this);assertValidNodeType(node,insertableNodeTypes);assertNodeNotReadOnly(this.startContainer);if(dom.isAncestorOf(node,this.startContainer,true)){throw new DOMException("HIERARCHY_REQUEST_ERR");}
var firstNodeInserted=insertNodeAtPosition(node,this.startContainer,this.startOffset);this.setStartBefore(firstNodeInserted);},cloneContents:function(){assertRangeValid(this);var clone,frag;if(this.collapsed){return getRangeDocument(this).createDocumentFragment();}else{if(this.startContainer===this.endContainer&&dom.isCharacterDataNode(this.startContainer)){clone=this.startContainer.cloneNode(true);clone.data=clone.data.slice(this.startOffset,this.endOffset);frag=getRangeDocument(this).createDocumentFragment();frag.appendChild(clone);return frag;}else{var iterator=new RangeIterator(this,true);clone=cloneSubtree(iterator);iterator.detach();}
return clone;}},canSurroundContents:function(){assertRangeValid(this);assertNodeNotReadOnly(this.startContainer);assertNodeNotReadOnly(this.endContainer);var iterator=new RangeIterator(this,true);var boundariesInvalid=(iterator._first&&(isNonTextPartiallySelected(iterator._first,this))||(iterator._last&&isNonTextPartiallySelected(iterator._last,this)));iterator.detach();return!boundariesInvalid;},surroundContents:function(node){assertValidNodeType(node,surroundNodeTypes);if(!this.canSurroundContents()){throw new RangeException("BAD_BOUNDARYPOINTS_ERR");}
var content=this.extractContents();if(node.hasChildNodes()){while(node.lastChild){node.removeChild(node.lastChild);}}
insertNodeAtPosition(node,this.startContainer,this.startOffset);node.appendChild(content);this.selectNode(node);},cloneRange:function(){assertRangeValid(this);var range=new Range(getRangeDocument(this));var i=rangeProperties.length,prop;while(i--){prop=rangeProperties[i];range[prop]=this[prop];}
return range;},toString:function(){assertRangeValid(this);var sc=this.startContainer;if(sc===this.endContainer&&dom.isCharacterDataNode(sc)){return(sc.nodeType==3||sc.nodeType==4)?sc.data.slice(this.startOffset,this.endOffset):"";}else{var textBits=[],iterator=new RangeIterator(this,true);iterateSubtree(iterator,function(node){if(node.nodeType==3||node.nodeType==4){textBits.push(node.data);}});iterator.detach();return textBits.join("");}},compareNode:function(node){assertRangeValid(this);var parent=node.parentNode;var nodeIndex=dom.getNodeIndex(node);if(!parent){throw new DOMException("NOT_FOUND_ERR");}
var startComparison=this.comparePoint(parent,nodeIndex),endComparison=this.comparePoint(parent,nodeIndex+1);if(startComparison<0){return(endComparison>0)?n_b_a:n_b;}else{return(endComparison>0)?n_a:n_i;}},comparePoint:function(node,offset){assertRangeValid(this);assertNode(node,"HIERARCHY_REQUEST_ERR");assertSameDocumentOrFragment(node,this.startContainer);if(dom.comparePoints(node,offset,this.startContainer,this.startOffset)<0){return-1;}else if(dom.comparePoints(node,offset,this.endContainer,this.endOffset)>0){return 1;}
return 0;},createContextualFragment:createContextualFragment,toHtml:function(){assertRangeValid(this);var container=getRangeDocument(this).createElement("div");container.appendChild(this.cloneContents());return container.innerHTML;},intersectsNode:function(node,touchingIsIntersecting){assertRangeValid(this);assertNode(node,"NOT_FOUND_ERR");if(dom.getDocument(node)!==getRangeDocument(this)){return false;}
var parent=node.parentNode,offset=dom.getNodeIndex(node);assertNode(parent,"NOT_FOUND_ERR");var startComparison=dom.comparePoints(parent,offset,this.endContainer,this.endOffset),endComparison=dom.comparePoints(parent,offset+1,this.startContainer,this.startOffset);return touchingIsIntersecting?startComparison<=0&&endComparison>=0:startComparison<0&&endComparison>0;},isPointInRange:function(node,offset){assertRangeValid(this);assertNode(node,"HIERARCHY_REQUEST_ERR");assertSameDocumentOrFragment(node,this.startContainer);return(dom.comparePoints(node,offset,this.startContainer,this.startOffset)>=0)&&(dom.comparePoints(node,offset,this.endContainer,this.endOffset)<=0);},intersectsRange:function(range,touchingIsIntersecting){assertRangeValid(this);if(getRangeDocument(range)!=getRangeDocument(this)){throw new DOMException("WRONG_DOCUMENT_ERR");}
var startComparison=dom.comparePoints(this.startContainer,this.startOffset,range.endContainer,range.endOffset),endComparison=dom.comparePoints(this.endContainer,this.endOffset,range.startContainer,range.startOffset);return touchingIsIntersecting?startComparison<=0&&endComparison>=0:startComparison<0&&endComparison>0;},intersection:function(range){if(this.intersectsRange(range)){var startComparison=dom.comparePoints(this.startContainer,this.startOffset,range.startContainer,range.startOffset),endComparison=dom.comparePoints(this.endContainer,this.endOffset,range.endContainer,range.endOffset);var intersectionRange=this.cloneRange();if(startComparison==-1){intersectionRange.setStart(range.startContainer,range.startOffset);}
if(endComparison==1){intersectionRange.setEnd(range.endContainer,range.endOffset);}
return intersectionRange;}
return null;},union:function(range){if(this.intersectsRange(range,true)){var unionRange=this.cloneRange();if(dom.comparePoints(range.startContainer,range.startOffset,this.startContainer,this.startOffset)==-1){unionRange.setStart(range.startContainer,range.startOffset);}
if(dom.comparePoints(range.endContainer,range.endOffset,this.endContainer,this.endOffset)==1){unionRange.setEnd(range.endContainer,range.endOffset);}
return unionRange;}else{throw new RangeException("Ranges do not intersect");}},containsNode:function(node,allowPartial){if(allowPartial){return this.intersectsNode(node,false);}else{return this.compareNode(node)==n_i;}},containsNodeContents:function(node){return this.comparePoint(node,0)>=0&&this.comparePoint(node,dom.getNodeLength(node))<=0;},containsRange:function(range){return this.intersection(range).equals(range);},containsNodeText:function(node){var nodeRange=this.cloneRange();nodeRange.selectNode(node);var textNodes=nodeRange.getNodes([3]);if(textNodes.length>0){nodeRange.setStart(textNodes[0],0);var lastTextNode=textNodes.pop();nodeRange.setEnd(lastTextNode,lastTextNode.length);var contains=this.containsRange(nodeRange);nodeRange.detach();return contains;}else{return this.containsNodeContents(node);}},createNodeIterator:function(nodeTypes,filter){assertRangeValid(this);return new RangeNodeIterator(this,nodeTypes,filter);},getNodes:function(nodeTypes,filter){assertRangeValid(this);return getNodesInRange(this,nodeTypes,filter);},getDocument:function(){return getRangeDocument(this);},collapseBefore:function(node){assertNotDetached(this);this.setEndBefore(node);this.collapse(false);},collapseAfter:function(node){assertNotDetached(this);this.setStartAfter(node);this.collapse(true);},getName:function(){return"DomRange";},equals:function(range){return Range.rangesEqual(this,range);},inspect:function(){return inspect(this);}};function copyComparisonConstantsToObject(obj){obj.START_TO_START=s2s;obj.START_TO_END=s2e;obj.END_TO_END=e2e;obj.END_TO_START=e2s;obj.NODE_BEFORE=n_b;obj.NODE_AFTER=n_a;obj.NODE_BEFORE_AND_AFTER=n_b_a;obj.NODE_INSIDE=n_i;}
function copyComparisonConstants(constructor){copyComparisonConstantsToObject(constructor);copyComparisonConstantsToObject(constructor.prototype);}
function createRangeContentRemover(remover,boundaryUpdater){return function(){assertRangeValid(this);var sc=this.startContainer,so=this.startOffset,root=this.commonAncestorContainer;var iterator=new RangeIterator(this,true);var node,boundary;if(sc!==root){node=dom.getClosestAncestorIn(sc,root,true);boundary=getBoundaryAfterNode(node);sc=boundary.node;so=boundary.offset;}
iterateSubtree(iterator,assertNodeNotReadOnly);iterator.reset();var returnValue=remover(iterator);iterator.detach();boundaryUpdater(this,sc,so,sc,so);return returnValue;};}
function createPrototypeRange(constructor,boundaryUpdater,detacher){function createBeforeAfterNodeSetter(isBefore,isStart){return function(node){assertNotDetached(this);assertValidNodeType(node,beforeAfterNodeTypes);assertValidNodeType(getRootContainer(node),rootContainerNodeTypes);var boundary=(isBefore?getBoundaryBeforeNode:getBoundaryAfterNode)(node);(isStart?setRangeStart:setRangeEnd)(this,boundary.node,boundary.offset);};}
function setRangeStart(range,node,offset){var ec=range.endContainer,eo=range.endOffset;if(node!==range.startContainer||offset!==range.startOffset){if(getRootContainer(node)!=getRootContainer(ec)||dom.comparePoints(node,offset,ec,eo)==1){ec=node;eo=offset;}
boundaryUpdater(range,node,offset,ec,eo);}}
function setRangeEnd(range,node,offset){var sc=range.startContainer,so=range.startOffset;if(node!==range.endContainer||offset!==range.endOffset){if(getRootContainer(node)!=getRootContainer(sc)||dom.comparePoints(node,offset,sc,so)==-1){sc=node;so=offset;}
boundaryUpdater(range,sc,so,node,offset);}}
function setRangeStartAndEnd(range,node,offset){if(node!==range.startContainer||offset!==range.startOffset||node!==range.endContainer||offset!==range.endOffset){boundaryUpdater(range,node,offset,node,offset);}}
constructor.prototype=new RangePrototype();api.util.extend(constructor.prototype,{setStart:function(node,offset){assertNotDetached(this);assertNoDocTypeNotationEntityAncestor(node,true);assertValidOffset(node,offset);setRangeStart(this,node,offset);},setEnd:function(node,offset){assertNotDetached(this);assertNoDocTypeNotationEntityAncestor(node,true);assertValidOffset(node,offset);setRangeEnd(this,node,offset);},setStartBefore:createBeforeAfterNodeSetter(true,true),setStartAfter:createBeforeAfterNodeSetter(false,true),setEndBefore:createBeforeAfterNodeSetter(true,false),setEndAfter:createBeforeAfterNodeSetter(false,false),collapse:function(isStart){assertRangeValid(this);if(isStart){boundaryUpdater(this,this.startContainer,this.startOffset,this.startContainer,this.startOffset);}else{boundaryUpdater(this,this.endContainer,this.endOffset,this.endContainer,this.endOffset);}},selectNodeContents:function(node){assertNotDetached(this);assertNoDocTypeNotationEntityAncestor(node,true);boundaryUpdater(this,node,0,node,dom.getNodeLength(node));},selectNode:function(node){assertNotDetached(this);assertNoDocTypeNotationEntityAncestor(node,false);assertValidNodeType(node,beforeAfterNodeTypes);var start=getBoundaryBeforeNode(node),end=getBoundaryAfterNode(node);boundaryUpdater(this,start.node,start.offset,end.node,end.offset);},extractContents:createRangeContentRemover(extractSubtree,boundaryUpdater),deleteContents:createRangeContentRemover(deleteSubtree,boundaryUpdater),canSurroundContents:function(){assertRangeValid(this);assertNodeNotReadOnly(this.startContainer);assertNodeNotReadOnly(this.endContainer);var iterator=new RangeIterator(this,true);var boundariesInvalid=(iterator._first&&(isNonTextPartiallySelected(iterator._first,this))||(iterator._last&&isNonTextPartiallySelected(iterator._last,this)));iterator.detach();return!boundariesInvalid;},detach:function(){detacher(this);},splitBoundaries:function(){assertRangeValid(this);var sc=this.startContainer,so=this.startOffset,ec=this.endContainer,eo=this.endOffset;var startEndSame=(sc===ec);if(dom.isCharacterDataNode(ec)&&eo>0&&eo<ec.length){dom.splitDataNode(ec,eo);}
if(dom.isCharacterDataNode(sc)&&so>0&&so<sc.length){sc=dom.splitDataNode(sc,so);if(startEndSame){eo-=so;ec=sc;}else if(ec==sc.parentNode&&eo>=dom.getNodeIndex(sc)){eo++;}
so=0;}
boundaryUpdater(this,sc,so,ec,eo);},normalizeBoundaries:function(){assertRangeValid(this);var sc=this.startContainer,so=this.startOffset,ec=this.endContainer,eo=this.endOffset;var mergeForward=function(node){var sibling=node.nextSibling;if(sibling&&sibling.nodeType==node.nodeType){ec=node;eo=node.length;node.appendData(sibling.data);sibling.parentNode.removeChild(sibling);}};var mergeBackward=function(node){var sibling=node.previousSibling;if(sibling&&sibling.nodeType==node.nodeType){sc=node;var nodeLength=node.length;so=sibling.length;node.insertData(0,sibling.data);sibling.parentNode.removeChild(sibling);if(sc==ec){eo+=so;ec=sc;}else if(ec==node.parentNode){var nodeIndex=dom.getNodeIndex(node);if(eo==nodeIndex){ec=node;eo=nodeLength;}else if(eo>nodeIndex){eo--;}}}};var normalizeStart=true;if(dom.isCharacterDataNode(ec)){if(ec.length==eo){mergeForward(ec);}}else{if(eo>0){var endNode=ec.childNodes[eo-1];if(endNode&&dom.isCharacterDataNode(endNode)){mergeForward(endNode);}}
normalizeStart=!this.collapsed;}
if(normalizeStart){if(dom.isCharacterDataNode(sc)){if(so==0){mergeBackward(sc);}}else{if(so<sc.childNodes.length){var startNode=sc.childNodes[so];if(startNode&&dom.isCharacterDataNode(startNode)){mergeBackward(startNode);}}}}else{sc=ec;so=eo;}
boundaryUpdater(this,sc,so,ec,eo);},collapseToPoint:function(node,offset){assertNotDetached(this);assertNoDocTypeNotationEntityAncestor(node,true);assertValidOffset(node,offset);setRangeStartAndEnd(this,node,offset);}});copyComparisonConstants(constructor);}
function updateCollapsedAndCommonAncestor(range){range.collapsed=(range.startContainer===range.endContainer&&range.startOffset===range.endOffset);range.commonAncestorContainer=range.collapsed?range.startContainer:dom.getCommonAncestor(range.startContainer,range.endContainer);}
function updateBoundaries(range,startContainer,startOffset,endContainer,endOffset){var startMoved=(range.startContainer!==startContainer||range.startOffset!==startOffset);var endMoved=(range.endContainer!==endContainer||range.endOffset!==endOffset);range.startContainer=startContainer;range.startOffset=startOffset;range.endContainer=endContainer;range.endOffset=endOffset;updateCollapsedAndCommonAncestor(range);dispatchEvent(range,"boundarychange",{startMoved:startMoved,endMoved:endMoved});}
function detach(range){assertNotDetached(range);range.startContainer=range.startOffset=range.endContainer=range.endOffset=null;range.collapsed=range.commonAncestorContainer=null;dispatchEvent(range,"detach",null);range._listeners=null;}
function Range(doc){this.startContainer=doc;this.startOffset=0;this.endContainer=doc;this.endOffset=0;this._listeners={boundarychange:[],detach:[]};updateCollapsedAndCommonAncestor(this);}
createPrototypeRange(Range,updateBoundaries,detach);api.rangePrototype=RangePrototype.prototype;Range.rangeProperties=rangeProperties;Range.RangeIterator=RangeIterator;Range.copyComparisonConstants=copyComparisonConstants;Range.createPrototypeRange=createPrototypeRange;Range.inspect=inspect;Range.getRangeDocument=getRangeDocument;Range.rangesEqual=function(r1,r2){return r1.startContainer===r2.startContainer&&r1.startOffset===r2.startOffset&&r1.endContainer===r2.endContainer&&r1.endOffset===r2.endOffset;};api.DomRange=Range;api.RangeException=RangeException;});rangy.createModule("WrappedRange",function(api,module){api.requireModules(["DomUtil","DomRange"]);var WrappedRange;var dom=api.dom;var DomPosition=dom.DomPosition;var DomRange=api.DomRange;function getTextRangeContainerElement(textRange){var parentEl=textRange.parentElement();var range=textRange.duplicate();range.collapse(true);var startEl=range.parentElement();range=textRange.duplicate();range.collapse(false);var endEl=range.parentElement();var startEndContainer=(startEl==endEl)?startEl:dom.getCommonAncestor(startEl,endEl);return startEndContainer==parentEl?startEndContainer:dom.getCommonAncestor(parentEl,startEndContainer);}
function textRangeIsCollapsed(textRange){return textRange.compareEndPoints("StartToEnd",textRange)==0;}
function getTextRangeBoundaryPosition(textRange,wholeRangeContainerElement,isStart,isCollapsed){var workingRange=textRange.duplicate();workingRange.collapse(isStart);var containerElement=workingRange.parentElement();if(!dom.isAncestorOf(wholeRangeContainerElement,containerElement,true)){containerElement=wholeRangeContainerElement;}
if(!containerElement.canHaveHTML){return new DomPosition(containerElement.parentNode,dom.getNodeIndex(containerElement));}
var workingNode=dom.getDocument(containerElement).createElement("span");var comparison,workingComparisonType=isStart?"StartToStart":"StartToEnd";var previousNode,nextNode,boundaryPosition,boundaryNode;do{containerElement.insertBefore(workingNode,workingNode.previousSibling);workingRange.moveToElementText(workingNode);}while((comparison=workingRange.compareEndPoints(workingComparisonType,textRange))>0&&workingNode.previousSibling);boundaryNode=workingNode.nextSibling;if(comparison==-1&&boundaryNode&&dom.isCharacterDataNode(boundaryNode)){workingRange.setEndPoint(isStart?"EndToStart":"EndToEnd",textRange);var offset;if(/[\r\n]/.test(boundaryNode.data)){var tempRange=workingRange.duplicate();var rangeLength=tempRange.text.replace(/\r\n/g,"\r").length;offset=tempRange.moveStart("character",rangeLength);while((comparison=tempRange.compareEndPoints("StartToEnd",tempRange))==-1){offset++;tempRange.moveStart("character",1);}}else{offset=workingRange.text.length;}
boundaryPosition=new DomPosition(boundaryNode,offset);}else{previousNode=(isCollapsed||!isStart)&&workingNode.previousSibling;nextNode=(isCollapsed||isStart)&&workingNode.nextSibling;if(nextNode&&dom.isCharacterDataNode(nextNode)){boundaryPosition=new DomPosition(nextNode,0);}else if(previousNode&&dom.isCharacterDataNode(previousNode)){boundaryPosition=new DomPosition(previousNode,previousNode.length);}else{boundaryPosition=new DomPosition(containerElement,dom.getNodeIndex(workingNode));}}
workingNode.parentNode.removeChild(workingNode);return boundaryPosition;}
function createBoundaryTextRange(boundaryPosition,isStart){var boundaryNode,boundaryParent,boundaryOffset=boundaryPosition.offset;var doc=dom.getDocument(boundaryPosition.node);var workingNode,childNodes,workingRange=doc.body.createTextRange();var nodeIsDataNode=dom.isCharacterDataNode(boundaryPosition.node);if(nodeIsDataNode){boundaryNode=boundaryPosition.node;boundaryParent=boundaryNode.parentNode;}else{childNodes=boundaryPosition.node.childNodes;boundaryNode=(boundaryOffset<childNodes.length)?childNodes[boundaryOffset]:null;boundaryParent=boundaryPosition.node;}
workingNode=doc.createElement("span");workingNode.innerHTML="&#feff;";if(boundaryNode){boundaryParent.insertBefore(workingNode,boundaryNode);}else{boundaryParent.appendChild(workingNode);}
workingRange.moveToElementText(workingNode);workingRange.collapse(!isStart);boundaryParent.removeChild(workingNode);if(nodeIsDataNode){workingRange[isStart?"moveStart":"moveEnd"]("character",boundaryOffset);}
return workingRange;}
if(api.features.implementsDomRange&&(!api.features.implementsTextRange||!api.config.preferTextRange)){(function(){var rangeProto;var rangeProperties=DomRange.rangeProperties;var canSetRangeStartAfterEnd;function updateRangeProperties(range){var i=rangeProperties.length,prop;while(i--){prop=rangeProperties[i];range[prop]=range.nativeRange[prop];}}
function updateNativeRange(range,startContainer,startOffset,endContainer,endOffset){var startMoved=(range.startContainer!==startContainer||range.startOffset!=startOffset);var endMoved=(range.endContainer!==endContainer||range.endOffset!=endOffset);if(startMoved||endMoved){range.setEnd(endContainer,endOffset);range.setStart(startContainer,startOffset);}}
function detach(range){range.nativeRange.detach();range.detached=true;var i=rangeProperties.length,prop;while(i--){prop=rangeProperties[i];range[prop]=null;}}
var createBeforeAfterNodeSetter;WrappedRange=function(range){if(!range){throw new Error("Range must be specified");}
this.nativeRange=range;updateRangeProperties(this);};DomRange.createPrototypeRange(WrappedRange,updateNativeRange,detach);rangeProto=WrappedRange.prototype;rangeProto.selectNode=function(node){this.nativeRange.selectNode(node);updateRangeProperties(this);};rangeProto.deleteContents=function(){this.nativeRange.deleteContents();updateRangeProperties(this);};rangeProto.extractContents=function(){var frag=this.nativeRange.extractContents();updateRangeProperties(this);return frag;};rangeProto.cloneContents=function(){return this.nativeRange.cloneContents();};rangeProto.surroundContents=function(node){this.nativeRange.surroundContents(node);updateRangeProperties(this);};rangeProto.collapse=function(isStart){this.nativeRange.collapse(isStart);updateRangeProperties(this);};rangeProto.cloneRange=function(){return new WrappedRange(this.nativeRange.cloneRange());};rangeProto.refresh=function(){updateRangeProperties(this);};rangeProto.toString=function(){return this.nativeRange.toString();};var testTextNode=document.createTextNode("test");dom.getBody(document).appendChild(testTextNode);var range=document.createRange();range.setStart(testTextNode,0);range.setEnd(testTextNode,0);try{range.setStart(testTextNode,1);canSetRangeStartAfterEnd=true;rangeProto.setStart=function(node,offset){this.nativeRange.setStart(node,offset);updateRangeProperties(this);};rangeProto.setEnd=function(node,offset){this.nativeRange.setEnd(node,offset);updateRangeProperties(this);};createBeforeAfterNodeSetter=function(name){return function(node){this.nativeRange[name](node);updateRangeProperties(this);};};}catch(ex){canSetRangeStartAfterEnd=false;rangeProto.setStart=function(node,offset){try{this.nativeRange.setStart(node,offset);}catch(ex){this.nativeRange.setEnd(node,offset);this.nativeRange.setStart(node,offset);}
updateRangeProperties(this);};rangeProto.setEnd=function(node,offset){try{this.nativeRange.setEnd(node,offset);}catch(ex){this.nativeRange.setStart(node,offset);this.nativeRange.setEnd(node,offset);}
updateRangeProperties(this);};createBeforeAfterNodeSetter=function(name,oppositeName){return function(node){try{this.nativeRange[name](node);}catch(ex){this.nativeRange[oppositeName](node);this.nativeRange[name](node);}
updateRangeProperties(this);};};}
rangeProto.setStartBefore=createBeforeAfterNodeSetter("setStartBefore","setEndBefore");rangeProto.setStartAfter=createBeforeAfterNodeSetter("setStartAfter","setEndAfter");rangeProto.setEndBefore=createBeforeAfterNodeSetter("setEndBefore","setStartBefore");rangeProto.setEndAfter=createBeforeAfterNodeSetter("setEndAfter","setStartAfter");range.selectNodeContents(testTextNode);if(range.startContainer==testTextNode&&range.endContainer==testTextNode&&range.startOffset==0&&range.endOffset==testTextNode.length){rangeProto.selectNodeContents=function(node){this.nativeRange.selectNodeContents(node);updateRangeProperties(this);};}else{rangeProto.selectNodeContents=function(node){this.setStart(node,0);this.setEnd(node,DomRange.getEndOffset(node));};}
range.selectNodeContents(testTextNode);range.setEnd(testTextNode,3);var range2=document.createRange();range2.selectNodeContents(testTextNode);range2.setEnd(testTextNode,4);range2.setStart(testTextNode,2);if(range.compareBoundaryPoints(range.START_TO_END,range2)==-1&range.compareBoundaryPoints(range.END_TO_START,range2)==1){rangeProto.compareBoundaryPoints=function(type,range){range=range.nativeRange||range;if(type==range.START_TO_END){type=range.END_TO_START;}else if(type==range.END_TO_START){type=range.START_TO_END;}
return this.nativeRange.compareBoundaryPoints(type,range);};}else{rangeProto.compareBoundaryPoints=function(type,range){return this.nativeRange.compareBoundaryPoints(type,range.nativeRange||range);};}
if(api.util.isHostMethod(range,"createContextualFragment")){rangeProto.createContextualFragment=function(fragmentStr){return this.nativeRange.createContextualFragment(fragmentStr);};}
dom.getBody(document).removeChild(testTextNode);range.detach();range2.detach();})();api.createNativeRange=function(doc){doc=doc||document;return doc.createRange();};}else if(api.features.implementsTextRange){WrappedRange=function(textRange){this.textRange=textRange;this.refresh();};WrappedRange.prototype=new DomRange(document);WrappedRange.prototype.refresh=function(){var start,end;var rangeContainerElement=getTextRangeContainerElement(this.textRange);if(textRangeIsCollapsed(this.textRange)){end=start=getTextRangeBoundaryPosition(this.textRange,rangeContainerElement,true,true);}else{start=getTextRangeBoundaryPosition(this.textRange,rangeContainerElement,true,false);end=getTextRangeBoundaryPosition(this.textRange,rangeContainerElement,false,false);}
this.setStart(start.node,start.offset);this.setEnd(end.node,end.offset);};DomRange.copyComparisonConstants(WrappedRange);var globalObj=(function(){return this;})();if(typeof globalObj.Range=="undefined"){globalObj.Range=WrappedRange;}
api.createNativeRange=function(doc){doc=doc||document;return doc.body.createTextRange();};}
if(api.features.implementsTextRange){WrappedRange.rangeToTextRange=function(range){if(range.collapsed){var tr=createBoundaryTextRange(new DomPosition(range.startContainer,range.startOffset),true);return tr;}else{var startRange=createBoundaryTextRange(new DomPosition(range.startContainer,range.startOffset),true);var endRange=createBoundaryTextRange(new DomPosition(range.endContainer,range.endOffset),false);var textRange=dom.getDocument(range.startContainer).body.createTextRange();textRange.setEndPoint("StartToStart",startRange);textRange.setEndPoint("EndToEnd",endRange);return textRange;}};}
WrappedRange.prototype.getName=function(){return"WrappedRange";};api.WrappedRange=WrappedRange;api.createRange=function(doc){doc=doc||document;return new WrappedRange(api.createNativeRange(doc));};api.createRangyRange=function(doc){doc=doc||document;return new DomRange(doc);};api.createIframeRange=function(iframeEl){return api.createRange(dom.getIframeDocument(iframeEl));};api.createIframeRangyRange=function(iframeEl){return api.createRangyRange(dom.getIframeDocument(iframeEl));};api.addCreateMissingNativeApiListener(function(win){var doc=win.document;if(typeof doc.createRange=="undefined"){doc.createRange=function(){return api.createRange(this);};}
doc=win=null;});});rangy.createModule("WrappedSelection",function(api,module){api.requireModules(["DomUtil","DomRange","WrappedRange"]);api.config.checkSelectionRanges=true;var BOOLEAN="boolean",windowPropertyName="_rangySelection",dom=api.dom,util=api.util,DomRange=api.DomRange,WrappedRange=api.WrappedRange,DOMException=api.DOMException,DomPosition=dom.DomPosition,getSelection,selectionIsCollapsed,CONTROL="Control";function getWinSelection(winParam){return(winParam||window).getSelection();}
function getDocSelection(winParam){return(winParam||window).document.selection;}
var implementsWinGetSelection=api.util.isHostMethod(window,"getSelection"),implementsDocSelection=api.util.isHostObject(document,"selection");var useDocumentSelection=implementsDocSelection&&(!implementsWinGetSelection||api.config.preferTextRange);if(useDocumentSelection){getSelection=getDocSelection;api.isSelectionValid=function(winParam){var doc=(winParam||window).document,nativeSel=doc.selection;return(nativeSel.type!="None"||dom.getDocument(nativeSel.createRange().parentElement())==doc);};}else if(implementsWinGetSelection){getSelection=getWinSelection;api.isSelectionValid=function(){return true;};}else{module.fail("Neither document.selection or window.getSelection() detected.");}
api.getNativeSelection=getSelection;var testSelection=getSelection();var testRange=api.createNativeRange(document);var body=dom.getBody(document);var selectionHasAnchorAndFocus=util.areHostObjects(testSelection,["anchorNode","focusNode"]&&util.areHostProperties(testSelection,["anchorOffset","focusOffset"]));api.features.selectionHasAnchorAndFocus=selectionHasAnchorAndFocus;var selectionHasExtend=util.isHostMethod(testSelection,"extend");api.features.selectionHasExtend=selectionHasExtend;var selectionHasRangeCount=(typeof testSelection.rangeCount=="number");api.features.selectionHasRangeCount=selectionHasRangeCount;var selectionSupportsMultipleRanges=false;var collapsedNonEditableSelectionsSupported=true;if(util.areHostMethods(testSelection,["addRange","getRangeAt","removeAllRanges"])&&typeof testSelection.rangeCount=="number"&&api.features.implementsDomRange){(function(){var iframe=document.createElement("iframe");body.appendChild(iframe);var iframeDoc=dom.getIframeDocument(iframe);iframeDoc.open();iframeDoc.write("<html><head></head><body>12</body></html>");iframeDoc.close();var sel=dom.getIframeWindow(iframe).getSelection();var docEl=iframeDoc.documentElement;var iframeBody=docEl.lastChild,textNode=iframeBody.firstChild;var r1=iframeDoc.createRange();r1.setStart(textNode,1);r1.collapse(true);sel.addRange(r1);collapsedNonEditableSelectionsSupported=(sel.rangeCount==1);sel.removeAllRanges();var r2=r1.cloneRange();r1.setStart(textNode,0);r2.setEnd(textNode,2);sel.addRange(r1);sel.addRange(r2);selectionSupportsMultipleRanges=(sel.rangeCount==2);r1.detach();r2.detach();body.removeChild(iframe);})();}
api.features.selectionSupportsMultipleRanges=selectionSupportsMultipleRanges;api.features.collapsedNonEditableSelectionsSupported=collapsedNonEditableSelectionsSupported;var implementsControlRange=false,testControlRange;if(body&&util.isHostMethod(body,"createControlRange")){testControlRange=body.createControlRange();if(util.areHostProperties(testControlRange,["item","add"])){implementsControlRange=true;}}
api.features.implementsControlRange=implementsControlRange;if(selectionHasAnchorAndFocus){selectionIsCollapsed=function(sel){return sel.anchorNode===sel.focusNode&&sel.anchorOffset===sel.focusOffset;};}else{selectionIsCollapsed=function(sel){return sel.rangeCount?sel.getRangeAt(sel.rangeCount-1).collapsed:false;};}
function updateAnchorAndFocusFromRange(sel,range,backwards){var anchorPrefix=backwards?"end":"start",focusPrefix=backwards?"start":"end";sel.anchorNode=range[anchorPrefix+"Container"];sel.anchorOffset=range[anchorPrefix+"Offset"];sel.focusNode=range[focusPrefix+"Container"];sel.focusOffset=range[focusPrefix+"Offset"];}
function updateAnchorAndFocusFromNativeSelection(sel){var nativeSel=sel.nativeSelection;sel.anchorNode=nativeSel.anchorNode;sel.anchorOffset=nativeSel.anchorOffset;sel.focusNode=nativeSel.focusNode;sel.focusOffset=nativeSel.focusOffset;}
function updateEmptySelection(sel){sel.anchorNode=sel.focusNode=null;sel.anchorOffset=sel.focusOffset=0;sel.rangeCount=0;sel.isCollapsed=true;sel._ranges.length=0;}
function getNativeRange(range){var nativeRange;if(range instanceof DomRange){nativeRange=range._selectionNativeRange;if(!nativeRange){nativeRange=api.createNativeRange(dom.getDocument(range.startContainer));nativeRange.setEnd(range.endContainer,range.endOffset);nativeRange.setStart(range.startContainer,range.startOffset);range._selectionNativeRange=nativeRange;range.attachListener("detach",function(){this._selectionNativeRange=null;});}}else if(range instanceof WrappedRange){nativeRange=range.nativeRange;}else if(api.features.implementsDomRange&&(range instanceof dom.getWindow(range.startContainer).Range)){nativeRange=range;}
return nativeRange;}
function rangeContainsSingleElement(rangeNodes){if(!rangeNodes.length||rangeNodes[0].nodeType!=1){return false;}
for(var i=1,len=rangeNodes.length;i<len;++i){if(!dom.isAncestorOf(rangeNodes[0],rangeNodes[i])){return false;}}
return true;}
function getSingleElementFromRange(range){var nodes=range.getNodes();if(!rangeContainsSingleElement(nodes)){throw new Error("getSingleElementFromRange: range "+range.inspect()+" did not consist of a single element");}
return nodes[0];}
function isTextRange(range){return!!range&&typeof range.text!="undefined";}
function updateFromTextRange(sel,range){var wrappedRange=new WrappedRange(range);sel._ranges=[wrappedRange];updateAnchorAndFocusFromRange(sel,wrappedRange,false);sel.rangeCount=1;sel.isCollapsed=wrappedRange.collapsed;}
function updateControlSelection(sel){sel._ranges.length=0;if(sel.docSelection.type=="None"){updateEmptySelection(sel);}else{var controlRange=sel.docSelection.createRange();if(isTextRange(controlRange)){updateFromTextRange(sel,controlRange);}else{sel.rangeCount=controlRange.length;var range,doc=dom.getDocument(controlRange.item(0));for(var i=0;i<sel.rangeCount;++i){range=api.createRange(doc);range.selectNode(controlRange.item(i));sel._ranges.push(range);}
sel.isCollapsed=sel.rangeCount==1&&sel._ranges[0].collapsed;updateAnchorAndFocusFromRange(sel,sel._ranges[sel.rangeCount-1],false);}}}
function addRangeToControlSelection(sel,range){var controlRange=sel.docSelection.createRange();var rangeElement=getSingleElementFromRange(range);var doc=dom.getDocument(controlRange.item(0));var newControlRange=dom.getBody(doc).createControlRange();for(var i=0,len=controlRange.length;i<len;++i){newControlRange.add(controlRange.item(i));}
try{newControlRange.add(rangeElement);}catch(ex){throw new Error("addRange(): Element within the specified Range could not be added to control selection (does it have layout?)");}
newControlRange.select();updateControlSelection(sel);}
var getSelectionRangeAt;if(util.isHostMethod(testSelection,"getRangeAt")){getSelectionRangeAt=function(sel,index){try{return sel.getRangeAt(index);}catch(ex){return null;}};}else if(selectionHasAnchorAndFocus){getSelectionRangeAt=function(sel){var doc=dom.getDocument(sel.anchorNode);var range=api.createRange(doc);range.setStart(sel.anchorNode,sel.anchorOffset);range.setEnd(sel.focusNode,sel.focusOffset);if(range.collapsed!==this.isCollapsed){range.setStart(sel.focusNode,sel.focusOffset);range.setEnd(sel.anchorNode,sel.anchorOffset);}
return range;};}
function WrappedSelection(selection,docSelection,win){this.nativeSelection=selection;this.docSelection=docSelection;this._ranges=[];this.win=win;this.refresh();}
api.getSelection=function(win){win=win||window;var sel=win[windowPropertyName];var nativeSel=getSelection(win),docSel=implementsDocSelection?getDocSelection(win):null;if(sel){sel.nativeSelection=nativeSel;sel.docSelection=docSel;sel.refresh(win);}else{sel=new WrappedSelection(nativeSel,docSel,win);win[windowPropertyName]=sel;}
return sel;};api.getIframeSelection=function(iframeEl){return api.getSelection(dom.getIframeWindow(iframeEl));};var selProto=WrappedSelection.prototype;function createControlSelection(sel,ranges){var doc=dom.getDocument(ranges[0].startContainer);var controlRange=dom.getBody(doc).createControlRange();for(var i=0,el;i<rangeCount;++i){el=getSingleElementFromRange(ranges[i]);try{controlRange.add(el);}catch(ex){throw new Error("setRanges(): Element within the one of the specified Ranges could not be added to control selection (does it have layout?)");}}
controlRange.select();updateControlSelection(sel);}
if(!useDocumentSelection&&selectionHasAnchorAndFocus&&util.areHostMethods(testSelection,["removeAllRanges","addRange"])){selProto.removeAllRanges=function(){this.nativeSelection.removeAllRanges();updateEmptySelection(this);};var addRangeBackwards=function(sel,range){var doc=DomRange.getRangeDocument(range);var endRange=api.createRange(doc);endRange.collapseToPoint(range.endContainer,range.endOffset);sel.nativeSelection.addRange(getNativeRange(endRange));sel.nativeSelection.extend(range.startContainer,range.startOffset);sel.refresh();};if(selectionHasRangeCount){selProto.addRange=function(range,backwards){if(implementsControlRange&&implementsDocSelection&&this.docSelection.type==CONTROL){addRangeToControlSelection(this,range);}else{if(backwards&&selectionHasExtend){addRangeBackwards(this,range);}else{var previousRangeCount;if(selectionSupportsMultipleRanges){previousRangeCount=this.rangeCount;}else{this.removeAllRanges();previousRangeCount=0;}
this.nativeSelection.addRange(getNativeRange(range));this.rangeCount=this.nativeSelection.rangeCount;if(this.rangeCount==previousRangeCount+1){if(api.config.checkSelectionRanges){var nativeRange=getSelectionRangeAt(this.nativeSelection,this.rangeCount-1);if(nativeRange&&!DomRange.rangesEqual(nativeRange,range)){range=new WrappedRange(nativeRange);}}
this._ranges[this.rangeCount-1]=range;updateAnchorAndFocusFromRange(this,range,selectionIsBackwards(this.nativeSelection));this.isCollapsed=selectionIsCollapsed(this);}else{this.refresh();}}}};}else{selProto.addRange=function(range,backwards){if(backwards&&selectionHasExtend){addRangeBackwards(this,range);}else{this.nativeSelection.addRange(getNativeRange(range));this.refresh();}};}
selProto.setRanges=function(ranges){if(implementsControlRange&&ranges.length>1){createControlSelection(this,ranges);}else{this.removeAllRanges();for(var i=0,len=ranges.length;i<len;++i){this.addRange(ranges[i]);}}};}else if(util.isHostMethod(testSelection,"empty")&&util.isHostMethod(testRange,"select")&&implementsControlRange&&useDocumentSelection){selProto.removeAllRanges=function(){try{this.docSelection.empty();if(this.docSelection.type!="None"){var doc;if(this.anchorNode){doc=dom.getDocument(this.anchorNode);}else if(this.docSelection.type==CONTROL){var controlRange=this.docSelection.createRange();if(controlRange.length){doc=dom.getDocument(controlRange.item(0)).body.createTextRange();}}
if(doc){var textRange=doc.body.createTextRange();textRange.select();this.docSelection.empty();}}}catch(ex){}
updateEmptySelection(this);};selProto.addRange=function(range){if(this.docSelection.type==CONTROL){addRangeToControlSelection(this,range);}else{WrappedRange.rangeToTextRange(range).select();this._ranges[0]=range;this.rangeCount=1;this.isCollapsed=this._ranges[0].collapsed;updateAnchorAndFocusFromRange(this,range,false);}};selProto.setRanges=function(ranges){this.removeAllRanges();var rangeCount=ranges.length;if(rangeCount>1){createControlSelection(this,ranges);}else if(rangeCount){this.addRange(ranges[0]);}};}else{module.fail("No means of selecting a Range or TextRange was found");return false;}
selProto.getRangeAt=function(index){if(index<0||index>=this.rangeCount){throw new DOMException("INDEX_SIZE_ERR");}else{return this._ranges[index];}};var refreshSelection;if(useDocumentSelection){refreshSelection=function(sel){var range;if(api.isSelectionValid(sel.win)){range=sel.docSelection.createRange();}else{range=dom.getBody(sel.win.document).createTextRange();range.collapse(true);}
if(sel.docSelection.type==CONTROL){updateControlSelection(sel);}else if(isTextRange(range)){updateFromTextRange(sel,range);}else{updateEmptySelection(sel);}};}else if(util.isHostMethod(testSelection,"getRangeAt")&&typeof testSelection.rangeCount=="number"){refreshSelection=function(sel){if(implementsControlRange&&implementsDocSelection&&sel.docSelection.type==CONTROL){updateControlSelection(sel);}else{sel._ranges.length=sel.rangeCount=sel.nativeSelection.rangeCount;if(sel.rangeCount){for(var i=0,len=sel.rangeCount;i<len;++i){sel._ranges[i]=new api.WrappedRange(sel.nativeSelection.getRangeAt(i));}
updateAnchorAndFocusFromRange(sel,sel._ranges[sel.rangeCount-1],selectionIsBackwards(sel.nativeSelection));sel.isCollapsed=selectionIsCollapsed(sel);}else{updateEmptySelection(sel);}}};}else if(selectionHasAnchorAndFocus&&typeof testSelection.isCollapsed==BOOLEAN&&typeof testRange.collapsed==BOOLEAN&&api.features.implementsDomRange){refreshSelection=function(sel){var range,nativeSel=sel.nativeSelection;if(nativeSel.anchorNode){range=getSelectionRangeAt(nativeSel,0);sel._ranges=[range];sel.rangeCount=1;updateAnchorAndFocusFromNativeSelection(sel);sel.isCollapsed=selectionIsCollapsed(sel);}else{updateEmptySelection(sel);}};}else{module.fail("No means of obtaining a Range or TextRange from the user's selection was found");return false;}
selProto.refresh=function(checkForChanges){var oldRanges=checkForChanges?this._ranges.slice(0):null;refreshSelection(this);if(checkForChanges){var i=oldRanges.length;if(i!=this._ranges.length){return false;}
while(i--){if(!DomRange.rangesEqual(oldRanges[i],this._ranges[i])){return false;}}
return true;}};var removeRangeManually=function(sel,range){var ranges=sel.getAllRanges(),removed=false;sel.removeAllRanges();for(var i=0,len=ranges.length;i<len;++i){if(removed||range!==ranges[i]){sel.addRange(ranges[i]);}else{removed=true;}}
if(!sel.rangeCount){updateEmptySelection(sel);}};if(implementsControlRange){selProto.removeRange=function(range){if(this.docSelection.type==CONTROL){var controlRange=this.docSelection.createRange();var rangeElement=getSingleElementFromRange(range);var doc=dom.getDocument(controlRange.item(0));var newControlRange=dom.getBody(doc).createControlRange();var el,removed=false;for(var i=0,len=controlRange.length;i<len;++i){el=controlRange.item(i);if(el!==rangeElement||removed){newControlRange.add(controlRange.item(i));}else{removed=true;}}
newControlRange.select();updateControlSelection(this);}else{removeRangeManually(this,range);}};}else{selProto.removeRange=function(range){removeRangeManually(this,range);};}
var selectionIsBackwards;if(!useDocumentSelection&&selectionHasAnchorAndFocus&&api.features.implementsDomRange){selectionIsBackwards=function(sel){var backwards=false;if(sel.anchorNode){backwards=(dom.comparePoints(sel.anchorNode,sel.anchorOffset,sel.focusNode,sel.focusOffset)==1);}
return backwards;};selProto.isBackwards=function(){return selectionIsBackwards(this);};}else{selectionIsBackwards=selProto.isBackwards=function(){return false;};}
selProto.toString=function(){var rangeTexts=[];for(var i=0,len=this.rangeCount;i<len;++i){rangeTexts[i]=""+this._ranges[i];}
return rangeTexts.join("");};function assertNodeInSameDocument(sel,node){if(sel.anchorNode&&(dom.getDocument(sel.anchorNode)!==dom.getDocument(node))){throw new DOMException("WRONG_DOCUMENT_ERR");}}
selProto.collapse=function(node,offset){assertNodeInSameDocument(this,node);var range=api.createRange(dom.getDocument(node));range.collapseToPoint(node,offset);this.removeAllRanges();this.addRange(range);this.isCollapsed=true;};selProto.collapseToStart=function(){if(this.rangeCount){var range=this._ranges[0];this.collapse(range.startContainer,range.startOffset);}else{throw new DOMException("INVALID_STATE_ERR");}};selProto.collapseToEnd=function(){if(this.rangeCount){var range=this._ranges[this.rangeCount-1];this.collapse(range.endContainer,range.endOffset);}else{throw new DOMException("INVALID_STATE_ERR");}};selProto.selectAllChildren=function(node){assertNodeInSameDocument(this,node);var range=api.createRange(dom.getDocument(node));range.selectNodeContents(node);this.removeAllRanges();this.addRange(range);};selProto.deleteFromDocument=function(){if(implementsControlRange&&implementsDocSelection&&this.docSelection.type==CONTROL){var controlRange=this.docSelection.createRange();var element;while(controlRange.length){element=controlRange.item(0);controlRange.remove(element);element.parentNode.removeChild(element);}
this.refresh();}else if(this.rangeCount){var ranges=this.getAllRanges();this.removeAllRanges();for(var i=0,len=ranges.length;i<len;++i){ranges[i].deleteContents();}
this.addRange(ranges[len-1]);}};selProto.getAllRanges=function(){return this._ranges.slice(0);};selProto.setSingleRange=function(range){this.setRanges([range]);};selProto.containsNode=function(node,allowPartial){for(var i=0,len=this._ranges.length;i<len;++i){if(this._ranges[i].containsNode(node,allowPartial)){return true;}}
return false;};selProto.toHtml=function(){var html="";if(this.rangeCount){var container=DomRange.getRangeDocument(this._ranges[0]).createElement("div");for(var i=0,len=this._ranges.length;i<len;++i){container.appendChild(this._ranges[i].cloneContents());}
html=container.innerHTML;}
return html;};function inspect(sel){var rangeInspects=[];var anchor=new DomPosition(sel.anchorNode,sel.anchorOffset);var focus=new DomPosition(sel.focusNode,sel.focusOffset);var name=(typeof sel.getName=="function")?sel.getName():"Selection";if(typeof sel.rangeCount!="undefined"){for(var i=0,len=sel.rangeCount;i<len;++i){rangeInspects[i]=DomRange.inspect(sel.getRangeAt(i));}}
return"["+name+"(Ranges: "+rangeInspects.join(", ")+")(anchor: "+anchor.inspect()+", focus: "+focus.inspect()+"]";}
selProto.getName=function(){return"WrappedSelection";};selProto.inspect=function(){return inspect(this);};selProto.detach=function(){this.win[windowPropertyName]=null;this.win=this.anchorNode=this.focusNode=null;};WrappedSelection.inspect=inspect;api.Selection=WrappedSelection;api.selectionPrototype=selProto;api.addCreateMissingNativeApiListener(function(win){if(typeof win.getSelection=="undefined"){win.getSelection=function(){return api.getSelection(this);};}
win=null;});});var Base=function(){};Base.extend=function(_instance,_static){var extend=Base.prototype.extend;Base._prototyping=true;var proto=new this;extend.call(proto,_instance);proto.base=function(){};delete Base._prototyping;var constructor=proto.constructor;var klass=proto.constructor=function(){if(!Base._prototyping){if(this._constructing||this.constructor==klass){this._constructing=true;constructor.apply(this,arguments);delete this._constructing;}else if(arguments[0]!=null){return(arguments[0].extend||extend).call(arguments[0],proto);}}};klass.ancestor=this;klass.extend=this.extend;klass.forEach=this.forEach;klass.implement=this.implement;klass.prototype=proto;klass.toString=this.toString;klass.valueOf=function(type){return(type=="object")?klass:constructor.valueOf();};extend.call(klass,_static);if(typeof klass.init=="function")klass.init();return klass;};Base.prototype={extend:function(source,value){if(arguments.length>1){var ancestor=this[source];if(ancestor&&(typeof value=="function")&&(!ancestor.valueOf||ancestor.valueOf()!=value.valueOf())&&/\bbase\b/.test(value)){var method=value.valueOf();value=function(){var previous=this.base||Base.prototype.base;this.base=ancestor;var returnValue=method.apply(this,arguments);this.base=previous;return returnValue;};value.valueOf=function(type){return(type=="object")?value:method;};value.toString=Base.toString;}
this[source]=value;}else if(source){var extend=Base.prototype.extend;if(!Base._prototyping&&typeof this!="function"){extend=this.extend||extend;}
var proto={toSource:null};var hidden=["constructor","toString","valueOf"];var i=Base._prototyping?0:1;while(key=hidden[i++]){if(source[key]!=proto[key]){extend.call(this,key,source[key]);}}
for(var key in source){if(!proto[key])extend.call(this,key,source[key]);}}
return this;}};Base=Base.extend({constructor:function(){this.extend(arguments[0]);}},{ancestor:Object,version:"1.1",forEach:function(object,block,context){for(var key in object){if(this.prototype[key]===undefined){block.call(context,object[key],key,object);}}},implement:function(){for(var i=0;i<arguments.length;i++){if(typeof arguments[i]=="function"){arguments[i](this.prototype);}else{this.prototype.extend(arguments[i]);}}
return this;},toString:function(){return String(this.valueOf());}});wysihtml5.browser=(function(){var userAgent=navigator.userAgent,testElement=document.createElement("div"),isIE=userAgent.indexOf("MSIE")!==-1&&userAgent.indexOf("Opera")===-1,isGecko=userAgent.indexOf("Gecko")!==-1&&userAgent.indexOf("KHTML")===-1,isWebKit=userAgent.indexOf("AppleWebKit/")!==-1,isChrome=userAgent.indexOf("Chrome/")!==-1,isOpera=userAgent.indexOf("Opera/")!==-1;function iosVersion(userAgent){return((/ipad|iphone|ipod/.test(userAgent)&&userAgent.match(/ os (\d+).+? like mac os x/))||[,0])[1];}
return{USER_AGENT:userAgent,supported:function(){var userAgent=this.USER_AGENT.toLowerCase(),hasContentEditableSupport="contentEditable"in testElement,hasEditingApiSupport=document.execCommand&&document.queryCommandSupported&&document.queryCommandState,hasQuerySelectorSupport=document.querySelector&&document.querySelectorAll,isIncompatibleMobileBrowser=(this.isIos()&&iosVersion(userAgent)<5)||userAgent.indexOf("opera mobi")!==-1||userAgent.indexOf("hpwos/")!==-1;return hasContentEditableSupport&&hasEditingApiSupport&&hasQuerySelectorSupport&&!isIncompatibleMobileBrowser;},isTouchDevice:function(){return this.supportsEvent("touchmove");},isIos:function(){var userAgent=this.USER_AGENT.toLowerCase();return userAgent.indexOf("webkit")!==-1&&userAgent.indexOf("mobile")!==-1;},supportsSandboxedIframes:function(){return isIE;},throwsMixedContentWarningWhenIframeSrcIsEmpty:function(){return!("querySelector"in document);},displaysCaretInEmptyContentEditableCorrectly:function(){return!isGecko;},hasCurrentStyleProperty:function(){return"currentStyle"in testElement;},insertsLineBreaksOnReturn:function(){return isGecko;},supportsPlaceholderAttributeOn:function(element){return"placeholder"in element;},supportsEvent:function(eventName){return"on"+eventName in testElement||(function(){testElement.setAttribute("on"+eventName,"return;");return typeof(testElement["on"+eventName])==="function";})();},supportsEventsInIframeCorrectly:function(){return!isOpera;},firesOnDropOnlyWhenOnDragOverIsCancelled:function(){return isWebKit||isGecko;},supportsDataTransfer:function(){try{return isWebKit&&(window.Clipboard||window.DataTransfer).prototype.getData;}catch(e){return false;}},supportsHTML5Tags:function(context){var element=context.createElement("div"),html5="<article>foo</article>";element.innerHTML=html5;return element.innerHTML.toLowerCase()===html5;},supportsCommand:(function(){var buggyCommands={"formatBlock":isIE,"insertUnorderedList":isIE||isOpera||isWebKit,"insertOrderedList":isIE||isOpera||isWebKit};var supported={"insertHTML":isGecko};return function(doc,command){var isBuggy=buggyCommands[command];if(!isBuggy){try{return doc.queryCommandSupported(command);}catch(e1){}
try{return doc.queryCommandEnabled(command);}catch(e2){return!!supported[command];}}
return false;};})(),doesAutoLinkingInContentEditable:function(){return isIE;},canDisableAutoLinking:function(){return this.supportsCommand(document,"AutoUrlDetect");},clearsContentEditableCorrectly:function(){return isGecko||isOpera||isWebKit;},supportsGetAttributeCorrectly:function(){var td=document.createElement("td");return td.getAttribute("rowspan")!="1";},canSelectImagesInContentEditable:function(){return isGecko||isIE||isOpera;},clearsListsInContentEditableCorrectly:function(){return isGecko||isIE||isWebKit;},autoScrollsToCaret:function(){return!isWebKit;},autoClosesUnclosedTags:function(){var clonedTestElement=testElement.cloneNode(false),returnValue,innerHTML;clonedTestElement.innerHTML="<p><div></div>";innerHTML=clonedTestElement.innerHTML.toLowerCase();returnValue=innerHTML==="<p></p><div></div>"||innerHTML==="<p><div></div></p>";this.autoClosesUnclosedTags=function(){return returnValue;};return returnValue;},supportsNativeGetElementsByClassName:function(){return String(document.getElementsByClassName).indexOf("[native code]")!==-1;},supportsSelectionModify:function(){return"getSelection"in window&&"modify"in window.getSelection();},supportsClassList:function(){return"classList"in testElement;},needsSpaceAfterLineBreak:function(){return isOpera;},supportsSpeechApiOn:function(input){var chromeVersion=userAgent.match(/Chrome\/(\d+)/)||[,0];return chromeVersion[1]>=11&&("onwebkitspeechchange"in input||"speech"in input);},crashesWhenDefineProperty:function(property){return isIE&&(property==="XMLHttpRequest"||property==="XDomainRequest");},doesAsyncFocus:function(){return isIE;},hasProblemsSettingCaretAfterImg:function(){return isIE;},hasUndoInContextMenu:function(){return isGecko||isChrome||isOpera;}};})();wysihtml5.lang.array=function(arr){return{contains:function(needle){if(arr.indexOf){return arr.indexOf(needle)!==-1;}else{for(var i=0,length=arr.length;i<length;i++){if(arr[i]===needle){return true;}}
return false;}},without:function(arrayToSubstract){arrayToSubstract=wysihtml5.lang.array(arrayToSubstract);var newArr=[],i=0,length=arr.length;for(;i<length;i++){if(!arrayToSubstract.contains(arr[i])){newArr.push(arr[i]);}}
return newArr;},get:function(){var i=0,length=arr.length,newArray=[];for(;i<length;i++){newArray.push(arr[i]);}
return newArray;}};};wysihtml5.lang.Dispatcher=Base.extend({observe:function(eventName,handler){this.events=this.events||{};this.events[eventName]=this.events[eventName]||[];this.events[eventName].push(handler);return this;},on:function(){return this.observe.apply(this,wysihtml5.lang.array(arguments).get());},fire:function(eventName,payload){this.events=this.events||{};var handlers=this.events[eventName]||[],i=0;for(;i<handlers.length;i++){handlers[i].call(this,payload);}
return this;},stopObserving:function(eventName,handler){this.events=this.events||{};var i=0,handlers,newHandlers;if(eventName){handlers=this.events[eventName]||[],newHandlers=[];for(;i<handlers.length;i++){if(handlers[i]!==handler&&handler){newHandlers.push(handlers[i]);}}
this.events[eventName]=newHandlers;}else{this.events={};}
return this;}});wysihtml5.lang.object=function(obj){return{merge:function(otherObj){for(var i in otherObj){obj[i]=otherObj[i];}
return this;},get:function(){return obj;},clone:function(){var newObj={},i;for(i in obj){newObj[i]=obj[i];}
return newObj;},isArray:function(){return Object.prototype.toString.call(obj)==="[object Array]";}};};(function(){var WHITE_SPACE_START=/^\s+/,WHITE_SPACE_END=/\s+$/;wysihtml5.lang.string=function(str){str=String(str);return{trim:function(){return str.replace(WHITE_SPACE_START,"").replace(WHITE_SPACE_END,"");},interpolate:function(vars){for(var i in vars){str=this.replace("#{"+i+"}").by(vars[i]);}
return str;},replace:function(search){return{by:function(replace){return str.split(search).join(replace);}}}};};})();(function(wysihtml5){var
IGNORE_URLS_IN=wysihtml5.lang.array(["CODE","PRE","A","SCRIPT","HEAD","TITLE","STYLE"]),URL_REG_EXP=/((https?:\/\/|www\.)[^\s<]{3,})/gi,TRAILING_CHAR_REG_EXP=/([^\w\/\-](,?))$/i,MAX_DISPLAY_LENGTH=100,BRACKETS={")":"(","]":"[","}":"{"};function autoLink(element){if(_hasParentThatShouldBeIgnored(element)){return element;}
if(element===element.ownerDocument.documentElement){element=element.ownerDocument.body;}
return _parseNode(element);}
function _convertUrlsToLinks(str){return str.replace(URL_REG_EXP,function(match,url){var punctuation=(url.match(TRAILING_CHAR_REG_EXP)||[])[1]||"",opening=BRACKETS[punctuation];url=url.replace(TRAILING_CHAR_REG_EXP,"");if(url.split(opening).length>url.split(punctuation).length){url=url+punctuation;punctuation="";}
var realUrl=url,displayUrl=url;if(url.length>MAX_DISPLAY_LENGTH){displayUrl=displayUrl.substr(0,MAX_DISPLAY_LENGTH)+"...";}
if(realUrl.substr(0,4)==="www."){realUrl="http://"+realUrl;}
return'<a href="'+realUrl+'">'+displayUrl+'</a>'+punctuation;});}
function _getTempElement(context){var tempElement=context._wysihtml5_tempElement;if(!tempElement){tempElement=context._wysihtml5_tempElement=context.createElement("div");}
return tempElement;}
function _wrapMatchesInNode(textNode){var parentNode=textNode.parentNode,tempElement=_getTempElement(parentNode.ownerDocument);tempElement.innerHTML="<span></span>"+_convertUrlsToLinks(textNode.data);tempElement.removeChild(tempElement.firstChild);while(tempElement.firstChild){parentNode.insertBefore(tempElement.firstChild,textNode);}
parentNode.removeChild(textNode);}
function _hasParentThatShouldBeIgnored(node){var nodeName;while(node.parentNode){node=node.parentNode;nodeName=node.nodeName;if(IGNORE_URLS_IN.contains(nodeName)){return true;}else if(nodeName==="body"){return false;}}
return false;}
function _parseNode(element){if(IGNORE_URLS_IN.contains(element.nodeName)){return;}
if(element.nodeType===wysihtml5.TEXT_NODE&&element.data.match(URL_REG_EXP)){_wrapMatchesInNode(element);return;}
var childNodes=wysihtml5.lang.array(element.childNodes).get(),childNodesLength=childNodes.length,i=0;for(;i<childNodesLength;i++){_parseNode(childNodes[i]);}
return element;}
wysihtml5.dom.autoLink=autoLink;wysihtml5.dom.autoLink.URL_REG_EXP=URL_REG_EXP;})(wysihtml5);(function(wysihtml5){var supportsClassList=wysihtml5.browser.supportsClassList(),api=wysihtml5.dom;api.addClass=function(element,className){if(supportsClassList){return element.classList.add(className);}
if(api.hasClass(element,className)){return;}
element.className+=" "+className;};api.removeClass=function(element,className){if(supportsClassList){return element.classList.remove(className);}
element.className=element.className.replace(new RegExp("(^|\\s+)"+className+"(\\s+|$)")," ");};api.hasClass=function(element,className){if(supportsClassList){return element.classList.contains(className);}
var elementClassName=element.className;return(elementClassName.length>0&&(elementClassName==className||new RegExp("(^|\\s)"+className+"(\\s|$)").test(elementClassName)));};})(wysihtml5);wysihtml5.dom.contains=(function(){var documentElement=document.documentElement;if(documentElement.contains){return function(container,element){if(element.nodeType!==wysihtml5.ELEMENT_NODE){element=element.parentNode;}
return container!==element&&container.contains(element);};}else if(documentElement.compareDocumentPosition){return function(container,element){return!!(container.compareDocumentPosition(element)&16);};}})();wysihtml5.dom.convertToList=(function(){function _createListItem(doc,list){var listItem=doc.createElement("li");list.appendChild(listItem);return listItem;}
function _createList(doc,type){return doc.createElement(type);}
function convertToList(element,listType){if(element.nodeName==="UL"||element.nodeName==="OL"||element.nodeName==="MENU"){return element;}
var doc=element.ownerDocument,list=_createList(doc,listType),lineBreaks=element.querySelectorAll("br"),lineBreaksLength=lineBreaks.length,childNodes,childNodesLength,childNode,lineBreak,parentNode,isBlockElement,isLineBreak,currentListItem,i;for(i=0;i<lineBreaksLength;i++){lineBreak=lineBreaks[i];while((parentNode=lineBreak.parentNode)&&parentNode!==element&&parentNode.lastChild===lineBreak){if(wysihtml5.dom.getStyle("display").from(parentNode)==="block"){parentNode.removeChild(lineBreak);break;}
wysihtml5.dom.insert(lineBreak).after(lineBreak.parentNode);}}
childNodes=wysihtml5.lang.array(element.childNodes).get();childNodesLength=childNodes.length;for(i=0;i<childNodesLength;i++){currentListItem=currentListItem||_createListItem(doc,list);childNode=childNodes[i];isBlockElement=wysihtml5.dom.getStyle("display").from(childNode)==="block";isLineBreak=childNode.nodeName==="BR";if(isBlockElement){currentListItem=currentListItem.firstChild?_createListItem(doc,list):currentListItem;currentListItem.appendChild(childNode);currentListItem=null;continue;}
if(isLineBreak){currentListItem=currentListItem.firstChild?null:currentListItem;continue;}
currentListItem.appendChild(childNode);}
element.parentNode.replaceChild(list,element);return list;}
return convertToList;})();wysihtml5.dom.copyAttributes=function(attributesToCopy){return{from:function(elementToCopyFrom){return{to:function(elementToCopyTo){var attribute,i=0,length=attributesToCopy.length;for(;i<length;i++){attribute=attributesToCopy[i];if(typeof(elementToCopyFrom[attribute])!=="undefined"&&elementToCopyFrom[attribute]!==""){elementToCopyTo[attribute]=elementToCopyFrom[attribute];}}
return{andTo:arguments.callee};}};}};};(function(dom){var BOX_SIZING_PROPERTIES=["-webkit-box-sizing","-moz-box-sizing","-ms-box-sizing","box-sizing"];var shouldIgnoreBoxSizingBorderBox=function(element){if(hasBoxSizingBorderBox(element)){return parseInt(dom.getStyle("width").from(element),10)<element.offsetWidth;}
return false;};var hasBoxSizingBorderBox=function(element){var i=0,length=BOX_SIZING_PROPERTIES.length;for(;i<length;i++){if(dom.getStyle(BOX_SIZING_PROPERTIES[i]).from(element)==="border-box"){return BOX_SIZING_PROPERTIES[i];}}};dom.copyStyles=function(stylesToCopy){return{from:function(element){if(shouldIgnoreBoxSizingBorderBox(element)){stylesToCopy=wysihtml5.lang.array(stylesToCopy).without(BOX_SIZING_PROPERTIES);}
var cssText="",length=stylesToCopy.length,i=0,property;for(;i<length;i++){property=stylesToCopy[i];cssText+=property+":"+dom.getStyle(property).from(element)+";";}
return{to:function(element){dom.setStyles(cssText).on(element);return{andTo:arguments.callee};}};}};};})(wysihtml5.dom);(function(wysihtml5){wysihtml5.dom.delegate=function(container,selector,eventName,handler){return wysihtml5.dom.observe(container,eventName,function(event){var target=event.target,match=wysihtml5.lang.array(container.querySelectorAll(selector));while(target&&target!==container){if(match.contains(target)){handler.call(target,event);break;}
target=target.parentNode;}});};})(wysihtml5);wysihtml5.dom.getAsDom=(function(){var _innerHTMLShiv=function(html,context){var tempElement=context.createElement("div");tempElement.style.display="none";context.body.appendChild(tempElement);try{tempElement.innerHTML=html;}catch(e){}
context.body.removeChild(tempElement);return tempElement;};var _ensureHTML5Compatibility=function(context){if(context._wysihtml5_supportsHTML5Tags){return;}
for(var i=0,length=HTML5_ELEMENTS.length;i<length;i++){context.createElement(HTML5_ELEMENTS[i]);}
context._wysihtml5_supportsHTML5Tags=true;};var HTML5_ELEMENTS=["abbr","article","aside","audio","bdi","canvas","command","datalist","details","figcaption","figure","footer","header","hgroup","keygen","mark","meter","nav","output","progress","rp","rt","ruby","svg","section","source","summary","time","track","video","wbr"];return function(html,context){context=context||document;var tempElement;if(typeof(html)==="object"&&html.nodeType){tempElement=context.createElement("div");tempElement.appendChild(html);}else if(wysihtml5.browser.supportsHTML5Tags(context)){tempElement=context.createElement("div");tempElement.innerHTML=html;}else{_ensureHTML5Compatibility(context);tempElement=_innerHTMLShiv(html,context);}
return tempElement;};})();wysihtml5.dom.getParentElement=(function(){function _isSameNodeName(nodeName,desiredNodeNames){if(!desiredNodeNames||!desiredNodeNames.length){return true;}
if(typeof(desiredNodeNames)==="string"){return nodeName===desiredNodeNames;}else{return wysihtml5.lang.array(desiredNodeNames).contains(nodeName);}}
function _isElement(node){return node.nodeType===wysihtml5.ELEMENT_NODE;}
function _hasClassName(element,className,classRegExp){var classNames=(element.className||"").match(classRegExp)||[];if(!className){return!!classNames.length;}
return classNames[classNames.length-1]===className;}
function _getParentElementWithNodeName(node,nodeName,levels){while(levels--&&node&&node.nodeName!=="BODY"){if(_isSameNodeName(node.nodeName,nodeName)){return node;}
node=node.parentNode;}
return null;}
function _getParentElementWithNodeNameAndClassName(node,nodeName,className,classRegExp,levels){while(levels--&&node&&node.nodeName!=="BODY"){if(_isElement(node)&&_isSameNodeName(node.nodeName,nodeName)&&_hasClassName(node,className,classRegExp)){return node;}
node=node.parentNode;}
return null;}
return function(node,matchingSet,levels){levels=levels||50;if(matchingSet.className||matchingSet.classRegExp){return _getParentElementWithNodeNameAndClassName(node,matchingSet.nodeName,matchingSet.className,matchingSet.classRegExp,levels);}else{return _getParentElementWithNodeName(node,matchingSet.nodeName,levels);}};})();wysihtml5.dom.getStyle=(function(){var stylePropertyMapping={"float":("styleFloat"in document.createElement("div").style)?"styleFloat":"cssFloat"},REG_EXP_CAMELIZE=/\-[a-z]/g;function camelize(str){return str.replace(REG_EXP_CAMELIZE,function(match){return match.charAt(1).toUpperCase();});}
return function(property){return{from:function(element){if(element.nodeType!==wysihtml5.ELEMENT_NODE){return;}
var doc=element.ownerDocument,camelizedProperty=stylePropertyMapping[property]||camelize(property),style=element.style,currentStyle=element.currentStyle,styleValue=style[camelizedProperty];if(styleValue){return styleValue;}
if(currentStyle){try{return currentStyle[camelizedProperty];}catch(e){}}
var win=doc.defaultView||doc.parentWindow,needsOverflowReset=(property==="height"||property==="width")&&element.nodeName==="TEXTAREA",originalOverflow,returnValue;if(win.getComputedStyle){if(needsOverflowReset){originalOverflow=style.overflow;style.overflow="hidden";}
returnValue=win.getComputedStyle(element,null).getPropertyValue(property);if(needsOverflowReset){style.overflow=originalOverflow||"";}
return returnValue;}}};};})();wysihtml5.dom.hasElementWithTagName=(function(){var LIVE_CACHE={},DOCUMENT_IDENTIFIER=1;function _getDocumentIdentifier(doc){return doc._wysihtml5_identifier||(doc._wysihtml5_identifier=DOCUMENT_IDENTIFIER++);}
return function(doc,tagName){var key=_getDocumentIdentifier(doc)+":"+tagName,cacheEntry=LIVE_CACHE[key];if(!cacheEntry){cacheEntry=LIVE_CACHE[key]=doc.getElementsByTagName(tagName);}
return cacheEntry.length>0;};})();(function(wysihtml5){var LIVE_CACHE={},DOCUMENT_IDENTIFIER=1;function _getDocumentIdentifier(doc){return doc._wysihtml5_identifier||(doc._wysihtml5_identifier=DOCUMENT_IDENTIFIER++);}
wysihtml5.dom.hasElementWithClassName=function(doc,className){if(!wysihtml5.browser.supportsNativeGetElementsByClassName()){return!!doc.querySelector("."+className);}
var key=_getDocumentIdentifier(doc)+":"+className,cacheEntry=LIVE_CACHE[key];if(!cacheEntry){cacheEntry=LIVE_CACHE[key]=doc.getElementsByClassName(className);}
return cacheEntry.length>0;};})(wysihtml5);wysihtml5.dom.insert=function(elementToInsert){return{after:function(element){element.parentNode.insertBefore(elementToInsert,element.nextSibling);},before:function(element){element.parentNode.insertBefore(elementToInsert,element);},into:function(element){element.appendChild(elementToInsert);}};};wysihtml5.dom.insertCSS=function(rules){rules=rules.join("\n");return{into:function(doc){var head=doc.head||doc.getElementsByTagName("head")[0],styleElement=doc.createElement("style");styleElement.type="text/css";if(styleElement.styleSheet){styleElement.styleSheet.cssText=rules;}else{styleElement.appendChild(doc.createTextNode(rules));}
if(head){head.appendChild(styleElement);}}};};wysihtml5.dom.observe=function(element,eventNames,handler){eventNames=typeof(eventNames)==="string"?[eventNames]:eventNames;var handlerWrapper,eventName,i=0,length=eventNames.length;for(;i<length;i++){eventName=eventNames[i];if(element.addEventListener){element.addEventListener(eventName,handler,false);}else{handlerWrapper=function(event){if(!("target"in event)){event.target=event.srcElement;}
event.preventDefault=event.preventDefault||function(){this.returnValue=false;};event.stopPropagation=event.stopPropagation||function(){this.cancelBubble=true;};handler.call(element,event);};element.attachEvent("on"+eventName,handlerWrapper);}}
return{stop:function(){var eventName,i=0,length=eventNames.length;for(;i<length;i++){eventName=eventNames[i];if(element.removeEventListener){element.removeEventListener(eventName,handler,false);}else{element.detachEvent("on"+eventName,handlerWrapper);}}}};};wysihtml5.dom.parse=(function(){var NODE_TYPE_MAPPING={"1":_handleElement,"3":_handleText},DEFAULT_NODE_NAME="span",WHITE_SPACE_REG_EXP=/\s+/,defaultRules={tags:{},classes:{}},currentRules={};function parse(elementOrHtml,rules,context,cleanUp){wysihtml5.lang.object(currentRules).merge(defaultRules).merge(rules).get();context=context||elementOrHtml.ownerDocument||document;var fragment=context.createDocumentFragment(),isString=typeof(elementOrHtml)==="string",element,newNode,firstChild;if(isString){element=wysihtml5.dom.getAsDom(elementOrHtml,context);}else{element=elementOrHtml;}
while(element.firstChild){firstChild=element.firstChild;element.removeChild(firstChild);newNode=_convert(firstChild,cleanUp);if(newNode){fragment.appendChild(newNode);}}
element.innerHTML="";element.appendChild(fragment);return isString?wysihtml5.quirks.getCorrectInnerHTML(element):element;}
function _convert(oldNode,cleanUp){var oldNodeType=oldNode.nodeType,oldChilds=oldNode.childNodes,oldChildsLength=oldChilds.length,newNode,method=NODE_TYPE_MAPPING[oldNodeType],i=0;newNode=method&&method(oldNode);if(!newNode){return null;}
for(i=0;i<oldChildsLength;i++){newChild=_convert(oldChilds[i],cleanUp);if(newChild){newNode.appendChild(newChild);}}
if(cleanUp&&newNode.childNodes.length<=1&&newNode.nodeName.toLowerCase()===DEFAULT_NODE_NAME&&!newNode.attributes.length){return newNode.firstChild;}
return newNode;}
function _handleElement(oldNode){var rule,newNode,endTag,tagRules=currentRules.tags,nodeName=oldNode.nodeName.toLowerCase(),scopeName=oldNode.scopeName;if(oldNode._wysihtml5){return null;}
oldNode._wysihtml5=1;if(oldNode.className==="wysihtml5-temp"){return null;}
if(scopeName&&scopeName!="HTML"){nodeName=scopeName+":"+nodeName;}
if("outerHTML"in oldNode){if(!wysihtml5.browser.autoClosesUnclosedTags()&&oldNode.nodeName==="P"&&oldNode.outerHTML.slice(-4).toLowerCase()!=="</p>"){nodeName="div";}}
if(nodeName in tagRules){rule=tagRules[nodeName];if(!rule||rule.remove){return null;}
rule=typeof(rule)==="string"?{rename_tag:rule}:rule;}else if(oldNode.firstChild){rule={rename_tag:DEFAULT_NODE_NAME};}else{return null;}
newNode=oldNode.ownerDocument.createElement(rule.rename_tag||nodeName);_handleAttributes(oldNode,newNode,rule);oldNode=null;return newNode;}
function _handleAttributes(oldNode,newNode,rule){var attributes={},setClass=rule.set_class,addClass=rule.add_class,setAttributes=rule.set_attributes,checkAttributes=rule.check_attributes,allowedClasses=currentRules.classes,i=0,classes=[],newClasses=[],newUniqueClasses=[],oldClasses=[],classesLength,newClassesLength,currentClass,newClass,attributeName,newAttributeValue,method;if(setAttributes){attributes=wysihtml5.lang.object(setAttributes).clone();}
if(checkAttributes){for(attributeName in checkAttributes){method=attributeCheckMethods[checkAttributes[attributeName]];if(!method){continue;}
newAttributeValue=method(_getAttribute(oldNode,attributeName));if(typeof(newAttributeValue)==="string"){attributes[attributeName]=newAttributeValue;}}}
if(setClass){classes.push(setClass);}
if(addClass){for(attributeName in addClass){method=addClassMethods[addClass[attributeName]];if(!method){continue;}
newClass=method(_getAttribute(oldNode,attributeName));if(typeof(newClass)==="string"){classes.push(newClass);}}}
allowedClasses["_wysihtml5-temp-placeholder"]=1;oldClasses=oldNode.getAttribute("class");if(oldClasses){classes=classes.concat(oldClasses.split(WHITE_SPACE_REG_EXP));}
classesLength=classes.length;for(;i<classesLength;i++){currentClass=classes[i];if(allowedClasses[currentClass]){newClasses.push(currentClass);}}
newClassesLength=newClasses.length;while(newClassesLength--){currentClass=newClasses[newClassesLength];if(!wysihtml5.lang.array(newUniqueClasses).contains(currentClass)){newUniqueClasses.unshift(currentClass);}}
if(newUniqueClasses.length){attributes["class"]=newUniqueClasses.join(" ");}
for(attributeName in attributes){try{newNode.setAttribute(attributeName,attributes[attributeName]);}catch(e){}}
if(attributes.src){if(typeof(attributes.width)!=="undefined"){newNode.setAttribute("width",attributes.width);}
if(typeof(attributes.height)!=="undefined"){newNode.setAttribute("height",attributes.height);}}}
var HAS_GET_ATTRIBUTE_BUG=!wysihtml5.browser.supportsGetAttributeCorrectly();function _getAttribute(node,attributeName){attributeName=attributeName.toLowerCase();var nodeName=node.nodeName;if(nodeName=="IMG"&&attributeName=="src"&&_isLoadedImage(node)===true){return node.src;}else if(HAS_GET_ATTRIBUTE_BUG&&"outerHTML"in node){var outerHTML=node.outerHTML.toLowerCase(),hasAttribute=outerHTML.indexOf(" "+attributeName+"=")!=-1;return hasAttribute?node.getAttribute(attributeName):null;}else{return node.getAttribute(attributeName);}}
function _isLoadedImage(node){try{return node.complete&&!node.mozMatchesSelector(":-moz-broken");}catch(e){if(node.complete&&node.readyState==="complete"){return true;}}}
function _handleText(oldNode){return oldNode.ownerDocument.createTextNode(oldNode.data);}
var attributeCheckMethods={url:(function(){var REG_EXP=/^https?:\/\//i;return function(attributeValue){if(!attributeValue||!attributeValue.match(REG_EXP)){return null;}
return attributeValue.replace(REG_EXP,function(match){return match.toLowerCase();});};})(),alt:(function(){var REG_EXP=/[^ a-z0-9_\-]/gi;return function(attributeValue){if(!attributeValue){return"";}
return attributeValue.replace(REG_EXP,"");};})(),numbers:(function(){var REG_EXP=/\D/g;return function(attributeValue){attributeValue=(attributeValue||"").replace(REG_EXP,"");return attributeValue||null;};})()};var addClassMethods={align_img:(function(){var mapping={left:"wysiwyg-float-left",right:"wysiwyg-float-right"};return function(attributeValue){return mapping[String(attributeValue).toLowerCase()];};})(),align_text:(function(){var mapping={left:"wysiwyg-text-align-left",right:"wysiwyg-text-align-right",center:"wysiwyg-text-align-center",justify:"wysiwyg-text-align-justify"};return function(attributeValue){return mapping[String(attributeValue).toLowerCase()];};})(),clear_br:(function(){var mapping={left:"wysiwyg-clear-left",right:"wysiwyg-clear-right",both:"wysiwyg-clear-both",all:"wysiwyg-clear-both"};return function(attributeValue){return mapping[String(attributeValue).toLowerCase()];};})(),size_font:(function(){var mapping={"1":"wysiwyg-font-size-xx-small","2":"wysiwyg-font-size-small","3":"wysiwyg-font-size-medium","4":"wysiwyg-font-size-large","5":"wysiwyg-font-size-x-large","6":"wysiwyg-font-size-xx-large","7":"wysiwyg-font-size-xx-large","-":"wysiwyg-font-size-smaller","+":"wysiwyg-font-size-larger"};return function(attributeValue){return mapping[String(attributeValue).charAt(0)];};})()};return parse;})();wysihtml5.dom.removeEmptyTextNodes=function(node){var childNode,childNodes=wysihtml5.lang.array(node.childNodes).get(),childNodesLength=childNodes.length,i=0;for(;i<childNodesLength;i++){childNode=childNodes[i];if(childNode.nodeType===wysihtml5.TEXT_NODE&&childNode.data===""){childNode.parentNode.removeChild(childNode);}}};wysihtml5.dom.renameElement=function(element,newNodeName){var newElement=element.ownerDocument.createElement(newNodeName),firstChild;while(firstChild=element.firstChild){newElement.appendChild(firstChild);}
wysihtml5.dom.copyAttributes(["align","className"]).from(element).to(newElement);element.parentNode.replaceChild(newElement,element);return newElement;};wysihtml5.dom.replaceWithChildNodes=function(node){if(!node.parentNode){return;}
if(!node.firstChild){node.parentNode.removeChild(node);return;}
var fragment=node.ownerDocument.createDocumentFragment();while(node.firstChild){fragment.appendChild(node.firstChild);}
node.parentNode.replaceChild(fragment,node);node=fragment=null;};(function(dom){function _isBlockElement(node){return dom.getStyle("display").from(node)==="block";}
function _isLineBreak(node){return node.nodeName==="BR";}
function _appendLineBreak(element){var lineBreak=element.ownerDocument.createElement("br");element.appendChild(lineBreak);}
function resolveList(list){if(list.nodeName!=="MENU"&&list.nodeName!=="UL"&&list.nodeName!=="OL"){return;}
var doc=list.ownerDocument,fragment=doc.createDocumentFragment(),previousSibling=list.previousElementSibling||list.previousSibling,firstChild,lastChild,isLastChild,shouldAppendLineBreak,listItem;if(previousSibling&&!_isBlockElement(previousSibling)){_appendLineBreak(fragment);}
while(listItem=list.firstChild){lastChild=listItem.lastChild;while(firstChild=listItem.firstChild){isLastChild=firstChild===lastChild;shouldAppendLineBreak=isLastChild&&!_isBlockElement(firstChild)&&!_isLineBreak(firstChild);fragment.appendChild(firstChild);if(shouldAppendLineBreak){_appendLineBreak(fragment);}}
listItem.parentNode.removeChild(listItem);}
list.parentNode.replaceChild(fragment,list);}
dom.resolveList=resolveList;})(wysihtml5.dom);(function(wysihtml5){var
doc=document,windowProperties=["parent","top","opener","frameElement","frames","localStorage","globalStorage","sessionStorage","indexedDB"],windowProperties2=["open","close","openDialog","showModalDialog","alert","confirm","prompt","openDatabase","postMessage","XMLHttpRequest","XDomainRequest"],documentProperties=["referrer","write","open","close"];wysihtml5.dom.Sandbox=Base.extend({constructor:function(readyCallback,config){this.callback=readyCallback||wysihtml5.EMPTY_FUNCTION;this.config=wysihtml5.lang.object({}).merge(config).get();this.iframe=this._createIframe();},insertInto:function(element){if(typeof(element)==="string"){element=doc.getElementById(element);}
element.appendChild(this.iframe);},getIframe:function(){return this.iframe;},getWindow:function(){this._readyError();},getDocument:function(){this._readyError();},destroy:function(){var iframe=this.getIframe();iframe.parentNode.removeChild(iframe);},_readyError:function(){throw new Error("wysihtml5.Sandbox: Sandbox iframe isn't loaded yet");},_createIframe:function(){var that=this,iframe=doc.createElement("iframe");iframe.className="wysihtml5-sandbox";wysihtml5.dom.setAttributes({"security":"restricted","allowtransparency":"true","frameborder":0,"width":0,"height":0,"marginwidth":0,"marginheight":0}).on(iframe);if(wysihtml5.browser.throwsMixedContentWarningWhenIframeSrcIsEmpty()){iframe.src="javascript:'<html></html>'";}
iframe.onload=function(){iframe.onreadystatechange=iframe.onload=null;that._onLoadIframe(iframe);};iframe.onreadystatechange=function(){if(/loaded|complete/.test(iframe.readyState)){iframe.onreadystatechange=iframe.onload=null;that._onLoadIframe(iframe);}};return iframe;},_onLoadIframe:function(iframe){if(!wysihtml5.dom.contains(doc.documentElement,iframe)){return;}
var that=this,iframeWindow=iframe.contentWindow,iframeDocument=iframe.contentWindow.document,charset=doc.characterSet||doc.charset||"utf-8",sandboxHtml=this._getHtml({charset:charset,stylesheets:this.config.stylesheets});iframeDocument.open("text/html","replace");iframeDocument.write(sandboxHtml);iframeDocument.close();this.getWindow=function(){return iframe.contentWindow;};this.getDocument=function(){return iframe.contentWindow.document;};iframeWindow.onerror=function(errorMessage,fileName,lineNumber){throw new Error("wysihtml5.Sandbox: "+errorMessage,fileName,lineNumber);};if(!wysihtml5.browser.supportsSandboxedIframes()){var i,length;for(i=0,length=windowProperties.length;i<length;i++){this._unset(iframeWindow,windowProperties[i]);}
for(i=0,length=windowProperties2.length;i<length;i++){this._unset(iframeWindow,windowProperties2[i],wysihtml5.EMPTY_FUNCTION);}
for(i=0,length=documentProperties.length;i<length;i++){this._unset(iframeDocument,documentProperties[i]);}
this._unset(iframeDocument,"cookie","",true);}
this.loaded=true;setTimeout(function(){that.callback(that);},0);},_getHtml:function(templateVars){var stylesheets=templateVars.stylesheets,html="",i=0,length;stylesheets=typeof(stylesheets)==="string"?[stylesheets]:stylesheets;if(stylesheets){length=stylesheets.length;for(;i<length;i++){html+='<link rel="stylesheet" href="'+stylesheets[i]+'">';}}
templateVars.stylesheets=html;return wysihtml5.lang.string('<!DOCTYPE html><html><head>'
+'<meta charset="#{charset}">#{stylesheets}</head>'
+'<body></body></html>').interpolate(templateVars);},_unset:function(object,property,value,setter){try{object[property]=value;}catch(e){}
try{object.__defineGetter__(property,function(){return value;});}catch(e){}
if(setter){try{object.__defineSetter__(property,function(){});}catch(e){}}
if(!wysihtml5.browser.crashesWhenDefineProperty(property)){try{var config={get:function(){return value;}};if(setter){config.set=function(){};}
Object.defineProperty(object,property,config);}catch(e){}}}});})(wysihtml5);(function(){var mapping={"className":"class"};wysihtml5.dom.setAttributes=function(attributes){return{on:function(element){for(var i in attributes){element.setAttribute(mapping[i]||i,attributes[i]);}}}};})();wysihtml5.dom.setStyles=function(styles){return{on:function(element){var style=element.style;if(typeof(styles)==="string"){style.cssText+=";"+styles;return;}
for(var i in styles){if(i==="float"){style.cssFloat=styles[i];style.styleFloat=styles[i];}else{style[i]=styles[i];}}}};};(function(dom){dom.simulatePlaceholder=function(editor,view,placeholderText){var CLASS_NAME="placeholder",unset=function(){if(view.hasPlaceholderSet()){view.clear();}
dom.removeClass(view.element,CLASS_NAME);},set=function(){if(view.isEmpty()){view.setValue(placeholderText);dom.addClass(view.element,CLASS_NAME);}};editor.observe("set_placeholder",set).observe("unset_placeholder",unset).observe("focus:composer",unset).observe("paste:composer",unset).observe("blur:composer",set);set();};})(wysihtml5.dom);(function(dom){var documentElement=document.documentElement;if("textContent"in documentElement){dom.setTextContent=function(element,text){element.textContent=text;};dom.getTextContent=function(element){return element.textContent;};}else if("innerText"in documentElement){dom.setTextContent=function(element,text){element.innerText=text;};dom.getTextContent=function(element){return element.innerText;};}else{dom.setTextContent=function(element,text){element.nodeValue=text;};dom.getTextContent=function(element){return element.nodeValue;};}})(wysihtml5.dom);wysihtml5.quirks.cleanPastedHTML=(function(){var defaultRules={"a u":wysihtml5.dom.replaceWithChildNodes};function cleanPastedHTML(elementOrHtml,rules,context){rules=rules||defaultRules;context=context||elementOrHtml.ownerDocument||document;var element,isString=typeof(elementOrHtml)==="string",method,matches,matchesLength,i,j=0;if(isString){element=wysihtml5.dom.getAsDom(elementOrHtml,context);}else{element=elementOrHtml;}
for(i in rules){matches=element.querySelectorAll(i);method=rules[i];matchesLength=matches.length;for(;j<matchesLength;j++){method(matches[j]);}}
matches=elementOrHtml=rules=null;return isString?element.innerHTML:element;}
return cleanPastedHTML;})();(function(wysihtml5){var dom=wysihtml5.dom;wysihtml5.quirks.ensureProperClearing=(function(){var clearIfNecessary=function(event){var element=this;setTimeout(function(){var innerHTML=element.innerHTML.toLowerCase();if(innerHTML=="<p>&nbsp;</p>"||innerHTML=="<p>&nbsp;</p><p>&nbsp;</p>"){element.innerHTML="";}},0);};return function(composer){dom.observe(composer.element,["cut","keydown"],clearIfNecessary);};})();wysihtml5.quirks.ensureProperClearingOfLists=(function(){var ELEMENTS_THAT_CONTAIN_LI=["OL","UL","MENU"];var clearIfNecessary=function(element,contentEditableElement){if(!contentEditableElement.firstChild||!wysihtml5.lang.array(ELEMENTS_THAT_CONTAIN_LI).contains(contentEditableElement.firstChild.nodeName)){return;}
var list=dom.getParentElement(element,{nodeName:ELEMENTS_THAT_CONTAIN_LI});if(!list){return;}
var listIsFirstChildOfContentEditable=list==contentEditableElement.firstChild;if(!listIsFirstChildOfContentEditable){return;}
var hasOnlyOneListItem=list.childNodes.length<=1;if(!hasOnlyOneListItem){return;}
var onlyListItemIsEmpty=list.firstChild?list.firstChild.innerHTML==="":true;if(!onlyListItemIsEmpty){return;}
list.parentNode.removeChild(list);};return function(composer){dom.observe(composer.element,"keydown",function(event){if(event.keyCode!==wysihtml5.BACKSPACE_KEY){return;}
var element=composer.selection.getSelectedNode();clearIfNecessary(element,composer.element);});};})();})(wysihtml5);(function(wysihtml5){var TILDE_ESCAPED="%7E";wysihtml5.quirks.getCorrectInnerHTML=function(element){var innerHTML=element.innerHTML;if(innerHTML.indexOf(TILDE_ESCAPED)===-1){return innerHTML;}
var elementsWithTilde=element.querySelectorAll("[href*='~'], [src*='~']"),url,urlToSearch,length,i;for(i=0,length=elementsWithTilde.length;i<length;i++){url=elementsWithTilde[i].href||elementsWithTilde[i].src;urlToSearch=wysihtml5.lang.string(url).replace("~").by(TILDE_ESCAPED);innerHTML=wysihtml5.lang.string(innerHTML).replace(urlToSearch).by(url);}
return innerHTML;};})(wysihtml5);(function(wysihtml5){var dom=wysihtml5.dom,USE_NATIVE_LINE_BREAK_WHEN_CARET_INSIDE_TAGS=["LI","P","H1","H2","H3","H4","H5","H6"],LIST_TAGS=["UL","OL","MENU"];wysihtml5.quirks.insertLineBreakOnReturn=function(composer){function unwrap(selectedNode){var parentElement=dom.getParentElement(selectedNode,{nodeName:["P","DIV"]},2);if(!parentElement){return;}
var invisibleSpace=document.createTextNode(wysihtml5.INVISIBLE_SPACE);dom.insert(invisibleSpace).before(parentElement);dom.replaceWithChildNodes(parentElement);composer.selection.selectNode(invisibleSpace);}
function keyDown(event){var keyCode=event.keyCode;if(event.shiftKey||(keyCode!==wysihtml5.ENTER_KEY&&keyCode!==wysihtml5.BACKSPACE_KEY)){return;}
var element=event.target,selectedNode=composer.selection.getSelectedNode(),blockElement=dom.getParentElement(selectedNode,{nodeName:USE_NATIVE_LINE_BREAK_WHEN_CARET_INSIDE_TAGS},4);if(blockElement){if(blockElement.nodeName==="LI"&&(keyCode===wysihtml5.ENTER_KEY||keyCode===wysihtml5.BACKSPACE_KEY)){setTimeout(function(){var selectedNode=composer.selection.getSelectedNode(),list,div;if(!selectedNode){return;}
list=dom.getParentElement(selectedNode,{nodeName:LIST_TAGS},2);if(list){return;}
unwrap(selectedNode);},0);}else if(blockElement.nodeName.match(/H[1-6]/)&&keyCode===wysihtml5.ENTER_KEY){setTimeout(function(){unwrap(composer.selection.getSelectedNode());},0);}
return;}
if(keyCode===wysihtml5.ENTER_KEY&&!wysihtml5.browser.insertsLineBreaksOnReturn()){composer.commands.exec("insertLineBreak");event.preventDefault();}}
dom.observe(composer.element.ownerDocument,"keydown",keyDown);};})(wysihtml5);(function(wysihtml5){var CLASS_NAME="wysihtml5-quirks-redraw";wysihtml5.quirks.redraw=function(element){wysihtml5.dom.addClass(element,CLASS_NAME);wysihtml5.dom.removeClass(element,CLASS_NAME);try{var doc=element.ownerDocument;doc.execCommand("italic",false,null);doc.execCommand("italic",false,null);}catch(e){}};})(wysihtml5);(function(wysihtml5){var dom=wysihtml5.dom;function _getCumulativeOffsetTop(element){var top=0;if(element.parentNode){do{top+=element.offsetTop||0;element=element.offsetParent;}while(element);}
return top;}
wysihtml5.Selection=Base.extend({constructor:function(editor){window.rangy.init();this.editor=editor;this.composer=editor.composer;this.doc=this.composer.doc;},getBookmark:function(){var range=this.getRange();return range&&range.cloneRange();},setBookmark:function(bookmark){if(!bookmark){return;}
this.setSelection(bookmark);},setBefore:function(node){var range=rangy.createRange(this.doc);range.setStartBefore(node);range.setEndBefore(node);return this.setSelection(range);},setAfter:function(node){var range=rangy.createRange(this.doc);range.setStartAfter(node);range.setEndAfter(node);return this.setSelection(range);},selectNode:function(node){var range=rangy.createRange(this.doc),isElement=node.nodeType===wysihtml5.ELEMENT_NODE,canHaveHTML="canHaveHTML"in node?node.canHaveHTML:(node.nodeName!=="IMG"),content=isElement?node.innerHTML:node.data,isEmpty=(content===""||content===wysihtml5.INVISIBLE_SPACE),displayStyle=dom.getStyle("display").from(node),isBlockElement=(displayStyle==="block"||displayStyle==="list-item");if(isEmpty&&isElement&&canHaveHTML){try{node.innerHTML=wysihtml5.INVISIBLE_SPACE;}catch(e){}}
if(canHaveHTML){range.selectNodeContents(node);}else{range.selectNode(node);}
if(canHaveHTML&&isEmpty&&isElement){range.collapse(isBlockElement);}else if(canHaveHTML&&isEmpty){range.setStartAfter(node);range.setEndAfter(node);}
this.setSelection(range);},getSelectedNode:function(controlRange){var selection,range;if(controlRange&&this.doc.selection&&this.doc.selection.type==="Control"){range=this.doc.selection.createRange();if(range&&range.length){return range.item(0);}}
selection=this.getSelection(this.doc);if(selection.focusNode===selection.anchorNode){return selection.focusNode;}else{range=this.getRange(this.doc);return range?range.commonAncestorContainer:this.doc.body;}},executeAndRestore:function(method,restoreScrollPosition){var body=this.doc.body,oldScrollTop=restoreScrollPosition&&body.scrollTop,oldScrollLeft=restoreScrollPosition&&body.scrollLeft,className="_wysihtml5-temp-placeholder",placeholderHTML='<span class="'+className+'">'+wysihtml5.INVISIBLE_SPACE+'</span>',range=this.getRange(this.doc),newRange;if(!range){method(body,body);return;}
var node=range.createContextualFragment(placeholderHTML);range.insertNode(node);try{method(range.startContainer,range.endContainer);}catch(e3){setTimeout(function(){throw e3;},0);}
caretPlaceholder=this.doc.querySelector("."+className);if(caretPlaceholder){newRange=rangy.createRange(this.doc);newRange.selectNode(caretPlaceholder);newRange.deleteContents();this.setSelection(newRange);}else{body.focus();}
if(restoreScrollPosition){body.scrollTop=oldScrollTop;body.scrollLeft=oldScrollLeft;}
try{caretPlaceholder.parentNode.removeChild(caretPlaceholder);}catch(e4){}},executeAndRestoreSimple:function(method){var range=this.getRange(),body=this.doc.body,newRange,firstNode,lastNode,textNodes,rangeBackup;if(!range){method(body,body);return;}
textNodes=range.getNodes([3]);firstNode=textNodes[0]||range.startContainer;lastNode=textNodes[textNodes.length-1]||range.endContainer;rangeBackup={collapsed:range.collapsed,startContainer:firstNode,startOffset:firstNode===range.startContainer?range.startOffset:0,endContainer:lastNode,endOffset:lastNode===range.endContainer?range.endOffset:lastNode.length};try{method(range.startContainer,range.endContainer);}catch(e){setTimeout(function(){throw e;},0);}
newRange=rangy.createRange(this.doc);try{newRange.setStart(rangeBackup.startContainer,rangeBackup.startOffset);}catch(e1){}
try{newRange.setEnd(rangeBackup.endContainer,rangeBackup.endOffset);}catch(e2){}
try{this.setSelection(newRange);}catch(e3){}},insertHTML:function(html){var range=rangy.createRange(this.doc),node=range.createContextualFragment(html),lastChild=node.lastChild;this.insertNode(node);if(lastChild){this.setAfter(lastChild);}},insertNode:function(node){var range=this.getRange();if(range){range.insertNode(node);}},surround:function(node){var range=this.getRange();if(!range){return;}
try{range.surroundContents(node);this.selectNode(node);}catch(e){node.appendChild(range.extractContents());range.insertNode(node);}},scrollIntoView:function(){var doc=this.doc,hasScrollBars=doc.documentElement.scrollHeight>doc.documentElement.offsetHeight,tempElement=doc._wysihtml5ScrollIntoViewElement=doc._wysihtml5ScrollIntoViewElement||(function(){var element=doc.createElement("span");element.innerHTML=wysihtml5.INVISIBLE_SPACE;return element;})(),offsetTop;if(hasScrollBars){this.insertNode(tempElement);offsetTop=_getCumulativeOffsetTop(tempElement);tempElement.parentNode.removeChild(tempElement);if(offsetTop>doc.body.scrollTop){doc.body.scrollTop=offsetTop;}}},selectLine:function(){if(wysihtml5.browser.supportsSelectionModify()){this._selectLine_W3C();}else if(this.doc.selection){this._selectLine_MSIE();}},_selectLine_W3C:function(){var win=this.doc.defaultView,selection=win.getSelection();selection.modify("extend","left","lineboundary");selection.modify("extend","right","lineboundary");},_selectLine_MSIE:function(){var range=this.doc.selection.createRange(),rangeTop=range.boundingTop,rangeHeight=range.boundingHeight,scrollWidth=this.doc.body.scrollWidth,rangeBottom,rangeEnd,measureNode,i,j;if(!range.moveToPoint){return;}
if(rangeTop===0){measureNode=this.doc.createElement("span");this.insertNode(measureNode);rangeTop=measureNode.offsetTop;measureNode.parentNode.removeChild(measureNode);}
rangeTop+=1;for(i=-10;i<scrollWidth;i+=2){try{range.moveToPoint(i,rangeTop);break;}catch(e1){}}
rangeBottom=rangeTop;rangeEnd=this.doc.selection.createRange();for(j=scrollWidth;j>=0;j--){try{rangeEnd.moveToPoint(j,rangeBottom);break;}catch(e2){}}
range.setEndPoint("EndToEnd",rangeEnd);range.select();},getText:function(){var selection=this.getSelection();return selection?selection.toString():"";},getNodes:function(nodeType,filter){var range=this.getRange();if(range){return range.getNodes([nodeType],filter);}else{return[];}},getRange:function(){var selection=this.getSelection();return selection&&selection.rangeCount&&selection.getRangeAt(0);},getSelection:function(){return rangy.getSelection(this.doc.defaultView||this.doc.parentWindow);},setSelection:function(range){var win=this.doc.defaultView||this.doc.parentWindow,selection=rangy.getSelection(win);return selection.setSingleRange(range);}});})(wysihtml5);(function(wysihtml5,rangy){var defaultTagName="span";var REG_EXP_WHITE_SPACE=/\s+/g;function hasClass(el,cssClass,regExp){if(!el.className){return false;}
var matchingClassNames=el.className.match(regExp)||[];return matchingClassNames[matchingClassNames.length-1]===cssClass;}
function addClass(el,cssClass,regExp){if(el.className){removeClass(el,regExp);el.className+=" "+cssClass;}else{el.className=cssClass;}}
function removeClass(el,regExp){if(el.className){el.className=el.className.replace(regExp,"");}}
function hasSameClasses(el1,el2){return el1.className.replace(REG_EXP_WHITE_SPACE," ")==el2.className.replace(REG_EXP_WHITE_SPACE," ");}
function replaceWithOwnChildren(el){var parent=el.parentNode;while(el.firstChild){parent.insertBefore(el.firstChild,el);}
parent.removeChild(el);}
function elementsHaveSameNonClassAttributes(el1,el2){if(el1.attributes.length!=el2.attributes.length){return false;}
for(var i=0,len=el1.attributes.length,attr1,attr2,name;i<len;++i){attr1=el1.attributes[i];name=attr1.name;if(name!="class"){attr2=el2.attributes.getNamedItem(name);if(attr1.specified!=attr2.specified){return false;}
if(attr1.specified&&attr1.nodeValue!==attr2.nodeValue){return false;}}}
return true;}
function isSplitPoint(node,offset){if(rangy.dom.isCharacterDataNode(node)){if(offset==0){return!!node.previousSibling;}else if(offset==node.length){return!!node.nextSibling;}else{return true;}}
return offset>0&&offset<node.childNodes.length;}
function splitNodeAt(node,descendantNode,descendantOffset){var newNode;if(rangy.dom.isCharacterDataNode(descendantNode)){if(descendantOffset==0){descendantOffset=rangy.dom.getNodeIndex(descendantNode);descendantNode=descendantNode.parentNode;}else if(descendantOffset==descendantNode.length){descendantOffset=rangy.dom.getNodeIndex(descendantNode)+1;descendantNode=descendantNode.parentNode;}else{newNode=rangy.dom.splitDataNode(descendantNode,descendantOffset);}}
if(!newNode){newNode=descendantNode.cloneNode(false);if(newNode.id){newNode.removeAttribute("id");}
var child;while((child=descendantNode.childNodes[descendantOffset])){newNode.appendChild(child);}
rangy.dom.insertAfter(newNode,descendantNode);}
return(descendantNode==node)?newNode:splitNodeAt(node,newNode.parentNode,rangy.dom.getNodeIndex(newNode));}
function Merge(firstNode){this.isElementMerge=(firstNode.nodeType==wysihtml5.ELEMENT_NODE);this.firstTextNode=this.isElementMerge?firstNode.lastChild:firstNode;this.textNodes=[this.firstTextNode];}
Merge.prototype={doMerge:function(){var textBits=[],textNode,parent,text;for(var i=0,len=this.textNodes.length;i<len;++i){textNode=this.textNodes[i];parent=textNode.parentNode;textBits[i]=textNode.data;if(i){parent.removeChild(textNode);if(!parent.hasChildNodes()){parent.parentNode.removeChild(parent);}}}
this.firstTextNode.data=text=textBits.join("");return text;},getLength:function(){var i=this.textNodes.length,len=0;while(i--){len+=this.textNodes[i].length;}
return len;},toString:function(){var textBits=[];for(var i=0,len=this.textNodes.length;i<len;++i){textBits[i]="'"+this.textNodes[i].data+"'";}
return"[Merge("+textBits.join(",")+")]";}};function HTMLApplier(tagNames,cssClass,similarClassRegExp,normalize){this.tagNames=tagNames||[defaultTagName];this.cssClass=cssClass||"";this.similarClassRegExp=similarClassRegExp;this.normalize=normalize;this.applyToAnyTagName=false;}
HTMLApplier.prototype={getAncestorWithClass:function(node){var cssClassMatch;while(node){cssClassMatch=this.cssClass?hasClass(node,this.cssClass,this.similarClassRegExp):true;if(node.nodeType==wysihtml5.ELEMENT_NODE&&rangy.dom.arrayContains(this.tagNames,node.tagName.toLowerCase())&&cssClassMatch){return node;}
node=node.parentNode;}
return false;},postApply:function(textNodes,range){var firstNode=textNodes[0],lastNode=textNodes[textNodes.length-1];var merges=[],currentMerge;var rangeStartNode=firstNode,rangeEndNode=lastNode;var rangeStartOffset=0,rangeEndOffset=lastNode.length;var textNode,precedingTextNode;for(var i=0,len=textNodes.length;i<len;++i){textNode=textNodes[i];precedingTextNode=this.getAdjacentMergeableTextNode(textNode.parentNode,false);if(precedingTextNode){if(!currentMerge){currentMerge=new Merge(precedingTextNode);merges.push(currentMerge);}
currentMerge.textNodes.push(textNode);if(textNode===firstNode){rangeStartNode=currentMerge.firstTextNode;rangeStartOffset=rangeStartNode.length;}
if(textNode===lastNode){rangeEndNode=currentMerge.firstTextNode;rangeEndOffset=currentMerge.getLength();}}else{currentMerge=null;}}
var nextTextNode=this.getAdjacentMergeableTextNode(lastNode.parentNode,true);if(nextTextNode){if(!currentMerge){currentMerge=new Merge(lastNode);merges.push(currentMerge);}
currentMerge.textNodes.push(nextTextNode);}
if(merges.length){for(i=0,len=merges.length;i<len;++i){merges[i].doMerge();}
range.setStart(rangeStartNode,rangeStartOffset);range.setEnd(rangeEndNode,rangeEndOffset);}},getAdjacentMergeableTextNode:function(node,forward){var isTextNode=(node.nodeType==wysihtml5.TEXT_NODE);var el=isTextNode?node.parentNode:node;var adjacentNode;var propName=forward?"nextSibling":"previousSibling";if(isTextNode){adjacentNode=node[propName];if(adjacentNode&&adjacentNode.nodeType==wysihtml5.TEXT_NODE){return adjacentNode;}}else{adjacentNode=el[propName];if(adjacentNode&&this.areElementsMergeable(node,adjacentNode)){return adjacentNode[forward?"firstChild":"lastChild"];}}
return null;},areElementsMergeable:function(el1,el2){return rangy.dom.arrayContains(this.tagNames,(el1.tagName||"").toLowerCase())&&rangy.dom.arrayContains(this.tagNames,(el2.tagName||"").toLowerCase())&&hasSameClasses(el1,el2)&&elementsHaveSameNonClassAttributes(el1,el2);},createContainer:function(doc){var el=doc.createElement(this.tagNames[0]);if(this.cssClass){el.className=this.cssClass;}
return el;},applyToTextNode:function(textNode){var parent=textNode.parentNode;if(parent.childNodes.length==1&&rangy.dom.arrayContains(this.tagNames,parent.tagName.toLowerCase())){if(this.cssClass){addClass(parent,this.cssClass,this.similarClassRegExp);}}else{var el=this.createContainer(rangy.dom.getDocument(textNode));textNode.parentNode.insertBefore(el,textNode);el.appendChild(textNode);}},isRemovable:function(el){return rangy.dom.arrayContains(this.tagNames,el.tagName.toLowerCase())&&wysihtml5.lang.string(el.className).trim()==this.cssClass;},undoToTextNode:function(textNode,range,ancestorWithClass){if(!range.containsNode(ancestorWithClass)){var ancestorRange=range.cloneRange();ancestorRange.selectNode(ancestorWithClass);if(ancestorRange.isPointInRange(range.endContainer,range.endOffset)&&isSplitPoint(range.endContainer,range.endOffset)){splitNodeAt(ancestorWithClass,range.endContainer,range.endOffset);range.setEndAfter(ancestorWithClass);}
if(ancestorRange.isPointInRange(range.startContainer,range.startOffset)&&isSplitPoint(range.startContainer,range.startOffset)){ancestorWithClass=splitNodeAt(ancestorWithClass,range.startContainer,range.startOffset);}}
if(this.similarClassRegExp){removeClass(ancestorWithClass,this.similarClassRegExp);}
if(this.isRemovable(ancestorWithClass)){replaceWithOwnChildren(ancestorWithClass);}},applyToRange:function(range){var textNodes=range.getNodes([wysihtml5.TEXT_NODE]);if(!textNodes.length){try{var node=this.createContainer(range.endContainer.ownerDocument);range.surroundContents(node);this.selectNode(range,node);return;}catch(e){}}
range.splitBoundaries();textNodes=range.getNodes([wysihtml5.TEXT_NODE]);if(textNodes.length){var textNode;for(var i=0,len=textNodes.length;i<len;++i){textNode=textNodes[i];if(!this.getAncestorWithClass(textNode)){this.applyToTextNode(textNode);}}
range.setStart(textNodes[0],0);textNode=textNodes[textNodes.length-1];range.setEnd(textNode,textNode.length);if(this.normalize){this.postApply(textNodes,range);}}},undoToRange:function(range){var textNodes=range.getNodes([wysihtml5.TEXT_NODE]),textNode,ancestorWithClass;if(textNodes.length){range.splitBoundaries();textNodes=range.getNodes([wysihtml5.TEXT_NODE]);}else{var doc=range.endContainer.ownerDocument,node=doc.createTextNode(wysihtml5.INVISIBLE_SPACE);range.insertNode(node);range.selectNode(node);textNodes=[node];}
for(var i=0,len=textNodes.length;i<len;++i){textNode=textNodes[i];ancestorWithClass=this.getAncestorWithClass(textNode);if(ancestorWithClass){this.undoToTextNode(textNode,range,ancestorWithClass);}}
if(len==1){this.selectNode(range,textNodes[0]);}else{range.setStart(textNodes[0],0);textNode=textNodes[textNodes.length-1];range.setEnd(textNode,textNode.length);if(this.normalize){this.postApply(textNodes,range);}}},selectNode:function(range,node){var isElement=node.nodeType===wysihtml5.ELEMENT_NODE,canHaveHTML="canHaveHTML"in node?node.canHaveHTML:true,content=isElement?node.innerHTML:node.data,isEmpty=(content===""||content===wysihtml5.INVISIBLE_SPACE);if(isEmpty&&isElement&&canHaveHTML){try{node.innerHTML=wysihtml5.INVISIBLE_SPACE;}catch(e){}}
range.selectNodeContents(node);if(isEmpty&&isElement){range.collapse(false);}else if(isEmpty){range.setStartAfter(node);range.setEndAfter(node);}},getTextSelectedByRange:function(textNode,range){var textRange=range.cloneRange();textRange.selectNodeContents(textNode);var intersectionRange=textRange.intersection(range);var text=intersectionRange?intersectionRange.toString():"";textRange.detach();return text;},isAppliedToRange:function(range){var ancestors=[],ancestor,textNodes=range.getNodes([wysihtml5.TEXT_NODE]);if(!textNodes.length){ancestor=this.getAncestorWithClass(range.startContainer);return ancestor?[ancestor]:false;}
for(var i=0,len=textNodes.length,selectedText;i<len;++i){selectedText=this.getTextSelectedByRange(textNodes[i],range);ancestor=this.getAncestorWithClass(textNodes[i]);if(selectedText!=""&&!ancestor){return false;}else{ancestors.push(ancestor);}}
return ancestors;},toggleRange:function(range){if(this.isAppliedToRange(range)){this.undoToRange(range);}else{this.applyToRange(range);}}};wysihtml5.selection.HTMLApplier=HTMLApplier;})(wysihtml5,rangy);wysihtml5.Commands=Base.extend({constructor:function(editor){this.editor=editor;this.composer=editor.composer;this.doc=this.composer.doc;},support:function(command){return wysihtml5.browser.supportsCommand(this.doc,command);},exec:function(command,value){var obj=wysihtml5.commands[command],args=wysihtml5.lang.array(arguments).get(),method=obj&&obj.exec,result=null;this.editor.fire("beforecommand:composer");if(method){args.unshift(this.composer);result=method.apply(obj,args);}else{try{result=this.doc.execCommand(command,false,value);}catch(e){}}
this.editor.fire("aftercommand:composer");return result;},state:function(command,commandValue){var obj=wysihtml5.commands[command],args=wysihtml5.lang.array(arguments).get(),method=obj&&obj.state;if(method){args.unshift(this.composer);return method.apply(obj,args);}else{try{return this.doc.queryCommandState(command);}catch(e){return false;}}},value:function(command){var obj=wysihtml5.commands[command],method=obj&&obj.value;if(method){return method.call(obj,this.composer,command);}else{try{return this.doc.queryCommandValue(command);}catch(e){return null;}}}});(function(wysihtml5){var undef;wysihtml5.commands.bold={exec:function(composer,command){return wysihtml5.commands.formatInline.exec(composer,command,"b");},state:function(composer,command,color){return wysihtml5.commands.formatInline.state(composer,command,"b");},value:function(){return undef;}};})(wysihtml5);(function(wysihtml5){var undef,NODE_NAME="A",dom=wysihtml5.dom;function _removeFormat(composer,anchors){var length=anchors.length,i=0,anchor,codeElement,textContent;for(;i<length;i++){anchor=anchors[i];codeElement=dom.getParentElement(anchor,{nodeName:"code"});textContent=dom.getTextContent(anchor);if(textContent.match(dom.autoLink.URL_REG_EXP)&&!codeElement){codeElement=dom.renameElement(anchor,"code");}else{dom.replaceWithChildNodes(anchor);}}}
function _format(composer,attributes){var doc=composer.doc,tempClass="_wysihtml5-temp-"+(+new Date()),tempClassRegExp=/non-matching-class/g,i=0,length,anchors,anchor,hasElementChild,isEmpty,elementToSetCaretAfter,textContent,whiteSpace,j;wysihtml5.commands.formatInline.exec(composer,undef,NODE_NAME,tempClass,tempClassRegExp);anchors=doc.querySelectorAll(NODE_NAME+"."+tempClass);length=anchors.length;for(;i<length;i++){anchor=anchors[i];anchor.removeAttribute("class");for(j in attributes){anchor.setAttribute(j,attributes[j]);}}
elementToSetCaretAfter=anchor;if(length===1){textContent=dom.getTextContent(anchor);hasElementChild=!!anchor.querySelector("*");isEmpty=textContent===""||textContent===wysihtml5.INVISIBLE_SPACE;if(!hasElementChild&&isEmpty){dom.setTextContent(anchor,attributes.text||anchor.href);whiteSpace=doc.createTextNode(" ");composer.selection.setAfter(anchor);composer.selection.insertNode(whiteSpace);elementToSetCaretAfter=whiteSpace;}}
composer.selection.setAfter(elementToSetCaretAfter);}
wysihtml5.commands.createLink={exec:function(composer,command,value){var anchors=this.state(composer,command);if(anchors){composer.selection.executeAndRestore(function(){_removeFormat(composer,anchors);});}else{value=typeof(value)==="object"?value:{href:value};_format(composer,value);}},state:function(composer,command){return wysihtml5.commands.formatInline.state(composer,command,"A");},value:function(){return undef;}};})(wysihtml5);(function(wysihtml5){var undef,REG_EXP=/wysiwyg-font-size-[a-z\-]+/g;wysihtml5.commands.fontSize={exec:function(composer,command,size){return wysihtml5.commands.formatInline.exec(composer,command,"span","wysiwyg-font-size-"+size,REG_EXP);},state:function(composer,command,size){return wysihtml5.commands.formatInline.state(composer,command,"span","wysiwyg-font-size-"+size,REG_EXP);},value:function(){return undef;}};})(wysihtml5);(function(wysihtml5){var undef,REG_EXP=/wysiwyg-color-[a-z]+/g;wysihtml5.commands.foreColor={exec:function(composer,command,color){return wysihtml5.commands.formatInline.exec(composer,command,"span","wysiwyg-color-"+color,REG_EXP);},state:function(composer,command,color){return wysihtml5.commands.formatInline.state(composer,command,"span","wysiwyg-color-"+color,REG_EXP);},value:function(){return undef;}};})(wysihtml5);(function(wysihtml5){var undef,dom=wysihtml5.dom,DEFAULT_NODE_NAME="DIV",BLOCK_ELEMENTS_GROUP=["H1","H2","H3","H4","H5","H6","P","BLOCKQUOTE",DEFAULT_NODE_NAME];function _addClass(element,className,classRegExp){if(element.className){_removeClass(element,classRegExp);element.className+=" "+className;}else{element.className=className;}}
function _removeClass(element,classRegExp){element.className=element.className.replace(classRegExp,"");}
function _isBlankTextNode(node){return node.nodeType===wysihtml5.TEXT_NODE&&!wysihtml5.lang.string(node.data).trim();}
function _getPreviousSiblingThatIsNotBlank(node){var previousSibling=node.previousSibling;while(previousSibling&&_isBlankTextNode(previousSibling)){previousSibling=previousSibling.previousSibling;}
return previousSibling;}
function _getNextSiblingThatIsNotBlank(node){var nextSibling=node.nextSibling;while(nextSibling&&_isBlankTextNode(nextSibling)){nextSibling=nextSibling.nextSibling;}
return nextSibling;}
function _addLineBreakBeforeAndAfter(node){var doc=node.ownerDocument,nextSibling=_getNextSiblingThatIsNotBlank(node),previousSibling=_getPreviousSiblingThatIsNotBlank(node);if(nextSibling&&!_isLineBreakOrBlockElement(nextSibling)){node.parentNode.insertBefore(doc.createElement("br"),nextSibling);}
if(previousSibling&&!_isLineBreakOrBlockElement(previousSibling)){node.parentNode.insertBefore(doc.createElement("br"),node);}}
function _removeLineBreakBeforeAndAfter(node){var nextSibling=_getNextSiblingThatIsNotBlank(node),previousSibling=_getPreviousSiblingThatIsNotBlank(node);if(nextSibling&&_isLineBreak(nextSibling)){nextSibling.parentNode.removeChild(nextSibling);}
if(previousSibling&&_isLineBreak(previousSibling)){previousSibling.parentNode.removeChild(previousSibling);}}
function _removeLastChildIfLineBreak(node){var lastChild=node.lastChild;if(lastChild&&_isLineBreak(lastChild)){lastChild.parentNode.removeChild(lastChild);}}
function _isLineBreak(node){return node.nodeName==="BR";}
function _isLineBreakOrBlockElement(element){if(_isLineBreak(element)){return true;}
if(dom.getStyle("display").from(element)==="block"){return true;}
return false;}
function _execCommand(doc,command,nodeName,className){if(className){var eventListener=dom.observe(doc,"DOMNodeInserted",function(event){var target=event.target,displayStyle;if(target.nodeType!==wysihtml5.ELEMENT_NODE){return;}
displayStyle=dom.getStyle("display").from(target);if(displayStyle.substr(0,6)!=="inline"){target.className+=" "+className;}});}
doc.execCommand(command,false,nodeName);if(eventListener){eventListener.stop();}}
function _selectLineAndWrap(composer,element){composer.selection.selectLine();composer.selection.surround(element);_removeLineBreakBeforeAndAfter(element);_removeLastChildIfLineBreak(element);composer.selection.selectNode(element);}
function _hasClasses(element){return!!wysihtml5.lang.string(element.className).trim();}
wysihtml5.commands.formatBlock={exec:function(composer,command,nodeName,className,classRegExp){var doc=composer.doc,blockElement=this.state(composer,command,nodeName,className,classRegExp),selectedNode;nodeName=typeof(nodeName)==="string"?nodeName.toUpperCase():nodeName;if(blockElement){composer.selection.executeAndRestoreSimple(function(){if(classRegExp){_removeClass(blockElement,classRegExp);}
var hasClasses=_hasClasses(blockElement);if(!hasClasses&&blockElement.nodeName===(nodeName||DEFAULT_NODE_NAME)){_addLineBreakBeforeAndAfter(blockElement);dom.replaceWithChildNodes(blockElement);}else if(hasClasses){dom.renameElement(blockElement,DEFAULT_NODE_NAME);}});return;}
if(nodeName===null||wysihtml5.lang.array(BLOCK_ELEMENTS_GROUP).contains(nodeName)){selectedNode=composer.selection.getSelectedNode();blockElement=dom.getParentElement(selectedNode,{nodeName:BLOCK_ELEMENTS_GROUP});if(blockElement){composer.selection.executeAndRestoreSimple(function(){if(nodeName){blockElement=dom.renameElement(blockElement,nodeName);}
if(className){_addClass(blockElement,className,classRegExp);}});return;}}
if(composer.commands.support(command)){_execCommand(doc,command,nodeName||DEFAULT_NODE_NAME,className);return;}
blockElement=doc.createElement(nodeName||DEFAULT_NODE_NAME);if(className){blockElement.className=className;}
_selectLineAndWrap(composer,blockElement);},state:function(composer,command,nodeName,className,classRegExp){nodeName=typeof(nodeName)==="string"?nodeName.toUpperCase():nodeName;var selectedNode=composer.selection.getSelectedNode();return dom.getParentElement(selectedNode,{nodeName:nodeName,className:className,classRegExp:classRegExp});},value:function(){return undef;}};})(wysihtml5);(function(wysihtml5){var undef,ALIAS_MAPPING={"strong":"b","em":"i","b":"strong","i":"em"},htmlApplier={};function _getTagNames(tagName){var alias=ALIAS_MAPPING[tagName];return alias?[tagName.toLowerCase(),alias.toLowerCase()]:[tagName.toLowerCase()];}
function _getApplier(tagName,className,classRegExp){var identifier=tagName+":"+className;if(!htmlApplier[identifier]){htmlApplier[identifier]=new wysihtml5.selection.HTMLApplier(_getTagNames(tagName),className,classRegExp,true);}
return htmlApplier[identifier];}
wysihtml5.commands.formatInline={exec:function(composer,command,tagName,className,classRegExp){var range=composer.selection.getRange();if(!range){return false;}
_getApplier(tagName,className,classRegExp).toggleRange(range);composer.selection.setSelection(range);},state:function(composer,command,tagName,className,classRegExp){var doc=composer.doc,aliasTagName=ALIAS_MAPPING[tagName]||tagName,range;if(!wysihtml5.dom.hasElementWithTagName(doc,tagName)&&!wysihtml5.dom.hasElementWithTagName(doc,aliasTagName)){return false;}
if(className&&!wysihtml5.dom.hasElementWithClassName(doc,className)){return false;}
range=composer.selection.getRange();if(!range){return false;}
return _getApplier(tagName,className,classRegExp).isAppliedToRange(range);},value:function(){return undef;}};})(wysihtml5);(function(wysihtml5){var undef;wysihtml5.commands.insertHTML={exec:function(composer,command,html){if(composer.commands.support(command)){composer.doc.execCommand(command,false,html);}else{composer.selection.insertHTML(html);}},state:function(){return false;},value:function(){return undef;}};})(wysihtml5);(function(wysihtml5){var NODE_NAME="IMG";wysihtml5.commands.insertImage={exec:function(composer,command,value){value=typeof(value)==="object"?value:{src:value};var doc=composer.doc,image=this.state(composer),textNode,i,parent;if(image){composer.selection.setBefore(image);parent=image.parentNode;parent.removeChild(image);wysihtml5.dom.removeEmptyTextNodes(parent);if(parent.nodeName==="A"&&!parent.firstChild){composer.selection.setAfter(parent);parent.parentNode.removeChild(parent);}
wysihtml5.quirks.redraw(composer.element);return;}
image=doc.createElement(NODE_NAME);for(i in value){image[i]=value[i];}
composer.selection.insertNode(image);if(wysihtml5.browser.hasProblemsSettingCaretAfterImg()){textNode=doc.createTextNode(wysihtml5.INVISIBLE_SPACE);composer.selection.insertNode(textNode);composer.selection.setAfter(textNode);}else{composer.selection.setAfter(image);}},state:function(composer){var doc=composer.doc,selectedNode,text,imagesInSelection;if(!wysihtml5.dom.hasElementWithTagName(doc,NODE_NAME)){return false;}
selectedNode=composer.selection.getSelectedNode();if(!selectedNode){return false;}
if(selectedNode.nodeName===NODE_NAME){return selectedNode;}
if(selectedNode.nodeType!==wysihtml5.ELEMENT_NODE){return false;}
text=composer.selection.getText();text=wysihtml5.lang.string(text).trim();if(text){return false;}
imagesInSelection=composer.selection.getNodes(wysihtml5.ELEMENT_NODE,function(node){return node.nodeName==="IMG";});if(imagesInSelection.length!==1){return false;}
return imagesInSelection[0];},value:function(composer){var image=this.state(composer);return image&&image.src;}};})(wysihtml5);(function(wysihtml5){var undef,LINE_BREAK="<br>"+(wysihtml5.browser.needsSpaceAfterLineBreak()?" ":"");wysihtml5.commands.insertLineBreak={exec:function(composer,command){if(composer.commands.support(command)){composer.doc.execCommand(command,false,null);if(!wysihtml5.browser.autoScrollsToCaret()){composer.selection.scrollIntoView();}}else{composer.commands.exec("insertHTML",LINE_BREAK);}},state:function(){return false;},value:function(){return undef;}};})(wysihtml5);(function(wysihtml5){var undef;wysihtml5.commands.insertOrderedList={exec:function(composer,command){var doc=composer.doc,selectedNode=composer.selection.getSelectedNode(),list=wysihtml5.dom.getParentElement(selectedNode,{nodeName:"OL"}),otherList=wysihtml5.dom.getParentElement(selectedNode,{nodeName:"UL"}),tempClassName="_wysihtml5-temp-"+new Date().getTime(),isEmpty,tempElement;if(composer.commands.support(command)){doc.execCommand(command,false,null);return;}
if(list){composer.selection.executeAndRestoreSimple(function(){wysihtml5.dom.resolveList(list);});}else if(otherList){composer.selection.executeAndRestoreSimple(function(){wysihtml5.dom.renameElement(otherList,"ol");});}else{composer.commands.exec("formatBlock","div",tempClassName);tempElement=doc.querySelector("."+tempClassName);isEmpty=tempElement.innerHTML===""||tempElement.innerHTML===wysihtml5.INVISIBLE_SPACE;composer.selection.executeAndRestoreSimple(function(){list=wysihtml5.dom.convertToList(tempElement,"ol");});if(isEmpty){composer.selection.selectNode(list.querySelector("li"));}}},state:function(composer){var selectedNode=composer.selection.getSelectedNode();return wysihtml5.dom.getParentElement(selectedNode,{nodeName:"OL"});},value:function(){return undef;}};})(wysihtml5);(function(wysihtml5){var undef;wysihtml5.commands.insertUnorderedList={exec:function(composer,command){var doc=composer.doc,selectedNode=composer.selection.getSelectedNode(),list=wysihtml5.dom.getParentElement(selectedNode,{nodeName:"UL"}),otherList=wysihtml5.dom.getParentElement(selectedNode,{nodeName:"OL"}),tempClassName="_wysihtml5-temp-"+new Date().getTime(),isEmpty,tempElement;if(composer.commands.support(command)){doc.execCommand(command,false,null);return;}
if(list){composer.selection.executeAndRestoreSimple(function(){wysihtml5.dom.resolveList(list);});}else if(otherList){composer.selection.executeAndRestoreSimple(function(){wysihtml5.dom.renameElement(otherList,"ul");});}else{composer.commands.exec("formatBlock","div",tempClassName);tempElement=doc.querySelector("."+tempClassName);isEmpty=tempElement.innerHTML===""||tempElement.innerHTML===wysihtml5.INVISIBLE_SPACE;composer.selection.executeAndRestoreSimple(function(){list=wysihtml5.dom.convertToList(tempElement,"ul");});if(isEmpty){composer.selection.selectNode(list.querySelector("li"));}}},state:function(composer){var selectedNode=composer.selection.getSelectedNode();return wysihtml5.dom.getParentElement(selectedNode,{nodeName:"UL"});},value:function(){return undef;}};})(wysihtml5);(function(wysihtml5){var undef;wysihtml5.commands.italic={exec:function(composer,command){return wysihtml5.commands.formatInline.exec(composer,command,"i");},state:function(composer,command,color){return wysihtml5.commands.formatInline.state(composer,command,"i");},value:function(){return undef;}};})(wysihtml5);(function(wysihtml5){var undef,CLASS_NAME="wysiwyg-text-align-center",REG_EXP=/wysiwyg-text-align-[a-z]+/g;wysihtml5.commands.justifyCenter={exec:function(composer,command){return wysihtml5.commands.formatBlock.exec(composer,"formatBlock",null,CLASS_NAME,REG_EXP);},state:function(composer,command){return wysihtml5.commands.formatBlock.state(composer,"formatBlock",null,CLASS_NAME,REG_EXP);},value:function(){return undef;}};})(wysihtml5);(function(wysihtml5){var undef,CLASS_NAME="wysiwyg-text-align-left",REG_EXP=/wysiwyg-text-align-[a-z]+/g;wysihtml5.commands.justifyLeft={exec:function(composer,command){return wysihtml5.commands.formatBlock.exec(composer,"formatBlock",null,CLASS_NAME,REG_EXP);},state:function(composer,command){return wysihtml5.commands.formatBlock.state(composer,"formatBlock",null,CLASS_NAME,REG_EXP);},value:function(){return undef;}};})(wysihtml5);(function(wysihtml5){var undef,CLASS_NAME="wysiwyg-text-align-right",REG_EXP=/wysiwyg-text-align-[a-z]+/g;wysihtml5.commands.justifyRight={exec:function(composer,command){return wysihtml5.commands.formatBlock.exec(composer,"formatBlock",null,CLASS_NAME,REG_EXP);},state:function(composer,command){return wysihtml5.commands.formatBlock.state(composer,"formatBlock",null,CLASS_NAME,REG_EXP);},value:function(){return undef;}};})(wysihtml5);(function(wysihtml5){var undef;wysihtml5.commands.underline={exec:function(composer,command){return wysihtml5.commands.formatInline.exec(composer,command,"u");},state:function(composer,command){return wysihtml5.commands.formatInline.state(composer,command,"u");},value:function(){return undef;}};})(wysihtml5);(function(wysihtml5){var Z_KEY=90,Y_KEY=89,BACKSPACE_KEY=8,DELETE_KEY=46,MAX_HISTORY_ENTRIES=40,UNDO_HTML='<span id="_wysihtml5-undo" class="_wysihtml5-temp">'+wysihtml5.INVISIBLE_SPACE+'</span>',REDO_HTML='<span id="_wysihtml5-redo" class="_wysihtml5-temp">'+wysihtml5.INVISIBLE_SPACE+'</span>',dom=wysihtml5.dom;function cleanTempElements(doc){var tempElement;while(tempElement=doc.querySelector("._wysihtml5-temp")){tempElement.parentNode.removeChild(tempElement);}}
wysihtml5.UndoManager=wysihtml5.lang.Dispatcher.extend({constructor:function(editor){this.editor=editor;this.composer=editor.composer;this.element=this.composer.element;this.history=[this.composer.getValue()];this.position=1;if(this.composer.commands.support("insertHTML")){this._observe();}},_observe:function(){var that=this,doc=this.composer.sandbox.getDocument(),lastKey;dom.observe(this.element,"keydown",function(event){if(event.altKey||(!event.ctrlKey&&!event.metaKey)){return;}
var keyCode=event.keyCode,isUndo=keyCode===Z_KEY&&!event.shiftKey,isRedo=(keyCode===Z_KEY&&event.shiftKey)||(keyCode===Y_KEY);if(isUndo){that.undo();event.preventDefault();}else if(isRedo){that.redo();event.preventDefault();}});dom.observe(this.element,"keydown",function(event){var keyCode=event.keyCode;if(keyCode===lastKey){return;}
lastKey=keyCode;if(keyCode===BACKSPACE_KEY||keyCode===DELETE_KEY){that.transact();}});if(wysihtml5.browser.hasUndoInContextMenu()){var interval,observed,cleanUp=function(){cleanTempElements(doc);clearInterval(interval);};dom.observe(this.element,"contextmenu",function(){cleanUp();that.composer.selection.executeAndRestoreSimple(function(){if(that.element.lastChild){that.composer.selection.setAfter(that.element.lastChild);}
doc.execCommand("insertHTML",false,UNDO_HTML);doc.execCommand("insertHTML",false,REDO_HTML);doc.execCommand("undo",false,null);});interval=setInterval(function(){if(doc.getElementById("_wysihtml5-redo")){cleanUp();that.redo();}else if(!doc.getElementById("_wysihtml5-undo")){cleanUp();that.undo();}},400);if(!observed){observed=true;dom.observe(document,"mousedown",cleanUp);dom.observe(doc,["mousedown","paste","cut","copy"],cleanUp);}});}
this.editor.observe("newword:composer",function(){that.transact();}).observe("beforecommand:composer",function(){that.transact();});},transact:function(){var previousHtml=this.history[this.position-1],currentHtml=this.composer.getValue();if(currentHtml==previousHtml){return;}
var length=this.history.length=this.position;if(length>MAX_HISTORY_ENTRIES){this.history.shift();this.position--;}
this.position++;this.history.push(currentHtml);},undo:function(){this.transact();if(this.position<=1){return;}
this.set(this.history[--this.position-1]);this.editor.fire("undo:composer");},redo:function(){if(this.position>=this.history.length){return;}
this.set(this.history[++this.position-1]);this.editor.fire("redo:composer");},set:function(html){this.composer.setValue(html);this.editor.focus(true);}});})(wysihtml5);wysihtml5.views.View=Base.extend({constructor:function(parent,textareaElement,config){this.parent=parent;this.element=textareaElement;this.config=config;this._observeViewChange();},_observeViewChange:function(){var that=this;this.parent.observe("beforeload",function(){that.parent.observe("change_view",function(view){if(view===that.name){that.parent.currentView=that;that.show();setTimeout(function(){that.focus();},0);}else{that.hide();}});});},focus:function(){if(this.element.ownerDocument.querySelector(":focus")===this.element){return;}
try{this.element.focus();}catch(e){}},hide:function(){this.element.style.display="none";},show:function(){this.element.style.display="";},disable:function(){this.element.setAttribute("disabled","disabled");},enable:function(){this.element.removeAttribute("disabled");}});(function(wysihtml5){var dom=wysihtml5.dom,browser=wysihtml5.browser;wysihtml5.views.Composer=wysihtml5.views.View.extend({name:"composer",CARET_HACK:"<br>",constructor:function(parent,textareaElement,config){this.base(parent,textareaElement,config);this.textarea=this.parent.textarea;this._initSandbox();},clear:function(){this.element.innerHTML=browser.displaysCaretInEmptyContentEditableCorrectly()?"":this.CARET_HACK;},getValue:function(parse){var value=this.isEmpty()?"":wysihtml5.quirks.getCorrectInnerHTML(this.element);if(parse){value=this.parent.parse(value);}
value=wysihtml5.lang.string(value).replace(wysihtml5.INVISIBLE_SPACE).by("");return value;},setValue:function(html,parse){if(parse){html=this.parent.parse(html);}
this.element.innerHTML=html;},show:function(){this.iframe.style.display=this._displayStyle||"";this.disable();this.enable();},hide:function(){this._displayStyle=dom.getStyle("display").from(this.iframe);if(this._displayStyle==="none"){this._displayStyle=null;}
this.iframe.style.display="none";},disable:function(){this.element.removeAttribute("contentEditable");this.base();},enable:function(){this.element.setAttribute("contentEditable","true");this.base();},focus:function(setToEnd){if(wysihtml5.browser.doesAsyncFocus()&&this.hasPlaceholderSet()){this.clear();}
this.base();var lastChild=this.element.lastChild;if(setToEnd&&lastChild){if(lastChild.nodeName==="BR"){this.selection.setBefore(this.element.lastChild);}else{this.selection.setAfter(this.element.lastChild);}}},getTextContent:function(){return dom.getTextContent(this.element);},hasPlaceholderSet:function(){return this.getTextContent()==this.textarea.element.getAttribute("placeholder");},isEmpty:function(){var innerHTML=this.element.innerHTML,elementsWithVisualValue="blockquote, ul, ol, img, embed, object, table, iframe, svg, video, audio, button, input, select, textarea";return innerHTML===""||innerHTML===this.CARET_HACK||this.hasPlaceholderSet()||(this.getTextContent()===""&&!this.element.querySelector(elementsWithVisualValue));},_initSandbox:function(){var that=this;this.sandbox=new dom.Sandbox(function(){that._create();},{stylesheets:this.config.stylesheets});this.iframe=this.sandbox.getIframe();var hiddenField=document.createElement("input");hiddenField.type="hidden";hiddenField.name="_wysihtml5_mode";hiddenField.value=1;var textareaElement=this.textarea.element;dom.insert(this.iframe).after(textareaElement);dom.insert(hiddenField).after(textareaElement);},_create:function(){var that=this;this.doc=this.sandbox.getDocument();this.element=this.doc.body;this.textarea=this.parent.textarea;this.element.innerHTML=this.textarea.getValue(true);this.enable();this.selection=new wysihtml5.Selection(this.parent);this.commands=new wysihtml5.Commands(this.parent);dom.copyAttributes(["className","spellcheck","title","lang","dir","accessKey"]).from(this.textarea.element).to(this.element);dom.addClass(this.element,this.config.composerClassName);if(this.config.style){this.style();}
this.observe();var name=this.config.name;if(name){dom.addClass(this.element,name);dom.addClass(this.iframe,name);}
var placeholderText=typeof(this.config.placeholder)==="string"?this.config.placeholder:this.textarea.element.getAttribute("placeholder");if(placeholderText){dom.simulatePlaceholder(this.parent,this,placeholderText);}
this.commands.exec("styleWithCSS",false);this._initAutoLinking();this._initObjectResizing();this._initUndoManager();if(this.textarea.element.hasAttribute("autofocus")||document.querySelector(":focus")==this.textarea.element){setTimeout(function(){that.focus();},100);}
wysihtml5.quirks.insertLineBreakOnReturn(this);if(!browser.clearsContentEditableCorrectly()){wysihtml5.quirks.ensureProperClearing(this);}
if(!browser.clearsListsInContentEditableCorrectly()){wysihtml5.quirks.ensureProperClearingOfLists(this);}
if(this.initSync&&this.config.sync){this.initSync();}
this.textarea.hide();this.parent.fire("beforeload").fire("load");},_initAutoLinking:function(){var that=this,supportsDisablingOfAutoLinking=browser.canDisableAutoLinking(),supportsAutoLinking=browser.doesAutoLinkingInContentEditable();if(supportsDisablingOfAutoLinking){this.commands.exec("autoUrlDetect",false);}
if(!this.config.autoLink){return;}
if(!supportsAutoLinking||(supportsAutoLinking&&supportsDisablingOfAutoLinking)){this.parent.observe("newword:composer",function(){that.selection.executeAndRestore(function(startContainer,endContainer){dom.autoLink(endContainer.parentNode);});});}
var
links=this.sandbox.getDocument().getElementsByTagName("a"),urlRegExp=dom.autoLink.URL_REG_EXP,getTextContent=function(element){var textContent=wysihtml5.lang.string(dom.getTextContent(element)).trim();if(textContent.substr(0,4)==="www."){textContent="http://"+textContent;}
return textContent;};dom.observe(this.element,"keydown",function(event){if(!links.length){return;}
var selectedNode=that.selection.getSelectedNode(event.target.ownerDocument),link=dom.getParentElement(selectedNode,{nodeName:"A"},4),textContent;if(!link){return;}
textContent=getTextContent(link);setTimeout(function(){var newTextContent=getTextContent(link);if(newTextContent===textContent){return;}
if(newTextContent.match(urlRegExp)){link.setAttribute("href",newTextContent);}},0);});},_initObjectResizing:function(){var properties=["width","height"],propertiesLength=properties.length,element=this.element;this.commands.exec("enableObjectResizing",this.config.allowObjectResizing);if(this.config.allowObjectResizing){if(browser.supportsEvent("resizeend")){dom.observe(element,"resizeend",function(event){var target=event.target||event.srcElement,style=target.style,i=0,property;for(;i<propertiesLength;i++){property=properties[i];if(style[property]){target.setAttribute(property,parseInt(style[property],10));style[property]="";}}
wysihtml5.quirks.redraw(element);});}}else{if(browser.supportsEvent("resizestart")){dom.observe(element,"resizestart",function(event){event.preventDefault();});}}},_initUndoManager:function(){new wysihtml5.UndoManager(this.parent);}});})(wysihtml5);(function(wysihtml5){var dom=wysihtml5.dom,doc=document,win=window,HOST_TEMPLATE=doc.createElement("div"),TEXT_FORMATTING=["background-color","color","cursor","font-family","font-size","font-style","font-variant","font-weight","line-height","letter-spacing","text-align","text-decoration","text-indent","text-rendering","word-break","word-wrap","word-spacing"],BOX_FORMATTING=["background-color","border-collapse","border-bottom-color","border-bottom-style","border-bottom-width","border-left-color","border-left-style","border-left-width","border-right-color","border-right-style","border-right-width","border-top-color","border-top-style","border-top-width","clear","display","float","margin-bottom","margin-left","margin-right","margin-top","outline-color","outline-offset","outline-width","outline-style","padding-left","padding-right","padding-top","padding-bottom","position","top","left","right","bottom","z-index","vertical-align","text-align","-webkit-box-sizing","-moz-box-sizing","-ms-box-sizing","box-sizing","-webkit-box-shadow","-moz-box-shadow","-ms-box-shadow","box-shadow","-webkit-border-top-right-radius","-moz-border-radius-topright","border-top-right-radius","-webkit-border-bottom-right-radius","-moz-border-radius-bottomright","border-bottom-right-radius","-webkit-border-bottom-left-radius","-moz-border-radius-bottomleft","border-bottom-left-radius","-webkit-border-top-left-radius","-moz-border-radius-topleft","border-top-left-radius","width","height"],RESIZE_STYLE=["width","height","top","left","right","bottom"],ADDITIONAL_CSS_RULES=["html             { height: 100%; }","body             { min-height: 100%; padding: 0; margin: 0; margin-top: -1px; padding-top: 1px; }","._wysihtml5-temp { display: none; }",wysihtml5.browser.isGecko?"body.placeholder { color: graytext !important; }":"body.placeholder { color: #a9a9a9 !important; }","body[disabled]   { background-color: #eee !important; color: #999 !important; cursor: default !important; }","img:-moz-broken  { -moz-force-broken-image-icon: 1; height: 24px; width: 24px; }"];var focusWithoutScrolling=function(element){if(element.setActive){try{element.setActive();}catch(e){}}else{var elementStyle=element.style,originalScrollTop=doc.documentElement.scrollTop||doc.body.scrollTop,originalScrollLeft=doc.documentElement.scrollLeft||doc.body.scrollLeft,originalStyles={position:elementStyle.position,top:elementStyle.top,left:elementStyle.left,WebkitUserSelect:elementStyle.WebkitUserSelect};dom.setStyles({position:"absolute",top:"-99999px",left:"-99999px",WebkitUserSelect:"none"}).on(element);element.focus();dom.setStyles(originalStyles).on(element);if(win.scrollTo){win.scrollTo(originalScrollLeft,originalScrollTop);}}};wysihtml5.views.Composer.prototype.style=function(){var that=this,originalActiveElement=doc.querySelector(":focus"),textareaElement=this.textarea.element,hasPlaceholder=textareaElement.hasAttribute("placeholder"),originalPlaceholder=hasPlaceholder&&textareaElement.getAttribute("placeholder");this.focusStylesHost=this.focusStylesHost||HOST_TEMPLATE.cloneNode(false);this.blurStylesHost=this.blurStylesHost||HOST_TEMPLATE.cloneNode(false);if(hasPlaceholder){textareaElement.removeAttribute("placeholder");}
if(textareaElement===originalActiveElement){textareaElement.blur();}
dom.copyStyles(BOX_FORMATTING).from(textareaElement).to(this.iframe).andTo(this.blurStylesHost);dom.copyStyles(TEXT_FORMATTING).from(textareaElement).to(this.element).andTo(this.blurStylesHost);dom.insertCSS(ADDITIONAL_CSS_RULES).into(this.element.ownerDocument);focusWithoutScrolling(textareaElement);dom.copyStyles(BOX_FORMATTING).from(textareaElement).to(this.focusStylesHost);dom.copyStyles(TEXT_FORMATTING).from(textareaElement).to(this.focusStylesHost);var boxFormattingStyles=wysihtml5.lang.array(BOX_FORMATTING).without(["display"]);if(originalActiveElement){originalActiveElement.focus();}else{textareaElement.blur();}
if(hasPlaceholder){textareaElement.setAttribute("placeholder",originalPlaceholder);}
if(!wysihtml5.browser.hasCurrentStyleProperty()){var winObserver=dom.observe(win,"resize",function(){if(!dom.contains(document.documentElement,that.iframe)){winObserver.stop();return;}
var originalTextareaDisplayStyle=dom.getStyle("display").from(textareaElement),originalComposerDisplayStyle=dom.getStyle("display").from(that.iframe);textareaElement.style.display="";that.iframe.style.display="none";dom.copyStyles(RESIZE_STYLE).from(textareaElement).to(that.iframe).andTo(that.focusStylesHost).andTo(that.blurStylesHost);that.iframe.style.display=originalComposerDisplayStyle;textareaElement.style.display=originalTextareaDisplayStyle;});}
this.parent.observe("focus:composer",function(){dom.copyStyles(boxFormattingStyles).from(that.focusStylesHost).to(that.iframe);dom.copyStyles(TEXT_FORMATTING).from(that.focusStylesHost).to(that.element);});this.parent.observe("blur:composer",function(){dom.copyStyles(boxFormattingStyles).from(that.blurStylesHost).to(that.iframe);dom.copyStyles(TEXT_FORMATTING).from(that.blurStylesHost).to(that.element);});return this;};})(wysihtml5);(function(wysihtml5){var dom=wysihtml5.dom,browser=wysihtml5.browser,shortcuts={"66":"bold","73":"italic","85":"underline"};wysihtml5.views.Composer.prototype.observe=function(){var that=this,state=this.getValue(),iframe=this.sandbox.getIframe(),element=this.element,focusBlurElement=browser.supportsEventsInIframeCorrectly()?element:this.sandbox.getWindow(),pasteEvents=browser.supportsEvent("drop")?["drop","paste"]:["dragdrop","paste"];dom.observe(iframe,"DOMNodeRemoved",function(){clearInterval(domNodeRemovedInterval);that.parent.fire("destroy:composer");});var domNodeRemovedInterval=setInterval(function(){if(!dom.contains(document.documentElement,iframe)){clearInterval(domNodeRemovedInterval);that.parent.fire("destroy:composer");}},250);dom.observe(focusBlurElement,"focus",function(){that.parent.fire("focus").fire("focus:composer");setTimeout(function(){state=that.getValue();},0);});dom.observe(focusBlurElement,"blur",function(){if(state!==that.getValue()){that.parent.fire("change").fire("change:composer");}
that.parent.fire("blur").fire("blur:composer");});if(wysihtml5.browser.isIos()){dom.observe(element,"blur",function(){var input=element.ownerDocument.createElement("input"),originalScrollTop=document.documentElement.scrollTop||document.body.scrollTop,originalScrollLeft=document.documentElement.scrollLeft||document.body.scrollLeft;try{that.selection.insertNode(input);}catch(e){element.appendChild(input);}
input.focus();input.parentNode.removeChild(input);window.scrollTo(originalScrollLeft,originalScrollTop);});}
dom.observe(element,"dragenter",function(){that.parent.fire("unset_placeholder");});if(browser.firesOnDropOnlyWhenOnDragOverIsCancelled()){dom.observe(element,["dragover","dragenter"],function(event){event.preventDefault();});}
dom.observe(element,pasteEvents,function(event){var dataTransfer=event.dataTransfer,data;if(dataTransfer&&browser.supportsDataTransfer()){data=dataTransfer.getData("text/html")||dataTransfer.getData("text/plain");}
if(data){element.focus();that.commands.exec("insertHTML",data);that.parent.fire("paste").fire("paste:composer");event.stopPropagation();event.preventDefault();}else{setTimeout(function(){that.parent.fire("paste").fire("paste:composer");},0);}});dom.observe(element,"keyup",function(event){var keyCode=event.keyCode;if(keyCode===wysihtml5.SPACE_KEY||keyCode===wysihtml5.ENTER_KEY){that.parent.fire("newword:composer");}});this.parent.observe("paste:composer",function(){setTimeout(function(){that.parent.fire("newword:composer");},0);});if(!browser.canSelectImagesInContentEditable()){dom.observe(element,"mousedown",function(event){var target=event.target;if(target.nodeName==="IMG"){that.selection.selectNode(target);event.preventDefault();}});}
dom.observe(element,"keydown",function(event){var keyCode=event.keyCode,command=shortcuts[keyCode];if((event.ctrlKey||event.metaKey)&&!event.altKey&&command){that.commands.exec(command);event.preventDefault();}});dom.observe(element,"keydown",function(event){var target=that.selection.getSelectedNode(true),keyCode=event.keyCode,parent;if(target&&target.nodeName==="IMG"&&(keyCode===wysihtml5.BACKSPACE_KEY||keyCode===wysihtml5.DELETE_KEY)){parent=target.parentNode;parent.removeChild(target);if(parent.nodeName==="A"&&!parent.firstChild){parent.parentNode.removeChild(parent);}
setTimeout(function(){wysihtml5.quirks.redraw(element);},0);event.preventDefault();}});var titlePrefixes={IMG:"Image: ",A:"Link: "};dom.observe(element,"mouseover",function(event){var target=event.target,nodeName=target.nodeName,title;if(nodeName!=="A"&&nodeName!=="IMG"){return;}
var hasTitle=target.hasAttribute("title");if(!hasTitle){title=titlePrefixes[nodeName]+(target.getAttribute("href")||target.getAttribute("src"));target.setAttribute("title",title);}});};})(wysihtml5);(function(wysihtml5){var INTERVAL=400;wysihtml5.views.Synchronizer=Base.extend({constructor:function(editor,textarea,composer){this.editor=editor;this.textarea=textarea;this.composer=composer;this._observe();},fromComposerToTextarea:function(shouldParseHtml){this.textarea.setValue(wysihtml5.lang.string(this.composer.getValue()).trim(),shouldParseHtml);},fromTextareaToComposer:function(shouldParseHtml){var textareaValue=this.textarea.getValue();if(textareaValue){this.composer.setValue(textareaValue,shouldParseHtml);}else{this.composer.clear();this.editor.fire("set_placeholder");}},sync:function(shouldParseHtml){if(this.editor.currentView.name==="textarea"){this.fromTextareaToComposer(shouldParseHtml);}else{this.fromComposerToTextarea(shouldParseHtml);}},_observe:function(){var interval,that=this,form=this.textarea.element.form,startInterval=function(){interval=setInterval(function(){that.fromComposerToTextarea();},INTERVAL);},stopInterval=function(){clearInterval(interval);interval=null;};startInterval();if(form){wysihtml5.dom.observe(form,"submit",function(){that.sync(true);});wysihtml5.dom.observe(form,"reset",function(){setTimeout(function(){that.fromTextareaToComposer();},0);});}
this.editor.observe("change_view",function(view){if(view==="composer"&&!interval){that.fromTextareaToComposer(true);startInterval();}else if(view==="textarea"){that.fromComposerToTextarea(true);stopInterval();}});this.editor.observe("destroy:composer",stopInterval);}});})(wysihtml5);wysihtml5.views.Textarea=wysihtml5.views.View.extend({name:"textarea",constructor:function(parent,textareaElement,config){this.base(parent,textareaElement,config);this._observe();},clear:function(){this.element.value="";},getValue:function(parse){var value=this.isEmpty()?"":this.element.value;if(parse){value=this.parent.parse(value);}
return value;},setValue:function(html,parse){if(parse){html=this.parent.parse(html);}
this.element.value=html;},hasPlaceholderSet:function(){var supportsPlaceholder=wysihtml5.browser.supportsPlaceholderAttributeOn(this.element),placeholderText=this.element.getAttribute("placeholder")||null,value=this.element.value,isEmpty=!value;return(supportsPlaceholder&&isEmpty)||(value===placeholderText);},isEmpty:function(){return!wysihtml5.lang.string(this.element.value).trim()||this.hasPlaceholderSet();},_observe:function(){var element=this.element,parent=this.parent,eventMapping={focusin:"focus",focusout:"blur"},events=wysihtml5.browser.supportsEvent("focusin")?["focusin","focusout","change"]:["focus","blur","change"];parent.observe("beforeload",function(){wysihtml5.dom.observe(element,events,function(event){var eventName=eventMapping[event.type]||event.type;parent.fire(eventName).fire(eventName+":textarea");});wysihtml5.dom.observe(element,["paste","drop"],function(){setTimeout(function(){parent.fire("paste").fire("paste:textarea");},0);});});}});(function(wysihtml5){var dom=wysihtml5.dom,CLASS_NAME_OPENED="wysihtml5-command-dialog-opened",SELECTOR_FORM_ELEMENTS="input, select, textarea",SELECTOR_FIELDS="[data-wysihtml5-dialog-field]",ATTRIBUTE_FIELDS="data-wysihtml5-dialog-field";wysihtml5.toolbar.Dialog=wysihtml5.lang.Dispatcher.extend({constructor:function(link,container){this.link=link;this.container=container;},_observe:function(){if(this._observed){return;}
var that=this,callbackWrapper=function(event){var attributes=that._serialize();if(attributes==that.elementToChange){that.fire("edit",attributes);}else{that.fire("save",attributes);}
that.hide();event.preventDefault();event.stopPropagation();};dom.observe(that.link,"click",function(event){if(dom.hasClass(that.link,CLASS_NAME_OPENED)){setTimeout(function(){that.hide();},0);}});dom.observe(this.container,"keydown",function(event){var keyCode=event.keyCode;if(keyCode===wysihtml5.ENTER_KEY){callbackWrapper(event);}
if(keyCode===wysihtml5.ESCAPE_KEY){that.hide();}});dom.delegate(this.container,"[data-wysihtml5-dialog-action=save]","click",callbackWrapper);dom.delegate(this.container,"[data-wysihtml5-dialog-action=cancel]","click",function(event){that.fire("cancel");that.hide();event.preventDefault();event.stopPropagation();});var formElements=this.container.querySelectorAll(SELECTOR_FORM_ELEMENTS),i=0,length=formElements.length,_clearInterval=function(){clearInterval(that.interval);};for(;i<length;i++){dom.observe(formElements[i],"change",_clearInterval);}
this._observed=true;},_serialize:function(){var data=this.elementToChange||{},fields=this.container.querySelectorAll(SELECTOR_FIELDS),length=fields.length,i=0;for(;i<length;i++){data[fields[i].getAttribute(ATTRIBUTE_FIELDS)]=fields[i].value;}
return data;},_interpolate:function(avoidHiddenFields){var field,fieldName,newValue,focusedElement=document.querySelector(":focus"),fields=this.container.querySelectorAll(SELECTOR_FIELDS),length=fields.length,i=0;for(;i<length;i++){field=fields[i];if(field===focusedElement){continue;}
if(avoidHiddenFields&&field.type==="hidden"){continue;}
fieldName=field.getAttribute(ATTRIBUTE_FIELDS);newValue=this.elementToChange?(this.elementToChange[fieldName]||""):field.defaultValue;field.value=newValue;}},show:function(elementToChange){var that=this,firstField=this.container.querySelector(SELECTOR_FORM_ELEMENTS);this.elementToChange=elementToChange;this._observe();this._interpolate();if(elementToChange){this.interval=setInterval(function(){that._interpolate(true);},500);}
dom.addClass(this.link,CLASS_NAME_OPENED);this.container.style.display="";this.fire("show");if(firstField&&!elementToChange){try{firstField.focus();}catch(e){}}},hide:function(){clearInterval(this.interval);this.elementToChange=null;dom.removeClass(this.link,CLASS_NAME_OPENED);this.container.style.display="none";this.fire("hide");}});})(wysihtml5);(function(wysihtml5){var dom=wysihtml5.dom;var linkStyles={position:"relative"};var wrapperStyles={left:0,margin:0,opacity:0,overflow:"hidden",padding:0,position:"absolute",top:0,zIndex:1};var inputStyles={cursor:"inherit",fontSize:"50px",height:"50px",marginTop:"-25px",outline:0,padding:0,position:"absolute",right:"-4px",top:"50%"};var inputAttributes={"x-webkit-speech":"","speech":""};wysihtml5.toolbar.Speech=function(parent,link){var input=document.createElement("input");if(!wysihtml5.browser.supportsSpeechApiOn(input)){link.style.display="none";return;}
var wrapper=document.createElement("div");wysihtml5.lang.object(wrapperStyles).merge({width:link.offsetWidth+"px",height:link.offsetHeight+"px"});dom.insert(input).into(wrapper);dom.insert(wrapper).into(link);dom.setStyles(inputStyles).on(input);dom.setAttributes(inputAttributes).on(input)
dom.setStyles(wrapperStyles).on(wrapper);dom.setStyles(linkStyles).on(link);var eventName="onwebkitspeechchange"in input?"webkitspeechchange":"speechchange";dom.observe(input,eventName,function(){parent.execCommand("insertText",input.value);input.value="";});dom.observe(input,"click",function(event){if(dom.hasClass(link,"wysihtml5-command-disabled")){event.preventDefault();}
event.stopPropagation();});};})(wysihtml5);(function(wysihtml5){var CLASS_NAME_COMMAND_DISABLED="wysihtml5-command-disabled",CLASS_NAME_COMMANDS_DISABLED="wysihtml5-commands-disabled",CLASS_NAME_COMMAND_ACTIVE="wysihtml5-command-active",CLASS_NAME_ACTION_ACTIVE="wysihtml5-action-active",dom=wysihtml5.dom;wysihtml5.toolbar.Toolbar=Base.extend({constructor:function(editor,container){this.editor=editor;this.container=typeof(container)==="string"?document.getElementById(container):container;this.composer=editor.composer;this._getLinks("command");this._getLinks("action");this._observe();this.show();var speechInputLinks=this.container.querySelectorAll("[data-wysihtml5-command=insertSpeech]"),length=speechInputLinks.length,i=0;for(;i<length;i++){new wysihtml5.toolbar.Speech(this,speechInputLinks[i]);}},_getLinks:function(type){var links=this[type+"Links"]=wysihtml5.lang.array(this.container.querySelectorAll("[data-wysihtml5-"+type+"]")).get(),length=links.length,i=0,mapping=this[type+"Mapping"]={},link,group,name,value,dialog;for(;i<length;i++){link=links[i];name=link.getAttribute("data-wysihtml5-"+type);value=link.getAttribute("data-wysihtml5-"+type+"-value");group=this.container.querySelector("[data-wysihtml5-"+type+"-group='"+name+"']");dialog=this._getDialog(link,name);mapping[name+":"+value]={link:link,group:group,name:name,value:value,dialog:dialog,state:false};}},_getDialog:function(link,command){var that=this,dialogElement=this.container.querySelector("[data-wysihtml5-dialog='"+command+"']"),dialog,caretBookmark;if(dialogElement){dialog=new wysihtml5.toolbar.Dialog(link,dialogElement);dialog.observe("show",function(){caretBookmark=that.composer.selection.getBookmark();that.editor.fire("show:dialog",{command:command,dialogContainer:dialogElement,commandLink:link});});dialog.observe("save",function(attributes){if(caretBookmark){that.composer.selection.setBookmark(caretBookmark);}
that._execCommand(command,attributes);that.editor.fire("save:dialog",{command:command,dialogContainer:dialogElement,commandLink:link});});dialog.observe("cancel",function(){that.editor.focus(false);that.editor.fire("cancel:dialog",{command:command,dialogContainer:dialogElement,commandLink:link});});}
return dialog;},execCommand:function(command,commandValue){if(this.commandsDisabled){return;}
var commandObj=this.commandMapping[command+":"+commandValue];if(commandObj&&commandObj.dialog&&!commandObj.state){commandObj.dialog.show();}else{this._execCommand(command,commandValue);}},_execCommand:function(command,commandValue){this.editor.focus(false);this.composer.commands.exec(command,commandValue);this._updateLinkStates();},execAction:function(action){var editor=this.editor;switch(action){case"change_view":if(editor.currentView===editor.textarea){editor.fire("change_view","composer");}else{editor.fire("change_view","textarea");}
break;}},_observe:function(){var that=this,editor=this.editor,container=this.container,links=this.commandLinks.concat(this.actionLinks),length=links.length,i=0;for(;i<length;i++){dom.setAttributes({href:"javascript:;",unselectable:"on"}).on(links[i]);}
dom.delegate(container,"[data-wysihtml5-command]","mousedown",function(event){event.preventDefault();});dom.delegate(container,"[data-wysihtml5-command]","click",function(event){var link=this,command=link.getAttribute("data-wysihtml5-command"),commandValue=link.getAttribute("data-wysihtml5-command-value");that.execCommand(command,commandValue);event.preventDefault();});dom.delegate(container,"[data-wysihtml5-action]","click",function(event){var action=this.getAttribute("data-wysihtml5-action");that.execAction(action);event.preventDefault();});editor.observe("focus:composer",function(){that.bookmark=null;clearInterval(that.interval);that.interval=setInterval(function(){that._updateLinkStates();},500);});editor.observe("blur:composer",function(){clearInterval(that.interval);});editor.observe("destroy:composer",function(){clearInterval(that.interval);});editor.observe("change_view",function(currentView){setTimeout(function(){that.commandsDisabled=(currentView!=="composer");that._updateLinkStates();if(that.commandsDisabled){dom.addClass(container,CLASS_NAME_COMMANDS_DISABLED);}else{dom.removeClass(container,CLASS_NAME_COMMANDS_DISABLED);}},0);});},_updateLinkStates:function(){var element=this.composer.element,commandMapping=this.commandMapping,actionMapping=this.actionMapping,i,state,action,command;for(i in commandMapping){command=commandMapping[i];if(this.commandsDisabled){state=false;dom.removeClass(command.link,CLASS_NAME_COMMAND_ACTIVE);if(command.group){dom.removeClass(command.group,CLASS_NAME_COMMAND_ACTIVE);}
if(command.dialog){command.dialog.hide();}}else{state=this.composer.commands.state(command.name,command.value);if(wysihtml5.lang.object(state).isArray()){state=state.length===1?state[0]:true;}
dom.removeClass(command.link,CLASS_NAME_COMMAND_DISABLED);if(command.group){dom.removeClass(command.group,CLASS_NAME_COMMAND_DISABLED);}}
if(command.state===state){continue;}
command.state=state;if(state){dom.addClass(command.link,CLASS_NAME_COMMAND_ACTIVE);if(command.group){dom.addClass(command.group,CLASS_NAME_COMMAND_ACTIVE);}
if(command.dialog){if(typeof(state)==="object"){command.dialog.show(state);}else{command.dialog.hide();}}}else{dom.removeClass(command.link,CLASS_NAME_COMMAND_ACTIVE);if(command.group){dom.removeClass(command.group,CLASS_NAME_COMMAND_ACTIVE);}
if(command.dialog){command.dialog.hide();}}}
for(i in actionMapping){action=actionMapping[i];if(action.name==="change_view"){action.state=this.editor.currentView===this.editor.textarea;if(action.state){dom.addClass(action.link,CLASS_NAME_ACTION_ACTIVE);}else{dom.removeClass(action.link,CLASS_NAME_ACTION_ACTIVE);}}}},show:function(){this.container.style.display="";},hide:function(){this.container.style.display="none";}});})(wysihtml5);(function(wysihtml5){var undef;var defaultConfig={name:undef,style:true,toolbar:undef,autoLink:true,parserRules:{tags:{br:{},span:{},div:{},p:{}},classes:{}},parser:wysihtml5.dom.parse,composerClassName:"wysihtml5-editor",bodyClassName:"wysihtml5-supported",stylesheets:[],placeholderText:undef,allowObjectResizing:true,supportTouchDevices:true};wysihtml5.Editor=wysihtml5.lang.Dispatcher.extend({constructor:function(textareaElement,config){this.textareaElement=typeof(textareaElement)==="string"?document.getElementById(textareaElement):textareaElement;this.config=wysihtml5.lang.object({}).merge(defaultConfig).merge(config).get();this.textarea=new wysihtml5.views.Textarea(this,this.textareaElement,this.config);this.currentView=this.textarea;this._isCompatible=wysihtml5.browser.supported();if(!this._isCompatible||(!this.config.supportTouchDevices&&wysihtml5.browser.isTouchDevice())){var that=this;setTimeout(function(){that.fire("beforeload").fire("load");},0);return;}
wysihtml5.dom.addClass(document.body,this.config.bodyClassName);this.composer=new wysihtml5.views.Composer(this,this.textareaElement,this.config);this.currentView=this.composer;if(typeof(this.config.parser)==="function"){this._initParser();}
this.observe("beforeload",function(){this.synchronizer=new wysihtml5.views.Synchronizer(this,this.textarea,this.composer);if(this.config.toolbar){this.toolbar=new wysihtml5.toolbar.Toolbar(this,this.config.toolbar);}});try{console.log("Heya! This page is using wysihtml5 for rich text editing. Check out https://github.com/xing/wysihtml5");}catch(e){}},isCompatible:function(){return this._isCompatible;},clear:function(){this.currentView.clear();return this;},getValue:function(parse){return this.currentView.getValue(parse);},setValue:function(html,parse){if(!html){return this.clear();}
this.currentView.setValue(html,parse);return this;},focus:function(setToEnd){this.currentView.focus(setToEnd);return this;},disable:function(){this.currentView.disable();return this;},enable:function(){this.currentView.enable();return this;},isEmpty:function(){return this.currentView.isEmpty();},hasPlaceholderSet:function(){return this.currentView.hasPlaceholderSet();},parse:function(htmlOrElement){var returnValue=this.config.parser(htmlOrElement,this.config.parserRules,this.composer.sandbox.getDocument(),true);if(typeof(htmlOrElement)==="object"){wysihtml5.quirks.redraw(htmlOrElement);}
return returnValue;},_initParser:function(){this.observe("paste:composer",function(){var keepScrollPosition=true,that=this;that.composer.selection.executeAndRestore(function(){wysihtml5.quirks.cleanPastedHTML(that.composer.element);that.parse(that.composer.element);},keepScrollPosition);});this.observe("paste:textarea",function(){var value=this.textarea.getValue(),newValue;newValue=this.parse(value);this.textarea.setValue(newValue);});}});})(wysihtml5);
!function($,wysi){"use strict";var tpl={"font-styles":function(locale,options){var size=(options&&options.size)?' btn-'+options.size:'';return"<li class='dropdown'>"+"<a class='btn dropdown-toggle"+size+"' data-toggle='dropdown' href='#'>"+"<i class='icon-font'></i>&nbsp;<span class='current-font'>"+locale.font_styles.normal+"</span>&nbsp;<b class='caret'></b>"+"</a>"+"<ul class='dropdown-menu'>"+"<li><a data-wysihtml5-command='formatBlock' data-wysihtml5-command-value='div' tabindex='-1'>"+locale.font_styles.normal+"</a></li>"+"<li><a data-wysihtml5-command='formatBlock' data-wysihtml5-command-value='h1' tabindex='-1'>"+locale.font_styles.h1+"</a></li>"+"<li><a data-wysihtml5-command='formatBlock' data-wysihtml5-command-value='h2' tabindex='-1'>"+locale.font_styles.h2+"</a></li>"+"<li><a data-wysihtml5-command='formatBlock' data-wysihtml5-command-value='h3' tabindex='-1'>"+locale.font_styles.h3+"</a></li>"+"<li><a data-wysihtml5-command='formatBlock' data-wysihtml5-command-value='h4'>"+locale.font_styles.h4+"</a></li>"+"<li><a data-wysihtml5-command='formatBlock' data-wysihtml5-command-value='h5'>"+locale.font_styles.h5+"</a></li>"+"<li><a data-wysihtml5-command='formatBlock' data-wysihtml5-command-value='h6'>"+locale.font_styles.h6+"</a></li>"+"</ul>"+"</li>";},"emphasis":function(locale,options){var size=(options&&options.size)?' btn-'+options.size:'';return"<li>"+"<div class='btn-group'>"+"<a class='btn"+size+"' data-wysihtml5-command='bold' title='CTRL+B' tabindex='-1'>"+locale.emphasis.bold+"</a>"+"<a class='btn"+size+"' data-wysihtml5-command='italic' title='CTRL+I' tabindex='-1'>"+locale.emphasis.italic+"</a>"+"<a class='btn"+size+"' data-wysihtml5-command='underline' title='CTRL+U' tabindex='-1'>"+locale.emphasis.underline+"</a>"+"</div>"+"</li>";},"lists":function(locale,options){var size=(options&&options.size)?' btn-'+options.size:'';return"<li>"+"<div class='btn-group'>"+"<a class='btn"+size+"' data-wysihtml5-command='insertUnorderedList' title='"+locale.lists.unordered+"' tabindex='-1'><i class='icon-list'></i></a>"+"<a class='btn"+size+"' data-wysihtml5-command='insertOrderedList' title='"+locale.lists.ordered+"' tabindex='-1'><i class='icon-th-list'></i></a>"+"<a class='btn"+size+"' data-wysihtml5-command='Outdent' title='"+locale.lists.outdent+"' tabindex='-1'><i class='icon-indent-right'></i></a>"+"<a class='btn"+size+"' data-wysihtml5-command='Indent' title='"+locale.lists.indent+"' tabindex='-1'><i class='icon-indent-left'></i></a>"+"</div>"+"</li>";},"link":function(locale,options){var size=(options&&options.size)?' btn-'+options.size:'';return"<li>"+"<div class='bootstrap-wysihtml5-insert-link-modal modal hide fade'>"+"<div class='modal-header'>"+"<a class='close' data-dismiss='modal'>&times;</a>"+"<h3>"+locale.link.insert+"</h3>"+"</div>"+"<div class='modal-body'>"+"<input value='http://' class='bootstrap-wysihtml5-insert-link-url input-xlarge'>"+"<label class='checkbox'> <input type='checkbox' class='bootstrap-wysihtml5-insert-link-target' checked>"+locale.link.target+"</label>"+"</div>"+"<div class='modal-footer'>"+"<a href='#' class='btn' data-dismiss='modal'>"+locale.link.cancel+"</a>"+"<a href='#' class='btn btn-primary' data-dismiss='modal'>"+locale.link.insert+"</a>"+"</div>"+"</div>"+"<a class='btn"+size+"' data-wysihtml5-command='createLink' title='"+locale.link.insert+"' tabindex='-1'><i class='icon-share'></i></a>"+"</li>";},"image":function(locale,options){var size=(options&&options.size)?' btn-'+options.size:'';return"<li>"+"<div class='bootstrap-wysihtml5-insert-image-modal modal hide fade'>"+"<div class='modal-header'>"+"<a class='close' data-dismiss='modal'>&times;</a>"+"<h3>"+locale.image.insert+"</h3>"+"</div>"+"<div class='modal-body'>"+"<input value='http://' class='bootstrap-wysihtml5-insert-image-url input-xlarge'>"+"</div>"+"<div class='modal-footer'>"+"<a href='#' class='btn' data-dismiss='modal'>"+locale.image.cancel+"</a>"+"<a href='#' class='btn btn-primary' data-dismiss='modal'>"+locale.image.insert+"</a>"+"</div>"+"</div>"+"<a class='btn"+size+"' data-wysihtml5-command='insertImage' title='"+locale.image.insert+"' tabindex='-1'><i class='icon-picture'></i></a>"+"</li>";},"html":function(locale,options){var size=(options&&options.size)?' btn-'+options.size:'';return"<li>"+"<div class='btn-group'>"+"<a class='btn"+size+"' data-wysihtml5-action='change_view' title='"+locale.html.edit+"' tabindex='-1'><i class='icon-pencil'></i></a>"+"</div>"+"</li>";},"color":function(locale,options){var size=(options&&options.size)?' btn-'+options.size:'';return"<li class='dropdown'>"+"<a class='btn dropdown-toggle"+size+"' data-toggle='dropdown' href='#' tabindex='-1'>"+"<span class='current-color'>"+locale.colours.black+"</span>&nbsp;<b class='caret'></b>"+"</a>"+"<ul class='dropdown-menu'>"+"<li><div class='wysihtml5-colors' data-wysihtml5-command-value='black'></div><a class='wysihtml5-colors-title' data-wysihtml5-command='foreColor' data-wysihtml5-command-value='black'>"+locale.colours.black+"</a></li>"+"<li><div class='wysihtml5-colors' data-wysihtml5-command-value='silver'></div><a class='wysihtml5-colors-title' data-wysihtml5-command='foreColor' data-wysihtml5-command-value='silver'>"+locale.colours.silver+"</a></li>"+"<li><div class='wysihtml5-colors' data-wysihtml5-command-value='gray'></div><a class='wysihtml5-colors-title' data-wysihtml5-command='foreColor' data-wysihtml5-command-value='gray'>"+locale.colours.gray+"</a></li>"+"<li><div class='wysihtml5-colors' data-wysihtml5-command-value='maroon'></div><a class='wysihtml5-colors-title' data-wysihtml5-command='foreColor' data-wysihtml5-command-value='maroon'>"+locale.colours.maroon+"</a></li>"+"<li><div class='wysihtml5-colors' data-wysihtml5-command-value='red'></div><a class='wysihtml5-colors-title' data-wysihtml5-command='foreColor' data-wysihtml5-command-value='red'>"+locale.colours.red+"</a></li>"+"<li><div class='wysihtml5-colors' data-wysihtml5-command-value='purple'></div><a class='wysihtml5-colors-title' data-wysihtml5-command='foreColor' data-wysihtml5-command-value='purple'>"+locale.colours.purple+"</a></li>"+"<li><div class='wysihtml5-colors' data-wysihtml5-command-value='green'></div><a class='wysihtml5-colors-title' data-wysihtml5-command='foreColor' data-wysihtml5-command-value='green'>"+locale.colours.green+"</a></li>"+"<li><div class='wysihtml5-colors' data-wysihtml5-command-value='olive'></div><a class='wysihtml5-colors-title' data-wysihtml5-command='foreColor' data-wysihtml5-command-value='olive'>"+locale.colours.olive+"</a></li>"+"<li><div class='wysihtml5-colors' data-wysihtml5-command-value='navy'></div><a class='wysihtml5-colors-title' data-wysihtml5-command='foreColor' data-wysihtml5-command-value='navy'>"+locale.colours.navy+"</a></li>"+"<li><div class='wysihtml5-colors' data-wysihtml5-command-value='blue'></div><a class='wysihtml5-colors-title' data-wysihtml5-command='foreColor' data-wysihtml5-command-value='blue'>"+locale.colours.blue+"</a></li>"+"<li><div class='wysihtml5-colors' data-wysihtml5-command-value='orange'></div><a class='wysihtml5-colors-title' data-wysihtml5-command='foreColor' data-wysihtml5-command-value='orange'>"+locale.colours.orange+"</a></li>"+"</ul>"+"</li>";}};var templates=function(key,locale,options){return tpl[key](locale,options);};var Wysihtml5=function(el,options){this.el=el;var toolbarOpts=options||defaultOptions;for(var t in toolbarOpts.customTemplates){tpl[t]=toolbarOpts.customTemplates[t];}
this.toolbar=this.createToolbar(el,toolbarOpts);this.editor=this.createEditor(options);window.editor=this.editor;$('iframe.wysihtml5-sandbox').each(function(i,el){$(el.contentWindow).off('focus.wysihtml5').on({'focus.wysihtml5':function(){$('li.dropdown').removeClass('open');}});});};Wysihtml5.prototype={constructor:Wysihtml5,createEditor:function(options){options=options||{};options=$.extend(true,{},options);options.toolbar=this.toolbar[0];var editor=new wysi.Editor(this.el[0],options);if(options&&options.events){for(var eventName in options.events){editor.on(eventName,options.events[eventName]);}}
return editor;},createToolbar:function(el,options){var self=this;var toolbar=$("<ul/>",{'class':"wysihtml5-toolbar",'style':"display:none"});var culture=options.locale||defaultOptions.locale||"en";for(var key in defaultOptions){var value=false;if(options[key]!==undefined){if(options[key]===true){value=true;}}else{value=defaultOptions[key];}
if(value===true){toolbar.append(templates(key,locale[culture],options));if(key==="html"){this.initHtml(toolbar);}
if(key==="link"){this.initInsertLink(toolbar);}
if(key==="image"){this.initInsertImage(toolbar);}}}
if(options.toolbar){for(key in options.toolbar){toolbar.append(options.toolbar[key]);}}
toolbar.find("a[data-wysihtml5-command='formatBlock']").click(function(e){var target=e.target||e.srcElement;var el=$(target);self.toolbar.find('.current-font').text(el.html());});toolbar.find("a[data-wysihtml5-command='foreColor']").click(function(e){var target=e.target||e.srcElement;var el=$(target);self.toolbar.find('.current-color').text(el.html());});this.el.before(toolbar);return toolbar;},initHtml:function(toolbar){var changeViewSelector="a[data-wysihtml5-action='change_view']";toolbar.find(changeViewSelector).click(function(e){toolbar.find('a.btn').not(changeViewSelector).toggleClass('disabled');});},initInsertImage:function(toolbar){var self=this;var insertImageModal=toolbar.find('.bootstrap-wysihtml5-insert-image-modal');var urlInput=insertImageModal.find('.bootstrap-wysihtml5-insert-image-url');var insertButton=insertImageModal.find('a.btn-primary');var initialValue=urlInput.val();var caretBookmark;var insertImage=function(){var url=urlInput.val();urlInput.val(initialValue);self.editor.currentView.element.focus();if(caretBookmark){self.editor.composer.selection.setBookmark(caretBookmark);caretBookmark=null;}
self.editor.composer.commands.exec("insertImage",url);};urlInput.keypress(function(e){if(e.which==13){insertImage();insertImageModal.modal('hide');}});insertButton.click(insertImage);insertImageModal.on('shown',function(){urlInput.focus();});insertImageModal.on('hide',function(){self.editor.currentView.element.focus();});toolbar.find('a[data-wysihtml5-command=insertImage]').click(function(){var activeButton=$(this).hasClass("wysihtml5-command-active");if(!activeButton){self.editor.currentView.element.focus(false);caretBookmark=self.editor.composer.selection.getBookmark();insertImageModal.appendTo('body').modal('show');insertImageModal.on('click.dismiss.modal','[data-dismiss="modal"]',function(e){e.stopPropagation();});return false;}
else{return true;}});},initInsertLink:function(toolbar){var self=this;var insertLinkModal=toolbar.find('.bootstrap-wysihtml5-insert-link-modal');var urlInput=insertLinkModal.find('.bootstrap-wysihtml5-insert-link-url');var targetInput=insertLinkModal.find('.bootstrap-wysihtml5-insert-link-target');var insertButton=insertLinkModal.find('a.btn-primary');var initialValue=urlInput.val();var caretBookmark;var insertLink=function(){var url=urlInput.val();urlInput.val(initialValue);self.editor.currentView.element.focus();if(caretBookmark){self.editor.composer.selection.setBookmark(caretBookmark);caretBookmark=null;}
var newWindow=targetInput.prop("checked");self.editor.composer.commands.exec("createLink",{'href':url,'target':(newWindow?'_blank':'_self'),'rel':(newWindow?'nofollow':'')});};var pressedEnter=false;urlInput.keypress(function(e){if(e.which==13){insertLink();insertLinkModal.modal('hide');}});insertButton.click(insertLink);insertLinkModal.on('shown',function(){urlInput.focus();});insertLinkModal.on('hide',function(){self.editor.currentView.element.focus();});toolbar.find('a[data-wysihtml5-command=createLink]').click(function(){var activeButton=$(this).hasClass("wysihtml5-command-active");if(!activeButton){self.editor.currentView.element.focus(false);caretBookmark=self.editor.composer.selection.getBookmark();insertLinkModal.appendTo('body').modal('show');insertLinkModal.on('click.dismiss.modal','[data-dismiss="modal"]',function(e){e.stopPropagation();});return false;}
else{return true;}});}};var methods={resetDefaults:function(){$.fn.wysihtml5.defaultOptions=$.extend(true,{},$.fn.wysihtml5.defaultOptionsCache);},bypassDefaults:function(options){return this.each(function(){var $this=$(this);$this.data('wysihtml5',new Wysihtml5($this,options));});},shallowExtend:function(options){var settings=$.extend({},$.fn.wysihtml5.defaultOptions,options||{},$(this).data());var that=this;return methods.bypassDefaults.apply(that,[settings]);},deepExtend:function(options){var settings=$.extend(true,{},$.fn.wysihtml5.defaultOptions,options||{});var that=this;return methods.bypassDefaults.apply(that,[settings]);},init:function(options){var that=this;return methods.shallowExtend.apply(that,[options]);}};$.fn.wysihtml5=function(method){if(methods[method]){return methods[method].apply(this,Array.prototype.slice.call(arguments,1));}else if(typeof method==='object'||!method){return methods.init.apply(this,arguments);}else{$.error('Method '+method+' does not exist on jQuery.wysihtml5');}};$.fn.wysihtml5.Constructor=Wysihtml5;var defaultOptions=$.fn.wysihtml5.defaultOptions={"font-styles":true,"color":false,"emphasis":true,"lists":true,"html":false,"link":true,"image":true,events:{},parserRules:{classes:{"wysiwyg-color-silver":1,"wysiwyg-color-gray":1,"wysiwyg-color-white":1,"wysiwyg-color-maroon":1,"wysiwyg-color-red":1,"wysiwyg-color-purple":1,"wysiwyg-color-fuchsia":1,"wysiwyg-color-green":1,"wysiwyg-color-lime":1,"wysiwyg-color-olive":1,"wysiwyg-color-yellow":1,"wysiwyg-color-navy":1,"wysiwyg-color-blue":1,"wysiwyg-color-teal":1,"wysiwyg-color-aqua":1,"wysiwyg-color-orange":1},tags:{"b":{},"i":{},"br":{},"ol":{},"ul":{},"li":{},"h1":{},"h2":{},"h3":{},"h4":{},"h5":{},"h6":{},"blockquote":{},"u":1,"img":{"check_attributes":{"width":"numbers","alt":"alt","src":"url","height":"numbers"}},"a":{check_attributes:{'href':"url",'target':'alt','rel':'alt'}},"span":1,"div":1,"code":1,"pre":1}},stylesheets:["./lib/css/wysiwyg-color.css"],locale:"en"};if(typeof $.fn.wysihtml5.defaultOptionsCache==='undefined'){$.fn.wysihtml5.defaultOptionsCache=$.extend(true,{},$.fn.wysihtml5.defaultOptions);}
var locale=$.fn.wysihtml5.locale={en:{font_styles:{normal:"Normal text",h1:"Heading 1",h2:"Heading 2",h3:"Heading 3",h4:"Heading 4",h5:"Heading 5",h6:"Heading 6"},emphasis:{bold:"Bold",italic:"Italic",underline:"Underline"},lists:{unordered:"Unordered list",ordered:"Ordered list",outdent:"Outdent",indent:"Indent"},link:{insert:"Insert link",cancel:"Cancel",target:"Open link in new window"},image:{insert:"Insert image",cancel:"Cancel"},html:{edit:"Edit HTML"},colours:{black:"Black",silver:"Silver",gray:"Grey",maroon:"Maroon",red:"Red",purple:"Purple",green:"Green",olive:"Olive",navy:"Navy",blue:"Blue",orange:"Orange"}}};}(window.jQuery,window.wysihtml5);
$.extend(true,$.fn.dataTable.defaults,{"sDom":"<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>","sPaginationType":"bootstrap","oLanguage":{"sLengthMenu":"_MENU_ records per page"}});$.extend($.fn.dataTableExt.oStdClasses,{"sWrapper":"dataTables_wrapper form-inline"});$.fn.dataTableExt.oApi.fnPagingInfo=function(oSettings)
{return{"iStart":oSettings._iDisplayStart,"iEnd":oSettings.fnDisplayEnd(),"iLength":oSettings._iDisplayLength,"iTotal":oSettings.fnRecordsTotal(),"iFilteredTotal":oSettings.fnRecordsDisplay(),"iPage":oSettings._iDisplayLength===-1?0:Math.ceil(oSettings._iDisplayStart/oSettings._iDisplayLength),"iTotalPages":oSettings._iDisplayLength===-1?0:Math.ceil(oSettings.fnRecordsDisplay()/oSettings._iDisplayLength)};};$.extend($.fn.dataTableExt.oPagination,{"bootstrap":{"fnInit":function(oSettings,nPaging,fnDraw){var oLang=oSettings.oLanguage.oPaginate;var fnClickHandler=function(e){e.preventDefault();if(oSettings.oApi._fnPageChange(oSettings,e.data.action)){fnDraw(oSettings);}};$(nPaging).addClass('pagination').append('<ul>'+'<li class="prev disabled"><a href="#">&larr; '+oLang.sPrevious+'</a></li>'+'<li class="next disabled"><a href="#">'+oLang.sNext+' &rarr; </a></li>'+'</ul>');var els=$('a',nPaging);$(els[0]).bind('click.DT',{action:"previous"},fnClickHandler);$(els[1]).bind('click.DT',{action:"next"},fnClickHandler);},"fnUpdate":function(oSettings,fnDraw){var iListLength=5;var oPaging=oSettings.oInstance.fnPagingInfo();var an=oSettings.aanFeatures.p;var i,ien,j,sClass,iStart,iEnd,iHalf=Math.floor(iListLength/2);if(oPaging.iTotalPages<iListLength){iStart=1;iEnd=oPaging.iTotalPages;}
else if(oPaging.iPage<=iHalf){iStart=1;iEnd=iListLength;}else if(oPaging.iPage>=(oPaging.iTotalPages-iHalf)){iStart=oPaging.iTotalPages-iListLength+1;iEnd=oPaging.iTotalPages;}else{iStart=oPaging.iPage-iHalf+1;iEnd=iStart+iListLength-1;}
for(i=0,ien=an.length;i<ien;i++){$('li:gt(0)',an[i]).filter(':not(:last)').remove();for(j=iStart;j<=iEnd;j++){sClass=(j==oPaging.iPage+1)?'class="active"':'';$('<li '+sClass+'><a href="#">'+j+'</a></li>').insertBefore($('li:last',an[i])[0]).bind('click',function(e){e.preventDefault();oSettings._iDisplayStart=(parseInt($('a',this).text(),10)-1)*oPaging.iLength;fnDraw(oSettings);});}
if(oPaging.iPage===0){$('li:first',an[i]).addClass('disabled');}else{$('li:first',an[i]).removeClass('disabled');}
if(oPaging.iPage===oPaging.iTotalPages-1||oPaging.iTotalPages===0){$('li:last',an[i]).addClass('disabled');}else{$('li:last',an[i]).removeClass('disabled');}}}}});if($.fn.DataTable.TableTools){$.extend(true,$.fn.DataTable.TableTools.classes,{"container":"DTTT btn-group","buttons":{"normal":"btn","disabled":"disabled"},"collection":{"container":"DTTT_dropdown dropdown-menu","buttons":{"normal":"","disabled":"disabled"}},"print":{"info":"DTTT_print_info modal"},"select":{"row":"active"}});$.extend(true,$.fn.DataTable.TableTools.DEFAULTS.oTags,{"collection":{"container":"ul","button":"li","liner":"a"}});}
$.fn.dataTableExt.oApi.fnReloadAjax=function(oSettings,sNewSource,fnCallback,bStandingRedraw)
{if(sNewSource!==undefined&&sNewSource!==null){oSettings.sAjaxSource=sNewSource;}
if(oSettings.oFeatures.bServerSide){this.fnDraw();return;}
this.oApi._fnProcessingDisplay(oSettings,true);var that=this;var iStart=oSettings._iDisplayStart;var aData=[];this.oApi._fnServerParams(oSettings,aData);oSettings.fnServerData.call(oSettings.oInstance,oSettings.sAjaxSource,aData,function(json){that.oApi._fnClearTable(oSettings);var aData=(oSettings.sAjaxDataProp!=="")?that.oApi._fnGetObjectDataFn(oSettings.sAjaxDataProp)(json):json;for(var i=0;i<aData.length;i++)
{that.oApi._fnAddData(oSettings,aData[i]);}
oSettings.aiDisplay=oSettings.aiDisplayMaster.slice();that.fnDraw();if(bStandingRedraw===true)
{oSettings._iDisplayStart=iStart;that.oApi._fnCalculateEnd(oSettings);that.fnDraw(false);}
that.oApi._fnProcessingDisplay(oSettings,false);if(typeof fnCallback=='function'&&fnCallback!==null)
{fnCallback(oSettings);}},oSettings);};
/*!
 jQuery Colorbox v1.4.21 - 2013-06-06
 (c) 2013 Jack Moore - jacklmoore.com/colorbox
 license: http://www.opensource.org/licenses/mit-license.php
*/
(function($,document,window){var
defaults={transition:"elastic",speed:300,fadeOut:300,width:false,initialWidth:"600",innerWidth:false,maxWidth:false,height:false,initialHeight:"450",innerHeight:false,maxHeight:false,scalePhotos:true,scrolling:true,inline:false,html:false,iframe:false,fastIframe:true,photo:false,href:false,title:false,rel:false,opacity:0.9,preloading:true,className:false,retinaImage:false,retinaUrl:false,retinaSuffix:'@2x.$1',current:"image {current} of {total}",previous:"previous",next:"next",close:"close",xhrError:"This content failed to load.",imgError:"This image failed to load.",open:false,returnFocus:true,trapFocus:true,reposition:true,loop:true,slideshow:false,slideshowAuto:true,slideshowSpeed:2500,slideshowStart:"start slideshow",slideshowStop:"stop slideshow",photoRegex:/\.(gif|png|jp(e|g|eg)|bmp|ico|webp)((#|\?).*)?$/i,onOpen:false,onLoad:false,onComplete:false,onCleanup:false,onClosed:false,overlayClose:true,escKey:true,arrowKey:true,top:false,bottom:false,left:false,right:false,fixed:false,data:undefined},colorbox='colorbox',prefix='cbox',boxElement=prefix+'Element',event_open=prefix+'_open',event_load=prefix+'_load',event_complete=prefix+'_complete',event_cleanup=prefix+'_cleanup',event_closed=prefix+'_closed',event_purge=prefix+'_purge',$overlay,$box,$wrap,$content,$topBorder,$leftBorder,$rightBorder,$bottomBorder,$related,$window,$loaded,$loadingBay,$loadingOverlay,$title,$current,$slideshow,$next,$prev,$close,$groupControls,$events=$('<a/>'),settings,interfaceHeight,interfaceWidth,loadedHeight,loadedWidth,element,index,photo,open,active,closing,loadingTimer,publicMethod,div="div",className,requests=0,init;function $tag(tag,id,css){var element=document.createElement(tag);if(id){element.id=prefix+id;}
if(css){element.style.cssText=css;}
return $(element);}
function winheight(){return window.innerHeight?window.innerHeight:$(window).height();}
function getIndex(increment){var
max=$related.length,newIndex=(index+increment)%max;return(newIndex<0)?max+newIndex:newIndex;}
function setSize(size,dimension){return Math.round((/%/.test(size)?((dimension==='x'?$window.width():winheight())/100):1)*parseInt(size,10));}
function isImage(settings,url){return settings.photo||settings.photoRegex.test(url);}
function retinaUrl(settings,url){return settings.retinaUrl&&window.devicePixelRatio>1?url.replace(settings.photoRegex,settings.retinaSuffix):url;}
function trapFocus(e){if('contains'in $box[0]&&!$box[0].contains(e.target)){e.stopPropagation();$box.focus();}}
function makeSettings(){var i,data=$.data(element,colorbox);if(data==null){settings=$.extend({},defaults);if(console&&console.log){console.log('Error: cboxElement missing settings object');}}else{settings=$.extend({},data);}
for(i in settings){if($.isFunction(settings[i])&&i.slice(0,2)!=='on'){settings[i]=settings[i].call(element);}}
settings.rel=settings.rel||element.rel||$(element).data('rel')||'nofollow';settings.href=settings.href||$(element).attr('href');settings.title=settings.title||element.title;if(typeof settings.href==="string"){settings.href=$.trim(settings.href);}}
function trigger(event,callback){$(document).trigger(event);$events.trigger(event);if($.isFunction(callback)){callback.call(element);}}
function slideshow(){var
timeOut,className=prefix+"Slideshow_",click="click."+prefix,clear,set,start,stop;if(settings.slideshow&&$related[1]){clear=function(){clearTimeout(timeOut);};set=function(){if(settings.loop||$related[index+1]){timeOut=setTimeout(publicMethod.next,settings.slideshowSpeed);}};start=function(){$slideshow.html(settings.slideshowStop).unbind(click).one(click,stop);$events.bind(event_complete,set).bind(event_load,clear).bind(event_cleanup,stop);$box.removeClass(className+"off").addClass(className+"on");};stop=function(){clear();$events.unbind(event_complete,set).unbind(event_load,clear).unbind(event_cleanup,stop);$slideshow.html(settings.slideshowStart).unbind(click).one(click,function(){publicMethod.next();start();});$box.removeClass(className+"on").addClass(className+"off");};if(settings.slideshowAuto){start();}else{stop();}}else{$box.removeClass(className+"off "+className+"on");}}
function launch(target){if(!closing){element=target;makeSettings();$related=$(element);index=0;if(settings.rel!=='nofollow'){$related=$('.'+boxElement).filter(function(){var data=$.data(this,colorbox),relRelated;if(data){relRelated=$(this).data('rel')||data.rel||this.rel;}
return(relRelated===settings.rel);});index=$related.index(element);if(index===-1){$related=$related.add(element);index=$related.length-1;}}
$overlay.css({opacity:parseFloat(settings.opacity),cursor:settings.overlayClose?"pointer":"auto",visibility:'visible'}).show();if(className){$box.add($overlay).removeClass(className);}
if(settings.className){$box.add($overlay).addClass(settings.className);}
className=settings.className;$close.html(settings.close).show();if(!open){open=active=true;$box.css({visibility:'hidden',display:'block'});$loaded=$tag(div,'LoadedContent','width:0; height:0; overflow:hidden').appendTo($content);interfaceHeight=$topBorder.height()+$bottomBorder.height()+$content.outerHeight(true)-$content.height();interfaceWidth=$leftBorder.width()+$rightBorder.width()+$content.outerWidth(true)-$content.width();loadedHeight=$loaded.outerHeight(true);loadedWidth=$loaded.outerWidth(true);settings.w=setSize(settings.initialWidth,'x');settings.h=setSize(settings.initialHeight,'y');publicMethod.position();slideshow();trigger(event_open,settings.onOpen);$groupControls.add($title).hide();$box.focus();if(settings.trapFocus){if(document.addEventListener){document.addEventListener('focus',trapFocus,true);$events.one(event_closed,function(){document.removeEventListener('focus',trapFocus,true);});}}
if(settings.returnFocus){$events.one(event_closed,function(){$(element).focus();});}}
load();}}
function appendHTML(){if(!$box&&document.body){init=false;$window=$(window);$box=$tag(div).attr({id:colorbox,'class':$.support.opacity===false?prefix+'IE':'',role:'dialog',tabindex:'-1'}).hide();$overlay=$tag(div,"Overlay").hide();$loadingOverlay=$tag(div,"LoadingOverlay").add($tag(div,"LoadingGraphic"));$wrap=$tag(div,"Wrapper");$content=$tag(div,"Content").append($title=$tag(div,"Title"),$current=$tag(div,"Current"),$prev=$('<button type="button"/>').attr({id:prefix+'Previous'}),$next=$('<button type="button"/>').attr({id:prefix+'Next'}),$slideshow=$tag('button',"Slideshow"),$loadingOverlay,$close=$('<button type="button"/>').attr({id:prefix+'Close'}));$wrap.append($tag(div).append($tag(div,"TopLeft"),$topBorder=$tag(div,"TopCenter"),$tag(div,"TopRight")),$tag(div,false,'clear:left').append($leftBorder=$tag(div,"MiddleLeft"),$content,$rightBorder=$tag(div,"MiddleRight")),$tag(div,false,'clear:left').append($tag(div,"BottomLeft"),$bottomBorder=$tag(div,"BottomCenter"),$tag(div,"BottomRight"))).find('div div').css({'float':'left'});$loadingBay=$tag(div,false,'position:absolute; width:9999px; visibility:hidden; display:none');$groupControls=$next.add($prev).add($current).add($slideshow);$(document.body).append($overlay,$box.append($wrap,$loadingBay));}}
function addBindings(){function clickHandler(e){if(!(e.which>1||e.shiftKey||e.altKey||e.metaKey||e.ctrlKey)){e.preventDefault();launch(this);}}
if($box){if(!init){init=true;$next.click(function(){publicMethod.next();});$prev.click(function(){publicMethod.prev();});$close.click(function(){publicMethod.close();});$overlay.click(function(){if(settings.overlayClose){publicMethod.close();}});$(document).bind('keydown.'+prefix,function(e){var key=e.keyCode;if(open&&settings.escKey&&key===27){e.preventDefault();publicMethod.close();}
if(open&&settings.arrowKey&&$related[1]&&!e.altKey){if(key===37){e.preventDefault();$prev.click();}else if(key===39){e.preventDefault();$next.click();}}});if($.isFunction($.fn.on)){$(document).on('click.'+prefix,'.'+boxElement,clickHandler);}else{$('.'+boxElement).live('click.'+prefix,clickHandler);}}
return true;}
return false;}
if($.colorbox){return;}
$(appendHTML);publicMethod=$.fn[colorbox]=$[colorbox]=function(options,callback){var $this=this;options=options||{};appendHTML();if(addBindings()){if($.isFunction($this)){$this=$('<a/>');options.open=true;}else if(!$this[0]){return $this;}
if(callback){options.onComplete=callback;}
$this.each(function(){$.data(this,colorbox,$.extend({},$.data(this,colorbox)||defaults,options));}).addClass(boxElement);if(($.isFunction(options.open)&&options.open.call($this))||options.open){launch($this[0]);}}
return $this;};publicMethod.position=function(speed,loadedCallback){var
css,top=0,left=0,offset=$box.offset(),scrollTop,scrollLeft;$window.unbind('resize.'+prefix);$box.css({top:-9e4,left:-9e4});scrollTop=$window.scrollTop();scrollLeft=$window.scrollLeft();if(settings.fixed){offset.top-=scrollTop;offset.left-=scrollLeft;$box.css({position:'fixed'});}else{top=scrollTop;left=scrollLeft;$box.css({position:'absolute'});}
if(settings.right!==false){left+=Math.max($window.width()-settings.w-loadedWidth-interfaceWidth-setSize(settings.right,'x'),0);}else if(settings.left!==false){left+=setSize(settings.left,'x');}else{left+=Math.round(Math.max($window.width()-settings.w-loadedWidth-interfaceWidth,0)/2);}
if(settings.bottom!==false){top+=Math.max(winheight()-settings.h-loadedHeight-interfaceHeight-setSize(settings.bottom,'y'),0);}else if(settings.top!==false){top+=setSize(settings.top,'y');}else{top+=Math.round(Math.max(winheight()-settings.h-loadedHeight-interfaceHeight,0)/2);}
$box.css({top:offset.top,left:offset.left,visibility:'visible'});speed=($box.width()===settings.w+loadedWidth&&$box.height()===settings.h+loadedHeight)?0:speed||0;$wrap[0].style.width=$wrap[0].style.height="9999px";function modalDimensions(that){$topBorder[0].style.width=$bottomBorder[0].style.width=$content[0].style.width=(parseInt(that.style.width,10)-interfaceWidth)+'px';$content[0].style.height=$leftBorder[0].style.height=$rightBorder[0].style.height=(parseInt(that.style.height,10)-interfaceHeight)+'px';}
css={width:settings.w+loadedWidth+interfaceWidth,height:settings.h+loadedHeight+interfaceHeight,top:top,left:left};if(speed===0){$box.css(css);}
$box.dequeue().animate(css,{duration:speed,complete:function(){modalDimensions(this);active=false;$wrap[0].style.width=(settings.w+loadedWidth+interfaceWidth)+"px";$wrap[0].style.height=(settings.h+loadedHeight+interfaceHeight)+"px";if(settings.reposition){setTimeout(function(){$window.bind('resize.'+prefix,publicMethod.position);},1);}
if(loadedCallback){loadedCallback();}},step:function(){modalDimensions(this);}});};publicMethod.resize=function(options){var scrolltop;if(open){options=options||{};if(options.width){settings.w=setSize(options.width,'x')-loadedWidth-interfaceWidth;}
if(options.innerWidth){settings.w=setSize(options.innerWidth,'x');}
$loaded.css({width:settings.w});if(options.height){settings.h=setSize(options.height,'y')-loadedHeight-interfaceHeight;}
if(options.innerHeight){settings.h=setSize(options.innerHeight,'y');}
if(!options.innerHeight&&!options.height){scrolltop=$loaded.scrollTop();$loaded.css({height:"auto"});settings.h=$loaded.height();}
$loaded.css({height:settings.h});if(scrolltop){$loaded.scrollTop(scrolltop);}
publicMethod.position(settings.transition==="none"?0:settings.speed);}};publicMethod.prep=function(object){if(!open){return;}
var callback,speed=settings.transition==="none"?0:settings.speed;$loaded.empty().remove();$loaded=$tag(div,'LoadedContent').append(object);function getWidth(){settings.w=settings.w||$loaded.width();settings.w=settings.mw&&settings.mw<settings.w?settings.mw:settings.w;return settings.w;}
function getHeight(){settings.h=settings.h||$loaded.height();settings.h=settings.mh&&settings.mh<settings.h?settings.mh:settings.h;return settings.h;}
$loaded.hide().appendTo($loadingBay.show()).css({width:getWidth(),overflow:settings.scrolling?'auto':'hidden'}).css({height:getHeight()}).prependTo($content);$loadingBay.hide();$(photo).css({'float':'none'});callback=function(){var total=$related.length,iframe,frameBorder='frameBorder',allowTransparency='allowTransparency',complete;if(!open){return;}
function removeFilter(){if($.support.opacity===false){$box[0].style.removeAttribute('filter');}}
complete=function(){clearTimeout(loadingTimer);$loadingOverlay.hide();trigger(event_complete,settings.onComplete);};$title.html(settings.title).add($loaded).show();if(total>1){if(typeof settings.current==="string"){$current.html(settings.current.replace('{current}',index+1).replace('{total}',total)).show();}
$next[(settings.loop||index<total-1)?"show":"hide"]().html(settings.next);$prev[(settings.loop||index)?"show":"hide"]().html(settings.previous);if(settings.slideshow){$slideshow.show();}
if(settings.preloading){$.each([getIndex(-1),getIndex(1)],function(){var src,img,i=$related[this],data=$.data(i,colorbox);if(data&&data.href){src=data.href;if($.isFunction(src)){src=src.call(i);}}else{src=$(i).attr('href');}
if(src&&isImage(data,src)){src=retinaUrl(data,src);img=document.createElement('img');img.src=src;}});}}else{$groupControls.hide();}
if(settings.iframe){iframe=$tag('iframe')[0];if(frameBorder in iframe){iframe[frameBorder]=0;}
if(allowTransparency in iframe){iframe[allowTransparency]="true";}
if(!settings.scrolling){iframe.scrolling="no";}
$(iframe).attr({src:settings.href,name:(new Date()).getTime(),'class':prefix+'Iframe',allowFullScreen:true,webkitAllowFullScreen:true,mozallowfullscreen:true}).one('load',complete).appendTo($loaded);$events.one(event_purge,function(){iframe.src="//about:blank";});if(settings.fastIframe){$(iframe).trigger('load');}}else{complete();}
if(settings.transition==='fade'){$box.fadeTo(speed,1,removeFilter);}else{removeFilter();}};if(settings.transition==='fade'){$box.fadeTo(speed,0,function(){publicMethod.position(0,callback);});}else{publicMethod.position(speed,callback);}};function load(){var href,setResize,prep=publicMethod.prep,$inline,request=++requests;active=true;photo=false;element=$related[index];makeSettings();trigger(event_purge);trigger(event_load,settings.onLoad);settings.h=settings.height?setSize(settings.height,'y')-loadedHeight-interfaceHeight:settings.innerHeight&&setSize(settings.innerHeight,'y');settings.w=settings.width?setSize(settings.width,'x')-loadedWidth-interfaceWidth:settings.innerWidth&&setSize(settings.innerWidth,'x');settings.mw=settings.w;settings.mh=settings.h;if(settings.maxWidth){settings.mw=setSize(settings.maxWidth,'x')-loadedWidth-interfaceWidth;settings.mw=settings.w&&settings.w<settings.mw?settings.w:settings.mw;}
if(settings.maxHeight){settings.mh=setSize(settings.maxHeight,'y')-loadedHeight-interfaceHeight;settings.mh=settings.h&&settings.h<settings.mh?settings.h:settings.mh;}
href=settings.href;loadingTimer=setTimeout(function(){$loadingOverlay.show();},100);if(settings.inline){$inline=$tag(div).hide().insertBefore($(href)[0]);$events.one(event_purge,function(){$inline.replaceWith($loaded.children());});prep($(href));}else if(settings.iframe){prep(" ");}else if(settings.html){prep(settings.html);}else if(isImage(settings,href)){href=retinaUrl(settings,href);photo=document.createElement('img');$(photo).addClass(prefix+'Photo').bind('error',function(){settings.title=false;prep($tag(div,'Error').html(settings.imgError));}).one('load',function(){var percent;if(request!==requests){return;}
photo.alt=$(element).attr('alt')||$(element).attr('data-alt')||'';if(settings.retinaImage&&window.devicePixelRatio>1){photo.height=photo.height/window.devicePixelRatio;photo.width=photo.width/window.devicePixelRatio;}
if(settings.scalePhotos){setResize=function(){photo.height-=photo.height*percent;photo.width-=photo.width*percent;};if(settings.mw&&photo.width>settings.mw){percent=(photo.width-settings.mw)/photo.width;setResize();}
if(settings.mh&&photo.height>settings.mh){percent=(photo.height-settings.mh)/photo.height;setResize();}}
if(settings.h){photo.style.marginTop=Math.max(settings.mh-photo.height,0)/2+'px';}
if($related[1]&&(settings.loop||$related[index+1])){photo.style.cursor='pointer';photo.onclick=function(){publicMethod.next();};}
photo.style.width=photo.width+'px';photo.style.height=photo.height+'px';setTimeout(function(){prep(photo);},1);});setTimeout(function(){photo.src=href;},1);}else if(href){$loadingBay.load(href,settings.data,function(data,status){if(request===requests){prep(status==='error'?$tag(div,'Error').html(settings.xhrError):$(this).contents());}});}}
publicMethod.next=function(){if(!active&&$related[1]&&(settings.loop||$related[index+1])){index=getIndex(1);launch($related[index]);}};publicMethod.prev=function(){if(!active&&$related[1]&&(settings.loop||index)){index=getIndex(-1);launch($related[index]);}};publicMethod.close=function(){if(open&&!closing){closing=true;open=false;trigger(event_cleanup,settings.onCleanup);$window.unbind('.'+prefix);$overlay.fadeTo(settings.fadeOut||0,0);$box.stop().fadeTo(settings.fadeOut||0,0,function(){$box.add($overlay).css({'opacity':1,cursor:'auto'}).hide();trigger(event_purge);$loaded.empty().remove();setTimeout(function(){closing=false;trigger(event_closed,settings.onClosed);},1);});}};publicMethod.remove=function(){if(!$box){return;}
$box.stop();$.colorbox.close();$box.stop().remove();$overlay.remove();closing=false;$box=null;$('.'+boxElement).removeData(colorbox).removeClass(boxElement);$(document).unbind('click.'+prefix);};publicMethod.element=function(){return $(element);};publicMethod.settings=defaults;}(jQuery,document,window));
var q=null;window.PR_SHOULD_USE_CONTINUATION=!0;(function(){function L(a){function m(a){var f=a.charCodeAt(0);if(f!==92)return f;var b=a.charAt(1);return(f=r[b])?f:"0"<=b&&b<="7"?parseInt(a.substring(1),8):b==="u"||b==="x"?parseInt(a.substring(2),16):a.charCodeAt(1)}function e(a){if(a<32)return(a<16?"\\x0":"\\x")+a.toString(16);a=String.fromCharCode(a);if(a==="\\"||a==="-"||a==="["||a==="]")a="\\"+a;return a}function h(a){for(var f=a.substring(1,a.length-1).match(/\\u[\dA-Fa-f]{4}|\\x[\dA-Fa-f]{2}|\\[0-3][0-7]{0,2}|\\[0-7]{1,2}|\\[\S\s]|[^\\]/g),a=[],b=[],o=f[0]==="^",c=o?1:0,i=f.length;c<i;++c){var j=f[c];if(/\\[bdsw]/i.test(j))a.push(j);else{var j=m(j),d;c+2<i&&"-"===f[c+1]?(d=m(f[c+2]),c+=2):d=j;b.push([j,d]);d<65||j>122||(d<65||j>90||b.push([Math.max(65,j)|32,Math.min(d,90)|32]),d<97||j>122||b.push([Math.max(97,j)&-33,Math.min(d,122)&-33]))}}b.sort(function(a,f){return a[0]-f[0]||f[1]-a[1]});f=[];j=[NaN,NaN];for(c=0;c<b.length;++c)i=b[c],i[0]<=j[1]+1?j[1]=Math.max(j[1],i[1]):f.push(j=i);b=["["];o&&b.push("^");b.push.apply(b,a);for(c=0;c<f.length;++c)i=f[c],b.push(e(i[0])),i[1]>i[0]&&(i[1]+1>i[0]&&b.push("-"),b.push(e(i[1])));b.push("]");return b.join("")}function y(a){for(var f=a.source.match(/\[(?:[^\\\]]|\\[\S\s])*]|\\u[\dA-Fa-f]{4}|\\x[\dA-Fa-f]{2}|\\\d+|\\[^\dux]|\(\?[!:=]|[()^]|[^()[\\^]+/g),b=f.length,d=[],c=0,i=0;c<b;++c){var j=f[c];j==="("?++i:"\\"===j.charAt(0)&&(j=+j.substring(1))&&j<=i&&(d[j]=-1)}for(c=1;c<d.length;++c)-1===d[c]&&(d[c]=++t);for(i=c=0;c<b;++c)j=f[c],j==="("?(++i,d[i]===void 0&&(f[c]="(?:")):"\\"===j.charAt(0)&&(j=+j.substring(1))&&j<=i&&(f[c]="\\"+d[i]);for(i=c=0;c<b;++c)"^"===f[c]&&"^"!==f[c+1]&&(f[c]="");if(a.ignoreCase&&s)for(c=0;c<b;++c)j=f[c],a=j.charAt(0),j.length>=2&&a==="["?f[c]=h(j):a!=="\\"&&(f[c]=j.replace(/[A-Za-z]/g,function(a){a=a.charCodeAt(0);return"["+String.fromCharCode(a&-33,a|32)+"]"}));return f.join("")}for(var t=0,s=!1,l=!1,p=0,d=a.length;p<d;++p){var g=a[p];if(g.ignoreCase)l=!0;else if(/[a-z]/i.test(g.source.replace(/\\u[\da-f]{4}|\\x[\da-f]{2}|\\[^UXux]/gi,""))){s=!0;l=!1;break}}for(var r={b:8,t:9,n:10,v:11,f:12,r:13},n=[],p=0,d=a.length;p<d;++p){g=a[p];if(g.global||g.multiline)throw Error(""+g);n.push("(?:"+y(g)+")")}return RegExp(n.join("|"),l?"gi":"g")}function M(a){function m(a){switch(a.nodeType){case 1:if(e.test(a.className))break;for(var g=a.firstChild;g;g=g.nextSibling)m(g);g=a.nodeName;if("BR"===g||"LI"===g)h[s]="\n",t[s<<1]=y++,t[s++<<1|1]=a;break;case 3:case 4:g=a.nodeValue,g.length&&(g=p?g.replace(/\r\n?/g,"\n"):g.replace(/[\t\n\r ]+/g," "),h[s]=g,t[s<<1]=y,y+=g.length,t[s++<<1|1]=a)}}var e=/(?:^|\s)nocode(?:\s|$)/,h=[],y=0,t=[],s=0,l;a.currentStyle?l=a.currentStyle.whiteSpace:window.getComputedStyle&&(l=document.defaultView.getComputedStyle(a,q).getPropertyValue("white-space"));var p=l&&"pre"===l.substring(0,3);m(a);return{a:h.join("").replace(/\n$/,""),c:t}}function B(a,m,e,h){m&&(a={a:m,d:a},e(a),h.push.apply(h,a.e))}function x(a,m){function e(a){for(var l=a.d,p=[l,"pln"],d=0,g=a.a.match(y)||[],r={},n=0,z=g.length;n<z;++n){var f=g[n],b=r[f],o=void 0,c;if(typeof b==="string")c=!1;else{var i=h[f.charAt(0)];if(i)o=f.match(i[1]),b=i[0];else{for(c=0;c<t;++c)if(i=m[c],o=f.match(i[1])){b=i[0];break}o||(b="pln")}if((c=b.length>=5&&"lang-"===b.substring(0,5))&&!(o&&typeof o[1]==="string"))c=!1,b="src";c||(r[f]=b)}i=d;d+=f.length;if(c){c=o[1];var j=f.indexOf(c),k=j+c.length;o[2]&&(k=f.length-o[2].length,j=k-c.length);b=b.substring(5);B(l+i,f.substring(0,j),e,p);B(l+i+j,c,C(b,c),p);B(l+i+k,f.substring(k),e,p)}else p.push(l+i,b)}a.e=p}var h={},y;(function(){for(var e=a.concat(m),l=[],p={},d=0,g=e.length;d<g;++d){var r=e[d],n=r[3];if(n)for(var k=n.length;--k>=0;)h[n.charAt(k)]=r;r=r[1];n=""+r;p.hasOwnProperty(n)||(l.push(r),p[n]=q)}l.push(/[\S\s]/);y=L(l)})();var t=m.length;return e}function u(a){var m=[],e=[];a.tripleQuotedStrings?m.push(["str",/^(?:'''(?:[^'\\]|\\[\S\s]|''?(?=[^']))*(?:'''|$)|"""(?:[^"\\]|\\[\S\s]|""?(?=[^"]))*(?:"""|$)|'(?:[^'\\]|\\[\S\s])*(?:'|$)|"(?:[^"\\]|\\[\S\s])*(?:"|$))/,q,"'\""]):a.multiLineStrings?m.push(["str",/^(?:'(?:[^'\\]|\\[\S\s])*(?:'|$)|"(?:[^"\\]|\\[\S\s])*(?:"|$)|`(?:[^\\`]|\\[\S\s])*(?:`|$))/,q,"'\"`"]):m.push(["str",/^(?:'(?:[^\n\r'\\]|\\.)*(?:'|$)|"(?:[^\n\r"\\]|\\.)*(?:"|$))/,q,"\"'"]);a.verbatimStrings&&e.push(["str",/^@"(?:[^"]|"")*(?:"|$)/,q]);var h=a.hashComments;h&&(a.cStyleComments?(h>1?m.push(["com",/^#(?:##(?:[^#]|#(?!##))*(?:###|$)|.*)/,q,"#"]):m.push(["com",/^#(?:(?:define|elif|else|endif|error|ifdef|include|ifndef|line|pragma|undef|warning)\b|[^\n\r]*)/,q,"#"]),e.push(["str",/^<(?:(?:(?:\.\.\/)*|\/?)(?:[\w-]+(?:\/[\w-]+)+)?[\w-]+\.h|[a-z]\w*)>/,q])):m.push(["com",/^#[^\n\r]*/,q,"#"]));a.cStyleComments&&(e.push(["com",/^\/\/[^\n\r]*/,q]),e.push(["com",/^\/\*[\S\s]*?(?:\*\/|$)/,q]));a.regexLiterals&&e.push(["lang-regex",/^(?:^^\.?|[!+-]|!=|!==|#|%|%=|&|&&|&&=|&=|\(|\*|\*=|\+=|,|-=|->|\/|\/=|:|::|;|<|<<|<<=|<=|=|==|===|>|>=|>>|>>=|>>>|>>>=|[?@[^]|\^=|\^\^|\^\^=|{|\||\|=|\|\||\|\|=|~|break|case|continue|delete|do|else|finally|instanceof|return|throw|try|typeof)\s*(\/(?=[^*/])(?:[^/[\\]|\\[\S\s]|\[(?:[^\\\]]|\\[\S\s])*(?:]|$))+\/)/]);(h=a.types)&&e.push(["typ",h]);a=(""+a.keywords).replace(/^ | $/g,"");a.length&&e.push(["kwd",RegExp("^(?:"+a.replace(/[\s,]+/g,"|")+")\\b"),q]);m.push(["pln",/^\s+/,q," \r\n\t\xa0"]);e.push(["lit",/^@[$_a-z][\w$@]*/i,q],["typ",/^(?:[@_]?[A-Z]+[a-z][\w$@]*|\w+_t\b)/,q],["pln",/^[$_a-z][\w$@]*/i,q],["lit",/^(?:0x[\da-f]+|(?:\d(?:_\d+)*\d*(?:\.\d*)?|\.\d\+)(?:e[+-]?\d+)?)[a-z]*/i,q,"0123456789"],["pln",/^\\[\S\s]?/,q],["pun",/^.[^\s\w"-$'./@\\`]*/,q]);return x(m,e)}function D(a,m){function e(a){switch(a.nodeType){case 1:if(k.test(a.className))break;if("BR"===a.nodeName)h(a),a.parentNode&&a.parentNode.removeChild(a);else for(a=a.firstChild;a;a=a.nextSibling)e(a);break;case 3:case 4:if(p){var b=a.nodeValue,d=b.match(t);if(d){var c=b.substring(0,d.index);a.nodeValue=c;(b=b.substring(d.index+d[0].length))&&a.parentNode.insertBefore(s.createTextNode(b),a.nextSibling);h(a);c||a.parentNode.removeChild(a)}}}}function h(a){function b(a,d){var e=d?a.cloneNode(!1):a,f=a.parentNode;if(f){var f=b(f,1),g=a.nextSibling;f.appendChild(e);for(var h=g;h;h=g)g=h.nextSibling,f.appendChild(h)}return e}
for(;!a.nextSibling;)if(a=a.parentNode,!a)return;for(var a=b(a.nextSibling,0),e;(e=a.parentNode)&&e.nodeType===1;)a=e;d.push(a)}var k=/(?:^|\s)nocode(?:\s|$)/,t=/\r\n?|\n/,s=a.ownerDocument,l;a.currentStyle?l=a.currentStyle.whiteSpace:window.getComputedStyle&&(l=s.defaultView.getComputedStyle(a,q).getPropertyValue("white-space"));var p=l&&"pre"===l.substring(0,3);for(l=s.createElement("LI");a.firstChild;)l.appendChild(a.firstChild);for(var d=[l],g=0;g<d.length;++g)e(d[g]);m===(m|0)&&d[0].setAttribute("value",m);var r=s.createElement("OL");r.className="linenums";for(var n=Math.max(0,m-1|0)||0,g=0,z=d.length;g<z;++g)l=d[g],l.className="L"+(g+n)%10,l.firstChild||l.appendChild(s.createTextNode("\xa0")),r.appendChild(l);a.appendChild(r)}function k(a,m){for(var e=m.length;--e>=0;){var h=m[e];A.hasOwnProperty(h)?window.console&&console.warn("cannot override language handler %s",h):A[h]=a}}function C(a,m){if(!a||!A.hasOwnProperty(a))a=/^\s*</.test(m)?"default-markup":"default-code";return A[a]}function E(a){var m=a.g;try{var e=M(a.h),h=e.a;a.a=h;a.c=e.c;a.d=0;C(m,h)(a);var k=/\bMSIE\b/.test(navigator.userAgent),m=/\n/g,t=a.a,s=t.length,e=0,l=a.c,p=l.length,h=0,d=a.e,g=d.length,a=0;d[g]=s;var r,n;for(n=r=0;n<g;)d[n]!==d[n+2]?(d[r++]=d[n++],d[r++]=d[n++]):n+=2;g=r;for(n=r=0;n<g;){for(var z=d[n],f=d[n+1],b=n+2;b+2<=g&&d[b+1]===f;)b+=2;d[r++]=z;d[r++]=f;n=b}for(d.length=r;h<p;){var o=l[h+2]||s,c=d[a+2]||s,b=Math.min(o,c),i=l[h+1],j;if(i.nodeType!==1&&(j=t.substring(e,b))){k&&(j=j.replace(m,"\r"));i.nodeValue=j;var u=i.ownerDocument,v=u.createElement("SPAN");v.className=d[a+1];var x=i.parentNode;x.replaceChild(v,i);v.appendChild(i);e<o&&(l[h+1]=i=u.createTextNode(t.substring(b,o)),x.insertBefore(i,v.nextSibling))}e=b;e>=o&&(h+=2);e>=c&&(a+=2)}}catch(w){"console"in window&&console.log(w&&w.stack?w.stack:w)}}var v=["break,continue,do,else,for,if,return,while"],w=[[v,"auto,case,char,const,default,double,enum,extern,float,goto,int,long,register,short,signed,sizeof,static,struct,switch,typedef,union,unsigned,void,volatile"],"catch,class,delete,false,import,new,operator,private,protected,public,this,throw,true,try,typeof"],F=[w,"alignof,align_union,asm,axiom,bool,concept,concept_map,const_cast,constexpr,decltype,dynamic_cast,explicit,export,friend,inline,late_check,mutable,namespace,nullptr,reinterpret_cast,static_assert,static_cast,template,typeid,typename,using,virtual,where"],G=[w,"abstract,boolean,byte,extends,final,finally,implements,import,instanceof,null,native,package,strictfp,super,synchronized,throws,transient"],H=[G,"as,base,by,checked,decimal,delegate,descending,dynamic,event,fixed,foreach,from,group,implicit,in,interface,internal,into,is,lock,object,out,override,orderby,params,partial,readonly,ref,sbyte,sealed,stackalloc,string,select,uint,ulong,unchecked,unsafe,ushort,var"],w=[w,"debugger,eval,export,function,get,null,set,undefined,var,with,Infinity,NaN"],I=[v,"and,as,assert,class,def,del,elif,except,exec,finally,from,global,import,in,is,lambda,nonlocal,not,or,pass,print,raise,try,with,yield,False,True,None"],J=[v,"alias,and,begin,case,class,def,defined,elsif,end,ensure,false,in,module,next,nil,not,or,redo,rescue,retry,self,super,then,true,undef,unless,until,when,yield,BEGIN,END"],v=[v,"case,done,elif,esac,eval,fi,function,in,local,set,then,until"],K=/^(DIR|FILE|vector|(de|priority_)?queue|list|stack|(const_)?iterator|(multi)?(set|map)|bitset|u?(int|float)\d*)/,N=/\S/,O=u({keywords:[F,H,w,"caller,delete,die,do,dump,elsif,eval,exit,foreach,for,goto,if,import,last,local,my,next,no,our,print,package,redo,require,sub,undef,unless,until,use,wantarray,while,BEGIN,END"+
I,J,v],hashComments:!0,cStyleComments:!0,multiLineStrings:!0,regexLiterals:!0}),A={};k(O,["default-code"]);k(x([],[["pln",/^[^<?]+/],["dec",/^<!\w[^>]*(?:>|$)/],["com",/^<\!--[\S\s]*?(?:--\>|$)/],["lang-",/^<\?([\S\s]+?)(?:\?>|$)/],["lang-",/^<%([\S\s]+?)(?:%>|$)/],["pun",/^(?:<[%?]|[%?]>)/],["lang-",/^<xmp\b[^>]*>([\S\s]+?)<\/xmp\b[^>]*>/i],["lang-js",/^<script\b[^>]*>([\S\s]*?)(<\/script\b[^>]*>)/i],["lang-css",/^<style\b[^>]*>([\S\s]*?)(<\/style\b[^>]*>)/i],["lang-in.tag",/^(<\/?[a-z][^<>]*>)/i]]),["default-markup","htm","html","mxml","xhtml","xml","xsl"]);k(x([["pln",/^\s+/,q," \t\r\n"],["atv",/^(?:"[^"]*"?|'[^']*'?)/,q,"\"'"]],[["tag",/^^<\/?[a-z](?:[\w-.:]*\w)?|\/?>$/i],["atn",/^(?!style[\s=]|on)[a-z](?:[\w:-]*\w)?/i],["lang-uq.val",/^=\s*([^\s"'>]*(?:[^\s"'/>]|\/(?=\s)))/],["pun",/^[/<->]+/],["lang-js",/^on\w+\s*=\s*"([^"]+)"/i],["lang-js",/^on\w+\s*=\s*'([^']+)'/i],["lang-js",/^on\w+\s*=\s*([^\s"'>]+)/i],["lang-css",/^style\s*=\s*"([^"]+)"/i],["lang-css",/^style\s*=\s*'([^']+)'/i],["lang-css",/^style\s*=\s*([^\s"'>]+)/i]]),["in.tag"]);k(x([],[["atv",/^[\S\s]+/]]),["uq.val"]);k(u({keywords:F,hashComments:!0,cStyleComments:!0,types:K}),["c","cc","cpp","cxx","cyc","m"]);k(u({keywords:"null,true,false"}),["json"]);k(u({keywords:H,hashComments:!0,cStyleComments:!0,verbatimStrings:!0,types:K}),["cs"]);k(u({keywords:G,cStyleComments:!0}),["java"]);k(u({keywords:v,hashComments:!0,multiLineStrings:!0}),["bsh","csh","sh"]);k(u({keywords:I,hashComments:!0,multiLineStrings:!0,tripleQuotedStrings:!0}),["cv","py"]);k(u({keywords:"caller,delete,die,do,dump,elsif,eval,exit,foreach,for,goto,if,import,last,local,my,next,no,our,print,package,redo,require,sub,undef,unless,until,use,wantarray,while,BEGIN,END",hashComments:!0,multiLineStrings:!0,regexLiterals:!0}),["perl","pl","pm"]);k(u({keywords:J,hashComments:!0,multiLineStrings:!0,regexLiterals:!0}),["rb"]);k(u({keywords:w,cStyleComments:!0,regexLiterals:!0}),["js"]);k(u({keywords:"all,and,by,catch,class,else,extends,false,finally,for,if,in,is,isnt,loop,new,no,not,null,of,off,on,or,return,super,then,true,try,unless,until,when,while,yes",hashComments:3,cStyleComments:!0,multilineStrings:!0,tripleQuotedStrings:!0,regexLiterals:!0}),["coffee"]);k(x([],[["str",/^[\S\s]+/]]),["regex"]);window.prettyPrintOne=function(a,m,e){var h=document.createElement("PRE");h.innerHTML=a;e&&D(h,e);E({g:m,i:e,h:h});return h.innerHTML};window.prettyPrint=function(a){function m(){for(var e=window.PR_SHOULD_USE_CONTINUATION?l.now()+250:Infinity;p<h.length&&l.now()<e;p++){var n=h[p],k=n.className;if(k.indexOf("prettyprint")>=0){var k=k.match(g),f,b;if(b=!k){b=n;for(var o=void 0,c=b.firstChild;c;c=c.nextSibling)var i=c.nodeType,o=i===1?o?b:c:i===3?N.test(c.nodeValue)?b:o:o;b=(f=o===b?void 0:o)&&"CODE"===f.tagName}b&&(k=f.className.match(g));k&&(k=k[1]);b=!1;for(o=n.parentNode;o;o=o.parentNode)if((o.tagName==="pre"||o.tagName==="code"||o.tagName==="xmp")&&o.className&&o.className.indexOf("prettyprint")>=0){b=!0;break}b||((b=(b=n.className.match(/\blinenums\b(?::(\d+))?/))?b[1]&&b[1].length?+b[1]:!0:!1)&&D(n,b),d={g:k,h:n,i:b},E(d))}}p<h.length?setTimeout(m,250):a&&a()}for(var e=[document.getElementsByTagName("pre"),document.getElementsByTagName("code"),document.getElementsByTagName("xmp")],h=[],k=0;k<e.length;++k)for(var t=0,s=e[k].length;t<s;++t)h.push(e[k][t]);var e=q,l=Date;l.now||(l={now:function(){return+new Date}});var p=0,d,g=/\blang(?:uage)?-([\w.]+)(?!\S)/;m()};window.PR={createSimpleLexer:x,registerLangHandler:k,sourceDecorator:u,PR_ATTRIB_NAME:"atn",PR_ATTRIB_VALUE:"atv",PR_COMMENT:"com",PR_DECLARATION:"dec",PR_KEYWORD:"kwd",PR_LITERAL:"lit",PR_NOCODE:"nocode",PR_PLAIN:"pln",PR_PUNCTUATION:"pun",PR_SOURCE:"src",PR_STRING:"str",PR_TAG:"tag",PR_TYPE:"typ"}})();