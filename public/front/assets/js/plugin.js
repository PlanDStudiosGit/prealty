jQuery.extend(jQuery.easing, {
	def: 'easeOutQuad',
	swing: function(x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function(x, t, b, c, d) {
		return c * (t /= d) * t + b;
	},
	easeOutQuad: function(x, t, b, c, d) {
		return -c * (t /= d) * (t - 2) + b;
	},
	easeInOutQuad: function(x, t, b, c, d) {
		if ((t /= d / 2) < 1) return c / 2 * t * t + b;
		return -c / 2 * ((--t) * (t - 2) - 1) + b;
	},
	easeInCubic: function(x, t, b, c, d) {
		return c * (t /= d) * t * t + b;
	},
	easeOutCubic: function(x, t, b, c, d) {
		return c * ((t = t / d - 1) * t * t + 1) + b;
	},
	easeInOutCubic: function(x, t, b, c, d) {
		if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
		return c / 2 * ((t -= 2) * t * t + 2) + b;
	},
	easeInQuart: function(x, t, b, c, d) {
		return c * (t /= d) * t * t * t + b;
	},
	easeOutQuart: function(x, t, b, c, d) {
		return -c * ((t = t / d - 1) * t * t * t - 1) + b;
	},
	easeInOutQuart: function(x, t, b, c, d) {
		if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
		return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
	},
	easeInQuint: function(x, t, b, c, d) {
		return c * (t /= d) * t * t * t * t + b;
	},
	easeOutQuint: function(x, t, b, c, d) {
		return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
	},
	easeInOutQuint: function(x, t, b, c, d) {
		if ((t /= d / 2) < 1) return c / 2 * t * t * t * t * t + b;
		return c / 2 * ((t -= 2) * t * t * t * t + 2) + b;
	},
	easeInSine: function(x, t, b, c, d) {
		return -c * Math.cos(t / d * (Math.PI / 2)) + c + b;
	},
	easeOutSine: function(x, t, b, c, d) {
		return c * Math.sin(t / d * (Math.PI / 2)) + b;
	},
	easeInOutSine: function(x, t, b, c, d) {
		return -c / 2 * (Math.cos(Math.PI * t / d) - 1) + b;
	},
	easeInExpo: function(x, t, b, c, d) {
		return (t == 0) ? b : c * Math.pow(2, 10 * (t / d - 1)) + b;
	},
	easeOutExpo: function(x, t, b, c, d) {
		return (t == d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b;
	},
	easeInOutExpo: function(x, t, b, c, d) {
		if (t == 0) return b;
		if (t == d) return b + c;
		if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
		return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function(x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b;
	},
	easeOutCirc: function(x, t, b, c, d) {
		return c * Math.sqrt(1 - (t = t / d - 1) * t) + b;
	},
	easeInOutCirc: function(x, t, b, c, d) {
		if ((t /= d / 2) < 1) return -c / 2 * (Math.sqrt(1 - t * t) - 1) + b;
		return c / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + b;
	},
	easeInElastic: function(x, t, b, c, d) {
		var s = 1.70158;
		var p = 0;
		var a = c;
		if (t == 0) return b;
		if ((t /= d) == 1) return b + c;
		if (!p) p = d * .3;
		if (a < Math.abs(c)) {
			a = c;
			var s = p / 4;
		} else var s = p / (2 * Math.PI) * Math.asin(c / a);
		return -(a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
	},
	easeOutElastic: function(x, t, b, c, d) {
		var s = 1.70158;
		var p = 0;
		var a = c;
		if (t == 0) return b;
		if ((t /= d) == 1) return b + c;
		if (!p) p = d * .3;
		if (a < Math.abs(c)) {
			a = c;
			var s = p / 4;
		} else var s = p / (2 * Math.PI) * Math.asin(c / a);
		return a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b;
	},
	easeInOutElastic: function(x, t, b, c, d) {
		var s = 1.70158;
		var p = 0;
		var a = c;
		if (t == 0) return b;
		if ((t /= d / 2) == 2) return b + c;
		if (!p) p = d * (.3 * 1.5);
		if (a < Math.abs(c)) {
			a = c;
			var s = p / 4;
		} else var s = p / (2 * Math.PI) * Math.asin(c / a);
		if (t < 1) return -.5 * (a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
		return a * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p) * .5 + c + b;
	},
	easeInBack: function(x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c * (t /= d) * t * ((s + 1) * t - s) + b;
	},
	easeOutBack: function(x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c * ((t = t / d - 1) * t * ((s + 1) * t + s) + 1) + b;
	},
	easeInOutBack: function(x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		if ((t /= d / 2) < 1) return c / 2 * (t * t * (((s *= (1.525)) + 1) * t - s)) + b;
		return c / 2 * ((t -= 2) * t * (((s *= (1.525)) + 1) * t + s) + 2) + b;
	},
	easeInBounce: function(x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce(x, d - t, 0, c, d) + b;
	},
	easeOutBounce: function(x, t, b, c, d) {
		if ((t /= d) < (1 / 2.75)) {
			return c * (7.5625 * t * t) + b;
		} else if (t < (2 / 2.75)) {
			return c * (7.5625 * (t -= (1.5 / 2.75)) * t + .75) + b;
		} else if (t < (2.5 / 2.75)) {
			return c * (7.5625 * (t -= (2.25 / 2.75)) * t + .9375) + b;
		} else {
			return c * (7.5625 * (t -= (2.625 / 2.75)) * t + .984375) + b;
		}
	},
	easeInOutBounce: function(x, t, b, c, d) {
		if (t < d / 2) return jQuery.easing.easeInBounce(x, t * 2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce(x, t * 2 - d, 0, c, d) * .5 + c * .5 + b;
	}
});

! function(a) {
	a.jPanelMenu = function(b) {
		"undefined" != typeof b && null != b || (b = {});
		var c = {
			options: a.extend({
				menu: "#menu",
				panel: "body",
				trigger: ".menu-trigger",
				excludedPanelContent: "style, script, .viewer",
				clone: !0,
				keepEventHandlers: !1,
				direction: "left",
				openPosition: "250px",
				animated: !1,
				closeOnContentClick: !1,
				keyboardShortcuts: [{
					code: 27,
					open: !1,
					close: !0
				}, {
					code: 37,
					open: !1,
					close: !0
				}, {
					code: 39,
					open: !0,
					close: !0
				}, {
					code: 77,
					open: !0,
					close: !0
				}],
				duration: 150,
				openDuration: b.duration || 150,
				closeDuration: b.duration || 150,
				easing: "ease-in-out",
				openEasing: b.easing || "ease-in-out",
				closeEasing: b.easing || "ease-in-out",
				before: function() {},
				beforeOpen: function() {},
				beforeClose: function() {},
				after: function() {},
				afterOpen: function() {},
				afterClose: function() {},
				beforeOn: function() {},
				afterOn: function() {},
				beforeOff: function() {},
				afterOff: function() {}
			}, b),
			openMenu: function(b) {
				"undefined" != typeof b && null != b || (b = c.options.animated), c.clearTimeouts(), c.options.before(), c.options.beforeOpen(), c.setMenuState(!0), c.showMenu();
				var d = {
					none: !b,
					transitions: !(!b || !c.settings.transitionsSupported)
				};
				if (d.transitions || d.none) {
					d.none && c.disableTransitions(), d.transitions && c.enableTransitions(c.options.openDuration, c.options.openEasing);
					var e = c.computePositionStyle(!0);
					c.setPanelStyle(e), c.timeouts.afterOpen = setTimeout(function() {
						c.options.after(), c.options.afterOpen(), c.initiateContentClickListeners()
					}, c.options.openDuration)
				} else {
					var f = c.getJSEasingFunction(c.options.openEasing),
						g = {};
					g[c.options.direction] = c.options.openPosition, a(c.panel).stop().animate(g, c.options.openDuration, f, function() {
						c.options.after(), c.options.afterOpen(), c.initiateContentClickListeners()
					})
				}
			},
			closeMenu: function(b) {
				"undefined" != typeof b && null != b || (b = c.options.animated), c.clearTimeouts(), c.options.before(), c.options.beforeClose(), c.setMenuState(!1);
				var d = {
					none: !b,
					transitions: !(!b || !c.settings.transitionsSupported)
				};
				if (d.transitions || d.none) {
					d.none && c.disableTransitions(), d.transitions && c.enableTransitions(c.options.closeDuration, c.options.closeEasing);
					var e = c.computePositionStyle();
					c.setPanelStyle(e), c.timeouts.afterClose = setTimeout(function() {
						c.disableTransitions(), c.hideMenu(), c.options.after(), c.options.afterClose(), c.destroyContentClickListeners()
					}, c.options.closeDuration)
				} else {
					var f = c.getJSEasingFunction(c.options.closeEasing),
						g = {};
					g[c.options.direction] = 0 + c.settings.positionUnits, a(c.panel).stop().animate(g, c.options.closeDuration, f, function() {
						c.hideMenu(), c.options.after(), c.options.afterClose(), c.destroyContentClickListeners()
					})
				}
			},
			triggerMenu: function(a) {
				c.menuIsOpen() ? c.closeMenu(a) : c.openMenu(a)
			},
			initiateClickListeners: function() {
				a(document).on("click touchend", c.options.trigger, function(a) {
					c.triggerMenu(c.options.animated), a.preventDefault()
				})
			},
			destroyClickListeners: function() {
				a(document).off("click touchend", c.options.trigger, null)
			},
			initiateContentClickListeners: function() {
				return !!c.options.closeOnContentClick && void a(document).on("click touchend", c.panel, function(a) {
					c.menuIsOpen() && c.closeMenu(c.options.animated), a.preventDefault()
				})
			},
			destroyContentClickListeners: function() {
				return !!c.options.closeOnContentClick && void a(document).off("click touchend", c.panel, null)
			},
			initiateKeyboardListeners: function() {
				var b = ["input", "textarea", "select"];
				a(document).on("keydown", function(d) {
					var e = a(d.target),
						f = !1;
					if (a.each(b, function() {
							e.is(this.toString()) && (f = !0)
						}), f) return !0;
					for (mapping in c.options.keyboardShortcuts)
						if (d.which == c.options.keyboardShortcuts[mapping].code) {
							var g = c.options.keyboardShortcuts[mapping];
							g.open && g.close ? c.triggerMenu(c.options.animated) : !g.open || g.close || c.menuIsOpen() ? !g.open && g.close && c.menuIsOpen() && c.closeMenu(c.options.animated) : c.openMenu(c.options.animated), d.preventDefault()
						}
				})
			},
			destroyKeyboardListeners: function() {
				a(document).off("keydown", null)
			},
			setupMarkup: function() {
				a("html").addClass("jPanelMenu"), a(c.options.panel + " > *").not(c.menu + ", " + c.options.excludedPanelContent).wrapAll('<div class="' + c.panel.replace(".", "") + '"/>');
				var b = c.options.clone ? a(c.options.menu).clone(c.options.keepEventHandlers) : a(c.options.menu);
				b.attr("id", c.menu.replace("#", "")).insertAfter(c.options.panel + " > " + c.panel)
			},
			resetMarkup: function() {
				a("html").removeClass("jPanelMenu"), a(c.options.panel + " > " + c.panel + " > *").unwrap(), a(c.menu).remove()
			},
			init: function() {
				c.options.beforeOn(), c.setPositionUnits(), c.setCSSPrefix(), c.initiateClickListeners(), "[object Array]" === Object.prototype.toString.call(c.options.keyboardShortcuts) && c.initiateKeyboardListeners(), c.setjPanelMenuStyles(), c.setMenuState(!1), c.setupMarkup(), c.setPanelStyle({
					position: c.options.animated && "static" === c.settings.panelPosition ? "relative" : c.settings.panelPosition
				}), c.setMenuStyle({
					width: c.options.openPosition
				}), c.closeMenu(!1), c.options.afterOn()
			},
			destroy: function() {
				c.options.beforeOff(), c.closeMenu(), c.destroyClickListeners(), "[object Array]" === Object.prototype.toString.call(c.options.keyboardShortcuts) && c.destroyKeyboardListeners(), c.resetMarkup();
				var a = {};
				a[c.options.direction] = "auto", c.options.afterOff()
			}
		};
		return {
			on: c.init,
			off: c.destroy,
			trigger: c.triggerMenu,
			open: c.openMenu,
			close: c.closeMenu,
			isOpen: c.menuIsOpen,
			menu: c.menu,
			getMenu: function() {
				return a(c.menu)
			},
			panel: c.panel,
			getPanel: function() {
				return a(c.panel)
			},
			setPosition: function(a) {
				"undefined" != typeof a && null != a || (a = c.options.openPosition), c.options.openPosition = a, c.setMenuStyle({
					width: c.options.openPosition
				})
			}
		}
	}
}(jQuery);

! function(n, e) {
	function t(e, t) {
		this.element = e, this.settings = n.extend({}, a, t), this._defaults = a, this._name = i, this.init()
	}
	var a = {
			label: "MENU",
			duplicate: !0,
			duration: 200,
			easingOpen: "swing",
			easingClose: "swing",
			closedSymbol: "&#9658;",
			openedSymbol: "&#9660;",
			prependTo: "body",
			parentTag: "a",
			closeOnClick: !1,
			allowParentLinks: !1,
			nestedParentLinks: !0,
			showChildren: !1,
			brand: "",
			init: function() {},
			open: function() {},
			close: function() {}
		},
		i = "slicknav",
		s = "slicknav";
	t.prototype.init = function() {
		var t, a, i = this,
			l = n(this.element),
			o = this.settings;
		if (o.duplicate ? (i.mobileNav = l.clone(), i.mobileNav.removeAttr("id"), i.mobileNav.find("*").each(function(e, t) {
				n(t).removeAttr("id")
			})) : i.mobileNav = l, t = s + "_icon", "" === o.label && (t += " " + s + "_no-text"), "a" == o.parentTag && (o.parentTag = 'a href="#"'), i.mobileNav.attr("class", s + "_nav"), a = n('<div class="' + s + '_menu"></div>'), "" !== o.brand) {
			var r = n('<div class="' + s + '_brand">' + o.brand + "</div>");
			n(a).append(r)
		}
		i.btn = n(["<" + o.parentTag + ' aria-haspopup="true" tabindex="0" class="' + s + "_btn " + s + '_collapsed">', '<span class="' + s + '_menutxt">' + o.label + "</span>", '<span class="' + t + '">', '<span class="' + s + '_icon-bar"></span>', '<span class="' + s + '_icon-bar"></span>', '<span class="' + s + '_icon-bar"></span>', "</span>", "</" + o.parentTag + ">"].join("")), n(a).append(i.btn), n(o.prependTo).prepend(a), a.append(i.mobileNav);
		var d = i.mobileNav.find("li");
		n(d).each(function() {
			var e = n(this),
				t = {};
			if (t.children = e.children("ul").attr("role", "menu"), e.data("menu", t), t.children.length > 0) {
				var a = e.contents(),
					l = !1;
				nodes = [], n(a).each(function() {
					return n(this).is("ul") ? !1 : (nodes.push(this), void(n(this).is("a") && (l = !0)))
				});
				var r = n("<" + o.parentTag + ' role="menuitem" aria-haspopup="true" tabindex="-1" class="' + s + '_item"/>');
				if (o.allowParentLinks && !o.nestedParentLinks && l) n(nodes).wrapAll('<span class="' + s + "_parent-link " + s + '_row"/>').parent();
				else {
					var d = n(nodes).wrapAll(r).parent();
					d.addClass(s + "_row")
				}
				e.addClass(s + "_collapsed"), e.addClass(s + "_parent");
				var c = n('<span class="' + s + '_arrow">' + o.closedSymbol + "</span>");
				o.allowParentLinks && !o.nestedParentLinks && l && (c = c.wrap(r).parent()), n(nodes).last().after(c)
			} else 0 === e.children().length && e.addClass(s + "_txtnode");
			e.children("a").attr("role", "menuitem").click(function(e) {
				o.closeOnClick && !n(e.target).parent().closest("li").hasClass(s + "_parent") && n(i.btn).click()
			}), o.closeOnClick && o.allowParentLinks && (e.children("a").children("a").click(function() {
				n(i.btn).click()
			}), e.find("." + s + "_parent-link a:not(." + s + "_item)").click(function() {
				n(i.btn).click()
			}))
		}), n(d).each(function() {
			var e = n(this).data("menu");
			o.showChildren || i._visibilityToggle(e.children, null, !1, null, !0)
		}), i._visibilityToggle(i.mobileNav, null, !1, "init", !0), i.mobileNav.attr("role", "menu"), n(e).mousedown(function() {
			i._outlines(!1)
		}), n(e).keyup(function() {
			i._outlines(!0)
		}), n(i.btn).click(function(n) {
			n.preventDefault(), i._menuToggle()
		}), i.mobileNav.on("click", "." + s + "_item", function(e) {
			e.preventDefault(), i._itemClick(n(this))
		}), n(i.btn).keydown(function(n) {
			var e = n || event;
			13 == e.keyCode && (n.preventDefault(), i._menuToggle())
		}), i.mobileNav.on("keydown", "." + s + "_item", function(e) {
			var t = e || event;
			13 == t.keyCode && (e.preventDefault(), i._itemClick(n(e.target)))
		}), o.allowParentLinks && o.nestedParentLinks && n("." + s + "_item a").click(function(n) {
			n.stopImmediatePropagation()
		})
	}, t.prototype._menuToggle = function() {
		var n = this,
			e = n.btn,
			t = n.mobileNav;
		e.hasClass(s + "_collapsed") ? (e.removeClass(s + "_collapsed"), e.addClass(s + "_open")) : (e.removeClass(s + "_open"), e.addClass(s + "_collapsed")), e.addClass(s + "_animating"), n._visibilityToggle(t, e.parent(), !0, e)
	}, t.prototype._itemClick = function(n) {
		var e = this,
			t = e.settings,
			a = n.data("menu");
		a || (a = {}, a.arrow = n.children("." + s + "_arrow"), a.ul = n.next("ul"), a.parent = n.parent(), a.parent.hasClass(s + "_parent-link") && (a.parent = n.parent().parent(), a.ul = n.parent().next("ul")), n.data("menu", a)), a.parent.hasClass(s + "_collapsed") ? (a.arrow.html(t.openedSymbol), a.parent.removeClass(s + "_collapsed"), a.parent.addClass(s + "_open"), a.parent.addClass(s + "_animating"), e._visibilityToggle(a.ul, a.parent, !0, n)) : (a.arrow.html(t.closedSymbol), a.parent.addClass(s + "_collapsed"), a.parent.removeClass(s + "_open"), a.parent.addClass(s + "_animating"), e._visibilityToggle(a.ul, a.parent, !0, n))
	}, t.prototype._visibilityToggle = function(e, t, a, i, l) {
		var o = this,
			r = o.settings,
			d = o._getActionItems(e),
			c = 0;
		a && (c = r.duration), e.hasClass(s + "_hidden") ? (e.removeClass(s + "_hidden"), e.slideDown(c, r.easingOpen, function() {
			n(i).removeClass(s + "_animating"), n(t).removeClass(s + "_animating"), l || r.open(i)
		}), e.attr("aria-hidden", "false"), d.attr("tabindex", "0"), o._setVisAttr(e, !1)) : (e.addClass(s + "_hidden"), e.slideUp(c, this.settings.easingClose, function() {
			e.attr("aria-hidden", "true"), d.attr("tabindex", "-1"), o._setVisAttr(e, !0), e.hide(), n(i).removeClass(s + "_animating"), n(t).removeClass(s + "_animating"), l ? "init" == i && r.init() : r.close(i)
		}))
	}, t.prototype._setVisAttr = function(e, t) {
		var a = this,
			i = e.children("li").children("ul").not("." + s + "_hidden");
		i.each(t ? function() {
			var e = n(this);
			e.attr("aria-hidden", "true");
			var i = a._getActionItems(e);
			i.attr("tabindex", "-1"), a._setVisAttr(e, t)
		} : function() {
			var e = n(this);
			e.attr("aria-hidden", "false");
			var i = a._getActionItems(e);
			i.attr("tabindex", "0"), a._setVisAttr(e, t)
		})
	}, t.prototype._getActionItems = function(n) {
		var e = n.data("menu");
		if (!e) {
			e = {};
			var t = n.children("li"),
				a = t.find("a");
			e.links = a.add(t.find("." + s + "_item")), n.data("menu", e)
		}
		return e.links
	}, t.prototype._outlines = function(e) {
		e ? n("." + s + "_item, ." + s + "_btn").css("outline", "") : n("." + s + "_item, ." + s + "_btn").css("outline", "none")
	}, t.prototype.toggle = function() {
		var n = this;
		n._menuToggle()
	}, t.prototype.open = function() {
		var n = this;
		n.btn.hasClass(s + "_collapsed") && n._menuToggle()
	}, t.prototype.close = function() {
		var n = this;
		n.btn.hasClass(s + "_open") && n._menuToggle()
	}, n.fn[i] = function(e) {
		var a = arguments;
		if (void 0 === e || "object" == typeof e) return this.each(function() {
			n.data(this, "plugin_" + i) || n.data(this, "plugin_" + i, new t(this, e))
		});
		if ("string" == typeof e && "_" !== e[0] && "init" !== e) {
			var s;
			return this.each(function() {
				var l = n.data(this, "plugin_" + i);
				l instanceof t && "function" == typeof l[e] && (s = l[e].apply(l, Array.prototype.slice.call(a, 1)))
			}), void 0 !== s ? s : this
		}
	}
}(jQuery, document, window);
