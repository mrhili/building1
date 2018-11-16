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


<tr>
<th style="width:12%;">Manufacturer</th>
<th style="width:20%;">Model</th>
<th style="width:13%;">Years</th>
<th style="width:15%;">Styles</th>
<th style="width:15%;">Country of Origin</th>
<th style="width:18%;">Notes</th>
</tr>
<tr>
<td><a href="/wiki/Abarth" title="Abarth">Abarth</a></td>
<td><a href="/wiki/Abarth_205" title="Abarth 205">205</a></td>
<td>1950-1951</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Abarth" title="Abarth">Abarth</a></td>
<td><a href="/wiki/Fiat_500_2007#Abarth_500" title="Fiat 500 2007">595</a></td>
<td>2008–present</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Abarth" title="Abarth">Abarth</a></td>
<td><a href="/wiki/Porsche_356" title="Porsche 356">Porsche 356B Carrera GTL Abarth</a></td>
<td>1960-1961</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Abarth" title="Abarth">Abarth</a></td>
<td><a href="/wiki/Fiat_850" title="Fiat 850">Fiat Abarth 850 TC Berlina</a></td>
<td>1964–1973</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/AC_Cars" title="AC Cars">AC Cars</a></td>
<td><a href="/wiki/AC_378_GT_Zagato" title="AC 378 GT Zagato">378 GT Zagato</a></td>
<td>2012–present</td>
<td>Coupé</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/AC_Cars" title="AC Cars">AC Cars</a></td>
<td><a href="/wiki/AC_3000ME" title="AC 3000ME">3000ME</a></td>
<td>1979-1984</td>
<td>Coupé</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/AC_Cars" title="AC Cars">AC Cars</a></td>
<td><a href="/wiki/AC_Ace" title="AC Ace">Ace</a></td>
<td>1953–1963</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/AC_Cars" title="AC Cars">AC Cars</a></td>
<td><a href="/wiki/AC_Aceca" title="AC Aceca">Aceca</a></td>
<td>1954–1963</td>
<td>Coupé</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/AC_Cars" title="AC Cars">AC Cars</a></td>
<td><a href="/wiki/AC_Cobra" title="AC Cobra">Cobra</a></td>
<td>1961-1969</td>
<td>Roadster</td>
<td>England</td>
<td>Also known as Shelby Cobra</td>
</tr>
<tr>
<td><a href="/wiki/AC_Cars" title="AC Cars">AC Cars</a></td>
<td>Superblower</td>
<td>1997-2002</td>
<td>Coupé</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/AC_Propulsion" title="AC Propulsion">AC Propulsion</a></td>
<td><a href="/wiki/AC_Propulsion_tzero" title="AC Propulsion tzero">AC Propulsion tzero</a></td>
<td>1997-2003prototypes only</td>
<td>Roadster</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Acura" title="Acura">Acura</a></td>
<td><a href="/wiki/Honda_NSX" title="Honda NSX">NSX</a></td>
<td>1990-2005</td>
<td>Coupé, Targa</td>
<td>Japan</td>
<td>Also known as the Honda NSX</td>
</tr>
<tr>
<td><a href="/wiki/Acura" title="Acura">Acura</a></td>
<td><a href="/wiki/Acura_NSX_2015" class="mw-redirect" title="Acura NSX 2015">NSX 2015</a></td>
<td>2016–present</td>
<td>Coupé</td>
<td>United States</td>
<td>no known Honda version planned</td>
</tr>
<tr>
<td><a href="/wiki/Alfa_Romeo" title="Alfa Romeo">Alfa Romeo</a></td>
<td><a href="/wiki/Alfa_Romeo_4C" title="Alfa Romeo 4C">4C</a></td>
<td>2013–present</td>
<td>Coupé, Roadster</td>
<td>Italy</td>
<td>one of the few Alfa Romeos to be available in North America before anywhere else</td>
</tr>
<tr>
<td><a href="/wiki/Alfa_Romeo" title="Alfa Romeo">Alfa Romeo</a></td>
<td><a href="/wiki/Alfa_Romeo_6C" title="Alfa Romeo 6C">6C</a></td>
<td>1925–1954</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Alfa_Romeo" title="Alfa Romeo">Alfa Romeo</a></td>
<td><a href="/wiki/Alfa_Romeo_8C" title="Alfa Romeo 8C">8C</a></td>
<td>1931–1939</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Alfa_Romeo" title="Alfa Romeo">Alfa Romeo</a></td>
<td><a href="/wiki/Alfa_Romeo_8C_Competizione" title="Alfa Romeo 8C Competizione">8C Competizione</a></td>
<td>2007–2010</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Alfa_Romeo" title="Alfa Romeo">Alfa Romeo</a></td>
<td><a href="/wiki/Alfa_Romeo_RL" title="Alfa Romeo RL">RL</a></td>
<td>1922–1927</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Alfa_Romeo" title="Alfa Romeo">Alfa Romeo</a></td>
<td><a href="/wiki/Alfa_Romeo_Spider" title="Alfa Romeo Spider">Spider</a></td>
<td>1966–1993</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Alfa_Romeo" title="Alfa Romeo">Alfa Romeo</a></td>
<td><a href="/wiki/Alfa_Romeo_SZ" title="Alfa Romeo SZ">SZ</a></td>
<td>1989–1991</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Alfa_Romeo" title="Alfa Romeo">Alfa Romeo</a></td>
<td><a href="/wiki/Alfa_Romeo_SZ" title="Alfa Romeo SZ">RZ</a></td>
<td>1992–1994</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Alfa_Romeo" title="Alfa Romeo">Alfa Romeo</a></td>
<td><a href="/wiki/Alfa_Romeo_GTV_and_Spider" title="Alfa Romeo GTV and Spider">Spider 916</a></td>
<td>1995–2006</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Alfa_Romeo" title="Alfa Romeo">Alfa Romeo</a></td>
<td><a href="/wiki/Alfa_Romeo_GTV_and_Spider" title="Alfa Romeo GTV and Spider">GTV 916</a></td>
<td>1995–2005</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Alpine_automobile" title="Alpine automobile">Alpine</a></td>
<td><a href="/wiki/Alpine_A106" title="Alpine A106">A106</a></td>
<td>1955–1961</td>
<td>Coupé</td>
<td>France</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Alpine_automobile" title="Alpine automobile">Alpine</a></td>
<td><a href="/wiki/Alpine_A108" title="Alpine A108">A108</a></td>
<td>1958-1965</td>
<td>Coupé</td>
<td>France</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Alpine_automobile" title="Alpine automobile">Alpine</a></td>
<td><a href="/wiki/Alpine_A110" title="Alpine A110">A110</a></td>
<td>1961-1977</td>
<td>Coupé</td>
<td>France</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Alpine_automobile" title="Alpine automobile">Alpine</a></td>
<td><a href="/wiki/Alpine_A310" title="Alpine A310">A310</a></td>
<td>1971–1984</td>
<td>Coupé</td>
<td>France</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ariel_Motor_Company" title="Ariel Motor Company">Ariel</a></td>
<td><a href="/wiki/Ariel_Atom" title="Ariel Atom">Atom</a></td>
<td>2000—Present</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Arrinera" title="Arrinera">Arrinera</a></td>
<td><a href="/wiki/Arrinera_Hussarya" title="Arrinera Hussarya">Hussarya</a></td>
<td>2013–Present</td>
<td>Coupé</td>
<td><a href="/wiki/Poland" title="Poland">Poland</a></td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Artega_Automobile" title="Artega Automobile">Artega</a></td>
<td><a href="/wiki/Artega_GT" title="Artega GT">GT</a></td>
<td>2009-2012</td>
<td>Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ascari_Cars" title="Ascari Cars">Ascari</a></td>
<td><a href="/wiki/Ascari_Ecosse" title="Ascari Ecosse">Ecosse</a></td>
<td>1998–1999</td>
<td>Coupé</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ascari_Cars" title="Ascari Cars">Ascari</a></td>
<td><a href="/wiki/Ascari_KZ1" title="Ascari KZ1">KZ1</a></td>
<td>2003–present</td>
<td>Coupé</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ascari_Cars" title="Ascari Cars">Ascari</a></td>
<td><a href="/wiki/Ascari_KZ1" title="Ascari KZ1">KZ1-R</a></td>
<td>2005–present</td>
<td>Coupé</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ascari_Cars" title="Ascari Cars">Ascari</a></td>
<td><a href="/wiki/Ascari_A10" title="Ascari A10">A10</a></td>
<td>2006–present</td>
<td>Coupé</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Aspid_GT-21_Invictus" title="Aspid GT-21 Invictus">Aspid</a></td>
<td><a href="/wiki/Aspid_GT-21_Invictus" title="Aspid GT-21 Invictus">Aspid GT-21 Invictus</a></td>
<td>2013–present</td>
<td>Coupé</td>
<td>Spain</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Aspid_GT-21_Invictus" title="Aspid GT-21 Invictus">Aspid</a></td>
<td><a href="/wiki/IFR_Aspid" title="IFR Aspid">IFR Aspid</a></td>
<td>2008–Present</td>
<td>Coupé</td>
<td>Spain</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Aston_Martin" title="Aston Martin">Aston Martin</a></td>
<td><a href="/wiki/Aston_Martin_Vantage" title="Aston Martin Vantage">Vantage</a></td>
<td>2005–present</td>
<td>Coupé, Roadster</td>
<td>United Kingdom</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Audi" title="Audi">Audi</a></td>
<td><a href="/wiki/Audi_R8" title="Audi R8">R8</a></td>
<td>2006–present</td>
<td>Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Audi" title="Audi">Audi</a></td>
<td><a href="/wiki/Audi_TT" title="Audi TT">TT</a></td>
<td>1998–present</td>
<td>Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Austin_Motor_Company" title="Austin Motor Company">Austin</a></td>
<td><a href="/wiki/Austin_7" title="Austin 7">7</a></td>
<td>1922–1939</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Austin_Motor_Company" title="Austin Motor Company">Austin</a></td>
<td><a href="/wiki/Austin_Atlantic" class="mw-redirect" title="Austin Atlantic">Atlantic</a></td>
<td>1949–1952</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Austin_Motor_Company" title="Austin Motor Company">Austin</a></td>
<td><a href="/wiki/Austin_A40_Sports" title="Austin A40 Sports">A40 Sports</a></td>
<td>1950-1953</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Austin_Motor_Company" title="Austin Motor Company">Austin</a></td>
<td><a href="/wiki/Austin_Twenty" title="Austin Twenty">Twenty</a></td>
<td>1919–1930</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Austin-Healey" title="Austin-Healey">Austin-Healey</a></td>
<td><a href="/wiki/Austin-Healey_100" title="Austin-Healey 100">100</a></td>
<td>1953–1956</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Austin-Healey" title="Austin-Healey">Austin-Healey</a></td>
<td><a href="/wiki/Austin-Healey_100-6" title="Austin-Healey 100-6">100-6</a></td>
<td>1956-1959</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Austin-Healey" title="Austin-Healey">Austin-Healey</a></td>
<td><a href="/wiki/Austin-Healey_3000" title="Austin-Healey 3000">3000</a></td>
<td>1959–1967</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Austin-Healey" title="Austin-Healey">Austin-Healey</a></td>
<td><a href="/wiki/Austin-Healey_Sprite" title="Austin-Healey Sprite">Sprite</a></td>
<td>1958–1971</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Bentley" title="Bentley">Bentley</a></td>
<td><a href="/wiki/Bentley_Continental_GT" title="Bentley Continental GT">Continental GT</a></td>
<td>2003–present</td>
<td>Coupé</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/BMW" title="BMW">BMW</a></td>
<td><a href="/wiki/BMW_3/15" title="BMW 3/15">3/15</a></td>
<td>1927-1930</td>
<td>Roadster</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/BMW" title="BMW">BMW</a></td>
<td><a href="/wiki/BMW_315" class="mw-redirect" title="BMW 315">315/1</a></td>
<td>1934–1937</td>
<td>Roadster</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/BMW" title="BMW">BMW</a></td>
<td><a href="/wiki/BMW_315" class="mw-redirect" title="BMW 315">319/1</a></td>
<td>1935-1936</td>
<td>Roadster</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/BMW" title="BMW">BMW</a></td>
<td><a href="/wiki/BMW_328" title="BMW 328">328</a></td>
<td>1936–1940</td>
<td>Roadster</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/BMW" title="BMW">BMW</a></td>
<td><a href="/wiki/BMW_507" title="BMW 507">507</a></td>
<td>1956–1959</td>
<td>Roadster</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/BMW" title="BMW">BMW</a></td>
<td><a href="/wiki/BMW_M_Roadster" title="BMW M Roadster">M Roadster</a></td>
<td>1998–2002</td>
<td>Roadster</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/BMW" title="BMW">BMW</a></td>
<td><a href="/wiki/BMW_M1" title="BMW M1">M1</a></td>
<td>1978–1981</td>
<td>Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/BMW" title="BMW">BMW</a></td>
<td><a href="/wiki/BMW_Z1" title="BMW Z1">Z1</a></td>
<td>1989-1991</td>
<td>Roadster</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/BMW" title="BMW">BMW</a></td>
<td><a href="/wiki/BMW_Z3_E36/4" class="mw-redirect" title="BMW Z3 E36/4">Z3</a></td>
<td>1996–2002</td>
<td>Roadster</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/BMW" title="BMW">BMW</a></td>
<td><a href="/wiki/BMW_Z4" title="BMW Z4">Z4</a></td>
<td>2002–present</td>
<td>Roadster, Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/BMW" title="BMW">BMW</a></td>
<td><a href="/wiki/BMW_Z8" title="BMW Z8">Z8</a></td>
<td>1999–2003</td>
<td>Roadster</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Bugatti" title="Bugatti">Bugatti</a></td>
<td><a href="/wiki/Bugatti_Type_13" title="Bugatti Type 13">Type 13</a></td>
<td>1910-1920</td>
<td>Roadster</td>
<td>France</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Bugatti" title="Bugatti">Bugatti</a></td>
<td><a href="/wiki/Bugatti_Type_18" title="Bugatti Type 18">Type 18</a></td>
<td>1912-1914</td>
<td>Roadster</td>
<td>France</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Bugatti" title="Bugatti">Bugatti</a></td>
<td><a href="/wiki/Bugatti_Type_55" title="Bugatti Type 55">Type 55</a></td>
<td>1932-1935</td>
<td>Roadster</td>
<td>France</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Bugatti" title="Bugatti">Bugatti</a></td>
<td><a href="/wiki/Bugatti_Type_252" title="Bugatti Type 252">Type 252</a></td>
<td>1957-1962</td>
<td>Roadster</td>
<td>France</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Bugatti" title="Bugatti">Bugatti</a></td>
<td><a href="/wiki/Bugatti_EB110" class="mw-redirect" title="Bugatti EB110">EB110</a></td>
<td>1991–1995</td>
<td>Coupé</td>
<td>France</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Buick" title="Buick">Buick</a></td>
<td><a href="/wiki/Buick_Reatta" title="Buick Reatta">Reatta</a></td>
<td>1988–1991</td>
<td>Roadster</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Cadillac" title="Cadillac">Cadillac</a></td>
<td><a href="/wiki/Cadillac_Allant%C3%A9" title="Cadillac Allanté">Allanté</a></td>
<td>1987–1993</td>
<td>Roadster</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Cadillac" title="Cadillac">Cadillac</a></td>
<td><a href="/wiki/Cadillac_XLR" title="Cadillac XLR">XLR</a></td>
<td>2003–2009</td>
<td>Roadster</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Caparo_Vehicle_Technologies" title="Caparo Vehicle Technologies">Caparo</a></td>
<td><a href="/wiki/Caparo_T1" title="Caparo T1">T1</a></td>
<td>2008–Present</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Caterham_Cars" title="Caterham Cars">Caterham</a></td>
<td><a href="/wiki/Caterham_21" title="Caterham 21">21</a></td>
<td>1994-2001</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Caterham_Cars" title="Caterham Cars">Caterham</a></td>
<td><a href="/wiki/Caterham_7" title="Caterham 7">7</a></td>
<td>1973—present</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Chevrolet" title="Chevrolet">Chevrolet</a></td>
<td><a href="/wiki/Chevrolet_Camaro" title="Chevrolet Camaro">Camaro</a></td>
<td>1967–2002, 2010–present</td>
<td>Coupé</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Chevrolet" title="Chevrolet">Chevrolet</a></td>
<td><a href="/wiki/Chevrolet_Corvette" title="Chevrolet Corvette">Corvette</a></td>
<td>1953–presentall versions</td>
<td>Roadster, Coupé</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Chevrolet" title="Chevrolet">Chevrolet</a></td>
<td><a href="/wiki/Opel_Calibra" title="Opel Calibra">Calibra</a></td>
<td>1989–1997</td>
<td>Coupé</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Chrysler" title="Chrysler">Chrysler</a></td>
<td><a href="/wiki/Mitsubishi_Starion" title="Mitsubishi Starion">Conquest</a></td>
<td>1987–1989</td>
<td>Coupé</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Chrysler" title="Chrysler">Chrysler</a></td>
<td><a href="/wiki/Dodge_Viper" title="Dodge Viper">Viper</a></td>
<td>1996–2002</td>
<td>Roadster, Coupé</td>
<td>United States</td>
<td>sold only in Europe</td>
</tr>
<tr>
<td><a href="/wiki/Chrysler" title="Chrysler">Chrysler</a></td>
<td><a href="/wiki/Plymouth_Prowler" title="Plymouth Prowler">Chrysler Prowler</a></td>
<td>1997-2002</td>
<td>Roadster</td>
<td>United States</td>
<td>luxury variant of the plymouth version</td>
</tr>
<tr>
<td><a href="/wiki/Chrysler" title="Chrysler">Chrysler</a></td>
<td><a href="/wiki/Chrysler_Crossfire" title="Chrysler Crossfire">Crossfire</a></td>
<td>2003–2007</td>
<td>Roadster, Coupé</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Clan_car" title="Clan car">Clan</a></td>
<td><a href="/wiki/Clan_car" title="Clan car">Crusader</a></td>
<td>1971-1974, 1982-1987</td>
<td>Coupé</td>
<td>England/<a href="/wiki/Northern_Ireland" title="Northern Ireland">Northern Ireland</a></td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Cizeta" title="Cizeta">Cizeta</a></td>
<td><a href="/wiki/Cizeta-Moroder_V16T" title="Cizeta-Moroder V16T">Moroder V16T</a></td>
<td>1991–present</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/GM_Korea" title="GM Korea">Daewoo</a></td>
<td><a href="/wiki/Saturn_Sky" title="Saturn Sky">G2X</a></td>
<td>2006–2009</td>
<td>Roadster</td>
<td><a href="/wiki/South_Korea" title="South Korea">South Korea</a></td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/GM_Korea" title="GM Korea">Daewoo</a></td>
<td><a href="/wiki/Opel_Speedster" title="Opel Speedster">Speedster</a></td>
<td>2000–2005</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Daihatsu" title="Daihatsu">Daihatsu</a></td>
<td><a href="/wiki/Daihatsu_Copen" title="Daihatsu Copen">Copen</a></td>
<td>2002–2012</td>
<td>Roadster</td>
<td>Japan</td>
<td>the strength of the Yen caused its downfall</td>
</tr>
<tr>
<td><a href="/wiki/DC_Design" title="DC Design">DC Design</a></td>
<td><a href="/wiki/DC_Avanti" title="DC Avanti">DC Avanti</a></td>
<td>2012–present</td>
<td>Coupé</td>
<td>India</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Dodge" title="Dodge">Dodge</a></td>
<td><a href="/wiki/Dodge_Challenger" title="Dodge Challenger">Challenger</a></td>
<td>1958-1959, 1969–1974, 1978–1983, 2008–present</td>
<td>Coupé</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Dodge" title="Dodge">Dodge</a></td>
<td><a href="/wiki/Mitsubishi_Starion" title="Mitsubishi Starion">Conquest</a></td>
<td>1984-1986</td>
<td>Coupé</td>
<td>United States</td>
<td>North America only</td>
</tr>
<tr>
<td><a href="/wiki/Dodge" title="Dodge">Dodge</a></td>
<td><a href="/wiki/Mitsubishi_GTO" title="Mitsubishi GTO">Stealth</a></td>
<td>1991-1996</td>
<td>Coupé</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Dodge" title="Dodge">Dodge</a></td>
<td><a href="/wiki/Dodge_Viper" title="Dodge Viper">Viper</a></td>
<td>1992-2010</td>
<td>Coupé, Roadster</td>
<td>United States</td>
<td>SRT continued to use the viper</td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_125_S" title="Ferrari 125 S">125 S</a></td>
<td>1947</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_159_S" title="Ferrari 159 S">159 S</a></td>
<td>1947</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_166_S" title="Ferrari 166 S">166 S</a></td>
<td>1948-1953</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_195_S" title="Ferrari 195 S">195 S</a></td>
<td>1950</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_GT4" title="Ferrari GT4">208 GT4</a></td>
<td>1975-1980</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_212_Export" title="Ferrari 212 Export">212 Export</a></td>
<td>1951</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_212_Inter" title="Ferrari 212 Inter">212 Inter</a></td>
<td>1951-1952</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_250" title="Ferrari 250">225 S</a></td>
<td>1952</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_250" title="Ferrari 250">250</a></td>
<td>1953-1964</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_GT4" title="Ferrari GT4">308 GT4</a></td>
<td>1973-1980</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_308_GTB/GTS" title="Ferrari 308 GTB/GTS">308 GTB/GTS</a></td>
<td>1975-1985</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_328" title="Ferrari 328">328</a></td>
<td>1985-1989</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_330" title="Ferrari 330">330</a></td>
<td>1963–1968</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_348" title="Ferrari 348">348</a></td>
<td>1989-1995</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_360" title="Ferrari 360">360</a></td>
<td>1999-2005</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_550" title="Ferrari 550">550</a></td>
<td>1996–2001</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_Berlinetta_Boxer" title="Ferrari Berlinetta Boxer">365 GT4 BB</a></td>
<td>1973–1976</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_458_Italia" class="mw-redirect" title="Ferrari 458 Italia">458 Italia</a></td>
<td>2009–Present</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_Berlinetta_Boxer" title="Ferrari Berlinetta Boxer">512 BB</a></td>
<td>1973–1976</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_Testarossa" title="Ferrari Testarossa">512 TR</a></td>
<td>1991–1994</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Enzo_Ferrari_automobile" title="Enzo Ferrari automobile">Enzo Ferrari</a></td>
<td>2002-2004</td>
<td>Supercar</td>
<td>Italy</td>
<td>MSRP US $659,330</td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_F40" title="Ferrari F40">F40</a></td>
<td>1987-1992</td>
<td>Coupé</td>
<td>Italy</td>
<td>First production car to reach past 200&#160;mph and was world's fastest car from 1987-1990</td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_F50" title="Ferrari F50">F50</a></td>
<td>1995-1997</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_F355" title="Ferrari F355">F355</a></td>
<td>1994-1999</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_F430" title="Ferrari F430">F430</a></td>
<td>2004-2009</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/LaFerrari" title="LaFerrari">LaFerrari</a></td>
<td>2013–present</td>
<td>Coupé</td>
<td>Italy</td>
<td>First Ferrari with hybrid electric engine</td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_Mondial" title="Ferrari Mondial">Mondial</a></td>
<td>1980-1993</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_Testarossa" title="Ferrari Testarossa">F512 M</a></td>
<td>1992-1996</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ferrari" title="Ferrari">Ferrari</a></td>
<td><a href="/wiki/Ferrari_Testarossa" title="Ferrari Testarossa">Testarossa</a></td>
<td>1984-1996</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Fiat" class="mw-redirect" title="Fiat">Fiat</a></td>
<td><a href="/wiki/Fiat_850" title="Fiat 850">850 Spider</a></td>
<td>1964-1973</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Fiat" class="mw-redirect" title="Fiat">Fiat</a></td>
<td><a href="/wiki/Fiat_X1/9" title="Fiat X1/9">X1/9</a></td>
<td>1972–1982</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ford" class="mw-redirect" title="Ford">Ford</a></td>
<td><a href="/wiki/Ford_GT" title="Ford GT">GT</a></td>
<td>2004-2006</td>
<td>Coupé</td>
<td>United States</td>
<td>original suggested retail price of $139,995.00</td>
</tr>
<tr>
<td><a href="/wiki/Ford" class="mw-redirect" title="Ford">Ford</a></td>
<td><a href="/wiki/Ford_GT40" title="Ford GT40">GT40</a></td>
<td>1964-1969</td>
<td>Coupé</td>
<td>England</td>
<td>Only 107 units produced</td>
</tr>
<tr>
<td><a href="/wiki/Ford" class="mw-redirect" title="Ford">Ford</a></td>
<td><a href="/wiki/Ford_Mustang" title="Ford Mustang">Mustang</a></td>
<td>1965–present</td>
<td>Coupé</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ford" class="mw-redirect" title="Ford">Ford</a></td>
<td><a href="/wiki/Ford_RS200" title="Ford RS200">RS200</a></td>
<td>1984–1986</td>
<td>Coupé</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Holden" title="Holden">Holden</a></td>
<td><a href="/wiki/Opel_Tigra" title="Opel Tigra">Tigra</a></td>
<td>1994-2000, 2004-2009</td>
<td>Coupé</td>
<td>Australia</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Honda" title="Honda">Honda</a></td>
<td><a href="/wiki/Honda_CR-X" title="Honda CR-X">CR-X</a></td>
<td>1985–1991</td>
<td>Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Honda" title="Honda">Honda</a></td>
<td><a href="/wiki/Honda_Integra" title="Honda Integra">Integra</a></td>
<td>1985-2006</td>
<td>Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Honda" title="Honda">Honda</a></td>
<td><a href="/wiki/Honda_Prelude" title="Honda Prelude">Prelude</a></td>
<td>1979-2001</td>
<td>Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Honda" title="Honda">Honda</a></td>
<td><a href="/wiki/Honda_S2000" title="Honda S2000">S2000</a></td>
<td>1999-2009</td>
<td>Roadster, Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Honda" title="Honda">Honda</a></td>
<td><a href="/wiki/Honda_NSX" title="Honda NSX">NSX</a></td>
<td>1990-2005, 2016-</td>
<td>Coupé, Targa</td>
<td>Japan</td>
<td>Also known as Acura NSX</td>
</tr>
<tr>
<td><a href="/wiki/Hyundai" title="Hyundai">Hyundai</a></td>
<td><a href="/wiki/Hyundai_Tiburon" title="Hyundai Tiburon">Tiburon</a></td>
<td>1996-2008</td>
<td>Coupé</td>
<td><a href="/wiki/South_Korea" title="South Korea">South Korea</a></td>
<td>Also known as Hyundai coupe in Korean markets and Hyundai Tuscani in European markets.</td>
</tr>
<tr>
<td><a href="/wiki/Hyundai" title="Hyundai">Hyundai</a></td>
<td><a href="/wiki/Hyundai_Genesis_Coupe" title="Hyundai Genesis Coupe">Genesis Coupe</a></td>
<td>2008–2016</td>
<td>Coupé</td>
<td><a href="/wiki/South_Korea" title="South Korea">South Korea</a></td>
<td>Also available in a <a href="/wiki/Hyundai_Genesis" title="Hyundai Genesis">sedan</a></td>
</tr>
<tr>
<td><a href="/wiki/Infiniti" title="Infiniti">Infiniti</a></td>
<td><a href="/wiki/Infiniti_G-series" class="mw-redirect" title="Infiniti G-series">G37S Coupe</a></td>
<td>2008-2013</td>
<td>Coupe</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Isuzu" class="mw-redirect" title="Isuzu">Isuzu</a></td>
<td><a href="/wiki/Isuzu_117_Coup%C3%A9" title="Isuzu 117 Coupé">117 Coupé</a></td>
<td>1968-1981</td>
<td>Coupé</td>
<td>Japan</td>
<td>Isuzu's first and only grand tourer/Sports Car</td>
</tr>
<tr>
<td><a href="/wiki/Jaguar_Cars" title="Jaguar Cars">Jaguar</a></td>
<td><a href="/wiki/Jaguar_C-Type" title="Jaguar C-Type">C-Type</a></td>
<td>1951–1953</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Jaguar_Cars" title="Jaguar Cars">Jaguar</a></td>
<td><a href="/wiki/Jaguar_D-Type" title="Jaguar D-Type">D-Type</a></td>
<td>1954-1957</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Jaguar_Cars" title="Jaguar Cars">Jaguar</a></td>
<td><a href="/wiki/Jaguar_E-Type" title="Jaguar E-Type">E-Type</a></td>
<td>1961-1975</td>
<td>Roadster, Coupé</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Jaguar_Cars" title="Jaguar Cars">Jaguar</a></td>
<td><a href="/wiki/Jaguar_F-Type" title="Jaguar F-Type">F-Type</a></td>
<td>2013–present</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Jaguar_Cars" title="Jaguar Cars">Jaguar</a></td>
<td><a href="/wiki/Jaguar_SS100" class="mw-redirect" title="Jaguar SS100">SS 100</a></td>
<td>1936-1940</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Jaguar_Cars" title="Jaguar Cars">Jaguar</a></td>
<td><a href="/wiki/Jaguar_XK120" title="Jaguar XK120">XK120</a></td>
<td>1948-1954</td>
<td>Roadster, Coupé</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Jaguar_Cars" title="Jaguar Cars">Jaguar</a></td>
<td><a href="/wiki/Jaguar_XK140" title="Jaguar XK140">XK140</a></td>
<td>1954-1957</td>
<td>Roadster, Coupé</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Jaguar_Cars" title="Jaguar Cars">Jaguar</a></td>
<td><a href="/wiki/Jaguar_XK150" title="Jaguar XK150">XK150</a></td>
<td>1957-1961</td>
<td>Roadster, Coupé</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Jaguar_Cars" title="Jaguar Cars">Jaguar</a></td>
<td><a href="/wiki/Jaguar_XKSS" title="Jaguar XKSS">XKSS</a></td>
<td>1957, 2016</td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Koenigsegg" title="Koenigsegg">Koenigsegg</a></td>
<td><a href="/wiki/Koenigsegg_Agera" title="Koenigsegg Agera">Agera</a></td>
<td>2011–present</td>
<td>Targa</td>
<td>Sweden</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Koenigsegg" title="Koenigsegg">Koenigsegg</a></td>
<td><a href="/wiki/Koenigsegg_Agera_R" class="mw-redirect" title="Koenigsegg Agera R">Agera R</a></td>
<td>2012–present</td>
<td>Targa</td>
<td>Sweden</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Koenigsegg" title="Koenigsegg">Koenigsegg</a></td>
<td><a href="/wiki/Koenigsegg_Agera_S" class="mw-redirect" title="Koenigsegg Agera S">Agera S</a></td>
<td>2013–present</td>
<td>Targa</td>
<td>Sweden</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Koenigsegg" title="Koenigsegg">Koenigsegg</a></td>
<td><a href="/wiki/Koenigsegg_One:1" class="mw-redirect" title="Koenigsegg One:1">One:1</a></td>
<td>2014</td>
<td>Targa</td>
<td>Sweden</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Lancia" title="Lancia">Lancia</a></td>
<td><a href="/wiki/Lancia_Stratos" title="Lancia Stratos">Stratos</a></td>
<td>1973-1978</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Lamborghini" title="Lamborghini">Lamborghini</a></td>
<td><a href="/wiki/Lamborghini_Aventador" title="Lamborghini Aventador">Aventador</a></td>
<td>2011–Present</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Lamborghini" title="Lamborghini">Lamborghini</a></td>
<td><a href="/wiki/Lamborghini_Countach" title="Lamborghini Countach">Countach</a></td>
<td>1974-1990</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Lamborghini" title="Lamborghini">Lamborghini</a></td>
<td><a href="/wiki/Lamborghini_Diablo" title="Lamborghini Diablo">Diablo</a></td>
<td>1990-2001</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Lamborghini" title="Lamborghini">Lamborghini</a></td>
<td><a href="/wiki/Lamborghini_Gallardo" title="Lamborghini Gallardo">Gallardo</a></td>
<td>2003-2013</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Lamborghini" title="Lamborghini">Lamborghini</a></td>
<td><a href="/wiki/Lamborghini_Jalpa" title="Lamborghini Jalpa">Jalpa</a></td>
<td>1981-1988</td>
<td>Roadster</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Lamborghini" title="Lamborghini">Lamborghini</a></td>
<td><a href="/wiki/Lamborghini_Miura" title="Lamborghini Miura">Miura</a></td>
<td>1966-1973</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Lamborghini" title="Lamborghini">Lamborghini</a></td>
<td><a href="/wiki/Lamborghini_Murci%C3%A9lago" title="Lamborghini Murciélago">Murciélago</a></td>
<td>2002-2006</td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Lamborghini" title="Lamborghini">Lamborghini</a></td>
<td><a href="/wiki/Lamborghini_Sesto_Elemento" title="Lamborghini Sesto Elemento">Sesto Elemento</a></td>
<td>2011</td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Lexus" title="Lexus">Lexus</a></td>
<td><a href="/wiki/Lexus_LFA" title="Lexus LFA">LFA</a></td>
<td>2011-2012</td>
<td>Roadster, Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Lotus_Cars" title="Lotus Cars">Lotus</a></td>
<td><a href="/wiki/Lotus_Elan" title="Lotus Elan">Elan</a></td>
<td></td>
<td>Roadster, Coupé</td>
<td>United Kingdom</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Lotus_Cars" title="Lotus Cars">Lotus</a></td>
<td><a href="/wiki/Lotus_Elise" title="Lotus Elise">Elise</a></td>
<td></td>
<td>Roadster, Coupé</td>
<td>United Kingdom</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Lotus_Cars" title="Lotus Cars">Lotus</a></td>
<td><a href="/wiki/Lotus_Esprit" title="Lotus Esprit">Esprit</a></td>
<td>1976–2004</td>
<td>Coupé</td>
<td>United Kingdom</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/McLaren" title="McLaren">McLaren</a></td>
<td><a href="/wiki/McLaren_12C" title="McLaren 12C">12C</a></td>
<td>2011–2014</td>
<td>Roadster, Coupé</td>
<td>United Kingdom</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Maserati" title="Maserati">Maserati</a></td>
<td><a href="/wiki/Maserati_Bora" title="Maserati Bora">Bora</a></td>
<td></td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Maserati" title="Maserati">Maserati</a></td>
<td><a href="/wiki/Maserati_Ghibli" title="Maserati Ghibli">Ghibli</a></td>
<td></td>
<td>Roadster, Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Maserati" title="Maserati">Maserati</a></td>
<td><a href="/wiki/Maserati_Indy" title="Maserati Indy">Indy</a></td>
<td></td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Maserati" title="Maserati">Maserati</a></td>
<td><a href="/wiki/Maserati_Khamsin" title="Maserati Khamsin">Khamsin</a></td>
<td></td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Maserati" title="Maserati">Maserati</a></td>
<td><a href="/wiki/Maserati_MC12" title="Maserati MC12">MC12</a></td>
<td></td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Maserati" title="Maserati">Maserati</a></td>
<td><a href="/wiki/Maserati_Merak" title="Maserati Merak">Merak</a></td>
<td></td>
<td>Coupé</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Mastretta" title="Mastretta">Mastretta</a></td>
<td><a href="/wiki/Mastretta_MXT" title="Mastretta MXT">MXT</a></td>
<td></td>
<td>Coupé</td>
<td>Mexico</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Marussia" class="mw-redirect" title="Marussia">Marussia</a></td>
<td><a href="/wiki/Marussia_B-Series" title="Marussia B-Series">B-Series</a></td>
<td></td>
<td>Coupé</td>
<td>Russia</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Mazda" title="Mazda">Mazda</a></td>
<td><a href="/wiki/Mazda_MX-5" title="Mazda MX-5">Mazda MX-5</a></td>
<td>1989–present</td>
<td>Roadster</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Mazda" title="Mazda">Mazda</a></td>
<td><a href="/wiki/Mazda_RX-7" title="Mazda RX-7">Mazda RX-7</a></td>
<td></td>
<td>Roadster, Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Mazda" title="Mazda">Mazda</a></td>
<td><a href="/wiki/Mazda_RX-8" title="Mazda RX-8">Mazda RX-8</a></td>
<td></td>
<td>Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Mercedes-Benz" title="Mercedes-Benz">Mercedes-Benz</a></td>
<td><a href="/wiki/Mercedes-Benz_CLK" class="mw-redirect" title="Mercedes-Benz CLK">CLK</a></td>
<td>1954–present</td>
<td>Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Mercedes-Benz" title="Mercedes-Benz">Mercedes-Benz</a></td>
<td><a href="/wiki/Mercedes-Benz_SL_500" class="mw-redirect" title="Mercedes-Benz SL 500">SL 500</a></td>
<td>1954–present</td>
<td>Roadster, Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Mercedes-Benz" title="Mercedes-Benz">Mercedes-Benz</a></td>
<td><a href="/wiki/Mercedes-Benz_SLK" class="mw-redirect" title="Mercedes-Benz SLK">SLK</a></td>
<td></td>
<td>Coupé, Roadster</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_14/28" title="MG 14/28">14/28</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_14/40" title="MG 14/40">14/40</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_C-type" title="MG C-type">C-type</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_D-type" title="MG D-type">D-type</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_F_/_MG_TF" title="MG F / MG TF">MGF</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_F-type" title="MG F-type">F-type</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_J-type" title="MG J-type">J1</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_J-type" title="MG J-type">J2</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_J-type" title="MG J-type">J3</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_J-type" title="MG J-type">J4</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_K-type" title="MG K-type">K-type</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_L-type" title="MG L-type">L-type</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_M-type" title="MG M-type">M-type</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_N-type" title="MG N-type">N-type</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_MGA" title="MG MGA">MGA</a></td>
<td></td>
<td>Roadster, Coupé</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_MGB" title="MG MGB">MGB</a></td>
<td></td>
<td>Roadster, GT Fastback Coupé</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_MGB" title="MG MGB">MGC</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_Midget" title="MG Midget">Midget</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_P-type" title="MG P-type">PA</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_P-type" title="MG P-type">PB</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_T-type" title="MG T-type">TA</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_T-type" title="MG T-type">TB</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_T-type" title="MG T-type">TC</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_T-type" title="MG T-type">TD</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_T-type" title="MG T-type">TF</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/MG_Cars" title="MG Cars">MG</a></td>
<td><a href="/wiki/MG_F_/_MG_TF" title="MG F / MG TF">TF 2002</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Nissan_180SX" title="Nissan 180SX">180SX</a></td>
<td>1989-1998</td>
<td>Coupe</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Nissan_240SX" title="Nissan 240SX">Silvia</a></td>
<td>1989-1998</td>
<td>Coupe</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Datsun_Roadster" title="Datsun Roadster">Datsun Roadster/Road Star</a></td>
<td>1932-1941</td>
<td>Roadster, Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Datsun_DC-3" title="Datsun DC-3">Datsun DC-3</a></td>
<td>1952</td>
<td>Roadster</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Datsun_Sports#S211" title="Datsun Sports">Datsun Sports 1000</a></td>
<td>1959-1960</td>
<td>Roadster</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Datsun_Sports#SPL212" title="Datsun Sports">Datsun Fairlady/Sports 1200</a></td>
<td>1960-1961</td>
<td>Roadster</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Datsun_Sports#SPL213" title="Datsun Sports">Datsun Fairlady/Sports 1200</a></td>
<td>1961-1962</td>
<td>Roadster</td>
<td>Japan</td>
<td>engine change</td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Datsun_Sports#SP310.2FSPL310" title="Datsun Sports">Datsun Fairlady/Sports 1500</a></td>
<td>1963-1965</td>
<td>Roadster</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Datsun_Sports#SP311.2FSPL311" title="Datsun Sports">Datsun Fairlady/Sports 1600</a></td>
<td>1965-1970</td>
<td>Roadster</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Datsun_Sports#SR311.2FSRL311" title="Datsun Sports">Datsun Fairlady/Sports 2000</a></td>
<td>1967-1970</td>
<td>Roadster</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Nissan_240SX" title="Nissan 240SX">Nissan 240SX/Nissan Silvia</a></td>
<td>1989-1998</td>
<td>Coupe</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Nissan_S30#240Z" title="Nissan S30">Fairlady Z/Datsun 240Z</a></td>
<td>1970-1973</td>
<td>Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Nissan_S30#260Z" title="Nissan S30">Fairlady Z/Datsun 260Z</a></td>
<td>1974-1978</td>
<td>Coupé and 2+2</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Nissan_S30#280Z" title="Nissan S30">Fairlady Z/Datsun 280Z</a></td>
<td>1975-1978</td>
<td>Coupé and 2+2</td>
<td>Japan</td>
<td>North America only</td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Nissan_S130" title="Nissan S130">Fairlady Z/Datsun 280ZX</a></td>
<td>1978-1983</td>
<td>Coupé and 2+2</td>
<td>Japan</td>
<td>North America and Australia only</td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Nissan_300ZX" title="Nissan 300ZX">Fairlady Z/300ZX</a></td>
<td>1984-1996</td>
<td>Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Nissan_350Z" title="Nissan 350Z">Fairlady Z/350Z</a></td>
<td>2003-2008</td>
<td>Roadster, Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Nissan_370Z" title="Nissan 370Z">Fairlady Z/370Z</a></td>
<td>2009–present</td>
<td>Roadster, Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Nissan_GT-R" title="Nissan GT-R">Nissan GT-R</a></td>
<td>2007–present</td>
<td>Coupé</td>
<td>Japan</td>
<td>Also known as <a href="/wiki/Nissan_Skyline_GT-R" title="Nissan Skyline GT-R">Nissan Skyline GT-R</a></td>
</tr>
<tr>
<td><a href="/wiki/Nissan" title="Nissan">Nissan</a></td>
<td><a href="/wiki/Nissan_Skyline" title="Nissan Skyline">Nissan Skyline</a></td>
<td>1957–present</td>
<td>Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Opel" title="Opel">Opel</a></td>
<td><a href="/wiki/Opel_Calibra" title="Opel Calibra">Calibra</a></td>
<td></td>
<td>Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Opel" title="Opel">Opel</a></td>
<td><a href="/wiki/Bitter_Cars" title="Bitter Cars">CD</a></td>
<td></td>
<td>Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Opel" title="Opel">Opel</a></td>
<td><a href="/wiki/Opel_GT" title="Opel GT">GT</a></td>
<td></td>
<td>Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Opel" title="Opel">Opel</a></td>
<td><a href="/wiki/Opel_Manta" title="Opel Manta">Manta</a></td>
<td></td>
<td>Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Opel" title="Opel">Opel</a></td>
<td><a href="/wiki/Opel_Speedster" title="Opel Speedster">Speedster</a></td>
<td></td>
<td>Roadster</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Orca_Engineering" title="Orca Engineering">Orca</a></td>
<td><a href="/wiki/Orca_Engineering" title="Orca Engineering">113 Series</a></td>
<td></td>
<td>Coupé, Roadster</td>
<td><a href="/wiki/Liechtenstein" title="Liechtenstein">Liechtenstein</a></td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Panoz" class="mw-redirect" title="Panoz">Panoz</a></td>
<td><a href="/wiki/Panoz_Roadster" title="Panoz Roadster">Roadster</a></td>
<td></td>
<td>Roadster</td>
<td>United States</td>
<td>Derived from the <a href="/wiki/TMC_Costin" title="TMC Costin">TMC Costin</a></td>
</tr>
<tr>
<td><a href="/wiki/Panoz" class="mw-redirect" title="Panoz">Panoz</a></td>
<td><a href="/wiki/Panoz_Esperante" title="Panoz Esperante">Esperante</a></td>
<td></td>
<td>Roadster, Coupé</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Pontiac" title="Pontiac">Pontiac</a></td>
<td><a href="/wiki/Pontiac_Fiero" title="Pontiac Fiero">Fiero</a></td>
<td>1984-1988</td>
<td>Coupé</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Pontiac" title="Pontiac">Pontiac</a></td>
<td><a href="/wiki/Pontiac_Firebird" title="Pontiac Firebird">Firebird</a></td>
<td>1967–2002</td>
<td>Coupé, Convertible</td>
<td>United States</td>
<td>Also known as <a href="/wiki/Pontiac_Trans_Am" class="mw-redirect" title="Pontiac Trans Am">Pontiac Trans Am</a></td>
</tr>
<tr>
<td><a href="/wiki/Pontiac" title="Pontiac">Pontiac</a></td>
<td><a href="/wiki/Pontiac_GTO" title="Pontiac GTO">GTO</a></td>
<td>1964–1974, 2004–2006</td>
<td>Coupe</td>
<td>United States, Australia</td>
<td>Also known as <a href="/wiki/Holden_Monaro" title="Holden Monaro">Holden Monaro</a></td>
</tr>
<tr>
<td><a href="/wiki/Pontiac" title="Pontiac">Pontiac</a></td>
<td><a href="/wiki/Pontiac_Solstice" title="Pontiac Solstice">Solstice</a></td>
<td>2006–2009</td>
<td>Roadster</td>
<td>United States</td>
<td>more powerful version of the Saturn variant</td>
</tr>
<tr>
<td>Porsche</td>
<td>959</td>
<td>1986-1988, 1992-1993</td>
<td>Coupe</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td>Porsche</td>
<td>911 GT1</td>
<td>1996-1997</td>
<td>Coupe, Supercar</td>
<td>Germany</td>
<td>Limited production</td>
</tr>
<tr>
<td>Porsche</td>
<td>918 Spyder</td>
<td>2013-2015</td>
<td>Supercar</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td>Porsche</td>
<td>Carrera GT</td>
<td>2003-2007</td>
<td>Supercar</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_356" title="Porsche 356">356</a></td>
<td>1948–1965</td>
<td>Roadster, Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_550" title="Porsche 550">550</a></td>
<td>1953-1956</td>
<td>Roadster, Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_718" title="Porsche 718">718</a></td>
<td>1957</td>
<td>Roadster, Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_904" title="Porsche 904">904</a></td>
<td>1964-1965</td>
<td>Coupé</td>
<td>Germany</td>
<td>Also known as the Carrera GTS</td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_911_classic" class="mw-redirect" title="Porsche 911 classic">911</a></td>
<td>1964-1989</td>
<td>Roadster, Targa, Coupé</td>
<td>Germany</td>
<td>Many variations continued after 1989</td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_912" title="Porsche 912">912</a></td>
<td>1965 – 1969</td>
<td>Targa, Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_914" title="Porsche 914">914</a></td>
<td>1969–1976</td>
<td>Targa</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_924" title="Porsche 924">924</a></td>
<td>1976–1988</td>
<td>Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_928" title="Porsche 928">928</a></td>
<td>1977–1995</td>
<td>Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_930" title="Porsche 930">930</a></td>
<td>1975-1989</td>
<td>Roadster, Coupé</td>
<td>Germany</td>
<td>Also known as Porsche 911 Turbo</td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_944" title="Porsche 944">944</a></td>
<td>1982–1991</td>
<td>Roadster, Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_964" title="Porsche 964">964</a></td>
<td>1989–1994</td>
<td>Roadster, Targa, Coupé</td>
<td>Germany</td>
<td>Also known as <a href="/wiki/Porsche_911" title="Porsche 911">Porsche 911</a></td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_968" title="Porsche 968">968</a></td>
<td>1992–1995</td>
<td>Roadster, Coupé</td>
<td>Germany</td>
<td>Successor to <a href="/wiki/Porsche_944" title="Porsche 944">Porsche 944</a></td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_993" title="Porsche 993">993</a></td>
<td>1993–1998</td>
<td>Roadster, Coupé</td>
<td>Germany</td>
<td>Also known as <a href="/wiki/Porsche_911" title="Porsche 911">Porsche 911</a></td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_996" title="Porsche 996">996</a></td>
<td>1997-2004</td>
<td>Roadster, Coupé</td>
<td>Germany</td>
<td>Also known as <a href="/wiki/Porsche_911" title="Porsche 911">Porsche 911</a></td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_997" title="Porsche 997">997</a></td>
<td>2004–2012</td>
<td>Roadster, Coupé</td>
<td>Germany</td>
<td>Also known as <a href="/wiki/Porsche_911" title="Porsche 911">Porsche 911</a></td>
</tr>
<tr>
<td>Porsche</td>
<td>991</td>
<td>2013–Present</td>
<td>Roadseter, Coupe, Targa</td>
<td>Germany</td>
<td>Also known as Porsche 911</td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_Boxster" class="mw-redirect" title="Porsche Boxster">Boxster</a></td>
<td>1996–Present</td>
<td>Roadster</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_Cayman" class="mw-redirect" title="Porsche Cayman">Cayman</a></td>
<td>2005–present</td>
<td>Coupé</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Porsche" title="Porsche">Porsche</a></td>
<td><a href="/wiki/Porsche_Carrera_GT" title="Porsche Carrera GT">Carrera GT</a></td>
<td>2004–2007</td>
<td>Supercar</td>
<td>Germany</td>
<td>MSRP of US$448,000</td>
</tr>
<tr>
<td><a href="/wiki/Renault" title="Renault">Renault</a></td>
<td><a href="/wiki/Renault_15/17" class="mw-redirect" title="Renault 15/17">15/17</a></td>
<td></td>
<td>Roadster</td>
<td>France</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Renault" title="Renault">Renault</a></td>
<td><a href="/wiki/Renault_Alpine_GTA/A610" title="Renault Alpine GTA/A610">Alpine GTA</a></td>
<td></td>
<td>Coupé</td>
<td>France</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Renault" title="Renault">Renault</a></td>
<td><a href="/wiki/Renault_Fuego" title="Renault Fuego">Fuego</a></td>
<td></td>
<td>Coupé</td>
<td>France</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Renault" title="Renault">Renault</a></td>
<td><a href="/wiki/Renault_Wind" title="Renault Wind">Wind</a></td>
<td></td>
<td>Roadster</td>
<td>France</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Saturn_Corporation" title="Saturn Corporation">Saturn</a></td>
<td><a href="/wiki/Saturn_Sky" title="Saturn Sky">Sky</a></td>
<td></td>
<td>Roadster</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Scion_automobile" title="Scion automobile">Scion</a></td>
<td><a href="/wiki/Toyota_86" title="Toyota 86">Scion FR-S</a></td>
<td>2012–present</td>
<td>Coupé</td>
<td>Japan</td>
<td>The same as the Toyota 86, except with HD audio on all models</td>
</tr>
<tr>
<td><a href="/wiki/SEAT" title="SEAT">SEAT</a></td>
<td><a href="/wiki/SEAT_850" title="SEAT 850">850 Spider</a></td>
<td></td>
<td>Roadster</td>
<td>Spain</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/SEAT" title="SEAT">SEAT</a></td>
<td><a href="/wiki/SEAT_Cupra_GT" title="SEAT Cupra GT">Cupra GT</a></td>
<td></td>
<td>Coupé</td>
<td>Spain</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/SSC_North_America" title="SSC North America">SSC North America</a></td>
<td><a href="/wiki/SSC_Aero" title="SSC Aero">Aero</a></td>
<td></td>
<td>Coupé</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/SSC_North_America" title="SSC North America">SSC North America</a></td>
<td><a href="/wiki/SSC_Tuatara" title="SSC Tuatara">Tuatara</a></td>
<td></td>
<td>Coupé</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/%C5%A0koda_Auto" title="Škoda Auto">Škoda</a></td>
<td><a href="/wiki/%C5%A0koda_Rapid_1984" title="Škoda Rapid 1984">Rapid Sport</a></td>
<td></td>
<td>Roadster</td>
<td><a href="/wiki/Czech_Republic" title="Czech Republic">Czech Republic</a></td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Street_%26_Racing_Technology" title="Street &amp; Racing Technology">SRT</a></td>
<td><a href="/wiki/Chrysler_Crossfire" title="Chrysler Crossfire">Chrysler Crossfire SRT</a></td>
<td></td>
<td>Roadster,Coupé</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Street_%26_Racing_Technology" title="Street &amp; Racing Technology">SRT</a></td>
<td><a href="/wiki/Dodge_Viper" title="Dodge Viper">Dodge Viper SRT</a></td>
<td>2006-2010</td>
<td>Roadster, Coupé</td>
<td>United States</td>
<td>Renamed the SRT Viper</td>
</tr>
<tr>
<td><a href="/wiki/Street_%26_Racing_Technology" title="Street &amp; Racing Technology">SRT</a></td>
<td><a href="/wiki/Dodge_Viper" title="Dodge Viper">Viper</a></td>
<td>2012–present</td>
<td>Roadster, Coupé</td>
<td>United States</td>
<td>Replaced the Dodge and Chrysler Vipers</td>
</tr>
<tr>
<td><a href="/wiki/SS_Cars_Ltd" title="SS Cars Ltd">SS</a></td>
<td><a href="/wiki/SS_90" title="SS 90">90</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Sunbeam_Motor_Car_Company" title="Sunbeam Motor Car Company">Sunbeam</a></td>
<td><a href="/wiki/Sunbeam_Alpine" title="Sunbeam Alpine">Alpine</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Sylva</a></td>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Fury</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Sylva</a></td>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">J15</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Sylva</a></td>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Jester</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Sylva</a></td>
<td><a href="/wiki/Sylva_Leader" title="Sylva Leader">Leader</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Sylva</a></td>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Mojo</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Sylva</a></td>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Mojo 2</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Sylva</a></td>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Mojo SE</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Sylva</a></td>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Phoenix</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Sylva</a></td>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">R1ot</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td>Also known as Riot</td>
</tr>
<tr>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Sylva</a></td>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Star</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Sylva</a></td>
<td><a href="/wiki/Sylva_Striker" title="Sylva Striker">Striker</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Sylva</a></td>
<td><a href="/wiki/Sylva_Autokits" title="Sylva Autokits">Stylus</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Subaru" title="Subaru">Subaru</a></td>
<td><a href="/wiki/Toyota_86" title="Toyota 86">BRZ</a></td>
<td>2012–present</td>
<td>Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Tata_Motors" title="Tata Motors">Tata Motors</a></td>
<td><a href="/wiki/TaMo_Racemo" title="TaMo Racemo">TaMo Racemo</a></td>
<td>2017–present</td>
<td>Coupé</td>
<td>India</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Tauro_Sport_Auto" title="Tauro Sport Auto">Tauro</a></td>
<td><a href="/wiki/Tauro_Sport_Auto" title="Tauro Sport Auto">V8</a></td>
<td></td>
<td>Roadster, Coupé</td>
<td>Spain</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/SSZ_Motorcars" class="mw-redirect" title="SSZ Motorcars">SSZ Motorcars</a></td>
<td><a href="/wiki/SSZ_Stradale" title="SSZ Stradale">SSZ Stradale</a></td>
<td>1984-1999</td>
<td>Coupé</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/TMC_Costin" title="TMC Costin">TMC Costin</a></td>
<td><a href="/wiki/TMC_Costin" title="TMC Costin">Costin</a></td>
<td></td>
<td>Roadster, Coupé</td>
<td>Ireland</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Tesla_Motors" class="mw-redirect" title="Tesla Motors">Tesla</a></td>
<td><a href="/wiki/Tesla_Roadster" title="Tesla Roadster">Roadster</a></td>
<td>2008-2012</td>
<td>Roadster, Coupé</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Toyota" title="Toyota">Toyota</a></td>
<td><a href="/wiki/Toyota_86" title="Toyota 86">86</a></td>
<td></td>
<td>Roadster, Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Toyota" title="Toyota">Toyota</a></td>
<td><a href="/wiki/Toyota_2000GT" title="Toyota 2000GT">2000GT</a></td>
<td></td>
<td>Roadster, Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Toyota" title="Toyota">Toyota</a></td>
<td><a href="/wiki/Toyota_Celica" title="Toyota Celica">Celica</a></td>
<td></td>
<td>Roadster, Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Toyota" title="Toyota">Toyota</a></td>
<td><a href="/wiki/Toyota_MR2" title="Toyota MR2">MR2</a></td>
<td></td>
<td>Roadster, Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Toyota" title="Toyota">Toyota</a></td>
<td><a href="/wiki/Toyota_Sport_800" class="mw-redirect" title="Toyota Sport 800">Sport 800</a></td>
<td></td>
<td>Roadster, Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Toyota" title="Toyota">Toyota</a></td>
<td><a href="/wiki/Toyota_Supra" title="Toyota Supra">Supra</a></td>
<td></td>
<td>Coupé</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Vauxhall" title="Vauxhall">Vauxhall</a></td>
<td><a href="/wiki/Opel_Speedster" title="Opel Speedster">VX220</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Volkswagen" title="Volkswagen">Volkswagen</a></td>
<td><a href="/wiki/Volkswagen" title="Volkswagen">Karmann Ghia</a></td>
<td></td>
<td>Coupe</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Volvo" title="Volvo">Volvo</a></td>
<td><a href="/wiki/Volvo" title="Volvo">480</a></td>
<td>1986-1995</td>
<td>Coupe</td>
<td>Sweden</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Westfield_Sportscars" title="Westfield Sportscars">Westfield</a></td>
<td><a href="/wiki/Westfield_Sportscars" title="Westfield Sportscars">FW400</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Westfield_Sportscars" title="Westfield Sportscars">Westfield</a></td>
<td><a href="/wiki/Westfield_Sportscars" title="Westfield Sportscars">Megablade</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Westfield_Sportscars" title="Westfield Sportscars">Westfield</a></td>
<td><a href="/wiki/Westfield_Megabusa" title="Westfield Megabusa">Megabusa</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Westfield_Sportscars" title="Westfield Sportscars">Westfield</a></td>
<td><a href="/wiki/Westfield_Sportscars" title="Westfield Sportscars">SDV</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Westfield_Sportscars" title="Westfield Sportscars">Westfield</a></td>
<td><a href="/wiki/Westfield_Sportscars" title="Westfield Sportscars">SE</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Westfield_Sportscars" title="Westfield Sportscars">Westfield</a></td>
<td><a href="/wiki/Westfield_Sportscars" title="Westfield Sportscars">SEi</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Westfield_Sportscars" title="Westfield Sportscars">Westfield</a></td>
<td><a href="/wiki/Westfield_SEight" title="Westfield SEight">SEight</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Westfield_Sportscars" title="Westfield Sportscars">Westfield</a></td>
<td><a href="/wiki/Lotus_Eleven" title="Lotus Eleven">XI</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Westfield_Sportscars" title="Westfield Sportscars">Westfield</a></td>
<td><a href="/wiki/Westfield_XTR2" title="Westfield XTR2">XTR2</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Westfield_Sportscars" title="Westfield Sportscars">Westfield</a></td>
<td><a href="/wiki/Westfield_XTR2" title="Westfield XTR2">XTR4</a></td>
<td></td>
<td>Roadster</td>
<td>England</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/W_Motors" title="W Motors">W Motors</a></td>
<td><a href="/w/index.php?title=Fenyr_SuperSport&amp;action=edit&amp;redlink=1" class="new" title="Fenyr SuperSport page does not exist">Fenyr SuperSport</a></td>
<td>2017-</td>
<td><a href="/wiki/Coup%C3%A9" title="Coupé">Coupé</a></td>
<td><a href="/wiki/Lebanon" title="Lebanon">Lebanon</a></td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/W_Motors" title="W Motors">W Motors</a></td>
<td><a href="/wiki/Lykan_HyperSport" title="Lykan HyperSport">Lykan HyperSport</a></td>
<td>2013-2017</td>
<td><a href="/wiki/Coup%C3%A9" title="Coupé">Coupé</a></td>
<td><a href="/wiki/Lebanon" title="Lebanon">Lebanon</a></td>
<td></td>
</tr>
</table>
<h2><span class="mw-headline" id="Sport_Trims">Sport Trims</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_sports_cars&amp;action=edit&amp;section=2" title="Edit section: Sport Trims">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
<table class="wikitable sortable" style="font-size: 90%;">
<tr>
<th style="width:12%;">Manufacturer</th>
<th style="width:20%;">Model/Trim</th>
<th style="width:13%;">Years</th>
<th style="width:15%;">Styles</th>
<th style="width:15%;">Country of Origin</th>
<th style="width:18%;">Notes</th>
</tr>
<tr>
<td><a href="/wiki/Alfa_Romeo" title="Alfa Romeo">Alfa Romeo</a></td>
<td><a href="/wiki/Alfa_Romeo_147" title="Alfa Romeo 147">147 GTA</a></td>
<td>2002-2010</td>
<td>Hot Hatch</td>
<td>Italy</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Ford" class="mw-redirect" title="Ford">Ford</a></td>
<td><a href="/wiki/Ford_Focus" title="Ford Focus">Focus RS</a></td>
<td>2002–present</td>
<td>Sports Sedan, Hot Hatch</td>
<td>United States</td>
<td>The original Focus RS was only available in Europe.</td>
</tr>
<tr>
<td><a href="/wiki/Ford" class="mw-redirect" title="Ford">Ford</a></td>
<td><a href="/wiki/Ford_Focus" title="Ford Focus">Focus ST</a></td>
<td>2005–present</td>
<td>Sports Sedan, Hot Hatch</td>
<td>United States</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Honda" title="Honda">Honda</a></td>
<td><a href="/wiki/Honda_Civic_Si" title="Honda Civic Si">Civic Si</a></td>
<td>1984–present</td>
<td>Sport Compact</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Honda" title="Honda">Honda</a></td>
<td><a href="/wiki/Honda_Civic_Type_R" title="Honda Civic Type R">Civic Type R</a></td>
<td>1997–present</td>
<td>Hot Hatch, Sport Compact</td>
<td>Japan</td>
</tr>
<tr>
<td><a href="/wiki/Subaru" title="Subaru">Subaru</a></td>
<td><a href="/wiki/Impreza_WRX_STI" class="mw-redirect" title="Impreza WRX STI">Impreza WRX STI</a></td>
<td>1992–present</td>
<td>Sports Sedan</td>
<td>Japan</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/Honda" title="Honda">Honda</a></td>
<td><a href="/wiki/Honda_Civic_SiR" class="mw-redirect" title="Honda Civic SiR">Civic SiR</a></td>
<td>1999-2005</td>
<td>Sport Compact, Hot Hatch</td>
<td>Canada</td>
<td>Equivalent to USDM Si.</td>
</tr>
</table>
<h2><span class="mw-headline" id="Production_Tunes">Production Tunes</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=List_of_sports_cars&amp;action=edit&amp;section=3" title="Edit section: Production Tunes">edit</a><span class="mw-editsection-bracket">]</span></span></h2>
<table class="wikitable sortable" style="font-size: 90%;">
<tr>
<th style="width:12%;">Tuner</th>
<th style="width:20%;">Model</th>
<th style="width:15%;">Platform</th>
<th style="width:13%;">Years</th>
<th style="width:15%;">Country of Origin</th>
<th style="width:18%;">Notes</th>
</tr>
<tr>
<td><a href="/wiki/9FF" class="mw-redirect" title="9FF">9FF</a></td>
<td>9f-v400</td>
<td><a href="/wiki/Porsche_GT2" class="mw-redirect" title="Porsche GT2">Porsche GT2</a></td>
<td>2004-2007</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/9FF" class="mw-redirect" title="9FF">9FF</a></td>
<td>GT9 Vmax</td>
<td><a href="/wiki/Porsche_997" title="Porsche 997">Porsche 997</a></td>
<td>2012–present</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/9FF" class="mw-redirect" title="9FF">9FF</a></td>
<td>GT9-R</td>
<td><a href="/wiki/Porsche_997" title="Porsche 997">Porsche 997</a></td>
<td>2008</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/9FF" class="mw-redirect" title="9FF">9FF</a></td>
<td>G-Tronic</td>
<td><a href="/wiki/Porsche_997" title="Porsche 997">Porsche 997</a></td>
<td>2012–present</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/ABT_Sportsline" class="mw-redirect" title="ABT Sportsline">ABT</a></td>
<td>R8-R</td>
<td><a href="/wiki/Audi_R8" title="Audi R8">Audi R8</a></td>
<td>2017-</td>
<td>Germany</td>
<td></td>
</tr>
<tr>
<td><a href="/wiki/AC_Schnitzer" title="AC Schnitzer">AC Schnitzer</a></td>
<td>BMW i8</td>
<td><a href="/wiki/BMW_i8" title="BMW i8">BMW i8</a></td>
<td>2017-</td>
<td>Germany</td>
<td></td>
</tr>



EOD;
        //THIS IS FOR TEXT MULTI LINE

        //preg_match_all('/^[a-zA-Z]([\w -]*[a-zA-Z])?/im', $str, $matches, PREG_OFFSET_CAPTURE);

        // <a href="\/brand\/[a-zA-Zü]+([\w -_]*[a-zA-Z])?.php">

        preg_match_all('/(?<=(" title="))[a-zA-Zü]+([\w -]*[a-zA-Z0-9])(?=(">))/im', $str, $matches, PREG_OFFSET_CAPTURE);

        $matches = $matches[0];

        $counter = 1;

        foreach ($matches as $k => $v) {
            # code...
            if( $counter%2 == 0 ){

                array_push($newMatches, $v[0]);

            }
            
            $counter++;

        }

        foreach ($newMatches as $k => $v) {
            # code...
            $newSQL = $newSQL."DB::table('cars')->insert([ 'parent_id' => 15, 'name' => '$v', 'slug' => '".sluggify($v). "']);";
        }

        return $newSQL;
        
            

}


    

    
}
