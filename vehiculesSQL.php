<?php

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

<li><a href="/wiki/Aerosani" title="Aerosani">Aerosani</a></li>
<li><a href="/wiki/Airship" title="Airship">Airship</a></li>
<li><a href="/wiki/All-terrain_vehicle" title="All-terrain vehicle">All-terrain vehicle</a></li>
<li><a href="/wiki/Amphibious_ATV" title="Amphibious ATV">Amphibious all-terrain vehicle</a></li>
<li><a href="/wiki/Amphibious_vehicle" title="Amphibious vehicle">Amphibious vehicle</a></li>
<li><a href="/wiki/Autogyro" title="Autogyro">Autogyro</a></li>
<li><a href="/wiki/Automobile" class="mw-redirect" title="Automobile">Automobile</a></li>
<li><a href="/wiki/Auto_rickshaw" title="Auto rickshaw">Auto rickshaw</a></li>
<li><a href="/wiki/Balloon" title="Balloon">Balloon</a></li>
<li><a href="/wiki/Bathyscaphe" title="Bathyscaphe">Bathyscaphe</a></li>
<li><a href="/wiki/Bicycle" title="Bicycle">Bicycle</a></li>
<li><a href="/wiki/Blimp" title="Blimp">Blimp</a></li>
<li><a href="/wiki/Boat" title="Boat">Boat</a></li>
<li><a href="/wiki/Bus" title="Bus">Bus</a></li>
<li><a href="/wiki/Cable_car" title="Cable car">Cable car</a></li>
<li><a href="/wiki/Catamaran" title="Catamaran">Catamaran</a></li>
<li><a href="/wiki/Canoe" title="Canoe">Canoe</a></li>
<li><a href="/wiki/Coach_(bus)" title="Coach (bus)">Coach (bus)</a></li>
<li><a href="/wiki/Coach_(carriage)" title="Coach (carriage)">Coach (carriage)</a></li>
<li><a href="/wiki/Cycle_rickshaw" title="Cycle rickshaw">Cycle rickshaw</a></li>
<li><a href="/wiki/Dandy_horse" title="Dandy horse">Dandy horse</a></li>
<li><a href="/wiki/Deep_Submergence_Vehicle" class="mw-redirect" title="Deep Submergence Vehicle">Deep Submergence Vehicle</a></li>
<li><a href="/wiki/Diving_bell" title="Diving bell">Diving bell</a></li>
<li><a href="/wiki/Diving_chamber" title="Diving chamber">Diving chamber</a></li>
<li><a href="/wiki/Dog_sled" title="Dog sled">Dog sled</a></li>
<li><a href="/wiki/Draisine" title="Draisine">Draisine</a></li>
<li><a href="/wiki/Electric_vehicle" title="Electric vehicle">Electric vehicle</a></li>
<li><a href="/wiki/Fixed-wing_aircraft" title="Fixed-wing aircraft">Fixed-wing aircraft</a></li>
<li><a href="/wiki/Golf_cart" title="Golf cart">Golf cart</a></li>
<li><a href="/wiki/Ground_effect_vehicle" title="Ground effect vehicle">Ground effect vehicle</a></li>
<li><a href="/wiki/Glider_aircraft" class="mw-redirect" title="Glider aircraft">Glider aircraft</a></li>
<li><a href="/wiki/Handcar" title="Handcar">Handcar</a></li>
<li><a href="/wiki/Hang_glider" class="mw-redirect" title="Hang glider">Hang glider</a></li>
<li><a href="/wiki/Hayabusa#MINERVA_mini-lander" title="Hayabusa">Hopper</a><sup id="cite_ref-1" class="reference"><a href="#cite_note-1">[1]</a></sup></li>
<li><a href="/wiki/Helicopter" title="Helicopter">Helicopter</a></li>
<li><a href="/wiki/Hovercraft" title="Hovercraft">Hovercraft</a></li>
<li><a href="/wiki/Hydrofoil" title="Hydrofoil">Hydrofoil</a></li>
<li><a href="/wiki/Ice_Skates" class="mw-redirect" title="Ice Skates">Ice Skates</a></li>
<li><a href="/wiki/Jet_aircraft" title="Jet aircraft">Jet aircraft</a></li>
<li><a href="/wiki/Jet_pack" title="Jet pack">Jet pack</a></li>
<li><a href="/wiki/Jet_ski" class="mw-redirect" title="Jet ski">jet ski</a></li>
<li><a href="/wiki/Kayak" title="Kayak">Kayak</a></li>
<li><a href="/wiki/Kick_scooter" title="Kick scooter">Kick scooter</a></li>
<li><a href="/wiki/Land_yacht" class="mw-redirect" title="Land yacht">Land yacht</a></li>
<li><a href="/wiki/Launch_escape_system" title="Launch escape system">Launch escape capsule</a></li>
<li><a href="/wiki/Locomotive" title="Locomotive">Locomotive</a></li>
<li><a href="/wiki/Maglev" title="Maglev">Maglev</a></li>
<li><a href="/wiki/Minibus" title="Minibus">Minibus</a></li>
<li><a href="/wiki/Minivan" title="Minivan">Minivan</a></li>
<li><a href="/wiki/Monorail" title="Monorail">Monorail</a></li>
<li><a href="/wiki/Monowheel" title="Monowheel">Monowheel</a></li>
<li><a href="/wiki/Moped" title="Moped">Moped</a></li>
<li><a href="/wiki/Motorcycle" title="Motorcycle">Motorcycle</a></li>
<li><a href="/wiki/Omni_Directional_Vehicle" title="Omni Directional Vehicle">Omni Directional Vehicle</a></li>
<li><a href="/wiki/Ornithopter" title="Ornithopter">Ornithopter</a></li>
<li><a href="/wiki/Passenger_car_(rail)" title="Passenger car (rail)">Passenger car</a></li>
<li><a href="/wiki/Pulled_rickshaw" title="Pulled rickshaw">Rickshaw</a></li>
<li><a href="/wiki/Pedalo" title="Pedalo">Pedalo</a></li>
<li><a href="/wiki/Pogo_Stick" class="mw-redirect" title="Pogo Stick">Pogo Stick</a></li>
<li><a href="/wiki/Powered_parachute" title="Powered parachute">Powered parachute</a></li>
<li><a href="/wiki/Quadracycle" title="Quadracycle">Quadracycle</a></li>
<li><a href="/wiki/Race_car" class="mw-redirect" title="Race car">Race car</a></li>
<li><a href="/wiki/Road_train" title="Road train">Road train</a></li>
<li><a href="/wiki/Rocket" title="Rocket">Rocket</a></li>
<li><a href="/wiki/Rocket_sled" title="Rocket sled">Rocket sled</a></li>
<li><a href="/wiki/Rover_(space_exploration)" title="Rover (space exploration)">Rover</a></li>
<li><a href="/wiki/Screw-propelled_vehicle" title="Screw-propelled vehicle">Screw-propelled vehicle</a></li>
<li><a href="/wiki/Sea_tractor" title="Sea tractor">Sea tractor</a></li>
<li><a href="/wiki/Zipline" class="mw-redirect" title="Zipline">Zipline</a></li>
</ul>
<h3><span class="mw-headline" id="Aircraft">Aircraft</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Outline_of_vehicles&amp;action=edit&amp;section=2" title="Edit section: Aircraft">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<p><a href="/wiki/Aircraft" title="Aircraft">Aircraft</a></p>
<ul>
<li><a href="/wiki/Jet_pack#Yves_Rossy.27s_jet_wingpack" title="Jet pack">Wingpack</a></li>
<li><a href="/wiki/Unmanned_aerial_vehicle" title="Unmanned aerial vehicle">Unmanned aerial vehicle</a></li>
</ul>
<h3><span class="mw-headline" id="Landcraft">Landcraft</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Outline_of_vehicles&amp;action=edit&amp;section=3" title="Edit section: Landcraft">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<p><a href="/wiki/Land_vehicle" class="mw-redirect" title="Land vehicle">Land vehicle</a></p>
<ul>
<li><a href="/wiki/Scooter_(motorcycle)" title="Scooter (motorcycle)">Scooter (motorcycle)</a></li>
<li><a href="/wiki/Segway_Personal_Transporter" class="mw-redirect" title="Segway Personal Transporter">Segway Personal Transporter</a></li>
<li><a href="/wiki/Single-track_vehicle" title="Single-track vehicle">Single-track vehicle</a></li>
<li><a href="/wiki/Skateboard" title="Skateboard">Skateboard</a></li>
<li><a href="/wiki/Skis" class="mw-redirect" title="Skis">Skis</a></li>
<li><a href="/wiki/Sled" title="Sled">Sled</a></li>
<li><a href="/wiki/Snowboard" title="Snowboard">Snowboard</a></li>
<li><a href="/wiki/Snowmobile" title="Snowmobile">Snowmobile</a></li>
<li><a href="/wiki/Space_Hopper" class="mw-redirect" title="Space Hopper">Space Hopper</a></li>
<li><a href="/wiki/Sports_car" title="Sports car">Sports car</a></li>
<li><a href="/wiki/Steam_car" title="Steam car">Steam car</a></li>
<li><a href="/wiki/Suv" class="mw-redirect" title="Suv">Suv</a></li>
<li><a href="/wiki/Tank" title="Tank">Tank</a></li>
<li><a href="/wiki/Tractor" title="Tractor">Tractor</a></li>
<li><a href="/wiki/Traction_engine" title="Traction engine">Traction engine</a></li>
<li><a href="/wiki/Train" title="Train">Train</a></li>
<li><a href="/wiki/Tram" title="Tram">Tram</a></li>
<li><a href="/wiki/Tricycle" title="Tricycle">Tricycle</a></li>
<li><a href="/wiki/Trolleybus" title="Trolleybus">Trolleybus</a></li>
<li><a href="/wiki/Truck" title="Truck">Truck</a></li>
<li><a href="/wiki/Unicycle" title="Unicycle">Unicycle</a></li>
<li><a href="/wiki/Van" title="Van">Van</a></li>
<li><a href="/wiki/Velocipede" title="Velocipede">Velocipede</a></li>
<li><a href="/wiki/Velomobile" title="Velomobile">Velomobile</a></li>
<li><a href="/wiki/Wagon" title="Wagon">Wagon</a></li>
<li><a href="/wiki/Wheelbarrow" title="Wheelbarrow">Wheelbarrow</a></li>
</ul>
<h3><span class="mw-headline" id="Watercraft">Watercraft</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Outline_of_vehicles&amp;action=edit&amp;section=4" title="Edit section: Watercraft">edit</a><span class="mw-editsection-bracket">]</span></span></h3>
<p><a href="/wiki/Watercraft" title="Watercraft">Watercraft</a></p>
<ul>
<li><a href="/wiki/Sailboat" title="Sailboat">Sailboat</a></li>
<li><a href="/wiki/Ship" title="Ship">Ship</a></li>
<li><a href="/wiki/Submarine" title="Submarine">Submarine</a></li>
<li><a href="/wiki/Submersible" title="Submersible">Submersible</a></li>
<li><a href="/wiki/Surfboard" title="Surfboard">Surfboard</a></li>
<li><a href="/wiki/Yacht" title="Yacht">Yacht</a></li>

EOD;
        //THIS IS FOR TEXT MULTI LINE

        //preg_match_all('/^[a-zA-Z]([\w -]*[a-zA-Z])?/im', $str, $matches, PREG_OFFSET_CAPTURE);

        // <a href="\/brand\/[a-zA-Zü]+([\w -_]*[a-zA-Z])?.php">

        preg_match_all('/(?<=(">))[a-zA-Zü]+([\w -]*[a-zA-Z])(?=(<\/a>))/im', $str, $matches, PREG_OFFSET_CAPTURE);

        $matches = $matches[0];

        foreach ($matches as $k => $v) {
            # code...
            array_push($newMatches, $v[0]);
        }

        foreach ($newMatches as $k => $v) {
            # code...
            $newSQL = $newSQL."INSERT INTO cars ( parent_id, name, slug) VALUES (0, '$v', '".sluggify($v). "'); ";
            //$newSQL = $newSQL."DB::table('cars')->insert([ 'parent_id' => 0, 'name' => '$v', 'slug' => '".sluggify($v). "']);";
        }

        return $newSQL;