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


<tr class="odd"><td class="odd" style="color:#990134;font-size:18px"><a name="A"></a>A</td><td>Models</td></tr>
<tr class="even"><td class="even"><a href="/brand/acabion_motorcycles.php">Acabion motorcycles</a></td><td class="even" style="text-align:right">4 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/access_motorcycles.php">Access motorcycles</a></td><td class="odd" style="text-align:right">8 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/ace_motorcycles.php">Ace motorcycles</a></td><td class="even" style="text-align:right">5 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/adiva_motorcycles.php">Adiva motorcycles</a></td><td class="odd" style="text-align:right">21 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/adler_motorcycles.php">Adler motorcycles</a></td><td class="even" style="text-align:right">27 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/adly_motorcycles.php">Adly motorcycles</a></td><td class="odd" style="text-align:right">70 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/aeon_motorcycles.php">Aeon motorcycles</a></td><td class="even" style="text-align:right">41 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/aermacchi_motorcycles.php">Aermacchi motorcycles</a></td><td class="odd" style="text-align:right">72 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/agrati_motorcycles.php">Agrati motorcycles</a></td><td class="even" style="text-align:right">25 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/ajp_motorcycles.php">AJP motorcycles</a></td><td class="odd" style="text-align:right">38 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/ajs_motorcycles.php">AJS motorcycles</a></td><td class="even" style="text-align:right">145 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/alfer_motorcycles.php">Alfer motorcycles</a></td><td class="odd" style="text-align:right">7 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/alligator_motorcycles.php">Alligator motorcycles</a></td><td class="even" style="text-align:right">6 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/allstate_motorcycles.php">Allstate motorcycles</a></td><td class="odd" style="text-align:right">5 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/alphasports_motorcycles.php">AlphaSports motorcycles</a></td><td class="even" style="text-align:right">3 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/amazonas_motorcycles.php">Amazonas motorcycles</a></td><td class="odd" style="text-align:right">2 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/american_eagle_motorcycles.php">American Eagle motorcycles</a></td><td class="even" style="text-align:right">4 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/american_ironhorse_motorcycles.php">American IronHorse motorcycles</a></td><td class="odd" style="text-align:right">14 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/apc_motorcycles.php">APC motorcycles</a></td><td class="even" style="text-align:right">8 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/aprilia_motorcycles.php">Aprilia motorcycles</a></td><td class="odd" style="text-align:right">671 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/arctic_cat_motorcycles.php">Arctic Cat motorcycles</a></td><td class="even" style="text-align:right">180 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/ardie_motorcycles.php">Ardie motorcycles</a></td><td class="odd" style="text-align:right">24 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/ariel_motorcycles.php">Ariel motorcycles</a></td><td class="even" style="text-align:right">164 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/arlen_ness_motorcycles.php">Arlen Ness motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/arqin_motorcycles.php">Arqin motorcycles</a></td><td class="even" style="text-align:right">6 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/aspes_motorcycles.php">Aspes motorcycles</a></td><td class="odd" style="text-align:right">13 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/atk_motorcycles.php">ATK motorcycles</a></td><td class="even" style="text-align:right">30 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/atlas_honda_motorcycles.php">Atlas Honda motorcycles</a></td><td class="odd" style="text-align:right">21 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/aurora_motorcycles.php">Aurora motorcycles</a></td><td class="even" style="text-align:right">2 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/avinton_motorcycles.php">Avinton motorcycles</a></td><td class="odd" style="text-align:right">17 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/avon_motorcycles.php">Avon motorcycles</a></td><td class="even" style="text-align:right">6 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/azel_motorcycles.php">Azel motorcycles</a></td><td class="odd" style="text-align:right">24 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="B"></a>B</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/bajaj_motorcycles.php">Bajaj motorcycles</a></td><td class="odd" style="text-align:right">86 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/balkan_motorcycles.php">Balkan motorcycles</a></td><td class="even" style="text-align:right">2 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/bamx_motorcycles.php">BamX motorcycles</a></td><td class="odd" style="text-align:right">44 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/baotian_motorcycles.php">Baotian motorcycles</a></td><td class="even" style="text-align:right">2 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/barossa_motorcycles.php">Barossa motorcycles</a></td><td class="odd" style="text-align:right">6 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/beeline_motorcycles.php">Beeline motorcycles</a></td><td class="even" style="text-align:right">14 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/benelli_motorcycles.php">Benelli motorcycles</a></td><td class="odd" style="text-align:right">292 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/bennche_motorcycles.php">Bennche motorcycles</a></td><td class="even" style="text-align:right">13 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/beta_motorcycles.php">Beta motorcycles</a></td><td class="odd" style="text-align:right">179 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/better_motorcycles.php">Better motorcycles</a></td><td class="even" style="text-align:right">1 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/big_bear_choppers_motorcycles.php">Big Bear Choppers motorcycles</a></td><td class="odd" style="text-align:right">94 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/big_dog_motorcycles.php">Big Dog motorcycles</a></td><td class="even" style="text-align:right">27 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/bimota_motorcycles.php">Bimota motorcycles</a></td><td class="odd" style="text-align:right">170 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/bintelli_motorcycles.php">Bintelli motorcycles</a></td><td class="even" style="text-align:right">10 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/black_douglas_motorcycles.php">Black Douglas motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/blackburne_motorcycles.php">Blackburne motorcycles</a></td><td class="even" style="text-align:right">5 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/blata_motorcycles.php">Blata motorcycles</a></td><td class="odd" style="text-align:right">45 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/bmc_choppers_motorcycles.php">BMC Choppers motorcycles</a></td><td class="even" style="text-align:right">15 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/bmw_motorcycles.php">BMW motorcycles</a></td><td class="odd" style="text-align:right">929 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/boom_trikes_motorcycles.php">Boom Trikes motorcycles</a></td><td class="even" style="text-align:right">36 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/borile_motorcycles.php">Borile motorcycles</a></td><td class="odd" style="text-align:right">29 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/boss_hoss_motorcycles.php">Boss Hoss motorcycles</a></td><td class="even" style="text-align:right">52 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/bourget_motorcycles.php">Bourget motorcycles</a></td><td class="odd" style="text-align:right">17 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/bpg_motorcycles.php">BPG motorcycles</a></td><td class="even" style="text-align:right">4 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/brammo_motorcycles.php">Brammo motorcycles</a></td><td class="odd" style="text-align:right">30 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/bridgestone_motorcycles.php">Bridgestone motorcycles</a></td><td class="even" style="text-align:right">3 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/brixton_motorcycles.php">Brixton motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/brudeli_motorcycles.php">Brudeli motorcycles</a></td><td class="even" style="text-align:right">6 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/bsa_motorcycles.php">BSA motorcycles</a></td><td class="odd" style="text-align:right">86 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/bsa_motors_motorcycles.php">BSA Motors motorcycles</a></td><td class="even" style="text-align:right">6 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/buccimoto_motorcycles.php">BucciMoto motorcycles</a></td><td class="odd" style="text-align:right">17 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/buell_motorcycles.php">Buell motorcycles</a></td><td class="even" style="text-align:right">87 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/bultaco_motorcycles.php">Bultaco motorcycles</a></td><td class="odd" style="text-align:right">34 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="C"></a>C</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/cagiva_motorcycles.php">Cagiva motorcycles</a></td><td class="odd" style="text-align:right">184 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/california_scooter_motorcycles.php">California Scooter motorcycles</a></td><td class="even" style="text-align:right">14 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/can-am_motorcycles.php">Can-Am motorcycles</a></td><td class="odd" style="text-align:right">84 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/cargobike_motorcycles.php">Cargobike motorcycles</a></td><td class="even" style="text-align:right">10 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/caterham_motorcycles.php">Caterham motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/ccm_motorcycles.php">CCM motorcycles</a></td><td class="even" style="text-align:right">107 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/cectek_motorcycles.php">Cectek motorcycles</a></td><td class="odd" style="text-align:right">18 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/cf_moto_motorcycles.php">CF Moto motorcycles</a></td><td class="even" style="text-align:right">69 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/ch_racing_motorcycles.php">CH Racing motorcycles</a></td><td class="odd" style="text-align:right">32 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/chang-jiang_motorcycles.php">Chang-Jiang motorcycles</a></td><td class="even" style="text-align:right">71 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/cheetah_motorcycles.php">Cheetah motorcycles</a></td><td class="odd" style="text-align:right">5 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/clarke_motorcycles.php">Clarke motorcycles</a></td><td class="even" style="text-align:right">1 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/cleveland_motorcycles.php">Cleveland motorcycles</a></td><td class="odd" style="text-align:right">31 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/clipic_motorcycles.php">Clipic motorcycles</a></td><td class="even" style="text-align:right">56 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/cmc_motorcycles.php">CMC motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/cobra_motorcycles.php">Cobra motorcycles</a></td><td class="even" style="text-align:right">24 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/confederate_motorcycles.php">Confederate motorcycles</a></td><td class="odd" style="text-align:right">26 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/cosmos_muscle_bikes_motorcycles.php">Cosmos Muscle Bikes motorcycles</a></td><td class="even" style="text-align:right">4 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/cotton_motorcycles.php">Cotton motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/coventry_eagle_motorcycles.php">Coventry Eagle motorcycles</a></td><td class="even" style="text-align:right">15 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/covingtons_motorcycles.php">Covingtons motorcycles</a></td><td class="odd" style="text-align:right">7 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/cpi_motorcycles.php">CPI motorcycles</a></td><td class="even" style="text-align:right">70 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/cr_and_s_motorcycles.php">CR&S motorcycles</a></td><td class="odd" style="text-align:right">42 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/crocker_motorcycles.php">Crocker motorcycles</a></td><td class="even" style="text-align:right">12 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/csr_motorcycles.php">CSR motorcycles</a></td><td class="odd" style="text-align:right">30 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/current_motor_motorcycles.php">Current Motor motorcycles</a></td><td class="even" style="text-align:right">2 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/cushman_motorcycles.php">Cushman motorcycles</a></td><td class="odd" style="text-align:right">16 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/cz_motorcycles.php">CZ motorcycles</a></td><td class="even" style="text-align:right">34 &nbsp;</td></tr>
<tr class="odd"><td class="odd" style="color:#990134;font-size:18px"><a name="D"></a>D</td><td></td></tr>
<tr class="even"><td class="even"><a href="/brand/daelim_motorcycles.php">Daelim motorcycles</a></td><td class="even" style="text-align:right">117 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/dafier_motorcycles.php">Dafier motorcycles</a></td><td class="odd" style="text-align:right">35 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/dafra_motorcycles.php">Dafra motorcycles</a></td><td class="even" style="text-align:right">19 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/dam_motorcycles.php">Dam motorcycles</a></td><td class="odd" style="text-align:right">4 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/dandy_motorcycles.php">Dandy motorcycles</a></td><td class="even" style="text-align:right">1 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/dayang_motorcycles.php">Dayang motorcycles</a></td><td class="odd" style="text-align:right">6 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/dayton_motorcycles.php">Dayton motorcycles</a></td><td class="even" style="text-align:right">2 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/dayun_motorcycles.php">Dayun motorcycles</a></td><td class="odd" style="text-align:right">9 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/db_motors_motorcycles.php">DB Motors motorcycles</a></td><td class="even" style="text-align:right">27 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/de_dion-bouton_motorcycles.php">De Dion-Bouton motorcycles</a></td><td class="odd" style="text-align:right">8 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/demak_motorcycles.php">Demak motorcycles</a></td><td class="even" style="text-align:right">23 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/derbi_motorcycles.php">Derbi motorcycles</a></td><td class="odd" style="text-align:right">324 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/derringer_motorcycles.php">Derringer motorcycles</a></td><td class="even" style="text-align:right">5 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/df_motor_motorcycles.php">DF Motor motorcycles</a></td><td class="odd" style="text-align:right">20 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/dfang_motorcycles.php">Dfang motorcycles</a></td><td class="even" style="text-align:right">11 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/di_blasi_motorcycles.php">Di Blasi motorcycles</a></td><td class="odd" style="text-align:right">7 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/diamo_motorcycles.php">Diamo motorcycles</a></td><td class="even" style="text-align:right">48 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/dihao_motorcycles.php">Dihao motorcycles</a></td><td class="odd" style="text-align:right">4 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/dinli_motorcycles.php">Dinli motorcycles</a></td><td class="even" style="text-align:right">15 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/dirico_motorcycles.php">Dirico motorcycles</a></td><td class="odd" style="text-align:right">17 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/dkw_motorcycles.php">DKW motorcycles</a></td><td class="even" style="text-align:right">109 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/dnepr_motorcycles.php">Dnepr motorcycles</a></td><td class="odd" style="text-align:right">72 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/dodge_motorcycles.php">Dodge motorcycles</a></td><td class="even" style="text-align:right">1 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/donghai_motorcycles.php">Donghai motorcycles</a></td><td class="odd" style="text-align:right">5 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/douglas_motorcycles.php">Douglas motorcycles</a></td><td class="even" style="text-align:right">3 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/drysdale_motorcycles.php">Drysdale motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/ducati_motorcycles.php">Ducati motorcycles</a></td><td class="even" style="text-align:right">661 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/durkopp_motorcycles.php">Dürkopp motorcycles</a></td><td class="odd" style="text-align:right">21 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="E"></a>E</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/e-max_motorcycles.php">E-max motorcycles</a></td><td class="odd" style="text-align:right">20 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/e-ton_motorcycles.php">E-Ton motorcycles</a></td><td class="even" style="text-align:right">22 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/e-tropolis_motorcycles.php">E-Tropolis motorcycles</a></td><td class="odd" style="text-align:right">11 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/eagle-wing_motorcycles.php">Eagle-Wing motorcycles</a></td><td class="even" style="text-align:right">7 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/ebretti_motorcycles.php">Ebretti motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/eccity_motorcycles.php">Eccity motorcycles</a></td><td class="even" style="text-align:right">1 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/ecosse_motorcycles.php">Ecosse motorcycles</a></td><td class="odd" style="text-align:right">30 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/ecrp_motorcycles.php">eCRP motorcycles</a></td><td class="even" style="text-align:right">12 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/eko_motorcycles.php">EKO motorcycles</a></td><td class="odd" style="text-align:right">4 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/electric_city_motorcycles.php">Electric City motorcycles</a></td><td class="even" style="text-align:right">6 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/emblem_motorcycles.php">Emblem motorcycles</a></td><td class="odd" style="text-align:right">8 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/emco_motorcycles.php">emco motorcycles</a></td><td class="even" style="text-align:right">8 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/enfield_motorcycles.php">Enfield motorcycles</a></td><td class="odd" style="text-align:right">202 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/erik_buell_racing_motorcycles.php">Erik Buell Racing motorcycles</a></td><td class="even" style="text-align:right">12 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/evolve_motorcycles.php">Evolve motorcycles</a></td><td class="odd" style="text-align:right">17 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/excelsior_motorcycles.php">Excelsior motorcycles</a></td><td class="even" style="text-align:right">17 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/exile_cycles_motorcycles.php">Exile Cycles motorcycles</a></td><td class="odd" style="text-align:right">7 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="F"></a>F</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/factory_bike_motorcycles.php">Factory Bike motorcycles</a></td><td class="odd" style="text-align:right">32 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/falcon_motorcycles.php">Falcon motorcycles</a></td><td class="even" style="text-align:right">1 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/fantic_motorcycles.php">Fantic motorcycles</a></td><td class="odd" style="text-align:right">74 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/fb_mondial_motorcycles.php">FB Mondial motorcycles</a></td><td class="even" style="text-align:right">6 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/fgr_motorcycles.php">FGR motorcycles</a></td><td class="odd" style="text-align:right">7 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/fischer_motorcycles.php">Fischer motorcycles</a></td><td class="even" style="text-align:right">9 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/flying_merkel_motorcycles.php">Flying Merkel motorcycles</a></td><td class="odd" style="text-align:right">4 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/flyrite_choppers_motorcycles.php">Flyrite Choppers motorcycles</a></td><td class="even" style="text-align:right">8 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/fokamo_motorcycles.php">Fokamo motorcycles</a></td><td class="odd" style="text-align:right">4 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/fosti_motorcycles.php">Fosti motorcycles</a></td><td class="even" style="text-align:right">2 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/fx_bikes_motorcycles.php">FX Bikes motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="G"></a>G</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/g_and_g_motorcycles.php">G&G motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/garelli_motorcycles.php">Garelli motorcycles</a></td><td class="even" style="text-align:right">19 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/gas_gas_motorcycles.php">GAS GAS motorcycles</a></td><td class="odd" style="text-align:right">266 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/geely_motorcycles.php">Geely motorcycles</a></td><td class="even" style="text-align:right">27 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/genata_motorcycles.php">Genata motorcycles</a></td><td class="odd" style="text-align:right">4 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/generic_motorcycles.php">Generic motorcycles</a></td><td class="even" style="text-align:right">96 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/genuine_scooter_motorcycles.php">Genuine Scooter motorcycles</a></td><td class="odd" style="text-align:right">35 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/gg_motorcycles.php">GG motorcycles</a></td><td class="even" style="text-align:right">7 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/ghezzi-brian_motorcycles.php">Ghezzi-Brian motorcycles</a></td><td class="odd" style="text-align:right">17 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/giantco_motorcycles.php">Giantco motorcycles</a></td><td class="even" style="text-align:right">60 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/gibbs_motorcycles.php">Gibbs motorcycles</a></td><td class="odd" style="text-align:right">4 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/gilera_motorcycles.php">Gilera motorcycles</a></td><td class="even" style="text-align:right">196 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/goes_motorcycles.php">Goes motorcycles</a></td><td class="odd" style="text-align:right">35 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/gogo_moto_motorcycles.php">Gogo Moto motorcycles</a></td><td class="even" style="text-align:right">8 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/gogoro_motorcycles.php">Gogoro motorcycles</a></td><td class="odd" style="text-align:right">2 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/govecs_motorcycles.php">Govecs motorcycles</a></td><td class="even" style="text-align:right">15 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/grc_moto_motorcycles.php">GRC Moto motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/greentrans_motorcycles.php">GreenTrans motorcycles</a></td><td class="even" style="text-align:right">6 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/greeves_motorcycles.php">Greeves motorcycles</a></td><td class="odd" style="text-align:right">8 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="H"></a>H</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/hanway_motorcycles.php">Hanway motorcycles</a></td><td class="odd" style="text-align:right">2 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/haojin_motorcycles.php">Haojin motorcycles</a></td><td class="even" style="text-align:right">4 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/harley-davidson_motorcycles.php">Harley-Davidson motorcycles</a></td><td class="odd" style="text-align:right">1442 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/hartford_motorcycles.php">Hartford motorcycles</a></td><td class="even" style="text-align:right">51 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/hdm_motorcycles.php">HDM motorcycles</a></td><td class="odd" style="text-align:right">2 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/headbanger_motorcycles.php">Headbanger motorcycles</a></td><td class="even" style="text-align:right">32 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/heinkel_motorcycles.php">Heinkel motorcycles</a></td><td class="odd" style="text-align:right">17 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/henderson_motorcycles.php">Henderson motorcycles</a></td><td class="even" style="text-align:right">5 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/herald_motorcycles.php">Herald motorcycles</a></td><td class="odd" style="text-align:right">15 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/hercules_motorcycles.php">Hercules motorcycles</a></td><td class="even" style="text-align:right">119 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/hero_motorcycles.php">Hero motorcycles</a></td><td class="odd" style="text-align:right">61 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/hero_electric_motorcycles.php">Hero Electric motorcycles</a></td><td class="even" style="text-align:right">9 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/hero_honda_motorcycles.php">Hero Honda motorcycles</a></td><td class="odd" style="text-align:right">81 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/hesketh_motorcycles.php">Hesketh motorcycles</a></td><td class="even" style="text-align:right">12 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/highland_motorcycles.php">Highland motorcycles</a></td><td class="odd" style="text-align:right">45 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/hildebrand-wolfmuller_motorcycles.php">Hildebrand-Wolfmüller motorcycles</a></td><td class="even" style="text-align:right">4 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/hm_motorcycles.php">HM motorcycles</a></td><td class="odd" style="text-align:right">12 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/honda_motorcycles.php">Honda motorcycles</a></td><td class="even" style="text-align:right">2770 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/horex_motorcycles.php">Horex motorcycles</a></td><td class="odd" style="text-align:right">60 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/hp_power_motorcycles.php">HP Power motorcycles</a></td><td class="even" style="text-align:right">10 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/husaberg_motorcycles.php">Husaberg motorcycles</a></td><td class="odd" style="text-align:right">124 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/husqvarna_motorcycles.php">Husqvarna motorcycles</a></td><td class="even" style="text-align:right">343 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/hyosung_motorcycles.php">Hyosung motorcycles</a></td><td class="odd" style="text-align:right">261 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="I"></a>I</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/ice_bear_motorcycles.php">Ice Bear motorcycles</a></td><td class="odd" style="text-align:right">20 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/indian_motorcycles.php">Indian motorcycles</a></td><td class="even" style="text-align:right">153 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/innoscooter_motorcycles.php">Innoscooter motorcycles</a></td><td class="odd" style="text-align:right">17 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/intrepid_motorcycles.php">Intrepid motorcycles</a></td><td class="even" style="text-align:right">4 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/italjet_motorcycles.php">Italjet motorcycles</a></td><td class="odd" style="text-align:right">39 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/izh_motorcycles.php">IZH motorcycles</a></td><td class="even" style="text-align:right">25 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/izuka_motorcycles.php">Izuka motorcycles</a></td><td class="odd" style="text-align:right">26 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="J"></a>J</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/james_motorcycles.php">James motorcycles</a></td><td class="odd" style="text-align:right">26 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/jawa_motorcycles.php">Jawa motorcycles</a></td><td class="even" style="text-align:right">98 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/jawa-cz_motorcycles.php">Jawa-CZ motorcycles</a></td><td class="odd" style="text-align:right">84 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/jialing_motorcycles.php">Jialing motorcycles</a></td><td class="even" style="text-align:right">14 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/jianshe_motorcycles.php">Jianshe motorcycles</a></td><td class="odd" style="text-align:right">14 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/jincheng_motorcycles.php">Jincheng motorcycles</a></td><td class="even" style="text-align:right">29 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/jinlun_motorcycles.php">Jinlun motorcycles</a></td><td class="odd" style="text-align:right">18 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/johnny_pag_motorcycles.php">Johnny Pag motorcycles</a></td><td class="even" style="text-align:right">24 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/jonway_motorcycles.php">Jonway motorcycles</a></td><td class="odd" style="text-align:right">18 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/jordan_motorcycles.php">Jordan motorcycles</a></td><td class="even" style="text-align:right">4 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/jotagas_motorcycles.php">Jotagas motorcycles</a></td><td class="odd" style="text-align:right">4 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/jrl_motorcycles.php">JRL motorcycles</a></td><td class="even" style="text-align:right">1 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/junak_motorcycles.php">Junak motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="K"></a>K</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/k2o_motorcycles.php">K2O motorcycles</a></td><td class="odd" style="text-align:right">2 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/kabirdass_motorcycles.php">Kabirdass motorcycles</a></td><td class="even" style="text-align:right">4 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/kangda_motorcycles.php">Kangda motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/kanuni_motorcycles.php">Kanuni motorcycles</a></td><td class="even" style="text-align:right">1 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/kasinski_motorcycles.php">Kasinski motorcycles</a></td><td class="odd" style="text-align:right">13 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/kawasaki_motorcycles.php">Kawasaki motorcycles</a></td><td class="even" style="text-align:right">1901 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/keeway_motorcycles.php">Keeway motorcycles</a></td><td class="odd" style="text-align:right">308 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/kikker_5150_motorcycles.php">Kikker 5150 motorcycles</a></td><td class="even" style="text-align:right">11 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/kinetic_motorcycles.php">Kinetic motorcycles</a></td><td class="odd" style="text-align:right">2 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/kinroad_motorcycles.php">Kinroad motorcycles</a></td><td class="even" style="text-align:right">22 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/kramit_motorcycles.php">Kramit motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/krc_motorcycles.php">KRC motorcycles</a></td><td class="even" style="text-align:right">7 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/kreidler_motorcycles.php">Kreidler motorcycles</a></td><td class="odd" style="text-align:right">103 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/ksr_motorcycles.php">KSR motorcycles</a></td><td class="even" style="text-align:right">40 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/ktm_motorcycles.php">KTM motorcycles</a></td><td class="odd" style="text-align:right">812 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/kuberg_motorcycles.php">Kuberg motorcycles</a></td><td class="even" style="text-align:right">12 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/kumpan_motorcycles.php">Kumpan motorcycles</a></td><td class="odd" style="text-align:right">5 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/kymco_motorcycles.php">Kymco motorcycles</a></td><td class="even" style="text-align:right">396 &nbsp;</td></tr>
<tr class="odd"><td class="odd" style="color:#990134;font-size:18px"><a name="L"></a>L</td><td></td></tr>
<tr class="even"><td class="even"><a href="/brand/lambretta_motorcycles.php">Lambretta motorcycles</a></td><td class="even" style="text-align:right">127 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/lauge_jensen_motorcycles.php">Lauge Jensen motorcycles</a></td><td class="odd" style="text-align:right">4 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/laverda_motorcycles.php">Laverda motorcycles</a></td><td class="even" style="text-align:right">113 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/lectrix_motorcycles.php">Lectrix motorcycles</a></td><td class="odd" style="text-align:right">2 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/lehman_trikes_motorcycles.php">Lehman Trikes motorcycles</a></td><td class="even" style="text-align:right">10 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/lem_motorcycles.php">Lem motorcycles</a></td><td class="odd" style="text-align:right">41 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/leonart_motorcycles.php">Leonart motorcycles</a></td><td class="even" style="text-align:right">20 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/leonhardt_motorcycles.php">Leonhardt motorcycles</a></td><td class="odd" style="text-align:right">5 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/lexmoto_motorcycles.php">Lexmoto motorcycles</a></td><td class="even" style="text-align:right">41 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/lifan_motorcycles.php">Lifan motorcycles</a></td><td class="odd" style="text-align:right">51 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/lightning_motorcycles.php">Lightning motorcycles</a></td><td class="even" style="text-align:right">2 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/ligier_motorcycles.php">Ligier motorcycles</a></td><td class="odd" style="text-align:right">6 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/linhai_motorcycles.php">Linhai motorcycles</a></td><td class="even" style="text-align:right">75 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/lintex_motorcycles.php">Lintex motorcycles</a></td><td class="odd" style="text-align:right">2 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/lit_motors_motorcycles.php">Lit Motors motorcycles</a></td><td class="even" style="text-align:right">2 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/lito_motorcycles.php">Lito motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/lml_motorcycles.php">LML motorcycles</a></td><td class="even" style="text-align:right">32 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/lohia_motorcycles.php">Lohia motorcycles</a></td><td class="odd" style="text-align:right">5 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/loncin_motorcycles.php">Loncin motorcycles</a></td><td class="even" style="text-align:right">30 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/longjia_motorcycles.php">Longjia motorcycles</a></td><td class="odd" style="text-align:right">20 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/lsl_motorcycles.php">LSL motorcycles</a></td><td class="even" style="text-align:right">4 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/luxxon_motorcycles.php">Luxxon motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="M"></a>M</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/macbor_motorcycles.php">Macbor motorcycles</a></td><td class="odd" style="text-align:right">47 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/magni_motorcycles.php">Magni motorcycles</a></td><td class="even" style="text-align:right">1 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/mahindra_motorcycles.php">Mahindra motorcycles</a></td><td class="odd" style="text-align:right">8 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/maico_motorcycles.php">Maico motorcycles</a></td><td class="even" style="text-align:right">125 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/malaguti_motorcycles.php">Malaguti motorcycles</a></td><td class="odd" style="text-align:right">121 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/malanca_motorcycles.php">Malanca motorcycles</a></td><td class="even" style="text-align:right">22 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/marine_turbine_technologies_motorcycles.php">Marine Turbine Technologies motorcycles</a></td><td class="odd" style="text-align:right">14 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/marks_motorcycles.php">Marks motorcycles</a></td><td class="even" style="text-align:right">1 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/marsh_motorcycles.php">Marsh motorcycles</a></td><td class="odd" style="text-align:right">4 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/mash_motorcycles.php">Mash motorcycles</a></td><td class="even" style="text-align:right">16 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/matchless_motorcycles.php">Matchless motorcycles</a></td><td class="odd" style="text-align:right">56 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/mavizen_motorcycles.php">Mavizen motorcycles</a></td><td class="even" style="text-align:right">3 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/mbk_motorcycles.php">MBK motorcycles</a></td><td class="odd" style="text-align:right">99 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/mbs_motorcycles.php">MBS motorcycles</a></td><td class="even" style="text-align:right">1 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/megelli_motorcycles.php">Megelli motorcycles</a></td><td class="odd" style="text-align:right">26 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/metisse_motorcycles.php">Metisse motorcycles</a></td><td class="even" style="text-align:right">10 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/mgb_motorcycles.php">MGB motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/mh_motorcycles.php">MH motorcycles</a></td><td class="even" style="text-align:right">4 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/midual_motorcycles.php">Midual motorcycles</a></td><td class="odd" style="text-align:right">2 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/mikilon_motorcycles.php">Mikilon motorcycles</a></td><td class="even" style="text-align:right">33 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/millet_motorcycles.php">Millet motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/mini_motorcycles.php">Mini motorcycles</a></td><td class="even" style="text-align:right">1 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/minsk_motorcycles.php">Minsk motorcycles</a></td><td class="odd" style="text-align:right">2 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/mission_motorcycles.php">Mission motorcycles</a></td><td class="even" style="text-align:right">6 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/mm_motorcycles.php">MM motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/modenas_motorcycles.php">Modenas motorcycles</a></td><td class="even" style="text-align:right">23 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/monark_motorcycles.php">Monark motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/mondial_motorcycles.php">Mondial motorcycles</a></td><td class="even" style="text-align:right">49 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/montesa_motorcycles.php">Montesa motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/monto_motors_motorcycles.php">Monto Motors motorcycles</a></td><td class="even" style="text-align:right">4 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/moto_gima_motorcycles.php">Moto Gima motorcycles</a></td><td class="odd" style="text-align:right">2 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/moto_guzzi_motorcycles.php">Moto Guzzi motorcycles</a></td><td class="even" style="text-align:right">628 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/moto_morini_motorcycles.php">Moto Morini motorcycles</a></td><td class="odd" style="text-align:right">154 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/moto_union-omv_motorcycles.php">Moto Union/OMV motorcycles</a></td><td class="even" style="text-align:right">3 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/motobi_motorcycles.php">Motobi motorcycles</a></td><td class="odd" style="text-align:right">46 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/motoczysz_motorcycles.php">MotoCzysz motorcycles</a></td><td class="even" style="text-align:right">6 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/motolevo_motorcycles.php">Motolevo motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/motom_motorcycles.php">Motom motorcycles</a></td><td class="even" style="text-align:right">15 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/motorhispania_motorcycles.php">Motorhispania motorcycles</a></td><td class="odd" style="text-align:right">81 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/motorino_motorcycles.php">Motorino motorcycles</a></td><td class="even" style="text-align:right">19 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/motors_europe_motorcycles.php">Motors Europe motorcycles</a></td><td class="odd" style="text-align:right">11 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/mototrans_motorcycles.php">Mototrans motorcycles</a></td><td class="even" style="text-align:right">2 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/motowell_motorcycles.php">Motowell motorcycles</a></td><td class="odd" style="text-align:right">21 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/motus_motorcycles.php">Motus motorcycles</a></td><td class="even" style="text-align:right">10 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/mustang_motorcycles.php">Mustang motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/muz_motorcycles.php">MuZ motorcycles</a></td><td class="even" style="text-align:right">111 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/mv_agusta_motorcycles.php">MV Agusta motorcycles</a></td><td class="odd" style="text-align:right">270 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/munch_motorcycles.php">Münch motorcycles</a></td><td class="even" style="text-align:right">19 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/mz_motorcycles.php">MZ motorcycles</a></td><td class="odd" style="text-align:right">108 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="N"></a>N</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/ncr_motorcycles.php">NCR motorcycles</a></td><td class="odd" style="text-align:right">74 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/neander_motorcycles.php">Neander motorcycles</a></td><td class="even" style="text-align:right">8 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/nimbus_motorcycles.php">Nimbus motorcycles</a></td><td class="odd" style="text-align:right">19 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/nipponia_motorcycles.php">Nipponia motorcycles</a></td><td class="even" style="text-align:right">48 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/norton_motorcycles.php">Norton motorcycles</a></td><td class="odd" style="text-align:right">154 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/nox_motorcycles.php">NOX motorcycles</a></td><td class="even" style="text-align:right">3 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/nsu_motorcycles.php">NSU motorcycles</a></td><td class="odd" style="text-align:right">235 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="O"></a>O</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/orcal_motorcycles.php">Orcal motorcycles</a></td><td class="odd" style="text-align:right">2 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/orient_motorcycles.php">Orient motorcycles</a></td><td class="even" style="text-align:right">2 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/orion_motorcycles.php">Orion motorcycles</a></td><td class="odd" style="text-align:right">26 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/oset_motorcycles.php">Oset motorcycles</a></td><td class="even" style="text-align:right">11 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/ossa_motorcycles.php">OSSA motorcycles</a></td><td class="odd" style="text-align:right">7 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/over_motorcycles.php">Over motorcycles</a></td><td class="even" style="text-align:right">9 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/oxygen_motorcycles.php">Oxygen motorcycles</a></td><td class="odd" style="text-align:right">4 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="P"></a>P</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/pagsta_motorcycles.php">Pagsta motorcycles</a></td><td class="odd" style="text-align:right">11 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/palmo_motorcycles.php">Palmo motorcycles</a></td><td class="even" style="text-align:right">3 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/pannonia_motorcycles.php">Pannonia motorcycles</a></td><td class="odd" style="text-align:right">11 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/panther_motorcycles.php">Panther motorcycles</a></td><td class="even" style="text-align:right">16 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/penton_motorcycles.php">Penton motorcycles</a></td><td class="odd" style="text-align:right">2 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/peraves_motorcycles.php">Peraves motorcycles</a></td><td class="even" style="text-align:right">10 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/perks_and_birch_motorcycles.php">Perks and Birch motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/peugeot_motorcycles.php">Peugeot motorcycles</a></td><td class="even" style="text-align:right">226 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/pgo_motorcycles.php">PGO motorcycles</a></td><td class="odd" style="text-align:right">143 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/piaggio_motorcycles.php">Piaggio motorcycles</a></td><td class="even" style="text-align:right">174 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/pierce_motorcycles.php">Pierce motorcycles</a></td><td class="odd" style="text-align:right">6 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/pitster_pro_motorcycles.php">Pitster Pro motorcycles</a></td><td class="even" style="text-align:right">27 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/polaris_motorcycles.php">Polaris motorcycles</a></td><td class="odd" style="text-align:right">68 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/polini_motorcycles.php">Polini motorcycles</a></td><td class="even" style="text-align:right">55 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/pope_motorcycles.php">Pope motorcycles</a></td><td class="odd" style="text-align:right">7 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/power_chief_motorcycles.php">Power Chief motorcycles</a></td><td class="even" style="text-align:right">2 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/praga_motorcycles.php">Praga motorcycles</a></td><td class="odd" style="text-align:right">7 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/prc_pro_racing_cycles_motorcycles.php">PRC (Pro Racing Cycles) motorcycles</a></td><td class="even" style="text-align:right">7 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/precision_cycle_works_motorcycles.php">Precision Cycle Works motorcycles</a></td><td class="odd" style="text-align:right">13 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/pro-one_motorcycles.php">Pro-One motorcycles</a></td><td class="even" style="text-align:right">4 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/proeco_motorcycles.php">proEco motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/puch_motorcycles.php">Puch motorcycles</a></td><td class="even" style="text-align:right">77 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/puma_motorcycles.php">Puma motorcycles</a></td><td class="odd" style="text-align:right">27 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="Q"></a>Q</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/qingqi_motorcycles.php">Qingqi motorcycles</a></td><td class="odd" style="text-align:right">19 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/qlink_motorcycles.php">Qlink motorcycles</a></td><td class="even" style="text-align:right">59 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/quadro_motorcycles.php">Quadro motorcycles</a></td><td class="odd" style="text-align:right">13 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/quantya_motorcycles.php">Quantya motorcycles</a></td><td class="even" style="text-align:right">13 &nbsp;</td></tr>
<tr class="odd"><td class="odd" style="color:#990134;font-size:18px"><a name="R"></a>R</td><td></td></tr>
<tr class="even"><td class="even"><a href="/brand/raleigh_motorcycles.php">Raleigh motorcycles</a></td><td class="even" style="text-align:right">5 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/ravi_piaggio_motorcycles.php">Ravi Piaggio motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/reading_standard_motorcycles.php">Reading Standard motorcycles</a></td><td class="even" style="text-align:right">9 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/red_wing_motorcycles.php">Red Wing motorcycles</a></td><td class="odd" style="text-align:right">6 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/redneck_motorcycles.php">Redneck motorcycles</a></td><td class="even" style="text-align:right">3 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/rewaco_motorcycles.php">Rewaco motorcycles</a></td><td class="odd" style="text-align:right">19 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/rhino_motorcycles.php">Rhino motorcycles</a></td><td class="even" style="text-align:right">30 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/ridley_motorcycles.php">Ridley motorcycles</a></td><td class="odd" style="text-align:right">24 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/rieju_motorcycles.php">Rieju motorcycles</a></td><td class="even" style="text-align:right">178 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/rikuo_motorcycles.php">Rikuo motorcycles</a></td><td class="odd" style="text-align:right">27 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/road_hopper_motorcycles.php">Road Hopper motorcycles</a></td><td class="even" style="text-align:right">14 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/rockford_motorcycles.php">Rockford motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/roehr_motorcycles.php">Roehr motorcycles</a></td><td class="even" style="text-align:right">7 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/rokon_motorcycles.php">Rokon motorcycles</a></td><td class="odd" style="text-align:right">25 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/romet_motorcycles.php">Romet motorcycles</a></td><td class="even" style="text-align:right">20 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/roxon_motorcycles.php">Roxon motorcycles</a></td><td class="odd" style="text-align:right">11 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/rucker_performance_motorcycles.php">Rucker Performance motorcycles</a></td><td class="even" style="text-align:right">9 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/rudge_motorcycles.php">Rudge motorcycles</a></td><td class="odd" style="text-align:right">11 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="S"></a>S</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/sachs_motorcycles.php">Sachs motorcycles</a></td><td class="odd" style="text-align:right">99 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/samurai_chopper_motorcycles.php">Samurai Chopper motorcycles</a></td><td class="even" style="text-align:right">13 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/sanglas_motorcycles.php">Sanglas motorcycles</a></td><td class="odd" style="text-align:right">16 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/sarolea_motorcycles.php">Sarolea motorcycles</a></td><td class="even" style="text-align:right">1 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/saxon_motorcycles.php">Saxon motorcycles</a></td><td class="odd" style="text-align:right">45 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/schickel_motorcycles.php">Schickel motorcycles</a></td><td class="even" style="text-align:right">3 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/schwinn_motorcycles.php">Schwinn motorcycles</a></td><td class="odd" style="text-align:right">22 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/scomadi_motorcycles.php">Scomadi motorcycles</a></td><td class="even" style="text-align:right">3 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/scorpa_motorcycles.php">Scorpa motorcycles</a></td><td class="odd" style="text-align:right">48 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/scott_motorcycles.php">Scott motorcycles</a></td><td class="even" style="text-align:right">11 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/sears_motorcycles.php">Sears motorcycles</a></td><td class="odd" style="text-align:right">5 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/senke_motorcycles.php">Senke motorcycles</a></td><td class="even" style="text-align:right">13 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/shanyang_motorcycles.php">Shanyang motorcycles</a></td><td class="odd" style="text-align:right">5 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/sherco_motorcycles.php">Sherco motorcycles</a></td><td class="even" style="text-align:right">232 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/shineray_motorcycles.php">Shineray motorcycles</a></td><td class="odd" style="text-align:right">10 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/shinetime_motorcycles.php">ShineTime motorcycles</a></td><td class="even" style="text-align:right">11 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/siamoto_motorcycles.php">Siamoto motorcycles</a></td><td class="odd" style="text-align:right">4 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/simplex_motorcycles.php">Simplex motorcycles</a></td><td class="even" style="text-align:right">23 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/simson_motorcycles.php">Simson motorcycles</a></td><td class="odd" style="text-align:right">14 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/sinnis_motorcycles.php">Sinnis motorcycles</a></td><td class="even" style="text-align:right">30 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/skyteam_motorcycles.php">Skyteam motorcycles</a></td><td class="odd" style="text-align:right">30 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/sommer_motorcycles.php">Sommer motorcycles</a></td><td class="even" style="text-align:right">8 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/sonik_motorcycles.php">Sonik motorcycles</a></td><td class="odd" style="text-align:right">22 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/sora_motorcycles.php">Sora motorcycles</a></td><td class="even" style="text-align:right">3 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/sparta_motorcycles.php">Sparta motorcycles</a></td><td class="odd" style="text-align:right">15 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/standbike_motorcycles.php">Standbike motorcycles</a></td><td class="even" style="text-align:right">5 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/starway-chu_lan_motorcycles.php">Starway/Chu Lan motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/sucker_punch_sallys_motorcycles.php">Sucker Punch Sallys motorcycles</a></td><td class="even" style="text-align:right">31 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/sukida_motorcycles.php">Sukida motorcycles</a></td><td class="odd" style="text-align:right">24 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/sunbeam_motorcycles.php">Sunbeam motorcycles</a></td><td class="even" style="text-align:right">28 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/sundiro_motorcycles.php">Sundiro motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/super_motor_motorcycles.php">Super Motor motorcycles</a></td><td class="even" style="text-align:right">8 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/suzuki_motorcycles.php">Suzuki motorcycles</a></td><td class="odd" style="text-align:right">2013 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/suzuko_motorcycles.php">Suzuko motorcycles</a></td><td class="even" style="text-align:right">1 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/svm_motorcycles.php">SVM motorcycles</a></td><td class="odd" style="text-align:right">8 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/swaygo_motorcycles.php">Swaygo motorcycles</a></td><td class="even" style="text-align:right">3 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/swift_motorcycles.php">Swift motorcycles</a></td><td class="odd" style="text-align:right">8 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/swm_motorcycles.php">SWM motorcycles</a></td><td class="even" style="text-align:right">13 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/sym_motorcycles.php">Sym motorcycles</a></td><td class="odd" style="text-align:right">230 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="T"></a>T</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/tank_sports_motorcycles.php">Tank Sports motorcycles</a></td><td class="odd" style="text-align:right">82 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/tauris_motorcycles.php">Tauris motorcycles</a></td><td class="even" style="text-align:right">36 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/tayo_motorcycles.php">Tayo motorcycles</a></td><td class="odd" style="text-align:right">12 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/terra_modena_motorcycles.php">Terra Modena motorcycles</a></td><td class="even" style="text-align:right">8 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/tgb_motorcycles.php">TGB motorcycles</a></td><td class="odd" style="text-align:right">112 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/tiger_motorcycles.php">Tiger motorcycles</a></td><td class="even" style="text-align:right">9 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/titan_motorcycles.php">Titan motorcycles</a></td><td class="odd" style="text-align:right">36 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/tm_racing_motorcycles.php">TM Racing motorcycles</a></td><td class="even" style="text-align:right">188 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/tohqi_motorcycles.php">Tohqi motorcycles</a></td><td class="odd" style="text-align:right">2 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/tomberlin_motorcycles.php">Tomberlin motorcycles</a></td><td class="even" style="text-align:right">9 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/tomos_motorcycles.php">Tomos motorcycles</a></td><td class="odd" style="text-align:right">87 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/torrot_motorcycles.php">Torrot motorcycles</a></td><td class="even" style="text-align:right">2 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/track_motorcycles.php">Track motorcycles</a></td><td class="odd" style="text-align:right">4 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/travertson_motorcycles.php">Travertson motorcycles</a></td><td class="even" style="text-align:right">13 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/triton_motorcycles.php">Triton motorcycles</a></td><td class="odd" style="text-align:right">16 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/triumph_motorcycles.php">Triumph motorcycles</a></td><td class="even" style="text-align:right">676 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/troll_motorcycles.php">Troll motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/trs_motorcycles.php">TRS motorcycles</a></td><td class="even" style="text-align:right">3 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/tvs_motorcycles.php">TVS motorcycles</a></td><td class="odd" style="text-align:right">77 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="U"></a>U</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/ultra_motorcycles.php">Ultra motorcycles</a></td><td class="odd" style="text-align:right">24 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/ultra_motor_motorcycles.php">Ultra Motor motorcycles</a></td><td class="even" style="text-align:right">4 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/um_motorcycles.php">UM motorcycles</a></td><td class="odd" style="text-align:right">91 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/unu_motorcycles.php">Unu motorcycles</a></td><td class="even" style="text-align:right">1 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/ural_motorcycles.php">Ural motorcycles</a></td><td class="odd" style="text-align:right">155 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="V"></a>V</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/vahrenkamp_motorcycles.php">Vahrenkamp motorcycles</a></td><td class="odd" style="text-align:right">4 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/valenti_motorcycles.php">Valenti motorcycles</a></td><td class="even" style="text-align:right">8 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/van_veen_motorcycles.php">Van Veen motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/vectrix_motorcycles.php">Vectrix motorcycles</a></td><td class="even" style="text-align:right">14 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/veli_motorcycles.php">Veli motorcycles</a></td><td class="odd" style="text-align:right">140 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/velocette_motorcycles.php">Velocette motorcycles</a></td><td class="even" style="text-align:right">86 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/vento_motorcycles.php">Vento motorcycles</a></td><td class="odd" style="text-align:right">69 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/vertemati_motorcycles.php">Vertemati motorcycles</a></td><td class="even" style="text-align:right">18 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/vertigo_motorcycles.php">Vertigo motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/vervemoto_motorcycles.php">Vervemoto motorcycles</a></td><td class="even" style="text-align:right">3 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/vespa_motorcycles.php">Vespa motorcycles</a></td><td class="odd" style="text-align:right">206 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/vibgyor_motorcycles.php">Vibgyor motorcycles</a></td><td class="even" style="text-align:right">4 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/victoria_motorcycles.php">Victoria motorcycles</a></td><td class="odd" style="text-align:right">8 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/victory_motorcycles.php">Victory motorcycles</a></td><td class="even" style="text-align:right">178 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/vincent_motorcycles.php">Vincent motorcycles</a></td><td class="odd" style="text-align:right">5 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/vincent_hrd_motorcycles.php">Vincent HRD motorcycles</a></td><td class="even" style="text-align:right">13 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/viper_motorcycles.php">Viper motorcycles</a></td><td class="odd" style="text-align:right">14 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/vmoto_motorcycles.php">Vmoto motorcycles</a></td><td class="even" style="text-align:right">30 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/von_dutch_motorcycles.php">Von Dutch motorcycles</a></td><td class="odd" style="text-align:right">9 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/vor_motorcycles.php">VOR motorcycles</a></td><td class="even" style="text-align:right">12 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/voskhod_motorcycles.php">Voskhod motorcycles</a></td><td class="odd" style="text-align:right">6 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/voxan_motorcycles.php">Voxan motorcycles</a></td><td class="even" style="text-align:right">27 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/vuka_motorcycles.php">Vuka motorcycles</a></td><td class="odd" style="text-align:right">5 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/vyrus_motorcycles.php">Vyrus motorcycles</a></td><td class="even" style="text-align:right">26 &nbsp;</td></tr>
<tr class="odd"><td class="odd" style="color:#990134;font-size:18px"><a name="W"></a>W</td><td></td></tr>
<tr class="even"><td class="even"><a href="/brand/wakan_motorcycles.php">Wakan motorcycles</a></td><td class="even" style="text-align:right">9 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/werner_motorcycles.php">Werner motorcycles</a></td><td class="odd" style="text-align:right">1 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/west_coast_choppers_motorcycles.php">West Coast Choppers motorcycles</a></td><td class="even" style="text-align:right">6 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/wk_motorcycles.php">WK motorcycles</a></td><td class="odd" style="text-align:right">16 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/wrm_motorcycles.php">WRM motorcycles</a></td><td class="even" style="text-align:right">3 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/wsk_motorcycles.php">WSK motorcycles</a></td><td class="odd" style="text-align:right">3 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/wt_motors_motorcycles.php">WT Motors motorcycles</a></td><td class="even" style="text-align:right">20 &nbsp;</td></tr>
<tr class="odd"><td class="odd" style="color:#990134;font-size:18px"><a name="X"></a>X</td><td></td></tr>
<tr class="even"><td class="even"><a href="/brand/xingfu_motorcycles.php">Xingfu motorcycles</a></td><td class="even" style="text-align:right">5 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/xingyue_motorcycles.php">Xingyue motorcycles</a></td><td class="odd" style="text-align:right">33 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/xispa_motorcycles.php">Xispa motorcycles</a></td><td class="even" style="text-align:right">20 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/xmotos_motorcycles.php">Xmotos motorcycles</a></td><td class="odd" style="text-align:right">27 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/xor_motorcycles.php">XOR motorcycles</a></td><td class="even" style="text-align:right">8 &nbsp;</td></tr>
<tr class="odd"><td class="odd" style="color:#990134;font-size:18px"><a name="Y"></a>Y</td><td></td></tr>
<tr class="even"><td class="even"><a href="/brand/yale_motorcycles.php">Yale motorcycles</a></td><td class="even" style="text-align:right">2 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/yamaha_motorcycles.php">Yamaha motorcycles</a></td><td class="odd" style="text-align:right">2748 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/yangtze_motorcycles.php">Yangtze motorcycles</a></td><td class="even" style="text-align:right">18 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/yiben_motorcycles.php">Yiben motorcycles</a></td><td class="odd" style="text-align:right">13 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/yobykes_motorcycles.php">YObykes motorcycles</a></td><td class="even" style="text-align:right">7 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/yuki_motorcycles.php">Yuki motorcycles</a></td><td class="odd" style="text-align:right">19 &nbsp;</td></tr>
<tr class="even"><td class="even" style="color:#990134;font-size:18px"><a name="Z"></a>Z</td><td></td></tr>
<tr class="odd"><td class="odd"><a href="/brand/zanella_motorcycles.php">Zanella motorcycles</a></td><td class="odd" style="text-align:right">2 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/zero_motorcycles.php">Zero motorcycles</a></td><td class="even" style="text-align:right">19 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/zero_engineering_motorcycles.php">Zero Engineering motorcycles</a></td><td class="odd" style="text-align:right">16 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/zest_motorcycles.php">Zest motorcycles</a></td><td class="even" style="text-align:right">7 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/zev_motorcycles.php">ZEV motorcycles</a></td><td class="odd" style="text-align:right">17 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/znen_motorcycles.php">Znen motorcycles</a></td><td class="even" style="text-align:right">42 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/zongshen_motorcycles.php">Zongshen motorcycles</a></td><td class="odd" style="text-align:right">7 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/zontes_motorcycles.php">Zontes motorcycles</a></td><td class="even" style="text-align:right">9 &nbsp;</td></tr>
<tr class="odd"><td class="odd"><a href="/brand/zweirad-union_motorcycles.php">Zweirad-Union motorcycles</a></td><td class="odd" style="text-align:right">5 &nbsp;</td></tr>
<tr class="even"><td class="even"><a href="/brand/zundapp_motorcycles.php">Zündapp motorcycles</a></td><td class="even" style="text-align:right">168 &nbsp;</td></tr>
EOD;
        //THIS IS FOR TEXT MULTI LINE

        //preg_match_all('/^[a-zA-Z]([\w -]*[a-zA-Z])?/im', $str, $matches, PREG_OFFSET_CAPTURE);

        // <a href="\/brand\/[a-zA-Zü]+([\w -_]*[a-zA-Z])?.php">

        preg_match_all('/(?<=(.php">))[a-zA-Zü]+([\w -]*[a-zA-Z])(?=(<\/a>))/im', $str, $matches, PREG_OFFSET_CAPTURE);

        $matches = $matches[0];

        foreach ($matches as $k => $v) {
            # code...
            array_push($newMatches, $v[0]);
        }

        foreach ($newMatches as $k => $v) {
            # code...
            $newSQL = $newSQL."INSERT INTO cars ( parent_id, name, slug) VALUES (899, '$v', '".sluggify($v). "'); ";
        }

        return $newSQL;



        
        

    }