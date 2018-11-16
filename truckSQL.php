<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Building;

use App\Thing;

use App\Tag;

use Rss;


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


<table class="wikitable sortable">
<tr>
<th>Company</th>
<th>Pickup Truck</th>
<th class="unsortable">Image</th>
<th>Class</th>
<th>regions sold</th>
</tr>
<tr>
<td><a href="/wiki/Agrale" title="Agrale">Agrale</a></td>
<td><a href="/wiki/Agrale_Marru%C3%A1" title="Agrale Marruá">Agrale Marruá</a></td>
<td><a href="/wiki/File:Marr%C3%BAa-EJE.jpg" class="image"><img alt="Marrúa-EJE.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Marr%C3%BAa-EJE.jpg/120px-Marr%C3%BAa-EJE.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Marr%C3%BAa-EJE.jpg/180px-Marr%C3%BAa-EJE.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Marr%C3%BAa-EJE.jpg/240px-Marr%C3%BAa-EJE.jpg 2x" data-file-width="640" data-file-height="480" /></a></td>
<td>Compact</td>
<td>Brazil</td>
</tr>
<tr>
<td><a href="/wiki/AM_General" title="AM General">AM General</a></td>
<td><a href="/w/index.php?title=AM_General_Humvee_C-Series&amp;action=edit&amp;redlink=1" class="new" title="AM General Humvee C-Series (page does not exist)">AM General Humvee C-Series</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Fullsize</td>
<td>USA, Canada</td>
</tr>
<tr>
<td><a href="/wiki/AvtoVAZ" title="AvtoVAZ">AvtoVAZ</a></td>
<td><a href="/wiki/Lada_4x4#LWB_Nivas" class="mw-redirect" title="Lada 4x4">VAZ-2329</a></td>
<td><a href="/wiki/File:VAZ-2329-1_pickup.jpg" class="image"><img alt="VAZ-2329-1 pickup.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ea/VAZ-2329-1_pickup.jpg/120px-VAZ-2329-1_pickup.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ea/VAZ-2329-1_pickup.jpg/180px-VAZ-2329-1_pickup.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ea/VAZ-2329-1_pickup.jpg/240px-VAZ-2329-1_pickup.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>Compact</td>
<td>Russia</td>
</tr>
<tr>
<td><a href="/wiki/Beijing_Automobile_Works" class="mw-redirect" title="Beijing Automobile Works">BAW</a></td>
<td><a href="/wiki/Beijing_Automobile_Works" class="mw-redirect" title="Beijing Automobile Works">BAW Luling</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Compact</td>
<td>China</td>
</tr>
<tr>
<td><a href="/wiki/Bremach" title="Bremach">Bremach</a></td>
<td><a href="/wiki/Bremach_T-Rex" class="mw-redirect" title="Bremach T-Rex">Bremach T-Rex</a></td>
<td><a href="/wiki/File:Bremach_Trex.jpg" class="image"><img alt="Bremach Trex.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Bremach_Trex.jpg/120px-Bremach_Trex.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Bremach_Trex.jpg/180px-Bremach_Trex.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Bremach_Trex.jpg/240px-Bremach_Trex.jpg 2x" data-file-width="800" data-file-height="533" /></a></td>
<td>Electric Heavy Duty</td>
<td>Europe, Russia, United States, Canada</td>
</tr>
<tr>
<td><a href="/wiki/Changan_Automobile" title="Changan Automobile">Chang'an</a></td>
<td><a href="/wiki/Changan_Automobile" title="Changan Automobile">Chang'an Star Truck</a></td>
<td><a href="/wiki/File:Chang%27an_fish_carrier_at_a_restaurant_in_Miyun_(20150215120552).JPG" class="image"><img alt="Chang'an fish carrier at a restaurant in Miyun (20150215120552).JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/62/Chang%27an_fish_carrier_at_a_restaurant_in_Miyun_%2820150215120552%29.JPG/120px-Chang%27an_fish_carrier_at_a_restaurant_in_Miyun_%2820150215120552%29.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/62/Chang%27an_fish_carrier_at_a_restaurant_in_Miyun_%2820150215120552%29.JPG/180px-Chang%27an_fish_carrier_at_a_restaurant_in_Miyun_%2820150215120552%29.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/62/Chang%27an_fish_carrier_at_a_restaurant_in_Miyun_%2820150215120552%29.JPG/240px-Chang%27an_fish_carrier_at_a_restaurant_in_Miyun_%2820150215120552%29.JPG 2x" data-file-width="2816" data-file-height="1880" /></a></td>
<td>mini</td>
<td>China, Southeast Asia, South America, Africa</td>
</tr>
<tr>
<td><a href="/wiki/Chevrolet" title="Chevrolet">Chevrolet</a></td>
<td><a href="/wiki/Chevrolet_Colorado" title="Chevrolet Colorado">Chevrolet Colorado/S-10</a></td>
<td><a href="/wiki/File:Brazilian_2012_All-New_Chevy_S10.jpg" class="image"><img alt="Brazilian 2012 All-New Chevy S10.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Brazilian_2012_All-New_Chevy_S10.jpg/120px-Brazilian_2012_All-New_Chevy_S10.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Brazilian_2012_All-New_Chevy_S10.jpg/180px-Brazilian_2012_All-New_Chevy_S10.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Brazilian_2012_All-New_Chevy_S10.jpg/240px-Brazilian_2012_All-New_Chevy_S10.jpg 2x" data-file-width="2048" data-file-height="1536" /></a></td>
<td>Compact</td>
<td>USA, Canada, Mexico, Brazil, Thailand</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Isuzu_D-Max" title="Isuzu D-Max">Chevrolet D-Max</a></td>
<td><a href="/wiki/File:Dmax_2011_ls_3.0_td.jpg" class="image"><img alt="Dmax 2011 ls 3.0 td.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Dmax_2011_ls_3.0_td.jpg/120px-Dmax_2011_ls_3.0_td.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Dmax_2011_ls_3.0_td.jpg/180px-Dmax_2011_ls_3.0_td.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Dmax_2011_ls_3.0_td.jpg/240px-Dmax_2011_ls_3.0_td.jpg 2x" data-file-width="1500" data-file-height="1125" /></a></td>
<td>Compact</td>
<td>Chile, Colombia</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_Silverado" title="Chevrolet Silverado">Chevrolet LSSV (Milverado)</a></td>
<td><a href="/wiki/File:MP_MilCOTS.jpg" class="image"><img alt="MP MilCOTS.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c2/MP_MilCOTS.jpg/120px-MP_MilCOTS.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c2/MP_MilCOTS.jpg/180px-MP_MilCOTS.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c2/MP_MilCOTS.jpg/240px-MP_MilCOTS.jpg 2x" data-file-width="640" data-file-height="480" /></a></td>
<td>Fullsize</td>
<td>United States, Canada (Military Only)</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_Silverado" title="Chevrolet Silverado">Chevrolet Silverado 1500</a></td>
<td><a href="/wiki/File:%2716_Chevrolet_Silverado_Crew_Cab_(Carrefour_Angrignon).jpg" class="image"><img alt="'16 Chevrolet Silverado Crew Cab (Carrefour Angrignon).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/41/%2716_Chevrolet_Silverado_Crew_Cab_%28Carrefour_Angrignon%29.jpg/120px-%2716_Chevrolet_Silverado_Crew_Cab_%28Carrefour_Angrignon%29.jpg" width="120" height="79" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/41/%2716_Chevrolet_Silverado_Crew_Cab_%28Carrefour_Angrignon%29.jpg/180px-%2716_Chevrolet_Silverado_Crew_Cab_%28Carrefour_Angrignon%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/41/%2716_Chevrolet_Silverado_Crew_Cab_%28Carrefour_Angrignon%29.jpg/240px-%2716_Chevrolet_Silverado_Crew_Cab_%28Carrefour_Angrignon%29.jpg 2x" data-file-width="2385" data-file-height="1565" /></a></td>
<td>Fullsize</td>
<td>North America, Middle East, Egypt</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_Silverado" title="Chevrolet Silverado">Chevrolet Silverado 1500 Hybrid</a></td>
<td><a href="/wiki/File:Chevrolet_Silverado_Hybrid--DC.jpg" class="image"><img alt="Chevrolet Silverado Hybrid--DC.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/da/Chevrolet_Silverado_Hybrid--DC.jpg/120px-Chevrolet_Silverado_Hybrid--DC.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/da/Chevrolet_Silverado_Hybrid--DC.jpg/180px-Chevrolet_Silverado_Hybrid--DC.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/da/Chevrolet_Silverado_Hybrid--DC.jpg/240px-Chevrolet_Silverado_Hybrid--DC.jpg 2x" data-file-width="2885" data-file-height="1818" /></a></td>
<td>Hybrid Fullsize</td>
<td>North America, Middle East, Egypt</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_Silverado" title="Chevrolet Silverado">Chevrolet Silverado 2500 HD</a></td>
<td><a href="/wiki/File:Chevrolet_Silverado_2500HD_Regular_Cab_Love%27s.jpg" class="image"><img alt="Chevrolet Silverado 2500HD Regular Cab Love's.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/de/Chevrolet_Silverado_2500HD_Regular_Cab_Love%27s.jpg/120px-Chevrolet_Silverado_2500HD_Regular_Cab_Love%27s.jpg" width="120" height="67" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/de/Chevrolet_Silverado_2500HD_Regular_Cab_Love%27s.jpg/180px-Chevrolet_Silverado_2500HD_Regular_Cab_Love%27s.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/de/Chevrolet_Silverado_2500HD_Regular_Cab_Love%27s.jpg/240px-Chevrolet_Silverado_2500HD_Regular_Cab_Love%27s.jpg 2x" data-file-width="2069" data-file-height="1147" /></a></td>
<td>Heavy Duty</td>
<td>USA, Canada, Mexico</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_Silverado" title="Chevrolet Silverado">Chevrolet Silverado 3500 HD</a></td>
<td><a href="/wiki/File:2015_chevrolet_silverado_3500_hd_incomplete_wt_observe.JPG" class="image"><img alt="2015 chevrolet silverado 3500 hd incomplete wt observe.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c9/2015_chevrolet_silverado_3500_hd_incomplete_wt_observe.JPG/120px-2015_chevrolet_silverado_3500_hd_incomplete_wt_observe.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c9/2015_chevrolet_silverado_3500_hd_incomplete_wt_observe.JPG/180px-2015_chevrolet_silverado_3500_hd_incomplete_wt_observe.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c9/2015_chevrolet_silverado_3500_hd_incomplete_wt_observe.JPG/240px-2015_chevrolet_silverado_3500_hd_incomplete_wt_observe.JPG 2x" data-file-width="3072" data-file-height="2304" /></a></td>
<td>Heavy Duty</td>
<td>United States of America, Canada, Mexico</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_Montana" title="Chevrolet Montana">Chevrolet Montana</a></td>
<td><a href="/wiki/File:2011_montana_1.8_sport.jpg" class="image"><img alt="2011 montana 1.8 sport.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/2011_montana_1.8_sport.jpg/120px-2011_montana_1.8_sport.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/2011_montana_1.8_sport.jpg/180px-2011_montana_1.8_sport.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/38/2011_montana_1.8_sport.jpg/240px-2011_montana_1.8_sport.jpg 2x" data-file-width="1500" data-file-height="1125" /></a></td>
<td>Coupe</td>
<td>Latin America, South Africa</td>
</tr>
<tr>
<td><a href="/wiki/Suzuki_Carry" title="Suzuki Carry">Damas/Labo</a></td>
<td><a href="/wiki/Suzuki_Carry" title="Suzuki Carry">Labo</a></td>
<td><a href="/wiki/File:Daewoo_Labo_(front_view).JPG" class="image"><img alt="Daewoo Labo (front view).JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Daewoo_Labo_%28front_view%29.JPG/120px-Daewoo_Labo_%28front_view%29.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Daewoo_Labo_%28front_view%29.JPG/180px-Daewoo_Labo_%28front_view%29.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Daewoo_Labo_%28front_view%29.JPG/240px-Daewoo_Labo_%28front_view%29.JPG 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>mini</td>
<td>South Korea</td>
</tr>
<tr>
<td><a href="/wiki/Daihatsu" title="Daihatsu">Daihatsu</a></td>
<td><a href="/wiki/Daihatsu_Hijet" title="Daihatsu Hijet">Daihatsu Hijet</a></td>
<td><a href="/wiki/File:DaihatsuHijet123.jpg" class="image"><img alt="DaihatsuHijet123.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/15/DaihatsuHijet123.jpg/120px-DaihatsuHijet123.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/15/DaihatsuHijet123.jpg/180px-DaihatsuHijet123.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/15/DaihatsuHijet123.jpg/240px-DaihatsuHijet123.jpg 2x" data-file-width="600" data-file-height="450" /></a></td>
<td>mini</td>
<td>Asia, Africa, South America</td>
</tr>
<tr>
<td><a href="/wiki/Dongfeng_Motor" title="Dongfeng Motor">Dongfeng</a></td>
<td><a href="/wiki/Dongfeng_Motor" title="Dongfeng Motor">Dongfeng Rich</a></td>
<td><a href="/wiki/File:Dongfeng_Rich_China_2012-06-02.JPG" class="image"><img alt="Dongfeng Rich China 2012-06-02.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Dongfeng_Rich_China_2012-06-02.JPG/120px-Dongfeng_Rich_China_2012-06-02.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Dongfeng_Rich_China_2012-06-02.JPG/180px-Dongfeng_Rich_China_2012-06-02.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/65/Dongfeng_Rich_China_2012-06-02.JPG/240px-Dongfeng_Rich_China_2012-06-02.JPG 2x" data-file-width="1300" data-file-height="975" /></a></td>
<td>Compact</td>
<td>Chile, Africa</td>
</tr>
<tr>
<td><a href="/wiki/Fiat_Professional" title="Fiat Professional">Fiat Professional</a></td>
<td><a href="/wiki/Mitsubishi_L200" class="mw-redirect" title="Mitsubishi L200">Fiat Fullback</a></td>
<td><a href="/wiki/File:FIAT_FULLBACK_Pozna%C5%84_Motor_Show_2016.jpg" class="image"><img alt="FIAT FULLBACK Poznań Motor Show 2016.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/df/FIAT_FULLBACK_Pozna%C5%84_Motor_Show_2016.jpg/120px-FIAT_FULLBACK_Pozna%C5%84_Motor_Show_2016.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/df/FIAT_FULLBACK_Pozna%C5%84_Motor_Show_2016.jpg/180px-FIAT_FULLBACK_Pozna%C5%84_Motor_Show_2016.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/df/FIAT_FULLBACK_Pozna%C5%84_Motor_Show_2016.jpg/240px-FIAT_FULLBACK_Pozna%C5%84_Motor_Show_2016.jpg 2x" data-file-width="1675" data-file-height="1117" /></a></td>
<td>Midsize</td>
<td>Middle East</td>
</tr>
<tr>
<td>Fiat Professional</td>
<td><a href="/wiki/Fiat_Strada" title="Fiat Strada">Fiat Strada</a></td>
<td><a href="/wiki/File:Fiat_Strada_Adventure_1.3_JTD_Multijet_Lumberjack_(IV)_%E2%80%93_Frontansicht,_5._Oktober_2013,_M%C3%BCnster.jpg" class="image"><img alt="Fiat Strada Adventure 1.3 JTD Multijet Lumberjack (IV) – Frontansicht, 5. Oktober 2013, Münster.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/45/Fiat_Strada_Adventure_1.3_JTD_Multijet_Lumberjack_%28IV%29_%E2%80%93_Frontansicht%2C_5._Oktober_2013%2C_M%C3%BCnster.jpg/120px-Fiat_Strada_Adventure_1.3_JTD_Multijet_Lumberjack_%28IV%29_%E2%80%93_Frontansicht%2C_5._Oktober_2013%2C_M%C3%BCnster.jpg" width="120" height="62" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/45/Fiat_Strada_Adventure_1.3_JTD_Multijet_Lumberjack_%28IV%29_%E2%80%93_Frontansicht%2C_5._Oktober_2013%2C_M%C3%BCnster.jpg/180px-Fiat_Strada_Adventure_1.3_JTD_Multijet_Lumberjack_%28IV%29_%E2%80%93_Frontansicht%2C_5._Oktober_2013%2C_M%C3%BCnster.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/45/Fiat_Strada_Adventure_1.3_JTD_Multijet_Lumberjack_%28IV%29_%E2%80%93_Frontansicht%2C_5._Oktober_2013%2C_M%C3%BCnster.jpg/240px-Fiat_Strada_Adventure_1.3_JTD_Multijet_Lumberjack_%28IV%29_%E2%80%93_Frontansicht%2C_5._Oktober_2013%2C_M%C3%BCnster.jpg 2x" data-file-width="3410" data-file-height="1770" /></a></td>
<td>Coupe</td>
<td>Europe, South America, South Africa</td>
</tr>
<tr>
<td>Fiat Professional</td>
<td><a href="/wiki/Fiat_Toro" title="Fiat Toro">Fiat Toro</a></td>
<td><a href="/wiki/File:Fiat_Toro_Volcano.jpg" class="image"><img alt="Fiat Toro Volcano.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Fiat_Toro_Volcano.jpg/120px-Fiat_Toro_Volcano.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Fiat_Toro_Volcano.jpg/180px-Fiat_Toro_Volcano.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Fiat_Toro_Volcano.jpg/240px-Fiat_Toro_Volcano.jpg 2x" data-file-width="2048" data-file-height="1536" /></a></td>
<td>Midsize</td>
<td>Europe</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_Ranger_(T6)" title="Ford Ranger (T6)">Ford Ranger</a></td>
<td><a href="/wiki/File:2015_Ford_Ranger_XLT_Double_Cab_(New_Zealand).jpg" class="image"><img alt="2015 Ford Ranger XLT Double Cab (New Zealand).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/57/2015_Ford_Ranger_XLT_Double_Cab_%28New_Zealand%29.jpg/120px-2015_Ford_Ranger_XLT_Double_Cab_%28New_Zealand%29.jpg" width="120" height="66" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/57/2015_Ford_Ranger_XLT_Double_Cab_%28New_Zealand%29.jpg/180px-2015_Ford_Ranger_XLT_Double_Cab_%28New_Zealand%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/57/2015_Ford_Ranger_XLT_Double_Cab_%28New_Zealand%29.jpg/240px-2015_Ford_Ranger_XLT_Double_Cab_%28New_Zealand%29.jpg 2x" data-file-width="2809" data-file-height="1550" /></a></td>
<td>Midsize</td>
<td>Worldwide, except United States, Canada, South Korea, Japan, and Singapore</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_F-Series_thirteenth_generation" class="mw-redirect" title="Ford F-Series thirteenth generation">Ford F-150</a></td>
<td><a href="/wiki/File:2015_Ford_F-150_Pickup_Truck.jpg" class="image"><img alt="2015 Ford F-150 Pickup Truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/2015_Ford_F-150_Pickup_Truck.jpg/120px-2015_Ford_F-150_Pickup_Truck.jpg" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/2015_Ford_F-150_Pickup_Truck.jpg/180px-2015_Ford_F-150_Pickup_Truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9a/2015_Ford_F-150_Pickup_Truck.jpg/240px-2015_Ford_F-150_Pickup_Truck.jpg 2x" data-file-width="4128" data-file-height="2322" /></a></td>
<td>Luxury/Fullsize</td>
<td>North America(except Trinidad and Tobago, Saint Kitts and Nevis), Suriname, Ecuador, Peru, Chile, the Middle East, Iceland, Netherlands( Aruba, Curaçao, and Sint Maarten), United Kingdom(Cayman Islands)</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_Super_Duty" title="Ford Super Duty">Ford F-250</a></td>
<td><a href="/wiki/File:2017_Ford_Super_Duty.jpg" class="image"><img alt="2017 Ford Super Duty.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/58/2017_Ford_Super_Duty.jpg/120px-2017_Ford_Super_Duty.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/58/2017_Ford_Super_Duty.jpg/180px-2017_Ford_Super_Duty.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/58/2017_Ford_Super_Duty.jpg/240px-2017_Ford_Super_Duty.jpg 2x" data-file-width="4701" data-file-height="3134" /></a></td>
<td>Luxury/Heavy Duty</td>
<td>USA, Canada, Mexico, Venezuela, Middle East</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_Super_Duty" title="Ford Super Duty">Ford F-350</a></td>
<td><a href="/wiki/File:2011_Ford_F-350_--_2010_DC.jpg" class="image"><img alt="2011 Ford F-350 -- 2010 DC.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2e/2011_Ford_F-350_--_2010_DC.jpg/120px-2011_Ford_F-350_--_2010_DC.jpg" width="120" height="84" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2e/2011_Ford_F-350_--_2010_DC.jpg/180px-2011_Ford_F-350_--_2010_DC.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2e/2011_Ford_F-350_--_2010_DC.jpg/240px-2011_Ford_F-350_--_2010_DC.jpg 2x" data-file-width="2864" data-file-height="2012" /></a></td>
<td>Luxury/Heavy Duty</td>
<td>USA, Canada, Mexico, Venezuela, Iceland, Middle East</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_Super_Duty" title="Ford Super Duty">Ford F-450</a></td>
<td><a href="/wiki/File:Ford_F-450_Super_Duty_Crew_Cab_(Sterling_Ford).jpg" class="image"><img alt="Ford F-450 Super Duty Crew Cab (Sterling Ford).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Ford_F-450_Super_Duty_Crew_Cab_%28Sterling_Ford%29.jpg/120px-Ford_F-450_Super_Duty_Crew_Cab_%28Sterling_Ford%29.jpg" width="120" height="67" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Ford_F-450_Super_Duty_Crew_Cab_%28Sterling_Ford%29.jpg/180px-Ford_F-450_Super_Duty_Crew_Cab_%28Sterling_Ford%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Ford_F-450_Super_Duty_Crew_Cab_%28Sterling_Ford%29.jpg/240px-Ford_F-450_Super_Duty_Crew_Cab_%28Sterling_Ford%29.jpg 2x" data-file-width="2257" data-file-height="1256" /></a></td>
<td>Luxury/Heavy Duty</td>
<td>USA, Canada, Mexico, Middle East</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_Ranger" title="Ford Ranger">Ford Ranger</a></td>
<td><a href="/wiki/File:2015_Ford_Ranger_XLT_Double_Cab_(New_Zealand).jpg" class="image"><img alt="2015 Ford Ranger XLT Double Cab (New Zealand).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/57/2015_Ford_Ranger_XLT_Double_Cab_%28New_Zealand%29.jpg/120px-2015_Ford_Ranger_XLT_Double_Cab_%28New_Zealand%29.jpg" width="120" height="66" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/57/2015_Ford_Ranger_XLT_Double_Cab_%28New_Zealand%29.jpg/180px-2015_Ford_Ranger_XLT_Double_Cab_%28New_Zealand%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/57/2015_Ford_Ranger_XLT_Double_Cab_%28New_Zealand%29.jpg/240px-2015_Ford_Ranger_XLT_Double_Cab_%28New_Zealand%29.jpg 2x" data-file-width="2809" data-file-height="1550" /></a></td>
<td>Midsize</td>
<td>Australia, New Zealand</td>
</tr>
<tr>
<td><a href="/wiki/Foton_Motor" title="Foton Motor">Foton</a></td>
<td>Foton SUP</td>
<td><a href="/wiki/File:Foton_SUP_China_2015-04-10.jpg" class="image"><img alt="Foton SUP China 2015-04-10.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Foton_SUP_China_2015-04-10.jpg/120px-Foton_SUP_China_2015-04-10.jpg" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Foton_SUP_China_2015-04-10.jpg/180px-Foton_SUP_China_2015-04-10.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Foton_SUP_China_2015-04-10.jpg/240px-Foton_SUP_China_2015-04-10.jpg 2x" data-file-width="1300" data-file-height="733" /></a></td>
<td>Compact</td>
<td>China</td>
</tr>
<tr>
<td>Foton</td>
<td><a href="/wiki/Foton_Tunland" title="Foton Tunland">Foton Tunland</a></td>
<td><a href="/wiki/File:2013_Foton_Tunland_(14285369303).jpg" class="image"><img alt="2013 Foton Tunland (14285369303).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/13/2013_Foton_Tunland_%2814285369303%29.jpg/120px-2013_Foton_Tunland_%2814285369303%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/13/2013_Foton_Tunland_%2814285369303%29.jpg/180px-2013_Foton_Tunland_%2814285369303%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/13/2013_Foton_Tunland_%2814285369303%29.jpg/240px-2013_Foton_Tunland_%2814285369303%29.jpg 2x" data-file-width="640" data-file-height="480" /></a></td>
<td>Compact</td>
<td>China, Japan, Australia, South Africa</td>
</tr>
<tr>
<td><a href="/wiki/GMC_(automobile)" title="GMC (automobile)">GMC</a></td>
<td><a href="/wiki/Chevrolet_Colorado" title="Chevrolet Colorado">GMC Canyon</a></td>
<td><a href="/wiki/File:%2715_GMC_Canyon_(MIAS_%2715).JPG" class="image"><img alt="'15 GMC Canyon (MIAS '15).JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e4/%2715_GMC_Canyon_%28MIAS_%2715%29.JPG/120px-%2715_GMC_Canyon_%28MIAS_%2715%29.JPG" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e4/%2715_GMC_Canyon_%28MIAS_%2715%29.JPG/180px-%2715_GMC_Canyon_%28MIAS_%2715%29.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e4/%2715_GMC_Canyon_%28MIAS_%2715%29.JPG/240px-%2715_GMC_Canyon_%28MIAS_%2715%29.JPG 2x" data-file-width="949" data-file-height="603" /></a></td>
<td>Compact</td>
<td>USA, Canada, Mexico</td>
</tr>
<tr>
<td>GMC</td>
<td><a href="/wiki/Chevrolet_Silverado" title="Chevrolet Silverado">GMC Sierra 1500</a></td>
<td><a href="/wiki/File:%2716_GMC_Sierra_1500_Crew_Cab.jpg" class="image"><img alt="'16 GMC Sierra 1500 Crew Cab.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/ff/%2716_GMC_Sierra_1500_Crew_Cab.jpg/120px-%2716_GMC_Sierra_1500_Crew_Cab.jpg" width="120" height="63" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/ff/%2716_GMC_Sierra_1500_Crew_Cab.jpg/180px-%2716_GMC_Sierra_1500_Crew_Cab.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/ff/%2716_GMC_Sierra_1500_Crew_Cab.jpg/240px-%2716_GMC_Sierra_1500_Crew_Cab.jpg 2x" data-file-width="2700" data-file-height="1412" /></a></td>
<td>Luxury/Fullsize</td>
<td>North America, Middle East</td>
</tr>
<tr>
<td>GMC</td>
<td><a href="/wiki/Chevrolet_Silverado" title="Chevrolet Silverado">GMC Sierra 2500</a></td>
<td><a href="/wiki/File:%2714_GMC_Sierra_2500HD_(MIAS_%2714).JPG" class="image"><img alt="'14 GMC Sierra 2500HD (MIAS '14).JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/97/%2714_GMC_Sierra_2500HD_%28MIAS_%2714%29.JPG/120px-%2714_GMC_Sierra_2500HD_%28MIAS_%2714%29.JPG" width="120" height="72" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/97/%2714_GMC_Sierra_2500HD_%28MIAS_%2714%29.JPG/180px-%2714_GMC_Sierra_2500HD_%28MIAS_%2714%29.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/97/%2714_GMC_Sierra_2500HD_%28MIAS_%2714%29.JPG/240px-%2714_GMC_Sierra_2500HD_%28MIAS_%2714%29.JPG 2x" data-file-width="2805" data-file-height="1681" /></a></td>
<td>Luxury/Heavy Duty</td>
<td>USA, Canada, Mexico</td>
</tr>
<tr>
<td>GMC</td>
<td><a href="/wiki/Chevrolet_Silverado" title="Chevrolet Silverado">GMC Sierra 3500</a></td>
<td><a href="/wiki/File:GMC_Sierra_Denali_HD_GMTK2XX_Double_Cab.jpg" class="image"><img alt="GMC Sierra Denali HD GMTK2XX Double Cab.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/GMC_Sierra_Denali_HD_GMTK2XX_Double_Cab.jpg/120px-GMC_Sierra_Denali_HD_GMTK2XX_Double_Cab.jpg" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/GMC_Sierra_Denali_HD_GMTK2XX_Double_Cab.jpg/180px-GMC_Sierra_Denali_HD_GMTK2XX_Double_Cab.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/00/GMC_Sierra_Denali_HD_GMTK2XX_Double_Cab.jpg/240px-GMC_Sierra_Denali_HD_GMTK2XX_Double_Cab.jpg 2x" data-file-width="1830" data-file-height="1190" /></a></td>
<td>Luxury/Heavy Duty</td>
<td>USA, Canada, Mexico</td>
</tr>
<tr>
<td>GMC</td>
<td><a href="/wiki/Chevrolet_Silverado" title="Chevrolet Silverado">GMC Sierra Hybrid</a></td>
<td><a href="/wiki/File:%2709_GMC_Sierra_Hybrid_(MIAS).JPG" class="image"><img alt="'09 GMC Sierra Hybrid (MIAS).JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cc/%2709_GMC_Sierra_Hybrid_%28MIAS%29.JPG/120px-%2709_GMC_Sierra_Hybrid_%28MIAS%29.JPG" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cc/%2709_GMC_Sierra_Hybrid_%28MIAS%29.JPG/180px-%2709_GMC_Sierra_Hybrid_%28MIAS%29.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cc/%2709_GMC_Sierra_Hybrid_%28MIAS%29.JPG/240px-%2709_GMC_Sierra_Hybrid_%28MIAS%29.JPG 2x" data-file-width="2350" data-file-height="1530" /></a></td>
<td>Luxury/Fullsize Hybrid</td>
<td>North America</td>
</tr>
<tr>
<td><a href="/wiki/Gonow" title="Gonow">Gonow</a></td>
<td><a href="/wiki/Gonow" title="Gonow">Gonow GA200</a></td>
<td><a href="/wiki/File:Gonow_GA200_(Troy)_front_quarter.jpg" class="image"><img alt="Gonow GA200 (Troy) front quarter.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/de/Gonow_GA200_%28Troy%29_front_quarter.jpg/120px-Gonow_GA200_%28Troy%29_front_quarter.jpg" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/de/Gonow_GA200_%28Troy%29_front_quarter.jpg/180px-Gonow_GA200_%28Troy%29_front_quarter.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/de/Gonow_GA200_%28Troy%29_front_quarter.jpg/240px-Gonow_GA200_%28Troy%29_front_quarter.jpg 2x" data-file-width="2460" data-file-height="1692" /></a></td>
<td>Compact</td>
<td>China</td>
</tr>
<tr>
<td><a href="/wiki/Great_Wall_Motor" class="mw-redirect" title="Great Wall Motor">Great Wall</a></td>
<td><a href="/wiki/Great_Wall_Deer" title="Great Wall Deer">Great Wall Deer</a></td>
<td><a href="/wiki/File:Deer_2010.jpg" class="image"><img alt="Deer 2010.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Deer_2010.jpg/120px-Deer_2010.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Deer_2010.jpg/180px-Deer_2010.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Deer_2010.jpg/240px-Deer_2010.jpg 2x" data-file-width="1500" data-file-height="1125" /></a></td>
<td>Compact</td>
<td>China</td>
</tr>
<tr>
<td><a href="/wiki/Great_Wall_Motor" class="mw-redirect" title="Great Wall Motor">Great Wall</a></td>
<td><a href="/wiki/Great_Wall_Wingle" title="Great Wall Wingle">Great Wall V240 (Wingle 3)</a></td>
<td><a href="/wiki/File:GreatWall_Wingle_2008.jpg" class="image"><img alt="GreatWall Wingle 2008.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a9/GreatWall_Wingle_2008.jpg/120px-GreatWall_Wingle_2008.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a9/GreatWall_Wingle_2008.jpg/180px-GreatWall_Wingle_2008.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a9/GreatWall_Wingle_2008.jpg/240px-GreatWall_Wingle_2008.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>Compact</td>
<td>China, South East Asia, Middle East, Africa</td>
</tr>
<tr>
<td><a href="/wiki/Great_Wall_Motor" class="mw-redirect" title="Great Wall Motor">Great Wall</a></td>
<td><a href="/wiki/Great_Wall_Wingle" title="Great Wall Wingle">Great Wall Wingle 5</a></td>
<td><a href="/wiki/File:Great_Wall_Wingle_5_European_Edition_China_2014-04-28.jpg" class="image"><img alt="Great Wall Wingle 5 European Edition China 2014-04-28.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/20/Great_Wall_Wingle_5_European_Edition_China_2014-04-28.jpg/120px-Great_Wall_Wingle_5_European_Edition_China_2014-04-28.jpg" width="120" height="70" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/20/Great_Wall_Wingle_5_European_Edition_China_2014-04-28.jpg/180px-Great_Wall_Wingle_5_European_Edition_China_2014-04-28.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/20/Great_Wall_Wingle_5_European_Edition_China_2014-04-28.jpg/240px-Great_Wall_Wingle_5_European_Edition_China_2014-04-28.jpg 2x" data-file-width="1300" data-file-height="756" /></a></td>
<td>Compact</td>
<td>India, South East Asia, Middle East, Africa, Australia, Russia, UK</td>
</tr>
<tr>
<td><a href="/wiki/Great_Wall_Motor" class="mw-redirect" title="Great Wall Motor">Great Wall</a></td>
<td><a href="/wiki/Great_Wall_Wingle" title="Great Wall Wingle">Great Wall Wingle 6 (Steed)</a></td>
<td><a href="/wiki/File:Great_Wall_Wingle_6_China_2016-04-07.jpg" class="image"><img alt="Great Wall Wingle 6 China 2016-04-07.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/96/Great_Wall_Wingle_6_China_2016-04-07.jpg/120px-Great_Wall_Wingle_6_China_2016-04-07.jpg" width="120" height="75" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/96/Great_Wall_Wingle_6_China_2016-04-07.jpg/180px-Great_Wall_Wingle_6_China_2016-04-07.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/96/Great_Wall_Wingle_6_China_2016-04-07.jpg/240px-Great_Wall_Wingle_6_China_2016-04-07.jpg 2x" data-file-width="1300" data-file-height="808" /></a></td>
<td>Compact</td>
<td>China, Australia, New Zealand</td>
</tr>
<tr>
<td><a href="/wiki/Hafei_Motor" class="mw-redirect" title="Hafei Motor">Hafei</a></td>
<td><a href="/wiki/Hafei_Ruiyi" title="Hafei Ruiyi">Hafei Ruiyi</a></td>
<td><a href="/wiki/File:Hafei_Ruiyi_(front_quarter).jpg" class="image"><img alt="Hafei Ruiyi (front quarter).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Hafei_Ruiyi_%28front_quarter%29.jpg/120px-Hafei_Ruiyi_%28front_quarter%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Hafei_Ruiyi_%28front_quarter%29.jpg/180px-Hafei_Ruiyi_%28front_quarter%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Hafei_Ruiyi_%28front_quarter%29.jpg/240px-Hafei_Ruiyi_%28front_quarter%29.jpg 2x" data-file-width="2344" data-file-height="1758" /></a></td>
<td>mini</td>
<td>China</td>
</tr>
<tr>
<td><a href="/wiki/Holden" title="Holden">Holden</a></td>
<td><a href="/wiki/Holden_Commodore" title="Holden Commodore">Holden Ute</a></td>
<td><a href="/wiki/File:2015_Holden_Ute_(VF_MY15)_SV6_Storm_utility_(24991230696).jpg" class="image"><img alt="2015 Holden Ute (VF MY15) SV6 Storm utility (24991230696).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0a/2015_Holden_Ute_%28VF_MY15%29_SV6_Storm_utility_%2824991230696%29.jpg/120px-2015_Holden_Ute_%28VF_MY15%29_SV6_Storm_utility_%2824991230696%29.jpg" width="120" height="61" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0a/2015_Holden_Ute_%28VF_MY15%29_SV6_Storm_utility_%2824991230696%29.jpg/180px-2015_Holden_Ute_%28VF_MY15%29_SV6_Storm_utility_%2824991230696%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0a/2015_Holden_Ute_%28VF_MY15%29_SV6_Storm_utility_%2824991230696%29.jpg/240px-2015_Holden_Ute_%28VF_MY15%29_SV6_Storm_utility_%2824991230696%29.jpg 2x" data-file-width="4066" data-file-height="2074" /></a></td>
<td>Coupe</td>
<td>Australia, New Zealand</td>
</tr>
<tr>
<td>Holden</td>
<td><a href="/wiki/Chevrolet_Colorado" title="Chevrolet Colorado">Holden Colorado</a></td>
<td><a href="/wiki/File:RG_Holden_Colorado_Extra_Cab.jpg" class="image"><img alt="RG Holden Colorado Extra Cab.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/67/RG_Holden_Colorado_Extra_Cab.jpg/120px-RG_Holden_Colorado_Extra_Cab.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/67/RG_Holden_Colorado_Extra_Cab.jpg/180px-RG_Holden_Colorado_Extra_Cab.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/67/RG_Holden_Colorado_Extra_Cab.jpg/240px-RG_Holden_Colorado_Extra_Cab.jpg 2x" data-file-width="640" data-file-height="480" /></a></td>
<td>Compact</td>
<td>Australia, New Zealand</td>
</tr>
<tr>
<td><a href="/wiki/Holden_Special_Vehicles" title="Holden Special Vehicles">HSV</a></td>
<td><a href="/wiki/HSV_Maloo" class="mw-redirect" title="HSV Maloo">HSV Maloo</a></td>
<td><a href="/wiki/File:2009_HSV_Maloo_(E_Series_2_MY10)_R8_utility_01.jpg" class="image"><img alt="2009 HSV Maloo (E Series 2 MY10) R8 utility 01.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/91/2009_HSV_Maloo_%28E_Series_2_MY10%29_R8_utility_01.jpg/120px-2009_HSV_Maloo_%28E_Series_2_MY10%29_R8_utility_01.jpg" width="120" height="69" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/91/2009_HSV_Maloo_%28E_Series_2_MY10%29_R8_utility_01.jpg/180px-2009_HSV_Maloo_%28E_Series_2_MY10%29_R8_utility_01.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/91/2009_HSV_Maloo_%28E_Series_2_MY10%29_R8_utility_01.jpg/240px-2009_HSV_Maloo_%28E_Series_2_MY10%29_R8_utility_01.jpg 2x" data-file-width="3690" data-file-height="2118" /></a></td>
<td>Coupe</td>
<td>Australia, New Zealand</td>
</tr>
<tr>
<td><a href="/wiki/Honda" title="Honda">Honda</a></td>
<td><a href="/wiki/Honda_Acty" title="Honda Acty">Honda Acty</a></td>
<td><a href="/wiki/File:HondaActy4th.jpg" class="image"><img alt="HondaActy4th.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/26/HondaActy4th.jpg/120px-HondaActy4th.jpg" width="120" height="79" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/26/HondaActy4th.jpg/180px-HondaActy4th.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/26/HondaActy4th.jpg/240px-HondaActy4th.jpg 2x" data-file-width="800" data-file-height="527" /></a></td>
<td>mini</td>
<td>Japan</td>
</tr>
<tr>
<td><a href="/wiki/Honda" title="Honda">Honda</a></td>
<td><a href="/wiki/Honda_Ridgeline" title="Honda Ridgeline">Honda Ridgeline</a></td>
<td><a href="/wiki/File:2017_Honda_Ridgeline_RTL-FWD.jpg" class="image"><img alt="2017 Honda Ridgeline RTL-FWD.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/48/2017_Honda_Ridgeline_RTL-FWD.jpg/120px-2017_Honda_Ridgeline_RTL-FWD.jpg" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/48/2017_Honda_Ridgeline_RTL-FWD.jpg/180px-2017_Honda_Ridgeline_RTL-FWD.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/48/2017_Honda_Ridgeline_RTL-FWD.jpg/240px-2017_Honda_Ridgeline_RTL-FWD.jpg 2x" data-file-width="4987" data-file-height="2830" /></a></td>
<td>Midsize</td>
<td>North America, Caribbean, and Latin America</td>
</tr>
<tr>
<td><a href="/wiki/Hyundai" title="Hyundai">Hyundai</a></td>
<td><a href="/wiki/Hyundai_Porter" title="Hyundai Porter">Hyundai Porter</a></td>
<td><a href="/wiki/File:20120109_hyundai_porter2_1.jpg" class="image"><img alt="20120109 hyundai porter2 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b9/20120109_hyundai_porter2_1.jpg/120px-20120109_hyundai_porter2_1.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b9/20120109_hyundai_porter2_1.jpg/180px-20120109_hyundai_porter2_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b9/20120109_hyundai_porter2_1.jpg/240px-20120109_hyundai_porter2_1.jpg 2x" data-file-width="1420" data-file-height="910" /></a></td>
<td>Compact</td>
<td>South Korea</td>
</tr>
<tr>
<td><a href="/wiki/Iran_Khodro" title="Iran Khodro">Iran Khodro</a></td>
<td><a href="/w/index.php?title=Iran_Khodro_Brado&amp;action=edit&amp;redlink=1" class="new" title="Iran Khodro Brado (page does not exist)">Iran Khodro Brado</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Compact</td>
<td>Iran</td>
</tr>
<tr>
<td><a href="/wiki/Isuzu" class="mw-redirect" title="Isuzu">Isuzu</a></td>
<td><a href="/wiki/Isuzu_D-Max" title="Isuzu D-Max">Isuzu D-Max</a></td>
<td><a href="/wiki/File:ISUZU_D-MAX,_2nd_Gen,_Front_Perspective_View.jpg" class="image"><img alt="ISUZU D-MAX, 2nd Gen, Front Perspective View.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/ISUZU_D-MAX%2C_2nd_Gen%2C_Front_Perspective_View.jpg/120px-ISUZU_D-MAX%2C_2nd_Gen%2C_Front_Perspective_View.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/ISUZU_D-MAX%2C_2nd_Gen%2C_Front_Perspective_View.jpg/180px-ISUZU_D-MAX%2C_2nd_Gen%2C_Front_Perspective_View.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/ISUZU_D-MAX%2C_2nd_Gen%2C_Front_Perspective_View.jpg/240px-ISUZU_D-MAX%2C_2nd_Gen%2C_Front_Perspective_View.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Compact</td>
<td>worldwide, except North America, Singapore, South Korea</td>
</tr>
<tr>
<td><a href="/wiki/Kia" class="mw-redirect" title="Kia">Kia</a></td>
<td><a href="/wiki/Kia_Bongo" title="Kia Bongo">Kia Bongo</a></td>
<td><a href="/wiki/File:Kia_K2500_L50_TCI.JPG" class="image"><img alt="Kia K2500 L50 TCI.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/60/Kia_K2500_L50_TCI.JPG/120px-Kia_K2500_L50_TCI.JPG" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/60/Kia_K2500_L50_TCI.JPG/180px-Kia_K2500_L50_TCI.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/60/Kia_K2500_L50_TCI.JPG/240px-Kia_K2500_L50_TCI.JPG 2x" data-file-width="3746" data-file-height="2581" /></a></td>
<td>Compact</td>
<td>South Korea, Middle East, South America, Southeast Asia</td>
</tr>
<tr>
<td><a href="/wiki/Land_Rover" title="Land Rover">Land Rover</a></td>
<td><a href="/wiki/Land_Rover_Defender" title="Land Rover Defender">Land Rover Defender Pickup</a></td>
<td><a href="/wiki/File:Land_Rover_Defender_110_Pick_up_2011.jpg" class="image"><img alt="Land Rover Defender 110 Pick up 2011.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Land_Rover_Defender_110_Pick_up_2011.jpg/120px-Land_Rover_Defender_110_Pick_up_2011.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Land_Rover_Defender_110_Pick_up_2011.jpg/180px-Land_Rover_Defender_110_Pick_up_2011.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Land_Rover_Defender_110_Pick_up_2011.jpg/240px-Land_Rover_Defender_110_Pick_up_2011.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>off-road Compact</td>
<td>UK, Africa, Middle East, South East Asia</td>
</tr>
<tr>
<td><a href="/wiki/Mahindra_%26_Mahindra" title="Mahindra &amp; Mahindra">Mahindra &amp; Mahindra</a></td>
<td><a href="/wiki/Mahindra_Scorpio" title="Mahindra Scorpio">Mahindra Scorpio Pickup</a></td>
<td><a href="/wiki/File:Mahindra_Bilbao-_08_Marzo_30.jpg" class="image"><img alt="Mahindra Bilbao- 08 Marzo 30.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Mahindra_Bilbao-_08_Marzo_30.jpg/120px-Mahindra_Bilbao-_08_Marzo_30.jpg" width="120" height="82" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Mahindra_Bilbao-_08_Marzo_30.jpg/180px-Mahindra_Bilbao-_08_Marzo_30.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Mahindra_Bilbao-_08_Marzo_30.jpg/240px-Mahindra_Bilbao-_08_Marzo_30.jpg 2x" data-file-width="2300" data-file-height="1575" /></a></td>
<td>Compact</td>
<td>China, South East Asia, Middle East, Africa, Australia</td>
</tr>
<tr>
<td><a href="/wiki/Mazda" title="Mazda">Mazda</a></td>
<td><a href="/wiki/Mazda_BT-50" title="Mazda BT-50">Mazda BT-50</a></td>
<td><a href="/wiki/File:Mazda_BT-50_SDX_2.2_TDCi_Hi_Rider_2014_(14522473475).jpg" class="image"><img alt="Mazda BT-50 SDX 2.2 TDCi Hi Rider 2014 (14522473475).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/30/Mazda_BT-50_SDX_2.2_TDCi_Hi_Rider_2014_%2814522473475%29.jpg/120px-Mazda_BT-50_SDX_2.2_TDCi_Hi_Rider_2014_%2814522473475%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/30/Mazda_BT-50_SDX_2.2_TDCi_Hi_Rider_2014_%2814522473475%29.jpg/180px-Mazda_BT-50_SDX_2.2_TDCi_Hi_Rider_2014_%2814522473475%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/30/Mazda_BT-50_SDX_2.2_TDCi_Hi_Rider_2014_%2814522473475%29.jpg/240px-Mazda_BT-50_SDX_2.2_TDCi_Hi_Rider_2014_%2814522473475%29.jpg 2x" data-file-width="2800" data-file-height="2100" /></a></td>
<td>Midsize</td>
<td>Thailand, Australia, New Zealand, Africa</td>
</tr>
<tr>
<td><a href="/wiki/Mitsubishi" title="Mitsubishi">Mitsubishi</a></td>
<td><a href="/wiki/Mitsubishi_Minicab" title="Mitsubishi Minicab">Mitsubishi Minicab</a></td>
<td><a href="/wiki/File:Mitsubishi_Minicab_2000.jpg" class="image"><img alt="Mitsubishi Minicab 2000.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Mitsubishi_Minicab_2000.jpg/120px-Mitsubishi_Minicab_2000.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Mitsubishi_Minicab_2000.jpg/180px-Mitsubishi_Minicab_2000.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Mitsubishi_Minicab_2000.jpg/240px-Mitsubishi_Minicab_2000.jpg 2x" data-file-width="2581" data-file-height="1720" /></a></td>
<td>mini</td>
<td>Japan, China, Southeast Asia</td>
</tr>
<tr>
<td>Mitsubishi</td>
<td><a href="/wiki/Mitsubishi_Triton" title="Mitsubishi Triton">Mitsubishi Triton</a></td>
<td><a href="/wiki/File:2015_Mitsubishi_Triton_GLX_(17377699731).jpg" class="image"><img alt="2015 Mitsubishi Triton GLX (17377699731).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/25/2015_Mitsubishi_Triton_GLX_%2817377699731%29.jpg/120px-2015_Mitsubishi_Triton_GLX_%2817377699731%29.jpg" width="120" height="93" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/25/2015_Mitsubishi_Triton_GLX_%2817377699731%29.jpg/180px-2015_Mitsubishi_Triton_GLX_%2817377699731%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/25/2015_Mitsubishi_Triton_GLX_%2817377699731%29.jpg/240px-2015_Mitsubishi_Triton_GLX_%2817377699731%29.jpg 2x" data-file-width="2807" data-file-height="2169" /></a></td>
<td>Compact</td>
<td>Worldwide, except the United States, Canada, Japan, P.R.C., South Korea, North Korea, and Singapore.</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Namco_(Automobiles)&amp;action=edit&amp;redlink=1" class="new" title="Namco (Automobiles) (page does not exist)">Namco (Automobiles)</a></td>
<td><a href="/w/index.php?title=Namco_(Automobiles)&amp;action=edit&amp;redlink=1" class="new" title="Namco (Automobiles) (page does not exist)">Namco Pony</a></td>
<td><a href="/wiki/File:Citroen-pony.jpg" class="image"><img alt="Citroen-pony.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Citroen-pony.jpg/120px-Citroen-pony.jpg" width="120" height="88" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Citroen-pony.jpg/180px-Citroen-pony.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Citroen-pony.jpg/240px-Citroen-pony.jpg 2x" data-file-width="2460" data-file-height="1800" /></a></td>
<td>Mini</td>
<td>Europe</td>
</tr>
<tr>
<td><a href="/wiki/Navistar_International" title="Navistar International">Navistar Defesne</a></td>
<td><a href="/w/index.php?title=International_MXT_Cargo&amp;action=edit&amp;redlink=1" class="new" title="International MXT Cargo (page does not exist)">MXT Cargo</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy Duty</td>
<td>United Kingdom, United States</td>
</tr>
<tr>
<td><a href="/wiki/Navistar_International" title="Navistar International">Navistar Defesne</a></td>
<td><a href="/wiki/International_MXT-MVA" class="mw-redirect" title="International MXT-MVA">MXT-MVA</a></td>
<td><a href="/wiki/File:Husky_Protected_Support_Vehicle_MOD_45151024.jpg" class="image"><img alt="Husky Protected Support Vehicle MOD 45151024.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Husky_Protected_Support_Vehicle_MOD_45151024.jpg/120px-Husky_Protected_Support_Vehicle_MOD_45151024.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Husky_Protected_Support_Vehicle_MOD_45151024.jpg/180px-Husky_Protected_Support_Vehicle_MOD_45151024.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Husky_Protected_Support_Vehicle_MOD_45151024.jpg/240px-Husky_Protected_Support_Vehicle_MOD_45151024.jpg 2x" data-file-width="2250" data-file-height="1500" /></a></td>
<td>Heavy Duty</td>
<td>United Kingdom, United States</td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Mitsubishi_Minicab" title="Mitsubishi Minicab">Nissan Clipper</a></td>
<td><a href="/wiki/File:NISSAN_CLIPPER_TRUCK.jpg" class="image"><img alt="NISSAN CLIPPER TRUCK.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/79/NISSAN_CLIPPER_TRUCK.jpg/120px-NISSAN_CLIPPER_TRUCK.jpg" width="120" height="72" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/79/NISSAN_CLIPPER_TRUCK.jpg/180px-NISSAN_CLIPPER_TRUCK.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/79/NISSAN_CLIPPER_TRUCK.jpg/240px-NISSAN_CLIPPER_TRUCK.jpg 2x" data-file-width="2926" data-file-height="1761" /></a></td>
<td>mini</td>
<td>Japan</td>
</tr>
<tr>
<td>Nissan</td>
<td><a href="/wiki/Nissan_Navara" title="Nissan Navara">Nissan Frontier</a></td>
<td><a href="/wiki/File:2nd_Nissan_Frontier_SE_crew_cab.jpg" class="image"><img alt="2nd Nissan Frontier SE crew cab.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6f/2nd_Nissan_Frontier_SE_crew_cab.jpg/120px-2nd_Nissan_Frontier_SE_crew_cab.jpg" width="120" height="74" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6f/2nd_Nissan_Frontier_SE_crew_cab.jpg/180px-2nd_Nissan_Frontier_SE_crew_cab.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6f/2nd_Nissan_Frontier_SE_crew_cab.jpg/240px-2nd_Nissan_Frontier_SE_crew_cab.jpg 2x" data-file-width="2328" data-file-height="1445" /></a></td>
<td>Midsize</td>
<td>North America</td>
</tr>
<tr>
<td>Nissan</td>
<td><a href="/wiki/Dacia_Logan" title="Dacia Logan">Nissan NP200</a></td>
<td><a href="/wiki/File:2008_Nissan_NP200.jpg" class="image"><img alt="2008 Nissan NP200.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/50/2008_Nissan_NP200.jpg/120px-2008_Nissan_NP200.jpg" width="120" height="59" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/50/2008_Nissan_NP200.jpg/180px-2008_Nissan_NP200.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/50/2008_Nissan_NP200.jpg/240px-2008_Nissan_NP200.jpg 2x" data-file-width="417" data-file-height="206" /></a></td>
<td>Coupe</td>
<td>South Africa</td>
</tr>
<tr>
<td>Nissan</td>
<td><a href="/wiki/Nissan_Navara" title="Nissan Navara">Nissan Navara</a></td>
<td><a href="/wiki/File:Nissan_NP300_Navara_DoubleCab.jpg" class="image"><img alt="Nissan NP300 Navara DoubleCab.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/94/Nissan_NP300_Navara_DoubleCab.jpg/120px-Nissan_NP300_Navara_DoubleCab.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/94/Nissan_NP300_Navara_DoubleCab.jpg/180px-Nissan_NP300_Navara_DoubleCab.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/94/Nissan_NP300_Navara_DoubleCab.jpg/240px-Nissan_NP300_Navara_DoubleCab.jpg 2x" data-file-width="3000" data-file-height="2000" /></a></td>
<td>Midsize</td>
<td>Worldwide, except Japan, South Korea, Singapore, North America</td>
</tr>
<tr>
<td>Nissan</td>
<td><a href="/wiki/Nissan_Navara" title="Nissan Navara">Nissan Navara D22</a></td>
<td><a href="/wiki/File:2001-2005_Nissan_Navara_ST-R_3.0Di_01.jpg" class="image"><img alt="2001-2005 Nissan Navara ST-R 3.0Di 01.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/88/2001-2005_Nissan_Navara_ST-R_3.0Di_01.jpg/120px-2001-2005_Nissan_Navara_ST-R_3.0Di_01.jpg" width="120" height="63" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/88/2001-2005_Nissan_Navara_ST-R_3.0Di_01.jpg/180px-2001-2005_Nissan_Navara_ST-R_3.0Di_01.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/88/2001-2005_Nissan_Navara_ST-R_3.0Di_01.jpg/240px-2001-2005_Nissan_Navara_ST-R_3.0Di_01.jpg 2x" data-file-width="2169" data-file-height="1146" /></a></td>
<td>Compact</td>
<td>Australia, New Zealand, Africa</td>
</tr>
<tr>
<td>Nissan</td>
<td><a href="/wiki/Nissan_Titan" title="Nissan Titan">Nissan Titan</a></td>
<td><a href="/wiki/File:2016_Nissan_Titan_XD.jpg" class="image"><img alt="2016 Nissan Titan XD.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e1/2016_Nissan_Titan_XD.jpg/120px-2016_Nissan_Titan_XD.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e1/2016_Nissan_Titan_XD.jpg/180px-2016_Nissan_Titan_XD.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e1/2016_Nissan_Titan_XD.jpg/240px-2016_Nissan_Titan_XD.jpg 2x" data-file-width="3842" data-file-height="2561" /></a></td>
<td>Fullsize</td>
<td>USA, Canada, Mexico</td>
</tr>
<tr>
<td><a href="/wiki/Peugeot" title="Peugeot">Peugeot</a></td>
<td><a href="/wiki/Peugeot_Hoggar" class="mw-redirect" title="Peugeot Hoggar">Peugeot Hoggar</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Coupe</td>
<td>Brazil</td>
</tr>
<tr>
<td><a href="/wiki/Polarsun_Automobile" title="Polarsun Automobile">Polarsun</a></td>
<td><a href="/w/index.php?title=Polarsun_SZS&amp;action=edit&amp;redlink=1" class="new" title="Polarsun SZS (page does not exist)">Polarsun SZS</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Compact</td>
<td>Finland</td>
</tr>
<tr>
<td><a href="/wiki/Ram_Trucks" title="Ram Trucks">Ram</a></td>
<td><a href="/wiki/Fiat_Strada" title="Fiat Strada">Ram 750</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Coupe</td>
<td>Mexico</td>
</tr>
<tr>
<td>Ram</td>
<td><a href="/wiki/Dodge_Ram" class="mw-redirect" title="Dodge Ram">Ram 1500</a></td>
<td><a href="/wiki/File:Dodge2014ram1500.jpg" class="image"><img alt="Dodge2014ram1500.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/74/Dodge2014ram1500.jpg/120px-Dodge2014ram1500.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/74/Dodge2014ram1500.jpg/180px-Dodge2014ram1500.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/74/Dodge2014ram1500.jpg/240px-Dodge2014ram1500.jpg 2x" data-file-width="3000" data-file-height="1936" /></a></td>
<td>Luxury/Fullsize</td>
<td>North America, Middle East, Brazil, Italy</td>
</tr>
<tr>
<td>Ram</td>
<td><a href="/wiki/Dodge_Ram" class="mw-redirect" title="Dodge Ram">Ram 1500 Laramie Limited</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Fullsize/Luxury</td>
<td>North America</td>
</tr>
<tr>
<td>Ram</td>
<td><a href="/wiki/Dodge_Ram" class="mw-redirect" title="Dodge Ram">Ram 1500 Rebel</a></td>
<td><a href="/wiki/File:Rebel1.jpg" class="image"><img alt="Rebel1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Rebel1.jpg/120px-Rebel1.jpg" width="120" height="82" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Rebel1.jpg/180px-Rebel1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Rebel1.jpg/240px-Rebel1.jpg 2x" data-file-width="306" data-file-height="208" /></a></td>
<td>Fullsize/Off-Road</td>
<td>North America</td>
</tr>
<tr>
<td>Ram</td>
<td><a href="/wiki/Dodge_Ram" class="mw-redirect" title="Dodge Ram">Ram 2500</a></td>
<td><a href="/wiki/File:%2714_Ram_Heavy_Duty_Crew_Cab_(MIAS_%2714).jpg" class="image"><img alt="'14 Ram Heavy Duty Crew Cab (MIAS '14).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/%2714_Ram_Heavy_Duty_Crew_Cab_%28MIAS_%2714%29.jpg/120px-%2714_Ram_Heavy_Duty_Crew_Cab_%28MIAS_%2714%29.jpg" width="120" height="87" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d0/%2714_Ram_Heavy_Duty_Crew_Cab_%28MIAS_%2714%29.jpg/180px-%2714_Ram_Heavy_Duty_Crew_Cab_%28MIAS_%2714%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d0/%2714_Ram_Heavy_Duty_Crew_Cab_%28MIAS_%2714%29.jpg/240px-%2714_Ram_Heavy_Duty_Crew_Cab_%28MIAS_%2714%29.jpg 2x" data-file-width="1853" data-file-height="1341" /></a></td>
<td>Luxury/Heavy Duty</td>
<td>North America, Brazil</td>
</tr>
<tr>
<td>Ram</td>
<td><a href="/wiki/Dodge_Power_Wagon" title="Dodge Power Wagon">Ram Power Wagon</a></td>
<td><a href="/wiki/File:Ram_Power_Wagon_(8402994403).jpg" class="image"><img alt="Ram Power Wagon (8402994403).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/24/Ram_Power_Wagon_%288402994403%29.jpg/120px-Ram_Power_Wagon_%288402994403%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/24/Ram_Power_Wagon_%288402994403%29.jpg/180px-Ram_Power_Wagon_%288402994403%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/24/Ram_Power_Wagon_%288402994403%29.jpg/240px-Ram_Power_Wagon_%288402994403%29.jpg 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>Luxury/Heavy Duty</td>
<td>North America</td>
</tr>
<tr>
<td>Ram</td>
<td><a href="/wiki/Dodge_Ram" class="mw-redirect" title="Dodge Ram">Ram 3500</a></td>
<td><a href="/wiki/File:2011.5_RAM_3500_Loaded..jpg" class="image"><img alt="2011.5 RAM 3500 Loaded..jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b9/2011.5_RAM_3500_Loaded..jpg/120px-2011.5_RAM_3500_Loaded..jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b9/2011.5_RAM_3500_Loaded..jpg/180px-2011.5_RAM_3500_Loaded..jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b9/2011.5_RAM_3500_Loaded..jpg/240px-2011.5_RAM_3500_Loaded..jpg 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>Luxury/Heavy Duty</td>
<td>North America</td>
</tr>
<tr>
<td><a href="/wiki/SCAM_Spa" class="mw-redirect" title="SCAM Spa">SCAM</a></td>
<td><a href="/wiki/Iveco_Daily" title="Iveco Daily">SCAM Iveco Daily 4x4</a></td>
<td><a href="/wiki/File:2007_Iveco_Daily_4x4.jpg" class="image"><img alt="2007 Iveco Daily 4x4.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c4/2007_Iveco_Daily_4x4.jpg/120px-2007_Iveco_Daily_4x4.jpg" width="120" height="100" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c4/2007_Iveco_Daily_4x4.jpg/180px-2007_Iveco_Daily_4x4.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c4/2007_Iveco_Daily_4x4.jpg/240px-2007_Iveco_Daily_4x4.jpg 2x" data-file-width="1024" data-file-height="850" /></a></td>
<td>Midsize</td>
<td>Europe, South America, Africa, Middle East, Australia</td>
</tr>
<tr>
<td><a href="/wiki/Silant" title="Silant">Silant</a></td>
<td>Silant 3.3TD</td>
<td><a href="/wiki/File:Road_cleaning_vehicle_on_Silant_3.3TD_chassis.jpg" class="image"><img alt="Road cleaning vehicle on Silant 3.3TD chassis.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a3/Road_cleaning_vehicle_on_Silant_3.3TD_chassis.jpg/120px-Road_cleaning_vehicle_on_Silant_3.3TD_chassis.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a3/Road_cleaning_vehicle_on_Silant_3.3TD_chassis.jpg/180px-Road_cleaning_vehicle_on_Silant_3.3TD_chassis.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a3/Road_cleaning_vehicle_on_Silant_3.3TD_chassis.jpg/240px-Road_cleaning_vehicle_on_Silant_3.3TD_chassis.jpg 2x" data-file-width="2250" data-file-height="1500" /></a></td>
<td>Heavy Duty</td>
<td>Russia</td>
</tr>
<tr>
<td><a href="/wiki/SsangYong_Motor_Company" class="mw-redirect" title="SsangYong Motor Company">SsangYong</a></td>
<td><a href="/wiki/SsangYong_Actyon" title="SsangYong Actyon">SsangYong Actyon Sports</a></td>
<td><a href="/wiki/File:Actyon_sports_2012.jpg" class="image"><img alt="Actyon sports 2012.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Actyon_sports_2012.jpg/120px-Actyon_sports_2012.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Actyon_sports_2012.jpg/180px-Actyon_sports_2012.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Actyon_sports_2012.jpg/240px-Actyon_sports_2012.jpg 2x" data-file-width="1500" data-file-height="1125" /></a></td>
<td>Compact</td>
<td>Worldwide, except North America, and Japan</td>
</tr>
<tr>
<td><a href="/wiki/Terradyne_Armored_Vehicles_Inc." title="Terradyne Armored Vehicles Inc.">TAV</a></td>
<td><a href="/wiki/Terradyne_Armored_Vehicles_Gurkha" title="Terradyne Armored Vehicles Gurkha">TAV Gurkha Pickup</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy Duty</td>
<td>Worldwide</td>
</tr>
<tr>
<td><a href="/wiki/Tata_Motors" title="Tata Motors">Tata</a></td>
<td><a href="/wiki/Tata_Ace" title="Tata Ace">Tata Ace</a></td>
<td><a href="/wiki/File:Tataintroace.jpg" class="image"><img alt="Tataintroace.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/83/Tataintroace.jpg/120px-Tataintroace.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/83/Tataintroace.jpg/180px-Tataintroace.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/83/Tataintroace.jpg/240px-Tataintroace.jpg 2x" data-file-width="500" data-file-height="320" /></a></td>
<td>mini</td>
<td>India, South east Asia, Europe, South America, South Africa</td>
</tr>
<tr>
<td>Tata</td>
<td><a href="/wiki/Tata_Xenon" title="Tata Xenon">Tata Xenon</a></td>
<td><a href="/wiki/File:Tata_Xenon.JPG" class="image"><img alt="Tata Xenon.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Tata_Xenon.JPG/120px-Tata_Xenon.JPG" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Tata_Xenon.JPG/180px-Tata_Xenon.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Tata_Xenon.JPG/240px-Tata_Xenon.JPG 2x" data-file-width="1326" data-file-height="859" /></a></td>
<td>Compact</td>
<td>India, South East Asia, Europe, South America</td>
</tr>
<tr>
<td><a href="/wiki/Tiger_Truck" title="Tiger Truck">Tiger Truck</a></td>
<td><a href="/wiki/Tiger_Truck" title="Tiger Truck">Tiger Star</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>mini</td>
<td>USA, Canada</td>
</tr>
<tr>
<td><a href="/wiki/Toyota" title="Toyota">Toyota</a></td>
<td><a href="/wiki/Toyota_Hilux" title="Toyota Hilux">Toyota Hilux</a></td>
<td><a href="/wiki/File:2015_Toyota_HiLux_(GUN136R)_SR5_4-door_utility_(2015-10-18).jpg" class="image"><img alt="2015 Toyota HiLux (GUN136R) SR5 4-door utility (2015-10-18).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f4/2015_Toyota_HiLux_%28GUN136R%29_SR5_4-door_utility_%282015-10-18%29.jpg/120px-2015_Toyota_HiLux_%28GUN136R%29_SR5_4-door_utility_%282015-10-18%29.jpg" width="120" height="81" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f4/2015_Toyota_HiLux_%28GUN136R%29_SR5_4-door_utility_%282015-10-18%29.jpg/180px-2015_Toyota_HiLux_%28GUN136R%29_SR5_4-door_utility_%282015-10-18%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f4/2015_Toyota_HiLux_%28GUN136R%29_SR5_4-door_utility_%282015-10-18%29.jpg/240px-2015_Toyota_HiLux_%28GUN136R%29_SR5_4-door_utility_%282015-10-18%29.jpg 2x" data-file-width="4147" data-file-height="2788" /></a></td>
<td>Compact</td>
<td>worldwide, except USA, Canada, Japan, South Korea, and Singapore</td>
</tr>
<tr>
<td>Toyota</td>
<td><a href="/wiki/Toyota_Land_Cruiser_(J70)" title="Toyota Land Cruiser (J70)">Toyota Land Cruiser 79</a></td>
<td><a href="/wiki/File:Landcruiser70sud.jpg" class="image"><img alt="Landcruiser70sud.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Landcruiser70sud.jpg/120px-Landcruiser70sud.jpg" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Landcruiser70sud.jpg/180px-Landcruiser70sud.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Landcruiser70sud.jpg/240px-Landcruiser70sud.jpg 2x" data-file-width="1280" data-file-height="720" /></a></td>
<td>off-road Compact</td>
<td>Australia, New Zealand, Africa, Central America, Caribbean, Middle East</td>
</tr>
<tr>
<td>Toyota</td>
<td><a href="/wiki/Toyota_Tacoma" title="Toyota Tacoma">Toyota Tacoma</a></td>
<td><a href="/wiki/File:%2716_Toyota_Tacoma_Crew_Cab.jpg" class="image"><img alt="'16 Toyota Tacoma Crew Cab.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/56/%2716_Toyota_Tacoma_Crew_Cab.jpg/120px-%2716_Toyota_Tacoma_Crew_Cab.jpg" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/56/%2716_Toyota_Tacoma_Crew_Cab.jpg/180px-%2716_Toyota_Tacoma_Crew_Cab.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/56/%2716_Toyota_Tacoma_Crew_Cab.jpg/240px-%2716_Toyota_Tacoma_Crew_Cab.jpg 2x" data-file-width="2794" data-file-height="1594" /></a></td>
<td>Midsize</td>
<td>USA, Canada, Mexico</td>
</tr>
<tr>
<td>Toyota</td>
<td><a href="/wiki/Toyota_Tundra" title="Toyota Tundra">Toyota Tundra</a></td>
<td><a href="/wiki/File:Toyota_Tundra_2014_Crewmax_white.JPG" class="image"><img alt="Toyota Tundra 2014 Crewmax white.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Toyota_Tundra_2014_Crewmax_white.JPG/120px-Toyota_Tundra_2014_Crewmax_white.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Toyota_Tundra_2014_Crewmax_white.JPG/180px-Toyota_Tundra_2014_Crewmax_white.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Toyota_Tundra_2014_Crewmax_white.JPG/240px-Toyota_Tundra_2014_Crewmax_white.JPG 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>Luxury/Fullsize</td>
<td>USA, Canada, Mexico</td>
</tr>
<tr>
<td><a href="/wiki/UAZ" title="UAZ">UAZ</a></td>
<td><a href="/wiki/UAZ_Patriot#Versions" title="UAZ Patriot">UAZ Pickup</a></td>
<td><a href="/wiki/File:Russian_PATRIOT_4x4_SUV.jpg" class="image"><img alt="Russian PATRIOT 4x4 SUV.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Russian_PATRIOT_4x4_SUV.jpg/120px-Russian_PATRIOT_4x4_SUV.jpg" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Russian_PATRIOT_4x4_SUV.jpg/180px-Russian_PATRIOT_4x4_SUV.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Russian_PATRIOT_4x4_SUV.jpg/240px-Russian_PATRIOT_4x4_SUV.jpg 2x" data-file-width="1200" data-file-height="779" /></a></td>
<td>Midsize</td>
<td>Russia, Eastern Europe, South East Asia, Mongolia, Nicaragua</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Uri-Automobiles&amp;action=edit&amp;redlink=1" class="new" title="Uri-Automobiles (page does not exist)">Uri</a></td>
<td><a href="/w/index.php?title=Uri-Automobiles&amp;action=edit&amp;redlink=1" class="new" title="Uri-Automobiles (page does not exist)">Uri Desert Runner</a></td>
<td><a href="/wiki/File:Uri-Automobile.jpg" class="image"><img alt="Uri-Automobile.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/26/Uri-Automobile.jpg/120px-Uri-Automobile.jpg" width="120" height="102" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/26/Uri-Automobile.jpg/180px-Uri-Automobile.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/26/Uri-Automobile.jpg/240px-Uri-Automobile.jpg 2x" data-file-width="2200" data-file-height="1870" /></a></td>
<td>Compact</td>
<td>Africa</td>
</tr>
<tr>
<td><a href="/wiki/Vauxhall" title="Vauxhall">Vauxhall</a></td>
<td><a href="/wiki/HSV_Maloo" class="mw-redirect" title="HSV Maloo">Vauxhall Maloo VXR</a></td>
<td><a href="/wiki/File:Vauxhall_Maloo_VXR_-_Flickr_-_robad0b.jpg" class="image"><img alt="Vauxhall Maloo VXR - Flickr - robad0b.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/33/Vauxhall_Maloo_VXR_-_Flickr_-_robad0b.jpg/120px-Vauxhall_Maloo_VXR_-_Flickr_-_robad0b.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/33/Vauxhall_Maloo_VXR_-_Flickr_-_robad0b.jpg/180px-Vauxhall_Maloo_VXR_-_Flickr_-_robad0b.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/33/Vauxhall_Maloo_VXR_-_Flickr_-_robad0b.jpg/240px-Vauxhall_Maloo_VXR_-_Flickr_-_robad0b.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Coupe</td>
<td>United Kingdom</td>
</tr>
<tr>
<td><a href="/wiki/VAZInterService" title="VAZInterService">VIS Avto</a></td>
<td>VIS-2347</td>
<td><a href="/wiki/File:VIS-234700-30.jpg" class="image"><img alt="VIS-234700-30.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5b/VIS-234700-30.jpg/120px-VIS-234700-30.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5b/VIS-234700-30.jpg/180px-VIS-234700-30.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5b/VIS-234700-30.jpg/240px-VIS-234700-30.jpg 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>Compact</td>
<td>Russia</td>
</tr>
<tr>
<td><a href="/wiki/VAZInterService" title="VAZInterService">VIS Avto</a></td>
<td>VIS-2349</td>
<td><a href="/wiki/File:VIS-234900-40_(front_view).jpg" class="image"><img alt="VIS-234900-40 (front view).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/62/VIS-234900-40_%28front_view%29.jpg/120px-VIS-234900-40_%28front_view%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/62/VIS-234900-40_%28front_view%29.jpg/180px-VIS-234900-40_%28front_view%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/62/VIS-234900-40_%28front_view%29.jpg/240px-VIS-234900-40_%28front_view%29.jpg 2x" data-file-width="2560" data-file-height="1920" /></a></td>
<td>Compact</td>
<td>Russia</td>
</tr>
<tr>
<td><a href="/wiki/VAZInterService" title="VAZInterService">VIS Avto</a></td>
<td>VIS-2346</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Compact</td>
<td>Russia</td>
</tr>
<tr>
<td><a href="/wiki/Volkswagen" title="Volkswagen">Volkswagen</a></td>
<td><a href="/wiki/Volkswagen_Gol" title="Volkswagen Gol">Volkswagen Saveiro</a></td>
<td><a href="/wiki/File:2010_saveiro.jpg" class="image"><img alt="2010 saveiro.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5d/2010_saveiro.jpg/120px-2010_saveiro.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5d/2010_saveiro.jpg/180px-2010_saveiro.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5d/2010_saveiro.jpg/240px-2010_saveiro.jpg 2x" data-file-width="1500" data-file-height="1125" /></a></td>
<td>Coupe</td>
<td>South America</td>
</tr>
<tr>
<td><a href="/wiki/Volkswagen_Commercial_Vehicles" title="Volkswagen Commercial Vehicles">VCV</a></td>
<td><a href="/wiki/Volkswagen_Amarok" title="Volkswagen Amarok">Volkswagen Amarok</a></td>
<td><a href="/wiki/File:2011_Volkswagen_Amarok_(2H)_TDI400_Highline_4-door_utility_(2011-08-17)_01.jpg" class="image"><img alt="2011 Volkswagen Amarok (2H) TDI400 Highline 4-door utility (2011-08-17) 01.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0b/2011_Volkswagen_Amarok_%282H%29_TDI400_Highline_4-door_utility_%282011-08-17%29_01.jpg/120px-2011_Volkswagen_Amarok_%282H%29_TDI400_Highline_4-door_utility_%282011-08-17%29_01.jpg" width="120" height="71" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0b/2011_Volkswagen_Amarok_%282H%29_TDI400_Highline_4-door_utility_%282011-08-17%29_01.jpg/180px-2011_Volkswagen_Amarok_%282H%29_TDI400_Highline_4-door_utility_%282011-08-17%29_01.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0b/2011_Volkswagen_Amarok_%282H%29_TDI400_Highline_4-door_utility_%282011-08-17%29_01.jpg/240px-2011_Volkswagen_Amarok_%282H%29_TDI400_Highline_4-door_utility_%282011-08-17%29_01.jpg 2x" data-file-width="3503" data-file-height="2067" /></a></td>
<td>Compact</td>
<td>Europe, Latin America, Middle East, South Africa, Australia, New Zealand</td>
</tr>
<tr>
<td><a href="/wiki/ZX_Auto" title="ZX Auto">ZX</a></td>
<td><a href="/wiki/ZX_Auto" title="ZX Auto">ZX Admiral</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Compact</td>
<td>China, Middle East, Northern Africa</td>
</tr>
<tr>
<td><a href="/wiki/ZX_Auto" title="ZX Auto">ZX</a></td>
<td><a href="/w/index.php?title=ZX_Grandtiger&amp;action=edit&amp;redlink=1" class="new" title="ZX Grandtiger (page does not exist)">ZX Grandtiger</a></td>
<td><a href="/wiki/File:ZX_Auto_Grandtiger_2010.jpg" class="image"><img alt="ZX Auto Grandtiger 2010.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/86/ZX_Auto_Grandtiger_2010.jpg/120px-ZX_Auto_Grandtiger_2010.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/86/ZX_Auto_Grandtiger_2010.jpg/180px-ZX_Auto_Grandtiger_2010.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/86/ZX_Auto_Grandtiger_2010.jpg/240px-ZX_Auto_Grandtiger_2010.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>Compact</td>
<td>China, Middle East, South East Asia, Russia, Eastern Europe, Northern Africa</td>
</tr>
<tr>
<td><a href="/wiki/ZX_Auto" title="ZX Auto">ZX</a></td>
<td><a href="/w/index.php?title=ZX_Grandtiger&amp;action=edit&amp;redlink=1" class="new" title="ZX Grandtiger (page does not exist)">ZX Grandtiger F1</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Compact</td>
<td>China, Middle East, South East Asia, Russia, Eastern Europe, Northern Africa</td>
</tr>
</table>
<h2><span class="mw-headline" id="Current:_Chassis_Cab">Current: Chassis Cab</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_pickup_trucks&amp;action=edit&amp;section=2" title="Edit section: Current: Chassis Cab">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Below are vehicles manufactured in Chassis cab configuration only. While they can be fitted with pickup beds, they are not strictly considered pickups trucks.</p>
<table class="wikitable sortable">
<tr>
<th>Company</th>
<th>Pickup Truck</th>
<th class="unsortable">Image</th>
<th>Class</th>
<th>Regions sold</th>
</tr>
<tr>
<td><a href="/w/index.php?title=Cenntro_Motors&amp;action=edit&amp;redlink=1" class="new" title="Cenntro Motors (page does not exist)">Cenntro</a></td>
<td><a href="/w/index.php?title=Cenntro_Citelec&amp;action=edit&amp;redlink=1" class="new" title="Cenntro Citelec (page does not exist)">Cenntro Citelec</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Compact</td>
<td>United States, France</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_F-550" class="mw-redirect" title="Ford F-550">Ford F-550</a></td>
<td><a href="/wiki/File:2013_Ford_F-550_4x4_Single_cab_wrecker_picture_3.jpg" class="image"><img alt="2013 Ford F-550 4x4 Single cab wrecker picture 3.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/91/2013_Ford_F-550_4x4_Single_cab_wrecker_picture_3.jpg/120px-2013_Ford_F-550_4x4_Single_cab_wrecker_picture_3.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/91/2013_Ford_F-550_4x4_Single_cab_wrecker_picture_3.jpg/180px-2013_Ford_F-550_4x4_Single_cab_wrecker_picture_3.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/91/2013_Ford_F-550_4x4_Single_cab_wrecker_picture_3.jpg/240px-2013_Ford_F-550_4x4_Single_cab_wrecker_picture_3.jpg 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>Heavy Duty</td>
<td>USA, Canada, Mexico</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_F-650" title="Ford F-650">Ford F-650</a></td>
<td><a href="/wiki/File:Ford_F650_flatbed.jpg" class="image"><img alt="Ford F650 flatbed.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Ford_F650_flatbed.jpg/120px-Ford_F650_flatbed.jpg" width="120" height="89" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Ford_F650_flatbed.jpg/180px-Ford_F650_flatbed.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/52/Ford_F650_flatbed.jpg/240px-Ford_F650_flatbed.jpg 2x" data-file-width="1694" data-file-height="1260" /></a></td>
<td>Heavy Duty</td>
<td>USA, Canada, Mexico</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_F-750" class="mw-redirect" title="Ford F-750">Ford F-750</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy Duty</td>
<td>USA, Canada, Mexico</td>
</tr>
<tr>
<td><a href="/wiki/Freightliner_Trucks" title="Freightliner Trucks">Freightliner</a></td>
<td><a href="/wiki/Unimog#North_America" title="Unimog">Freightliner Unimog</a></td>
<td><a href="/wiki/File:Global_Expedition_Vehicles_Safari_Extreme_Freightliner_Unimog_U500.jpg" class="image"><img alt="Global Expedition Vehicles Safari Extreme Freightliner Unimog U500.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Global_Expedition_Vehicles_Safari_Extreme_Freightliner_Unimog_U500.jpg/120px-Global_Expedition_Vehicles_Safari_Extreme_Freightliner_Unimog_U500.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Global_Expedition_Vehicles_Safari_Extreme_Freightliner_Unimog_U500.jpg/180px-Global_Expedition_Vehicles_Safari_Extreme_Freightliner_Unimog_U500.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Global_Expedition_Vehicles_Safari_Extreme_Freightliner_Unimog_U500.jpg/240px-Global_Expedition_Vehicles_Safari_Extreme_Freightliner_Unimog_U500.jpg 2x" data-file-width="4372" data-file-height="2906" /></a></td>
<td>Heavy Duty</td>
<td>USA, Canada</td>
</tr>
<tr>
<td><a href="/wiki/Mercedes-Benz" title="Mercedes-Benz">Mercedes-Benz</a></td>
<td><a href="/wiki/Unimog" title="Unimog">Unimog</a></td>
<td><a href="/wiki/File:Unimog_U400.jpg" class="image"><img alt="Unimog U400.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Unimog_U400.jpg/120px-Unimog_U400.jpg" width="120" height="103" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Unimog_U400.jpg/180px-Unimog_U400.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Unimog_U400.jpg/240px-Unimog_U400.jpg 2x" data-file-width="990" data-file-height="846" /></a><br />
<a href="/wiki/File:Mercedes_Benz_Unimog_1300_L.jpg" class="image"><img alt="Mercedes Benz Unimog 1300 L.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Mercedes_Benz_Unimog_1300_L.jpg/120px-Mercedes_Benz_Unimog_1300_L.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Mercedes_Benz_Unimog_1300_L.jpg/180px-Mercedes_Benz_Unimog_1300_L.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Mercedes_Benz_Unimog_1300_L.jpg/240px-Mercedes_Benz_Unimog_1300_L.jpg 2x" data-file-width="2048" data-file-height="1536" /></a></td>
<td>Heavy Duty</td>
<td>Europe, North America, South America, Middle East, Africa, Oceania, China</td>
</tr>
<tr>
<td>Ram</td>
<td><a href="/wiki/Dodge_Ram" class="mw-redirect" title="Dodge Ram">Ram 4500</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Luxury/Heavy Duty</td>
<td>North America</td>
</tr>
<tr>
<td>Ram</td>
<td><a href="/wiki/Dodge_Ram" class="mw-redirect" title="Dodge Ram">Ram 5500</a></td>
<td><a href="/wiki/File:2011RAM55004x4.jpg" class="image"><img alt="2011RAM55004x4.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b5/2011RAM55004x4.jpg/120px-2011RAM55004x4.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b5/2011RAM55004x4.jpg/180px-2011RAM55004x4.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b5/2011RAM55004x4.jpg/240px-2011RAM55004x4.jpg 2x" data-file-width="2816" data-file-height="2112" /></a></td>
<td>Luxury/Heavy Duty</td>
<td>North America</td>
</tr>
</table>
<h2><span class="mw-headline" id="Current_Aftermarket_Manufactured">Current Aftermarket Manufactured</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_pickup_trucks&amp;action=edit&amp;section=3" title="Edit section: Current Aftermarket Manufactured">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>All manufacturers below are secondary suppliers that take OEM vehicles to modify and resell.</p>
<table class="wikitable sortable">
<tr>
<th>Company</th>
<th>Pickup Truck</th>
<th class="unsortable">Image</th>
<th>Class</th>
<th>regions sold</th>
</tr>
<tr>
<td><a href="/wiki/American_Expedition_Vehicles" title="American Expedition Vehicles">AEV</a></td>
<td><a href="/wiki/AEV_Brute" title="AEV Brute">AEV Brute</a></td>
<td><a href="/wiki/File:AEV_BRUTE_01b.jpg" class="image"><img alt="AEV BRUTE 01b.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/29/AEV_BRUTE_01b.jpg/120px-AEV_BRUTE_01b.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/29/AEV_BRUTE_01b.jpg/180px-AEV_BRUTE_01b.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/29/AEV_BRUTE_01b.jpg/240px-AEV_BRUTE_01b.jpg 2x" data-file-width="1045" data-file-height="695" /></a></td>
<td>off-road Compact</td>
<td>USA, Canada</td>
</tr>
<tr>
<td><a href="/wiki/Brabus" title="Brabus">Brabus</a></td>
<td><a href="/wiki/Unimog#2005_.E2.80.93_Black_Edition" title="Unimog">Brabus Mercedes-Benz Unimog</a></td>
<td><a href="/wiki/File:Brabus_Unimog_U500_Black_Edition_at_the_Mercedes-Benz_World.jpg" class="image"><img alt="Brabus Unimog U500 Black Edition at the Mercedes-Benz World.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Brabus_Unimog_U500_Black_Edition_at_the_Mercedes-Benz_World.jpg/120px-Brabus_Unimog_U500_Black_Edition_at_the_Mercedes-Benz_World.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Brabus_Unimog_U500_Black_Edition_at_the_Mercedes-Benz_World.jpg/180px-Brabus_Unimog_U500_Black_Edition_at_the_Mercedes-Benz_World.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Brabus_Unimog_U500_Black_Edition_at_the_Mercedes-Benz_World.jpg/240px-Brabus_Unimog_U500_Black_Edition_at_the_Mercedes-Benz_World.jpg 2x" data-file-width="3888" data-file-height="2592" /></a></td>
<td>Heavy Duty</td>
<td>Europe, North America, South America, Middle East, Africa, Oceania, China</td>
</tr>
<tr>
<td>Cenntro</td>
<td>Cenntro Kombi EV</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Compact</td>
<td>United States, France</td>
</tr>
<tr>
<td><a href="/wiki/F650_Pickups" title="F650 Pickups">F650 Pickups</a><br />
and Midwest Automotive Designs</td>
<td><a href="/wiki/Ford_F-650" title="Ford F-650">Ford F-650 Supertruck</a></td>
<td><a href="/wiki/File:Ford_F-650_Super_Duty.JPG" class="image"><img alt="Ford F-650 Super Duty.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Ford_F-650_Super_Duty.JPG/120px-Ford_F-650_Super_Duty.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Ford_F-650_Super_Duty.JPG/180px-Ford_F-650_Super_Duty.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Ford_F-650_Super_Duty.JPG/240px-Ford_F-650_Super_Duty.JPG 2x" data-file-width="1500" data-file-height="1125" /></a></td>
<td>Luxury Heavy Duty</td>
<td>United States, Canada</td>
</tr>
<tr>
<td><a href="/wiki/Kahn_Design" title="Kahn Design">Kahn Design</a></td>
<td><a href="/wiki/Land_Rover_Defender#Land_Rover_90_and_110" title="Land Rover Defender">Kahn Land Rover Defender 110 Pickup</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Luxury Midsize</td>
<td>United Kingdom</td>
</tr>
<tr>
<td>Midwest Automotive Designs</td>
<td><a href="/wiki/Freightliner_Business_Class_M2" title="Freightliner Business Class M2">M2 106 and M2 112 Supertrucks</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Luxury Heavy Duty</td>
<td>United States, Canada</td>
</tr>
<tr>
<td>Midwest Automotive Designs</td>
<td><a href="/wiki/International_XT" title="International XT">International MXT Supertruck</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Luxury Heavy Duty</td>
<td>United States, Canada</td>
</tr>
<tr>
<td>Midwest Automotive Designs</td>
<td><a href="/wiki/International_TerraStar" title="International TerraStar">International TerraStar Supertruck</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Luxury Heavy Duty</td>
<td>United States, Canada</td>
</tr>
<tr>
<td>Midwest Automotive Designs</td>
<td><a href="/wiki/International_DuraStar" class="mw-redirect" title="International DuraStar">International DuraStar Supertruck</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Luxury Heavy Duty</td>
<td>United States, Canada</td>
</tr>
<tr>
<td>Midwest Automotive Designs</td>
<td><a href="/wiki/International_WorkStar" title="International WorkStar">WorkStar Supertruck</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Luxury Heavy Duty</td>
<td>United States, Canada</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Icon_Inc.&amp;action=edit&amp;redlink=1" class="new" title="Icon Inc. (page does not exist)">Icon</a></td>
<td><a href="/w/index.php?title=Icon_Thriftmaster&amp;action=edit&amp;redlink=1" class="new" title="Icon Thriftmaster (page does not exist)">Icon Thriftmaster</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Compact</td>
<td>United States, Canada</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Icon_Inc.&amp;action=edit&amp;redlink=1" class="new" title="Icon Inc. (page does not exist)">Icon</a></td>
<td><a href="/w/index.php?title=Icon_FJ_Series&amp;action=edit&amp;redlink=1" class="new" title="Icon FJ Series (page does not exist)">Icon FJ45</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Off-road Compact</td>
<td>United States, Canada</td>
</tr>
<tr>
<td><a href="/wiki/Legacy_Classic_Trucks" title="Legacy Classic Trucks">Legacy Classic Trucks</a></td>
<td><a href="/w/index.php?title=Legacy_Power_Wagon&amp;action=edit&amp;redlink=1" class="new" title="Legacy Power Wagon (page does not exist)">Legacy Power Wagon</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy Duty</td>
<td>Worldwide</td>
</tr>
<tr>
<td><a href="/wiki/Phoenix_Motorcars" title="Phoenix Motorcars">Phoenix Motorcars</a></td>
<td><a href="/wiki/Phoenix_Motorcars" title="Phoenix Motorcars">Phoenix SUT</a></td>
<td><a href="/wiki/File:Two_Phoenix_Motorcars_in_parking_lot.jpg" class="image"><img alt="Two Phoenix Motorcars in parking lot.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/68/Two_Phoenix_Motorcars_in_parking_lot.jpg/120px-Two_Phoenix_Motorcars_in_parking_lot.jpg" width="120" height="73" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/68/Two_Phoenix_Motorcars_in_parking_lot.jpg/180px-Two_Phoenix_Motorcars_in_parking_lot.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/68/Two_Phoenix_Motorcars_in_parking_lot.jpg/240px-Two_Phoenix_Motorcars_in_parking_lot.jpg 2x" data-file-width="720" data-file-height="437" /></a></td>
<td>Electric Compact</td>
<td>USA, Canada</td>
</tr>
<tr>
<td><a href="/w/index.php?title=SportChassis&amp;action=edit&amp;redlink=1" class="new" title="SportChassis (page does not exist)">SportChassis</a></td>
<td><a href="/w/index.php?title=Freightliner_SportChassis_RHA_Series&amp;action=edit&amp;redlink=1" class="new" title="Freightliner SportChassis RHA Series (page does not exist)">Freightliner SportChassis RHA Series</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Luxury Heavy Duty</td>
<td>United States, Canada</td>
</tr>
<tr>
<td><a href="/w/index.php?title=SportChassis&amp;action=edit&amp;redlink=1" class="new" title="SportChassis (page does not exist)">SportChassis</a></td>
<td><a href="/w/index.php?title=Freightliner_SportChassis_P2_Series&amp;action=edit&amp;redlink=1" class="new" title="Freightliner SportChassis P2 Series (page does not exist)">Freightliner SportChassis P2 Series</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Luxury Heavy Duty</td>
<td>United States, Canada</td>
</tr>
<tr>
<td><a href="/w/index.php?title=SportChassis&amp;action=edit&amp;redlink=1" class="new" title="SportChassis (page does not exist)">SportChassis</a></td>
<td><a href="/w/index.php?title=Freightliner_Sportchassis_P4-XL&amp;action=edit&amp;redlink=1" class="new" title="Freightliner Sportchassis P4-XL (page does not exist)">Freightliner Sportchassis P4-XL</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Luxury Heavy Duty</td>
<td>United States, Canada</td>
</tr>
<tr>
<td><a href="/wiki/VIA_Motors" title="VIA Motors">VIA</a></td>
<td><a href="/wiki/Chevrolet_Silverado#Electric_version" title="Chevrolet Silverado">VIA VTrux</a></td>
<td><a href="/wiki/File:Electric_Cars_at_NAIAS_2013_(8485660776).jpg" class="image"><img alt="Electric Cars at NAIAS 2013 (8485660776).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/09/Electric_Cars_at_NAIAS_2013_%288485660776%29.jpg/120px-Electric_Cars_at_NAIAS_2013_%288485660776%29.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/09/Electric_Cars_at_NAIAS_2013_%288485660776%29.jpg/180px-Electric_Cars_at_NAIAS_2013_%288485660776%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/09/Electric_Cars_at_NAIAS_2013_%288485660776%29.jpg/240px-Electric_Cars_at_NAIAS_2013_%288485660776%29.jpg 2x" data-file-width="800" data-file-height="534" /></a></td>
<td>Electric Fullsize</td>
<td>United States, Canada</td>
</tr>
</table>
<h2><span class="mw-headline" id="Discontinued">Discontinued</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_pickup_trucks&amp;action=edit&amp;section=4" title="Edit section: Discontinued">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
<table class="wikitable sortable">
<tr>
<th>Company</th>
<th>Pickup Truck</th>
<th class="unsortable">Image</th>
<th>Class</th>
<th>Years Produced</th>
</tr>
<tr>
<td><a href="/wiki/Brabus" title="Brabus">Brabus</a></td>
<td><a href="/wiki/Mercedes-Benz_G-Class#G_63_AMG_6x6_.282013.E2.80.93.29" title="Mercedes-Benz G-Class">Brabus G-Class AMG 6x6</a></td>
<td><a href="/wiki/File:Mercedes_Benz_G_63_AMG_Brabus_B63S_700_6x6_(14569321096).jpg" class="image"><img alt="Mercedes Benz G 63 AMG Brabus B63S 700 6x6 (14569321096).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/Mercedes_Benz_G_63_AMG_Brabus_B63S_700_6x6_%2814569321096%29.jpg/120px-Mercedes_Benz_G_63_AMG_Brabus_B63S_700_6x6_%2814569321096%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/Mercedes_Benz_G_63_AMG_Brabus_B63S_700_6x6_%2814569321096%29.jpg/180px-Mercedes_Benz_G_63_AMG_Brabus_B63S_700_6x6_%2814569321096%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/38/Mercedes_Benz_G_63_AMG_Brabus_B63S_700_6x6_%2814569321096%29.jpg/240px-Mercedes_Benz_G_63_AMG_Brabus_B63S_700_6x6_%2814569321096%29.jpg 2x" data-file-width="3200" data-file-height="2400" /></a></td>
<td>Luxury Heavy Duty</td>
<td>2013-2015</td>
</tr>
<tr>
<td><a href="/wiki/Beijing_Automobile_Works" class="mw-redirect" title="Beijing Automobile Works">BAW</a></td>
<td><a href="/wiki/Beijing_BJ212" title="Beijing BJ212">BJ2032 SAQ 4-dr HT</a></td>
<td><a href="/wiki/File:BAW_BJ2032_SAQ.jpg" class="image"><img alt="BAW BJ2032 SAQ.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a0/BAW_BJ2032_SAQ.jpg/120px-BAW_BJ2032_SAQ.jpg" width="120" height="73" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a0/BAW_BJ2032_SAQ.jpg/180px-BAW_BJ2032_SAQ.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a0/BAW_BJ2032_SAQ.jpg/240px-BAW_BJ2032_SAQ.jpg 2x" data-file-width="2048" data-file-height="1246" /></a></td>
<td>Compact</td>
<td>&#160;????-????</td>
</tr>
<tr>
<td><a href="/wiki/Cadillac" title="Cadillac">Cadillac</a></td>
<td><a href="/wiki/Cadillac_Escalade" title="Cadillac Escalade">Cadillac Escalade EXT</a></td>
<td><a href="/wiki/File:1st_Cadillac_Escalade_EXT.jpg" class="image"><img alt="1st Cadillac Escalade EXT.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a9/1st_Cadillac_Escalade_EXT.jpg/120px-1st_Cadillac_Escalade_EXT.jpg" width="120" height="65" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a9/1st_Cadillac_Escalade_EXT.jpg/180px-1st_Cadillac_Escalade_EXT.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a9/1st_Cadillac_Escalade_EXT.jpg/240px-1st_Cadillac_Escalade_EXT.jpg 2x" data-file-width="1941" data-file-height="1052" /></a><br />
<a href="/wiki/File:2nd_Cadillac_Escalade_EXT_--_11-10-2011.jpg" class="image"><img alt="2nd Cadillac Escalade EXT -- 11-10-2011.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0e/2nd_Cadillac_Escalade_EXT_--_11-10-2011.jpg/120px-2nd_Cadillac_Escalade_EXT_--_11-10-2011.jpg" width="120" height="70" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0e/2nd_Cadillac_Escalade_EXT_--_11-10-2011.jpg/180px-2nd_Cadillac_Escalade_EXT_--_11-10-2011.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0e/2nd_Cadillac_Escalade_EXT_--_11-10-2011.jpg/240px-2nd_Cadillac_Escalade_EXT_--_11-10-2011.jpg 2x" data-file-width="1924" data-file-height="1117" /></a></td>
<td>Fullsize</td>
<td>2002-2013</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/w/index.php?title=Chevrolet_AK&amp;action=edit&amp;redlink=1" class="new" title="Chevrolet AK (page does not exist)">Chevrolet AK</a></td>
<td></td>
<td>Compact</td>
<td>&#160;????-????</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_Advance_Design" title="Chevrolet Advance Design">Chevrolet Advance Design</a></td>
<td><a href="/wiki/File:1952_Chevrolet_Pickup_PBC612.jpg" class="image"><img alt="1952 Chevrolet Pickup PBC612.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a3/1952_Chevrolet_Pickup_PBC612.jpg/120px-1952_Chevrolet_Pickup_PBC612.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a3/1952_Chevrolet_Pickup_PBC612.jpg/180px-1952_Chevrolet_Pickup_PBC612.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a3/1952_Chevrolet_Pickup_PBC612.jpg/240px-1952_Chevrolet_Pickup_PBC612.jpg 2x" data-file-width="800" data-file-height="504" /></a></td>
<td>Compact</td>
<td>1947–1955</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_Task_Force" title="Chevrolet Task Force">Chevrolet Task Force</a></td>
<td><a href="/wiki/File:Chevrolet-Apache.png" class="image"><img alt="Chevrolet-Apache.png" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/Chevrolet-Apache.png/120px-Chevrolet-Apache.png" width="120" height="91" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/Chevrolet-Apache.png/180px-Chevrolet-Apache.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/42/Chevrolet-Apache.png/240px-Chevrolet-Apache.png 2x" data-file-width="2768" data-file-height="2091" /></a></td>
<td>Compact</td>
<td>1955-1960</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_C/K" title="Chevrolet C/K">Chevrolet C/K</a></td>
<td><a href="/wiki/File:1966_chevy.png" class="image"><img alt="1966 chevy.png" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/41/1966_chevy.png/120px-1966_chevy.png" width="120" height="64" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/41/1966_chevy.png/180px-1966_chevy.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/41/1966_chevy.png/240px-1966_chevy.png 2x" data-file-width="526" data-file-height="281" /></a><br />
<a href="/wiki/File:Chevrolet_C_10.jpg" class="image"><img alt="Chevrolet C 10.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Chevrolet_C_10.jpg/120px-Chevrolet_C_10.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Chevrolet_C_10.jpg/180px-Chevrolet_C_10.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Chevrolet_C_10.jpg/240px-Chevrolet_C_10.jpg 2x" data-file-width="2800" data-file-height="1867" /></a><br />
<a href="/wiki/File:Chevrolet_CK_1974.JPG" class="image"><img alt="Chevrolet CK 1974.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Chevrolet_CK_1974.JPG/120px-Chevrolet_CK_1974.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Chevrolet_CK_1974.JPG/180px-Chevrolet_CK_1974.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Chevrolet_CK_1974.JPG/240px-Chevrolet_CK_1974.JPG 2x" data-file-width="640" data-file-height="480" /></a><br />
<a href="/wiki/File:Chevrolet_C-K_Silverado_Regular_Cab.JPG" class="image"><img alt="Chevrolet C-K Silverado Regular Cab.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Chevrolet_C-K_Silverado_Regular_Cab.JPG/120px-Chevrolet_C-K_Silverado_Regular_Cab.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Chevrolet_C-K_Silverado_Regular_Cab.JPG/180px-Chevrolet_C-K_Silverado_Regular_Cab.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Chevrolet_C-K_Silverado_Regular_Cab.JPG/240px-Chevrolet_C-K_Silverado_Regular_Cab.JPG 2x" data-file-width="2423" data-file-height="1609" /></a><br />
<a href="/wiki/File:88-99_Chevrolet_CK.jpg" class="image"><img alt="88-99 Chevrolet CK.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/57/88-99_Chevrolet_CK.jpg/120px-88-99_Chevrolet_CK.jpg" width="120" height="69" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/57/88-99_Chevrolet_CK.jpg/180px-88-99_Chevrolet_CK.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/57/88-99_Chevrolet_CK.jpg/240px-88-99_Chevrolet_CK.jpg 2x" data-file-width="2560" data-file-height="1472" /></a></td>
<td>Fullsize</td>
<td>1960-2001</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_LUV" title="Chevrolet LUV">Chevrolet LUV</a></td>
<td><a href="/wiki/File:Chevrolet_LUV_02.JPG" class="image"><img alt="Chevrolet LUV 02.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Chevrolet_LUV_02.JPG/120px-Chevrolet_LUV_02.JPG" width="120" height="66" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Chevrolet_LUV_02.JPG/180px-Chevrolet_LUV_02.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Chevrolet_LUV_02.JPG/240px-Chevrolet_LUV_02.JPG 2x" data-file-width="1280" data-file-height="700" /></a><br />
<a href="/wiki/File:Chevy_LUV_second_gen.jpg" class="image"><img alt="Chevy LUV second gen.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/96/Chevy_LUV_second_gen.jpg/120px-Chevy_LUV_second_gen.jpg" width="120" height="64" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/96/Chevy_LUV_second_gen.jpg/180px-Chevy_LUV_second_gen.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/96/Chevy_LUV_second_gen.jpg/240px-Chevy_LUV_second_gen.jpg 2x" data-file-width="2694" data-file-height="1442" /></a><br />
<a href="/wiki/File:Luv_v6_2005_4x4.jpg" class="image"><img alt="Luv v6 2005 4x4.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Luv_v6_2005_4x4.jpg/120px-Luv_v6_2005_4x4.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Luv_v6_2005_4x4.jpg/180px-Luv_v6_2005_4x4.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Luv_v6_2005_4x4.jpg/240px-Luv_v6_2005_4x4.jpg 2x" data-file-width="1500" data-file-height="1125" /></a></td>
<td>Compact</td>
<td>1972-2005</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_El_Camino" title="Chevrolet El Camino">Chevrolet El Camino</a></td>
<td><a href="/wiki/File:59_El_Camino.jpg" class="image"><img alt="59 El Camino.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/df/59_El_Camino.jpg/120px-59_El_Camino.jpg" width="120" height="96" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/df/59_El_Camino.jpg/180px-59_El_Camino.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/df/59_El_Camino.jpg/240px-59_El_Camino.jpg 2x" data-file-width="3000" data-file-height="2400" /></a><br />
<a href="/wiki/File:1964_El_Camino.jpg" class="image"><img alt="1964 El Camino.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1f/1964_El_Camino.jpg/120px-1964_El_Camino.jpg" width="120" height="67" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1f/1964_El_Camino.jpg/180px-1964_El_Camino.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1f/1964_El_Camino.jpg/240px-1964_El_Camino.jpg 2x" data-file-width="480" data-file-height="267" /></a><br />
<a href="/wiki/File:1972_El_Camino.jpg" class="image"><img alt="1972 El Camino.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4c/1972_El_Camino.jpg/120px-1972_El_Camino.jpg" width="120" height="63" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4c/1972_El_Camino.jpg/180px-1972_El_Camino.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4c/1972_El_Camino.jpg/240px-1972_El_Camino.jpg 2x" data-file-width="300" data-file-height="158" /></a><br />
<a href="/wiki/File:1973_El_Camino.jpg" class="image"><img alt="1973 El Camino.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/1973_El_Camino.jpg/120px-1973_El_Camino.jpg" width="120" height="61" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/1973_El_Camino.jpg/180px-1973_El_Camino.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d4/1973_El_Camino.jpg/240px-1973_El_Camino.jpg 2x" data-file-width="878" data-file-height="445" /></a><br />
<a href="/wiki/File:78_El_Camino.jpg" class="image"><img alt="78 El Camino.jpg" src="//upload.wikimedia.org/wikipedia/en/thumb/c/ca/78_El_Camino.jpg/120px-78_El_Camino.jpg" width="120" height="71" srcset="//upload.wikimedia.org/wikipedia/en/thumb/c/ca/78_El_Camino.jpg/180px-78_El_Camino.jpg 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/c/ca/78_El_Camino.jpg/240px-78_El_Camino.jpg 2x" data-file-width="388" data-file-height="228" /></a></td>
<td>Coupe</td>
<td>1959-1987</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_Chevette" title="Chevrolet Chevette">Chevrolet Chevy 500</a></td>
<td><a href="/wiki/File:Late_Chevrolet_Chevy_500_in_Cosm%C3%B3polis.jpg" class="image"><img alt="Late Chevrolet Chevy 500 in Cosmópolis.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Late_Chevrolet_Chevy_500_in_Cosm%C3%B3polis.jpg/120px-Late_Chevrolet_Chevy_500_in_Cosm%C3%B3polis.jpg" width="120" height="58" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Late_Chevrolet_Chevy_500_in_Cosm%C3%B3polis.jpg/180px-Late_Chevrolet_Chevy_500_in_Cosm%C3%B3polis.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Late_Chevrolet_Chevy_500_in_Cosm%C3%B3polis.jpg/240px-Late_Chevrolet_Chevy_500_in_Cosm%C3%B3polis.jpg 2x" data-file-width="864" data-file-height="415" /></a></td>
<td>Coupe</td>
<td>1983-1994</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_D-20" title="Chevrolet D-20">Chevrolet D-20</a></td>
<td><a href="/wiki/File:ChevroletD201992Conquest.jpg" class="image"><img alt="ChevroletD201992Conquest.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/31/ChevroletD201992Conquest.jpg/120px-ChevroletD201992Conquest.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/31/ChevroletD201992Conquest.jpg/180px-ChevroletD201992Conquest.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/31/ChevroletD201992Conquest.jpg/240px-ChevroletD201992Conquest.jpg 2x" data-file-width="680" data-file-height="510" /></a></td>
<td>Compact</td>
<td>1985-1996</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_SSR" title="Chevrolet SSR">Chevrolet SSR</a></td>
<td><a href="/wiki/File:Chevrolet_SSR.jpg" class="image"><img alt="Chevrolet SSR.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Chevrolet_SSR.jpg/120px-Chevrolet_SSR.jpg" width="120" height="81" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Chevrolet_SSR.jpg/180px-Chevrolet_SSR.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Chevrolet_SSR.jpg/240px-Chevrolet_SSR.jpg 2x" data-file-width="1864" data-file-height="1265" /></a></td>
<td>Compact?</td>
<td>2003-2006</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_Avalanche" title="Chevrolet Avalanche">Chevrolet Avalanche</a></td>
<td><a href="/wiki/File:1st-Chevrolet-Avalanche.jpg" class="image"><img alt="1st-Chevrolet-Avalanche.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/1st-Chevrolet-Avalanche.jpg/120px-1st-Chevrolet-Avalanche.jpg" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/1st-Chevrolet-Avalanche.jpg/180px-1st-Chevrolet-Avalanche.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fe/1st-Chevrolet-Avalanche.jpg/240px-1st-Chevrolet-Avalanche.jpg 2x" data-file-width="2344" data-file-height="1320" /></a><br />
<a href="/wiki/File:2007_Chevrolet_Avalanche_LS.jpg" class="image"><img alt="2007 Chevrolet Avalanche LS.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/10/2007_Chevrolet_Avalanche_LS.jpg/120px-2007_Chevrolet_Avalanche_LS.jpg" width="120" height="69" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/10/2007_Chevrolet_Avalanche_LS.jpg/180px-2007_Chevrolet_Avalanche_LS.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/10/2007_Chevrolet_Avalanche_LS.jpg/240px-2007_Chevrolet_Avalanche_LS.jpg 2x" data-file-width="1506" data-file-height="862" /></a></td>
<td>Fullsize</td>
<td>2001-2013</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_Kodiak" title="Chevrolet Kodiak">Chevrolet Kodiak Pickup</a></td>
<td><a href="/wiki/File:Ironhide-movievehicle.jpg" class="image"><img alt="Ironhide-movievehicle.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Ironhide-movievehicle.jpg/120px-Ironhide-movievehicle.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Ironhide-movievehicle.jpg/180px-Ironhide-movievehicle.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Ironhide-movievehicle.jpg/240px-Ironhide-movievehicle.jpg 2x" data-file-width="2608" data-file-height="1952" /></a></td>
<td>Heavy Duty</td>
<td>2003-2009</td>
</tr>
<tr>
<td><a href="/wiki/Dacia" title="Dacia">Dacia</a></td>
<td><a href="/wiki/Dacia_Pick-Up" title="Dacia Pick-Up">Dacia Pick-Up</a></td>
<td><a href="/wiki/File:Dacia_Double_Cab.jpg" class="image"><img alt="Dacia Double Cab.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/96/Dacia_Double_Cab.jpg/120px-Dacia_Double_Cab.jpg" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/96/Dacia_Double_Cab.jpg/180px-Dacia_Double_Cab.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/96/Dacia_Double_Cab.jpg/240px-Dacia_Double_Cab.jpg 2x" data-file-width="730" data-file-height="504" /></a></td>
<td>Compact</td>
<td>1975-2006</td>
</tr>
<tr>
<td><a href="/wiki/Dacia" title="Dacia">Dacia</a></td>
<td><a href="/wiki/Dacia_Logan" title="Dacia Logan">Dacia Logan Pickup</a></td>
<td><a href="/wiki/File:Dacia_Logan_Pickup_rot.JPG" class="image"><img alt="Dacia Logan Pickup rot.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/72/Dacia_Logan_Pickup_rot.JPG/120px-Dacia_Logan_Pickup_rot.JPG" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/72/Dacia_Logan_Pickup_rot.JPG/180px-Dacia_Logan_Pickup_rot.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/72/Dacia_Logan_Pickup_rot.JPG/240px-Dacia_Logan_Pickup_rot.JPG 2x" data-file-width="1500" data-file-height="1032" /></a></td>
<td>Coupe</td>
<td>2007-2012</td>
</tr>
<tr>
<td><a href="/wiki/Dadi_Auto" title="Dadi Auto">Dadi</a></td>
<td><a href="/w/index.php?title=Dadi_Changye&amp;action=edit&amp;redlink=1" class="new" title="Dadi Changye (page does not exist)">Dadi Changye</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Compact</td>
<td>&#160;????-????</td>
</tr>
<tr>
<td><a href="/wiki/Datsun" title="Datsun">Datsun</a></td>
<td><a href="/wiki/Datsun_Truck" title="Datsun Truck">Datsun Truck</a></td>
<td><a href="/wiki/File:Datsun220truck.jpg" class="image"><img alt="Datsun220truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Datsun220truck.jpg/120px-Datsun220truck.jpg" width="120" height="84" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Datsun220truck.jpg/180px-Datsun220truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Datsun220truck.jpg/240px-Datsun220truck.jpg 2x" data-file-width="800" data-file-height="561" /></a><br />
<a href="/wiki/File:Datsun1300PickupEsplanadeFront.jpg" class="image"><img alt="Datsun1300PickupEsplanadeFront.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/06/Datsun1300PickupEsplanadeFront.jpg/120px-Datsun1300PickupEsplanadeFront.jpg" width="120" height="70" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/06/Datsun1300PickupEsplanadeFront.jpg/180px-Datsun1300PickupEsplanadeFront.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/06/Datsun1300PickupEsplanadeFront.jpg/240px-Datsun1300PickupEsplanadeFront.jpg 2x" data-file-width="1828" data-file-height="1068" /></a><br />
<a href="/wiki/File:Datsun_620_truck.jpg" class="image"><img alt="Datsun 620 truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/Datsun_620_truck.jpg/120px-Datsun_620_truck.jpg" width="120" height="73" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/Datsun_620_truck.jpg/180px-Datsun_620_truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/38/Datsun_620_truck.jpg/240px-Datsun_620_truck.jpg 2x" data-file-width="1280" data-file-height="780" /></a><br />
<a href="/wiki/File:Nissan-720.jpg" class="image"><img alt="Nissan-720.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Nissan-720.jpg/120px-Nissan-720.jpg" width="120" height="71" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Nissan-720.jpg/180px-Nissan-720.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Nissan-720.jpg/240px-Nissan-720.jpg 2x" data-file-width="2624" data-file-height="1556" /></a></td>
<td>Compact</td>
<td>1955-1986</td>
</tr>
<tr>
<td>Dodge</td>
<td><a href="/wiki/Dodge_B-Series" class="mw-redirect" title="Dodge B-Series">Dodge B-Series</a></td>
<td><a href="/wiki/File:Dodge-truck.jpg" class="image"><img alt="Dodge-truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/40/Dodge-truck.jpg/120px-Dodge-truck.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/40/Dodge-truck.jpg/180px-Dodge-truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/40/Dodge-truck.jpg/240px-Dodge-truck.jpg 2x" data-file-width="3664" data-file-height="2748" /></a></td>
<td>Fullsize</td>
<td>1948-1953</td>
</tr>
<tr>
<td>Dodge</td>
<td><a href="/wiki/Dodge_M37" title="Dodge M37">Dodge M37</a></td>
<td><a href="/wiki/File:1960DodgeM-37-34Ton.jpg" class="image"><img alt="1960DodgeM-37-34Ton.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ec/1960DodgeM-37-34Ton.jpg/120px-1960DodgeM-37-34Ton.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ec/1960DodgeM-37-34Ton.jpg/180px-1960DodgeM-37-34Ton.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ec/1960DodgeM-37-34Ton.jpg/240px-1960DodgeM-37-34Ton.jpg 2x" data-file-width="2272" data-file-height="1704" /></a></td>
<td>Fullsize</td>
<td>1951–1968</td>
</tr>
<tr>
<td>Dodge</td>
<td><a href="/wiki/Dodge_C_Series" title="Dodge C Series">Dodge C Series</a></td>
<td><a href="/wiki/File:1957_Dodge_C-100_Sweptside_Pickup.jpg" class="image"><img alt="1957 Dodge C-100 Sweptside Pickup.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/88/1957_Dodge_C-100_Sweptside_Pickup.jpg/120px-1957_Dodge_C-100_Sweptside_Pickup.jpg" width="120" height="71" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/88/1957_Dodge_C-100_Sweptside_Pickup.jpg/180px-1957_Dodge_C-100_Sweptside_Pickup.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/88/1957_Dodge_C-100_Sweptside_Pickup.jpg/240px-1957_Dodge_C-100_Sweptside_Pickup.jpg 2x" data-file-width="1027" data-file-height="607" /></a></td>
<td>Fullsize</td>
<td>1954-1960</td>
</tr>
<tr>
<td>Dodge</td>
<td><a href="/wiki/Dodge_D-Series" class="mw-redirect" title="Dodge D-Series">Dodge D-Series</a></td>
<td><a href="/wiki/File:1961_Dodge_100_(1976).jpg" class="image"><img alt="1961 Dodge 100 (1976).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3d/1961_Dodge_100_%281976%29.jpg/120px-1961_Dodge_100_%281976%29.jpg" width="120" height="98" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3d/1961_Dodge_100_%281976%29.jpg/180px-1961_Dodge_100_%281976%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3d/1961_Dodge_100_%281976%29.jpg/240px-1961_Dodge_100_%281976%29.jpg 2x" data-file-width="1000" data-file-height="820" /></a><br />
<a href="/wiki/File:1971_Dodge_D-100.jpg" class="image"><img alt="1971 Dodge D-100.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/09/1971_Dodge_D-100.jpg/120px-1971_Dodge_D-100.jpg" width="120" height="89" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/09/1971_Dodge_D-100.jpg/180px-1971_Dodge_D-100.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/09/1971_Dodge_D-100.jpg/240px-1971_Dodge_D-100.jpg 2x" data-file-width="1024" data-file-height="761" /></a><br />
<a href="/wiki/File:Dodge_Custom_100.jpg" class="image"><img alt="Dodge Custom 100.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Dodge_Custom_100.jpg/120px-Dodge_Custom_100.jpg" width="120" height="61" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Dodge_Custom_100.jpg/180px-Dodge_Custom_100.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Dodge_Custom_100.jpg/240px-Dodge_Custom_100.jpg 2x" data-file-width="2178" data-file-height="1110" /></a><br />
<a href="/wiki/File:1983_Dodge_D150_Sweptline.jpg" class="image"><img alt="1983 Dodge D150 Sweptline.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8b/1983_Dodge_D150_Sweptline.jpg/120px-1983_Dodge_D150_Sweptline.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8b/1983_Dodge_D150_Sweptline.jpg/180px-1983_Dodge_D150_Sweptline.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8b/1983_Dodge_D150_Sweptline.jpg/240px-1983_Dodge_D150_Sweptline.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>Fullsize</td>
<td>1961–1993</td>
</tr>
<tr>
<td>Dodge</td>
<td><a href="/wiki/Mitsubishi_Triton" title="Mitsubishi Triton">Dodge Ram 50/D50</a></td>
<td><a href="/wiki/File:1983DodgeRam50.jpg" class="image"><img alt="1983DodgeRam50.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b7/1983DodgeRam50.jpg/120px-1983DodgeRam50.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b7/1983DodgeRam50.jpg/180px-1983DodgeRam50.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b7/1983DodgeRam50.jpg/240px-1983DodgeRam50.jpg 2x" data-file-width="2164" data-file-height="1392" /></a><br />
<a href="/wiki/File:Dodge-Ram-50.jpg" class="image"><img alt="Dodge-Ram-50.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Dodge-Ram-50.jpg/120px-Dodge-Ram-50.jpg" width="120" height="73" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Dodge-Ram-50.jpg/180px-Dodge-Ram-50.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Dodge-Ram-50.jpg/240px-Dodge-Ram-50.jpg 2x" data-file-width="2514" data-file-height="1536" /></a></td>
<td>Compact</td>
<td>1979-1996</td>
</tr>
<tr>
<td>Dodge</td>
<td><a href="/wiki/Dodge_Rampage" title="Dodge Rampage">Dodge Rampage</a></td>
<td><a href="/wiki/File:1983_Dodge_Rampage.jpg" class="image"><img alt="1983 Dodge Rampage.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/45/1983_Dodge_Rampage.jpg/120px-1983_Dodge_Rampage.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/45/1983_Dodge_Rampage.jpg/180px-1983_Dodge_Rampage.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/45/1983_Dodge_Rampage.jpg/240px-1983_Dodge_Rampage.jpg 2x" data-file-width="2048" data-file-height="1536" /></a></td>
<td>Coupe</td>
<td>1982-1984</td>
</tr>
<tr>
<td>Dodge</td>
<td><a href="/wiki/Dodge_Dakota" title="Dodge Dakota">Dodge Dakota</a></td>
<td><a href="/wiki/File:Dodge_Dakota_1994_SLT.JPG" class="image"><img alt="Dodge Dakota 1994 SLT.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/13/Dodge_Dakota_1994_SLT.JPG/120px-Dodge_Dakota_1994_SLT.JPG" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/13/Dodge_Dakota_1994_SLT.JPG/180px-Dodge_Dakota_1994_SLT.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/13/Dodge_Dakota_1994_SLT.JPG/240px-Dodge_Dakota_1994_SLT.JPG 2x" data-file-width="800" data-file-height="453" /></a><br />
<a href="/wiki/File:Dodge_Dakota_Quad_Cab_Sport.jpg" class="image"><img alt="Dodge Dakota Quad Cab Sport.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Dodge_Dakota_Quad_Cab_Sport.jpg/120px-Dodge_Dakota_Quad_Cab_Sport.jpg" width="120" height="70" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Dodge_Dakota_Quad_Cab_Sport.jpg/180px-Dodge_Dakota_Quad_Cab_Sport.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Dodge_Dakota_Quad_Cab_Sport.jpg/240px-Dodge_Dakota_Quad_Cab_Sport.jpg 2x" data-file-width="2086" data-file-height="1220" /></a><br />
<a href="/wiki/File:Dodge-Dakota-extended.jpg" class="image"><img alt="Dodge-Dakota-extended.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/51/Dodge-Dakota-extended.jpg/120px-Dodge-Dakota-extended.jpg" width="120" height="63" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/51/Dodge-Dakota-extended.jpg/180px-Dodge-Dakota-extended.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/51/Dodge-Dakota-extended.jpg/240px-Dodge-Dakota-extended.jpg 2x" data-file-width="1056" data-file-height="552" /></a></td>
<td>Midsize</td>
<td>1987-2011</td>
</tr>
<tr>
<td>Dodge</td>
<td><a href="/wiki/Dodge_Ram_SRT-10" title="Dodge Ram SRT-10">Dodge Ram SRT-10</a></td>
<td><a href="/wiki/File:Dodge_Ram_SRT-10.jpg" class="image"><img alt="Dodge Ram SRT-10.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/46/Dodge_Ram_SRT-10.jpg/120px-Dodge_Ram_SRT-10.jpg" width="120" height="85" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/46/Dodge_Ram_SRT-10.jpg/180px-Dodge_Ram_SRT-10.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/46/Dodge_Ram_SRT-10.jpg/240px-Dodge_Ram_SRT-10.jpg 2x" data-file-width="1981" data-file-height="1404" /></a></td>
<td>Fullsize</td>
<td>2004-2006</td>
</tr>
<tr>
<td>Dodge</td>
<td><a href="/wiki/Dodge_Ram_Rumble_Bee" title="Dodge Ram Rumble Bee">Dodge Ram Rumble Bee</a></td>
<td><a href="/wiki/File:My_Rumble_BEE_truck_0254.JPG" class="image"><img alt="My Rumble BEE truck 0254.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/25/My_Rumble_BEE_truck_0254.JPG/120px-My_Rumble_BEE_truck_0254.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/25/My_Rumble_BEE_truck_0254.JPG/180px-My_Rumble_BEE_truck_0254.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/25/My_Rumble_BEE_truck_0254.JPG/240px-My_Rumble_BEE_truck_0254.JPG 2x" data-file-width="2048" data-file-height="1536" /></a></td>
<td>Fullsize</td>
<td>2000-2005</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Envision_Motor_Company&amp;action=edit&amp;redlink=1" class="new" title="Envision Motor Company (page does not exist)">EMC</a></td>
<td><a href="/wiki/Dacia_Logan" title="Dacia Logan">EMC Electric Truck</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Electric Coupe</td>
<td>2010-????</td>
</tr>
<tr>
<td><a href="/wiki/Fiat_Automobiles" title="Fiat Automobiles">Fiat Automobiles</a></td>
<td><a href="/wiki/Fiat_Fiorino" title="Fiat Fiorino">Fiat Fiorino</a></td>
<td><a href="/wiki/File:Fiat_Fiorino_D.jpg" class="image"><img alt="Fiat Fiorino D.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Fiat_Fiorino_D.jpg/120px-Fiat_Fiorino_D.jpg" width="120" height="95" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Fiat_Fiorino_D.jpg/180px-Fiat_Fiorino_D.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Fiat_Fiorino_D.jpg/240px-Fiat_Fiorino_D.jpg 2x" data-file-width="1514" data-file-height="1199" /></a><br />
<a href="/wiki/File:Fiat_Fiorino_Fire_Cargo_ano_2008.jpg" class="image"><img alt="Fiat Fiorino Fire Cargo ano 2008.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/46/Fiat_Fiorino_Fire_Cargo_ano_2008.jpg/120px-Fiat_Fiorino_Fire_Cargo_ano_2008.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/46/Fiat_Fiorino_Fire_Cargo_ano_2008.jpg/180px-Fiat_Fiorino_Fire_Cargo_ano_2008.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/46/Fiat_Fiorino_Fire_Cargo_ano_2008.jpg/240px-Fiat_Fiorino_Fire_Cargo_ano_2008.jpg 2x" data-file-width="1508" data-file-height="1131" /></a></td>
<td>Compact</td>
<td>1977-2013</td>
</tr>
<tr>
<td><a href="/wiki/Ford" class="mw-redirect" title="Ford">Ford</a></td>
<td><a href="/wiki/Ford_Falcon_(Australia)" title="Ford Falcon (Australia)">Ford Falcon Ute</a></td>
<td><a href="/wiki/File:2015_Ford_Falcon_(FG_X)_XR6_Turbo_utility_(19159447959).jpg" class="image"><img alt="2015 Ford Falcon (FG X) XR6 Turbo utility (19159447959).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/30/2015_Ford_Falcon_%28FG_X%29_XR6_Turbo_utility_%2819159447959%29.jpg/120px-2015_Ford_Falcon_%28FG_X%29_XR6_Turbo_utility_%2819159447959%29.jpg" width="120" height="73" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/30/2015_Ford_Falcon_%28FG_X%29_XR6_Turbo_utility_%2819159447959%29.jpg/180px-2015_Ford_Falcon_%28FG_X%29_XR6_Turbo_utility_%2819159447959%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/30/2015_Ford_Falcon_%28FG_X%29_XR6_Turbo_utility_%2819159447959%29.jpg/240px-2015_Ford_Falcon_%28FG_X%29_XR6_Turbo_utility_%2819159447959%29.jpg 2x" data-file-width="4646" data-file-height="2814" /></a></td>
<td>Coupe</td>
<td>Australia, New Zealand</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_Model_T" title="Ford Model T">Ford Model T Pickup</a></td>
<td><a href="/wiki/File:1922_Ford_Model_T_Pickup_2.jpg" class="image"><img alt="1922 Ford Model T Pickup 2.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/67/1922_Ford_Model_T_Pickup_2.jpg/120px-1922_Ford_Model_T_Pickup_2.jpg" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/67/1922_Ford_Model_T_Pickup_2.jpg/180px-1922_Ford_Model_T_Pickup_2.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/67/1922_Ford_Model_T_Pickup_2.jpg/240px-1922_Ford_Model_T_Pickup_2.jpg 2x" data-file-width="800" data-file-height="520" /></a></td>
<td>Compact</td>
<td>1925-1927</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_P100" title="Ford P100">Ford P100</a></td>
<td><a href="/wiki/File:1981_Ford_Cortina_Mk_V_Bakkie_Pickup.jpg" class="image"><img alt="1981 Ford Cortina Mk V Bakkie Pickup.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/81/1981_Ford_Cortina_Mk_V_Bakkie_Pickup.jpg/120px-1981_Ford_Cortina_Mk_V_Bakkie_Pickup.jpg" width="120" height="91" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/81/1981_Ford_Cortina_Mk_V_Bakkie_Pickup.jpg/180px-1981_Ford_Cortina_Mk_V_Bakkie_Pickup.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/81/1981_Ford_Cortina_Mk_V_Bakkie_Pickup.jpg/240px-1981_Ford_Cortina_Mk_V_Bakkie_Pickup.jpg 2x" data-file-width="3273" data-file-height="2481" /></a><br />
<a href="/wiki/File:Ford_P100.jpg" class="image"><img alt="Ford P100.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Ford_P100.jpg/120px-Ford_P100.jpg" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Ford_P100.jpg/180px-Ford_P100.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Ford_P100.jpg/240px-Ford_P100.jpg 2x" data-file-width="1632" data-file-height="920" /></a></td>
<td>Coupe</td>
<td>1971-1993</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_Ranchero" title="Ford Ranchero">Ford Ranchero</a></td>
<td><a href="/wiki/File:Ford_Ranchero_1958_frontleft_2006-04-08_U.jpg" class="image"><img alt="Ford Ranchero 1958 frontleft 2006-04-08 U.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/08/Ford_Ranchero_1958_frontleft_2006-04-08_U.jpg/120px-Ford_Ranchero_1958_frontleft_2006-04-08_U.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/08/Ford_Ranchero_1958_frontleft_2006-04-08_U.jpg/180px-Ford_Ranchero_1958_frontleft_2006-04-08_U.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/08/Ford_Ranchero_1958_frontleft_2006-04-08_U.jpg/240px-Ford_Ranchero_1958_frontleft_2006-04-08_U.jpg 2x" data-file-width="2048" data-file-height="1536" /></a><br />
<a href="/wiki/File:%2766_Ford_Ranchero_(5eme_picnic_et_BBQ_2011_du_club_de_Lowrider_LuxuriouS_Montr%C3%A9al).jpg" class="image"><img alt="'66 Ford Ranchero (5eme picnic et BBQ 2011 du club de Lowrider LuxuriouS Montréal).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/01/%2766_Ford_Ranchero_%285eme_picnic_et_BBQ_2011_du_club_de_Lowrider_LuxuriouS_Montr%C3%A9al%29.jpg/120px-%2766_Ford_Ranchero_%285eme_picnic_et_BBQ_2011_du_club_de_Lowrider_LuxuriouS_Montr%C3%A9al%29.jpg" width="120" height="55" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/01/%2766_Ford_Ranchero_%285eme_picnic_et_BBQ_2011_du_club_de_Lowrider_LuxuriouS_Montr%C3%A9al%29.jpg/180px-%2766_Ford_Ranchero_%285eme_picnic_et_BBQ_2011_du_club_de_Lowrider_LuxuriouS_Montr%C3%A9al%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/01/%2766_Ford_Ranchero_%285eme_picnic_et_BBQ_2011_du_club_de_Lowrider_LuxuriouS_Montr%C3%A9al%29.jpg/240px-%2766_Ford_Ranchero_%285eme_picnic_et_BBQ_2011_du_club_de_Lowrider_LuxuriouS_Montr%C3%A9al%29.jpg 2x" data-file-width="1243" data-file-height="567" /></a><br />
<a href="/wiki/File:1967_Ford_Fairlane_Ranchero.jpg" class="image"><img alt="1967 Ford Fairlane Ranchero.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f5/1967_Ford_Fairlane_Ranchero.jpg/120px-1967_Ford_Fairlane_Ranchero.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f5/1967_Ford_Fairlane_Ranchero.jpg/180px-1967_Ford_Fairlane_Ranchero.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f5/1967_Ford_Fairlane_Ranchero.jpg/240px-1967_Ford_Fairlane_Ranchero.jpg 2x" data-file-width="800" data-file-height="600" /></a><br />
<a href="/wiki/File:Red1968FordRanchero.jpg" class="image"><img alt="Red1968FordRanchero.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Red1968FordRanchero.jpg/120px-Red1968FordRanchero.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Red1968FordRanchero.jpg/180px-Red1968FordRanchero.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/52/Red1968FordRanchero.jpg/240px-Red1968FordRanchero.jpg 2x" data-file-width="1024" data-file-height="768" /></a><br />
<a href="/wiki/File:1970RancheroSquire.jpg" class="image"><img alt="1970RancheroSquire.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c1/1970RancheroSquire.jpg/120px-1970RancheroSquire.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c1/1970RancheroSquire.jpg/180px-1970RancheroSquire.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c1/1970RancheroSquire.jpg/240px-1970RancheroSquire.jpg 2x" data-file-width="1024" data-file-height="768" /></a><br />
<a href="/wiki/File:Ford_Ranchero.jpg" class="image"><img alt="Ford Ranchero.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/06/Ford_Ranchero.jpg/120px-Ford_Ranchero.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/06/Ford_Ranchero.jpg/180px-Ford_Ranchero.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/06/Ford_Ranchero.jpg/240px-Ford_Ranchero.jpg 2x" data-file-width="3664" data-file-height="2748" /></a><br />
<a href="/wiki/File:%2777_Ford_Ranchero_(Toronto_Spring_%2712_Classic_Car_Auction).JPG" class="image"><img alt="'77 Ford Ranchero (Toronto Spring '12 Classic Car Auction).JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/60/%2777_Ford_Ranchero_%28Toronto_Spring_%2712_Classic_Car_Auction%29.JPG/120px-%2777_Ford_Ranchero_%28Toronto_Spring_%2712_Classic_Car_Auction%29.JPG" width="120" height="65" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/60/%2777_Ford_Ranchero_%28Toronto_Spring_%2712_Classic_Car_Auction%29.JPG/180px-%2777_Ford_Ranchero_%28Toronto_Spring_%2712_Classic_Car_Auction%29.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/60/%2777_Ford_Ranchero_%28Toronto_Spring_%2712_Classic_Car_Auction%29.JPG/240px-%2777_Ford_Ranchero_%28Toronto_Spring_%2712_Classic_Car_Auction%29.JPG 2x" data-file-width="1433" data-file-height="777" /></a></td>
<td>Coupe</td>
<td>1957-1979</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_Ranger_(North_America)" title="Ford Ranger (North America)">North American Ford Ranger</a></td>
<td><a href="/wiki/File:1st-Ford-Ranger.jpg" class="image"><img alt="1st-Ford-Ranger.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/18/1st-Ford-Ranger.jpg/120px-1st-Ford-Ranger.jpg" width="120" height="81" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/18/1st-Ford-Ranger.jpg/180px-1st-Ford-Ranger.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/18/1st-Ford-Ranger.jpg/240px-1st-Ford-Ranger.jpg 2x" data-file-width="1044" data-file-height="708" /></a><br />
<a href="/wiki/File:1989_Ford_Ranger.JPG" class="image"><img alt="1989 Ford Ranger.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b3/1989_Ford_Ranger.JPG/120px-1989_Ford_Ranger.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b3/1989_Ford_Ranger.JPG/180px-1989_Ford_Ranger.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b3/1989_Ford_Ranger.JPG/240px-1989_Ford_Ranger.JPG 2x" data-file-width="640" data-file-height="480" /></a><br />
<a href="/wiki/File:97Vermillion.jpg" class="image"><img alt="97Vermillion.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a0/97Vermillion.jpg/120px-97Vermillion.jpg" width="120" height="58" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a0/97Vermillion.jpg/180px-97Vermillion.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a0/97Vermillion.jpg/240px-97Vermillion.jpg 2x" data-file-width="774" data-file-height="376" /></a><br />
<a href="/wiki/File:98-00_Ford_Ranger.jpg" class="image"><img alt="98-00 Ford Ranger.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/09/98-00_Ford_Ranger.jpg/120px-98-00_Ford_Ranger.jpg" width="120" height="69" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/09/98-00_Ford_Ranger.jpg/180px-98-00_Ford_Ranger.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/09/98-00_Ford_Ranger.jpg/240px-98-00_Ford_Ranger.jpg 2x" data-file-width="1476" data-file-height="852" /></a><br />
<a href="/wiki/File:06-08_Ford_Ranger.jpg" class="image"><img alt="06-08 Ford Ranger.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f3/06-08_Ford_Ranger.jpg/120px-06-08_Ford_Ranger.jpg" width="120" height="66" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f3/06-08_Ford_Ranger.jpg/180px-06-08_Ford_Ranger.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f3/06-08_Ford_Ranger.jpg/240px-06-08_Ford_Ranger.jpg 2x" data-file-width="1637" data-file-height="906" /></a></td>
<td>Compact</td>
<td>1983-2012</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_Explorer_Sport_Trac" title="Ford Explorer Sport Trac">Ford Explorer Sport Trac</a></td>
<td><a href="/wiki/File:1st-Ford-Explorer-Sport-Trac.jpg" class="image"><img alt="1st-Ford-Explorer-Sport-Trac.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/44/1st-Ford-Explorer-Sport-Trac.jpg/120px-1st-Ford-Explorer-Sport-Trac.jpg" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/44/1st-Ford-Explorer-Sport-Trac.jpg/180px-1st-Ford-Explorer-Sport-Trac.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/44/1st-Ford-Explorer-Sport-Trac.jpg/240px-1st-Ford-Explorer-Sport-Trac.jpg 2x" data-file-width="2356" data-file-height="1632" /></a><br />
<a href="/wiki/File:2009_Ford_Sport_Trac_XLT.jpg" class="image"><img alt="2009 Ford Sport Trac XLT.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/de/2009_Ford_Sport_Trac_XLT.jpg/120px-2009_Ford_Sport_Trac_XLT.jpg" width="120" height="81" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/de/2009_Ford_Sport_Trac_XLT.jpg/180px-2009_Ford_Sport_Trac_XLT.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/de/2009_Ford_Sport_Trac_XLT.jpg/240px-2009_Ford_Sport_Trac_XLT.jpg 2x" data-file-width="2718" data-file-height="1824" /></a></td>
<td>Midsize</td>
<td>2000-2010</td>
</tr>
<tr>
<td><a href="/wiki/Ford" class="mw-redirect" title="Ford">Ford</a></td>
<td><a href="/wiki/Ford_Bantam" title="Ford Bantam">Ford Bantam</a></td>
<td><a href="/wiki/File:Ford_Bantam_Leisure_ZA.jpg" class="image"><img alt="Ford Bantam Leisure ZA.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Ford_Bantam_Leisure_ZA.jpg/120px-Ford_Bantam_Leisure_ZA.jpg" width="120" height="72" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Ford_Bantam_Leisure_ZA.jpg/180px-Ford_Bantam_Leisure_ZA.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Ford_Bantam_Leisure_ZA.jpg/240px-Ford_Bantam_Leisure_ZA.jpg 2x" data-file-width="402" data-file-height="240" /></a></td>
<td>Coupe</td>
<td>1983-2011</td>
</tr>
<tr>
<td><a href="/wiki/Ford_Performance_Vehicles" title="Ford Performance Vehicles">FPV</a></td>
<td><a href="/w/index.php?title=FPV_GS_Ute&amp;action=edit&amp;redlink=1" class="new" title="FPV GS Ute (page does not exist)">FPV GS Ute</a></td>
<td><a href="/wiki/File:2009_FPV_GS_(FG)_utility_01.jpg" class="image"><img alt="2009 FPV GS (FG) utility 01.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8a/2009_FPV_GS_%28FG%29_utility_01.jpg/120px-2009_FPV_GS_%28FG%29_utility_01.jpg" width="120" height="47" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8a/2009_FPV_GS_%28FG%29_utility_01.jpg/180px-2009_FPV_GS_%28FG%29_utility_01.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8a/2009_FPV_GS_%28FG%29_utility_01.jpg/240px-2009_FPV_GS_%28FG%29_utility_01.jpg 2x" data-file-width="2966" data-file-height="1150" /></a></td>
<td>Coupe</td>
<td>Australia</td>
</tr>
<tr>
<td><a href="/wiki/Ford_Performance_Vehicles" title="Ford Performance Vehicles">FPV</a></td>
<td><a href="/w/index.php?title=FPV_F6_Ute&amp;action=edit&amp;redlink=1" class="new" title="FPV F6 Ute (page does not exist)">FPV F6 Ute</a></td>
<td><a href="/wiki/File:FPV_F6_(FG)_ute.jpg" class="image"><img alt="FPV F6 (FG) ute.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5f/FPV_F6_%28FG%29_ute.jpg/120px-FPV_F6_%28FG%29_ute.jpg" width="120" height="66" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5f/FPV_F6_%28FG%29_ute.jpg/180px-FPV_F6_%28FG%29_ute.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5f/FPV_F6_%28FG%29_ute.jpg/240px-FPV_F6_%28FG%29_ute.jpg 2x" data-file-width="2000" data-file-height="1099" /></a></td>
<td>sport Coupe</td>
<td>Australia</td>
</tr>
<tr>
<td><a href="/wiki/GAZ" title="GAZ">GAZ</a></td>
<td><a href="/wiki/GAZ-M1" title="GAZ-M1">GAZ-415</a></td>
<td></td>
<td>Compact</td>
<td>1939-1941</td>
</tr>
<tr>
<td>GMC</td>
<td><a href="/wiki/Chevrolet_S-10" title="Chevrolet S-10">GMC Sonoma</a></td>
<td><a href="/wiki/File:1st_GMC_Sonoma_--_09-28-2011.jpg" class="image"><img alt="1st GMC Sonoma -- 09-28-2011.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/15/1st_GMC_Sonoma_--_09-28-2011.jpg/120px-1st_GMC_Sonoma_--_09-28-2011.jpg" width="120" height="66" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/15/1st_GMC_Sonoma_--_09-28-2011.jpg/180px-1st_GMC_Sonoma_--_09-28-2011.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/15/1st_GMC_Sonoma_--_09-28-2011.jpg/240px-1st_GMC_Sonoma_--_09-28-2011.jpg 2x" data-file-width="2173" data-file-height="1192" /></a></td>
<td>Compact</td>
<td>1982-2004</td>
</tr>
<tr>
<td>GMC</td>
<td><a href="/wiki/GMC_Syclone" title="GMC Syclone">GMC Syclone</a></td>
<td><a href="/wiki/File:GMCSyclone.jpg" class="image"><img alt="GMCSyclone.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1f/GMCSyclone.jpg/120px-GMCSyclone.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1f/GMCSyclone.jpg/180px-GMCSyclone.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1f/GMCSyclone.jpg/240px-GMCSyclone.jpg 2x" data-file-width="3664" data-file-height="2748" /></a></td>
<td>Compact</td>
<td>1991</td>
</tr>
<tr>
<td>GMC</td>
<td><a href="/wiki/Chevrolet_Kodiak" title="Chevrolet Kodiak">GMC TopKik Pickup</a></td>
<td><a href="/wiki/File:Ironhide-movievehicle.jpg" class="image"><img alt="Ironhide-movievehicle.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Ironhide-movievehicle.jpg/120px-Ironhide-movievehicle.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Ironhide-movievehicle.jpg/180px-Ironhide-movievehicle.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Ironhide-movievehicle.jpg/240px-Ironhide-movievehicle.jpg 2x" data-file-width="2608" data-file-height="1952" /></a></td>
<td>Heavy Duty</td>
<td>2003-2009</td>
</tr>
<tr>
<td>Hino</td>
<td><a href="/wiki/Hino_Briska" title="Hino Briska">Hino Briska</a></td>
<td><a href="/wiki/File:Hino_Briska_in_Aden,_Maala_Straight-_1966.jpg" class="image"><img alt="Hino Briska in Aden, Maala Straight- 1966.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Hino_Briska_in_Aden%2C_Maala_Straight-_1966.jpg/120px-Hino_Briska_in_Aden%2C_Maala_Straight-_1966.jpg" width="120" height="87" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Hino_Briska_in_Aden%2C_Maala_Straight-_1966.jpg/180px-Hino_Briska_in_Aden%2C_Maala_Straight-_1966.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Hino_Briska_in_Aden%2C_Maala_Straight-_1966.jpg/240px-Hino_Briska_in_Aden%2C_Maala_Straight-_1966.jpg 2x" data-file-width="932" data-file-height="677" /></a></td>
<td>Compact</td>
<td>April 1961 – 1965</td>
</tr>
<tr>
<td>Holden</td>
<td><a href="/wiki/Holden_Kingswood" title="Holden Kingswood">Holden Kingswood Ute</a></td>
<td><a href="/wiki/File:HQ_Holden_Belmont.jpg" class="image"><img alt="HQ Holden Belmont.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c9/HQ_Holden_Belmont.jpg/120px-HQ_Holden_Belmont.jpg" width="120" height="74" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c9/HQ_Holden_Belmont.jpg/180px-HQ_Holden_Belmont.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c9/HQ_Holden_Belmont.jpg/240px-HQ_Holden_Belmont.jpg 2x" data-file-width="1600" data-file-height="985" /></a></td>
<td>Coupe</td>
<td>1971-1974</td>
</tr>
<tr>
<td><a href="/wiki/Hummer" title="Hummer">Hummer</a></td>
<td><a href="/wiki/Hummer_H2" title="Hummer H2">Hummer H2 SUT</a></td>
<td><a href="/wiki/File:Hummer_H2_in_Hel.jpg" class="image"><img alt="Hummer H2 in Hel.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Hummer_H2_in_Hel.jpg/120px-Hummer_H2_in_Hel.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Hummer_H2_in_Hel.jpg/180px-Hummer_H2_in_Hel.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/27/Hummer_H2_in_Hel.jpg/240px-Hummer_H2_in_Hel.jpg 2x" data-file-width="4253" data-file-height="2823" /></a></td>
<td>Fullsize</td>
<td>2005-2009</td>
</tr>
<tr>
<td>Hummer</td>
<td><a href="/wiki/Hummer_H3#H3T" title="Hummer H3">Hummer H3T</a></td>
<td><a href="/wiki/File:Hummer_H3T_NY.jpg" class="image"><img alt="Hummer H3T NY.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/64/Hummer_H3T_NY.jpg/120px-Hummer_H3T_NY.jpg" width="120" height="75" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/64/Hummer_H3T_NY.jpg/180px-Hummer_H3T_NY.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/64/Hummer_H3T_NY.jpg/240px-Hummer_H3T_NY.jpg 2x" data-file-width="2340" data-file-height="1472" /></a></td>
<td>Midsize</td>
<td>2005-2009</td>
</tr>
<tr>
<td>Hyundai</td>
<td><a href="/wiki/Hyundai_Pony" title="Hyundai Pony">Hyundai Pony Pickup</a></td>
<td><a href="/wiki/File:Hyundaiponypickup.jpg" class="image"><img alt="Hyundaiponypickup.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/94/Hyundaiponypickup.jpg/120px-Hyundaiponypickup.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/94/Hyundaiponypickup.jpg/180px-Hyundaiponypickup.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/94/Hyundaiponypickup.jpg/240px-Hyundaiponypickup.jpg 2x" data-file-width="550" data-file-height="348" /></a></td>
<td>Coupe</td>
<td>1982-1990</td>
</tr>
<tr>
<td><a href="/wiki/International_Harvester" title="International Harvester">International</a></td>
<td><a href="/wiki/International_Harvester_K_and_KB_Series" title="International Harvester K and KB Series">International Harvester K and KB Series</a></td>
<td></td>
<td>fullsize</td>
<td>1940-1949</td>
</tr>
<tr>
<td>International</td>
<td><a href="/wiki/International_Harvester_L-Series" title="International Harvester L-Series">International Harvester L-Series</a></td>
<td><a href="/wiki/File:IH_L-110_in_green.jpg" class="image"><img alt="IH L-110 in green.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d7/IH_L-110_in_green.jpg/120px-IH_L-110_in_green.jpg" width="120" height="74" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d7/IH_L-110_in_green.jpg/180px-IH_L-110_in_green.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d7/IH_L-110_in_green.jpg/240px-IH_L-110_in_green.jpg 2x" data-file-width="5376" data-file-height="3316" /></a></td>
<td></td>
<td>1949-1952</td>
</tr>
<tr>
<td>International</td>
<td><a href="/wiki/International_Harvester_R-Series" title="International Harvester R-Series">International Harvester R-Series</a></td>
<td><a href="/wiki/File:International_R-Series.JPG" class="image"><img alt="International R-Series.JPG" src="//upload.wikimedia.org/wikipedia/en/thumb/e/eb/International_R-Series.JPG/120px-International_R-Series.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/en/thumb/e/eb/International_R-Series.JPG/180px-International_R-Series.JPG 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/e/eb/International_R-Series.JPG/240px-International_R-Series.JPG 2x" data-file-width="4000" data-file-height="3000" /></a></td>
<td></td>
<td>1952-1955</td>
</tr>
<tr>
<td>International</td>
<td>International Harvester S-Series</td>
<td><a href="/wiki/File:1956_IHC_S100_pickup.jpg" class="image"><img alt="1956 IHC S100 pickup.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d6/1956_IHC_S100_pickup.jpg/120px-1956_IHC_S100_pickup.jpg" width="120" height="74" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d6/1956_IHC_S100_pickup.jpg/180px-1956_IHC_S100_pickup.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d6/1956_IHC_S100_pickup.jpg/240px-1956_IHC_S100_pickup.jpg 2x" data-file-width="3063" data-file-height="1884" /></a></td>
<td></td>
<td>1955-1957</td>
</tr>
<tr>
<td>International</td>
<td><a href="/wiki/International_Harvester_A-Series" title="International Harvester A-Series">International Harvester A-Series</a></td>
<td><a href="/wiki/File:1956_international_pickup.jpg" class="image"><img alt="1956 international pickup.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5b/1956_international_pickup.jpg/120px-1956_international_pickup.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5b/1956_international_pickup.jpg/180px-1956_international_pickup.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5b/1956_international_pickup.jpg/240px-1956_international_pickup.jpg 2x" data-file-width="3072" data-file-height="2304" /></a></td>
<td></td>
<td>1957-1959</td>
</tr>
<tr>
<td>International</td>
<td><a href="/wiki/International_Harvester_A-Series#B-Series" title="International Harvester A-Series">International Harvester B-Series</a></td>
<td><a href="/wiki/File:International_Harvester_B-120_flatbed_red.jpg" class="image"><img alt="International Harvester B-120 flatbed red.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0b/International_Harvester_B-120_flatbed_red.jpg/120px-International_Harvester_B-120_flatbed_red.jpg" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0b/International_Harvester_B-120_flatbed_red.jpg/180px-International_Harvester_B-120_flatbed_red.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0b/International_Harvester_B-120_flatbed_red.jpg/240px-International_Harvester_B-120_flatbed_red.jpg 2x" data-file-width="2300" data-file-height="1500" /></a></td>
<td></td>
<td>1959-1961</td>
</tr>
<tr>
<td>International</td>
<td><a href="/wiki/International_Harvester_A-Series#C-Series" title="International Harvester A-Series">International Harvester C-Series</a></td>
<td><a href="/wiki/File:1961_IHC_Travelette.jpg" class="image"><img alt="1961 IHC Travelette.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/06/1961_IHC_Travelette.jpg/120px-1961_IHC_Travelette.jpg" width="120" height="64" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/06/1961_IHC_Travelette.jpg/180px-1961_IHC_Travelette.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/06/1961_IHC_Travelette.jpg/240px-1961_IHC_Travelette.jpg 2x" data-file-width="691" data-file-height="371" /></a><br />
<a href="/wiki/File:1966_International_Travelette.jpg" class="image"><img alt="1966 International Travelette.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/19/1966_International_Travelette.jpg/120px-1966_International_Travelette.jpg" width="120" height="91" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/19/1966_International_Travelette.jpg/180px-1966_International_Travelette.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/19/1966_International_Travelette.jpg/240px-1966_International_Travelette.jpg 2x" data-file-width="790" data-file-height="600" /></a></td>
<td></td>
<td>1961-1968</td>
</tr>
<tr>
<td>International</td>
<td><a href="/wiki/International_Harvester_Light_Line_pickup" title="International Harvester Light Line pickup">International Harvester D-Series</a></td>
<td><a href="/wiki/File:1974_or_75_IHC_150_Eight.jpg" class="image"><img alt="1974 or 75 IHC 150 Eight.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8d/1974_or_75_IHC_150_Eight.jpg/120px-1974_or_75_IHC_150_Eight.jpg" width="120" height="73" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8d/1974_or_75_IHC_150_Eight.jpg/180px-1974_or_75_IHC_150_Eight.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8d/1974_or_75_IHC_150_Eight.jpg/240px-1974_or_75_IHC_150_Eight.jpg 2x" data-file-width="3150" data-file-height="1929" /></a></td>
<td>midsize</td>
<td>1969-1975</td>
</tr>
<tr>
<td><a href="/wiki/International_Truck_and_Engine_Corporation" class="mw-redirect" title="International Truck and Engine Corporation">International</a></td>
<td><a href="/wiki/International_XT" title="International XT">International CXT</a></td>
<td><a href="/wiki/File:International_CXT.jpg" class="image"><img alt="International CXT.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/39/International_CXT.jpg/120px-International_CXT.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/39/International_CXT.jpg/180px-International_CXT.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/39/International_CXT.jpg/240px-International_CXT.jpg 2x" data-file-width="2032" data-file-height="1520" /></a></td>
<td>Large</td>
<td>2004-2008</td>
</tr>
<tr>
<td>International</td>
<td><a href="/wiki/International_XT#MXT" title="International XT">International MXT</a></td>
<td><a href="/wiki/File:International_MXT_Wayco.ca.jpg" class="image"><img alt="International MXT Wayco.ca.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/54/International_MXT_Wayco.ca.jpg/120px-International_MXT_Wayco.ca.jpg" width="120" height="75" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/54/International_MXT_Wayco.ca.jpg/180px-International_MXT_Wayco.ca.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/54/International_MXT_Wayco.ca.jpg/240px-International_MXT_Wayco.ca.jpg 2x" data-file-width="2089" data-file-height="1313" /></a></td>
<td>Large</td>
<td>2007-2008</td>
</tr>
<tr>
<td>Iveco</td>
<td><a href="/wiki/Iveco_Massif" title="Iveco Massif">Iveco Massif Pickup</a></td>
<td><a href="/wiki/File:Iveco_Massif_4_x_4_(1).jpg" class="image"><img alt="Iveco Massif 4 x 4 (1).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Iveco_Massif_4_x_4_%281%29.jpg/120px-Iveco_Massif_4_x_4_%281%29.jpg" width="120" height="93" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Iveco_Massif_4_x_4_%281%29.jpg/180px-Iveco_Massif_4_x_4_%281%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Iveco_Massif_4_x_4_%281%29.jpg/240px-Iveco_Massif_4_x_4_%281%29.jpg 2x" data-file-width="4837" data-file-height="3738" /></a></td>
<td>off-road Compact</td>
<td>2007-2011</td>
</tr>
<tr>
<td><a href="/wiki/Izhevsk_Mechanical_Plant" title="Izhevsk Mechanical Plant">Izh</a></td>
<td><a href="/wiki/Moskvitch_412#Izh" title="Moskvitch 412">Izh-27151</a></td>
<td><a href="/wiki/File:1991_IZH_Lada_2715.jpg" class="image"><img alt="1991 IZH Lada 2715.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f4/1991_IZH_Lada_2715.jpg/120px-1991_IZH_Lada_2715.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f4/1991_IZH_Lada_2715.jpg/180px-1991_IZH_Lada_2715.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f4/1991_IZH_Lada_2715.jpg/240px-1991_IZH_Lada_2715.jpg 2x" data-file-width="1022" data-file-height="656" /></a></td>
<td>Coupe</td>
<td>1974-1997</td>
</tr>
<tr>
<td><a href="/wiki/Jeep" title="Jeep">Jeep</a></td>
<td><a href="/wiki/Jeep_Gladiator" title="Jeep Gladiator">Jeep Gladiator</a></td>
<td><a href="/wiki/File:Jeep_Gladiator.jpg" class="image"><img alt="Jeep Gladiator.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/01/Jeep_Gladiator.jpg/120px-Jeep_Gladiator.jpg" width="120" height="97" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/01/Jeep_Gladiator.jpg/180px-Jeep_Gladiator.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/01/Jeep_Gladiator.jpg/240px-Jeep_Gladiator.jpg 2x" data-file-width="1624" data-file-height="1316" /></a><br />
<a href="/wiki/File:Jeep_Honcho.jpg" class="image"><img alt="Jeep Honcho.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Jeep_Honcho.jpg/120px-Jeep_Honcho.jpg" width="120" height="64" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Jeep_Honcho.jpg/180px-Jeep_Honcho.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Jeep_Honcho.jpg/240px-Jeep_Honcho.jpg 2x" data-file-width="1078" data-file-height="573" /></a></td>
<td>fullsize</td>
<td>1962-1988</td>
</tr>
<tr>
<td>Jeep</td>
<td><a href="/wiki/Jeepster_Commando" title="Jeepster Commando">Jeepster Commando</a></td>
<td><a href="/wiki/File:1971_Jeepster_Commando_SC-1_pickup_orange_r-Cecil%2710.jpg" class="image"><img alt="1971 Jeepster Commando SC-1 pickup orange r-Cecil'10.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c5/1971_Jeepster_Commando_SC-1_pickup_orange_r-Cecil%2710.jpg/120px-1971_Jeepster_Commando_SC-1_pickup_orange_r-Cecil%2710.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c5/1971_Jeepster_Commando_SC-1_pickup_orange_r-Cecil%2710.jpg/180px-1971_Jeepster_Commando_SC-1_pickup_orange_r-Cecil%2710.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c5/1971_Jeepster_Commando_SC-1_pickup_orange_r-Cecil%2710.jpg/240px-1971_Jeepster_Commando_SC-1_pickup_orange_r-Cecil%2710.jpg 2x" data-file-width="2592" data-file-height="1944" /></a><br />
<a href="/wiki/File:Jeep_Commando_C-104.jpg" class="image"><img alt="Jeep Commando C-104.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Jeep_Commando_C-104.jpg/120px-Jeep_Commando_C-104.jpg" width="120" height="85" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Jeep_Commando_C-104.jpg/180px-Jeep_Commando_C-104.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Jeep_Commando_C-104.jpg/240px-Jeep_Commando_C-104.jpg 2x" data-file-width="800" data-file-height="569" /></a></td>
<td>converible</td>
<td>1966-1973</td>
</tr>
<tr>
<td>Jeep</td>
<td><a href="/wiki/Jeep_CJ#CJ-8_.28Scrambler.29" title="Jeep CJ">Jeep CJ-8</a></td>
<td><a href="/wiki/File:Jeep_SCrambler_white_SC-a.jpg" class="image"><img alt="Jeep SCrambler white SC-a.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Jeep_SCrambler_white_SC-a.jpg/120px-Jeep_SCrambler_white_SC-a.jpg" width="120" height="55" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Jeep_SCrambler_white_SC-a.jpg/180px-Jeep_SCrambler_white_SC-a.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Jeep_SCrambler_white_SC-a.jpg/240px-Jeep_SCrambler_white_SC-a.jpg 2x" data-file-width="2400" data-file-height="1100" /></a></td>
<td>compact</td>
<td>1981-1986</td>
</tr>
<tr>
<td>Jeep</td>
<td><a href="/wiki/Jeep_Comanche_(MJ)" class="mw-redirect" title="Jeep Comanche (MJ)">Jeep Comanche (MJ)</a></td>
<td><a href="/wiki/File:Jeep-Comanche-Pioneer.jpg" class="image"><img alt="Jeep-Comanche-Pioneer.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Jeep-Comanche-Pioneer.jpg/120px-Jeep-Comanche-Pioneer.jpg" width="120" height="50" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Jeep-Comanche-Pioneer.jpg/180px-Jeep-Comanche-Pioneer.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Jeep-Comanche-Pioneer.jpg/240px-Jeep-Comanche-Pioneer.jpg 2x" data-file-width="2068" data-file-height="865" /></a></td>
<td>compact</td>
<td>1985-1992</td>
</tr>
<tr>
<td><a href="/wiki/Lincoln_Motor_Car_Works" title="Lincoln Motor Car Works">Lincoln</a></td>
<td><a href="/wiki/Lincoln_Blackwood" title="Lincoln Blackwood">Lincoln Blackwood</a></td>
<td><a href="/wiki/File:2002_Lincoln_Blackwood_2.jpg" class="image"><img alt="2002 Lincoln Blackwood 2.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/95/2002_Lincoln_Blackwood_2.jpg/120px-2002_Lincoln_Blackwood_2.jpg" width="120" height="72" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/95/2002_Lincoln_Blackwood_2.jpg/180px-2002_Lincoln_Blackwood_2.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/95/2002_Lincoln_Blackwood_2.jpg/240px-2002_Lincoln_Blackwood_2.jpg 2x" data-file-width="2208" data-file-height="1320" /></a></td>
<td>Luxury Fullsize</td>
<td>2002</td>
</tr>
<tr>
<td><a href="/wiki/Lincoln_Motor_Car_Works" title="Lincoln Motor Car Works">Lincoln</a></td>
<td><a href="/wiki/Lincoln_Mark_LT" title="Lincoln Mark LT">Lincoln Mark LT</a></td>
<td><a href="/wiki/File:Lincoln_Mark_LT_long_bed.jpg" class="image"><img alt="Lincoln Mark LT long bed.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Lincoln_Mark_LT_long_bed.jpg/120px-Lincoln_Mark_LT_long_bed.jpg" width="120" height="67" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Lincoln_Mark_LT_long_bed.jpg/180px-Lincoln_Mark_LT_long_bed.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Lincoln_Mark_LT_long_bed.jpg/240px-Lincoln_Mark_LT_long_bed.jpg 2x" data-file-width="2502" data-file-height="1392" /></a></td>
<td>Luxury Fullsize</td>
<td>2005–2014</td>
</tr>
<tr>
<td>Mercedes-Benz</td>
<td><a href="/wiki/Mercedes-Benz_G-Class#G_63_AMG_6x6_.282013.E2.80.93.29" title="Mercedes-Benz G-Class">Mercedes-Benz G-Class AMG 6x6</a></td>
<td><a href="/wiki/File:White_Mercedes-Benz_G_63_AMG_6x6_fr_London14.jpg" class="image"><img alt="White Mercedes-Benz G 63 AMG 6x6 fr London14.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c2/White_Mercedes-Benz_G_63_AMG_6x6_fr_London14.jpg/120px-White_Mercedes-Benz_G_63_AMG_6x6_fr_London14.jpg" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c2/White_Mercedes-Benz_G_63_AMG_6x6_fr_London14.jpg/180px-White_Mercedes-Benz_G_63_AMG_6x6_fr_London14.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c2/White_Mercedes-Benz_G_63_AMG_6x6_fr_London14.jpg/240px-White_Mercedes-Benz_G_63_AMG_6x6_fr_London14.jpg 2x" data-file-width="2701" data-file-height="1524" /></a></td>
<td>Luxury Heavy Duty</td>
<td>2013-2015 Limited Run (100 made)</td>
</tr>
<tr>
<td><a href="/wiki/Miles_Electric_Vehicles" title="Miles Electric Vehicles">MEV</a></td>
<td><a href="/wiki/Miles_Electric_Vehicles" title="Miles Electric Vehicles">Miles ZX40ST</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Electric Mini</td>
<td>2007-2013</td>
</tr>
<tr>
<td>Nissan</td>
<td><a href="/wiki/Nissan_Junior" title="Nissan Junior">Nissan Junior</a></td>
<td><a href="/wiki/File:1956_Nissan_Junior_B40.jpg" class="image"><img alt="1956 Nissan Junior B40.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1d/1956_Nissan_Junior_B40.jpg/120px-1956_Nissan_Junior_B40.jpg" width="120" height="98" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1d/1956_Nissan_Junior_B40.jpg/180px-1956_Nissan_Junior_B40.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1d/1956_Nissan_Junior_B40.jpg/240px-1956_Nissan_Junior_B40.jpg 2x" data-file-width="1774" data-file-height="1450" /></a><br />
<a href="/wiki/File:Nissan_Junior_-_Zamyad_24.JPG" class="image"><img alt="Nissan Junior - Zamyad 24.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Nissan_Junior_-_Zamyad_24.JPG/120px-Nissan_Junior_-_Zamyad_24.JPG" width="120" height="99" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Nissan_Junior_-_Zamyad_24.JPG/180px-Nissan_Junior_-_Zamyad_24.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/00/Nissan_Junior_-_Zamyad_24.JPG/240px-Nissan_Junior_-_Zamyad_24.JPG 2x" data-file-width="2923" data-file-height="2408" /></a></td>
<td>Midsize</td>
<td>1956-1982</td>
</tr>
<tr>
<td>Nissan</td>
<td><a href="/wiki/Nissan_Hardbody_Truck" class="mw-redirect" title="Nissan Hardbody Truck">Nissan Hardbody</a></td>
<td><a href="/wiki/File:Nissan_Hardbody_Truck_4x4_1990.jpg" class="image"><img alt="Nissan Hardbody Truck 4x4 1990.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/95/Nissan_Hardbody_Truck_4x4_1990.jpg/120px-Nissan_Hardbody_Truck_4x4_1990.jpg" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/95/Nissan_Hardbody_Truck_4x4_1990.jpg/180px-Nissan_Hardbody_Truck_4x4_1990.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/95/Nissan_Hardbody_Truck_4x4_1990.jpg/240px-Nissan_Hardbody_Truck_4x4_1990.jpg 2x" data-file-width="425" data-file-height="278" /></a><br />
<a href="/wiki/File:1989_Nissan_Navara_(D21)_4-door_utility_(2010-09-19)_01.jpg" class="image"><img alt="1989 Nissan Navara (D21) 4-door utility (2010-09-19) 01.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/16/1989_Nissan_Navara_%28D21%29_4-door_utility_%282010-09-19%29_01.jpg/120px-1989_Nissan_Navara_%28D21%29_4-door_utility_%282010-09-19%29_01.jpg" width="120" height="56" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/16/1989_Nissan_Navara_%28D21%29_4-door_utility_%282010-09-19%29_01.jpg/180px-1989_Nissan_Navara_%28D21%29_4-door_utility_%282010-09-19%29_01.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/16/1989_Nissan_Navara_%28D21%29_4-door_utility_%282010-09-19%29_01.jpg/240px-1989_Nissan_Navara_%28D21%29_4-door_utility_%282010-09-19%29_01.jpg 2x" data-file-width="3532" data-file-height="1638" /></a></td>
<td>compact</td>
<td>1986-2008</td>
</tr>
<tr>
<td><a href="/wiki/Opel" title="Opel">Opel</a></td>
<td><a href="/wiki/Isuzu_Faster" title="Isuzu Faster">Opel Campo</a></td>
<td><a href="/wiki/File:1996_Opel_Campo_Crew_Cab_TFS54.jpg" class="image"><img alt="1996 Opel Campo Crew Cab TFS54.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9b/1996_Opel_Campo_Crew_Cab_TFS54.jpg/120px-1996_Opel_Campo_Crew_Cab_TFS54.jpg" width="120" height="72" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9b/1996_Opel_Campo_Crew_Cab_TFS54.jpg/180px-1996_Opel_Campo_Crew_Cab_TFS54.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9b/1996_Opel_Campo_Crew_Cab_TFS54.jpg/240px-1996_Opel_Campo_Crew_Cab_TFS54.jpg 2x" data-file-width="2175" data-file-height="1305" /></a></td>
<td>Compact</td>
<td>1988-2002</td>
</tr>
<tr>
<td>Opel</td>
<td><a href="/wiki/Chevrolet_Montana" title="Chevrolet Montana">Opel Corsa Utility</a></td>
<td><a href="/wiki/File:1996_Opel_Campo_Crew_Cab_TFS54.jpg" class="image"><img alt="1996 Opel Campo Crew Cab TFS54.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9b/1996_Opel_Campo_Crew_Cab_TFS54.jpg/120px-1996_Opel_Campo_Crew_Cab_TFS54.jpg" width="120" height="72" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9b/1996_Opel_Campo_Crew_Cab_TFS54.jpg/180px-1996_Opel_Campo_Crew_Cab_TFS54.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9b/1996_Opel_Campo_Crew_Cab_TFS54.jpg/240px-1996_Opel_Campo_Crew_Cab_TFS54.jpg 2x" data-file-width="2175" data-file-height="1305" /></a><br />
<a href="/wiki/File:2006_montana_gls_1.7d.jpg" class="image"><img alt="2006 montana gls 1.7d.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f5/2006_montana_gls_1.7d.jpg/120px-2006_montana_gls_1.7d.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f5/2006_montana_gls_1.7d.jpg/180px-2006_montana_gls_1.7d.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f5/2006_montana_gls_1.7d.jpg/240px-2006_montana_gls_1.7d.jpg 2x" data-file-width="1500" data-file-height="1125" /></a></td>
<td>Coupe</td>
<td>1992-2006</td>
</tr>
<tr>
<td>Peugeot</td>
<td><a href="/wiki/Peugeot_404" title="Peugeot 404">Peugeot 404 Pickup</a></td>
<td><a href="/wiki/File:Argentine_Peugeot_404_U_pick-up.jpg" class="image"><img alt="Argentine Peugeot 404 U pick-up.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/41/Argentine_Peugeot_404_U_pick-up.jpg/120px-Argentine_Peugeot_404_U_pick-up.jpg" width="120" height="88" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/41/Argentine_Peugeot_404_U_pick-up.jpg/180px-Argentine_Peugeot_404_U_pick-up.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/41/Argentine_Peugeot_404_U_pick-up.jpg/240px-Argentine_Peugeot_404_U_pick-up.jpg 2x" data-file-width="1100" data-file-height="806" /></a></td>
<td>Compact</td>
<td>1973-1979</td>
</tr>
<tr>
<td>Peugeot</td>
<td><a href="/wiki/Peugeot_504" title="Peugeot 504">Peugeot 504 Pickup</a></td>
<td><a href="/wiki/File:Peugeot-504-Pickup.jpg" class="image"><img alt="Peugeot-504-Pickup.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Peugeot-504-Pickup.jpg/120px-Peugeot-504-Pickup.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Peugeot-504-Pickup.jpg/180px-Peugeot-504-Pickup.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Peugeot-504-Pickup.jpg/240px-Peugeot-504-Pickup.jpg 2x" data-file-width="2522" data-file-height="1676" /></a></td>
<td>Compact</td>
<td>1983-2009</td>
</tr>
<tr>
<td><a href="/wiki/Plymouth_(automobile)" title="Plymouth (automobile)">Plymouth</a></td>
<td><a href="/wiki/Mitsubishi_Triton" title="Mitsubishi Triton">Plymouth Arrow Truck</a></td>
<td></td>
<td>Compact</td>
<td>1979-1982</td>
</tr>
<tr>
<td><a href="/wiki/SAIPA" title="SAIPA">SAIPA</a></td>
<td><a href="/wiki/Ford_Festiva" title="Ford Festiva">Pick-up</a></td>
<td><a href="/wiki/File:Saipapickup.jpg" class="image"><img alt="Saipapickup.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Saipapickup.jpg/120px-Saipapickup.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Saipapickup.jpg/180px-Saipapickup.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Saipapickup.jpg/240px-Saipapickup.jpg 2x" data-file-width="608" data-file-height="385" /></a></td>
<td>mini</td>
<td>&#160;????-????</td>
</tr>
<tr>
<td><a href="/wiki/%C5%A0koda_Auto" title="Škoda Auto">Škoda</a></td>
<td><a href="/wiki/%C5%A0koda_Favorit" title="Škoda Favorit">Škoda Favorit Pickup</a></td>
<td><a href="/wiki/File:Brno,_Wurmova,_%C5%A0koda_Pick-up.jpg" class="image"><img alt="Brno, Wurmova, Škoda Pick-up.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Brno%2C_Wurmova%2C_%C5%A0koda_Pick-up.jpg/120px-Brno%2C_Wurmova%2C_%C5%A0koda_Pick-up.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Brno%2C_Wurmova%2C_%C5%A0koda_Pick-up.jpg/180px-Brno%2C_Wurmova%2C_%C5%A0koda_Pick-up.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Brno%2C_Wurmova%2C_%C5%A0koda_Pick-up.jpg/240px-Brno%2C_Wurmova%2C_%C5%A0koda_Pick-up.jpg 2x" data-file-width="2272" data-file-height="1704" /></a></td>
<td>Coupe</td>
<td>1991-1995</td>
</tr>
<tr>
<td>Škoda</td>
<td><a href="/wiki/%C5%A0koda_Felicia" title="Škoda Felicia">Škoda Felicia Fun</a></td>
<td><a href="/wiki/File:Skoda_Felicia_Pickup.jpg" class="image"><img alt="Skoda Felicia Pickup.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Skoda_Felicia_Pickup.jpg/120px-Skoda_Felicia_Pickup.jpg" width="120" height="54" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Skoda_Felicia_Pickup.jpg/180px-Skoda_Felicia_Pickup.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Skoda_Felicia_Pickup.jpg/240px-Skoda_Felicia_Pickup.jpg 2x" data-file-width="1767" data-file-height="792" /></a></td>
<td>Coupe</td>
<td>1994-2001</td>
</tr>
<tr>
<td><a href="/wiki/Carroll_Shelby" title="Carroll Shelby">Shelby</a></td>
<td><a href="/wiki/Shelby_Dakota" title="Shelby Dakota">Shelby Dakota</a></td>
<td></td>
<td>Midsize</td>
<td>1980-1980</td>
</tr>
<tr>
<td>Suzuki</td>
<td><a href="/wiki/Suzuki_Carry" title="Suzuki Carry">Suzuki Carry</a></td>
<td><a href="/wiki/File:SuzukiCarry2nd.jpg" class="image"><img alt="SuzukiCarry2nd.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ec/SuzukiCarry2nd.jpg/120px-SuzukiCarry2nd.jpg" width="120" height="81" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ec/SuzukiCarry2nd.jpg/180px-SuzukiCarry2nd.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ec/SuzukiCarry2nd.jpg/240px-SuzukiCarry2nd.jpg 2x" data-file-width="800" data-file-height="538" /></a><br />
<a href="/wiki/File:3rdCarry.jpg" class="image"><img alt="3rdCarry.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f7/3rdCarry.jpg/120px-3rdCarry.jpg" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f7/3rdCarry.jpg/180px-3rdCarry.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f7/3rdCarry.jpg/240px-3rdCarry.jpg 2x" data-file-width="800" data-file-height="572" /></a><br />
<a href="/wiki/File:Suzuki_Carry_405.JPG" class="image"><img alt="Suzuki Carry 405.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Suzuki_Carry_405.JPG/120px-Suzuki_Carry_405.JPG" width="120" height="75" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Suzuki_Carry_405.JPG/180px-Suzuki_Carry_405.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Suzuki_Carry_405.JPG/240px-Suzuki_Carry_405.JPG 2x" data-file-width="1280" data-file-height="800" /></a><br />
<a href="/wiki/File:SuzukiCarry5th.jpg" class="image"><img alt="SuzukiCarry5th.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c1/SuzukiCarry5th.jpg/120px-SuzukiCarry5th.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c1/SuzukiCarry5th.jpg/180px-SuzukiCarry5th.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c1/SuzukiCarry5th.jpg/240px-SuzukiCarry5th.jpg 2x" data-file-width="800" data-file-height="535" /></a><br />
<a href="/wiki/File:Suzuki-CarryWide.JPG" class="image"><img alt="Suzuki-CarryWide.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/16/Suzuki-CarryWide.JPG/120px-Suzuki-CarryWide.JPG" width="120" height="79" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/16/Suzuki-CarryWide.JPG/180px-Suzuki-CarryWide.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/16/Suzuki-CarryWide.JPG/240px-Suzuki-CarryWide.JPG 2x" data-file-width="800" data-file-height="529" /></a><br />
<a href="/wiki/File:SuzukiCarry8th.jpg" class="image"><img alt="SuzukiCarry8th.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ad/SuzukiCarry8th.jpg/120px-SuzukiCarry8th.jpg" width="120" height="81" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ad/SuzukiCarry8th.jpg/180px-SuzukiCarry8th.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ad/SuzukiCarry8th.jpg/240px-SuzukiCarry8th.jpg 2x" data-file-width="800" data-file-height="543" /></a><br />
<a href="/wiki/File:Suzuki_Carry_013.JPG" class="image"><img alt="Suzuki Carry 013.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/91/Suzuki_Carry_013.JPG/120px-Suzuki_Carry_013.JPG" width="120" height="71" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/91/Suzuki_Carry_013.JPG/180px-Suzuki_Carry_013.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/91/Suzuki_Carry_013.JPG/240px-Suzuki_Carry_013.JPG 2x" data-file-width="1280" data-file-height="760" /></a></td>
<td>mini</td>
<td>1961-1991</td>
</tr>
<tr>
<td><a href="/wiki/Suzuki" title="Suzuki">Suzuki</a></td>
<td><a href="/wiki/Suzuki_Equator" title="Suzuki Equator">Suzuki Equator</a></td>
<td><a href="/wiki/File:2009_Suzuki_Equator_extended_cab_Premium.jpg" class="image"><img alt="2009 Suzuki Equator extended cab Premium.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f3/2009_Suzuki_Equator_extended_cab_Premium.jpg/120px-2009_Suzuki_Equator_extended_cab_Premium.jpg" width="120" height="73" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f3/2009_Suzuki_Equator_extended_cab_Premium.jpg/180px-2009_Suzuki_Equator_extended_cab_Premium.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f3/2009_Suzuki_Equator_extended_cab_Premium.jpg/240px-2009_Suzuki_Equator_extended_cab_Premium.jpg 2x" data-file-width="1812" data-file-height="1098" /></a></td>
<td>Midsize</td>
<td>2009-2013</td>
</tr>
<tr>
<td><a href="/wiki/Sterling_Trucks" title="Sterling Trucks">Sterling Trucks</a></td>
<td><a href="/wiki/Sterling_Bullet" title="Sterling Bullet">Sterling Bullet</a></td>
<td><a href="/wiki/File:Sterling_Bullet.jpg" class="image"><img alt="Sterling Bullet.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Sterling_Bullet.jpg/120px-Sterling_Bullet.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Sterling_Bullet.jpg/180px-Sterling_Bullet.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Sterling_Bullet.jpg/240px-Sterling_Bullet.jpg 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>Fullsize</td>
<td>2008-2011</td>
</tr>
<tr>
<td>Toyota</td>
<td><a href="/wiki/Toyota_LiteAce" title="Toyota LiteAce">Toyota LiteAce Truck</a></td>
<td><a href="/wiki/File:Toyota_Liteace_Truck_201.JPG" class="image"><img alt="Toyota Liteace Truck 201.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/14/Toyota_Liteace_Truck_201.JPG/120px-Toyota_Liteace_Truck_201.JPG" width="120" height="66" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/14/Toyota_Liteace_Truck_201.JPG/180px-Toyota_Liteace_Truck_201.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/14/Toyota_Liteace_Truck_201.JPG/240px-Toyota_Liteace_Truck_201.JPG 2x" data-file-width="1280" data-file-height="700" /></a><br />
<a href="/wiki/File:Toyota_Liteace_Truck_001.JPG" class="image"><img alt="Toyota Liteace Truck 001.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/67/Toyota_Liteace_Truck_001.JPG/120px-Toyota_Liteace_Truck_001.JPG" width="120" height="69" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/67/Toyota_Liteace_Truck_001.JPG/180px-Toyota_Liteace_Truck_001.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/67/Toyota_Liteace_Truck_001.JPG/240px-Toyota_Liteace_Truck_001.JPG 2x" data-file-width="1280" data-file-height="740" /></a><br />
<a href="/wiki/File:Toyota_Liteace_Truck_005.JPG" class="image"><img alt="Toyota Liteace Truck 005.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/be/Toyota_Liteace_Truck_005.JPG/120px-Toyota_Liteace_Truck_005.JPG" width="120" height="66" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/be/Toyota_Liteace_Truck_005.JPG/180px-Toyota_Liteace_Truck_005.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/be/Toyota_Liteace_Truck_005.JPG/240px-Toyota_Liteace_Truck_005.JPG 2x" data-file-width="1280" data-file-height="700" /></a></td>
<td>mini</td>
<td>1970-2008</td>
</tr>
<tr>
<td>Toyota</td>
<td><a href="/wiki/Hino_Briska" title="Hino Briska">Toyota Briska</a></td>
<td><a href="/wiki/File:Hino_Briska_in_Aden,_Maala_Straight-_1966.jpg" class="image"><img alt="Hino Briska in Aden, Maala Straight- 1966.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Hino_Briska_in_Aden%2C_Maala_Straight-_1966.jpg/120px-Hino_Briska_in_Aden%2C_Maala_Straight-_1966.jpg" width="120" height="87" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Hino_Briska_in_Aden%2C_Maala_Straight-_1966.jpg/180px-Hino_Briska_in_Aden%2C_Maala_Straight-_1966.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Hino_Briska_in_Aden%2C_Maala_Straight-_1966.jpg/240px-Hino_Briska_in_Aden%2C_Maala_Straight-_1966.jpg 2x" data-file-width="932" data-file-height="677" /></a></td>
<td>Compact</td>
<td>April 1961 – 1965</td>
</tr>
<tr>
<td>Toyota</td>
<td><a href="/wiki/Toyota_Stout" title="Toyota Stout">Toyota Stout</a></td>
<td><a href="/wiki/File:Toyopet1500RK23.jpg" class="image"><img alt="Toyopet1500RK23.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/74/Toyopet1500RK23.jpg/120px-Toyopet1500RK23.jpg" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/74/Toyopet1500RK23.jpg/180px-Toyopet1500RK23.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/74/Toyopet1500RK23.jpg/240px-Toyopet1500RK23.jpg 2x" data-file-width="800" data-file-height="450" /></a><br />
<a href="/wiki/File:Toyota_truck1.jpg" class="image"><img alt="Toyota truck1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Toyota_truck1.jpg/120px-Toyota_truck1.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Toyota_truck1.jpg/180px-Toyota_truck1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Toyota_truck1.jpg/240px-Toyota_truck1.jpg 2x" data-file-width="2208" data-file-height="1656" /></a><br />
<a href="/wiki/File:Toyota_Stout_1981.jpg" class="image"><img alt="Toyota Stout 1981.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/28/Toyota_Stout_1981.jpg/120px-Toyota_Stout_1981.jpg" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/28/Toyota_Stout_1981.jpg/180px-Toyota_Stout_1981.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/28/Toyota_Stout_1981.jpg/240px-Toyota_Stout_1981.jpg 2x" data-file-width="1600" data-file-height="1044" /></a></td>
<td>Compact</td>
<td>April 1954 – 1986</td>
</tr>
<tr>
<td>Toyota</td>
<td><a href="/wiki/Toyota_SA" title="Toyota SA">Toyota Toyopet SB</a></td>
<td></td>
<td>Compact</td>
<td>1947-1952</td>
</tr>
<tr>
<td>Toyota</td>
<td><a href="/wiki/Toyota_SA" title="Toyota SA">Toyota SG</a></td>
<td><a href="/wiki/File:1953_Toyota_Model_SG_Truck_01.jpg" class="image"><img alt="1953 Toyota Model SG Truck 01.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/63/1953_Toyota_Model_SG_Truck_01.jpg/120px-1953_Toyota_Model_SG_Truck_01.jpg" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/63/1953_Toyota_Model_SG_Truck_01.jpg/180px-1953_Toyota_Model_SG_Truck_01.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/63/1953_Toyota_Model_SG_Truck_01.jpg/240px-1953_Toyota_Model_SG_Truck_01.jpg 2x" data-file-width="1600" data-file-height="1100" /></a></td>
<td>Compact</td>
<td>March 1952 – 1954</td>
</tr>
<tr>
<td>Toyota</td>
<td><a href="/wiki/Toyota_T100" title="Toyota T100">Toyota T100</a></td>
<td><a href="/wiki/File:Toyota_T100_SR5.jpg" class="image"><img alt="Toyota T100 SR5.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Toyota_T100_SR5.jpg/120px-Toyota_T100_SR5.jpg" width="120" height="66" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Toyota_T100_SR5.jpg/180px-Toyota_T100_SR5.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Toyota_T100_SR5.jpg/240px-Toyota_T100_SR5.jpg 2x" data-file-width="1608" data-file-height="886" /></a></td>
<td>Fullsize</td>
<td>1993-1998</td>
</tr>
<tr>
<td><a href="/wiki/Troller" class="mw-redirect" title="Troller">Troller</a></td>
<td><a href="/wiki/Troller_Pantanal" title="Troller Pantanal">Troller Pantanal</a></td>
<td><a href="/wiki/File:CarDatabaseNetPhotoID00057864.jpg" class="image"><img alt="CarDatabaseNetPhotoID00057864.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b1/CarDatabaseNetPhotoID00057864.jpg/120px-CarDatabaseNetPhotoID00057864.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b1/CarDatabaseNetPhotoID00057864.jpg/180px-CarDatabaseNetPhotoID00057864.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b1/CarDatabaseNetPhotoID00057864.jpg/240px-CarDatabaseNetPhotoID00057864.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>Compact</td>
<td>2006-2008</td>
</tr>
<tr>
<td>Vauxhall</td>
<td><a href="/wiki/Isuzu_Faster" title="Isuzu Faster">Vauxhall Brava</a></td>
<td></td>
<td>Compact</td>
<td>1988-2002</td>
</tr>
<tr>
<td>Volkswagen/Toyota/Hino</td>
<td><a href="/wiki/Volkswagen_Taro" title="Volkswagen Taro">Volkswagen Taro</a></td>
<td><a href="/wiki/File:VWTaro1991.jpg" class="image"><img alt="VWTaro1991.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/95/VWTaro1991.jpg/120px-VWTaro1991.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/95/VWTaro1991.jpg/180px-VWTaro1991.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/95/VWTaro1991.jpg/240px-VWTaro1991.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>Compact</td>
<td>1981-1997</td>
</tr>
<tr>
<td><a href="/wiki/Willys" title="Willys">Willys</a>/<a href="/wiki/Kaiser_Jeep" title="Kaiser Jeep">Kaiser Jeep</a></td>
<td><a href="/wiki/Willys_Jeep_Truck" title="Willys Jeep Truck">Willys Jeep Truck</a></td>
<td><a href="/wiki/File:Flickr_-_DVS1mn_-_Willys_Jeep_Pick-Up_(3).jpg" class="image"><img alt="Flickr - DVS1mn - Willys Jeep Pick-Up (3).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Flickr_-_DVS1mn_-_Willys_Jeep_Pick-Up_%283%29.jpg/120px-Flickr_-_DVS1mn_-_Willys_Jeep_Pick-Up_%283%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Flickr_-_DVS1mn_-_Willys_Jeep_Pick-Up_%283%29.jpg/180px-Flickr_-_DVS1mn_-_Willys_Jeep_Pick-Up_%283%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Flickr_-_DVS1mn_-_Willys_Jeep_Pick-Up_%283%29.jpg/240px-Flickr_-_DVS1mn_-_Willys_Jeep_Pick-Up_%283%29.jpg 2x" data-file-width="4000" data-file-height="3000" /></a></td>
<td>midsize</td>
<td>1947-1965</td>
</tr>
<tr>
<td><a href="/wiki/ZAZ" title="ZAZ">ZAZ</a></td>
<td><a href="/wiki/ZAZ_Tavria#ZAZ-11055_Tavria_Pick-Up" title="ZAZ Tavria">ZAZ-11055 Tavria Pick-Up</a></td>
<td><a href="/wiki/File:Tavria_pickup.JPG" class="image"><img alt="Tavria pickup.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Tavria_pickup.JPG/120px-Tavria_pickup.JPG" width="120" height="84" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Tavria_pickup.JPG/180px-Tavria_pickup.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Tavria_pickup.JPG/240px-Tavria_pickup.JPG 2x" data-file-width="1172" data-file-height="816" /></a></td>
<td>Coupe</td>
<td>1992-2011</td>
</tr>
<tr>
<td><a href="/wiki/Zotye_Auto" title="Zotye Auto">Zotye</a></td>
<td><a href="/wiki/Fiat_Strada" title="Fiat Strada">Zotye S Series</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Compact</td>
<td>&#160;????-????</td>
</tr>
</table>
<h2><span class="mw-headline" id="Hiatus">Hiatus</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_pickup_trucks&amp;action=edit&amp;section=5" title="Edit section: Hiatus">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
<table class="wikitable sortable">
<tr>
<th>Company</th>
<th>Pickup Truck</th>
<th class="unsortable">Image</th>
<th>Class</th>
<th>Years produced</th>
<th>Scheduled return</th>
</tr>
<tr>
<td><a href="/wiki/Ford" class="mw-redirect" title="Ford">Ford</a> <a href="/wiki/Special_Vehicle_Team" title="Special Vehicle Team">SVT</a></td>
<td><a href="/wiki/Ford_F-150" class="mw-redirect" title="Ford F-150">SVT F-150 Raptor</a></td>
<td><a href="/wiki/File:FordRaptorLogo.JPG" class="image"><img alt="FordRaptorLogo.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/09/FordRaptorLogo.JPG/120px-FordRaptorLogo.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/09/FordRaptorLogo.JPG/180px-FordRaptorLogo.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/09/FordRaptorLogo.JPG/240px-FordRaptorLogo.JPG 2x" data-file-width="2816" data-file-height="2112" /></a></td>
<td>Off-Road Fullsize</td>
<td>2009-2014</td>
<td>Late 2016</td>
</tr>
</table>
<h2><span class="mw-headline" id="Concept_Models">Concept Models</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_pickup_trucks&amp;action=edit&amp;section=6" title="Edit section: Concept Models">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
<table class="wikitable sortable">
<tr>
<th>Company</th>
<th>Pickup Truck</th>
<th>Class</th>
<th>Note(s)</th>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_Cheyenne_(concept)" class="mw-redirect" title="Chevrolet Cheyenne (concept)">Chevrolet Cheyenne (concept)</a></td>
<td>Fullsize</td>
<td>The Chevrolet Silverado is sold as the Chevrolet Cheyenne in Mexico</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_Silverado" title="Chevrolet Silverado">Chevrolet Silverado ZR2</a></td>
<td>Fullsize</td>
<td>-</td>
</tr>
<tr>
<td>Dodge</td>
<td><a href="/wiki/Dodge_T-Rex" title="Dodge T-Rex">Dodge T-Rex</a></td>
<td>Fullsize</td>
<td>-</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_F-250_Super_Chief" title="Ford F-250 Super Chief">Ford F-250 Super Chief</a></td>
<td>Heavy Duty</td>
<td>-</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_Atlas" title="Ford Atlas">Ford Atlas</a></td>
<td>Fullsize</td>
<td>- Concept for the 13th generation Ford F150</td>
</tr>
<tr>
<td>GMC</td>
<td><a href="/wiki/Chevrolet_Silverado" title="Chevrolet Silverado">Sierra All Terrain HD Concept</a></td>
<td>Fullsize</td>
<td>-</td>
</tr>
<tr>
<td>Jeep</td>
<td><a href="/wiki/Jeep_Gladiator" title="Jeep Gladiator">Jeep Gladiator</a></td>
<td>Midsize</td>
<td>-</td>
</tr>
<tr>
<td>Mercedes-Benz</td>
<td><a href="/wiki/Mercedes-Benz_X-Class" title="Mercedes-Benz X-Class">Mercedes-Benz X-Class</a></td>
<td>Midsize</td>
<td>-</td>
</tr>
<tr>
<td>Toyota</td>
<td><a href="/wiki/Toyota_concept_vehicles,_2000%E2%80%932009" class="mw-redirect" title="Toyota concept vehicles, 2000–2009">Toyota A-BAT</a></td>
<td>Compact</td>
<td>-</td>
</tr>
<tr>
<td>Volvo Trucks</td>
<td><a href="/w/index.php?title=Volvo_VHD&amp;action=edit&amp;redlink=1" class="new" title="Volvo VHD (page does not exist)">VHD Crew Cab</a></td>
<td>Heavy Duty</td>
<td>-</td>
</tr>
</table>
<h2><span class="mw-headline" id="References">References</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_pickup_trucks&amp;action=edit&amp;section=7" title="Edit section: References">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
<div class="reflist" style="list-style-type: decimal;"></div>
<h3><span class="mw-headline" id="External_links">External links</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_pickup_trucks&amp;action=edit&amp;section=8" title="Edit section: External links">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<table role="presentation" class="mbox-small plainlinks sistersitebox" style="background-color:#f9f9f9;border:1px solid #aaa;color:#000">
<tr>
<td class="mbox-image"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/0/06/Wiktionary-logo-v2.svg/40px-Wiktionary-logo-v2.svg.png" width="40" height="40" class="noviewer" srcset="//upload.wikimedia.org/wikipedia/en/thumb/0/06/Wiktionary-logo-v2.svg/60px-Wiktionary-logo-v2.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/0/06/Wiktionary-logo-v2.svg/80px-Wiktionary-logo-v2.svg.png 2x" data-file-width="391" data-file-height="391" /></td>
<td class="mbox-text plainlist">Look up <i><b><a href="https://en.wiktionary.org/wiki/Special:Search/list_of_pickup_trucks" class="extiw" title="wiktionary:Special:Search/list of pickup trucks">list of pickup trucks</a></b></i> in Wiktionary, the free dictionary.</td>
</tr>
</table>



EOD;
        //THIS IS FOR TEXT MULTI LINE

        //preg_match_all('/^[a-zA-Z]([\w -]*[a-zA-Z])?/im', $str, $matches, PREG_OFFSET_CAPTURE);

        // <a href="\/brand\/[a-zA-Zü]+([\w -_]*[a-zA-Z])?.php">

preg_match_all('/(?<=(">))[a-zA-Züá]+([\w -]*[a-zA-Z])(?=(<\/a>))/im', $str, $matches, PREG_OFFSET_CAPTURE);

        //preg_match_all('/(?<=(">))[a-zA-Zü]+([\w -]*[a-zA-Z0-9])(?=(<\/a>))/im', $str, $matches, PREG_OFFSET_CAPTURE);

        $matches = $matches[0];
        

        $counter = 1;

        foreach ($matches as $k => $v) {
            # code...
            
            if( $counter%2 == 0 ){

                array_push($newMatches, $v[0]);

            }
            
            $counter++;
            /*array_push($newMatches, $v[0]);*/

        }
        

        foreach ($newMatches as $k => $v) {
            # code...
            $newSQL = $newSQL."DB::table('cars')->insert([ 'parent_id' => 20, 'name' => '$v', 'slug' => '".sluggify($v). "']);";
        }

        return $newSQL;
        
            

}


    

    
}
