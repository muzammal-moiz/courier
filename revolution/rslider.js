/* Slider 1*/
var	tpj = jQuery;
	if(window.RS_MODULES === undefined) window.RS_MODULES = {};
	if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
	RS_MODULES.modules["revslider41"] = {once: RS_MODULES.modules["revslider41"]!==undefined ? RS_MODULES.modules["revslider41"].once : undefined, init:function() {
		window.revapi4 = window.revapi4===undefined || window.revapi4===null || window.revapi4.length===0  ? document.getElementById("rev_slider_4_1") : window.revapi4;
		if(window.revapi4 === null || window.revapi4 === undefined || window.revapi4.length==0) { window.revapi4initTry = window.revapi4initTry ===undefined ? 0 : window.revapi4initTry+1; if (window.revapi4initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider41"].init()}); return;}
		window.revapi4 = jQuery(window.revapi4);
		if(window.revapi4.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_4_1"); return;}
		revapi4.revolutionInit({
				revapi:"revapi4",
				DPR:"dpr",
				sliderLayout:"fullwidth",
				visibilityLevels:"1240,1024,778,480",
				gridwidth:"1170,1024,778,480",
				gridheight:"1000,890,750,560",
				perspective:600,
				perspectiveType:"global",
				editorheight:"1000,890,750,560",
				responsiveLevels:"1240,1024,778,480",
				progressBar:{disableProgressBar:true},
				navigation: {
					wheelCallDelay:1000,
					onHoverStop:false,
					arrows: {
						enable:true,
						style:"custom",
						hide_onmobile:true,
						hide_under:"1200px",
						left: {
							h_offset:75,
							v_offset:-30
						},
						right: {
							h_offset:75,
							v_offset:-30
						}
					}
				},
				viewPort: {
					global:false,
					globalDist:"-200px",
					enable:false
				},
				fallbacks: {
					allowHTML5AutoPlayOnAndroid:true
				},
		});
		
	}} // End of RevInitScript
	if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
/* Slider 2*/ 
var	tpj = jQuery;
	if(window.RS_MODULES === undefined) window.RS_MODULES = {};
	if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
	RS_MODULES.modules["revslider21"] = {once: RS_MODULES.modules["revslider21"]!==undefined ? RS_MODULES.modules["revslider21"].once : undefined, init:function() {
		window.revapi2 = window.revapi2===undefined || window.revapi2===null || window.revapi2.length===0  ? document.getElementById("rev_slider_2_1") : window.revapi2;
		if(window.revapi2 === null || window.revapi2 === undefined || window.revapi2.length==0) { window.revapi2initTry = window.revapi2initTry ===undefined ? 0 : window.revapi2initTry+1; if (window.revapi2initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider21"].init()}); return;}
		window.revapi2 = jQuery(window.revapi2);
		if(window.revapi2.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_2_1"); return;}
		revapi2.revolutionInit({
				revapi:"revapi2",
				DPR:"dpr",
				sliderLayout:"fullwidth",
				visibilityLevels:"1240,1024,778,480",
				gridwidth:"1170,1024,778,480",
				gridheight:"895,700,500,350",
				lazyType:"smart",
				perspective:600,
				perspectiveType:"global",
				editorheight:"895,700,500,350",
				responsiveLevels:"1240,1024,778,480",
				progressBar:{disableProgressBar:true},
				navigation: {
					wheelCallDelay:1000,
					onHoverStop:false,
					arrows: {
						enable:true,
						style:"hephaistos",
						hide_onmobile:true,
						hide_under:"991px",
						left: {
							h_offset:50,
							v_offset:-10
						},
						right: {
							h_align:"left",
							h_offset:50,
							v_offset:-80
						}
					}
				},
				viewPort: {
					global:true,
					globalDist:"-200px",
					enable:false
				},
				fallbacks: {
					allowHTML5AutoPlayOnAndroid:true
				},
		});
		
	}} // End of RevInitScript
	if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
/* Slider 3*/
var	tpj = jQuery;
	if(window.RS_MODULES === undefined) window.RS_MODULES = {};
	if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
	RS_MODULES.modules["revslider31"] = {once: RS_MODULES.modules["revslider31"]!==undefined ? RS_MODULES.modules["revslider31"].once : undefined, init:function() {
		window.revapi3 = window.revapi3===undefined || window.revapi3===null || window.revapi3.length===0  ? document.getElementById("rev_slider_3_1") : window.revapi3;
		if(window.revapi3 === null || window.revapi3 === undefined || window.revapi3.length==0) { window.revapi3initTry = window.revapi3initTry ===undefined ? 0 : window.revapi3initTry+1; if (window.revapi3initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider31"].init()}); return;}
		window.revapi3 = jQuery(window.revapi3);
		if(window.revapi3.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_3_1"); return;}
		revapi3.revolutionInit({
				revapi:"revapi3",
				DPR:"dpr",
				sliderLayout:"fullwidth",
				visibilityLevels:"1240,1024,778,480",
				gridwidth:"1170,1024,778,480",
				gridheight:"1022,700,600,450",
				lazyType:"smart",
				perspective:600,
				perspectiveType:"global",
				editorheight:"1022,700,600,450",
				responsiveLevels:"1240,1024,778,480",
				progressBar:{disableProgressBar:true},
				navigation: {
					wheelCallDelay:1000,
					onHoverStop:false,
					arrows: {
						enable:true,
						style:"hephaistos",
						hide_onmobile:true,
						hide_under:"991px",
						left: {
							h_align:"right",
							h_offset:220,
							v_offset:-35
						},
						right: {
							h_offset:220,
							v_offset:35
						}
					}
				},
				viewPort: {
					global:true,
					globalDist:"-200px",
					enable:false
				},
				fallbacks: {
					allowHTML5AutoPlayOnAndroid:true
				},
		});
		
	}} // End of RevInitScript
	if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};