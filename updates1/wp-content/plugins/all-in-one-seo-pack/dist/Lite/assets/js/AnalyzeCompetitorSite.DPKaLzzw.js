import{q as O,a as I,u as w,r as R,p as b,f as L}from"./links.w575jfOL.js";import"./default-i18n.DXRQgkn2.js";import{u as C,S as A}from"./SeoSiteScore.BuYa7vHb.js";import{_ as k}from"./_plugin-vue_export-helper.BN1snXvA.js";import{o as N}from"./helpers.CXsRrhc8.js";import{C as B,a as D}from"./Score.Cf_GO_Uf.js";import{p as M}from"./popup.6pJEdp0g.js";import{v as l,o as c,c as p,C as m,l as h,k as z,m as v,q as P,a as i,t as a,E as V,x as g,b as d,F as W,J as j}from"./runtime-dom.esm-bundler.CWn9hmRK.js";import{C as q}from"./Blur.DIwtbD0z.js";import{C as T}from"./Card.DcyLIJc9.js";import{C as H}from"./SeoSiteAnalysisResults.BG9Qcun3.js";import{C as G}from"./Index.CgrUKKSV.js";import{S as F}from"./Refresh.Bif43d9U.js";import{S as J}from"./index.vo0_cz49.js";import"./params.B3T1WKlC.js";import"./Tooltip.u2Cos2P_.js";import"./Caret.B8YmKvEY.js";import"./Slide.DwUOEoDg.js";import"./Tags.BU74BX7Y.js";import"./postSlug.DR-r-K_I.js";import"./metabox.C_lvn8R-.js";import"./cleanForSlug.BVGRQ_59.js";import"./toString.zLSwYOtv.js";import"./_baseTrim.BYZhh0MR.js";import"./_stringToArray.DnK4tKcY.js";import"./_baseSet.rYV3oc6X.js";import"./GoogleSearchPreview.BT7aiH-w.js";import"./constants.Ct0G2N2t.js";import"./Information.DOYCSlH5.js";import"./Gear.BX0imWnw.js";const Y={setup(){const{strings:e}=C();return{connectStore:O(),optionsStore:I(),rootStore:w(),strings:e}},components:{CoreBlur:q,CoreCard:T},mixins:[A],data(){return{score:0}},methods:{openPopup(e){M(e,this.connectWithAioseo,600,630,!0,["token"],this.completedCallback,()=>{})},completedCallback(e){return this.connectStore.saveConnectToken(e.token)}}},K={key:0,class:"aioseo-seo-site-score-cta"};function Q(e,s,r,o,t,n){const _=l("core-card");return c(),p("div",null,[m(_,{slug:"analyzeNewCompetitor","hide-header":"","no-slide":"",toggles:!1},{default:h(()=>[(c(),z(P(o.optionsStore.internalOptions.internal.siteAnalysis.connectToken?"div":"core-blur"),null,{default:h(()=>[v(e.$slots,"default")]),_:3})),o.optionsStore.internalOptions.internal.siteAnalysis.connectToken?d("",!0):(c(),p("div",K,[i("a",{href:"#",onClick:s[0]||(s[0]=V(S=>n.openPopup(o.rootStore.aioseo.urls.connect),["prevent"]))},a(e.connectWithAioseo),1),g(" "+a(o.strings.toAnalyzeCompetitorSite),1)]))]),_:3}),o.optionsStore.internalOptions.internal.siteAnalysis.connectToken?v(e.$slots,"competitor-results",{key:0}):d("",!0)])}const X=k(Y,[["render",Q]]),Z={setup(){const{strings:e}=C();return{analyzerStore:R(),composableStrings:e}},components:{CoreSiteScore:G,SvgRefresh:F},mixins:[A],props:{score:Number,loading:Boolean,site:{type:String,required:!0},summary:{type:Object,default(){return{}}},mobileSnapshot:String},data(){return{isAnalyzing:!1,strings:b(this.composableStrings,{criticalIssues:this.$t.__("Important Issues",this.$td),warnings:this.$t.__("Warnings",this.$td),recommendedImprovements:this.$t.__("Recommended Improvements",this.$td),goodResults:this.$t.__("Good Results",this.$td),completeSiteAuditChecklist:this.$t.__("Complete Site Audit Checklist",this.$td),refreshResults:this.$t.__("Refresh Results",this.$td),mobileSnapshot:this.$t.__("Mobile Snapshot",this.$td)})}},methods:{refresh(){this.isAnalyzing=!0,this.analyzerStore.runSiteAnalyzer({url:this.site,refresh:!0}).then(()=>this.isAnalyzing=!1)}}},ee={class:"aioseo-site-score-competitor"},te={class:"aioseo-seo-site-score-score"},se={class:"aioseo-seo-site-score-recommendations"},oe={class:"critical"},re={class:"round red"},ie={class:"recommended"},ne={class:"round blue"},ae={class:"good"},le={class:"round green"},ce={key:0,class:"mobile-snapshot"},me=["src"];function he(e,s,r,o,t,n){const _=l("core-site-score"),S=l("svg-refresh"),f=l("base-button");return c(),p("div",ee,[i("div",te,[m(_,{loading:t.isAnalyzing||r.loading,score:r.score,description:e.description},null,8,["loading","score","description"])]),i("div",se,[i("div",oe,[i("span",re,a(r.summary.critical||0),1),g(" "+a(t.strings.criticalIssues),1)]),i("div",ie,[i("span",ne,a(r.summary.recommended||0),1),g(" "+a(t.strings.recommendedImprovements),1)]),i("div",ae,[i("span",le,a(r.summary.good||0),1),g(" "+a(t.strings.goodResults),1)])]),m(f,{class:"refresh-results",type:"gray",size:"small",onClick:n.refresh,loading:t.isAnalyzing},{default:h(()=>[m(S),g(" "+a(t.strings.refreshResults),1)]),_:1},8,["onClick","loading"]),r.mobileSnapshot?(c(),p("div",ce,[i("div",null,a(t.strings.mobileSnapshot),1),i("img",{alt:"Mobile Snapshot",src:r.mobileSnapshot},null,8,me)])):d("",!0)])}const pe=k(Z,[["render",he]]),ue={setup(){const{strings:e}=C();return{analyzerStore:R(),settingsStore:L(),composableStrings:e}},components:{CoreAnalyze:B,CoreAnalyzeScore:D,CoreAnalyzeCompetitorSiteHeader:X,CoreCard:T,CoreSeoSiteAnalysisResults:H,CoreSiteScoreCompetitor:pe,SvgTrash:J},mixins:[A],data(){return{score:0,competitorUrl:null,isAnalyzing:!1,inputError:!1,competitorResults:{},analyzeTime:8,strings:b(this.composableStrings,{enterCompetitorUrl:this.$t.__("Enter Competitor URL",this.$td),performInDepthAnalysis:this.$t.__("Perform in-depth SEO Analysis of your competitor's website.",this.$td),analyze:this.$t.__("Analyze",this.$td),pleaseEnterValidUrl:this.$t.__("Please enter a valid URL.",this.$td)})}},watch:{"analyzerStore.analyzeError"(e){e&&(this.isAnalyzing=!1)}},computed:{getError(){switch(this.analyzerStore.analyzeError){case"invalid-url":return this.$t.__("The URL provided is invalid.",this.$td);case"missing-content":return this.$t.sprintf("%1$s %2$s",this.$t.__("We were unable to parse the content for this site.",this.$td),this.$links.getDocLink(this.$constants.GLOBAL_STRINGS.learnMore,"seoAnalyzerIssues",!0));case"invalid-token":return this.$t.sprintf(this.$t.__("Your site is not connected. Please connect to %1$s, then try again.",this.$td),"AIOSEO")}return this.analyzerStore.analyzeError}},methods:{parseResults(e){return JSON.parse(e)},getSummary(e){return{recommended:this.analyzerStore.recommendedCount(e),critical:this.analyzerStore.criticalCount(e),good:this.analyzerStore.goodCount(e)}},startAnalyzing(e){if(this.inputError=!1,this.competitorUrl=e,!this.competitorUrl.startsWith("http://")&&!this.competitorUrl.startsWith("https")&&(this.competitorUrl="https://"+this.competitorUrl),!N(this.competitorUrl)){this.inputError=!0;return}this.analyzerStore.analyzing=!0,this.analyzerStore.analyzeError=!1,this.analyzerStore.runSiteAnalyzer({url:this.competitorUrl}),this.isAnalyzing=!0,setTimeout(this.checkStatus,this.analyzeTime*1e3),this.closeAllCards()},checkStatus(){if(this.isAnalyzing=!1,this.analyzerStore.analyzing){this.$nextTick(()=>{this.isAnalyzing=!0,2>this.analyzeTime&&(this.analyzeTime=8),this.analyzeTime=this.analyzeTime/2,setTimeout(this.checkStatus,this.analyzeTime*1e3)});return}this.$nextTick(()=>{this.competitorResults=this.analyzerStore.getCompetitorSiteAnalysisResults;const e=Object.keys(this.competitorResults),s=document.querySelector(".aioseo-header"),r=s.offsetHeight+s.offsetTop+30,o=e.indexOf(this.competitorUrl)===-1?0:e.indexOf(this.competitorUrl);this.toggleCard(o),this.$scrollTo("#aioseo-competitor-results"+this.hashCode(e[o]),{offset:-r}),this.competitorUrl=null})},startDeleteSite(e){this.closeAllCards(),delete this.competitorResults[e],this.analyzerStore.deleteCompetitorSite(e).then(()=>{this.competitorResults=this.analyzerStore.getCompetitorSiteAnalysisResults})},closeAllCards(){Object.keys(this.competitorResults).forEach(s=>{this.settingsStore.closeCard("analyzeCompetitorSite"+s)})},toggleCard(e){const s=Object.keys(this.competitorResults);this.settingsStore.toggleCard({slug:"analyzeCompetitorSite"+s[e]})},hashCode(e){if(!e)return;let s=0,r,o;for(r=0;r<e.length;r++)o=e.charCodeAt(r),s=(s<<5)-s+o,s|=0;return s}},mounted(){this.analyzerStore.analyzeError=!1,this.competitorResults=this.analyzerStore.getCompetitorSiteAnalysisResults,this.toggleCard(0)}},de={class:"aioseo-analyze-competitor-site"},_e={key:0,class:"aioseo-description aioseo-error"},ye=["innerHTML"],ge={class:"competitor-results-main"},Se={class:"competitor-results-body"};function fe(e,s,r,o,t,n){const _=l("core-analyze"),S=l("core-analyze-score"),f=l("svg-trash"),E=l("core-site-score-competitor"),$=l("core-seo-site-analysis-results"),U=l("core-card"),x=l("core-analyze-competitor-site-header");return c(),p("div",de,[m(x,null,{"competitor-results":h(()=>[(c(!0),p(W,null,j(t.competitorResults,(y,u)=>(c(),z(U,{key:u,id:"aioseo-competitor-results"+n.hashCode(u),slug:"analyzeCompetitorSite"+u,"save-toggle-status":!1},{header:h(()=>[m(S,{score:n.parseResults(y).score},null,8,["score"]),i("span",null,a(u),1),t.isAnalyzing?d("",!0):(c(),z(f,{key:0,onClick:ze=>n.startDeleteSite(u)},null,8,["onClick"]))]),default:h(()=>[i("div",ge,[m(E,{site:u,score:n.parseResults(y).score,loading:o.analyzerStore.analyzing,summary:n.getSummary(n.parseResults(y).results),"mobile-snapshot":n.parseResults(y).results.advanced.mobileSnapshot},null,8,["site","score","loading","summary","mobile-snapshot"]),i("div",Se,[m($,{section:"all-items","all-results":n.parseResults(y).results,"show-google-preview":""},null,8,["all-results"])])])]),_:2},1032,["id","slug"]))),128))]),default:h(()=>[m(_,{header:t.strings.enterCompetitorUrl,description:t.strings.performInDepthAnalysis,inputError:t.inputError,isAnalyzing:t.isAnalyzing,analyzeTime:t.analyzeTime,placeholder:"https://competitorwebsite.com",onStartAnalyzing:n.startAnalyzing},{errors:h(()=>[t.inputError?(c(),p("div",_e,a(t.strings.pleaseEnterValidUrl),1)):d("",!0),o.analyzerStore.analyzer==="competitor-site"&&o.analyzerStore.analyzeError?(c(),p("div",{key:1,class:"analyze-errors aioseo-description aioseo-error",innerHTML:o.analyzerStore.analyzeError},null,8,ye)):d("",!0)]),_:1},8,["header","description","inputError","isAnalyzing","analyzeTime","onStartAnalyzing"])]),_:1})])}const Qe=k(ue,[["render",fe]]);export{Qe as default};
