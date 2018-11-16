<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Building;

use App\Thing;

use App\Tag;

use Rss;

use DOMDocument;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /*
    public function __construct()
    {
        $this->middleware('auth');
    }

    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Building $bl, Tag $tl)
    {

        $b4 = $bl->where('status', 1)->orderBy('price', 'asc')->paginate(18);

        $t4 = $tl->all();

        return view('welcome', compact('b4', 't4'));
        

        //return  Thing::active('t-shirts')->renderAsHtml();
    }

    public function about()
    {


        return view('website.about');
        

        //return  Thing::active('t-shirts')->renderAsHtml();
    }

    public function rss(Rss $rss, Building $rssBuild){
        

        $feed = Rss::feed('2.0', 'UTF-8');
        $feed->channel([
            'title'       => getSetting('site-name'),
            'description' => getSetting('description'),
            'link'        => route('home')
        ]);

        $allRssBuilding = $rssBuild->where('status', 1)->orderBy('id', 'desc')->get();
        
        foreach ( $allRssBuilding as $rssBuilding ) {
            $feed->item([
                'title' => $rssBuilding->name,
                'description|cdata' => $rssBuilding->largDisc,
                'link' => route('buildings.show', $rssBuilding->id )
            ]);
        }

        //$feed->save('test.xml');

        return response($feed, 200)->header('Content-Type', 'text/xml');
        

        //return  Thing::active('t-shirts')->renderAsHtml();


    }

    public function test()
    {

        $matches = array();

        $newMatches = array();

        $newSQL = "";

$str = <<<EOD

<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8"/>
      <title>List of auto parts - Wikipedia</title>
      <script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
      <script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"List_of_auto_parts","wgTitle":"List of auto parts","wgCurRevisionId":786468536,"wgRevisionId":786468536,"wgArticleId":2938583,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":["Auto parts","Automobile-related lists","Lists of parts"],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"List_of_auto_parts","wgRelevantArticleId":2938583,"wgRequestId":"WVNLLQpAMFoAAEAaZ9wAAAAR","wgIsProbablyEditable":true,"wgRelevantPageIsProbablyEditable":true,"wgRestrictionEdit":[],"wgRestrictionMove":[],"wgFlaggedRevsParams":{"tags":{}},"wgStableRevisionId":null,"wgWikiEditorEnabledModules":{"toolbar":true,"preview":false,"publish":false},"wgBetaFeaturesFeatures":[],"wgMediaViewerOnClick":true,"wgMediaViewerEnabledByDefault":false,"wgPopupsShouldSendModuleToUser":false,"wgPopupsConflictsWithNavPopupGadget":false,"wgVisualEditor":{"pageLanguageCode":"en","pageLanguageDir":"ltr","usePageImages":true,"usePageDescriptions":true},"wgPreferredVariant":"en","wgMFExpandAllSectionsUserOption":false,"wgMFDisplayWikibaseDescriptions":{"search":true,"nearby":true,"watchlist":true,"tagline":false},"wgRelatedArticles":null,"wgRelatedArticlesUseCirrusSearch":true,"wgRelatedArticlesOnlyUseCirrusSearch":false,"wgULSCurrentAutonym":"English","wgNoticeProject":"wikipedia","wgCentralNoticeCookiesToDelete":[],"wgCentralNoticeCategoriesUsingLegacy":["Fundraising","fundraising"],"wgCategoryTreePageCategoryOptions":"{\"mode\":0,\"hideprefix\":20,\"showcount\":true,\"namespaces\":false}","wgWikibaseItemId":"Q6405028","wgCentralAuthMobileDomain":false,"wgVisualEditorToolbarScrollOffset":0,"wgVisualEditorUnsupportedEditParams":["preload","preloadparams","preloadtitle","undo","undoafter","veswitched"],"wgEditSubmitButtonLabelPublish":false});mw.loader.state({"ext.globalCssJs.user.styles":"ready","ext.globalCssJs.site.styles":"ready","site.styles":"ready","noscript":"ready","user.styles":"ready","user":"ready","user.options":"loading","user.tokens":"loading","wikibase.client.init":"ready","ext.visualEditor.desktopArticleTarget.noscript":"ready","ext.uls.interlanguage":"ready","ext.wikimediaBadges":"ready","mediawiki.legacy.shared":"ready","mediawiki.legacy.commonPrint":"ready","mediawiki.sectionAnchor":"ready","mediawiki.skinning.interface":"ready","skins.vector.styles":"ready","ext.globalCssJs.user":"ready","ext.globalCssJs.site":"ready"});mw.loader.implement("user.options@0gii3s4",function($,jQuery,require,module){mw.user.options.set([]);});mw.loader.implement("user.tokens@1dqfd7l",function ( $, jQuery, require, module ) {
         mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});/*@nomin*/;
         
         });mw.loader.load(["site","mediawiki.page.startup","mediawiki.user","mediawiki.hidpi","mediawiki.page.ready","mediawiki.toc","mediawiki.searchSuggest","ext.gadget.teahouse","ext.gadget.ReferenceTooltips","ext.gadget.watchlist-notice","ext.gadget.DRN-wizard","ext.gadget.charinsert","ext.gadget.refToolbar","ext.gadget.extra-toolbar-buttons","ext.gadget.switcher","ext.gadget.featured-articles-links","ext.centralauth.centralautologin","ext.visualEditor.desktopArticleTarget.init","ext.visualEditor.targetLoader","ext.eventLogging.subscriber","ext.wikimediaEvents","ext.navigationTiming","ext.uls.eventlogger","ext.uls.init","ext.uls.interface","ext.quicksurveys.init","ext.centralNotice.geoIP","ext.centralNotice.startUp","skins.vector.js"]);});
      </script>
      <link rel="stylesheet" href="/w/load.php?debug=false&amp;lang=en&amp;modules=ext.uls.interlanguage%7Cext.visualEditor.desktopArticleTarget.noscript%7Cext.wikimediaBadges%7Cmediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.sectionAnchor%7Cmediawiki.skinning.interface%7Cskins.vector.styles%7Cwikibase.client.init&amp;only=styles&amp;skin=vector"/>
      <script async="" src="/w/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;skin=vector"></script>
      <meta name="ResourceLoaderDynamicStyles" content=""/>
      <link rel="stylesheet" href="/w/load.php?debug=false&amp;lang=en&amp;modules=site.styles&amp;only=styles&amp;skin=vector"/>
      <meta name="generator" content="MediaWiki 1.30.0-wmf.6"/>
      <meta name="referrer" content="origin-when-cross-origin"/>
      <link rel="alternate" href="android-app://org.wikipedia/http/en.m.wikipedia.org/wiki/List_of_auto_parts"/>
      <link rel="alternate" type="application/x-wiki" title="Edit this page" href="/w/index.php?title=List_of_auto_parts&amp;action=edit"/>
      <link rel="edit" title="Edit this page" href="/w/index.php?title=List_of_auto_parts&amp;action=edit"/>
      <link rel="apple-touch-icon" href="/static/apple-touch/wikipedia.png"/>
      <link rel="shortcut icon" href="/static/favicon/wikipedia.ico"/>
      <link rel="search" type="application/opensearchdescription+xml" href="/w/opensearch_desc.php" title="Wikipedia (en)"/>
      <link rel="EditURI" type="application/rsd+xml" href="//en.wikipedia.org/w/api.php?action=rsd"/>
      <link rel="copyright" href="//creativecommons.org/licenses/by-sa/3.0/"/>
      <link rel="canonical" href="https://en.wikipedia.org/wiki/List_of_auto_parts"/>
      <link rel="dns-prefetch" href="//login.wikimedia.org"/>
      <link rel="dns-prefetch" href="//meta.wikimedia.org" />
   </head>
   <body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject page-List_of_auto_parts rootpage-List_of_auto_parts skin-vector action-view">
      <div id="mw-page-base" class="noprint"></div>
      <div id="mw-head-base" class="noprint"></div>
      <div id="content" class="mw-body" role="main">
         <a id="top"></a>
         <div id="siteNotice" class="mw-body-content">
            <!-- CentralNotice -->
         </div>
         <div class="mw-indicators mw-body-content"></div>
         <h1 id="firstHeading" class="firstHeading" lang="en">List of auto parts</h1>
         <div id="bodyContent" class="mw-body-content">
            <div id="siteSub">From Wikipedia, the free encyclopedia</div>
            <div id="contentSub"></div>
            <div id="jump-to-nav" class="mw-jump">
               Jump to:                 <a href="#mw-head">navigation</a>,                  <a href="#p-search">search</a>
            </div>
            <div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr">
               <div class="mw-parser-output">
                  <div role="note" class="hatnote navigation-not-searchable">See also: <a href="/wiki/Electric_Car" class="mw-redirect" title="Electric Car">Electric Car</a></div>
                  <p>This is a <b>list of automotive parts</b> mostly for vehicles using <a href="/wiki/Internal_combustion_engines" class="mw-redirect" title="Internal combustion engines">internal combustion engines</a> which are <a href="/wiki/Manufacturing" title="Manufacturing">manufactured components</a> of <a href="/wiki/Automobile" class="mw-redirect" title="Automobile">automobiles</a>:</p>
                  <p></p>
                  <div id="toc" class="toc">
                     <div class="toctitle">
                        <h2>Contents</h2>
                     </div>
                     <ul>
                        <li class="toclevel-1 tocsection-1">
                           <a href="#Body_and_main_part"><span class="tocnumber">1</span> <span class="toctext">Body and main part</span></a>
                           <ul>
                              <li class="toclevel-2 tocsection-2"><a href="#Doors"><span class="tocnumber">1.1</span> <span class="toctext">Doors</span></a></li>
                              <li class="toclevel-2 tocsection-3"><a href="#Windows"><span class="tocnumber">1.2</span> <span class="toctext">Windows</span></a></li>
                           </ul>
                        </li>
                        <li class="toclevel-1 tocsection-4">
                           <a href="#Electrical_and_electronics"><span class="tocnumber">2</span> <span class="toctext">Electrical and electronics</span></a>
                           <ul>
                              <li class="toclevel-2 tocsection-5"><a href="#Audio.2Fvideo_devices"><span class="tocnumber">2.1</span> <span class="toctext">Audio/video devices</span></a></li>
                              <li class="toclevel-2 tocsection-6"><a href="#Cameras"><span class="tocnumber">2.2</span> <span class="toctext">Cameras</span></a></li>
                              <li class="toclevel-2 tocsection-7"><a href="#Charging_system"><span class="tocnumber">2.3</span> <span class="toctext">Charging system</span></a></li>
                              <li class="toclevel-2 tocsection-8"><a href="#Electrical_supply_system"><span class="tocnumber">2.4</span> <span class="toctext">Electrical supply system</span></a></li>
                              <li class="toclevel-2 tocsection-9"><a href="#Gauges_and_meters"><span class="tocnumber">2.5</span> <span class="toctext">Gauges and meters</span></a></li>
                              <li class="toclevel-2 tocsection-10"><a href="#Ignition_electronic_system"><span class="tocnumber">2.6</span> <span class="toctext">Ignition electronic system</span></a></li>
                              <li class="toclevel-2 tocsection-11"><a href="#Lighting_and_signaling_system"><span class="tocnumber">2.7</span> <span class="toctext">Lighting and signaling system</span></a></li>
                              <li class="toclevel-2 tocsection-12"><a href="#Sensors"><span class="tocnumber">2.8</span> <span class="toctext">Sensors</span></a></li>
                              <li class="toclevel-2 tocsection-13"><a href="#Starting_system"><span class="tocnumber">2.9</span> <span class="toctext">Starting system</span></a></li>
                              <li class="toclevel-2 tocsection-14"><a href="#Electrical_Switches"><span class="tocnumber">2.10</span> <span class="toctext">Electrical Switches</span></a></li>
                              <li class="toclevel-2 tocsection-15"><a href="#Wiring_harnesses"><span class="tocnumber">2.11</span> <span class="toctext">Wiring harnesses</span></a></li>
                              <li class="toclevel-2 tocsection-16"><a href="#Miscellaneous"><span class="tocnumber">2.12</span> <span class="toctext">Miscellaneous</span></a></li>
                           </ul>
                        </li>
                        <li class="toclevel-1 tocsection-17">
                           <a href="#Interior"><span class="tocnumber">3</span> <span class="toctext">Interior</span></a>
                           <ul>
                              <li class="toclevel-2 tocsection-18"><a href="#Floor_components_and_parts"><span class="tocnumber">3.1</span> <span class="toctext">Floor components and parts</span></a></li>
                              <li class="toclevel-2 tocsection-19"><a href="#Other_components"><span class="tocnumber">3.2</span> <span class="toctext">Other components</span></a></li>
                              <li class="toclevel-2 tocsection-20"><a href="#Car_seat"><span class="tocnumber">3.3</span> <span class="toctext">Car seat</span></a></li>
                           </ul>
                        </li>
                        <li class="toclevel-1 tocsection-21">
                           <a href="#Power-train_and_chassis"><span class="tocnumber">4</span> <span class="toctext">Power-train and chassis</span></a>
                           <ul>
                              <li class="toclevel-2"><a href="#Braking_system"><span class="tocnumber">4.1</span> <span class="toctext">Braking system</span></a></li>
                              <li class="toclevel-2 tocsection-23"><a href="#Engine_components_and_parts"><span class="tocnumber">4.2</span> <span class="toctext">Engine components and parts</span></a></li>
                              <li class="toclevel-2 tocsection-24"><a href="#Engine_cooling_system"><span class="tocnumber">4.3</span> <span class="toctext">Engine cooling system</span></a></li>
                              <li class="toclevel-2 tocsection-25"><a href="#Engine_oil_system"><span class="tocnumber">4.4</span> <span class="toctext">Engine oil system</span></a></li>
                              <li class="toclevel-2 tocsection-26"><a href="#Exhaust_system"><span class="tocnumber">4.5</span> <span class="toctext">Exhaust system</span></a></li>
                              <li class="toclevel-2 tocsection-27"><a href="#Fuel_supply_system"><span class="tocnumber">4.6</span> <span class="toctext">Fuel supply system</span></a></li>
                              <li class="toclevel-2 tocsection-28"><a href="#Suspension_and_steering_systems"><span class="tocnumber">4.7</span> <span class="toctext">Suspension and steering systems</span></a></li>
                              <li class="toclevel-2 tocsection-29"><a href="#Transmission_system"><span class="tocnumber">4.8</span> <span class="toctext">Transmission system</span></a></li>
                           </ul>
                        </li>
                        <li class="toclevel-1 tocsection-30">
                           <a href="#Miscellaneous_auto_parts"><span class="tocnumber">5</span> <span class="toctext">Miscellaneous auto parts</span></a>
                           <ul>
                              <li class="toclevel-2 tocsection-31"><a href="#Air_conditioning_system_.28A.2FC.29"><span class="tocnumber">5.1</span> <span class="toctext">Air conditioning system (A/C)</span></a></li>
                              <li class="toclevel-2 tocsection-32"><a href="#Bearings"><span class="tocnumber">5.2</span> <span class="toctext">Bearings</span></a></li>
                              <li class="toclevel-2 tocsection-33"><a href="#Hose"><span class="tocnumber">5.3</span> <span class="toctext">Hose</span></a></li>
                              <li class="toclevel-2 tocsection-34"><a href="#Other_miscellaneous_parts"><span class="tocnumber">5.4</span> <span class="toctext">Other miscellaneous parts</span></a></li>
                           </ul>
                        </li>
                        <li class="toclevel-1 tocsection-35"><a href="#See_also"><span class="tocnumber">6</span> <span class="toctext">See also</span></a></li>
                        <li class="toclevel-1 tocsection-36"><a href="#References"><span class="tocnumber">7</span> <span class="toctext">References</span></a></li>
                     </ul>
                  </div>
                  <p></p>
                  <h2><span class="mw-headline" id="Body_and_main_part">Body and main part</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=1" title="Edit section: Body and main part">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     Body components, including windows and trim:
                     <ul>
                        <li>
                           <a href="/wiki/Hood_(vehicle)" class="mw-redirect" title="Hood (vehicle)">Bonnet/hood</a>
                           <ul>
                              <li>Bonnet/hood</li>
                           </ul>
                        </li>
                        <li>
                           <a href="/wiki/Bumper_(automobile)" class="mw-redirect" title="Bumper (automobile)">Bumper</a>
                           <ul>
                              <li>Unexposed bumper</li>
                              <li>Exposed Bumper</li>
                           </ul>
                        </li>
                        <li><a href="/wiki/Cowling" title="Cowling">Cowl screen</a></li>
                        <li><a href="/wiki/Decklid" class="mw-redirect" title="Decklid">Decklid</a></li>
                        <li><a href="/wiki/Fascia_(car)" title="Fascia (car)">Fascia</a> rear and support</li>
                        <li><a href="/wiki/Fender_(vehicle)" title="Fender (vehicle)">Fender</a> (<i>wing</i> or <i>mudguard</i>)</li>
                        <li>Front clip</li>
                        <li><a href="/wiki/Fascia_(car)" title="Fascia (car)">Front fascia</a> and header panel</li>
                        <li><a href="/wiki/Grille" title="Grille">Grille</a> (also called grill)</li>
                        <li><a href="/wiki/Pillar_(car)" title="Pillar (car)">Pillar</a> and hard trim</li>
                        <li><a href="/wiki/Quarter_panel" title="Quarter panel">Quarter panel</a></li>
                        <li><a href="/wiki/Radiator" title="Radiator">Radiator</a> core support</li>
                        <li><a href="/wiki/Glossary_of_automotive_design#R" title="Glossary of automotive design">Rocker</a></li>
                        <li><a href="/wiki/Roof_rack" title="Roof rack">Roof rack</a></li>
                        <li>
                           <a href="/wiki/Spoiler_(automotive)" class="mw-redirect" title="Spoiler (automotive)">Spoiler</a>
                           <ul>
                              <li>Front spoiler (<i>air dam</i>)</li>
                              <li>Rear spoiler (<i>wing</i>)</li>
                           </ul>
                        </li>
                        <li>
                           <a href="/wiki/Rim_(wheel)" title="Rim (wheel)">Rims</a>
                           <ul>
                              <li><a href="/wiki/Hubcap" title="Hubcap">Hubcap</a></li>
                              <li><a href="/wiki/Car_tire" class="mw-redirect" title="Car tire">Tire/Tyre</a></li>
                           </ul>
                        </li>
                        <li><a href="/wiki/Trim_package" title="Trim package">Trim package</a></li>
                        <li>
                           <a href="/wiki/Trunk_(automobile)" class="mw-redirect" title="Trunk (automobile)">Trunk/boot/hatch</a>
                           <ul>
                              <li>Trunk/boot latch</li>
                           </ul>
                        </li>
                        <li>Valance</li>
                        <li>Welded assembly</li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Doors"><a href="/wiki/Vehicle_door" class="mw-redirect" title="Vehicle door">Doors</a></span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=2" title="Edit section: Doors">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li>Front Right Outer door</li>
                        <li>Front Left Side Outer door handle</li>
                        <li>Rear Right Side Outer door handle</li>
                        <li>Rear Left Side Outer door handle</li>
                        <li>Front Right Side Inner door handle</li>
                        <li>Front Left Side Inner door handle</li>
                        <li>Rear Right Side Inner door handle</li>
                        <li>Rear Left Side Inner door handle</li>
                        <li>Back Door Outer Door Handles</li>
                        <li>Front Right Side Window motor</li>
                        <li>Front Left Side Window motor</li>
                        <li>Rear Right Side Window motor</li>
                        <li>Rear Left Side Window motor</li>
                     </ul>
                     <p><br /></p>
                     <ul>
                        <li>Door control module</li>
                        <li>Door <a href="/wiki/Seal_(mechanical)" title="Seal (mechanical)">seal</a></li>
                        <li>Door water-shield</li>
                        <li><a href="/wiki/Hinge" title="Hinge">Hinge</a></li>
                        <li>Door latch</li>
                        <li>Door <a href="/wiki/Lock_(security_device)" title="Lock (security device)">lock</a> and <a href="/wiki/Power_door_locks" title="Power door locks">power door locks</a></li>
                        <li>Center-locking</li>
                        <li><a href="/wiki/Fuel_tank" title="Fuel tank">Fuel tank</a> (or <i>fuel filler</i>) door</li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Windows">Windows</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=3" title="Edit section: Windows">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li><a href="/wiki/Car_glass" title="Car glass">Glass</a></li>
                        <li>Front Right Side Door Glass</li>
                        <li>Front Left Side Door Glass</li>
                        <li>Rear Right Side Door Glass</li>
                        <li>Rear Left Side Door Glass</li>
                        <li>Rear Right Quarter Glass</li>
                        <li>Rear Left Quarter Glass</li>
                        <li>
                           <a href="/wiki/Sunroof" title="Sunroof">Sunroof</a>
                           <ul>
                              <li>Sunroof motor</li>
                           </ul>
                        </li>
                        <li>Sunroof Rail</li>
                        <li>Sunroof Glass</li>
                        <li>Window motor</li>
                        <li>Window <a href="/wiki/Regulator_(automatic_control)" title="Regulator (automatic control)">regulator</a></li>
                        <li>
                           <a href="/wiki/Windshield" title="Windshield">Windshield</a> (also called windscreen)
                           <ul>
                              <li><a href="/wiki/Windshield_washer" class="mw-redirect" title="Windshield washer">Windshield washer</a> motor</li>
                           </ul>
                        </li>
                        <li>Window <a href="/wiki/Seal_(mechanical)" title="Seal (mechanical)">seal</a></li>
                     </ul>
                  </div>
                  <h2><span class="mw-headline" id="Electrical_and_electronics">Electrical and electronics</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=4" title="Edit section: Electrical and electronics">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
                  <div role="note" class="hatnote navigation-not-searchable">See also: <a href="/wiki/42-volt_electrical_system" title="42-volt electrical system">42-volt electrical system</a></div>
                  <h3><span class="mw-headline" id="Audio.2Fvideo_devices">Audio/video devices</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=5" title="Edit section: Audio/video devices">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li>
                           <a href="/wiki/Antenna_(radio)" title="Antenna (radio)">Antenna</a> assembly
                           <ul>
                              <li>Antenna cable</li>
                           </ul>
                        </li>
                        <li><a href="/wiki/Vehicle_audio" title="Vehicle audio">Radio and media player</a></li>
                        <li><a href="/wiki/Loudspeaker" title="Loudspeaker">Speaker</a></li>
                        <li><a href="/wiki/Antenna_tuner" title="Antenna tuner">Tuner</a></li>
                        <li><a href="/wiki/Subwoofer" title="Subwoofer">Subwoofer</a></li>
                        <li><a href="/wiki/In-car_entertainment" title="In-car entertainment">Video player</a></li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Cameras">Cameras</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=6" title="Edit section: Cameras">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li><a href="/wiki/Backup_camera" title="Backup camera">Backup camera</a></li>
                        <li><a href="/wiki/Dashcam" title="Dashcam">Dashcam</a></li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Charging_system">Charging system</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=7" title="Edit section: Charging system">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li>
                           <a href="/wiki/Alternator_(automotive)" title="Alternator (automotive)">Alternator</a>
                           <ul>
                              <li>Alternator bearing</li>
                              <li>Alternator bracket</li>
                              <li>Alternator fan</li>
                              <li>Rectifier</li>
                              <li>Regulator</li>
                              <li>Stator</li>
                              <li>Rotor</li>
                              <li>Pulley</li>
                              <li>Diode &amp; Plate Assembly</li>
                              <li>Rotor Assembly</li>
                              <li>Retainer</li>
                              <li>Housing</li>
                              <li>Carbon Brushes</li>
                              <li>Slip Rings</li>
                              <li>Coil</li>
                              <li>Voltage Regulator</li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Electrical_supply_system">Electrical supply system</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=8" title="Edit section: Electrical supply system">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li>
                           <a href="/wiki/Car_battery" class="mw-redirect" title="Car battery">Battery</a>
                           <ul>
                              <li>Performance Battery</li>
                              <li>Battery Box</li>
                              <li>Battery Cable terminal</li>
                              <li>Battery Cable</li>
                              <li>Battery Control system</li>
                              <li>Battery Plate</li>
                              <li>Battery tray</li>
                              <li>Battery Cap</li>
                              <li>Sulfuric Acid (H<sub>2</sub>SO<sub>4</sub>)</li>
                              <li>Distilled Water</li>
                           </ul>
                        </li>
                        <li><a href="/wiki/Voltage_regulator" title="Voltage regulator">Voltage regulator</a></li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Gauges_and_meters"><a href="/wiki/Gauge_(instrument)" title="Gauge (instrument)">Gauges</a> and meters</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=9" title="Edit section: Gauges and meters">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li><a href="/wiki/Ammeter" title="Ammeter">Ammeter</a></li>
                        <li><a href="/wiki/Clinometer" class="mw-redirect" title="Clinometer">Clinometer</a></li>
                        <li><a href="/wiki/Dynamometer" title="Dynamometer">Dynamometer</a></li>
                        <li><a href="/wiki/Fuel_gauge" title="Fuel gauge">Fuel gauge</a></li>
                        <li><a href="/wiki/Manometer" class="mw-redirect" title="Manometer">manometer</a></li>
                        <li><a href="/wiki/Hydrometer" title="Hydrometer">Hydrometer</a></li>
                        <li><a href="/wiki/Odometer" title="Odometer">Odometer</a> (also called milometer or mileometers)</li>
                        <li><a href="/wiki/Speedometer" title="Speedometer">Speedometer</a></li>
                        <li><a href="/wiki/Tachometer" title="Tachometer">Tachometer</a> (also called rev counters)</li>
                        <li>Temperature gauge</li>
                        <li><a href="/wiki/Tire_pressure_gauge" class="mw-redirect" title="Tire pressure gauge">Tire pressure gauge</a></li>
                        <li>Vacuum gauge</li>
                        <li><a href="/wiki/Voltmeter" title="Voltmeter">Voltmeter</a></li>
                        <li>Water temperature meter</li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Ignition_electronic_system"><a href="/w/index.php?title=Ignition_electronic_system&amp;action=edit&amp;redlink=1" class="new" title="Ignition electronic system (page does not exist)">Ignition electronic system</a></span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=10" title="Edit section: Ignition electronic system">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li>Sparking cable</li>
                        <li>Distributor</li>
                        <li>Distributor Cap</li>
                        <li>Electronic timing controller</li>
                        <li>Ignition box</li>
                        <li>Ignition coil</li>
                        <li>Ignition Coil Connector</li>
                        <li>Ignition coil parts</li>
                        <li>Ignition magneto</li>
                        <li>Spark plug</li>
                        <li>Glow Plug</li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Lighting_and_signaling_system"><a href="/wiki/Automotive_lighting" title="Automotive lighting">Lighting and signaling system</a></span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=11" title="Edit section: Lighting and signaling system">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div role="note" class="hatnote navigation-not-searchable">Main article: <a href="/wiki/Automotive_lighting" title="Automotive lighting">Automotive lighting</a></div>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li>Engine bay lighting</li>
                        <li><a href="/wiki/Fog_light" class="mw-redirect" title="Fog light">Fog light</a> (also called foglamp)</li>
                        <li><a href="/wiki/Halogen" title="Halogen">Halogen</a></li>
                        <li>
                           <a href="/wiki/Headlight" class="mw-redirect" title="Headlight">Headlight</a> (also called headlamp)
                           <ul>
                              <li>Headlight motor</li>
                           </ul>
                        </li>
                        <li><a href="/w/index.php?title=Interior_light&amp;action=edit&amp;redlink=1" class="new" title="Interior light (page does not exist)">Interior light</a> and lamp</li>
                        <li>License plate lamp (also called number plate lamp or registration plate lamp)</li>
                        <li><a href="/wiki/Automotive_lighting#Front_position_lamps" title="Automotive lighting">Side lighting</a></li>
                        <li>
                           <a href="/wiki/Tail_light" class="mw-redirect" title="Tail light">Tail light</a>
                           <ul>
                              <li>Tail light cover</li>
                           </ul>
                        </li>
                        <li><a href="/w/index.php?title=Indicator_light&amp;action=edit&amp;redlink=1" class="new" title="Indicator light (page does not exist)">Indicator light</a></li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Sensors"><a href="/wiki/Sensor" title="Sensor">Sensors</a></span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=12" title="Edit section: Sensors">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li>Airbag sensors</li>
                        <li>Automatic transmission speed sensor</li>
                        <li>Camshaft position sensor</li>
                        <li><a href="/wiki/Crankshaft_position_sensor" title="Crankshaft position sensor">Crankshaft position sensor</a></li>
                        <li>Coolant temperature sensor</li>
                        <li>Crankshaft position sensor</li>
                        <li>Fuel level sensor</li>
                        <li>Fuel pressure sensor</li>
                        <li>Knock sensor</li>
                        <li>Light sensor</li>
                        <li><a href="/wiki/MAP_sensor" title="MAP sensor">MAP sensor</a></li>
                        <li><a href="/wiki/Mass_flow_sensor" title="Mass flow sensor">Mass airflow sensor</a></li>
                        <li>Oil level sensor</li>
                        <li>Oil pressure sensor</li>
                        <li><a href="/wiki/Oxygen_sensor" title="Oxygen sensor">Oxygen sensor</a></li>
                        <li><a href="/wiki/Throttle_position_sensor" title="Throttle position sensor">Throttle position sensor</a></li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Starting_system">Starting system</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=13" title="Edit section: Starting system">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li>
                           <a href="/wiki/Starter_motor" class="mw-redirect" title="Starter motor">Starter</a>
                           <ul>
                              <li>Starter drive</li>
                              <li><a href="/wiki/Starter_motor" class="mw-redirect" title="Starter motor">Starter motor</a></li>
                              <li><a href="/wiki/Starter_solenoid" title="Starter solenoid">Starter solenoid</a></li>
                           </ul>
                        </li>
                        <li><a href="/wiki/Glowplug" title="Glowplug">Glowplug</a></li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Electrical_Switches"><a href="/w/index.php?title=Electrical_Switch&amp;action=edit&amp;redlink=1" class="new" title="Electrical Switch (page does not exist)">Electrical Switches</a></span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=14" title="Edit section: Electrical Switches">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li>Battery</li>
                        <li>Door switch</li>
                        <li>Ignition switch</li>
                        <li>Power window switch</li>
                        <li>Steering column switch</li>
                        <li>Switch cover</li>
                        <li>Switch panel</li>
                        <li><a href="/wiki/Thermostat" title="Thermostat">Thermostat</a></li>
                        <li>Frame switch</li>
                        <li>Fan ditch</li>
                        <li>Parts and functions of starter system</li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Wiring_harnesses"><a href="/wiki/Wiring_harness" class="mw-redirect" title="Wiring harness">Wiring harnesses</a></span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=15" title="Edit section: Wiring harnesses">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     (<i>wiring loom</i> or <i>cable loom</i>)
                     <ul>
                        <li>Air conditioning harness</li>
                        <li>Engine compartment harness</li>
                        <li>Interior harness</li>
                        <li>floor harness</li>
                        <li>Main harness</li>
                     </ul>
                     <ul>
                        <li>control harness</li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Miscellaneous">Miscellaneous</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=16" title="Edit section: Miscellaneous">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li>Air bag control module</li>
                        <li><a href="/wiki/Car_alarm" title="Car alarm">Alarm</a> and siren</li>
                        <li>Central locking system</li>
                        <li>Chassis control computer</li>
                        <li><a href="/wiki/Cruise_control" title="Cruise control">Cruise control</a> computer</li>
                        <li>Door contact</li>
                        <li>Engine computer and management system</li>
                        <li><a href="/wiki/Engine_control_unit" title="Engine control unit">Engine control unit</a></li>
                        <li>
                           <a href="/wiki/Fuse_(automotive)" title="Fuse (automotive)">Fuse</a>
                           <ul>
                              <li><a href="/wiki/Fuse_box" class="mw-redirect" title="Fuse box">Fuse box</a></li>
                           </ul>
                        </li>
                        <li><a href="/wiki/Ground_strap" class="mw-redirect" title="Ground strap">Ground strap</a></li>
                        <li>Grab Handle</li>
                        <li><a href="/wiki/Automotive_navigation_system" title="Automotive navigation system">Navigation system</a> / <a href="/wiki/GPS_navigation_device" title="GPS navigation device">GPS navigation device</a></li>
                        <li>Performance chip</li>
                        <li>Performance monitor</li>
                        <li>Relay connector</li>
                        <li>Remote lock</li>
                        <li>Shift improver</li>
                        <li><a href="/wiki/Speed_controller" class="mw-redirect" title="Speed controller">Speed controller</a></li>
                        <li>Speedometer calibrator</li>
                        <li>Transmission computer</li>
                        <li>Wiring connector</li>
                     </ul>
                  </div>
                  <h2><span class="mw-headline" id="Interior">Interior</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=17" title="Edit section: Interior">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
                  <table width="100%">
                     <tr valign="top">
                        <td width="50%">
                           <ul>
                              <li><a href="/w/index.php?title=Dash_Panels&amp;action=edit&amp;redlink=1" class="new" title="Dash Panels (page does not exist)">Dash Panels</a></li>
                           </ul>
                           <h3><span class="mw-headline" id="Floor_components_and_parts">Floor components and parts</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=18" title="Edit section: Floor components and parts">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                           <ul>
                              <li><a href="/wiki/Carpet" title="Carpet">Carpet</a> and other floor material</li>
                              <li><a href="/wiki/Center_console_(automobile)" title="Center console (automobile)">Center console</a> (front and rear)</li>
                           </ul>
                           <h3><span class="mw-headline" id="Other_components">Other components</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=19" title="Edit section: Other components">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                           <ul>
                              <li><a href="/wiki/Trap_(car)" title="Trap (car)">Trap</a> (secret compartment)</li>
                              <li><a href="/wiki/Roll_cage" title="Roll cage">Roll cage</a> or Exo cage</li>
                           </ul>
                           <h3><span class="mw-headline" id="Car_seat"><a href="/wiki/Car_seat" title="Car seat">Car seat</a></span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=20" title="Edit section: Car seat">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                           <ul>
                              <li><a href="/w/index.php?title=Arm_Rest&amp;action=edit&amp;redlink=1" class="new" title="Arm Rest (page does not exist)">Arm Rest</a></li>
                              <li><a href="/wiki/Bench_seat" title="Bench seat">Bench seat</a></li>
                              <li><a href="/wiki/Bucket_seat" title="Bucket seat">Bucket seat</a></li>
                              <li>Children and baby <a href="/wiki/Car_seat" title="Car seat">car seat</a></li>
                              <li><a href="/wiki/Fastener" title="Fastener">Fastener</a></li>
                              <li><a href="/wiki/Head_restraint" title="Head restraint">Headrest</a></li>
                              <li><a href="/wiki/Seat_belt" title="Seat belt">Seat belt</a></li>
                              <li>Seat bracket</li>
                              <li>Seat cover</li>
                              <li>Seat track</li>
                              <li>Other seat components</li>
                           </ul>
                        </td>
                     </tr>
                  </table>
                  <h2><span class="mw-headline" id="Power-train_and_chassis">Power-train and <a href="/wiki/Chassis" title="Chassis">chassis</a></span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=21" title="Edit section: Power-train and chassis">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <div role="note" class="hatnote navigation-not-searchable">See also: <a href="/wiki/Frame_(vehicle)" class="mw-redirect" title="Frame (vehicle)">frame (vehicle)</a></div>
                     <h3><span class="mw-headline" id="Braking_system"><a href="/wiki/Brake" title="Brake">Braking system</a></span></h3>
                     <ul>
                        <li>
                           <a href="/wiki/Anti-lock_braking_system" title="Anti-lock braking system">Anti-lock braking system</a> (<i>ABS</i>)
                           <ul>
                              <li>ABS steel pin</li>
                              <li>FR Side Sensor</li>
                              <li>FL Side Sensor</li>
                              <li>RR Side Sensor</li>
                              <li>RL Side Sensor</li>
                              <li>ABS Motor Circuit</li>
                           </ul>
                        </li>
                        <li>Adjusting mechanism (<i>adjuster star wheel</i>)</li>
                        <li>Anchor</li>
                        <li>Bleed nipple</li>
                        <li>Brake backing plate</li>
                        <li>Brake backing pad</li>
                        <li>Brake cooling duct</li>
                        <li>Brake disc</li>
                        <li>Brake Fluid</li>
                        <li><a href="/wiki/Brake_drum" class="mw-redirect" title="Brake drum">Brake drum</a></li>
                        <li><a href="/wiki/Brake_lining" title="Brake lining">Brake lining</a></li>
                        <li><a href="/wiki/Brake_pad" title="Brake pad">Brake pad</a></li>
                        <li><a href="/wiki/Brake_pedal" class="mw-redirect" title="Brake pedal">Brake pedal</a></li>
                        <li>Brake piston</li>
                        <li>Brake pump</li>
                        <li>Brake roll</li>
                        <li>Brake rotor</li>
                        <li><a href="/wiki/Vacuum_servo" title="Vacuum servo">Brake servo</a></li>
                        <li>
                           <a href="/wiki/Brake_shoe" title="Brake shoe">Brake shoe</a>
                           <ul>
                              <li><a href="/wiki/Brake_lining" title="Brake lining">Brake lining</a></li>
                              <li>Shoe web</li>
                           </ul>
                        </li>
                        <li><a href="/wiki/Brake_warning_light" class="mw-redirect" title="Brake warning light">Brake warning light</a></li>
                        <li>Calibrated friction brake</li>
                        <li><a href="/wiki/Disc_brake#Calipers" title="Disc brake">Caliper</a></li>
                        <li>Combination valve</li>
                        <li>Dual circuit brake system</li>
                        <li>Hold-down springs (<i>retainer springs</i>)</li>
                        <li>
                           <a href="/wiki/Hose" title="Hose">Hose</a>
                           <ul>
                              <li>Brake booster hose</li>
                              <li>Air brake nylon hose</li>
                              <li>Brake duct hose</li>
                           </ul>
                        </li>
                        <li>Hydraulic booster unit</li>
                        <li>Load-sensing valve</li>
                        <li><a href="/wiki/Master_cylinder" title="Master cylinder">Master cylinder</a></li>
                        <li>Metering valve</li>
                        <li>Other braking system parts</li>
                        <li>Park brake lever/handle (<i><a href="/wiki/Hand_brake" class="mw-redirect" title="Hand brake">hand brake</a></i>)</li>
                        <li>Pressure differential valve</li>
                        <li><a href="/wiki/Proportioning_valve" title="Proportioning valve">Proportioning valve</a></li>
                        <li>Reservoir</li>
                        <li>Shoe return spring</li>
                        <li>Tyre</li>
                        <li>Vacuum brake booster</li>
                        <li><a href="/wiki/Wheel_cylinder" title="Wheel cylinder">Wheel cylinder</a> (<i><a href="/wiki/Slave_cylinder" class="mw-redirect" title="Slave cylinder">slave cylinder</a></i>)</li>
                        <li>Wheel stud</li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Engine_components_and_parts">Engine components and parts</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=23" title="Edit section: Engine components and parts">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li><a href="/wiki/Diesel_engine" title="Diesel engine">Diesel engine</a>, <a href="/wiki/Petrol_engine" title="Petrol engine">petrol engine</a> (<i><a href="/wiki/Gasoline_engine" class="mw-redirect" title="Gasoline engine">gasoline engine</a></i>)</li>
                        <li>Accessory belt</li>
                        <li><a href="/wiki/Air_duct" class="mw-redirect" title="Air duct">Air duct</a></li>
                        <li>Air intake housing</li>
                        <li>Air intake <a href="/wiki/Inlet_manifold" title="Inlet manifold">manifold</a></li>
                        <li>
                           <a href="/wiki/Camshaft" title="Camshaft">Camshaft</a>
                           <ul>
                              <li>Camshaft bearing</li>
                              <li>Camshaft fastener</li>
                              <li>Camshaft follower</li>
                              <li>Camshaft locking plate</li>
                              <li>Camshaft pushrod</li>
                              <li>Camshaft spacer ring</li>
                              <li>Camshaft phase variator</li>
                           </ul>
                        </li>
                        <li>
                           <a href="/wiki/Connecting_rod" title="Connecting rod">Connecting rod</a>
                           <ul>
                              <li>Connecting rod bearing</li>
                              <li>Connecting rod bolt</li>
                              <li>Connecting rod washer</li>
                           </ul>
                        </li>
                        <li>Crank case</li>
                        <li>Crank pulley</li>
                        <li><a href="/wiki/Crankshaft" title="Crankshaft">Crankshaft</a></li>
                        <li>Crankshaft oil seal</li>
                        <li>
                           <a href="/wiki/Cylinder_head" title="Cylinder head">Cylinder head</a>
                           <ul>
                              <li>Cylinder head cover</li>
                              <li>Other cylinder head cover parts</li>
                              <li>Cylinder <a href="/wiki/Head_gasket" title="Head gasket">head gasket</a></li>
                           </ul>
                        </li>
                        <li><a href="/wiki/Distributor" title="Distributor">Distributor</a></li>
                        <li>Distributor cap</li>
                        <li>Drive belt</li>
                        <li>
                           <a href="/wiki/Engine_block" class="mw-redirect" title="Engine block">Engine block</a>
                           <ul>
                              <li>Engine block</li>
                           </ul>
                        </li>
                        <li>Engine cradle</li>
                        <li>Engine shake damper and vibration absorber</li>
                        <li>Engine valve</li>
                        <li><a href="/wiki/Fan_belt" class="mw-redirect" title="Fan belt">Fan belt</a></li>
                        <li><a href="/wiki/Gudgeon_pin" title="Gudgeon pin">Gudgeon pin</a> (<i><a href="/wiki/Wrist_pin" class="mw-redirect" title="Wrist pin">wrist pin</a></i>)</li>
                        <li>Harmonic balancer</li>
                        <li><a href="/wiki/Heater" class="mw-redirect" title="Heater">Heater</a></li>
                        <li>Mounting</li>
                        <li>
                           <a href="/wiki/Piston" title="Piston">Piston</a>
                           <ul>
                              <li>Piston pin and crank pin</li>
                              <li>Piston pin bush</li>
                              <li><a href="/wiki/Piston_ring" title="Piston ring">Piston ring</a> and circlip</li>
                           </ul>
                        </li>
                        <li>Poppet valve</li>
                        <li><a href="/wiki/PCV_valve" class="mw-redirect" title="PCV valve">PCV valve</a> (<i>positive crankcase ventilation valve</i>)</li>
                        <li>Pulley part</li>
                        <li><a href="/wiki/Rocker_arm" title="Rocker arm">Rocker arm</a></li>
                        <li><a href="/wiki/Rocker_cover" title="Rocker cover">Rocker cover</a></li>
                        <li>
                           <a href="/wiki/Starter_motor" class="mw-redirect" title="Starter motor">Starter motor</a>
                           <ul>
                              <li>Starter pinion</li>
                              <li>Starter ring</li>
                           </ul>
                        </li>
                        <li><a href="/wiki/Turbocharger" title="Turbocharger">Turbocharger</a> and supercharger</li>
                        <li><a href="/wiki/Tappet" title="Tappet">Tappet</a></li>
                        <li>Timing tape</li>
                        <li><a href="/wiki/Valve_cover" class="mw-redirect" title="Valve cover">Valve cover</a></li>
                        <li>Valve housing</li>
                        <li>Valve spring</li>
                        <li>Valve stem seal</li>
                        <li>Water pump pulley</li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Engine_cooling_system"><a href="/wiki/Engine_cooling" class="mw-redirect" title="Engine cooling">Engine cooling</a> system</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=24" title="Edit section: Engine cooling system">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li><a href="/w/index.php?title=Air_blower&amp;action=edit&amp;redlink=1" class="new" title="Air blower (page does not exist)">Air blower</a></li>
                        <li>Coolant hose (clamp)</li>
                        <li>Cooling fan</li>
                        <li><a href="/wiki/Fan_blade" class="mw-redirect" title="Fan blade">Fan blade</a></li>
                        <li>Fan clutch</li>
                        <li>
                           <a href="/wiki/Radiator_(engine_cooling)" title="Radiator (engine cooling)">Radiator</a>
                           <ul>
                              <li>Radiator bolt</li>
                              <li>Radiator (fan) shroud</li>
                              <li>Radiator gasket</li>
                              <li>Radiator pressure cap</li>
                              <li>Overflow tank</li>
                              <li><a href="/wiki/Thermostat#Automotive" title="Thermostat">Thermostat</a></li>
                           </ul>
                        </li>
                        <li>Water neck</li>
                        <li>Water neck <a href="/wiki/O-ring" title="O-ring">o-ring</a></li>
                        <li>Water pipe</li>
                        <li><a href="/wiki/Water_pump" class="mw-redirect" title="Water pump">Water pump</a></li>
                        <li>Water pump gasket</li>
                        <li><a href="/wiki/Water_tank" title="Water tank">Water tank</a></li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Engine_oil_system">Engine oil system</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=25" title="Edit section: Engine oil system">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li><a href="/wiki/Oil_filter" title="Oil filter">Oil filter</a></li>
                        <li>Oil gasket</li>
                        <li><a href="/wiki/Oil_pan" class="mw-redirect" title="Oil pan">Oil pan</a></li>
                        <li>Oil pipe</li>
                        <li><a href="/wiki/Oil_pump_(internal_combustion_engine)" title="Oil pump (internal combustion engine)">Oil pump</a></li>
                        <li>Oil strainer</li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Exhaust_system"><a href="/wiki/Exhaust_system" title="Exhaust system">Exhaust system</a></span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=26" title="Edit section: Exhaust system">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <div role="note" class="hatnote navigation-not-searchable">See also: <a href="/w/index.php?title=Exhaust_gas_re-circulation&amp;action=edit&amp;redlink=1" class="new" title="Exhaust gas re-circulation (page does not exist)">exhaust gas re-circulation</a></div>
                     <ul>
                        <li><a href="/wiki/Catalytic_converter" title="Catalytic converter">Catalytic converter</a></li>
                        <li>Exhaust clamp and bracket</li>
                        <li>Exhaust flange gasket</li>
                        <li>Exhaust gasket</li>
                        <li>Exhaust manifold</li>
                        <li>Exhaust manifold gasket</li>
                        <li><a href="/wiki/Exhaust_pipe" class="mw-redirect" title="Exhaust pipe">Exhaust pipe</a></li>
                        <li><a href="/wiki/Heat_shield" title="Heat shield">Heat shield</a></li>
                        <li>Heat sleeving and tape</li>
                        <li>Resonator</li>
                        <li><a href="/wiki/Muffler" title="Muffler">Muffler</a> (<i>Silencer</i>)</li>
                        <li>Spacer ring</li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Fuel_supply_system">Fuel supply system</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=27" title="Edit section: Fuel supply system">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li><a href="/wiki/Air_filter" title="Air filter">Air filter</a></li>
                        <li>
                           <a href="/wiki/Carburetor" title="Carburetor">Carburetor</a>
                           <ul>
                              <li>Carburetor parts</li>
                           </ul>
                        </li>
                        <li>Choke cable</li>
                        <li>EGR valve</li>
                        <li>Fuel cap</li>
                        <li>
                           <a href="/wiki/Fuel_cell" title="Fuel cell">Fuel cell</a>
                           <ul>
                              <li>Fuel cell component</li>
                           </ul>
                        </li>
                        <li>Fuel cooler</li>
                        <li>Fuel distributor</li>
                        <li>Fuel filter</li>
                        <li>Fuel filter seal</li>
                        <li><a href="/wiki/Fuel_injector" class="mw-redirect" title="Fuel injector">Fuel injector</a></li>
                        <li>Fuel injector nozzle</li>
                        <li><a href="/wiki/Fuel_line" title="Fuel line">Fuel line</a></li>
                        <li>Fuel pump</li>
                        <li>Fuel pump gasket</li>
                        <li><a href="/wiki/Fuel_pressure_regulator" class="mw-redirect" title="Fuel pressure regulator">Fuel pressure regulator</a></li>
                        <li>Fuel rail</li>
                        <li>
                           <a href="/wiki/Fuel_tank" title="Fuel tank">Fuel tank</a>
                           <ul>
                              <li>Fuel tank cover</li>
                           </ul>
                        </li>
                        <li>Fuel water separator</li>
                        <li>Intake manifold</li>
                        <li>Intake manifold gasket</li>
                        <li>LPG (Liquefied petroleum gas) system assembly</li>
                        <li>Throttle body</li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Suspension_and_steering_systems"><a href="/wiki/Suspension_(vehicle)" title="Suspension (vehicle)">Suspension</a> and steering systems</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=28" title="Edit section: Suspension and steering systems">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li><a href="/wiki/Axle" title="Axle">axle</a></li>
                        <li>Camber arm</li>
                        <li><a href="/wiki/Control_arm" title="Control arm">Control arm</a></li>
                        <li><a href="/wiki/Beam_axle" title="Beam axle">Beam axle</a></li>
                        <li>Idler arm</li>
                        <li><a href="/wiki/Kingpin_(automotive_part)" title="Kingpin (automotive part)">Kingpin</a></li>
                        <li>Lateral link</li>
                        <li><a href="/w/index.php?title=Pan-hard_rod&amp;action=edit&amp;redlink=1" class="new" title="Pan-hard rod (page does not exist)">Pan-hard rod</a></li>
                        <li><a href="/w/index.php?title=Pit-man_arm&amp;action=edit&amp;redlink=1" class="new" title="Pit-man arm (page does not exist)">Pit-man arm</a></li>
                        <li><a href="/wiki/Power_steering" title="Power steering">Power steering</a> assembly and component</li>
                        <li>Rack end</li>
                        <li><a href="/wiki/Shock_absorber" title="Shock absorber">Shock absorber</a></li>
                        <li><a href="/wiki/Spindle_(automobile)" title="Spindle (automobile)">Spindle</a></li>
                        <li>
                           <a href="/wiki/Spring_(device)" title="Spring (device)">Spring</a>
                           <ul>
                              <li>Air spring</li>
                              <li>Coil spring</li>
                              <li>Leaf and parabolic leaf spring</li>
                              <li><a href="/wiki/Ball_joint" title="Ball joint">Ball joint</a></li>
                              <li>Rubber spring</li>
                              <li>Spiral spring</li>
                           </ul>
                        </li>
                        <li>Stabilizer bars and link</li>
                        <li>Steering arm</li>
                        <li>Steering box</li>
                        <li>Steering column assembly</li>
                        <li>Steering rack (a form of steering gear; see also <a href="/wiki/Rack_and_pinion" title="Rack and pinion">rack and pinion</a> and <a href="/wiki/Recirculating_ball" title="Recirculating ball">recirculating ball</a>)</li>
                        <li>Steering shaft</li>
                        <li><a href="/wiki/Steering_wheel" title="Steering wheel">Steering wheel</a> (<i>driving wheel</i>)</li>
                        <li><a href="/wiki/Strut" title="Strut">Strut</a></li>
                        <li>Stub axle</li>
                        <li>Suspension link and bolt</li>
                        <li>Sway bar link</li>
                        <li>Tie bar</li>
                        <li><a href="/wiki/Tie_rod" title="Tie rod">Tie rod</a></li>
                        <li>Tie rod end</li>
                        <li>Track Bar</li>
                        <li>Toe link</li>
                        <li><a href="/wiki/Trailing_arm" title="Trailing arm">Trailing arm</a></li>
                     </ul>
                  </div>
                  <h3><span class="mw-headline" id="Transmission_system"><a href="/wiki/Transmission_(mechanics)" title="Transmission (mechanics)">Transmission</a> system</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=29" title="Edit section: Transmission system">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <div class="div-col columns column-count column-count-2" style="-moz-column-count: 2; -webkit-column-count: 2; column-count: 2;">
                     <ul>
                        <li><a href="/w/index.php?title=Adjustable_pedal&amp;action=edit&amp;redlink=1" class="new" title="Adjustable pedal (page does not exist)">Adjustable pedal</a></li>
                        <li>Axle shaft</li>
                        <li><a href="/wiki/Bell_housing" title="Bell housing">Bell housing</a></li>
                        <li><a href="/wiki/Universal_joint" title="Universal joint">Universal joint</a></li>
                        <li>Other belts</li>
                        <li>Carrier assembly</li>
                        <li>Chain wheel and sprocket</li>
                        <li><a href="/wiki/Clutch" title="Clutch">Clutch</a> assembly</li>
                        <li>Clutch cable</li>
                        <li>Clutch disk</li>
                        <li>Clutch fan</li>
                        <li>Clutch fork</li>
                        <li><a href="/w/index.php?title=Clutch_hose&amp;action=edit&amp;redlink=1" class="new" title="Clutch hose (page does not exist)">Clutch hose</a></li>
                        <li>Clutch lever</li>
                        <li>
                           Clutch lining
                           <ul>
                              <li>Clutch pedal</li>
                              <li>Clutch pressure plate</li>
                              <li>Clutch shoe</li>
                              <li>Clutch spring</li>
                           </ul>
                        </li>
                        <li>
                           <a href="/wiki/Differential_(mechanical_device)" title="Differential (mechanical device)">Differential</a>
                           <ul>
                              <li>
                                 Differential case
                                 <ul>
                                    <li>Pinion bearing</li>
                                    <li>Differential clutch</li>
                                    <li>Spider gears</li>
                                    <li>Differential casing</li>
                                 </ul>
                              </li>
                              <li>Differential flange</li>
                              <li>Differential gear</li>
                              <li>Differential seal</li>
                           </ul>
                        </li>
                        <li>
                           <a href="/wiki/Flywheel" title="Flywheel">Flywheel</a>
                           <ul>
                              <li>Flywheel ring gear</li>
                           </ul>
                        </li>
                        <li>
                           <a href="/wiki/Gear" title="Gear">Gear</a>
                           <ul>
                              <li>Gear coupling</li>
                              <li>Gear pump</li>
                              <li>Gear ring</li>
                              <li><a href="/wiki/Gear_stick" title="Gear stick">Gear stick</a> (<i>gear-stick</i>, <i>gear lever</i>, <i>selection lever</i>, <i>shift stick</i>, <i>gear shifter</i>)</li>
                           </ul>
                        </li>
                        <li><a href="/wiki/Transmission_(mechanics)" title="Transmission (mechanics)">Gearbox</a></li>
                        <li>Idler gear</li>
                        <li>Knuckle</li>
                        <li>Master cylinder</li>
                        <li>Output shaft</li>
                        <li>Pinion</li>
                        <li>Planetary gear set</li>
                        <li><a href="/wiki/Drive_shaft" title="Drive shaft">Prop shaft</a> (<i>drive shaft</i>, <i>propeller shaft</i>)</li>
                        <li>Shift cable</li>
                        <li>Shift fork</li>
                        <li>Shift knob</li>
                        <li>Shift lever</li>
                        <li>Slave cylinder</li>
                        <li>Speed reducer</li>
                        <li>Speedometer gear</li>
                        <li>Steering gear</li>
                        <li>Torque converter</li>
                        <li>Trans-axle housing</li>
                        <li>Transfer case</li>
                        <li>Transmission gear</li>
                        <li>Transmission pan</li>
                        <li>Transmission seal and bonded piston</li>
                        <li>Transmission spring</li>
                        <li>Transmission yoke</li>
                        <li><a href="/wiki/Universal_joint" title="Universal joint">Universal joint</a> (<i>UJ</i>, <i>card-an joint</i>)</li>
                     </ul>
                  </div>
                  <h2><span class="mw-headline" id="Miscellaneous_auto_parts">Miscellaneous auto parts</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=30" title="Edit section: Miscellaneous auto parts">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
                  <h3><span class="mw-headline" id="Air_conditioning_system_.28A.2FC.29">Air conditioning system (A/C)</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=31" title="Edit section: Air conditioning system (A/C)">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <p>See also <a href="/w/index.php?title=Air_conditioning/Automobile_air_conditioners&amp;action=edit&amp;redlink=1" class="new" title="Air conditioning/Automobile air conditioners (page does not exist)">Air conditioning/Automobile air conditioners</a> systems.</p>
                  <ul>
                     <li>A/C Clutch</li>
                     <li>A/C Compressor</li>
                     <li>A/C Condenser</li>
                     <li>A/C Hose</li>
                     <li>A/C Kit</li>
                     <li>A/C Relay</li>
                     <li>A/C Valve</li>
                     <li>A/C Expansion Valve</li>
                     <li>A/C Low-pressure Valve</li>
                     <li>A/C Schroeder Valve</li>
                     <li>A/C INNER PLATE</li>
                     <li>A/C Cooler</li>
                     <li>A/C Evaporator</li>
                     <li>A/C Suction Hose Pipe</li>
                     <li>A/C Discharge Hose Pipe</li>
                     <li>A/C Gas Receiver</li>
                     <li>A/C Condenser Filter</li>
                     <li>A/C Cabin Filter</li>
                  </ul>
                  <h3><span class="mw-headline" id="Bearings"><a href="/wiki/Bearing_(mechanical)" title="Bearing (mechanical)">Bearings</a></span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=32" title="Edit section: Bearings">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <ul>
                     <li>Grooved ball bearing</li>
                     <li>Needle bearing</li>
                     <li>Roller bearing</li>
                     <li>Sleeve bearing</li>
                     <li>wheel bearing</li>
                  </ul>
                  <h3><span class="mw-headline" id="Hose"><a href="/wiki/Hose" title="Hose">Hose</a></span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=33" title="Edit section: Hose">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <ul>
                     <li>Fuel vapour hose</li>
                     <li>Reinforced hose (<i>high-pressure hose</i>)</li>
                     <li>Non-reinforced hose</li>
                     <li>Radiator hose</li>
                  </ul>
                  <h3><span class="mw-headline" id="Other_miscellaneous_parts">Other miscellaneous parts</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=34" title="Edit section: Other miscellaneous parts">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
                  <ul>
                     <li><a href="/wiki/Adhesive_tape" title="Adhesive tape">Adhesive tape</a> and <a href="/wiki/Foil_(metal)" title="Foil (metal)">foil</a></li>
                     <li><a href="/wiki/Air_bag" class="mw-redirect" title="Air bag">Air bag</a></li>
                     <li><a href="/w/index.php?title=Bolt_cap&amp;action=edit&amp;redlink=1" class="new" title="Bolt cap (page does not exist)">Bolt cap</a></li>
                     <li>
                        Bracket (<i>aluminium</i>, <i>iron</i>, and <i>magnesium bracket</i>)
                        <ul>
                           <li>License plate bracket</li>
                        </ul>
                     </li>
                     <li>
                        Cables
                        <ul>
                           <li>Speedometer cable</li>
                        </ul>
                     </li>
                     <li><a href="/wiki/Split_pin" title="Split pin">Cotter pin</a></li>
                     <li><a href="/wiki/Decal" title="Decal">Decal</a></li>
                     <li>
                        <a href="/wiki/Dashboard" title="Dashboard">Dashboard</a>
                        <ul>
                           <li><a href="/wiki/Center_console_(automobile)" title="Center console (automobile)">Center console</a></li>
                           <li><a href="/wiki/Glove_compartment" title="Glove compartment">Glove compartment</a></li>
                        </ul>
                     </li>
                     <li><a href="/wiki/Drag_link" title="Drag link">Drag link</a></li>
                     <li>Dynamic seal</li>
                     <li><a href="/wiki/Fastener" title="Fastener">Fastener</a></li>
                     <li><a href="/wiki/Gasket" title="Gasket">Gasket</a>: Flat, moulded, profiled</li>
                     <li>Hood and trunk release cable</li>
                     <li><a href="/wiki/Vehicle_horn" title="Vehicle horn">Horn</a> and trumpet horn</li>
                     <li><a href="/wiki/Injection-molded" class="mw-redirect" title="Injection-molded">Injection-molded</a> parts</li>
                     <li>Instrument cluster</li>
                     <li><a href="/wiki/Label" title="Label">Label</a></li>
                     <li><a href="/wiki/Mirror" title="Mirror">Mirror</a></li>
                     <li>Phone Mount</li>
                     <li><a href="/wiki/Name_plate" class="mw-redirect" title="Name plate">Name plate</a></li>
                     <li>
                        <a href="/wiki/Nut_(hardware)" title="Nut (hardware)">Nut</a>
                        <ul>
                           <li><a href="/wiki/Flange_nut" title="Flange nut">Flange nut</a></li>
                           <li><a href="/wiki/Hex_nut" class="mw-redirect" title="Hex nut">Hex nut</a></li>
                        </ul>
                     </li>
                     <li><a href="/wiki/O-ring" title="O-ring">O-ring</a></li>
                     <li><a href="/wiki/Paint" title="Paint">Paint</a></li>
                     <li><a href="/wiki/Rivet" title="Rivet">Rivet</a></li>
                     <li><a href="/wiki/Rubber" class="mw-redirect" title="Rubber">Rubber</a> (extruded and molded)</li>
                     <li><a href="/wiki/Screw" title="Screw">Screw</a></li>
                     <li><a href="/wiki/Shim_(engineering)" class="mw-redirect" title="Shim (engineering)">Shim</a></li>
                     <li><a href="/wiki/Sun_visor" title="Sun visor">Sun visor</a></li>
                     <li><a href="/wiki/Washer_(hardware)" title="Washer (hardware)">Washer</a></li>
                  </ul>
                  <h2><span class="mw-headline" id="See_also">See also</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=35" title="Edit section: See also">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
                  <ul>
                     <li><a href="/wiki/Fuel_economy_in_automobiles" title="Fuel economy in automobiles">Fuel economy in automobiles</a></li>
                     <li><a href="/wiki/Spare_parts_management" title="Spare parts management">Spare parts management</a></li>
                  </ul>
                  <h2><span class="mw-headline" id="References">References</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit&amp;section=36" title="Edit section: References">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
                  <div class="reflist" style="list-style-type: decimal;"></div>
                  <!-- 
                     NewPP limit report
                     Parsed by mw1205
                     Cached time: 20170619172641
                     Cache expiry: 2592000
                     Dynamic content: false
                     CPU time usage: 0.132 seconds
                     Real time usage: 0.160 seconds
                     Preprocessor visited node count: 1760/1000000
                     Preprocessor generated node count: 0/1500000
                     Post‐expand include size: 58326/2097152 bytes
                     Template argument size: 44039/2097152 bytes
                     Highest expansion depth: 8/40
                     Expensive parser function count: 0/500
                     Lua time usage: 0.013/10.000 seconds
                     Lua memory usage: 836 KB/50 MB
                     -->
                  <!--
                     Transclusion expansion time report (%,ms,calls,template)
                     100.00%   81.745      1 -total
                      46.97%   38.397     23 Template:Columns-list
                      40.22%   32.881      4 Template:See_also
                      34.27%   28.011     23 Template:Div_col
                       7.33%    5.992      1 Template:Main_article
                       6.90%    5.638     23 Template:Column-count
                       6.39%    5.226      1 Template:Reflist
                     -->
               </div>
               <!-- Saved in parser cache with key enwiki:pcache:idhash:2938583-0!canonical and timestamp 20170619172647 and revision id 786468536
                  -->
               <noscript><img src="//en.wikipedia.org/wiki/Special:CentralAutoLogin/start?type=1x1" alt="" title="" width="1" height="1" style="border: none; position: absolute;" /></noscript>
            </div>
            <div class="printfooter">
               Retrieved from "<a dir="ltr" href="https://en.wikipedia.org/w/index.php?title=List_of_auto_parts&amp;oldid=786468536">https://en.wikipedia.org/w/index.php?title=List_of_auto_parts&amp;oldid=786468536</a>"                 
            </div>
            <div id="catlinks" class="catlinks" data-mw="interface">
               <div id="mw-normal-catlinks" class="mw-normal-catlinks">
                  <a href="/wiki/Help:Category" title="Help:Category">Categories</a>: 
                  <ul>
                     <li><a href="/wiki/Category:Auto_parts" title="Category:Auto parts">Auto parts</a></li>
                     <li><a href="/wiki/Category:Automobile-related_lists" title="Category:Automobile-related lists">Automobile-related lists</a></li>
                     <li><a href="/wiki/Category:Lists_of_parts" title="Category:Lists of parts">Lists of parts</a></li>
                  </ul>
               </div>
            </div>
            <div class="visualClear"></div>
         </div>
      </div>
      <div id="mw-navigation">
         <h2>Navigation menu</h2>
         <div id="mw-head">
            <div id="p-personal" role="navigation" class="" aria-labelledby="p-personal-label">
               <h3 id="p-personal-label">Personal tools</h3>
               <ul>
                  <li id="pt-anonuserpage">Not logged in</li>
                  <li id="pt-anontalk"><a href="/wiki/Special:MyTalk" title="Discussion about edits from this IP address [n]" accesskey="n">Talk</a></li>
                  <li id="pt-anoncontribs"><a href="/wiki/Special:MyContributions" title="A list of edits made from this IP address [y]" accesskey="y">Contributions</a></li>
                  <li id="pt-createaccount"><a href="/w/index.php?title=Special:CreateAccount&amp;returnto=List+of+auto+parts" title="You are encouraged to create an account and log in; however, it is not mandatory">Create account</a></li>
                  <li id="pt-login"><a href="/w/index.php?title=Special:UserLogin&amp;returnto=List+of+auto+parts" title="You're encouraged to log in; however, it's not mandatory. [o]" accesskey="o">Log in</a></li>
               </ul>
            </div>
            <div id="left-navigation">
               <div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
                  <h3 id="p-namespaces-label">Namespaces</h3>
                  <ul>
                     <li  id="ca-nstab-main" class="selected"><span><a href="/wiki/List_of_auto_parts"  title="View the content page [c]" accesskey="c">Article</a></span></li>
                     <li  id="ca-talk"><span><a href="/wiki/Talk:List_of_auto_parts"  title="Discussion about the content page [t]" accesskey="t" rel="discussion">Talk</a></span></li>
                  </ul>
               </div>
               <div id="p-variants" role="navigation" class="vectorMenu emptyPortlet" aria-labelledby="p-variants-label">
                  <h3 id="p-variants-label">
                     <span>Variants</span><a href="#"></a>
                  </h3>
                  <div class="menu">
                     <ul>
                     </ul>
                  </div>
               </div>
            </div>
            <div id="right-navigation">
               <div id="p-views" role="navigation" class="vectorTabs" aria-labelledby="p-views-label">
                  <h3 id="p-views-label">Views</h3>
                  <ul>
                     <li id="ca-view" class="selected"><span><a href="/wiki/List_of_auto_parts" >Read</a></span></li>
                     <li id="ca-edit"><span><a href="/w/index.php?title=List_of_auto_parts&amp;action=edit"  title="Edit this page [e]" accesskey="e">Edit</a></span></li>
                     <li id="ca-history" class="collapsible"><span><a href="/w/index.php?title=List_of_auto_parts&amp;action=history"  title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>
                  </ul>
               </div>
               <div id="p-cactions" role="navigation" class="vectorMenu emptyPortlet" aria-labelledby="p-cactions-label">
                  <h3 id="p-cactions-label"><span>More</span><a href="#"></a></h3>
                  <div class="menu">
                     <ul>
                     </ul>
                  </div>
               </div>
               <div id="p-search" role="search">
                  <h3>
                     <label for="searchInput">Search</label>
                  </h3>
                  <form action="/w/index.php" id="searchform">
                     <div id="simpleSearch">
                        <input type="search" name="search" placeholder="Search Wikipedia" title="Search Wikipedia [f]" accesskey="f" id="searchInput"/><input type="hidden" value="Special:Search" name="title"/><input type="submit" name="fulltext" value="Search" title="Search Wikipedia for this text" id="mw-searchButton" class="searchButton mw-fallbackSearchButton"/><input type="submit" name="go" value="Go" title="Go to a page with this exact name if it exists" id="searchButton" class="searchButton"/>                            
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div id="mw-panel">
            <div id="p-logo" role="banner"><a class="mw-wiki-logo" href="/wiki/Main_Page"  title="Visit the main page"></a></div>
            <div class="portal" role="navigation" id='p-navigation' aria-labelledby='p-navigation-label'>
               <h3 id='p-navigation-label'>Navigation</h3>
               <div class="body">
                  <ul>
                     <li id="n-mainpage-description"><a href="/wiki/Main_Page" title="Visit the main page [z]" accesskey="z">Main page</a></li>
                     <li id="n-contents"><a href="/wiki/Portal:Contents" title="Guides to browsing Wikipedia">Contents</a></li>
                     <li id="n-featuredcontent"><a href="/wiki/Portal:Featured_content" title="Featured content – the best of Wikipedia">Featured content</a></li>
                     <li id="n-currentevents"><a href="/wiki/Portal:Current_events" title="Find background information on current events">Current events</a></li>
                     <li id="n-randompage"><a href="/wiki/Special:Random" title="Load a random article [x]" accesskey="x">Random article</a></li>
                     <li id="n-sitesupport"><a href="https://donate.wikimedia.org/wiki/Special:FundraiserRedirector?utm_source=donate&amp;utm_medium=sidebar&amp;utm_campaign=C13_en.wikipedia.org&amp;uselang=en" title="Support us">Donate to Wikipedia</a></li>
                     <li id="n-shoplink"><a href="//shop.wikimedia.org" title="Visit the Wikipedia store">Wikipedia store</a></li>
                  </ul>
               </div>
            </div>
            <div class="portal" role="navigation" id='p-interaction' aria-labelledby='p-interaction-label'>
               <h3 id='p-interaction-label'>Interaction</h3>
               <div class="body">
                  <ul>
                     <li id="n-help"><a href="/wiki/Help:Contents" title="Guidance on how to use and edit Wikipedia">Help</a></li>
                     <li id="n-aboutsite"><a href="/wiki/Wikipedia:About" title="Find out about Wikipedia">About Wikipedia</a></li>
                     <li id="n-portal"><a href="/wiki/Wikipedia:Community_portal" title="About the project, what you can do, where to find things">Community portal</a></li>
                     <li id="n-recentchanges"><a href="/wiki/Special:RecentChanges" title="A list of recent changes in the wiki [r]" accesskey="r">Recent changes</a></li>
                     <li id="n-contactpage"><a href="//en.wikipedia.org/wiki/Wikipedia:Contact_us" title="How to contact Wikipedia">Contact page</a></li>
                  </ul>
               </div>
            </div>
            <div class="portal" role="navigation" id='p-tb' aria-labelledby='p-tb-label'>
               <h3 id='p-tb-label'>Tools</h3>
               <div class="body">
                  <ul>
                     <li id="t-whatlinkshere"><a href="/wiki/Special:WhatLinksHere/List_of_auto_parts" title="List of all English Wikipedia pages containing links to this page [j]" accesskey="j">What links here</a></li>
                     <li id="t-recentchangeslinked"><a href="/wiki/Special:RecentChangesLinked/List_of_auto_parts" rel="nofollow" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
                     <li id="t-upload"><a href="/wiki/Wikipedia:File_Upload_Wizard" title="Upload files [u]" accesskey="u">Upload file</a></li>
                     <li id="t-specialpages"><a href="/wiki/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
                     <li id="t-permalink"><a href="/w/index.php?title=List_of_auto_parts&amp;oldid=786468536" title="Permanent link to this revision of the page">Permanent link</a></li>
                     <li id="t-info"><a href="/w/index.php?title=List_of_auto_parts&amp;action=info" title="More information about this page">Page information</a></li>
                     <li id="t-wikibase"><a href="https://www.wikidata.org/wiki/Q6405028" title="Link to connected data repository item [g]" accesskey="g">Wikidata item</a></li>
                     <li id="t-cite"><a href="/w/index.php?title=Special:CiteThisPage&amp;page=List_of_auto_parts&amp;id=786468536" title="Information on how to cite this page">Cite this page</a></li>
                  </ul>
               </div>
            </div>
            <div class="portal" role="navigation" id='p-coll-print_export' aria-labelledby='p-coll-print_export-label'>
               <h3 id='p-coll-print_export-label'>Print/export</h3>
               <div class="body">
                  <ul>
                     <li id="coll-create_a_book"><a href="/w/index.php?title=Special:Book&amp;bookcmd=book_creator&amp;referer=List+of+auto+parts">Create a book</a></li>
                     <li id="coll-download-as-rdf2latex"><a href="/w/index.php?title=Special:ElectronPdf&amp;page=List+of+auto+parts&amp;action=show-selection-screen&amp;coll-download-url=%2Fw%2Findex.php%3Ftitle%3DSpecial%3ABook%26bookcmd%3Drender_article%26arttitle%3DList%2Bof%2Bauto%2Bparts%26returnto%3DList%2Bof%2Bauto%2Bparts%26oldid%3D786468536%26writer%3Drdf2latex">Download as PDF</a></li>
                     <li id="t-print"><a href="/w/index.php?title=List_of_auto_parts&amp;printable=yes" title="Printable version of this page [p]" accesskey="p">Printable version</a></li>
                  </ul>
               </div>
            </div>
            <div class="portal" role="navigation" id='p-wikibase-otherprojects' aria-labelledby='p-wikibase-otherprojects-label'>
               <h3 id='p-wikibase-otherprojects-label'>In other projects</h3>
               <div class="body">
                  <ul>
                     <li class="wb-otherproject-link wb-otherproject-commons"><a href="https://commons.wikimedia.org/wiki/Category:Vehicle_parts" hreflang="en">Wikimedia Commons</a></li>
                  </ul>
               </div>
            </div>
            <div class="portal" role="navigation" id='p-lang' aria-labelledby='p-lang-label'>
               <h3 id='p-lang-label'>Languages</h3>
               <div class="body">
                  <ul>
                     <li class="interlanguage-link interwiki-ar"><a href="https://ar.wikipedia.org/wiki/%D9%82%D8%A7%D8%A6%D9%85%D8%A9_%D9%82%D8%B7%D8%B9_%D8%A7%D9%84%D8%B3%D9%8A%D8%A7%D8%B1%D8%A9" title="قائمة قطع السيارة – Arabic" lang="ar" hreflang="ar" class="interlanguage-link-target">العربية</a></li>
                     <li class="interlanguage-link interwiki-fa"><a href="https://fa.wikipedia.org/wiki/%D9%81%D9%87%D8%B1%D8%B3%D8%AA_%D9%82%D8%B7%D8%B9%D8%A7%D8%AA_%D8%AE%D9%88%D8%AF%D8%B1%D9%88" title="فهرست قطعات خودرو – Persian" lang="fa" hreflang="fa" class="interlanguage-link-target">فارسی</a></li>
                     <li class="interlanguage-link interwiki-mn"><a href="https://mn.wikipedia.org/wiki/%D0%90%D0%B2%D1%82%D0%BE%D0%BC%D0%B0%D1%88%D0%B8%D0%BD%D1%8B_%D1%8D%D0%B4_%D0%B0%D0%BD%D0%B3%D0%B8%D1%83%D0%B4%D1%8B%D0%BD_%D0%B6%D0%B0%D0%B3%D1%81%D0%B0%D0%B0%D0%BB%D1%82" title="Автомашины эд ангиудын жагсаалт – Mongolian" lang="mn" hreflang="mn" class="interlanguage-link-target">Монгол</a></li>
                     <li class="interlanguage-link interwiki-zh"><a href="https://zh.wikipedia.org/wiki/%E6%B1%BD%E8%BB%8A%E9%9B%B6%E7%B5%84%E4%BB%B6%E5%88%97%E8%A1%A8" title="汽車零組件列表 – Chinese" lang="zh" hreflang="zh" class="interlanguage-link-target">中文</a></li>
                  </ul>
                  <div class="after-portlet after-portlet-lang"><span class="wb-langlinks-edit wb-langlinks-link"><a href="https://www.wikidata.org/wiki/Q6405028#sitelinks-wikipedia" title="Edit interlanguage links" class="wbc-editpage">Edit links</a></span></div>
               </div>
            </div>
         </div>
      </div>
      <div id="footer" role="contentinfo">
         <ul id="footer-info">
            <li id="footer-info-lastmod"> This page was last edited on 19 June 2017, at 17:26.</li>
            <li id="footer-info-copyright">Text is available under the <a rel="license" href="//en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License">Creative Commons Attribution-ShareAlike License</a><a rel="license" href="//creativecommons.org/licenses/by-sa/3.0/" style="display:none;"></a>;
               additional terms may apply.  By using this site, you agree to the <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Terms of Use</a> and <a href="//wikimediafoundation.org/wiki/Privacy_policy">Privacy Policy</a>. Wikipedia® is a registered trademark of the <a href="//www.wikimediafoundation.org/">Wikimedia Foundation, Inc.</a>, a non-profit organization.
            </li>
         </ul>
         <ul id="footer-places">
            <li id="footer-places-privacy"><a href="https://wikimediafoundation.org/wiki/Privacy_policy" class="extiw" title="wmf:Privacy policy">Privacy policy</a></li>
            <li id="footer-places-about"><a href="/wiki/Wikipedia:About" title="Wikipedia:About">About Wikipedia</a></li>
            <li id="footer-places-disclaimer"><a href="/wiki/Wikipedia:General_disclaimer" title="Wikipedia:General disclaimer">Disclaimers</a></li>
            <li id="footer-places-contact"><a href="//en.wikipedia.org/wiki/Wikipedia:Contact_us">Contact Wikipedia</a></li>
            <li id="footer-places-developers"><a href="https://www.mediawiki.org/wiki/Special:MyLanguage/How_to_contribute">Developers</a></li>
            <li id="footer-places-cookiestatement"><a href="https://wikimediafoundation.org/wiki/Cookie_statement">Cookie statement</a></li>
            <li id="footer-places-mobileview"><a href="//en.m.wikipedia.org/w/index.php?title=List_of_auto_parts&amp;mobileaction=toggle_view_mobile" class="noprint stopMobileRedirectToggle">Mobile view</a></li>
         </ul>
         <ul id="footer-icons" class="noprint">
            <li id="footer-copyrightico">
               <a href="https://wikimediafoundation.org/"><img src="/static/images/wikimedia-button.png" srcset="/static/images/wikimedia-button-1.5x.png 1.5x, /static/images/wikimedia-button-2x.png 2x" width="88" height="31" alt="Wikimedia Foundation"/></a>                      
            </li>
            <li id="footer-poweredbyico">
               <a href="//www.mediawiki.org/"><img src="/static/images/poweredby_mediawiki_88x31.png" alt="Powered by MediaWiki" srcset="/static/images/poweredby_mediawiki_132x47.png 1.5x, /static/images/poweredby_mediawiki_176x62.png 2x" width="88" height="31"/></a>                     
            </li>
         </ul>
         <div style="clear:both"></div>
      </div>
      <script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgPageParseReport":{"limitreport":{"cputime":"0.132","walltime":"0.160","ppvisitednodes":{"value":1760,"limit":1000000},"ppgeneratednodes":{"value":0,"limit":1500000},"postexpandincludesize":{"value":58326,"limit":2097152},"templateargumentsize":{"value":44039,"limit":2097152},"expansiondepth":{"value":8,"limit":40},"expensivefunctioncount":{"value":0,"limit":500},"entityaccesscount":{"value":0,"limit":400},"timingprofile":["100.00%   81.745      1 -total"," 46.97%   38.397     23 Template:Columns-list"," 40.22%   32.881      4 Template:See_also"," 34.27%   28.011     23 Template:Div_col","  7.33%    5.992      1 Template:Main_article","  6.90%    5.638     23 Template:Column-count","  6.39%    5.226      1 Template:Reflist"]},"scribunto":{"limitreport-timeusage":{"value":"0.013","limit":"10.000"},"limitreport-memusage":{"value":856041,"limit":52428800}},"cachereport":{"origin":"mw1205","timestamp":"20170619172641","ttl":2592000,"transientcontent":false}}});});</script><script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgBackendResponseTime":57,"wgHostname":"mw1255"});});</script>
   </body>
</html>


à   &#224;  &agrave;    Latin Small Letter A with grave 0160
U+00E1  á   &#225;  &aacute;    Latin Small Letter A with acute 0161
U+00E2  â   &#226;  &acirc; Latin Small Letter A with circumflex    0162
U+00E3  ã   &#227;  &atilde;    Latin Small Letter A with tilde 0163
U+00E4  ä   &#228;  &auml;  Latin Small Letter A with diaeresis 0164
U+00E5  å


EOD;


        //THIS IS FOR TEXT MULTI LINE

        //preg_match_all('/^[a-zA-Z]([\w -]*[a-zA-Z])?/im', $str, $matches, PREG_OFFSET_CAPTURE);

        // <a href="\/brand\/[a-zA-Zü]+([\w -_]*[a-zA-Z])?.php">

        preg_match_all('/(?<=(>))[^edit][a-zA-Züàáâãäå\/]+([\w -]*[a-zA-Züàáâãäå\/ \)\()])(?=( \())/im', $str, $matches, PREG_OFFSET_CAPTURE);

        //preg_match_all('/(?<=(">))[a-zA-Zü]+([\w -]*[a-zA-Z0-9])(?=(<\/a>))/im', $str, $matches, PREG_OFFSET_CAPTURE);

        $matches = $matches[0];
        

//        $counter = 1;

       foreach ($matches as $k => $v) {
            # code...
            /*
            if( $counter%2 == 0 ){

                array_push($newMatches, $v[0]);

            }
            
            $counter++;*/
            array_push($newMatches, $v[0]);

        }
        

        foreach ($newMatches as $k => $v) {
            # code...
            $newSQL = $newSQL."DB::table('cars')->insert([ 'parent_id' => 0, 'name' => '$v', 'slug' => '".sluggify($v). "']);";
        }

        return $newSQL;



        
            

}


    

    
}
