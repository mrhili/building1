<?Php


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

    public function test()
    {

        $matches = array();

        $newMatches = array();

        $newSQL = "";
/*
$str = <<<EOD

EOD;

*/

$str = <<<EOD

<meta name="ResourceLoaderDynamicStyles" content=""/>
<link rel="stylesheet" href="/w/load.php?debug=false&amp;lang=en&amp;modules=site.styles&amp;only=styles&amp;skin=vector"/>
<meta name="generator" content="MediaWiki 1.30.0-wmf.5"/>
<meta name="referrer" content="origin-when-cross-origin"/>
<meta property="og:image" content="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Provincial_Ace_Cougar_3_H523CTR.jpg/1200px-Provincial_Ace_Cougar_3_H523CTR.jpg"/>
<link rel="alternate" href="android-app://org.wikipedia/http/simple.m.wikipedia.org/wiki/List_of_bus_models"/>
<link rel="alternate" type="application/x-wiki" title="change this page" href="/w/index.php?title=List_of_bus_models&amp;action=edit"/>
<link rel="edit" title="change this page" href="/w/index.php?title=List_of_bus_models&amp;action=edit"/>
<link rel="apple-touch-icon" href="/static/apple-touch/wikipedia.png"/>
<link rel="shortcut icon" href="/static/favicon/wikipedia.ico"/>
<link rel="search" type="application/opensearchdescription+xml" href="/w/opensearch_desc.php" title="Wikipedia (en)"/>
<link rel="EditURI" type="application/rsd+xml" href="//simple.wikipedia.org/w/api.php?action=rsd"/>
<link rel="copyright" href="//creativecommons.org/licenses/by-sa/3.0/"/>
<link rel="canonical" href="https://simple.wikipedia.org/wiki/List_of_bus_models"/>
<link rel="dns-prefetch" href="//login.wikimedia.org"/>
<link rel="dns-prefetch" href="//meta.wikimedia.org" />
</head>
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject page-List_of_bus_models rootpage-List_of_bus_models skin-vector action-view">      <div id="mw-page-base" class="noprint"></div>
        <div id="mw-head-base" class="noprint"></div>
        <div id="content" class="mw-body" role="main">
            <a id="top"></a>

                            <div id="siteNotice" class="mw-body-content"><!-- CentralNotice --></div>
                        <div class="mw-indicators mw-body-content">
</div>
            <h1 id="firstHeading" class="firstHeading" lang="en">List of bus models</h1>
                                    <div id="bodyContent" class="mw-body-content">
                                    <div id="siteSub">From Wikipedia, the free encyclopedia</div>
                                <div id="contentSub"></div>
                                                <div id="jump-to-nav" class="mw-jump">
                    Jump to:                    <a href="#mw-head">navigation</a>,                  <a href="#p-search">search</a>
                </div>
                <div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><div class="mw-parser-output"><table class="metadata plainlinks ambox ambox-content ambox-multiple_issues compact-ambox" style="">
<tr>
<td class="mbox-image">
<div style="width: 52px;"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/f/f4/Ambox_content.png" width="40" height="40" data-file-width="40" data-file-height="40" /></div>
</td>
<td class="mbox-text" style=""><span class="mbox-text-span"><b>This article has many issues</b>. Please help <b><a class="external text" href="//simple.wikipedia.org/w/index.php?title=List_of_bus_models&amp;action=edit">fix them</a></b> or discuss these issues on the <b><a href="/wiki/Talk:List_of_bus_models" title="Talk:List of bus models">talk page</a></b>.</span>
<table class="metadata plainlinks ambox ambox-content" style="">
<tr>
<td class="mbox-image">
<div style="width: 52px;"><img alt="Question book-4.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/64/Question_book-4.svg/50px-Question_book-4.svg.png" width="50" height="39" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/64/Question_book-4.svg/75px-Question_book-4.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/64/Question_book-4.svg/100px-Question_book-4.svg.png 2x" data-file-width="262" data-file-height="204" /></div>
</td>
<td class="mbox-text" style=""><span class="mbox-text-span">This article <b>does not have any <a href="/wiki/Wikipedia:Citing_sources" title="Wikipedia:Citing sources">sources</a></b>. <span class="hide-when-compact">You can help Wikipedia by finding <a href="/wiki/Wikipedia:RELIABLE" class="mw-redirect" title="Wikipedia:RELIABLE">good</a> sources, and adding them.</span> <small><i>(December 2011)</i></small> </span></td>
</tr>
</table>
<table class="metadata plainlinks ambox ambox-style ambox-Orphan" style="">
<tr>
<td class="mbox-image">
<div style="width: 52px;"><a href="/wiki/File:Wiki_letter_w.svg" class="image"><img alt="Wiki letter w.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Wiki_letter_w.svg/44px-Wiki_letter_w.svg.png" width="44" height="44" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Wiki_letter_w.svg/66px-Wiki_letter_w.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Wiki_letter_w.svg/88px-Wiki_letter_w.svg.png 2x" data-file-width="44" data-file-height="44" /></a></div>
</td>
<td class="mbox-text" style=""><span class="mbox-text-span"><span class="plainlinks">This article is <b><a href="/wiki/Wikipedia:Orphan" title="Wikipedia:Orphan">orphaned</a></b>. Few or no other articles <a class="external text" href="//simple.wikipedia.org/w/index.php?title=Special:Whatlinkshere&amp;target=List_of_bus_models&amp;namespace=0">link to it</a>. <span class="hide-when-compact"><br />
Please help by <a href="/wiki/Help:Link" title="Help:Link">adding links</a> to this page from <a class="external text" href="//simple.wikipedia.org/w/index.php?title=Special%3ASearch&amp;redirs=1&amp;search=List+of+bus+models&amp;fulltext=Search&amp;ns0=1&amp;title=Special%3ASearch&amp;advanced=1&amp;fulltext=List+of+bus+models">related articles</a>.</span> <small><i>(October 2011)</i></small> </span></span></td>
</tr>
</table>
<table class="metadata plainlinks ambox ambox-style" style="">
<tr>
<td class="mbox-image">
<div style="width: 52px;"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Edit-clear.svg/40px-Edit-clear.svg.png" width="40" height="40" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Edit-clear.svg/60px-Edit-clear.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Edit-clear.svg/80px-Edit-clear.svg.png 2x" data-file-width="48" data-file-height="48" /></div>
</td>
<td class="mbox-text" style=""><span class="mbox-text-span">This article may have <b>too many <a href="/wiki/Wikipedia:Red_link" title="Wikipedia:Red link">red links</a>.</b> <span class="hide-when-compact"><small>You can help Wikipedia by writing articles to help lower the number of red links.</small></span> <small><i>(December 2011)</i></small> </span></td>
</tr>
</table>
</td>
</tr>
</table>
<p>The following is a <b>list of <a href="/wiki/Bus" title="Bus">buses</a></b>. It is not complete. The different types of bus, used in this chart, are:</p>
<ul>
<li><a href="/wiki/Single-deck_bus" class="mw-redirect" title="Single-deck bus">Single-deck</a> (SD)</li>
<li><a href="/wiki/Double-decker_bus" class="mw-redirect" title="Double-decker bus">Double-decker</a> (DD)</li>
<li><a href="/wiki/Coach_(vehicle)" class="mw-redirect" title="Coach (vehicle)">Coach</a> (C)</li>
<li><a href="/wiki/School_bus" class="mw-redirect" title="School bus">School bus</a> (SB)</li>
<li><a href="/wiki/Minibus" class="mw-redirect" title="Minibus">Minibus</a> (MB)</li>
</ul>
<p>There are over 300 buses in this list. The year that is displayed refers to the first year of the model.</p>
<table class="wikitable sortable" style="width:100%; height:120px;" cellpadding="5">
<tr>
<th style="width:17%;">Model name</th>
<th style="width:20%;">Picture</th>
<th style="width:10%;">What this bus is</th>
<th style="width:20%;">Who makes this bus</th>
<th style="width:5%;">The year the bus was made</th>
<th style="width:23%;">Extra notes</th>
</tr>
<tr>
<td><a href="/w/index.php?title=ACE_Cougar&amp;action=edit&amp;redlink=1" class="new" title="ACE Cougar (not yet started)">ACE Cougar</a></td>
<td><a href="/wiki/File:Provincial_Ace_Cougar_3_H523CTR.jpg" class="image"><img alt="Provincial Ace Cougar 3 H523CTR.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/72/Provincial_Ace_Cougar_3_H523CTR.jpg/120px-Provincial_Ace_Cougar_3_H523CTR.jpg" width="120" height="87" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/72/Provincial_Ace_Cougar_3_H523CTR.jpg/180px-Provincial_Ace_Cougar_3_H523CTR.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/72/Provincial_Ace_Cougar_3_H523CTR.jpg/240px-Provincial_Ace_Cougar_3_H523CTR.jpg 2x" data-file-width="1238" data-file-height="897" /></a></td>
<td>SD</td>
<td>Alternative Chassis Engineering</td>
<td>1991</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=AEC_Q-type&amp;action=edit&amp;redlink=1" class="new" title="AEC Q-type (not yet started)">AEC Q-type</a></td>
<td><a href="/wiki/File:Q_83_in_red.jpg" class="image"><img alt="Q 83 in red.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Q_83_in_red.jpg/120px-Q_83_in_red.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Q_83_in_red.jpg/180px-Q_83_in_red.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/52/Q_83_in_red.jpg/240px-Q_83_in_red.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD/DD</td>
<td><a href="/w/index.php?title=Associated_Equipment_Company&amp;action=edit&amp;redlink=1" class="new" title="Associated Equipment Company (not yet started)">Associated Equipment Company</a></td>
<td>1932</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=AEC_Regal_VI&amp;action=edit&amp;redlink=1" class="new" title="AEC Regal VI (not yet started)">AEC Regal VI</a></td>
<td><a href="/wiki/File:MTT-AECRegalVI-BPSWA.JPG" class="image"><img alt="MTT-AECRegalVI-BPSWA.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d8/MTT-AECRegalVI-BPSWA.JPG/120px-MTT-AECRegalVI-BPSWA.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d8/MTT-AECRegalVI-BPSWA.JPG/180px-MTT-AECRegalVI-BPSWA.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d8/MTT-AECRegalVI-BPSWA.JPG/240px-MTT-AECRegalVI-BPSWA.JPG 2x" data-file-width="3648" data-file-height="2736" /></a></td>
<td>SD</td>
<td>Associated Equipment Company</td>
<td>1960 (circa)</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=AEC_Regent_II&amp;action=edit&amp;redlink=1" class="new" title="AEC Regent II (not yet started)">AEC Regent II</a></td>
<td><a href="/wiki/File:Lowestoft_Corporation_AEC_Regent_II_GBJ_192_(7362975300).jpg" class="image"><img alt="Lowestoft Corporation AEC Regent II GBJ 192 (7362975300).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Lowestoft_Corporation_AEC_Regent_II_GBJ_192_%287362975300%29.jpg/120px-Lowestoft_Corporation_AEC_Regent_II_GBJ_192_%287362975300%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Lowestoft_Corporation_AEC_Regent_II_GBJ_192_%287362975300%29.jpg/180px-Lowestoft_Corporation_AEC_Regent_II_GBJ_192_%287362975300%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Lowestoft_Corporation_AEC_Regent_II_GBJ_192_%287362975300%29.jpg/240px-Lowestoft_Corporation_AEC_Regent_II_GBJ_192_%287362975300%29.jpg 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>DD</td>
<td>Associated Equipment Company</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=AEC_Regent_III&amp;action=edit&amp;redlink=1" class="new" title="AEC Regent III (not yet started)">AEC Regent III</a></td>
<td><a href="/wiki/File:309-0506-rlh48-rlh32-s.jpg" class="image"><img alt="309-0506-rlh48-rlh32-s.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/309-0506-rlh48-rlh32-s.jpg/120px-309-0506-rlh48-rlh32-s.jpg" width="120" height="99" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/309-0506-rlh48-rlh32-s.jpg/180px-309-0506-rlh48-rlh32-s.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/309-0506-rlh48-rlh32-s.jpg/240px-309-0506-rlh48-rlh32-s.jpg 2x" data-file-width="260" data-file-height="214" /></a></td>
<td>DD</td>
<td>Associated Equipment Company</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=AEC_Regent_V&amp;action=edit&amp;redlink=1" class="new" title="AEC Regent V (not yet started)">AEC Regent V</a></td>
<td><a href="/wiki/File:Mayne_Coaches_8859_VR.JPG" class="image"><img alt="Mayne Coaches 8859 VR.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Mayne_Coaches_8859_VR.JPG/120px-Mayne_Coaches_8859_VR.JPG" width="120" height="112" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Mayne_Coaches_8859_VR.JPG/180px-Mayne_Coaches_8859_VR.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Mayne_Coaches_8859_VR.JPG/240px-Mayne_Coaches_8859_VR.JPG 2x" data-file-width="2230" data-file-height="2088" /></a></td>
<td>DD</td>
<td>Associated Equipment Company</td>
<td>1954</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=AEC_Reliance&amp;action=edit&amp;redlink=1" class="new" title="AEC Reliance (not yet started)">AEC Reliance</a></td>
<td><a href="/wiki/File:Maidstone_%26_District_S6.JPG" class="image"><img alt="Maidstone &amp; District S6.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Maidstone_%26_District_S6.JPG/120px-Maidstone_%26_District_S6.JPG" width="120" height="110" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Maidstone_%26_District_S6.JPG/180px-Maidstone_%26_District_S6.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Maidstone_%26_District_S6.JPG/240px-Maidstone_%26_District_S6.JPG 2x" data-file-width="1843" data-file-height="1687" /></a></td>
<td>SD/C</td>
<td>Associated Equipment Company</td>
<td>1953</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=AEC_Routemaster&amp;action=edit&amp;redlink=1" class="new" title="AEC Routemaster (not yet started)">AEC Routemaster</a></td>
<td><a href="/wiki/File:Routemaster_RM1_A.jpg" class="image"><img alt="Routemaster RM1 A.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Routemaster_RM1_A.jpg/120px-Routemaster_RM1_A.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Routemaster_RM1_A.jpg/180px-Routemaster_RM1_A.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Routemaster_RM1_A.jpg/240px-Routemaster_RM1_A.jpg 2x" data-file-width="3648" data-file-height="2736" /></a></td>
<td>DD</td>
<td>Associated Equipment Company</td>
<td>1954</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=AEC_Swift&amp;action=edit&amp;redlink=1" class="new" title="AEC Swift (not yet started)">AEC Swift</a></td>
<td><a href="/wiki/File:St_Helens_Corporation_248.JPG" class="image"><img alt="St Helens Corporation 248.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b0/St_Helens_Corporation_248.JPG/120px-St_Helens_Corporation_248.JPG" width="120" height="102" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b0/St_Helens_Corporation_248.JPG/180px-St_Helens_Corporation_248.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b0/St_Helens_Corporation_248.JPG/240px-St_Helens_Corporation_248.JPG 2x" data-file-width="1842" data-file-height="1573" /></a></td>
<td>SD</td>
<td>Associated Equipment Company</td>
<td>1964</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Albion_Aberdonian&amp;action=edit&amp;redlink=1" class="new" title="Albion Aberdonian (not yet started)">Albion Aberdonian</a></td>
<td></td>
<td>SD</td>
<td><a href="/w/index.php?title=Albion_Motors&amp;action=edit&amp;redlink=1" class="new" title="Albion Motors (not yet started)">Albion Motors</a></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Albion_Nimbus&amp;action=edit&amp;redlink=1" class="new" title="Albion Nimbus (not yet started)">Albion Nimbus</a></td>
<td><a href="/wiki/File:Guernsey_tour_bus_75_Albion_Nimbus_JNP_590C_Metrocentre_rally_2009_pic_3.JPG" class="image"><img alt="Guernsey tour bus 75 Albion Nimbus JNP 590C Metrocentre rally 2009 pic 3.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/45/Guernsey_tour_bus_75_Albion_Nimbus_JNP_590C_Metrocentre_rally_2009_pic_3.JPG/120px-Guernsey_tour_bus_75_Albion_Nimbus_JNP_590C_Metrocentre_rally_2009_pic_3.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/45/Guernsey_tour_bus_75_Albion_Nimbus_JNP_590C_Metrocentre_rally_2009_pic_3.JPG/180px-Guernsey_tour_bus_75_Albion_Nimbus_JNP_590C_Metrocentre_rally_2009_pic_3.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/45/Guernsey_tour_bus_75_Albion_Nimbus_JNP_590C_Metrocentre_rally_2009_pic_3.JPG/240px-Guernsey_tour_bus_75_Albion_Nimbus_JNP_590C_Metrocentre_rally_2009_pic_3.JPG 2x" data-file-width="3648" data-file-height="2736" /></a></td>
<td>SD</td>
<td>Albion Motors</td>
<td>1955</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Alexander_ALX100&amp;action=edit&amp;redlink=1" class="new" title="Alexander ALX100 (not yet started)">Alexander ALX100</a></td>
<td><a href="/wiki/File:Arriva_Midlands_North_1159.jpg" class="image"><img alt="Arriva Midlands North 1159.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Arriva_Midlands_North_1159.jpg/120px-Arriva_Midlands_North_1159.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Arriva_Midlands_North_1159.jpg/180px-Arriva_Midlands_North_1159.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Arriva_Midlands_North_1159.jpg/240px-Arriva_Midlands_North_1159.jpg 2x" data-file-width="800" data-file-height="600" /></a></td>
<td>MB</td>
<td><a href="/w/index.php?title=Walter_Alexander_Coachbuilders&amp;action=edit&amp;redlink=1" class="new" title="Walter Alexander Coachbuilders (not yet started)">Walter Alexander Coachbuilders</a></td>
<td>1997</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Alexander_ALX200&amp;action=edit&amp;redlink=1" class="new" title="Alexander ALX200 (not yet started)">Alexander ALX200</a></td>
<td><a href="/wiki/File:Arriva_NWW_Dart_ALX200_1.jpg" class="image"><img alt="Arriva NWW Dart ALX200 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/69/Arriva_NWW_Dart_ALX200_1.jpg/120px-Arriva_NWW_Dart_ALX200_1.jpg" width="120" height="85" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/69/Arriva_NWW_Dart_ALX200_1.jpg/180px-Arriva_NWW_Dart_ALX200_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/69/Arriva_NWW_Dart_ALX200_1.jpg/240px-Arriva_NWW_Dart_ALX200_1.jpg 2x" data-file-width="1121" data-file-height="795" /></a></td>
<td>SD</td>
<td>Walter Alexander Coachbuilders/TransBus</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Alexander_ALX300&amp;action=edit&amp;redlink=1" class="new" title="Alexander ALX300 (not yet started)">Alexander ALX300</a></td>
<td><a href="/wiki/File:Alexander_ALX300_1.jpg" class="image"><img alt="Alexander ALX300 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/08/Alexander_ALX300_1.jpg/120px-Alexander_ALX300_1.jpg" width="120" height="89" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/08/Alexander_ALX300_1.jpg/180px-Alexander_ALX300_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/08/Alexander_ALX300_1.jpg/240px-Alexander_ALX300_1.jpg 2x" data-file-width="1274" data-file-height="948" /></a></td>
<td>SD</td>
<td>Walter Alexander Coachbuilders/TransBus/Alexander Dennis</td>
<td>1997</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Alexander_Dash&amp;action=edit&amp;redlink=1" class="new" title="Alexander Dash (not yet started)">Alexander Dash</a></td>
<td><a href="/wiki/File:Stagecoach_Hampshire_32309.JPG" class="image"><img alt="Stagecoach Hampshire 32309.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Stagecoach_Hampshire_32309.JPG/120px-Stagecoach_Hampshire_32309.JPG" width="120" height="72" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Stagecoach_Hampshire_32309.JPG/180px-Stagecoach_Hampshire_32309.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/00/Stagecoach_Hampshire_32309.JPG/240px-Stagecoach_Hampshire_32309.JPG 2x" data-file-width="2218" data-file-height="1336" /></a></td>
<td>SD</td>
<td>Walter Alexander Coachbuilders</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Alexander_Dennis_Enviro200_Dart&amp;action=edit&amp;redlink=1" class="new" title="Alexander Dennis Enviro200 Dart (not yet started)">Alexander Dennis Enviro200 Dart</a></td>
<td><a href="/wiki/File:Compass_Bus_GX09_AGZ.JPG" class="image"><img alt="Compass Bus GX09 AGZ.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Compass_Bus_GX09_AGZ.JPG/120px-Compass_Bus_GX09_AGZ.JPG" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Compass_Bus_GX09_AGZ.JPG/180px-Compass_Bus_GX09_AGZ.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Compass_Bus_GX09_AGZ.JPG/240px-Compass_Bus_GX09_AGZ.JPG 2x" data-file-width="2389" data-file-height="1655" /></a></td>
<td>SD</td>
<td><a href="/w/index.php?title=Alexander_Dennis&amp;action=edit&amp;redlink=1" class="new" title="Alexander Dennis (not yet started)">Alexander Dennis</a></td>
<td>2006</td>
<td>Available as complete bus, chassis or bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Alexander_Dennis_Enviro300&amp;action=edit&amp;redlink=1" class="new" title="Alexander Dennis Enviro300 (not yet started)">Alexander Dennis Enviro300</a></td>
<td><a href="/wiki/File:Arriva_NW_Enviro300_2745.jpg" class="image"><img alt="Arriva NW Enviro300 2745.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Arriva_NW_Enviro300_2745.jpg/120px-Arriva_NW_Enviro300_2745.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Arriva_NW_Enviro300_2745.jpg/180px-Arriva_NW_Enviro300_2745.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Arriva_NW_Enviro300_2745.jpg/240px-Arriva_NW_Enviro300_2745.jpg 2x" data-file-width="1503" data-file-height="1127" /></a></td>
<td>SD</td>
<td>TransBus/Alexander Dennis</td>
<td>2001</td>
<td>Available as complete bus, chassis or bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Alexander_Dennis_Enviro350H&amp;action=edit&amp;redlink=1" class="new" title="Alexander Dennis Enviro350H (not yet started)">Alexander Dennis Enviro350H</a></td>
<td><a href="/wiki/File:First_Essex_bus_67904_(SN12_CHY),_12_May_2013.jpg" class="image"><img alt="First Essex bus 67904 (SN12 CHY), 12 May 2013.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8a/First_Essex_bus_67904_%28SN12_CHY%29%2C_12_May_2013.jpg/120px-First_Essex_bus_67904_%28SN12_CHY%29%2C_12_May_2013.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8a/First_Essex_bus_67904_%28SN12_CHY%29%2C_12_May_2013.jpg/180px-First_Essex_bus_67904_%28SN12_CHY%29%2C_12_May_2013.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8a/First_Essex_bus_67904_%28SN12_CHY%29%2C_12_May_2013.jpg/240px-First_Essex_bus_67904_%28SN12_CHY%29%2C_12_May_2013.jpg 2x" data-file-width="5184" data-file-height="3456" /></a></td>
<td>SD</td>
<td>Alexander Dennis</td>
<td>2010</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Alexander_PS_type&amp;action=edit&amp;redlink=1" class="new" title="Alexander PS type (not yet started)">Alexander PS type</a></td>
<td><a href="/wiki/File:MB0405_WA.JPG" class="image"><img alt="MB0405 WA.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f8/MB0405_WA.JPG/120px-MB0405_WA.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f8/MB0405_WA.JPG/180px-MB0405_WA.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f8/MB0405_WA.JPG/240px-MB0405_WA.JPG 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD</td>
<td>Walter Alexander Coachbuilders</td>
<td>1988</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Alexander_Strider&amp;action=edit&amp;redlink=1" class="new" title="Alexander Strider (not yet started)">Alexander Strider</a></td>
<td><a href="/wiki/File:FelixBusM301KRY.jpg" class="image"><img alt="FelixBusM301KRY.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/26/FelixBusM301KRY.jpg/120px-FelixBusM301KRY.jpg" width="120" height="81" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/26/FelixBusM301KRY.jpg/180px-FelixBusM301KRY.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/26/FelixBusM301KRY.jpg/240px-FelixBusM301KRY.jpg 2x" data-file-width="437" data-file-height="294" /></a></td>
<td>SD</td>
<td>Walter Alexander Coachbuilders</td>
<td>1993</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Alexander_Y_Type&amp;action=edit&amp;redlink=1" class="new" title="Alexander Y Type (not yet started)">Alexander Y Type</a></td>
<td><a href="/wiki/File:LeylandLeopardAlexanderYTypeMFR306P.jpg" class="image"><img alt="LeylandLeopardAlexanderYTypeMFR306P.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/29/LeylandLeopardAlexanderYTypeMFR306P.jpg/120px-LeylandLeopardAlexanderYTypeMFR306P.jpg" width="120" height="79" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/29/LeylandLeopardAlexanderYTypeMFR306P.jpg/180px-LeylandLeopardAlexanderYTypeMFR306P.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/29/LeylandLeopardAlexanderYTypeMFR306P.jpg/240px-LeylandLeopardAlexanderYTypeMFR306P.jpg 2x" data-file-width="480" data-file-height="316" /></a></td>
<td>SD</td>
<td>Walter Alexander Coachbuilders</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Amfibus&amp;action=edit&amp;redlink=1" class="new" title="Amfibus (not yet started)">Amfibus</a></td>
<td></td>
<td>SD</td>
<td></td>
<td>2009</td>
<td><a href="/w/index.php?title=Amphibious_vehicle&amp;action=edit&amp;redlink=1" class="new" title="Amphibious vehicle (not yet started)">Amphibious</a></td>
</tr>
<tr>
<td><a href="/w/index.php?title=AmphiCoach_GTS-1&amp;action=edit&amp;redlink=1" class="new" title="AmphiCoach GTS-1 (not yet started)">AmphiCoach GTS-1</a></td>
<td><a href="/wiki/File:River-Ride_-_Budapest.JPG" class="image"><img alt="River-Ride - Budapest.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ef/River-Ride_-_Budapest.JPG/120px-River-Ride_-_Budapest.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ef/River-Ride_-_Budapest.JPG/180px-River-Ride_-_Budapest.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ef/River-Ride_-_Budapest.JPG/240px-River-Ride_-_Budapest.JPG 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>SD</td>
<td></td>
<td>2006</td>
<td><a href="/w/index.php?title=Amphibious_vehicle&amp;action=edit&amp;redlink=1" class="new" title="Amphibious vehicle (not yet started)">Amphibious</a></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Bedford_JJL&amp;action=edit&amp;redlink=1" class="new" title="Bedford JJL (not yet started)">Bedford JJL</a></td>
<td><a href="/wiki/File:Bedford_JJL.jpg" class="image"><img alt="Bedford JJL.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Bedford_JJL.jpg/120px-Bedford_JJL.jpg" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Bedford_JJL.jpg/180px-Bedford_JJL.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/84/Bedford_JJL.jpg/240px-Bedford_JJL.jpg 2x" data-file-width="440" data-file-height="251" /></a></td>
<td>SD</td>
<td><a href="/w/index.php?title=Bedford_Vehicles&amp;action=edit&amp;redlink=1" class="new" title="Bedford Vehicles (not yet started)">Bedford Vehicles</a></td>
<td>1979</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Bedford_OB&amp;action=edit&amp;redlink=1" class="new" title="Bedford OB (not yet started)">Bedford OB</a></td>
<td><a href="/wiki/File:Southern_Vectis_216.JPG" class="image"><img alt="Southern Vectis 216.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Southern_Vectis_216.JPG/120px-Southern_Vectis_216.JPG" width="120" height="85" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Southern_Vectis_216.JPG/180px-Southern_Vectis_216.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Southern_Vectis_216.JPG/240px-Southern_Vectis_216.JPG 2x" data-file-width="2544" data-file-height="1800" /></a></td>
<td>SD</td>
<td>Bedford Vehicles</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Bedford_SB&amp;action=edit&amp;redlink=1" class="new" title="Bedford SB (not yet started)">Bedford SB</a></td>
<td><a href="/wiki/File:BedfordSB-181ECV.jpg" class="image"><img alt="BedfordSB-181ECV.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/BedfordSB-181ECV.jpg/120px-BedfordSB-181ECV.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/BedfordSB-181ECV.jpg/180px-BedfordSB-181ECV.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/BedfordSB-181ECV.jpg/240px-BedfordSB-181ECV.jpg 2x" data-file-width="1024" data-file-height="683" /></a></td>
<td>SD</td>
<td>Bedford Vehicles</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Bedford_VAL&amp;action=edit&amp;redlink=1" class="new" title="Bedford VAL (not yet started)">Bedford VAL</a></td>
<td><a href="/wiki/File:Barton_996_RVO.JPG" class="image"><img alt="Barton 996 RVO.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Barton_996_RVO.JPG/120px-Barton_996_RVO.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Barton_996_RVO.JPG/180px-Barton_996_RVO.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Barton_996_RVO.JPG/240px-Barton_996_RVO.JPG 2x" data-file-width="2592" data-file-height="1936" /></a></td>
<td>SD</td>
<td>Bedford Vehicles</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Berkhof_Ambassador&amp;action=edit&amp;redlink=1" class="new" title="Berkhof Ambassador (not yet started)">Berkhof Ambassador</a></td>
<td><a href="/wiki/File:BBA5009.jpg" class="image"><img alt="BBA5009.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/BBA5009.jpg/120px-BBA5009.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/BBA5009.jpg/180px-BBA5009.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/89/BBA5009.jpg/240px-BBA5009.jpg 2x" data-file-width="640" data-file-height="480" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Berkhof_Excellence_1000&amp;action=edit&amp;redlink=1" class="new" title="Berkhof Excellence 1000 (not yet started)">Berkhof Excellence 1000</a></td>
<td><a href="/wiki/File:Berkhof_Excellence_1000_ex._Rubiocar.jpg" class="image"><img alt="Berkhof Excellence 1000 ex. Rubiocar.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Berkhof_Excellence_1000_ex._Rubiocar.jpg/120px-Berkhof_Excellence_1000_ex._Rubiocar.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Berkhof_Excellence_1000_ex._Rubiocar.jpg/180px-Berkhof_Excellence_1000_ex._Rubiocar.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Berkhof_Excellence_1000_ex._Rubiocar.jpg/240px-Berkhof_Excellence_1000_ex._Rubiocar.jpg 2x" data-file-width="3772" data-file-height="2524" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Bristol_Lodekka&amp;action=edit&amp;redlink=1" class="new" title="Bristol Lodekka (not yet started)">Bristol Lodekka</a></td>
<td><a href="/wiki/File:Bristol_Lodekka_F56G_-_1961_-_reg_109_DRM.jpg" class="image"><img alt="Bristol Lodekka F56G - 1961 - reg 109 DRM.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/13/Bristol_Lodekka_F56G_-_1961_-_reg_109_DRM.jpg/120px-Bristol_Lodekka_F56G_-_1961_-_reg_109_DRM.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/13/Bristol_Lodekka_F56G_-_1961_-_reg_109_DRM.jpg/180px-Bristol_Lodekka_F56G_-_1961_-_reg_109_DRM.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/13/Bristol_Lodekka_F56G_-_1961_-_reg_109_DRM.jpg/240px-Bristol_Lodekka_F56G_-_1961_-_reg_109_DRM.jpg 2x" data-file-width="1682" data-file-height="1080" /></a></td>
<td>DD</td>
<td><a href="/w/index.php?title=Bristol_Commercial_Vehicles&amp;action=edit&amp;redlink=1" class="new" title="Bristol Commercial Vehicles (not yet started)">Bristol Commercial Vehicles</a></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Bristol_MW&amp;action=edit&amp;redlink=1" class="new" title="Bristol MW (not yet started)">Bristol MW</a></td>
<td></td>
<td>SD</td>
<td>Bristol Commercial Vehicles</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Bristol_RE&amp;action=edit&amp;redlink=1" class="new" title="Bristol RE (not yet started)">Bristol RE</a></td>
<td></td>
<td>SD</td>
<td>Bristol Commercial Vehicles</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Bristol_VR&amp;action=edit&amp;redlink=1" class="new" title="Bristol VR (not yet started)">Bristol VR</a></td>
<td><a href="/wiki/File:Wilts_%26_Dorset_bus.jpg" class="image"><img alt="Wilts &amp; Dorset bus.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/54/Wilts_%26_Dorset_bus.jpg/120px-Wilts_%26_Dorset_bus.jpg" width="120" height="103" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/54/Wilts_%26_Dorset_bus.jpg/180px-Wilts_%26_Dorset_bus.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/54/Wilts_%26_Dorset_bus.jpg/240px-Wilts_%26_Dorset_bus.jpg 2x" data-file-width="348" data-file-height="300" /></a></td>
<td>DD</td>
<td>Bristol Commercial Vehicles</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Caetano_Alpha&amp;action=edit&amp;redlink=1" class="new" title="Caetano Alpha (not yet started)">Caetano Alpha</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Caetano_Levante&amp;action=edit&amp;redlink=1" class="new" title="Caetano Levante (not yet started)">Caetano Levante</a></td>
<td><a href="/wiki/File:National_Express_route_A6.jpg" class="image"><img alt="National Express route A6.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e1/National_Express_route_A6.jpg/120px-National_Express_route_A6.jpg" width="120" height="84" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e1/National_Express_route_A6.jpg/180px-National_Express_route_A6.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e1/National_Express_route_A6.jpg/240px-National_Express_route_A6.jpg 2x" data-file-width="3648" data-file-height="2563" /></a></td>
<td>C</td>
<td></td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Caetano_Nimbus&amp;action=edit&amp;redlink=1" class="new" title="Caetano Nimbus (not yet started)">Caetano Nimbus</a></td>
<td><a href="/wiki/File:London_Bus_route_112.jpg" class="image"><img alt="London Bus route 112.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8e/London_Bus_route_112.jpg/120px-London_Bus_route_112.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8e/London_Bus_route_112.jpg/180px-London_Bus_route_112.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8e/London_Bus_route_112.jpg/240px-London_Bus_route_112.jpg 2x" data-file-width="3648" data-file-height="2736" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Chance_RT-52&amp;action=edit&amp;redlink=1" class="new" title="Chance RT-52 (not yet started)">Chance RT-52</a></td>
<td><a href="/wiki/File:Pace1926.jpg" class="image"><img alt="Pace1926.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Pace1926.jpg/120px-Pace1926.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Pace1926.jpg/180px-Pace1926.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Pace1926.jpg/240px-Pace1926.jpg 2x" data-file-width="640" data-file-height="480" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td>"<a href="/w/index.php?title=Wiki_Wiki_Shuttle&amp;action=edit&amp;redlink=1" class="new" title="Wiki Wiki Shuttle (not yet started)">Wiki Wiki Shuttle</a>"</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Classic_(transit_bus)&amp;action=edit&amp;redlink=1" class="new" title="Classic (transit bus) (not yet started)">Classic (transit bus)</a></td>
<td><a href="/wiki/File:MTA_Bus_MCI_Classic_7901.jpg" class="image"><img alt="MTA Bus MCI Classic 7901.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/01/MTA_Bus_MCI_Classic_7901.jpg/120px-MTA_Bus_MCI_Classic_7901.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/01/MTA_Bus_MCI_Classic_7901.jpg/180px-MTA_Bus_MCI_Classic_7901.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/01/MTA_Bus_MCI_Classic_7901.jpg/240px-MTA_Bus_MCI_Classic_7901.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>SD</td>
<td></td>
<td>1982-1987 GM Canada<br />
<p>1987-1993 <a href="/w/index.php?title=Motor_Coach_Industries&amp;action=edit&amp;redlink=1" class="new" title="Motor Coach Industries (not yet started)">MCI</a><br />
1993-1997 <a href="/w/index.php?title=NovaBus&amp;action=edit&amp;redlink=1" class="new" title="NovaBus (not yet started)">NovaBus</a></p>
</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Custom_Coaches_CB30&amp;action=edit&amp;redlink=1" class="new" title="Custom Coaches CB30 (not yet started)">Custom Coaches CB30</a></td>
<td></td>
<td>SD</td>
<td>Custom Coaches</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Custom_Coaches_CB80&amp;action=edit&amp;redlink=1" class="new" title="Custom Coaches CB80 (not yet started)">Custom Coaches CB80</a></td>
<td></td>
<td>SD</td>
<td>Custom Coaches</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Custom_Coaches_SB50&amp;action=edit&amp;redlink=1" class="new" title="Custom Coaches SB50 (not yet started)">Custom Coaches SB50</a></td>
<td></td>
<td>SD</td>
<td>Custom Coaches</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=DAF_MB200&amp;action=edit&amp;redlink=1" class="new" title="DAF MB200 (not yet started)">DAF MB200</a></td>
<td><a href="/wiki/File:XIL15391.jpg" class="image"><img alt="XIL15391.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/01/XIL15391.jpg/120px-XIL15391.jpg" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/01/XIL15391.jpg/180px-XIL15391.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/01/XIL15391.jpg/240px-XIL15391.jpg 2x" data-file-width="1248" data-file-height="860" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=DAF_SB220&amp;action=edit&amp;redlink=1" class="new" title="DAF SB220 (not yet started)">DAF SB220</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Daimler_Fleetline&amp;action=edit&amp;redlink=1" class="new" title="Daimler Fleetline (not yet started)">Daimler Fleetline</a></td>
<td><a href="/wiki/File:GreaterManchester7214.jpg" class="image"><img alt="GreaterManchester7214.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e6/GreaterManchester7214.jpg/120px-GreaterManchester7214.jpg" width="120" height="85" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e6/GreaterManchester7214.jpg/180px-GreaterManchester7214.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e6/GreaterManchester7214.jpg/240px-GreaterManchester7214.jpg 2x" data-file-width="756" data-file-height="535" /></a></td>
<td>DD/SD</td>
<td></td>
<td>1960</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Daimler_Freeline&amp;action=edit&amp;redlink=1" class="new" title="Daimler Freeline (not yet started)">Daimler Freeline</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Daimler_Roadliner&amp;action=edit&amp;redlink=1" class="new" title="Daimler Roadliner (not yet started)">Daimler Roadliner</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Darwen_Panaire&amp;action=edit&amp;redlink=1" class="new" title="Darwen Panaire (not yet started)">Darwen Panaire</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td>Open-top bodywork. As of June 2008 no orders have been placed, and none have been built.</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Dennis_Dart&amp;action=edit&amp;redlink=1" class="new" title="Dennis Dart (not yet started)">Dennis Dart</a></td>
<td><a href="/wiki/File:Arriva_The_Shires_3297_X297_MBH.JPG" class="image"><img alt="Arriva The Shires 3297 X297 MBH.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Arriva_The_Shires_3297_X297_MBH.JPG/120px-Arriva_The_Shires_3297_X297_MBH.JPG" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Arriva_The_Shires_3297_X297_MBH.JPG/180px-Arriva_The_Shires_3297_X297_MBH.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Arriva_The_Shires_3297_X297_MBH.JPG/240px-Arriva_The_Shires_3297_X297_MBH.JPG 2x" data-file-width="3712" data-file-height="2088" /></a></td>
<td>SD</td>
<td>Dennis/TransBus/Alexander Dennis</td>
<td>1989</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Dennis_Domino&amp;action=edit&amp;redlink=1" class="new" title="Dennis Domino (not yet started)">Dennis Domino</a></td>
<td></td>
<td>SD</td>
<td>Dennis Specialist Vehicles</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Dennis_Dorchester&amp;action=edit&amp;redlink=1" class="new" title="Dennis Dorchester (not yet started)">Dennis Dorchester</a></td>
<td></td>
<td>SD</td>
<td>Dennis Specialist Vehicles</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Dennis_Dragon&amp;action=edit&amp;redlink=1" class="new" title="Dennis Dragon (not yet started)">Dennis Dragon</a></td>
<td><a href="/wiki/File:DA5634@26.jpg" class="image"><img alt="DA5634@26.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/DA5634%4026.jpg/120px-DA5634%4026.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/DA5634%4026.jpg/180px-DA5634%4026.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0d/DA5634%4026.jpg/240px-DA5634%4026.jpg 2x" data-file-width="700" data-file-height="468" /></a></td>
<td>DD</td>
<td>Dennis Specialist Vehicles</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Dennis_Falcon&amp;action=edit&amp;redlink=1" class="new" title="Dennis Falcon (not yet started)">Dennis Falcon</a></td>
<td><a href="/wiki/File:DennisFalconBusMayneManchester.jpg" class="image"><img alt="DennisFalconBusMayneManchester.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/09/DennisFalconBusMayneManchester.jpg/120px-DennisFalconBusMayneManchester.jpg" width="120" height="89" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/09/DennisFalconBusMayneManchester.jpg/180px-DennisFalconBusMayneManchester.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/09/DennisFalconBusMayneManchester.jpg/240px-DennisFalconBusMayneManchester.jpg 2x" data-file-width="423" data-file-height="315" /></a></td>
<td>SD/DD</td>
<td>Dennis Specialist Vehicles</td>
<td>1981</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Dennis_Javelin&amp;action=edit&amp;redlink=1" class="new" title="Dennis Javelin (not yet started)">Dennis Javelin</a></td>
<td><a href="/wiki/File:Safeguard_Coaches_S503_UAK.JPG" class="image"><img alt="Safeguard Coaches S503 UAK.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Safeguard_Coaches_S503_UAK.JPG/120px-Safeguard_Coaches_S503_UAK.JPG" width="120" height="100" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Safeguard_Coaches_S503_UAK.JPG/180px-Safeguard_Coaches_S503_UAK.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Safeguard_Coaches_S503_UAK.JPG/240px-Safeguard_Coaches_S503_UAK.JPG 2x" data-file-width="2005" data-file-height="1674" /></a></td>
<td>SD</td>
<td>Dennis Specialist Vehicles</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Dennis_Jubilant&amp;action=edit&amp;redlink=1" class="new" title="Dennis Jubilant (not yet started)">Dennis Jubilant</a></td>
<td><a href="/wiki/File:Evers_Dennis_Jubilant_HK_KMB.JPG" class="image"><img alt="Evers Dennis Jubilant HK KMB.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Evers_Dennis_Jubilant_HK_KMB.JPG/120px-Evers_Dennis_Jubilant_HK_KMB.JPG" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Evers_Dennis_Jubilant_HK_KMB.JPG/180px-Evers_Dennis_Jubilant_HK_KMB.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Evers_Dennis_Jubilant_HK_KMB.JPG/240px-Evers_Dennis_Jubilant_HK_KMB.JPG 2x" data-file-width="600" data-file-height="414" /></a></td>
<td>DD</td>
<td>Dennis Specialist Vehicles</td>
<td>1977</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Dennis_Lance&amp;action=edit&amp;redlink=1" class="new" title="Dennis Lance (not yet started)">Dennis Lance/Arrow</a></td>
<td><a href="/wiki/File:Dennis_Lance_Plaxton_Verde_Arriva.jpg" class="image"><img alt="Dennis Lance Plaxton Verde Arriva.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Dennis_Lance_Plaxton_Verde_Arriva.jpg/120px-Dennis_Lance_Plaxton_Verde_Arriva.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Dennis_Lance_Plaxton_Verde_Arriva.jpg/180px-Dennis_Lance_Plaxton_Verde_Arriva.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Dennis_Lance_Plaxton_Verde_Arriva.jpg/240px-Dennis_Lance_Plaxton_Verde_Arriva.jpg 2x" data-file-width="1440" data-file-height="1080" /></a></td>
<td>SD/DD</td>
<td>Dennis Specialist Vehicles</td>
<td>1991</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Dennis_Lancet&amp;action=edit&amp;redlink=1" class="new" title="Dennis Lancet (not yet started)">Dennis Lancet</a></td>
<td><a href="/wiki/File:Dennis_Lancet_A506_FSS.jpg" class="image"><img alt="Dennis Lancet A506 FSS.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Dennis_Lancet_A506_FSS.jpg/120px-Dennis_Lancet_A506_FSS.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Dennis_Lancet_A506_FSS.jpg/180px-Dennis_Lancet_A506_FSS.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Dennis_Lancet_A506_FSS.jpg/240px-Dennis_Lancet_A506_FSS.jpg 2x" data-file-width="2560" data-file-height="1920" /></a></td>
<td>SD</td>
<td>Dennis Specialist Vehicles</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Dennis_R-Series&amp;action=edit&amp;redlink=1" class="new" title="Dennis R-Series (not yet started)">Dennis R-Series</a></td>
<td></td>
<td>C</td>
<td>Dennis/TransBus</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Duple_Dominant&amp;action=edit&amp;redlink=1" class="new" title="Duple Dominant (not yet started)">Duple Dominant</a></td>
<td><a href="/wiki/File:Duple_Dominant_Leyland_Leopard.jpg" class="image"><img alt="Duple Dominant Leyland Leopard.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Duple_Dominant_Leyland_Leopard.jpg/120px-Duple_Dominant_Leyland_Leopard.jpg" width="120" height="88" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Duple_Dominant_Leyland_Leopard.jpg/180px-Duple_Dominant_Leyland_Leopard.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Duple_Dominant_Leyland_Leopard.jpg/240px-Duple_Dominant_Leyland_Leopard.jpg 2x" data-file-width="500" data-file-height="365" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_1984-style_double-deck_body&amp;action=edit&amp;redlink=1" class="new" title="East Lancs 1984-style double-deck body (not yet started)">East Lancs 1984-style double-deck body</a></td>
<td><a href="/wiki/File:East_Lancs_curved_screen_1.jpg" class="image"><img alt="East Lancs curved screen 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/82/East_Lancs_curved_screen_1.jpg/120px-East_Lancs_curved_screen_1.jpg" width="120" height="88" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/82/East_Lancs_curved_screen_1.jpg/180px-East_Lancs_curved_screen_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/82/East_Lancs_curved_screen_1.jpg/240px-East_Lancs_curved_screen_1.jpg 2x" data-file-width="500" data-file-height="368" /></a></td>
<td>DD</td>
<td>East Lancashire Coachbuilders</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Cityzen&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Cityzen (not yet started)">East Lancs Cityzen</a></td>
<td><a href="/wiki/File:Kings_Ferry_B10.jpg" class="image"><img alt="Kings Ferry B10.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Kings_Ferry_B10.jpg/120px-Kings_Ferry_B10.jpg" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Kings_Ferry_B10.jpg/180px-Kings_Ferry_B10.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Kings_Ferry_B10.jpg/240px-Kings_Ferry_B10.jpg 2x" data-file-width="761" data-file-height="547" /></a></td>
<td>DD</td>
<td>East Lancashire Coachbuilders</td>
<td>1995 to 2000</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_E_Type&amp;action=edit&amp;redlink=1" class="new" title="East Lancs E Type (not yet started)">East Lancs E Type</a></td>
<td></td>
<td>DD</td>
<td>East Lancashire Coachbuilders</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_EL2000&amp;action=edit&amp;redlink=1" class="new" title="East Lancs EL2000 (not yet started)">East Lancs EL2000</a></td>
<td><a href="/wiki/File:Dennis_Dart_East_Lancs_EL2000_1.jpg" class="image"><img alt="Dennis Dart East Lancs EL2000 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/35/Dennis_Dart_East_Lancs_EL2000_1.jpg/120px-Dennis_Dart_East_Lancs_EL2000_1.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/35/Dennis_Dart_East_Lancs_EL2000_1.jpg/180px-Dennis_Dart_East_Lancs_EL2000_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/35/Dennis_Dart_East_Lancs_EL2000_1.jpg/240px-Dennis_Dart_East_Lancs_EL2000_1.jpg 2x" data-file-width="1200" data-file-height="900" /></a></td>
<td>SD</td>
<td>East Lancashire Coachbuilders</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_European&amp;action=edit&amp;redlink=1" class="new" title="East Lancs European (not yet started)">East Lancs European</a></td>
<td><a href="/wiki/File:East_Lancs_European_1.jpg" class="image"><img alt="East Lancs European 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6b/East_Lancs_European_1.jpg/120px-East_Lancs_European_1.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6b/East_Lancs_European_1.jpg/180px-East_Lancs_European_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6b/East_Lancs_European_1.jpg/240px-East_Lancs_European_1.jpg 2x" data-file-width="1547" data-file-height="1166" /></a></td>
<td>SD</td>
<td>East Lancashire Coachbuilders</td>
<td>1995</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Flyte&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Flyte (not yet started)">East Lancs Flyte</a></td>
<td><a href="/wiki/File:East_Lancs_Flyte_2.jpg" class="image"><img alt="East Lancs Flyte 2.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/28/East_Lancs_Flyte_2.jpg/120px-East_Lancs_Flyte_2.jpg" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/28/East_Lancs_Flyte_2.jpg/180px-East_Lancs_Flyte_2.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/28/East_Lancs_Flyte_2.jpg/240px-East_Lancs_Flyte_2.jpg 2x" data-file-width="1434" data-file-height="993" /></a></td>
<td>SD</td>
<td>East Lancashire Coachbuilders</td>
<td>1996</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Greenway&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Greenway (not yet started)">East Lancs Greenway</a></td>
<td><a href="/wiki/File:National_Greenway_TIB4886.jpg" class="image"><img alt="National Greenway TIB4886.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/71/National_Greenway_TIB4886.jpg/120px-National_Greenway_TIB4886.jpg" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/71/National_Greenway_TIB4886.jpg/180px-National_Greenway_TIB4886.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/71/National_Greenway_TIB4886.jpg/240px-National_Greenway_TIB4886.jpg 2x" data-file-width="500" data-file-height="360" /></a></td>
<td>SD</td>
<td>East Lancashire Coachbuilders</td>
<td>1991</td>
<td>Leyland National rebuilt by East Lancs</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Kinetec&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Kinetec (not yet started)">East Lancs Kinetec</a></td>
<td><a href="/wiki/File:MAN_East_Lancs_Stagecoach_1.jpg" class="image"><img alt="MAN East Lancs Stagecoach 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/ba/MAN_East_Lancs_Stagecoach_1.jpg/120px-MAN_East_Lancs_Stagecoach_1.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/ba/MAN_East_Lancs_Stagecoach_1.jpg/180px-MAN_East_Lancs_Stagecoach_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/ba/MAN_East_Lancs_Stagecoach_1.jpg/240px-MAN_East_Lancs_Stagecoach_1.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD</td>
<td></td>
<td>2006</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Kinetec&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Kinetec (not yet started)">East Lancs Kinetec+</a></td>
<td></td>
<td>DD</td>
<td></td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Lolyne&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Lolyne (not yet started)">East Lancs Lolyne</a></td>
<td></td>
<td>DD</td>
<td>East Lancashire Coachbuilders</td>
<td></td>
<td>Bodywork for Dennis Trident 2</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Lowlander&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Lowlander (not yet started)">East Lancs Lowlander</a></td>
<td></td>
<td>DD</td>
<td>East Lancashire Coachbuilders</td>
<td></td>
<td>Bodywork for DAF DB250, not built</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_MaxCi&amp;action=edit&amp;redlink=1" class="new" title="East Lancs MaxCi (not yet started)">East Lancs MaxCi</a></td>
<td><a href="/wiki/File:Travel_Dundee_Scania_East_Lancs_MaxCi.jpg" class="image"><img alt="Travel Dundee Scania East Lancs MaxCi.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Travel_Dundee_Scania_East_Lancs_MaxCi.jpg/120px-Travel_Dundee_Scania_East_Lancs_MaxCi.jpg" width="120" height="89" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Travel_Dundee_Scania_East_Lancs_MaxCi.jpg/180px-Travel_Dundee_Scania_East_Lancs_MaxCi.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Travel_Dundee_Scania_East_Lancs_MaxCi.jpg/240px-Travel_Dundee_Scania_East_Lancs_MaxCi.jpg 2x" data-file-width="1457" data-file-height="1084" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Myllennium&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Myllennium (not yet started)">East Lancs Myllennium</a></td>
<td><a href="/wiki/File:East_Lancs_Myllennium_DAF.jpg" class="image"><img alt="East Lancs Myllennium DAF.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3c/East_Lancs_Myllennium_DAF.jpg/120px-East_Lancs_Myllennium_DAF.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3c/East_Lancs_Myllennium_DAF.jpg/180px-East_Lancs_Myllennium_DAF.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3c/East_Lancs_Myllennium_DAF.jpg/240px-East_Lancs_Myllennium_DAF.jpg 2x" data-file-width="1473" data-file-height="1106" /></a></td>
<td>SD</td>
<td></td>
<td>1999</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Myllennium_Lolyne&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Myllennium Lolyne (not yet started)">East Lancs Myllennium Lolyne</a></td>
<td></td>
<td>DD</td>
<td>East Lancashire Coachbuilders</td>
<td></td>
<td>Bodywork for Dennis Trident 2</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Myllennium_Lowlander&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Myllennium Lowlander (not yet started)">East Lancs Myllennium Lowlander</a></td>
<td></td>
<td>DD</td>
<td>East Lancashire Coachbuilders</td>
<td></td>
<td>Bodywork for DAF/VDL DB250</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Myllennium_Vyking&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Myllennium Vyking (not yet started)">East Lancs Myllennium Vyking</a></td>
<td></td>
<td>DD</td>
<td>East Lancashire Coachbuilders</td>
<td></td>
<td>Bodywork for Volvo B7TL</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Nordic&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Nordic (not yet started)">East Lancs Nordic</a></td>
<td></td>
<td>DD</td>
<td><a href="/w/index.php?title=East_Lancashire_Coachbuilders&amp;action=edit&amp;redlink=1" class="new" title="East Lancashire Coachbuilders (not yet started)">East Lancashire Coachbuilders</a></td>
<td></td>
<td>Bodywork for Volvo B7L and 3-axle Volvo B9TL</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Opus_2&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Opus 2 (not yet started)">East Lancs Opus 2</a></td>
<td></td>
<td>SD</td>
<td>East Lancashire Coachbuilders</td>
<td>1996</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Pyoneer&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Pyoneer (not yet started)">East Lancs Pyoneer</a></td>
<td></td>
<td>DD</td>
<td>East Lancashire Coachbuilders</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Spryte&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Spryte (not yet started)">East Lancs Spryte</a></td>
<td><a href="/wiki/File:N106LCK1.jpg" class="image"><img alt="N106LCK1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/99/N106LCK1.jpg/120px-N106LCK1.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/99/N106LCK1.jpg/180px-N106LCK1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/99/N106LCK1.jpg/240px-N106LCK1.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD</td>
<td>East Lancashire Coachbuilders</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=East_Lancs_Vyking&amp;action=edit&amp;redlink=1" class="new" title="East Lancs Vyking (not yet started)">East Lancs Vyking</a></td>
<td></td>
<td>DD</td>
<td>East Lancashire Coachbuilders</td>
<td></td>
<td>Bodywork for Volvo B7TL</td>
</tr>
<tr>
<td><a href="/w/index.php?title=FAP_403_RHD&amp;action=edit&amp;redlink=1" class="new" title="FAP 403 RHD (not yet started)">FAP 403 RHD</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Fiat_306&amp;action=edit&amp;redlink=1" class="new" title="Fiat 306 (not yet started)">Fiat 306</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Fiat_343&amp;action=edit&amp;redlink=1" class="new" title="Fiat 343 (not yet started)">Fiat 343</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Flxible_Metro&amp;action=edit&amp;redlink=1" class="new" title="Flxible Metro (not yet started)">Flxible Metro</a></td>
<td><a href="/wiki/File:TriMet_Flxible-built_bus.jpg" class="image"><img alt="TriMet Flxible-built bus.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5f/TriMet_Flxible-built_bus.jpg/120px-TriMet_Flxible-built_bus.jpg" width="120" height="75" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5f/TriMet_Flxible-built_bus.jpg/180px-TriMet_Flxible-built_bus.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5f/TriMet_Flxible-built_bus.jpg/240px-TriMet_Flxible-built_bus.jpg 2x" data-file-width="3234" data-file-height="2025" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Flxible_New_Look_bus&amp;action=edit&amp;redlink=1" class="new" title="Flxible New Look bus (not yet started)">Flxible New Look bus</a></td>
<td><a href="/wiki/File:NYC_Transit_Authority_Flxible_New_Look_4727.jpg" class="image"><img alt="NYC Transit Authority Flxible New Look 4727.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e9/NYC_Transit_Authority_Flxible_New_Look_4727.jpg/120px-NYC_Transit_Authority_Flxible_New_Look_4727.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e9/NYC_Transit_Authority_Flxible_New_Look_4727.jpg/180px-NYC_Transit_Authority_Flxible_New_Look_4727.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e9/NYC_Transit_Authority_Flxible_New_Look_4727.jpg/240px-NYC_Transit_Authority_Flxible_New_Look_4727.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Ford_R-Series&amp;action=edit&amp;redlink=1" class="new" title="Ford R-Series (not yet started)">Ford R-Series</a></td>
<td><a href="/wiki/File:George_Wards_Ford_R1114_-_Plaxton_PPE675R_at_the_seaside_1978.jpg" class="image"><img alt="George Wards Ford R1114 - Plaxton PPE675R at the seaside 1978.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/48/George_Wards_Ford_R1114_-_Plaxton_PPE675R_at_the_seaside_1978.jpg/120px-George_Wards_Ford_R1114_-_Plaxton_PPE675R_at_the_seaside_1978.jpg" width="120" height="79" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/48/George_Wards_Ford_R1114_-_Plaxton_PPE675R_at_the_seaside_1978.jpg/180px-George_Wards_Ford_R1114_-_Plaxton_PPE675R_at_the_seaside_1978.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/48/George_Wards_Ford_R1114_-_Plaxton_PPE675R_at_the_seaside_1978.jpg/240px-George_Wards_Ford_R1114_-_Plaxton_PPE675R_at_the_seaside_1978.jpg 2x" data-file-width="4479" data-file-height="2965" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ford_Tourneo" class="mw-redirect" title="Ford Tourneo">Ford Tourneo</a></td>
<td></td>
<td>MB</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ford_Transit" title="Ford Transit">Ford Transit</a></td>
<td><a href="/wiki/File:Mikrobus_%C4%8CSAD_%C4%8Cesk%C3%A1_L%C3%ADpa.jpg" class="image"><img alt="Mikrobus ČSAD Česká Lípa.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/25/Mikrobus_%C4%8CSAD_%C4%8Cesk%C3%A1_L%C3%ADpa.jpg/120px-Mikrobus_%C4%8CSAD_%C4%8Cesk%C3%A1_L%C3%ADpa.jpg" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/25/Mikrobus_%C4%8CSAD_%C4%8Cesk%C3%A1_L%C3%ADpa.jpg/180px-Mikrobus_%C4%8CSAD_%C4%8Cesk%C3%A1_L%C3%ADpa.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/25/Mikrobus_%C4%8CSAD_%C4%8Cesk%C3%A1_L%C3%ADpa.jpg/240px-Mikrobus_%C4%8CSAD_%C4%8Cesk%C3%A1_L%C3%ADpa.jpg 2x" data-file-width="1920" data-file-height="1080" /></a></td>
<td>MB</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Gillig_Low_Floor&amp;action=edit&amp;redlink=1" class="new" title="Gillig Low Floor (not yet started)">Gillig Low Floor</a></td>
<td><a href="/wiki/File:Gillig_advantage.jpg" class="image"><img alt="Gillig advantage.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Gillig_advantage.jpg/120px-Gillig_advantage.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Gillig_advantage.jpg/180px-Gillig_advantage.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Gillig_advantage.jpg/240px-Gillig_advantage.jpg 2x" data-file-width="2272" data-file-height="1704" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Gillig_Phantom&amp;action=edit&amp;redlink=1" class="new" title="Gillig Phantom (not yet started)">Gillig Phantom</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=GM_%22old-look%22_transit_bus&amp;action=edit&amp;redlink=1" class="new" title="GM &quot;old-look&quot; transit bus (not yet started)">GM "old-look" transit bus</a></td>
<td><a href="/wiki/File:New_York_City_Omnibus_GMC_Old_Look_TDH-5101_2969.jpg" class="image"><img alt="New York City Omnibus GMC Old Look TDH-5101 2969.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/15/New_York_City_Omnibus_GMC_Old_Look_TDH-5101_2969.jpg/120px-New_York_City_Omnibus_GMC_Old_Look_TDH-5101_2969.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/15/New_York_City_Omnibus_GMC_Old_Look_TDH-5101_2969.jpg/180px-New_York_City_Omnibus_GMC_Old_Look_TDH-5101_2969.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/15/New_York_City_Omnibus_GMC_Old_Look_TDH-5101_2969.jpg/240px-New_York_City_Omnibus_GMC_Old_Look_TDH-5101_2969.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=GM_Buffalo_bus&amp;action=edit&amp;redlink=1" class="new" title="GM Buffalo bus (not yet started)">GM Buffalo bus</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=GM_Futurliner&amp;action=edit&amp;redlink=1" class="new" title="GM Futurliner (not yet started)">GM Futurliner</a></td>
<td><a href="/wiki/File:GM_Futurliner01.jpg" class="image"><img alt="GM Futurliner01.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/GM_Futurliner01.jpg/120px-GM_Futurliner01.jpg" width="120" height="55" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/GM_Futurliner01.jpg/180px-GM_Futurliner01.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6c/GM_Futurliner01.jpg/240px-GM_Futurliner01.jpg 2x" data-file-width="426" data-file-height="195" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=GM_New_Look_bus&amp;action=edit&amp;redlink=1" class="new" title="GM New Look bus (not yet started)">GM New Look bus</a></td>
<td><a href="/wiki/File:New_York_Bus_Service_GMDD_1502.jpg" class="image"><img alt="New York Bus Service GMDD 1502.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e8/New_York_Bus_Service_GMDD_1502.jpg/120px-New_York_Bus_Service_GMDD_1502.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e8/New_York_Bus_Service_GMDD_1502.jpg/180px-New_York_Bus_Service_GMDD_1502.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e8/New_York_Bus_Service_GMDD_1502.jpg/240px-New_York_Bus_Service_GMDD_1502.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=PD-4501_Scenicruiser&amp;action=edit&amp;redlink=1" class="new" title="PD-4501 Scenicruiser (not yet started)">GM Scenicruiser</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=GM_TDH-4801_%26_TDM-4801&amp;action=edit&amp;redlink=1" class="new" title="GM TDH-4801 &amp; TDM-4801 (not yet started)">GM TDH-4801 &amp; TDM-4801</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td>Special series of <a href="/w/index.php?title=GM_%22old-look%22_transit_bus&amp;action=edit&amp;redlink=1" class="new" title="GM &quot;old-look&quot; transit bus (not yet started)">GM "old-look" transit bus</a></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Guy_Wulfrunian&amp;action=edit&amp;redlink=1" class="new" title="Guy Wulfrunian (not yet started)">Guy Wulfrunian</a></td>
<td></td>
<td>DD</td>
<td><a href="/w/index.php?title=Guy_Motors&amp;action=edit&amp;redlink=1" class="new" title="Guy Motors (not yet started)">Guy Motors</a></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Harrington_Legionnaire&amp;action=edit&amp;redlink=1" class="new" title="Harrington Legionnaire (not yet started)">Harrington Legionnaire</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Hino_Blue_Ribbon&amp;action=edit&amp;redlink=1" class="new" title="Hino Blue Ribbon (not yet started)">Hino Blue Ribbon</a></td>
<td><a href="/wiki/File:Hinomaru_Bus_1231.jpg" class="image"><img alt="Hinomaru Bus 1231.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Hinomaru_Bus_1231.jpg/120px-Hinomaru_Bus_1231.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Hinomaru_Bus_1231.jpg/180px-Hinomaru_Bus_1231.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Hinomaru_Bus_1231.jpg/240px-Hinomaru_Bus_1231.jpg 2x" data-file-width="800" data-file-height="600" /></a></td>
<td>SD</td>
<td><a href="/wiki/Hino_Motors" title="Hino Motors">Hino Motors</a></td>
<td>1982</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Hino_Liesse&amp;action=edit&amp;redlink=1" class="new" title="Hino Liesse (not yet started)">Hino Liesse</a></td>
<td></td>
<td>MB</td>
<td><a href="/wiki/Hino_Motors" title="Hino Motors">Hino Motors</a></td>
<td>1995</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Hino_Melpha&amp;action=edit&amp;redlink=1" class="new" title="Hino Melpha (not yet started)">Hino Melpha</a></td>
<td><a href="/wiki/File:KK-CH1JFEA-Fujikyu-Shonan-M2451.JPG" class="image"><img alt="KK-CH1JFEA-Fujikyu-Shonan-M2451.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/KK-CH1JFEA-Fujikyu-Shonan-M2451.JPG/120px-KK-CH1JFEA-Fujikyu-Shonan-M2451.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/KK-CH1JFEA-Fujikyu-Shonan-M2451.JPG/180px-KK-CH1JFEA-Fujikyu-Shonan-M2451.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/KK-CH1JFEA-Fujikyu-Shonan-M2451.JPG/240px-KK-CH1JFEA-Fujikyu-Shonan-M2451.JPG 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD</td>
<td><a href="/wiki/Hino_Motors" title="Hino Motors">Hino Motors</a></td>
<td>1998</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Hino_Poncho&amp;action=edit&amp;redlink=1" class="new" title="Hino Poncho (not yet started)">Hino Poncho</a></td>
<td><a href="/wiki/File:OdakyuBus_D139_Komabus.jpg" class="image"><img alt="OdakyuBus D139 Komabus.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/06/OdakyuBus_D139_Komabus.jpg/120px-OdakyuBus_D139_Komabus.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/06/OdakyuBus_D139_Komabus.jpg/180px-OdakyuBus_D139_Komabus.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/06/OdakyuBus_D139_Komabus.jpg/240px-OdakyuBus_D139_Komabus.jpg 2x" data-file-width="800" data-file-height="533" /></a></td>
<td>SD</td>
<td><a href="/wiki/Hino_Motors" title="Hino Motors">Hino Motors</a></td>
<td>2002</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Hino_Rainbow&amp;action=edit&amp;redlink=1" class="new" title="Hino Rainbow (not yet started)">Hino Rainbow</a></td>
<td><a href="/wiki/File:Niseko_bus_462.jpg" class="image"><img alt="Niseko bus 462.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/35/Niseko_bus_462.jpg/120px-Niseko_bus_462.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/35/Niseko_bus_462.jpg/180px-Niseko_bus_462.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/35/Niseko_bus_462.jpg/240px-Niseko_bus_462.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>SD</td>
<td><a href="/wiki/Hino_Motors" title="Hino Motors">Hino Motors</a></td>
<td>1980</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Hino_S%27elega&amp;action=edit&amp;redlink=1" class="new" title="Hino S'elega (not yet started)">Hino S'elega</a></td>
<td><a href="/wiki/File:Nagaden-tokyo-nagano-highwaybus.jpg" class="image"><img alt="Nagaden-tokyo-nagano-highwaybus.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/74/Nagaden-tokyo-nagano-highwaybus.jpg/120px-Nagaden-tokyo-nagano-highwaybus.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/74/Nagaden-tokyo-nagano-highwaybus.jpg/180px-Nagaden-tokyo-nagano-highwaybus.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/74/Nagaden-tokyo-nagano-highwaybus.jpg/240px-Nagaden-tokyo-nagano-highwaybus.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>SD</td>
<td><a href="/wiki/Hino_Motors" title="Hino Motors">Hino Motors</a></td>
<td>1990</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Hyundai_Aero_City&amp;action=edit&amp;redlink=1" class="new" title="Hyundai Aero City (not yet started)">Hyundai Aero City</a></td>
<td><a href="/wiki/File:Seoul_City_Bus01.jpg" class="image"><img alt="Seoul City Bus01.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Seoul_City_Bus01.jpg/120px-Seoul_City_Bus01.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Seoul_City_Bus01.jpg/180px-Seoul_City_Bus01.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Seoul_City_Bus01.jpg/240px-Seoul_City_Bus01.jpg 2x" data-file-width="700" data-file-height="525" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Hyundai_Aero_Town&amp;action=edit&amp;redlink=1" class="new" title="Hyundai Aero Town (not yet started)">Hyundai Aero Town</a></td>
<td><a href="/wiki/File:Gwangmyeong_Shuttle_Bus.jpg" class="image"><img alt="Gwangmyeong Shuttle Bus.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Gwangmyeong_Shuttle_Bus.jpg/120px-Gwangmyeong_Shuttle_Bus.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Gwangmyeong_Shuttle_Bus.jpg/180px-Gwangmyeong_Shuttle_Bus.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Gwangmyeong_Shuttle_Bus.jpg/240px-Gwangmyeong_Shuttle_Bus.jpg 2x" data-file-width="1600" data-file-height="1197" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Hyundai_Aero&amp;action=edit&amp;redlink=1" class="new" title="Hyundai Aero (not yet started)">Hyundai Aero</a></td>
<td><a href="/wiki/File:Hyundai_Aero_Express_53S-2214.JPG" class="image"><img alt="Hyundai Aero Express 53S-2214.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Hyundai_Aero_Express_53S-2214.JPG/120px-Hyundai_Aero_Express_53S-2214.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Hyundai_Aero_Express_53S-2214.JPG/180px-Hyundai_Aero_Express_53S-2214.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/65/Hyundai_Aero_Express_53S-2214.JPG/240px-Hyundai_Aero_Express_53S-2214.JPG 2x" data-file-width="3491" data-file-height="2319" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Hyundai_Chorus&amp;action=edit&amp;redlink=1" class="new" title="Hyundai Chorus (not yet started)">Hyundai Chorus</a></td>
<td><a href="/wiki/File:Hyundai_Chorus_in_Savannakhet_01.jpg" class="image"><img alt="Hyundai Chorus in Savannakhet 01.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/54/Hyundai_Chorus_in_Savannakhet_01.jpg/120px-Hyundai_Chorus_in_Savannakhet_01.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/54/Hyundai_Chorus_in_Savannakhet_01.jpg/180px-Hyundai_Chorus_in_Savannakhet_01.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/54/Hyundai_Chorus_in_Savannakhet_01.jpg/240px-Hyundai_Chorus_in_Savannakhet_01.jpg 2x" data-file-width="2000" data-file-height="1333" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Hyundai_County&amp;action=edit&amp;redlink=1" class="new" title="Hyundai County (not yet started)">Hyundai County</a></td>
<td><a href="/wiki/File:Capital_Bus_AG-178_20070101.jpg" class="image"><img alt="Capital Bus AG-178 20070101.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Capital_Bus_AG-178_20070101.jpg/120px-Capital_Bus_AG-178_20070101.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Capital_Bus_AG-178_20070101.jpg/180px-Capital_Bus_AG-178_20070101.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Capital_Bus_AG-178_20070101.jpg/240px-Capital_Bus_AG-178_20070101.jpg 2x" data-file-width="614" data-file-height="461" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Hyundai_FB&amp;action=edit&amp;redlink=1" class="new" title="Hyundai FB (not yet started)">Hyundai FB</a></td>
<td><a href="/wiki/File:Hyundai_FB500_Laos.jpg" class="image"><img alt="Hyundai FB500 Laos.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Hyundai_FB500_Laos.jpg/120px-Hyundai_FB500_Laos.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Hyundai_FB500_Laos.jpg/180px-Hyundai_FB500_Laos.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Hyundai_FB500_Laos.jpg/240px-Hyundai_FB500_Laos.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Hyundai_Global_900&amp;action=edit&amp;redlink=1" class="new" title="Hyundai Global 900 (not yet started)">Hyundai Global 900</a></td>
<td><a href="/wiki/File:Daejeon_bus_317.jpg" class="image"><img alt="Daejeon bus 317.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Daejeon_bus_317.jpg/120px-Daejeon_bus_317.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Daejeon_bus_317.jpg/180px-Daejeon_bus_317.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Daejeon_bus_317.jpg/240px-Daejeon_bus_317.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Hyundai_RB_(buses)&amp;action=edit&amp;redlink=1" class="new" title="Hyundai RB (buses) (not yet started)">Hyundai RB</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Hyundai_Universe&amp;action=edit&amp;redlink=1" class="new" title="Hyundai Universe (not yet started)">Hyundai Universe</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=International_Durastar&amp;action=edit&amp;redlink=1" class="new" title="International Durastar (not yet started)">International Durastar</a></td>
<td><a href="/wiki/File:Jacarandas007.jpg" class="image"><img alt="Jacarandas007.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Jacarandas007.jpg/120px-Jacarandas007.jpg" width="120" height="60" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Jacarandas007.jpg/180px-Jacarandas007.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Jacarandas007.jpg/240px-Jacarandas007.jpg 2x" data-file-width="1620" data-file-height="810" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Irisbus_Agora&amp;action=edit&amp;redlink=1" class="new" title="Irisbus Agora (not yet started)">Irisbus Agora</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Irisbus_Arway&amp;action=edit&amp;redlink=1" class="new" title="Irisbus Arway (not yet started)">Irisbus Arway</a></td>
<td><a href="/wiki/File:Irisbus_Arway_Br%C3%B8nnums_Turistfart_front.jpg" class="image"><img alt="Irisbus Arway Brønnums Turistfart front.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Irisbus_Arway_Br%C3%B8nnums_Turistfart_front.jpg/120px-Irisbus_Arway_Br%C3%B8nnums_Turistfart_front.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Irisbus_Arway_Br%C3%B8nnums_Turistfart_front.jpg/180px-Irisbus_Arway_Br%C3%B8nnums_Turistfart_front.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Irisbus_Arway_Br%C3%B8nnums_Turistfart_front.jpg/240px-Irisbus_Arway_Br%C3%B8nnums_Turistfart_front.jpg 2x" data-file-width="3072" data-file-height="2304" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Irisbus_Citelis&amp;action=edit&amp;redlink=1" class="new" title="Irisbus Citelis (not yet started)">Irisbus Citelis</a></td>
<td><a href="/wiki/File:VER_Ennepetal_Irisbus_Citelis_100_8033.jpg" class="image"><img alt="VER Ennepetal Irisbus Citelis 100 8033.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/51/VER_Ennepetal_Irisbus_Citelis_100_8033.jpg/120px-VER_Ennepetal_Irisbus_Citelis_100_8033.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/51/VER_Ennepetal_Irisbus_Citelis_100_8033.jpg/180px-VER_Ennepetal_Irisbus_Citelis_100_8033.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/51/VER_Ennepetal_Irisbus_Citelis_100_8033.jpg/240px-VER_Ennepetal_Irisbus_Citelis_100_8033.jpg 2x" data-file-width="2560" data-file-height="1920" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Irizar_Century&amp;action=edit&amp;redlink=1" class="new" title="Irizar Century (not yet started)">Irizar Century</a></td>
<td><a href="/wiki/File:Turistbuss.jpg" class="image"><img alt="Turistbuss.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Turistbuss.jpg/120px-Turistbuss.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Turistbuss.jpg/180px-Turistbuss.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/Turistbuss.jpg/240px-Turistbuss.jpg 2x" data-file-width="2048" data-file-height="1536" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Irizar_PB&amp;action=edit&amp;redlink=1" class="new" title="Irizar PB (not yet started)">Irizar PB</a></td>
<td><a href="/wiki/File:Autopullman_Irizar_Eurorider_D43_FCB.jpg" class="image"><img alt="Autopullman Irizar Eurorider D43 FCB.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Autopullman_Irizar_Eurorider_D43_FCB.jpg/120px-Autopullman_Irizar_Eurorider_D43_FCB.jpg" width="120" height="85" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Autopullman_Irizar_Eurorider_D43_FCB.jpg/180px-Autopullman_Irizar_Eurorider_D43_FCB.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Autopullman_Irizar_Eurorider_D43_FCB.jpg/240px-Autopullman_Irizar_Eurorider_D43_FCB.jpg 2x" data-file-width="2172" data-file-height="1539" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Isuzu_C&amp;action=edit&amp;redlink=1" class="new" title="Isuzu C (not yet started)">Isuzu C</a></td>
<td><a href="/wiki/File:NanbuBus_K-CJM500,No.494.jpg" class="image"><img alt="NanbuBus K-CJM500,No.494.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/NanbuBus_K-CJM500%2CNo.494.jpg/120px-NanbuBus_K-CJM500%2CNo.494.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/NanbuBus_K-CJM500%2CNo.494.jpg/180px-NanbuBus_K-CJM500%2CNo.494.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2f/NanbuBus_K-CJM500%2CNo.494.jpg/240px-NanbuBus_K-CJM500%2CNo.494.jpg 2x" data-file-width="2048" data-file-height="1536" /></a></td>
<td>SD</td>
<td><a href="/w/index.php?title=Isuzu&amp;action=edit&amp;redlink=1" class="new" title="Isuzu (not yet started)">Isuzu</a></td>
<td>1980 to 1984</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Isuzu_Cubic&amp;action=edit&amp;redlink=1" class="new" title="Isuzu Cubic (not yet started)">Isuzu Cubic</a></td>
<td><a href="/wiki/File:TamaBus_D1122.jpg" class="image"><img alt="TamaBus D1122.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b8/TamaBus_D1122.jpg/120px-TamaBus_D1122.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b8/TamaBus_D1122.jpg/180px-TamaBus_D1122.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b8/TamaBus_D1122.jpg/240px-TamaBus_D1122.jpg 2x" data-file-width="800" data-file-height="533" /></a></td>
<td>SD</td>
<td>Isuzu</td>
<td>1984 to 2000</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Isuzu_Erga_Mio&amp;action=edit&amp;redlink=1" class="new" title="Isuzu Erga Mio (not yet started)">Isuzu Erga Mio</a></td>
<td><a href="/wiki/File:KushiroBus_17_ErgaMio.jpg" class="image"><img alt="KushiroBus 17 ErgaMio.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/KushiroBus_17_ErgaMio.jpg/120px-KushiroBus_17_ErgaMio.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/KushiroBus_17_ErgaMio.jpg/180px-KushiroBus_17_ErgaMio.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/KushiroBus_17_ErgaMio.jpg/240px-KushiroBus_17_ErgaMio.jpg 2x" data-file-width="800" data-file-height="533" /></a></td>
<td>SD</td>
<td>Isuzu</td>
<td>1999</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Isuzu_Erga&amp;action=edit&amp;redlink=1" class="new" title="Isuzu Erga (not yet started)">Isuzu Erga</a></td>
<td><a href="/wiki/File:NishiTokyoBus_A1001.jpg" class="image"><img alt="NishiTokyoBus A1001.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/55/NishiTokyoBus_A1001.jpg/120px-NishiTokyoBus_A1001.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/55/NishiTokyoBus_A1001.jpg/180px-NishiTokyoBus_A1001.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/55/NishiTokyoBus_A1001.jpg/240px-NishiTokyoBus_A1001.jpg 2x" data-file-width="800" data-file-height="533" /></a></td>
<td>SD</td>
<td></td>
<td>2000</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Isuzu_Gala_Mio&amp;action=edit&amp;redlink=1" class="new" title="Isuzu Gala Mio (not yet started)">Isuzu Gala Mio</a></td>
<td><a href="/wiki/File:Izu-Tokai-Bus648.jpg" class="image"><img alt="Izu-Tokai-Bus648.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/Izu-Tokai-Bus648.jpg/120px-Izu-Tokai-Bus648.jpg" width="120" height="81" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/Izu-Tokai-Bus648.jpg/180px-Izu-Tokai-Bus648.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/38/Izu-Tokai-Bus648.jpg/240px-Izu-Tokai-Bus648.jpg 2x" data-file-width="2852" data-file-height="1916" /></a></td>
<td>SD</td>
<td>Isuzu</td>
<td>1999</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Isuzu_Gala&amp;action=edit&amp;redlink=1" class="new" title="Isuzu Gala (not yet started)">Isuzu Gala</a></td>
<td><a href="/wiki/File:Keiseibus-tokyokimitsu-20070605.jpg" class="image"><img alt="Keiseibus-tokyokimitsu-20070605.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/55/Keiseibus-tokyokimitsu-20070605.jpg/120px-Keiseibus-tokyokimitsu-20070605.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/55/Keiseibus-tokyokimitsu-20070605.jpg/180px-Keiseibus-tokyokimitsu-20070605.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/55/Keiseibus-tokyokimitsu-20070605.jpg/240px-Keiseibus-tokyokimitsu-20070605.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>SD</td>
<td>Isuzu</td>
<td>1996</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Isuzu_Journey&amp;action=edit&amp;redlink=1" class="new" title="Isuzu Journey (not yet started)">Isuzu Journey</a></td>
<td></td>
<td>MB</td>
<td>Isuzu</td>
<td></td>
<td>OEM of Nissan Civilian since 1993</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Isuzu_Journey-K&amp;action=edit&amp;redlink=1" class="new" title="Isuzu Journey-K (not yet started)">Isuzu Journey-K</a></td>
<td><a href="/wiki/File:ShuhokuBus_430.jpg" class="image"><img alt="ShuhokuBus 430.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3b/ShuhokuBus_430.jpg/120px-ShuhokuBus_430.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3b/ShuhokuBus_430.jpg/180px-ShuhokuBus_430.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3b/ShuhokuBus_430.jpg/240px-ShuhokuBus_430.jpg 2x" data-file-width="800" data-file-height="533" /></a></td>
<td>SD</td>
<td>Isuzu</td>
<td>1984 to 1999</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Isuzu_Journey-Q&amp;action=edit&amp;redlink=1" class="new" title="Isuzu Journey-Q (not yet started)">Isuzu Journey-Q</a></td>
<td><a href="/wiki/File:P-MR112D-AgatsumaKanko.jpg" class="image"><img alt="P-MR112D-AgatsumaKanko.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c5/P-MR112D-AgatsumaKanko.jpg/120px-P-MR112D-AgatsumaKanko.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c5/P-MR112D-AgatsumaKanko.jpg/180px-P-MR112D-AgatsumaKanko.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c5/P-MR112D-AgatsumaKanko.jpg/240px-P-MR112D-AgatsumaKanko.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD</td>
<td>Isuzu</td>
<td>1976 to 2001</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Isuzu_Super_Cruiser&amp;action=edit&amp;redlink=1" class="new" title="Isuzu Super Cruiser (not yet started)">Isuzu Super Cruiser</a></td>
<td><a href="/wiki/File:Soutetu_rake_and_port.jpg" class="image"><img alt="Soutetu rake and port.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/85/Soutetu_rake_and_port.jpg/120px-Soutetu_rake_and_port.jpg" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/85/Soutetu_rake_and_port.jpg/180px-Soutetu_rake_and_port.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/85/Soutetu_rake_and_port.jpg/240px-Soutetu_rake_and_port.jpg 2x" data-file-width="945" data-file-height="656" /></a></td>
<td>SD</td>
<td>Isuzu</td>
<td>1986 to 1996</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Iveco_370&amp;action=edit&amp;redlink=1" class="new" title="Iveco 370 (not yet started)">Iveco 370</a></td>
<td><a href="/wiki/File:Iveco_370_4131.jpg" class="image"><img alt="Iveco 370 4131.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Iveco_370_4131.jpg/120px-Iveco_370_4131.jpg" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Iveco_370_4131.jpg/180px-Iveco_370_4131.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Iveco_370_4131.jpg/240px-Iveco_370_4131.jpg 2x" data-file-width="2184" data-file-height="1231" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Iveco_Daily&amp;action=edit&amp;redlink=1" class="new" title="Iveco Daily (not yet started)">Iveco Daily</a></td>
<td></td>
<td>MB</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Iveco_Effeuno&amp;action=edit&amp;redlink=1" class="new" title="Iveco Effeuno (not yet started)">Iveco Effeuno</a></td>
<td><a href="/wiki/File:Bucharest_Iveco_bus_1.jpg" class="image"><img alt="Bucharest Iveco bus 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Bucharest_Iveco_bus_1.jpg/120px-Bucharest_Iveco_bus_1.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Bucharest_Iveco_bus_1.jpg/180px-Bucharest_Iveco_bus_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Bucharest_Iveco_bus_1.jpg/240px-Bucharest_Iveco_bus_1.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Iveco_EuroClass&amp;action=edit&amp;redlink=1" class="new" title="Iveco EuroClass (not yet started)">Iveco EuroClass</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=IVECO_MyWay&amp;action=edit&amp;redlink=1" class="new" title="IVECO MyWay (not yet started)">IVECO MyWay</a></td>
<td><a href="/wiki/File:Myway.jpg" class="image"><img alt="Myway.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/87/Myway.jpg/120px-Myway.jpg" width="120" height="79" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/87/Myway.jpg/180px-Myway.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/87/Myway.jpg/240px-Myway.jpg 2x" data-file-width="2214" data-file-height="1464" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Iveco_Turbocity&amp;action=edit&amp;redlink=1" class="new" title="Iveco Turbocity (not yet started)">Iveco Turbocity</a></td>
<td><a href="/wiki/File:Bucharest_Iveco_bus_3321.jpg" class="image"><img alt="Bucharest Iveco bus 3321.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Bucharest_Iveco_bus_3321.jpg/120px-Bucharest_Iveco_bus_3321.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Bucharest_Iveco_bus_3321.jpg/180px-Bucharest_Iveco_bus_3321.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Bucharest_Iveco_bus_3321.jpg/240px-Bucharest_Iveco_bus_3321.jpg 2x" data-file-width="2016" data-file-height="1512" /></a></td>
<td>SD/DD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Karosa_B_741&amp;action=edit&amp;redlink=1" class="new" title="Karosa B 741 (not yet started)">Karosa B 741</a></td>
<td><a href="/wiki/File:Praha,_%C5%98epy,_autobus_X9_ev_6010.JPG" class="image"><img alt="Praha, Řepy, autobus X9 ev 6010.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/06/Praha%2C_%C5%98epy%2C_autobus_X9_ev_6010.JPG/120px-Praha%2C_%C5%98epy%2C_autobus_X9_ev_6010.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/06/Praha%2C_%C5%98epy%2C_autobus_X9_ev_6010.JPG/180px-Praha%2C_%C5%98epy%2C_autobus_X9_ev_6010.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/06/Praha%2C_%C5%98epy%2C_autobus_X9_ev_6010.JPG/240px-Praha%2C_%C5%98epy%2C_autobus_X9_ev_6010.JPG 2x" data-file-width="2848" data-file-height="2136" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td><a href="/w/index.php?title=Articulated_bus&amp;action=edit&amp;redlink=1" class="new" title="Articulated bus (not yet started)">Articulated</a></td>
</tr>
<tr>
<td><a href="/wiki/Kia_Combi" title="Kia Combi">Kia Combi</a></td>
<td><a href="/wiki/File:Asia_Motors_Combi_AM815.jpg" class="image"><img alt="Asia Motors Combi AM815.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Asia_Motors_Combi_AM815.jpg/120px-Asia_Motors_Combi_AM815.jpg" width="120" height="129" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Asia_Motors_Combi_AM815.jpg/180px-Asia_Motors_Combi_AM815.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/59/Asia_Motors_Combi_AM815.jpg/240px-Asia_Motors_Combi_AM815.jpg 2x" data-file-width="1172" data-file-height="1258" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Kia_Granbird&amp;action=edit&amp;redlink=1" class="new" title="Kia Granbird (not yet started)">Kia Granbird</a></td>
<td><a href="/wiki/File:KiaBus_NewGranbird.jpg" class="image"><img alt="KiaBus NewGranbird.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/08/KiaBus_NewGranbird.jpg/120px-KiaBus_NewGranbird.jpg" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/08/KiaBus_NewGranbird.jpg/180px-KiaBus_NewGranbird.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/08/KiaBus_NewGranbird.jpg/240px-KiaBus_NewGranbird.jpg 2x" data-file-width="800" data-file-height="571" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Leopard&amp;action=edit&amp;redlink=1" class="new" title="Leyland Leopard (not yet started)">Leyland Leopard</a></td>
<td><a href="/wiki/File:LeylandLeopardCoachJIL2426.jpg" class="image"><img alt="LeylandLeopardCoachJIL2426.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3f/LeylandLeopardCoachJIL2426.jpg/120px-LeylandLeopardCoachJIL2426.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3f/LeylandLeopardCoachJIL2426.jpg/180px-LeylandLeopardCoachJIL2426.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3f/LeylandLeopardCoachJIL2426.jpg/240px-LeylandLeopardCoachJIL2426.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Lion_PSR1&amp;action=edit&amp;redlink=1" class="new" title="Leyland Lion PSR1 (not yet started)">Leyland Lion (PSR1)</a></td>
<td></td>
<td>SD</td>
<td>Leyland Motors</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Lynx&amp;action=edit&amp;redlink=1" class="new" title="Leyland Lynx (not yet started)">Leyland Lynx</a></td>
<td><a href="/wiki/File:Halton_Lynx_01.jpg" class="image"><img alt="Halton Lynx 01.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Halton_Lynx_01.jpg/120px-Halton_Lynx_01.jpg" width="120" height="87" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Halton_Lynx_01.jpg/180px-Halton_Lynx_01.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Halton_Lynx_01.jpg/240px-Halton_Lynx_01.jpg 2x" data-file-width="550" data-file-height="400" /></a></td>
<td>SD</td>
<td>Leyland Bus</td>
<td>1984</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_National&amp;action=edit&amp;redlink=1" class="new" title="Leyland National (not yet started)">Leyland National</a></td>
<td><a href="/wiki/File:Chasebus.jpg" class="image"><img alt="Chasebus.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/be/Chasebus.jpg/120px-Chasebus.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/be/Chasebus.jpg/180px-Chasebus.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/be/Chasebus.jpg/240px-Chasebus.jpg 2x" data-file-width="320" data-file-height="240" /></a></td>
<td>SD</td>
<td>Leyland National</td>
<td>1969</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Olympian&amp;action=edit&amp;redlink=1" class="new" title="Leyland Olympian (not yet started)">Leyland Olympian</a></td>
<td><a href="/wiki/File:Arriva_The_Shires_5094_F644_LMJ.JPG" class="image"><img alt="Arriva The Shires 5094 F644 LMJ.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Arriva_The_Shires_5094_F644_LMJ.JPG/120px-Arriva_The_Shires_5094_F644_LMJ.JPG" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Arriva_The_Shires_5094_F644_LMJ.JPG/180px-Arriva_The_Shires_5094_F644_LMJ.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Arriva_The_Shires_5094_F644_LMJ.JPG/240px-Arriva_The_Shires_5094_F644_LMJ.JPG 2x" data-file-width="3712" data-file-height="2088" /></a></td>
<td>DD</td>
<td>British Leyland/Leyland Bus</td>
<td>1980 to 1993</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Panther&amp;action=edit&amp;redlink=1" class="new" title="Leyland Panther (not yet started)">Leyland Panther</a></td>
<td><a href="/wiki/File:Merseyside_PTE_40th_anniversary_event_-_DSC04817.JPG" class="image"><img alt="Merseyside PTE 40th anniversary event - DSC04817.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/37/Merseyside_PTE_40th_anniversary_event_-_DSC04817.JPG/120px-Merseyside_PTE_40th_anniversary_event_-_DSC04817.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/37/Merseyside_PTE_40th_anniversary_event_-_DSC04817.JPG/180px-Merseyside_PTE_40th_anniversary_event_-_DSC04817.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/37/Merseyside_PTE_40th_anniversary_event_-_DSC04817.JPG/240px-Merseyside_PTE_40th_anniversary_event_-_DSC04817.JPG 2x" data-file-width="3648" data-file-height="2736" /></a></td>
<td>SD</td>
<td></td>
<td>1964</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Panther_Cub&amp;action=edit&amp;redlink=1" class="new" title="Leyland Panther Cub (not yet started)">Leyland Panther Cub</a></td>
<td></td>
<td>SD</td>
<td></td>
<td>1964</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Royal_Tiger_Worldmaster&amp;action=edit&amp;redlink=1" class="new" title="Leyland Royal Tiger Worldmaster (not yet started)">Leyland Royal Tiger Worldmaster</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Royal_Tiger&amp;action=edit&amp;redlink=1" class="new" title="Leyland Royal Tiger (not yet started)">Leyland Royal Tiger</a></td>
<td><a href="/wiki/File:Leyland_Tiger_E48_TYG.jpg" class="image"><img alt="Leyland Tiger E48 TYG.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/db/Leyland_Tiger_E48_TYG.jpg/120px-Leyland_Tiger_E48_TYG.jpg" width="120" height="95" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/db/Leyland_Tiger_E48_TYG.jpg/180px-Leyland_Tiger_E48_TYG.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/db/Leyland_Tiger_E48_TYG.jpg/240px-Leyland_Tiger_E48_TYG.jpg 2x" data-file-width="725" data-file-height="573" /></a></td>
<td>SD</td>
<td>Leyland Bus</td>
<td>1982</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Swift&amp;action=edit&amp;redlink=1" class="new" title="Leyland Swift (not yet started)">Leyland Swift</a></td>
<td><a href="/wiki/File:Leyland_Swift.jpg" class="image"><img alt="Leyland Swift.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Leyland_Swift.jpg/120px-Leyland_Swift.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Leyland_Swift.jpg/180px-Leyland_Swift.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Leyland_Swift.jpg/240px-Leyland_Swift.jpg 2x" data-file-width="900" data-file-height="675" /></a></td>
<td>SD</td>
<td>Leyland Bus</td>
<td>1987</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Tiger_(front-engined)&amp;action=edit&amp;redlink=1" class="new" title="Leyland Tiger (front-engined) (not yet started)">Leyland Tiger (front-engined)</a></td>
<td><a href="/wiki/File:1936-LeylandTiger-JA7591.jpg" class="image"><img alt="1936-LeylandTiger-JA7591.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/61/1936-LeylandTiger-JA7591.jpg/120px-1936-LeylandTiger-JA7591.jpg" width="120" height="67" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/61/1936-LeylandTiger-JA7591.jpg/180px-1936-LeylandTiger-JA7591.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/61/1936-LeylandTiger-JA7591.jpg/240px-1936-LeylandTiger-JA7591.jpg 2x" data-file-width="2246" data-file-height="1263" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Tiger_Cub&amp;action=edit&amp;redlink=1" class="new" title="Leyland Tiger Cub (not yet started)">Leyland Tiger Cub</a></td>
<td><a href="/wiki/File:Rawtenstall_Corporation_Transport_58_466_FTJ.jpg" class="image"><img alt="Rawtenstall Corporation Transport 58 466 FTJ.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/76/Rawtenstall_Corporation_Transport_58_466_FTJ.jpg/120px-Rawtenstall_Corporation_Transport_58_466_FTJ.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/76/Rawtenstall_Corporation_Transport_58_466_FTJ.jpg/180px-Rawtenstall_Corporation_Transport_58_466_FTJ.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/76/Rawtenstall_Corporation_Transport_58_466_FTJ.jpg/240px-Rawtenstall_Corporation_Transport_58_466_FTJ.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Tiger&amp;action=edit&amp;redlink=1" class="new" title="Leyland Tiger (not yet started)">Leyland Tiger (mid-engined)</a></td>
<td><a href="/wiki/File:DupleDominant.jpg" class="image"><img alt="DupleDominant.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e1/DupleDominant.jpg/120px-DupleDominant.jpg" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e1/DupleDominant.jpg/180px-DupleDominant.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e1/DupleDominant.jpg/240px-DupleDominant.jpg 2x" data-file-width="1620" data-file-height="1164" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland-DAB_articulated_bus&amp;action=edit&amp;redlink=1" class="new" title="Leyland-DAB articulated bus (not yet started)">Leyland-DAB articulated bus</a></td>
<td></td>
<td>SD</td>
<td>Leyland-DAB</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland-MCW_Olympian&amp;action=edit&amp;redlink=1" class="new" title="Leyland-MCW Olympian (not yet started)">Leyland-MCW Olympian</a></td>
<td></td>
<td>SD</td>
<td>Leyland Motors Metro-Cammell Weymann</td>
<td>1954</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland-MCW_Olympic&amp;action=edit&amp;redlink=1" class="new" title="Leyland-MCW Olympic (not yet started)">Leyland-MCW Olympic</a></td>
<td></td>
<td>SD</td>
<td>Leyland Motors Metro-Cammell Weymann</td>
<td>1949</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=MAN_Fortuna&amp;action=edit&amp;redlink=1" class="new" title="MAN Fortuna (not yet started)">MAN Fortuna</a></td>
<td><a href="/wiki/File:MAN_Lions_Coach_in_Kielce_2008.jpg" class="image"><img alt="MAN Lions Coach in Kielce 2008.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6d/MAN_Lions_Coach_in_Kielce_2008.jpg/120px-MAN_Lions_Coach_in_Kielce_2008.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6d/MAN_Lions_Coach_in_Kielce_2008.jpg/180px-MAN_Lions_Coach_in_Kielce_2008.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6d/MAN_Lions_Coach_in_Kielce_2008.jpg/240px-MAN_Lions_Coach_in_Kielce_2008.jpg 2x" data-file-width="2835" data-file-height="2126" /></a></td>
<td>SD</td>
<td><a href="/w/index.php?title=MAN_Nutzfahrzeuge&amp;action=edit&amp;redlink=1" class="new" title="MAN Nutzfahrzeuge (not yet started)">MAN Nutzfahrzeuge</a></td>
<td>2004</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=MAN_Lion%27s_City&amp;action=edit&amp;redlink=1" class="new" title="MAN Lion's City (not yet started)">MAN Lion's City</a></td>
<td><a href="/wiki/File:MVG_015_Schloss_Broich.jpg" class="image"><img alt="MVG 015 Schloss Broich.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f5/MVG_015_Schloss_Broich.jpg/120px-MVG_015_Schloss_Broich.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f5/MVG_015_Schloss_Broich.jpg/180px-MVG_015_Schloss_Broich.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f5/MVG_015_Schloss_Broich.jpg/240px-MVG_015_Schloss_Broich.jpg 2x" data-file-width="2856" data-file-height="2142" /></a></td>
<td>SD/DD</td>
<td>MAN Nutzfahrzeuge</td>
<td>2004</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=MAN_NL202&amp;action=edit&amp;redlink=1" class="new" title="MAN NL202 (not yet started)">MAN NL202</a></td>
<td><a href="/wiki/File:MAN_bus_ludwigshafen_100_1525.jpg" class="image"><img alt="MAN bus ludwigshafen 100 1525.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/37/MAN_bus_ludwigshafen_100_1525.jpg/120px-MAN_bus_ludwigshafen_100_1525.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/37/MAN_bus_ludwigshafen_100_1525.jpg/180px-MAN_bus_ludwigshafen_100_1525.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/37/MAN_bus_ludwigshafen_100_1525.jpg/240px-MAN_bus_ludwigshafen_100_1525.jpg 2x" data-file-width="2560" data-file-height="1920" /></a></td>
<td>SD</td>
<td>MAN Nutzfahrzeuge</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=MAN_NL262&amp;action=edit&amp;redlink=1" class="new" title="MAN NL262 (not yet started)">MAN NL262</a></td>
<td><a href="/wiki/File:MAN-NL262.JPG" class="image"><img alt="MAN-NL262.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f3/MAN-NL262.JPG/120px-MAN-NL262.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f3/MAN-NL262.JPG/180px-MAN-NL262.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f3/MAN-NL262.JPG/240px-MAN-NL262.JPG 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>SD</td>
<td>MAN AG</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=MAN_SL202&amp;action=edit&amp;redlink=1" class="new" title="MAN SL202 (not yet started)">MAN SL202</a></td>
<td><a href="/wiki/File:Busabout_Wagga_-_Volgren_bodied_MAN_SL202_(6080_MO)_1.jpg" class="image"><img alt="Busabout Wagga - Volgren bodied MAN SL202 (6080 MO) 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Busabout_Wagga_-_Volgren_bodied_MAN_SL202_%286080_MO%29_1.jpg/120px-Busabout_Wagga_-_Volgren_bodied_MAN_SL202_%286080_MO%29_1.jpg" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Busabout_Wagga_-_Volgren_bodied_MAN_SL202_%286080_MO%29_1.jpg/180px-Busabout_Wagga_-_Volgren_bodied_MAN_SL202_%286080_MO%29_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/27/Busabout_Wagga_-_Volgren_bodied_MAN_SL202_%286080_MO%29_1.jpg/240px-Busabout_Wagga_-_Volgren_bodied_MAN_SL202_%286080_MO%29_1.jpg 2x" data-file-width="1600" data-file-height="1112" /></a></td>
<td>SD</td>
<td>MAN Nutzfahrzeuge</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Marshall_Capital&amp;action=edit&amp;redlink=1" class="new" title="Marshall Capital (not yet started)">Marshall Capital</a></td>
<td><a href="/wiki/File:First_Hampshire_%26_Dorset_41646.jpg" class="image"><img alt="First Hampshire &amp; Dorset 41646.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/First_Hampshire_%26_Dorset_41646.jpg/120px-First_Hampshire_%26_Dorset_41646.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/First_Hampshire_%26_Dorset_41646.jpg/180px-First_Hampshire_%26_Dorset_41646.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0f/First_Hampshire_%26_Dorset_41646.jpg/240px-First_Hampshire_%26_Dorset_41646.jpg 2x" data-file-width="2816" data-file-height="2112" /></a></td>
<td>SD</td>
<td>Dennis Specialist Vehicles</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=MAZ-203&amp;action=edit&amp;redlink=1" class="new" title="MAZ-203 (not yet started)">MAZ-203</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=MCV_Ego&amp;action=edit&amp;redlink=1" class="new" title="MCV Ego (not yet started)">MCV Ego</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=MCV_Evolution&amp;action=edit&amp;redlink=1" class="new" title="MCV Evolution (not yet started)">MCV Evolution</a></td>
<td><a href="/wiki/File:Thames_Travel_1257.JPG" class="image"><img alt="Thames Travel 1257.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/70/Thames_Travel_1257.JPG/120px-Thames_Travel_1257.JPG" width="120" height="56" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/70/Thames_Travel_1257.JPG/180px-Thames_Travel_1257.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/70/Thames_Travel_1257.JPG/240px-Thames_Travel_1257.JPG 2x" data-file-width="2843" data-file-height="1334" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=MCW_Metrobus&amp;action=edit&amp;redlink=1" class="new" title="MCW Metrobus (not yet started)">MCW Metrobus</a></td>
<td></td>
<td>DD</td>
<td>Metro-Cammell Weymann</td>
<td>1977-1989</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=MCW_Metrorider&amp;action=edit&amp;redlink=1" class="new" title="MCW Metrorider (not yet started)">MCW Metrorider</a></td>
<td><a href="/wiki/File:MCW_Metrorider.jpg" class="image"><img alt="MCW Metrorider.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ad/MCW_Metrorider.jpg/120px-MCW_Metrorider.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ad/MCW_Metrorider.jpg/180px-MCW_Metrorider.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ad/MCW_Metrorider.jpg/240px-MCW_Metrorider.jpg 2x" data-file-width="800" data-file-height="600" /></a></td>
<td>SD</td>
<td>Metro-Cammell Weymann</td>
<td>1986</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Mercedes-Benz_Citaro" title="Mercedes-Benz Citaro">Mercedes-Benz Citaro</a></td>
<td><a href="/wiki/File:Citaro_G_Arriva_London.jpg" class="image"><img alt="Citaro G Arriva London.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Citaro_G_Arriva_London.jpg/120px-Citaro_G_Arriva_London.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Citaro_G_Arriva_London.jpg/180px-Citaro_G_Arriva_London.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Citaro_G_Arriva_London.jpg/240px-Citaro_G_Arriva_London.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>SD</td>
<td>Mercedes-Benz</td>
<td>1997</td>
<td><a href="/w/index.php?title=Articulated_bus&amp;action=edit&amp;redlink=1" class="new" title="Articulated bus (not yet started)">Articulated</a></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mercedes-Benz_Cito&amp;action=edit&amp;redlink=1" class="new" title="Mercedes-Benz Cito (not yet started)">Mercedes-Benz Cito</a></td>
<td><a href="/wiki/File:Cito_RTM.jpg" class="image"><img alt="Cito RTM.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Cito_RTM.jpg/120px-Cito_RTM.jpg" width="120" height="95" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Cito_RTM.jpg/180px-Cito_RTM.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Cito_RTM.jpg/240px-Cito_RTM.jpg 2x" data-file-width="1208" data-file-height="957" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mercedes-Benz_L_319&amp;action=edit&amp;redlink=1" class="new" title="Mercedes-Benz L 319 (not yet started)">Mercedes-Benz L 319</a></td>
<td><a href="/wiki/File:MB_O_319_Panorama-Bus_vr.jpg" class="image"><img alt="MB O 319 Panorama-Bus vr.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d7/MB_O_319_Panorama-Bus_vr.jpg/120px-MB_O_319_Panorama-Bus_vr.jpg" width="120" height="81" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d7/MB_O_319_Panorama-Bus_vr.jpg/180px-MB_O_319_Panorama-Bus_vr.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d7/MB_O_319_Panorama-Bus_vr.jpg/240px-MB_O_319_Panorama-Bus_vr.jpg 2x" data-file-width="1925" data-file-height="1305" /></a></td>
<td>MB</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mercedes-Benz_O305&amp;action=edit&amp;redlink=1" class="new" title="Mercedes-Benz O305 (not yet started)">Mercedes-Benz O305</a></td>
<td><a href="/wiki/File:Mercedes-Benz_O_305_Heppenheim_100_1915.JPG" class="image"><img alt="Mercedes-Benz O 305 Heppenheim 100 1915.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8b/Mercedes-Benz_O_305_Heppenheim_100_1915.JPG/120px-Mercedes-Benz_O_305_Heppenheim_100_1915.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8b/Mercedes-Benz_O_305_Heppenheim_100_1915.JPG/180px-Mercedes-Benz_O_305_Heppenheim_100_1915.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8b/Mercedes-Benz_O_305_Heppenheim_100_1915.JPG/240px-Mercedes-Benz_O_305_Heppenheim_100_1915.JPG 2x" data-file-width="2560" data-file-height="1920" /></a></td>
<td>SD/DD</td>
<td>Mercedes-Benz</td>
<td>1967</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mercedes-Benz_O309&amp;action=edit&amp;redlink=1" class="new" title="Mercedes-Benz O309 (not yet started)">Mercedes-Benz O309</a></td>
<td><a href="/wiki/File:Mercedes_o_309.jpg" class="image"><img alt="Mercedes o 309.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Mercedes_o_309.jpg/120px-Mercedes_o_309.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Mercedes_o_309.jpg/180px-Mercedes_o_309.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Mercedes_o_309.jpg/240px-Mercedes_o_309.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mercedes-Benz_O370&amp;action=edit&amp;redlink=1" class="new" title="Mercedes-Benz O370 (not yet started)">Mercedes-Benz O370</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mercedes-Benz_O371&amp;action=edit&amp;redlink=1" class="new" title="Mercedes-Benz O371 (not yet started)">Mercedes-Benz O371</a></td>
<td><a href="/wiki/File:100_5904.JPG" class="image"><img alt="100 5904.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c3/100_5904.JPG/120px-100_5904.JPG" width="120" height="92" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c3/100_5904.JPG/180px-100_5904.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c3/100_5904.JPG/240px-100_5904.JPG 2x" data-file-width="816" data-file-height="624" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Mercedes-Benz_O405" title="Mercedes-Benz O405">Mercedes-Benz O405</a></td>
<td><a href="/wiki/File:Mercedes-Benz_O_405_Viernheim_100_2269.jpg" class="image"><img alt="Mercedes-Benz O 405 Viernheim 100 2269.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Mercedes-Benz_O_405_Viernheim_100_2269.jpg/120px-Mercedes-Benz_O_405_Viernheim_100_2269.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Mercedes-Benz_O_405_Viernheim_100_2269.jpg/180px-Mercedes-Benz_O_405_Viernheim_100_2269.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Mercedes-Benz_O_405_Viernheim_100_2269.jpg/240px-Mercedes-Benz_O_405_Viernheim_100_2269.jpg 2x" data-file-width="2560" data-file-height="1920" /></a></td>
<td>SD</td>
<td>Mercedes-Benz</td>
<td>1983</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mercedes-Benz_OC500LE&amp;action=edit&amp;redlink=1" class="new" title="Mercedes-Benz OC500LE (not yet started)">Mercedes-Benz OC500LE</a></td>
<td><a href="/wiki/File:Transperth_Mercedes-Benz_OC500LE_CNG.jpg" class="image"><img alt="Transperth Mercedes-Benz OC500LE CNG.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Transperth_Mercedes-Benz_OC500LE_CNG.jpg/120px-Transperth_Mercedes-Benz_OC500LE_CNG.jpg" width="120" height="75" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Transperth_Mercedes-Benz_OC500LE_CNG.jpg/180px-Transperth_Mercedes-Benz_OC500LE_CNG.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Transperth_Mercedes-Benz_OC500LE_CNG.jpg/240px-Transperth_Mercedes-Benz_OC500LE_CNG.jpg 2x" data-file-width="3526" data-file-height="2204" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Mercedes-Benz_Sprinter" title="Mercedes-Benz Sprinter">Mercedes-Benz Sprinter</a></td>
<td><a href="/wiki/File:Mercedes-Benz_Sprinter.JPG" class="image"><img alt="Mercedes-Benz Sprinter.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Mercedes-Benz_Sprinter.JPG/120px-Mercedes-Benz_Sprinter.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Mercedes-Benz_Sprinter.JPG/180px-Mercedes-Benz_Sprinter.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Mercedes-Benz_Sprinter.JPG/240px-Mercedes-Benz_Sprinter.JPG 2x" data-file-width="1500" data-file-height="994" /></a></td>
<td>MB</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mercedes-Benz_T2&amp;action=edit&amp;redlink=1" class="new" title="Mercedes-Benz T2 (not yet started)">Mercedes-Benz T2</a></td>
<td><a href="/wiki/File:GHA_Coaches_N2_GHA.JPG" class="image"><img alt="GHA Coaches N2 GHA.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d5/GHA_Coaches_N2_GHA.JPG/120px-GHA_Coaches_N2_GHA.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d5/GHA_Coaches_N2_GHA.JPG/180px-GHA_Coaches_N2_GHA.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d5/GHA_Coaches_N2_GHA.JPG/240px-GHA_Coaches_N2_GHA.JPG 2x" data-file-width="800" data-file-height="600" /></a></td>
<td>MB</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mercedes-Benz_TN&amp;action=edit&amp;redlink=1" class="new" title="Mercedes-Benz TN (not yet started)">Mercedes-Benz TN</a></td>
<td><a href="/wiki/File:Mercedes_T1_front_20080214.jpg" class="image"><img alt="Mercedes T1 front 20080214.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Mercedes_T1_front_20080214.jpg/120px-Mercedes_T1_front_20080214.jpg" width="120" height="93" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Mercedes_T1_front_20080214.jpg/180px-Mercedes_T1_front_20080214.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Mercedes_T1_front_20080214.jpg/240px-Mercedes_T1_front_20080214.jpg 2x" data-file-width="1743" data-file-height="1344" /></a></td>
<td>MB</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Mercedes-Benz_Vario" title="Mercedes-Benz Vario">Mercedes-Benz Vario</a></td>
<td><a href="/wiki/File:Ernst_Auw%C3%A4rter_Economy_100_4053.jpg" class="image"><img alt="Ernst Auwärter Economy 100 4053.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Ernst_Auw%C3%A4rter_Economy_100_4053.jpg/120px-Ernst_Auw%C3%A4rter_Economy_100_4053.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Ernst_Auw%C3%A4rter_Economy_100_4053.jpg/180px-Ernst_Auw%C3%A4rter_Economy_100_4053.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Ernst_Auw%C3%A4rter_Economy_100_4053.jpg/240px-Ernst_Auw%C3%A4rter_Economy_100_4053.jpg 2x" data-file-width="2560" data-file-height="1920" /></a></td>
<td>MB</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mercedes-Benz_Vito&amp;action=edit&amp;redlink=1" class="new" title="Mercedes-Benz Vito (not yet started)">Mercedes-Benz Vito</a></td>
<td><a href="/wiki/File:Mercedes_W639_front_20080127.jpg" class="image"><img alt="Mercedes W639 front 20080127.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Mercedes_W639_front_20080127.jpg/120px-Mercedes_W639_front_20080127.jpg" width="120" height="79" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Mercedes_W639_front_20080127.jpg/180px-Mercedes_W639_front_20080127.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Mercedes_W639_front_20080127.jpg/240px-Mercedes_W639_front_20080127.jpg 2x" data-file-width="1731" data-file-height="1146" /></a></td>
<td>MB</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mitsubishi_Fuso_Aero_Bus&amp;action=edit&amp;redlink=1" class="new" title="Mitsubishi Fuso Aero Bus (not yet started)">Mitsubishi Fuso Aero Bus</a></td>
<td><a href="/wiki/File:Jrbuskanto-momijigo-20070723.jpg" class="image"><img alt="Jrbuskanto-momijigo-20070723.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Jrbuskanto-momijigo-20070723.jpg/120px-Jrbuskanto-momijigo-20070723.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Jrbuskanto-momijigo-20070723.jpg/180px-Jrbuskanto-momijigo-20070723.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Jrbuskanto-momijigo-20070723.jpg/240px-Jrbuskanto-momijigo-20070723.jpg 2x" data-file-width="2411" data-file-height="1808" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mitsubishi_Fuso_Aero_Midi&amp;action=edit&amp;redlink=1" class="new" title="Mitsubishi Fuso Aero Midi (not yet started)">Mitsubishi Fuso Aero Midi</a></td>
<td><a href="/wiki/File:Communitybus_mirai21_inShinmei.JPG" class="image"><img alt="Communitybus mirai21 inShinmei.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Communitybus_mirai21_inShinmei.JPG/120px-Communitybus_mirai21_inShinmei.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Communitybus_mirai21_inShinmei.JPG/180px-Communitybus_mirai21_inShinmei.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Communitybus_mirai21_inShinmei.JPG/240px-Communitybus_mirai21_inShinmei.JPG 2x" data-file-width="1280" data-file-height="960" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mitsubishi_Fuso_Aero_Star&amp;action=edit&amp;redlink=1" class="new" title="Mitsubishi Fuso Aero Star (not yet started)">Mitsubishi Fuso Aero Star</a></td>
<td><a href="/wiki/File:Seaside_1686.JPG" class="image"><img alt="Seaside 1686.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Seaside_1686.JPG/120px-Seaside_1686.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Seaside_1686.JPG/180px-Seaside_1686.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Seaside_1686.JPG/240px-Seaside_1686.JPG 2x" data-file-width="3008" data-file-height="2000" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mitsubishi_Fuso_Rosa&amp;action=edit&amp;redlink=1" class="new" title="Mitsubishi Fuso Rosa (not yet started)">Mitsubishi Fuso Rosa</a></td>
<td></td>
<td>MB</td>
<td>1960</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Neoplan_AN440&amp;action=edit&amp;redlink=1" class="new" title="Neoplan AN440 (not yet started)">Neoplan AN440</a></td>
<td><a href="/wiki/File:ABQ_RIDE_332_Montgomery_Albuquerque.jpg" class="image"><img alt="ABQ RIDE 332 Montgomery Albuquerque.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/ABQ_RIDE_332_Montgomery_Albuquerque.jpg/120px-ABQ_RIDE_332_Montgomery_Albuquerque.jpg" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/ABQ_RIDE_332_Montgomery_Albuquerque.jpg/180px-ABQ_RIDE_332_Montgomery_Albuquerque.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/42/ABQ_RIDE_332_Montgomery_Albuquerque.jpg/240px-ABQ_RIDE_332_Montgomery_Albuquerque.jpg 2x" data-file-width="777" data-file-height="559" /></a></td>
<td>SD</td>
<td><a href="/w/index.php?title=Neoplan_USA&amp;action=edit&amp;redlink=1" class="new" title="Neoplan USA (not yet started)">NEOPLAN USA</a></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Neoplan_Centroliner&amp;action=edit&amp;redlink=1" class="new" title="Neoplan Centroliner (not yet started)">Neoplan Centroliner</a></td>
<td><a href="/wiki/File:Kanagawa-Chuo-Kotsu-TwinLiner-N4421.jpg" class="image"><img alt="Kanagawa-Chuo-Kotsu-TwinLiner-N4421.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Kanagawa-Chuo-Kotsu-TwinLiner-N4421.jpg/120px-Kanagawa-Chuo-Kotsu-TwinLiner-N4421.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Kanagawa-Chuo-Kotsu-TwinLiner-N4421.jpg/180px-Kanagawa-Chuo-Kotsu-TwinLiner-N4421.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Kanagawa-Chuo-Kotsu-TwinLiner-N4421.jpg/240px-Kanagawa-Chuo-Kotsu-TwinLiner-N4421.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD/DD</td>
<td><a href="/w/index.php?title=Neoplan&amp;action=edit&amp;redlink=1" class="new" title="Neoplan (not yet started)">NEOPLAN Bus GmbH</a></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Neoplan_Jumbocruiser&amp;action=edit&amp;redlink=1" class="new" title="Neoplan Jumbocruiser (not yet started)">Neoplan Jumbocruiser</a></td>
<td><a href="/wiki/File:Cropped_jumbo.jpg" class="image"><img alt="Cropped jumbo.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/33/Cropped_jumbo.jpg/120px-Cropped_jumbo.jpg" width="120" height="37" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/33/Cropped_jumbo.jpg/180px-Cropped_jumbo.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/33/Cropped_jumbo.jpg/240px-Cropped_jumbo.jpg 2x" data-file-width="2118" data-file-height="651" /></a></td>
<td>DD</td>
<td>NEOPLAN</td>
<td>1975</td>
<td>4-axle articulated coach</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Neoplan_N4009&amp;action=edit&amp;redlink=1" class="new" title="Neoplan N4009 (not yet started)">Neoplan N4009</a></td>
<td><a href="/wiki/File:ArrivaNWandWalesNeoplanN4009.jpg" class="image"><img alt="ArrivaNWandWalesNeoplanN4009.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/56/ArrivaNWandWalesNeoplanN4009.jpg/120px-ArrivaNWandWalesNeoplanN4009.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/56/ArrivaNWandWalesNeoplanN4009.jpg/180px-ArrivaNWandWalesNeoplanN4009.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/56/ArrivaNWandWalesNeoplanN4009.jpg/240px-ArrivaNWandWalesNeoplanN4009.jpg 2x" data-file-width="1207" data-file-height="800" /></a></td>
<td>SD</td>
<td>NEOPLAN</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Neoplan_N4016&amp;action=edit&amp;redlink=1" class="new" title="Neoplan N4016 (not yet started)">Neoplan N4016</a></td>
<td><a href="/wiki/File:Neoplan_N4016_1.jpg" class="image"><img alt="Neoplan N4016 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Neoplan_N4016_1.jpg/120px-Neoplan_N4016_1.jpg" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Neoplan_N4016_1.jpg/180px-Neoplan_N4016_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Neoplan_N4016_1.jpg/240px-Neoplan_N4016_1.jpg 2x" data-file-width="1131" data-file-height="735" /></a></td>
<td>SD</td>
<td>NEOPLAN</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Neoplan_Skyliner&amp;action=edit&amp;redlink=1" class="new" title="Neoplan Skyliner (not yet started)">Neoplan Skyliner</a></td>
<td><a href="/wiki/File:Neoplan_Doppelstockbus_Viernheim_100_3625.jpg" class="image"><img alt="Neoplan Doppelstockbus Viernheim 100 3625.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/93/Neoplan_Doppelstockbus_Viernheim_100_3625.jpg/120px-Neoplan_Doppelstockbus_Viernheim_100_3625.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/93/Neoplan_Doppelstockbus_Viernheim_100_3625.jpg/180px-Neoplan_Doppelstockbus_Viernheim_100_3625.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/93/Neoplan_Doppelstockbus_Viernheim_100_3625.jpg/240px-Neoplan_Doppelstockbus_Viernheim_100_3625.jpg 2x" data-file-width="2560" data-file-height="1920" /></a></td>
<td>DD</td>
<td>NEOPLAN Bus GmbH</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Neoplan_Transliner&amp;action=edit&amp;redlink=1" class="new" title="Neoplan Transliner (not yet started)">Neoplan Transliner</a></td>
<td><a href="/wiki/File:Neoplan_Transliner_N316_SHD_Scania_in_Krakow.jpg" class="image"><img alt="Neoplan Transliner N316 SHD Scania in Krakow.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/Neoplan_Transliner_N316_SHD_Scania_in_Krakow.jpg/120px-Neoplan_Transliner_N316_SHD_Scania_in_Krakow.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/Neoplan_Transliner_N316_SHD_Scania_in_Krakow.jpg/180px-Neoplan_Transliner_N316_SHD_Scania_in_Krakow.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/38/Neoplan_Transliner_N316_SHD_Scania_in_Krakow.jpg/240px-Neoplan_Transliner_N316_SHD_Scania_in_Krakow.jpg 2x" data-file-width="2835" data-file-height="2126" /></a></td>
<td>SD</td>
<td>NEOPLAN Bus GmbH</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Neoplan_Megaliner&amp;action=edit&amp;redlink=1" class="new" title="Neoplan Megaliner (not yet started)">Neoplan Megaliner</a> N128/4</td>
<td><a href="/wiki/File:JR_Bus_Kanto_Neoplan_Megaliner.jpg" class="image"><img alt="JR Bus Kanto Neoplan Megaliner.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/44/JR_Bus_Kanto_Neoplan_Megaliner.jpg/120px-JR_Bus_Kanto_Neoplan_Megaliner.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/44/JR_Bus_Kanto_Neoplan_Megaliner.jpg/180px-JR_Bus_Kanto_Neoplan_Megaliner.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/44/JR_Bus_Kanto_Neoplan_Megaliner.jpg/240px-JR_Bus_Kanto_Neoplan_Megaliner.jpg 2x" data-file-width="1280" data-file-height="960" /></a></td>
<td>DD</td>
<td>NEOPLAN</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Neoplan_Airliner&amp;action=edit&amp;redlink=1" class="new" title="Neoplan Airliner (not yet started)">Neoplan Airliner</a></td>
<td><a href="/wiki/File:Tomamustneoplan.JPG" class="image"><img alt="Tomamustneoplan.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Tomamustneoplan.JPG/120px-Tomamustneoplan.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Tomamustneoplan.JPG/180px-Tomamustneoplan.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Tomamustneoplan.JPG/240px-Tomamustneoplan.JPG 2x" data-file-width="1277" data-file-height="855" /></a></td>
<td>SD</td>
<td>NEOPLAN Bus GmbH</td>
<td></td>
<td><a href="/w/index.php?title=Airport_bus&amp;action=edit&amp;redlink=1" class="new" title="Airport bus (not yet started)">Airport shuttle bus</a></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Nissan_Civilian&amp;action=edit&amp;redlink=1" class="new" title="Nissan Civilian (not yet started)">Nissan Civilian</a></td>
<td></td>
<td>MB</td>
<td><a href="/wiki/Nissan_Motors" class="mw-redirect" title="Nissan Motors">Nissan Motors</a></td>
<td></td>
<td>Originally known as the Nissan Echo</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Nissan_Diesel_Space_Arrow&amp;action=edit&amp;redlink=1" class="new" title="Nissan Diesel Space Arrow (not yet started)">Nissan Diesel Space Arrow</a></td>
<td><a href="/wiki/File:Fujiexp-lakeliner-20070703.jpg" class="image"><img alt="Fujiexp-lakeliner-20070703.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Fujiexp-lakeliner-20070703.jpg/120px-Fujiexp-lakeliner-20070703.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Fujiexp-lakeliner-20070703.jpg/180px-Fujiexp-lakeliner-20070703.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Fujiexp-lakeliner-20070703.jpg/240px-Fujiexp-lakeliner-20070703.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>SD</td>
<td>Nissan Diesel</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Nissan_Diesel_Space_Runner_7&amp;action=edit&amp;redlink=1" class="new" title="Nissan Diesel Space Runner 7 (not yet started)">Nissan Diesel Space Runner 7</a></td>
<td><a href="/wiki/File:NISSANDIESEL_KC-EN250DAN_SEIBU-1845.jpg" class="image"><img alt="NISSANDIESEL KC-EN250DAN SEIBU-1845.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/33/NISSANDIESEL_KC-EN250DAN_SEIBU-1845.jpg/120px-NISSANDIESEL_KC-EN250DAN_SEIBU-1845.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/33/NISSANDIESEL_KC-EN250DAN_SEIBU-1845.jpg/180px-NISSANDIESEL_KC-EN250DAN_SEIBU-1845.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/33/NISSANDIESEL_KC-EN250DAN_SEIBU-1845.jpg/240px-NISSANDIESEL_KC-EN250DAN_SEIBU-1845.jpg 2x" data-file-width="640" data-file-height="480" /></a></td>
<td>SD</td>
<td>Nissan Diesel</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Nissan_Diesel_Space_Runner_JP&amp;action=edit&amp;redlink=1" class="new" title="Nissan Diesel Space Runner JP (not yet started)">Nissan Diesel Space Runner JP</a></td>
<td><a href="/wiki/File:Hokutetsu_Bus_323.jpg" class="image"><img alt="Hokutetsu Bus 323.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Hokutetsu_Bus_323.jpg/120px-Hokutetsu_Bus_323.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Hokutetsu_Bus_323.jpg/180px-Hokutetsu_Bus_323.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Hokutetsu_Bus_323.jpg/240px-Hokutetsu_Bus_323.jpg 2x" data-file-width="800" data-file-height="600" /></a></td>
<td>SD</td>
<td>Nissan Diesel</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Nissan_Diesel_Space_Runner_RA&amp;action=edit&amp;redlink=1" class="new" title="Nissan Diesel Space Runner RA (not yet started)">Nissan Diesel Space Runner RA</a></td>
<td><a href="/wiki/File:Kawasakicitybus-s4478-kw04-20070919.jpg" class="image"><img alt="Kawasakicitybus-s4478-kw04-20070919.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Kawasakicitybus-s4478-kw04-20070919.jpg/120px-Kawasakicitybus-s4478-kw04-20070919.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Kawasakicitybus-s4478-kw04-20070919.jpg/180px-Kawasakicitybus-s4478-kw04-20070919.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Kawasakicitybus-s4478-kw04-20070919.jpg/240px-Kawasakicitybus-s4478-kw04-20070919.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>SD</td>
<td>Nissan Diesel</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Nissan_Diesel_Space_Runner_RM&amp;action=edit&amp;redlink=1" class="new" title="Nissan Diesel Space Runner RM (not yet started)">Nissan Diesel Space Runner RM</a></td>
<td><a href="/wiki/File:SeibuBus_A7-226.jpg" class="image"><img alt="SeibuBus A7-226.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/30/SeibuBus_A7-226.jpg/120px-SeibuBus_A7-226.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/30/SeibuBus_A7-226.jpg/180px-SeibuBus_A7-226.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/30/SeibuBus_A7-226.jpg/240px-SeibuBus_A7-226.jpg 2x" data-file-width="2592" data-file-height="1728" /></a></td>
<td>SD</td>
<td>Nissan Diesel</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Nissan_Diesel_Space_Runner_RP&amp;action=edit&amp;redlink=1" class="new" title="Nissan Diesel Space Runner RP (not yet started)">Nissan Diesel Space Runner RP</a></td>
<td><a href="/wiki/File:EnoshimaDentetsu_548.jpg" class="image"><img alt="EnoshimaDentetsu 548.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f4/EnoshimaDentetsu_548.jpg/120px-EnoshimaDentetsu_548.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f4/EnoshimaDentetsu_548.jpg/180px-EnoshimaDentetsu_548.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f4/EnoshimaDentetsu_548.jpg/240px-EnoshimaDentetsu_548.jpg 2x" data-file-width="800" data-file-height="533" /></a></td>
<td>SD</td>
<td>Nissan Diesel</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Nissan_Diesel_UA&amp;action=edit&amp;redlink=1" class="new" title="Nissan Diesel UA (not yet started)">Nissan Diesel UA</a></td>
<td><a href="/wiki/File:KC-UA521NAN-Kanachu-Ha127.JPG" class="image"><img alt="KC-UA521NAN-Kanachu-Ha127.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3b/KC-UA521NAN-Kanachu-Ha127.JPG/120px-KC-UA521NAN-Kanachu-Ha127.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3b/KC-UA521NAN-Kanachu-Ha127.JPG/180px-KC-UA521NAN-Kanachu-Ha127.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3b/KC-UA521NAN-Kanachu-Ha127.JPG/240px-KC-UA521NAN-Kanachu-Ha127.JPG 2x" data-file-width="2048" data-file-height="1536" /></a></td>
<td>SD</td>
<td>Nissan Diesel</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Nissan_U-R&amp;action=edit&amp;redlink=1" class="new" title="Nissan U-R (not yet started)">Nissan U-R</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Northern_Counties_Paladin&amp;action=edit&amp;redlink=1" class="new" title="Northern Counties Paladin (not yet started)">Northern Counties Paladin</a></td>
<td><a href="/wiki/File:Northern_Counties_Paladin_2.jpg" class="image"><img alt="Northern Counties Paladin 2.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/80/Northern_Counties_Paladin_2.jpg/120px-Northern_Counties_Paladin_2.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/80/Northern_Counties_Paladin_2.jpg/180px-Northern_Counties_Paladin_2.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/80/Northern_Counties_Paladin_2.jpg/240px-Northern_Counties_Paladin_2.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD</td>
<td>Northern Counties</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Northern_Counties_Palatine&amp;action=edit&amp;redlink=1" class="new" title="Northern Counties Palatine (not yet started)">Northern Counties Palatine</a></td>
<td><a href="/wiki/File:Warrington_Olympian_NCME_1.jpg" class="image"><img alt="Warrington Olympian NCME 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/74/Warrington_Olympian_NCME_1.jpg/120px-Warrington_Olympian_NCME_1.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/74/Warrington_Olympian_NCME_1.jpg/180px-Warrington_Olympian_NCME_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/74/Warrington_Olympian_NCME_1.jpg/240px-Warrington_Olympian_NCME_1.jpg 2x" data-file-width="1556" data-file-height="1165" /></a></td>
<td>DD</td>
<td>Northern Counties</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Alero&amp;action=edit&amp;redlink=1" class="new" title="Optare Alero (not yet started)">Optare Alero</a></td>
<td><a href="/wiki/File:Optare_Alero_1.jpg" class="image"><img alt="Optare Alero 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/40/Optare_Alero_1.jpg/120px-Optare_Alero_1.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/40/Optare_Alero_1.jpg/180px-Optare_Alero_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/40/Optare_Alero_1.jpg/240px-Optare_Alero_1.jpg 2x" data-file-width="1370" data-file-height="1032" /></a></td>
<td>MB</td>
<td>Optare</td>
<td>2001 to 2008</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Bonito&amp;action=edit&amp;redlink=1" class="new" title="Optare Bonito (not yet started)">Optare Bonito</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_CityPacer&amp;action=edit&amp;redlink=1" class="new" title="Optare CityPacer (not yet started)">Optare CityPacer</a></td>
<td><a href="/wiki/File:Optare_City_Pacer.jpg" class="image"><img alt="Optare City Pacer.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/40/Optare_City_Pacer.jpg/120px-Optare_City_Pacer.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/40/Optare_City_Pacer.jpg/180px-Optare_City_Pacer.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/40/Optare_City_Pacer.jpg/240px-Optare_City_Pacer.jpg 2x" data-file-width="1440" data-file-height="960" /></a></td>
<td>MB</td>
<td>Optare</td>
<td>1985 to 1992</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_ColumboRider&amp;action=edit&amp;redlink=1" class="new" title="Optare ColumboRider (not yet started)">Optare ColumboRider</a></td>
<td></td>
<td>SD</td>
<td>Optare</td>
<td>1987</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Delta&amp;action=edit&amp;redlink=1" class="new" title="Optare Delta (not yet started)">Optare Delta</a></td>
<td><a href="/wiki/File:Southern_Transit_J205_VHN.JPG" class="image"><img alt="Southern Transit J205 VHN.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/Southern_Transit_J205_VHN.JPG/120px-Southern_Transit_J205_VHN.JPG" width="120" height="74" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/Southern_Transit_J205_VHN.JPG/180px-Southern_Transit_J205_VHN.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/38/Southern_Transit_J205_VHN.JPG/240px-Southern_Transit_J205_VHN.JPG 2x" data-file-width="2897" data-file-height="1783" /></a></td>
<td>SD</td>
<td>Optare</td>
<td>1988</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Esteem&amp;action=edit&amp;redlink=1" class="new" title="Optare Esteem (not yet started)">Optare Esteem</a></td>
<td><a href="/wiki/File:Preston_Bus_Preston_Bus_Station_PN57NFC.jpg" class="image"><img alt="Preston Bus Preston Bus Station PN57NFC.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Preston_Bus_Preston_Bus_Station_PN57NFC.jpg/120px-Preston_Bus_Preston_Bus_Station_PN57NFC.jpg" width="120" height="67" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Preston_Bus_Preston_Bus_Station_PN57NFC.jpg/180px-Preston_Bus_Preston_Bus_Station_PN57NFC.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Preston_Bus_Preston_Bus_Station_PN57NFC.jpg/240px-Preston_Bus_Preston_Bus_Station_PN57NFC.jpg 2x" data-file-width="673" data-file-height="373" /></a></td>
<td>SD</td>
<td>East Lancashire Coachbuilders/Optare</td>
<td>2006</td>
<td>Bodywork, originally launched as East Lancs Esteem</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Excel&amp;action=edit&amp;redlink=1" class="new" title="Optare Excel (not yet started)">Optare Excel</a></td>
<td><a href="/wiki/File:Reading_Transport_930.JPG" class="image"><img alt="Reading Transport 930.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Reading_Transport_930.JPG/120px-Reading_Transport_930.JPG" width="120" height="59" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Reading_Transport_930.JPG/180px-Reading_Transport_930.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Reading_Transport_930.JPG/240px-Reading_Transport_930.JPG 2x" data-file-width="2377" data-file-height="1173" /></a></td>
<td>SD</td>
<td>Optare</td>
<td>1995</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_MetroRider&amp;action=edit&amp;redlink=1" class="new" title="Optare MetroRider (not yet started)">Optare MetroRider</a></td>
<td><a href="/wiki/File:T422_ADN.JPG" class="image"><img alt="T422 ADN.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1d/T422_ADN.JPG/120px-T422_ADN.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1d/T422_ADN.JPG/180px-T422_ADN.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1d/T422_ADN.JPG/240px-T422_ADN.JPG 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD</td>
<td>Optare</td>
<td>1989</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Olympus&amp;action=edit&amp;redlink=1" class="new" title="Optare Olympus (not yet started)">Optare Olympus</a></td>
<td></td>
<td>DD</td>
<td>East Lancashire Coachbuilders/Optare</td>
<td>2006</td>
<td>Bodywork, originally launched as East Lancs Olympus</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Prisma&amp;action=edit&amp;redlink=1" class="new" title="Optare Prisma (not yet started)">Optare Prisma</a></td>
<td><a href="/wiki/File:Optare_Prisma_1.jpg" class="image"><img alt="Optare Prisma 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Optare_Prisma_1.jpg/120px-Optare_Prisma_1.jpg" width="120" height="75" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Optare_Prisma_1.jpg/180px-Optare_Prisma_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Optare_Prisma_1.jpg/240px-Optare_Prisma_1.jpg 2x" data-file-width="1600" data-file-height="1000" /></a></td>
<td>SD</td>
<td></td>
<td>1995</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Rapido&amp;action=edit&amp;redlink=1" class="new" title="Optare Rapido (not yet started)">Optare Rapido</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Rapta&amp;action=edit&amp;redlink=1" class="new" title="Optare Rapta (not yet started)">Optare Rapta</a></td>
<td></td>
<td>DD</td>
<td>Optare</td>
<td>2008</td>
<td>Never entered production</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Sigma&amp;action=edit&amp;redlink=1" class="new" title="Optare Sigma (not yet started)">Optare Sigma</a></td>
<td><a href="/wiki/File:Atbus_OL19.JPG" class="image"><img alt="Atbus OL19.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Atbus_OL19.JPG/120px-Atbus_OL19.JPG" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Atbus_OL19.JPG/180px-Atbus_OL19.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/53/Atbus_OL19.JPG/240px-Atbus_OL19.JPG 2x" data-file-width="3712" data-file-height="2088" /></a></td>
<td>SD</td>
<td></td>
<td>1994 to 1996</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Solera&amp;action=edit&amp;redlink=1" class="new" title="Optare Solera (not yet started)">Optare Solera</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Solo&amp;action=edit&amp;redlink=1" class="new" title="Optare Solo (not yet started)">Optare Solo</a></td>
<td><a href="/wiki/File:Cumfybus_Optare_Solo_1.jpg" class="image"><img alt="Cumfybus Optare Solo 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Cumfybus_Optare_Solo_1.jpg/120px-Cumfybus_Optare_Solo_1.jpg" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Cumfybus_Optare_Solo_1.jpg/180px-Cumfybus_Optare_Solo_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Cumfybus_Optare_Solo_1.jpg/240px-Cumfybus_Optare_Solo_1.jpg 2x" data-file-width="1198" data-file-height="826" /></a></td>
<td>SD</td>
<td>Optare</td>
<td>1997</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Soroco&amp;action=edit&amp;redlink=1" class="new" title="Optare Soroco (not yet started)">Optare Soroco</a></td>
<td><a href="/wiki/File:Arriva_0310_on_easyBus.JPG" class="image"><img alt="Arriva 0310 on easyBus.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/57/Arriva_0310_on_easyBus.JPG/120px-Arriva_0310_on_easyBus.JPG" width="120" height="97" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/57/Arriva_0310_on_easyBus.JPG/180px-Arriva_0310_on_easyBus.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/57/Arriva_0310_on_easyBus.JPG/240px-Arriva_0310_on_easyBus.JPG 2x" data-file-width="2098" data-file-height="1701" /></a></td>
<td>MB</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Spectra&amp;action=edit&amp;redlink=1" class="new" title="Optare Spectra (not yet started)">Optare Spectra</a></td>
<td></td>
<td>DD</td>
<td>Optare</td>
<td>1991 to 2005</td>
<td>Bodywork for DAF/VDL DB250</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_StarRider&amp;action=edit&amp;redlink=1" class="new" title="Optare StarRider (not yet started)">Optare StarRider</a></td>
<td><a href="/wiki/File:StarRider_1.jpg" class="image"><img alt="StarRider 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b8/StarRider_1.jpg/120px-StarRider_1.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b8/StarRider_1.jpg/180px-StarRider_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b8/StarRider_1.jpg/240px-StarRider_1.jpg 2x" data-file-width="1238" data-file-height="931" /></a></td>
<td>MB</td>
<td>Optare</td>
<td>1987 to 1994</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Tempo&amp;action=edit&amp;redlink=1" class="new" title="Optare Tempo (not yet started)">Optare Tempo</a></td>
<td><a href="/wiki/File:Safeguard_Coaches_YJ06_FXM.JPG" class="image"><img alt="Safeguard Coaches YJ06 FXM.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Safeguard_Coaches_YJ06_FXM.JPG/120px-Safeguard_Coaches_YJ06_FXM.JPG" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Safeguard_Coaches_YJ06_FXM.JPG/180px-Safeguard_Coaches_YJ06_FXM.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Safeguard_Coaches_YJ06_FXM.JPG/240px-Safeguard_Coaches_YJ06_FXM.JPG 2x" data-file-width="2249" data-file-height="1456" /></a></td>
<td>SD</td>
<td>Optare</td>
<td>2004</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Toro&amp;action=edit&amp;redlink=1" class="new" title="Optare Toro (not yet started)">Optare Toro</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Vecta&amp;action=edit&amp;redlink=1" class="new" title="Optare Vecta (not yet started)">Optare Vecta</a></td>
<td><a href="/wiki/File:Optare_Vecta_1.jpg" class="image"><img alt="Optare Vecta 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/98/Optare_Vecta_1.jpg/120px-Optare_Vecta_1.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/98/Optare_Vecta_1.jpg/180px-Optare_Vecta_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/98/Optare_Vecta_1.jpg/240px-Optare_Vecta_1.jpg 2x" data-file-width="1072" data-file-height="679" /></a></td>
<td>SD</td>
<td>Optare</td>
<td>1991</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Versa&amp;action=edit&amp;redlink=1" class="new" title="Optare Versa (not yet started)">Optare Versa</a></td>
<td><a href="/wiki/File:Vale_Travel_MX58_KZF.JPG" class="image"><img alt="Vale Travel MX58 KZF.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Vale_Travel_MX58_KZF.JPG/120px-Vale_Travel_MX58_KZF.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Vale_Travel_MX58_KZF.JPG/180px-Vale_Travel_MX58_KZF.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Vale_Travel_MX58_KZF.JPG/240px-Vale_Travel_MX58_KZF.JPG 2x" data-file-width="800" data-file-height="600" /></a></td>
<td>SD</td>
<td>Optare</td>
<td>2006</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Viedo&amp;action=edit&amp;redlink=1" class="new" title="Optare Viedo (not yet started)">Optare Viedo</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Optare_Visionaire&amp;action=edit&amp;redlink=1" class="new" title="Optare Visionaire (not yet started)">Optare Visionaire</a></td>
<td><a href="/wiki/File:Original_Tour_VLE614_on_T2.JPG" class="image"><img alt="Original Tour VLE614 on T2.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Original_Tour_VLE614_on_T2.JPG/120px-Original_Tour_VLE614_on_T2.JPG" width="120" height="96" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Original_Tour_VLE614_on_T2.JPG/180px-Original_Tour_VLE614_on_T2.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Original_Tour_VLE614_on_T2.JPG/240px-Original_Tour_VLE614_on_T2.JPG 2x" data-file-width="1860" data-file-height="1492" /></a></td>
<td>DD</td>
<td>East Lancashire Coachbuilders/Optare</td>
<td>2006</td>
<td>Open-top bodywork, originally launched as East Lancs Visionaire</td>
</tr>
<tr>
<td><a href="/w/index.php?title=PAZ-3205&amp;action=edit&amp;redlink=1" class="new" title="PAZ-3205 (not yet started)">PAZ-3205</a></td>
<td><a href="/wiki/File:PAZ-32054.jpg" class="image"><img alt="PAZ-32054.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e4/PAZ-32054.jpg/120px-PAZ-32054.jpg" width="120" height="96" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e4/PAZ-32054.jpg/180px-PAZ-32054.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e4/PAZ-32054.jpg/240px-PAZ-32054.jpg 2x" data-file-width="1280" data-file-height="1024" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Pegaso_Z-403&amp;action=edit&amp;redlink=1" class="new" title="Pegaso Z-403 (not yet started)">Pegaso Z-403</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Beaver&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Beaver (not yet started)">Plaxton Beaver</a></td>
<td><a href="/wiki/File:Plaxton_Beaver_1.JPG" class="image"><img alt="Plaxton Beaver 1.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/04/Plaxton_Beaver_1.JPG/120px-Plaxton_Beaver_1.JPG" width="120" height="85" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/04/Plaxton_Beaver_1.JPG/180px-Plaxton_Beaver_1.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/04/Plaxton_Beaver_1.JPG/240px-Plaxton_Beaver_1.JPG 2x" data-file-width="882" data-file-height="626" /></a></td>
<td>MB</td>
<td><a href="/w/index.php?title=Plaxton&amp;action=edit&amp;redlink=1" class="new" title="Plaxton (not yet started)">Plaxton</a></td>
<td>1987 to 2011</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Centro&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Centro (not yet started)">Plaxton Centro</a></td>
<td><a href="/wiki/File:Longcross_Centrebus_Plaxton_Centro.jpg" class="image"><img alt="Longcross Centrebus Plaxton Centro.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Longcross_Centrebus_Plaxton_Centro.jpg/120px-Longcross_Centrebus_Plaxton_Centro.jpg" width="120" height="74" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Longcross_Centrebus_Plaxton_Centro.jpg/180px-Longcross_Centrebus_Plaxton_Centro.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Longcross_Centrebus_Plaxton_Centro.jpg/240px-Longcross_Centrebus_Plaxton_Centro.jpg 2x" data-file-width="1144" data-file-height="702" /></a></td>
<td>SD</td>
<td>Plaxton</td>
<td>2006</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Derwent_3000&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Derwent 3000 (not yet started)">Plaxton Derwent 3000</a></td>
<td><a href="/wiki/File:Plaxton_Derwent_3000_1.jpg" class="image"><img alt="Plaxton Derwent 3000 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/35/Plaxton_Derwent_3000_1.jpg/120px-Plaxton_Derwent_3000_1.jpg" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/35/Plaxton_Derwent_3000_1.jpg/180px-Plaxton_Derwent_3000_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/35/Plaxton_Derwent_3000_1.jpg/240px-Plaxton_Derwent_3000_1.jpg 2x" data-file-width="400" data-file-height="285" /></a></td>
<td>SD</td>
<td>Plaxton</td>
<td>1986</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Elite&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Elite (not yet started)">Plaxton Elite</a></td>
<td><a href="/wiki/File:Plaxton_Elite_YN10_FKM_Selwyns_National_Express.jpg" class="image"><img alt="Plaxton Elite YN10 FKM Selwyns National Express.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Plaxton_Elite_YN10_FKM_Selwyns_National_Express.jpg/120px-Plaxton_Elite_YN10_FKM_Selwyns_National_Express.jpg" width="120" height="89" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Plaxton_Elite_YN10_FKM_Selwyns_National_Express.jpg/180px-Plaxton_Elite_YN10_FKM_Selwyns_National_Express.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Plaxton_Elite_YN10_FKM_Selwyns_National_Express.jpg/240px-Plaxton_Elite_YN10_FKM_Selwyns_National_Express.jpg 2x" data-file-width="981" data-file-height="725" /></a></td>
<td>C</td>
<td>Plaxton</td>
<td>2008</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Panorama_Elite&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Panorama Elite (not yet started)">Plaxton Panorama Elite</a></td>
<td></td>
<td>SD</td>
<td>Plaxton</td>
<td>1968 to 1975</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Paragon&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Paragon (not yet started)">Plaxton Paragon</a></td>
<td><a href="/wiki/File:National_Express_route_561.jpg" class="image"><img alt="National Express route 561.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3b/National_Express_route_561.jpg/120px-National_Express_route_561.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3b/National_Express_route_561.jpg/180px-National_Express_route_561.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3b/National_Express_route_561.jpg/240px-National_Express_route_561.jpg 2x" data-file-width="3648" data-file-height="2736" /></a></td>
<td>SD</td>
<td>Plaxton</td>
<td>1999</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Paramount&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Paramount (not yet started)">Plaxton Paramount</a></td>
<td></td>
<td>SD/DD</td>
<td>Plaxton</td>
<td>1982 to 1991</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Pointer&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Pointer (not yet started)">Plaxton Pointer</a></td>
<td><a href="/wiki/File:Sunray_Travel_J136_DUV.JPG" class="image"><img alt="Sunray Travel J136 DUV.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Sunray_Travel_J136_DUV.JPG/120px-Sunray_Travel_J136_DUV.JPG" width="120" height="74" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Sunray_Travel_J136_DUV.JPG/180px-Sunray_Travel_J136_DUV.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Sunray_Travel_J136_DUV.JPG/240px-Sunray_Travel_J136_DUV.JPG 2x" data-file-width="1120" data-file-height="694" /></a></td>
<td>SD</td>
<td>Reeve Burgess/Plaxton/TransBus/Alexander Dennis</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Pointer_2&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Pointer 2 (not yet started)">Plaxton Pointer 2</a></td>
<td><a href="/wiki/File:Arriva_The_Shires_3297_X297_MBH.JPG" class="image"><img alt="Arriva The Shires 3297 X297 MBH.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Arriva_The_Shires_3297_X297_MBH.JPG/120px-Arriva_The_Shires_3297_X297_MBH.JPG" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Arriva_The_Shires_3297_X297_MBH.JPG/180px-Arriva_The_Shires_3297_X297_MBH.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Arriva_The_Shires_3297_X297_MBH.JPG/240px-Arriva_The_Shires_3297_X297_MBH.JPG 2x" data-file-width="3712" data-file-height="2088" /></a></td>
<td>SD</td>
<td>Dennis</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Premiere&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Premiere (not yet started)">Plaxton Premiere</a></td>
<td><a href="/wiki/File:National_Express_old_livery.jpg" class="image"><img alt="National Express old livery.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a5/National_Express_old_livery.jpg/120px-National_Express_old_livery.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a5/National_Express_old_livery.jpg/180px-National_Express_old_livery.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a5/National_Express_old_livery.jpg/240px-National_Express_old_livery.jpg 2x" data-file-width="500" data-file-height="333" /></a></td>
<td>SD</td>
<td>Plaxton</td>
<td>1991</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Prestige&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Prestige (not yet started)">Plaxton Prestige</a></td>
<td><a href="/wiki/File:Stagecoach_on_Teeside_bus_21104_Volvo_B10BLE_Plaxton_Prestige_P604_JBU_in_Middlesbrough_bus_station_5_May_2009.JPG" class="image"><img alt="Stagecoach on Teeside bus 21104 Volvo B10BLE Plaxton Prestige P604 JBU in Middlesbrough bus station 5 May 2009.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Stagecoach_on_Teeside_bus_21104_Volvo_B10BLE_Plaxton_Prestige_P604_JBU_in_Middlesbrough_bus_station_5_May_2009.JPG/120px-Stagecoach_on_Teeside_bus_21104_Volvo_B10BLE_Plaxton_Prestige_P604_JBU_in_Middlesbrough_bus_station_5_May_2009.JPG" width="120" height="94" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Stagecoach_on_Teeside_bus_21104_Volvo_B10BLE_Plaxton_Prestige_P604_JBU_in_Middlesbrough_bus_station_5_May_2009.JPG/180px-Stagecoach_on_Teeside_bus_21104_Volvo_B10BLE_Plaxton_Prestige_P604_JBU_in_Middlesbrough_bus_station_5_May_2009.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Stagecoach_on_Teeside_bus_21104_Volvo_B10BLE_Plaxton_Prestige_P604_JBU_in_Middlesbrough_bus_station_5_May_2009.JPG/240px-Stagecoach_on_Teeside_bus_21104_Volvo_B10BLE_Plaxton_Prestige_P604_JBU_in_Middlesbrough_bus_station_5_May_2009.JPG 2x" data-file-width="2204" data-file-height="1723" /></a></td>
<td>SD</td>
<td>Northern Counties/Plaxton</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Primo&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Primo (not yet started)">Plaxton Primo</a></td>
<td><a href="/wiki/File:PlaxtonPrimo1.jpg" class="image"><img alt="PlaxtonPrimo1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/PlaxtonPrimo1.jpg/120px-PlaxtonPrimo1.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/PlaxtonPrimo1.jpg/180px-PlaxtonPrimo1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/00/PlaxtonPrimo1.jpg/240px-PlaxtonPrimo1.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>MB</td>
<td>Plaxton</td>
<td>2005</td>
<td>Built on the structure of Enterprise Bus' Plasma</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Profile&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Profile (not yet started)">Plaxton Profile</a></td>
<td><a href="/wiki/File:Plaxton_Profile_CA06GHA_-1-_CHESTER_BE.JPG" class="image"><img alt="Plaxton Profile CA06GHA -1- CHESTER BE.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/20/Plaxton_Profile_CA06GHA_-1-_CHESTER_BE.JPG/120px-Plaxton_Profile_CA06GHA_-1-_CHESTER_BE.JPG" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/20/Plaxton_Profile_CA06GHA_-1-_CHESTER_BE.JPG/180px-Plaxton_Profile_CA06GHA_-1-_CHESTER_BE.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/20/Plaxton_Profile_CA06GHA_-1-_CHESTER_BE.JPG/240px-Plaxton_Profile_CA06GHA_-1-_CHESTER_BE.JPG 2x" data-file-width="2962" data-file-height="2040" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Pronto&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Pronto (not yet started)">Plaxton Pronto</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Supreme&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Supreme (not yet started)">Plaxton Supreme</a></td>
<td><a href="/wiki/File:Hedingham_Omnibuses_coach_L105_Leyland_Leopard_Plaxton_BEV_105X.jpg" class="image"><img alt="Hedingham Omnibuses coach L105 Leyland Leopard Plaxton BEV 105X.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Hedingham_Omnibuses_coach_L105_Leyland_Leopard_Plaxton_BEV_105X.jpg/120px-Hedingham_Omnibuses_coach_L105_Leyland_Leopard_Plaxton_BEV_105X.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Hedingham_Omnibuses_coach_L105_Leyland_Leopard_Plaxton_BEV_105X.jpg/180px-Hedingham_Omnibuses_coach_L105_Leyland_Leopard_Plaxton_BEV_105X.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Hedingham_Omnibuses_coach_L105_Leyland_Leopard_Plaxton_BEV_105X.jpg/240px-Hedingham_Omnibuses_coach_L105_Leyland_Leopard_Plaxton_BEV_105X.jpg 2x" data-file-width="1280" data-file-height="960" /></a></td>
<td>SD</td>
<td>Plaxton</td>
<td>1974</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_Verde&amp;action=edit&amp;redlink=1" class="new" title="Plaxton Verde (not yet started)">Plaxton Verde</a></td>
<td><a href="/wiki/File:Dennis_Lance_Plaxton_Verde_Arriva.jpg" class="image"><img alt="Dennis Lance Plaxton Verde Arriva.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Dennis_Lance_Plaxton_Verde_Arriva.jpg/120px-Dennis_Lance_Plaxton_Verde_Arriva.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Dennis_Lance_Plaxton_Verde_Arriva.jpg/180px-Dennis_Lance_Plaxton_Verde_Arriva.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Dennis_Lance_Plaxton_Verde_Arriva.jpg/240px-Dennis_Lance_Plaxton_Verde_Arriva.jpg 2x" data-file-width="1440" data-file-height="1080" /></a></td>
<td>SD</td>
<td>Plaxton</td>
<td>1991 to 1997</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=RAF-2203&amp;action=edit&amp;redlink=1" class="new" title="RAF-2203 (not yet started)">RAF-2203</a></td>
<td><a href="/wiki/File:Rafik_2007.jpg" class="image"><img alt="Rafik 2007.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Rafik_2007.jpg/120px-Rafik_2007.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Rafik_2007.jpg/180px-Rafik_2007.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Rafik_2007.jpg/240px-Rafik_2007.jpg 2x" data-file-width="1948" data-file-height="1462" /></a></td>
<td>MB</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Rapid_Transit_Series&amp;action=edit&amp;redlink=1" class="new" title="Rapid Transit Series (not yet started)">Rapid Transit Series</a></td>
<td><a href="/wiki/File:NYC_Police_Department_TMC_RTS_9598.jpg" class="image"><img alt="NYC Police Department TMC RTS 9598.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/30/NYC_Police_Department_TMC_RTS_9598.jpg/120px-NYC_Police_Department_TMC_RTS_9598.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/30/NYC_Police_Department_TMC_RTS_9598.jpg/180px-NYC_Police_Department_TMC_RTS_9598.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/30/NYC_Police_Department_TMC_RTS_9598.jpg/240px-NYC_Police_Department_TMC_RTS_9598.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Renault_FR1" title="Renault FR1">Renault FR1</a></td>
<td><a href="/wiki/File:Renault_fr1t3_fr-vaulx-en-velin.jpg" class="image"><img alt="Renault fr1t3 fr-vaulx-en-velin.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Renault_fr1t3_fr-vaulx-en-velin.jpg/120px-Renault_fr1t3_fr-vaulx-en-velin.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Renault_fr1t3_fr-vaulx-en-velin.jpg/180px-Renault_fr1t3_fr-vaulx-en-velin.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Renault_fr1t3_fr-vaulx-en-velin.jpg/240px-Renault_fr1t3_fr-vaulx-en-velin.jpg 2x" data-file-width="1280" data-file-height="960" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Renault_PR_180-2_Articulated_Bus&amp;action=edit&amp;redlink=1" class="new" title="Renault PR 180-2 Articulated Bus (not yet started)">Renault PR180.2</a></td>
<td><a href="/wiki/File:Transperth_bus_735.jpg" class="image"><img alt="Transperth bus 735.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Transperth_bus_735.jpg/120px-Transperth_bus_735.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Transperth_bus_735.jpg/180px-Transperth_bus_735.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Transperth_bus_735.jpg/240px-Transperth_bus_735.jpg 2x" data-file-width="1280" data-file-height="817" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td><a href="/w/index.php?title=Articulated_bus&amp;action=edit&amp;redlink=1" class="new" title="Articulated bus (not yet started)">Articulated</a></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Renault_PR100.3&amp;action=edit&amp;redlink=1" class="new" title="Renault PR100.3 (not yet started)">Renault PR100.3</a></td>
<td><a href="/wiki/File:ACTION_-_Renault_PR100.3.jpg" class="image"><img alt="ACTION - Renault PR100.3.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3c/ACTION_-_Renault_PR100.3.jpg/120px-ACTION_-_Renault_PR100.3.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3c/ACTION_-_Renault_PR100.3.jpg/180px-ACTION_-_Renault_PR100.3.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3c/ACTION_-_Renault_PR100.3.jpg/240px-ACTION_-_Renault_PR100.3.jpg 2x" data-file-width="800" data-file-height="533" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Renault_R_312" title="Renault R 312">Renault R 312</a></td>
<td><a href="/wiki/File:TUR_R312.jpg" class="image"><img alt="TUR R312.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/19/TUR_R312.jpg/120px-TUR_R312.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/19/TUR_R312.jpg/180px-TUR_R312.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/19/TUR_R312.jpg/240px-TUR_R312.jpg 2x" data-file-width="800" data-file-height="600" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Renault_Tracer" title="Renault Tracer">Renault Tracer</a></td>
<td><a href="/wiki/File:Renault_tracer_fr-lyon.jpg" class="image"><img alt="Renault tracer fr-lyon.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/11/Renault_tracer_fr-lyon.jpg/120px-Renault_tracer_fr-lyon.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/11/Renault_tracer_fr-lyon.jpg/180px-Renault_tracer_fr-lyon.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/11/Renault_tracer_fr-lyon.jpg/240px-Renault_tracer_fr-lyon.jpg 2x" data-file-width="1280" data-file-height="960" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Rocar_DAC&amp;action=edit&amp;redlink=1" class="new" title="Rocar DAC (not yet started)">Rocar DAC</a></td>
<td><a href="/wiki/File:Bucharest_DAC_bus_1.jpg" class="image"><img alt="Bucharest DAC bus 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Bucharest_DAC_bus_1.jpg/120px-Bucharest_DAC_bus_1.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Bucharest_DAC_bus_1.jpg/180px-Bucharest_DAC_bus_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Bucharest_DAC_bus_1.jpg/240px-Bucharest_DAC_bus_1.jpg 2x" data-file-width="2016" data-file-height="1512" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Rocar_De_Simon_U412&amp;action=edit&amp;redlink=1" class="new" title="Rocar De Simon U412 (not yet started)">Rocar De Simon U412</a></td>
<td><a href="/wiki/File:Bucharest_RocarDeSimon_bus_1138.jpg" class="image"><img alt="Bucharest RocarDeSimon bus 1138.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Bucharest_RocarDeSimon_bus_1138.jpg/120px-Bucharest_RocarDeSimon_bus_1138.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Bucharest_RocarDeSimon_bus_1138.jpg/180px-Bucharest_RocarDeSimon_bus_1138.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Bucharest_RocarDeSimon_bus_1138.jpg/240px-Bucharest_RocarDeSimon_bus_1138.jpg 2x" data-file-width="2016" data-file-height="1512" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Rocar_De_Simon_U412-DAF&amp;action=edit&amp;redlink=1" class="new" title="Rocar De Simon U412-DAF (not yet started)">Rocar De Simon U412-DAF</a></td>
<td><a href="/wiki/File:Rocar-DAF-900.jpg" class="image"><img alt="Rocar-DAF-900.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Rocar-DAF-900.jpg/120px-Rocar-DAF-900.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Rocar-DAF-900.jpg/180px-Rocar-DAF-900.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Rocar-DAF-900.jpg/240px-Rocar-DAF-900.jpg 2x" data-file-width="2016" data-file-height="1512" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Rocar_De_Simon_U412E&amp;action=edit&amp;redlink=1" class="new" title="Rocar De Simon U412E (not yet started)">Rocar De Simon U412E</a></td>
<td><a href="/wiki/File:Rocar_trol_ct1.jpg" class="image"><img alt="Rocar trol ct1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Rocar_trol_ct1.jpg/120px-Rocar_trol_ct1.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Rocar_trol_ct1.jpg/180px-Rocar_trol_ct1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Rocar_trol_ct1.jpg/240px-Rocar_trol_ct1.jpg 2x" data-file-width="2016" data-file-height="1512" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Scania_F94&amp;action=edit&amp;redlink=1" class="new" title="Scania F94 (not yet started)">Scania F94</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Scania_K114&amp;action=edit&amp;redlink=1" class="new" title="Scania K114 (not yet started)">Scania K114</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Scania_K124&amp;action=edit&amp;redlink=1" class="new" title="Scania K124 (not yet started)">Scania K124</a></td>
<td><a href="/wiki/File:Firefly_Express_(5537_AO)_Coach_Concepts_bodied_Scania_K124EB.jpg" class="image"><img alt="Firefly Express (5537 AO) Coach Concepts bodied Scania K124EB.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/08/Firefly_Express_%285537_AO%29_Coach_Concepts_bodied_Scania_K124EB.jpg/120px-Firefly_Express_%285537_AO%29_Coach_Concepts_bodied_Scania_K124EB.jpg" width="120" height="82" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/08/Firefly_Express_%285537_AO%29_Coach_Concepts_bodied_Scania_K124EB.jpg/180px-Firefly_Express_%285537_AO%29_Coach_Concepts_bodied_Scania_K124EB.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/08/Firefly_Express_%285537_AO%29_Coach_Concepts_bodied_Scania_K124EB.jpg/240px-Firefly_Express_%285537_AO%29_Coach_Concepts_bodied_Scania_K124EB.jpg 2x" data-file-width="2500" data-file-height="1706" /></a></td>
<td>SD/DD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Scania_K94&amp;action=edit&amp;redlink=1" class="new" title="Scania K94 (not yet started)">Scania K94</a></td>
<td></td>
<td>SD/DD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Scania_K-series&amp;action=edit&amp;redlink=1" class="new" title="Scania K-series (not yet started)">Scania K-series</a></td>
<td><a href="/wiki/File:Australia_Wide_Coaches_-_Coach_Design_bodied_Scania_K480_EB6X2NI_Opticruise_-_SB94CN.jpg" class="image"><img alt="Australia Wide Coaches - Coach Design bodied Scania K480 EB6X2NI Opticruise - SB94CN.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Australia_Wide_Coaches_-_Coach_Design_bodied_Scania_K480_EB6X2NI_Opticruise_-_SB94CN.jpg/120px-Australia_Wide_Coaches_-_Coach_Design_bodied_Scania_K480_EB6X2NI_Opticruise_-_SB94CN.jpg" width="120" height="72" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Australia_Wide_Coaches_-_Coach_Design_bodied_Scania_K480_EB6X2NI_Opticruise_-_SB94CN.jpg/180px-Australia_Wide_Coaches_-_Coach_Design_bodied_Scania_K480_EB6X2NI_Opticruise_-_SB94CN.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Australia_Wide_Coaches_-_Coach_Design_bodied_Scania_K480_EB6X2NI_Opticruise_-_SB94CN.jpg/240px-Australia_Wide_Coaches_-_Coach_Design_bodied_Scania_K480_EB6X2NI_Opticruise_-_SB94CN.jpg 2x" data-file-width="2000" data-file-height="1203" /></a></td>
<td>SD/DD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Scania_L94&amp;action=edit&amp;redlink=1" class="new" title="Scania L94 (not yet started)">Scania L94IB/L94UA/L94UB</a></td>
<td></td>
<td>SD</td>
<td>Scania AB</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Scania_Metropolitan&amp;action=edit&amp;redlink=1" class="new" title="Scania Metropolitan (not yet started)">Scania Metropolitan</a></td>
<td></td>
<td>DD</td>
<td>Saab-Scania and Metro-Cammell Weymann</td>
<td></td>
<td>Scania BR111DH underframe with MCW bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Scania_N112&amp;action=edit&amp;redlink=1" class="new" title="Scania N112 (not yet started)">Scania N112</a></td>
<td></td>
<td>SD/DD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Scania_N113&amp;action=edit&amp;redlink=1" class="new" title="Scania N113 (not yet started)">Scania N113</a></td>
<td><a href="/wiki/File:Stagecoach_Busways_28903.jpg" class="image"><img alt="Stagecoach Busways 28903.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Stagecoach_Busways_28903.jpg/120px-Stagecoach_Busways_28903.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Stagecoach_Busways_28903.jpg/180px-Stagecoach_Busways_28903.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/65/Stagecoach_Busways_28903.jpg/240px-Stagecoach_Busways_28903.jpg 2x" data-file-width="800" data-file-height="600" /></a></td>
<td>SD/DD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Scania_N94&amp;action=edit&amp;redlink=1" class="new" title="Scania N94 (not yet started)">Scania N94</a></td>
<td><a href="/wiki/File:Scania_N94_East_Lancs_OmniTown.jpg" class="image"><img alt="Scania N94 East Lancs OmniTown.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Scania_N94_East_Lancs_OmniTown.jpg/120px-Scania_N94_East_Lancs_OmniTown.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Scania_N94_East_Lancs_OmniTown.jpg/180px-Scania_N94_East_Lancs_OmniTown.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Scania_N94_East_Lancs_OmniTown.jpg/240px-Scania_N94_East_Lancs_OmniTown.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD/DD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Scania_N-series&amp;action=edit&amp;redlink=1" class="new" title="Scania N-series (not yet started)">Scania N-series</a></td>
<td><a href="/wiki/File:Metroline_SEL762_LK07_BCZ.jpg" class="image"><img alt="Metroline SEL762 LK07 BCZ.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/28/Metroline_SEL762_LK07_BCZ.jpg/120px-Metroline_SEL762_LK07_BCZ.jpg" width="120" height="94" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/28/Metroline_SEL762_LK07_BCZ.jpg/180px-Metroline_SEL762_LK07_BCZ.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/28/Metroline_SEL762_LK07_BCZ.jpg/240px-Metroline_SEL762_LK07_BCZ.jpg 2x" data-file-width="2012" data-file-height="1580" /></a></td>
<td>SD/DD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Scania_OmniCity&amp;action=edit&amp;redlink=1" class="new" title="Scania OmniCity (not yet started)">Scania OmniCity</a></td>
<td><a href="/wiki/File:Metrobus_552.JPG" class="image"><img alt="Metrobus 552.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Metrobus_552.JPG/120px-Metrobus_552.JPG" width="120" height="67" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Metrobus_552.JPG/180px-Metrobus_552.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Metrobus_552.JPG/240px-Metrobus_552.JPG 2x" data-file-width="2219" data-file-height="1245" /></a></td>
<td>SD/DD</td>
<td>Scania AB</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Scania_OmniLink" title="Scania OmniLink">Scania OmniLink</a></td>
<td><a href="/wiki/File:Arriva_7870_Amsterdam_13-12-05.JPG" class="image"><img alt="Arriva 7870 Amsterdam 13-12-05.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/25/Arriva_7870_Amsterdam_13-12-05.JPG/120px-Arriva_7870_Amsterdam_13-12-05.JPG" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/25/Arriva_7870_Amsterdam_13-12-05.JPG/180px-Arriva_7870_Amsterdam_13-12-05.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/25/Arriva_7870_Amsterdam_13-12-05.JPG/240px-Arriva_7870_Amsterdam_13-12-05.JPG 2x" data-file-width="1024" data-file-height="664" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Scania_OmniTown&amp;action=edit&amp;redlink=1" class="new" title="Scania OmniTown (not yet started)">Scania OmniTown</a></td>
<td><a href="/wiki/File:Scania_N94_East_Lancs_OmniTown.jpg" class="image"><img alt="Scania N94 East Lancs OmniTown.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Scania_N94_East_Lancs_OmniTown.jpg/120px-Scania_N94_East_Lancs_OmniTown.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Scania_N94_East_Lancs_OmniTown.jpg/180px-Scania_N94_East_Lancs_OmniTown.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Scania_N94_East_Lancs_OmniTown.jpg/240px-Scania_N94_East_Lancs_OmniTown.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td>Scania N94UB with East Lancashire Coachbuilders bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Seddon_Pennine_7&amp;action=edit&amp;redlink=1" class="new" title="Seddon Pennine 7 (not yet started)">Seddon Pennine 7</a></td>
<td><a href="/wiki/File:Seddon_Pennine_VII_1.jpg" class="image"><img alt="Seddon Pennine VII 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Seddon_Pennine_VII_1.jpg/120px-Seddon_Pennine_VII_1.jpg" width="120" height="91" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Seddon_Pennine_VII_1.jpg/180px-Seddon_Pennine_VII_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Seddon_Pennine_VII_1.jpg/240px-Seddon_Pennine_VII_1.jpg 2x" data-file-width="1248" data-file-height="947" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Seddon_Pennine_RU&amp;action=edit&amp;redlink=1" class="new" title="Seddon Pennine RU (not yet started)">Seddon Pennine RU</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=SsangYong_Transtar&amp;action=edit&amp;redlink=1" class="new" title="SsangYong Transtar (not yet started)">SsangYong Transtar</a></td>
<td><a href="/wiki/File:SsangYong_%D0%A2%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%D1%8F.JPG" class="image"><img alt="SsangYong Таловая.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/SsangYong_%D0%A2%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%D1%8F.JPG/120px-SsangYong_%D0%A2%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%D1%8F.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/SsangYong_%D0%A2%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%D1%8F.JPG/180px-SsangYong_%D0%A2%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%D1%8F.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/SsangYong_%D0%A2%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%D1%8F.JPG/240px-SsangYong_%D0%A2%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%D1%8F.JPG 2x" data-file-width="2560" data-file-height="1920" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Tata_1510/1512&amp;action=edit&amp;redlink=1" class="new" title="Tata 1510/1512 (not yet started)">Tata 1510/1512</a></td>
<td><a href="/wiki/File:Tata_1015.jpg" class="image"><img alt="Tata 1015.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Tata_1015.jpg/120px-Tata_1015.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Tata_1015.jpg/180px-Tata_1015.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Tata_1015.jpg/240px-Tata_1015.jpg 2x" data-file-width="2048" data-file-height="1536" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Tata_Globus&amp;action=edit&amp;redlink=1" class="new" title="Tata Globus (not yet started)">Tata Globus</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Tata_Hispano_Globus&amp;action=edit&amp;redlink=1" class="new" title="Tata Hispano Globus (not yet started)">Tata Hispano Globus</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Tata_Marcopolo_Bus&amp;action=edit&amp;redlink=1" class="new" title="Tata Marcopolo Bus (not yet started)">Tata Marcopolo Bus</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Tata_Starbus&amp;action=edit&amp;redlink=1" class="new" title="Tata Starbus (not yet started)">Tata Starbus</a></td>
<td><a href="/wiki/File:Best_cbd_wad.jpg" class="image"><img alt="Best cbd wad.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Best_cbd_wad.jpg/120px-Best_cbd_wad.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Best_cbd_wad.jpg/180px-Best_cbd_wad.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Best_cbd_wad.jpg/240px-Best_cbd_wad.jpg 2x" data-file-width="964" data-file-height="723" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Tata_Venture&amp;action=edit&amp;redlink=1" class="new" title="Tata Venture (not yet started)">Tata Venture</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=TEMSA_Safari&amp;action=edit&amp;redlink=1" class="new" title="TEMSA Safari (not yet started)">TEMSA Safari</a></td>
<td><a href="/wiki/File:Postbus_Temsa.jpg" class="image"><img alt="Postbus Temsa.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/22/Postbus_Temsa.jpg/120px-Postbus_Temsa.jpg" width="120" height="69" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/22/Postbus_Temsa.jpg/180px-Postbus_Temsa.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/22/Postbus_Temsa.jpg/240px-Postbus_Temsa.jpg 2x" data-file-width="1024" data-file-height="588" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Terra_Bus&amp;action=edit&amp;redlink=1" class="new" title="Terra Bus (not yet started)">Terra Bus</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td>Off-road vehicle built by Foremost</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Toyota_HiAce&amp;action=edit&amp;redlink=1" class="new" title="Toyota HiAce (not yet started)">Toyota HiAce</a></td>
<td><a href="/wiki/File:Toyota_Hiace_H200_505.JPG" class="image"><img alt="Toyota Hiace H200 505.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Toyota_Hiace_H200_505.JPG/120px-Toyota_Hiace_H200_505.JPG" width="120" height="64" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Toyota_Hiace_H200_505.JPG/180px-Toyota_Hiace_H200_505.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Toyota_Hiace_H200_505.JPG/240px-Toyota_Hiace_H200_505.JPG 2x" data-file-width="1280" data-file-height="680" /></a></td>
<td>MB</td>
<td>Toyota</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Toyota_Coaster&amp;action=edit&amp;redlink=1" class="new" title="Toyota Coaster (not yet started)">Toyota Coaster</a></td>
<td></td>
<td>MB</td>
<td>Toyota</td>
<td>1969</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=TransBus_Enviro200&amp;action=edit&amp;redlink=1" class="new" title="TransBus Enviro200 (not yet started)">TransBus Enviro200</a></td>
<td><a href="/wiki/File:Enviro_200_wiki.jpg" class="image"><img alt="Enviro 200 wiki.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Enviro_200_wiki.jpg/120px-Enviro_200_wiki.jpg" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Enviro_200_wiki.jpg/180px-Enviro_200_wiki.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Enviro_200_wiki.jpg/240px-Enviro_200_wiki.jpg 2x" data-file-width="594" data-file-height="428" /></a></td>
<td>SD</td>
<td>TransBus International</td>
<td>2003</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=VDL_SB120&amp;action=edit&amp;redlink=1" class="new" title="VDL SB120 (not yet started)">VDL SB120</a></td>
<td><a href="/wiki/File:Arriva_Guildford_%26_West_Surrey_3944_GK52_YVL.JPG" class="image"><img alt="Arriva Guildford &amp; West Surrey 3944 GK52 YVL.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Arriva_Guildford_%26_West_Surrey_3944_GK52_YVL.JPG/120px-Arriva_Guildford_%26_West_Surrey_3944_GK52_YVL.JPG" width="120" height="72" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Arriva_Guildford_%26_West_Surrey_3944_GK52_YVL.JPG/180px-Arriva_Guildford_%26_West_Surrey_3944_GK52_YVL.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Arriva_Guildford_%26_West_Surrey_3944_GK52_YVL.JPG/240px-Arriva_Guildford_%26_West_Surrey_3944_GK52_YVL.JPG 2x" data-file-width="2507" data-file-height="1506" /></a></td>
<td>SD</td>
<td>DAF Bus/VDL Bus</td>
<td></td>
<td>Originally launched as the DAF SB120</td>
</tr>
<tr>
<td><a href="/w/index.php?title=VDL_SB200&amp;action=edit&amp;redlink=1" class="new" title="VDL SB200 (not yet started)">VDL SB200</a></td>
<td><a href="/wiki/File:Claribels_YD02_RCX.jpg" class="image"><img alt="Claribels YD02 RCX.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Claribels_YD02_RCX.jpg/120px-Claribels_YD02_RCX.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Claribels_YD02_RCX.jpg/180px-Claribels_YD02_RCX.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Claribels_YD02_RCX.jpg/240px-Claribels_YD02_RCX.jpg 2x" data-file-width="800" data-file-height="600" /></a></td>
<td>SD</td>
<td>DAF Bus/VDL Bus</td>
<td></td>
<td>Originally launched as the DAF SB200</td>
</tr>
<tr>
<td><a href="/w/index.php?title=VDL_SB250&amp;action=edit&amp;redlink=1" class="new" title="VDL SB250 (not yet started)">VDL SB250</a></td>
<td><a href="/wiki/File:GVB_Bus.jpg" class="image"><img alt="GVB Bus.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e0/GVB_Bus.jpg/120px-GVB_Bus.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e0/GVB_Bus.jpg/180px-GVB_Bus.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e0/GVB_Bus.jpg/240px-GVB_Bus.jpg 2x" data-file-width="400" data-file-height="300" /></a></td>
<td>SD</td>
<td>DAF Bus/VDL Bus</td>
<td></td>
<td>Originally launched as the DAF SB250</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volkswagen_Volksbus&amp;action=edit&amp;redlink=1" class="new" title="Volkswagen Volksbus (not yet started)">Volkswagen Volksbus</a></td>
<td><a href="/wiki/File:Cidade_verde_14170.jpg" class="image"><img alt="Cidade verde 14170.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/58/Cidade_verde_14170.jpg/120px-Cidade_verde_14170.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/58/Cidade_verde_14170.jpg/180px-Cidade_verde_14170.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/58/Cidade_verde_14170.jpg/240px-Cidade_verde_14170.jpg 2x" data-file-width="800" data-file-height="600" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_Ailsa_B55&amp;action=edit&amp;redlink=1" class="new" title="Volvo Ailsa B55 (not yet started)">Volvo Ailsa B55</a></td>
<td></td>
<td>DD</td>
<td>Ailsa Bus</td>
<td>1973</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B10B&amp;action=edit&amp;redlink=1" class="new" title="Volvo B10B (not yet started)">Volvo B10B</a></td>
<td><a href="/wiki/File:Wright_Endurance_2.jpg" class="image"><img alt="Wright Endurance 2.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Wright_Endurance_2.jpg/120px-Wright_Endurance_2.jpg" width="120" height="85" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Wright_Endurance_2.jpg/180px-Wright_Endurance_2.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Wright_Endurance_2.jpg/240px-Wright_Endurance_2.jpg 2x" data-file-width="1393" data-file-height="987" /></a></td>
<td>SD</td>
<td>Volvo Buses</td>
<td>1990</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Volvo_B10BLE" title="Volvo B10BLE">Volvo B10BLE</a></td>
<td></td>
<td>SD</td>
<td>Volvo Buses</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B10L&amp;action=edit&amp;redlink=1" class="new" title="Volvo B10L (not yet started)">Volvo B10L</a></td>
<td><a href="/wiki/File:StagecoachMerseysideVolvoB10L_2.jpg" class="image"><img alt="StagecoachMerseysideVolvoB10L 2.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b7/StagecoachMerseysideVolvoB10L_2.jpg/120px-StagecoachMerseysideVolvoB10L_2.jpg" width="120" height="81" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b7/StagecoachMerseysideVolvoB10L_2.jpg/180px-StagecoachMerseysideVolvoB10L_2.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b7/StagecoachMerseysideVolvoB10L_2.jpg/240px-StagecoachMerseysideVolvoB10L_2.jpg 2x" data-file-width="1297" data-file-height="872" /></a></td>
<td>SD</td>
<td>Volvo</td>
<td>1993 (circa)</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B10M&amp;action=edit&amp;redlink=1" class="new" title="Volvo B10M (not yet started)">Volvo B10M</a></td>
<td><a href="/wiki/File:Stagecoach_Western_Volvo_B10M.JPG" class="image"><img alt="Stagecoach Western Volvo B10M.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Stagecoach_Western_Volvo_B10M.JPG/120px-Stagecoach_Western_Volvo_B10M.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Stagecoach_Western_Volvo_B10M.JPG/180px-Stagecoach_Western_Volvo_B10M.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/53/Stagecoach_Western_Volvo_B10M.JPG/240px-Stagecoach_Western_Volvo_B10M.JPG 2x" data-file-width="2288" data-file-height="1712" /></a></td>
<td>SD/DD</td>
<td>Volvo</td>
<td>1978 to 2003</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B12B&amp;action=edit&amp;redlink=1" class="new" title="Volvo B12B (not yet started)">Volvo B12B</a></td>
<td><a href="/wiki/File:Grenda%27s_-_Volgren_C222TX_bodied_Volvo_B12B_-_1.jpg" class="image"><img alt="Grenda's - Volgren C222TX bodied Volvo B12B - 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/51/Grenda%27s_-_Volgren_C222TX_bodied_Volvo_B12B_-_1.jpg/120px-Grenda%27s_-_Volgren_C222TX_bodied_Volvo_B12B_-_1.jpg" width="120" height="92" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/51/Grenda%27s_-_Volgren_C222TX_bodied_Volvo_B12B_-_1.jpg/180px-Grenda%27s_-_Volgren_C222TX_bodied_Volvo_B12B_-_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/51/Grenda%27s_-_Volgren_C222TX_bodied_Volvo_B12B_-_1.jpg/240px-Grenda%27s_-_Volgren_C222TX_bodied_Volvo_B12B_-_1.jpg 2x" data-file-width="1600" data-file-height="1221" /></a></td>
<td>SD</td>
<td>Volvo</td>
<td>1997</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B12BLE&amp;action=edit&amp;redlink=1" class="new" title="Volvo B12BLE (not yet started)">Volvo B12BLE</a></td>
<td><a href="/wiki/File:Sunbus_Volvo_B12BLE_with_Bustech_VST_body.jpg" class="image"><img alt="Sunbus Volvo B12BLE with Bustech VST body.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Sunbus_Volvo_B12BLE_with_Bustech_VST_body.jpg/120px-Sunbus_Volvo_B12BLE_with_Bustech_VST_body.jpg" width="120" height="96" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Sunbus_Volvo_B12BLE_with_Bustech_VST_body.jpg/180px-Sunbus_Volvo_B12BLE_with_Bustech_VST_body.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Sunbus_Volvo_B12BLE_with_Bustech_VST_body.jpg/240px-Sunbus_Volvo_B12BLE_with_Bustech_VST_body.jpg 2x" data-file-width="1280" data-file-height="1024" /></a></td>
<td>SD</td>
<td>Volvo</td>
<td>2001</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B12M&amp;action=edit&amp;redlink=1" class="new" title="Volvo B12M (not yet started)">Volvo B12M</a></td>
<td><a href="/wiki/File:Cymru_Coaches_YC02_CHD.JPG" class="image"><img alt="Cymru Coaches YC02 CHD.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Cymru_Coaches_YC02_CHD.JPG/120px-Cymru_Coaches_YC02_CHD.JPG" width="120" height="95" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Cymru_Coaches_YC02_CHD.JPG/180px-Cymru_Coaches_YC02_CHD.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Cymru_Coaches_YC02_CHD.JPG/240px-Cymru_Coaches_YC02_CHD.JPG 2x" data-file-width="2094" data-file-height="1652" /></a></td>
<td>SD</td>
<td>Volvo</td>
<td>1999</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B57&amp;action=edit&amp;redlink=1" class="new" title="Volvo B57 (not yet started)">Volvo B57</a></td>
<td><a href="/wiki/File:Unique_Volvo_B57_Alexander_Y_Type_D_P_Owens.jpg" class="image"><img alt="Unique Volvo B57 Alexander Y Type D P Owens.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/64/Unique_Volvo_B57_Alexander_Y_Type_D_P_Owens.jpg/120px-Unique_Volvo_B57_Alexander_Y_Type_D_P_Owens.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/64/Unique_Volvo_B57_Alexander_Y_Type_D_P_Owens.jpg/180px-Unique_Volvo_B57_Alexander_Y_Type_D_P_Owens.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/64/Unique_Volvo_B57_Alexander_Y_Type_D_P_Owens.jpg/240px-Unique_Volvo_B57_Alexander_Y_Type_D_P_Owens.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD</td>
<td>Volvo</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B58&amp;action=edit&amp;redlink=1" class="new" title="Volvo B58 (not yet started)">Volvo B58</a></td>
<td><a href="/wiki/File:Volvo_B58.JPG" class="image"><img alt="Volvo B58.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Volvo_B58.JPG/120px-Volvo_B58.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Volvo_B58.JPG/180px-Volvo_B58.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Volvo_B58.JPG/240px-Volvo_B58.JPG 2x" data-file-width="3072" data-file-height="2304" /></a></td>
<td>SD</td>
<td>Volvo</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B59&amp;action=edit&amp;redlink=1" class="new" title="Volvo B59 (not yet started)">Volvo B59</a></td>
<td></td>
<td>SD</td>
<td>Volvo</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B5L&amp;action=edit&amp;redlink=1" class="new" title="Volvo B5L (not yet started)">Volvo B5L</a></td>
<td><a href="/wiki/File:Volvo_B5L_Scaled_Sharpened_300px.jpg" class="image"><img alt="Volvo B5L Scaled Sharpened 300px.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Volvo_B5L_Scaled_Sharpened_300px.jpg/120px-Volvo_B5L_Scaled_Sharpened_300px.jpg" width="120" height="96" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Volvo_B5L_Scaled_Sharpened_300px.jpg/180px-Volvo_B5L_Scaled_Sharpened_300px.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Volvo_B5L_Scaled_Sharpened_300px.jpg/240px-Volvo_B5L_Scaled_Sharpened_300px.jpg 2x" data-file-width="300" data-file-height="239" /></a></td>
<td>SD/DD</td>
<td>Volvo</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B6_(bus)&amp;action=edit&amp;redlink=1" class="new" title="Volvo B6 (bus) (not yet started)">Volvo B6</a></td>
<td></td>
<td>SD</td>
<td>Volvo</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B7L&amp;action=edit&amp;redlink=1" class="new" title="Volvo B7L (not yet started)">Volvo B7L</a></td>
<td><a href="/wiki/File:Arriva_NWW_Volvo_B7L_Wright_Eclipse_1.jpg" class="image"><img alt="Arriva NWW Volvo B7L Wright Eclipse 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Arriva_NWW_Volvo_B7L_Wright_Eclipse_1.jpg/120px-Arriva_NWW_Volvo_B7L_Wright_Eclipse_1.jpg" width="120" height="89" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Arriva_NWW_Volvo_B7L_Wright_Eclipse_1.jpg/180px-Arriva_NWW_Volvo_B7L_Wright_Eclipse_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/53/Arriva_NWW_Volvo_B7L_Wright_Eclipse_1.jpg/240px-Arriva_NWW_Volvo_B7L_Wright_Eclipse_1.jpg 2x" data-file-width="1420" data-file-height="1058" /></a></td>
<td>SD/DD</td>
<td>Volvo</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B7R&amp;action=edit&amp;redlink=1" class="new" title="Volvo B7R (not yet started)">Volvo B7R</a></td>
<td><a href="/wiki/File:Volvo_B7R_First_Cymru.jpg" class="image"><img alt="Volvo B7R First Cymru.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Volvo_B7R_First_Cymru.jpg/120px-Volvo_B7R_First_Cymru.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Volvo_B7R_First_Cymru.jpg/180px-Volvo_B7R_First_Cymru.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Volvo_B7R_First_Cymru.jpg/240px-Volvo_B7R_First_Cymru.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>SD/C</td>
<td>Volvo</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B7RLE&amp;action=edit&amp;redlink=1" class="new" title="Volvo B7RLE (not yet started)">Volvo B7RLE</a></td>
<td></td>
<td>SD</td>
<td>Volvo</td>
<td>2001</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_Olympian&amp;action=edit&amp;redlink=1" class="new" title="Volvo Olympian (not yet started)">Volvo Olympian</a></td>
<td><a href="/wiki/File:Arriva_The_Shires_5141_N41_JPP.JPG" class="image"><img alt="Arriva The Shires 5141 N41 JPP.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Arriva_The_Shires_5141_N41_JPP.JPG/120px-Arriva_The_Shires_5141_N41_JPP.JPG" width="120" height="88" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Arriva_The_Shires_5141_N41_JPP.JPG/180px-Arriva_The_Shires_5141_N41_JPP.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Arriva_The_Shires_5141_N41_JPP.JPG/240px-Arriva_The_Shires_5141_N41_JPP.JPG 2x" data-file-width="2493" data-file-height="1833" /></a></td>
<td>DD</td>
<td>Volvo</td>
<td>1993</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Axcess-Floline&amp;action=edit&amp;redlink=1" class="new" title="Wright Axcess-Floline (not yet started)">Wright Axcess-Floline</a></td>
<td><a href="/wiki/File:Wright_Axcess-Floline_1.jpg" class="image"><img alt="Wright Axcess-Floline 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Wright_Axcess-Floline_1.jpg/120px-Wright_Axcess-Floline_1.jpg" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Wright_Axcess-Floline_1.jpg/180px-Wright_Axcess-Floline_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Wright_Axcess-Floline_1.jpg/240px-Wright_Axcess-Floline_1.jpg 2x" data-file-width="1280" data-file-height="918" /></a></td>
<td>SD</td>
<td><a href="/w/index.php?title=Wrightbus&amp;action=edit&amp;redlink=1" class="new" title="Wrightbus (not yet started)">Wrightbus</a></td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Axcess-Ultralow&amp;action=edit&amp;redlink=1" class="new" title="Wright Axcess-Ultralow (not yet started)">Wright Axcess-Ultralow</a></td>
<td><a href="/wiki/File:Scania_L113_Wright_Axcess-Ultralow_1.jpg" class="image"><img alt="Scania L113 Wright Axcess-Ultralow 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Scania_L113_Wright_Axcess-Ultralow_1.jpg/120px-Scania_L113_Wright_Axcess-Ultralow_1.jpg" width="120" height="88" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Scania_L113_Wright_Axcess-Ultralow_1.jpg/180px-Scania_L113_Wright_Axcess-Ultralow_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Scania_L113_Wright_Axcess-Ultralow_1.jpg/240px-Scania_L113_Wright_Axcess-Ultralow_1.jpg 2x" data-file-width="1478" data-file-height="1085" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td>1995 to 1998</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Cadet&amp;action=edit&amp;redlink=1" class="new" title="Wright Cadet (not yet started)">Wright Cadet / Volvo Merit</a></td>
<td><a href="/wiki/File:Bluestar_565.JPG" class="image"><img alt="Bluestar 565.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/04/Bluestar_565.JPG/120px-Bluestar_565.JPG" width="120" height="95" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/04/Bluestar_565.JPG/180px-Bluestar_565.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/04/Bluestar_565.JPG/240px-Bluestar_565.JPG 2x" data-file-width="1925" data-file-height="1518" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td></td>
<td>Bodywork for DAF/VDL SB120</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Commander&amp;action=edit&amp;redlink=1" class="new" title="Wright Commander (not yet started)">Wright Commander</a></td>
<td><a href="/wiki/File:Wright_Commander_1.jpg" class="image"><img alt="Wright Commander 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Wright_Commander_1.jpg/120px-Wright_Commander_1.jpg" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Wright_Commander_1.jpg/180px-Wright_Commander_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Wright_Commander_1.jpg/240px-Wright_Commander_1.jpg 2x" data-file-width="1433" data-file-height="991" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td>2002</td>
<td>Bodywork for DAF/VDL SB200</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Crusader&amp;action=edit&amp;redlink=1" class="new" title="Wright Crusader (not yet started)">Wright Crusader</a></td>
<td><a href="/wiki/File:ACTION_-_BUS_138_-_Wright_%27Crusader%27_bodied_Dennis_Dart_SLF.jpg" class="image"><img alt="ACTION - BUS 138 - Wright 'Crusader' bodied Dennis Dart SLF.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3c/ACTION_-_BUS_138_-_Wright_%27Crusader%27_bodied_Dennis_Dart_SLF.jpg/120px-ACTION_-_BUS_138_-_Wright_%27Crusader%27_bodied_Dennis_Dart_SLF.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3c/ACTION_-_BUS_138_-_Wright_%27Crusader%27_bodied_Dennis_Dart_SLF.jpg/180px-ACTION_-_BUS_138_-_Wright_%27Crusader%27_bodied_Dennis_Dart_SLF.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3c/ACTION_-_BUS_138_-_Wright_%27Crusader%27_bodied_Dennis_Dart_SLF.jpg/240px-ACTION_-_BUS_138_-_Wright_%27Crusader%27_bodied_Dennis_Dart_SLF.jpg 2x" data-file-width="2000" data-file-height="1277" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Eclipse_Fusion&amp;action=edit&amp;redlink=1" class="new" title="Wright Eclipse Fusion (not yet started)">Wright Eclipse Fusion</a></td>
<td><a href="/wiki/File:Bendy_bus_at_the_university_of_bath_arp.jpg" class="image"><img alt="Bendy bus at the university of bath arp.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Bendy_bus_at_the_university_of_bath_arp.jpg/120px-Bendy_bus_at_the_university_of_bath_arp.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Bendy_bus_at_the_university_of_bath_arp.jpg/180px-Bendy_bus_at_the_university_of_bath_arp.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Bendy_bus_at_the_university_of_bath_arp.jpg/240px-Bendy_bus_at_the_university_of_bath_arp.jpg 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td></td>
<td>Articulated bodywork for Volvo B7LA</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Eclipse_SchoolRun&amp;action=edit&amp;redlink=1" class="new" title="Wright Eclipse SchoolRun (not yet started)">Wright Eclipse SchoolRun</a></td>
<td><a href="/wiki/File:Wright_Eclipse_SchoolRun_1.jpg" class="image"><img alt="Wright Eclipse SchoolRun 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/36/Wright_Eclipse_SchoolRun_1.jpg/120px-Wright_Eclipse_SchoolRun_1.jpg" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/36/Wright_Eclipse_SchoolRun_1.jpg/180px-Wright_Eclipse_SchoolRun_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/36/Wright_Eclipse_SchoolRun_1.jpg/240px-Wright_Eclipse_SchoolRun_1.jpg 2x" data-file-width="980" data-file-height="700" /></a></td>
<td>SB</td>
<td>Wrightbus</td>
<td></td>
<td>Bodywork for Volvo B7R</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Eclipse&amp;action=edit&amp;redlink=1" class="new" title="Wright Eclipse (not yet started)">Wright Eclipse</a></td>
<td><a href="/wiki/File:First_Wright_Eclipse_01.jpg" class="image"><img alt="First Wright Eclipse 01.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9e/First_Wright_Eclipse_01.jpg/120px-First_Wright_Eclipse_01.jpg" width="120" height="91" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9e/First_Wright_Eclipse_01.jpg/180px-First_Wright_Eclipse_01.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9e/First_Wright_Eclipse_01.jpg/240px-First_Wright_Eclipse_01.jpg 2x" data-file-width="973" data-file-height="736" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Electrocity&amp;action=edit&amp;redlink=1" class="new" title="Wright Electrocity (not yet started)">Wright Electrocity</a></td>
<td><a href="/wiki/File:Travel_London_8804_in_Greenwich.jpg" class="image"><img alt="Travel London 8804 in Greenwich.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Travel_London_8804_in_Greenwich.jpg/120px-Travel_London_8804_in_Greenwich.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Travel_London_8804_in_Greenwich.jpg/180px-Travel_London_8804_in_Greenwich.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Travel_London_8804_in_Greenwich.jpg/240px-Travel_London_8804_in_Greenwich.jpg 2x" data-file-width="2816" data-file-height="2112" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td></td>
<td>Hybrid-electric</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Endurance&amp;action=edit&amp;redlink=1" class="new" title="Wright Endurance (not yet started)">Wright Endurance</a></td>
<td><a href="/wiki/File:Wright_Endurance_1.jpg" class="image"><img alt="Wright Endurance 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/20/Wright_Endurance_1.jpg/120px-Wright_Endurance_1.jpg" width="120" height="69" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/20/Wright_Endurance_1.jpg/180px-Wright_Endurance_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/20/Wright_Endurance_1.jpg/240px-Wright_Endurance_1.jpg 2x" data-file-width="1099" data-file-height="636" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td>1993 to 1997</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Fusion&amp;action=edit&amp;redlink=1" class="new" title="Wright Fusion (not yet started)">Wright Fusion</a></td>
<td><a href="/wiki/File:FirstManchesterVolvoB10LAWrightFusion10006.jpg" class="image"><img alt="FirstManchesterVolvoB10LAWrightFusion10006.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/55/FirstManchesterVolvoB10LAWrightFusion10006.jpg/120px-FirstManchesterVolvoB10LAWrightFusion10006.jpg" width="120" height="61" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/55/FirstManchesterVolvoB10LAWrightFusion10006.jpg/180px-FirstManchesterVolvoB10LAWrightFusion10006.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/55/FirstManchesterVolvoB10LAWrightFusion10006.jpg/240px-FirstManchesterVolvoB10LAWrightFusion10006.jpg 2x" data-file-width="1367" data-file-height="691" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td>1998 to 1999</td>
<td>Articulated bodywork for Volvo B10LA</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Gemini_2&amp;action=edit&amp;redlink=1" class="new" title="Wright Gemini 2 (not yet started)">Wright Gemini 2</a></td>
<td><a href="/wiki/File:London_Bus_route_328_hybrid_bus_A.jpg" class="image"><img alt="London Bus route 328 hybrid bus A.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3a/London_Bus_route_328_hybrid_bus_A.jpg/120px-London_Bus_route_328_hybrid_bus_A.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3a/London_Bus_route_328_hybrid_bus_A.jpg/180px-London_Bus_route_328_hybrid_bus_A.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3a/London_Bus_route_328_hybrid_bus_A.jpg/240px-London_Bus_route_328_hybrid_bus_A.jpg 2x" data-file-width="3648" data-file-height="2736" /></a></td>
<td>DD</td>
<td>Wrightbus</td>
<td>2008</td>
<td>Hybrid-electric</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Handybus&amp;action=edit&amp;redlink=1" class="new" title="Wright Handybus (not yet started)">Wright Handybus</a></td>
<td><a href="/wiki/File:Wright_Handybus_1.jpg" class="image"><img alt="Wright Handybus 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/64/Wright_Handybus_1.jpg/120px-Wright_Handybus_1.jpg" width="120" height="88" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/64/Wright_Handybus_1.jpg/180px-Wright_Handybus_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/64/Wright_Handybus_1.jpg/240px-Wright_Handybus_1.jpg 2x" data-file-width="1577" data-file-height="1163" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td>1990 to 1995</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Liberator&amp;action=edit&amp;redlink=1" class="new" title="Wright Liberator (not yet started)">Wright Liberator</a></td>
<td><a href="/wiki/File:StagecoachMerseysideVolvoB10L.jpg" class="image"><img alt="StagecoachMerseysideVolvoB10L.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/48/StagecoachMerseysideVolvoB10L.jpg/120px-StagecoachMerseysideVolvoB10L.jpg" width="120" height="91" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/48/StagecoachMerseysideVolvoB10L.jpg/180px-StagecoachMerseysideVolvoB10L.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/48/StagecoachMerseysideVolvoB10L.jpg/240px-StagecoachMerseysideVolvoB10L.jpg 2x" data-file-width="1375" data-file-height="1042" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td>1996 to 1999</td>
<td>Bodywork for Volvo B10L</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Meridian&amp;action=edit&amp;redlink=1" class="new" title="Wright Meridian (not yet started)">Wright Meridian</a></td>
<td><a href="/wiki/File:South_Lancs_Wright_Meridian_333.jpg" class="image"><img alt="South Lancs Wright Meridian 333.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/South_Lancs_Wright_Meridian_333.jpg/120px-South_Lancs_Wright_Meridian_333.jpg" width="120" height="85" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/South_Lancs_Wright_Meridian_333.jpg/180px-South_Lancs_Wright_Meridian_333.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/South_Lancs_Wright_Meridian_333.jpg/240px-South_Lancs_Wright_Meridian_333.jpg 2x" data-file-width="1364" data-file-height="971" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td>2007</td>
<td>Bodywork for MAN A22</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Nimbus&amp;action=edit&amp;redlink=1" class="new" title="Wright Nimbus (not yet started)">Wright Nimbus</a></td>
<td></td>
<td>SD</td>
<td>Wrightbus</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Pathfinder&amp;action=edit&amp;redlink=1" class="new" title="Wright Pathfinder (not yet started)">Wright Pathfinder</a></td>
<td><a href="/wiki/File:Scania_N113CRL_Wright_Pathfinder_2041.jpg" class="image"><img alt="Scania N113CRL Wright Pathfinder 2041.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/39/Scania_N113CRL_Wright_Pathfinder_2041.jpg/120px-Scania_N113CRL_Wright_Pathfinder_2041.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/39/Scania_N113CRL_Wright_Pathfinder_2041.jpg/180px-Scania_N113CRL_Wright_Pathfinder_2041.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/39/Scania_N113CRL_Wright_Pathfinder_2041.jpg/240px-Scania_N113CRL_Wright_Pathfinder_2041.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td>1993</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Pulsar_Gemini&amp;action=edit&amp;redlink=1" class="new" title="Wright Pulsar Gemini (not yet started)">Wright Pulsar Gemini</a></td>
<td></td>
<td>DD</td>
<td>Wrightbus</td>
<td></td>
<td>Bodywork built for DAF/VDL DB250</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Pulsar_Gemini_HEV&amp;action=edit&amp;redlink=1" class="new" title="Wright Pulsar Gemini HEV (not yet started)">Wright Pulsar Gemini HEV</a></td>
<td><a href="/wiki/File:Bath_First_39000_LJ07ECE_hybrid_bus.jpg" class="image"><img alt="Bath First 39000 LJ07ECE hybrid bus.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Bath_First_39000_LJ07ECE_hybrid_bus.jpg/120px-Bath_First_39000_LJ07ECE_hybrid_bus.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Bath_First_39000_LJ07ECE_hybrid_bus.jpg/180px-Bath_First_39000_LJ07ECE_hybrid_bus.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Bath_First_39000_LJ07ECE_hybrid_bus.jpg/240px-Bath_First_39000_LJ07ECE_hybrid_bus.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>DD</td>
<td>Wrightbus</td>
<td></td>
<td>Hybrid-electric</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Pulsar&amp;action=edit&amp;redlink=1" class="new" title="Wright Pulsar (not yet started)">Wright Pulsar</a></td>
<td><a href="/wiki/File:Wright_Pulsar_1.jpg" class="image"><img alt="Wright Pulsar 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Wright_Pulsar_1.jpg/120px-Wright_Pulsar_1.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/Wright_Pulsar_1.jpg/180px-Wright_Pulsar_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/84/Wright_Pulsar_1.jpg/240px-Wright_Pulsar_1.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td>2006</td>
<td>Bodywork for VDL SB200</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Renown&amp;action=edit&amp;redlink=1" class="new" title="Wright Renown (not yet started)">Wright Renown</a></td>
<td><a href="/wiki/File:Wright_Renown_1.jpg" class="image"><img alt="Wright Renown 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/Wright_Renown_1.jpg/120px-Wright_Renown_1.jpg" width="120" height="88" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/Wright_Renown_1.jpg/180px-Wright_Renown_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/89/Wright_Renown_1.jpg/240px-Wright_Renown_1.jpg 2x" data-file-width="1352" data-file-height="991" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td>1997 to 2002</td>
<td>Bodywork for Volvo B10BLE</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Solar_Fusion&amp;action=edit&amp;redlink=1" class="new" title="Wright Solar Fusion (not yet started)">Wright Solar Fusion</a></td>
<td><a href="/wiki/File:Scania_L94UA_Wright_Solar_Fusion_10017.jpg" class="image"><img alt="Scania L94UA Wright Solar Fusion 10017.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Scania_L94UA_Wright_Solar_Fusion_10017.jpg/120px-Scania_L94UA_Wright_Solar_Fusion_10017.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Scania_L94UA_Wright_Solar_Fusion_10017.jpg/180px-Scania_L94UA_Wright_Solar_Fusion_10017.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Scania_L94UA_Wright_Solar_Fusion_10017.jpg/240px-Scania_L94UA_Wright_Solar_Fusion_10017.jpg 2x" data-file-width="1800" data-file-height="1200" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td></td>
<td>Articulated bodywork for Scania L94UA</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Solar&amp;action=edit&amp;redlink=1" class="new" title="Wright Solar (not yet started)">Wright Solar</a></td>
<td><a href="/wiki/File:Go_north_east_1.JPG" class="image"><img alt="Go north east 1.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Go_north_east_1.JPG/120px-Go_north_east_1.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Go_north_east_1.JPG/180px-Go_north_east_1.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Go_north_east_1.JPG/240px-Go_north_east_1.JPG 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td></td>
<td>Bodywork for Scania L94UB</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_StreetCar&amp;action=edit&amp;redlink=1" class="new" title="Wright StreetCar (not yet started)">Wright StreetCar</a></td>
<td><a href="/wiki/File:Ftr_bus_in_University_Road,_York_University_campus,_19004_(B7_FTR),_7_April_2007.jpg" class="image"><img alt="Ftr bus in University Road, York University campus, 19004 (B7 FTR), 7 April 2007.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Ftr_bus_in_University_Road%2C_York_University_campus%2C_19004_%28B7_FTR%29%2C_7_April_2007.jpg/120px-Ftr_bus_in_University_Road%2C_York_University_campus%2C_19004_%28B7_FTR%29%2C_7_April_2007.jpg" width="120" height="59" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Ftr_bus_in_University_Road%2C_York_University_campus%2C_19004_%28B7_FTR%29%2C_7_April_2007.jpg/180px-Ftr_bus_in_University_Road%2C_York_University_campus%2C_19004_%28B7_FTR%29%2C_7_April_2007.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Ftr_bus_in_University_Road%2C_York_University_campus%2C_19004_%28B7_FTR%29%2C_7_April_2007.jpg/240px-Ftr_bus_in_University_Road%2C_York_University_campus%2C_19004_%28B7_FTR%29%2C_7_April_2007.jpg 2x" data-file-width="2289" data-file-height="1131" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td>2006</td>
<td>Bodywork for Volvo B7LA and Hess chassis, for bus rapid transit</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_StreetLite&amp;action=edit&amp;redlink=1" class="new" title="Wright StreetLite (not yet started)">Wright StreetLite</a></td>
<td><a href="/wiki/File:Supertravel_Wright_StreetLite.jpg" class="image"><img alt="Supertravel Wright StreetLite.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Supertravel_Wright_StreetLite.jpg/120px-Supertravel_Wright_StreetLite.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Supertravel_Wright_StreetLite.jpg/180px-Supertravel_Wright_StreetLite.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Supertravel_Wright_StreetLite.jpg/240px-Supertravel_Wright_StreetLite.jpg 2x" data-file-width="1391" data-file-height="887" /></a></td>
<td>SD</td>
<td>Wrightbus</td>
<td>2010</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=AEC_K-type&amp;action=edit&amp;redlink=1" class="new" title="AEC K-type (not yet started)">AEC K-type</a></td>
<td></td>
<td>DD</td>
<td><a href="/w/index.php?title=Associated_Equipment_Company&amp;action=edit&amp;redlink=1" class="new" title="Associated Equipment Company (not yet started)">Associated Equipment Company</a></td>
<td>1919 to 1926</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=AEC_Regent_III_RT&amp;action=edit&amp;redlink=1" class="new" title="AEC Regent III RT (not yet started)">AEC Regent III RT</a></td>
<td><a href="/wiki/File:RT_bus_outside_Uxbridge_station.jpg" class="image"><img alt="RT bus outside Uxbridge station.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/48/RT_bus_outside_Uxbridge_station.jpg/120px-RT_bus_outside_Uxbridge_station.jpg" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/48/RT_bus_outside_Uxbridge_station.jpg/180px-RT_bus_outside_Uxbridge_station.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/48/RT_bus_outside_Uxbridge_station.jpg/240px-RT_bus_outside_Uxbridge_station.jpg 2x" data-file-width="1715" data-file-height="1115" /></a></td>
<td>DD</td>
<td>Associated Equipment Company</td>
<td>1950 (circa)</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=AEC_T-type&amp;action=edit&amp;redlink=1" class="new" title="AEC T-type (not yet started)">AEC T-type</a></td>
<td></td>
<td>DD</td>
<td>Associated Equipment Company</td>
<td>1920</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Alexander_ALX400&amp;action=edit&amp;redlink=1" class="new" title="Alexander ALX400 (not yet started)">Alexander ALX400</a></td>
<td><a href="/wiki/File:Stagecoach_A1_Service_bus.JPG" class="image"><img alt="Stagecoach A1 Service bus.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Stagecoach_A1_Service_bus.JPG/120px-Stagecoach_A1_Service_bus.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Stagecoach_A1_Service_bus.JPG/180px-Stagecoach_A1_Service_bus.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/52/Stagecoach_A1_Service_bus.JPG/240px-Stagecoach_A1_Service_bus.JPG 2x" data-file-width="2288" data-file-height="1712" /></a></td>
<td>DD</td>
<td>Alexander/TransBus/Alexander Dennis</td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Alexander_ALX500&amp;action=edit&amp;redlink=1" class="new" title="Alexander ALX500 (not yet started)">Alexander ALX500</a></td>
<td><a href="/wiki/File:JF8429.jpg" class="image"><img alt="JF8429.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/JF8429.jpg/120px-JF8429.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/JF8429.jpg/180px-JF8429.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2c/JF8429.jpg/240px-JF8429.jpg 2x" data-file-width="550" data-file-height="365" /></a></td>
<td>DD</td>
<td><a href="/w/index.php?title=Walter_Alexander_Coachbuilders&amp;action=edit&amp;redlink=1" class="new" title="Walter Alexander Coachbuilders (not yet started)">Walter Alexander Coachbuilders</a></td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Alexander_Dennis_Enviro400&amp;action=edit&amp;redlink=1" class="new" title="Alexander Dennis Enviro400 (not yet started)">Alexander Dennis Enviro400</a></td>
<td><a href="/wiki/File:London_Bus_route_139_A.jpg" class="image"><img alt="London Bus route 139 A.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/98/London_Bus_route_139_A.jpg/120px-London_Bus_route_139_A.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/98/London_Bus_route_139_A.jpg/180px-London_Bus_route_139_A.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/98/London_Bus_route_139_A.jpg/240px-London_Bus_route_139_A.jpg 2x" data-file-width="3648" data-file-height="2736" /></a></td>
<td>DD</td>
<td><a href="/w/index.php?title=Alexander_Dennis&amp;action=edit&amp;redlink=1" class="new" title="Alexander Dennis (not yet started)">Alexander Dennis</a></td>
<td>2005</td>
<td>Available as complete bus, chassis or bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Alexander_Dennis_Enviro500&amp;action=edit&amp;redlink=1" class="new" title="Alexander Dennis Enviro500 (not yet started)">Alexander Dennis Enviro500</a></td>
<td><a href="/wiki/File:Kmbate201_001.jpg" class="image"><img alt="Kmbate201 001.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Kmbate201_001.jpg/120px-Kmbate201_001.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Kmbate201_001.jpg/180px-Kmbate201_001.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Kmbate201_001.jpg/240px-Kmbate201_001.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>DD</td>
<td>Alexander Dennis</td>
<td>2002</td>
<td>Available as complete bus or bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Ayats_Bravo&amp;action=edit&amp;redlink=1" class="new" title="Ayats Bravo (not yet started)">Ayats Bravo</a></td>
<td><a href="/wiki/File:Ayats_Bravo.jpg" class="image"><img alt="Ayats Bravo.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/78/Ayats_Bravo.jpg/120px-Ayats_Bravo.jpg" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/78/Ayats_Bravo.jpg/180px-Ayats_Bravo.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/78/Ayats_Bravo.jpg/240px-Ayats_Bravo.jpg 2x" data-file-width="800" data-file-height="573" /></a></td>
<td>DD</td>
<td>Ayats</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Dennis_Dominator&amp;action=edit&amp;redlink=1" class="new" title="Dennis Dominator (not yet started)">Dennis Dominator</a></td>
<td><a href="/wiki/File:Stagecoach_Manchester_15038.jpg" class="image"><img alt="Stagecoach Manchester 15038.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Stagecoach_Manchester_15038.jpg/120px-Stagecoach_Manchester_15038.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Stagecoach_Manchester_15038.jpg/180px-Stagecoach_Manchester_15038.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Stagecoach_Manchester_15038.jpg/240px-Stagecoach_Manchester_15038.jpg 2x" data-file-width="800" data-file-height="600" /></a></td>
<td>DD/SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Dennis_Loline&amp;action=edit&amp;redlink=1" class="new" title="Dennis Loline (not yet started)">Dennis Loline</a></td>
<td><a href="/wiki/File:DennisLoline861HAL.jpg" class="image"><img alt="DennisLoline861HAL.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/DennisLoline861HAL.jpg/120px-DennisLoline861HAL.jpg" width="120" height="88" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/DennisLoline861HAL.jpg/180px-DennisLoline861HAL.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6c/DennisLoline861HAL.jpg/240px-DennisLoline861HAL.jpg 2x" data-file-width="430" data-file-height="317" /></a></td>
<td>DD</td>
<td><a href="/w/index.php?title=Dennis_Specialist_Vehicles&amp;action=edit&amp;redlink=1" class="new" title="Dennis Specialist Vehicles (not yet started)">Dennis Bros</a></td>
<td>1958 to 1967</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Dennis_Trident_2&amp;action=edit&amp;redlink=1" class="new" title="Dennis Trident 2 (not yet started)">Dennis Trident 2</a></td>
<td><a href="/wiki/File:Lothian_Buses_Number_25.jpg" class="image"><img alt="Lothian Buses Number 25.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Lothian_Buses_Number_25.jpg/120px-Lothian_Buses_Number_25.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Lothian_Buses_Number_25.jpg/180px-Lothian_Buses_Number_25.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Lothian_Buses_Number_25.jpg/240px-Lothian_Buses_Number_25.jpg 2x" data-file-width="1328" data-file-height="996" /></a></td>
<td>DD</td>
<td>Dennis/TransBus/Alexander Dennis</td>
<td>1997</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Dennis_Trident_3&amp;action=edit&amp;redlink=1" class="new" title="Dennis Trident 3 (not yet started)">Dennis Trident 3</a></td>
<td></td>
<td>DD</td>
<td>Dennis/TransBus International</td>
<td>1996</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Foden-NC&amp;action=edit&amp;redlink=1" class="new" title="Foden-NC (not yet started)">Foden-NC</a></td>
<td></td>
<td>DD</td>
<td><a href="/w/index.php?title=Edwin_Foden,_Sons_%26_Co.&amp;action=edit&amp;redlink=1" class="new" title="Edwin Foden, Sons &amp; Co. (not yet started)">Edwin Foden, Sons &amp; Co.</a></td>
<td>1975 to 1978</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=GM_Standard_double-decker_bus&amp;action=edit&amp;redlink=1" class="new" title="GM Standard double-decker bus (not yet started)">GM Standard double-decker bus</a></td>
<td><a href="/wiki/File:GMPTE_bus_8535_Leyland_Atlantean_Northern_Counties_GM_standard_ANA_535Y_in_Rochdale_Bus_Station,_Greater_Manchester_30_June_1984.jpg" class="image"><img alt="GMPTE bus 8535 Leyland Atlantean Northern Counties GM standard ANA 535Y in Rochdale Bus Station, Greater Manchester 30 June 1984.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/07/GMPTE_bus_8535_Leyland_Atlantean_Northern_Counties_GM_standard_ANA_535Y_in_Rochdale_Bus_Station%2C_Greater_Manchester_30_June_1984.jpg/120px-GMPTE_bus_8535_Leyland_Atlantean_Northern_Counties_GM_standard_ANA_535Y_in_Rochdale_Bus_Station%2C_Greater_Manchester_30_June_1984.jpg" width="120" height="101" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/07/GMPTE_bus_8535_Leyland_Atlantean_Northern_Counties_GM_standard_ANA_535Y_in_Rochdale_Bus_Station%2C_Greater_Manchester_30_June_1984.jpg/180px-GMPTE_bus_8535_Leyland_Atlantean_Northern_Counties_GM_standard_ANA_535Y_in_Rochdale_Bus_Station%2C_Greater_Manchester_30_June_1984.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/07/GMPTE_bus_8535_Leyland_Atlantean_Northern_Counties_GM_standard_ANA_535Y_in_Rochdale_Bus_Station%2C_Greater_Manchester_30_June_1984.jpg/240px-GMPTE_bus_8535_Leyland_Atlantean_Northern_Counties_GM_standard_ANA_535Y_in_Rochdale_Bus_Station%2C_Greater_Manchester_30_June_1984.jpg 2x" data-file-width="640" data-file-height="538" /></a></td>
<td>DD</td>
<td></td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Atlantean&amp;action=edit&amp;redlink=1" class="new" title="Leyland Atlantean (not yet started)">Leyland Atlantean</a></td>
<td><a href="/wiki/File:GM_Buses_South_bus_4706_(A706_LNC_),_MMT_Atlantean_50_event_(4).jpg" class="image"><img alt="GM Buses South bus 4706 (A706 LNC ), MMT Atlantean 50 event (4).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/09/GM_Buses_South_bus_4706_%28A706_LNC_%29%2C_MMT_Atlantean_50_event_%284%29.jpg/120px-GM_Buses_South_bus_4706_%28A706_LNC_%29%2C_MMT_Atlantean_50_event_%284%29.jpg" width="120" height="160" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/09/GM_Buses_South_bus_4706_%28A706_LNC_%29%2C_MMT_Atlantean_50_event_%284%29.jpg/180px-GM_Buses_South_bus_4706_%28A706_LNC_%29%2C_MMT_Atlantean_50_event_%284%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/09/GM_Buses_South_bus_4706_%28A706_LNC_%29%2C_MMT_Atlantean_50_event_%284%29.jpg/240px-GM_Buses_South_bus_4706_%28A706_LNC_%29%2C_MMT_Atlantean_50_event_%284%29.jpg 2x" data-file-width="2304" data-file-height="3072" /></a></td>
<td>DD</td>
<td>Leyland Motors</td>
<td>1958 to 1986</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Titan_(B15)&amp;action=edit&amp;redlink=1" class="new" title="Leyland Titan (B15) (not yet started)">Leyland Titan (B15)</a></td>
<td><a href="/wiki/File:Leyland_Titan_B15.05.jpg" class="image"><img alt="Leyland Titan B15.05.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Leyland_Titan_B15.05.jpg/120px-Leyland_Titan_B15.05.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Leyland_Titan_B15.05.jpg/180px-Leyland_Titan_B15.05.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Leyland_Titan_B15.05.jpg/240px-Leyland_Titan_B15.05.jpg 2x" data-file-width="1650" data-file-height="1099" /></a></td>
<td>DD</td>
<td>British Leyland/Leyland Bus</td>
<td>1977 to 1984</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Titan_(front-engined_double-decker)&amp;action=edit&amp;redlink=1" class="new" title="Leyland Titan (front-engined double-decker) (not yet started)">Leyland Titan (front-engined)</a></td>
<td><a href="/wiki/File:RTL554.jpg" class="image"><img alt="RTL554.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f9/RTL554.jpg/120px-RTL554.jpg" width="120" height="145" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f9/RTL554.jpg/180px-RTL554.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f9/RTL554.jpg/240px-RTL554.jpg 2x" data-file-width="784" data-file-height="947" /></a></td>
<td>DD</td>
<td></td>
<td>1927 to 1942; 1945 to 1970</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Leyland_Victory_Mk2&amp;action=edit&amp;redlink=1" class="new" title="Leyland Victory Mk2 (not yet started)">Leyland Victory Mk2</a></td>
<td></td>
<td>DD</td>
<td><a href="/w/index.php?title=Leyland_Motors&amp;action=edit&amp;redlink=1" class="new" title="Leyland Motors (not yet started)">Leyland Motors</a></td>
<td>1978 to 1981</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=LGOC_X-type&amp;action=edit&amp;redlink=1" class="new" title="LGOC X-type (not yet started)">LGOC X-type</a></td>
<td></td>
<td>DD</td>
<td><a href="/w/index.php?title=London_General_Omnibus_Company&amp;action=edit&amp;redlink=1" class="new" title="London General Omnibus Company (not yet started)">London General Omnibus Company</a></td>
<td>1909</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=LGOC_B-type&amp;action=edit&amp;redlink=1" class="new" title="LGOC B-type (not yet started)">LGOC B-type</a></td>
<td></td>
<td>DD</td>
<td>London General Omnibus Company/Associated Equipment Company</td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=MAN_24.310&amp;action=edit&amp;redlink=1" class="new" title="MAN 24.310 (not yet started)">MAN 24.310</a></td>
<td><a href="/wiki/File:JR6675.jpg" class="image"><img alt="JR6675.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6d/JR6675.jpg/120px-JR6675.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6d/JR6675.jpg/180px-JR6675.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6d/JR6675.jpg/240px-JR6675.jpg 2x" data-file-width="4000" data-file-height="3000" /></a></td>
<td>DD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mancunian_double-decker_bus&amp;action=edit&amp;redlink=1" class="new" title="Mancunian double-decker bus (not yet started)">Mancunian double-decker bus</a></td>
<td><a href="/wiki/File:Manchester_Corporation_bus_1001_(HVM_901F),_Museum_of_Transport_in_Manchester,_4_October_2008.jpg" class="image"><img alt="Manchester Corporation bus 1001 (HVM 901F), Museum of Transport in Manchester, 4 October 2008.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Manchester_Corporation_bus_1001_%28HVM_901F%29%2C_Museum_of_Transport_in_Manchester%2C_4_October_2008.jpg/120px-Manchester_Corporation_bus_1001_%28HVM_901F%29%2C_Museum_of_Transport_in_Manchester%2C_4_October_2008.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Manchester_Corporation_bus_1001_%28HVM_901F%29%2C_Museum_of_Transport_in_Manchester%2C_4_October_2008.jpg/180px-Manchester_Corporation_bus_1001_%28HVM_901F%29%2C_Museum_of_Transport_in_Manchester%2C_4_October_2008.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Manchester_Corporation_bus_1001_%28HVM_901F%29%2C_Museum_of_Transport_in_Manchester%2C_4_October_2008.jpg/240px-Manchester_Corporation_bus_1001_%28HVM_901F%29%2C_Museum_of_Transport_in_Manchester%2C_4_October_2008.jpg 2x" data-file-width="3072" data-file-height="2304" /></a></td>
<td>DD</td>
<td></td>
<td></td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=MCW_Metroliner&amp;action=edit&amp;redlink=1" class="new" title="MCW Metroliner (not yet started)">MCW Metroliner</a></td>
<td><a href="/wiki/File:Yorkshire_Traction_MCW_Metroliner.jpg" class="image"><img alt="Yorkshire Traction MCW Metroliner.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Yorkshire_Traction_MCW_Metroliner.jpg/120px-Yorkshire_Traction_MCW_Metroliner.jpg" width="120" height="65" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Yorkshire_Traction_MCW_Metroliner.jpg/180px-Yorkshire_Traction_MCW_Metroliner.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Yorkshire_Traction_MCW_Metroliner.jpg/240px-Yorkshire_Traction_MCW_Metroliner.jpg 2x" data-file-width="1730" data-file-height="940" /></a></td>
<td>DD/SD</td>
<td><a href="/w/index.php?title=Metro_Cammell_Weymann&amp;action=edit&amp;redlink=1" class="new" title="Metro Cammell Weymann (not yet started)">Metro Cammell Weymann</a></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Mitsubishi_Fuso_Aero_King&amp;action=edit&amp;redlink=1" class="new" title="Mitsubishi Fuso Aero King (not yet started)">Mitsubishi Fuso Aero King</a></td>
<td><a href="/wiki/File:Hiroden_Bus_626.jpg" class="image"><img alt="Hiroden Bus 626.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/db/Hiroden_Bus_626.jpg/120px-Hiroden_Bus_626.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/db/Hiroden_Bus_626.jpg/180px-Hiroden_Bus_626.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/db/Hiroden_Bus_626.jpg/240px-Hiroden_Bus_626.jpg 2x" data-file-width="800" data-file-height="600" /></a></td>
<td>DD</td>
<td><a href="/w/index.php?title=Mitsubishi_Fuso&amp;action=edit&amp;redlink=1" class="new" title="Mitsubishi Fuso (not yet started)">Mitsubishi Fuso</a></td>
<td>1984</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Nissan_Diesel_Space_Dream&amp;action=edit&amp;redlink=1" class="new" title="Nissan Diesel Space Dream (not yet started)">Nissan Diesel Space Dream</a></td>
<td><a href="/wiki/File:P-GA66T-Yokohama-Blue-Line.jpg" class="image"><img alt="P-GA66T-Yokohama-Blue-Line.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2a/P-GA66T-Yokohama-Blue-Line.jpg/120px-P-GA66T-Yokohama-Blue-Line.jpg" width="120" height="84" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2a/P-GA66T-Yokohama-Blue-Line.jpg/180px-P-GA66T-Yokohama-Blue-Line.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2a/P-GA66T-Yokohama-Blue-Line.jpg/240px-P-GA66T-Yokohama-Blue-Line.jpg 2x" data-file-width="1744" data-file-height="1222" /></a></td>
<td>DD</td>
<td><a href="/w/index.php?title=UD_Trucks&amp;action=edit&amp;redlink=1" class="new" title="UD Trucks (not yet started)">Nissan Diesel</a></td>
<td>1983</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Plaxton_President&amp;action=edit&amp;redlink=1" class="new" title="Plaxton President (not yet started)">Plaxton President</a></td>
<td><a href="/wiki/File:Southern_Vectis_196_HW52_EPV_5.JPG" class="image"><img alt="Southern Vectis 196 HW52 EPV 5.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Southern_Vectis_196_HW52_EPV_5.JPG/120px-Southern_Vectis_196_HW52_EPV_5.JPG" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Southern_Vectis_196_HW52_EPV_5.JPG/180px-Southern_Vectis_196_HW52_EPV_5.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/59/Southern_Vectis_196_HW52_EPV_5.JPG/240px-Southern_Vectis_196_HW52_EPV_5.JPG 2x" data-file-width="3314" data-file-height="2088" /></a></td>
<td>DD</td>
<td>Paxton</td>
<td>1999 to 2005</td>
<td>Bodywork</td>
</tr>
<tr>
<td><a href="/w/index.php?title=VDL_DB250&amp;action=edit&amp;redlink=1" class="new" title="VDL DB250 (not yet started)">VDL DB250</a></td>
<td><a href="/wiki/File:Wilts_%26_Dorset_3185.jpg" class="image"><img alt="Wilts &amp; Dorset 3185.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Wilts_%26_Dorset_3185.jpg/120px-Wilts_%26_Dorset_3185.jpg" width="120" height="133" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Wilts_%26_Dorset_3185.jpg/180px-Wilts_%26_Dorset_3185.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Wilts_%26_Dorset_3185.jpg/240px-Wilts_%26_Dorset_3185.jpg 2x" data-file-width="400" data-file-height="442" /></a></td>
<td>DD</td>
<td>DAF Bus/VDL Bus</td>
<td>1991</td>
<td>Originally launched as the DAF DB250</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B7TL&amp;action=edit&amp;redlink=1" class="new" title="Volvo B7TL (not yet started)">Volvo B7TL</a></td>
<td><a href="/wiki/File:First_Wright_Eclipse_Gemini_01.jpg" class="image"><img alt="First Wright Eclipse Gemini 01.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/44/First_Wright_Eclipse_Gemini_01.jpg/120px-First_Wright_Eclipse_Gemini_01.jpg" width="120" height="103" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/44/First_Wright_Eclipse_Gemini_01.jpg/180px-First_Wright_Eclipse_Gemini_01.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/44/First_Wright_Eclipse_Gemini_01.jpg/240px-First_Wright_Eclipse_Gemini_01.jpg 2x" data-file-width="1117" data-file-height="959" /></a></td>
<td>DD</td>
<td>Volvo Buses</td>
<td>1999</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_B9TL&amp;action=edit&amp;redlink=1" class="new" title="Volvo B9TL (not yet started)">Volvo B9TL</a></td>
<td><a href="/wiki/File:AVD1.jpg" class="image"><img alt="AVD1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/97/AVD1.jpg/120px-AVD1.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/97/AVD1.jpg/180px-AVD1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/97/AVD1.jpg/240px-AVD1.jpg 2x" data-file-width="800" data-file-height="533" /></a></td>
<td>DD</td>
<td>Volvo Buses</td>
<td>2002</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Volvo_Super_Olympian&amp;action=edit&amp;redlink=1" class="new" title="Volvo Super Olympian (not yet started)">Volvo Super Olympian</a></td>
<td><a href="/wiki/File:JG3533.jpg" class="image"><img alt="JG3533.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d7/JG3533.jpg/120px-JG3533.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d7/JG3533.jpg/180px-JG3533.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d7/JG3533.jpg/240px-JG3533.jpg 2x" data-file-width="550" data-file-height="368" /></a></td>
<td>DD</td>
<td><a href="/w/index.php?title=Volvo_Buses&amp;action=edit&amp;redlink=1" class="new" title="Volvo Buses (not yet started)">Volvo Buses</a></td>
<td>1998</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Wright_Eclipse_Gemini&amp;action=edit&amp;redlink=1" class="new" title="Wright Eclipse Gemini (not yet started)">Wright Eclipse Gemini</a></td>
<td><a href="/wiki/File:First_Wright_Eclipse_Gemini_01.jpg" class="image"><img alt="First Wright Eclipse Gemini 01.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/44/First_Wright_Eclipse_Gemini_01.jpg/120px-First_Wright_Eclipse_Gemini_01.jpg" width="120" height="103" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/44/First_Wright_Eclipse_Gemini_01.jpg/180px-First_Wright_Eclipse_Gemini_01.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/44/First_Wright_Eclipse_Gemini_01.jpg/240px-First_Wright_Eclipse_Gemini_01.jpg 2x" data-file-width="1117" data-file-height="959" /></a></td>
<td>DD</td>
<td><a href="/w/index.php?title=Wrightbus&amp;action=edit&amp;redlink=1" class="new" title="Wrightbus (not yet started)">Wrightbus</a></td>
<td>2006</td>
<td>Bodywork for Volvo low-floor double-deckers</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Or%C3%A9os_2X&amp;action=edit&amp;redlink=1" class="new" title="Oréos 2X (not yet started)">Oréos 2X</a></td>
<td></td>
<td>MB</td>
<td><a href="/w/index.php?title=Power_vehicle_Innovation&amp;action=edit&amp;redlink=1" class="new" title="Power vehicle Innovation (not yet started)">Power vehicle Innovation</a></td>
<td></td>
<td>Electric</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Or%C3%A9os_4X&amp;action=edit&amp;redlink=1" class="new" title="Oréos 4X (not yet started)">Oréos 4X</a></td>
<td></td>
<td>SD</td>
<td>Power vehicle Innovation</td>
<td></td>
<td>Electric</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Gillig_Transit_Coach_School_Bus&amp;action=edit&amp;redlink=1" class="new" title="Gillig Transit Coach School Bus (not yet started)">Gillig Transit Coach School Bus</a></td>
<td></td>
<td>SB</td>
<td><a href="/w/index.php?title=Gillig_Brothers&amp;action=edit&amp;redlink=1" class="new" title="Gillig Brothers (not yet started)">Gillig Brothers</a> (1940-1969)<br />
<a href="/w/index.php?title=Gillig_Corporation&amp;action=edit&amp;redlink=1" class="new" title="Gillig Corporation (not yet started)">Gillig Corporation</a> (1969-1982)</td>
<td>1940 to 1982</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Gillig_Phantom_(school_bus)&amp;action=edit&amp;redlink=1" class="new" title="Gillig Phantom (school bus) (not yet started)">Gillig Phantom (school bus)</a></td>
<td><a href="/wiki/File:Gillig_Phantom_School_Bus_LAUSD.jpg" class="image"><img alt="Gillig Phantom School Bus LAUSD.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/68/Gillig_Phantom_School_Bus_LAUSD.jpg/120px-Gillig_Phantom_School_Bus_LAUSD.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/68/Gillig_Phantom_School_Bus_LAUSD.jpg/180px-Gillig_Phantom_School_Bus_LAUSD.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/68/Gillig_Phantom_School_Bus_LAUSD.jpg/240px-Gillig_Phantom_School_Bus_LAUSD.jpg 2x" data-file-width="3872" data-file-height="2592" /></a></td>
<td>SB</td>
<td>Gillig Corporation</td>
<td>1986 to 1993</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=International_3000&amp;action=edit&amp;redlink=1" class="new" title="International 3000 (not yet started)">International 3000</a></td>
<td><a href="/wiki/File:IC_RE-300_Fairfax,_Virginia.jpg" class="image"><img alt="IC RE-300 Fairfax, Virginia.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/IC_RE-300_Fairfax%2C_Virginia.jpg/120px-IC_RE-300_Fairfax%2C_Virginia.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/IC_RE-300_Fairfax%2C_Virginia.jpg/180px-IC_RE-300_Fairfax%2C_Virginia.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/IC_RE-300_Fairfax%2C_Virginia.jpg/240px-IC_RE-300_Fairfax%2C_Virginia.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>SB</td>
<td><a href="/w/index.php?title=Navistar_International&amp;action=edit&amp;redlink=1" class="new" title="Navistar International (not yet started)">Navistar International</a></td>
<td>1996</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=International_3800&amp;action=edit&amp;redlink=1" class="new" title="International 3800 (not yet started)">International 3800</a></td>
<td><a href="/wiki/File:Carpenterclassic.jpg" class="image"><img alt="Carpenterclassic.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Carpenterclassic.jpg/120px-Carpenterclassic.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Carpenterclassic.jpg/180px-Carpenterclassic.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Carpenterclassic.jpg/240px-Carpenterclassic.jpg 2x" data-file-width="640" data-file-height="480" /></a></td>
<td>SB</td>
<td>Navistar International</td>
<td>1989 to 2004</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=International_3300&amp;action=edit&amp;redlink=1" class="new" title="International 3300 (not yet started)">International 3300</a></td>
<td></td>
<td>SB</td>
<td>Navistar International</td>
<td>2005</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=International_3900&amp;action=edit&amp;redlink=1" class="new" title="International 3900 (not yet started)">International 3900</a></td>
<td><a href="/wiki/File:IC-FE-school-bus-Voluntown.jpg" class="image"><img alt="IC-FE-school-bus-Voluntown.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e9/IC-FE-school-bus-Voluntown.jpg/120px-IC-FE-school-bus-Voluntown.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e9/IC-FE-school-bus-Voluntown.jpg/180px-IC-FE-school-bus-Voluntown.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e9/IC-FE-school-bus-Voluntown.jpg/240px-IC-FE-school-bus-Voluntown.jpg 2x" data-file-width="1100" data-file-height="825" /></a></td>
<td>SB</td>
<td>Navistar International</td>
<td>1990 to 2010</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=International_Harvester_S-Series_(bus_chassis)&amp;action=edit&amp;redlink=1" class="new" title="International Harvester S-Series (bus chassis) (not yet started)">International Harvester S-Series (bus chassis)</a></td>
<td><a href="/wiki/File:Schulbus_Hamburger_Hummelbahn01.jpg" class="image"><img alt="Schulbus Hamburger Hummelbahn01.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Schulbus_Hamburger_Hummelbahn01.jpg/120px-Schulbus_Hamburger_Hummelbahn01.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Schulbus_Hamburger_Hummelbahn01.jpg/180px-Schulbus_Hamburger_Hummelbahn01.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Schulbus_Hamburger_Hummelbahn01.jpg/240px-Schulbus_Hamburger_Hummelbahn01.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SB</td>
<td><a href="/w/index.php?title=International_Harvester&amp;action=edit&amp;redlink=1" class="new" title="International Harvester (not yet started)">International Harvester</a> (1979-1986)<br />
<a href="/w/index.php?title=Navistar_International&amp;action=edit&amp;redlink=1" class="new" title="Navistar International (not yet started)">Navistar International</a> (1986-1989)</td>
<td>1978 to 1989</td>
<td>The "Schoolmaster"</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Freightliner_FS-65&amp;action=edit&amp;redlink=1" class="new" title="Freightliner FS-65 (not yet started)">Freightliner FS-65</a></td>
<td><a href="/wiki/File:Shelby_County_Bus_99-55.jpg" class="image"><img alt="Shelby County Bus 99-55.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/29/Shelby_County_Bus_99-55.jpg/120px-Shelby_County_Bus_99-55.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/29/Shelby_County_Bus_99-55.jpg/180px-Shelby_County_Bus_99-55.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/29/Shelby_County_Bus_99-55.jpg/240px-Shelby_County_Bus_99-55.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>SB</td>
<td><a href="/w/index.php?title=Freightliner_Trucks&amp;action=edit&amp;redlink=1" class="new" title="Freightliner Trucks (not yet started)">Freightliner Trucks</a></td>
<td>1997 to 2007</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Freightliner_C2&amp;action=edit&amp;redlink=1" class="new" title="Freightliner C2 (not yet started)">Freightliner C2</a></td>
<td><a href="/wiki/File:TBB_Saf-T-Liner_C2.jpg" class="image"><img alt="TBB Saf-T-Liner C2.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/TBB_Saf-T-Liner_C2.jpg/120px-TBB_Saf-T-Liner_C2.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/TBB_Saf-T-Liner_C2.jpg/180px-TBB_Saf-T-Liner_C2.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fe/TBB_Saf-T-Liner_C2.jpg/240px-TBB_Saf-T-Liner_C2.jpg 2x" data-file-width="640" data-file-height="480" /></a></td>
<td>SB</td>
<td>Freightliner Trucks</td>
<td>2004</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Chevrolet/GMC_B-Series&amp;action=edit&amp;redlink=1" class="new" title="Chevrolet/GMC B-Series (not yet started)">Chevrolet/GMC B-Series</a></td>
<td><a href="/wiki/File:2GMBBCV200schoolbuses.jpg" class="image"><img alt="2GMBBCV200schoolbuses.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3e/2GMBBCV200schoolbuses.jpg/120px-2GMBBCV200schoolbuses.jpg" width="120" height="96" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3e/2GMBBCV200schoolbuses.jpg/180px-2GMBBCV200schoolbuses.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3e/2GMBBCV200schoolbuses.jpg/240px-2GMBBCV200schoolbuses.jpg 2x" data-file-width="800" data-file-height="640" /></a></td>
<td>SB</td>
<td><a href="/wiki/General_Motors" title="General Motors">General Motors</a></td>
<td>1966 to 2003</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Thomas_Minotour&amp;action=edit&amp;redlink=1" class="new" title="Thomas Minotour (not yet started)">Thomas Minotour</a></td>
<td><a href="/wiki/File:Thomas-minotour-school-bus.jpg" class="image"><img alt="Thomas-minotour-school-bus.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/30/Thomas-minotour-school-bus.jpg/120px-Thomas-minotour-school-bus.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/30/Thomas-minotour-school-bus.jpg/180px-Thomas-minotour-school-bus.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/30/Thomas-minotour-school-bus.jpg/240px-Thomas-minotour-school-bus.jpg 2x" data-file-width="1200" data-file-height="900" /></a></td>
<td>SB</td>
<td><a href="/w/index.php?title=Thomas_Built_Buses&amp;action=edit&amp;redlink=1" class="new" title="Thomas Built Buses (not yet started)">Thomas Built Buses</a></td>
<td>1980</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Thomas_Saf-T-Liner&amp;action=edit&amp;redlink=1" class="new" title="Thomas Saf-T-Liner (not yet started)">Thomas Saf-T-Liner</a></td>
<td><a href="/wiki/File:Thomas_School_Bus_Bus.jpg" class="image"><img alt="Thomas School Bus Bus.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Thomas_School_Bus_Bus.jpg/120px-Thomas_School_Bus_Bus.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Thomas_School_Bus_Bus.jpg/180px-Thomas_School_Bus_Bus.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Thomas_School_Bus_Bus.jpg/240px-Thomas_School_Bus_Bus.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>SB</td>
<td>Thomas Built Buses</td>
<td>1978</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Thomas_Saf-T-Liner_C2&amp;action=edit&amp;redlink=1" class="new" title="Thomas Saf-T-Liner C2 (not yet started)">Thomas Saf-T-Liner C2</a></td>
<td><a href="/wiki/File:Durham_School_Services_01089.jpg" class="image"><img alt="Durham School Services 01089.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Durham_School_Services_01089.jpg/120px-Durham_School_Services_01089.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Durham_School_Services_01089.jpg/180px-Durham_School_Services_01089.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Durham_School_Services_01089.jpg/240px-Durham_School_Services_01089.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>SB</td>
<td>Thomas Built Buses</td>
<td>2004</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Thomas_Vista&amp;action=edit&amp;redlink=1" class="new" title="Thomas Vista (not yet started)">Thomas Vista</a></td>
<td><a href="/wiki/File:Thomas_Vista.jpg" class="image"><img alt="Thomas Vista.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/57/Thomas_Vista.jpg/120px-Thomas_Vista.jpg" width="120" height="94" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/57/Thomas_Vista.jpg/180px-Thomas_Vista.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/57/Thomas_Vista.jpg/240px-Thomas_Vista.jpg 2x" data-file-width="2951" data-file-height="2304" /></a></td>
<td>SB</td>
<td>Thomas Built Buses</td>
<td>1989 to 1998</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Blue_Bird_All_American&amp;action=edit&amp;redlink=1" class="new" title="Blue Bird All American (not yet started)">Blue Bird All American</a></td>
<td><a href="/wiki/File:2009_blue_bird_all_american_fe.jpg" class="image"><img alt="2009 blue bird all american fe.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c9/2009_blue_bird_all_american_fe.jpg/120px-2009_blue_bird_all_american_fe.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c9/2009_blue_bird_all_american_fe.jpg/180px-2009_blue_bird_all_american_fe.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c9/2009_blue_bird_all_american_fe.jpg/240px-2009_blue_bird_all_american_fe.jpg 2x" data-file-width="800" data-file-height="532" /></a></td>
<td>SB</td>
<td><a href="/w/index.php?title=Blue_Bird_Body_Company&amp;action=edit&amp;redlink=1" class="new" title="Blue Bird Body Company (not yet started)">Blue Bird Body Company</a> (1948-1992)<br />
<a href="/w/index.php?title=Blue_Bird_Corporation&amp;action=edit&amp;redlink=1" class="new" title="Blue Bird Corporation (not yet started)">Blue Bird Corporation</a> (1992-present)</td>
<td>1948</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Blue_Bird_Mini_Bird&amp;action=edit&amp;redlink=1" class="new" title="Blue Bird Mini Bird (not yet started)">Blue Bird Mini Bird</a></td>
<td><a href="/wiki/File:BBMiniBird.jpg" class="image"><img alt="BBMiniBird.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/BBMiniBird.jpg/120px-BBMiniBird.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/BBMiniBird.jpg/180px-BBMiniBird.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/BBMiniBird.jpg/240px-BBMiniBird.jpg 2x" data-file-width="491" data-file-height="326" /></a></td>
<td>SB</td>
<td>Blue Bird Corporation</td>
<td>1977 to 2005</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Blue_Bird_Micro_Bird&amp;action=edit&amp;redlink=1" class="new" title="Blue Bird Micro Bird (not yet started)">Blue Bird Micro Bird</a></td>
<td><a href="/wiki/File:Divine_Peace_Lutheran_School_bus.jpg" class="image"><img alt="Divine Peace Lutheran School bus.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Divine_Peace_Lutheran_School_bus.jpg/120px-Divine_Peace_Lutheran_School_bus.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Divine_Peace_Lutheran_School_bus.jpg/180px-Divine_Peace_Lutheran_School_bus.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Divine_Peace_Lutheran_School_bus.jpg/240px-Divine_Peace_Lutheran_School_bus.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>SB</td>
<td>Blue Bird Body Company (1975-1992)<br />
Blue Bird Corporation (1992-2010)</td>
<td>1975</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Blue_Bird_TC/2000&amp;action=edit&amp;redlink=1" class="new" title="Blue Bird TC/2000 (not yet started)">Blue Bird TC/2000</a></td>
<td><a href="/wiki/File:BlueBirdTC2000schoolbus.jpg" class="image"><img alt="BlueBirdTC2000schoolbus.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/03/BlueBirdTC2000schoolbus.jpg/120px-BlueBirdTC2000schoolbus.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/03/BlueBirdTC2000schoolbus.jpg/180px-BlueBirdTC2000schoolbus.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/03/BlueBirdTC2000schoolbus.jpg/240px-BlueBirdTC2000schoolbus.jpg 2x" data-file-width="2048" data-file-height="1360" /></a></td>
<td>SB</td>
<td>Blue Bird Corporation</td>
<td>1988 to 2003</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Blue_Bird_Vision&amp;action=edit&amp;redlink=1" class="new" title="Blue Bird Vision (not yet started)">Blue Bird Vision</a></td>
<td><a href="/wiki/File:Propane_powered_blue_bird_vision.jpg" class="image"><img alt="Propane powered blue bird vision.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Propane_powered_blue_bird_vision.jpg/120px-Propane_powered_blue_bird_vision.jpg" width="120" height="67" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Propane_powered_blue_bird_vision.jpg/180px-Propane_powered_blue_bird_vision.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Propane_powered_blue_bird_vision.jpg/240px-Propane_powered_blue_bird_vision.jpg 2x" data-file-width="1200" data-file-height="671" /></a></td>
<td>SB</td>
<td>Blue Bird Corporation</td>
<td>2003</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Blue_Bird_Wanderlodge&amp;action=edit&amp;redlink=1" class="new" title="Blue Bird Wanderlodge (not yet started)">Blue Bird Wanderlodge</a></td>
<td><a href="/wiki/File:Largemarge.jpg" class="image"><img alt="Largemarge.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Largemarge.jpg/120px-Largemarge.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Largemarge.jpg/180px-Largemarge.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Largemarge.jpg/240px-Largemarge.jpg 2x" data-file-width="1331" data-file-height="887" /></a></td>
<td>SB</td>
<td>Blue Bird Body Company (1963-1992)<br />
Blue Bird Corporation (1992-2007)<br />
Complete Coach Works (2007-2009)</td>
<td>1963 to 2009</td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Eletra&amp;action=edit&amp;redlink=1" class="new" title="Eletra (not yet started)">Eletra</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td><a href="/w/index.php?title=Hybrid_electric_bus&amp;action=edit&amp;redlink=1" class="new" title="Hybrid electric bus (not yet started)">Hybrid electric</a></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Orion_I&amp;action=edit&amp;redlink=1" class="new" title="Orion I (not yet started)">Orion I</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Orion_II&amp;action=edit&amp;redlink=1" class="new" title="Orion II (not yet started)">Orion II</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Orion_III&amp;action=edit&amp;redlink=1" class="new" title="Orion III (not yet started)">Orion III</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Orion_IV&amp;action=edit&amp;redlink=1" class="new" title="Orion IV (not yet started)">Orion IV</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Orion_V&amp;action=edit&amp;redlink=1" class="new" title="Orion V (not yet started)">Orion V</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Orion_VI&amp;action=edit&amp;redlink=1" class="new" title="Orion VI (not yet started)">Orion VI</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Orion_VII&amp;action=edit&amp;redlink=1" class="new" title="Orion VII (not yet started)">Orion VII</a></td>
<td></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Orion_VII_Next_Generation&amp;action=edit&amp;redlink=1" class="new" title="Orion VII Next Generation (not yet started)">Orion VII Next Generation</a></td>
<td><a href="/wiki/File:MTA_New_York_City_Bus_Orion_VII_Next_Generation_(model_year_2010).jpg" class="image"><img alt="MTA New York City Bus Orion VII Next Generation (model year 2010).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6d/MTA_New_York_City_Bus_Orion_VII_Next_Generation_%28model_year_2010%29.jpg/120px-MTA_New_York_City_Bus_Orion_VII_Next_Generation_%28model_year_2010%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6d/MTA_New_York_City_Bus_Orion_VII_Next_Generation_%28model_year_2010%29.jpg/180px-MTA_New_York_City_Bus_Orion_VII_Next_Generation_%28model_year_2010%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6d/MTA_New_York_City_Bus_Orion_VII_Next_Generation_%28model_year_2010%29.jpg/240px-MTA_New_York_City_Bus_Orion_VII_Next_Generation_%28model_year_2010%29.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Nova_RTS&amp;action=edit&amp;redlink=1" class="new" title="Nova RTS (not yet started)">Nova RTS</a></td>
<td><a href="/wiki/File:NJ_Transit_RTS_hybrid_4002.jpg" class="image"><img alt="NJ Transit RTS hybrid 4002.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a5/NJ_Transit_RTS_hybrid_4002.jpg/120px-NJ_Transit_RTS_hybrid_4002.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a5/NJ_Transit_RTS_hybrid_4002.jpg/180px-NJ_Transit_RTS_hybrid_4002.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a5/NJ_Transit_RTS_hybrid_4002.jpg/240px-NJ_Transit_RTS_hybrid_4002.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td><a href="/w/index.php?title=Hybrid_electric_bus&amp;action=edit&amp;redlink=1" class="new" title="Hybrid electric bus (not yet started)">Hybrid electric</a></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Designline&amp;action=edit&amp;redlink=1" class="new" title="Designline (not yet started)">Designline</a> Olymbus</td>
<td><a href="/wiki/File:Quaylink_Bus_On_Gateshead_Quays.JPG" class="image"><img alt="Quaylink Bus On Gateshead Quays.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Quaylink_Bus_On_Gateshead_Quays.JPG/120px-Quaylink_Bus_On_Gateshead_Quays.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Quaylink_Bus_On_Gateshead_Quays.JPG/180px-Quaylink_Bus_On_Gateshead_Quays.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Quaylink_Bus_On_Gateshead_Quays.JPG/240px-Quaylink_Bus_On_Gateshead_Quays.JPG 2x" data-file-width="3488" data-file-height="2616" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td><a href="/w/index.php?title=Hybrid_electric_bus&amp;action=edit&amp;redlink=1" class="new" title="Hybrid electric bus (not yet started)">Hybrid electric</a></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Castrosua_Tempus&amp;action=edit&amp;redlink=1" class="new" title="Castrosua Tempus (not yet started)">Castrosua Tempus</a></td>
<td><a href="/wiki/File:Castrosua_Tempus_001.JPG" class="image"><img alt="Castrosua Tempus 001.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/72/Castrosua_Tempus_001.JPG/120px-Castrosua_Tempus_001.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/72/Castrosua_Tempus_001.JPG/180px-Castrosua_Tempus_001.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/72/Castrosua_Tempus_001.JPG/240px-Castrosua_Tempus_001.JPG 2x" data-file-width="2560" data-file-height="1920" /></a></td>
<td>SD</td>
<td></td>
<td></td>
<td><a href="/w/index.php?title=Hybrid_electric_bus&amp;action=edit&amp;redlink=1" class="new" title="Hybrid electric bus (not yet started)">Hybrid electric</a></td>
</tr>
<tr>
<td><a href="/w/index.php?title=Nova_LFS&amp;action=edit&amp;redlink=1" class="new" title="Nova LFS (not yet started)">Nova LFS</a></td>
<td><a href="/wiki/File:MTA_New_York_City_Bus_Nova_LFS_(2009)_demo.jpg" class="image"><img alt="MTA New York City Bus Nova LFS (2009) demo.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5d/MTA_New_York_City_Bus_Nova_LFS_%282009%29_demo.jpg/120px-MTA_New_York_City_Bus_Nova_LFS_%282009%29_demo.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5d/MTA_New_York_City_Bus_Nova_LFS_%282009%29_demo.jpg/180px-MTA_New_York_City_Bus_Nova_LFS_%282009%29_demo.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5d/MTA_New_York_City_Bus_Nova_LFS_%282009%29_demo.jpg/240px-MTA_New_York_City_Bus_Nova_LFS_%282009%29_demo.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>SD</td>
<td><a href="/wiki/Nova_Bus" title="Nova Bus">Nova Bus</a></td>
<td></td>
<td></td>
</tr>
</table>
<ul>
<li>Types: SD=single-decker, DD=double-decker, C=coach, SB=School bus, MB=minibus</li>
</ul>
<h2><span class="mw-headline" id="Related_pages">Related pages</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_bus_models&amp;veaction=edit&amp;section=1" class="mw-editsection-visualeditor" title="Change section: Related pages">change</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=List_of_bus_models&amp;action=edit&amp;section=1" title="Change section: Related pages">change source</a><span class="mw-editsection-bracket">]</span></span></h2>
<table role="presentation" class="metadata mbox-small plainlinks" style="background-color:#f9f9f9;border:1px solid #aaa;color:#000">
<tr>
<td class="mbox-image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/30px-Commons-logo.svg.png" width="30" height="40" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/45px-Commons-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/59px-Commons-logo.svg.png 2x" data-file-width="1024" data-file-height="1376" /></td>
<td class="mbox-text plainlist">Wikimedia Commons has <a href="/wiki/Multimedia" title="Multimedia">media</a> related to: <i><b><a href="https://commons.wikimedia.org/wiki/Special:Search/List_of_bus_models" class="extiw" title="commons:Special:Search/List of bus models">List of bus models</a></b></i></td>
</tr>
</table>
<ul>
<li><a href="/w/index.php?title=Bus_spotting&amp;action=edit&amp;redlink=1" class="new" title="Bus spotting (not yet started)">Bus spotting</a></li>
<li><a href="/wiki/Coach_(vehicle)" class="mw-redirect" title="Coach (vehicle)">Coach</a> (used for long distance travel)</li>
<li><a href="/w/index.php?title=Dollar_van&amp;action=edit&amp;redlink=1" class="new" title="Dollar van (not yet started)">Dollar van</a></li>
<li><a href="/w/index.php?title=List_of_fictional_buses&amp;action=edit&amp;redlink=1" class="new" title="List of fictional buses (not yet started)">List of fictional buses</a></li>
<li><a href="/w/index.php?title=List_of_Leyland_buses&amp;action=edit&amp;redlink=1" class="new" title="List of Leyland buses (not yet started)">List of Leyland buses</a></li>
<li><a href="/w/index.php?title=List_of_AEC_buses&amp;action=edit&amp;redlink=1" class="new" title="List of AEC buses (not yet started)">List of AEC buses</a> (<a href="/w/index.php?title=Associated_Equipment_Company&amp;action=edit&amp;redlink=1" class="new" title="Associated Equipment Company (not yet started)">Associated Equipment Company</a> (AEC) and <a href="/w/index.php?title=London_General_Omnibus_Company&amp;action=edit&amp;redlink=1" class="new" title="London General Omnibus Company (not yet started)">London General Omnibus Company</a> (LGOC))</li>
<li><a href="/w/index.php?title=Trackless_train&amp;action=edit&amp;redlink=1" class="new" title="Trackless train (not yet started)">Trackless train</a></li>
<li><a href="/wiki/Tram" title="Tram">Tram</a></li>
</ul>
<h2><span class="mw-headline" id="Other_topics">Other topics</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_bus_models&amp;veaction=edit&amp;section=2" class="mw-editsection-visualeditor" title="Change section: Other topics">change</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=List_of_bus_models&amp;action=edit&amp;section=2" title="Change section: Other topics">change source</a><span class="mw-editsection-bracket">]</span></span></h2>
<table role="presentation" class="metadata mbox-small plainlinks" style="background-color:#f9f9f9;border:1px solid #aaa;color:#000">
<tr>
<td class="mbox-image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/30px-Commons-logo.svg.png" width="30" height="40" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/45px-Commons-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/59px-Commons-logo.svg.png 2x" data-file-width="1024" data-file-height="1376" /></td>
<td class="mbox-text plainlist">Wikimedia Commons has <a href="/wiki/Multimedia" title="Multimedia">media</a> related to: <i><b><a href="https://commons.wikimedia.org/wiki/Special:Search/List_of_bus_models" class="extiw" title="commons:Special:Search/List of bus models">List of bus models</a></b></i></td>
</tr>
</table>
<ul>
<li><a href="/w/index.php?title=Bus_spotting&amp;action=edit&amp;redlink=1" class="new" title="Bus spotting (not yet started)">Bus spotting</a></li>
<li><a href="/wiki/Coach_(vehicle)" class="mw-redirect" title="Coach (vehicle)">Coach</a> (used for long distance travel)</li>
<li><a href="/w/index.php?title=Dollar_van&amp;action=edit&amp;redlink=1" class="new" title="Dollar van (not yet started)">Dollar van</a></li>
<li><a href="/w/index.php?title=List_of_fictional_buses&amp;action=edit&amp;redlink=1" class="new" title="List of fictional buses (not yet started)">List of fictional buses</a></li>
<li><a href="/w/index.php?title=List_of_Leyland_buses&amp;action=edit&amp;redlink=1" class="new" title="List of Leyland buses (not yet started)">List of Leyland buses</a></li>
<li><a href="/w/index.php?title=List_of_AEC_buses&amp;action=edit&amp;redlink=1" class="new" title="List of AEC buses (not yet started)">List of AEC buses</a> (<a href="/w/index.php?title=Associated_Equipment_Company&amp;action=edit&amp;redlink=1" class="new" title="Associated Equipment Company (not yet started)">Associated Equipment Company</a> (AEC) and <a href="/w/index.php?title=London_General_Omnibus_Company&amp;action=edit&amp;redlink=1" class="new" title="London General Omnibus Company (not yet started)">London General Omnibus Company</a> (LGOC))</li>
<li><a href="/w/index.php?title=Trackless_train&amp;action=edit&amp;redlink=1" class="new" title="Trackless train (not yet started)">Trackless train</a></li>
<li><a href="/wiki/Tram" title="Tram">Tram</a></li>
</ul>
<p><br /></p>
<table cellspacing="0" class="navbox" style="border-spacing:0;;">
<tr>
<td style="padding:2px;">
<table cellspacing="0" class="nowraplinks collapsible autocollapse navbox-inner" style="border-spacing:0;background:transparent;color:inherit;;">
<tr>
<th scope="col" style=";" class="navbox-title" colspan="2">
<div class="noprint plainlinks hlist navbar mini" style="">
<ul>
<li class="nv-view"><a href="/wiki/Template:Public_transport" title="Template:Public transport"><span title="View this template" style=";;background:none transparent;border:none;">v</span></a></li>
<li class="nv-talk"><a href="/w/index.php?title=Template_talk:Public_transport&amp;action=edit&amp;redlink=1" class="new" title="Template talk:Public transport (not yet started)"><span title="Discuss this template" style=";;background:none transparent;border:none;">t</span></a></li>
<li class="nv-edit"><a class="external text" href="//simple.wikipedia.org/w/index.php?title=Template:Public_transport&amp;action=edit"><span title="Edit this template" style=";;background:none transparent;border:none;">e</span></a></li>
</ul>
</div>
<div class="" style="font-size:110%;"><a href="/wiki/Public_transport" title="Public transport">Public transport</a></div>
</th>
</tr>
<tr style="height:2px;">
<td></td>
</tr>
<tr>
<th scope="row" class="navbox-group" style=";;"><a href="/wiki/Bus" title="Bus">Bus</a></th>
<td style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px;;;" class="navbox-list navbox-odd">
<div style="padding:0em 0.25em"><a href="/w/index.php?title=Bus_rapid_transit&amp;action=edit&amp;redlink=1" class="new" title="Bus rapid transit (not yet started)">Bus rapid transit</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Express_bus_service&amp;action=edit&amp;redlink=1" class="new" title="Express bus service (not yet started)">Express bus service</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Paratransit&amp;action=edit&amp;redlink=1" class="new" title="Paratransit (not yet started)">Paratransit</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Public_light_bus&amp;action=edit&amp;redlink=1" class="new" title="Public light bus (not yet started)">Public light bus</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Transit_bus" title="Transit bus">Transit bus</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Trolleybus" title="Trolleybus">Trolleybus</a></div>
</td>
</tr>
<tr style="height:2px">
<td></td>
</tr>
<tr>
<th scope="row" class="navbox-group" style=";;"><a href="/wiki/Rail_transport" title="Rail transport">Rail</a></th>
<td style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px;;;" class="navbox-list navbox-even">
<div style="padding:0em 0.25em"><a href="/w/index.php?title=Cable_railway&amp;action=edit&amp;redlink=1" class="new" title="Cable railway (not yet started)">Cable railway</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Commuter_rail&amp;action=edit&amp;redlink=1" class="new" title="Commuter rail (not yet started)">Commuter rail</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Passenger_rail_terminology&amp;action=edit&amp;redlink=1" class="new" title="Passenger rail terminology (not yet started)">Heavy rail</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Heritage_railway" title="Heritage railway">Heritage railway</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Heritage_streetcar&amp;action=edit&amp;redlink=1" class="new" title="Heritage streetcar (not yet started)">Heritage streetcar</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/High-speed_rail" title="High-speed rail">High-speed rail</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Inter-city_rail&amp;action=edit&amp;redlink=1" class="new" title="Inter-city rail (not yet started)">Inter-city rail</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Interurban&amp;action=edit&amp;redlink=1" class="new" title="Interurban (not yet started)">Interurban</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Light_rail" title="Light rail">Light rail</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Maglev_(transport)&amp;action=edit&amp;redlink=1" class="new" title="Maglev (transport) (not yet started)">Maglev</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Medium-capacity_rail_transport_system&amp;action=edit&amp;redlink=1" class="new" title="Medium-capacity rail transport system (not yet started)">Medium-capacity rail transport system</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Monorail" title="Monorail">Monorail</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=People_mover&amp;action=edit&amp;redlink=1" class="new" title="People mover (not yet started)">People mover</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Personal_rapid_transit&amp;action=edit&amp;redlink=1" class="new" title="Personal rapid transit (not yet started)">Personal rapid transit</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Rapid_transit" title="Rapid transit">Rapid transit</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Regional_rail&amp;action=edit&amp;redlink=1" class="new" title="Regional rail (not yet started)">Regional rail</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Rubber-tyred_metro&amp;action=edit&amp;redlink=1" class="new" title="Rubber-tyred metro (not yet started)">Rubber-tyred metro</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Tram" title="Tram">Tram</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Tram-train&amp;action=edit&amp;redlink=1" class="new" title="Tram-train (not yet started)">Tram-train</a></div>
</td>
</tr>
<tr style="height:2px">
<td></td>
</tr>
<tr>
<th scope="row" class="navbox-group" style=";;"><a href="/wiki/Automobile" class="mw-redirect" title="Automobile">Automobile</a>/<a href="/wiki/Carriage" title="Carriage">carriage</a></th>
<td style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px;;;" class="navbox-list navbox-odd">
<div style="padding:0em 0.25em"><a href="/w/index.php?title=Auto_rickshaw&amp;action=edit&amp;redlink=1" class="new" title="Auto rickshaw (not yet started)">Auto rickshaw</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Carsharing&amp;action=edit&amp;redlink=1" class="new" title="Carsharing (not yet started)">Carsharing</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Cycle_rickshaw&amp;action=edit&amp;redlink=1" class="new" title="Cycle rickshaw (not yet started)">Cycle rickshaw</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Hackney_carriage&amp;action=edit&amp;redlink=1" class="new" title="Hackney carriage (not yet started)">Hackney carriage</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Horsecar&amp;action=edit&amp;redlink=1" class="new" title="Horsecar (not yet started)">Horsecar</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Horse-drawn_vehicle&amp;action=edit&amp;redlink=1" class="new" title="Horse-drawn vehicle (not yet started)">Horse-drawn vehicle</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Motorcycle_taxi&amp;action=edit&amp;redlink=1" class="new" title="Motorcycle taxi (not yet started)">Motorcycle taxi</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Rickshaw" title="Rickshaw">Rickshaw</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Share_taxi&amp;action=edit&amp;redlink=1" class="new" title="Share taxi (not yet started)">Share taxi</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Taxicab" class="mw-redirect" title="Taxicab">Taxicab</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Vehicle_for_hire&amp;action=edit&amp;redlink=1" class="new" title="Vehicle for hire (not yet started)">Vehicle for hire</a></div>
</td>
</tr>
<tr style="height:2px">
<td></td>
</tr>
<tr>
<th scope="row" class="navbox-group" style=";;"><a href="/w/index.php?title=Ship_transport&amp;action=edit&amp;redlink=1" class="new" title="Ship transport (not yet started)">Ship</a></th>
<td style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px;;;" class="navbox-list navbox-even">
<div style="padding:0em 0.25em"><a href="/w/index.php?title=Cable_ferry&amp;action=edit&amp;redlink=1" class="new" title="Cable ferry (not yet started)">Cable ferry</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Ferry" title="Ferry">Ferry</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Hovercraft" title="Hovercraft">Hovercraft</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Hydrofoil" title="Hydrofoil">Hydrofoil</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Water_taxi&amp;action=edit&amp;redlink=1" class="new" title="Water taxi (not yet started)">Water taxi</a></div>
</td>
</tr>
<tr style="height:2px">
<td></td>
</tr>
<tr>
<th scope="row" class="navbox-group" style=";;">Locations</th>
<td style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px;;;" class="navbox-list navbox-odd">
<div style="padding:0em 0.25em"><a href="/w/index.php?title=Bus_bulb&amp;action=edit&amp;redlink=1" class="new" title="Bus bulb (not yet started)">Bus bulb</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Bus_garage&amp;action=edit&amp;redlink=1" class="new" title="Bus garage (not yet started)">Bus garage</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Bus_lane&amp;action=edit&amp;redlink=1" class="new" title="Bus lane (not yet started)">Bus lane</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Bus_stand&amp;action=edit&amp;redlink=1" class="new" title="Bus stand (not yet started)">Bus stand</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Bus_station&amp;action=edit&amp;redlink=1" class="new" title="Bus station (not yet started)">Bus station</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Bus_stop&amp;action=edit&amp;redlink=1" class="new" title="Bus stop (not yet started)">Bus stop</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Bus_terminus&amp;action=edit&amp;redlink=1" class="new" title="Bus terminus (not yet started)">Bus terminus</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Bus_turnout&amp;action=edit&amp;redlink=1" class="new" title="Bus turnout (not yet started)">Bus turnout</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Transport_hub" title="Transport hub">Hub</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Interchange_station" class="mw-redirect" title="Interchange station">Interchange station</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Kassel_kerb&amp;action=edit&amp;redlink=1" class="new" title="Kassel kerb (not yet started)">Kassel kerb</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Layover&amp;action=edit&amp;redlink=1" class="new" title="Layover (not yet started)">Layover</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Metro_station&amp;action=edit&amp;redlink=1" class="new" title="Metro station (not yet started)">Metro station</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Park_and_ride&amp;action=edit&amp;redlink=1" class="new" title="Park and ride (not yet started)">Park and ride</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Queue_jump&amp;action=edit&amp;redlink=1" class="new" title="Queue jump (not yet started)">Queue jump</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Taxicab_stand&amp;action=edit&amp;redlink=1" class="new" title="Taxicab stand (not yet started)">Taxicab stand</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Train_station" title="Train station">Train station</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Tram_stop&amp;action=edit&amp;redlink=1" class="new" title="Tram stop (not yet started)">Tram stop</a></div>
</td>
</tr>
<tr style="height:2px">
<td></td>
</tr>
<tr>
<th scope="row" class="navbox-group" style=";;">Revenue/<a href="/w/index.php?title=Fare&amp;action=edit&amp;redlink=1" class="new" title="Fare (not yet started)">fares</a></th>
<td style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px;;;" class="navbox-list navbox-even">
<div style="padding:0em 0.25em"><a href="/w/index.php?title=Bus_advertising&amp;action=edit&amp;redlink=1" class="new" title="Bus advertising (not yet started)">Bus advertising</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Contract_of_carriage&amp;action=edit&amp;redlink=1" class="new" title="Contract of carriage (not yet started)">Contract of carriage</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Dead_mileage&amp;action=edit&amp;redlink=1" class="new" title="Dead mileage (not yet started)">Dead mileage</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Farebox_recovery_ratio&amp;action=edit&amp;redlink=1" class="new" title="Farebox recovery ratio (not yet started)">Farebox recovery ratio</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Free_travel_pass&amp;action=edit&amp;redlink=1" class="new" title="Free travel pass (not yet started)">Free travel pass</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Manual_fare_collection&amp;action=edit&amp;redlink=1" class="new" title="Manual fare collection (not yet started)">Manual fare collection</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Money_train&amp;action=edit&amp;redlink=1" class="new" title="Money train (not yet started)">Money train</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Proof-of-payment&amp;action=edit&amp;redlink=1" class="new" title="Proof-of-payment (not yet started)">Proof-of-payment</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/wiki/Ticket_machine" class="mw-redirect" title="Ticket machine">Ticket machine</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Transit_pass&amp;action=edit&amp;redlink=1" class="new" title="Transit pass (not yet started)">Transit pass</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Zero-fare_public_transport&amp;action=edit&amp;redlink=1" class="new" title="Zero-fare public transport (not yet started)">Zero-fare public transport</a></div>
</td>
</tr>
<tr style="height:2px">
<td></td>
</tr>
<tr>
<th scope="row" class="navbox-group" style=";;">Scheduling</th>
<td style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px;;;" class="navbox-list navbox-odd">
<div style="padding:0em 0.25em"><a href="/w/index.php?title=Public_transport_timetable&amp;action=edit&amp;redlink=1" class="new" title="Public transport timetable (not yet started)">Public transport timetable</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=On-time_performance&amp;action=edit&amp;redlink=1" class="new" title="On-time performance (not yet started)">On-time performance</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Vehicle_tracking_system&amp;action=edit&amp;redlink=1" class="new" title="Vehicle tracking system (not yet started)">Vehicle tracking system</a></div>
</td>
</tr>
<tr style="height:2px">
<td></td>
</tr>
<tr>
<th scope="row" class="navbox-group" style=";;">Other</th>
<td style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px;;;" class="navbox-list navbox-even">
<div style="padding:0em 0.25em"><a href="/w/index.php?title=Boarding_(transport)&amp;action=edit&amp;redlink=1" class="new" title="Boarding (transport) (not yet started)">Boarding</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Hail_and_ride&amp;action=edit&amp;redlink=1" class="new" title="Hail and ride (not yet started)">Hail and ride</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Headsign&amp;action=edit&amp;redlink=1" class="new" title="Headsign (not yet started)">Headsign</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Request_stop&amp;action=edit&amp;redlink=1" class="new" title="Request stop (not yet started)">Request stop</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Rollsign&amp;action=edit&amp;redlink=1" class="new" title="Rollsign (not yet started)">Rollsign</a>&#160;<span style="font-weight:bold;">·</span>  <a href="/w/index.php?title=Transit_police&amp;action=edit&amp;redlink=1" class="new" title="Transit police (not yet started)">Transit police</a></div>
</td>
</tr>
</table>
</td>
</tr>
</table>


EOD;
        //THIS IS FOR TEXT MULTI LINE

        //preg_match_all('/^[a-zA-Z]([\w -]*[a-zA-Z])?/im', $str, $matches, PREG_OFFSET_CAPTURE);

        // <a href="\/brand\/[a-zA-Zü]+([\w -_]*[a-zA-Z])?.php">

        preg_match_all('/(?<=(\(not yet started\)">))[a-zA-Zü]+([\w -]*[a-zA-Z])(?=(<\/a>))/im', $str, $matches, PREG_OFFSET_CAPTURE);

        $matches = $matches[0];

        foreach ($matches as $k => $v) {
            # code...
            array_push($newMatches, $v[0]);
        }

        foreach ($newMatches as $k => $v) {
            # code...
            $newSQL = $newSQL."INSERT INTO cars ( parent_id, name, slug) VALUES (4, '$v', '".sluggify($v). "'); ";
        }

        return $newSQL;



        
        

    }