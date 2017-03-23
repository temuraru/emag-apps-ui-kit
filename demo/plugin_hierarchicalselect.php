<!DOCTYPE html>
<html lang="en" class="js">
<head>

    <title>JS Components - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>
    <link rel="stylesheet" href="../dist/plugins/css3spinners/css3-spinners.1.2.2.min.css">
    <link rel="stylesheet" href="../dist/plugins/hierarchicalselect/hierarchicalselect.min.css">
    <?php include_once "modules/_mod_top_include.php"?>

</head>
<?php include_once "modules/_mod_browser_upgrade.php"?>

<!-- HEADER:Start -->
<?php include_once "modules/_mod_header.php"?>
<!-- HEADER:End -->

<!-- PAGE:Start -->
<div class="main-container" id="main-container">
    <div class="main-container-inner">
        <!-- SIDEBAR:Start -->
        <?php include_once "modules/_mod_sidebar.php"?>
        <!-- SIDEBAR:End -->
        <!-- CONTENT:Start -->
        <div class="main-content">
            <div class="page-content">
                <div class="jumbotron content-header">
                    <div class="container-fluid">
                        <p>eMAG Apps UI KIT</p>
                        <p><b>Hierarchical select</b></p>
                    </div>
                </div>
                <section class="pad-top-40">
                    <div class="show-panel">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>Hierarchical select</strong></h4>

                            <div class="form-group">
                                <label for="hierarchical_select">Categories</label>
                                <div class="hide-with-opacity">
                                    <select id="hierarchical_select" name="hierarchical_select"></select>
                                </div>
                                <div class="row hierarchical-container">
                                    <div class="col-sm-12">
                                        <div id="id_hierarchical_select"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- CONTENT:End -->
        <!-- FOOTER:Start -->
        <?php include_once "modules/_mod_footer.php"?>
        <!-- FOOTER:End -->
    </div>
</div>
<!-- PAGE:End -->

<!-- POPUPS:Start -->
<div id="pop_space"></div>
<!-- POPUPS:End -->

<!-- SCRIPTS:Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>
<script src="../dist/js/lib/jquery-ui.1.11.4.min.js"></script>
<script src="../dist/js/main_script.min.js"></script>
<script src="../dist/plugins/hierarchicalselect/hierarchicalselect.min.js"></script>
<script src="../dist/js/demo_helpers.js"></script>
<!-- SCRIPTS:End -->

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    $(document).ready(function () {
        console.log('Ready, Captain!');

        demoHelpers();  // Require demo_helpers.js

        $('#id_hierarchical_select').HierarchicalSelect({
            data: {
                0: [
                    {'key':1512,	'title':'AC',	                        'folder':true,	'selected':false},
                    {'key':2097,	'title':'AC Others',	                'folder':true,	'selected':false},
                    {'key':1453,	'title':'Auto Parts',	                'folder':true,	'selected':false},
                    {'key':1517,	'title':'AV & HiFi',	                'folder':true,	'selected':false},
                    {'key':357,	    'title':'Beauty',	                    'folder':true,	'selected':false}
                ],
                1512: [{"key":97,"title":"Air Conditioners","selected":false,"extraClasses":"","children":[]}],
                2097: [{"key":531,"title":"Conditioning","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true}],
                531: [{"key":559,"title":"Air filtering devices","selected":false,"extraClasses":"","children":[]},{"key":1165,"title":"Boilers","selected":false,"extraClasses":"","children":[]},{"key":108,"title":"Central Heating","selected":false,"extraClasses":"","children":[]},{"key":1147,"title":"Central Heating  \u0026 Boilers Accessories","selected":false,"extraClasses":"","children":[]},{"key":489,"title":"Fans","selected":false,"extraClasses":"","children":[]},{"key":387,"title":"Heating","selected":false,"extraClasses":"","children":[]}],
                1453: [{"key":1443,"title":"Automobiles","selected":false,"extraClasses":"","children":[]},{"key":1457,"title":"Car Care \u0026 Cosmetics","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":1466,"title":"Car Electric","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":1470,"title":"Car Exterior Accessories","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":1478,"title":"Car Interior Accessories","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":1503,"title":"Car professional equipment","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":1489,"title":"Car Repair \u0026 Troubleshooting","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":1492,"title":"Car tuning","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":145,"title":"GPS Navigations \u0026 Auto-Moto Electronics","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":2527,"title":"Motorcycles","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":1454,"title":"Tires \u0026 Rims","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true}],
                1457: [{"key":1460,"title":"Antifreeze","selected":false,"extraClasses":"","children":[]},{"key":1459,"title":"Brake Fluid","selected":false,"extraClasses":"","children":[]},{"key":1463,"title":"Car Additives","selected":false,"extraClasses":"","children":[]},{"key":1465,"title":"Car Freshener","selected":false,"extraClasses":"","children":[]},{"key":1464,"title":"Car wipers","selected":false,"extraClasses":"","children":[]},{"key":1081,"title":"Cleaning , Maintenance \u0026 Accessories","selected":false,"extraClasses":"","children":[]},{"key":2536,"title":"Fuel","selected":false,"extraClasses":"","children":[]},{"key":1462,"title":"Gearbox Oil","selected":false,"extraClasses":"","children":[]},{"key":1798,"title":"Maintenance Packages","selected":false,"extraClasses":"","children":[]},{"key":1458,"title":"Motor Oil","selected":false,"extraClasses":"","children":[]},{"key":1461,"title":"Windshield Fluid","selected":false,"extraClasses":"","children":[]}],
                1466: [{"key":1468,"title":"Car Bateries","selected":false,"extraClasses":"","children":[]},{"key":1467,"title":"Lightbulbs and car fuses","selected":false,"extraClasses":"","children":[]},{"key":1469,"title":"Projectors, Lamps \u0026 LED\u0027s","selected":false,"extraClasses":"","children":[]}],
                1470: [{"key":1473,"title":"Car bike mount","selected":false,"extraClasses":"","children":[]},{"key":1471,"title":"Roof Rack","selected":false,"extraClasses":"","children":[]},{"key":1474,"title":"Ski mount","selected":false,"extraClasses":"","children":[]},{"key":1477,"title":"Snow Chains","selected":false,"extraClasses":"","children":[]},{"key":1475,"title":"Towing systems","selected":false,"extraClasses":"","children":[]},{"key":1472,"title":"Trunk Boxes","selected":false,"extraClasses":"","children":[]},{"key":1476,"title":"Wheel Covers","selected":false,"extraClasses":"","children":[]}],
                1478: [{"key":1483,"title":"Anti-theft for steering wheel","selected":false,"extraClasses":"","children":[]},{"key":1481,"title":"Car arm rests","selected":false,"extraClasses":"","children":[]},{"key":1488,"title":"Car Chains","selected":false,"extraClasses":"","children":[]},{"key":1479,"title":"Car Mats","selected":false,"extraClasses":"","children":[]},{"key":1486,"title":"Car Mounts","selected":false,"extraClasses":"","children":[]},{"key":1487,"title":"Car Shades","selected":false,"extraClasses":"","children":[]},{"key":1482,"title":"Covers","selected":false,"extraClasses":"","children":[]},{"key":1485,"title":"Interior Car Mirrors","selected":false,"extraClasses":"","children":[]},{"key":1480,"title":"Trunk Protection","selected":false,"extraClasses":"","children":[]}],
                1503: [{"key":2264,"title":"Car Testers and Self Diagnosis","selected":false,"extraClasses":"","children":[]},{"key":2262,"title":"Hoists and lifting equipment","selected":false,"extraClasses":"","children":[]},{"key":2266,"title":"Professional Tools for Car Repair","selected":false,"extraClasses":"","children":[]},{"key":2263,"title":"Wheel service equipment","selected":false,"extraClasses":"","children":[]},{"key":2265,"title":"Workshop Equipment","selected":false,"extraClasses":"","children":[]}],
                1489: [{"key":1490,"title":"Car paint \u0026 Accessories","selected":false,"extraClasses":"","children":[]},{"key":1491,"title":"Car safety kits","selected":false,"extraClasses":"","children":[]},{"key":1170,"title":"Car Tools \u0026 Accessories","selected":false,"extraClasses":"","children":[]},{"key":1128,"title":"Compressors, Rectifiers \u0026 Testers","selected":false,"extraClasses":"","children":[]}],
                1492: [{"key":1500,"title":"Ailerons","selected":false,"extraClasses":"","children":[]},{"key":1493,"title":"Car Mirrors","selected":false,"extraClasses":"","children":[]},{"key":1484,"title":"Car Ornaments","selected":false,"extraClasses":"","children":[]},{"key":1498,"title":"Car Pedal Coverings","selected":false,"extraClasses":"","children":[]},{"key":1496,"title":"Car Stickers","selected":false,"extraClasses":"","children":[]},{"key":1502,"title":"Car Tuning Accesssories","selected":false,"extraClasses":"","children":[]},{"key":1495,"title":"Decorative Car Antenna","selected":false,"extraClasses":"","children":[]},{"key":1494,"title":"Exhausts","selected":false,"extraClasses":"","children":[]},{"key":1497,"title":"Mud defenders","selected":false,"extraClasses":"","children":[]},{"key":1501,"title":"Spoiler","selected":false,"extraClasses":"","children":[]},{"key":1499,"title":"Sport Mats","selected":false,"extraClasses":"","children":[]}],
                145: [{"key":1129,"title":"Auto Electronics \u0026 Accessories","selected":false,"extraClasses":"","children":[]},{"key":1346,"title":"Car Alarms \u0026 Parking Sensors","selected":false,"extraClasses":"","children":[]},{"key":1350,"title":"Car camera DVR","selected":false,"extraClasses":"","children":[]},{"key":276,"title":"Car CD Changer","selected":false,"extraClasses":"","children":[]},{"key":203,"title":"Car DVD Players","selected":false,"extraClasses":"","children":[]},{"key":147,"title":"Car Radio, CD \u0026 DVD players","selected":false,"extraClasses":"","children":[]},{"key":275,"title":"Car Speakers \u0026 Subwoofers","selected":false,"extraClasses":"","children":[]},{"key":320,"title":"GPS Navigations","selected":false,"extraClasses":"","children":[]},{"key":367,"title":"Radar Detectors","selected":false,"extraClasses":"","children":[]},{"key":525,"title":"Radio stations \u0026 Radar Detectors","selected":false,"extraClasses":"","children":[]},{"key":148,"title":"Car CD Storage","selected":false,"extraClasses":"tree-inactive-item","children":[]},{"key":150,"title":"Car Monitors","selected":false,"extraClasses":"tree-inactive-item","children":[]},{"key":146,"title":"Car radio cassette","selected":false,"extraClasses":"tree-inactive-item","children":[]},{"key":149,"title":"Car Speakers","selected":false,"extraClasses":"tree-inactive-item","children":[]},{"key":366,"title":"Car Subwoofers","selected":false,"extraClasses":"tree-inactive-item","children":[]}],
                2527: [{"key":2529,"title":"ATV and UTV","selected":false,"extraClasses":"","children":[]},{"key":833,"title":"Electric vehicles","selected":false,"extraClasses":"","children":[]},{"key":2135,"title":"Moto Supplies","selected":false,"extraClasses":"","children":[]},{"key":2532,"title":"Motorcycle Accessories","selected":false,"extraClasses":"","children":[]},{"key":2531,"title":"Motorcycle Protection Gear","selected":false,"extraClasses":"","children":[]},{"key":2528,"title":"Motorcycles and Scooters","selected":false,"extraClasses":"","children":[]},{"key":2530,"title":"Snowmobile","selected":false,"extraClasses":"","children":[]}],
                1454: [{"key":1456,"title":"Car Rims","selected":false,"extraClasses":"","children":[]},{"key":1455,"title":"Tires","selected":false,"extraClasses":"","children":[]}],
                1517: [{"key":408,"title":"Audio HI-FI","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":117,"title":"DVD \u0026 Blu-Ray Players","selected":false,"extraClasses":"","children":[]},{"key":1133,"title":"Home Cinema \u0026 Audio","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":467,"title":"Mediaplayers","selected":false,"extraClasses":"","children":[]},{"key":2335,"title":"Projectors \u0026 Accessories","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":185,"title":"Videorecorders","selected":false,"extraClasses":"tree-inactive-item","children":[]}],
                408: [{"key":539,"title":"Amplituners","selected":false,"extraClasses":"","children":[]},{"key":1150,"title":"Audio Hi-Fi Accessories","selected":false,"extraClasses":"","children":[]},{"key":2442,"title":"Audio Mixers","selected":false,"extraClasses":"","children":[]},{"key":2427,"title":"Audio Processors","selected":false,"extraClasses":"","children":[]},{"key":2329,"title":"Complete Systems","selected":false,"extraClasses":"","children":[]},{"key":420,"title":"Connectors","selected":false,"extraClasses":"","children":[]},{"key":2430,"title":"Controllers","selected":false,"extraClasses":"","children":[]},{"key":2431,"title":"DJ Equipments","selected":false,"extraClasses":"","children":[]},{"key":2428,"title":"Microphones","selected":false,"extraClasses":"","children":[]},{"key":1061,"title":"Pick-ups","selected":false,"extraClasses":"","children":[]},{"key":540,"title":"Players","selected":false,"extraClasses":"","children":[]},{"key":204,"title":"Players \u0026 Receivers","selected":false,"extraClasses":"","children":[]},{"key":2572,"title":"Professional Amplifiers","selected":false,"extraClasses":"","children":[]},{"key":2571,"title":"Professional Speakers","selected":false,"extraClasses":"","children":[]},{"key":542,"title":"Speakers","selected":false,"extraClasses":"","children":[]},{"key":2429,"title":"Stands","selected":false,"extraClasses":"","children":[]},{"key":635,"title":"Wireless Audio Systems","selected":false,"extraClasses":"","children":[]},{"key":536,"title":"Floor Speakers","selected":false,"extraClasses":"tree-inactive-item","children":[]},{"key":537,"title":"Subwoofers","selected":false,"extraClasses":"tree-inactive-item","children":[]}],
                1133: [{"key":124,"title":"Audio Systems","selected":false,"extraClasses":"","children":[]},{"key":162,"title":"Cassette Player","selected":false,"extraClasses":"","children":[]},{"key":113,"title":"Home Cinema","selected":false,"extraClasses":"","children":[]},{"key":538,"title":"Soundbar","selected":false,"extraClasses":"","children":[]},{"key":1140,"title":"Docking","selected":false,"extraClasses":"tree-inactive-item","children":[]}],
                2335: [{"key":80,"title":"Projectors","selected":false,"extraClasses":"","children":[]},{"key":249,"title":"Projectors Accessories","selected":false,"extraClasses":"","children":[]}],
                357: [{"key":490,"title":"Body Care \u0026 Hygiene","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":1320,"title":"Cosmetics","selected":false,"extraClasses":"","children":[]},{"key":1063,"title":"Dental Hygiene","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":1361,"title":"Face \u0026 Skin Care","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":526,"title":"Hair Care \u0026 Hair Styling","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":300,"title":"Health and Care","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":1064,"title":"Home Confort","selected":false,"extraClasses":"","children":[]},{"key":1354,"title":"Make-up \u0026 Nails","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":35,"title":"OTC Medicines","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":1353,"title":"Perfumery","selected":false,"extraClasses":"","children":[]},{"key":1334,"title":"Personal Hygiene","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":2549,"title":"Sight Correction","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true},{"key":2466,"title":"Vitamins and Supplements","selected":false,"extraClasses":"","children":[],"lazy":true,"folder":true}],
                490: [{"key":2441,"title":"Body Care Accessories","selected":false,"extraClasses":"","children":[]},{"key":1372,"title":"Creams and Body Lotions","selected":false,"extraClasses":"","children":[]},{"key":1369,"title":"Deodorants and Antiperspirants","selected":false,"extraClasses":"","children":[]},{"key":1376,"title":"Depilation","selected":false,"extraClasses":"","children":[]},{"key":2443,"title":"Diapers for adults","selected":false,"extraClasses":"","children":[]},{"key":1377,"title":"Gift Sets","selected":false,"extraClasses":"","children":[]},{"key":1374,"title":"Intimate Hygiene","selected":false,"extraClasses":"","children":[]},{"key":1375,"title":"Pads and tampons","selected":false,"extraClasses":"","children":[]},{"key":1333,"title":"Razors and accessories","selected":false,"extraClasses":"","children":[]},{"key":2286,"title":"Sexual Hygiene","selected":false,"extraClasses":"","children":[]},{"key":1312,"title":"Shaving Systems","selected":false,"extraClasses":"","children":[]},{"key":1370,"title":"Soap \u0026 Shower Gel","selected":false,"extraClasses":"","children":[]},{"key":1371,"title":"Body Oil","selected":false,"extraClasses":"tree-inactive-item","children":[]},{"key":1373,"title":"Hand Cream","selected":false,"extraClasses":"tree-inactive-item","children":[]}],
                1063: [{"key":2332,"title":"Classic Toothbrushes \u0026 Floss","selected":false,"extraClasses":"","children":[]},{"key":1383,"title":"Toothpaste \u0026 Mouthwash","selected":false,"extraClasses":"","children":[]}],
                1361: [{"key":1365,"title":"After Shave","selected":false,"extraClasses":"","children":[]},{"key":1363,"title":"Anti-Wrinkle Solutions","selected":false,"extraClasses":"","children":[]},{"key":1362,"title":"Cleaning \u0026 Cleansing","selected":false,"extraClasses":"","children":[]},{"key":1367,"title":"Cream and Face Mask","selected":false,"extraClasses":"","children":[]},{"key":1366,"title":"Lip Care","selected":false,"extraClasses":"","children":[]},{"key":1364,"title":"Shaving Foam","selected":false,"extraClasses":"","children":[]},{"key":1368,"title":"Skin Care Sets","selected":false,"extraClasses":"","children":[]}],
                526: [{"key":1378,"title":"Brushes and Hair Combs","selected":false,"extraClasses":"","children":[]},{"key":1433,"title":"Hair Care Sets","selected":false,"extraClasses":"","children":[]},{"key":1380,"title":"Hair Care Solutions","selected":false,"extraClasses":"","children":[]},{"key":1381,"title":"Hair Paint and Hair Painting Accessories","selected":false,"extraClasses":"","children":[]},{"key":1382,"title":"Hair Styling","selected":false,"extraClasses":"","children":[]},{"key":1379,"title":"Shampoo and Conditioner","selected":false,"extraClasses":"","children":[]}],
                300: [{"key":608,"title":"External Anti-parasitic","selected":false,"extraClasses":"","children":[]},{"key":1116,"title":"First Aid","selected":false,"extraClasses":"","children":[]},{"key":2506,"title":"Insect Protection","selected":false,"extraClasses":"","children":[]},{"key":1518,"title":"Local disinfection","selected":false,"extraClasses":"","children":[]},{"key":119,"title":"Rapid tests","selected":false,"extraClasses":"","children":[]},{"key":2483,"title":"Sanitary supplies","selected":false,"extraClasses":"","children":[]}],
                1354: [{"key":1355,"title":"Eyes","selected":false,"extraClasses":"","children":[]},{"key":1357,"title":"Face Skin","selected":false,"extraClasses":"","children":[]},{"key":1356,"title":"Lips","selected":false,"extraClasses":"","children":[]},{"key":1359,"title":"Make-up Accessories","selected":false,"extraClasses":"","children":[]},{"key":1358,"title":"Nails","selected":false,"extraClasses":"","children":[]},{"key":1360,"title":"Make-up Kits","selected":false,"extraClasses":"tree-inactive-item","children":[]}],
                35: [{"key":129,"title":"Analgesics and Antipyretics","selected":false,"extraClasses":"","children":[]},{"key":2540,"title":"Anti-allergic","selected":false,"extraClasses":"","children":[]},{"key":2539,"title":"Anti-cold and flu","selected":false,"extraClasses":"","children":[]},{"key":2538,"title":"Anti-inflammatory","selected":false,"extraClasses":"","children":[]},{"key":2541,"title":"Antifungals","selected":false,"extraClasses":"","children":[]},{"key":2542,"title":"Antispasmodic","selected":false,"extraClasses":"","children":[]},{"key":2537,"title":"Treatment digestive disorders","selected":false,"extraClasses":"","children":[]}],
                1334: [{"key":1337,"title":"Dental","selected":false,"extraClasses":"","children":[]},{"key":1335,"title":"For Men","selected":false,"extraClasses":"","children":[]},{"key":1336,"title":"For Women","selected":false,"extraClasses":"","children":[]}],
                2549: [{"key":2554,"title":"Accessories for Eyeglasses and Lenses","selected":false,"extraClasses":"","children":[]},{"key":2553,"title":"Contact Lenses","selected":false,"extraClasses":"","children":[]},{"key":2555,"title":"Eye Care products","selected":false,"extraClasses":"","children":[]},{"key":2550,"title":"Eyeglasses","selected":false,"extraClasses":"","children":[]},{"key":2551,"title":"Eyeglasses Frames","selected":false,"extraClasses":"","children":[]},{"key":2552,"title":"Lenses for eyeglasses","selected":false,"extraClasses":"","children":[]}],
                466: [{"key":1319,"title":"Anti-aging and beauty products","selected":false,"extraClasses":"","children":[]},{"key":2489,"title":"Antioxidants","selected":false,"extraClasses":"","children":[]},{"key":810,"title":"Children Dietary Supplements","selected":false,"extraClasses":"","children":[]},{"key":1526,"title":"Cough, respiratory system products","selected":false,"extraClasses":"","children":[]},{"key":218,"title":"Energizers and supplements for regeneration","selected":false,"extraClasses":"","children":[]},{"key":609,"title":"General and specific protection","selected":false,"extraClasses":"","children":[]},{"key":808,"title":"Products for Eyes","selected":false,"extraClasses":"","children":[]},{"key":60,"title":"Products for increased immunity","selected":false,"extraClasses":"","children":[]},{"key":321,"title":"Products for metabolism change","selected":false,"extraClasses":"","children":[]},{"key":223,"title":"Products for nervous system","selected":false,"extraClasses":"","children":[]},{"key":830,"title":"Products for renal system","selected":false,"extraClasses":"","children":[]},{"key":862,"title":"Products for the cardiovascular system","selected":false,"extraClasses":"","children":[]},{"key":2500,"title":"Supplements for bone and joint system","selected":false,"extraClasses":"","children":[]},{"key":311,"title":"Supplements for hormonal balance","selected":false,"extraClasses":"","children":[]},{"key":809,"title":"Supplements for the couple and sex","selected":false,"extraClasses":"","children":[]},{"key":2504,"title":"Supplements for the digestive system","selected":false,"extraClasses":"","children":[]},{"key":120,"title":"Synthetic for sweeteners and food","selected":false,"extraClasses":"","children":[]},{"key":1318,"title":"Vitamins and minerals","selected":false,"extraClasses":"","children":[]},{"key":128,"title":"Weight loss and diets","selected":false,"extraClasses":"","children":[]}],
            },
            select: '#hierarchical_select',
            ajaxRoute: '#'
        });
    });
</script>
<!-- DOCUMENT-READY:End -->

</body>
</html>