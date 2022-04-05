/*
 * videojs-contrib-ads
 * @version 6.6.1
 * @copyright 2018 Brightcove, Inc.
 * @license Apache-2.0
 */
!
function(e, t) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = t(require("video.js")) : "function" == typeof define && define.amd ? define(["video.js"], t) : e.videojsContribAds = t(e.videojs)
} (this,
function(p) {
    "use strict";
    p = p && p.hasOwnProperty("default") ? p["default"] : p;
    var l = "6.6.1";
    var o = function o(e, t) {
        t.isImmediatePropagationStopped = function() {
            return ! 0
        },
        t.cancelBubble = !0,
        t.isPropagationStopped = function() {
            return ! 0
        }
    },
    r = function r(e, t, n) {
        o(e, n),
        e.trigger({
            type: t + n.type,
            originalEvent: n
        })
    },
    n = function n(e, t) {
        e.ads.isInAdMode() && (e.ads.isContentResuming() ? e.ads._contentEnding && r(e, "content", t) : r(e, "ad", t))
    },
    a = function a(e, t) {
        e.ads.isInAdMode() ? e.ads.isContentResuming() ? (o(e, t), e.trigger("resumeended")) : r(e, "ad", t) : e.ads._contentHasEnded || e.ads.stitchedAds() || (r(e, "content", t), e.trigger("readyforpostroll"))
    },
    i = function i(e, t) {
        if (! ("loadstart" === t.type && !e.ads._hasThereBeenALoadStartDuringPlayerLife || "loadeddata" === t.type && !e.ads._hasThereBeenALoadedData || "loadedmetadata" === t.type && !e.ads._hasThereBeenALoadedMetaData)) if (e.ads.inAdBreak()) r(e, "ad", t);
        else {
            if (e.currentSrc() !== e.ads.contentSrc) return;
            r(e, "content", t)
        }
    },
    s = function s(e, t) {
        e.ads.inAdBreak() ? r(e, "ad", t) : e.ads.isContentResuming() && r(e, "content", t)
    };
    function c(e) {
        "playing" === e.type ? n(this, e) : "ended" === e.type ? a(this, e) : "loadstart" === e.type || "loadeddata" === e.type || "loadedmetadata" === e.type ? i(this, e) : "play" === e.type ? s(this, e) : this.ads.isInAdMode() && (this.ads.isContentResuming() ? r(this, "content", e) : r(this, "ad", e))
    }
    var e, t = "undefined" != typeof window ? window: "undefined" != typeof global ? global: "undefined" != typeof self ? self: {},
    f = "undefined" != typeof window ? window: void 0 !== t ? t: "undefined" != typeof self ? self: {},
    d = {},
    u = (Object.freeze || Object)({
        "default": d
    }),
    h = u && d || u,
    y = void 0 !== t ? t: "undefined" != typeof window ? window: {};
    "undefined" != typeof document ? e = document: (e = y["__GLOBAL_DOCUMENT_CACHE@4"]) || (e = y["__GLOBAL_DOCUMENT_CACHE@4"] = h);
    var g = e,
    m = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ?
    function(e) {
        return typeof e
    }: function(e) {
        return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol": typeof e
    },
    v = (function() {
        function l(e) {
            this.value = e
        }
        function e(a) {
            var i, s;
            function d(e, t) {
                try {
                    var n = a[e](t),
                    o = n.value;
                    o instanceof l ? Promise.resolve(o.value).then(function(e) {
                        d("next", e)
                    },
                    function(e) {
                        d("throw", e)
                    }) : u(n.done ? "return": "normal", n.value)
                } catch(r) {
                    u("throw", r)
                }
            }
            function u(e, t) {
                switch (e) {
                case "return":
                    i.resolve({
                        value:
                        t,
                        done: !0
                    });
                    break;
                case "throw":
                    i.reject(t);
                    break;
                default:
                    i.resolve({
                        value:
                        t,
                        done: !1
                    })
                } (i = i.next) ? d(i.key, i.arg) : s = null
            }
            this._invoke = function e(o, r) {
                return new Promise(function(e, t) {
                    var n = {
                        key: o,
                        arg: r,
                        resolve: e,
                        reject: t,
                        next: null
                    };
                    s ? s = s.next = n: (i = s = n, d(o, r))
                })
            },
            "function" != typeof a["return"] && (this["return"] = undefined)
        }
        "function" == typeof Symbol && Symbol.asyncIterator && (e.prototype[Symbol.asyncIterator] = function() {
            return this
        }),
        e.prototype.next = function(e) {
            return this._invoke("next", e)
        },
        e.prototype["throw"] = function(e) {
            return this._invoke("throw", e)
        },
        e.prototype["return"] = function(e) {
            return this._invoke("return", e)
        }
    } (),
    function(e, t) {
        if (! (e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }),
    A = function(e, t) {
        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
        e.prototype = Object.create(t && t.prototype, {
            constructor: {
                value: e,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }),
        t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
    },
    b = function(e, t) {
        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return ! t || "object" != typeof t && "function" != typeof t ? e: t
    },
    _ = function _(e, t) {
        return t ? encodeURIComponent(e) : e
    },
    k = function k(e, t, n) {
        if (e && e[n]) for (var o = e[n], r = Object.keys(o), a = 0; a < r.length; a++) {
            t["{mediainfo." + n + "." + r[a] + "}"] = o[r[a]]
        }
    };
    var T = {
        processMetadataTracks: function(t, n) {
            for (var e = t.textTracks(), o = function o(e) {
                "metadata" === e.kind && (t.ads.cueTextTracks.setMetadataTrackMode(e), n(t, e))
            },
            r = 0; r < e.length; r++) o(e[r]);
            e.addEventListener("addtrack",
            function(e) {
                o(e.track)
            })
        },
        setMetadataTrackMode: function(e) {},
        getSupportedAdCue: function(e, t) {
            return t
        },
        isSupportedAdCue: function(e, t) {
            return ! 0
        },
        getCueId: function(e, t) {
            return t.id
        }
    },
    C = function C(e, t) {
        return t !== undefined && e.ads.includedCues[t]
    },
    P = function P(e, t) {
        t !== undefined && "" !== t && (e.ads.includedCues[t] = !0)
    };
    function w() {
        var e = this; ! 1 !== e.ads._shouldBlockPlay && (e.paused() || (e.ads.debug("Playback was canceled by cancelContentPlay"), e.pause()), e.ads._cancelledPlay = !0)
    }
    T.processAdTrack = function(e, t, n, o) {
        e.ads.includedCues = {};
        for (var r = 0; r < t.length; r++) {
            var a = t[r],
            i = this.getSupportedAdCue(e, a);
            if (!this.isSupportedAdCue(e, a)) return void p.log.warn("Skipping as this is not a supported ad cue.", a);
            var s = this.getCueId(e, a),
            d = a.startTime;
            if (C(e, s)) return void p.log("Skipping ad already seen with ID " + s);
            o && o(e, i, s, d),
            n(e, i, s, d),
            P(e, s)
        }
    };
    var S = {},
    R = p;
    S.isMiddlewareMediatorSupported = function() {
        return ! R.browser.IS_IOS && !R.browser.IS_ANDROID && !!(R.use && R.middleware && R.middleware.TERMINATOR)
    },
    S.playMiddleware = function(n) {
        return {
            setSource: function(e, t) {
                t(null, e)
            },
            callPlay: function() {
                if (n.ads && !0 === n.ads._shouldBlockPlay) return n.ads.debug("Using playMiddleware to block content playback"),
                n.ads._playBlocked = !0,
                R.middleware.TERMINATOR
            },
            play: function(e, t) {
                n.ads && n.ads._playBlocked && e ? (n.ads.debug("url call to Tech was terminated."), n.trigger("play"), n.addClass("vjs-has-started"), n.ads._playBlocked = !1) : t && t["catch"] && t["catch"](function(e) {
                    "play() failed because the user didn't interact with the document first. https://goo.gl/xX8pDD" === e.message && n.trigger("pause")
                })
            }
        }
    },
    S.testHook = function(e) {
        R = e
    };
    var L = S.playMiddleware,
    B = S.isMiddlewareMediatorSupported,
    M = function M() {
        if (p.getPlugin) return Boolean(p.getPlugin("ads"));
        var e = p.getComponent("Player");
        return Boolean(e && e.prototype.ads)
    };
    var j = function() {
        function t(e) {
            v(this, t),
            this.player = e
        }
        return t._getName = function() {
            return "Anonymous State"
        },
        t.prototype.transitionTo = function(e) {
            var t = this.player;
            this.cleanup(t);
            var n = new e(t);
            t.ads._state = n,
            t.ads.debug(this.constructor._getName() + " -> " + n.constructor._getName());
            for (var o = arguments.length,
            r = Array(1 < o ? o - 1 : 0), a = 1; a < o; a++) r[a - 1] = arguments[a];
            n.init.apply(n, [t].concat(r))
        },
        t.prototype.init = function() {},
        t.prototype.cleanup = function() {},
        t.prototype.onPlay = function() {},
        t.prototype.onPlaying = function() {},
        t.prototype.onEnded = function() {},
        t.prototype.onAdEnded = function() {},
        t.prototype.onAdsReady = function() {
            p.log.warn("Unexpected adsready event")
        },
        t.prototype.onAdsError = function() {},
        t.prototype.onAdsCanceled = function() {},
        t.prototype.onAdTimeout = function() {},
        t.prototype.onAdStarted = function() {},
        t.prototype.onContentChanged = function() {},
        t.prototype.onContentResumed = function() {},
        t.prototype.onReadyForPostroll = function() {
            p.log.warn("Unexpected readyforpostroll event")
        },
        t.prototype.onNoPreroll = function() {},
        t.prototype.onNoPostroll = function() {},
        t.prototype.startLinearAdMode = function() {
            p.log.warn("Unexpected startLinearAdMode invocation (State via " + this.constructor._getName() + ")")
        },
        t.prototype.endLinearAdMode = function() {
            p.log.warn("Unexpected endLinearAdMode invocation (State via " + this.constructor._getName() + ")")
        },
        t.prototype.skipLinearAdMode = function() {
            p.log.warn("Unexpected skipLinearAdMode invocation (State via " + this.constructor._getName() + ")")
        },
        t.prototype.isAdState = function() {
            throw new Error("isAdState unimplemented for " + this.constructor._getName())
        },
        t.prototype.isWaitingForAdBreak = function() {
            return ! 1
        },
        t.prototype.isContentResuming = function() {
            return ! 1
        },
        t.prototype.inAdBreak = function() {
            return ! 1
        },
        t.prototype.handleEvent = function(e) {
            var t = this.player;
            "play" === e ? this.onPlay(t) : "adsready" === e ? this.onAdsReady(t) : "adserror" === e ? this.onAdsError(t) : "adscanceled" === e ? this.onAdsCanceled(t) : "adtimeout" === e ? this.onAdTimeout(t) : "ads-ad-started" === e ? this.onAdStarted(t) : "contentchanged" === e ? this.onContentChanged(t) : "contentresumed" === e ? this.onContentResumed(t) : "readyforpostroll" === e ? this.onReadyForPostroll(t) : "playing" === e ? this.onPlaying(t) : "ended" === e ? this.onEnded(t) : "nopreroll" === e ? this.onNoPreroll(t) : "nopostroll" === e ? this.onNoPostroll(t) : "adended" === e && this.onAdEnded(t)
        },
        t
    } (),
    E = function(n) {
        function o(e) {
            v(this, o);
            var t = b(this, n.call(this, e));
            return t.contentResuming = !1,
            t.waitingForAdBreak = !1,
            t
        }
        return A(o, n),
        o.prototype.isAdState = function() {
            return ! 0
        },
        o.prototype.onPlaying = function() {
            this.contentResuming && this.transitionTo(V)
        },
        o.prototype.onContentResumed = function() {
            this.contentResuming && this.transitionTo(V)
        },
        o.prototype.isWaitingForAdBreak = function() {
            return this.waitingForAdBreak
        },
        o.prototype.isContentResuming = function() {
            return this.contentResuming
        },
        o.prototype.inAdBreak = function() {
            return ! 0 === this.player.ads._inLinearAdMode
        },
        o
    } (j),
    N = function(e) {
        function t() {
            return v(this, t),
            b(this, e.apply(this, arguments))
        }
        return A(t, e),
        t.prototype.isAdState = function() {
            return ! 1
        },
        t.prototype.onContentChanged = function(e) {
            e.ads.debug("Received contentchanged event (ContentState)"),
            e.paused() ? this.transitionTo(U) : (this.transitionTo(O, !1), e.pause(), e.ads._pausedOnContentupdate = !0)
        },
        t
    } (j),
    I = void 0;
    var x = {
        start: function Y(e) {
            e.ads.debug("Starting ad break"),
            e.ads._inLinearAdMode = !0,
            e.trigger("adstart"),
            e.ads.shouldTakeSnapshots() && (e.ads.snapshot = function d(e) {
                var t = void 0;
                t = p.browser.IS_IOS && e.ads.isLive(e) && 0 < e.seekable().length ? e.currentTime() - e.seekable().end(0) : e.currentTime();
                var n = e.$(".vjs-tech"),
                o = e.textTracks ? e.textTracks() : [],
                r = [],
                a = {
                    ended: e.ended(),
                    currentSrc: e.currentSrc(),
                    sources: e.currentSources(),
                    src: e.tech_.src(),
                    currentTime: t,
                    type: e.currentType()
                };
                n && (a.style = n.getAttribute("style"));
                for (var i = 0; i < o.length; i++) {
                    var s = o[i];
                    r.push({
                        track: s,
                        mode: s.mode
                    }),
                    s.mode = "disabled"
                }
                return a.suppressedTracks = r,
                a
            } (e)),
            e.ads.shouldPlayContentBehindAd(e) && (e.ads.preAdVolume_ = e.volume(), e.volume(0)),
            e.addClass("vjs-ad-playing"),
            e.hasClass("vjs-live") && e.removeClass("vjs-live"),
            e.ads.removeNativePoster()
        },
        end: function J(e, t) {
            e.ads.debug("Ending ad break"),
            t === undefined && (t = function t() {}),
            e.ads.adType = null,
            e.ads._inLinearAdMode = !1,
            e.trigger("adend"),
            e.removeClass("vjs-ad-playing"),
            e.ads.isLive(e) && e.addClass("vjs-live"),
            e.ads.shouldTakeSnapshots() ?
            function c(o, e) {
                var r = o.ads.snapshot;
                if (e === undefined && (e = function e() {}), !0 === o.ads.disableNextSnapshotRestore) return o.ads.disableNextSnapshotRestore = !1,
                delete o.ads.snapshot,
                void e();
                var t = o.$(".vjs-tech"),
                n = 20,
                a = r.suppressedTracks,
                i = void 0,
                s = function s() {
                    for (var e = 0; e < a.length; e++)(i = a[e]).track.mode = i.mode
                },
                d = function d() {
                    var e = void 0;
                    if (p.browser.IS_IOS && o.ads.isLive(o)) {
                        if (r.currentTime < 0 && (e = 0 < o.seekable().length ? o.seekable().end(0) + r.currentTime: o.currentTime(), o.currentTime(e)), o.paused()) {
                            var t = o.play();
                            t && t["catch"] && t["catch"](function(e) {
                                p.log.warn("url promise rejected in IOS snapshot resume", e)
                            })
                        }
                    } else if (r.ended) o.currentTime(o.duration());
                    else {
                        o.currentTime(r.currentTime);
                        var n = o.play();
                        n && n["catch"] && n["catch"](function(e) {
                            p.log.warn("url promise rejected in snapshot resume", e)
                        })
                    }
                    o.ads.shouldRemoveAutoplay_ && (o.autoplay(!1), o.ads.shouldRemoveAutoplay_ = !1)
                },
                u = function u() {
                    if (o.off("contentcanplay", u), I && o.clearTimeout(I), 1 < (t = o.el().querySelector(".vjs-tech")).readyState) return d();
                    if (t.seekable === undefined) return d();
                    if (0 < t.seekable.length) return d();
                    if (n--) o.setTimeout(u, 50);
                    else try {
                        d()
                    } catch(e) {
                        p.log.warn("Failed to resume the content after an advertisement", e)
                    }
                };
                if ("style" in r && t.setAttribute("style", r.style || ""), o.ads.videoElementRecycled()) o.one("resumeended",
                function() {
                    delete o.ads.snapshot,
                    e()
                }),
                o.one("contentloadedmetadata", s),
                p.browser.IS_IOS && !o.autoplay() && (o.autoplay(!0), o.ads.shouldRemoveAutoplay_ = !0),
                o.src(r.sources),
                o.one("contentcanplay", u),
                I = o.setTimeout(u, 2e3);
                else {
                    if (s(), !o.ended()) {
                        var l = o.play();
                        l && l["catch"] && l["catch"](function(e) {
                            p.log.warn("url promise rejected in snapshot restore", e)
                        })
                    }
                    delete o.ads.snapshot,
                    e()
                }
            } (e, t) : (e.volume(e.ads.preAdVolume_), t())
        }
    },
    O = function(e) {
        function t() {
            return v(this, t),
            b(this, e.apply(this, arguments))
        }
        return A(t, e),
        t._getName = function() {
            return "Preroll"
        },
        t.prototype.init = function(e, t, n) {
            if (this.waitingForAdBreak = !0, e.addClass("vjs-ad-loading"), n || e.ads.nopreroll_) return this.resumeAfterNoPreroll(e);
            var o = e.ads.settings.timeout;
            "number" == typeof e.ads.settings.prerollTimeout && (o = e.ads.settings.prerollTimeout),
            this._timeout = e.setTimeout(function() {
                e.trigger("adtimeout")
            },
            o),
            t ? this.handleAdsReady() : this.adsReady = !1
        },
        t.prototype.onAdsReady = function(e) {
            e.ads.inAdBreak() ? p.log.warn("Unexpected adsready event (Preroll)") : (e.ads.debug("Received adsready event (Preroll)"), this.handleAdsReady())
        },
        t.prototype.handleAdsReady = function() {
            this.adsReady = !0,
            this.readyForPreroll()
        },
        t.prototype.afterLoadStart = function(e) {
            var t = this.player;
            t.ads._hasThereBeenALoadStartDuringPlayerLife ? e() : (t.ads.debug("Waiting for loadstart..."), t.one("loadstart",
            function() {
                t.ads.debug("Received loadstart event"),
                e()
            }))
        },
        t.prototype.noPreroll = function() {
            var e = this;
            this.afterLoadStart(function() {
                e.player.ads.debug("Skipping prerolls due to nopreroll event (Preroll)"),
                e.resumeAfterNoPreroll(e.player)
            })
        },
        t.prototype.readyForPreroll = function() {
            var e = this.player;
            this.afterLoadStart(function() {
                e.ads.debug("Triggered readyforpreroll event (Preroll)"),
                e.trigger("readyforpreroll")
            })
        },
        t.prototype.onAdsCanceled = function(e) {
            var t = this;
            e.ads.debug("adscanceled (Preroll)"),
            this.afterLoadStart(function() {
                t.resumeAfterNoPreroll(e)
            })
        },
        t.prototype.onAdsError = function(e) {
            var t = this;
            p.log("adserror (Preroll)"),
            this.inAdBreak() ? e.ads.endLinearAdMode() : this.afterLoadStart(function() {
                t.resumeAfterNoPreroll(e)
            })
        },
        t.prototype.startLinearAdMode = function() {
            var e = this.player; ! this.adsReady || e.ads.inAdBreak() || this.isContentResuming() ? p.log.warn("Unexpected startLinearAdMode invocation (Preroll)") : (e.clearTimeout(this._timeout), e.ads.adType = "preroll", this.waitingForAdBreak = !1, x.start(e), e.ads._shouldBlockPlay = !1)
        },
        t.prototype.onAdStarted = function(e) {
            e.removeClass("vjs-ad-loading")
        },
        t.prototype.endLinearAdMode = function() {
            var e = this.player;
            this.inAdBreak() && (e.removeClass("vjs-ad-loading"), e.addClass("vjs-ad-content-resuming"), this.contentResuming = !0, x.end(e))
        },
        t.prototype.skipLinearAdMode = function() {
            var e = this,
            t = this.player;
            t.ads.inAdBreak() || this.isContentResuming() ? p.log.warn("Unexpected skipLinearAdMode invocation") : this.afterLoadStart(function() {
                t.trigger("adskip"),
                t.ads.debug("skipLinearAdMode (Preroll)"),
                e.resumeAfterNoPreroll(t)
            })
        },
        t.prototype.onAdTimeout = function(e) {
            var t = this;
            this.afterLoadStart(function() {
                e.ads.debug("adtimeout (Preroll)"),
                t.resumeAfterNoPreroll(e)
            })
        },
        t.prototype.onNoPreroll = function(e) {
            e.ads.inAdBreak() || this.isContentResuming() ? p.log.warn("Unexpected nopreroll event (Preroll)") : this.noPreroll()
        },
        t.prototype.resumeAfterNoPreroll = function(e) {
            this.contentResuming = !0,
            e.ads._shouldBlockPlay = !1,
            e.paused() && (e.ads._playRequested || e.ads._pausedOnContentupdate) && e.play()
        },
        t.prototype.cleanup = function(e) {
            e.ads._hasThereBeenALoadStartDuringPlayerLife || p.log.warn("Leaving Preroll state before loadstart event can cause issues."),
            e.removeClass("vjs-ad-loading"),
            e.removeClass("vjs-ad-content-resuming"),
            e.clearTimeout(this._timeout)
        },
        t
    } (E),
    D = function(e) {
        function t() {
            return v(this, t),
            b(this, e.apply(this, arguments))
        }
        return A(t, e),
        t._getName = function() {
            return "Midroll"
        },
        t.prototype.init = function(e) {
            e.ads.adType = "midroll",
            x.start(e),
            e.addClass("vjs-ad-loading")
        },
        t.prototype.onAdStarted = function(e) {
            e.removeClass("vjs-ad-loading")
        },
        t.prototype.endLinearAdMode = function() {
            var e = this.player;
            this.inAdBreak() && (this.contentResuming = !0, e.addClass("vjs-ad-content-resuming"), e.removeClass("vjs-ad-loading"), x.end(e))
        },
        t.prototype.onAdsError = function(e) {
            this.inAdBreak() && e.ads.endLinearAdMode()
        },
        t.prototype.cleanup = function(e) {
            e.removeClass("vjs-ad-loading"),
            e.removeClass("vjs-ad-content-resuming")
        },
        t
    } (E),
    F = function(e) {
        function t() {
            return v(this, t),
            b(this, e.apply(this, arguments))
        }
        return A(t, e),
        t._getName = function() {
            return "Postroll"
        },
        t.prototype.init = function(e) {
            if (this.waitingForAdBreak = !0, e.ads._contentEnding = !0, e.ads.nopostroll_) this.resumeContent(e),
            this.transitionTo(H);
            else {
                e.addClass("vjs-ad-loading");
                var t = e.ads.settings.timeout;
                "number" == typeof e.ads.settings.postrollTimeout && (t = e.ads.settings.postrollTimeout),
                this._postrollTimeout = e.setTimeout(function() {
                    e.trigger("adtimeout")
                },
                t)
            }
        },
        t.prototype.startLinearAdMode = function() {
            var e = this.player;
            e.ads.inAdBreak() || this.isContentResuming() ? p.log.warn("Unexpected startLinearAdMode invocation (Postroll)") : (e.ads.adType = "postroll", e.clearTimeout(this._postrollTimeout), this.waitingForAdBreak = !1, x.start(e))
        },
        t.prototype.onAdStarted = function(e) {
            e.removeClass("vjs-ad-loading")
        },
        t.prototype.endLinearAdMode = function() {
            var e = this,
            t = this.player;
            this.inAdBreak() && (t.removeClass("vjs-ad-loading"), this.resumeContent(t), x.end(t,
            function() {
                e.transitionTo(H)
            }))
        },
        t.prototype.skipLinearAdMode = function() {
            var e = this.player;
            e.ads.inAdBreak() || this.isContentResuming() ? p.log.warn("Unexpected skipLinearAdMode invocation") : (e.ads.debug("Postroll abort (skipLinearAdMode)"), e.trigger("adskip"), this.abort(e))
        },
        t.prototype.onAdTimeout = function(e) {
            e.ads.debug("Postroll abort (adtimeout)"),
            this.abort(e)
        },
        t.prototype.onAdsError = function(e) {
            e.ads.debug("Postroll abort (adserror)"),
            e.ads.inAdBreak() ? e.ads.endLinearAdMode() : this.abort(e)
        },
        t.prototype.onContentChanged = function(e) {
            this.isContentResuming() ? this.transitionTo(U) : this.inAdBreak() || this.transitionTo(O)
        },
        t.prototype.onNoPostroll = function(e) {
            this.isContentResuming() || this.inAdBreak() ? p.log.warn("Unexpected nopostroll event (Postroll)") : this.abort(e)
        },
        t.prototype.resumeContent = function(e) {
            this.contentResuming = !0,
            e.addClass("vjs-ad-content-resuming")
        },
        t.prototype.abort = function(e) {
            this.resumeContent(e),
            e.removeClass("vjs-ad-loading"),
            this.transitionTo(H)
        },
        t.prototype.cleanup = function(e) {
            e.removeClass("vjs-ad-content-resuming"),
            e.clearTimeout(this._postrollTimeout),
            e.ads._contentEnding = !1
        },
        t
    } (E),
    U = function(e) {
        function t() {
            return v(this, t),
            b(this, e.apply(this, arguments))
        }
        return A(t, e),
        t._getName = function() {
            return "BeforePreroll"
        },
        t.prototype.init = function(e) {
            this.adsReady = !1,
            this.shouldResumeToContent = !1,
            e.ads._shouldBlockPlay = !0
        },
        t.prototype.onAdsReady = function(e) {
            e.ads.debug("Received adsready event (BeforePreroll)"),
            this.adsReady = !0
        },
        t.prototype.onPlay = function(e) {
            e.ads.debug("Received play event (BeforePreroll)"),
            this.transitionTo(O, this.adsReady, this.shouldResumeToContent)
        },
        t.prototype.onAdsCanceled = function(e) {
            e.ads.debug("adscanceled (BeforePreroll)"),
            this.shouldResumeToContent = !0
        },
        t.prototype.onAdsError = function() {
            this.player.ads.debug("adserror (BeforePreroll)"),
            this.shouldResumeToContent = !0
        },
        t.prototype.onNoPreroll = function() {
            this.player.ads.debug("Skipping prerolls due to nopreroll event (BeforePreroll)"),
            this.shouldResumeToContent = !0
        },
        t.prototype.skipLinearAdMode = function() {
            var e = this.player;
            e.trigger("adskip"),
            e.ads.debug("skipLinearAdMode (BeforePreroll)"),
            this.shouldResumeToContent = !0
        },
        t.prototype.onContentChanged = function() {
            this.init(this.player)
        },
        t
    } (N),
    V = function(e) {
        function t() {
            return v(this, t),
            b(this, e.apply(this, arguments))
        }
        return A(t, e),
        t._getName = function() {
            return "ContentPlayback"
        },
        t.prototype.init = function(e) {
            e.ads._shouldBlockPlay = !1
        },
        t.prototype.onAdsReady = function(e) {
            e.ads.debug("Received adsready event (ContentPlayback)"),
            e.ads.nopreroll_ || (e.ads.debug("Triggered readyforpreroll event (ContentPlayback)"), e.trigger("readyforpreroll"))
        },
        t.prototype.onReadyForPostroll = function(e) {
            e.ads.debug("Received readyforpostroll event"),
            this.transitionTo(F)
        },
        t.prototype.startLinearAdMode = function() {
            this.transitionTo(D)
        },
        t
    } (N),
    H = function(e) {
        function t() {
            return v(this, t),
            b(this, e.apply(this, arguments))
        }
        return A(t, e),
        t._getName = function() {
            return "AdsDone"
        },
        t.prototype.init = function(e) {
            e.ads._contentHasEnded = !0,
            e.trigger("ended")
        },
        t.prototype.startLinearAdMode = function() {
            p.log.warn("Unexpected startLinearAdMode invocation (AdsDone)")
        },
        t
    } (N),
    q = function(e) {
        function t() {
            return v(this, t),
            b(this, e.apply(this, arguments))
        }
        return A(t, e),
        t._getName = function() {
            return "StitchedAdRoll"
        },
        t.prototype.init = function() {
            this.waitingForAdBreak = !1,
            this.contentResuming = !1,
            this.player.ads.adType = "stitched",
            x.start(this.player)
        },
        t.prototype.onPlaying = function() {},
        t.prototype.onContentResumed = function() {},
        t.prototype.onAdEnded = function() {
            this.endLinearAdMode(),
            this.player.trigger("ended")
        },
        t.prototype.endLinearAdMode = function() {
            x.end(this.player),
            this.transitionTo(z)
        },
        t
    } (E),
    z = function(e) {
        function t() {
            return v(this, t),
            b(this, e.apply(this, arguments))
        }
        return A(t, e),
        t._getName = function() {
            return "StitchedContentPlayback"
        },
        t.prototype.init = function() {
            this.player.ads._shouldBlockPlay = !1
        },
        t.prototype.onContentChanged = function() {
            this.player.ads.debug("Received contentchanged event (" + this._getName() + ")")
        },
        t.prototype.startLinearAdMode = function() {
            this.transitionTo(q)
        },
        t
    } (N),
    W = S.isMiddlewareMediatorSupported,
    $ = p.getTech("Html5").Events,
    G = {
        timeout: 5e3,
        prerollTimeout: undefined,
        postrollTimeout: undefined,
        debug: !1,
        stitchedAds: !1,
        contentIsLive: undefined,
        liveCuePoints: !0
    },
    X = function X(e) {
        var o = this,
        t = p.mergeOptions(G, e),
        n = $.concat(["firstplay", "loadedalldata", "playing"]);
        o.on(n, c),
        W() ||
        function i(e, t) {
            t && p.log("Using cancelContentPlay to block content playback"),
            e.on("play", w)
        } (o, t.debug),
        o.setTimeout(function() {
            o.ads._hasThereBeenALoadStartDuringPlayerLife || "" === o.src() || p.log.error("videojs-contrib-ads has not seen a loadstart event 5 seconds after being initialized, but a source is present. This indicates that videojs-contrib-ads was initialized too late. It must be initialized immediately after video.js in the same tick. As a result, some ads will not play and some media events will be incorrect. For more information, see http://videojs.github.io/videojs-contrib-ads/integrator/getting-started.html")
        },
        5e3),
        o.on("ended",
        function() {
            o.hasClass("vjs-has-started") || o.addClass("vjs-has-started")
        }),
        o.on("contenttimeupdate",
        function() {
            o.removeClass("vjs-waiting")
        }),
        o.on(["addurationchange", "adcanplay"],
        function() {
            if ((!o.ads.snapshot || o.currentSrc() !== o.ads.snapshot.currentSrc) && o.ads.inAdBreak()) {
                var e = o.play();
                e && e["catch"] && e["catch"](function(e) {
                    p.log.warn("url promise rejected when playing ad", e)
                })
            }
        }),
        o.on("nopreroll",
        function() {
            o.ads.debug("Received nopreroll event"),
            o.ads.nopreroll_ = !0
        }),
        o.on("nopostroll",
        function() {
            o.ads.debug("Received nopostroll event"),
            o.ads.nopostroll_ = !0
        }),
        o.on("playing",
        function() {
            o.ads._cancelledPlay = !1,
            o.ads._pausedOnContentupdate = !1
        }),
        o.on("play",
        function() {
            o.ads._playRequested = !0
        }),
        o.one("loadstart",
        function() {
            o.ads._hasThereBeenALoadStartDuringPlayerLife = !0
        }),
        o.on("loadeddata",
        function() {
            o.ads._hasThereBeenALoadedData = !0
        }),
        o.on("loadedmetadata",
        function() {
            o.ads._hasThereBeenALoadedMetaData = !0
        }),
        o.ads = function s(n) {
            return {
                disableNextSnapshotRestore: !1,
                _contentEnding: !1,
                _contentHasEnded: !1,
                _hasThereBeenALoadStartDuringPlayerLife: !1,
                _hasThereBeenALoadedData: !1,
                _hasThereBeenALoadedMetaData: !1,
                _inLinearAdMode: !1,
                _shouldBlockPlay: !1,
                _playBlocked: !1,
                _playRequested: !1,
                adType: null,
                VERSION: l,
                reset: function() {
                    n.ads.disableNextSnapshotRestore = !1,
                    n.ads._contentEnding = !1,
                    n.ads._contentHasEnded = !1,
                    n.ads.snapshot = null,
                    n.ads.adType = null,
                    n.ads._hasThereBeenALoadedData = !1,
                    n.ads._hasThereBeenALoadedMetaData = !1,
                    n.ads._cancelledPlay = !1,
                    n.ads._shouldBlockPlay = !1,
                    n.ads._playBlocked = !1,
                    n.ads.nopreroll_ = !1,
                    n.ads.nopostroll_ = !1,
                    n.ads._playRequested = !1
                },
                startLinearAdMode: function() {
                    n.ads._state.startLinearAdMode()
                },
                endLinearAdMode: function() {
                    n.ads._state.endLinearAdMode()
                },
                skipLinearAdMode: function() {
                    n.ads._state.skipLinearAdMode()
                },
                stitchedAds: function(e) {
                    return e !== undefined && (p.log.warn("Using player.ads.stitchedAds() as a setter is deprecated, it should be set as an option upon initialization of contrib-ads."), this.settings.stitchedAds = !!e),
                    this.settings.stitchedAds
                },
                videoElementRecycled: function() {
                    if (n.ads.shouldPlayContentBehindAd(n)) return ! 1;
                    if (!this.snapshot) throw new Error("You cannot use videoElementRecycled while there is no snapshot.");
                    var e = n.tech_.src() !== this.snapshot.src,
                    t = n.currentSrc() !== this.snapshot.currentSrc;
                    return e || t
                },
                isLive: function() {
                    var e = 0 < arguments.length && arguments[0] !== undefined ? arguments[0] : n;
                    return "boolean" == typeof e.ads.settings.contentIsLive ? e.ads.settings.contentIsLive: e.duration() === Infinity || "8" === p.browser.IOS_VERSION && 0 === e.duration()
                },
                shouldPlayContentBehindAd: function() {
                    var e = 0 < arguments.length && arguments[0] !== undefined ? arguments[0] : n;
                    if (e) return !! e.ads.settings.liveCuePoints && !p.browser.IS_IOS && !p.browser.IS_ANDROID && e.duration() === Infinity;
                    throw new Error("shouldPlayContentBehindAd requires a player as a param")
                },
                shouldTakeSnapshots: function() {
                    var e = 0 < arguments.length && arguments[0] !== undefined ? arguments[0] : n;
                    return ! this.shouldPlayContentBehindAd(e) && !this.stitchedAds()
                },
                isInAdMode: function() {
                    return this._state.isAdState()
                },
                isWaitingForAdBreak: function() {
                    return this._state.isWaitingForAdBreak()
                },
                isContentResuming: function() {
                    return this._state.isContentResuming()
                },
                isAdPlaying: function() {
                    return this._state.inAdBreak()
                },
                inAdBreak: function() {
                    return this._state.inAdBreak()
                },
                removeNativePoster: function() {
                    var e = n.$(".vjs-tech");
                    e && e.removeAttribute("poster")
                },
                debug: function() {
                    if (this.settings.debug) {
                        for (var e = arguments.length,
                        t = Array(e), n = 0; n < e; n++) t[n] = arguments[n];
                        1 === t.length && "string" == typeof t[0] ? p.log("ADS: " + t[0]) : p.log.apply(p, ["ADS:"].concat(t))
                    }
                }
            }
        } (o),
        (o.ads.settings = t).stitchedAds = !!t.stitchedAds,
        t.stitchedAds ? o.ads._state = new z(o) : o.ads._state = new U(o),
        o.ads._state.init(o),
        o.ads.cueTextTracks = T,
        o.ads.adMacroReplacement = function u(e, s, t) {
            var n = this,
            d = {};
            e = e.replace(/{([^}=]+)=([^}]+)}/g,
            function(e, t, n) {
                return d["{" + t + "}"] = n,
                "{" + t + "}"
            }),
            s === undefined && (s = !1);
            var o = {};
            for (var r in t !== undefined && (o = t), o["{player.id}"] = this.options_["data-player"], o["{mediainfo.id}"] = this.mediainfo ? this.mediainfo.id: "", o["{mediainfo.name}"] = this.mediainfo ? this.mediainfo.name: "", o["{mediainfo.duration}"] = this.mediainfo ? this.mediainfo.duration: "", o["{player.duration}"] = this.duration(), o["{timestamp}"] = (new Date).getTime(), o["{document.referrer}"] = g.referrer, o["{window.location.href}"] = f.location.href, o["{random}"] = Math.floor(1e12 * Math.random()), ["description", "tags", "reference_id", "ad_keys"].forEach(function(e) {
                n.mediainfo && n.mediainfo[e] ? o["{mediainfo." + e + "}"] = n.mediainfo[e] : d["{mediainfo." + e + "}"] ? o["{mediainfo." + e + "}"] = d["{mediainfo." + e + "}"] : o["{mediainfo." + e + "}"] = ""
            }), k(this.mediainfo, o, "custom_fields"), k(this.mediainfo, o, "customFields"), o) e = e.split(r).join(_(o[r], s));
            for (var a in e = e.replace(/{pageVariable\.([^}]+)}/g,
            function(e, t) {
                for (var n = void 0,
                o = f,
                r = t.split("."), a = 0; a < r.length; a++) a === r.length - 1 ? n = o[r[a]] : o = o[r[a]];
                var i = void 0 === n ? "undefined": m(n);
                return null === n ? "null": n === undefined ? d["{pageVariable." + t + "}"] ? d["{pageVariable." + t + "}"] : (p.log.warn('Page variable "' + t + '" not found'), "") : "string" !== i && "number" !== i && "boolean" !== i ? (p.log.warn('Page variable "' + t + '" is not a supported type'), "") : _(String(n), s)
            }), d) e = e.replace(a, d[a]);
            return e
        }.bind(o),
        function d(t) {
            t.ads.contentSrc = t.currentSrc(),
            t.ads._seenInitialLoadstart = !1;
            var n = function n() {
                if (!t.ads.inAdBreak()) {
                    var e = t.currentSrc();
                    e !== t.ads.contentSrc && (t.ads._seenInitialLoadstart && t.trigger({
                        type: "contentchanged"
                    }), t.trigger({
                        type: "contentupdate",
                        oldValue: t.ads.contentSrc,
                        newValue: e
                    }), t.ads.contentSrc = e),
                    t.ads._seenInitialLoadstart = !0
                }
            };
            t.on("loadstart", n)
        } (o),
        o.on("contentchanged", o.ads.reset);
        var r = function r() {
            return ! o.ads.shouldPlayContentBehindAd(o) && o.ads.inAdBreak() && o.tech_.featuresNativeTextTracks && p.browser.IS_IOS && !Array.isArray(o.textTracks())
        },
        a = function a() {
            var e = o.textTracks();
            if (r()) for (var t = 0; t < e.length; t++) {
                var n = e[t];
                "showing" === n.mode && (n.mode = "disabled")
            }
        };
        o.ready(function() {
            o.textTracks().addEventListener("change", a)
        }),
        o.on(["play", "playing", "ended", "adsready", "adscanceled", "adskip", "adserror", "adtimeout", "adended", "ads-ad-started", "contentchanged", "dispose", "contentresumed", "readyforpostroll", "nopreroll", "nopostroll"],
        function(e) {
            o.ads._state.handleEvent(e.type)
        }),
        o.on("dispose",
        function() {
            o.ads.reset(),
            o.textTracks().removeEventListener("change", a)
        })
    };
    return X.VERSION = l,
    function K(e) {
        return ! M(p) && ((p.registerPlugin || p.plugin)("ads", e), B() && !p.usingContribAdsMiddleware_ && (p.use("*", L), p.usingContribAdsMiddleware_ = !0, p.log("url middleware has been registered with videojs")), !0)
    } (X),
    X
});
