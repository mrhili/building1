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

<th>Company</th>
<th>Truck</th>
<th class="unsortable">Image</th>
<th>Class</th>
<th>Cabin</th>
<th>Also Called</th>
<th>Country of Origin</th>
<th>regions sold</th>
</tr>
<tr>
<td><a href="/wiki/American_LaFrance" title="American LaFrance">American LaFrance</a></td>
<td><a href="/w/index.php?title=American_Lafrance_Condor&amp;action=edit&amp;redlink=1" class="new" title="American Lafrance Condor (page does not exist)">American Lafrance Condor</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td><a href="/wiki/Agrale" title="Agrale">Agrale</a></td>
<td><a href="/w/index.php?title=Agrale_6500&amp;action=edit&amp;redlink=1" class="new" title="Agrale 6500 (page does not exist)">Agrale 6500</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Brazil</td>
<td>South America, Cuba</td>
</tr>
<tr>
<td>Agrale</td>
<td><a href="/w/index.php?title=Agrale_8700&amp;action=edit&amp;redlink=1" class="new" title="Agrale 8700 (page does not exist)">Agrale 8700</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Agrale 8700 TR</td>
<td>Brazil</td>
<td>South America, Cuba</td>
</tr>
<tr>
<td>Agrale</td>
<td><a href="/w/index.php?title=Agrale_10000&amp;action=edit&amp;redlink=1" class="new" title="Agrale 10000 (page does not exist)">Agrale 10000</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Brazil</td>
<td>South America, Cape Verde</td>
</tr>
<tr>
<td>Agrale</td>
<td><a href="/w/index.php?title=Agrale_14000&amp;action=edit&amp;redlink=1" class="new" title="Agrale 14000 (page does not exist)">Agrale 14000</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light/Medium</td>
<td>COE</td>
<td>Agrale 14000 6x2</td>
<td>Brazil</td>
<td>South America, Cape Verde</td>
</tr>
<tr>
<td><a href="/wiki/Asia_Motor_Works" class="mw-redirect" title="Asia Motor Works">AMW</a></td>
<td><a href="/w/index.php?title=AMW_TP_Series&amp;action=edit&amp;redlink=1" class="new" title="AMW TP Series (page does not exist)">AMW TP Series</a></td>
<td><a href="/wiki/File:AMW_Motors_Trucks.jpg" class="image"><img alt="AMW Motors Trucks.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/df/AMW_Motors_Trucks.jpg/120px-AMW_Motors_Trucks.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/df/AMW_Motors_Trucks.jpg/180px-AMW_Motors_Trucks.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/df/AMW_Motors_Trucks.jpg/240px-AMW_Motors_Trucks.jpg 2x" data-file-width="806" data-file-height="604" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>India</td>
<td>India</td>
</tr>
<tr>
<td><a href="/wiki/Ashok_Leyland" title="Ashok Leyland">Ashok Leyland</a></td>
<td><a href="/w/index.php?title=Ashok_Layland_Avia&amp;action=edit&amp;redlink=1" class="new" title="Ashok Layland Avia (page does not exist)">Ashok Layland Avia</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>India</td>
<td>South Asia, Middle East, East Africa</td>
</tr>
<tr>
<td>Ashok Leyland</td>
<td><a href="/w/index.php?title=Ashok_Leyland_U-Truck&amp;action=edit&amp;redlink=1" class="new" title="Ashok Leyland U-Truck (page does not exist)">Ashok Leyland U-Truck</a></td>
<td><a href="/wiki/File:Ashok_Leyland_U_truck.jpg" class="image"><img alt="Ashok Leyland U truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/78/Ashok_Leyland_U_truck.jpg/120px-Ashok_Leyland_U_truck.jpg" width="120" height="116" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/78/Ashok_Leyland_U_truck.jpg/180px-Ashok_Leyland_U_truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/78/Ashok_Leyland_U_truck.jpg/240px-Ashok_Leyland_U_truck.jpg 2x" data-file-width="3348" data-file-height="3236" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>India</td>
<td>South Asia, Middle East, East Africa</td>
</tr>
<tr>
<td><a href="/wiki/Askam_(trucks)" title="Askam (trucks)">Askam</a></td>
<td><a href="/w/index.php?title=Askam_AS_950&amp;action=edit&amp;redlink=1" class="new" title="Askam AS 950 (page does not exist)">Askam AS 950</a></td>
<td><a href="/wiki/File:De_Soto_AS950_turbo_intercooler.jpg" class="image"><img alt="De Soto AS950 turbo intercooler.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/17/De_Soto_AS950_turbo_intercooler.jpg/120px-De_Soto_AS950_turbo_intercooler.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/17/De_Soto_AS950_turbo_intercooler.jpg/180px-De_Soto_AS950_turbo_intercooler.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/17/De_Soto_AS950_turbo_intercooler.jpg/240px-De_Soto_AS950_turbo_intercooler.jpg 2x" data-file-width="3405" data-file-height="2187" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Turkey</td>
<td>Turkey</td>
</tr>
<tr>
<td>Askam</td>
<td>Askam 8 Litre</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Turkey</td>
<td>Turkey, Romania, Bulgaria</td>
</tr>
<tr>
<td>Askam</td>
<td>Askam Hi-Ex</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Turkey</td>
<td>Turkey, Romania, Bulgaria</td>
</tr>
<tr>
<td><a href="/wiki/Astra_(company)" title="Astra (company)">Astra</a></td>
<td>Astra HD9</td>
<td><a href="/wiki/File:Astra_HD_9._Spielvogel_2014_3.JPG" class="image"><img alt="Astra HD 9. Spielvogel 2014 3.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Astra_HD_9._Spielvogel_2014_3.JPG/120px-Astra_HD_9._Spielvogel_2014_3.JPG" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Astra_HD_9._Spielvogel_2014_3.JPG/180px-Astra_HD_9._Spielvogel_2014_3.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/27/Astra_HD_9._Spielvogel_2014_3.JPG/240px-Astra_HD_9._Spielvogel_2014_3.JPG 2x" data-file-width="5619" data-file-height="3883" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Italy</td>
<td>Europe (except Germany, Sweden, Serbia)<br />
Africa<br />
South America, Cuba, Mexico<br />
Asia (except India, Japan, South Korea)<br />
Ozeania</td>
</tr>
<tr>
<td>AMW</td>
<td><a href="/w/index.php?title=AMW_TR_Series&amp;action=edit&amp;redlink=1" class="new" title="AMW TR Series (page does not exist)">AMW TR Series</a></td>
<td><a href="/wiki/File:AMW_4018_TR.jpg" class="image"><img alt="AMW 4018 TR.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2d/AMW_4018_TR.jpg/120px-AMW_4018_TR.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2d/AMW_4018_TR.jpg/180px-AMW_4018_TR.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2d/AMW_4018_TR.jpg/240px-AMW_4018_TR.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>India</td>
<td>India</td>
</tr>
<tr>
<td>AMW</td>
<td><a href="/w/index.php?title=AMW_HL_Series&amp;action=edit&amp;redlink=1" class="new" title="AMW HL Series (page does not exist)">AMW HL Series</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>India</td>
<td>India</td>
</tr>
<tr>
<td>AMW</td>
<td><a href="/w/index.php?title=AMW_TM_Series&amp;action=edit&amp;redlink=1" class="new" title="AMW TM Series (page does not exist)">AMW TM Series</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>India</td>
<td>India</td>
</tr>
<tr>
<td>AMW</td>
<td><a href="/w/index.php?title=AMW_CP_Series&amp;action=edit&amp;redlink=1" class="new" title="AMW CP Series (page does not exist)">AMW CP Series</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>India</td>
<td>India</td>
</tr>
<tr>
<td><a href="/wiki/Autocar_Company" title="Autocar Company">Autocar</a></td>
<td><a href="/w/index.php?title=Autocar_Xspotter&amp;action=edit&amp;redlink=1" class="new" title="Autocar Xspotter (page does not exist)">Autocar Xspotter</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Autocar</td>
<td><a href="/w/index.php?title=Autocar_Expert&amp;action=edit&amp;redlink=1" class="new" title="Autocar Expert (page does not exist)">Autocar Expert</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Autocar</td>
<td><a href="/w/index.php?title=Autocar_Refuse&amp;action=edit&amp;redlink=1" class="new" title="Autocar Refuse (page does not exist)">Autocar Refuse</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td><a href="/wiki/Avia_Trucks" class="mw-redirect" title="Avia Trucks">Avia Trucks</a></td>
<td><a href="/w/index.php?title=Avia_D-Line&amp;action=edit&amp;redlink=1" class="new" title="Avia D-Line (page does not exist)">Avia D-Line</a></td>
<td><a href="/wiki/File:Avia_D75-150_truck_in_Prague,_2012.JPG" class="image"><img alt="Avia D75-150 truck in Prague, 2012.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/Avia_D75-150_truck_in_Prague%2C_2012.JPG/120px-Avia_D75-150_truck_in_Prague%2C_2012.JPG" width="120" height="73" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/Avia_D75-150_truck_in_Prague%2C_2012.JPG/180px-Avia_D75-150_truck_in_Prague%2C_2012.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/77/Avia_D75-150_truck_in_Prague%2C_2012.JPG/240px-Avia_D75-150_truck_in_Prague%2C_2012.JPG 2x" data-file-width="3600" data-file-height="2200" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Czech Republic</td>
<td>Czech Republic, Germany, Russia</td>
</tr>
<tr>
<td><a href="/wiki/BeiBen_Truck" title="BeiBen Truck">BeiBen</a></td>
<td><a href="/w/index.php?title=BeiBen_V3_Series&amp;action=edit&amp;redlink=1" class="new" title="BeiBen V3 Series (page does not exist)">BeiBen V3 Series</a></td>
<td><a href="/wiki/File:Beiben_V3_1834_2014_(15638407746).jpg" class="image"><img alt="Beiben V3 1834 2014 (15638407746).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/58/Beiben_V3_1834_2014_%2815638407746%29.jpg/120px-Beiben_V3_1834_2014_%2815638407746%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/58/Beiben_V3_1834_2014_%2815638407746%29.jpg/180px-Beiben_V3_1834_2014_%2815638407746%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/58/Beiben_V3_1834_2014_%2815638407746%29.jpg/240px-Beiben_V3_1834_2014_%2815638407746%29.jpg 2x" data-file-width="3000" data-file-height="2250" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China, South Africa, Eastern Africa, Southeastern Asia</td>
</tr>
<tr>
<td>BeiBen</td>
<td><a href="/w/index.php?title=BeiBen_NG80_Series&amp;action=edit&amp;redlink=1" class="new" title="BeiBen NG80 Series (page does not exist)">BeiBen NG80 Series</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China, South Africa, Eastern Africa, Southeastern Asia</td>
</tr>
<tr>
<td>BeiBen</td>
<td><a href="/w/index.php?title=BeiBen_Eurysome&amp;action=edit&amp;redlink=1" class="new" title="BeiBen Eurysome (page does not exist)">BeiBen Eurysome</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>BeiBen</td>
<td><a href="/w/index.php?title=BeiBen_Tiema_Series&amp;action=edit&amp;redlink=1" class="new" title="BeiBen Tiema Series (page does not exist)">BeiBen Tiema Series</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td><a href="/wiki/Beijing_Automobile_Works" class="mw-redirect" title="Beijing Automobile Works">Beijing Automobile Works</a></td>
<td><a href="/w/index.php?title=BAW_Dragon_Flag&amp;action=edit&amp;redlink=1" class="new" title="BAW Dragon Flag (page does not exist)">BAW Dragon Flag</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Beijing Automobile Works</td>
<td><a href="/w/index.php?title=BAW_Bell&amp;action=edit&amp;redlink=1" class="new" title="BAW Bell (page does not exist)">BAW Bell</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td><a href="/wiki/BharatBenz" title="BharatBenz">BharatBenz</a></td>
<td>BharatBenz 914</td>
<td><a href="/wiki/File:BHARATBENZ_Light_Duty_Truck_914_R._front_2._Spielvogel_2012.JPG" class="image"><img alt="BHARATBENZ Light Duty Truck 914 R. front 2. Spielvogel 2012.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f8/BHARATBENZ_Light_Duty_Truck_914_R._front_2._Spielvogel_2012.JPG/120px-BHARATBENZ_Light_Duty_Truck_914_R._front_2._Spielvogel_2012.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f8/BHARATBENZ_Light_Duty_Truck_914_R._front_2._Spielvogel_2012.JPG/180px-BHARATBENZ_Light_Duty_Truck_914_R._front_2._Spielvogel_2012.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f8/BHARATBENZ_Light_Duty_Truck_914_R._front_2._Spielvogel_2012.JPG/240px-BHARATBENZ_Light_Duty_Truck_914_R._front_2._Spielvogel_2012.JPG 2x" data-file-width="1362" data-file-height="1022" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>India/Germany</td>
<td>India</td>
</tr>
<tr>
<td>BharatBenz</td>
<td>BharatBenz 1214</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>India/Germany</td>
<td>India</td>
</tr>
<tr>
<td>BharatBenz</td>
<td>BharatBenz 2523</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>India/Germany</td>
<td>India</td>
</tr>
<tr>
<td>BharatBenz</td>
<td>BharatBenz 3128</td>
<td><a href="/wiki/File:BHARATBENZ_Heavy_Duty_Truck_3128_C._right_side._Spielvogel_2012.jpg" class="image"><img alt="BHARATBENZ Heavy Duty Truck 3128 C. right side. Spielvogel 2012.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/BHARATBENZ_Heavy_Duty_Truck_3128_C._right_side._Spielvogel_2012.jpg/120px-BHARATBENZ_Heavy_Duty_Truck_3128_C._right_side._Spielvogel_2012.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/BHARATBENZ_Heavy_Duty_Truck_3128_C._right_side._Spielvogel_2012.jpg/180px-BHARATBENZ_Heavy_Duty_Truck_3128_C._right_side._Spielvogel_2012.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bc/BHARATBENZ_Heavy_Duty_Truck_3128_C._right_side._Spielvogel_2012.jpg/240px-BHARATBENZ_Heavy_Duty_Truck_3128_C._right_side._Spielvogel_2012.jpg 2x" data-file-width="2499" data-file-height="1666" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>India/Germany</td>
<td>India</td>
</tr>
<tr>
<td>BharatBenz</td>
<td>BharatBenz 3143</td>
<td><a href="/wiki/File:BharatBenz_3143_Mining_truck._Spielvogel_1.JPG" class="image"><img alt="BharatBenz 3143 Mining truck. Spielvogel 1.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/19/BharatBenz_3143_Mining_truck._Spielvogel_1.JPG/120px-BharatBenz_3143_Mining_truck._Spielvogel_1.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/19/BharatBenz_3143_Mining_truck._Spielvogel_1.JPG/180px-BharatBenz_3143_Mining_truck._Spielvogel_1.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/19/BharatBenz_3143_Mining_truck._Spielvogel_1.JPG/240px-BharatBenz_3143_Mining_truck._Spielvogel_1.JPG 2x" data-file-width="5550" data-file-height="3700" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>India/Germany</td>
<td>India</td>
</tr>
<tr>
<td>BharatBenz</td>
<td>BharatBenz 3723</td>
<td><a href="/wiki/File:Bharat_Benz_3723.jpg" class="image"><img alt="Bharat Benz 3723.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Bharat_Benz_3723.jpg/120px-Bharat_Benz_3723.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Bharat_Benz_3723.jpg/180px-Bharat_Benz_3723.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Bharat_Benz_3723.jpg/240px-Bharat_Benz_3723.jpg 2x" data-file-width="6016" data-file-height="4000" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>India</td>
<td>India</td>
</tr>
<tr>
<td><a href="/wiki/Bryansky_Avtomobilny_Zavod" title="Bryansky Avtomobilny Zavod">Bryansk Automobile Plant</a></td>
<td>BAZ-69096</td>
<td><a href="/wiki/File:BAZ-69096_special_wheeled_chassis_-02.jpg" class="image"><img alt="BAZ-69096 special wheeled chassis -02.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/86/BAZ-69096_special_wheeled_chassis_-02.jpg/120px-BAZ-69096_special_wheeled_chassis_-02.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/86/BAZ-69096_special_wheeled_chassis_-02.jpg/180px-BAZ-69096_special_wheeled_chassis_-02.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/86/BAZ-69096_special_wheeled_chassis_-02.jpg/240px-BAZ-69096_special_wheeled_chassis_-02.jpg 2x" data-file-width="2250" data-file-height="1420" /></a></td>
<td>Military Heavy</td>
<td>Cabin before engine</td>
<td></td>
<td>Russia</td>
<td>Russia</td>
</tr>
<tr>
<td>Bryansk Automobile Plant</td>
<td>BAZ-69096 (civilian version)</td>
<td><a href="/wiki/File:Special_truck_BAZ-69096.jpg" class="image"><img alt="Special truck BAZ-69096.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Special_truck_BAZ-69096.jpg/120px-Special_truck_BAZ-69096.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Special_truck_BAZ-69096.jpg/180px-Special_truck_BAZ-69096.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Special_truck_BAZ-69096.jpg/240px-Special_truck_BAZ-69096.jpg 2x" data-file-width="2250" data-file-height="1430" /></a></td>
<td>Heavy</td>
<td>Cabin before engine</td>
<td></td>
<td>Russia</td>
<td>Russia</td>
</tr>
<tr>
<td>Bryansk Automobile Plant</td>
<td>BAZ-64022</td>
<td><a href="/wiki/File:%D0%97%D0%A0%D0%9A_%D0%A1-400_%D0%A2%D1%80%D0%B8%D1%83%D0%BC%D1%84_(SA-21)_%D0%BD%D0%B0_%D1%80%D0%B5%D0%BF%D0%B5%D1%82%D0%B8%D1%86%D0%B8%D0%B8_4_%D0%BC%D0%B0%D1%8F_2010.jpg" class="image"><img alt="ЗРК С-400 Триумф (SA-21) на репетиции 4 мая 2010.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0e/%D0%97%D0%A0%D0%9A_%D0%A1-400_%D0%A2%D1%80%D0%B8%D1%83%D0%BC%D1%84_%28SA-21%29_%D0%BD%D0%B0_%D1%80%D0%B5%D0%BF%D0%B5%D1%82%D0%B8%D1%86%D0%B8%D0%B8_4_%D0%BC%D0%B0%D1%8F_2010.jpg/120px-%D0%97%D0%A0%D0%9A_%D0%A1-400_%D0%A2%D1%80%D0%B8%D1%83%D0%BC%D1%84_%28SA-21%29_%D0%BD%D0%B0_%D1%80%D0%B5%D0%BF%D0%B5%D1%82%D0%B8%D1%86%D0%B8%D0%B8_4_%D0%BC%D0%B0%D1%8F_2010.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0e/%D0%97%D0%A0%D0%9A_%D0%A1-400_%D0%A2%D1%80%D0%B8%D1%83%D0%BC%D1%84_%28SA-21%29_%D0%BD%D0%B0_%D1%80%D0%B5%D0%BF%D0%B5%D1%82%D0%B8%D1%86%D0%B8%D0%B8_4_%D0%BC%D0%B0%D1%8F_2010.jpg/180px-%D0%97%D0%A0%D0%9A_%D0%A1-400_%D0%A2%D1%80%D0%B8%D1%83%D0%BC%D1%84_%28SA-21%29_%D0%BD%D0%B0_%D1%80%D0%B5%D0%BF%D0%B5%D1%82%D0%B8%D1%86%D0%B8%D0%B8_4_%D0%BC%D0%B0%D1%8F_2010.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0e/%D0%97%D0%A0%D0%9A_%D0%A1-400_%D0%A2%D1%80%D0%B8%D1%83%D0%BC%D1%84_%28SA-21%29_%D0%BD%D0%B0_%D1%80%D0%B5%D0%BF%D0%B5%D1%82%D0%B8%D1%86%D0%B8%D0%B8_4_%D0%BC%D0%B0%D1%8F_2010.jpg/240px-%D0%97%D0%A0%D0%9A_%D0%A1-400_%D0%A2%D1%80%D0%B8%D1%83%D0%BC%D1%84_%28SA-21%29_%D0%BD%D0%B0_%D1%80%D0%B5%D0%BF%D0%B5%D1%82%D0%B8%D1%86%D0%B8%D0%B8_4_%D0%BC%D0%B0%D1%8F_2010.jpg 2x" data-file-width="3210" data-file-height="2139" /></a></td>
<td>Military Heavy</td>
<td>Cabin before engine</td>
<td></td>
<td>Russia</td>
<td>Russia</td>
</tr>
<tr>
<td><a href="/wiki/BMC_(Turkey)" title="BMC (Turkey)">BMC (Turkey)</a></td>
<td><a href="/w/index.php?title=BMC_Fatih&amp;action=edit&amp;redlink=1" class="new" title="BMC Fatih (page does not exist)">BMC Fatih</a></td>
<td><a href="/wiki/File:BMC_Fatih_of_Fatih_municipality.jpg" class="image"><img alt="BMC Fatih of Fatih municipality.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3b/BMC_Fatih_of_Fatih_municipality.jpg/120px-BMC_Fatih_of_Fatih_municipality.jpg" width="120" height="81" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3b/BMC_Fatih_of_Fatih_municipality.jpg/180px-BMC_Fatih_of_Fatih_municipality.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3b/BMC_Fatih_of_Fatih_municipality.jpg/240px-BMC_Fatih_of_Fatih_municipality.jpg 2x" data-file-width="3288" data-file-height="2220" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Turkey</td>
<td>Turkey</td>
</tr>
<tr>
<td><a href="/wiki/Caterpillar_Inc." title="Caterpillar Inc.">Caterpillar</a></td>
<td><a href="/w/index.php?title=CAT_CT660&amp;action=edit&amp;redlink=1" class="new" title="CAT CT660 (page does not exist)">CAT CT660</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Australia</td>
</tr>
<tr>
<td><a href="/wiki/Canadian_Electric_Vehicles" title="Canadian Electric Vehicles">CEV</a></td>
<td><a href="/wiki/Might-E_Truck" title="Might-E Truck">Might-E Truck</a></td>
<td><a href="/wiki/File:Might-E_Truck.jpg" class="image"><img alt="Might-E Truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Might-E_Truck.jpg/120px-Might-E_Truck.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Might-E_Truck.jpg/180px-Might-E_Truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Might-E_Truck.jpg/240px-Might-E_Truck.jpg 2x" data-file-width="3456" data-file-height="2304" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Canada</td>
<td>Canada, United States</td>
</tr>
<tr>
<td><a href="/wiki/Chevrolet" title="Chevrolet">Chevrolet</a></td>
<td><a href="/wiki/Isuzu_Elf" title="Isuzu Elf">Chevrolet NHR</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Isuzu Grafter(United Kingdom), Isuzu Lingqingka (China), Isuzu Reward, Chevrolet N-Series, <a href="/wiki/HICOM_Perkasa" class="mw-redirect" title="HICOM Perkasa">HICOM Perkasa</a></td>
<td>Japan</td>
<td>Columbia</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Isuzu_Elf" title="Isuzu Elf">Chevrolet NKR</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Isuzu Grafter(United Kingdom), Isuzu Lingqingka (China), Isuzu Reward, Chevrolet N-Series, <a href="/wiki/HICOM_Perkasa" class="mw-redirect" title="HICOM Perkasa">HICOM Perkasa</a></td>
<td>Japan</td>
<td>Columbia</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Isuzu_Elf" title="Isuzu Elf">Chevrolet N-Series</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Isuzu Grafter(United Kingdom), Isuzu Lingqingka (China), Isuzu Reward, Chevrolet NHR, Chevrolet NKR, <a href="/wiki/HICOM_Perkasa" class="mw-redirect" title="HICOM Perkasa">HICOM Perkasa</a></td>
<td>Japan</td>
<td>Egypt</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_Express" title="Chevrolet Express">Chevrolet Express</a> Cutaway</td>
<td><a href="/wiki/File:GMC_Savana_(Discount_Rent_A_Car).JPG" class="image"><img alt="GMC Savana (Discount Rent A Car).JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/45/GMC_Savana_%28Discount_Rent_A_Car%29.JPG/120px-GMC_Savana_%28Discount_Rent_A_Car%29.JPG" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/45/GMC_Savana_%28Discount_Rent_A_Car%29.JPG/180px-GMC_Savana_%28Discount_Rent_A_Car%29.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/45/GMC_Savana_%28Discount_Rent_A_Car%29.JPG/240px-GMC_Savana_%28Discount_Rent_A_Car%29.JPG 2x" data-file-width="2057" data-file-height="1425" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td><a href="/wiki/GMC_Savana" class="mw-redirect" title="GMC Savana">GMC Savana</a></td>
<td>United States</td>
<td>United States, Canada, Mexico, Middle East</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Isuzu_Forward" title="Isuzu Forward">Chevrolet FTR</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Japan</td>
<td>Columbia</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Isuzu_Giga" title="Isuzu Giga">Chevrolet FVR</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Japan</td>
<td>Columbia</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Isuzu_Giga" title="Isuzu Giga">Chevrolet FVZ</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Japan</td>
<td>Columbia</td>
</tr>
<tr>
<td>Chevrolet</td>
<td><a href="/wiki/Chevrolet_CYZ" class="mw-redirect" title="Chevrolet CYZ">Chevrolet CYZ</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Japan</td>
<td>Columbia</td>
</tr>
<tr>
<td><a href="/wiki/Citro%C3%ABn" title="Citroën">Citroën</a></td>
<td><a href="/wiki/Citro%C3%ABn_Jumper" class="mw-redirect" title="Citroën Jumper">Citroën Jumper</a></td>
<td><a href="/wiki/File:Citro%C3%ABn_Jumper_hytt.jpg" class="image"><img alt="Citroën Jumper hytt.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Citro%C3%ABn_Jumper_hytt.jpg/120px-Citro%C3%ABn_Jumper_hytt.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Citro%C3%ABn_Jumper_hytt.jpg/180px-Citro%C3%ABn_Jumper_hytt.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Citro%C3%ABn_Jumper_hytt.jpg/240px-Citro%C3%ABn_Jumper_hytt.jpg 2x" data-file-width="2048" data-file-height="1536" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td><a href="/wiki/Fiat_Ducato" title="Fiat Ducato">Fiat Ducato</a>, <a href="/wiki/Peugeot_Boxer" class="mw-redirect" title="Peugeot Boxer">Peugeot Boxer</a></td>
<td>Italy</td>
<td>Europe, Middle East, Algeria, South Africa, Morocco, Western Africa</td>
</tr>
<tr>
<td><a href="/wiki/Crane_Carrier_Corporation" class="mw-redirect" title="Crane Carrier Corporation">CCC</a></td>
<td>CCC LET2</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>CCC LET2 CC</td>
<td>United States</td>
<td>United States, Canada</td>
</tr>
<tr>
<td>CCC</td>
<td>CCC COE2</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada</td>
</tr>
<tr>
<td>CCC</td>
<td>CCC LOT2</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada</td>
</tr>
<tr>
<td><a href="/wiki/Chun_Nan_Jun" title="Chun Nan Jun">CNJ</a></td>
<td>CNJ Fortune</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>CNJ</td>
<td>CNJ Ruichi</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td><a href="/wiki/DAF_Trucks" title="DAF Trucks">DAF Trucks</a></td>
<td><a href="/wiki/DAF_LF" title="DAF LF">DAF LF</a></td>
<td><a href="/wiki/File:Mainline_BU06DXC.jpg" class="image"><img alt="Mainline BU06DXC.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/68/Mainline_BU06DXC.jpg/120px-Mainline_BU06DXC.jpg" width="120" height="95" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/68/Mainline_BU06DXC.jpg/180px-Mainline_BU06DXC.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/68/Mainline_BU06DXC.jpg/240px-Mainline_BU06DXC.jpg 2x" data-file-width="2021" data-file-height="1607" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>The Netherlands</td>
<td>worldwide, except North America and Japan</td>
</tr>
<tr>
<td>DAF Trucks</td>
<td><a href="/wiki/DAF_CF" title="DAF CF">DAF CF</a></td>
<td><a href="/wiki/File:Hart%27s_Haulage_2008_DAF_CF_tipper_truck,_25_January_2010.jpg" class="image"><img alt="Hart's Haulage 2008 DAF CF tipper truck, 25 January 2010.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Hart%27s_Haulage_2008_DAF_CF_tipper_truck%2C_25_January_2010.jpg/120px-Hart%27s_Haulage_2008_DAF_CF_tipper_truck%2C_25_January_2010.jpg" width="120" height="79" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Hart%27s_Haulage_2008_DAF_CF_tipper_truck%2C_25_January_2010.jpg/180px-Hart%27s_Haulage_2008_DAF_CF_tipper_truck%2C_25_January_2010.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Hart%27s_Haulage_2008_DAF_CF_tipper_truck%2C_25_January_2010.jpg/240px-Hart%27s_Haulage_2008_DAF_CF_tipper_truck%2C_25_January_2010.jpg 2x" data-file-width="1024" data-file-height="671" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>The Netherlands</td>
<td>Worldwide, except North America and Japan</td>
</tr>
<tr>
<td>DAF Trucks</td>
<td><a href="/wiki/DAF_XF" title="DAF XF">DAF XF</a></td>
<td><a href="/wiki/File:DAF_-_XF.JPG" class="image"><img alt="DAF - XF.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9b/DAF_-_XF.JPG/120px-DAF_-_XF.JPG" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9b/DAF_-_XF.JPG/180px-DAF_-_XF.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9b/DAF_-_XF.JPG/240px-DAF_-_XF.JPG 2x" data-file-width="1809" data-file-height="1814" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>The Netherlands</td>
<td>Worldwide, except North America and Japan</td>
</tr>
<tr>
<td><a href="/wiki/Dayun_Group" title="Dayun Group">Dayun</a></td>
<td><a href="/w/index.php?title=Dayun_CGC1047PB33E3&amp;action=edit&amp;redlink=1" class="new" title="Dayun CGC1047PB33E3 (page does not exist)">Dayun CGC1047PB33E3</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Dayun CGC1048PX28E3</td>
<td>China</td>
<td>China, South East Asia, Middle East, Russia, France, Africa, Cuba, Venezuela, Brazil</td>
</tr>
<tr>
<td>Dayun</td>
<td><a href="/w/index.php?title=Dayun_CGC1141&amp;action=edit&amp;redlink=1" class="new" title="Dayun CGC1141 (page does not exist)">Dayun CGC1141</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China, South East Asia, Middle East, Russia, France, Africa, Cuba, Venezuela, Brazil</td>
</tr>
<tr>
<td>Dayun</td>
<td><a href="/w/index.php?title=Dayun_DYX1250&amp;action=edit&amp;redlink=1" class="new" title="Dayun DYX1250 (page does not exist)">Dayun DYX1250</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Dayun</td>
<td><a href="/w/index.php?title=Dayun_CGC1311&amp;action=edit&amp;redlink=1" class="new" title="Dayun CGC1311 (page does not exist)">Dayun CGC1311</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Dayun</td>
<td><a href="/w/index.php?title=Dayun_DYX5310&amp;action=edit&amp;redlink=1" class="new" title="Dayun DYX5310 (page does not exist)">Dayun DYX5310</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China, South East Asia, Middle East, Russia, France, Africa, Cuba, Venezuela, Brazil</td>
</tr>
<tr>
<td><a href="/wiki/DINA_S.A." title="DINA S.A.">Dina</a></td>
<td><a href="/w/index.php?title=Dina_Hustler&amp;action=edit&amp;redlink=1" class="new" title="Dina Hustler (page does not exist)">Dina Hustler</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Mexico</td>
<td>Mexico, Nicaragua, United States, Canada</td>
</tr>
<tr>
<td><a href="/wiki/Dongfeng_Motor" title="Dongfeng Motor">Dongfeng</a></td>
<td>Dongfeng Palawan</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td><a href="/wiki/Nissan_Cabstar" title="Nissan Cabstar">Nissan Cabstar</a>(Europe, Australia, China), Nissan Atlas H41 Series(Malaysia), <a href="/wiki/Nissan_Atlas" title="Nissan Atlas">Nissan Atlas</a>, <a href="/wiki/Renault_Maxity" title="Renault Maxity">Renault Maxity</a>, Renault Samsung SV110, UD Condor, Yue Loong Homer, Isuzu N-Series</td>
<td>Japan</td>
<td>China</td>
</tr>
<tr>
<td>Dongfeng</td>
<td>Dongfeng Gold Fighter</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Dongfeng</td>
<td>Dongfeng Chenglong</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Dongfeng</td>
<td>Dongfeng Kang PA</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Dongfeng</td>
<td>Dongfeng Star</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Dongfeng</td>
<td>Dongfeng Badly</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Dongfeng</td>
<td>Dongfeng Days Kam</td>
<td><a href="/wiki/File:Dongfeng_China_Post.jpg" class="image"><img alt="Dongfeng China Post.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/01/Dongfeng_China_Post.jpg/120px-Dongfeng_China_Post.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/01/Dongfeng_China_Post.jpg/180px-Dongfeng_China_Post.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/01/Dongfeng_China_Post.jpg/240px-Dongfeng_China_Post.jpg 2x" data-file-width="3348" data-file-height="2124" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Dongfeng</td>
<td>Dongfeng Likas</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Dongfeng</td>
<td>Dongfeng King Kong</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Dongfeng</td>
<td>Dongfeng Tianlong</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Dongfeng</td>
<td>Dongfeng Titan</td>
<td><a href="/wiki/File:Construction_beijing_2008_water_cube_7.jpg" class="image"><img alt="Construction beijing 2008 water cube 7.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/86/Construction_beijing_2008_water_cube_7.jpg/120px-Construction_beijing_2008_water_cube_7.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/86/Construction_beijing_2008_water_cube_7.jpg/180px-Construction_beijing_2008_water_cube_7.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/86/Construction_beijing_2008_water_cube_7.jpg/240px-Construction_beijing_2008_water_cube_7.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Dongfeng</td>
<td>Dongfeng Balong Heavy Truck</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Dongfeng</td>
<td>Dongfeng Dragon Card</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td><a href="/wiki/Fabrika_automobila_Priboj" title="Fabrika automobila Priboj">FAP</a></td>
<td>FAP 1318</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Serbia</td>
<td>Serbia</td>
</tr>
<tr>
<td>FAP</td>
<td>FAP 1824</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Serbia</td>
<td>Serbia</td>
</tr>
<tr>
<td>FAP</td>
<td>FAP 1828</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>FAP 1829</td>
<td>Serbia</td>
<td>Serbia</td>
</tr>
<tr>
<td>FAP</td>
<td>FAP 1830</td>
<td><a href="/wiki/File:FAP_tractor_two-axle._side._Spielvogel_2012.jpg" class="image"><img alt="FAP tractor two-axle. side. Spielvogel 2012.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cd/FAP_tractor_two-axle._side._Spielvogel_2012.jpg/120px-FAP_tractor_two-axle._side._Spielvogel_2012.jpg" width="120" height="160" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cd/FAP_tractor_two-axle._side._Spielvogel_2012.jpg/180px-FAP_tractor_two-axle._side._Spielvogel_2012.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cd/FAP_tractor_two-axle._side._Spielvogel_2012.jpg/240px-FAP_tractor_two-axle._side._Spielvogel_2012.jpg 2x" data-file-width="3000" data-file-height="4000" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Serbia</td>
<td>Serbia</td>
</tr>
<tr>
<td>FAP</td>
<td>FAP 2235</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>FAP 2236</td>
<td>Serbia</td>
<td>Serbia</td>
</tr>
<tr>
<td>FAP</td>
<td>FAP 2640</td>
<td><a href="/wiki/File:FAP_2640_heavy_duty_truck_three-axle._side_view._Spielvogel_2012.JPG" class="image"><img alt="FAP 2640 heavy duty truck three-axle. side view. Spielvogel 2012.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f9/FAP_2640_heavy_duty_truck_three-axle._side_view._Spielvogel_2012.JPG/120px-FAP_2640_heavy_duty_truck_three-axle._side_view._Spielvogel_2012.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f9/FAP_2640_heavy_duty_truck_three-axle._side_view._Spielvogel_2012.JPG/180px-FAP_2640_heavy_duty_truck_three-axle._side_view._Spielvogel_2012.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f9/FAP_2640_heavy_duty_truck_three-axle._side_view._Spielvogel_2012.JPG/240px-FAP_2640_heavy_duty_truck_three-axle._side_view._Spielvogel_2012.JPG 2x" data-file-width="4000" data-file-height="3000" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Serbia</td>
<td>Serbia</td>
</tr>
<tr>
<td><a href="/wiki/FAW_Group" title="FAW Group">FAW</a></td>
<td>FAW CA1051K26L3</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>FAW CA1051K26L4</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>FAW</td>
<td>FAW CA1051K26L3R5</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>FAW CA1051K26L4R5<br />
FAW CA1061K28L5R5<br />
FAW CA1061K28L6R5</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>FAW</td>
<td>FAW CA1037K2L</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>FAW CA1037K2L2<br />
FAW CA1047K26L<br />
FAW CA1047K26L2</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>FAW</td>
<td>FAW CA1031K2LR5</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>FAW CA1041K26LR5<br />
FAW CA1041K26L2R5</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>FAW</td>
<td>FAW CA1031K2L</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>FAW CA1031K2L2<br />
FAW CA1041K26L<br />
FAW CA1041K26L2COE</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>FAW</td>
<td>FAW CA5313CLXYP7K2L11T4</td>
<td><a href="/wiki/File:Truck_on_Afobaka_road_2.JPG" class="image"><img alt="Truck on Afobaka road 2.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Truck_on_Afobaka_road_2.JPG/120px-Truck_on_Afobaka_road_2.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Truck_on_Afobaka_road_2.JPG/180px-Truck_on_Afobaka_road_2.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Truck_on_Afobaka_road_2.JPG/240px-Truck_on_Afobaka_road_2.JPG 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>FAW CA1258P1K2L7T1<br />
FAW CA5167XXYP11K2L7<br />
FAW CA1126P1K2L2<br />
FAW CA1121J<br />
FAW CA1083P9K2L2</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>FAW</td>
<td>FAW CA3075K2</td>
<td><a href="/wiki/File:Copia_di_Montagne_della_Manchuria_-Cina-.JPG" class="image"><img alt="Copia di Montagne della Manchuria -Cina-.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/44/Copia_di_Montagne_della_Manchuria_-Cina-.JPG/120px-Copia_di_Montagne_della_Manchuria_-Cina-.JPG" width="120" height="53" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/44/Copia_di_Montagne_della_Manchuria_-Cina-.JPG/180px-Copia_di_Montagne_della_Manchuria_-Cina-.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/44/Copia_di_Montagne_della_Manchuria_-Cina-.JPG/240px-Copia_di_Montagne_della_Manchuria_-Cina-.JPG 2x" data-file-width="518" data-file-height="227" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>FAW CA1093K2<br />
FAW CA1097K2</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>FAW</td>
<td>FAW CA4322P21K15T1YA82</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>FAW CA3320P2K1T1YA80<br />
FAW CA1121PK2L2Y<br />
FAW CA1070K28L3Y</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>FAW</td>
<td>FAW CA3313P7K2T4A</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>FAW CA3250P1K2T1<br />
FAW CA3252P2K2T1A1<br />
FAW CA3312P2K2T4A1</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>FAW</td>
<td>FAW CA4252P21K2T1A</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>FAW CA4182P21K2<br />
FAW CA4163P7K2<br />
FAW CA4180P66K2E<br />
FAW CA4250P66K22T1A2E<br />
FAW CA4260P66K22T1A</td>
<td>China</td>
<td>China, Russia</td>
</tr>
<tr>
<td>FAW</td>
<td><a href="/w/index.php?title=FAW_J6&amp;action=edit&amp;redlink=1" class="new" title="FAW J6 (page does not exist)">FAW J6</a></td>
<td><a href="/wiki/File:FAW_LKW_(China).jpg" class="image"><img alt="FAW LKW (China).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/FAW_LKW_%28China%29.jpg/120px-FAW_LKW_%28China%29.jpg" width="120" height="101" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/FAW_LKW_%28China%29.jpg/180px-FAW_LKW_%28China%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bc/FAW_LKW_%28China%29.jpg/240px-FAW_LKW_%28China%29.jpg 2x" data-file-width="2318" data-file-height="1944" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China, Iran, Russia</td>
</tr>
<tr>
<td><a href="/wiki/FAW-GM" title="FAW-GM">FAW-GM</a></td>
<td>Jie Fang 1-Ton Truck</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>China/United States</td>
<td>China</td>
</tr>
<tr>
<td>FAW-GM</td>
<td>Jie Fang 2-Ton Truck</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>China/United States</td>
<td>China</td>
</tr>
<tr>
<td>FAW-GM</td>
<td>Jie Fang 3-Ton Truck</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China/United States</td>
<td>China</td>
</tr>
<tr>
<td><a href="/wiki/Fiat" class="mw-redirect" title="Fiat">Fiat</a></td>
<td><a href="/wiki/Fiat_Ducato" title="Fiat Ducato">Fiat Ducato</a></td>
<td><a href="/wiki/File:Fiat_Ducato_Pritsche_front_20081223.jpg" class="image"><img alt="Fiat Ducato Pritsche front 20081223.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Fiat_Ducato_Pritsche_front_20081223.jpg/120px-Fiat_Ducato_Pritsche_front_20081223.jpg" width="120" height="73" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Fiat_Ducato_Pritsche_front_20081223.jpg/180px-Fiat_Ducato_Pritsche_front_20081223.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Fiat_Ducato_Pritsche_front_20081223.jpg/240px-Fiat_Ducato_Pritsche_front_20081223.jpg 2x" data-file-width="2160" data-file-height="1314" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td><a href="/wiki/Peugeot_Boxer" class="mw-redirect" title="Peugeot Boxer">Peugeot Boxer</a>, <a href="/wiki/Citro%C3%ABn_Jumper" class="mw-redirect" title="Citroën Jumper">Citroën Jumper</a></td>
<td>Italy</td>
<td>Europe, South Africa</td>
</tr>
<tr>
<td><a href="/wiki/Ford" class="mw-redirect" title="Ford">Ford</a></td>
<td><a href="/wiki/Ford_F-650" title="Ford F-650">Ford F-650/750</a></td>
<td><a href="/wiki/File:Ford_F650_flatbed.jpg" class="image"><img alt="Ford F650 flatbed.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Ford_F650_flatbed.jpg/120px-Ford_F650_flatbed.jpg" width="120" height="89" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Ford_F650_flatbed.jpg/180px-Ford_F650_flatbed.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/52/Ford_F650_flatbed.jpg/240px-Ford_F650_flatbed.jpg 2x" data-file-width="1694" data-file-height="1260" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_Econoline" class="mw-redirect" title="Ford Econoline">Ford Econoline</a> Cataway</td>
<td><a href="/wiki/File:Ford_E-450_Cutaway.jpg" class="image"><img alt="Ford E-450 Cutaway.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Ford_E-450_Cutaway.jpg/120px-Ford_E-450_Cutaway.jpg" width="120" height="72" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Ford_E-450_Cutaway.jpg/180px-Ford_E-450_Cutaway.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Ford_E-450_Cutaway.jpg/240px-Ford_E-450_Cutaway.jpg 2x" data-file-width="1477" data-file-height="883" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Ford</td>
<td><a href="/wiki/Ford_Cargo" title="Ford Cargo">Ford Cargo</a></td>
<td><a href="/wiki/File:Ford_Cargo_2628_6x4_2012.jpg" class="image"><img alt="Ford Cargo 2628 6x4 2012.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/41/Ford_Cargo_2628_6x4_2012.jpg/120px-Ford_Cargo_2628_6x4_2012.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/41/Ford_Cargo_2628_6x4_2012.jpg/180px-Ford_Cargo_2628_6x4_2012.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/41/Ford_Cargo_2628_6x4_2012.jpg/240px-Ford_Cargo_2628_6x4_2012.jpg 2x" data-file-width="1500" data-file-height="1125" /></a></td>
<td>Light/Medium/Heavy</td>
<td>COE</td>
<td>-</td>
<td>Brazil and Turkey(formally United States)</td>
<td>Europe, Brazil</td>
</tr>
<tr>
<td>Ford Otosan</td>
<td><a href="/wiki/Ford_Cargo" title="Ford Cargo">Ford Cargo</a></td>
<td><a href="/wiki/File:Turkische_ford_cargo.jpg" class="image"><img alt="Turkische ford cargo.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Turkische_ford_cargo.jpg/120px-Turkische_ford_cargo.jpg" width="120" height="160" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Turkische_ford_cargo.jpg/180px-Turkische_ford_cargo.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Turkische_ford_cargo.jpg/240px-Turkische_ford_cargo.jpg 2x" data-file-width="540" data-file-height="720" /></a></td>
<td>Light/Medium/Heavy</td>
<td>COE</td>
<td>-</td>
<td>Turkey</td>
<td>Europe, Brazil</td>
</tr>
<tr>
<td><a href="/wiki/Foton_Motor" title="Foton Motor">Foton</a></td>
<td>Foton Aumark Series</td>
<td><a href="/wiki/File:Mackay_Memorial_Hospital_827-BZ_20150912.jpg" class="image"><img alt="Mackay Memorial Hospital 827-BZ 20150912.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Mackay_Memorial_Hospital_827-BZ_20150912.jpg/120px-Mackay_Memorial_Hospital_827-BZ_20150912.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Mackay_Memorial_Hospital_827-BZ_20150912.jpg/180px-Mackay_Memorial_Hospital_827-BZ_20150912.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Mackay_Memorial_Hospital_827-BZ_20150912.jpg/240px-Mackay_Memorial_Hospital_827-BZ_20150912.jpg 2x" data-file-width="3200" data-file-height="2400" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Master Foton</td>
<td>China</td>
<td>China, Algeria, South East Asia, Russia, Columbia, Peru, South Africa, Middle East</td>
</tr>
<tr>
<td>Foton</td>
<td>Foton Ollin Series</td>
<td><a href="/wiki/File:Foton_medium_truck_front.jpg" class="image"><img alt="Foton medium truck front.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Foton_medium_truck_front.jpg/120px-Foton_medium_truck_front.jpg" width="120" height="123" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Foton_medium_truck_front.jpg/180px-Foton_medium_truck_front.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Foton_medium_truck_front.jpg/240px-Foton_medium_truck_front.jpg 2x" data-file-width="742" data-file-height="761" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China, Algeria, South East Asia, Russia, Columbia, Peru, South Africa, Middle East</td>
</tr>
<tr>
<td>Foton</td>
<td>Foton Auman Series</td>
<td><a href="/wiki/File:Beiqi_Foton_Motor_Auman.jpg" class="image"><img alt="Beiqi Foton Motor Auman.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Beiqi_Foton_Motor_Auman.jpg/120px-Beiqi_Foton_Motor_Auman.jpg" width="120" height="130" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Beiqi_Foton_Motor_Auman.jpg/180px-Beiqi_Foton_Motor_Auman.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Beiqi_Foton_Motor_Auman.jpg/240px-Beiqi_Foton_Motor_Auman.jpg 2x" data-file-width="1520" data-file-height="1650" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China, Algeria, South East Asia, Russia, Columbia, Peru, South Africa, Middle East</td>
</tr>
<tr>
<td><a href="/wiki/Freightliner_Trucks" title="Freightliner Trucks">Freightliner</a></td>
<td><a href="/w/index.php?title=Freigtliner_M2_106&amp;action=edit&amp;redlink=1" class="new" title="Freigtliner M2 106 (page does not exist)">Freigtliner M2 106</a></td>
<td><a href="/wiki/File:Freightliner_M2_tractor_Mickey_Body_pic12.jpg" class="image"><img alt="Freightliner M2 tractor Mickey Body pic12.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8d/Freightliner_M2_tractor_Mickey_Body_pic12.jpg/120px-Freightliner_M2_tractor_Mickey_Body_pic12.jpg" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8d/Freightliner_M2_tractor_Mickey_Body_pic12.jpg/180px-Freightliner_M2_tractor_Mickey_Body_pic12.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8d/Freightliner_M2_tractor_Mickey_Body_pic12.jpg/240px-Freightliner_M2_tractor_Mickey_Body_pic12.jpg 2x" data-file-width="2097" data-file-height="1187" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>North America</td>
</tr>
<tr>
<td>Freightliner</td>
<td><a href="/w/index.php?title=Freightliner_M2_112&amp;action=edit&amp;redlink=1" class="new" title="Freightliner M2 112 (page does not exist)">Freightliner M2 112</a></td>
<td><a href="/wiki/File:Freightliner_M2_Business_Class_Crew_Cab_6x4_2012.jpg" class="image"><img alt="Freightliner M2 Business Class Crew Cab 6x4 2012.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/75/Freightliner_M2_Business_Class_Crew_Cab_6x4_2012.jpg/120px-Freightliner_M2_Business_Class_Crew_Cab_6x4_2012.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/75/Freightliner_M2_Business_Class_Crew_Cab_6x4_2012.jpg/180px-Freightliner_M2_Business_Class_Crew_Cab_6x4_2012.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/75/Freightliner_M2_Business_Class_Crew_Cab_6x4_2012.jpg/240px-Freightliner_M2_Business_Class_Crew_Cab_6x4_2012.jpg 2x" data-file-width="1500" data-file-height="1125" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>Freightliner Columbia (South Africa, Australia, New Zealand)</td>
<td>United States</td>
<td>North America, South Africa, Australia, New Zealand</td>
</tr>
<tr>
<td>Freightliner</td>
<td><a href="/wiki/Freightliner_Coronado" title="Freightliner Coronado">Freightliner Coronado Series</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>North America, Australia, New Zealand</td>
</tr>
<tr>
<td>Freightliner</td>
<td><a href="/wiki/Freightliner_Cascadia" title="Freightliner Cascadia">Freightliner Cascadia</a></td>
<td><a href="/wiki/File:Freightliner_Cascadia_(4387619946).jpg" class="image"><img alt="Freightliner Cascadia (4387619946).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Freightliner_Cascadia_%284387619946%29.jpg/120px-Freightliner_Cascadia_%284387619946%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Freightliner_Cascadia_%284387619946%29.jpg/180px-Freightliner_Cascadia_%284387619946%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Freightliner_Cascadia_%284387619946%29.jpg/240px-Freightliner_Cascadia_%284387619946%29.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>North America</td>
</tr>
<tr>
<td>Freightliner</td>
<td><a href="/w/index.php?title=Freightliner_108SD&amp;action=edit&amp;redlink=1" class="new" title="Freightliner 108SD (page does not exist)">Freightliner 108SD</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>North America</td>
</tr>
<tr>
<td>Freightliner</td>
<td><a href="/w/index.php?title=Freightliner_114SD&amp;action=edit&amp;redlink=1" class="new" title="Freightliner 114SD (page does not exist)">Freightliner 114SD</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>North America</td>
</tr>
<tr>
<td>Freightliner</td>
<td><a href="/wiki/Freightliner_Century_Class" title="Freightliner Century Class">Freightliner Century Class</a></td>
<td><a href="/wiki/File:2009-07-05_Chatham_Steel_Freightliner.jpg" class="image"><img alt="2009-07-05 Chatham Steel Freightliner.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/36/2009-07-05_Chatham_Steel_Freightliner.jpg/120px-2009-07-05_Chatham_Steel_Freightliner.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/36/2009-07-05_Chatham_Steel_Freightliner.jpg/180px-2009-07-05_Chatham_Steel_Freightliner.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/36/2009-07-05_Chatham_Steel_Freightliner.jpg/240px-2009-07-05_Chatham_Steel_Freightliner.jpg 2x" data-file-width="3888" data-file-height="2592" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Australia(formally United States)</td>
<td>Australia</td>
</tr>
<tr>
<td>Freightliner</td>
<td><a href="/wiki/Freightliner_Argosy" title="Freightliner Argosy">Freightliner Argosy</a></td>
<td><a href="/wiki/File:New_Zealand_Trucks_-_Flickr_-_111_Emergency_(272).jpg" class="image"><img alt="New Zealand Trucks - Flickr - 111 Emergency (272).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/55/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28272%29.jpg/120px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28272%29.jpg" width="120" height="75" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/55/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28272%29.jpg/180px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28272%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/55/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28272%29.jpg/240px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28272%29.jpg 2x" data-file-width="1600" data-file-height="1004" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Australia/South Africa(Formally United States)</td>
<td>Australia, New Zealand, South Africa</td>
</tr>
<tr>
<td><a href="/wiki/GAZ" title="GAZ">GAZ</a></td>
<td><a href="/wiki/GAZ_3307_/3309" class="mw-redirect" title="GAZ 3307 /3309">GAZ 3307 /3309</a></td>
<td><a href="/wiki/File:GAZ-3307_hoch.jpg" class="image"><img alt="GAZ-3307 hoch.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/GAZ-3307_hoch.jpg/120px-GAZ-3307_hoch.jpg" width="120" height="61" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/GAZ-3307_hoch.jpg/180px-GAZ-3307_hoch.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ce/GAZ-3307_hoch.jpg/240px-GAZ-3307_hoch.jpg 2x" data-file-width="2679" data-file-height="1357" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe</td>
</tr>
<tr>
<td>GAZ</td>
<td><a href="/wiki/GAZ_Sadko" title="GAZ Sadko">GAZ 3308 Sadko</a></td>
<td><a href="/wiki/File:Interpolitex_2010_(336-34).jpg" class="image"><img alt="Interpolitex 2010 (336-34).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Interpolitex_2010_%28336-34%29.jpg/120px-Interpolitex_2010_%28336-34%29.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Interpolitex_2010_%28336-34%29.jpg/180px-Interpolitex_2010_%28336-34%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Interpolitex_2010_%28336-34%29.jpg/240px-Interpolitex_2010_%28336-34%29.jpg 2x" data-file-width="2250" data-file-height="1500" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe</td>
</tr>
<tr>
<td>GAZ</td>
<td><a href="/wiki/GAZ_Gazelle" class="mw-redirect" title="GAZ Gazelle">GAZ Gazelle</a></td>
<td><a href="/wiki/File:GAZ_GAZelle_in_Prague,_2012.JPG" class="image"><img alt="GAZ GAZelle in Prague, 2012.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/95/GAZ_GAZelle_in_Prague%2C_2012.JPG/120px-GAZ_GAZelle_in_Prague%2C_2012.JPG" width="120" height="97" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/95/GAZ_GAZelle_in_Prague%2C_2012.JPG/180px-GAZ_GAZelle_in_Prague%2C_2012.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/95/GAZ_GAZelle_in_Prague%2C_2012.JPG/240px-GAZ_GAZelle_in_Prague%2C_2012.JPG 2x" data-file-width="2600" data-file-height="2100" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>GAZelle Business</td>
<td>Russia</td>
<td>Russia, Eastern Europe, Turkey</td>
</tr>
<tr>
<td>GAZ</td>
<td><a href="/wiki/GAZelle_NEXT" title="GAZelle NEXT">GAZelle NEXT</a></td>
<td><a href="/wiki/File:Gorky_Automobile_Plant_in_Nizhniy_Novgorod_(20).jpg" class="image"><img alt="Gorky Automobile Plant in Nizhniy Novgorod (20).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/Gorky_Automobile_Plant_in_Nizhniy_Novgorod_%2820%29.jpg/120px-Gorky_Automobile_Plant_in_Nizhniy_Novgorod_%2820%29.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/Gorky_Automobile_Plant_in_Nizhniy_Novgorod_%2820%29.jpg/180px-Gorky_Automobile_Plant_in_Nizhniy_Novgorod_%2820%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/38/Gorky_Automobile_Plant_in_Nizhniy_Novgorod_%2820%29.jpg/240px-Gorky_Automobile_Plant_in_Nizhniy_Novgorod_%2820%29.jpg 2x" data-file-width="2250" data-file-height="1447" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe</td>
</tr>
<tr>
<td>GAZ</td>
<td><a href="/w/index.php?title=GAZon_NEXT&amp;action=edit&amp;redlink=1" class="new" title="GAZon NEXT (page does not exist)">GAZon NEXT</a></td>
<td><a href="/wiki/File:GAZ_GAZon_Next_flatbed_truck_(cropped).jpg" class="image"><img alt="GAZ GAZon Next flatbed truck (cropped).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/83/GAZ_GAZon_Next_flatbed_truck_%28cropped%29.jpg/120px-GAZ_GAZon_Next_flatbed_truck_%28cropped%29.jpg" width="120" height="79" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/83/GAZ_GAZon_Next_flatbed_truck_%28cropped%29.jpg/180px-GAZ_GAZon_Next_flatbed_truck_%28cropped%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/83/GAZ_GAZon_Next_flatbed_truck_%28cropped%29.jpg/240px-GAZ_GAZon_Next_flatbed_truck_%28cropped%29.jpg 2x" data-file-width="3250" data-file-height="2144" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe</td>
</tr>
<tr>
<td>GAZ</td>
<td><a href="/wiki/GAZ_Valdai" title="GAZ Valdai">GAZ Valdai</a></td>
<td><a href="/wiki/File:Gaz-3310_dump-truck.jpg" class="image"><img alt="Gaz-3310 dump-truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/68/Gaz-3310_dump-truck.jpg/120px-Gaz-3310_dump-truck.jpg" width="120" height="62" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/68/Gaz-3310_dump-truck.jpg/180px-Gaz-3310_dump-truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/68/Gaz-3310_dump-truck.jpg/240px-Gaz-3310_dump-truck.jpg 2x" data-file-width="2716" data-file-height="1409" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe</td>
</tr>
<tr>
<td><a href="/wiki/GINAF" title="GINAF">GINAF</a></td>
<td><a href="/w/index.php?title=GINAF_C-Series&amp;action=edit&amp;redlink=1" class="new" title="GINAF C-Series (page does not exist)">GINAF C-Series</a></td>
<td><a href="/wiki/File:Ginaf_C_3127_N_uitenhage_Verhuur.jpg" class="image"><img alt="Ginaf C 3127 N uitenhage Verhuur.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Ginaf_C_3127_N_uitenhage_Verhuur.jpg/120px-Ginaf_C_3127_N_uitenhage_Verhuur.jpg" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Ginaf_C_3127_N_uitenhage_Verhuur.jpg/180px-Ginaf_C_3127_N_uitenhage_Verhuur.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Ginaf_C_3127_N_uitenhage_Verhuur.jpg/240px-Ginaf_C_3127_N_uitenhage_Verhuur.jpg 2x" data-file-width="5138" data-file-height="3689" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>The Netherlands</td>
<td>Western Europe</td>
</tr>
<tr>
<td>GINAF</td>
<td><a href="/w/index.php?title=GINAF_X-Series&amp;action=edit&amp;redlink=1" class="new" title="GINAF X-Series (page does not exist)">GINAF X-Series</a></td>
<td><a href="/wiki/File:GINAF_X3331.jpg" class="image"><img alt="GINAF X3331.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4d/GINAF_X3331.jpg/120px-GINAF_X3331.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4d/GINAF_X3331.jpg/180px-GINAF_X3331.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4d/GINAF_X3331.jpg/240px-GINAF_X3331.jpg 2x" data-file-width="800" data-file-height="600" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>The Netherlands</td>
<td>Western Europe</td>
</tr>
<tr>
<td>Hino</td>
<td><a href="/wiki/Hino_Dutro" title="Hino Dutro">Hino 300 Series</a></td>
<td><a href="/wiki/File:Dutro125LTFlatBed.jpg" class="image"><img alt="Dutro125LTFlatBed.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Dutro125LTFlatBed.jpg/120px-Dutro125LTFlatBed.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Dutro125LTFlatBed.jpg/180px-Dutro125LTFlatBed.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Dutro125LTFlatBed.jpg/240px-Dutro125LTFlatBed.jpg 2x" data-file-width="600" data-file-height="450" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Hino 195(United States, Canada, and Mexico)</td>
<td>Japan</td>
<td>Asia Pacific, United States, Canada, Mexico, South America, Russia</td>
</tr>
<tr>
<td>Hino</td>
<td><a href="/w/index.php?title=Hino_238&amp;action=edit&amp;redlink=1" class="new" title="Hino 238 (page does not exist)">Hino 238</a></td>
<td><a href="/wiki/File:Fox_Ledge_Water_Company_Hino_pic20.JPG" class="image"><img alt="Fox Ledge Water Company Hino pic20.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/87/Fox_Ledge_Water_Company_Hino_pic20.JPG/120px-Fox_Ledge_Water_Company_Hino_pic20.JPG" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/87/Fox_Ledge_Water_Company_Hino_pic20.JPG/180px-Fox_Ledge_Water_Company_Hino_pic20.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/87/Fox_Ledge_Water_Company_Hino_pic20.JPG/240px-Fox_Ledge_Water_Company_Hino_pic20.JPG 2x" data-file-width="2194" data-file-height="1423" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>Hino 258, Hino 338</td>
<td>United States/Canada</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Hino</td>
<td><a href="/wiki/Hino_Ranger" title="Hino Ranger">Hino 500 Series</a></td>
<td><a href="/wiki/File:FM320PContainer2020_(original_version).jpg" class="image"><img alt="FM320PContainer2020 (original version).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/FM320PContainer2020_%28original_version%29.jpg/120px-FM320PContainer2020_%28original_version%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/FM320PContainer2020_%28original_version%29.jpg/180px-FM320PContainer2020_%28original_version%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f0/FM320PContainer2020_%28original_version%29.jpg/240px-FM320PContainer2020_%28original_version%29.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Japan</td>
<td>Asia Pacific, Canada, United States, South America, Russia</td>
</tr>
<tr>
<td>Hino</td>
<td><a href="/wiki/Hino_Profia" title="Hino Profia">Hino 700 Series</a></td>
<td><a href="/wiki/File:ProfiaASV.jpg" class="image"><img alt="ProfiaASV.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bf/ProfiaASV.jpg/120px-ProfiaASV.jpg" width="120" height="95" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bf/ProfiaASV.jpg/180px-ProfiaASV.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bf/ProfiaASV.jpg/240px-ProfiaASV.jpg 2x" data-file-width="755" data-file-height="600" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Japan</td>
<td>Asia Pacific, South America, Russia</td>
</tr>
<tr>
<td><a href="/wiki/Hyundai_Motor_Company" title="Hyundai Motor Company">Hyundai</a></td>
<td><a href="/w/index.php?title=Hyundai_HD45&amp;action=edit&amp;redlink=1" class="new" title="Hyundai HD45 (page does not exist)">Hyundai HD45</a></td>
<td><a href="/wiki/File:2011._%D0%9A%D0%B0%D1%80%D0%BD%D0%B0%D0%B2%D0%B0%D0%BB_%D0%BD%D0%B0_%D0%B4%D0%B5%D0%BD%D1%8C_%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%B0_%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA%D0%B0_345.jpg" class="image"><img alt="2011. Карнавал на день города Донецка 345.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bb/2011._%D0%9A%D0%B0%D1%80%D0%BD%D0%B0%D0%B2%D0%B0%D0%BB_%D0%BD%D0%B0_%D0%B4%D0%B5%D0%BD%D1%8C_%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%B0_%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA%D0%B0_345.jpg/120px-2011._%D0%9A%D0%B0%D1%80%D0%BD%D0%B0%D0%B2%D0%B0%D0%BB_%D0%BD%D0%B0_%D0%B4%D0%B5%D0%BD%D1%8C_%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%B0_%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA%D0%B0_345.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bb/2011._%D0%9A%D0%B0%D1%80%D0%BD%D0%B0%D0%B2%D0%B0%D0%BB_%D0%BD%D0%B0_%D0%B4%D0%B5%D0%BD%D1%8C_%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%B0_%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA%D0%B0_345.jpg/180px-2011._%D0%9A%D0%B0%D1%80%D0%BD%D0%B0%D0%B2%D0%B0%D0%BB_%D0%BD%D0%B0_%D0%B4%D0%B5%D0%BD%D1%8C_%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%B0_%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA%D0%B0_345.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bb/2011._%D0%9A%D0%B0%D1%80%D0%BD%D0%B0%D0%B2%D0%B0%D0%BB_%D0%BD%D0%B0_%D0%B4%D0%B5%D0%BD%D1%8C_%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%B0_%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA%D0%B0_345.jpg/240px-2011._%D0%9A%D0%B0%D1%80%D0%BD%D0%B0%D0%B2%D0%B0%D0%BB_%D0%BD%D0%B0_%D0%B4%D0%B5%D0%BD%D1%8C_%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%B0_%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA%D0%B0_345.jpg 2x" data-file-width="3216" data-file-height="2136" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>South Korea</td>
<td>South Korea</td>
</tr>
<tr>
<td>Hyundai</td>
<td><a href="/w/index.php?title=Hyundai_HD65/72/78&amp;action=edit&amp;redlink=1" class="new" title="Hyundai HD65/72/78 (page does not exist)">Hyundai HD65/72/78</a></td>
<td><a href="/wiki/File:20111112_hyundai_e_mighty_1.jpg" class="image"><img alt="20111112 hyundai e mighty 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ec/20111112_hyundai_e_mighty_1.jpg/120px-20111112_hyundai_e_mighty_1.jpg" width="120" height="69" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ec/20111112_hyundai_e_mighty_1.jpg/180px-20111112_hyundai_e_mighty_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ec/20111112_hyundai_e_mighty_1.jpg/240px-20111112_hyundai_e_mighty_1.jpg 2x" data-file-width="1290" data-file-height="740" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>South Korea</td>
<td>South Korea, Russia</td>
</tr>
<tr>
<td>Hyundai</td>
<td><a href="/w/index.php?title=Hyundai_HD120/210&amp;action=edit&amp;redlink=1" class="new" title="Hyundai HD120/210 (page does not exist)">Hyundai HD120/210</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>South Korea</td>
<td>South Korea, Russia</td>
</tr>
<tr>
<td>Hyundai</td>
<td><a href="/w/index.php?title=Hyundai_Cargo_Truck&amp;action=edit&amp;redlink=1" class="new" title="Hyundai Cargo Truck (page does not exist)">Hyundai Cargo Truck</a></td>
<td><a href="/wiki/File:Hyundai_HD1000.jpg" class="image"><img alt="Hyundai HD1000.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/Hyundai_HD1000.jpg/120px-Hyundai_HD1000.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/38/Hyundai_HD1000.jpg/180px-Hyundai_HD1000.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/38/Hyundai_HD1000.jpg/240px-Hyundai_HD1000.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>South Korea</td>
<td>South Korea, Russia</td>
</tr>
<tr>
<td><a href="/wiki/Iran_Khodro_Diesel" title="Iran Khodro Diesel">Iran Khodro Diesel</a></td>
<td><a href="/wiki/Mercedes-Benz_L-series_truck#Continuation" class="mw-redirect" title="Mercedes-Benz L-series truck">Khawar 1934</a></td>
<td><a href="/wiki/File:Mercedes_Benz_LK_1924_Persia.JPG" class="image"><img alt="Mercedes Benz LK 1924 Persia.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/93/Mercedes_Benz_LK_1924_Persia.JPG/120px-Mercedes_Benz_LK_1924_Persia.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/93/Mercedes_Benz_LK_1924_Persia.JPG/180px-Mercedes_Benz_LK_1924_Persia.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/93/Mercedes_Benz_LK_1924_Persia.JPG/240px-Mercedes_Benz_LK_1924_Persia.JPG 2x" data-file-width="3867" data-file-height="2592" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>Khawar 2694</td>
<td>(Originally)Germany<br />
(Currently)Iran</td>
<td>Iran</td>
</tr>
<tr>
<td><a href="/wiki/Isuzu" class="mw-redirect" title="Isuzu">Isuzu</a></td>
<td><a href="/wiki/Isuzu_N-Series" class="mw-redirect" title="Isuzu N-Series">Isuzu N-Series</a></td>
<td><a href="/wiki/File:ISUZU_ELF_6th_Generation,_DyDo_Delivery_Vans.jpg" class="image"><img alt="ISUZU ELF 6th Generation, DyDo Delivery Vans.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/ISUZU_ELF_6th_Generation%2C_DyDo_Delivery_Vans.jpg/120px-ISUZU_ELF_6th_Generation%2C_DyDo_Delivery_Vans.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/ISUZU_ELF_6th_Generation%2C_DyDo_Delivery_Vans.jpg/180px-ISUZU_ELF_6th_Generation%2C_DyDo_Delivery_Vans.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/ISUZU_ELF_6th_Generation%2C_DyDo_Delivery_Vans.jpg/240px-ISUZU_ELF_6th_Generation%2C_DyDo_Delivery_Vans.jpg 2x" data-file-width="1500" data-file-height="1125" /></a></td>
<td>Light</td>
<td>COE</td>
<td><a href="/wiki/Nissan_Cabstar" title="Nissan Cabstar">Nissan Cabstar</a>(Europe, Australia, China), Nissan Atlas H43 Series(Malaysia), <a href="/wiki/Nissan_Atlas" title="Nissan Atlas">Nissan Atlas</a>, <a href="/wiki/Renault_Maxity" title="Renault Maxity">Renault Maxity</a>, Renault Samsung SV110, UD Condor, Yue Loong Homer, Dong Feng Pahlawan, Isuzu N-Series</td>
<td>Japan</td>
<td>Malaysia</td>
</tr>
<tr>
<td>Isuzu</td>
<td><a href="/wiki/Mazda_Titan" title="Mazda Titan">Mazda Titan</a></td>
<td><a href="/wiki/File:Titan-unmarkedcar.jpg" class="image"><img alt="Titan-unmarkedcar.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Titan-unmarkedcar.jpg/120px-Titan-unmarkedcar.jpg" width="120" height="71" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Titan-unmarkedcar.jpg/180px-Titan-unmarkedcar.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/52/Titan-unmarkedcar.jpg/240px-Titan-unmarkedcar.jpg 2x" data-file-width="800" data-file-height="472" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Isuzu Elf, Ford Trader</td>
<td>Japan</td>
<td>Japan</td>
</tr>
<tr>
<td>Isuzu</td>
<td><a href="/wiki/Isuzu_Elf" title="Isuzu Elf">Isuzu Elf</a></td>
<td><a href="/wiki/File:Isuzu_Elf_250.jpg" class="image"><img alt="Isuzu Elf 250.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Isuzu_Elf_250.jpg/120px-Isuzu_Elf_250.jpg" width="120" height="71" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Isuzu_Elf_250.jpg/180px-Isuzu_Elf_250.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Isuzu_Elf_250.jpg/240px-Isuzu_Elf_250.jpg 2x" data-file-width="2901" data-file-height="1728" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Isuzu Grafter(United Kingdom), Isuzu Lingqingka (China), Isuzu Reward, Chevrolet NHR, Chevrolet NKR, Chevrolet N-Series, <a href="/wiki/HICOM_Perkasa" class="mw-redirect" title="HICOM Perkasa">HICOM Perkasa</a></td>
<td>Japan</td>
<td>Worldwide, except Korea</td>
</tr>
<tr>
<td>Isuzu</td>
<td><a href="/wiki/Isuzu_Forward" title="Isuzu Forward">Isuzu Forward</a></td>
<td><a href="/wiki/File:ISUZU_FORWARD,_Dump_Truck,_Green-color.jpg" class="image"><img alt="ISUZU FORWARD, Dump Truck, Green-color.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/02/ISUZU_FORWARD%2C_Dump_Truck%2C_Green-color.jpg/120px-ISUZU_FORWARD%2C_Dump_Truck%2C_Green-color.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/02/ISUZU_FORWARD%2C_Dump_Truck%2C_Green-color.jpg/180px-ISUZU_FORWARD%2C_Dump_Truck%2C_Green-color.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/02/ISUZU_FORWARD%2C_Dump_Truck%2C_Green-color.jpg/240px-ISUZU_FORWARD%2C_Dump_Truck%2C_Green-color.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>Isuzu Borneo(Indonesia), Isuzu Heavy Duty, Isuzu F-Series, Chevrolet FTR</td>
<td>Japan</td>
<td>Worldwide, except Korea and North America</td>
</tr>
<tr>
<td>Isuzu</td>
<td><a href="/wiki/Isuzu_Giga" title="Isuzu Giga">Isuzu Giga</a></td>
<td><a href="/wiki/File:ISUZU_GIGA,_Full-cab_Aluminum-Wing_Truck.jpg" class="image"><img alt="ISUZU GIGA, Full-cab Aluminum-Wing Truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/ISUZU_GIGA%2C_Full-cab_Aluminum-Wing_Truck.jpg/120px-ISUZU_GIGA%2C_Full-cab_Aluminum-Wing_Truck.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/ISUZU_GIGA%2C_Full-cab_Aluminum-Wing_Truck.jpg/180px-ISUZU_GIGA%2C_Full-cab_Aluminum-Wing_Truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/42/ISUZU_GIGA%2C_Full-cab_Aluminum-Wing_Truck.jpg/240px-ISUZU_GIGA%2C_Full-cab_Aluminum-Wing_Truck.jpg 2x" data-file-width="3616" data-file-height="2712" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>Chevrolet FVR, Chevrolet FVZ, Isuzu C/E-Series Mark II</td>
<td>Japan</td>
<td>Asia-Pacific, Mid-East, Africa, South America, Russia</td>
</tr>
<tr>
<td><a href="/wiki/Iveco" title="Iveco">Iveco</a></td>
<td><a href="/wiki/Iveco_Daily" title="Iveco Daily">Iveco Daily</a></td>
<td><a href="/wiki/File:Iveco_Daily_Front.JPG" class="image"><img alt="Iveco Daily Front.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/70/Iveco_Daily_Front.JPG/120px-Iveco_Daily_Front.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/70/Iveco_Daily_Front.JPG/180px-Iveco_Daily_Front.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/70/Iveco_Daily_Front.JPG/240px-Iveco_Daily_Front.JPG 2x" data-file-width="1632" data-file-height="1224" /></a></td>
<td>Light, Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Italy</td>
<td>Europe, Australia, Africa, Middle East, Taiwan, Latin America</td>
</tr>
<tr>
<td>Iveco</td>
<td><a href="/wiki/Iveco_PowerStar" title="Iveco PowerStar">Iveco PowerStar</a></td>
<td><a href="/wiki/File:Hauben_IVECO_LKW.JPG" class="image"><img alt="Hauben IVECO LKW.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/af/Hauben_IVECO_LKW.JPG/120px-Hauben_IVECO_LKW.JPG" width="120" height="91" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/af/Hauben_IVECO_LKW.JPG/180px-Hauben_IVECO_LKW.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/af/Hauben_IVECO_LKW.JPG/240px-Hauben_IVECO_LKW.JPG 2x" data-file-width="2147" data-file-height="1621" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>Iveco Strator(Europe)</td>
<td>Australia</td>
<td>Australia, New Zealand, Europe</td>
</tr>
<tr>
<td><a href="/wiki/Iveco" title="Iveco">Iveco</a></td>
<td><a href="/wiki/Iveco_Eurocargo" class="mw-redirect" title="Iveco Eurocargo">Iveco Eurocargo</a></td>
<td><a href="/wiki/File:IVECO_Eurocargo-II_75E17_Pritschenwagen.jpg" class="image"><img alt="IVECO Eurocargo-II 75E17 Pritschenwagen.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5a/IVECO_Eurocargo-II_75E17_Pritschenwagen.jpg/120px-IVECO_Eurocargo-II_75E17_Pritschenwagen.jpg" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5a/IVECO_Eurocargo-II_75E17_Pritschenwagen.jpg/180px-IVECO_Eurocargo-II_75E17_Pritschenwagen.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5a/IVECO_Eurocargo-II_75E17_Pritschenwagen.jpg/240px-IVECO_Eurocargo-II_75E17_Pritschenwagen.jpg 2x" data-file-width="2253" data-file-height="1561" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Germany</td>
<td>Worldwide, except North America</td>
</tr>
<tr>
<td>Iveco</td>
<td><a href="/wiki/Iveco_Trakker" class="mw-redirect" title="Iveco Trakker">Iveco Trakker</a></td>
<td><a href="/wiki/File:Iveco_Trakker_500_e5_8x4_2014_(15475520489).jpg" class="image"><img alt="Iveco Trakker 500 e5 8x4 2014 (15475520489).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/71/Iveco_Trakker_500_e5_8x4_2014_%2815475520489%29.jpg/120px-Iveco_Trakker_500_e5_8x4_2014_%2815475520489%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/71/Iveco_Trakker_500_e5_8x4_2014_%2815475520489%29.jpg/180px-Iveco_Trakker_500_e5_8x4_2014_%2815475520489%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/71/Iveco_Trakker_500_e5_8x4_2014_%2815475520489%29.jpg/240px-Iveco_Trakker_500_e5_8x4_2014_%2815475520489%29.jpg 2x" data-file-width="3200" data-file-height="2400" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Germany</td>
<td>worldwide, except North America</td>
</tr>
<tr>
<td>Iveco</td>
<td><a href="/wiki/Iveco_Stralis" title="Iveco Stralis">Iveco Stralis</a></td>
<td><a href="/wiki/File:IVECO_Stralis_2008.jpg" class="image"><img alt="IVECO Stralis 2008.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/08/IVECO_Stralis_2008.jpg/120px-IVECO_Stralis_2008.jpg" width="120" height="100" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/08/IVECO_Stralis_2008.jpg/180px-IVECO_Stralis_2008.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/08/IVECO_Stralis_2008.jpg/240px-IVECO_Stralis_2008.jpg 2x" data-file-width="2319" data-file-height="1939" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Germany</td>
<td>worldwide, except North America</td>
</tr>
<tr>
<td><a href="/w/index.php?title=Anhui_Jianghuai_Automobile_Co.,_Ltd.&amp;action=edit&amp;redlink=1" class="new" title="Anhui Jianghuai Automobile Co., Ltd. (page does not exist)">JAC</a></td>
<td>JAC 4DA1 Series</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>JAC</td>
<td>JAC FHC Series</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>JAC</td>
<td>JAC Shuailing</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>JAC</td>
<td>JAC Tipper</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>JAC</td>
<td>JAC Tractor</td>
<td><a href="/wiki/File:JAC_Runner_HFC_1132_2012.jpg" class="image"><img alt="JAC Runner HFC 1132 2012.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ed/JAC_Runner_HFC_1132_2012.jpg/120px-JAC_Runner_HFC_1132_2012.jpg" width="120" height="160" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ed/JAC_Runner_HFC_1132_2012.jpg/180px-JAC_Runner_HFC_1132_2012.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ed/JAC_Runner_HFC_1132_2012.jpg/240px-JAC_Runner_HFC_1132_2012.jpg 2x" data-file-width="1125" data-file-height="1500" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td><a href="/wiki/Jiangling_Motors" title="Jiangling Motors">JMC</a></td>
<td>JMC Carrying</td>
<td><a href="/wiki/File:JMC_Convey_Max_5.0T_2014_(14223106072).jpg" class="image"><img alt="JMC Convey Max 5.0T 2014 (14223106072).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/29/JMC_Convey_Max_5.0T_2014_%2814223106072%29.jpg/120px-JMC_Convey_Max_5.0T_2014_%2814223106072%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/29/JMC_Convey_Max_5.0T_2014_%2814223106072%29.jpg/180px-JMC_Convey_Max_5.0T_2014_%2814223106072%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/29/JMC_Convey_Max_5.0T_2014_%2814223106072%29.jpg/240px-JMC_Convey_Max_5.0T_2014_%2814223106072%29.jpg 2x" data-file-width="3200" data-file-height="2400" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td><a href="/wiki/Kalmar_Industries" class="mw-redirect" title="Kalmar Industries">Kalmar Industries</a></td>
<td>Kalmar 4x2 off Highway</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Finland</td>
<td>Europe, North America, Australia, China, India, Japan, Indonesia, South Korea, Middle East, Singapore</td>
</tr>
<tr>
<td>Kalmar Industries</td>
<td>Kalmar TR-Series</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Finland</td>
<td>Europe, North America, Australia, China, India, Japan, Indonesia, South Korea, Middle East, Singapore</td>
</tr>
<tr>
<td><a href="/wiki/KAMAZ" class="mw-redirect" title="KAMAZ">KAMAZ</a></td>
<td>KAMAZ 43253</td>
<td><a href="/wiki/File:%D0%9A%D0%90%D0%9C%D0%90%D0%97_43253.jpg" class="image"><img alt="КАМАЗ 43253.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ad/%D0%9A%D0%90%D0%9C%D0%90%D0%97_43253.jpg/120px-%D0%9A%D0%90%D0%9C%D0%90%D0%97_43253.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ad/%D0%9A%D0%90%D0%9C%D0%90%D0%97_43253.jpg/180px-%D0%9A%D0%90%D0%9C%D0%90%D0%97_43253.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ad/%D0%9A%D0%90%D0%9C%D0%90%D0%97_43253.jpg/240px-%D0%9A%D0%90%D0%9C%D0%90%D0%97_43253.jpg 2x" data-file-width="3648" data-file-height="2736" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>KAMAZ 43215</td>
<td>Russia</td>
<td>Russia, Eastern Europe, Latin America, China, Middle East, North Africa, Central Asia, Singapore</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 43114</td>
<td><a href="/wiki/File:KAMAZ-43118_with_a_with_a_Palfinger_crane.jpg" class="image"><img alt="KAMAZ-43118 with a with a Palfinger crane.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b2/KAMAZ-43118_with_a_with_a_Palfinger_crane.jpg/120px-KAMAZ-43118_with_a_with_a_Palfinger_crane.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b2/KAMAZ-43118_with_a_with_a_Palfinger_crane.jpg/180px-KAMAZ-43118_with_a_with_a_Palfinger_crane.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b2/KAMAZ-43118_with_a_with_a_Palfinger_crane.jpg/240px-KAMAZ-43118_with_a_with_a_Palfinger_crane.jpg 2x" data-file-width="2250" data-file-height="1450" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>KAMAZ 43118</td>
<td>Russia</td>
<td>Russia, Eastern Europe, Latin America, China, Middle East, North Africa, Central Asia , Singapore</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 65207</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe, Central Asia</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 65117</td>
<td><a href="/wiki/File:%D0%9A%D0%90%D0%9C%D0%90%D0%97-65117.JPG" class="image"><img alt="КАМАЗ-65117.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/71/%D0%9A%D0%90%D0%9C%D0%90%D0%97-65117.JPG/120px-%D0%9A%D0%90%D0%9C%D0%90%D0%97-65117.JPG" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/71/%D0%9A%D0%90%D0%9C%D0%90%D0%97-65117.JPG/180px-%D0%9A%D0%90%D0%9C%D0%90%D0%97-65117.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/71/%D0%9A%D0%90%D0%9C%D0%90%D0%97-65117.JPG/240px-%D0%9A%D0%90%D0%9C%D0%90%D0%97-65117.JPG 2x" data-file-width="3484" data-file-height="1960" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 4326</td>
<td><a href="/wiki/File:2011._%D0%94%D0%B5%D0%BD%D1%8C_%D0%B7%D0%B0%D1%89%D0%B8%D1%82%D1%8B_%D0%B4%D0%B5%D1%82%D0%B5%D0%B9_%D0%B2_%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA%D0%B5_098.jpg" class="image"><img alt="2011. День защиты детей в Донецке 098.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f7/2011._%D0%94%D0%B5%D0%BD%D1%8C_%D0%B7%D0%B0%D1%89%D0%B8%D1%82%D1%8B_%D0%B4%D0%B5%D1%82%D0%B5%D0%B9_%D0%B2_%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA%D0%B5_098.jpg/120px-2011._%D0%94%D0%B5%D0%BD%D1%8C_%D0%B7%D0%B0%D1%89%D0%B8%D1%82%D1%8B_%D0%B4%D0%B5%D1%82%D0%B5%D0%B9_%D0%B2_%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA%D0%B5_098.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f7/2011._%D0%94%D0%B5%D0%BD%D1%8C_%D0%B7%D0%B0%D1%89%D0%B8%D1%82%D1%8B_%D0%B4%D0%B5%D1%82%D0%B5%D0%B9_%D0%B2_%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA%D0%B5_098.jpg/180px-2011._%D0%94%D0%B5%D0%BD%D1%8C_%D0%B7%D0%B0%D1%89%D0%B8%D1%82%D1%8B_%D0%B4%D0%B5%D1%82%D0%B5%D0%B9_%D0%B2_%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA%D0%B5_098.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f7/2011._%D0%94%D0%B5%D0%BD%D1%8C_%D0%B7%D0%B0%D1%89%D0%B8%D1%82%D1%8B_%D0%B4%D0%B5%D1%82%D0%B5%D0%B9_%D0%B2_%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA%D0%B5_098.jpg/240px-2011._%D0%94%D0%B5%D0%BD%D1%8C_%D0%B7%D0%B0%D1%89%D0%B8%D1%82%D1%8B_%D0%B4%D0%B5%D1%82%D0%B5%D0%B9_%D0%B2_%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA%D0%B5_098.jpg 2x" data-file-width="2976" data-file-height="1984" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 4308</td>
<td><a href="/wiki/File:KamAZ-4308.JPG" class="image"><img alt="KamAZ-4308.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/18/KamAZ-4308.JPG/120px-KamAZ-4308.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/18/KamAZ-4308.JPG/180px-KamAZ-4308.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/18/KamAZ-4308.JPG/240px-KamAZ-4308.JPG 2x" data-file-width="3648" data-file-height="2736" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe, Latin America, China, Middle East, North Africa, Central Asia, Singapore</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 54115</td>
<td><a href="/wiki/File:2013.07.08_kamaz-54115.jpg" class="image"><img alt="2013.07.08 kamaz-54115.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/96/2013.07.08_kamaz-54115.jpg/120px-2013.07.08_kamaz-54115.jpg" width="120" height="98" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/96/2013.07.08_kamaz-54115.jpg/180px-2013.07.08_kamaz-54115.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/96/2013.07.08_kamaz-54115.jpg/240px-2013.07.08_kamaz-54115.jpg 2x" data-file-width="1600" data-file-height="1300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Central Europe, Central Asia</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 5460</td>
<td><a href="/wiki/File:2014.05.14_kamaz-5460.JPG" class="image"><img alt="2014.05.14 kamaz-5460.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/94/2014.05.14_kamaz-5460.JPG/120px-2014.05.14_kamaz-5460.JPG" width="120" height="60" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/94/2014.05.14_kamaz-5460.JPG/180px-2014.05.14_kamaz-5460.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/94/2014.05.14_kamaz-5460.JPG/240px-2014.05.14_kamaz-5460.JPG 2x" data-file-width="2030" data-file-height="1008" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Central Europe, Central Asia</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 5490</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Central Europe, Central Asia</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 65116</td>
<td><a href="/wiki/File:KamAZ-65116.jpg" class="image"><img alt="KamAZ-65116.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a1/KamAZ-65116.jpg/120px-KamAZ-65116.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a1/KamAZ-65116.jpg/180px-KamAZ-65116.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a1/KamAZ-65116.jpg/240px-KamAZ-65116.jpg 2x" data-file-width="3888" data-file-height="2592" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Central Europe, Central Asia</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 65206</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Central Europe, Central Asia</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 6460</td>
<td><a href="/wiki/File:%D0%9B%D0%B5%D1%81%D0%BE%D0%B2%D0%BE%D0%B7_%D1%81_%D0%B6%D0%B5%D0%BB%D1%82%D1%8B%D0%BC%D0%B8_%D0%BF%D1%80%D0%BE%D0%B1%D0%BB%D0%B5%D1%81%D0%BA%D0%BE%D0%B2%D1%8B%D0%BC%D0%B8_%D0%BC%D0%B0%D1%8F%D1%87%D0%BA%D0%B0%D0%BC%D0%B8,_%D0%9A%D0%BE%D1%80%D1%8F%D0%B6%D0%BC%D0%B0.JPG" class="image"><img alt="Лесовоз с желтыми проблесковыми маячками, Коряжма.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/79/%D0%9B%D0%B5%D1%81%D0%BE%D0%B2%D0%BE%D0%B7_%D1%81_%D0%B6%D0%B5%D0%BB%D1%82%D1%8B%D0%BC%D0%B8_%D0%BF%D1%80%D0%BE%D0%B1%D0%BB%D0%B5%D1%81%D0%BA%D0%BE%D0%B2%D1%8B%D0%BC%D0%B8_%D0%BC%D0%B0%D1%8F%D1%87%D0%BA%D0%B0%D0%BC%D0%B8%2C_%D0%9A%D0%BE%D1%80%D1%8F%D0%B6%D0%BC%D0%B0.JPG/120px-%D0%9B%D0%B5%D1%81%D0%BE%D0%B2%D0%BE%D0%B7_%D1%81_%D0%B6%D0%B5%D0%BB%D1%82%D1%8B%D0%BC%D0%B8_%D0%BF%D1%80%D0%BE%D0%B1%D0%BB%D0%B5%D1%81%D0%BA%D0%BE%D0%B2%D1%8B%D0%BC%D0%B8_%D0%BC%D0%B0%D1%8F%D1%87%D0%BA%D0%B0%D0%BC%D0%B8%2C_%D0%9A%D0%BE%D1%80%D1%8F%D0%B6%D0%BC%D0%B0.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/79/%D0%9B%D0%B5%D1%81%D0%BE%D0%B2%D0%BE%D0%B7_%D1%81_%D0%B6%D0%B5%D0%BB%D1%82%D1%8B%D0%BC%D0%B8_%D0%BF%D1%80%D0%BE%D0%B1%D0%BB%D0%B5%D1%81%D0%BA%D0%BE%D0%B2%D1%8B%D0%BC%D0%B8_%D0%BC%D0%B0%D1%8F%D1%87%D0%BA%D0%B0%D0%BC%D0%B8%2C_%D0%9A%D0%BE%D1%80%D1%8F%D0%B6%D0%BC%D0%B0.JPG/180px-%D0%9B%D0%B5%D1%81%D0%BE%D0%B2%D0%BE%D0%B7_%D1%81_%D0%B6%D0%B5%D0%BB%D1%82%D1%8B%D0%BC%D0%B8_%D0%BF%D1%80%D0%BE%D0%B1%D0%BB%D0%B5%D1%81%D0%BA%D0%BE%D0%B2%D1%8B%D0%BC%D0%B8_%D0%BC%D0%B0%D1%8F%D1%87%D0%BA%D0%B0%D0%BC%D0%B8%2C_%D0%9A%D0%BE%D1%80%D1%8F%D0%B6%D0%BC%D0%B0.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/79/%D0%9B%D0%B5%D1%81%D0%BE%D0%B2%D0%BE%D0%B7_%D1%81_%D0%B6%D0%B5%D0%BB%D1%82%D1%8B%D0%BC%D0%B8_%D0%BF%D1%80%D0%BE%D0%B1%D0%BB%D0%B5%D1%81%D0%BA%D0%BE%D0%B2%D1%8B%D0%BC%D0%B8_%D0%BC%D0%B0%D1%8F%D1%87%D0%BA%D0%B0%D0%BC%D0%B8%2C_%D0%9A%D0%BE%D1%80%D1%8F%D0%B6%D0%BC%D0%B0.JPG/240px-%D0%9B%D0%B5%D1%81%D0%BE%D0%B2%D0%BE%D0%B7_%D1%81_%D0%B6%D0%B5%D0%BB%D1%82%D1%8B%D0%BC%D0%B8_%D0%BF%D1%80%D0%BE%D0%B1%D0%BB%D0%B5%D1%81%D0%BA%D0%BE%D0%B2%D1%8B%D0%BC%D0%B8_%D0%BC%D0%B0%D1%8F%D1%87%D0%BA%D0%B0%D0%BC%D0%B8%2C_%D0%9A%D0%BE%D1%80%D1%8F%D0%B6%D0%BC%D0%B0.JPG 2x" data-file-width="2258" data-file-height="1509" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Central Europe, Central Asia</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 44108</td>
<td><a href="/wiki/File:KamAZ-44108-based_off-road_bus_in_Krasnoyarsk_Krai.jpg" class="image"><img alt="KamAZ-44108-based off-road bus in Krasnoyarsk Krai.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/70/KamAZ-44108-based_off-road_bus_in_Krasnoyarsk_Krai.jpg/120px-KamAZ-44108-based_off-road_bus_in_Krasnoyarsk_Krai.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/70/KamAZ-44108-based_off-road_bus_in_Krasnoyarsk_Krai.jpg/180px-KamAZ-44108-based_off-road_bus_in_Krasnoyarsk_Krai.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/70/KamAZ-44108-based_off-road_bus_in_Krasnoyarsk_Krai.jpg/240px-KamAZ-44108-based_off-road_bus_in_Krasnoyarsk_Krai.jpg 2x" data-file-width="3456" data-file-height="2592" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Central Europe, Central Asia</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 65201</td>
<td><a href="/wiki/File:KAMAZ-65201_in_St._Petersburg.jpg" class="image"><img alt="KAMAZ-65201 in St. Petersburg.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e1/KAMAZ-65201_in_St._Petersburg.jpg/120px-KAMAZ-65201_in_St._Petersburg.jpg" width="120" height="82" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e1/KAMAZ-65201_in_St._Petersburg.jpg/180px-KAMAZ-65201_in_St._Petersburg.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e1/KAMAZ-65201_in_St._Petersburg.jpg/240px-KAMAZ-65201_in_St._Petersburg.jpg 2x" data-file-width="4231" data-file-height="2894" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 65224</td>
<td><a href="/wiki/File:Engineering_Technologies_-_2012_(2-13).jpg" class="image"><img alt="Engineering Technologies - 2012 (2-13).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/96/Engineering_Technologies_-_2012_%282-13%29.jpg/120px-Engineering_Technologies_-_2012_%282-13%29.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/96/Engineering_Technologies_-_2012_%282-13%29.jpg/180px-Engineering_Technologies_-_2012_%282-13%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/96/Engineering_Technologies_-_2012_%282-13%29.jpg/240px-Engineering_Technologies_-_2012_%282-13%29.jpg 2x" data-file-width="2250" data-file-height="1500" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 65225</td>
<td><a href="/wiki/File:KamAZ_military_tank_transporter.jpg" class="image"><img alt="KamAZ military tank transporter.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0a/KamAZ_military_tank_transporter.jpg/120px-KamAZ_military_tank_transporter.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0a/KamAZ_military_tank_transporter.jpg/180px-KamAZ_military_tank_transporter.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0a/KamAZ_military_tank_transporter.jpg/240px-KamAZ_military_tank_transporter.jpg 2x" data-file-width="1600" data-file-height="1067" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Central Europe, Central Asia</td>
</tr>
<tr>
<td>KAMAZ</td>
<td>KAMAZ 65226</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Central Europe, Central Asia</td>
</tr>
<tr>
<td><a href="/wiki/Kia_Motors" title="Kia Motors">Kia</a></td>
<td><a href="/wiki/Kia_Bongo" title="Kia Bongo">Kia Bongo</a></td>
<td><a href="/wiki/File:Kia_Bongo3_Driving_examination.JPG" class="image"><img alt="Kia Bongo3 Driving examination.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Kia_Bongo3_Driving_examination.JPG/120px-Kia_Bongo3_Driving_examination.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Kia_Bongo3_Driving_examination.JPG/180px-Kia_Bongo3_Driving_examination.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Kia_Bongo3_Driving_examination.JPG/240px-Kia_Bongo3_Driving_examination.JPG 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Kia K-Series(Europe, Australia and South America), Kia Besta, Kia Travello (Indonesia)</td>
<td>South Korea</td>
<td>Asia (except Japan), Europe, Oceania, South America</td>
</tr>
<tr>
<td><a href="/wiki/Kenworth" title="Kenworth">Kenworth</a></td>
<td><a href="/w/index.php?title=Kenworth_K270&amp;action=edit&amp;redlink=1" class="new" title="Kenworth K270 (page does not exist)">Kenworth K270</a></td>
<td><a href="/wiki/File:2013_Kenworth_K370_4x2_box_van.jpg" class="image"><img alt="2013 Kenworth K370 4x2 box van.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/64/2013_Kenworth_K370_4x2_box_van.jpg/120px-2013_Kenworth_K370_4x2_box_van.jpg" width="120" height="87" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/64/2013_Kenworth_K370_4x2_box_van.jpg/180px-2013_Kenworth_K370_4x2_box_van.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/64/2013_Kenworth_K370_4x2_box_van.jpg/240px-2013_Kenworth_K370_4x2_box_van.jpg 2x" data-file-width="4872" data-file-height="3540" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Kenworth K370</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Kenworth</td>
<td><a href="/w/index.php?title=Kenworth_T170&amp;action=edit&amp;redlink=1" class="new" title="Kenworth T170 (page does not exist)">Kenworth T170</a></td>
<td><a href="/wiki/File:Kenworth_T270_series_boxtruck.jpg" class="image"><img alt="Kenworth T270 series boxtruck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Kenworth_T270_series_boxtruck.jpg/120px-Kenworth_T270_series_boxtruck.jpg" width="120" height="82" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Kenworth_T270_series_boxtruck.jpg/180px-Kenworth_T270_series_boxtruck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Kenworth_T270_series_boxtruck.jpg/240px-Kenworth_T270_series_boxtruck.jpg 2x" data-file-width="5208" data-file-height="3552" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>Kenworth T270/T370/T440/T470</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Kenworth</td>
<td><a href="/w/index.php?title=Kenworth_T409SAR&amp;action=edit&amp;redlink=1" class="new" title="Kenworth T409SAR (page does not exist)">Kenworth T409SAR</a></td>
<td><a href="/wiki/File:New_Zealand_Trucks_-_Flickr_-_111_Emergency_(52).jpg" class="image"><img alt="New Zealand Trucks - Flickr - 111 Emergency (52).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2852%29.jpg/120px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2852%29.jpg" width="120" height="91" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2852%29.jpg/180px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2852%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ce/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2852%29.jpg/240px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2852%29.jpg 2x" data-file-width="1786" data-file-height="1354" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Australia</td>
<td>Australia</td>
</tr>
<tr>
<td>Kenworth</td>
<td><a href="/w/index.php?title=Kenworth_T359&amp;action=edit&amp;redlink=1" class="new" title="Kenworth T359 (page does not exist)">Kenworth T359</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Australia</td>
<td>Australia</td>
</tr>
<tr>
<td>Kenworth</td>
<td><a href="/w/index.php?title=Kenworth_C500&amp;action=edit&amp;redlink=1" class="new" title="Kenworth C500 (page does not exist)">Kenworth C500</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Kenworth</td>
<td><a href="/w/index.php?title=Kenworth_C509&amp;action=edit&amp;redlink=1" class="new" title="Kenworth C509 (page does not exist)">Kenworth C509</a></td>
<td><a href="/wiki/File:Moree1.jpg" class="image"><img alt="Moree1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Moree1.jpg/120px-Moree1.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Moree1.jpg/180px-Moree1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Moree1.jpg/240px-Moree1.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Australia</td>
<td>Australia</td>
</tr>
<tr>
<td>Kenworth</td>
<td><a href="/w/index.php?title=Kenworth_T800&amp;action=edit&amp;redlink=1" class="new" title="Kenworth T800 (page does not exist)">Kenworth T800</a></td>
<td><a href="/wiki/File:Tractomula_mas_rapida_del_mundo.JPG" class="image"><img alt="Tractomula mas rapida del mundo.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Tractomula_mas_rapida_del_mundo.JPG/120px-Tractomula_mas_rapida_del_mundo.JPG" width="120" height="128" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Tractomula_mas_rapida_del_mundo.JPG/180px-Tractomula_mas_rapida_del_mundo.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Tractomula_mas_rapida_del_mundo.JPG/240px-Tractomula_mas_rapida_del_mundo.JPG 2x" data-file-width="620" data-file-height="663" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Kenworth</td>
<td><a href="/wiki/Kenworth_W900" title="Kenworth W900">Kenworth W900</a></td>
<td><a href="/wiki/File:KENWORTH_TRUCK_LOSANGELES_OLYMPIC_AUG_29_2007_PATRICE_RAUNET_HOLLYWOOD.jpg" class="image"><img alt="KENWORTH TRUCK LOSANGELES OLYMPIC AUG 29 2007 PATRICE RAUNET HOLLYWOOD.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2a/KENWORTH_TRUCK_LOSANGELES_OLYMPIC_AUG_29_2007_PATRICE_RAUNET_HOLLYWOOD.jpg/120px-KENWORTH_TRUCK_LOSANGELES_OLYMPIC_AUG_29_2007_PATRICE_RAUNET_HOLLYWOOD.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2a/KENWORTH_TRUCK_LOSANGELES_OLYMPIC_AUG_29_2007_PATRICE_RAUNET_HOLLYWOOD.jpg/180px-KENWORTH_TRUCK_LOSANGELES_OLYMPIC_AUG_29_2007_PATRICE_RAUNET_HOLLYWOOD.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2a/KENWORTH_TRUCK_LOSANGELES_OLYMPIC_AUG_29_2007_PATRICE_RAUNET_HOLLYWOOD.jpg/240px-KENWORTH_TRUCK_LOSANGELES_OLYMPIC_AUG_29_2007_PATRICE_RAUNET_HOLLYWOOD.jpg 2x" data-file-width="640" data-file-height="480" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Kenworth</td>
<td><a href="/wiki/Kenworth_T660" title="Kenworth T660">Kenworth T660</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Kenworth</td>
<td><a href="/w/index.php?title=Kenworth_T659&amp;action=edit&amp;redlink=1" class="new" title="Kenworth T659 (page does not exist)">Kenworth T659</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Australia</td>
<td>Australia</td>
</tr>
<tr>
<td>Kenworth</td>
<td><a href="/w/index.php?title=Kenworth_T700&amp;action=edit&amp;redlink=1" class="new" title="Kenworth T700 (page does not exist)">Kenworth T700</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Kenworth</td>
<td><a href="/wiki/Kenworth_T680" title="Kenworth T680">Kenworth T680</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Kenworth</td>
<td><a href="/w/index.php?title=Kenworth_T880&amp;action=edit&amp;redlink=1" class="new" title="Kenworth T880 (page does not exist)">Kenworth T880</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Kenworth</td>
<td><a href="/w/index.php?title=Kenworth_T909&amp;action=edit&amp;redlink=1" class="new" title="Kenworth T909 (page does not exist)">Kenworth T909</a></td>
<td><a href="/wiki/File:New_Zealand_Trucks_-_Flickr_-_111_Emergency_(246).jpg" class="image"><img alt="New Zealand Trucks - Flickr - 111 Emergency (246).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/de/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28246%29.jpg/120px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28246%29.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/de/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28246%29.jpg/180px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28246%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/de/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28246%29.jpg/240px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28246%29.jpg 2x" data-file-width="1600" data-file-height="1065" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Australia</td>
<td>Australia</td>
</tr>
<tr>
<td><a href="/wiki/KrAZ" title="KrAZ">KrAZ</a></td>
<td><a href="/wiki/KrAZ-6322" title="KrAZ-6322">KrAZ-6322</a></td>
<td><a href="/wiki/File:Iraqi_KrAZ_trucks.jpg" class="image"><img alt="Iraqi KrAZ trucks.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Iraqi_KrAZ_trucks.jpg/120px-Iraqi_KrAZ_trucks.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Iraqi_KrAZ_trucks.jpg/180px-Iraqi_KrAZ_trucks.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Iraqi_KrAZ_trucks.jpg/240px-Iraqi_KrAZ_trucks.jpg 2x" data-file-width="3072" data-file-height="2048" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>KrAZ-63221, <a href="/w/index.php?title=KrAZ-6446&amp;action=edit&amp;redlink=1" class="new" title="KrAZ-6446 (page does not exist)">KrAZ-6446</a></td>
<td>Ukraine</td>
<td>Eastern Europe, South Eastern Asia, Cuba, Egypt</td>
</tr>
<tr>
<td>KrAZ</td>
<td>KrAZ-6505</td>
<td><a href="/wiki/File:%D0%9A%D1%80%D0%90%D0%97-6505.JPG" class="image"><img alt="КрАЗ-6505.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c3/%D0%9A%D1%80%D0%90%D0%97-6505.JPG/120px-%D0%9A%D1%80%D0%90%D0%97-6505.JPG" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c3/%D0%9A%D1%80%D0%90%D0%97-6505.JPG/180px-%D0%9A%D1%80%D0%90%D0%97-6505.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c3/%D0%9A%D1%80%D0%90%D0%97-6505.JPG/240px-%D0%9A%D1%80%D0%90%D0%97-6505.JPG 2x" data-file-width="2129" data-file-height="1198" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td><a href="/w/index.php?title=KrAZ-65055&amp;action=edit&amp;redlink=1" class="new" title="KrAZ-65055 (page does not exist)">KrAZ-65055</a>, KrAZ-65053, KrAZ S18.0</td>
<td>Ukraine</td>
<td>Eastern Europe, South Eastern Asia, Cuba, Egypt</td>
</tr>
<tr>
<td>KrAZ</td>
<td><a href="/w/index.php?title=KrAZ-6510&amp;action=edit&amp;redlink=1" class="new" title="KrAZ-6510 (page does not exist)">KrAZ-6510</a></td>
<td><a href="/wiki/File:KrAZ_special_purpose_tow_truck.jpg" class="image"><img alt="KrAZ special purpose tow truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/KrAZ_special_purpose_tow_truck.jpg/120px-KrAZ_special_purpose_tow_truck.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c0/KrAZ_special_purpose_tow_truck.jpg/180px-KrAZ_special_purpose_tow_truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c0/KrAZ_special_purpose_tow_truck.jpg/240px-KrAZ_special_purpose_tow_truck.jpg 2x" data-file-width="1200" data-file-height="760" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>KrAZ-650101</td>
<td>Ukraine</td>
<td>Eastern Europe, South Eastern Asia, Cuba, Egypt</td>
</tr>
<tr>
<td>KrAZ</td>
<td><a href="/w/index.php?title=KrAZ-6443&amp;action=edit&amp;redlink=1" class="new" title="KrAZ-6443 (page does not exist)">KrAZ-6443</a></td>
<td><a href="/wiki/File:%D0%9A%D1%80%D0%90%D0%97-6443.JPG" class="image"><img alt="КрАЗ-6443.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/%D0%9A%D1%80%D0%90%D0%97-6443.JPG/120px-%D0%9A%D1%80%D0%90%D0%97-6443.JPG" width="120" height="67" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/%D0%9A%D1%80%D0%90%D0%97-6443.JPG/180px-%D0%9A%D1%80%D0%90%D0%97-6443.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f6/%D0%9A%D1%80%D0%90%D0%97-6443.JPG/240px-%D0%9A%D1%80%D0%90%D0%97-6443.JPG 2x" data-file-width="2347" data-file-height="1320" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Ukraine</td>
<td>Eastern Europe, South Eastern Asia, Cuba, Egypt</td>
</tr>
<tr>
<td>KrAZ</td>
<td><a href="/wiki/KrAZ-5233" title="KrAZ-5233">KrAZ-5233</a></td>
<td></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Ukraine</td>
<td>Eastern Europe, South Eastern Asia, Cuba, Egypt</td>
</tr>
<tr>
<td>KrAZ</td>
<td><a href="/wiki/KrAZ_H12.2" title="KrAZ H12.2">KrAZ H12.2</a></td>
<td><a href="/wiki/File:Truck_Ukreco.JPG" class="image"><img alt="Truck Ukreco.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Truck_Ukreco.JPG/120px-Truck_Ukreco.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Truck_Ukreco.JPG/180px-Truck_Ukreco.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Truck_Ukreco.JPG/240px-Truck_Ukreco.JPG 2x" data-file-width="4288" data-file-height="2848" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>KrAZ K12.2</td>
<td>Ukraine</td>
<td>Eastern Europe, South Eastern Asia, Cuba, Egypt</td>
</tr>
<tr>
<td>KrAZ</td>
<td><a href="/w/index.php?title=KrAZ_H23.2&amp;action=edit&amp;redlink=1" class="new" title="KrAZ H23.2 (page does not exist)">KrAZ H23.2</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>KrAZ-6511</td>
<td>Ukraine</td>
<td>Eastern Europe, South Eastern Asia, Cuba, Egypt</td>
</tr>
<tr>
<td>KrAZ</td>
<td><a href="/w/index.php?title=KrAZ_S20.2&amp;action=edit&amp;redlink=1" class="new" title="KrAZ S20.2 (page does not exist)">KrAZ S20.2</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Ukraine</td>
<td>Eastern Europe, South Eastern Asia, Cuba, Egypt</td>
</tr>
<tr>
<td>KrAZ</td>
<td><a href="/w/index.php?title=KrAZ_S26.2M&amp;action=edit&amp;redlink=1" class="new" title="KrAZ S26.2M (page does not exist)">KrAZ S26.2M</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Ukraine</td>
<td>Eastern Europe, South Eastern Asia, Cuba, Egypt</td>
</tr>
<tr>
<td>KrAZ</td>
<td><a href="/wiki/KrAZ_H27.3" class="mw-redirect" title="KrAZ H27.3">KrAZ H27.3</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Ukraine</td>
<td>Eastern Europe, South Eastern Asia, Cuba, Egypt</td>
</tr>
<tr>
<td>KrAZ</td>
<td><a href="/wiki/KrAZ-5401" title="KrAZ-5401">KrAZ-5401</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Ukraine</td>
<td>Eastern Europe, South Eastern Asia, Cuba, Egypt</td>
</tr>
<tr>
<td><a href="/wiki/Mack_Trucks" title="Mack Trucks">Mack Trucks</a></td>
<td><a href="/wiki/Mack_Pinnacle_Series" title="Mack Pinnacle Series">Mack Pinnacle Series</a></td>
<td><a href="/wiki/File:11-5-11_tree_-_Flickr_-_USDAgov.jpg" class="image"><img alt="11-5-11 tree - Flickr - USDAgov.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e6/11-5-11_tree_-_Flickr_-_USDAgov.jpg/120px-11-5-11_tree_-_Flickr_-_USDAgov.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e6/11-5-11_tree_-_Flickr_-_USDAgov.jpg/180px-11-5-11_tree_-_Flickr_-_USDAgov.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e6/11-5-11_tree_-_Flickr_-_USDAgov.jpg/240px-11-5-11_tree_-_Flickr_-_USDAgov.jpg 2x" data-file-width="3872" data-file-height="2592" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>Mack Vision Elite(Venezuela and Peru)</td>
<td>United States</td>
<td>United States, Canada, Peru, Venezuela</td>
</tr>
<tr>
<td>Mack Trucks</td>
<td><a href="/wiki/Mack_Titan" title="Mack Titan">Mack Titan</a></td>
<td><a href="/wiki/File:Road_Train_Australia.jpg" class="image"><img alt="Road Train Australia.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/df/Road_Train_Australia.jpg/120px-Road_Train_Australia.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/df/Road_Train_Australia.jpg/180px-Road_Train_Australia.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/df/Road_Train_Australia.jpg/240px-Road_Train_Australia.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Australia</td>
<td>Australia, United States, Canada</td>
</tr>
<tr>
<td>Mack Trucks</td>
<td><a href="/w/index.php?title=Mack_Granite&amp;action=edit&amp;redlink=1" class="new" title="Mack Granite (page does not exist)">Mack Granite</a></td>
<td><a href="/wiki/File:Mack_Granite_02.jpg" class="image"><img alt="Mack Granite 02.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/36/Mack_Granite_02.jpg/120px-Mack_Granite_02.jpg" width="120" height="95" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/36/Mack_Granite_02.jpg/180px-Mack_Granite_02.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/36/Mack_Granite_02.jpg/240px-Mack_Granite_02.jpg 2x" data-file-width="2500" data-file-height="1984" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>Mack Granite Elite(Peru and Venezuela)</td>
<td>United States</td>
<td>United States, Canada, Mexico, Venezuela, Peru, Australia</td>
</tr>
<tr>
<td>Mack Trucks</td>
<td><a href="/w/index.php?title=Mack_TerraPro&amp;action=edit&amp;redlink=1" class="new" title="Mack TerraPro (page does not exist)">Mack TerraPro</a></td>
<td><a href="/wiki/File:Mack_TerraPro_LE.jpg" class="image"><img alt="Mack TerraPro LE.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/88/Mack_TerraPro_LE.jpg/120px-Mack_TerraPro_LE.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/88/Mack_TerraPro_LE.jpg/180px-Mack_TerraPro_LE.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/88/Mack_TerraPro_LE.jpg/240px-Mack_TerraPro_LE.jpg 2x" data-file-width="2048" data-file-height="1536" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Mack Trucks</td>
<td><a href="/w/index.php?title=Mack_Metro-Liner&amp;action=edit&amp;redlink=1" class="new" title="Mack Metro-Liner (page does not exist)">Mack Metro-Liner</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Australia</td>
<td>Australia</td>
</tr>
<tr>
<td>Mack Trucks</td>
<td><a href="/wiki/Mack_Super-Liner" title="Mack Super-Liner">Mack Super-Liner</a></td>
<td><a href="/wiki/File:Mack_Superliner.jpg" class="image"><img alt="Mack Superliner.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Mack_Superliner.jpg/120px-Mack_Superliner.jpg" width="120" height="85" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Mack_Superliner.jpg/180px-Mack_Superliner.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Mack_Superliner.jpg/240px-Mack_Superliner.jpg 2x" data-file-width="2000" data-file-height="1419" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Australia</td>
<td>Australia</td>
</tr>
<tr>
<td><a href="/wiki/Mahindra_Navistar" class="mw-redirect" title="Mahindra Navistar">Mahindra Navistar</a></td>
<td>Mahindra Navistar DI3200</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>India/United States</td>
<td>India</td>
</tr>
<tr>
<td>Mahindra Navistar</td>
<td>Mahindra Navistar Loadking Zoom</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>India/United States</td>
<td>India</td>
</tr>
<tr>
<td>Mahindra Navistar</td>
<td>Mahindra Navistar Torro</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>India/United States</td>
<td>India</td>
</tr>
<tr>
<td>Mahindra Navistar</td>
<td>Mahindra Navistar Traco</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>India/United States</td>
<td>India</td>
</tr>
<tr>
<td>Mahindra Navistar</td>
<td>Mahindra Navistar Truxo</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>India/United States</td>
<td>India</td>
</tr>
<tr>
<td><a href="/wiki/Master_Motors" title="Master Motors">Master</a></td>
<td><a href="/w/index.php?title=Master_Highland&amp;action=edit&amp;redlink=1" class="new" title="Master Highland (page does not exist)">Master Highland</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Pakistan</td>
<td>Pakistan</td>
</tr>
<tr>
<td>Master</td>
<td><a href="/w/index.php?title=Master_Forland&amp;action=edit&amp;redlink=1" class="new" title="Master Forland (page does not exist)">Master Forland</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Pakistan</td>
<td>Pakistan</td>
</tr>
<tr>
<td>Master</td>
<td><a href="/w/index.php?title=Master_Foton&amp;action=edit&amp;redlink=1" class="new" title="Master Foton (page does not exist)">Master Foton</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Foton Aumark Series</td>
<td>China</td>
<td>Pakistan</td>
</tr>
<tr>
<td>Master</td>
<td><a href="/w/index.php?title=Master_Grande&amp;action=edit&amp;redlink=1" class="new" title="Master Grande (page does not exist)">Master Grande</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Pakistan</td>
<td>Pakistan</td>
</tr>
<tr>
<td><a href="/wiki/Minsk_Automobile_Plant" title="Minsk Automobile Plant">MAZ</a></td>
<td>MAZ-5309</td>
<td><a href="/wiki/File:MAZ_based_water_truck.JPEG" class="image"><img alt="MAZ based water truck.JPEG" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/MAZ_based_water_truck.JPEG/120px-MAZ_based_water_truck.JPEG" width="120" height="91" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/MAZ_based_water_truck.JPEG/180px-MAZ_based_water_truck.JPEG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/MAZ_based_water_truck.JPEG/240px-MAZ_based_water_truck.JPEG 2x" data-file-width="1930" data-file-height="1470" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>MAZ-6501</td>
<td>Belarus</td>
<td>Eastern Europe</td>
</tr>
<tr>
<td>MAZ</td>
<td>MAZ-4371</td>
<td><a href="/wiki/File:MAZ-437141_roadtrain.JPG" class="image"><img alt="MAZ-437141 roadtrain.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/07/MAZ-437141_roadtrain.JPG/120px-MAZ-437141_roadtrain.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/07/MAZ-437141_roadtrain.JPG/180px-MAZ-437141_roadtrain.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/07/MAZ-437141_roadtrain.JPG/240px-MAZ-437141_roadtrain.JPG 2x" data-file-width="3008" data-file-height="2000" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Belarus</td>
<td>Eastern Europe</td>
</tr>
<tr>
<td>MAZ</td>
<td>MAZ-447131</td>
<td><a href="/wiki/File:Truck_MAZ.jpg" class="image"><img alt="Truck MAZ.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Truck_MAZ.jpg/120px-Truck_MAZ.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Truck_MAZ.jpg/180px-Truck_MAZ.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Truck_MAZ.jpg/240px-Truck_MAZ.jpg 2x" data-file-width="2288" data-file-height="1712" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>MAZ-6430, MAZ-5440 А3</td>
<td>Belarus</td>
<td>Eastern Europe</td>
</tr>
<tr>
<td>MAZ</td>
<td>MAZ-6430</td>
<td><a href="/wiki/File:MAZ-6430_Timber_truck.jpg" class="image"><img alt="MAZ-6430 Timber truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/MAZ-6430_Timber_truck.jpg/120px-MAZ-6430_Timber_truck.jpg" width="120" height="45" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/MAZ-6430_Timber_truck.jpg/180px-MAZ-6430_Timber_truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/MAZ-6430_Timber_truck.jpg/240px-MAZ-6430_Timber_truck.jpg 2x" data-file-width="2894" data-file-height="1075" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Belarus</td>
<td>Eastern Europe</td>
</tr>
<tr>
<td>MAZ</td>
<td>MAZ-6312</td>
<td><a href="/wiki/File:MAZ_6312.jpg" class="image"><img alt="MAZ 6312.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c9/MAZ_6312.jpg/120px-MAZ_6312.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c9/MAZ_6312.jpg/180px-MAZ_6312.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c9/MAZ_6312.jpg/240px-MAZ_6312.jpg 2x" data-file-width="2435" data-file-height="1557" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Belarus</td>
<td>Eastern Europe</td>
</tr>
<tr>
<td>MAZ</td>
<td>MAZ-5440</td>
<td><a href="/wiki/File:MAZ-5440.JPG" class="image"><img alt="MAZ-5440.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/63/MAZ-5440.JPG/120px-MAZ-5440.JPG" width="120" height="104" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/63/MAZ-5440.JPG/180px-MAZ-5440.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/63/MAZ-5440.JPG/240px-MAZ-5440.JPG 2x" data-file-width="1415" data-file-height="1230" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Belarus</td>
<td>Eastern Europe</td>
</tr>
<tr>
<td>MAZ</td>
<td>MAZ-5433</td>
<td><a href="/wiki/File:MAZ-5433_road_tractor,_Armed_Forces_of_Ukraine.jpg" class="image"><img alt="MAZ-5433 road tractor, Armed Forces of Ukraine.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3a/MAZ-5433_road_tractor%2C_Armed_Forces_of_Ukraine.jpg/120px-MAZ-5433_road_tractor%2C_Armed_Forces_of_Ukraine.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3a/MAZ-5433_road_tractor%2C_Armed_Forces_of_Ukraine.jpg/180px-MAZ-5433_road_tractor%2C_Armed_Forces_of_Ukraine.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3a/MAZ-5433_road_tractor%2C_Armed_Forces_of_Ukraine.jpg/240px-MAZ-5433_road_tractor%2C_Armed_Forces_of_Ukraine.jpg 2x" data-file-width="1026" data-file-height="648" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Belarus</td>
<td>Eastern Europe</td>
</tr>
<tr>
<td><a href="/wiki/Mercedes-Benz" title="Mercedes-Benz">Mercedes-Benz</a></td>
<td><a href="/wiki/Mercedes-Benz_Atego" title="Mercedes-Benz Atego">Mercedes-Benz Atego</a></td>
<td><a href="/wiki/File:Mercedes-Benz_Atego_Lippujuhlan_p%C3%A4iv%C3%A4_2013.JPG" class="image"><img alt="Mercedes-Benz Atego Lippujuhlan päivä 2013.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Mercedes-Benz_Atego_Lippujuhlan_p%C3%A4iv%C3%A4_2013.JPG/120px-Mercedes-Benz_Atego_Lippujuhlan_p%C3%A4iv%C3%A4_2013.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Mercedes-Benz_Atego_Lippujuhlan_p%C3%A4iv%C3%A4_2013.JPG/180px-Mercedes-Benz_Atego_Lippujuhlan_p%C3%A4iv%C3%A4_2013.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Mercedes-Benz_Atego_Lippujuhlan_p%C3%A4iv%C3%A4_2013.JPG/240px-Mercedes-Benz_Atego_Lippujuhlan_p%C3%A4iv%C3%A4_2013.JPG 2x" data-file-width="4624" data-file-height="3456" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Germany</td>
<td>worldwide(except North America)</td>
</tr>
<tr>
<td>Mercedes-Benz</td>
<td><a href="/wiki/Mercedes-Benz_Axor" title="Mercedes-Benz Axor">Mercedes-Benz Axor</a></td>
<td><a href="/wiki/File:Rossetts_Commercials_Mercedes-Benz_Axor_cab.JPG" class="image"><img alt="Rossetts Commercials Mercedes-Benz Axor cab.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/15/Rossetts_Commercials_Mercedes-Benz_Axor_cab.JPG/120px-Rossetts_Commercials_Mercedes-Benz_Axor_cab.JPG" width="120" height="94" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/15/Rossetts_Commercials_Mercedes-Benz_Axor_cab.JPG/180px-Rossetts_Commercials_Mercedes-Benz_Axor_cab.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/15/Rossetts_Commercials_Mercedes-Benz_Axor_cab.JPG/240px-Rossetts_Commercials_Mercedes-Benz_Axor_cab.JPG 2x" data-file-width="2591" data-file-height="2035" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Germany</td>
<td>worldwide(except North America)</td>
</tr>
<tr>
<td>Mercedes-Benz</td>
<td><a href="/wiki/Unimog" title="Unimog">Mercedes-Benz Unimog</a></td>
<td><a href="/wiki/File:Mercedes-Benz_Unimog_truck_in_Berlin_in_2011.jpg" class="image"><img alt="Mercedes-Benz Unimog truck in Berlin in 2011.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Mercedes-Benz_Unimog_truck_in_Berlin_in_2011.jpg/120px-Mercedes-Benz_Unimog_truck_in_Berlin_in_2011.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Mercedes-Benz_Unimog_truck_in_Berlin_in_2011.jpg/180px-Mercedes-Benz_Unimog_truck_in_Berlin_in_2011.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Mercedes-Benz_Unimog_truck_in_Berlin_in_2011.jpg/240px-Mercedes-Benz_Unimog_truck_in_Berlin_in_2011.jpg 2x" data-file-width="3648" data-file-height="2432" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Germany</td>
<td>worldwide</td>
</tr>
<tr>
<td>Mercedes-Benz</td>
<td><a href="/wiki/Mercedes-Benz_Zetros" title="Mercedes-Benz Zetros">Mercedes-Benz Zetros</a></td>
<td><a href="/wiki/File:Mercedes-Benz-Zetros.jpg" class="image"><img alt="Mercedes-Benz-Zetros.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Mercedes-Benz-Zetros.jpg/120px-Mercedes-Benz-Zetros.jpg" width="120" height="160" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Mercedes-Benz-Zetros.jpg/180px-Mercedes-Benz-Zetros.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Mercedes-Benz-Zetros.jpg/240px-Mercedes-Benz-Zetros.jpg 2x" data-file-width="1200" data-file-height="1600" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Germany</td>
<td>Europe</td>
</tr>
<tr>
<td>Mercedes-Benz</td>
<td><a href="/wiki/Mercedes-Benz_Actros" title="Mercedes-Benz Actros">Mercedes-Benz Actros</a></td>
<td><a href="/wiki/File:Actros_SpaceMax.jpg" class="image"><img alt="Actros SpaceMax.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Actros_SpaceMax.jpg/120px-Actros_SpaceMax.jpg" width="120" height="113" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Actros_SpaceMax.jpg/180px-Actros_SpaceMax.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Actros_SpaceMax.jpg/240px-Actros_SpaceMax.jpg 2x" data-file-width="690" data-file-height="647" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Germany</td>
<td>Worldwide(except North America)</td>
</tr>
<tr>
<td>Mercedes-Benz</td>
<td><a href="/wiki/Mercedes-Benz_Arocs" title="Mercedes-Benz Arocs">Mercedes-Benz Arocs</a></td>
<td><a href="/wiki/File:Mercedes-Benz_Arocs_in_green.JPG" class="image"><img alt="Mercedes-Benz Arocs in green.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Mercedes-Benz_Arocs_in_green.JPG/120px-Mercedes-Benz_Arocs_in_green.JPG" width="120" height="96" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Mercedes-Benz_Arocs_in_green.JPG/180px-Mercedes-Benz_Arocs_in_green.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Mercedes-Benz_Arocs_in_green.JPG/240px-Mercedes-Benz_Arocs_in_green.JPG 2x" data-file-width="3000" data-file-height="2400" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Germany</td>
<td>worldwide(except North America)</td>
</tr>
<tr>
<td>Mercedes-Benz</td>
<td><a href="/wiki/Mercedes-Benz_Sprinter" title="Mercedes-Benz Sprinter">Mercedes-Benz Sprinter</a></td>
<td><a href="/wiki/File:Mercedes_Sprinter_313_CDI_Pritschenwagen_(W906)_front_20101017.jpg" class="image"><img alt="Mercedes Sprinter 313 CDI Pritschenwagen (W906) front 20101017.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/17/Mercedes_Sprinter_313_CDI_Pritschenwagen_%28W906%29_front_20101017.jpg/120px-Mercedes_Sprinter_313_CDI_Pritschenwagen_%28W906%29_front_20101017.jpg" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/17/Mercedes_Sprinter_313_CDI_Pritschenwagen_%28W906%29_front_20101017.jpg/180px-Mercedes_Sprinter_313_CDI_Pritschenwagen_%28W906%29_front_20101017.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/17/Mercedes_Sprinter_313_CDI_Pritschenwagen_%28W906%29_front_20101017.jpg/240px-Mercedes_Sprinter_313_CDI_Pritschenwagen_%28W906%29_front_20101017.jpg 2x" data-file-width="2343" data-file-height="1614" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td><a href="/wiki/Freightliner_Sprinter" class="mw-redirect" title="Freightliner Sprinter">Freightliner Sprinter</a></td>
<td>Germany</td>
<td>Europe, Ghana, Morocco, Algeria, Tunisia, South Africa, Nigeria, Australia, New Zealand, China, Middle East, North America, Latin America</td>
</tr>
<tr>
<td><a href="/wiki/Mitsubishi_Fuso_Truck_and_Bus_Corporation" title="Mitsubishi Fuso Truck and Bus Corporation">Mitsubishi Fuso</a></td>
<td><a href="/wiki/Mitsubishi_Fuso_Canter" title="Mitsubishi Fuso Canter">Mitsubishi Fuso Canter</a></td>
<td><a href="/wiki/File:Fuso_Canter_703.JPG" class="image"><img alt="Fuso Canter 703.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Fuso_Canter_703.JPG/120px-Fuso_Canter_703.JPG" width="120" height="88" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Fuso_Canter_703.JPG/180px-Fuso_Canter_703.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Fuso_Canter_703.JPG/240px-Fuso_Canter_703.JPG 2x" data-file-width="1280" data-file-height="940" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Japan</td>
<td>worldwide</td>
</tr>
<tr>
<td>Mitsubishi Fuso</td>
<td><a href="/wiki/Mitsubishi_Fuso_Fighter" title="Mitsubishi Fuso Fighter">Mitsubishi Fuso Fighter</a></td>
<td><a href="/wiki/File:New_Zealand_Trucks_-_Flickr_-_111_Emergency_(25).jpg" class="image"><img alt="New Zealand Trucks - Flickr - 111 Emergency (25).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f9/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2825%29.jpg/120px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2825%29.jpg" width="120" height="88" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f9/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2825%29.jpg/180px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2825%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f9/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2825%29.jpg/240px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2825%29.jpg 2x" data-file-width="1503" data-file-height="1108" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Japan</td>
<td>Asia, Oceania, Africa</td>
</tr>
<tr>
<td>Mitsubishi Fuso</td>
<td><a href="/w/index.php?title=Mitsubishi_Fuso_The_Great&amp;action=edit&amp;redlink=1" class="new" title="Mitsubishi Fuso The Great (page does not exist)">Mitsubishi Fuso The Great</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Japan</td>
<td>Japan</td>
</tr>
<tr>
<td>Mitsubishi Fuso</td>
<td><a href="/wiki/Mitsubishi_Fuso_Super_Great" title="Mitsubishi Fuso Super Great">Mitsubishi Fuso Super Great</a></td>
<td><a href="/wiki/File:New_Zealand_Trucks_-_Flickr_-_111_Emergency_(155).jpg" class="image"><img alt="New Zealand Trucks - Flickr - 111 Emergency (155).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e4/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28155%29.jpg/120px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28155%29.jpg" width="120" height="89" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e4/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28155%29.jpg/180px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28155%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e4/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28155%29.jpg/240px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28155%29.jpg 2x" data-file-width="1712" data-file-height="1263" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Japan</td>
<td>Japan, Asia-Pacific, Mid-East, Africa, South America</td>
</tr>
<tr>
<td><a href="/wiki/MZKT" title="MZKT">MZKT</a></td>
<td>MZKT - 75165</td>
<td><a href="/wiki/File:MZKT_truck.JPG" class="image"><img alt="MZKT truck.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4c/MZKT_truck.JPG/120px-MZKT_truck.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4c/MZKT_truck.JPG/180px-MZKT_truck.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4c/MZKT_truck.JPG/240px-MZKT_truck.JPG 2x" data-file-width="3008" data-file-height="2000" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>MZKT - 65151, MZKT - 6527, MZKT - 652511</td>
<td>Belarus</td>
<td>Belarus</td>
</tr>
<tr>
<td>MZKT</td>
<td>MZKT - 7402</td>
<td><a href="/wiki/File:MZKT-7401.JPG" class="image"><img alt="MZKT-7401.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/MZKT-7401.JPG/120px-MZKT-7401.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/MZKT-7401.JPG/180px-MZKT-7401.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1b/MZKT-7401.JPG/240px-MZKT-7401.JPG 2x" data-file-width="3008" data-file-height="2000" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>MZKT - 74171, MZKT - 74173, MZKT - 692374, MZKT - 7401, MZKT - 74171, MZKT - 692374, MZKT - 74132</td>
<td>Belarus</td>
<td>Belarus</td>
</tr>
<tr>
<td>MZKT</td>
<td>MZKT - 692371</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>MZKT - 692382, MZKT - 652511-2010, MZKT - 652513, MZKT - 652712, MZKT - 65271, MZKT - 65274, MZKT - 7001, MZKT - 7003, MZKT - 7004, MZKT - 79091, MZKT - 79092, MZKT - 790986, MZKT - 79191, MZKT - 69234 MZKT - 79081</td>
<td>Belarus</td>
<td>Belarus</td>
</tr>
<tr>
<td><a href="/wiki/Navistar_International" title="Navistar International">Navistar International</a></td>
<td><a href="/wiki/International_Citystar" class="mw-redirect" title="International Citystar">International Citystar</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Mexico(Formally United States)</td>
<td>Mexico</td>
</tr>
<tr>
<td>Navistar International</td>
<td><a href="/wiki/International_Harvester_Loadstar" title="International Harvester Loadstar">International LoadStar</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada</td>
</tr>
<tr>
<td>Navistar International</td>
<td><a href="/wiki/International_TerraStar" title="International TerraStar">International TerraStar</a></td>
<td><a href="/wiki/File:International_TerraStar_in_white.JPG" class="image"><img alt="International TerraStar in white.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8a/International_TerraStar_in_white.JPG/120px-International_TerraStar_in_white.JPG" width="120" height="87" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8a/International_TerraStar_in_white.JPG/180px-International_TerraStar_in_white.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8a/International_TerraStar_in_white.JPG/240px-International_TerraStar_in_white.JPG 2x" data-file-width="2886" data-file-height="2103" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada</td>
</tr>
<tr>
<td>Navistar International</td>
<td><a href="/wiki/International_DuraStar" class="mw-redirect" title="International DuraStar">International DuraStar</a></td>
<td><a href="/wiki/File:Schwans_Freschetta_Pizza_Navistar_HTS.jpg" class="image"><img alt="Schwans Freschetta Pizza Navistar HTS.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Schwans_Freschetta_Pizza_Navistar_HTS.jpg/120px-Schwans_Freschetta_Pizza_Navistar_HTS.jpg" width="120" height="100" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Schwans_Freschetta_Pizza_Navistar_HTS.jpg/180px-Schwans_Freschetta_Pizza_Navistar_HTS.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Schwans_Freschetta_Pizza_Navistar_HTS.jpg/240px-Schwans_Freschetta_Pizza_Navistar_HTS.jpg 2x" data-file-width="1890" data-file-height="1568" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico, Brazil, Middle East</td>
</tr>
<tr>
<td>Navistar International</td>
<td><a href="/wiki/International_Transtar" title="International Transtar">International Transtar</a></td>
<td><a href="/wiki/File:CBIMeatTruck.jpg" class="image"><img alt="CBIMeatTruck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1d/CBIMeatTruck.jpg/120px-CBIMeatTruck.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1d/CBIMeatTruck.jpg/180px-CBIMeatTruck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1d/CBIMeatTruck.jpg/240px-CBIMeatTruck.jpg 2x" data-file-width="2184" data-file-height="1456" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, South Africa</td>
</tr>
<tr>
<td>Navistar International</td>
<td><a href="/w/index.php?title=International_9200i&amp;action=edit&amp;redlink=1" class="new" title="International 9200i (page does not exist)">International 9200i</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Mexico</td>
<td>Mexico</td>
</tr>
<tr>
<td>Navistar International</td>
<td><a href="/w/index.php?title=International_9400i&amp;action=edit&amp;redlink=1" class="new" title="International 9400i (page does not exist)">International 9400i</a></td>
<td><a href="/wiki/File:SEPT_17TH_LOS_ANGELES_INTERNATIONAL_TRUCK_PHOTO_PATRICE_RAUNET_HOLLYWOOD.jpg" class="image"><img alt="SEPT 17TH LOS ANGELES INTERNATIONAL TRUCK PHOTO PATRICE RAUNET HOLLYWOOD.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ae/SEPT_17TH_LOS_ANGELES_INTERNATIONAL_TRUCK_PHOTO_PATRICE_RAUNET_HOLLYWOOD.jpg/120px-SEPT_17TH_LOS_ANGELES_INTERNATIONAL_TRUCK_PHOTO_PATRICE_RAUNET_HOLLYWOOD.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ae/SEPT_17TH_LOS_ANGELES_INTERNATIONAL_TRUCK_PHOTO_PATRICE_RAUNET_HOLLYWOOD.jpg/180px-SEPT_17TH_LOS_ANGELES_INTERNATIONAL_TRUCK_PHOTO_PATRICE_RAUNET_HOLLYWOOD.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ae/SEPT_17TH_LOS_ANGELES_INTERNATIONAL_TRUCK_PHOTO_PATRICE_RAUNET_HOLLYWOOD.jpg/240px-SEPT_17TH_LOS_ANGELES_INTERNATIONAL_TRUCK_PHOTO_PATRICE_RAUNET_HOLLYWOOD.jpg 2x" data-file-width="2816" data-file-height="2112" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Mexico</td>
<td>Mexico</td>
</tr>
<tr>
<td>Navistar International</td>
<td><a href="/w/index.php?title=International_9800i&amp;action=edit&amp;redlink=1" class="new" title="International 9800i (page does not exist)">International 9800i</a></td>
<td><a href="/wiki/File:New_Zealand_Trucks_-_Flickr_-_111_Emergency_(227).jpg" class="image"><img alt="New Zealand Trucks - Flickr - 111 Emergency (227).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7a/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28227%29.jpg/120px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28227%29.jpg" width="120" height="73" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7a/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28227%29.jpg/180px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28227%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7a/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28227%29.jpg/240px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%28227%29.jpg 2x" data-file-width="1600" data-file-height="978" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>International 9800(South Africa)</td>
<td>Brazil</td>
<td>Brazil, South Africa</td>
</tr>
<tr>
<td>Navistar International</td>
<td><a href="/w/index.php?title=International_9900i&amp;action=edit&amp;redlink=1" class="new" title="International 9900i (page does not exist)">International 9900i</a></td>
<td><a href="/wiki/File:International_9900i_Eagle.jpg" class="image"><img alt="International 9900i Eagle.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a9/International_9900i_Eagle.jpg/120px-International_9900i_Eagle.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a9/International_9900i_Eagle.jpg/180px-International_9900i_Eagle.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a9/International_9900i_Eagle.jpg/240px-International_9900i_Eagle.jpg 2x" data-file-width="3648" data-file-height="2736" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico, Brazil</td>
</tr>
<tr>
<td>Navistar International</td>
<td><a href="/wiki/International_Lonestar" title="International Lonestar">Interanational LoneStar</a></td>
<td><a href="/wiki/File:InternationalLoneStar.JPG" class="image"><img alt="InternationalLoneStar.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3f/InternationalLoneStar.JPG/120px-InternationalLoneStar.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3f/InternationalLoneStar.JPG/180px-InternationalLoneStar.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3f/InternationalLoneStar.JPG/240px-InternationalLoneStar.JPG 2x" data-file-width="2920" data-file-height="1947" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada</td>
</tr>
<tr>
<td>Navistar International</td>
<td><a href="/wiki/International_Workstar" class="mw-redirect" title="International Workstar">International WorkStar</a></td>
<td><a href="/wiki/File:International_WorkStar.JPG" class="image"><img alt="International WorkStar.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fc/International_WorkStar.JPG/120px-International_WorkStar.JPG" width="120" height="96" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fc/International_WorkStar.JPG/180px-International_WorkStar.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fc/International_WorkStar.JPG/240px-International_WorkStar.JPG 2x" data-file-width="958" data-file-height="768" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico, Middle East, South Africa</td>
</tr>
<tr>
<td>Navistar International</td>
<td><a href="/wiki/International_Paystar" title="International Paystar">International PayStar</a></td>
<td><a href="/wiki/File:International_Paystar_P-18_of_the_Minnesota_Air_National_Guard.jpg" class="image"><img alt="International Paystar P-18 of the Minnesota Air National Guard.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/08/International_Paystar_P-18_of_the_Minnesota_Air_National_Guard.jpg/120px-International_Paystar_P-18_of_the_Minnesota_Air_National_Guard.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/08/International_Paystar_P-18_of_the_Minnesota_Air_National_Guard.jpg/180px-International_Paystar_P-18_of_the_Minnesota_Air_National_Guard.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/08/International_Paystar_P-18_of_the_Minnesota_Air_National_Guard.jpg/240px-International_Paystar_P-18_of_the_Minnesota_Air_National_Guard.jpg 2x" data-file-width="3456" data-file-height="2304" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Middle East</td>
</tr>
<tr>
<td>Navistar International</td>
<td><a href="/wiki/International_ProStar" title="International ProStar">International ProStar+</a></td>
<td><a href="/wiki/File:International_ProStar.JPG" class="image"><img alt="International ProStar.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e9/International_ProStar.JPG/120px-International_ProStar.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e9/International_ProStar.JPG/180px-International_ProStar.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e9/International_ProStar.JPG/240px-International_ProStar.JPG 2x" data-file-width="2560" data-file-height="1920" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>International ProStar(Russia)</td>
<td>United States</td>
<td>United States, Canada, Mexico, Russia</td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Nissan_Atlas" title="Nissan Atlas">Nissan Atlas</a></td>
<td><a href="/wiki/File:NISSAN,_ATLAS,_White_truck.jpg" class="image"><img alt="NISSAN, ATLAS, White truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d7/NISSAN%2C_ATLAS%2C_White_truck.jpg/120px-NISSAN%2C_ATLAS%2C_White_truck.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d7/NISSAN%2C_ATLAS%2C_White_truck.jpg/180px-NISSAN%2C_ATLAS%2C_White_truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d7/NISSAN%2C_ATLAS%2C_White_truck.jpg/240px-NISSAN%2C_ATLAS%2C_White_truck.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>light</td>
<td>COE</td>
<td>Nissan Cabstar(Europe, Australia, China), Nissan Atlas H43 Series(Malaysia), <a href="/wiki/Renault_Maxity" title="Renault Maxity">Renault Maxity</a>, Renault Samsung SV110, UD Condor, Yue Loong Homer, Dong Feng Pahlawan, Isuzu N-Series</td>
<td>Japan</td>
<td>worldwide, except United States and Canada</td>
</tr>
<tr>
<td>Nissan</td>
<td><a href="/wiki/Renault_Maxity" title="Renault Maxity">Renault Maxity</a></td>
<td><a href="/wiki/File:Renault_Maxity2.JPG" class="image"><img alt="Renault Maxity2.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/95/Renault_Maxity2.JPG/120px-Renault_Maxity2.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/95/Renault_Maxity2.JPG/180px-Renault_Maxity2.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/95/Renault_Maxity2.JPG/240px-Renault_Maxity2.JPG 2x" data-file-width="1632" data-file-height="1224" /></a></td>
<td>Light</td>
<td>COE</td>
<td><a href="/wiki/Nissan_Cabstar" title="Nissan Cabstar">Nissan Cabstar</a>(Europe, Australia, China), Nissan Atlas H41 Series(Malaysia), <a href="/wiki/Nissan_Atlas" title="Nissan Atlas">Nissan Atlas</a>, Renault Samsung SV110, UD Condor, Yue Loong Homer, Dong Feng Pahlawan, Isuzu N-Series</td>
<td>Japan</td>
<td>Europe</td>
</tr>
<tr>
<td><a href="/wiki/MAN_SE" title="MAN SE">MAN</a></td>
<td><a href="/wiki/MAN_SE" title="MAN SE">MAN TG L</a></td>
<td><a href="/wiki/File:MAN_TGL_12-210_-_Ren_Trans.jpg" class="image"><img alt="MAN TGL 12-210 - Ren Trans.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fb/MAN_TGL_12-210_-_Ren_Trans.jpg/120px-MAN_TGL_12-210_-_Ren_Trans.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fb/MAN_TGL_12-210_-_Ren_Trans.jpg/180px-MAN_TGL_12-210_-_Ren_Trans.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fb/MAN_TGL_12-210_-_Ren_Trans.jpg/240px-MAN_TGL_12-210_-_Ren_Trans.jpg 2x" data-file-width="2835" data-file-height="2126" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Germany</td>
<td>Europe, Asia, Africa, South America</td>
</tr>
<tr>
<td>MAN</td>
<td><a href="/wiki/MAN_SE" title="MAN SE">MAN TG M</a></td>
<td><a href="/wiki/File:MAN_TGM_18.330_truck.JPG" class="image"><img alt="MAN TGM 18.330 truck.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4d/MAN_TGM_18.330_truck.JPG/120px-MAN_TGM_18.330_truck.JPG" width="120" height="87" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4d/MAN_TGM_18.330_truck.JPG/180px-MAN_TGM_18.330_truck.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4d/MAN_TGM_18.330_truck.JPG/240px-MAN_TGM_18.330_truck.JPG 2x" data-file-width="3650" data-file-height="2650" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Germany</td>
<td>Europe, Asia, Africa, South America</td>
</tr>
<tr>
<td>MAN</td>
<td><a href="/wiki/MAN_SE" title="MAN SE">MAN TG S</a></td>
<td><a href="/wiki/File:MAN_TGS_18.440.jpg" class="image"><img alt="MAN TGS 18.440.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e0/MAN_TGS_18.440.jpg/120px-MAN_TGS_18.440.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e0/MAN_TGS_18.440.jpg/180px-MAN_TGS_18.440.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e0/MAN_TGS_18.440.jpg/240px-MAN_TGS_18.440.jpg 2x" data-file-width="4147" data-file-height="2764" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Germany</td>
<td>Europe, Asia, Africa, South America</td>
</tr>
<tr>
<td>MAN</td>
<td><a href="/wiki/MAN_SE" title="MAN SE">MAN TGX</a></td>
<td><a href="/wiki/File:Eddie_Stobart_T20ESL_(H6088_Ava_Rose)_(9090845169).jpg" class="image"><img alt="Eddie Stobart T20ESL (H6088 Ava Rose) (9090845169).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Eddie_Stobart_T20ESL_%28H6088_Ava_Rose%29_%289090845169%29.jpg/120px-Eddie_Stobart_T20ESL_%28H6088_Ava_Rose%29_%289090845169%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Eddie_Stobart_T20ESL_%28H6088_Ava_Rose%29_%289090845169%29.jpg/180px-Eddie_Stobart_T20ESL_%28H6088_Ava_Rose%29_%289090845169%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Eddie_Stobart_T20ESL_%28H6088_Ava_Rose%29_%289090845169%29.jpg/240px-Eddie_Stobart_T20ESL_%28H6088_Ava_Rose%29_%289090845169%29.jpg 2x" data-file-width="3424" data-file-height="2568" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Germany</td>
<td>Europe, Asia, Africa, South America</td>
</tr>
<tr>
<td><a href="/wiki/Peterbilt" title="Peterbilt">Peterbilt</a></td>
<td><a href="/w/index.php?title=Peterbilt_210&amp;action=edit&amp;redlink=1" class="new" title="Peterbilt 210 (page does not exist)">Peterbilt 210</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Peterbilt 220</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Peterbilt</td>
<td><a href="/w/index.php?title=Peterbilt_320&amp;action=edit&amp;redlink=1" class="new" title="Peterbilt 320 (page does not exist)">Peterbilt 320</a></td>
<td><a href="/wiki/File:Waste_collection_truck_in_the_Philippines.jpg" class="image"><img alt="Waste collection truck in the Philippines.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Waste_collection_truck_in_the_Philippines.jpg/120px-Waste_collection_truck_in_the_Philippines.jpg" width="120" height="82" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Waste_collection_truck_in_the_Philippines.jpg/180px-Waste_collection_truck_in_the_Philippines.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/00/Waste_collection_truck_in_the_Philippines.jpg/240px-Waste_collection_truck_in_the_Philippines.jpg 2x" data-file-width="1978" data-file-height="1350" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Peterbilt</td>
<td><a href="/w/index.php?title=Peterbilt_325&amp;action=edit&amp;redlink=1" class="new" title="Peterbilt 325 (page does not exist)">Peterbilt 325</a></td>
<td><a href="/wiki/File:Interstate_Batteries_Peterbilt_335_pic2.jpg" class="image"><img alt="Interstate Batteries Peterbilt 335 pic2.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Interstate_Batteries_Peterbilt_335_pic2.jpg/120px-Interstate_Batteries_Peterbilt_335_pic2.jpg" width="120" height="79" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Interstate_Batteries_Peterbilt_335_pic2.jpg/180px-Interstate_Batteries_Peterbilt_335_pic2.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Interstate_Batteries_Peterbilt_335_pic2.jpg/240px-Interstate_Batteries_Peterbilt_335_pic2.jpg 2x" data-file-width="2447" data-file-height="1616" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Peterbilt</td>
<td><a href="/w/index.php?title=Peterbilt_348&amp;action=edit&amp;redlink=1" class="new" title="Peterbilt 348 (page does not exist)">Peterbilt 348</a></td>
<td><a href="/wiki/File:FEMA_-_38828_-_Trucks_being_loaded_with_chipped_storm_debris.jpg" class="image"><img alt="FEMA - 38828 - Trucks being loaded with chipped storm debris.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/FEMA_-_38828_-_Trucks_being_loaded_with_chipped_storm_debris.jpg/120px-FEMA_-_38828_-_Trucks_being_loaded_with_chipped_storm_debris.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/FEMA_-_38828_-_Trucks_being_loaded_with_chipped_storm_debris.jpg/180px-FEMA_-_38828_-_Trucks_being_loaded_with_chipped_storm_debris.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/77/FEMA_-_38828_-_Trucks_being_loaded_with_chipped_storm_debris.jpg/240px-FEMA_-_38828_-_Trucks_being_loaded_with_chipped_storm_debris.jpg 2x" data-file-width="4288" data-file-height="2848" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>Peterblit 337</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Peterbilt</td>
<td><a href="/w/index.php?title=Peterbilt_365&amp;action=edit&amp;redlink=1" class="new" title="Peterbilt 365 (page does not exist)">Peterbilt 365</a></td>
<td><a href="/wiki/File:PETERBILT_TRUCK_LOS_ANGELES_AUG_30_2007_PATRICE_RAUNET_HOLLYWOOD.jpg" class="image"><img alt="PETERBILT TRUCK LOS ANGELES AUG 30 2007 PATRICE RAUNET HOLLYWOOD.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/PETERBILT_TRUCK_LOS_ANGELES_AUG_30_2007_PATRICE_RAUNET_HOLLYWOOD.jpg/120px-PETERBILT_TRUCK_LOS_ANGELES_AUG_30_2007_PATRICE_RAUNET_HOLLYWOOD.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/PETERBILT_TRUCK_LOS_ANGELES_AUG_30_2007_PATRICE_RAUNET_HOLLYWOOD.jpg/180px-PETERBILT_TRUCK_LOS_ANGELES_AUG_30_2007_PATRICE_RAUNET_HOLLYWOOD.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/27/PETERBILT_TRUCK_LOS_ANGELES_AUG_30_2007_PATRICE_RAUNET_HOLLYWOOD.jpg/240px-PETERBILT_TRUCK_LOS_ANGELES_AUG_30_2007_PATRICE_RAUNET_HOLLYWOOD.jpg 2x" data-file-width="640" data-file-height="480" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>Peterblit 365</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Peterbilt</td>
<td><a href="/w/index.php?title=Peterbilt_382&amp;action=edit&amp;redlink=1" class="new" title="Peterbilt 382 (page does not exist)">Peterbilt 382</a></td>
<td><a href="/wiki/File:Peterbilt_tractor-trailer_rig,_Loveland,_Colorado.jpg" class="image"><img alt="Peterbilt tractor-trailer rig, Loveland, Colorado.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Peterbilt_tractor-trailer_rig%2C_Loveland%2C_Colorado.jpg/120px-Peterbilt_tractor-trailer_rig%2C_Loveland%2C_Colorado.jpg" width="120" height="96" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Peterbilt_tractor-trailer_rig%2C_Loveland%2C_Colorado.jpg/180px-Peterbilt_tractor-trailer_rig%2C_Loveland%2C_Colorado.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Peterbilt_tractor-trailer_rig%2C_Loveland%2C_Colorado.jpg/240px-Peterbilt_tractor-trailer_rig%2C_Loveland%2C_Colorado.jpg 2x" data-file-width="1916" data-file-height="1534" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Peterbilt</td>
<td><a href="/w/index.php?title=Peterbilt_384&amp;action=edit&amp;redlink=1" class="new" title="Peterbilt 384 (page does not exist)">Peterbilt 384</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Peterblit</td>
<td><a href="/w/index.php?title=Peterbilt_386&amp;action=edit&amp;redlink=1" class="new" title="Peterbilt 386 (page does not exist)">Peterbilt 386</a></td>
<td><a href="/wiki/File:Peterbilt_truck_6.jpg" class="image"><img alt="Peterbilt truck 6.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/82/Peterbilt_truck_6.jpg/120px-Peterbilt_truck_6.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/82/Peterbilt_truck_6.jpg/180px-Peterbilt_truck_6.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/82/Peterbilt_truck_6.jpg/240px-Peterbilt_truck_6.jpg 2x" data-file-width="2816" data-file-height="2112" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Peterbilt</td>
<td><a href="/w/index.php?title=Peterbilt_389&amp;action=edit&amp;redlink=1" class="new" title="Peterbilt 389 (page does not exist)">Peterbilt 389</a></td>
<td><a href="/wiki/File:Peterbilt_truck_on_Goodwood_Motor_Racing_Circuit_-_Flickr_-_Supermac1961.jpg" class="image"><img alt="Peterbilt truck on Goodwood Motor Racing Circuit - Flickr - Supermac1961.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Peterbilt_truck_on_Goodwood_Motor_Racing_Circuit_-_Flickr_-_Supermac1961.jpg/120px-Peterbilt_truck_on_Goodwood_Motor_Racing_Circuit_-_Flickr_-_Supermac1961.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Peterbilt_truck_on_Goodwood_Motor_Racing_Circuit_-_Flickr_-_Supermac1961.jpg/180px-Peterbilt_truck_on_Goodwood_Motor_Racing_Circuit_-_Flickr_-_Supermac1961.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Peterbilt_truck_on_Goodwood_Motor_Racing_Circuit_-_Flickr_-_Supermac1961.jpg/240px-Peterbilt_truck_on_Goodwood_Motor_Racing_Circuit_-_Flickr_-_Supermac1961.jpg 2x" data-file-width="3888" data-file-height="2592" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Peterbilt</td>
<td><a href="/w/index.php?title=Peterbilt_587&amp;action=edit&amp;redlink=1" class="new" title="Peterbilt 587 (page does not exist)">Peterbilt 587</a></td>
<td><a href="/wiki/File:Town_Truck.jpg" class="image"><img alt="Town Truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/67/Town_Truck.jpg/120px-Town_Truck.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/67/Town_Truck.jpg/180px-Town_Truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/67/Town_Truck.jpg/240px-Town_Truck.jpg 2x" data-file-width="640" data-file-height="480" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Peterbilt</td>
<td><a href="/w/index.php?title=Peterbilt_579&amp;action=edit&amp;redlink=1" class="new" title="Peterbilt 579 (page does not exist)">Peterbilt 579</a></td>
<td><a href="/wiki/File:Peterbilt_359_Classic_(1977)_pic2.JPG" class="image"><img alt="Peterbilt 359 Classic (1977) pic2.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Peterbilt_359_Classic_%281977%29_pic2.JPG/120px-Peterbilt_359_Classic_%281977%29_pic2.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Peterbilt_359_Classic_%281977%29_pic2.JPG/180px-Peterbilt_359_Classic_%281977%29_pic2.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Peterbilt_359_Classic_%281977%29_pic2.JPG/240px-Peterbilt_359_Classic_%281977%29_pic2.JPG 2x" data-file-width="3046" data-file-height="2281" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td><a href="/wiki/Peugeot" title="Peugeot">Peugeot</a></td>
<td><a href="/wiki/Peugeot_Boxer" class="mw-redirect" title="Peugeot Boxer">Peugeot Boxer</a></td>
<td><a href="/wiki/File:Ploukonice,_poj%C3%ADzdn%C3%A1_prodejna.jpg" class="image"><img alt="Ploukonice, pojízdná prodejna.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/39/Ploukonice%2C_poj%C3%ADzdn%C3%A1_prodejna.jpg/120px-Ploukonice%2C_poj%C3%ADzdn%C3%A1_prodejna.jpg" width="120" height="95" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/39/Ploukonice%2C_poj%C3%ADzdn%C3%A1_prodejna.jpg/180px-Ploukonice%2C_poj%C3%ADzdn%C3%A1_prodejna.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/39/Ploukonice%2C_poj%C3%ADzdn%C3%A1_prodejna.jpg/240px-Ploukonice%2C_poj%C3%ADzdn%C3%A1_prodejna.jpg 2x" data-file-width="1624" data-file-height="1281" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td><a href="/wiki/Citro%C3%ABn_Jumper" class="mw-redirect" title="Citroën Jumper">Citroën Jumper</a>, <a href="/wiki/Fiat_Ducato" title="Fiat Ducato">Fiat Ducato</a></td>
<td>Italy</td>
<td>Europe, Argentina</td>
</tr>
<tr>
<td><a href="/wiki/Renault_Trucks" title="Renault Trucks">Renault Trucks</a></td>
<td><a href="/wiki/Renault_Midlum" title="Renault Midlum">Renault Midlum</a></td>
<td><a href="/wiki/File:NHS_Logistics_MX51CHG.jpg" class="image"><img alt="NHS Logistics MX51CHG.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c6/NHS_Logistics_MX51CHG.jpg/120px-NHS_Logistics_MX51CHG.jpg" width="120" height="97" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c6/NHS_Logistics_MX51CHG.jpg/180px-NHS_Logistics_MX51CHG.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c6/NHS_Logistics_MX51CHG.jpg/240px-NHS_Logistics_MX51CHG.jpg 2x" data-file-width="2000" data-file-height="1623" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>France</td>
<td>Worldwide, except United States, Canada, and Japan</td>
</tr>
<tr>
<td>Renault Trucks</td>
<td><a href="/w/index.php?title=Renault_Access&amp;action=edit&amp;redlink=1" class="new" title="Renault Access (page does not exist)">Renault Access</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>France</td>
<td>Worldwide, except United States, Canada, and Japan</td>
</tr>
<tr>
<td>Renault Trucks</td>
<td><a href="/wiki/Renault_Kerax" title="Renault Kerax">Renault Kerax</a></td>
<td><a href="/wiki/File:Camion_malaxeur4_(8541082288).jpg" class="image"><img alt="Camion malaxeur4 (8541082288).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Camion_malaxeur4_%288541082288%29.jpg/120px-Camion_malaxeur4_%288541082288%29.jpg" width="120" height="106" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Camion_malaxeur4_%288541082288%29.jpg/180px-Camion_malaxeur4_%288541082288%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Camion_malaxeur4_%288541082288%29.jpg/240px-Camion_malaxeur4_%288541082288%29.jpg 2x" data-file-width="2099" data-file-height="1860" /></a></td>
<td>Medium/Heavy</td>
<td>COE</td>
<td>-</td>
<td>France</td>
<td>Worldwide, except United States, Canada, and Japan</td>
</tr>
<tr>
<td>Renault Trucks</td>
<td><a href="/w/index.php?title=Renault_Premium&amp;action=edit&amp;redlink=1" class="new" title="Renault Premium (page does not exist)">Renault Premium</a></td>
<td><a href="/wiki/File:Alford_Traffic_Services_Renault_HGV.jpg" class="image"><img alt="Alford Traffic Services Renault HGV.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Alford_Traffic_Services_Renault_HGV.jpg/120px-Alford_Traffic_Services_Renault_HGV.jpg" width="120" height="113" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Alford_Traffic_Services_Renault_HGV.jpg/180px-Alford_Traffic_Services_Renault_HGV.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Alford_Traffic_Services_Renault_HGV.jpg/240px-Alford_Traffic_Services_Renault_HGV.jpg 2x" data-file-width="2175" data-file-height="2046" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>France</td>
<td>Worldwide, except United States, Canada, and Japan</td>
</tr>
<tr>
<td>Renault Trucks</td>
<td><a href="/wiki/Renault_Trucks_D" title="Renault Trucks D">Renault D</a></td>
<td><a href="/wiki/File:Renault_D_7.5_truck._Free_images_Spielvogel_1.jpg" class="image"><img alt="Renault D 7.5 truck. Free images Spielvogel 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Renault_D_7.5_truck._Free_images_Spielvogel_1.jpg/120px-Renault_D_7.5_truck._Free_images_Spielvogel_1.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Renault_D_7.5_truck._Free_images_Spielvogel_1.jpg/180px-Renault_D_7.5_truck._Free_images_Spielvogel_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Renault_D_7.5_truck._Free_images_Spielvogel_1.jpg/240px-Renault_D_7.5_truck._Free_images_Spielvogel_1.jpg 2x" data-file-width="5220" data-file-height="3345" /></a></td>
<td>Light/Medium</td>
<td>COE</td>
<td>-</td>
<td>France</td>
<td>Europe</td>
</tr>
<tr>
<td>Renault Trucks</td>
<td><a href="/wiki/Renault_Trucks_T" title="Renault Trucks T">Renault T</a></td>
<td><a href="/wiki/File:Renault_T440_-_Lyon_Bellecour_-_Truck_de_Ouf.JPG" class="image"><img alt="Renault T440 - Lyon Bellecour - Truck de Ouf.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Renault_T440_-_Lyon_Bellecour_-_Truck_de_Ouf.JPG/120px-Renault_T440_-_Lyon_Bellecour_-_Truck_de_Ouf.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Renault_T440_-_Lyon_Bellecour_-_Truck_de_Ouf.JPG/180px-Renault_T440_-_Lyon_Bellecour_-_Truck_de_Ouf.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Renault_T440_-_Lyon_Bellecour_-_Truck_de_Ouf.JPG/240px-Renault_T440_-_Lyon_Bellecour_-_Truck_de_Ouf.JPG 2x" data-file-width="5184" data-file-height="3456" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>France</td>
<td>Europe</td>
</tr>
<tr>
<td><a href="/wiki/Roman_(vehicle_manufacturer)" title="Roman (vehicle manufacturer)">Roman</a></td>
<td>Roman 12.250 F</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Romania</td>
<td>Romania</td>
</tr>
<tr>
<td><a href="/wiki/Nanjing_Automobile" title="Nanjing Automobile">SAIC-Iveco Hongyan</a></td>
<td>Hongyan Cargo Truck</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>China/Italy</td>
<td>China</td>
</tr>
<tr>
<td>SAIC-Iveco Hongyan</td>
<td>Hongyan Tractor</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China/Italy</td>
<td>China</td>
</tr>
<tr>
<td>SAIC-Iveco Hongyan</td>
<td>Hongyan Dump Truck</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China/Italy</td>
<td>China</td>
</tr>
<tr>
<td>SAIC-Iveco Hongyan</td>
<td>Hongyan Tanker Truck</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China/Italy</td>
<td>China</td>
</tr>
<tr>
<td><a href="/wiki/Scania_AB" title="Scania AB">Scania</a></td>
<td><a href="/wiki/Scania_P-series" class="mw-redirect" title="Scania P-series">Scania P-series</a></td>
<td><a href="/wiki/File:Scania_P360_8x4,_E3_-_Flickr_-_sludgegulper.jpg" class="image"><img alt="Scania P360 8x4, E3 - Flickr - sludgegulper.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Scania_P360_8x4%2C_E3_-_Flickr_-_sludgegulper.jpg/120px-Scania_P360_8x4%2C_E3_-_Flickr_-_sludgegulper.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Scania_P360_8x4%2C_E3_-_Flickr_-_sludgegulper.jpg/180px-Scania_P360_8x4%2C_E3_-_Flickr_-_sludgegulper.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Scania_P360_8x4%2C_E3_-_Flickr_-_sludgegulper.jpg/240px-Scania_P360_8x4%2C_E3_-_Flickr_-_sludgegulper.jpg 2x" data-file-width="2133" data-file-height="1600" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Sweden</td>
<td>Worldwide, except United States and Canada</td>
</tr>
<tr>
<td>Scania</td>
<td><a href="/wiki/Scania_G-series" class="mw-redirect" title="Scania G-series">Scania G-series</a></td>
<td><a href="/wiki/File:Scania_G_450_Off-Road_truck_8x4._Spielvogel_1.jpg" class="image"><img alt="Scania G 450 Off-Road truck 8x4. Spielvogel 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Scania_G_450_Off-Road_truck_8x4._Spielvogel_1.jpg/120px-Scania_G_450_Off-Road_truck_8x4._Spielvogel_1.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Scania_G_450_Off-Road_truck_8x4._Spielvogel_1.jpg/180px-Scania_G_450_Off-Road_truck_8x4._Spielvogel_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Scania_G_450_Off-Road_truck_8x4._Spielvogel_1.jpg/240px-Scania_G_450_Off-Road_truck_8x4._Spielvogel_1.jpg 2x" data-file-width="4719" data-file-height="3146" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Sweden</td>
<td>Worldwide, except United States and Canada</td>
</tr>
<tr>
<td>Scania</td>
<td><a href="/wiki/Scania_R-series" class="mw-redirect" title="Scania R-series">Scania R-series</a></td>
<td><a href="/wiki/File:Scania_highline.JPG" class="image"><img alt="Scania highline.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/48/Scania_highline.JPG/120px-Scania_highline.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/48/Scania_highline.JPG/180px-Scania_highline.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/48/Scania_highline.JPG/240px-Scania_highline.JPG 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Sweden</td>
<td>Worldwide, except United States and Canada</td>
</tr>
<tr>
<td><a href="/wiki/Shaanxi_Automobile_Group" title="Shaanxi Automobile Group">Shaanxi</a></td>
<td>Shaanxi Olong Tractor Truck</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Shaanxi</td>
<td>Shaanxi Delong Tractor Truck</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td><a href="/wiki/Silant" title="Silant">Silant</a></td>
<td><a href="/w/index.php?title=Silant_3.3_TD&amp;action=edit&amp;redlink=1" class="new" title="Silant 3.3 TD (page does not exist)">Silant 3.3 TD</a></td>
<td><a href="/wiki/File:Silant_3.3TD_truck.jpg" class="image"><img alt="Silant 3.3TD truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Silant_3.3TD_truck.jpg/120px-Silant_3.3TD_truck.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Silant_3.3TD_truck.jpg/180px-Silant_3.3TD_truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Silant_3.3TD_truck.jpg/240px-Silant_3.3TD_truck.jpg 2x" data-file-width="2250" data-file-height="1500" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Russia</td>
<td>Russia</td>
</tr>
<tr>
<td><a href="/wiki/Sinotruk_(Hong_Kong)" title="Sinotruk (Hong Kong)">Sinotruk</a></td>
<td><a href="/w/index.php?title=Sinotruk_HOWO_T7H&amp;action=edit&amp;redlink=1" class="new" title="Sinotruk HOWO T7H (page does not exist)">Sinotruk HOWO T7H</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Sinotruk</td>
<td><a href="/w/index.php?title=Sinotruk_HOWO_T5G&amp;action=edit&amp;redlink=1" class="new" title="Sinotruk HOWO T5G (page does not exist)">Sinotruk HOWO T5G</a></td>
<td><a href="/wiki/File:SinoTruk_HOWO_Iran.jpg" class="image"><img alt="SinoTruk HOWO Iran.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c3/SinoTruk_HOWO_Iran.jpg/120px-SinoTruk_HOWO_Iran.jpg" width="120" height="94" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c3/SinoTruk_HOWO_Iran.jpg/180px-SinoTruk_HOWO_Iran.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c3/SinoTruk_HOWO_Iran.jpg/240px-SinoTruk_HOWO_Iran.jpg 2x" data-file-width="1495" data-file-height="1174" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>China, Russia, Middle East</td>
</tr>
<tr>
<td>Sinotruk</td>
<td><a href="/w/index.php?title=Sinotruk_SITRAK&amp;action=edit&amp;redlink=1" class="new" title="Sinotruk SITRAK (page does not exist)">Sinotruk SITRAK</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>China</td>
<td>East Asia, Southeast Asia</td>
</tr>
<tr>
<td><a href="/wiki/Sisu_Auto" title="Sisu Auto">Sisu</a></td>
<td><a href="/w/index.php?title=Sisu_Rock&amp;action=edit&amp;redlink=1" class="new" title="Sisu Rock (page does not exist)">Sisu Rock</a></td>
<td><a href="/wiki/File:Den_rabotnikov_lesa,_Koryazhma_2010_(012).JPG" class="image"><img alt="Den rabotnikov lesa, Koryazhma 2010 (012).JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/91/Den_rabotnikov_lesa%2C_Koryazhma_2010_%28012%29.JPG/120px-Den_rabotnikov_lesa%2C_Koryazhma_2010_%28012%29.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/91/Den_rabotnikov_lesa%2C_Koryazhma_2010_%28012%29.JPG/180px-Den_rabotnikov_lesa%2C_Koryazhma_2010_%28012%29.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/91/Den_rabotnikov_lesa%2C_Koryazhma_2010_%28012%29.JPG/240px-Den_rabotnikov_lesa%2C_Koryazhma_2010_%28012%29.JPG 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>Sisu Timber, Sisu Polar, Sisu Works, Sisu Crane</td>
<td>Finland</td>
<td>Europe</td>
</tr>
<tr>
<td><a href="/wiki/Smith_Electric_Vehicles" title="Smith Electric Vehicles">Smith</a></td>
<td>Smith Newton</td>
<td><a href="/wiki/File:Autotec_2010_-_74.JPG" class="image"><img alt="Autotec 2010 - 74.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/24/Autotec_2010_-_74.JPG/120px-Autotec_2010_-_74.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/24/Autotec_2010_-_74.JPG/180px-Autotec_2010_-_74.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/24/Autotec_2010_-_74.JPG/240px-Autotec_2010_-_74.JPG 2x" data-file-width="2288" data-file-height="1712" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>United Kingdom</td>
<td>United Kingdom, United States, Canada</td>
</tr>
<tr>
<td><a href="/wiki/SML_Isuzu" title="SML Isuzu">SML Isuzu</a></td>
<td>SML Super</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>India</td>
<td>India</td>
</tr>
<tr>
<td><a href="/wiki/Tata_Motors_Cars" title="Tata Motors Cars">Tata</a></td>
<td><a href="/wiki/Tata_Construck" title="Tata Construck">Tata Construck</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>India</td>
<td>India</td>
</tr>
<tr>
<td>Tata</td>
<td><a href="/wiki/Tata_Novus" title="Tata Novus">Tata Novus</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>Tata Daewoo Novus</td>
<td>South Korea</td>
<td>India, Bangladesh</td>
</tr>
<tr>
<td>Tata</td>
<td><a href="/wiki/Tata_Prima" title="Tata Prima">Tata Prima</a></td>
<td><a href="/wiki/File:Tata_Prima_Truck2.jpg" class="image"><img alt="Tata Prima Truck2.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Tata_Prima_Truck2.jpg/120px-Tata_Prima_Truck2.jpg" width="120" height="84" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Tata_Prima_Truck2.jpg/180px-Tata_Prima_Truck2.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Tata_Prima_Truck2.jpg/240px-Tata_Prima_Truck2.jpg 2x" data-file-width="700" data-file-height="489" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>Tata Daewoo Prima</td>
<td>India</td>
<td>India, Bangladesh, Indonesia, Middle East (except Izrael, Lebanon, Syria, Iraq, Jemen), South Africa</td>
</tr>
<tr>
<td><a href="/wiki/Tata_Daewoo" title="Tata Daewoo">Tata Daewoo</a></td>
<td>Tata Daewoo Novus</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>Tata Novus</td>
<td>South Korea</td>
<td>South Korea, Pakistan, Vietnam</td>
</tr>
<tr>
<td>Tata Daewoo</td>
<td>Tata Daewoo Prima</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>Tata Prima</td>
<td>India</td>
<td>South Korea, Pakistan, Vietnam</td>
</tr>
<tr>
<td><a href="/wiki/Tatra_(company)" title="Tatra (company)">Tatra Trucks</a></td>
<td><a href="/w/index.php?title=Tatra_Phoenix&amp;action=edit&amp;redlink=1" class="new" title="Tatra Phoenix (page does not exist)">Tatra Phoenix</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Czech Republic</td>
<td>worldwide, except North America</td>
</tr>
<tr>
<td>Tatra Trucks</td>
<td><a href="/wiki/Tatra_815" title="Tatra 815">Tatra T815 TerrN°2</a></td>
<td><a href="/wiki/File:Tatra_T815_TERRno2.JPG" class="image"><img alt="Tatra T815 TERRno2.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/16/Tatra_T815_TERRno2.JPG/120px-Tatra_T815_TERRno2.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/16/Tatra_T815_TERRno2.JPG/180px-Tatra_T815_TERRno2.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/16/Tatra_T815_TERRno2.JPG/240px-Tatra_T815_TERRno2.JPG 2x" data-file-width="2272" data-file-height="1704" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Czech Republic</td>
<td>worldwide, except North America</td>
</tr>
<tr>
<td>Tatra Trucks</td>
<td>Tatra 810</td>
<td><a href="/wiki/File:Autotec_2010_-_94.JPG" class="image"><img alt="Autotec 2010 - 94.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/82/Autotec_2010_-_94.JPG/120px-Autotec_2010_-_94.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/82/Autotec_2010_-_94.JPG/180px-Autotec_2010_-_94.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/82/Autotec_2010_-_94.JPG/240px-Autotec_2010_-_94.JPG 2x" data-file-width="2288" data-file-height="1712" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Czech Republic</td>
<td>worldwide, except North America</td>
</tr>
<tr>
<td>Tatra Trucks</td>
<td><a href="/wiki/Tatra_Jamal" class="mw-redirect" title="Tatra Jamal">Tatra Jamal</a></td>
<td><a href="/wiki/File:Brno,_Autotec,_N%C3%A1kladn%C3%AD_automobil_Tatra_Jamal.jpg" class="image"><img alt="Brno, Autotec, Nákladní automobil Tatra Jamal.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/93/Brno%2C_Autotec%2C_N%C3%A1kladn%C3%AD_automobil_Tatra_Jamal.jpg/120px-Brno%2C_Autotec%2C_N%C3%A1kladn%C3%AD_automobil_Tatra_Jamal.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/93/Brno%2C_Autotec%2C_N%C3%A1kladn%C3%AD_automobil_Tatra_Jamal.jpg/180px-Brno%2C_Autotec%2C_N%C3%A1kladn%C3%AD_automobil_Tatra_Jamal.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/93/Brno%2C_Autotec%2C_N%C3%A1kladn%C3%AD_automobil_Tatra_Jamal.jpg/240px-Brno%2C_Autotec%2C_N%C3%A1kladn%C3%AD_automobil_Tatra_Jamal.jpg 2x" data-file-width="1536" data-file-height="1024" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Czech Republic</td>
<td>worldwide</td>
</tr>
<tr>
<td><a href="/wiki/Toyota" title="Toyota">Toyota</a></td>
<td><a href="/wiki/Toyota_Dyna" title="Toyota Dyna">Toyota Dyna</a></td>
<td><a href="/wiki/File:Toyota-DynaU700.JPG" class="image"><img alt="Toyota-DynaU700.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Toyota-DynaU700.JPG/120px-Toyota-DynaU700.JPG" width="120" height="83" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Toyota-DynaU700.JPG/180px-Toyota-DynaU700.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Toyota-DynaU700.JPG/240px-Toyota-DynaU700.JPG 2x" data-file-width="800" data-file-height="553" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Japan</td>
<td>Japan, South East Asia, Europe</td>
</tr>
<tr>
<td><a href="/wiki/UAZ" title="UAZ">UAZ</a></td>
<td><a href="/wiki/UAZ-452" title="UAZ-452">UAZ-3303</a></td>
<td><a href="/wiki/File:Milk_truck_in_Russia.jpg" class="image"><img alt="Milk truck in Russia.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Milk_truck_in_Russia.jpg/120px-Milk_truck_in_Russia.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Milk_truck_in_Russia.jpg/180px-Milk_truck_in_Russia.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Milk_truck_in_Russia.jpg/240px-Milk_truck_in_Russia.jpg 2x" data-file-width="2000" data-file-height="1500" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe</td>
</tr>
<tr>
<td>UAZ</td>
<td><a href="/wiki/UAZ_Patriot" title="UAZ Patriot">UAZ Cargo</a></td>
<td><a href="/wiki/File:UAZ-Pick-Up.jpg" class="image"><img alt="UAZ-Pick-Up.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/79/UAZ-Pick-Up.jpg/120px-UAZ-Pick-Up.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/79/UAZ-Pick-Up.jpg/180px-UAZ-Pick-Up.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/79/UAZ-Pick-Up.jpg/240px-UAZ-Pick-Up.jpg 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe, Central Europe</td>
</tr>
<tr>
<td><a href="/wiki/UD_Trucks" title="UD Trucks">UD Trucks</a></td>
<td><a href="/wiki/Nissan_Cabstar" title="Nissan Cabstar">Nissan Cabstar</a></td>
<td><a href="/wiki/File:Nissan_e-NT400_Concept_2012._truck_side_view._Spielvogel.JPG" class="image"><img alt="Nissan e-NT400 Concept 2012. truck side view. Spielvogel.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/47/Nissan_e-NT400_Concept_2012._truck_side_view._Spielvogel.JPG/120px-Nissan_e-NT400_Concept_2012._truck_side_view._Spielvogel.JPG" width="120" height="91" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/47/Nissan_e-NT400_Concept_2012._truck_side_view._Spielvogel.JPG/180px-Nissan_e-NT400_Concept_2012._truck_side_view._Spielvogel.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/47/Nissan_e-NT400_Concept_2012._truck_side_view._Spielvogel.JPG/240px-Nissan_e-NT400_Concept_2012._truck_side_view._Spielvogel.JPG 2x" data-file-width="2566" data-file-height="1944" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Nissan Atlas H41 Series(Malaysia), <a href="/wiki/Nissan_Atlas" title="Nissan Atlas">Nissan Atlas</a>, <a href="/wiki/Renault_Maxity" title="Renault Maxity">Renault Maxity</a>, Renault Samsung SV110, UD Condor, Yue Loong Homer, Dong Feng Pahlawan, Isuzu N-Series</td>
<td>Japan</td>
<td>Europe, Australia, China</td>
</tr>
<tr>
<td>UD Trucks</td>
<td><a href="/wiki/Nissan_Diesel_Condor" title="Nissan Diesel Condor">UD Condor</a></td>
<td><a href="/wiki/File:2012_UD_2600,_NYC.jpg" class="image"><img alt="2012 UD 2600, NYC.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/2012_UD_2600%2C_NYC.jpg/120px-2012_UD_2600%2C_NYC.jpg" width="120" height="115" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/2012_UD_2600%2C_NYC.jpg/180px-2012_UD_2600%2C_NYC.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/2012_UD_2600%2C_NYC.jpg/240px-2012_UD_2600%2C_NYC.jpg 2x" data-file-width="2226" data-file-height="2142" /></a></td>
<td>Light/Medium</td>
<td>COE</td>
<td><a href="/wiki/Nissan_Cabstar" title="Nissan Cabstar">Nissan Cabstar</a>(Europe, Australia, China), Nissan Atlas H41 Series(Malaysia), <a href="/wiki/Nissan_Atlas" title="Nissan Atlas">Nissan Atlas</a>, <a href="/wiki/Renault_Maxity" title="Renault Maxity">Renault Maxity</a>, Renault Samsung SV110, UD Condor, Yue Loong Homer, Dong Feng Pahlawan, Isuzu N-Series</td>
<td>Japan</td>
<td>Japan, United States, Canada</td>
</tr>
<tr>
<td>UD Trucks</td>
<td><a href="/wiki/Nissan_Diesel_Big_Thumb" title="Nissan Diesel Big Thumb">UD Big Thumb</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Japan</td>
<td>Japan, China</td>
</tr>
<tr>
<td>UD Trucks</td>
<td><a href="/wiki/Nissan_Diesel_Quon" title="Nissan Diesel Quon">UD Quon</a></td>
<td><a href="/wiki/File:UDQuon.jpg" class="image"><img alt="UDQuon.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b0/UDQuon.jpg/120px-UDQuon.jpg" width="120" height="95" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b0/UDQuon.jpg/180px-UDQuon.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b0/UDQuon.jpg/240px-UDQuon.jpg 2x" data-file-width="758" data-file-height="600" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Japan</td>
<td>Asia-Pacific, Mid-East, Africa, South America</td>
</tr>
<tr>
<td><a href="/wiki/UralAZ" class="mw-redirect" title="UralAZ">UralAZ</a></td>
<td><a href="/wiki/Ural-4320" title="Ural-4320">Ural-4320</a></td>
<td><a href="/wiki/File:Ural-4320_-_ETIF-2010_(1).jpg" class="image"><img alt="Ural-4320 - ETIF-2010 (1).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/31/Ural-4320_-_ETIF-2010_%281%29.jpg/120px-Ural-4320_-_ETIF-2010_%281%29.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/31/Ural-4320_-_ETIF-2010_%281%29.jpg/180px-Ural-4320_-_ETIF-2010_%281%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/31/Ural-4320_-_ETIF-2010_%281%29.jpg/240px-Ural-4320_-_ETIF-2010_%281%29.jpg 2x" data-file-width="2250" data-file-height="1429" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe, China, North Africa</td>
</tr>
<tr>
<td>UralAZ</td>
<td>Ural-43206</td>
<td><a href="/wiki/File:Engineering_Technologies_-_2012_(2-28).jpg" class="image"><img alt="Engineering Technologies - 2012 (2-28).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/16/Engineering_Technologies_-_2012_%282-28%29.jpg/120px-Engineering_Technologies_-_2012_%282-28%29.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/16/Engineering_Technologies_-_2012_%282-28%29.jpg/180px-Engineering_Technologies_-_2012_%282-28%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/16/Engineering_Technologies_-_2012_%282-28%29.jpg/240px-Engineering_Technologies_-_2012_%282-28%29.jpg 2x" data-file-width="2250" data-file-height="1500" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe, China, North Africa</td>
</tr>
<tr>
<td>UralAZ</td>
<td>Ural-4320-3951</td>
<td><a href="/wiki/File:Ural-4320-3951-58_truck_in_Russia_(2).jpg" class="image"><img alt="Ural-4320-3951-58 truck in Russia (2).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Ural-4320-3951-58_truck_in_Russia_%282%29.jpg/120px-Ural-4320-3951-58_truck_in_Russia_%282%29.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Ural-4320-3951-58_truck_in_Russia_%282%29.jpg/180px-Ural-4320-3951-58_truck_in_Russia_%282%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/27/Ural-4320-3951-58_truck_in_Russia_%282%29.jpg/240px-Ural-4320-3951-58_truck_in_Russia_%282%29.jpg 2x" data-file-width="2250" data-file-height="1500" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia</td>
</tr>
<tr>
<td>UralAZ</td>
<td>Ural-432065</td>
<td><a href="/wiki/File:Innoprom_2012_450.jpg" class="image"><img alt="Innoprom 2012 450.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Innoprom_2012_450.jpg/120px-Innoprom_2012_450.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Innoprom_2012_450.jpg/180px-Innoprom_2012_450.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Innoprom_2012_450.jpg/240px-Innoprom_2012_450.jpg 2x" data-file-width="2048" data-file-height="1366" /></a></td>
<td>Heavy</td>
<td>Cab front of the engine</td>
<td>-</td>
<td>Russia</td>
<td>Russia</td>
</tr>
<tr>
<td>UralAZ</td>
<td>Ural-44202</td>
<td><a href="/wiki/File:Ural-44202-59_truck_(1).jpg" class="image"><img alt="Ural-44202-59 truck (1).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Ural-44202-59_truck_%281%29.jpg/120px-Ural-44202-59_truck_%281%29.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Ural-44202-59_truck_%281%29.jpg/180px-Ural-44202-59_truck_%281%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Ural-44202-59_truck_%281%29.jpg/240px-Ural-44202-59_truck_%281%29.jpg 2x" data-file-width="2250" data-file-height="1500" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe</td>
</tr>
<tr>
<td>UralAZ</td>
<td><a href="/wiki/Ural-5323" title="Ural-5323">Ural-5323</a></td>
<td><a href="/wiki/File:Ural-5323.jpg" class="image"><img alt="Ural-5323.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/24/Ural-5323.jpg/120px-Ural-5323.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/24/Ural-5323.jpg/180px-Ural-5323.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/24/Ural-5323.jpg/240px-Ural-5323.jpg 2x" data-file-width="2250" data-file-height="1431" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe</td>
</tr>
<tr>
<td>UralAZ</td>
<td>Ural-6368</td>
<td><a href="/wiki/File:%D0%9C%D0%9F%D0%A0-3_MultiLift.JPG" class="image"><img alt="МПР-3 MultiLift.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b0/%D0%9C%D0%9F%D0%A0-3_MultiLift.JPG/120px-%D0%9C%D0%9F%D0%A0-3_MultiLift.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b0/%D0%9C%D0%9F%D0%A0-3_MultiLift.JPG/180px-%D0%9C%D0%9F%D0%A0-3_MultiLift.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b0/%D0%9C%D0%9F%D0%A0-3_MultiLift.JPG/240px-%D0%9C%D0%9F%D0%A0-3_MultiLift.JPG 2x" data-file-width="3072" data-file-height="2304" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe</td>
</tr>
<tr>
<td>UralAZ</td>
<td>Ural-6370</td>
<td><a href="/wiki/File:Ural-63704_tank_transporter,_2010.jpg" class="image"><img alt="Ural-63704 tank transporter, 2010.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/db/Ural-63704_tank_transporter%2C_2010.jpg/120px-Ural-63704_tank_transporter%2C_2010.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/db/Ural-63704_tank_transporter%2C_2010.jpg/180px-Ural-63704_tank_transporter%2C_2010.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/db/Ural-63704_tank_transporter%2C_2010.jpg/240px-Ural-63704_tank_transporter%2C_2010.jpg 2x" data-file-width="2250" data-file-height="1430" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe</td>
</tr>
<tr>
<td>UralAZ</td>
<td>Ural Next</td>
<td><a href="/wiki/File:Interpolitex2015part4-16.jpg" class="image"><img alt="Interpolitex2015part4-16.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Interpolitex2015part4-16.jpg/120px-Interpolitex2015part4-16.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Interpolitex2015part4-16.jpg/180px-Interpolitex2015part4-16.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Interpolitex2015part4-16.jpg/240px-Interpolitex2015part4-16.jpg 2x" data-file-width="2250" data-file-height="1500" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe</td>
</tr>
<tr>
<td><a href="/wiki/Volkswagen_Trucks_and_Buses" class="mw-redirect" title="Volkswagen Trucks and Buses">Volkswagen Truck &amp; Bus</a></td>
<td><a href="/wiki/Volkswagen_Worker" title="Volkswagen Worker">Volkswagen Worker</a></td>
<td><a href="/wiki/File:Caminhaocegonha.jpg" class="image"><img alt="Caminhaocegonha.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Caminhaocegonha.jpg/120px-Caminhaocegonha.jpg" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Caminhaocegonha.jpg/180px-Caminhaocegonha.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Caminhaocegonha.jpg/240px-Caminhaocegonha.jpg 2x" data-file-width="2486" data-file-height="1772" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Brazil</td>
<td>Brazil, Mexico, Nigeria, South Africa</td>
</tr>
<tr>
<td><a href="/wiki/MAN_Latin_America" class="mw-redirect" title="MAN Latin America">Volkswagen Truck &amp; Bus</a></td>
<td><a href="/wiki/Volkswagen_Delivery" title="Volkswagen Delivery">Volkswagen Delivery</a></td>
<td><a href="/wiki/File:2006_VW_Delivery_8-150.jpg" class="image"><img alt="2006 VW Delivery 8-150.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/2006_VW_Delivery_8-150.jpg/120px-2006_VW_Delivery_8-150.jpg" width="120" height="91" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d4/2006_VW_Delivery_8-150.jpg/180px-2006_VW_Delivery_8-150.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d4/2006_VW_Delivery_8-150.jpg/240px-2006_VW_Delivery_8-150.jpg 2x" data-file-width="570" data-file-height="432" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Brazil</td>
<td>Brazil, Mexico, Nigeria, South Africa</td>
</tr>
<tr>
<td><a href="/wiki/Volkswagen_Commercial_Vehicles" title="Volkswagen Commercial Vehicles">Volkswagen Commercial Vehicles</a></td>
<td><a href="/wiki/Volkswagen_Crafter" title="Volkswagen Crafter">Volkswagen Crafter</a></td>
<td><a href="/wiki/File:Albertnl_Volkswagen_Crafter.jpg" class="image"><img alt="Albertnl Volkswagen Crafter.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Albertnl_Volkswagen_Crafter.jpg/120px-Albertnl_Volkswagen_Crafter.jpg" width="120" height="71" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Albertnl_Volkswagen_Crafter.jpg/180px-Albertnl_Volkswagen_Crafter.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Albertnl_Volkswagen_Crafter.jpg/240px-Albertnl_Volkswagen_Crafter.jpg 2x" data-file-width="4752" data-file-height="2814" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Germany</td>
<td>Europe, Mexica, Taiwan, South Africa, Australia, New Zealand</td>
</tr>
<tr>
<td>Volkswagen Truck &amp; Bus</td>
<td><a href="/wiki/Volkswagen_Constellation" title="Volkswagen Constellation">Volkswagen Constellation</a></td>
<td><a href="/wiki/File:2010_09_27_Hannover_110944_(8599561541).jpg" class="image"><img alt="2010 09 27 Hannover 110944 (8599561541).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/2010_09_27_Hannover_110944_%288599561541%29.jpg/120px-2010_09_27_Hannover_110944_%288599561541%29.jpg" width="120" height="160" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/84/2010_09_27_Hannover_110944_%288599561541%29.jpg/180px-2010_09_27_Hannover_110944_%288599561541%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/84/2010_09_27_Hannover_110944_%288599561541%29.jpg/240px-2010_09_27_Hannover_110944_%288599561541%29.jpg 2x" data-file-width="1200" data-file-height="1600" /></a></td>
<td>Medium/Heavy</td>
<td>COE</td>
<td>-</td>
<td>Brazil</td>
<td>Brazil, Mexico, Nigeria, South Africa</td>
</tr>
<tr>
<td><a href="/wiki/Volvo_Trucks" title="Volvo Trucks">Volvo Trucks</a></td>
<td><a href="/wiki/Volvo_FE" title="Volvo FE">Volvo FE</a></td>
<td><a href="/wiki/File:FE_left_view.jpg" class="image"><img alt="FE left view.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/FE_left_view.jpg/120px-FE_left_view.jpg" width="120" height="94" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/FE_left_view.jpg/180px-FE_left_view.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/FE_left_view.jpg/240px-FE_left_view.jpg 2x" data-file-width="2451" data-file-height="1914" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Sweden</td>
<td>Europe, Middle East, Australia</td>
</tr>
<tr>
<td>Volvo Trucks</td>
<td><a href="/wiki/Volvo_FM" title="Volvo FM">Volvo FM</a></td>
<td><a href="/wiki/File:Eddie_Stobart_(H254)_BX02LNW_(8628644934).jpg" class="image"><img alt="Eddie Stobart (H254) BX02LNW (8628644934).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/24/Eddie_Stobart_%28H254%29_BX02LNW_%288628644934%29.jpg/120px-Eddie_Stobart_%28H254%29_BX02LNW_%288628644934%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/24/Eddie_Stobart_%28H254%29_BX02LNW_%288628644934%29.jpg/180px-Eddie_Stobart_%28H254%29_BX02LNW_%288628644934%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/24/Eddie_Stobart_%28H254%29_BX02LNW_%288628644934%29.jpg/240px-Eddie_Stobart_%28H254%29_BX02LNW_%288628644934%29.jpg 2x" data-file-width="3424" data-file-height="2568" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Sweden</td>
<td>Europe, Africa, Asia, South America, Oceania</td>
</tr>
<tr>
<td>Volvo Trucks</td>
<td><a href="/w/index.php?title=Volvo_VHD&amp;action=edit&amp;redlink=1" class="new" title="Volvo VHD (page does not exist)">Volvo VHD</a></td>
<td><a href="/wiki/File:Volvo_VHD84b_Tri-axle_Dump_Truck.jpg" class="image"><img alt="Volvo VHD84b Tri-axle Dump Truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/23/Volvo_VHD84b_Tri-axle_Dump_Truck.jpg/120px-Volvo_VHD84b_Tri-axle_Dump_Truck.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/23/Volvo_VHD84b_Tri-axle_Dump_Truck.jpg/180px-Volvo_VHD84b_Tri-axle_Dump_Truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/23/Volvo_VHD84b_Tri-axle_Dump_Truck.jpg/240px-Volvo_VHD84b_Tri-axle_Dump_Truck.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Volvo Trucks</td>
<td><a href="/w/index.php?title=Volvo_VM&amp;action=edit&amp;redlink=1" class="new" title="Volvo VM (page does not exist)">Volvo VM</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Sweden</td>
<td>South America</td>
</tr>
<tr>
<td>Volvo Trucks</td>
<td><a href="/wiki/Volvo_FH" title="Volvo FH">Volvo FH</a></td>
<td><a href="/wiki/File:Eddie_Stobart_PX11BYD_(H4664_Tamsin_Helen)_(8494969875).jpg" class="image"><img alt="Eddie Stobart PX11BYD (H4664 Tamsin Helen) (8494969875).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Eddie_Stobart_PX11BYD_%28H4664_Tamsin_Helen%29_%288494969875%29.jpg/120px-Eddie_Stobart_PX11BYD_%28H4664_Tamsin_Helen%29_%288494969875%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Eddie_Stobart_PX11BYD_%28H4664_Tamsin_Helen%29_%288494969875%29.jpg/180px-Eddie_Stobart_PX11BYD_%28H4664_Tamsin_Helen%29_%288494969875%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Eddie_Stobart_PX11BYD_%28H4664_Tamsin_Helen%29_%288494969875%29.jpg/240px-Eddie_Stobart_PX11BYD_%28H4664_Tamsin_Helen%29_%288494969875%29.jpg 2x" data-file-width="3424" data-file-height="2568" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Sweden</td>
<td>Europe, Africa, Asia, South America, Oceania</td>
</tr>
<tr>
<td>Volvo Trucks</td>
<td><a href="/wiki/Volvo_FMX" title="Volvo FMX">Volvo FMX</a></td>
<td><a href="/wiki/File:Volvo_FMX_10x4_dump_truck_2014._Spielvogel_1.JPG" class="image"><img alt="Volvo FMX 10x4 dump truck 2014. Spielvogel 1.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Volvo_FMX_10x4_dump_truck_2014._Spielvogel_1.JPG/120px-Volvo_FMX_10x4_dump_truck_2014._Spielvogel_1.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Volvo_FMX_10x4_dump_truck_2014._Spielvogel_1.JPG/180px-Volvo_FMX_10x4_dump_truck_2014._Spielvogel_1.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/Volvo_FMX_10x4_dump_truck_2014._Spielvogel_1.JPG/240px-Volvo_FMX_10x4_dump_truck_2014._Spielvogel_1.JPG 2x" data-file-width="5377" data-file-height="3585" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Sweden</td>
<td>Europe, Africa, Asia, South America, Oceania</td>
</tr>
<tr>
<td>Volvo Trucks</td>
<td><a href="/wiki/Volvo_VN" title="Volvo VN">Volvo VN</a></td>
<td><a href="/wiki/File:Volvo_Los_Angeles.jpg" class="image"><img alt="Volvo Los Angeles.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Volvo_Los_Angeles.jpg/120px-Volvo_Los_Angeles.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Volvo_Los_Angeles.jpg/180px-Volvo_Los_Angeles.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Volvo_Los_Angeles.jpg/240px-Volvo_Los_Angeles.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td>Volvo Trucks</td>
<td><a href="/wiki/Volvo_VNX" class="mw-redirect" title="Volvo VNX">Volvo VNX</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>United States, Canada, Mexico</td>
</tr>
<tr>
<td><a href="/wiki/Wanshan_Special_Vehicle" title="Wanshan Special Vehicle">Wanshan Special Vehicle</a></td>
<td>WS5250</td>
<td><a href="/wiki/File:Chinese_military_truck,_China%27s_60th_anniversary_parade.jpg" class="image"><img alt="Chinese military truck, China's 60th anniversary parade.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/51/Chinese_military_truck%2C_China%27s_60th_anniversary_parade.jpg/120px-Chinese_military_truck%2C_China%27s_60th_anniversary_parade.jpg" width="120" height="89" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/51/Chinese_military_truck%2C_China%27s_60th_anniversary_parade.jpg/180px-Chinese_military_truck%2C_China%27s_60th_anniversary_parade.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/51/Chinese_military_truck%2C_China%27s_60th_anniversary_parade.jpg/240px-Chinese_military_truck%2C_China%27s_60th_anniversary_parade.jpg 2x" data-file-width="1600" data-file-height="1181" /></a></td>
<td>Military Heavy</td>
<td>Cabin before engine</td>
<td></td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td>Wanshan Special Vehicle</td>
<td>WS5470</td>
<td><a href="/wiki/File:Chinese_8x8_military_truck.jpg" class="image"><img alt="Chinese 8x8 military truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Chinese_8x8_military_truck.jpg/120px-Chinese_8x8_military_truck.jpg" width="120" height="87" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Chinese_8x8_military_truck.jpg/180px-Chinese_8x8_military_truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Chinese_8x8_military_truck.jpg/240px-Chinese_8x8_military_truck.jpg 2x" data-file-width="1600" data-file-height="1159" /></a></td>
<td>Military Heavy</td>
<td>Cabin before engine</td>
<td></td>
<td>China</td>
<td>China</td>
</tr>
<tr>
<td><a href="/wiki/Western_Star_Trucks" title="Western Star Trucks">Western Star</a></td>
<td>Western Star 4700</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>Western Star 4700SB(Australia, New Zealand)</td>
<td>United States/Canada</td>
<td>North America, Australia, New Zealand</td>
</tr>
<tr>
<td>Western Star</td>
<td>Western Star 4800</td>
<td><a href="/wiki/File:New_Zealand_Trucks_-_Flickr_-_111_Emergency_(11).jpg" class="image"><img alt="New Zealand Trucks - Flickr - 111 Emergency (11).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9b/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2811%29.jpg/120px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2811%29.jpg" width="120" height="75" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9b/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2811%29.jpg/180px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2811%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9b/New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2811%29.jpg/240px-New_Zealand_Trucks_-_Flickr_-_111_Emergency_%2811%29.jpg 2x" data-file-width="1632" data-file-height="1017" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States/Canada</td>
<td>North America</td>
</tr>
<tr>
<td>Western Star</td>
<td>Western Star 4900</td>
<td><a href="/wiki/File:Allens_Western_Star_truck.jpg" class="image"><img alt="Allens Western Star truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Allens_Western_Star_truck.jpg/120px-Allens_Western_Star_truck.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Allens_Western_Star_truck.jpg/180px-Allens_Western_Star_truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Allens_Western_Star_truck.jpg/240px-Allens_Western_Star_truck.jpg 2x" data-file-width="3648" data-file-height="2736" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>Western Star 4800/4900/5800/6900(Australia, New Zealand)</td>
<td>United State/Canada</td>
<td>North America, Australia, New Zealand</td>
</tr>
<tr>
<td>Western Star</td>
<td>Western Star 6900</td>
<td><a href="/wiki/File:Western_Star_6900_XD_6x4_2012.jpg" class="image"><img alt="Western Star 6900 XD 6x4 2012.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Western_Star_6900_XD_6x4_2012.jpg/120px-Western_Star_6900_XD_6x4_2012.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Western_Star_6900_XD_6x4_2012.jpg/180px-Western_Star_6900_XD_6x4_2012.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Western_Star_6900_XD_6x4_2012.jpg/240px-Western_Star_6900_XD_6x4_2012.jpg 2x" data-file-width="1500" data-file-height="1125" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States/Canada</td>
<td>North America</td>
</tr>
<tr>
<td><a href="/wiki/Yulon" title="Yulon">Yulon</a></td>
<td>Yue Loong Homer</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td><a href="/wiki/Nissan_Cabstar" title="Nissan Cabstar">Nissan Cabstar</a>(Europe, Australia, China), Nissan Atlas H43 Series(Malaysia), <a href="/wiki/Nissan_Atlas" title="Nissan Atlas">Nissan Atlas</a>, <a href="/wiki/Renault_Maxity" title="Renault Maxity">Renault Maxity</a>, Renault Samsung SV110, UD Condor, Dong Feng Pahlawan, Isuzu N-Series</td>
<td>Taiwan</td>
<td>Taiwan</td>
</tr>
<tr>
<td><a href="/wiki/Zastava_Trucks" title="Zastava Trucks">Zastava Trucks</a></td>
<td><a href="/w/index.php?title=Zastava_EuroZeta&amp;action=edit&amp;redlink=1" class="new" title="Zastava EuroZeta (page does not exist)">Zastava EuroZeta</a></td>
<td><a href="/wiki/File:Two_fire_engines_of_Perast.jpg" class="image"><img alt="Two fire engines of Perast.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Two_fire_engines_of_Perast.jpg/120px-Two_fire_engines_of_Perast.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Two_fire_engines_of_Perast.jpg/180px-Two_fire_engines_of_Perast.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Two_fire_engines_of_Perast.jpg/240px-Two_fire_engines_of_Perast.jpg 2x" data-file-width="3072" data-file-height="2048" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Serbia</td>
<td>Europe</td>
</tr>
<tr>
<td>Zastava Trucks</td>
<td><a href="/w/index.php?title=Zastava_ZK-_101&amp;action=edit&amp;redlink=1" class="new" title="Zastava ZK- 101 (page does not exist)">Zastava ZK- 101</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Serbia</td>
<td>Europe</td>
</tr>
<tr>
<td><a href="/wiki/ZiL" title="ZiL">ZiL</a></td>
<td>ZIL-4327</td>
<td><a href="/wiki/File:Russian_four_wheel_drive_medium_truck.jpg" class="image"><img alt="Russian four wheel drive medium truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Russian_four_wheel_drive_medium_truck.jpg/120px-Russian_four_wheel_drive_medium_truck.jpg" width="120" height="88" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Russian_four_wheel_drive_medium_truck.jpg/180px-Russian_four_wheel_drive_medium_truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Russian_four_wheel_drive_medium_truck.jpg/240px-Russian_four_wheel_drive_medium_truck.jpg 2x" data-file-width="1944" data-file-height="1424" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Russia</td>
<td>Russia</td>
</tr>
<tr>
<td>ZiL</td>
<td>ZIL-4331</td>
<td><a href="/wiki/File:%D0%A1%D0%B0%D0%BC%D0%BE%D1%81%D0%B2%D0%B0%D0%BB_%D0%97%D0%98%D0%9B.jpg" class="image"><img alt="Самосвал ЗИЛ.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5b/%D0%A1%D0%B0%D0%BC%D0%BE%D1%81%D0%B2%D0%B0%D0%BB_%D0%97%D0%98%D0%9B.jpg/120px-%D0%A1%D0%B0%D0%BC%D0%BE%D1%81%D0%B2%D0%B0%D0%BB_%D0%97%D0%98%D0%9B.jpg" width="120" height="108" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5b/%D0%A1%D0%B0%D0%BC%D0%BE%D1%81%D0%B2%D0%B0%D0%BB_%D0%97%D0%98%D0%9B.jpg/180px-%D0%A1%D0%B0%D0%BC%D0%BE%D1%81%D0%B2%D0%B0%D0%BB_%D0%97%D0%98%D0%9B.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5b/%D0%A1%D0%B0%D0%BC%D0%BE%D1%81%D0%B2%D0%B0%D0%BB_%D0%97%D0%98%D0%9B.jpg/240px-%D0%A1%D0%B0%D0%BC%D0%BE%D1%81%D0%B2%D0%B0%D0%BB_%D0%97%D0%98%D0%9B.jpg 2x" data-file-width="1100" data-file-height="990" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>ZIL-432930, ZIL-433360</td>
<td>Russia</td>
<td>Russia</td>
</tr>
<tr>
<td>ZiL</td>
<td><a href="/w/index.php?title=ZIL-5301&amp;action=edit&amp;redlink=1" class="new" title="ZIL-5301 (page does not exist)">ZIL-5301</a> "Bychok"</td>
<td><a href="/wiki/File:ZIL-5301_dimetilefir_1.JPG" class="image"><img alt="ZIL-5301 dimetilefir 1.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8e/ZIL-5301_dimetilefir_1.JPG/120px-ZIL-5301_dimetilefir_1.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8e/ZIL-5301_dimetilefir_1.JPG/180px-ZIL-5301_dimetilefir_1.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8e/ZIL-5301_dimetilefir_1.JPG/240px-ZIL-5301_dimetilefir_1.JPG 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Russia</td>
<td>Russia, Eastern Europe</td>
</tr>
</table>
<h2><span class="mw-headline" id="Discontinued">Discontinued</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_trucks&amp;action=edit&amp;section=2" title="Edit section: Discontinued">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
<table class="wikitable sortable">
<tr>
<th>Company</th>
<th>Truck</th>
<th class="unsortable">Image</th>
<th>Class</th>
<th>Cabin</th>
<th>Also Called</th>
<th>Country of Origin</th>
<th>Reason(s) to be discontinued</th>
</tr>
<tr>
<td><a href="/wiki/Agricola_(vehicles)" title="Agricola (vehicles)">Argricola</a></td>
<td><a href="/wiki/Agricola_(vehicles)" title="Agricola (vehicles)">Agricola 25 GT 4x4</a></td>
<td></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Greece</td>
<td>Unknown</td>
</tr>
<tr>
<td><a href="/wiki/Alfa_Romeo" title="Alfa Romeo">Alfa Romeo</a></td>
<td><a href="/w/index.php?title=Alfa_Romeo_A15&amp;action=edit&amp;redlink=1" class="new" title="Alfa Romeo A15 (page does not exist)">Alfa Romeo A15</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Alfa Romeo A19<br />
Alfa Romeo A38</td>
<td>Italy</td>
<td>Unknown</td>
</tr>
<tr>
<td>Alfa Romeo</td>
<td><a href="/wiki/Alfa_Romeo_50" title="Alfa Romeo 50">Alfa Romeo 50</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Italy</td>
<td>Unknown</td>
</tr>
<tr>
<td>Alfa Romeo</td>
<td><a href="/wiki/Alfa_Romeo_85" title="Alfa Romeo 85">Alfa Romeo 85</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>Alfa Romeo 110<br />
<a href="/wiki/B%C3%BCssing" title="Büssing">Büssing LS77</a></td>
<td>Italy</td>
<td>Unknown</td>
</tr>
<tr>
<td>Alfa Romeo</td>
<td><a href="/wiki/Alfa_Romeo_350" title="Alfa Romeo 350">Alfa Romeo 350</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Italy</td>
<td>the truck was too heavy and too expensive</td>
</tr>
<tr>
<td>Alfa Romeo</td>
<td><a href="/wiki/Alfa_Romeo_430" title="Alfa Romeo 430">Alfa Romeo 430</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Italy</td>
<td>Unknown</td>
</tr>
<tr>
<td>Alfa Romeo</td>
<td><a href="/w/index.php?title=Alfa_Romeo_900&amp;action=edit&amp;redlink=1" class="new" title="Alfa Romeo 900 (page does not exist)">Alfa Romeo 900</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Italy</td>
<td>Unknown</td>
</tr>
<tr>
<td>Alfa Romeo</td>
<td><a href="/w/index.php?title=Alfa_Romeo_950&amp;action=edit&amp;redlink=1" class="new" title="Alfa Romeo 950 (page does not exist)">Alfa Romeo 950</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Italy</td>
<td>Unknown</td>
</tr>
<tr>
<td>Alfa Romeo</td>
<td><a href="/wiki/Alfa_Romeo_Mille_(truck)" title="Alfa Romeo Mille (truck)">Alfa Romeo Mille</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>Alfa Romeo 1000<br />
<a href="/wiki/F%C3%A1brica_Nacional_de_Motores" title="Fábrica Nacional de Motores">FNM 180 series</a></td>
<td>Italy</td>
<td>Unknown</td>
</tr>
<tr>
<td>Alfa Romeo</td>
<td><a href="/wiki/Alfa_Romeo_500" title="Alfa Romeo 500">Alfa Romeo 500</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Italy</td>
<td>Unknown</td>
</tr>
<tr>
<td>Alfa Romeo</td>
<td><a href="/wiki/Alfa_Romeo_800" title="Alfa Romeo 800">Alfa Romeo 800</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Italy</td>
<td>Replaced by the Alfa Romeo 900</td>
</tr>
<tr>
<td><a href="/wiki/Avia" title="Avia">Avia</a></td>
<td>Avia A15</td>
<td><a href="/wiki/File:Avia_21_hasi%C4%8Di.jpg" class="image"><img alt="Avia 21 hasiči.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/64/Avia_21_hasi%C4%8Di.jpg/120px-Avia_21_hasi%C4%8Di.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/64/Avia_21_hasi%C4%8Di.jpg/180px-Avia_21_hasi%C4%8Di.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/64/Avia_21_hasi%C4%8Di.jpg/240px-Avia_21_hasi%C4%8Di.jpg 2x" data-file-width="2560" data-file-height="1920" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Avia A20, Avia A21</td>
<td>Czechoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Avia</td>
<td>Avia A30</td>
<td><a href="/wiki/File:Avia_A30_(A31)_v_Brn%C4%9B_obr2.jpg" class="image"><img alt="Avia A30 (A31) v Brně obr2.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Avia_A30_%28A31%29_v_Brn%C4%9B_obr2.jpg/120px-Avia_A30_%28A31%29_v_Brn%C4%9B_obr2.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Avia_A30_%28A31%29_v_Brn%C4%9B_obr2.jpg/180px-Avia_A30_%28A31%29_v_Brn%C4%9B_obr2.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Avia_A30_%28A31%29_v_Brn%C4%9B_obr2.jpg/240px-Avia_A30_%28A31%29_v_Brn%C4%9B_obr2.jpg 2x" data-file-width="1200" data-file-height="904" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>Avia A31</td>
<td>Czehoslovakia</td>
<td>replaced to Avia A60/65/75</td>
</tr>
<tr>
<td>Avia</td>
<td>Avia A60/65/75/80</td>
<td><a href="/wiki/File:Ceska_Televize_Support_Truck.jpg" class="image"><img alt="Ceska Televize Support Truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Ceska_Televize_Support_Truck.jpg/120px-Ceska_Televize_Support_Truck.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Ceska_Televize_Support_Truck.jpg/180px-Ceska_Televize_Support_Truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Ceska_Televize_Support_Truck.jpg/240px-Ceska_Televize_Support_Truck.jpg 2x" data-file-width="4000" data-file-height="3000" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Czech Republic</td>
<td>replaced to Avia D Series</td>
</tr>
<tr>
<td><a href="/wiki/Amur_(company)" title="Amur (company)">Amur</a></td>
<td>AMUR-531350</td>
<td><a href="/wiki/File:%D0%97%D0%98%D0%9B-130_%D1%81_%D0%BA%D0%B0%D0%B1%D0%B8%D0%BD%D0%BE%D0%B9_%D0%BE%D1%82_%D0%97%D0%98%D0%9B-131.JPG" class="image"><img alt="ЗИЛ-130 с кабиной от ЗИЛ-131.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/%D0%97%D0%98%D0%9B-130_%D1%81_%D0%BA%D0%B0%D0%B1%D0%B8%D0%BD%D0%BE%D0%B9_%D0%BE%D1%82_%D0%97%D0%98%D0%9B-131.JPG/120px-%D0%97%D0%98%D0%9B-130_%D1%81_%D0%BA%D0%B0%D0%B1%D0%B8%D0%BD%D0%BE%D0%B9_%D0%BE%D1%82_%D0%97%D0%98%D0%9B-131.JPG" width="120" height="89" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/%D0%97%D0%98%D0%9B-130_%D1%81_%D0%BA%D0%B0%D0%B1%D0%B8%D0%BD%D0%BE%D0%B9_%D0%BE%D1%82_%D0%97%D0%98%D0%9B-131.JPG/180px-%D0%97%D0%98%D0%9B-130_%D1%81_%D0%BA%D0%B0%D0%B1%D0%B8%D0%BD%D0%BE%D0%B9_%D0%BE%D1%82_%D0%97%D0%98%D0%9B-131.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0d/%D0%97%D0%98%D0%9B-130_%D1%81_%D0%BA%D0%B0%D0%B1%D0%B8%D0%BD%D0%BE%D0%B9_%D0%BE%D1%82_%D0%97%D0%98%D0%9B-131.JPG/240px-%D0%97%D0%98%D0%9B-130_%D1%81_%D0%BA%D0%B0%D0%B1%D0%B8%D0%BD%D0%BE%D0%B9_%D0%BE%D1%82_%D0%97%D0%98%D0%9B-131.JPG 2x" data-file-width="2619" data-file-height="1933" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Russia</td>
<td>bankruptcy of Amur company</td>
</tr>
<tr>
<td><a href="/wiki/Barkas_(van_manufacturer)" title="Barkas (van manufacturer)">Barkas</a></td>
<td>Barkas B1000</td>
<td><a href="/wiki/File:Barkas_B1000_Pritsche.jpg" class="image"><img alt="Barkas B1000 Pritsche.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/44/Barkas_B1000_Pritsche.jpg/120px-Barkas_B1000_Pritsche.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/44/Barkas_B1000_Pritsche.jpg/180px-Barkas_B1000_Pritsche.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/44/Barkas_B1000_Pritsche.jpg/240px-Barkas_B1000_Pritsche.jpg 2x" data-file-width="2200" data-file-height="1400" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td><a href="/wiki/East_Germany" title="East Germany">East Germany</a></td>
<td>bankruptcy plant</td>
</tr>
<tr>
<td><a href="/wiki/Bering_Truck" title="Bering Truck">Bering Truck</a></td>
<td><a href="/wiki/Bering_Truck" title="Bering Truck">Bering LD15</a></td>
<td><a href="/wiki/File:2000_Bering_LD15.jpg" class="image"><img alt="2000 Bering LD15.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/20/2000_Bering_LD15.jpg/120px-2000_Bering_LD15.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/20/2000_Bering_LD15.jpg/180px-2000_Bering_LD15.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/20/2000_Bering_LD15.jpg/240px-2000_Bering_LD15.jpg 2x" data-file-width="3060" data-file-height="1962" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>United States</td>
<td><a href="/wiki/Daimler-Chrysler" class="mw-redirect" title="Daimler-Chrysler">Daimler-Chrysler</a> forced Bering to cease operations</td>
</tr>
<tr>
<td>Bering Truck</td>
<td><a href="/wiki/Bering_Truck" title="Bering Truck">Bering MD23</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>Bering MD26</td>
<td>United States</td>
<td><a href="/wiki/Daimler-Chrysler" class="mw-redirect" title="Daimler-Chrysler">Daimler-Chrysler</a> forced Bering to cease operations</td>
</tr>
<tr>
<td>Bering Truck</td>
<td><a href="/wiki/Bering_Truck" title="Bering Truck">Bering HDMX</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>United States</td>
<td><a href="/wiki/Daimler-Chrysler" class="mw-redirect" title="Daimler-Chrysler">Daimler-Chrysler</a> forced Bering to cease operations</td>
</tr>
<tr>
<td><a href="/wiki/BMC_(Turkey)" title="BMC (Turkey)">BMC</a></td>
<td><a href="/w/index.php?title=BMC_Megastar&amp;action=edit&amp;redlink=1" class="new" title="BMC Megastar (page does not exist)">BMC Megastar</a></td>
<td><a href="/wiki/File:BMC_Megastar_360_P.jpg" class="image"><img alt="BMC Megastar 360 P.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3a/BMC_Megastar_360_P.jpg/120px-BMC_Megastar_360_P.jpg" width="120" height="75" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3a/BMC_Megastar_360_P.jpg/180px-BMC_Megastar_360_P.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3a/BMC_Megastar_360_P.jpg/240px-BMC_Megastar_360_P.jpg 2x" data-file-width="3306" data-file-height="2061" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Turkey</td>
<td>Unknown</td>
</tr>
<tr>
<td><a href="/wiki/BMC_(Turkey)" title="BMC (Turkey)">BMC</a></td>
<td><a href="/w/index.php?title=BMC_Profesyonel&amp;action=edit&amp;redlink=1" class="new" title="BMC Profesyonel (page does not exist)">BMC Profesyonel</a></td>
<td><a href="/wiki/File:BMC_LKW_(T%C3%BCrkei).jpg" class="image"><img alt="BMC LKW (Türkei).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/61/BMC_LKW_%28T%C3%BCrkei%29.jpg/120px-BMC_LKW_%28T%C3%BCrkei%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/61/BMC_LKW_%28T%C3%BCrkei%29.jpg/180px-BMC_LKW_%28T%C3%BCrkei%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/61/BMC_LKW_%28T%C3%BCrkei%29.jpg/240px-BMC_LKW_%28T%C3%BCrkei%29.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Turkey</td>
<td>Unknown</td>
</tr>
<tr>
<td><a href="/wiki/B%C3%BCssing" title="Büssing">Büssing</a></td>
<td><a href="/wiki/B%C3%BCssing" title="Büssing">Büssing Commodore</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Germany</td>
<td>Unknown</td>
</tr>
<tr>
<td>Büssing</td>
<td><a href="/wiki/B%C3%BCssing" title="Büssing">Büssing BS 16 L</a></td>
<td><a href="/wiki/File:B%C3%BCssing_BS_16_L_Wechselbr%C3%BCcke.JPG" class="image"><img alt="Büssing BS 16 L Wechselbrücke.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a6/B%C3%BCssing_BS_16_L_Wechselbr%C3%BCcke.JPG/120px-B%C3%BCssing_BS_16_L_Wechselbr%C3%BCcke.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a6/B%C3%BCssing_BS_16_L_Wechselbr%C3%BCcke.JPG/180px-B%C3%BCssing_BS_16_L_Wechselbr%C3%BCcke.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a6/B%C3%BCssing_BS_16_L_Wechselbr%C3%BCcke.JPG/240px-B%C3%BCssing_BS_16_L_Wechselbr%C3%BCcke.JPG 2x" data-file-width="2048" data-file-height="1536" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Germany</td>
<td>Unknown</td>
</tr>
<tr>
<td>Büssing</td>
<td><a href="/wiki/B%C3%BCssing" title="Büssing">MAN Büssing</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Germany</td>
<td>Unknown</td>
</tr>
<tr>
<td>Büssing</td>
<td><a href="/wiki/B%C3%BCssing" title="Büssing">Büssing LS 77</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Germany</td>
<td>Unknown</td>
</tr>
<tr>
<td><a href="/wiki/Csepel_(automobile)" title="Csepel (automobile)">Csepel</a></td>
<td>Csepel D350</td>
<td><a href="/wiki/File:Csepel_Hungarian_truck_1955.jpg" class="image"><img alt="Csepel Hungarian truck 1955.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Csepel_Hungarian_truck_1955.jpg/120px-Csepel_Hungarian_truck_1955.jpg" width="120" height="71" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Csepel_Hungarian_truck_1955.jpg/180px-Csepel_Hungarian_truck_1955.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Csepel_Hungarian_truck_1955.jpg/240px-Csepel_Hungarian_truck_1955.jpg 2x" data-file-width="3270" data-file-height="1932" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>Csepel D352</td>
<td>Hungary</td>
<td>unknown</td>
</tr>
<tr>
<td>Csepel</td>
<td>Csepel D400/D420</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Hungary</td>
<td>replaced to Csepel D344</td>
</tr>
<tr>
<td>Csepel</td>
<td>Csepel D450</td>
<td><a href="/wiki/File:Csepel_450.JPG" class="image"><img alt="Csepel 450.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Csepel_450.JPG/120px-Csepel_450.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Csepel_450.JPG/180px-Csepel_450.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Csepel_450.JPG/240px-Csepel_450.JPG 2x" data-file-width="2272" data-file-height="1704" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Hungary</td>
<td>unknown</td>
</tr>
<tr>
<td>Csepel</td>
<td>Csepel D344</td>
<td><a href="/wiki/File:Img_5688_Csepel_D-344.jpg" class="image"><img alt="Img 5688 Csepel D-344.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Img_5688_Csepel_D-344.jpg/120px-Img_5688_Csepel_D-344.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Img_5688_Csepel_D-344.jpg/180px-Img_5688_Csepel_D-344.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Img_5688_Csepel_D-344.jpg/240px-Img_5688_Csepel_D-344.jpg 2x" data-file-width="1037" data-file-height="778" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Hungary</td>
<td>unknown</td>
</tr>
<tr>
<td>Csepel</td>
<td>Csepel 700 Series</td>
<td><a href="/wiki/File:Fotothek_df_n-06_0000037.jpg" class="image"><img alt="Fotothek df n-06 0000037.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Fotothek_df_n-06_0000037.jpg/120px-Fotothek_df_n-06_0000037.jpg" width="120" height="121" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Fotothek_df_n-06_0000037.jpg/180px-Fotothek_df_n-06_0000037.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Fotothek_df_n-06_0000037.jpg/240px-Fotothek_df_n-06_0000037.jpg 2x" data-file-width="775" data-file-height="784" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Hungary</td>
<td>unknown</td>
</tr>
<tr>
<td>Csepel</td>
<td>Csepel D452/D453</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium, Heavy</td>
<td>COE</td>
<td>-</td>
<td>Hungary</td>
<td>unknown</td>
</tr>
<tr>
<td>Csepel</td>
<td>Csepel D708</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td></td>
<td>Hungary</td>
<td>replaced to Csepel D730</td>
</tr>
<tr>
<td>Csepel</td>
<td>Csepel D730</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td></td>
<td>Hungary</td>
<td>unknown</td>
</tr>
<tr>
<td>Csepel</td>
<td>Csepel D717</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td></td>
<td>Hungary</td>
<td>unknown</td>
</tr>
<tr>
<td>Csepel</td>
<td>Csepel D750</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td></td>
<td>Hungary</td>
<td>replaced to Csepel D752 Series</td>
</tr>
<tr>
<td>Csepel</td>
<td>Csepel D752 Series</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td></td>
<td>Hungary</td>
<td>unprofitability</td>
</tr>
<tr>
<td><a href="/wiki/Diamond_T" title="Diamond T">Diamond T</a></td>
<td><a href="/wiki/Diamond_T" title="Diamond T">Diamond T 630</a></td>
<td><a href="/wiki/File:1958_Diamond_T_630.jpg" class="image"><img alt="1958 Diamond T 630.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/1958_Diamond_T_630.jpg/120px-1958_Diamond_T_630.jpg" width="120" height="74" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/1958_Diamond_T_630.jpg/180px-1958_Diamond_T_630.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/89/1958_Diamond_T_630.jpg/240px-1958_Diamond_T_630.jpg 2x" data-file-width="1500" data-file-height="926" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>Merger with Reo Motor Company</td>
</tr>
<tr>
<td>Diamond T</td>
<td><a href="/wiki/Diamond_T" title="Diamond T">Diamond T 969A Wercker</a></td>
<td><a href="/wiki/File:Diamond_T_969A_Wrecker_1943.jpg" class="image"><img alt="Diamond T 969A Wrecker 1943.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Diamond_T_969A_Wrecker_1943.jpg/120px-Diamond_T_969A_Wrecker_1943.jpg" width="120" height="88" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Diamond_T_969A_Wrecker_1943.jpg/180px-Diamond_T_969A_Wrecker_1943.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Diamond_T_969A_Wrecker_1943.jpg/240px-Diamond_T_969A_Wrecker_1943.jpg 2x" data-file-width="800" data-file-height="589" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>Merger with Reo Motor Company</td>
</tr>
<tr>
<td>Ernst Grube</td>
<td>Ernst Grube H6</td>
<td><a href="/wiki/File:IFA_H6_Kipper_(gr%C3%BCn).jpg" class="image"><img alt="IFA H6 Kipper (grün).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f4/IFA_H6_Kipper_%28gr%C3%BCn%29.jpg/120px-IFA_H6_Kipper_%28gr%C3%BCn%29.jpg" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f4/IFA_H6_Kipper_%28gr%C3%BCn%29.jpg/180px-IFA_H6_Kipper_%28gr%C3%BCn%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f4/IFA_H6_Kipper_%28gr%C3%BCn%29.jpg/240px-IFA_H6_Kipper_%28gr%C3%BCn%29.jpg 2x" data-file-width="1428" data-file-height="925" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>East Germany</td>
<td>unknown</td>
</tr>
<tr>
<td>Ernst Grube</td>
<td>Sachsenring S4000-1</td>
<td><a href="/wiki/File:IFA_S4000-1_Pritsche_mit_Plane.jpg" class="image"><img alt="IFA S4000-1 Pritsche mit Plane.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b7/IFA_S4000-1_Pritsche_mit_Plane.jpg/120px-IFA_S4000-1_Pritsche_mit_Plane.jpg" width="120" height="88" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b7/IFA_S4000-1_Pritsche_mit_Plane.jpg/180px-IFA_S4000-1_Pritsche_mit_Plane.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b7/IFA_S4000-1_Pritsche_mit_Plane.jpg/240px-IFA_S4000-1_Pritsche_mit_Plane.jpg 2x" data-file-width="1613" data-file-height="1184" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>East Germany</td>
<td>replaced to IFA W50</td>
</tr>
<tr>
<td>Ernst Grube</td>
<td>Ernst Grube G5</td>
<td><a href="/wiki/File:16._IFA_Oldtimertreffen_Werdau_2013,_Germany_(8718958870).jpg" class="image"><img alt="16. IFA Oldtimertreffen Werdau 2013, Germany (8718958870).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/35/16._IFA_Oldtimertreffen_Werdau_2013%2C_Germany_%288718958870%29.jpg/120px-16._IFA_Oldtimertreffen_Werdau_2013%2C_Germany_%288718958870%29.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/35/16._IFA_Oldtimertreffen_Werdau_2013%2C_Germany_%288718958870%29.jpg/180px-16._IFA_Oldtimertreffen_Werdau_2013%2C_Germany_%288718958870%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/35/16._IFA_Oldtimertreffen_Werdau_2013%2C_Germany_%288718958870%29.jpg/240px-16._IFA_Oldtimertreffen_Werdau_2013%2C_Germany_%288718958870%29.jpg 2x" data-file-width="5184" data-file-height="3456" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>East Germany</td>
<td>unknown</td>
</tr>
<tr>
<td><a href="/wiki/Fabrika_automobila_Priboj" title="Fabrika automobila Priboj">Fabrika automobila Priboj</a> (FAP)</td>
<td>FAP 13.14</td>
<td><a href="/wiki/File:Fire_engine_in_Perast.jpg" class="image"><img alt="Fire engine in Perast.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/97/Fire_engine_in_Perast.jpg/120px-Fire_engine_in_Perast.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/97/Fire_engine_in_Perast.jpg/180px-Fire_engine_in_Perast.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/97/Fire_engine_in_Perast.jpg/240px-Fire_engine_in_Perast.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>FAP 16.20</td>
<td>Yugoslavia</td>
<td>unknown</td>
</tr>
<tr>
<td>FAP</td>
<td>FAP 18.20</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Yugoslavia</td>
<td>unknown</td>
</tr>
<tr>
<td>FAP</td>
<td>FAP 22.22</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Yugoslavia</td>
<td>unknown</td>
</tr>
<tr>
<td>FAP</td>
<td>FAP 19.21</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Yugoslavia</td>
<td>unknown</td>
</tr>
<tr>
<td>FAP</td>
<td>FAP 19.215</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Yugoslavia</td>
<td>unknown</td>
</tr>
<tr>
<td>FAP</td>
<td>FAP 15.16/15.20</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Yugoslavia</td>
<td>unknown</td>
</tr>
<tr>
<td>FAP</td>
<td>FAP 10.16</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Yugoslavia</td>
<td>unknown</td>
</tr>
<tr>
<td>FAP</td>
<td>FAP 1213/1216</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Yugoslavia</td>
<td>unknown</td>
</tr>
<tr>
<td>FAP</td>
<td>FAP 1620</td>
<td><a href="/wiki/File:FAP_1620_3.jpg" class="image"><img alt="FAP 1620 3.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/47/FAP_1620_3.jpg/120px-FAP_1620_3.jpg" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/47/FAP_1620_3.jpg/180px-FAP_1620_3.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/47/FAP_1620_3.jpg/240px-FAP_1620_3.jpg 2x" data-file-width="2792" data-file-height="2012" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Yugoslavia</td>
<td>unknown</td>
</tr>
<tr>
<td><a href="/wiki/Fabryka_Samochod%C3%B3w_Ci%C4%99%C5%BCarowych" class="mw-redirect" title="Fabryka Samochodów Ciężarowych">Fabryka Samochodów Ciężarowych</a> (FSC)</td>
<td><a href="/wiki/FSC_%C5%BBuk" title="FSC Żuk">FSC Żuk</a></td>
<td><a href="/wiki/File:FSC_%C5%BBuk_A-09-A-11_on_Oskara_Kolberga_street_in_Krak%C3%B3w_(1).jpg" class="image"><img alt="FSC Żuk A-09-A-11 on Oskara Kolberga street in Kraków (1).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ab/FSC_%C5%BBuk_A-09-A-11_on_Oskara_Kolberga_street_in_Krak%C3%B3w_%281%29.jpg/120px-FSC_%C5%BBuk_A-09-A-11_on_Oskara_Kolberga_street_in_Krak%C3%B3w_%281%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ab/FSC_%C5%BBuk_A-09-A-11_on_Oskara_Kolberga_street_in_Krak%C3%B3w_%281%29.jpg/180px-FSC_%C5%BBuk_A-09-A-11_on_Oskara_Kolberga_street_in_Krak%C3%B3w_%281%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ab/FSC_%C5%BBuk_A-09-A-11_on_Oskara_Kolberga_street_in_Krak%C3%B3w_%281%29.jpg/240px-FSC_%C5%BBuk_A-09-A-11_on_Oskara_Kolberga_street_in_Krak%C3%B3w_%281%29.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Poland</td>
<td>replaced to <a href="/wiki/FSC_Lublin" title="FSC Lublin">FSC Lublin</a></td>
</tr>
<tr>
<td>FSC</td>
<td><a href="/wiki/FSC_Lublin" title="FSC Lublin">FSC Lublin</a></td>
<td><a href="/wiki/File:Red_FS_Lublin_on_Grunwaldzkie_roundabout_in_Krak%C3%B3w_(2).jpg" class="image"><img alt="Red FS Lublin on Grunwaldzkie roundabout in Kraków (2).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/df/Red_FS_Lublin_on_Grunwaldzkie_roundabout_in_Krak%C3%B3w_%282%29.jpg/120px-Red_FS_Lublin_on_Grunwaldzkie_roundabout_in_Krak%C3%B3w_%282%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/df/Red_FS_Lublin_on_Grunwaldzkie_roundabout_in_Krak%C3%B3w_%282%29.jpg/180px-Red_FS_Lublin_on_Grunwaldzkie_roundabout_in_Krak%C3%B3w_%282%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/df/Red_FS_Lublin_on_Grunwaldzkie_roundabout_in_Krak%C3%B3w_%282%29.jpg/240px-Red_FS_Lublin_on_Grunwaldzkie_roundabout_in_Krak%C3%B3w_%282%29.jpg 2x" data-file-width="2592" data-file-height="1944" /></a><br />
<a href="/wiki/File:Red_Daewoo_Lublin_II_in_Krak%C3%B3w.jpg" class="image"><img alt="Red Daewoo Lublin II in Kraków.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/46/Red_Daewoo_Lublin_II_in_Krak%C3%B3w.jpg/120px-Red_Daewoo_Lublin_II_in_Krak%C3%B3w.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/46/Red_Daewoo_Lublin_II_in_Krak%C3%B3w.jpg/180px-Red_Daewoo_Lublin_II_in_Krak%C3%B3w.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/46/Red_Daewoo_Lublin_II_in_Krak%C3%B3w.jpg/240px-Red_Daewoo_Lublin_II_in_Krak%C3%B3w.jpg 2x" data-file-width="2592" data-file-height="1944" /></a><br />
<a href="/wiki/File:Intrall_Lublin_3MI_on_Adama_Mickiewicza,_Zygmunta_Krasi%C5%84skiego,_Marsza%C5%82ka_J%C3%B3zefa_Pi%C5%82sudskiego_and_Marsza%C5%82ka_Ferdinanda_Focha_intersection_in_Krak%C3%B3w.jpg" class="image"><img alt="Intrall Lublin 3MI on Adama Mickiewicza, Zygmunta Krasińskiego, Marszałka Józefa Piłsudskiego and Marszałka Ferdinanda Focha intersection in Kraków.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Intrall_Lublin_3MI_on_Adama_Mickiewicza%2C_Zygmunta_Krasi%C5%84skiego%2C_Marsza%C5%82ka_J%C3%B3zefa_Pi%C5%82sudskiego_and_Marsza%C5%82ka_Ferdinanda_Focha_intersection_in_Krak%C3%B3w.jpg/120px-Intrall_Lublin_3MI_on_Adama_Mickiewicza%2C_Zygmunta_Krasi%C5%84skiego%2C_Marsza%C5%82ka_J%C3%B3zefa_Pi%C5%82sudskiego_and_Marsza%C5%82ka_Ferdinanda_Focha_intersection_in_Krak%C3%B3w.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Intrall_Lublin_3MI_on_Adama_Mickiewicza%2C_Zygmunta_Krasi%C5%84skiego%2C_Marsza%C5%82ka_J%C3%B3zefa_Pi%C5%82sudskiego_and_Marsza%C5%82ka_Ferdinanda_Focha_intersection_in_Krak%C3%B3w.jpg/180px-Intrall_Lublin_3MI_on_Adama_Mickiewicza%2C_Zygmunta_Krasi%C5%84skiego%2C_Marsza%C5%82ka_J%C3%B3zefa_Pi%C5%82sudskiego_and_Marsza%C5%82ka_Ferdinanda_Focha_intersection_in_Krak%C3%B3w.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Intrall_Lublin_3MI_on_Adama_Mickiewicza%2C_Zygmunta_Krasi%C5%84skiego%2C_Marsza%C5%82ka_J%C3%B3zefa_Pi%C5%82sudskiego_and_Marsza%C5%82ka_Ferdinanda_Focha_intersection_in_Krak%C3%B3w.jpg/240px-Intrall_Lublin_3MI_on_Adama_Mickiewicza%2C_Zygmunta_Krasi%C5%84skiego%2C_Marsza%C5%82ka_J%C3%B3zefa_Pi%C5%82sudskiego_and_Marsza%C5%82ka_Ferdinanda_Focha_intersection_in_Krak%C3%B3w.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Poland</td>
<td>bankruptcy</td>
</tr>
<tr>
<td><a href="/wiki/FSC_Star" title="FSC Star">FSC Star</a></td>
<td>Star 20</td>
<td><a href="/wiki/File:FSC_Star_W-14.jpg" class="image"><img alt="FSC Star W-14.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/79/FSC_Star_W-14.jpg/120px-FSC_Star_W-14.jpg" width="120" height="60" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/79/FSC_Star_W-14.jpg/180px-FSC_Star_W-14.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/79/FSC_Star_W-14.jpg/240px-FSC_Star_W-14.jpg 2x" data-file-width="717" data-file-height="357" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>Star W14, Star C60</td>
<td>Poland</td>
<td>replaced to Star 21</td>
</tr>
<tr>
<td>FSC Star</td>
<td>Star 21</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Poland</td>
<td>replaced to Star 25</td>
</tr>
<tr>
<td>FSC Star</td>
<td>Star 66</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td></td>
<td>Poland</td>
<td>replaced to Star 660</td>
</tr>
<tr>
<td>FSC Star</td>
<td>Star 25</td>
<td><a href="/wiki/File:Star_25_truck_in_Toru%C5%84,_August_1990.jpg" class="image"><img alt="Star 25 truck in Toruń, August 1990.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Star_25_truck_in_Toru%C5%84%2C_August_1990.jpg/120px-Star_25_truck_in_Toru%C5%84%2C_August_1990.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/Star_25_truck_in_Toru%C5%84%2C_August_1990.jpg/180px-Star_25_truck_in_Toru%C5%84%2C_August_1990.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/27/Star_25_truck_in_Toru%C5%84%2C_August_1990.jpg/240px-Star_25_truck_in_Toru%C5%84%2C_August_1990.jpg 2x" data-file-width="2399" data-file-height="1599" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>Star C25, Star 25L, Star W25, Star 3W25</td>
<td>Poland</td>
<td>replaced to Star 27</td>
</tr>
<tr>
<td>FSC Star</td>
<td>Star 27</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium, Heavy</td>
<td>COE</td>
<td>Star A83, Star A88</td>
<td>Poland</td>
<td>replaced to Star 28 and Star 29</td>
</tr>
<tr>
<td>FSC Star</td>
<td>Star 660</td>
<td><a href="/wiki/File:Star_660_truck_in_Legnica.jpg" class="image"><img alt="Star 660 truck in Legnica.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Star_660_truck_in_Legnica.jpg/120px-Star_660_truck_in_Legnica.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Star_660_truck_in_Legnica.jpg/180px-Star_660_truck_in_Legnica.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Star_660_truck_in_Legnica.jpg/240px-Star_660_truck_in_Legnica.jpg 2x" data-file-width="2399" data-file-height="1599" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Poland</td>
<td>replaced to Star 266</td>
</tr>
<tr>
<td>FSC Star</td>
<td>Star 28/29</td>
<td><a href="/wiki/File:STAR_28_1969.jpg" class="image"><img alt="STAR 28 1969.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/08/STAR_28_1969.jpg/120px-STAR_28_1969.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/08/STAR_28_1969.jpg/180px-STAR_28_1969.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/08/STAR_28_1969.jpg/240px-STAR_28_1969.jpg 2x" data-file-width="2560" data-file-height="1920" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Poland</td>
<td>replaced to Star 200</td>
</tr>
<tr>
<td>FSC Star</td>
<td>Star 200</td>
<td><a href="/wiki/File:Star_200_on_Josepha_Conrada_street_in_Krak%C3%B3w.jpg" class="image"><img alt="Star 200 on Josepha Conrada street in Kraków.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Star_200_on_Josepha_Conrada_street_in_Krak%C3%B3w.jpg/120px-Star_200_on_Josepha_Conrada_street_in_Krak%C3%B3w.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Star_200_on_Josepha_Conrada_street_in_Krak%C3%B3w.jpg/180px-Star_200_on_Josepha_Conrada_street_in_Krak%C3%B3w.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Star_200_on_Josepha_Conrada_street_in_Krak%C3%B3w.jpg/240px-Star_200_on_Josepha_Conrada_street_in_Krak%C3%B3w.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>Star 200L, Star C200</td>
<td>Poland</td>
<td>replaced to Star 1142</td>
</tr>
<tr>
<td>FSC Star</td>
<td>Star 244</td>
<td><a href="/wiki/File:STAR_PODNOSNIK_KOSZOWY.jpg" class="image"><img alt="STAR PODNOSNIK KOSZOWY.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/40/STAR_PODNOSNIK_KOSZOWY.jpg/120px-STAR_PODNOSNIK_KOSZOWY.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/40/STAR_PODNOSNIK_KOSZOWY.jpg/180px-STAR_PODNOSNIK_KOSZOWY.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/40/STAR_PODNOSNIK_KOSZOWY.jpg/240px-STAR_PODNOSNIK_KOSZOWY.jpg 2x" data-file-width="1568" data-file-height="1176" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>Star 3W244, Star 244RS</td>
<td>Poland</td>
<td>unknown</td>
</tr>
<tr>
<td>FSC Star</td>
<td>Star 266</td>
<td><a href="/wiki/File:Star_266-based_cherry_picker_during_reconstruction_of_D%C5%82uga_street_in_Krak%C3%B3w_(8).jpg" class="image"><img alt="Star 266-based cherry picker during reconstruction of Długa street in Kraków (8).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Star_266-based_cherry_picker_during_reconstruction_of_D%C5%82uga_street_in_Krak%C3%B3w_%288%29.jpg/120px-Star_266-based_cherry_picker_during_reconstruction_of_D%C5%82uga_street_in_Krak%C3%B3w_%288%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Star_266-based_cherry_picker_during_reconstruction_of_D%C5%82uga_street_in_Krak%C3%B3w_%288%29.jpg/180px-Star_266-based_cherry_picker_during_reconstruction_of_D%C5%82uga_street_in_Krak%C3%B3w_%288%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Star_266-based_cherry_picker_during_reconstruction_of_D%C5%82uga_street_in_Krak%C3%B3w_%288%29.jpg/240px-Star_266-based_cherry_picker_during_reconstruction_of_D%C5%82uga_street_in_Krak%C3%B3w_%288%29.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Poland</td>
<td>unknown</td>
</tr>
<tr>
<td>FSC Star</td>
<td>Star 742</td>
<td><a href="/wiki/File:Star742.JPG" class="image"><img alt="Star742.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Star742.JPG/120px-Star742.JPG" width="120" height="87" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Star742.JPG/180px-Star742.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Star742.JPG/240px-Star742.JPG 2x" data-file-width="3482" data-file-height="2522" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Poland</td>
<td>unknown</td>
</tr>
<tr>
<td>FSC Star</td>
<td>Star 744</td>
<td><a href="/wiki/File:Star_741.JPG" class="image"><img alt="Star 741.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Star_741.JPG/120px-Star_741.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Star_741.JPG/180px-Star_741.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Star_741.JPG/240px-Star_741.JPG 2x" data-file-width="2272" data-file-height="1704" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Poland</td>
<td>unknown</td>
</tr>
<tr>
<td>FSC Star</td>
<td>Star 1142</td>
<td><a href="/wiki/File:White_Star_1142_on_Adama_Mickiewicza,_Zygmunta_Krasi%C5%84skiego,_Marsza%C5%82ka_J%C3%B3zefa_Pi%C5%82sudskiego_and_Marsza%C5%82ka_Ferdinanda_Focha_intersection_in_Krak%C3%B3w.jpg" class="image"><img alt="White Star 1142 on Adama Mickiewicza, Zygmunta Krasińskiego, Marszałka Józefa Piłsudskiego and Marszałka Ferdinanda Focha intersection in Kraków.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e2/White_Star_1142_on_Adama_Mickiewicza%2C_Zygmunta_Krasi%C5%84skiego%2C_Marsza%C5%82ka_J%C3%B3zefa_Pi%C5%82sudskiego_and_Marsza%C5%82ka_Ferdinanda_Focha_intersection_in_Krak%C3%B3w.jpg/120px-White_Star_1142_on_Adama_Mickiewicza%2C_Zygmunta_Krasi%C5%84skiego%2C_Marsza%C5%82ka_J%C3%B3zefa_Pi%C5%82sudskiego_and_Marsza%C5%82ka_Ferdinanda_Focha_intersection_in_Krak%C3%B3w.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e2/White_Star_1142_on_Adama_Mickiewicza%2C_Zygmunta_Krasi%C5%84skiego%2C_Marsza%C5%82ka_J%C3%B3zefa_Pi%C5%82sudskiego_and_Marsza%C5%82ka_Ferdinanda_Focha_intersection_in_Krak%C3%B3w.jpg/180px-White_Star_1142_on_Adama_Mickiewicza%2C_Zygmunta_Krasi%C5%84skiego%2C_Marsza%C5%82ka_J%C3%B3zefa_Pi%C5%82sudskiego_and_Marsza%C5%82ka_Ferdinanda_Focha_intersection_in_Krak%C3%B3w.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e2/White_Star_1142_on_Adama_Mickiewicza%2C_Zygmunta_Krasi%C5%84skiego%2C_Marsza%C5%82ka_J%C3%B3zefa_Pi%C5%82sudskiego_and_Marsza%C5%82ka_Ferdinanda_Focha_intersection_in_Krak%C3%B3w.jpg/240px-White_Star_1142_on_Adama_Mickiewicza%2C_Zygmunta_Krasi%C5%84skiego%2C_Marsza%C5%82ka_J%C3%B3zefa_Pi%C5%82sudskiego_and_Marsza%C5%82ka_Ferdinanda_Focha_intersection_in_Krak%C3%B3w.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>Star 1142T, Star C1142T</td>
<td>Poland</td>
<td>unknown</td>
</tr>
<tr>
<td>FSC Star</td>
<td>Star 8.125</td>
<td><a href="/wiki/File:Star_8.125_truck_on_Adama_Mickiewicza_avenue_in_Krak%C3%B3w.jpg" class="image"><img alt="Star 8.125 truck on Adama Mickiewicza avenue in Kraków.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Star_8.125_truck_on_Adama_Mickiewicza_avenue_in_Krak%C3%B3w.jpg/120px-Star_8.125_truck_on_Adama_Mickiewicza_avenue_in_Krak%C3%B3w.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Star_8.125_truck_on_Adama_Mickiewicza_avenue_in_Krak%C3%B3w.jpg/180px-Star_8.125_truck_on_Adama_Mickiewicza_avenue_in_Krak%C3%B3w.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Star_8.125_truck_on_Adama_Mickiewicza_avenue_in_Krak%C3%B3w.jpg/240px-Star_8.125_truck_on_Adama_Mickiewicza_avenue_in_Krak%C3%B3w.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Poland</td>
<td>Membership in the <a href="/wiki/MAN_Nutzfahrzeuge" class="mw-redirect" title="MAN Nutzfahrzeuge">MAN Nutzfahrzeuge</a> group</td>
</tr>
<tr>
<td>FSC Star</td>
<td>Star 12.157</td>
<td><a href="/wiki/File:Star_12.155_of_Pocztex_on_Zygmunta_Krasi%C5%84skiego_avenue_in_Krak%C3%B3w.jpg" class="image"><img alt="Star 12.155 of Pocztex on Zygmunta Krasińskiego avenue in Kraków.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/98/Star_12.155_of_Pocztex_on_Zygmunta_Krasi%C5%84skiego_avenue_in_Krak%C3%B3w.jpg/120px-Star_12.155_of_Pocztex_on_Zygmunta_Krasi%C5%84skiego_avenue_in_Krak%C3%B3w.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/98/Star_12.155_of_Pocztex_on_Zygmunta_Krasi%C5%84skiego_avenue_in_Krak%C3%B3w.jpg/180px-Star_12.155_of_Pocztex_on_Zygmunta_Krasi%C5%84skiego_avenue_in_Krak%C3%B3w.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/98/Star_12.155_of_Pocztex_on_Zygmunta_Krasi%C5%84skiego_avenue_in_Krak%C3%B3w.jpg/240px-Star_12.155_of_Pocztex_on_Zygmunta_Krasi%C5%84skiego_avenue_in_Krak%C3%B3w.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Poland</td>
<td>Membership in the MAN Nutzfahrzeuge group</td>
</tr>
<tr>
<td>Star</td>
<td>Star S2000</td>
<td><a href="/wiki/File:Star_12.227_truck_of_Pocztex_on_Taduesza_Ko%C5%9Bciuszki_and_Mickiewicza_intersection_in_Krak%C3%B3w.jpg" class="image"><img alt="Star 12.227 truck of Pocztex on Taduesza Kościuszki and Mickiewicza intersection in Kraków.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Star_12.227_truck_of_Pocztex_on_Taduesza_Ko%C5%9Bciuszki_and_Mickiewicza_intersection_in_Krak%C3%B3w.jpg/120px-Star_12.227_truck_of_Pocztex_on_Taduesza_Ko%C5%9Bciuszki_and_Mickiewicza_intersection_in_Krak%C3%B3w.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Star_12.227_truck_of_Pocztex_on_Taduesza_Ko%C5%9Bciuszki_and_Mickiewicza_intersection_in_Krak%C3%B3w.jpg/180px-Star_12.227_truck_of_Pocztex_on_Taduesza_Ko%C5%9Bciuszki_and_Mickiewicza_intersection_in_Krak%C3%B3w.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Star_12.227_truck_of_Pocztex_on_Taduesza_Ko%C5%9Bciuszki_and_Mickiewicza_intersection_in_Krak%C3%B3w.jpg/240px-Star_12.227_truck_of_Pocztex_on_Taduesza_Ko%C5%9Bciuszki_and_Mickiewicza_intersection_in_Krak%C3%B3w.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Poland</td>
<td>factory became a branch of the MAN and began producing buses</td>
</tr>
<tr>
<td>Star</td>
<td>Star 14.227</td>
<td><a href="/wiki/File:Star_14.227_of_MPK_Krak%C3%B3w_on_Marsza%C5%82ka_Ferdinanda_Focha_avenue_in_Krak%C3%B3w.jpg" class="image"><img alt="Star 14.227 of MPK Kraków on Marszałka Ferdinanda Focha avenue in Kraków.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/69/Star_14.227_of_MPK_Krak%C3%B3w_on_Marsza%C5%82ka_Ferdinanda_Focha_avenue_in_Krak%C3%B3w.jpg/120px-Star_14.227_of_MPK_Krak%C3%B3w_on_Marsza%C5%82ka_Ferdinanda_Focha_avenue_in_Krak%C3%B3w.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/69/Star_14.227_of_MPK_Krak%C3%B3w_on_Marsza%C5%82ka_Ferdinanda_Focha_avenue_in_Krak%C3%B3w.jpg/180px-Star_14.227_of_MPK_Krak%C3%B3w_on_Marsza%C5%82ka_Ferdinanda_Focha_avenue_in_Krak%C3%B3w.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/69/Star_14.227_of_MPK_Krak%C3%B3w_on_Marsza%C5%82ka_Ferdinanda_Focha_avenue_in_Krak%C3%B3w.jpg/240px-Star_14.227_of_MPK_Krak%C3%B3w_on_Marsza%C5%82ka_Ferdinanda_Focha_avenue_in_Krak%C3%B3w.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Poland</td>
<td>factory became a branch of the MAN and began producing buses</td>
</tr>
<tr>
<td><a href="/wiki/GAZ" title="GAZ">GAZ</a></td>
<td><a href="/wiki/GAZ_AA" class="mw-redirect" title="GAZ AA">GAZ AA</a></td>
<td><a href="/wiki/File:Myshkin_Museum_unique_technology_GAZ-AA_IMG_1595_1725.jpg" class="image"><img alt="Myshkin Museum unique technology GAZ-AA IMG 1595 1725.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/98/Myshkin_Museum_unique_technology_GAZ-AA_IMG_1595_1725.jpg/120px-Myshkin_Museum_unique_technology_GAZ-AA_IMG_1595_1725.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/98/Myshkin_Museum_unique_technology_GAZ-AA_IMG_1595_1725.jpg/180px-Myshkin_Museum_unique_technology_GAZ-AA_IMG_1595_1725.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/98/Myshkin_Museum_unique_technology_GAZ-AA_IMG_1595_1725.jpg/240px-Myshkin_Museum_unique_technology_GAZ-AA_IMG_1595_1725.jpg 2x" data-file-width="2588" data-file-height="1725" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>GAZ MM</td>
<td>USSR</td>
<td>replaced to <a href="/wiki/GAZ-51" title="GAZ-51">GAZ-51</a></td>
</tr>
<tr>
<td>GAZ</td>
<td><a href="/wiki/GAZ-AAA" class="mw-redirect" title="GAZ-AAA">GAZ-AAA</a></td>
<td><a href="/wiki/File:%D0%93%D0%90%D0%97-%D0%90%D0%90%D0%90_%D0%B2%D0%BE_%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%B2%D0%BE%D1%81%D1%82%D0%BE%D0%BA%D0%B5_%D1%845.JPG" class="image"><img alt="ГАЗ-ААА во Владивостоке ф5.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/44/%D0%93%D0%90%D0%97-%D0%90%D0%90%D0%90_%D0%B2%D0%BE_%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%B2%D0%BE%D1%81%D1%82%D0%BE%D0%BA%D0%B5_%D1%845.JPG/120px-%D0%93%D0%90%D0%97-%D0%90%D0%90%D0%90_%D0%B2%D0%BE_%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%B2%D0%BE%D1%81%D1%82%D0%BE%D0%BA%D0%B5_%D1%845.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/44/%D0%93%D0%90%D0%97-%D0%90%D0%90%D0%90_%D0%B2%D0%BE_%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%B2%D0%BE%D1%81%D1%82%D0%BE%D0%BA%D0%B5_%D1%845.JPG/180px-%D0%93%D0%90%D0%97-%D0%90%D0%90%D0%90_%D0%B2%D0%BE_%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%B2%D0%BE%D1%81%D1%82%D0%BE%D0%BA%D0%B5_%D1%845.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/44/%D0%93%D0%90%D0%97-%D0%90%D0%90%D0%90_%D0%B2%D0%BE_%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%B2%D0%BE%D1%81%D1%82%D0%BE%D0%BA%D0%B5_%D1%845.JPG/240px-%D0%93%D0%90%D0%97-%D0%90%D0%90%D0%90_%D0%B2%D0%BE_%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%B2%D0%BE%D1%81%D1%82%D0%BE%D0%BA%D0%B5_%D1%845.JPG 2x" data-file-width="4608" data-file-height="3456" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td>discontinued because of the bombing of the plant during the <a href="/wiki/Great_Patriotic_War" class="mw-redirect" title="Great Patriotic War">Great Patriotic War</a></td>
</tr>
<tr>
<td>GAZ</td>
<td><a href="/wiki/GAZ-51" title="GAZ-51">GAZ-51</a></td>
<td><a href="/wiki/File:GAZ-51_%C5%BB%C3%B3%C5%82kiew_2008_(cropped).jpg" class="image"><img alt="GAZ-51 Żółkiew 2008 (cropped).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/19/GAZ-51_%C5%BB%C3%B3%C5%82kiew_2008_%28cropped%29.jpg/120px-GAZ-51_%C5%BB%C3%B3%C5%82kiew_2008_%28cropped%29.jpg" width="120" height="87" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/19/GAZ-51_%C5%BB%C3%B3%C5%82kiew_2008_%28cropped%29.jpg/180px-GAZ-51_%C5%BB%C3%B3%C5%82kiew_2008_%28cropped%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/19/GAZ-51_%C5%BB%C3%B3%C5%82kiew_2008_%28cropped%29.jpg/240px-GAZ-51_%C5%BB%C3%B3%C5%82kiew_2008_%28cropped%29.jpg 2x" data-file-width="2427" data-file-height="1764" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td><a href="/wiki/FSC_Lublin" title="FSC Lublin">FSC Lublin-51</a>, <a href="/wiki/Sungri_Motor_Plant" title="Sungri Motor Plant">Sungri-51</a>, <a href="/wiki/Yuejin" class="mw-redirect" title="Yuejin">Yuejin NJ130</a></td>
<td>USSR</td>
<td>replaced to <a href="/wiki/GAZ-53" title="GAZ-53">GAZ-52/ 53</a></td>
</tr>
<tr>
<td>GAZ</td>
<td><a href="/wiki/GAZ-63" title="GAZ-63">GAZ-63</a></td>
<td><a href="/wiki/File:GAZ-63_truck.jpg" class="image"><img alt="GAZ-63 truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/GAZ-63_truck.jpg/120px-GAZ-63_truck.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/GAZ-63_truck.jpg/180px-GAZ-63_truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d1/GAZ-63_truck.jpg/240px-GAZ-63_truck.jpg 2x" data-file-width="3287" data-file-height="2469" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td><a href="/wiki/Sungri_Motor_Plant" title="Sungri Motor Plant">Sungri-58</a></td>
<td>USSR</td>
<td>replaced to <a href="/wiki/GAZ-66" title="GAZ-66">GAZ-66</a></td>
</tr>
<tr>
<td>GAZ</td>
<td><a href="/w/index.php?title=GAZ_-53&amp;action=edit&amp;redlink=1" class="new" title="GAZ -53 (page does not exist)">GAZ -52 /53</a></td>
<td><a href="/wiki/File:Gaz53_kirov.jpg" class="image"><img alt="Gaz53 kirov.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/97/Gaz53_kirov.jpg/120px-Gaz53_kirov.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/97/Gaz53_kirov.jpg/180px-Gaz53_kirov.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/97/Gaz53_kirov.jpg/240px-Gaz53_kirov.jpg 2x" data-file-width="2272" data-file-height="1704" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td>replaced to <a href="/wiki/GAZ_3307_/3309" class="mw-redirect" title="GAZ 3307 /3309">GAZ 3307 /3309</a></td>
</tr>
<tr>
<td>GAZ</td>
<td><a href="/wiki/GAZ-66" title="GAZ-66">GAZ-66</a></td>
<td><a href="/wiki/File:%D0%93%D0%90%D0%97-66_%D0%B2_%D0%A5%D0%B0%D0%B1%D0%B0%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B5.JPG" class="image"><img alt="ГАЗ-66 в Хабаровске.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b2/%D0%93%D0%90%D0%97-66_%D0%B2_%D0%A5%D0%B0%D0%B1%D0%B0%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B5.JPG/120px-%D0%93%D0%90%D0%97-66_%D0%B2_%D0%A5%D0%B0%D0%B1%D0%B0%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B5.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b2/%D0%93%D0%90%D0%97-66_%D0%B2_%D0%A5%D0%B0%D0%B1%D0%B0%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B5.JPG/180px-%D0%93%D0%90%D0%97-66_%D0%B2_%D0%A5%D0%B0%D0%B1%D0%B0%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B5.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b2/%D0%93%D0%90%D0%97-66_%D0%B2_%D0%A5%D0%B0%D0%B1%D0%B0%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B5.JPG/240px-%D0%93%D0%90%D0%97-66_%D0%B2_%D0%A5%D0%B0%D0%B1%D0%B0%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B5.JPG 2x" data-file-width="3648" data-file-height="2736" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>USSR</td>
<td>replaced to <a href="/wiki/GAZ_Sadko" title="GAZ Sadko">GAZ 3308 Sadko</a></td>
</tr>
<tr>
<td><a href="/wiki/Horch" title="Horch">Horch</a></td>
<td>Horch H3</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>East Germany</td>
<td>replaced to Horch H3A</td>
</tr>
<tr>
<td>Horch</td>
<td>Horch H3A</td>
<td><a href="/wiki/File:Horch_H3A.jpg" class="image"><img alt="Horch H3A.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Horch_H3A.jpg/120px-Horch_H3A.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Horch_H3A.jpg/180px-Horch_H3A.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Horch_H3A.jpg/240px-Horch_H3A.jpg 2x" data-file-width="2288" data-file-height="1712" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>East Germany</td>
<td>plant renamed Sachsenring</td>
</tr>
<tr>
<td><a href="/wiki/Industrieverband_Fahrzeugbau" title="Industrieverband Fahrzeugbau">Industrieverband Fahrzeugbau</a> (IFA), <a href="/wiki/Industriewerke_Ludwigsfelde" title="Industriewerke Ludwigsfelde">Industriewerke Ludwigsfelde</a> plant</td>
<td>IFA W50</td>
<td><a href="/wiki/File:W_50_L_Blau.jpg" class="image"><img alt="W 50 L Blau.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/14/W_50_L_Blau.jpg/120px-W_50_L_Blau.jpg" width="120" height="99" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/14/W_50_L_Blau.jpg/180px-W_50_L_Blau.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/14/W_50_L_Blau.jpg/240px-W_50_L_Blau.jpg 2x" data-file-width="800" data-file-height="659" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>IFA W50L/K, IFA W50L/NKP, IFA W50L/S</td>
<td>East Germany</td>
<td>after <a href="/wiki/German_reunification" title="German reunification">German reunification</a> plant returned to the former owner, <a href="/wiki/Daimler-Benz" title="Daimler-Benz">Daimler-Benz</a></td>
</tr>
<tr>
<td>Industrieverband Fahrzeugbau (IFA), Industriewerke Ludwigsfelde plant</td>
<td>IFA W50LA</td>
<td><a href="/wiki/File:10._IFA-Oldtimertreffen_im_Ernst-Grube_Werk_Werdau_2007_-_img_0526_-_Flickr_-_ReneS.jpg" class="image"><img alt="10. IFA-Oldtimertreffen im Ernst-Grube Werk Werdau 2007 - img 0526 - Flickr - ReneS.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/10._IFA-Oldtimertreffen_im_Ernst-Grube_Werk_Werdau_2007_-_img_0526_-_Flickr_-_ReneS.jpg/120px-10._IFA-Oldtimertreffen_im_Ernst-Grube_Werk_Werdau_2007_-_img_0526_-_Flickr_-_ReneS.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/dd/10._IFA-Oldtimertreffen_im_Ernst-Grube_Werk_Werdau_2007_-_img_0526_-_Flickr_-_ReneS.jpg/180px-10._IFA-Oldtimertreffen_im_Ernst-Grube_Werk_Werdau_2007_-_img_0526_-_Flickr_-_ReneS.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/dd/10._IFA-Oldtimertreffen_im_Ernst-Grube_Werk_Werdau_2007_-_img_0526_-_Flickr_-_ReneS.jpg/240px-10._IFA-Oldtimertreffen_im_Ernst-Grube_Werk_Werdau_2007_-_img_0526_-_Flickr_-_ReneS.jpg 2x" data-file-width="3072" data-file-height="2048" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>East Germany</td>
<td>after German reunification plant returned to the former owner, Daimler-Benz</td>
</tr>
<tr>
<td>Industrieverband Fahrzeugbau (IFA), Industriewerke Ludwigsfelde plant</td>
<td>IFA L60/1218</td>
<td><a href="/wiki/File:IFA_L60_2.jpg" class="image"><img alt="IFA L60 2.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/10/IFA_L60_2.jpg/120px-IFA_L60_2.jpg" width="120" height="87" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/10/IFA_L60_2.jpg/180px-IFA_L60_2.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/10/IFA_L60_2.jpg/240px-IFA_L60_2.jpg 2x" data-file-width="1200" data-file-height="870" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>East Germany</td>
<td>after German reunification plant returned to the former owner, Daimler-Benz</td>
</tr>
<tr>
<td>Industrieverband Fahrzeugbau (IFA), Industriewerke Ludwigsfelde plant</td>
<td>IFA L60/1218PB</td>
<td><a href="/wiki/File:IFA_L60_truck_in_Dobrich,_Bulgaria,_October_1993.jpg" class="image"><img alt="IFA L60 truck in Dobrich, Bulgaria, October 1993.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a3/IFA_L60_truck_in_Dobrich%2C_Bulgaria%2C_October_1993.jpg/120px-IFA_L60_truck_in_Dobrich%2C_Bulgaria%2C_October_1993.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a3/IFA_L60_truck_in_Dobrich%2C_Bulgaria%2C_October_1993.jpg/180px-IFA_L60_truck_in_Dobrich%2C_Bulgaria%2C_October_1993.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a3/IFA_L60_truck_in_Dobrich%2C_Bulgaria%2C_October_1993.jpg/240px-IFA_L60_truck_in_Dobrich%2C_Bulgaria%2C_October_1993.jpg 2x" data-file-width="1752" data-file-height="1170" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>East Germany</td>
<td>after German reunification plant returned to the former owner, Daimler-Benz</td>
</tr>
<tr>
<td><a href="/wiki/Jelcz" title="Jelcz">Jelcz</a></td>
<td>Zubr A80</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Poland</td>
<td>replaced to Jelcz 300 Series</td>
</tr>
<tr>
<td>Jelcz</td>
<td>Jelcz 300 Series</td>
<td><a href="/wiki/File:Grey_Jelcz_truck_of_the_Polish_Police_on_Matejki_square_in_Krak%C3%B3w_(2).jpg" class="image"><img alt="Grey Jelcz truck of the Polish Police on Matejki square in Kraków (2).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/97/Grey_Jelcz_truck_of_the_Polish_Police_on_Matejki_square_in_Krak%C3%B3w_%282%29.jpg/120px-Grey_Jelcz_truck_of_the_Polish_Police_on_Matejki_square_in_Krak%C3%B3w_%282%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/97/Grey_Jelcz_truck_of_the_Polish_Police_on_Matejki_square_in_Krak%C3%B3w_%282%29.jpg/180px-Grey_Jelcz_truck_of_the_Polish_Police_on_Matejki_square_in_Krak%C3%B3w_%282%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/97/Grey_Jelcz_truck_of_the_Polish_Police_on_Matejki_square_in_Krak%C3%B3w_%282%29.jpg/240px-Grey_Jelcz_truck_of_the_Polish_Police_on_Matejki_square_in_Krak%C3%B3w_%282%29.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>Jelcz 316, Jelcz 3W-317, Jelcz 317</td>
<td>Poland</td>
<td>replaced to Jelcz 400 Series</td>
</tr>
<tr>
<td>Jelcz</td>
<td>Jelcz 640 Series</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Poland</td>
<td>unknown</td>
</tr>
<tr>
<td>Jelcz</td>
<td>Jelcz 410 series</td>
<td></td>
<td>Heavy</td>
<td>COE</td>
<td>Jelcz 415, Jelcz 417</td>
<td>Poland</td>
<td>unknown</td>
</tr>
<tr>
<td>Jelcz</td>
<td>Jelcz 600 series</td>
<td></td>
<td>Heavy</td>
<td>COE</td>
<td>Jelcz C620, Jelcz C622</td>
<td>Poland</td>
<td>unknown</td>
</tr>
<tr>
<td><a href="/wiki/Kutaisi_Auto_Mechanical_Plant" title="Kutaisi Auto Mechanical Plant">Kutaisi Automobile Plant</a></td>
<td>KAZ-606 Colchis</td>
<td></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>USSR</td>
<td>replaced to KAZ-608</td>
</tr>
<tr>
<td>Kutaisi Automobile Plant</td>
<td>KAZ-608 Colchis</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>USSR</td>
<td>replaced to KAZ-608B</td>
</tr>
<tr>
<td>Kutaisi Automobile Plant</td>
<td>KAZ-608B Colchis</td>
<td></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>USSR</td>
<td>discontinued due to rupture of industrial relations and the difficult economic situation in Georgia after the <a href="/wiki/Collapse_of_the_Soviet_Union_(1985%E2%80%931991)" class="mw-redirect" title="Collapse of the Soviet Union (1985–1991)">collapse of the Soviet Union</a></td>
</tr>
<tr>
<td>Kutaisi Automobile Plant</td>
<td>KAZ-4540</td>
<td></td>
<td>Heavy</td>
<td>cabin before engine</td>
<td>-</td>
<td>USSR</td>
<td>discontinued due to rupture of industrial relations and the difficult economic situation in Georgia after the <a href="/wiki/Collapse_of_the_Soviet_Union_(1985%E2%80%931991)" class="mw-redirect" title="Collapse of the Soviet Union (1985–1991)">collapse of the Soviet Union</a></td>
</tr>
<tr>
<td><a href="/wiki/KrAZ" title="KrAZ">KrAZ</a></td>
<td>KrAZ-219</td>
<td><a href="/wiki/File:KrAZ_vehicle_in_Polish_museum.jpg" class="image"><img alt="KrAZ vehicle in Polish museum.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/KrAZ_vehicle_in_Polish_museum.jpg/120px-KrAZ_vehicle_in_Polish_museum.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/KrAZ_vehicle_in_Polish_museum.jpg/180px-KrAZ_vehicle_in_Polish_museum.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/42/KrAZ_vehicle_in_Polish_museum.jpg/240px-KrAZ_vehicle_in_Polish_museum.jpg 2x" data-file-width="2816" data-file-height="2112" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td>replaced to KrAZ-257</td>
</tr>
<tr>
<td>KrAZ</td>
<td>KrAZ-221</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td>replaced to KrAZ-258</td>
</tr>
<tr>
<td>KrAZ</td>
<td>KrAZ-222</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td>replaced to KrAZ-256B</td>
</tr>
<tr>
<td>KrAZ</td>
<td><a href="/wiki/KrAZ-214" title="KrAZ-214">KrAZ-214</a></td>
<td><a href="/wiki/File:PMP-Pontoon-Bridge-latrun-1.jpg" class="image"><img alt="PMP-Pontoon-Bridge-latrun-1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/PMP-Pontoon-Bridge-latrun-1.jpg/120px-PMP-Pontoon-Bridge-latrun-1.jpg" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/PMP-Pontoon-Bridge-latrun-1.jpg/180px-PMP-Pontoon-Bridge-latrun-1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/42/PMP-Pontoon-Bridge-latrun-1.jpg/240px-PMP-Pontoon-Bridge-latrun-1.jpg 2x" data-file-width="1247" data-file-height="808" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td>replaced to KrAZ-255B</td>
</tr>
<tr>
<td>KrAZ</td>
<td>KrAZ-257</td>
<td><a href="/wiki/File:KRAZ_257_front.jpg" class="image"><img alt="KRAZ 257 front.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b0/KRAZ_257_front.jpg/120px-KRAZ_257_front.jpg" width="120" height="97" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b0/KRAZ_257_front.jpg/180px-KRAZ_257_front.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b0/KRAZ_257_front.jpg/240px-KRAZ_257_front.jpg 2x" data-file-width="2796" data-file-height="2262" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td>replaced to KrAZ-250</td>
</tr>
<tr>
<td>KrAZ</td>
<td>KrAZ-258</td>
<td><a href="/wiki/File:KrAZ-258_airport_tank_truck_in_Kyrgyzstan.JPEG" class="image"><img alt="KrAZ-258 airport tank truck in Kyrgyzstan.JPEG" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2d/KrAZ-258_airport_tank_truck_in_Kyrgyzstan.JPEG/120px-KrAZ-258_airport_tank_truck_in_Kyrgyzstan.JPEG" width="120" height="79" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2d/KrAZ-258_airport_tank_truck_in_Kyrgyzstan.JPEG/180px-KrAZ-258_airport_tank_truck_in_Kyrgyzstan.JPEG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2d/KrAZ-258_airport_tank_truck_in_Kyrgyzstan.JPEG/240px-KrAZ-258_airport_tank_truck_in_Kyrgyzstan.JPEG 2x" data-file-width="2000" data-file-height="1312" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td>replaced to KrAZ-6443</td>
</tr>
<tr>
<td>KrAZ</td>
<td>KrAZ-256B</td>
<td><a href="/wiki/File:Museum_of_dfdc_016.jpg" class="image"><img alt="Museum of dfdc 016.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Museum_of_dfdc_016.jpg/120px-Museum_of_dfdc_016.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/Museum_of_dfdc_016.jpg/180px-Museum_of_dfdc_016.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/52/Museum_of_dfdc_016.jpg/240px-Museum_of_dfdc_016.jpg 2x" data-file-width="2048" data-file-height="1536" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td>replaced to KrAZ-6510</td>
</tr>
<tr>
<td>KrAZ</td>
<td><a href="/wiki/KrAZ-255" title="KrAZ-255">KrAZ-255</a></td>
<td><a href="/wiki/File:KrAZ_255.JPG" class="image"><img alt="KrAZ 255.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/6e/KrAZ_255.JPG/120px-KrAZ_255.JPG" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/6e/KrAZ_255.JPG/180px-KrAZ_255.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/6e/KrAZ_255.JPG/240px-KrAZ_255.JPG 2x" data-file-width="1024" data-file-height="731" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td>replaced to KrAZ-260</td>
</tr>
<tr>
<td>KrAZ</td>
<td>KrAZ-250</td>
<td><a href="/wiki/File:KrAZ-250.jpg" class="image"><img alt="KrAZ-250.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fc/KrAZ-250.jpg/120px-KrAZ-250.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fc/KrAZ-250.jpg/180px-KrAZ-250.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fc/KrAZ-250.jpg/240px-KrAZ-250.jpg 2x" data-file-width="2618" data-file-height="1746" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td></td>
</tr>
<tr>
<td>KrAZ</td>
<td><a href="/wiki/KrAZ-260" title="KrAZ-260">KrAZ-260</a></td>
<td><a href="/wiki/File:790th_Fighter_Order_of_Kutuzov_3rd_class_Aviation_Regiment,_Khotilovo_airbase_(356-28).jpg" class="image"><img alt="790th Fighter Order of Kutuzov 3rd class Aviation Regiment, Khotilovo airbase (356-28).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/48/790th_Fighter_Order_of_Kutuzov_3rd_class_Aviation_Regiment%2C_Khotilovo_airbase_%28356-28%29.jpg/120px-790th_Fighter_Order_of_Kutuzov_3rd_class_Aviation_Regiment%2C_Khotilovo_airbase_%28356-28%29.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/48/790th_Fighter_Order_of_Kutuzov_3rd_class_Aviation_Regiment%2C_Khotilovo_airbase_%28356-28%29.jpg/180px-790th_Fighter_Order_of_Kutuzov_3rd_class_Aviation_Regiment%2C_Khotilovo_airbase_%28356-28%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/48/790th_Fighter_Order_of_Kutuzov_3rd_class_Aviation_Regiment%2C_Khotilovo_airbase_%28356-28%29.jpg/240px-790th_Fighter_Order_of_Kutuzov_3rd_class_Aviation_Regiment%2C_Khotilovo_airbase_%28356-28%29.jpg 2x" data-file-width="2250" data-file-height="1500" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td>replaced to KrAZ-6322</td>
</tr>
<tr>
<td><a href="/wiki/KZKT" class="mw-redirect" title="KZKT">KZKT</a></td>
<td><a href="/wiki/MAZ-535" title="MAZ-535">KZKT-535</a></td>
<td><a href="/wiki/File:MAZ-535.jpg" class="image"><img alt="MAZ-535.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/79/MAZ-535.jpg/120px-MAZ-535.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/79/MAZ-535.jpg/180px-MAZ-535.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/79/MAZ-535.jpg/240px-MAZ-535.jpg 2x" data-file-width="1204" data-file-height="765" /></a></td>
<td>Heavy</td>
<td>Cabin before engine</td>
<td>-</td>
<td>USSR</td>
<td>replaced to <a href="/wiki/MAZ-537" title="MAZ-537">KZKT-537</a></td>
</tr>
<tr>
<td>KZKT</td>
<td><a href="/wiki/MAZ-537" title="MAZ-537">KZKT-537</a></td>
<td><a href="/wiki/File:MAZ-537G_Hun_2010_1.jpg" class="image"><img alt="MAZ-537G Hun 2010 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ef/MAZ-537G_Hun_2010_1.jpg/120px-MAZ-537G_Hun_2010_1.jpg" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ef/MAZ-537G_Hun_2010_1.jpg/180px-MAZ-537G_Hun_2010_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ef/MAZ-537G_Hun_2010_1.jpg/240px-MAZ-537G_Hun_2010_1.jpg 2x" data-file-width="1968" data-file-height="1123" /></a></td>
<td>Heavy</td>
<td>Cabin before engine</td>
<td>-</td>
<td>USSR</td>
<td>replaced to KZKT-7428</td>
</tr>
<tr>
<td>KZKT</td>
<td>KZKT-7428 Rusich</td>
<td><a href="/wiki/File:%D0%A1%D0%B5%D0%B4%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%82%D1%8F%D0%B3%D0%B0%D1%87_%D0%A0%D1%83%D1%81%D0%B8%D1%87_(1).JPG" class="image"><img alt="Седельный тягач Русич (1).JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/40/%D0%A1%D0%B5%D0%B4%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%82%D1%8F%D0%B3%D0%B0%D1%87_%D0%A0%D1%83%D1%81%D0%B8%D1%87_%281%29.JPG/120px-%D0%A1%D0%B5%D0%B4%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%82%D1%8F%D0%B3%D0%B0%D1%87_%D0%A0%D1%83%D1%81%D0%B8%D1%87_%281%29.JPG" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/40/%D0%A1%D0%B5%D0%B4%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%82%D1%8F%D0%B3%D0%B0%D1%87_%D0%A0%D1%83%D1%81%D0%B8%D1%87_%281%29.JPG/180px-%D0%A1%D0%B5%D0%B4%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%82%D1%8F%D0%B3%D0%B0%D1%87_%D0%A0%D1%83%D1%81%D0%B8%D1%87_%281%29.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/40/%D0%A1%D0%B5%D0%B4%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%82%D1%8F%D0%B3%D0%B0%D1%87_%D0%A0%D1%83%D1%81%D0%B8%D1%87_%281%29.JPG/240px-%D0%A1%D0%B5%D0%B4%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%82%D1%8F%D0%B3%D0%B0%D1%87_%D0%A0%D1%83%D1%81%D0%B8%D1%87_%281%29.JPG 2x" data-file-width="2286" data-file-height="1644" /></a></td>
<td>Heavy</td>
<td>Cabin before engine</td>
<td>-</td>
<td>Russia</td>
<td>bankruptcy plant</td>
</tr>
<tr>
<td>KZKT</td>
<td>KZKT-8005</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Extra heavy</td>
<td>Cabin before engine</td>
<td>-</td>
<td>Russia</td>
<td>bankruptcy plant</td>
</tr>
<tr>
<td><a href="/wiki/LIAZ_(Czech_Republic)" title="LIAZ (Czech Republic)">LIAZ</a></td>
<td>LiAZ 100 Series</td>
<td><a href="/wiki/File:LIAZ1012.jpg" class="image"><img alt="LIAZ1012.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5b/LIAZ1012.jpg/120px-LIAZ1012.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5b/LIAZ1012.jpg/180px-LIAZ1012.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5b/LIAZ1012.jpg/240px-LIAZ1012.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>LiAZ 110, LiAZ 150, LiAZ 152</td>
<td>Czehoslovakia</td>
<td>Plant bought Skoda concern; production continued under the brand Škoda-LIAZ</td>
</tr>
<tr>
<td>LiAZ</td>
<td>LiAZ 200 Series</td>
<td><a href="/wiki/File:Liaz_230_(8480118326).jpg" class="image"><img alt="Liaz 230 (8480118326).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Liaz_230_%288480118326%29.jpg/120px-Liaz_230_%288480118326%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Liaz_230_%288480118326%29.jpg/180px-Liaz_230_%288480118326%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Liaz_230_%288480118326%29.jpg/240px-Liaz_230_%288480118326%29.jpg 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Chezhoslovakia</td>
<td>Plant bought Skoda concern; production continued under the brand Škoda-LIAZ</td>
</tr>
<tr>
<td>LiAZ</td>
<td>LiAZ S/FZ Series</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy/Medium</td>
<td>COE</td>
<td>-</td>
<td>Czech Republic</td>
<td>Plant bought Skoda concern; production continued under the brand Škoda-LIAZ</td>
</tr>
<tr>
<td>LiAZ</td>
<td>LiAZ 300 Series</td>
<td><a href="/wiki/File:Policejn%C3%AD_Liaz_na_p%C5%99epravu_kon%C3%AD.jpg" class="image"><img alt="Policejní Liaz na přepravu koní.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Policejn%C3%AD_Liaz_na_p%C5%99epravu_kon%C3%AD.jpg/120px-Policejn%C3%AD_Liaz_na_p%C5%99epravu_kon%C3%AD.jpg" width="120" height="64" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Policejn%C3%AD_Liaz_na_p%C5%99epravu_kon%C3%AD.jpg/180px-Policejn%C3%AD_Liaz_na_p%C5%99epravu_kon%C3%AD.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Policejn%C3%AD_Liaz_na_p%C5%99epravu_kon%C3%AD.jpg/240px-Policejn%C3%AD_Liaz_na_p%C5%99epravu_kon%C3%AD.jpg 2x" data-file-width="2148" data-file-height="1140" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Czech Republic</td>
<td>Plant bought Skoda concern; production continued under the brand Škoda-LIAZ</td>
</tr>
<tr>
<td><a href="/wiki/Minsk_Automobile_Plant" title="Minsk Automobile Plant">Minsk Automobile Plant</a> (MAZ)</td>
<td><a href="/wiki/MAZ-200" title="MAZ-200">MAZ-200</a></td>
<td><a href="/wiki/File:%D0%9C%D0%90%D0%97-200_%D1%84%D0%BE%D1%82%D0%BE1.JPG" class="image"><img alt="МАЗ-200 фото1.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/88/%D0%9C%D0%90%D0%97-200_%D1%84%D0%BE%D1%82%D0%BE1.JPG/120px-%D0%9C%D0%90%D0%97-200_%D1%84%D0%BE%D1%82%D0%BE1.JPG" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/88/%D0%9C%D0%90%D0%97-200_%D1%84%D0%BE%D1%82%D0%BE1.JPG/180px-%D0%9C%D0%90%D0%97-200_%D1%84%D0%BE%D1%82%D0%BE1.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/88/%D0%9C%D0%90%D0%97-200_%D1%84%D0%BE%D1%82%D0%BE1.JPG/240px-%D0%9C%D0%90%D0%97-200_%D1%84%D0%BE%D1%82%D0%BE1.JPG 2x" data-file-width="3267" data-file-height="1838" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td>replaced to <a href="/wiki/MAZ-500" title="MAZ-500">MAZ-500</a></td>
</tr>
<tr>
<td>Minsk Automobile Plant (MAZ)</td>
<td>MAZ-205</td>
<td><a href="/wiki/File:MAZ_factory_(Minsk,_Belarus)_p7_-_MAZ-205.jpg" class="image"><img alt="MAZ factory (Minsk, Belarus) p7 - MAZ-205.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5d/MAZ_factory_%28Minsk%2C_Belarus%29_p7_-_MAZ-205.jpg/120px-MAZ_factory_%28Minsk%2C_Belarus%29_p7_-_MAZ-205.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5d/MAZ_factory_%28Minsk%2C_Belarus%29_p7_-_MAZ-205.jpg/180px-MAZ_factory_%28Minsk%2C_Belarus%29_p7_-_MAZ-205.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5d/MAZ_factory_%28Minsk%2C_Belarus%29_p7_-_MAZ-205.jpg/240px-MAZ_factory_%28Minsk%2C_Belarus%29_p7_-_MAZ-205.jpg 2x" data-file-width="4320" data-file-height="3240" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td>replaced to <a href="/wiki/MAZ-500" title="MAZ-500">MAZ-503</a></td>
</tr>
<tr>
<td>Minsk Automobile Plant (MAZ)</td>
<td><a href="/wiki/MAZ-535" title="MAZ-535">MAZ-535</a></td>
<td><a href="/wiki/File:MAZ-535.jpg" class="image"><img alt="MAZ-535.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/79/MAZ-535.jpg/120px-MAZ-535.jpg" width="120" height="76" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/79/MAZ-535.jpg/180px-MAZ-535.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/79/MAZ-535.jpg/240px-MAZ-535.jpg 2x" data-file-width="1204" data-file-height="765" /></a></td>
<td>Heavy</td>
<td>Cabin before engine</td>
<td>-</td>
<td>USSR</td>
<td>production moved to <a href="/wiki/KZKT" class="mw-redirect" title="KZKT">KZKT</a></td>
</tr>
<tr>
<td>Minsk Automobile Plant (MAZ)</td>
<td>MAZ-501</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td>replaced to MAZ-509</td>
</tr>
<tr>
<td>Minsk Automobile Plant (MAZ)</td>
<td>MAZ-502</td>
<td><a href="/wiki/File:MAZ_-_502_front.jpg" class="image"><img alt="MAZ - 502 front.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/70/MAZ_-_502_front.jpg/120px-MAZ_-_502_front.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/70/MAZ_-_502_front.jpg/180px-MAZ_-_502_front.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/70/MAZ_-_502_front.jpg/240px-MAZ_-_502_front.jpg 2x" data-file-width="1600" data-file-height="1200" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>USSR</td>
<td>unknown</td>
</tr>
<tr>
<td>Minsk Automobile Plant (MAZ)</td>
<td><a href="/wiki/MAZ-537" title="MAZ-537">MAZ-537</a></td>
<td><a href="/wiki/File:MAZ-537G_Hun_2010_1.jpg" class="image"><img alt="MAZ-537G Hun 2010 1.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ef/MAZ-537G_Hun_2010_1.jpg/120px-MAZ-537G_Hun_2010_1.jpg" width="120" height="68" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ef/MAZ-537G_Hun_2010_1.jpg/180px-MAZ-537G_Hun_2010_1.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ef/MAZ-537G_Hun_2010_1.jpg/240px-MAZ-537G_Hun_2010_1.jpg 2x" data-file-width="1968" data-file-height="1123" /></a></td>
<td>Heavy</td>
<td>Cabin before engine</td>
<td>-</td>
<td>USSR</td>
<td>production moved to <a href="/wiki/KZKT" class="mw-redirect" title="KZKT">KZKT</a></td>
</tr>
<tr>
<td>Minsk Automobile Plant (MAZ)</td>
<td><a href="/wiki/MAZ-543" class="mw-redirect" title="MAZ-543">MAZ-543</a></td>
<td><a href="/wiki/File:9a52_smerch.jpg" class="image"><img alt="9a52 smerch.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9c/9a52_smerch.jpg/120px-9a52_smerch.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9c/9a52_smerch.jpg/180px-9a52_smerch.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9c/9a52_smerch.jpg/240px-9a52_smerch.jpg 2x" data-file-width="3072" data-file-height="2304" /></a></td>
<td>Extra heavy</td>
<td>engine between the two cabins located on the right and left sides</td>
<td>MAZ-7310</td>
<td>USSR</td>
<td>unknown</td>
</tr>
<tr>
<td>Minsk Automobile Plant (MAZ)</td>
<td><a href="/wiki/MAZ-500" title="MAZ-500">MAZ-500</a></td>
<td><a href="/wiki/File:MAZ-500A-Kranwagen.jpg" class="image"><img alt="MAZ-500A-Kranwagen.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f2/MAZ-500A-Kranwagen.jpg/120px-MAZ-500A-Kranwagen.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f2/MAZ-500A-Kranwagen.jpg/180px-MAZ-500A-Kranwagen.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f2/MAZ-500A-Kranwagen.jpg/240px-MAZ-500A-Kranwagen.jpg 2x" data-file-width="1445" data-file-height="964" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>USSR</td>
<td>replaced to <a href="/wiki/MAZ-5335" title="MAZ-5335">MAZ-5335</a></td>
</tr>
<tr>
<td>Minsk Automobile Plant (MAZ)</td>
<td><a href="/wiki/MAZ-500" title="MAZ-500">MAZ-503</a></td>
<td><a href="/wiki/File:MAZ-503A.jpg" class="image"><img alt="MAZ-503A.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/MAZ-503A.jpg/120px-MAZ-503A.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/MAZ-503A.jpg/180px-MAZ-503A.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0d/MAZ-503A.jpg/240px-MAZ-503A.jpg 2x" data-file-width="2202" data-file-height="1468" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>USSR</td>
<td>replaced to <a href="/wiki/MAZ-5335" title="MAZ-5335">MAZ-5549</a></td>
</tr>
<tr>
<td>Minsk Automobile Plant (MAZ)</td>
<td><a href="/wiki/MAZ-504" title="MAZ-504">MAZ-504</a></td>
<td><a href="/wiki/File:MAZ-504_(tractor-trailer)_crop.jpg" class="image"><img alt="MAZ-504 (tractor-trailer) crop.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2e/MAZ-504_%28tractor-trailer%29_crop.jpg/120px-MAZ-504_%28tractor-trailer%29_crop.jpg" width="120" height="95" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2e/MAZ-504_%28tractor-trailer%29_crop.jpg/180px-MAZ-504_%28tractor-trailer%29_crop.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2e/MAZ-504_%28tractor-trailer%29_crop.jpg/240px-MAZ-504_%28tractor-trailer%29_crop.jpg 2x" data-file-width="1601" data-file-height="1271" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>USSR</td>
<td>replaced to <a href="/wiki/MAZ-5335" title="MAZ-5335">MAZ-5429</a></td>
</tr>
<tr>
<td>Minsk Automobile Plant (MAZ)</td>
<td><a href="/wiki/MAZ-500" title="MAZ-500">MAZ-516</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>MAZ-516A</td>
<td>USSR</td>
<td>replaced to</td>
</tr>
<tr>
<td>Minsk Automobile Plant (MAZ)</td>
<td>MAZ-509</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>USSR</td>
<td>replaced to MAZ-509A</td>
</tr>
<tr>
<td>Minsk Automobile Plant (MAZ)</td>
<td><a href="/wiki/MAZ-5335" title="MAZ-5335">MAZ-5335</a></td>
<td><a href="/wiki/File:MAZ-5335_based_crane_truck.jpg" class="image"><img alt="MAZ-5335 based crane truck.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e2/MAZ-5335_based_crane_truck.jpg/120px-MAZ-5335_based_crane_truck.jpg" width="120" height="71" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e2/MAZ-5335_based_crane_truck.jpg/180px-MAZ-5335_based_crane_truck.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e2/MAZ-5335_based_crane_truck.jpg/240px-MAZ-5335_based_crane_truck.jpg 2x" data-file-width="1430" data-file-height="850" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>MAZ-5334</td>
<td>USSR</td>
<td>replaced to MAZ-5336</td>
</tr>
<tr>
<td>Minsk Automobile Plant (MAZ)</td>
<td>MAZ-5549</td>
<td><a href="/wiki/File:MAZ-5549.jpg" class="image"><img alt="MAZ-5549.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/MAZ-5549.jpg/120px-MAZ-5549.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/MAZ-5549.jpg/180px-MAZ-5549.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/MAZ-5549.jpg/240px-MAZ-5549.jpg 2x" data-file-width="2679" data-file-height="1786" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>USSR</td>
<td>replaced to MAZ-5551</td>
</tr>
<tr>
<td>Minsk Automobile Plant (MAZ)</td>
<td>MAZ-5429</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>USSR</td>
<td>replaced to MAZ-6422</td>
</tr>
<tr>
<td><a href="/wiki/Multicar" title="Multicar">Multicar</a></td>
<td>Multicar M24</td>
<td><a href="/wiki/File:Multicar_M24_Lauscha_1991.jpg" class="image"><img alt="Multicar M24 Lauscha 1991.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Multicar_M24_Lauscha_1991.jpg/120px-Multicar_M24_Lauscha_1991.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Multicar_M24_Lauscha_1991.jpg/180px-Multicar_M24_Lauscha_1991.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Multicar_M24_Lauscha_1991.jpg/240px-Multicar_M24_Lauscha_1991.jpg 2x" data-file-width="768" data-file-height="576" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>East Germany</td>
<td>replaced to Multicar M25</td>
</tr>
<tr>
<td>Multicar</td>
<td>Multicar M25</td>
<td><a href="/wiki/File:IFA_Multicar_M_25,_Harzgerode,_1989.jpg" class="image"><img alt="IFA Multicar M 25, Harzgerode, 1989.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3d/IFA_Multicar_M_25%2C_Harzgerode%2C_1989.jpg/120px-IFA_Multicar_M_25%2C_Harzgerode%2C_1989.jpg" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3d/IFA_Multicar_M_25%2C_Harzgerode%2C_1989.jpg/180px-IFA_Multicar_M_25%2C_Harzgerode%2C_1989.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3d/IFA_Multicar_M_25%2C_Harzgerode%2C_1989.jpg/240px-IFA_Multicar_M_25%2C_Harzgerode%2C_1989.jpg 2x" data-file-width="1775" data-file-height="1147" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>East Germany</td>
<td>replaced to Multicar M26</td>
</tr>
<tr>
<td>Multicar</td>
<td>Multicar M26</td>
<td><a href="/wiki/File:Multicar_M26_white.jpg" class="image"><img alt="Multicar M26 white.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/14/Multicar_M26_white.jpg/120px-Multicar_M26_white.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/14/Multicar_M26_white.jpg/180px-Multicar_M26_white.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/14/Multicar_M26_white.jpg/240px-Multicar_M26_white.jpg 2x" data-file-width="2272" data-file-height="1704" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Germany</td>
<td>unknown</td>
</tr>
<tr>
<td><a href="/wiki/MAN_SE" title="MAN SE">MAN</a></td>
<td><a href="/wiki/MAN_SE" title="MAN SE">MAN HX</a></td>
<td><a href="/wiki/File:MAN_gl.JPG" class="image"><img alt="MAN gl.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/MAN_gl.JPG/120px-MAN_gl.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/89/MAN_gl.JPG/180px-MAN_gl.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/89/MAN_gl.JPG/240px-MAN_gl.JPG 2x" data-file-width="4752" data-file-height="3168" /></a></td>
<td>Heavy</td>
<td>Cabin before engine</td>
<td>-</td>
<td>Germany</td>
<td>unknown</td>
</tr>
<tr>
<td><a href="/wiki/Praga_(company)" title="Praga (company)">Praga</a></td>
<td>Praga N</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Czechoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Praga</td>
<td>Praga L</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Czechoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Praga</td>
<td>Praga AN</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Praga</td>
<td>Praga ND/SND</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Praga</td>
<td>Praga TN/TNHP</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Praga</td>
<td>Praga TOV</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Praga</td>
<td>Praga RN/RND</td>
<td><a href="/wiki/File:Praga_v_Brn%C4%9B.jpg" class="image"><img alt="Praga v Brně.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Praga_v_Brn%C4%9B.jpg/120px-Praga_v_Brn%C4%9B.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Praga_v_Brn%C4%9B.jpg/180px-Praga_v_Brn%C4%9B.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Praga_v_Brn%C4%9B.jpg/240px-Praga_v_Brn%C4%9B.jpg 2x" data-file-width="2461" data-file-height="1846" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>Praga SV</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Praga</td>
<td>Praga V3S</td>
<td><a href="/wiki/File:Praga_V3S.jpg" class="image"><img alt="Praga V3S.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Praga_V3S.jpg/120px-Praga_V3S.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Praga_V3S.jpg/180px-Praga_V3S.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Praga_V3S.jpg/240px-Praga_V3S.jpg 2x" data-file-width="2592" data-file-height="1944" /></a><br />
<a href="/wiki/File:Fr%C3%BDdlant,_B%C5%99ezinova,_Praga_01.jpg" class="image"><img alt="Frýdlant, Březinova, Praga 01.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/Fr%C3%BDdlant%2C_B%C5%99ezinova%2C_Praga_01.jpg/120px-Fr%C3%BDdlant%2C_B%C5%99ezinova%2C_Praga_01.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/77/Fr%C3%BDdlant%2C_B%C5%99ezinova%2C_Praga_01.jpg/180px-Fr%C3%BDdlant%2C_B%C5%99ezinova%2C_Praga_01.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/77/Fr%C3%BDdlant%2C_B%C5%99ezinova%2C_Praga_01.jpg/240px-Fr%C3%BDdlant%2C_B%C5%99ezinova%2C_Praga_01.jpg 2x" data-file-width="3072" data-file-height="2304" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>Praga V3S-S</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Praga</td>
<td>Praga S5T</td>
<td><a href="/wiki/File:DOD_v_%C5%98e%C4%8Dkovic%C3%ADch_2010_(30).jpg" class="image"><img alt="DOD v Řečkovicích 2010 (30).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/13/DOD_v_%C5%98e%C4%8Dkovic%C3%ADch_2010_%2830%29.jpg/120px-DOD_v_%C5%98e%C4%8Dkovic%C3%ADch_2010_%2830%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/13/DOD_v_%C5%98e%C4%8Dkovic%C3%ADch_2010_%2830%29.jpg/180px-DOD_v_%C5%98e%C4%8Dkovic%C3%ADch_2010_%2830%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/13/DOD_v_%C5%98e%C4%8Dkovic%C3%ADch_2010_%2830%29.jpg/240px-DOD_v_%C5%98e%C4%8Dkovic%C3%ADch_2010_%2830%29.jpg 2x" data-file-width="4416" data-file-height="3312" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>Avia S5T-2</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Praga</td>
<td>Praga S5T-2TN</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Praga</td>
<td>Praga UV80</td>
<td><a href="/wiki/File:%C5%BDelezni%C4%8Dn%C3%AD_muzeum_Lu%C5%BEn%C3%A1_u_Rakovn%C3%ADka_(161).jpg" class="image"><img alt="Železniční muzeum Lužná u Rakovníka (161).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/da/%C5%BDelezni%C4%8Dn%C3%AD_muzeum_Lu%C5%BEn%C3%A1_u_Rakovn%C3%ADka_%28161%29.jpg/120px-%C5%BDelezni%C4%8Dn%C3%AD_muzeum_Lu%C5%BEn%C3%A1_u_Rakovn%C3%ADka_%28161%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/da/%C5%BDelezni%C4%8Dn%C3%AD_muzeum_Lu%C5%BEn%C3%A1_u_Rakovn%C3%ADka_%28161%29.jpg/180px-%C5%BDelezni%C4%8Dn%C3%AD_muzeum_Lu%C5%BEn%C3%A1_u_Rakovn%C3%ADka_%28161%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/da/%C5%BDelezni%C4%8Dn%C3%AD_muzeum_Lu%C5%BEn%C3%A1_u_Rakovn%C3%ADka_%28161%29.jpg/240px-%C5%BDelezni%C4%8Dn%C3%AD_muzeum_Lu%C5%BEn%C3%A1_u_Rakovn%C3%ADka_%28161%29.jpg 2x" data-file-width="4416" data-file-height="3312" /></a></td>
<td>Medium multipurpose</td>
<td>COE</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>production moved to the factory <a href="/wiki/Intrall" title="Intrall">Intrall</a></td>
</tr>
<tr>
<td>Praga</td>
<td>Praga NTS-265</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy multipurpose</td>
<td>COE</td>
<td>-</td>
<td>Czech Republic</td>
<td>production moved to the factory <a href="/wiki/Intrall" title="Intrall">Intrall</a></td>
</tr>
<tr>
<td>Renault Trucks</td>
<td><a href="/wiki/Renault_Magnum" title="Renault Magnum">Renault Magnum</a></td>
<td><a href="/wiki/File:Renault_Magnum_500_LKW.JPG" class="image"><img alt="Renault Magnum 500 LKW.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Renault_Magnum_500_LKW.JPG/120px-Renault_Magnum_500_LKW.JPG" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/Renault_Magnum_500_LKW.JPG/180px-Renault_Magnum_500_LKW.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/59/Renault_Magnum_500_LKW.JPG/240px-Renault_Magnum_500_LKW.JPG 2x" data-file-width="4608" data-file-height="3072" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>France</td>
<td>Replaced by the <a href="/wiki/Renault_Trucks_T" title="Renault Trucks T">Renault T</a></td>
</tr>
<tr>
<td><a href="/wiki/Riga_Autobus_Factory" title="Riga Autobus Factory">Riga Autobus Factory</a></td>
<td><a href="/wiki/RAF-2203" title="RAF-2203">RAF-33111</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Latvia</td>
<td>bankruptcy plant</td>
</tr>
<tr>
<td><a href="/wiki/Sachsenring" title="Sachsenring">Sachsenring</a></td>
<td>Sachsenring S4000</td>
<td><a href="/wiki/File:IFA_S4000-1_Pritsche_mit_Plane.jpg" class="image"><img alt="IFA S4000-1 Pritsche mit Plane.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b7/IFA_S4000-1_Pritsche_mit_Plane.jpg/120px-IFA_S4000-1_Pritsche_mit_Plane.jpg" width="120" height="88" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b7/IFA_S4000-1_Pritsche_mit_Plane.jpg/180px-IFA_S4000-1_Pritsche_mit_Plane.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b7/IFA_S4000-1_Pritsche_mit_Plane.jpg/240px-IFA_S4000-1_Pritsche_mit_Plane.jpg 2x" data-file-width="1613" data-file-height="1184" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>East Germany</td>
<td>production moved to the factory Ernst Grube (see above)</td>
</tr>
<tr>
<td><a href="/wiki/%C5%A0koda_Auto" title="Škoda Auto">Škoda</a></td>
<td>Skoda 304/306</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Czechoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Skoda</td>
<td>Skoda-<a href="/wiki/Sentinel_Waggon_Works" title="Sentinel Waggon Works">Sentinel</a></td>
<td><a href="/wiki/File:Brno,_140_let_MHD_(36).jpg" class="image"><img alt="Brno, 140 let MHD (36).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Brno%2C_140_let_MHD_%2836%29.jpg/120px-Brno%2C_140_let_MHD_%2836%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Brno%2C_140_let_MHD_%2836%29.jpg/180px-Brno%2C_140_let_MHD_%2836%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Brno%2C_140_let_MHD_%2836%29.jpg/240px-Brno%2C_140_let_MHD_%2836%29.jpg 2x" data-file-width="2816" data-file-height="2112" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Skoda-<a href="/wiki/Laurin_%26_Klement" title="Laurin &amp; Klement">Laurin &amp; Klement</a></td>
<td>Skoda-Laurin-Klement-505/545</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Skoda-Laurin-Klement</td>
<td>Skoda-Laurin-Klement-125</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
<td></td>
</tr>
<tr>
<td>Skoda</td>
<td>Skoda-550</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Skoda</td>
<td>Skoda-104/154</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Skoda</td>
<td>Skoda-304/306</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Czechoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Skoda</td>
<td>Skoda-504/506</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Skoda</td>
<td>Skoda-404D/606D</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Skoda</td>
<td>Skoda-206</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Skoda</td>
<td>Skoda-656D/806D</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Skoda</td>
<td>Skoda-254D</td>
<td><a href="/wiki/File:%C5%A0koda_254_D_(1938).jpg" class="image"><img alt="Škoda 254 D (1938).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/12/%C5%A0koda_254_D_%281938%29.jpg/120px-%C5%A0koda_254_D_%281938%29.jpg" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/12/%C5%A0koda_254_D_%281938%29.jpg/180px-%C5%A0koda_254_D_%281938%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/12/%C5%A0koda_254_D_%281938%29.jpg/240px-%C5%A0koda_254_D_%281938%29.jpg 2x" data-file-width="300" data-file-height="194" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Skoda</td>
<td>Skoda-100/150</td>
<td><a href="/wiki/File:%C5%A0koda_100_(1939).jpg" class="image"><img alt="Škoda 100 (1939).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/%C5%A0koda_100_%281939%29.jpg/120px-%C5%A0koda_100_%281939%29.jpg" width="120" height="86" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cb/%C5%A0koda_100_%281939%29.jpg/180px-%C5%A0koda_100_%281939%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cb/%C5%A0koda_100_%281939%29.jpg/240px-%C5%A0koda_100_%281939%29.jpg 2x" data-file-width="350" data-file-height="252" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Skoda</td>
<td>Skoda-256B</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Skoda</td>
<td>Skoda-706D</td>
<td><a href="/wiki/File:Skoda_706_Diesel.jpg" class="image"><img alt="Skoda 706 Diesel.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Skoda_706_Diesel.jpg/120px-Skoda_706_Diesel.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Skoda_706_Diesel.jpg/180px-Skoda_706_Diesel.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Skoda_706_Diesel.jpg/240px-Skoda_706_Diesel.jpg 2x" data-file-width="280" data-file-height="187" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>replaced to Skoda-706R</td>
</tr>
<tr>
<td>Skoda</td>
<td>Skoda-706R</td>
<td><a href="/wiki/File:Brno,_%C5%98e%C4%8Dkovice,_depozit%C3%A1%C5%99_TMB,_%C5%A0koda_706_R.jpg" class="image"><img alt="Brno, Řečkovice, depozitář TMB, Škoda 706 R.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Brno%2C_%C5%98e%C4%8Dkovice%2C_depozit%C3%A1%C5%99_TMB%2C_%C5%A0koda_706_R.jpg/120px-Brno%2C_%C5%98e%C4%8Dkovice%2C_depozit%C3%A1%C5%99_TMB%2C_%C5%A0koda_706_R.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Brno%2C_%C5%98e%C4%8Dkovice%2C_depozit%C3%A1%C5%99_TMB%2C_%C5%A0koda_706_R.jpg/180px-Brno%2C_%C5%98e%C4%8Dkovice%2C_depozit%C3%A1%C5%99_TMB%2C_%C5%A0koda_706_R.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Brno%2C_%C5%98e%C4%8Dkovice%2C_depozit%C3%A1%C5%99_TMB%2C_%C5%A0koda_706_R.jpg/240px-Brno%2C_%C5%98e%C4%8Dkovice%2C_depozit%C3%A1%C5%99_TMB%2C_%C5%A0koda_706_R.jpg 2x" data-file-width="2272" data-file-height="1704" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>replaced to Skoda-706RT</td>
</tr>
<tr>
<td>Skoda-<a href="/wiki/LIAZ_(Czech_Republic)" title="LIAZ (Czech Republic)">LIAZ</a></td>
<td>Skoda-706RT</td>
<td><a href="/wiki/File:16._IFA_Oldtimertreffen_Werdau_2013,_Germany_(8717881521).jpg" class="image"><img alt="16. IFA Oldtimertreffen Werdau 2013, Germany (8717881521).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0b/16._IFA_Oldtimertreffen_Werdau_2013%2C_Germany_%288717881521%29.jpg/120px-16._IFA_Oldtimertreffen_Werdau_2013%2C_Germany_%288717881521%29.jpg" width="120" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0b/16._IFA_Oldtimertreffen_Werdau_2013%2C_Germany_%288717881521%29.jpg/180px-16._IFA_Oldtimertreffen_Werdau_2013%2C_Germany_%288717881521%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0b/16._IFA_Oldtimertreffen_Werdau_2013%2C_Germany_%288717881521%29.jpg/240px-16._IFA_Oldtimertreffen_Werdau_2013%2C_Germany_%288717881521%29.jpg 2x" data-file-width="5184" data-file-height="3456" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>Skoda-706RTDA, Skoda-706RTS, Skoda-706RTTN</td>
<td>Czehoslovakia</td>
<td>replaced to <a href="/wiki/LIAZ_(Czech_Republic)" title="LIAZ (Czech Republic)">LIAZ-100 series</a> (see above)</td>
</tr>
<tr>
<td>Skoda-LIAZ</td>
<td>Skoda-LIAZ-706MT</td>
<td><a href="/wiki/File:LIAZ_MT.jpg" class="image"><img alt="LIAZ MT.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/LIAZ_MT.jpg/120px-LIAZ_MT.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/LIAZ_MT.jpg/180px-LIAZ_MT.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/52/LIAZ_MT.jpg/240px-LIAZ_MT.jpg 2x" data-file-width="2592" data-file-height="1944" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>Skoda-LIAZ-706MTTN, Skoda-LIAZ-706MTS</td>
<td>Czehoslovakia</td>
<td>replaced to LIAZ-100 Series</td>
</tr>
<tr>
<td>Skoda</td>
<td><a href="/wiki/%C5%A0koda_1203" title="Škoda 1203">Škoda 1203</a></td>
<td><a href="/wiki/File:Skoda_1203.jpg" class="image"><img alt="Skoda 1203.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Skoda_1203.jpg/120px-Skoda_1203.jpg" width="120" height="78" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Skoda_1203.jpg/180px-Skoda_1203.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Skoda_1203.jpg/240px-Skoda_1203.jpg 2x" data-file-width="1211" data-file-height="789" /></a></td>
<td>Light</td>
<td>COE</td>
<td>-</td>
<td>Czechoslovakia</td>
<td>production was transferred to the <a href="/wiki/Trnavsk%C3%A9_automobilov%C3%A9_z%C3%A1vody" title="Trnavské automobilové závody">TAZ</a> plant</td>
</tr>
<tr>
<td>Skoda-LIAZ</td>
<td>Skoda-LiAZ 100 Series</td>
<td><a href="/wiki/File:LIAZ1012.jpg" class="image"><img alt="LIAZ1012.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5b/LIAZ1012.jpg/120px-LIAZ1012.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5b/LIAZ1012.jpg/180px-LIAZ1012.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5b/LIAZ1012.jpg/240px-LIAZ1012.jpg 2x" data-file-width="1024" data-file-height="768" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>Skoda-LIAZ 110, Skoda-LiAZ 150, Skoda-LiAZ 152</td>
<td>Czech Republic</td>
<td>bankruptcy</td>
</tr>
<tr>
<td>Skoda-LIAZ</td>
<td>Skoda-LiAZ 200 Series</td>
<td><a href="/wiki/File:Liaz_230_(8480118326).jpg" class="image"><img alt="Liaz 230 (8480118326).jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Liaz_230_%288480118326%29.jpg/120px-Liaz_230_%288480118326%29.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Liaz_230_%288480118326%29.jpg/180px-Liaz_230_%288480118326%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Liaz_230_%288480118326%29.jpg/240px-Liaz_230_%288480118326%29.jpg 2x" data-file-width="3264" data-file-height="2448" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Czech Republic</td>
<td>unknown</td>
</tr>
<tr>
<td>Skoda-LIAZ</td>
<td>Skoda-LiAZ S/FZ Series</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy/Medium</td>
<td>COE</td>
<td>-</td>
<td>Czech Republic</td>
<td>bankrutcy</td>
</tr>
<tr>
<td>Skoda-LIAZ</td>
<td>Skoda-LiAZ 300 Series</td>
<td><a href="/wiki/File:Policejn%C3%AD_Liaz_na_p%C5%99epravu_kon%C3%AD.jpg" class="image"><img alt="Policejní Liaz na přepravu koní.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Policejn%C3%AD_Liaz_na_p%C5%99epravu_kon%C3%AD.jpg/120px-Policejn%C3%AD_Liaz_na_p%C5%99epravu_kon%C3%AD.jpg" width="120" height="64" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Policejn%C3%AD_Liaz_na_p%C5%99epravu_kon%C3%AD.jpg/180px-Policejn%C3%AD_Liaz_na_p%C5%99epravu_kon%C3%AD.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Policejn%C3%AD_Liaz_na_p%C5%99epravu_kon%C3%AD.jpg/240px-Policejn%C3%AD_Liaz_na_p%C5%99epravu_kon%C3%AD.jpg 2x" data-file-width="2148" data-file-height="1140" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Czech Republic</td>
<td>bankruptcy</td>
</tr>
<tr>
<td>Skoda-LIAZ</td>
<td>Skoda-LIAZ-Xena</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Czech Republic</td>
<td>bankruptcy</td>
</tr>
<tr>
<td><a href="/wiki/Sterling_Trucks" title="Sterling Trucks">Sterling Trucks</a></td>
<td><a href="/wiki/Mitsubishi_Fuso_Canter" title="Mitsubishi Fuso Canter">Sterling 360</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Light</td>
<td>COE</td>
<td>Mitsubishi Fuso Canter</td>
<td>Japan</td>
<td>Daimler closed down the Sterling Truck factory</td>
</tr>
<tr>
<td>Sterling Trucks</td>
<td><a href="/w/index.php?title=Sterling_Acterra&amp;action=edit&amp;redlink=1" class="new" title="Sterling Acterra (page does not exist)">Sterling Acterra</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>Daimler closed down the Sterling Truck factory</td>
</tr>
<tr>
<td>Sterling Trucks</td>
<td><a href="/w/index.php?title=Sterling_Set_Forward_L-Line&amp;action=edit&amp;redlink=1" class="new" title="Sterling Set Forward L-Line (page does not exist)">Sterling Set Forward L-Line</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>Daimler closed down the Sterling Truck factory</td>
</tr>
<tr>
<td>Sterling Trucks</td>
<td><a href="/w/index.php?title=Sterling_Set_Back_L-Line&amp;action=edit&amp;redlink=1" class="new" title="Sterling Set Back L-Line (page does not exist)">Sterling Set Back L-Line</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>Daimler closed down the Sterling Truck factory</td>
</tr>
<tr>
<td>Sterling Trucks</td>
<td><a href="/w/index.php?title=Sterling_Set_Back_A-Line&amp;action=edit&amp;redlink=1" class="new" title="Sterling Set Back A-Line (page does not exist)">Sterling Set Back A-Line</a></td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>Conventional</td>
<td>-</td>
<td>United States</td>
<td>Daimler closed down the Sterling Truck factory</td>
</tr>
<tr>
<td><a href="/wiki/Tatra_(company)" title="Tatra (company)">Tatra</a></td>
<td>Tatra TL4</td>
<td><a href="/wiki/File:NW_TL-4_2.jpg" class="image"><img alt="NW TL-4 2.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/NW_TL-4_2.jpg/120px-NW_TL-4_2.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d1/NW_TL-4_2.jpg/180px-NW_TL-4_2.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d1/NW_TL-4_2.jpg/240px-NW_TL-4_2.jpg 2x" data-file-width="1023" data-file-height="654" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Czechoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Tatra</td>
<td><a href="/wiki/Tatra_13" title="Tatra 13">Tatra 13</a></td>
<td><a href="/wiki/File:Tatra_13_IMG_6815.JPG" class="image"><img alt="Tatra 13 IMG 6815.JPG" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/67/Tatra_13_IMG_6815.JPG/120px-Tatra_13_IMG_6815.JPG" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/67/Tatra_13_IMG_6815.JPG/180px-Tatra_13_IMG_6815.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/67/Tatra_13_IMG_6815.JPG/240px-Tatra_13_IMG_6815.JPG 2x" data-file-width="2272" data-file-height="1704" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Tatra</td>
<td><a href="/wiki/Tatra_26" title="Tatra 26">Tatra 26</a></td>
<td><a href="/wiki/File:Tatra_T26.jpg" class="image"><img alt="Tatra T26.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Tatra_T26.jpg/120px-Tatra_T26.jpg" width="120" height="57" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Tatra_T26.jpg/180px-Tatra_T26.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Tatra_T26.jpg/240px-Tatra_T26.jpg 2x" data-file-width="924" data-file-height="436" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Tatra</td>
<td>Tatra T23</td>
<td><a href="/wiki/File:Tatra_T23.jpg" class="image"><img alt="Tatra T23.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Tatra_T23.jpg/120px-Tatra_T23.jpg" width="120" height="63" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Tatra_T23.jpg/180px-Tatra_T23.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/00/Tatra_T23.jpg/240px-Tatra_T23.jpg 2x" data-file-width="1024" data-file-height="540" /></a></td>
<td>Medium</td>
<td>COE</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Tatra</td>
<td>Tatra T24</td>
<td><a href="/wiki/File:No_image_available.svg" class="image"><img alt="No image available.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/120px-No_image_available.svg.png" width="120" height="120" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/180px-No_image_available.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/240px-No_image_available.svg.png 2x" data-file-width="300" data-file-height="300" /></a></td>
<td>Heavy</td>
<td>COE</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Tatra</td>
<td>Tatra T43/T52</td>
<td><a href="/wiki/File:Brno,_n%C3%A1m%C4%9Bst%C3%AD_Svobody_-_XXI._Sraz_historick%C3%BDch_vozidel_Vyso%C4%8Dina_2014_-_Tatra_43_obr2.jpg" class="image"><img alt="Brno, náměstí Svobody - XXI. Sraz historických vozidel Vysočina 2014 - Tatra 43 obr2.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/41/Brno%2C_n%C3%A1m%C4%9Bst%C3%AD_Svobody_-_XXI._Sraz_historick%C3%BDch_vozidel_Vyso%C4%8Dina_2014_-_Tatra_43_obr2.jpg/120px-Brno%2C_n%C3%A1m%C4%9Bst%C3%AD_Svobody_-_XXI._Sraz_historick%C3%BDch_vozidel_Vyso%C4%8Dina_2014_-_Tatra_43_obr2.jpg" width="120" height="90" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/41/Brno%2C_n%C3%A1m%C4%9Bst%C3%AD_Svobody_-_XXI._Sraz_historick%C3%BDch_vozidel_Vyso%C4%8Dina_2014_-_Tatra_43_obr2.jpg/180px-Brno%2C_n%C3%A1m%C4%9Bst%C3%AD_Svobody_-_XXI._Sraz_historick%C3%BDch_vozidel_Vyso%C4%8Dina_2014_-_Tatra_43_obr2.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/41/Brno%2C_n%C3%A1m%C4%9Bst%C3%AD_Svobody_-_XXI._Sraz_historick%C3%BDch_vozidel_Vyso%C4%8Dina_2014_-_Tatra_43_obr2.jpg/240px-Brno%2C_n%C3%A1m%C4%9Bst%C3%AD_Svobody_-_XXI._Sraz_historick%C3%BDch_vozidel_Vyso%C4%8Dina_2014_-_Tatra_43_obr2.jpg 2x" data-file-width="2574" data-file-height="1927" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Tatra</td>
<td>Tatra T27</td>
<td><a href="/wiki/File:Tatra_T27.jpg" class="image"><img alt="Tatra T27.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Tatra_T27.jpg/120px-Tatra_T27.jpg" width="120" height="81" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Tatra_T27.jpg/180px-Tatra_T27.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Tatra_T27.jpg/240px-Tatra_T27.jpg 2x" data-file-width="911" data-file-height="618" /></a></td>
<td>Medium</td>
<td>Conventional</td>
<td>-</td>
<td>Czechoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Tatra</td>
<td><a href="/wiki/Tatra_82" title="Tatra 82">Tatra 82</a></td>
<td><a href="/wiki/File:Tatra_T82_lorry.jpg" class="image"><img alt="Tatra T82 lorry.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Tatra_T82_lorry.jpg/120px-Tatra_T82_lorry.jpg" width="120" height="77" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Tatra_T82_lorry.jpg/180px-Tatra_T82_lorry.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Tatra_T82_lorry.jpg/240px-Tatra_T82_lorry.jpg 2x" data-file-width="981" data-file-height="630" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>
<tr>
<td>Tatra</td>
<td>Tatra T92</td>
<td><a href="/wiki/File:Tatra_T92_early_model.jpg" class="image"><img alt="Tatra T92 early model.jpg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Tatra_T92_early_model.jpg/120px-Tatra_T92_early_model.jpg" width="120" height="69" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Tatra_T92_early_model.jpg/180px-Tatra_T92_early_model.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Tatra_T92_early_model.jpg/240px-Tatra_T92_early_model.jpg 2x" data-file-width="1024" data-file-height="586" /></a></td>
<td>Light</td>
<td>Conventional</td>
<td>-</td>
<td>Czehoslovakia</td>
<td>unknown</td>
</tr>




EOD;
        //THIS IS FOR TEXT MULTI LINE

        //preg_match_all('/^[a-zA-Z]([\w -]*[a-zA-Z])?/im', $str, $matches, PREG_OFFSET_CAPTURE);

        // <a href="\/brand\/[a-zA-Zü]+([\w -_]*[a-zA-Z])?.php">

preg_match_all('/(?<=(">))[a-zA-Zü]+([\w -]*[a-zA-Z])(?=(<\/a>))/im', $str, $matches, PREG_OFFSET_CAPTURE);

        //preg_match_all('/(?<=(">))[a-zA-Zü]+([\w -]*[a-zA-Z0-9])(?=(<\/a>))/im', $str, $matches, PREG_OFFSET_CAPTURE);

        $matches = $matches[0];
        

        $counter = 1;

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
            $newSQL = $newSQL."DB::table('cars')->insert([ 'parent_id' => 15, 'name' => '$v', 'slug' => '".sluggify($v). "']);";
        }

        return $newSQL;
        
            

}


    

    
}
