<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Building;

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
    public function index(Tag $tl, Building $bl)
    {

        $b4 = $bl->where('status', 1)->where('kind', 0)->inRandomOrder()->paginate(4, ['*'], 'b4');

        $demande = Building::where('status', 1)->where('kind', 1)->inRandomOrder()->paginate(4, ['*'], 'demande');

        $t4 = $tl->inRandomOrder()->take(100)->get();

        return view('welcome', compact('b4', 't4', 'demande') );
        

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

<div class="mw-category"><div class="mw-category-group"><h3>A</h3>
<ul><li><a href="/wiki/Mahindra_Armada" title="62Armada">62Armada</a></li>
<li><a href="/wiki/Mahindra_Axe" title="62Axe">62Axe</a></li></ul></div><div class="mw-category-group"><h3>B</h3>
<ul><li><a href="/wiki/Mahindra_Bolero" title="62Bolero">62Bolero</a></li>
<li><a href="/wiki/Mahindra_Bolero_Camper" title="62Bolero Camper">62Bolero Camper</a></li></ul></div><div class="mw-category-group"><h3>G</h3>
<ul><li><a href="/wiki/Mahindra_Genio" title="62Genio">62Genio</a></li></ul></div><div class="mw-category-group"><h3>L</h3>
<ul><li><a href="/wiki/Mahindra_Legend" title="62Legend">62Legend</a></li></ul></div><div class="mw-category-group"><h3>M</h3>
<ul><li><a href="/wiki/Mahindra_KUV100" title="62KUV100">62KUV100</a></li>
<li><a href="/wiki/Mahindra_Maxx" title="62Maxx">62Maxx</a></li>
<li><a href="/wiki/Mahindra_Maxximo" title="62Maxximo">62Maxximo</a></li>
<li><a href="/wiki/Mahindra_Mojo" title="62Mojo">62Mojo</a></li>
<li><a href="/wiki/Mahindra_TUV300" title="62TUV300">62TUV300</a></li>
<li><a href="/wiki/Mahindra_Major" title="62Major">62Major</a></li>
<li><a href="/wiki/Mahindra_Mine_Protected_Vehicle" title="62Mine Protected Vehicle">62Mine Protected Vehicle</a></li></ul></div><div class="mw-category-group"><h3>Q</h3>
<ul><li><a href="/wiki/Mahindra_Quanto" title="62Quanto">62Quanto</a></li></ul></div><div class="mw-category-group"><h3>S</h3>
<ul><li><a href="/wiki/Mahindra_Scorpio" title="62Scorpio">62Scorpio</a></li>
<li><a href="/wiki/Mahindra_Scorpio_Getaway" title="62Scorpio Getaway">62Scorpio Getaway</a></li></ul></div><div class="mw-category-group"><h3>T</h3>
<ul><li><a href="/wiki/Mahindra_Thar" title="62Thar">62Thar</a></li></ul></div><div class="mw-category-group"><h3>V</h3>
<ul><li><span class="redirect-in-category"><a href="/wiki/Mahindra_Verito" class="mw-redirect" title="62Verito">62Verito</a></span></li></ul></div><div class="mw-category-group"><h3>X</h3>
<ul><li><a href="/wiki/Mahindra_XUV500" title="62XUV500">62XUV500</a></li>
<li><a href="/wiki/Mahindra_Xylo" title="62Xylo">62Xylo</a></li></ul></div></div>


EOD;


        //THIS IS FOR TEXT MULTI LINE

        //preg_match_all('/^[a-zA-Z]([\w -]*[a-zA-Z])?/im', $str, $matches, PREG_OFFSET_CAPTURE);

        // <a href="\/brand\/[a-zA-Zü]+([\w -_]*[a-zA-Z])?.php">

        preg_match_all('/(?<=( title="))[^edit][\'\(\)\w-a-zA-Z0-9@:%._\+~#=\/üàáâãäåéëαâ ß Á á À à Å å Ä ä Æ æ Ç ç É é È è Ê ê Í í Ì ì Î î Ñ ñ Ó ó Òò\\Ô ô Ö ö Ø ø Ú ú Ù ù Ü ü Ž žâ áåãàCcḈḉĆćĈĉĊċČčÇçï]+(?=(">))/im', $str, $matches, PREG_OFFSET_CAPTURE);

        //preg_match_all('/(?<=(">))[a-zA-Zü]+([\w -]*[a-zA-Z0-9])(?=(<\/a>))/im', $str, $matches, PREG_OFFSET_CAPTURE);

        $matches = $matches[0];

        $ids = array();
        

        $counter = 0;

       foreach ($matches as $k => $v) {

            # code...
            /*
            if( $counter%2 == 0 ){

                array_push($newMatches, $v[0]);

            }
            */
            //$counter++;
            array_push($newMatches, $v[0]);

            //array_push($ids, $counter++);

        }
        

        foreach ($newMatches as $k => $v) {
            # code...
            //$newSQL = $newSQL."DB::table('areas')->insert(['id' => ". $ids[ $k ] .", 'parent_id' => 0, 'name' => '$v', 'slug' => '".sluggify($v). "']);";
            $newSQL = $newSQL."DB::table('cars')->insert(['parent_id' => 63, 'name' => '$v', 'slug' => '".sluggify($v). "']);";
        }

        return $newSQL;
        
            

}


    

    
}
