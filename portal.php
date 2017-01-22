<?php
	include "includes/header.php";
?>

        <style>
            #example-one > div.tile {
                text-align: center;
                height: 130px;
                width: 150px;
                background-color: #3498db;
                display: inline-block;
                color: #fff;
                font-size: 50px;
                float: left;
                margin-right: 10px;
                margin-bottom: 10px;
            }
            
            #example-one > div.tile.unclassed {
                background-color: #e67e22;
            }
            
            #example-one > div.tile.dead {
                background-color: #000000;
            }
            
            #example-one > div.tile.test {
                background-color: #e74c3c;
            }
            
            #example-one > div.tile-2x {
                width: 310px;
            }
            
            #example-one > div.tile > span.wf {
                margin-top: 30px;
                display: inline-block;
            }
            
            #example-one > div.tile > span.title {
                font-size: 12px;
                font-family: SegoeUI-Regular-final, 'Segoe UI', 'Segoe UI WPC', Segoe, Tahoma, Helvetica, Arial, sans-serif;
                display: block;
            }
            
            #example-one h1 {
                clear: both;
                display: block;
                font-family: SegoeUI-Regular-final, 'Segoe UI', 'Segoe UI WPC', Segoe, Tahoma, Helvetica, Arial, sans-serif;
            }
            
            .hide {
                display: none !important;
            }
			
            /* Supplemental Classes for O365 Icons */
            .wf-o365-e000:before {
                content: '\e000';
            }
            
            .wf-o365-e002:before {
                content: '\e002';
            }
            
            .wf-o365-e003:before {
                content: '\e003';
            }
            
            .wf-o365-e005:before {
                content: '\e005';
            }
            
            .wf-o365-e007:before {
                content: '\e007';
            }
            
            .wf-o365-e00d:before {
                content: '\e00d';
            }
            
            .wf-o365-e00f:before {
                content: '\e00f';
            }
            
            .wf-o365-e014:before {
                content: '\e014';
            }
            
            .wf-o365-e015:before {
                content: '\e015';
            }
            
            .wf-o365-e018:before {
                content: '\e018';
            }
            
            .wf-o365-e019:before {
                content: '\e019';
            }
            
            .wf-o365-e01a:before {
                content: '\e01a';
            }
            
            .wf-o365-e01b:before {
                content: '\e01b';
            }
            
            .wf-o365-e01c:before {
                content: '\e01c';
            }
            
            .wf-o365-e01d:before {
                content: '\e01d';
            }
            
            .wf-o365-e01e:before {
                content: '\e01e';
            }
            
            .wf-o365-e01f:before {
                content: '\e01f';
            }
            
            .wf-o365-e021:before {
                content: '\e021';
            }
            
            .wf-o365-e024:before {
                content: '\e024';
            }
            
            .wf-o365-e026:before {
                content: '\e026';
            }
            
            .wf-o365-e028:before {
                content: '\e028';
            }
            
            .wf-o365-e029:before {
                content: '\e029';
            }
            
            .wf-o365-e02b:before {
                content: '\e02b';
            }
            
            .wf-o365-e02c:before {
                content: '\e02c';
            }
            
            .wf-o365-e02d:before {
                content: '\e02d';
            }
            
            .wf-o365-e02e:before {
                content: '\e02e';
            }
            
            .wf-o365-e02f:before {
                content: '\e02f';
            }
            
            .wf-o365-e030:before {
                content: '\e030';
            }
            
            .wf-o365-e031:before {
                content: '\e031';
            }
            
            .wf-o365-e032:before {
                content: '\e032';
            }
            
            .wf-o365-e033:before {
                content: '\e033';
            }
            
            .wf-o365-e034:before {
                content: '\e034';
            }
            
            .wf-o365-e037:before {
                content: '\e037';
            }
            
            .wf-o365-e038:before {
                content: '\e038';
            }
            
            .wf-o365-e03b:before {
                content: '\e03b';
            }
            
            .wf-o365-e03c:before {
                content: '\e03c';
            }
            
            .wf-o365-e03d:before {
                content: '\e03d';
            }
            
            .wf-o365-e03e:before {
                content: '\e03e';
            }
            
            .wf-o365-e03f:before {
                content: '\e03f';
            }
            
            .wf-o365-e043:before {
                content: '\e043';
            }
            
            .wf-o365-e046:before {
                content: '\e046';
            }
            
            .wf-o365-e047:before {
                content: '\e047';
            }
            
            .wf-o365-e048:before {
                content: '\e048';
            }
            
            .wf-o365-e04c:before {
                content: '\e04c';
            }
            
            .wf-o365-e04d:before {
                content: '\e04d';
            }
            
            .wf-o365-e04e:before {
                content: '\e04e';
            }
            
            .wf-o365-e04f:before {
                content: '\e04f';
            }
            
            .wf-o365-e053:before {
                content: '\e053';
            }
            
            .wf-o365-e054:before {
                content: '\e054';
            }
            
            .wf-o365-e05a:before {
                content: '\e05a';
            }
            
            .wf-o365-e05b:before {
                content: '\e05b';
            }
            
            .wf-o365-e05c:before {
                content: '\e05c';
            }
            
            .wf-o365-e05d:before {
                content: '\e05d';
            }
            
            .wf-o365-e05e:before {
                content: '\e05e';
            }
            
            .wf-o365-e05f:before {
                content: '\e05f';
            }
            
            .wf-o365-e067:before {
                content: '\e067';
            }
            
            .wf-o365-e068:before {
                content: '\e068';
            }
            
            .wf-o365-e069:before {
                content: '\e069';
            }
            
            .wf-o365-e06a:before {
                content: '\e06a';
            }
            
            .wf-o365-e06b:before {
                content: '\e06b';
            }
            
            .wf-o365-e06c:before {
                content: '\e06c';
            }
            
            .wf-o365-e06d:before {
                content: '\e06d';
            }
            
            .wf-o365-e06e:before {
                content: '\e06e';
            }
            
            .wf-o365-e06f:before {
                content: '\e06f';
            }
            
            .wf-o365-e070:before {
                content: '\e070';
            }
            
            .wf-o365-e071:before {
                content: '\e071';
            }
            
            .wf-o365-e073:before {
                content: '\e073';
            }
            
            .wf-o365-e074:before {
                content: '\e074';
            }
            
            .wf-o365-e075:before {
                content: '\e075';
            }
            
            .wf-o365-e076:before {
                content: '\e076';
            }
            
            .wf-o365-e077:before {
                content: '\e077';
            }
            
            .wf-o365-e078:before {
                content: '\e078';
            }
            
            .wf-o365-e079:before {
                content: '\e079';
            }
            
            .wf-o365-e07a:before {
                content: '\e07a';
            }
            
            .wf-o365-e07f:before {
                content: '\e07f';
            }
            
            .wf-o365-e080:before {
                content: '\e080';
            }
            
            .wf-o365-e084:before {
                content: '\e084';
            }
            
            .wf-o365-e085:before {
                content: '\e085';
            }
            
            .wf-o365-e086:before {
                content: '\e086';
            }
            
            .wf-o365-e089:before {
                content: '\e089';
            }
            
            .wf-o365-e08a:before {
                content: '\e08a';
            }
            
            .wf-o365-e08c:before {
                content: '\e08c';
            }
            
            .wf-o365-e08e:before {
                content: '\e08e';
            }
            
            .wf-o365-e08f:before {
                content: '\e08f';
            }
            
            .wf-o365-e090:before {
                content: '\e090';
            }
            
            .wf-o365-e091:before {
                content: '\e091';
            }
            
            .wf-o365-e092:before {
                content: '\e092';
            }
            
            .wf-o365-e093:before {
                content: '\e093';
            }
            
            .wf-o365-e094:before {
                content: '\e094';
            }
            
            .wf-o365-e09a:before {
                content: '\e09a';
            }
            
            .wf-o365-e09b:before {
                content: '\e09b';
            }
            
            .wf-o365-e09c:before {
                content: '\e09c';
            }
            
            .wf-o365-e09d:before {
                content: '\e09d';
            }
            
            .wf-o365-e09e:before {
                content: '\e09e';
            }
            
            .wf-o365-e0a0:before {
                content: '\e0a0';
            }
            
            .wf-o365-e0a1:before {
                content: '\e0a1';
            }
            
            .wf-o365-e0a2:before {
                content: '\e0a2';
            }
            
            .wf-o365-e0a3:before {
                content: '\e0a3';
            }
            
            .wf-o365-e0a4:before {
                content: '\e0a4';
            }
            
            .wf-o365-e0a5:before {
                content: '\e0a5';
            }
            
            .wf-o365-e0a6:before {
                content: '\e0a6';
            }
            
            .wf-o365-e0a7:before {
                content: '\e0a7';
            }
            
            .wf-o365-e0a8:before {
                content: '\e0a8';
            }
            
            .wf-o365-e0a9:before {
                content: '\e0a9';
            }
            
            .wf-o365-e0aa:before {
                content: '\e0aa';
            }
            
            .wf-o365-e0ab:before {
                content: '\e0ab';
            }
            
            .wf-o365-e0ac:before {
                content: '\e0ac';
            }
            
            .wf-o365-e0ad:before {
                content: '\e0ad';
            }
            
            .wf-o365-e0ae:before {
                content: '\e0ae';
            }
            
            .wf-o365-e0b0:before {
                content: '\e0b0';
            }
            
            .wf-o365-e0b1:before {
                content: '\e0b1';
            }
            
            .wf-o365-e0b2:before {
                content: '\e0b2';
            }
            
            .wf-o365-e0b4:before {
                content: '\e0b4';
            }
            
            .wf-o365-e0b6:before {
                content: '\e0b6';
            }
            
            .wf-o365-e0c0:before {
                content: '\e0c0';
            }
            
            .wf-o365-e100:before {
                content: '\e100';
            }
            
            .wf-o365-e101:before {
                content: '\e101';
            }
            
            .wf-o365-e102:before {
                content: '\e102';
            }
            
            .wf-o365-e103:before {
                content: '\e103';
            }
            
            .wf-o365-e104:before {
                content: '\e104';
            }
            
            .wf-o365-e105:before {
                content: '\e105';
            }
            
            .wf-o365-e106:before {
                content: '\e106';
            }
            
            .wf-o365-e110:before {
                content: '\e110';
            }
            
            .wf-o365-e111:before {
                content: '\e111';
            }
            
            .wf-o365-e112:before {
                content: '\e112';
            }
            
            .wf-o365-e113:before {
                content: '\e113';
            }
            
            .wf-o365-e114:before {
                content: '\e114';
            }
            
            .wf-o365-e115:before {
                content: '\e115';
            }
            
            .wf-o365-e116:before {
                content: '\e116';
            }
            
            .wf-o365-e117:before {
                content: '\e117';
            }
            
            .wf-o365-e119:before {
                content: '\e119';
            }
            
            .wf-o365-e11a:before {
                content: '\e11a';
            }
            
            .wf-o365-e11b:before {
                content: '\e11b';
            }
            
            .wf-o365-e11d:before {
                content: '\e11d';
            }
            
            .wf-o365-e11e:before {
                content: '\e11e';
            }
            
            .wf-o365-e120:before {
                content: '\e120';
            }
            
            .wf-o365-e121:before {
                content: '\e121';
            }
            
            .wf-o365-e122:before {
                content: '\e122';
            }
            
            .wf-o365-e124:before {
                content: '\e124';
            }
            
            .wf-o365-e125:before {
                content: '\e125';
            }
            
            .wf-o365-e131:before {
                content: '\e131';
            }
            
            .wf-o365-e132:before {
                content: '\e132';
            }
            
            .wf-o365-e133:before {
                content: '\e133';
            }
            
            .wf-o365-e134:before {
                content: '\e134';
            }
            
            .wf-o365-e135:before {
                content: '\e135';
            }
            
            .wf-o365-e136:before {
                content: '\e136';
            }
            
            .wf-o365-e138:before {
                content: '\e138';
            }
            
            .wf-o365-e139:before {
                content: '\e139';
            }
            
            .wf-o365-e150:before {
                content: '\e150';
            }
            
            .wf-o365-e151:before {
                content: '\e151';
            }
            
            .wf-o365-e152:before {
                content: '\e152';
            }
            
            .wf-o365-e153:before {
                content: '\e153';
            }
            
            .wf-o365-e154:before {
                content: '\e154';
            }
            
            .wf-o365-e156:before {
                content: '\e156';
            }
            
            .wf-o365-e157:before {
                content: '\e157';
            }
            
            .wf-o365-e158:before {
                content: '\e158';
            }
            
            .wf-o365-e159:before {
                content: '\e159';
            }
            
            .wf-o365-e15a:before {
                content: '\e15a';
            }
            
            .wf-o365-e15b:before {
                content: '\e15b';
            }
            
            .wf-o365-e15c:before {
                content: '\e15c';
            }
            
            .wf-o365-e15d:before {
                content: '\e15d';
            }
            
            .wf-o365-e15e:before {
                content: '\e15e';
            }
            
            .wf-o365-e15f:before {
                content: '\e15f';
            }
            
            .wf-o365-e160:before {
                content: '\e160';
            }
            
            .wf-o365-e161:before {
                content: '\e161';
            }
            
            .wf-o365-e162:before {
                content: '\e162';
            }
            
            .wf-o365-e163:before {
                content: '\e163';
            }
            
            .wf-o365-e164:before {
                content: '\e164';
            }
            
            .wf-o365-e165:before {
                content: '\e165';
            }
            
            .wf-o365-e166:before {
                content: '\e166';
            }
            
            .wf-o365-e167:before {
                content: '\e167';
            }
            
            .wf-o365-e168:before {
                content: '\e168';
            }
            
            .wf-o365-e169:before {
                content: '\e169';
            }
            
            .wf-o365-e16a:before {
                content: '\e16a';
            }
            
            .wf-o365-e16b:before {
                content: '\e16b';
            }
            
            .wf-o365-e16c:before {
                content: '\e16c';
            }
            
            .wf-o365-e16d:before {
                content: '\e16d';
            }
            
            .wf-o365-e16e:before {
                content: '\e16e';
            }
            
            .wf-o365-e16f:before {
                content: '\e16f';
            }
            
            .wf-o365-e171:before {
                content: '\e171';
            }
            
            .wf-o365-e172:before {
                content: '\e172';
            }
            
            .wf-o365-e173:before {
                content: '\e173';
            }
            
            .wf-o365-e174:before {
                content: '\e174';
            }
            
            .wf-o365-e175:before {
                content: '\e175';
            }
            
            .wf-o365-e176:before {
                content: '\e176';
            }
            
            .wf-o365-e177:before {
                content: '\e177';
            }
            
            .wf-o365-e178:before {
                content: '\e178';
            }
            
            .wf-o365-e179:before {
                content: '\e179';
            }
            
            .wf-o365-e17a:before {
                content: '\e17a';
            }
            
            .wf-o365-e17b:before {
                content: '\e17b';
            }
            
            .wf-o365-e17c:before {
                content: '\e17c';
            }
            
            .wf-o365-e17d:before {
                content: '\e17d';
            }
            
            .wf-o365-e17e:before {
                content: '\e17e';
            }
            
            .wf-o365-e17f:before {
                content: '\e17f';
            }
            
            .wf-o365-e180:before {
                content: '\e180';
            }
            /* end Supplemental Classes for O365 Icons */
			
            .wf-o365-test:before {
                content: '\25fc';
            }
			
        </style>
<!--Do you think it's dead?-->
    <title>Parature Agent Portal - Portal</title>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>CHOOSE WHERE YOU WANT TO GO! <!--FUCKING DICKHEAD--></h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">
<!--Ya fucking gay-->
            <div class="col-md-3 col-sm-6 hero-feature">
			<a href="private.php">
                <div class="thumbnail">
                    <img src="img/Notepad.png" alt="">
                    <div class="caption">
                        <h3>Ticket Notes</h3>
                    </div>
                </div>
				</a>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <a href="CMAT.php">
				<div class="thumbnail">
                    <img src="img/crm.png" alt="">
                    <div class="caption">
                        <h3>CMAT Notes</h3>
                    </div>
                </div>
				</a>
            </div>
<div class='tile'>
						<span class='wf wf-family-o365 wf-o365-phone'></span>
					</div>
					<span class='wf wf-family-o365 wf-o365-sharepointlogo'></span>
            <div class="col-md-3 col-sm-6 hero-feature">
			<a href="#">
                <div class="thumbnail">
                    <img src="img/call-log.png" alt="">
                    <div class="caption">
                        <h3>Call Log</h3>
                    </div>
                </div>
				</a>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
			<a href="wiki">
                <div class="thumbnail">
                    <img src="img/wikicon.png" alt="">
                    <div class="caption">
                        <h3>Concierge Wiki</h3>
                    </div>
                </div>
				</a>
            </div>
        <!-- /.row -->

        <hr>

<?php
	include "includes/footer.php";
?>
