/* Minimit Gallery Plugin 2.06 http://www.minimit.com */ function Mg(a) {
	this.events = [];
	this.setSettings(a);
}
Mg.prototype.setSettings = function(a) {
	for (var c in a)
		if ('object' == typeof a[c] && !a[c].length) {
			if (void 0 == this[c]) {
				var b = (this[c] = {});
				this.events.push(c);
				b.obj = this;
				b.evnt = c;
				a.reference && (b.reference = a.reference);
				b.inverse = !1;
				b.anchorize = !1;
				b.linkedMultiply = b.prevSteps = b.nextSteps = 1;
				b.multiMode = 'centered';
				b.multiLimit = !0;
				b.fixedLess = b.fixedPlus = 0;
				b.scrollIsVertical = b.dragIsVertical = b.scrollInvert = b.dragInvert = b.scrollFraction = b.dragFraction = b.scrollWheel = b.dragWheel = !1;
				b.scrollFriction = 0;
				b.dragFriction = 0.85;
				b.scrollPower = b.dragPower = 0.6;
				b.scrollFurther = 0;
				b.dragFurther = 0.2;
				b.scrollCursorOff = 'url(http://www.google.com/intl/en_ALL/mapfiles/openhand.cur), pointer';
				b.scrollCursorOn = 'url(http://www.google.com/intl/en_ALL/mapfiles/closedhand.cur), pointer';
				b.dragCursorOff = 'url(http://www.google.com/intl/en_ALL/mapfiles/openhand.cur), move';
				b.dragCursorOn = 'url(http://www.google.com/intl/en_ALL/mapfiles/closedhand.cur), move';
				b.rounding = 'round';
			}
			var b = this[c],
				e;
			for (e in a[c]) b[e] = a[c][e];
			void 0 == b.cycle && (b.cycle = !1);
			void 0 == b.activated && (b.activated = []);
			1 > b.activated.length && b.activated.push(null);
			b.initNum = b.activated.slice();
			'onhashchange' in window &&
				(this.registerEvent(b, window.mg_AnchorEvntsArr, 'useAnchor'),
				this.registerEvent(b, window.mg_HashEvntsArr, 'useLinkHash'));
			window.history && history.pushState && this.registerEvent(b, window.mg_UrlEvntsArr, 'useLinkUrl');
		} else this[c] = a[c];
	this.refreshItems();
	this.initScrollDrag();
};
Mg.prototype.refreshItems = function() {
	this.items = this.getElementsById(this.reference + '-item-');
	0 < this.items.length && (this.totalItems = this.items.length);
	for (var a = this.totalItems - 1, c = !1, b = 0, e = this.events.length; b < e; b++) {
		var d = this[this.events[b]];
		d.multiLimit &&
			d.multiLess + d.multiPlus + 1 > a &&
			((d.multiLess = Math.floor(a / 2)), (d.multiPlus = Math.ceil(a / 2)));
		if ('useLinkHash' == d.anchorize || 'useLinkUrl' == d.anchorize) c = !0;
	}
	if (c) {
		this.itemsLink = [];
		b = 0;
		for (e = this.items.length; b < e; b++)
			this.itemsLink.push({
				href: this.items[b].getAttribute('href'),
				title: this.items[b].getAttribute('title')
			});
	}
	this.initEvents();
};
Mg.prototype.init = function() {
	for (var a = 0, c = this.events.length; a < c; a++) {
		var b = this.events[a],
			e = this[b];
		e.noCheck =
			void 0 != e.prevHide || void 0 != e.prevShow || void 0 != e.nextHide || void 0 != e.nextShow ? !1 : !0;
		for (var d = 0, c = e.activated.length; d < c; d++) this.setState(e.activated[d], b, !1, !0, !0, !1, 'init');
		void 0 != e.auto && this.autoStart(this.events[a]);
	}
};
Mg.prototype.setState = function(a, c, b, e, d, f, g) {
	var h = this[c];
	h.eventType = g;
	h.oldNum = h.num;
	h.oldActivated = h.activated;
	if (a != h.oldNum || h.deactivable || void 0 == h.num || h.scrollFraction || h.dragFraction) {
		if (h.anchorize && 'reset' != g && 'anchor' != g) {
			var j = this.makeAnchor(a, c, g);
			void 0 != j && ((a = parseFloat(j)), (b = !0));
		}
		h.num = a;
		'init' != g || void 0 != j
			? (h.deactivated = this.setActivated(a, c))
			: null == h.activated[0] && h.activated.splice(0, 1);
		0 < h.multiPlus + h.multiLess && this.setMutiple(c, g);
		!h.cycle && !h.noCheck && this.checkPrevNext(c);
		if (!h.deactivable && 'click' == c && h.interactive) {
			for (var k = 0, j = h.activated.length; k < j; k++)
				this.enableTextSelect(document.getElementById(this.reference + '-item-' + h.activated[k]), !0);
			void 0 != h.deactivated &&
				this.disableTextSelect(document.getElementById(this.reference + '-item-' + h.deactivated), !0);
		}
		'fraction' != g && (h.fraction = this.calculateFraction(0, h.rounding));
		if (void 0 != h.onEvent) h.onEvent();
		f && this.autoSlow(c);
		c = h.scrollInDiv;
		e && c && this.scRelease(c, a);
		c = h.dragInDiv;
		d && c && this.scRelease(c, a);
		if (b)
			for (k in h.linked)
				h.linked[k].obj.setState(
					void 0 != a ? a * h.linkedMultiply : a,
					h.linked[k].evnt,
					!1,
					!0,
					!0,
					!0,
					'linked'
				);
	}
};
Mg.prototype.setActivated = function(a, c) {
	var b = this[c].activated,
		e = null,
		d = this.inArray(a, b);
	if (-1 != d) this[c].deactivable && (e = parseFloat(b.splice(d, 1)));
	else {
		if (b.length >= this[c].maxActivated || !this[c].maxActivated) e = parseFloat(b.splice(b.length - 1, 1));
		b.unshift(a);
	}
	return e;
};
Mg.prototype.initEvents = function() {
	for (var a = 0, c = this.events.length; a < c; a++) {
		var b = this.events[a];
		thisEvnt = this[b];
		if (thisEvnt.interactive)
			for (var e = 0, d = this.totalItems; e < d; e++) {
				var f = this.items[e];
				'click' == b && this.disableTextSelect(f, !0);
				f.that = this;
				f.evnt = b;
				f.num = thisEvnt.inverse ? d - 1 - e : e;
				var g = f[this.getEventName(b)];
				f[this.getEventName(b)] = b;
				g != f[this.getEventName(b)] &&
					this.addEvent(
						f,
						b,
						function(a) {
							this.that.setState(this.num, this[this.that.getEventName(a.type)], !0, !0, !0, !0, 'item');
							void 0 != a.stopPropagation ? a.stopPropagation() : (a.cancelBubble = !0);
							this.that[this.evnt].preventDefault && a.preventDefault();
							return !1;
						},
						!1
					);
			}
		for (var h = [ 'prev', 'next', 'first', 'last' ], e = 0, d = h.length; e < d; e++)
			if ((f = document.getElementById(this.reference + '-' + b + '-' + h[e])))
				this.disableTextSelect(f, !0),
					(f.that = this),
					(f.evnt = b),
					(f.call = h[e]),
					(g = f[this.getEventName(b)]),
					(f[this.getEventName(b)] = b),
					g != f[this.getEventName(b)] &&
						this.addEvent(
							f,
							'click',
							function(a) {
								this.that[this.call](this.evnt, !0, !0, !1);
								void 0 != a.stopPropagation ? a.stopPropagation() : (a.cancelBubble = !0);
								this.that[this.evnt].preventDefault && a.preventDefault();
								return !1;
							},
							!1
						);
	}
};
Mg.prototype.initScrollDrag = function(a) {
	for (var c = 0, b = this.events.length; c < b; c++) {
		var e = this.events[c];
		thisEvnt = this[e];
		for (var d = [ 'scroll', 'drag' ], f = [ 'In', 'Out' ], g = 0, h = d.length; g < h; g++) {
			a ||
				((thisEvnt[d[g] + f[0] + 'Div'] = document.getElementById(
					this.reference + '-' + e + '-' + d[g] + f[0]
				)),
				(thisEvnt[d[g] + f[1] + 'Div'] = document.getElementById(
					this.reference + '-' + e + '-' + d[g] + f[1]
				)));
			var j = thisEvnt[d[g] + f[0] + 'Div'],
				k = thisEvnt[d[g] + f[1] + 'Div'],
				l = thisEvnt[d[g] + 'IsVertical'];
			if (j && k) {
				var m = !1,
					p = !1;
				'none' == this.getCompStyle(k).display && ((m = !0), (j.style.display = 'block'));
				'none' == this.getCompStyle(k).display && ((p = !0), (k.style.display = 'block'));
				if (0 == g) {
					var q = (j.min = k.min = this.scGetMin(e, j, k, l, 1)),
						r = (j.max = k.max = this.scGetMax(e, j, k, l, 1));
					a ? this.scRelease(k) : (this.disableTextSelect(j, !0), this.disableTextSelect(k, !0));
				} else {
					var n = l
						? Math.round(this.totalItems / (j.offsetHeight / k.offsetHeight))
						: Math.round(this.totalItems / (j.offsetWidth / k.offsetWidth));
					0 == n && (n = 0.1);
					q = j.min = k.min = this.scGetMin(e, k, j, l, n);
					r = j.max = k.max = this.scGetMax(e, k, j, l, n);
					a ? this.scRelease(j) : (this.disableTextSelect(j, !0), this.disableTextSelect(k, !1));
					m && (j.style.display = 'none');
					p && (k.style.display = 'none');
				}
				a || this.addScrollDrag(e, j, k, q, r, l, d[g], n);
			}
		}
	}
};
Mg.prototype.refreshScrollDrag = function() {
	this.initScrollDrag(!0);
};
Mg.prototype.checkPrevNext = function(a) {
	a = this[a];
	var c = a.num - a.prevSteps;
	a.firstToSteps
		? c < 0 - a.multiLess - a.multiPlus
			? ((a.prevIsShown = !1), void 0 != a.prevHide && a.prevHide())
			: a.prevIsShown || ((a.prevIsShown = !0), void 0 != a.prevShow && a.prevShow())
		: 0 > c
			? ((a.prevIsShown = !1), void 0 != a.prevHide && a.prevHide())
			: a.prevIsShown || ((a.prevIsShown = !0), void 0 != a.prevShow && a.prevShow());
	c = a.num + a.nextSteps;
	a.lastToSteps
		? c > this.totalItems - a.multiLess - a.multiPlus - 1
			? ((a.nextIsShown = !1), void 0 != a.nextHide && a.nextHide())
			: a.nextIsShown || ((a.nextIsShown = !0), void 0 != a.nextShow && a.nextShow())
		: c > this.totalItems - 1
			? ((a.nextIsShown = !1), void 0 != a.nextHide && a.nextHide())
			: a.nextIsShown || ((a.nextIsShown = !0), void 0 != a.nextShow && a.nextShow());
};
Mg.prototype.prev = function(a, c, b, e) {
	var d = this[a],
		f = this.totalItems,
		g = 0;
	('centered' == d.multiMode && !0 == d.cycle) ||
		(d.lastToSteps && (f += d.multiPlus), d.firstToSteps && (g = -d.multiLess));
	var h = d.num - d.prevSteps;
	h < g && (h = (d.cycle || e) && d.num == g ? f - 1 : g);
	void 0 != d.prevClick && !e && d.prevClick();
	this.setState(h, a, c, !0, !0, b, 'prev');
};
Mg.prototype.next = function(a, c, b, e) {
	var d = this[a],
		f = this.totalItems,
		g = 0;
	('centered' == d.multiMode && !0 == d.cycle) ||
		(d.lastToSteps && d.multiPlus && (f += d.multiPlus), d.firstToSteps && d.multiLess && (g = -d.multiLess));
	var h = d.num + d.nextSteps;
	h > f - 1 && (h = (d.cycle || e) && d.num == f - 1 ? g : f - 1);
	void 0 != d.nextClick && !e && d.nextClick();
	this.setState(h, a, c, !0, !0, b, 'next');
};
Mg.prototype.first = function(a) {
	var c = this[a];
	void 0 != c.firstClick && c.firstClick();
	this.setState(0, a, !0, !0, !0, !0, 'first');
};
Mg.prototype.last = function(a) {
	var c = this[a];
	void 0 != c.lastClick && c.lastClick();
	this.setState(this.totalItems - 1, a, !0, !0, 'last');
};
Mg.prototype.autoStart = function(a) {
	var c = this;
	clearInterval(this[a + 'Interval']);
	this[a + 'Interval'] = this[a].autoInverse
		? setInterval(function() {
				c.prev(a, !0, !1, !0);
			}, this[a].auto)
		: setInterval(function() {
				c.next(a, !0, !1, !0);
			}, this[a].auto);
};
Mg.prototype.autoSlow = function(a) {
	var c = this;
	clearInterval(this[a + 'Interval']);
	void 0 != this[a].autoSlow &&
		(this[a + 'Interval'] = this[a].autoInverse
			? setInterval(function() {
					c.prev(a, !0, !1, !0);
					c.autoStart(a);
				}, this[a].autoSlow)
			: setInterval(function() {
					c.next(a, !0, !1, !0);
					c.autoStart(a);
				}, this[a].autoSlow));
};
Mg.prototype.autoStop = function(a) {
	clearInterval(this[a + 'Interval']);
};
Mg.prototype.setMutiple = function(a, c) {
	var b = this[a],
		e = b.num,
		d = b.oldNum;
	if (null != e || 'init' == c) {
		b.multiBeforeIn = [];
		b.multiBeforeOut = [];
		b.multiAfterIn = [];
		b.multiAfterOut = [];
		b.direction = null;
		if ('centered' == b.multiMode)
			var f = 'mapNumCentered',
				g = 'nearest',
				h = 'normal';
		else
			'fixed' == b.multiMode
				? ((f = 'mapNumFixed'), (h = g = 'serie'))
				: 'flexible' == b.multiMode &&
					((f = 'mapNumFixed'),
					(g = 'normal'),
					(h = 'serie'),
					(b.fixedLess = b.multiLess),
					(b.fixedPlus = b.multiPlus));
		b.multiOldActivated = b.multiActivated;
		b.multiActivated = this[f](
			e,
			b.multiLess,
			b.multiPlus,
			this.totalItems,
			b.cycle,
			b.fixedLess,
			b.fixedPlus,
			b.firstToSteps,
			b.lastToSteps
		);
		if ('init' != c && b.multiActivated[0] != b.multiOldActivated[0]) {
			if ('normal' == g) var j = this.findNormalDistance(e, d);
			else
				'nearest' == g
					? (j = this.findNearestDistance(e, d, this.totalItems, b.cycle))
					: 'serie' == g && (j = this.findNormalDistance(e, d));
			if ('normal' == h) var k = j;
			else
				'serie' == h &&
					((f = b.fixedLess),
					(g = this.totalItems - 1 - b.fixedPlus),
					(k = b.multiLess + b.multiPlus + 1 - b.fixedPlus - b.fixedLess),
					(e <= f && d >= g) || (d <= f && e >= g)
						? (k = this.totalItems - b.multiActivated.length)
						: 1 < Math.abs(j) && 'flexible' == b.multiMode && (k += Math.ceil(Math.abs(j) / 2)));
			this.setOthers(b, e, d, j, k);
			b.distance = j;
		}
	}
};
Mg.prototype.mapNumCentered = function(a, c, b, e, d) {
	var f = [];
	for (c = -c; c <= b; c++)
		a + c < e || d
			? 0 > a + c && d ? f.push(e - (-a - c)) : a + c >= e && d ? f.push(a + c - e) : f.push(a + c)
			: f.push(null);
	return f;
};
Mg.prototype.mapNumFixed = function(a, c, b, e, d, f, g, h, j) {
	d = [];
	c = c + b + 1;
	var k = Math.floor((a - f) / (c - g - f));
	b = k * (c - g - f);
	var l = e - b - f;
	a < c - g && !h ? (b = 0 * (c - g - f)) : g >= l && !j && (b = (k - g - 1 + l) * (c - g - f));
	for (a = 0; a < c; a++) b + a < e && d.push(b + a);
	return d;
};
Mg.prototype.setOthers = function(a, c, b, e, d) {
	if (0 < e) {
		a.direction = 1;
		c = 0;
		for (b = Math.abs(d); c < b; c++)
			a.multiAfterIn.unshift(a.multiActivated[a.multiOldActivated.length - c - 1]),
				a.multiBeforeOut.unshift(a.multiOldActivated[d - c - 1]);
		a.multiDeactivated = a.multiBeforeOut;
	} else {
		c = a.direction = 0;
		for (b = Math.abs(d); c < b; c++)
			a.multiBeforeIn.push(a.multiActivated[c]),
				a.multiAfterOut.push(a.multiOldActivated[a.multiOldActivated.length - c - 1]);
		a.multiDeactivated = a.multiAfterOut;
	}
};
Mg.prototype.mapDistance = function(a, c) {
	return a - c;
};
Mg.prototype.mapDistanceReverse = function(a, c, b, e) {
	b -= e;
	return c == a ? a : c < b / 2 ? -c : c > b / 2 ? b - c - 1 : b / 2;
};
Mg.prototype.findNormalDistance = function(a, c) {
	return a - c;
};
Mg.prototype.findNearestDistance = function(a, c, b, e) {
	var d = b / 2;
	return !e || (a - c < d && a - c > -d)
		? a - c
		: a - c > d ? (c > a ? -a - (b - c) : -c - (b - a)) : a - c < -d ? (c > a ? a + (b - c) : c + (b - a)) : 0;
};
var mg_startingTitle = document.title;
'onhashchange' in window &&
	((window.mg_AnchorEvntsArr = []),
	(window.mg_HashEvntsArr = []),
	(window.onhashchange = function() {
		for (var a = 0, c = window.mg_HashEvntsArr.length; a < c; a++)
			for (var b = window.mg_HashEvntsArr[a], e = b.obj, d = e.itemsLink, f = 0, g = d.length; f < g; f++) {
				var h = window.location.hash,
					h = h.split('&');
				if (d[f].href == h[0]) {
					e.setState(f, b.evnt, !0, !0, !0, !0, 'anchor');
					break;
				}
			}
		a = 0;
		for (c = window.mg_AnchorEvntsArr.length; a < c; a++)
			for (
				var b = window.mg_AnchorEvntsArr[a],
					e = b.obj,
					h = window.location.hash.replace('#', ''),
					d = h.split('&'),
					f = 0,
					g = d.length;
				f < g;
				f++
			) {
				var h = d[f].split('='),
					b = h[0].split('|'),
					j = b[0],
					b = b[1];
				if (j == e.reference) {
					f = parseFloat(h[1]);
					f != e[b].activated && e.setState(f, b, !0, !0, !0, !0, 'anchor');
					break;
				}
			}
	}));
if (window.history && history.pushState) {
	window.mg_UrlEvntsArr = [];
	var mg_pushState = history.pushState;
	history.pushState = function(a, c, b) {
		if ('function' == typeof history.onpushstate) history.onpushstate(a, c, b);
		return mg_pushState.apply(history, arguments);
	};
	history.onpushstate = function(a, c, b) {
		if (!a) {
			a = 0;
			for (c = window.mg_UrlEvntsArr.length; a < c; a++) {
				var e = window.mg_UrlEvntsArr[a],
					d = e.obj,
					f = b;
				arr = d.itemsLink;
				for (var g = 0, h = arr.length; g < h; g++)
					if (arr[g].href == f) {
						d.setState(g, e.evnt, !0, !0, !0, !0, 'anchor');
						break;
					}
			}
		}
	};
}
Mg.prototype.makeAnchor = function(a, c, b) {
	var e = this[c];
	if ('useLinkHash' == e.anchorize && window.mg_HashEvntsArr)
		if ('init' == b) {
			a = this.itemsLink;
			for (var e = 0, d = a.length; e < d; e++) {
				var f = window.location.hash,
					f = f.split('&');
				if (a[e].href == f[0]) return this.setDocumentTitle(a[e].title), e;
			}
		} else
			(f = window.location.hash.replace('#', '')),
				(f = f.split('&')),
				null == a ? f.splice(0, 1) : (f[0] = this.itemsLink[a].href),
				(window.location.hash = this.anchorOutput(f, ''));
	else if ('useLinkUrl' == e.anchorize && window.mg_UrlEvntsArr)
		if ('init' == b) {
			a = this.itemsLink;
			e = 0;
			for (d = a.length; e < d; e++) if (a[e].href == document.location) return e;
		} else history.pushState(!0, null, this.itemsLink[a].href), this.setDocumentTitle(this.itemsLink[a].title);
	else if ('useAnchor' == e.anchorize && window.mg_AnchorEvntsArr) {
		for (var f = window.location.hash.replace('#', ''), f = f.split('&'), g, e = 0, d = f.length; e < d; e++) {
			var h = f[e].split('=');
			if (h[0] == this.reference + '|' + c) {
				g = e;
				break;
			}
		}
		if ('init' == b) {
			if (void 0 != g) return h[1];
		} else
			void 0 != g
				? null == a ? f.splice(g, 1) : (f[g] = this.reference + '|' + c + '=' + a)
				: f.push(this.reference + '|' + c + '=' + a),
				(window.location.hash = this.anchorOutput(f, '#'));
	}
};
Mg.prototype.anchorOutput = function(a, c) {
	for (var b = 0, e = a.length; b < e; b++) '' != a[b] && ((c += a[b]), b != a.length - 1 && (c += '&'));
	return c;
};
Mg.prototype.setDocumentTitle = function(a) {
	document.title = a ? a : window.mg_startingTitle;
};
Mg.prototype.registerEvent = function(a, c, b) {
	for (var e = !1, d = 0, f = c.length; d < f; d++)
		if (c[d] == a) {
			a.anchorize != b && c.splice(d, 1);
			e = !0;
			break;
		}
	a.anchorize == b && !e && c.push(a);
};
Mg.prototype.addEvent = function(a, c, b, e) {
	if ('undefined' != typeof a.attachEvent) {
		var d = function(a) {
			a = a || window.event;
			if (!a)
				for (var b = this.getEvent.caller; b && !((a = b.arguments[0]) && Event == a.constructor); )
					b = b.caller;
			return a;
		};
		e = function(c) {
			return b.call(a, d(c, a));
		};
		a.detachEvent('on' + c, e);
		a.attachEvent('on' + c, e);
	} else {
		var f = function(b) {
			return function(c) {
				var e = c.relatedTarget,
					d;
				if (!(d = this == e))
					if (this == e) d = !1;
					else {
						for (; e && e !== this; ) e = e.parentNode;
						d = e == this;
					}
				d || b.call(a, c);
			};
		};
		'mouseenter' == c
			? (a.removeEventListener('mouseover', f(b), e), a.addEventListener('mouseover', f(b), e))
			: 'mouseleave' == c
				? (a.removeEventListener('mouseout', f(b), e), a.addEventListener('mouseout', f(b), e))
				: (a.removeEventListener(c, b, e), a.addEventListener(c, b, e));
	}
};
Mg.prototype.addScrollDrag = function(a, c, b, e, d, f, g, h) {
	function j(a) {
		a || (a = window.event);
		void 0 == a.clientX
			? ((a.clientX = a.touches[0].clientX), (a.clientY = a.touches[0].clientY))
			: 'ontouchstart' in window && void 0 == a.touches[0].clientX && (a.clientX = a.clientY = b.lastClient);
		var b = document.t;
		if (b.vertical) (c = a.clientY - b.startPosY), (e = a.clientX - b.startPosX);
		else
			var c = a.clientX - b.startPosX,
				e = a.clientY - b.startPosY;
		var d = (b.lastClient = b.offsetPos + c),
			d = b.mg.scCheckLimits(d, b.isScroll, b.further, b.min, b.max);
		b.count += d - b.num;
		b.count *= b.power;
		b.num = d;
		b.mg.scMove(b, d);
		10 < Math.abs(c) && 50 > Math.abs(e) && a.preventDefault && a.preventDefault();
	}
	function k(a) {
		a || (a = window.event);
		void 0 == a.clientX && ((a.clientX = a.changedTouches[0].clientX), (a.clientY = a.changedTouches[0].clientY));
		var b = document.t,
			c = b.evnt,
			e = b.mg,
			d = b.min,
			f = b.max,
			g = b.num;
		document.onmousemove = null;
		document.onmouseup = null;
		document.ontouchmove = null;
		document.ontouchend = null;
		b.style.cursor = e[c][b.scrollDragStr + 'CursorOff'];
		if (b.clicked) {
			if (b.vertical) (h = a.clientY - b.startPosY), (j = a.clientX - b.startPosX);
			else
				var h = a.clientX - b.startPosX,
					j = a.clientY - b.startPosY;
			if (25 < Math.abs(h)) {
				b.onclick = function() {
					return !1;
				};
				var k = +new Date() - b.time;
				a = !1;
				b.isScroll
					? g >= d && g <= f && (a = !0)
					: 500 > k && Math.abs(h) < b.swipeDist / 2 && 100 > Math.abs(j)
						? ((d = Math.abs(f - d) / e.totalItems), (g = 0 > h ? g - d : g + d))
						: g <= -d && g >= -f && (a = !0);
				a && !e[c].disableFriction
					? l(b, b.friction, g)
					: (e.scMove(b, g, !0), e.scReleaseFraction(b), e.scRelease(b, g));
			} else (b.onclick = function() {}), e.scReleaseFraction(b), e.scRelease(b, g);
			e[c]['clickedInterval' + b.scrollDragStr] = setTimeout(function() {
				b.clicked = !1;
			}, 113);
		}
	}
	function l(a, b, c) {
		var e = a.evnt,
			d = a.mg;
		a.count *= b;
		var f = a.count;
		c += f;
		a.num = c;
		!b || (-1 < f && 1 > f)
			? (d.scReleaseFraction(a), d.scRelease(a, c))
			: (d.scMove(a, c),
				(c = d.scCheckLimits(c, a.isScroll, 0, a.min, a.max)),
				(d[e]['frictionInterval' + a.scrollDragStr] = setTimeout(function() {
					l(a, b, c);
				}, 13)));
	}
	c.onmousedown = c.ontouchstart = function(a) {
		a || (a = window.event);
		void 0 == a && (a = { clientX: this.startPosX, clientY: this.startPosY });
		void 0 == a.clientX && ((a.clientX = a.touches[0].clientX), (a.clientY = a.touches[0].clientY));
		var b = this.mg,
			d = this.evnt,
			e = this.scrollDragStr;
		document.t = this;
		document.onmousemove = j;
		document.onmouseup = k;
		document.ontouchmove = j;
		document.ontouchend = k;
		this.style.cursor = b[d][e + 'CursorOn'];
		this.time = +new Date();
		this.count = 0;
		this.startPosY = a.clientY;
		this.startPosX = a.clientX;
		a = this.mg.getTransform(this);
		this.vertical
			? ((this.offsetPos = a ? a.top : this.offsetTop),
				(c.swipeDist = this.itemOut.offsetHeight / this.concurrent))
			: ((this.offsetPos = a ? a.left : this.offsetLeft),
				(c.swipeDist = this.itemOut.offsetWidth / this.concurrent));
		this.startnum = this.num = this.offsetPos;
		this.clicked = !0;
		clearTimeout(b[d]['clickedInterval' + e]);
		clearTimeout(b[d]['frictionInterval' + e]);
		b.scClick(this);
	};
	c.onmouseup = c.ontouchend = k;
	c.evnt = a;
	c.mg = this;
	c.itemOut = b;
	c.itemIn = c;
	c.vertical = f;
	c.scrollDragStr = g;
	c.wheelnum = 0;
	c.concurrent = h;
	c.friction = this[a][g + 'Friction'];
	c.power = this[a][g + 'Power'];
	c.further = this[a][g + 'Further'];
	c.style.cursor = c.mg[a][g + 'CursorOff'];
	if ('scroll' != g) (b.isScroll = c.isScroll = !1), this[a][g + 'Wheel'] && this.addWheel(c, this.scWheel);
	else {
		b.isScroll = c.isScroll = !0;
		var m = function(a) {
			return (a = a.getBoundingClientRect()) ? { top: a.top, left: a.left } : { top: 0, left: 0 };
		};
		b.onmousedown = b.ontouchstart = function(a) {
			a || (a = window.event);
			void 0 == a.clientX && ((a.clientX = a.touches[0].clientX), (a.clientY = a.touches[0].clientY));
			if (this == this && !this.itemIn.clicked) {
				var b = this.vertical
					? a.clientY - m(this).top - this.itemIn.offsetHeight / 2
					: a.clientX - m(this).left - this.itemIn.offsetWidth / 2;
				this.itemIn.startPosX = a.clientX;
				this.itemIn.startPosY = a.clientY;
				b = this.mg.scCheckLimits(b, this.isScroll, 0, this.min, this.max);
				this.mg.scReleaseSet(this, b);
				if ('touchstart' == a.type) this.itemIn.ontouchstart();
				else this.itemIn.onmousedown();
				this.itemIn.offsetPos = b;
			}
			return !1;
		};
		b.evnt = a;
		b.mg = this;
		b.itemIn = c;
		b.itemOut = b;
		b.vertical = f;
		b.scrollDragStr = g;
		b.wheelnum = 0;
		this[a][g + 'Wheel'] && this.addWheel(b, this.scWheel);
	}
};
Mg.prototype.scClick = function(a) {
	var c = a.evnt;
	a = a.scrollDragStr;
	if (void 0 != this[c][a + 'Click']) this[c][a + 'Click']();
};
Mg.prototype.scMove = function(a, c, b, e) {
	var d = a.evnt,
		f = a.scrollDragStr,
		g = a.isScroll,
		h = a.min,
		j = a.max,
		k = this[d][f + 'Fraction'],
		l = this[d].rounding;
	this[d][f + 'Dragged'] = a.startnum - c;
	this[d][f + 'Position'] = c;
	if (!e) {
		g || ((j = -j), (h = -h));
		var m = (this.totalItems - 1) * ((this[d][f + 'Invert'] ? j - c - h : c - h) / (j - h));
		c = Math[l](m);
	}
	if (c != this[d].num || k)
		0 <= c && c <= this.totalItems - 1
			? ((a = k ? 'fraction' : f),
				(this[d].fraction = this.calculateFraction(m, l)),
				this.setState(c, d, !0, !g, g, !0, a))
			: this[d].cycle &&
				((c = 0 > c ? this.totalItems + c : c - this.totalItems), this.setState(c, d, !0, !g, g, !0, f));
	if (!b && void 0 != this[d][f + 'Move']) this[d][f + 'Move']();
};
Mg.prototype.scReleaseSet = function(a, c) {
	var b = a.evnt,
		e = a.scrollDragStr,
		d = a.min,
		f = a.max,
		g = this[b].rounding;
	this[b][e + 'Invert'] && (c = f - c);
	d = Math[g]((this.totalItems - 1) * (c / (f - d)));
	this.setState(d, b, !0, !1, !0, !0, e);
	this.scRelease(a, c);
};
Mg.prototype.scRelease = function(a, c) {
	var b = a.evnt,
		e = a.itemIn,
		d = a.itemOut,
		f = a.scrollDragStr,
		g = a.isScroll,
		h = a.min,
		j = a.max,
		k = this.totalItems - 1;
	void 0 != c && ((e.wheelnum = d.wheelnum = c), (this[b][f + 'Dragged'] = a.startnum - c));
	g || ((j = -j), (h = -h));
	e = this[b].activated * ((j - h) / k);
	this[b][f + 'Position'] = this[b][f + 'Invert'] ? j - e : h + e;
	if (void 0 != c) {
		if (void 0 != this[b][f + 'Release']) this[b][f + 'Release']();
	} else if (void 0 != this[b][f + 'Move']) this[b][f + 'Move']();
};
Mg.prototype.scReleaseFraction = function(a) {
	var c = a.evnt,
		b = a.scrollDragStr;
	this[c][b + 'Fraction'] && this.setState(this[c].activated, c, !0, !a.isScroll, a.isScroll, !0, b);
};
Mg.prototype.scCheckLimits = function(a, c, b, e, d) {
	c
		? a < e ? (a = e + (a - e) * b) : a > d && (a = d + (a - d) * b)
		: a > -e ? (a = -e + (a + e) * b) : a < -d && (a = -d + (a + d) * b);
	return a;
};
Mg.prototype.scGetMin = function(a, c, b, e, d) {
	this[a].firstToSteps || (d = 1);
	return e ? -c.offsetHeight * (d - 1) / d : -c.offsetWidth * (d - 1) / d;
};
Mg.prototype.scGetMax = function(a, c, b, e, d) {
	this[a].lastToSteps || (d = 1);
	return e ? b.offsetHeight - c.offsetHeight / d : b.offsetWidth - c.offsetWidth / d;
};
Mg.prototype.addWheel = function(a, c) {
	var b = /Firefox/i.test(navigator.userAgent) ? 'DOMMouseScroll' : 'mousewheel';
	'undefined' == typeof a.attachEvent && a.addEventListener(b, c, !1);
};
Mg.prototype.scWheel = function(a) {
	var c = this.mg,
		b = 0;
	a.wheelDelta ? (b = a.wheelDelta / 120) : a.detail && (b = -a.detail / 3);
	b = this.wheelnum - b;
	0 <= b &&
		b <= c.totalItems - 1 &&
		(c.scMove(this, b, !0, !0),
		c.scReleaseFraction(this),
		c.scRelease(this, c[this.evnt].activated),
		a.preventDefault && a.preventDefault());
};
Mg.prototype.calculateFraction = function(a, c) {
	var b = a % 1;
	'round' == c ? ((b -= 0.5), 0 > b && (b += 1)) : 'ceil' == c && ((b += 1), 1 < b && (b -= 1));
	return b;
};
Mg.prototype.getTransform = function(a) {
	for (
		var c = 'transform msTransform MozTransform WebkitTransform OTransform KhtmlTransform'.split(' '),
			b = 0,
			e = c.length;
		b < e;
		b++
	)
		if (a.style[c[b]])
			return (
				(a = this.getCompStyle(a)[c[b]]),
				(c = a.replace(/[^0-9\-.,]/g, '').split(',')),
				(b = {}),
				(b.left = 0 == a.indexOf('matrix3d') ? 1 * c[12] : 1 * c[4]),
				(b.top = 0 == a.indexOf('matrix3d') ? 1 * c[13] : 1 * c[5]),
				b
			);
};
Mg.prototype.getCompStyle = function(a) {
	return window.getComputedStyle ? window.getComputedStyle(a, '') : a.currentStyle;
};
Mg.prototype.getEventName = function(a) {
	return 'mouseenter' == a ? 'mouseover' : 'mouseleave' == a ? 'mouseout' : a;
};
Mg.prototype.inArray = function(a, c) {
	if (!c) return -1;
	for (var b = 0, e = c.length; b < e; b++) if (c[b] == a) return b;
	return -1;
};
Mg.prototype.getElementsById = function(a) {
	for (var c = document.body.getElementsByTagName('*'), b = [], e, d = 0, f = c.length; d < f; d++)
		(e = c[d]), e.id.substr(0, a.length) == a && b.push(e);
	return b;
};
Mg.prototype.enableTextSelect = function(a, c) {
	a &&
		(c && (a.style.cursor = 'default'),
		(a.unselectable = !1),
		(a.style.userSelect = 'text'),
		(a.style.msUserSelect = 'text'),
		(a.style.MozUserSelect = 'text'),
		(a.style.webkitUserSelect = 'text'),
		(a.onselectstart = function() {}),
		(a.onmousedown = function() {}),
		navigator.userAgent.match(/Android/i) && (a.style.webkitTapHighlightColor = 'default'));
};
Mg.prototype.disableTextSelect = function(a, c) {
	a &&
		(c && (a.style.cursor = 'pointer'),
		(a.unselectable = !0),
		(a.style.userSelect = 'none'),
		(a.style.msUserSelect = 'none'),
		(a.style.MozUserSelect = 'none'),
		(a.style.webkitUserSelect = 'none'),
		(a.style.webkitUserSelect = 'none'),
		(a.onselectstart = function() {
			return !1;
		}),
		(a.onmousedown = function() {
			return !1;
		}),
		navigator.userAgent.match(/Android/i) && (a.style.webkitTapHighlightColor = 'rgba(0,0,0,0)'));
};
