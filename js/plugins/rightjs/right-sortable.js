/**
 * Sortable feature for RightJS
 * See http://rightjs.org/ui/sortable
 *
 * NOTE: requires the dnd-plugin
 *
 * Copyright (C) 2009-2010 Nikolay Nemshilov
 */
var Sortable=RightJS.Sortable=function(l,f){var j=f.$,n=f.$w,o=f.isString,p=f.isArray,k=f.Object,h=new (function(a,b){if(!b){b=a;a="DIV"}var c=new f.Wrapper(f.Element.Wrappers[a]||f.Element,{initialize:function(e,d){this.key=e;var g=[{"class":"rui-"+e}];this instanceof f.Input||this instanceof f.Form||g.unshift(a);this.$super.apply(this,g);if(f.isString(d))d=f.$(d);if(d instanceof f.Element){this._=d._;if("$listeners"in d)d.$listeners=d.$listeners;d={}}this.setOptions(d,this);return this},setOptions:function(e,
d){d=d||this;f.Options.setOptions.call(this,f.Object.merge(e,eval("("+(d.get("data-"+this.key)||"{}")+")")));return this}});c=new f.Wrapper(c,b);f.Observer.createShortcuts(c.prototype,c.EVENTS||[]);return c})("UL",{extend:{version:"2.0.0",EVENTS:n("start change finish"),Options:{url:null,method:"put",Xhr:{},idParam:"id",posParam:"position",parseId:true,dragClass:"dragging",accept:null,minLength:1,itemCss:"li",handleCss:"li",cssRule:"*[data-sortable]"},current:false,cast:function(a){a=j(a._);a instanceof
h||(a=new h(a));return a}},initialize:function(a,b){this.$super("sortable",a).setOptions(b).addClass("rui-sortable").on("finish",this._tryXhr).on("selectstart","stopEvent")},setOptions:function(a,b){this.$super(a,b);a=this.options;var c=a.accept||[];p(c)||(c=[c]);a.accept=f([this].concat(c)).map(j).uniq();return this},items:function(){return this.children(this.options.itemCss)},startDrag:function(a){if(!(this.items().length<=this.options.minLength)){var b=a.find(this.options.itemCss),c=a.find(this.options.handleCss);
if(b&&c){this._initDrag(b,a.position());h.current=this;this.fire("start",this._evOpts(a))}}},moveItem:function(a){var b=a.position(),c=this.itemClone._.style,e=b.y-this.yRDiff,d=b.x-this.xRDiff,g=d+this.cloneWidth,m=e+this.cloneHeight;c.top=b.y-this.yDiff+"px";c.left=b.x-this.xDiff+"px";if(b=this.suspects.first(function(i){return(e>i.top&&e<i.topHalf||m<i.bottom&&m>i.topHalf)&&(d>i.left&&d<i.leftHalf||g<i.right&&g>i.leftHalf)})){c=b.item;c.insert(this.item,c.prevSiblings().include(this.item)?"after":
"before");this._findSuspects();this.fire("change",this._evOpts(a,c))}},finishDrag:function(a){if(this.itemClone){this.itemClone.remove();this.item.setStyle("visibility:visible")}h.current=false;this.fire("finish",this._evOpts(a))},_evOpts:function(a,b){b=b||this.item;var c=h.cast(b.parent());return{list:c,item:b,event:a,index:c.items().indexOf(b)}},_initDrag:function(a,b){this.dimensions();var c=a.dimensions(),e=a.clone().setStyle({margin:0,zIndex:9999,position:"absolute",top:"0px",left:"0px"}).addClass(this.options.dragClass).insertTo(this).setHeight(this.cloneHeight=
c.height).setWidth(this.cloneWidth=c.width),d=e.position(),g=c.left-d.x;c=c.top-d.y;e.moveTo(g,c);this.item=a.setStyle("visibility:hidden");this.itemClone=e;this.xDiff=b.x-g;this.yDiff=b.y-c;this.xRDiff=b.x-e.position().x;this.yRDiff=b.y-e.position().y;this._findSuspects()},_findSuspects:function(){var a=this.suspects=f([]),b=this.item,c=this.itemClone;this.options.accept.each(function(e){h.cast(e).items().each(function(d){if(d!==b&&d!==c){var g=d.dimensions();a.push({item:d,top:g.top,left:g.left,
right:g.left+g.width,bottom:g.top+g.height,topHalf:g.top+g.height/2,leftHalf:g.left+g.width/2})}})})},_tryXhr:function(a){if(this.options.url){var b=f(this.options.url),c={},e=a.item;a=a.index+1;var d=k.merge({method:this.options.method,params:{}},this.options.Xhr);e=e.get("id")||"";if(this.options.parseId&&e)e=(e.match(/\d+/)||[""])[0];if(b.include("%{id}"))b=b.replace("%{id}",e);else c[this.options.idParam]=e;c[this.options.posParam]=a;if(o(d.params))d.params+="&"+k.toQueryString(c);else d.params=
k.merge(d.params,c);f.Xhr.load(b,d)}}});j(l).on({mousedown:function(a){var b=a.find(h.Options.cssRule+",*.rui-sortable");b&&h.cast(b).startDrag(a)},mousemove:function(a){h.current&&h.current.moveItem(a)},mouseup:function(a){h.current&&h.current.finishDrag(a)}});j(window).onBlur(function(){h.current&&h.current.finishDrag()});l.write('<style type="text/css">.rui-sortable{user-select:none;-moz-user-select:none;-webkit-user-select:none}</style>');return h}(document,RightJS);
