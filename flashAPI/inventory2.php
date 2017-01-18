<?php
$action = $_POST["action"];
$ID = $_COOKIE["ID"];
$con=mysqli_connect('jogo.casadapagina.eu','pvieira_admin','ordepsousadark<3','pvieira_darkorbit');
$result = mysqli_query($con,"SELECT * FROM players_equipment WHERE playerID=$ID");
$result2 = mysqli_query($con,"SELECT * FROM players WHERE playerID=$ID");
$row = mysqli_fetch_array($result);
$row2 = mysqli_fetch_array($result2);
$factionId = $row2['factionId'];
if ($factionId == 1)
{
$faction = 'mmo';
}
else if ($factionId == 2)
{
$faction = 'eic';
}
else if ($factionId == 3)
{
$faction = 'vru';
}
$uri= $row2['uri'];
$uridium = number_format($uri, 0, ".", ".");
$creds = $row2['credits'];
$credits = number_format($creds, 0, ".", ".");
$shipId = $row2['shipId'];
$lf1_1 = $row['lf1_1'];
$lf1_2 = $row['lf1_2'];
$lf1_3 = $row['lf1_3'];
$lf1_4 = $row['lf1_4'];
$lf1_5 = $row['lf1_5'];
$lf1_6 = $row['lf1_6'];
$lf1_7 = $row['lf1_7'];
$lf1_8 = $row['lf1_8'];
$lf1_9 = $row['lf1_9'];
$lf1_10 = $row['lf1_10'];
$lf1_11 = $row['lf1_11'];
$lf1_12 = $row['lf1_12'];
$lf1_13 = $row['lf1_13'];
$lf1_14 = $row['lf1_14'];
$lf1_15 = $row['lf1_15'];
$lf1_16 = $row['lf1_16'];
$mp1_1 = $row['mp1_1'];
$mp1_2 = $row['mp1_2'];
$mp1_3 = $row['mp1_3'];
$mp1_4 = $row['mp1_4'];
$mp1_5 = $row['mp1_5'];
$mp1_6 = $row['mp1_6'];
$mp1_7 = $row['mp1_7'];
$mp1_8 = $row['mp1_8'];
$mp1_9 = $row['mp1_9'];
$mp1_10 = $row['mp1_10'];
$mp1_11 = $row['mp1_11'];
$mp1_12 = $row['mp1_12'];
$mp1_13 = $row['mp1_13'];
$mp1_14 = $row['mp1_14'];
$mp1_15 = $row['mp1_15'];
$mp1_16 = $row['mp1_16'];
$lf2_1 = $row['lf2_1'];
$lf2_2 = $row['lf2_2'];
$lf2_3 = $row['lf2_3'];
$lf2_4 = $row['lf2_4'];
$lf2_5 = $row['lf2_5'];
$lf2_6 = $row['lf2_6'];
$lf2_7 = $row['lf2_7'];
$lf2_8 = $row['lf2_8'];
$lf2_9 = $row['lf2_9'];
$lf2_10 = $row['lf2_10'];
$lf2_11 = $row['lf2_11'];
$lf2_12 = $row['lf2_12'];
$lf2_13 = $row['lf2_13'];
$lf2_14 = $row['lf2_14'];
$lf2_15 = $row['lf2_15'];
$lf2_16 = $row['lf2_16'];
$lf3_1 = $row['lf3_1'];
$lf3_2 = $row['lf3_2'];
$lf3_3 = $row['lf3_3'];
$lf3_4 = $row['lf3_4'];
$lf3_5 = $row['lf3_5'];
$lf3_6 = $row['lf3_6'];
$lf3_7 = $row['lf3_7'];
$lf3_8 = $row['lf3_8'];
$lf3_9 = $row['lf3_9'];
$lf3_10 = $row['lf3_10'];
$lf3_11 = $row['lf3_11'];
$lf3_12 = $row['lf3_12'];
$lf3_13 = $row['lf3_13'];
$lf3_14 = $row['lf3_14'];
$lf3_15 = $row['lf3_15'];
$lf3_16 = $row['lf3_16'];
$lf4_1 = $row['lf4_1'];
$lf4_2 = $row['lf4_2'];
$lf4_3 = $row['lf4_3'];
$lf4_4 = $row['lf4_4'];
$lf4_5 = $row['lf4_5'];
$lf4_6 = $row['lf4_6'];
$lf4_7 = $row['lf4_7'];
$lf4_8 = $row['lf4_8'];
$lf4_9 = $row['lf4_9'];
$lf4_10 = $row['lf4_10'];
$lf4_11 = $row['lf4_11'];
$lf4_12 = $row['lf4_12'];
$lf4_13 = $row['lf4_13'];
$lf4_14 = $row['lf4_14'];
$lf4_15 = $row['lf4_15'];
$lf4_16 = $row['lf4_16'];
$hst1_1 = $row['hst1_1'];
$hst1_2 = $row['hst1_2'];
$hst1_3 = $row['hst1_3'];
$hst1_4 = $row['hst1_4'];
$hst1_5 = $row['hst1_5'];
$hst1_6 = $row['hst1_6'];
$hst1_7 = $row['hst1_7'];
$hst1_8 = $row['hst1_8'];
$hst1_9 = $row['hst1_9'];
$hst1_10 = $row['hst1_10'];
$hst1_11 = $row['hst1_11'];
$hst1_12 = $row['hst1_12'];
$hst1_13 = $row['hst1_13'];
$hst1_14 = $row['hst1_14'];
$hst1_15 = $row['hst1_15'];
$hst1_16 = $row['hst1_16'];
$hst2_1 = $row['hst2_1'];
$hst2_2 = $row['hst2_2'];
$hst2_3 = $row['hst2_3'];
$hst2_4 = $row['hst2_4'];
$hst2_5 = $row['hst2_5'];
$hst2_6 = $row['hst2_6'];
$hst2_7 = $row['hst2_7'];
$hst2_8 = $row['hst2_8'];
$hst2_9 = $row['hst2_9'];
$hst2_10 = $row['hst2_10'];
$hst2_11 = $row['hst2_11'];
$hst2_12 = $row['hst2_12'];
$hst2_13 = $row['hst2_13'];
$hst2_14 = $row['hst2_14'];
$hst2_15 = $row['hst2_15'];
$hst2_16 = $row['hst2_16'];
$g3n_1010 = $row['g3n_1010'];
$g3n_2010 = $row['g3n_2010'];
$g3n_3210 = $row['g3n_3210'];
$g3n_3310 = $row['g3n_3310'];
$g3n_6900 = $row['g3n_6900'];
$g3n_7900 = $row['g3n_7900'];
$sg3n_a01_1 = $row['sg3n_a01_1'];
$sg3n_a01_2 = $row['sg3n_a01_2'];
$sg3n_a01_3 = $row['sg3n_a01_3'];
$sg3n_a01_4 = $row['sg3n_a01_4'];
$sg3n_a01_5 = $row['sg3n_a01_5'];
$sg3n_a01_6 = $row['sg3n_a01_6'];
$sg3n_a01_7 = $row['sg3n_a01_7'];
$sg3n_a01_8 = $row['sg3n_a01_8'];
$sg3n_a01_9 = $row['sg3n_a01_9'];
$sg3n_a01_10 = $row['sg3n_a01_10'];
$sg3n_a01_11 = $row['sg3n_a01_11'];
$sg3n_a01_12 = $row['sg3n_a01_12'];
$sg3n_a01_13 = $row['sg3n_a01_13'];
$sg3n_a01_14 = $row['sg3n_a01_14'];
$sg3n_a01_15 = $row['sg3n_a01_15'];
$sg3n_a01_16 = $row['sg3n_a01_16'];
$sg3n_a02_1 = $row['sg3n_a02_1'];
$sg3n_a02_2 = $row['sg3n_a02_2'];
$sg3n_a02_3 = $row['sg3n_a02_3'];
$sg3n_a02_4 = $row['sg3n_a02_4'];
$sg3n_a02_5 = $row['sg3n_a02_5'];
$sg3n_a02_6 = $row['sg3n_a02_6'];
$sg3n_a02_7 = $row['sg3n_a02_7'];
$sg3n_a02_8 = $row['sg3n_a02_8'];
$sg3n_a02_9 = $row['sg3n_a02_9'];
$sg3n_a02_10 = $row['sg3n_a02_10'];
$sg3n_a02_11 = $row['sg3n_a02_11'];
$sg3n_a02_12 = $row['sg3n_a02_12'];
$sg3n_a02_13 = $row['sg3n_a02_13'];
$sg3n_a02_14 = $row['sg3n_a02_14'];
$sg3n_a02_15 = $row['sg3n_a02_15'];
$sg3n_a02_16 = $row['sg3n_a02_16'];
$sg3n_a03_1 = $row['sg3n_a03_1'];
$sg3n_a03_2 = $row['sg3n_a03_2'];
$sg3n_a03_3 = $row['sg3n_a03_3'];
$sg3n_a03_4 = $row['sg3n_a03_4'];
$sg3n_a03_5 = $row['sg3n_a03_5'];
$sg3n_a03_6 = $row['sg3n_a03_6'];
$sg3n_a03_7 = $row['sg3n_a03_7'];
$sg3n_a03_8 = $row['sg3n_a03_8'];
$sg3n_a03_9 = $row['sg3n_a03_9'];
$sg3n_a03_10 = $row['sg3n_a03_10'];
$sg3n_a03_11 = $row['sg3n_a03_11'];
$sg3n_a03_12 = $row['sg3n_a03_12'];
$sg3n_a03_13 = $row['sg3n_a03_13'];
$sg3n_a03_14 = $row['sg3n_a03_14'];
$sg3n_a03_15 = $row['sg3n_a03_15'];
$sg3n_a03_16 = $row['sg3n_a03_16'];
$sg3n_b01_1 = $row['sg3n_b01_1'];
$sg3n_b01_2 = $row['sg3n_b01_2'];
$sg3n_b01_3 = $row['sg3n_b01_3'];
$sg3n_b01_4 = $row['sg3n_b01_4'];
$sg3n_b01_5 = $row['sg3n_b01_5'];
$sg3n_b01_6 = $row['sg3n_b01_6'];
$sg3n_b01_7 = $row['sg3n_b01_7'];
$sg3n_b01_8 = $row['sg3n_b01_8'];
$sg3n_b01_9 = $row['sg3n_b01_9'];
$sg3n_b01_10 = $row['sg3n_b01_10'];
$sg3n_b01_11 = $row['sg3n_b01_11'];
$sg3n_b01_12 = $row['sg3n_b01_12'];
$sg3n_b01_13 = $row['sg3n_b01_13'];
$sg3n_b01_14 = $row['sg3n_b01_14'];
$sg3n_b01_15 = $row['sg3n_b01_15'];
$sg3n_b01_16 = $row['sg3n_b01_16'];
$sg3n_b02_1 = $row['sg3n_b02_1'];
$sg3n_b02_2 = $row['sg3n_b02_2'];
$sg3n_b02_3 = $row['sg3n_b02_3'];
$sg3n_b02_4 = $row['sg3n_b02_4'];
$sg3n_b02_5 = $row['sg3n_b02_5'];
$sg3n_b02_6 = $row['sg3n_b02_6'];
$sg3n_b02_7 = $row['sg3n_b02_7'];
$sg3n_b02_8 = $row['sg3n_b02_8'];
$sg3n_b02_9 = $row['sg3n_b02_9'];
$sg3n_b02_10 = $row['sg3n_b02_10'];
$sg3n_b02_11 = $row['sg3n_b02_11'];
$sg3n_b02_12 = $row['sg3n_b02_12'];
$sg3n_b02_13 = $row['sg3n_b02_13'];
$sg3n_b02_14 = $row['sg3n_b02_14'];
$sg3n_b02_15 = $row['sg3n_b02_15'];
$sg3n_b02_16 = $row['sg3n_b02_16'];
$LGF = $row['LGF'];
$BK100 = $row['BK100'];
$AJP01 = $row['AJP01'];
$REPS = $row['REPS'];
$REP1 = $row['REP1'];
$REP2 = $row['REP2'];
$REP3 = $row['REP3'];
$REP4 = $row['REP4'];
$ROKT01 = $row['ROKT01'];
$MINT01 = $row['MINT01'];
$MINT02 = $row['MINT02'];
$NCRRB = $row['NCRRB'];
$CL04K_MOD = $row['CL04KMOD'];
$AROLX = $row['AROLX'];
$CL04K = $row['CL04K'];
$CL04KXL = $row['CL04KXLCPU'];
$NCAWB = $row['NCAWB'];
$NCAWR = $row['NCAWR'];
$NCAWL = $row['NCAWL'];
$GEMXL = $row['GEMXL'];
$GEMAC = $row['GEMAC'];
$GEMACC = $row['GEMACC'];
$GEMACCC = $row['GEMAC+'];
$S01 = $row['S01CPU'];
$S02 = $row['S02CPU'];
$S03 = $row['S03CPU'];
$S04 = $row['S04CPU'];
$DRO01 = $row['DRO01'];
$DRO02 = $row['DRO02'];
$RD = $row['RDCPU'];
$JP1 = $row['JP1CPU'];
$JP2 = $row['JP2CPU'];
$FBX = $row['FBX'];
$AM = $row['AMCPU'];
$RB = $row['RBCPU'];
$SMB01 = $row['SMB01'];
$ISH01 = $row['ISH01'];
$NCAGB = $row['NCAGB'];
$AIM01 = $row['AIM01'];
$AIM02 = $row['AIM02'];
$RLLB1 = $row['RLLB1'];
$HM7 = $row['HM7'];
$speed1 = $row2['speed1'];
$dmg1 = $row2['dmg1'];
$shield1 = $row2['maxShield1'];
$speed2 = $row2['speed2'];
$dmg2 = $row2['dmg2'];
$shield2 = $row2['maxShield2'];

if ($row['config1_lasers_slot1'] == 0)
{
$config1_lasers = array();
}
else if ($row['config1_lasers_slot2'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1']);
}
else if ($row['config1_lasers_slot3'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2']);
}
else if ($row['config1_lasers_slot4'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3']);
}
else if ($row['config1_lasers_slot5'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4']);
}
else if ($row['config1_lasers_slot6'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5']);
}
else if ($row['config1_lasers_slot7'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5'],$row['config1_lasers_slot6']);
}
else if ($row['config1_lasers_slot8'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5'],$row['config1_lasers_slot6'],$row['config1_lasers_slot7']);
}
else if ($row['config1_lasers_slot9'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5'],$row['config1_lasers_slot6'],$row['config1_lasers_slot7'],$row['config1_lasers_slot8']);
}
else if ($row['config1_lasers_slot10'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5'],$row['config1_lasers_slot6'],$row['config1_lasers_slot7'],$row['config1_lasers_slot8'],$row['config1_lasers_slot9']);
}
else if ($row['config1_lasers_slot11'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5'],$row['config1_lasers_slot6'],$row['config1_lasers_slot7'],$row['config1_lasers_slot8'],$row['config1_lasers_slot9'],$row['config1_lasers_slot10']);
}
else if ($row['config1_lasers_slot12'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5'],$row['config1_lasers_slot6'],$row['config1_lasers_slot7'],$row['config1_lasers_slot8'],$row['config1_lasers_slot9'],$row['config1_lasers_slot10'],$row['config1_lasers_slot11']);
}
else if ($row['config1_lasers_slot13'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5'],$row['config1_lasers_slot6'],$row['config1_lasers_slot7'],$row['config1_lasers_slot8'],$row['config1_lasers_slot9'],$row['config1_lasers_slot10'],$row['config1_lasers_slot11'],$row['config1_lasers_slot12']);
}
else if ($row['config1_lasers_slot14'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5'],$row['config1_lasers_slot6'],$row['config1_lasers_slot7'],$row['config1_lasers_slot8'],$row['config1_lasers_slot9'],$row['config1_lasers_slot10'],$row['config1_lasers_slot11'],$row['config1_lasers_slot12'],$row['config1_lasers_slot13']);
}
else if ($row['config1_lasers_slot15'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5'],$row['config1_lasers_slot6'],$row['config1_lasers_slot7'],$row['config1_lasers_slot8'],$row['config1_lasers_slot9'],$row['config1_lasers_slot10'],$row['config1_lasers_slot11'],$row['config1_lasers_slot12'],$row['config1_lasers_slot13'],$row['config1_lasers_slot14']);
}
else if ($row['config1_lasers_slot16'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5'],$row['config1_lasers_slot6'],$row['config1_lasers_slot7'],$row['config1_lasers_slot8'],$row['config1_lasers_slot9'],$row['config1_lasers_slot10'],$row['config1_lasers_slot11'],$row['config1_lasers_slot12'],$row['config1_lasers_slot13'],$row['config1_lasers_slot14'],$row['config1_lasers_slot15']);
}
else if ($row['config1_lasers_slot17'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5'],$row['config1_lasers_slot6'],$row['config1_lasers_slot7'],$row['config1_lasers_slot8'],$row['config1_lasers_slot9'],$row['config1_lasers_slot10'],$row['config1_lasers_slot11'],$row['config1_lasers_slot12'],$row['config1_lasers_slot13'],$row['config1_lasers_slot14'],$row['config1_lasers_slot15'],$row['config1_lasers_slot16']);
}
else if ($row['config1_lasers_slot18'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5'],$row['config1_lasers_slot6'],$row['config1_lasers_slot7'],$row['config1_lasers_slot8'],$row['config1_lasers_slot9'],$row['config1_lasers_slot10'],$row['config1_lasers_slot11'],$row['config1_lasers_slot12'],$row['config1_lasers_slot13'],$row['config1_lasers_slot14'],$row['config1_lasers_slot15'],$row['config1_lasers_slot16'],$row['config1_lasers_slot17']);
}
else if ($row['config1_lasers_slot19'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5'],$row['config1_lasers_slot6'],$row['config1_lasers_slot7'],$row['config1_lasers_slot8'],$row['config1_lasers_slot9'],$row['config1_lasers_slot10'],$row['config1_lasers_slot11'],$row['config1_lasers_slot12'],$row['config1_lasers_slot13'],$row['config1_lasers_slot14'],$row['config1_lasers_slot15'],$row['config1_lasers_slot16'],$row['config1_lasers_slot17'],$row['config1_lasers_slot18']);
}
else if ($row['config1_lasers_slot20'] == 0)
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5'],$row['config1_lasers_slot6'],$row['config1_lasers_slot7'],$row['config1_lasers_slot8'],$row['config1_lasers_slot9'],$row['config1_lasers_slot10'],$row['config1_lasers_slot11'],$row['config1_lasers_slot12'],$row['config1_lasers_slot13'],$row['config1_lasers_slot14'],$row['config1_lasers_slot15'],$row['config1_lasers_slot16'],$row['config1_lasers_slot17'],$row['config1_lasers_slot18'],$row['config1_lasers_slot19']);
}
else
{
$config1_lasers = array($row['config1_lasers_slot1'],$row['config1_lasers_slot2'],$row['config1_lasers_slot3'],$row['config1_lasers_slot4'],$row['config1_lasers_slot5'],$row['config1_lasers_slot6'],$row['config1_lasers_slot7'],$row['config1_lasers_slot8'],$row['config1_lasers_slot9'],$row['config1_lasers_slot10'],$row['config1_lasers_slot11'],$row['config1_lasers_slot12'],$row['config1_lasers_slot13'],$row['config1_lasers_slot14'],$row['config1_lasers_slot15'],$row['config1_lasers_slot16'],$row['config1_lasers_slot17'],$row['config1_lasers_slot18'],$row['config1_lasers_slot19'],$row['config1_lasers_slot20']);
}
if ($row['config2_lasers_slot1'] == 0)
{
$config2_lasers = array();
}
else if ($row['config2_lasers_slot2'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1']);
}
else if ($row['config2_lasers_slot3'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2']);
}
else if ($row['config2_lasers_slot4'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3']);
}
else if ($row['config2_lasers_slot5'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4']);
}
else if ($row['config2_lasers_slot6'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5']);
}
else if ($row['config2_lasers_slot7'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5'],$row['config2_lasers_slot6']);
}
else if ($row['config2_lasers_slot8'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5'],$row['config2_lasers_slot6'],$row['config2_lasers_slot7']);
}
else if ($row['config2_lasers_slot9'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5'],$row['config2_lasers_slot6'],$row['config2_lasers_slot7'],$row['config2_lasers_slot8']);
}
else if ($row['config2_lasers_slot10'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5'],$row['config2_lasers_slot6'],$row['config2_lasers_slot7'],$row['config2_lasers_slot8'],$row['config2_lasers_slot9']);
}
else if ($row['config2_lasers_slot11'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5'],$row['config2_lasers_slot6'],$row['config2_lasers_slot7'],$row['config2_lasers_slot8'],$row['config2_lasers_slot9'],$row['config2_lasers_slot10']);
}
else if ($row['config2_lasers_slot12'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5'],$row['config2_lasers_slot6'],$row['config2_lasers_slot7'],$row['config2_lasers_slot8'],$row['config2_lasers_slot9'],$row['config2_lasers_slot10'],$row['config2_lasers_slot11']);
}
else if ($row['config2_lasers_slot13'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5'],$row['config2_lasers_slot6'],$row['config2_lasers_slot7'],$row['config2_lasers_slot8'],$row['config2_lasers_slot9'],$row['config2_lasers_slot10'],$row['config2_lasers_slot11'],$row['config2_lasers_slot12']);
}
else if ($row['config2_lasers_slot14'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5'],$row['config2_lasers_slot6'],$row['config2_lasers_slot7'],$row['config2_lasers_slot8'],$row['config2_lasers_slot9'],$row['config2_lasers_slot10'],$row['config2_lasers_slot11'],$row['config2_lasers_slot12'],$row['config2_lasers_slot13']);
}
else if ($row['config2_lasers_slot15'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5'],$row['config2_lasers_slot6'],$row['config2_lasers_slot7'],$row['config2_lasers_slot8'],$row['config2_lasers_slot9'],$row['config2_lasers_slot10'],$row['config2_lasers_slot11'],$row['config2_lasers_slot12'],$row['config2_lasers_slot13'],$row['config2_lasers_slot14']);
}
else if ($row['config2_lasers_slot16'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5'],$row['config2_lasers_slot6'],$row['config2_lasers_slot7'],$row['config2_lasers_slot8'],$row['config2_lasers_slot9'],$row['config2_lasers_slot10'],$row['config2_lasers_slot11'],$row['config2_lasers_slot12'],$row['config2_lasers_slot13'],$row['config2_lasers_slot14'],$row['config2_lasers_slot15']);
}
else if ($row['config2_lasers_slot17'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5'],$row['config2_lasers_slot6'],$row['config2_lasers_slot7'],$row['config2_lasers_slot8'],$row['config2_lasers_slot9'],$row['config2_lasers_slot10'],$row['config2_lasers_slot11'],$row['config2_lasers_slot12'],$row['config2_lasers_slot13'],$row['config2_lasers_slot14'],$row['config2_lasers_slot15'],$row['config2_lasers_slot16']);
}
else if ($row['config2_lasers_slot18'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5'],$row['config2_lasers_slot6'],$row['config2_lasers_slot7'],$row['config2_lasers_slot8'],$row['config2_lasers_slot9'],$row['config2_lasers_slot10'],$row['config2_lasers_slot11'],$row['config2_lasers_slot12'],$row['config2_lasers_slot13'],$row['config2_lasers_slot14'],$row['config2_lasers_slot15'],$row['config2_lasers_slot16'],$row['config2_lasers_slot17']);
}
else if ($row['config2_lasers_slot19'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5'],$row['config2_lasers_slot6'],$row['config2_lasers_slot7'],$row['config2_lasers_slot8'],$row['config2_lasers_slot9'],$row['config2_lasers_slot10'],$row['config2_lasers_slot11'],$row['config2_lasers_slot12'],$row['config2_lasers_slot13'],$row['config2_lasers_slot14'],$row['config2_lasers_slot15'],$row['config2_lasers_slot16'],$row['config2_lasers_slot17'],$row['config2_lasers_slot18']);
}
else if ($row['config2_lasers_slot20'] == 0)
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5'],$row['config2_lasers_slot6'],$row['config2_lasers_slot7'],$row['config2_lasers_slot8'],$row['config2_lasers_slot9'],$row['config2_lasers_slot10'],$row['config2_lasers_slot11'],$row['config2_lasers_slot12'],$row['config2_lasers_slot13'],$row['config2_lasers_slot14'],$row['config2_lasers_slot15'],$row['config2_lasers_slot16'],$row['config2_lasers_slot17'],$row['config2_lasers_slot18'],$row['config2_lasers_slot19']);
}
else
{
$config2_lasers = array($row['config2_lasers_slot1'],$row['config2_lasers_slot2'],$row['config2_lasers_slot3'],$row['config2_lasers_slot4'],$row['config2_lasers_slot5'],$row['config2_lasers_slot6'],$row['config2_lasers_slot7'],$row['config2_lasers_slot8'],$row['config2_lasers_slot9'],$row['config2_lasers_slot10'],$row['config2_lasers_slot11'],$row['config2_lasers_slot12'],$row['config2_lasers_slot13'],$row['config2_lasers_slot14'],$row['config2_lasers_slot15'],$row['config2_lasers_slot16'],$row['config2_lasers_slot17'],$row['config2_lasers_slot18'],$row['config2_lasers_slot19'],$row['config2_lasers_slot20']);
}
if ($row['config1_generators_slot1'] == 0)
{
$config1_generators = array();
}
else if ($row['config1_generators_slot2'] == 0)
{
$config1_generators = array($row['config1_generators_slot1']);
}
else if ($row['config1_generators_slot3'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2']);
}
else if ($row['config1_generators_slot4'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3']);
}
else if ($row['config1_generators_slot5'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4']);
}
else if ($row['config1_generators_slot6'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5']);
}
else if ($row['config1_generators_slot7'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5'],$row['config1_generators_slot6']);
}
else if ($row['config1_generators_slot8'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5'],$row['config1_generators_slot6'],$row['config1_generators_slot7']);
}
else if ($row['config1_generators_slot9'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5'],$row['config1_generators_slot6'],$row['config1_generators_slot7'],$row['config1_generators_slot8']);
}
else if ($row['config1_generators_slot10'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5'],$row['config1_generators_slot6'],$row['config1_generators_slot7'],$row['config1_generators_slot8'],$row['config1_generators_slot9']);
}
else if ($row['config1_generators_slot11'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5'],$row['config1_generators_slot6'],$row['config1_generators_slot7'],$row['config1_generators_slot8'],$row['config1_generators_slot9'],$row['config1_generators_slot10']);
}
else if ($row['config1_generators_slot12'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5'],$row['config1_generators_slot6'],$row['config1_generators_slot7'],$row['config1_generators_slot8'],$row['config1_generators_slot9'],$row['config1_generators_slot10'],$row['config1_generators_slot11']);
}
else if ($row['config1_generators_slot13'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5'],$row['config1_generators_slot6'],$row['config1_generators_slot7'],$row['config1_generators_slot8'],$row['config1_generators_slot9'],$row['config1_generators_slot10'],$row['config1_generators_slot11'],$row['config1_generators_slot12']);
}
else if ($row['config1_generators_slot14'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5'],$row['config1_generators_slot6'],$row['config1_generators_slot7'],$row['config1_generators_slot8'],$row['config1_generators_slot9'],$row['config1_generators_slot10'],$row['config1_generators_slot11'],$row['config1_generators_slot12'],$row['config1_generators_slot13']);
}
else if ($row['config1_generators_slot15'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5'],$row['config1_generators_slot6'],$row['config1_generators_slot7'],$row['config1_generators_slot8'],$row['config1_generators_slot9'],$row['config1_generators_slot10'],$row['config1_generators_slot11'],$row['config1_generators_slot12'],$row['config1_generators_slot13'],$row['config1_generators_slot14']);
}
else if ($row['config1_generators_slot16'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5'],$row['config1_generators_slot6'],$row['config1_generators_slot7'],$row['config1_generators_slot8'],$row['config1_generators_slot9'],$row['config1_generators_slot10'],$row['config1_generators_slot11'],$row['config1_generators_slot12'],$row['config1_generators_slot13'],$row['config1_generators_slot14'],$row['config1_generators_slot15']);
}
else if ($row['config1_generators_slot17'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5'],$row['config1_generators_slot6'],$row['config1_generators_slot7'],$row['config1_generators_slot8'],$row['config1_generators_slot9'],$row['config1_generators_slot10'],$row['config1_generators_slot11'],$row['config1_generators_slot12'],$row['config1_generators_slot13'],$row['config1_generators_slot14'],$row['config1_generators_slot15'],$row['config1_generators_slot16']);
}
else if ($row['config1_generators_slot18'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5'],$row['config1_generators_slot6'],$row['config1_generators_slot7'],$row['config1_generators_slot8'],$row['config1_generators_slot9'],$row['config1_generators_slot10'],$row['config1_generators_slot11'],$row['config1_generators_slot12'],$row['config1_generators_slot13'],$row['config1_generators_slot14'],$row['config1_generators_slot15'],$row['config1_generators_slot16'],$row['config1_generators_slot17']);
}
else if ($row['config1_generators_slot19'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5'],$row['config1_generators_slot6'],$row['config1_generators_slot7'],$row['config1_generators_slot8'],$row['config1_generators_slot9'],$row['config1_generators_slot10'],$row['config1_generators_slot11'],$row['config1_generators_slot12'],$row['config1_generators_slot13'],$row['config1_generators_slot14'],$row['config1_generators_slot15'],$row['config1_generators_slot16'],$row['config1_generators_slot17'],$row['config1_generators_slot18']);
}
else if ($row['config1_generators_slot20'] == 0)
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5'],$row['config1_generators_slot6'],$row['config1_generators_slot7'],$row['config1_generators_slot8'],$row['config1_generators_slot9'],$row['config1_generators_slot10'],$row['config1_generators_slot11'],$row['config1_generators_slot12'],$row['config1_generators_slot13'],$row['config1_generators_slot14'],$row['config1_generators_slot15'],$row['config1_generators_slot16'],$row['config1_generators_slot17'],$row['config1_generators_slot18'],$row['config1_generators_slot19']);
}
else
{
$config1_generators = array($row['config1_generators_slot1'],$row['config1_generators_slot2'],$row['config1_generators_slot3'],$row['config1_generators_slot4'],$row['config1_generators_slot5'],$row['config1_generators_slot6'],$row['config1_generators_slot7'],$row['config1_generators_slot8'],$row['config1_generators_slot9'],$row['config1_generators_slot10'],$row['config1_generators_slot11'],$row['config1_generators_slot12'],$row['config1_generators_slot13'],$row['config1_generators_slot14'],$row['config1_generators_slot15'],$row['config1_generators_slot16'],$row['config1_generators_slot17'],$row['config1_generators_slot18'],$row['config1_generators_slot19'],$row['config1_generators_slot20']);
}
if ($row['config2_generators_slot1'] == 0)
{
$config2_generators = array();
}
else if ($row['config2_generators_slot2'] == 0)
{
$config2_generators = array($row['config2_generators_slot1']);
}
else if ($row['config2_generators_slot3'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2']);
}
else if ($row['config2_generators_slot4'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3']);
}
else if ($row['config2_generators_slot5'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4']);
}
else if ($row['config2_generators_slot6'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5']);
}
else if ($row['config2_generators_slot7'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5'],$row['config2_generators_slot6']);
}
else if ($row['config2_generators_slot8'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5'],$row['config2_generators_slot6'],$row['config2_generators_slot7']);
}
else if ($row['config2_generators_slot9'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5'],$row['config2_generators_slot6'],$row['config2_generators_slot7'],$row['config2_generators_slot8']);
}
else if ($row['config2_generators_slot10'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5'],$row['config2_generators_slot6'],$row['config2_generators_slot7'],$row['config2_generators_slot8'],$row['config2_generators_slot9']);
}
else if ($row['config2_generators_slot11'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5'],$row['config2_generators_slot6'],$row['config2_generators_slot7'],$row['config2_generators_slot8'],$row['config2_generators_slot9'],$row['config2_generators_slot10']);
}
else if ($row['config2_generators_slot12'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5'],$row['config2_generators_slot6'],$row['config2_generators_slot7'],$row['config2_generators_slot8'],$row['config2_generators_slot9'],$row['config2_generators_slot10'],$row['config2_generators_slot11']);
}
else if ($row['config2_generators_slot13'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5'],$row['config2_generators_slot6'],$row['config2_generators_slot7'],$row['config2_generators_slot8'],$row['config2_generators_slot9'],$row['config2_generators_slot10'],$row['config2_generators_slot11'],$row['config2_generators_slot12']);
}
else if ($row['config2_generators_slot14'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5'],$row['config2_generators_slot6'],$row['config2_generators_slot7'],$row['config2_generators_slot8'],$row['config2_generators_slot9'],$row['config2_generators_slot10'],$row['config2_generators_slot11'],$row['config2_generators_slot12'],$row['config2_generators_slot13']);
}
else if ($row['config2_generators_slot15'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5'],$row['config2_generators_slot6'],$row['config2_generators_slot7'],$row['config2_generators_slot8'],$row['config2_generators_slot9'],$row['config2_generators_slot10'],$row['config2_generators_slot11'],$row['config2_generators_slot12'],$row['config2_generators_slot13'],$row['config2_generators_slot14']);
}
else if ($row['config2_generators_slot16'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5'],$row['config2_generators_slot6'],$row['config2_generators_slot7'],$row['config2_generators_slot8'],$row['config2_generators_slot9'],$row['config2_generators_slot10'],$row['config2_generators_slot11'],$row['config2_generators_slot12'],$row['config2_generators_slot13'],$row['config2_generators_slot14'],$row['config2_generators_slot15']);
}
else if ($row['config2_generators_slot17'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5'],$row['config2_generators_slot6'],$row['config2_generators_slot7'],$row['config2_generators_slot8'],$row['config2_generators_slot9'],$row['config2_generators_slot10'],$row['config2_generators_slot11'],$row['config2_generators_slot12'],$row['config2_generators_slot13'],$row['config2_generators_slot14'],$row['config2_generators_slot15'],$row['config2_generators_slot16']);
}
else if ($row['config2_generators_slot18'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5'],$row['config2_generators_slot6'],$row['config2_generators_slot7'],$row['config2_generators_slot8'],$row['config2_generators_slot9'],$row['config2_generators_slot10'],$row['config2_generators_slot11'],$row['config2_generators_slot12'],$row['config2_generators_slot13'],$row['config2_generators_slot14'],$row['config2_generators_slot15'],$row['config2_generators_slot16'],$row['config2_generators_slot17']);
}
else if ($row['config2_generators_slot19'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5'],$row['config2_generators_slot6'],$row['config2_generators_slot7'],$row['config2_generators_slot8'],$row['config2_generators_slot9'],$row['config2_generators_slot10'],$row['config2_generators_slot11'],$row['config2_generators_slot12'],$row['config2_generators_slot13'],$row['config2_generators_slot14'],$row['config2_generators_slot15'],$row['config2_generators_slot16'],$row['config2_generators_slot17'],$row['config2_generators_slot18']);
}
else if ($row['config2_generators_slot20'] == 0)
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5'],$row['config2_generators_slot6'],$row['config2_generators_slot7'],$row['config2_generators_slot8'],$row['config2_generators_slot9'],$row['config2_generators_slot10'],$row['config2_generators_slot11'],$row['config2_generators_slot12'],$row['config2_generators_slot13'],$row['config2_generators_slot14'],$row['config2_generators_slot15'],$row['config2_generators_slot16'],$row['config2_generators_slot17'],$row['config2_generators_slot18'],$row['config2_generators_slot19']);
}
else
{
$config2_generators = array($row['config2_generators_slot1'],$row['config2_generators_slot2'],$row['config2_generators_slot3'],$row['config2_generators_slot4'],$row['config2_generators_slot5'],$row['config2_generators_slot6'],$row['config2_generators_slot7'],$row['config2_generators_slot8'],$row['config2_generators_slot9'],$row['config2_generators_slot10'],$row['config2_generators_slot11'],$row['config2_generators_slot12'],$row['config2_generators_slot13'],$row['config2_generators_slot14'],$row['config2_generators_slot15'],$row['config2_generators_slot16'],$row['config2_generators_slot17'],$row['config2_generators_slot18'],$row['config2_generators_slot19'],$row['config2_generators_slot20']);
}
if ($row['config1_extras_slot1'] == 0)
{
$config1_extras = array();
}
else if ($row['config1_extras_slot2'] == 0)
{
$config1_extras = array($row['config1_extras_slot1']);
}
else if ($row['config1_extras_slot3'] == 0)
{
$config1_extras = array($row['config1_extras_slot1'],$row['config1_extras_slot2']);
}
else if ($row['config1_extras_slot4'] == 0)
{
$config1_extras = array($row['config1_extras_slot1'],$row['config1_extras_slot2'],$row['config1_extras_slot3']);
}
else if ($row['config1_extras_slot5'] == 0)
{
$config1_extras = array($row['config1_extras_slot1'],$row['config1_extras_slot2'],$row['config1_extras_slot3'],$row['config1_extras_slot4']);
}
else if ($row['config1_extras_slot6'] == 0)
{
$config1_extras = array($row['config1_extras_slot1'],$row['config1_extras_slot2'],$row['config1_extras_slot3'],$row['config1_extras_slot4'],$row['config1_extras_slot5']);
}
else if ($row['config1_extras_slot7'] == 0)
{
$config1_extras = array($row['config1_extras_slot1'],$row['config1_extras_slot2'],$row['config1_extras_slot3'],$row['config1_extras_slot4'],$row['config1_extras_slot5'],$row['config1_extras_slot6']);
}
else if ($row['config1_extras_slot8'] == 0)
{
$config1_extras = array($row['config1_extras_slot1'],$row['config1_extras_slot2'],$row['config1_extras_slot3'],$row['config1_extras_slot4'],$row['config1_extras_slot5'],$row['config1_extras_slot6'],$row['config1_extras_slot7']);
}
else if ($row['config1_extras_slot9'] == 0)
{
$config1_extras = array($row['config1_extras_slot1'],$row['config1_extras_slot2'],$row['config1_extras_slot3'],$row['config1_extras_slot4'],$row['config1_extras_slot5'],$row['config1_extras_slot6'],$row['config1_extras_slot7'],$row['config1_extras_slot8']);
}
else if ($row['config1_extras_slot10'] == 0)
{
$config1_extras = array($row['config1_extras_slot1'],$row['config1_extras_slot2'],$row['config1_extras_slot3'],$row['config1_extras_slot4'],$row['config1_extras_slot5'],$row['config1_extras_slot6'],$row['config1_extras_slot7'],$row['config1_extras_slot8'],$row['config1_extras_slot9']);
}
else if ($row['config1_extras_slot11'] == 0)
{
$config1_extras = array($row['config1_extras_slot1'],$row['config1_extras_slot2'],$row['config1_extras_slot3'],$row['config1_extras_slot4'],$row['config1_extras_slot5'],$row['config1_extras_slot6'],$row['config1_extras_slot7'],$row['config1_extras_slot8'],$row['config1_extras_slot9'],$row['config1_extras_slot10']);
}
else if ($row['config1_extras_slot12'] == 0)
{
$config1_extras = array($row['config1_extras_slot1'],$row['config1_extras_slot2'],$row['config1_extras_slot3'],$row['config1_extras_slot4'],$row['config1_extras_slot5'],$row['config1_extras_slot6'],$row['config1_extras_slot7'],$row['config1_extras_slot8'],$row['config1_extras_slot9'],$row['config1_extras_slot10'],$row['config1_extras_slot11']);
}
else if ($row['config1_extras_slot13'] == 0)
{
$config1_extras = array($row['config1_extras_slot1'],$row['config1_extras_slot2'],$row['config1_extras_slot3'],$row['config1_extras_slot4'],$row['config1_extras_slot5'],$row['config1_extras_slot6'],$row['config1_extras_slot7'],$row['config1_extras_slot8'],$row['config1_extras_slot9'],$row['config1_extras_slot10'],$row['config1_extras_slot11'],$row['config1_extras_slot12']);
}
else if ($row['config1_extras_slot14'] == 0)
{
$config1_extras = array($row['config1_extras_slot1'],$row['config1_extras_slot2'],$row['config1_extras_slot3'],$row['config1_extras_slot4'],$row['config1_extras_slot5'],$row['config1_extras_slot6'],$row['config1_extras_slot7'],$row['config1_extras_slot8'],$row['config1_extras_slot9'],$row['config1_extras_slot10'],$row['config1_extras_slot11'],$row['config1_extras_slot12'],$row['config1_extras_slot13']);
}
else if ($row['config1_extras_slot15'] == 0)
{
$config1_extras = array($row['config1_extras_slot1'],$row['config1_extras_slot2'],$row['config1_extras_slot3'],$row['config1_extras_slot4'],$row['config1_extras_slot5'],$row['config1_extras_slot6'],$row['config1_extras_slot7'],$row['config1_extras_slot8'],$row['config1_extras_slot9'],$row['config1_extras_slot10'],$row['config1_extras_slot11'],$row['config1_extras_slot12'],$row['config1_extras_slot13'],$row['config1_extras_slot14']);
}
else
{
$config1_extras = array($row['config1_extras_slot1'],$row['config1_extras_slot2'],$row['config1_extras_slot3'],$row['config1_extras_slot4'],$row['config1_extras_slot5'],$row['config1_extras_slot6'],$row['config1_extras_slot7'],$row['config1_extras_slot8'],$row['config1_extras_slot9'],$row['config1_extras_slot10'],$row['config1_extras_slot11'],$row['config1_extras_slot12'],$row['config1_extras_slot13'],$row['config1_extras_slot14'],$row['config1_extras_slot15']);
}
if ($row['config2_extras_slot1'] == 0)
{
$config2_extras = array();
}
else if ($row['config2_extras_slot2'] == 0)
{
$config2_extras = array($row['config2_extras_slot1']);
}
else if ($row['config2_extras_slot3'] == 0)
{
$config2_extras = array($row['config2_extras_slot1'],$row['config2_extras_slot2']);
}
else if ($row['config2_extras_slot4'] == 0)
{
$config2_extras = array($row['config2_extras_slot1'],$row['config2_extras_slot2'],$row['config2_extras_slot3']);
}
else if ($row['config2_extras_slot5'] == 0)
{
$config2_extras = array($row['config2_extras_slot1'],$row['config2_extras_slot2'],$row['config2_extras_slot3'],$row['config2_extras_slot4']);
}
else if ($row['config2_extras_slot6'] == 0)
{
$config2_extras = array($row['config2_extras_slot1'],$row['config2_extras_slot2'],$row['config2_extras_slot3'],$row['config2_extras_slot4'],$row['config2_extras_slot5']);
}
else if ($row['config2_extras_slot7'] == 0)
{
$config2_extras = array($row['config2_extras_slot1'],$row['config2_extras_slot2'],$row['config2_extras_slot3'],$row['config2_extras_slot4'],$row['config2_extras_slot5'],$row['config2_extras_slot6']);
}
else if ($row['config2_extras_slot8'] == 0)
{
$config2_extras = array($row['config2_extras_slot1'],$row['config2_extras_slot2'],$row['config2_extras_slot3'],$row['config2_extras_slot4'],$row['config2_extras_slot5'],$row['config2_extras_slot6'],$row['config2_extras_slot7']);
}
else if ($row['config2_extras_slot9'] == 0)
{
$config2_extras = array($row['config2_extras_slot1'],$row['config2_extras_slot2'],$row['config2_extras_slot3'],$row['config2_extras_slot4'],$row['config2_extras_slot5'],$row['config2_extras_slot6'],$row['config2_extras_slot7'],$row['config2_extras_slot8']);
}
else if ($row['config2_extras_slot10'] == 0)
{
$config2_extras = array($row['config2_extras_slot1'],$row['config2_extras_slot2'],$row['config2_extras_slot3'],$row['config2_extras_slot4'],$row['config2_extras_slot5'],$row['config2_extras_slot6'],$row['config2_extras_slot7'],$row['config2_extras_slot8'],$row['config2_extras_slot9']);
}
else if ($row['config2_extras_slot11'] == 0)
{
$config2_extras = array($row['config2_extras_slot1'],$row['config2_extras_slot2'],$row['config2_extras_slot3'],$row['config2_extras_slot4'],$row['config2_extras_slot5'],$row['config2_extras_slot6'],$row['config2_extras_slot7'],$row['config2_extras_slot8'],$row['config2_extras_slot9'],$row['config2_extras_slot10']);
}
else if ($row['config2_extras_slot12'] == 0)
{
$config2_extras = array($row['config2_extras_slot1'],$row['config2_extras_slot2'],$row['config2_extras_slot3'],$row['config2_extras_slot4'],$row['config2_extras_slot5'],$row['config2_extras_slot6'],$row['config2_extras_slot7'],$row['config2_extras_slot8'],$row['config2_extras_slot9'],$row['config2_extras_slot10'],$row['config2_extras_slot11']);
}
else if ($row['config2_extras_slot13'] == 0)
{
$config2_extras = array($row['config2_extras_slot1'],$row['config2_extras_slot2'],$row['config2_extras_slot3'],$row['config2_extras_slot4'],$row['config2_extras_slot5'],$row['config2_extras_slot6'],$row['config2_extras_slot7'],$row['config2_extras_slot8'],$row['config2_extras_slot9'],$row['config2_extras_slot10'],$row['config2_extras_slot11'],$row['config2_extras_slot12']);
}
else if ($row['config2_extras_slot14'] == 0)
{
$config2_extras = array($row['config2_extras_slot1'],$row['config2_extras_slot2'],$row['config2_extras_slot3'],$row['config2_extras_slot4'],$row['config2_extras_slot5'],$row['config2_extras_slot6'],$row['config2_extras_slot7'],$row['config2_extras_slot8'],$row['config2_extras_slot9'],$row['config2_extras_slot10'],$row['config2_extras_slot11'],$row['config2_extras_slot12'],$row['config2_extras_slot13']);
}
else if ($row['config2_extras_slot15'] == 0)
{
$config2_extras = array($row['config2_extras_slot1'],$row['config2_extras_slot2'],$row['config2_extras_slot3'],$row['config2_extras_slot4'],$row['config2_extras_slot5'],$row['config2_extras_slot6'],$row['config2_extras_slot7'],$row['config2_extras_slot8'],$row['config2_extras_slot9'],$row['config2_extras_slot10'],$row['config2_extras_slot11'],$row['config2_extras_slot12'],$row['config2_extras_slot13'],$row['config2_extras_slot14']);
}
else
{
$config2_extras = array($row['config2_extras_slot1'],$row['config2_extras_slot2'],$row['config2_extras_slot3'],$row['config2_extras_slot4'],$row['config2_extras_slot5'],$row['config2_extras_slot6'],$row['config2_extras_slot7'],$row['config2_extras_slot8'],$row['config2_extras_slot9'],$row['config2_extras_slot10'],$row['config2_extras_slot11'],$row['config2_extras_slot12'],$row['config2_extras_slot13'],$row['config2_extras_slot14'],$row['config2_extras_slot15']);
}
if ($action == "init")
{
$shipsg = array('ship_goliath_design_enforcer' . '','' . 'ship_goliath_design_veteran' . '','' . 'ship_goliath_design_exalted' . '','' . 'ship_goliath_design_bastion' . '','' . 'ship_goliath' . '','' . 'ship_goliath_design_venom' . '','' . 'ship_goliath_design_solace' . '','' . 'ship_goliath_design_diminisher' . '','' . 'ship_goliath_design_spectrum' . '','' . 'ship_goliath_design_sentinel');
if ($shipId == 1)
{
$lootShipId = 114;
$ship1 = array('ship_phoenix');
$ship2 = 'ship_phoenix'; 
}
else if ($shipId == 2)
{
$lootShipId = 115;
$ship1 = array('ship_yamato');
$ship2 = 'ship_yamato';
}
else if ($shipId == 3)
{
$lootShipId = 116;
$ship1 = array('ship_leonov');
$ship2 = 'ship_leonov';
}
else if ($shipId == 4)
{
$lootShipId = 117;
$ship1 = array('ship_defcom');
$ship2 = 'ship_defcom';
}
else if ($shipId == 5)
{
$lootShipId = 118;
$ship1 = array('ship_liberator');
$ship2 = 'ship_liberator';
}
else if ($shipId == 6)
{
$lootShipId = 119;
$ship1 = array('ship_piranha');
$ship2 = 'ship_piranha';
}
else if ($shipId == 7)
{
$lootShipId = 120;
$ship1 = array('ship_nostromo');
$ship2 = 'ship_nostromo';
}
else if ($shipId == 8)
{
$lootShipId = 121;
$ship1 = array('ship_vengeance'); // ship
$ship2 = 'ship_vengeance'; // design
}
else if ($shipId == 9)
{
$lootShipId = 122;
$ship1 = array('ship_bigboy'); // ship
$ship2 = 'ship_bigboy'; // design
}
else if ($shipId == 10)
{
$lootShipId = 0;
$ship1 = $shipsg;
$ship2 = 'ship_goliath'; // ship
}
else if ($shipId == 19)
{
$lootShipId = 0;
$ship1 = $shipsg;
$ship2 = 'ship_goliath_jade'; // design
}
else if ($shipId == 53)
{
$lootShipId = 0;
$ship1 = $shipsg;
$ship2 = 'ship_goliath_crimson'; // design
}
else if ($shipId == 52)
{
$lootShipId = 0;
$ship1 = $shipsg;
$ship2 = 'ship_goliath_amber'; // design
}
else if ($shipId == 59)
{
$lootShipId = 0;
$ship1 = $shipsg;
$ship2 = 'ship_goliath_design_bastion'; // ship
}
else if ($shipId == 64)
{
$lootShipId = 0;
$ship1 = $shipsg;
$ship2 = 'ship_goliath_design_diminisher'; // design
}
else if ($shipId == 63)
{
$lootShipId = 0;
$ship1 = $shipsg;
$ship2 = 'ship_goliath_design_solace'; // design
}
else if ($shipId == 65)
{
$lootShipId = 0;
$ship1 = $shipsg;
$ship2 = 'ship_goliath_design_spectrum'; // design
}
else if ($shipId == 66)
{
$lootShipId = 0;
$ship1 = $shipsg;
$ship2 = 'ship_goliath_design_sentinel'; // design
}
else if ($shipId == 67)
{
$lootShipId = 0;
$ship1 = $shipsg;
$ship2 = 'ship_goliath_design_venom'; // design
}
else if ($shipId == 61)
{
$lootShipId = 0;
$ship1 = $shipsg;
$ship2 = 'ship_goliath_design_veteran'; // ship
}
else if ($shipId == 62)
{
$lootShipId = 0;
$ship1 = $shipsg;
$ship2 = 'ship_goliath_design_exalted'; // ship
}
else if ($shipId == 56)
{
$lootShipId = 0;
$ship1 = $shipsg;
$ship2 = 'ship_goliath_design_enforcer'; // ship
}
else if ($shipId == 98)
{
$ship1 = array('ship_police'); // ship
$ship2 = 'ship_police'; // design
}
else if ($shipId == 128)
{
$lootShipId = 123;
$ship1 = array('ship_aegis');
$ship2 = 'ship_aegis'; // ship
}
else if ($shipId == 129)
{
$lootShipId = 124;
$ship1 = array('ship_citadel');
$ship2 = 'ship_citadel'; // ship
}
if($row['config1_drone1_slot1'] == 0 && $row['config1_drone1_slot2'] == 0)
{
$config1_drone1 = array();
}
else if($row['config1_drone1_slot1'] == 0 && $row['config1_drone1_slot2'] <> 0)
{
$config1_drone1 = array($row['config1_drone1_slot2']);
}
else if($row['config1_drone1_slot1'] <> 0 && $row['config1_drone1_slot2'] == 0)
{
$config1_drone1 = array($row['config1_drone1_slot1']);
}
else
{
$config1_drone1 = array($row['config1_drone1_slot1'],$row['config1_drone1_slot2']);
}
if($row['config1_drone2_slot1'] == 0 && $row['config1_drone2_slot2'] == 0)
{
$config1_drone2 = array();
}
else if($row['config1_drone2_slot1'] == 0 && $row['config1_drone2_slot2'] <> 0)
{
$config1_drone2 = array($row['config1_drone2_slot2']);
}
else if($row['config1_drone2_slot1'] <> 0 && $row['config1_drone2_slot2'] == 0)
{
$config1_drone2 = array($row['config1_drone2_slot1']);
}
else
{
$config1_drone2 = array($row['config1_drone2_slot1'],$row['config1_drone2_slot2']);
}
if($row['config1_drone3_slot1'] == 0 && $row['config1_drone3_slot2'] == 0)
{
$config1_drone3 = array();
}
else if($row['config1_drone3_slot1'] == 0 && $row['config1_drone3_slot2'] <> 0)
{
$config1_drone3 = array($row['config1_drone3_slot2']);
}
else if($row['config1_drone3_slot1'] <> 0 && $row['config1_drone3_slot2'] == 0)
{
$config1_drone3 = array($row['config1_drone3_slot1']);
}
else
{
$config1_drone3 = array($row['config1_drone3_slot1'],$row['config1_drone3_slot2']);
}
if($row['config1_drone4_slot1'] == 0 && $row['config1_drone4_slot2'] == 0)
{
$config1_drone4 = array();
}
else if($row['config1_drone4_slot1'] == 0 && $row['config1_drone4_slot2'] <> 0)
{
$config1_drone4 = array($row['config1_drone4_slot2']);
}
else if($row['config1_drone4_slot1'] <> 0 && $row['config1_drone4_slot2'] == 0)
{
$config1_drone4 = array($row['config1_drone4_slot1']);
}
else
{
$config1_drone4 = array($row['config1_drone4_slot1'],$row['config1_drone4_slot2']);
}
if($row['config1_drone5_slot1'] == 0 && $row['config1_drone5_slot2'] == 0)
{
$config1_drone5 = array();
}
else if($row['config1_drone5_slot1'] == 0 && $row['config1_drone5_slot2'] <> 0)
{
$config1_drone5 = array($row['config1_drone5_slot2']);
}
else if($row['config1_drone5_slot1'] <> 0 && $row['config1_drone5_slot2'] == 0)
{
$config1_drone5 = array($row['config1_drone5_slot1']);
}
else
{
$config1_drone5 = array($row['config1_drone5_slot1'],$row['config1_drone5_slot2']);
}
if($row['config1_drone6_slot1'] == 0 && $row['config1_drone6_slot2'] == 0)
{
$config1_drone6 = array();
}
else if($row['config1_drone6_slot1'] == 0 && $row['config1_drone6_slot2'] <> 0)
{
$config1_drone6 = array($row['config1_drone6_slot2']);
}
else if($row['config1_drone6_slot1'] <> 0 && $row['config1_drone6_slot2'] == 0)
{
$config1_drone6 = array($row['config1_drone6_slot1']);
}
else
{
$config1_drone6 = array($row['config1_drone6_slot1'],$row['config1_drone6_slot2']);
}
if($row['config1_drone7_slot1'] == 0 && $row['config1_drone7_slot2'] == 0)
{
$config1_drone7 = array();
}
else if($row['config1_drone7_slot1'] == 0 && $row['config1_drone7_slot2'] <> 0)
{
$config1_drone7 = array($row['config1_drone7_slot2']);
}
else if($row['config1_drone7_slot1'] <> 0 && $row['config1_drone7_slot2'] == 0)
{
$config1_drone7 = array($row['config1_drone7_slot1']);
}
else
{
$config1_drone7 = array($row['config1_drone7_slot1'],$row['config1_drone7_slot2']);
}
if($row['config1_drone8_slot1'] == 0 && $row['config1_drone8_slot2'] == 0)
{
$config1_drone8 = array();
}
else if($row['config1_drone8_slot1'] == 0 && $row['config1_drone8_slot2'] <> 0)
{
$config1_drone8 = array($row['config1_drone8_slot2']);
}
else if($row['config1_drone8_slot1'] <> 0 && $row['config1_drone8_slot2'] == 0)
{
$config1_drone8 = array($row['config1_drone8_slot1']);
}
else
{
$config1_drone8 = array($row['config1_drone8_slot1'],$row['config1_drone8_slot2']);
}
if($row['config1_drone9_slot1'] == 0 && $row['config1_drone9_slot2'] == 0)
{
$config1_drone9 = array();
}
else if($row['config1_drone9_slot1'] == 0 && $row['config1_drone9_slot2'] <> 0)
{
$config1_drone9 = array($row['config1_drone9_slot2']);
}
else if($row['config1_drone9_slot1'] <> 0 && $row['config1_drone9_slot2'] == 0)
{
$config1_drone9 = array($row['config1_drone9_slot1']);
}
else
{
$config1_drone9 = array($row['config1_drone9_slot1'],$row['config1_drone9_slot2']);
}
if($row['config1_drone10_slot1'] == 0 && $row['config1_drone10_slot2'] == 0)
{
$config1_drone10 = array();
}
else if($row['config1_drone10_slot1'] == 0 && $row['config1_drone10_slot2'] <> 0)
{
$config1_drone10 = array($row['config1_drone10_slot2']);
}
else if($row['config1_drone10_slot1'] <> 0 && $row['config1_drone10_slot2'] == 0)
{
$config1_drone10 = array($row['config1_drone10_slot1']);
}
else
{
$config1_drone10 = array($row['config1_drone10_slot1'],$row['config1_drone10_slot2']);
}
if($row['config2_drone1_slot1'] == 0 && $row['config2_drone1_slot2'] == 0)
{
$config2_drone1 = array();
}
else if($row['config2_drone1_slot1'] == 0 && $row['config2_drone1_slot2'] <> 0)
{
$config2_drone1 = array($row['config2_drone1_slot2']);
}
else if($row['config2_drone1_slot1'] <> 0 && $row['config2_drone1_slot2'] == 0)
{
$config2_drone1 = array($row['config2_drone1_slot1']);
}
else
{
$config2_drone1 = array($row['config2_drone1_slot1'],$row['config2_drone1_slot2']);
}
if($row['config2_drone2_slot1'] == 0 && $row['config2_drone2_slot2'] == 0)
{
$config2_drone2 = array();
}
else if($row['config2_drone2_slot1'] == 0 && $row['config2_drone2_slot2'] <> 0)
{
$config2_drone2 = array($row['config2_drone2_slot2']);
}
else if($row['config2_drone2_slot1'] <> 0 && $row['config2_drone2_slot2'] == 0)
{
$config2_drone2 = array($row['config2_drone2_slot1']);
}
else
{
$config2_drone2 = array($row['config2_drone2_slot1'],$row['config2_drone2_slot2']);
}
if($row['config2_drone3_slot1'] == 0 && $row['config2_drone3_slot2'] == 0)
{
$config2_drone3 = array();
}
else if($row['config2_drone3_slot1'] == 0 && $row['config2_drone3_slot2'] <> 0)
{
$config2_drone3 = array($row['config2_drone3_slot2']);
}
else if($row['config2_drone3_slot1'] <> 0 && $row['config2_drone3_slot2'] == 0)
{
$config2_drone3 = array($row['config2_drone3_slot1']);
}
else
{
$config2_drone3 = array($row['config2_drone3_slot1'],$row['config2_drone3_slot2']);
}
if($row['config2_drone4_slot1'] == 0 && $row['config2_drone4_slot2'] == 0)
{
$config2_drone4 = array();
}
else if($row['config2_drone4_slot1'] == 0 && $row['config2_drone4_slot2'] <> 0)
{
$config2_drone4 = array($row['config2_drone4_slot2']);
}
else if($row['config2_drone4_slot1'] <> 0 && $row['config2_drone4_slot2'] == 0)
{
$config2_drone4 = array($row['config2_drone4_slot1']);
}
else
{
$config2_drone4 = array($row['config2_drone4_slot1'],$row['config2_drone4_slot2']);
}
if($row['config2_drone5_slot1'] == 0 && $row['config2_drone5_slot2'] == 0)
{
$config2_drone5 = array();
}
else if($row['config2_drone5_slot1'] == 0 && $row['config2_drone5_slot2'] <> 0)
{
$config2_drone5 = array($row['config2_drone5_slot2']);
}
else if($row['config2_drone5_slot1'] <> 0 && $row['config2_drone5_slot2'] == 0)
{
$config2_drone5 = array($row['config2_drone5_slot1']);
}
else
{
$config2_drone5 = array($row['config2_drone5_slot1'],$row['config2_drone5_slot2']);
}
if($row['config2_drone6_slot1'] == 0 && $row['config2_drone6_slot2'] == 0)
{
$config2_drone6 = array();
}
else if($row['config2_drone6_slot1'] == 0 && $row['config2_drone6_slot2'] <> 0)
{
$config2_drone6 = array($row['config2_drone6_slot2']);
}
else if($row['config2_drone6_slot1'] <> 0 && $row['config2_drone6_slot2'] == 0)
{
$config2_drone6 = array($row['config2_drone6_slot1']);
}
else
{
$config2_drone6 = array($row['config2_drone6_slot1'],$row['config2_drone6_slot2']);
}
if($row['config2_drone7_slot1'] == 0 && $row['config2_drone7_slot2'] == 0)
{
$config2_drone7 = array();
}
else if($row['config2_drone7_slot1'] == 0 && $row['config2_drone7_slot2'] <> 0)
{
$config2_drone7 = array($row['config2_drone7_slot2']);
}
else if($row['config2_drone7_slot1'] <> 0 && $row['config2_drone7_slot2'] == 0)
{
$config2_drone7 = array($row['config2_drone7_slot1']);
}
else
{
$config2_drone7 = array($row['config2_drone7_slot1'],$row['config2_drone7_slot2']);
}
if($row['config2_drone8_slot1'] == 0 && $row['config2_drone8_slot2'] == 0)
{
$config2_drone8 = array();
}
else if($row['config2_drone8_slot1'] == 0 && $row['config2_drone8_slot2'] <> 0)
{
$config2_drone8 = array($row['config2_drone8_slot2']);
}
else if($row['config2_drone8_slot1'] <> 0 && $row['config2_drone8_slot2'] == 0)
{
$config2_drone8 = array($row['config2_drone8_slot1']);
}
else
{
$config2_drone8 = array($row['config2_drone8_slot1'],$row['config2_drone8_slot2']);
}
if($row['config2_drone9_slot1'] == 0 && $row['config2_drone9_slot2'] == 0)
{
$config2_drone9 = array();
}
else if($row['config2_drone9_slot1'] == 0 && $row['config2_drone9_slot2'] <> 0)
{
$config2_drone9 = array($row['config2_drone9_slot2']);
}
else if($row['config2_drone9_slot1'] <> 0 && $row['config2_drone9_slot2'] == 0)
{
$config2_drone9 = array($row['config2_drone9_slot1']);
}
else
{
$config2_drone9 = array($row['config2_drone9_slot1'],$row['config2_drone9_slot2']);
}
if($row['config2_drone10_slot1'] == 0 && $row['config2_drone10_slot2'] == 0)
{
$config2_drone10 = array();
}
else if($row['config2_drone10_slot1'] == 0 && $row['config2_drone10_slot2'] <> 0)
{
$config2_drone10 = array($row['config2_drone10_slot2']);
}
else if($row['config2_drone10_slot1'] <> 0 && $row['config2_drone10_slot2'] == 0)
{
$config2_drone10 = array($row['config2_drone10_slot1']);
}
else
{
$config2_drone10 = array($row['config2_drone10_slot1'],$row['config2_drone10_slot2']);
}
if($row['config1_heavy_guns_slot1'] == 0 && $row['config1_heavy_guns_slot2'] == 0)
{
$config1_heavy_guns = array();
}
else if($row['config1_heavy_guns_slot1'] == 0 && $row['config1_heavy_guns_slot2'] <> 0)
{
$config1_heavy_guns = array($row['config1_heavy_guns_slot2']);
}
else if($row['config1_heavy_guns_slot1'] <> 0 && $row['config1_heavy_guns_slot2'] == 0)
{
$config1_heavy_guns = array($row['config1_heavy_guns_slot1']);
}
else
{
$config1_heavy_guns = array($row['config1_heavy_guns_slot1'],$row['config1_heavy_guns_slot2']);
}
if($row['config2_heavy_guns_slot1'] == 0 && $row['config2_heavy_guns_slot2'] == 0)
{
$config2_heavy_guns = array();
}
else if($row['config2_heavy_guns_slot1'] == 0 && $row['config2_heavy_guns_slot2'] <> 0)
{
$config2_heavy_guns = array($row['config2_heavy_guns_slot2']);
}
else if($row['config2_heavy_guns_slot1'] <> 0 && $row['config2_heavy_guns_slot2'] == 0)
{
$config2_heavy_guns = array($row['config2_heavy_guns_slot1']);
}
else
{
$config2_heavy_guns = array($row['config2_heavy_guns_slot1'],$row['config2_heavy_guns_slot2']);
}
$json = array('isError' => 0, 'data' => array());
$json['data']['ret']['filters']['weapons'] = array(0,1,2);
$json['data']['ret']['filters']['generators'] = array(3,4,5);
$json['data']['ret']['filters']['extras'] = array(6,7,8,9,10,11);
$json['data']['ret']['filters']['ammunition'] = array(12,13,14);
$json['data']['ret']['filters']['resources'] = array(15);
$json['data']['ret']['filters']['drone_related'] = array(16,17);
$json['data']['ret']['filters']['modules'] = array(18);
$json['data']['ret']['filters']['pet_related'] = array(19,20);

$json['data']['ret']['hangars'] = array();
$json['data']['ret']['hangars'][0]['hangarID'] = '210441';
$json['data']['ret']['hangars'][0]['name'] = '';
$json['data']['ret']['hangars'][0]['hangar_is_active'] = true;
$json['data']['ret']['hangars'][0]['hangar_is_selected'] = true;
$json['data']['ret']['hangars'][0]['general']['ship']['I'] = $shipId;
$json['data']['ret']['hangars'][0]['general']['ship']['HP'] = '306000';
$json['data']['ret']['hangars'][0]['general']['ship']['L'] = $lootShipId;

$json['data']['ret']['hangars'][0]['general']['ship']['SM'] = $ship2; // design
$json['data']['ret']['hangars'][0]['general']['ship']['M'] = $ship1; // ship
$json['data']['ret']['hangars'][0]['general']['pet']['I'] = '114203829';
$json['data']['ret']['hangars'][0]['general']['pet']['HP'] = '2500';
$json['data']['ret']['hangars'][0]['general']['pet']['LV'] = 5;
$json['data']['ret']['hangars'][0]['general']['pet']['PN'] = 'PET';
$json['data']['ret']['hangars'][0]['general']['pet']['L'] = 1;
$json['data']['ret']['hangars'][0]['general']['pet']['lockedSlots']['lasers'] = 3;
$json['data']['ret']['hangars'][0]['general']['pet']['lockedSlots']['generators'] = 5;
$json['data']['ret']['hangars'][0]['general']['pet']['lockedSlots']['gears'] = 3;
$json['data']['ret']['hangars'][0]['general']['pet']['lockedSlots']['protocols'] = 5;

$json['data']['ret']['hangars'][0]['general']['drones'] = array();
$iris = $row['iris'];
$flax = $row['flax'];
$amount = $flax + $iris;
for ($i = 0; $i < $amount; $i++) 
{
$f = $i + 1;
if ($row['config1_vant'. $f] == 25)
{
$typel = 2;
}
else if ($row['config1_vant'. $f] == 10)
{
$typel = 125;
}
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['I'] = '50'.$i;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['L'] = $typel;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['LV'] = 5;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['HP'] = '40%';
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['EF'] = '10%/20%';
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['SP'] = 22500;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['DE'] = '';
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['DL'] = null;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['SL'] = null;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['repair'] = 500;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['currency'] = 'uridium';
}
$i++;
if ($row['apis'] == 1)
{
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['I'] = '508';
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['L'] = 2;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['LV'] = 5;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['HP'] = '40%';
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['EF'] = '10%/20%';
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['SP'] = 22500;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['DE'] = '';
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['DL'] = null;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['SL'] = null;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['repair'] = 500;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['currency'] = 'uridium';
}
$i++;
if ($row['zeus'] == 1)
{
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['I'] = '509';
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['L'] = 2;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['LV'] = 5;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['HP'] = '40%';
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['EF'] = '10%/20%';
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['SP'] = 22500;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['DE'] = '';
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['DL'] = null;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['SL'] = null;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['repair'] = 500;
$json['data']['ret']['hangars'][0]['general']['drones'][$i]['currency'] = 'uridium';
}


$json['data']['ret']['hangars'][0]['config']['1']['ship']['EQ'] = array();
$json['data']['ret']['hangars'][0]['config']['2']['ship']['EQ'] = array();
$json['data']['ret']['hangars'][0]['config']['1']['ship']['EQ']['lasers'] = $config1_lasers;
$json['data']['ret']['hangars'][0]['config']['1']['ship']['EQ']['generators'] = $config1_generators;
$json['data']['ret']['hangars'][0]['config']['1']['ship']['EQ']['extras'] = $config1_extras;
$json['data']['ret']['hangars'][0]['config']['1']['ship']['EQ']['heavy_guns'] = $config1_heavy_guns;
if ($iris == 1)
{
$json['data']['ret']['hangars'][0]['config']['1']['drones']['500']['EQ']['default'] = $config1_drone5;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['500']['EQ']['default'] = $config2_drone5;
}
else if ($iris == 2)
{
$json['data']['ret']['hangars'][0]['config']['1']['drones']['500']['EQ']['default'] = $config1_drone5;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['501']['EQ']['default'] = $config1_drone2;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['500']['EQ']['default'] = $config2_drone5;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['501']['EQ']['default'] = $config2_drone2;
}
else if ($iris == 3)
{
$json['data']['ret']['hangars'][0]['config']['1']['drones']['500']['EQ']['default'] = $config1_drone5;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['501']['EQ']['default'] = $config1_drone2;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['502']['EQ']['default'] = $config1_drone3;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['500']['EQ']['default'] = $config2_drone5;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['501']['EQ']['default'] = $config2_drone2;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['502']['EQ']['default'] = $config2_drone3;
}
else if ($iris == 4)
{
$json['data']['ret']['hangars'][0]['config']['1']['drones']['500']['EQ']['default'] = $config1_drone5;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['501']['EQ']['default'] = $config1_drone2;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['502']['EQ']['default'] = $config1_drone3;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['503']['EQ']['default'] = $config1_drone4;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['500']['EQ']['default'] = $config2_drone5;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['501']['EQ']['default'] = $config2_drone2;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['502']['EQ']['default'] = $config2_drone3;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['503']['EQ']['default'] = $config2_drone4;
}
else if ($iris == 5)
{
$json['data']['ret']['hangars'][0]['config']['1']['drones']['500']['EQ']['default'] = $config1_drone5;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['501']['EQ']['default'] = $config1_drone2;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['502']['EQ']['default'] = $config1_drone3;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['503']['EQ']['default'] = $config1_drone4;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['504']['EQ']['default'] = $config1_drone1;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['500']['EQ']['default'] = $config2_drone5;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['501']['EQ']['default'] = $config2_drone2;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['502']['EQ']['default'] = $config2_drone3;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['503']['EQ']['default'] = $config2_drone4;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['504']['EQ']['default'] = $config2_drone1;
}
else if ($iris == 6)
{
$json['data']['ret']['hangars'][0]['config']['1']['drones']['500']['EQ']['default'] = $config1_drone5;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['501']['EQ']['default'] = $config1_drone2;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['502']['EQ']['default'] = $config1_drone3;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['503']['EQ']['default'] = $config1_drone4;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['504']['EQ']['default'] = $config1_drone1;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['505']['EQ']['default'] = $config1_drone6;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['500']['EQ']['default'] = $config2_drone5;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['501']['EQ']['default'] = $config2_drone2;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['502']['EQ']['default'] = $config2_drone3;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['503']['EQ']['default'] = $config2_drone4;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['504']['EQ']['default'] = $config2_drone1;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['505']['EQ']['default'] = $config2_drone6;
}
else if ($iris == 7)
{
$json['data']['ret']['hangars'][0]['config']['1']['drones']['500']['EQ']['default'] = $config1_drone5;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['501']['EQ']['default'] = $config1_drone2;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['502']['EQ']['default'] = $config1_drone3;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['503']['EQ']['default'] = $config1_drone4;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['504']['EQ']['default'] = $config1_drone1;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['505']['EQ']['default'] = $config1_drone6;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['506']['EQ']['default'] = $config1_drone7;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['500']['EQ']['default'] = $config2_drone5;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['501']['EQ']['default'] = $config2_drone2;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['502']['EQ']['default'] = $config2_drone3;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['503']['EQ']['default'] = $config2_drone4;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['504']['EQ']['default'] = $config2_drone1;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['505']['EQ']['default'] = $config2_drone6;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['506']['EQ']['default'] = $config2_drone7;
}
else if ($iris == 8)
{
$json['data']['ret']['hangars'][0]['config']['1']['drones']['500']['EQ']['default'] = $config1_drone5;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['501']['EQ']['default'] = $config1_drone2;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['502']['EQ']['default'] = $config1_drone3;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['503']['EQ']['default'] = $config1_drone4;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['504']['EQ']['default'] = $config1_drone1;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['505']['EQ']['default'] = $config1_drone6;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['506']['EQ']['default'] = $config1_drone7;
$json['data']['ret']['hangars'][0]['config']['1']['drones']['507']['EQ']['default'] = $config1_drone8;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['500']['EQ']['default'] = $config2_drone5;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['501']['EQ']['default'] = $config2_drone2;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['502']['EQ']['default'] = $config2_drone3;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['503']['EQ']['default'] = $config2_drone4;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['504']['EQ']['default'] = $config2_drone1;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['505']['EQ']['default'] = $config2_drone6;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['506']['EQ']['default'] = $config2_drone7;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['507']['EQ']['default'] = $config2_drone8;
}
if ($row['apis'] == 1)
{
$json['data']['ret']['hangars'][0]['config']['1']['drones']['508']['EQ']['default'] = $config1_drone9;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['508']['EQ']['default'] = $config2_drone9;
}
if ($row['zeus'] == 1)
{
$json['data']['ret']['hangars'][0]['config']['1']['drones']['509']['EQ']['default'] = $config1_drone10;
$json['data']['ret']['hangars'][0]['config']['2']['drones']['509']['EQ']['default'] = $config2_drone10;
}

$json['data']['ret']['hangars'][0]['config']['1']['pet']['EQ'] = array();
$json['data']['ret']['hangars'][0]['config']['2']['ship']['EQ']['lasers'] = $config2_lasers;
$json['data']['ret']['hangars'][0]['config']['2']['ship']['EQ']['generators'] = $config2_generators;
$json['data']['ret']['hangars'][0]['config']['2']['ship']['EQ']['extras'] = $config2_extras;
$json['data']['ret']['hangars'][0]['config']['2']['ship']['EQ']['heavy_guns'] = $config2_heavy_guns;
$json['data']['ret']['hangars'][0]['config']['2']['pet']['EQ'] = array();
$json['data']['ret']['items'] = array();
$number = 0;
$json['data']['ret']['items'][$number]['I'] = 1000;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 5;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1001;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 7;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 2;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1002;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 8;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 3;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1003;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 30;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 4;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1004;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 9;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 6;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1005;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 57;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 5;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1006;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 64;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 7;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1007;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 54;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 310;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1008;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 16;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 2026;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1009;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 15;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 2021;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1010;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 55;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 3030;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1011;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 26;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 8;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1012;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 65;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 250;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1013;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 27;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1212;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1014;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 40;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1015;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 66;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 100;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1016;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 28;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 10;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1017;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 67;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1018;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 25;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 2;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1019;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 68;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1020;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 58;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1001;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1021;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 59;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1002;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1022;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 60;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1003;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1023;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 61;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1004;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1024;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 62;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1005;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1025;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 14;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1006;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1026;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 63;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1007;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1027;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 36;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1008;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1028;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 49;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1009;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1029;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 31;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1030;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 37;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 2;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1031;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 38;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 3;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1032;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 42;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 4;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1033;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 29;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 5;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1034;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 35;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1231;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1035;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 33;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1245;
$number++;
$json['data']['ret']['items'][$number]['I'] = 1036;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 34;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = 1573;
$number++;
if ($BK100 <> 0)
{
$json['data']['ret']['items'][$number]['I'] = 1037;
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 56;
$json['data']['ret']['items'][$number]['S'] = $number;
$json['data']['ret']['items'][$number]['Q'] = $BK100;
$number++;
}
for ($x=1; $x<=$AJP01; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 2000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 47;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$REPS; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 3000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 6;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$REP1; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 4000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 69;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$REP2; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 5000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 70;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$REP3; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 6000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 71;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$REP4; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 7000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 23;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$ROKT01; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 8000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 44;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$MINT01; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 9000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 72;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$MINT02; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 10000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 73;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$NCRRB; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 11000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 11;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$CL04K_MOD; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 12000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 74;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$AROLX; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 13000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 19;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$CL04K; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 14000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 75;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$CL04KXL; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 15000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 76;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$NCAWB; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 16000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 77;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$NCAWR; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 17000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 78;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$NCAWL; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 18000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 79;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$GEMXL; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 19000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 45;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$GEMAC; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 20000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 80;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$GEMACC; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 21000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 81;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$GEMACCC; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 22000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 82;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$S01; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 23000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 83;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$S02; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 24000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 84;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$S03; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 25000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 85;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$S04; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 26000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 21;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$DRO01; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 27000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 86;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$DRO02; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 28000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 87;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$RD; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 29000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 46;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$JP1; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 30000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 88;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$JP2; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 31000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 89;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$FBX; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 32000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 90;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$AM; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 33000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 18;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$RB; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 34000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 22;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$SMB01; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 35000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 91;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$ISH01; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 36000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 92;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$NCAGB; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 37000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 93;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$AIM01; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 38000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 94;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$AIM02; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 39000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 95;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$RLLB1; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 40000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 96;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$HM7; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 41000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 97;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}

// cannon laser
// lf-1
for ($x=1; $x<=$lf1_1; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 100000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf1_2; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 110000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 2;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf1_3; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 120000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 3;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf1_4; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 130000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 4;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf1_5; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 140000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 5;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf1_6; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 150000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 6;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf1_7; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 160000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 7;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf1_8; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 170000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 8;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf1_9; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 180000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 9;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf1_10; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 190000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 10;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf1_11; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 200000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 11;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf1_12; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 210000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 12;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf1_13; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 220000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 13;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf1_14; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 230000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 14;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf1_15; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 240000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 15;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf1_16; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 250000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 16;
$json['data']['ret']['items'][$number]['L'] = 98;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}

// mp-1
for ($x=1; $x<=$mp1_1; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 260000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$mp1_2; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 270000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 2;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$mp1_3; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 280000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 3;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$mp1_4; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 290000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 4;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$mp1_5; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 300000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 5;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$mp1_6; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 310000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 6;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$mp1_7; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 320000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 7;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$mp1_8; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 330000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 8;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$mp1_9; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 340000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 9;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$mp1_10; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 350000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 10;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$mp1_11; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 360000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 11;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$mp1_12; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 370000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 12;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$mp1_13; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 380000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 13;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$mp1_14; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 390000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 14;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$mp1_15; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 400000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 15;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$mp1_16; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 410000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 16;
$json['data']['ret']['items'][$number]['L'] = 4;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}

// lf-2
for ($x=1; $x<=$lf2_1; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 420000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf2_2; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 430000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 2;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf2_3; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 440000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 3;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf2_4; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 450000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 4;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf2_5; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 460000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 5;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf2_6; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 470000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 6;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf2_7; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 480000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 7;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf2_8; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 490000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 8;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf2_9; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 500000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 9;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf2_10; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 510000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 10;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf2_11; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 520000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 11;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf2_12; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 530000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 12;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf2_13; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 540000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 13;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf2_14; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 550000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 14;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf2_15; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 560000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 15;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf2_16; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 570000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 16;
$json['data']['ret']['items'][$number]['L'] = 10;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}

// lf-3
for ($x=1; $x<=$lf3_1; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 580000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf3_2; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 590000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 2;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf3_3; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 600000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 3;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf3_4; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 610000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 4;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf3_5; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 620000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 5;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf3_6; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 630000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 6;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf3_7; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 640000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 7;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf3_8; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 650000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 8;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf3_9; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 660000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 9;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf3_10; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 670000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 10;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf3_11; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 680000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 11;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf3_12; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 690000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 12;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf3_13; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 700000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 13;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf3_14; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 710000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 14;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf3_15; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 720000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 15;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf3_16; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 730000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 16;
$json['data']['ret']['items'][$number]['L'] = 17;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}

// lf-4
for ($x=1; $x<=$lf4_1; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 740000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf4_2; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 750000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 2;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf4_3; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 760000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 3;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf4_4; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 770000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 4;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf4_5; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 780000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 5;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf4_6; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 790000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 6;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf4_7; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 800000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 7;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf4_8; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 810000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 8;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf4_9; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 820000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 9;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf4_10; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 830000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 10;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf4_11; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 840000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 11;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf4_12; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 850000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 12;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf4_13; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 860000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 13;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf4_14; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 870000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 14;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf4_15; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 880000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 15;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$lf4_16; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 890000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 16;
$json['data']['ret']['items'][$number]['L'] = 41;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}

// HST 1
for ($x=1; $x<=$hst1_1; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 900000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst1_2; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 910000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 2;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst1_3; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 920000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 3;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst1_4; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 930000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 4;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst1_5; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 940000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 5;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst1_6; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 950000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 6;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst1_7; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 960000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 7;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst1_8; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 970000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 8;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst1_9; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 980000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 9;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst1_10; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 990000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 10;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst1_11; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1000000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 11;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst1_12; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1010000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 12;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst1_13; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1020000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 13;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst1_14; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1030000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 14;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst1_15; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1040000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 15;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst1_16; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1050000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 16;
$json['data']['ret']['items'][$number]['L'] = 99;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}

// HST 2
for ($x=1; $x<=$hst2_1; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1060000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst2_2; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1070000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 2;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst2_3; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1080000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 3;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst2_4; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1090000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 4;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst2_5; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1100000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 5;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst2_6; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1110000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 6;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst2_7; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1120000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 7;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst2_8; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1130000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 8;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst2_9; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1140000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 9;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst2_10; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1150000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 10;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst2_11; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1160000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 11;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst2_12; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1170000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 12;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst2_13; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1180000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 13;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst2_14; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1190000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 14;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst2_15; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1200000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 15;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$hst2_16; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1210000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 16;
$json['data']['ret']['items'][$number]['L'] = 39;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}

// G3N
for ($x=1; $x<=$g3n_1010; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1220000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 104;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$g3n_2010; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1230000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 103;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$g3n_3210; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1240000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 102;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$g3n_3310; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1250000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 101;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$g3n_6900; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1260000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 100;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$g3n_7900; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1270000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 13;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}

//SG3N-A01
for ($x=1; $x<=$sg3n_a01_1; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1280000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a01_2; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1290000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 2;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a01_3; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1300000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 3;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a01_4; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1310000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 4;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a01_5; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1320000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 5;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a01_6; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1330000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 6;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a01_7; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1340000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 7;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a01_8; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1350000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 8;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a01_9; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1360000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 9;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a01_10; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1370000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 10;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a01_11; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1380000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 11;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a01_12; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1390000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 12;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a01_13; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1400000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 13;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a01_14; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1410000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 14;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a01_15; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1420000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 15;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a01_16; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1430000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 16;
$json['data']['ret']['items'][$number]['L'] = 3;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
//SG3N-A02
for ($x=1; $x<=$sg3n_a02_1; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1440000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a02_2; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1450000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 2;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a02_3; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1460000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 3;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a02_4; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1470000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 4;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a02_5; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1480000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 5;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a02_6; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1490000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 6;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a02_7; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1500000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 7;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a02_8; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1510000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 8;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a02_9; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1520000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 9;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a02_10; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1530000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 10;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a02_11; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1540000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 11;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a02_12; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1550000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 12;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a02_13; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1560000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 13;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a02_14; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1570000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 14;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a02_15; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1580000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 15;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a02_16; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1590000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 16;
$json['data']['ret']['items'][$number]['L'] = 105;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
//SG3N-A03
for ($x=1; $x<=$sg3n_a03_1; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1600000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a03_2; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1610000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 2;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a03_3; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1620000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 3;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a03_4; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1630000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 4;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a03_5; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1640000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 5;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a03_6; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1650000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 6;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a03_7; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1660000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 7;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a03_8; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1670000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 8;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a03_9; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1680000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 9;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a03_10; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1690000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 10;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a03_11; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1700000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 11;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a03_12; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1710000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 12;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a03_13; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1720000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 13;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a03_14; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1730000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 14;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a03_15; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1740000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 15;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_a03_16; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1750000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 16;
$json['data']['ret']['items'][$number]['L'] = 106;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
//SG3N-B01
for ($x=1; $x<=$sg3n_b01_1; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1760000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b01_2; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1770000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 2;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b01_3; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1780000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 3;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b01_4; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1790000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 4;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b01_5; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1800000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 5;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b01_6; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1810000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 6;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b01_7; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1820000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 7;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b01_8; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1830000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 8;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b01_9; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1840000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 9;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b01_10; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1850000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 10;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b01_11; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1860000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 11;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b01_12; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1870000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 12;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b01_13; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1880000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 13;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b01_14; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1890000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 14;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b01_15; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1900000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 15;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b01_16; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1910000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 16;
$json['data']['ret']['items'][$number]['L'] = 12;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
//SG3N-B02
for ($x=1; $x<=$sg3n_b02_1; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1920000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 0;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b02_2; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1930000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 2;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b02_3; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1940000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 3;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b02_4; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1950000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 4;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b02_5; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1960000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 5;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b02_6; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1970000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 6;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b02_7; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1980000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 7;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b02_8; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 1990000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 8;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b02_9; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 2000000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 9;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b02_10; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 2010000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 10;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b02_11; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 2020000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 11;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b02_12; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 2030000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 12;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b02_13; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 2040000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 13;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b02_14; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 2050000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 14;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b02_15; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 2060000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 15;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}
for ($x=1; $x<=$sg3n_b02_16; $x++)
{
$json['data']['ret']['items'][$number]['I'] = 2070000 + ($x - 1);
$json['data']['ret']['items'][$number]['LV'] = 16;
$json['data']['ret']['items'][$number]['L'] = 24;
$json['data']['ret']['items'][$number]['S'] = $number;
$number++;
}

$json['data']['ret']['itemInfo'] = array();
$json['data']['ret']['itemInfo'][0]['L'] = 53;
$json['data']['ret']['itemInfo'][0]['name'] = 'Goliath';
$json['data']['ret']['itemInfo'][0]['T'] = 22;
$json['data']['ret']['itemInfo'][0]['C'] = 'ship';
$json['data']['ret']['itemInfo'][0]['levels'] = array();
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['lasers']['Q'] = 15;
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['generators']['Q'] = 15;
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][0]['levels'][0]['slotsets']['extras']['Q'] = 3;
$json['data']['ret']['itemInfo'][0]['levels'][0]['selling']['credits'] = 200000;
$json['data']['ret']['itemInfo'][0]['levels'][0]['cdn']['63x63'] = 'c6c8a09a4749af691b6a9947cf2c6900';
$json['data']['ret']['itemInfo'][0]['levels'][0]['cdn']['100x100'] = '5fcdb83e69b401d92cc1ae6abb172300';
$json['data']['ret']['itemInfo'][0]['levels'][0]['cdn']['top'] = 'a604cd4669b80a0ddd89fa54fc946300';
$json['data']['ret']['itemInfo'][1]['L'] = 51;
$json['data']['ret']['itemInfo'][1]['name'] = 'Veteran';
$json['data']['ret']['itemInfo'][1]['T'] = 21;
$json['data']['ret']['itemInfo'][1]['C'] = 'ship';
$json['data']['ret']['itemInfo'][1]['levels'] = array();
$json['data']['ret']['itemInfo'][1]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][1]['levels'][0]['slotsets']['lasers']['Q'] = 15;
$json['data']['ret']['itemInfo'][1]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][1]['levels'][0]['slotsets']['generators']['Q'] = 15;
$json['data']['ret']['itemInfo'][1]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][1]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][1]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][1]['levels'][0]['slotsets']['extras']['Q'] = 3;
$json['data']['ret']['itemInfo'][1]['levels'][0]['cdn']['30x30'] = '9d6eabcab5911bfc2c4a2d56676ce400';
$json['data']['ret']['itemInfo'][1]['levels'][0]['cdn']['63x63'] = '3fd73f6bc3611a9fe8f2367f4575b600';
$json['data']['ret']['itemInfo'][1]['levels'][0]['cdn']['100x100'] = '81a16a8cd2cddfdc3c82af51990d8700';
$json['data']['ret']['itemInfo'][1]['levels'][0]['cdn']['top'] = '2d388ee819077143b8e78d3dc7ceae00';
$json['data']['ret']['itemInfo'][2]['L'] = 52;
$json['data']['ret']['itemInfo'][2]['name'] = 'Exalted';
$json['data']['ret']['itemInfo'][2]['T'] = 21;
$json['data']['ret']['itemInfo'][2]['C'] = 'ship';
$json['data']['ret']['itemInfo'][2]['levels'] = array();
$json['data']['ret']['itemInfo'][2]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][2]['levels'][0]['slotsets']['lasers']['Q'] = 15;
$json['data']['ret']['itemInfo'][2]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][2]['levels'][0]['slotsets']['generators']['Q'] = 15;
$json['data']['ret']['itemInfo'][2]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][2]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][2]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][2]['levels'][0]['slotsets']['extras']['Q'] = 3;
$json['data']['ret']['itemInfo'][2]['levels'][0]['cdn']['30x30'] = '72c2127019b2e3e28757998649a5cb00';
$json['data']['ret']['itemInfo'][2]['levels'][0]['cdn']['63x63'] = 'ac8e12195d070eed94ce15b3523ba500';
$json['data']['ret']['itemInfo'][2]['levels'][0]['cdn']['100x100'] = '88044e52b74d1062a9a38e596e465400';
$json['data']['ret']['itemInfo'][2]['levels'][0]['cdn']['top'] = 'fa46264bde239ff63b9313cd3f954c00';
$json['data']['ret']['itemInfo'][3]['L'] = 0;
$json['data']['ret']['itemInfo'][3]['name'] = 'Bastion';
$json['data']['ret']['itemInfo'][3]['T'] = 21;
$json['data']['ret']['itemInfo'][3]['C'] = 'ship';
$json['data']['ret']['itemInfo'][3]['levels'] = array();
$json['data']['ret']['itemInfo'][3]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][3]['levels'][0]['slotsets']['lasers']['Q'] = 15;
$json['data']['ret']['itemInfo'][3]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][3]['levels'][0]['slotsets']['generators']['Q'] = 15;
$json['data']['ret']['itemInfo'][3]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][3]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][3]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][3]['levels'][0]['slotsets']['extras']['Q'] = 3;
$json['data']['ret']['itemInfo'][3]['levels'][0]['cdn']['30x30'] = '45177fe09e92307b3d1bf8d0036ea200';
$json['data']['ret']['itemInfo'][3]['levels'][0]['cdn']['63x63'] = '80981e18bb9a5ca616833d5c7ee05c00';
$json['data']['ret']['itemInfo'][3]['levels'][0]['cdn']['100x100'] = 'e934df028791f9eac43b2e3b60de3100';
$json['data']['ret']['itemInfo'][3]['levels'][0]['cdn']['top'] = '5970790943b53a8e113d4232e5714500';
$json['data']['ret']['itemInfo'][4]['L'] = 50;
$json['data']['ret']['itemInfo'][4]['name'] = 'Enforcer';
$json['data']['ret']['itemInfo'][4]['T'] = 21;
$json['data']['ret']['itemInfo'][4]['C'] = 'ship';
$json['data']['ret']['itemInfo'][4]['levels'] = array();
$json['data']['ret']['itemInfo'][4]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][4]['levels'][0]['slotsets']['lasers']['Q'] = 15;
$json['data']['ret']['itemInfo'][4]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][4]['levels'][0]['slotsets']['generators']['Q'] = 15;
$json['data']['ret']['itemInfo'][4]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][4]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][4]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][4]['levels'][0]['slotsets']['extras']['Q'] = 3;
$json['data']['ret']['itemInfo'][4]['levels'][0]['cdn']['30x30'] = '910ad3dc8468f831274081d0fd79a700';
$json['data']['ret']['itemInfo'][4]['levels'][0]['cdn']['63x63'] = 'b2a8f157eec6af66d9f4f2fcdfa5dd00';
$json['data']['ret']['itemInfo'][4]['levels'][0]['cdn']['100x100'] = '8b447eee59e1500e4367eba7578b0300';
$json['data']['ret']['itemInfo'][4]['levels'][0]['cdn']['top'] = 'aa24e60e333abc872ffe39b171b41200';
$json['data']['ret']['itemInfo'][5]['L'] = 1;
$json['data']['ret']['itemInfo'][5]['name'] = 'P.E.T.10';
$json['data']['ret']['itemInfo'][5]['T'] = 23;
$json['data']['ret']['itemInfo'][5]['C'] = 'petGear';
$json['data']['ret']['itemInfo'][5]['rename'] = 3000;
$json['data']['ret']['itemInfo'][5]['costWeaponSlot'] = '3000';
$json['data']['ret']['itemInfo'][5]['costGeneratorSlot'] = '5000';
$json['data']['ret']['itemInfo'][5]['costGearSlot'] = '10000';
$json['data']['ret']['itemInfo'][5]['costProtocolSlot'] = '5000';
$json['data']['ret']['itemInfo'][5]['levels'] = array();
$json['data']['ret']['itemInfo'][5]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][0]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][0]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][0]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][0]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][0]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][0]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][0]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][0]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][0]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][0]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][5]['levels'][1]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][1]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][1]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][1]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][1]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][1]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][1]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][1]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][1]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][1]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][1]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][5]['levels'][2]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][2]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][2]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][2]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][2]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][2]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][2]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][2]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][2]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][2]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][2]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][5]['levels'][3]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][3]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][3]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][3]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][3]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][3]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][3]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][3]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][3]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][3]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][3]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][5]['levels'][4]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][4]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][4]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][4]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][4]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][4]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][4]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][4]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][4]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][4]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][4]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][5]['levels'][5]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][5]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][5]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][5]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][5]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][5]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][5]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][5]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][5]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][5]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][5]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][5]['levels'][6]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][6]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][6]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][6]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][6]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][6]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][6]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][6]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][6]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][6]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][6]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][5]['levels'][7]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][7]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][7]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][7]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][7]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][7]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][7]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][7]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][7]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][7]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][7]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][5]['levels'][8]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][8]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][8]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][8]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][8]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][8]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][8]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][8]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][8]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][8]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][8]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][5]['levels'][9]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][9]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][9]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][9]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][9]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][9]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][9]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][9]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][9]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][9]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][9]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][5]['levels'][10]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][10]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][10]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][10]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][10]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][10]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][10]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][10]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][10]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][10]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][10]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][5]['levels'][11]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][11]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][11]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][11]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][11]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][11]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][11]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][11]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][11]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][11]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][11]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][5]['levels'][12]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][12]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][12]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][12]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][12]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][12]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][12]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][12]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][12]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][12]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][12]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][5]['levels'][13]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][13]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][13]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][13]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][13]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][13]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][13]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][13]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][13]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][13]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][13]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][5]['levels'][14]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][14]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][14]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][14]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][14]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][14]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][14]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][14]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][14]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][14]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][14]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][5]['levels'][15]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][5]['levels'][15]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][15]['slotsets']['generators']['T'] = array(4);
$json['data']['ret']['itemInfo'][5]['levels'][15]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][5]['levels'][15]['slotsets']['gears']['T'] = array(19);
$json['data']['ret']['itemInfo'][5]['levels'][15]['slotsets']['gears']['Q'] = array(1);
$json['data']['ret']['itemInfo'][5]['levels'][15]['slotsets']['protocols']['T'] = array(20);
$json['data']['ret']['itemInfo'][5]['levels'][15]['slotsets']['protocols']['Q'] = array(2);
$json['data']['ret']['itemInfo'][5]['levels'][15]['cdn']['30x30'] = '64d37f39e6afc9ccfd3fad221a3f1a00';
$json['data']['ret']['itemInfo'][5]['levels'][15]['cdn']['63x63'] = '914f7da0e50393dd5acf247001f22500';
$json['data']['ret']['itemInfo'][5]['levels'][15]['cdn']['100x100'] = 'e8bbd8e957933caf10200c8ae422b400';
$json['data']['ret']['itemInfo'][6]['L'] = 2;
$json['data']['ret']['itemInfo'][6]['name'] = 'Iris Drone';
$json['data']['ret']['itemInfo'][6]['T'] = 24;
$json['data']['ret']['itemInfo'][6]['C'] = 'drone';
$json['data']['ret']['itemInfo'][6]['repair'] = 0;
$json['data']['ret']['itemInfo'][6]['levels'] = array();
$json['data']['ret']['itemInfo'][6]['levels'][0]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][6]['levels'][0]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][6]['levels'][0]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][6]['levels'][0]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][6]['levels'][0]['selling']['credits'] = 100000;
$json['data']['ret']['itemInfo'][6]['levels'][0]['cdn']['30x30'] = '14ebb8db8014dc4bd757fa2ef74de400';
$json['data']['ret']['itemInfo'][6]['levels'][0]['cdn']['63x63'] = '9e918d6b19b7d5ead16addad0cc35200';
$json['data']['ret']['itemInfo'][6]['levels'][0]['cdn']['100x100'] = 'afba9239e233f506eff21528ab4e8f00';
$json['data']['ret']['itemInfo'][6]['levels'][0]['cdn']['top'] = '79b048a4b8e05add7a2245ebe95d5e00';
$json['data']['ret']['itemInfo'][6]['levels'][1]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][6]['levels'][1]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][6]['levels'][1]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][6]['levels'][1]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][6]['levels'][1]['selling']['credits'] = 150000;
$json['data']['ret']['itemInfo'][6]['levels'][1]['cdn']['30x30'] = 'd951657b84dd80549297702f018b1f00';
$json['data']['ret']['itemInfo'][6]['levels'][1]['cdn']['63x63'] = '66f6d38952f8fb800abbd5e5d96f7700';
$json['data']['ret']['itemInfo'][6]['levels'][1]['cdn']['100x100'] = '3b12423b93122055a76f250f307dee00';
$json['data']['ret']['itemInfo'][6]['levels'][1]['cdn']['top'] = 'cdcc2dc2ac60191715615ac48100e300';
$json['data']['ret']['itemInfo'][6]['levels'][2]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][6]['levels'][2]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][6]['levels'][2]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][6]['levels'][2]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][6]['levels'][2]['selling']['credits'] = 210000;
$json['data']['ret']['itemInfo'][6]['levels'][2]['cdn']['30x30'] = 'b10d193b55f89656936668c1bc559900';
$json['data']['ret']['itemInfo'][6]['levels'][2]['cdn']['63x63'] = 'e3ab25f382927dfd082f290967524500';
$json['data']['ret']['itemInfo'][6]['levels'][2]['cdn']['100x100'] = 'e0dbd77afe0b998abb1be914ff0ca800';
$json['data']['ret']['itemInfo'][6]['levels'][2]['cdn']['top'] = '9c4888900962a7ac074714cfaa206200';
$json['data']['ret']['itemInfo'][6]['levels'][3]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][6]['levels'][3]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][6]['levels'][3]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][6]['levels'][3]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][6]['levels'][3]['selling']['credits'] = 240000;
$json['data']['ret']['itemInfo'][6]['levels'][3]['cdn']['30x30'] = '9c481125952808f464742ffbb0a43500';
$json['data']['ret']['itemInfo'][6]['levels'][3]['cdn']['63x63'] = 'dd3a4359bfadba07d03989ec042b5e00';
$json['data']['ret']['itemInfo'][6]['levels'][3]['cdn']['100x100'] = 'a71d6fe22419ea188a5d2dd78e7b6900';
$json['data']['ret']['itemInfo'][6]['levels'][3]['cdn']['top'] = '873f7968e96ba2b2aa6a867938171b00';
$json['data']['ret']['itemInfo'][6]['levels'][4]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][6]['levels'][4]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][6]['levels'][4]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][6]['levels'][4]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][6]['levels'][4]['selling']['credits'] = 315000;
$json['data']['ret']['itemInfo'][6]['levels'][4]['cdn']['30x30'] = '9cb3929ed0ea6e938eb50599a854d400';
$json['data']['ret']['itemInfo'][6]['levels'][4]['cdn']['63x63'] = '18d7b8fbe928f1b26ae05e8cf8eab200';
$json['data']['ret']['itemInfo'][6]['levels'][4]['cdn']['100x100'] = '0227efd2ca7b8749575885abd3d33e00';
$json['data']['ret']['itemInfo'][6]['levels'][4]['cdn']['top'] = 'e65761d42de94f1eeaa0c30e29d88e00';
$json['data']['ret']['itemInfo'][6]['levels'][5]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][6]['levels'][5]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][6]['levels'][5]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][6]['levels'][5]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][6]['levels'][5]['selling']['credits'] = 500000;
$json['data']['ret']['itemInfo'][6]['levels'][5]['cdn']['30x30'] = '40860d1594e9b6841ccfa87963f8d800';
$json['data']['ret']['itemInfo'][6]['levels'][5]['cdn']['63x63'] = '0cd363e0f68297796aeb1a1dc8725500';
$json['data']['ret']['itemInfo'][6]['levels'][5]['cdn']['100x100'] = '915c51fde19ca5d0c4878221ae305f00';
$json['data']['ret']['itemInfo'][6]['levels'][5]['cdn']['top'] = 'b6aae2912b6e0eb1b49d50ab5caef400';
$json['data']['ret']['itemInfo'][7]['L'] = 3;
$json['data']['ret']['itemInfo'][7]['name'] = 'SG3N-A01';
$json['data']['ret']['itemInfo'][7]['T'] = 4;
$json['data']['ret']['itemInfo'][7]['C'] = 'generator';
$json['data']['ret']['itemInfo'][7]['levels'] = array();
$json['data']['ret']['itemInfo'][7]['levels'][0]['selling']['credits'] = 4000;
$json['data']['ret']['itemInfo'][7]['levels'][0]['cdn']['30x30'] = '8c0b74bf0cc43c58fb39e6d48c495000';
$json['data']['ret']['itemInfo'][7]['levels'][0]['cdn']['63x63'] = 'd2fc1d2a80f3ef4376c9b63145b10c00';
$json['data']['ret']['itemInfo'][7]['levels'][0]['cdn']['100x100'] = '19228ba81b387583a63ed8c9a9465400';
$json['data']['ret']['itemInfo'][8]['L'] = 4;
$json['data']['ret']['itemInfo'][8]['name'] = 'MP-1';
$json['data']['ret']['itemInfo'][8]['T'] = 0;
$json['data']['ret']['itemInfo'][8]['C'] = 'laser';
$json['data']['ret']['itemInfo'][8]['levels'] = array();
$json['data']['ret']['itemInfo'][8]['levels'][0]['selling']['credits'] = 10000;
$json['data']['ret']['itemInfo'][8]['levels'][0]['cdn']['30x30'] = 'cfde29bcddbbfbcf4abccb06a1bad900';
$json['data']['ret']['itemInfo'][8]['levels'][0]['cdn']['63x63'] = '52eb84ef703379bc9cc9268f59ff5a00';
$json['data']['ret']['itemInfo'][8]['levels'][0]['cdn']['100x100'] = '23ad6cc5c949ffce0e6ff2683b16e700';
$json['data']['ret']['itemInfo'][9]['L'] = 5;
$json['data']['ret']['itemInfo'][9]['name'] = 'LCB-10';
$json['data']['ret']['itemInfo'][9]['T'] = 14;
$json['data']['ret']['itemInfo'][9]['C'] = 'battery';
$json['data']['ret']['itemInfo'][9]['levels'] = array();
$json['data']['ret']['itemInfo'][9]['levels'][0]['selling']['credits'] = 5;
$json['data']['ret']['itemInfo'][9]['levels'][0]['cdn']['30x30'] = 'dae4f308e45cc4a93ac36451afabc700';
$json['data']['ret']['itemInfo'][9]['levels'][0]['cdn']['63x63'] = 'c02154d2ce135d660f647631dbbfbc00';
$json['data']['ret']['itemInfo'][9]['levels'][0]['cdn']['100x100'] = 'd8db5c48fe907c65a74b77b7206a5e00';
$json['data']['ret']['itemInfo'][10]['L'] = 6;
$json['data']['ret']['itemInfo'][10]['name'] = 'Repair Robot Basic';
$json['data']['ret']['itemInfo'][10]['T'] = 9;
$json['data']['ret']['itemInfo'][10]['C'] = 'special';
$json['data']['ret']['itemInfo'][10]['levels'] = array();
$json['data']['ret']['itemInfo'][10]['levels'][0]['selling']['credits'] = 3750;
$json['data']['ret']['itemInfo'][10]['levels'][0]['cdn']['30x30'] = '6512f6cf8e8d40ff25c73b0c225e5500';
$json['data']['ret']['itemInfo'][10]['levels'][0]['cdn']['63x63'] = 'c82f70710b97fc05410bb53b6b8e7400';
$json['data']['ret']['itemInfo'][10]['levels'][0]['cdn']['100x100'] = 'd474477ba5d66d7f3255fb1068eeea00';
$json['data']['ret']['itemInfo'][11]['L'] = 7;
$json['data']['ret']['itemInfo'][11]['name'] = 'MCB-25';
$json['data']['ret']['itemInfo'][11]['T'] = 14;
$json['data']['ret']['itemInfo'][11]['C'] = 'battery';
$json['data']['ret']['itemInfo'][11]['levels'][0]['selling']['credits'] = 1;
$json['data']['ret']['itemInfo'][11]['levels'][0]['cdn']['30x30'] = 'becac3718527c5212ffbaef4de6beb00';
$json['data']['ret']['itemInfo'][11]['levels'][0]['cdn']['63x63'] = '86c2c2d261ef196310b34fb3f92c6800';
$json['data']['ret']['itemInfo'][11]['levels'][0]['cdn']['100x100'] = 'fa407a1644e0563e5138b0499c682100';
$json['data']['ret']['itemInfo'][12]['L'] = 8;
$json['data']['ret']['itemInfo'][12]['name'] = 'MCB-50';
$json['data']['ret']['itemInfo'][12]['T'] = 14;
$json['data']['ret']['itemInfo'][12]['C'] = 'battery';
$json['data']['ret']['itemInfo'][12]['levels'] = array();
$json['data']['ret']['itemInfo'][12]['levels'][0]['selling']['credits'] = 2;
$json['data']['ret']['itemInfo'][12]['levels'][0]['cdn']['30x30'] = '0e6c8656cf822817bf38242c131a9c00';
$json['data']['ret']['itemInfo'][12]['levels'][0]['cdn']['63x63'] = '386dd5328b039cc7594c36f8875af400';
$json['data']['ret']['itemInfo'][12]['levels'][0]['cdn']['100x100'] = '86f834298693b605147ccf579bb84d00';
$json['data']['ret']['itemInfo'][13]['L'] = 9;
$json['data']['ret']['itemInfo'][13]['name'] = 'SAB-50';
$json['data']['ret']['itemInfo'][13]['T'] = 14;
$json['data']['ret']['itemInfo'][13]['C'] = 'battery';
$json['data']['ret']['itemInfo'][13]['levels'] = array();
$json['data']['ret']['itemInfo'][13]['levels'][0]['selling']['credits'] = 2;
$json['data']['ret']['itemInfo'][13]['levels'][0]['cdn']['30x30'] = '951e7ce7907a737f2c94d5cda23cfd00';
$json['data']['ret']['itemInfo'][13]['levels'][0]['cdn']['63x63'] = '0665c3f7e4614d679369d77011c2c900';
$json['data']['ret']['itemInfo'][13]['levels'][0]['cdn']['100x100'] = '8c128831210a77fdebfc8085f0de2700';
$json['data']['ret']['itemInfo'][14]['L'] = 10;
$json['data']['ret']['itemInfo'][14]['name'] = 'LF-2';
$json['data']['ret']['itemInfo'][14]['T'] = 0;
$json['data']['ret']['itemInfo'][14]['C'] = 'laser';
$json['data']['ret']['itemInfo'][14]['levels'] = array();
$json['data']['ret']['itemInfo'][14]['levels'][0]['selling']['credits'] = 12500;
$json['data']['ret']['itemInfo'][14]['levels'][0]['cdn']['30x30'] = '156cf2ddc0e14ff43bfe6552f1585f00';
$json['data']['ret']['itemInfo'][14]['levels'][0]['cdn']['63x63'] = 'cbf50911027835ffa8e9f190e42e7e00';
$json['data']['ret']['itemInfo'][14]['levels'][0]['cdn']['100x100'] = '803197c677b55ef80655269c1efc0100';
$json['data']['ret']['itemInfo'][15]['L'] = 11;
$json['data']['ret']['itemInfo'][15]['name'] = 'Repair-Bot Auto CPU';
$json['data']['ret']['itemInfo'][15]['T'] = 7;
$json['data']['ret']['itemInfo'][15]['C'] = 'special';
$json['data']['ret']['itemInfo'][15]['levels'] = array();
$json['data']['ret']['itemInfo'][15]['levels'][0]['selling']['credits'] = 25000;
$json['data']['ret']['itemInfo'][15]['levels'][0]['cdn']['30x30'] = 'b476120c9737e4789f1da17faaecf600';
$json['data']['ret']['itemInfo'][15]['levels'][0]['cdn']['63x63'] = 'a08b6fd485a562a84505c37f4b226200';
$json['data']['ret']['itemInfo'][15]['levels'][0]['cdn']['100x100'] = '862d24f30519c5e53a13f4d3ec995500';
$json['data']['ret']['itemInfo'][16]['L'] = 12;
$json['data']['ret']['itemInfo'][16]['name'] = 'SG3N-B01';
$json['data']['ret']['itemInfo'][16]['T'] = 4;
$json['data']['ret']['itemInfo'][16]['C'] = 'generator';
$json['data']['ret']['itemInfo'][16]['levels'] = array();
$json['data']['ret']['itemInfo'][16]['levels'][0]['selling']['credits'] = 62500;
$json['data']['ret']['itemInfo'][16]['levels'][0]['cdn']['30x30'] = 'e46db23c78d55f3cea22b36a7942e600';
$json['data']['ret']['itemInfo'][16]['levels'][0]['cdn']['63x63'] = '88a331209f4d8680e14a42962bf79400';
$json['data']['ret']['itemInfo'][16]['levels'][0]['cdn']['100x100'] = '15ad773d10eb9b696d049632d685c600';
$json['data']['ret']['itemInfo'][17]['L'] = 13;
$json['data']['ret']['itemInfo'][17]['name'] = 'G3N-7900';
$json['data']['ret']['itemInfo'][17]['T'] = 3;
$json['data']['ret']['itemInfo'][17]['C'] = 'generator';
$json['data']['ret']['itemInfo'][17]['levels'] = array();
$json['data']['ret']['itemInfo'][17]['levels'][0]['selling']['credits'] = 5000;
$json['data']['ret']['itemInfo'][17]['levels'][0]['cdn']['30x30'] = 'ea805e03b2d3fa173b723f1f846bc900';
$json['data']['ret']['itemInfo'][17]['levels'][0]['cdn']['63x63'] = '768dea8b4af9ee7381b707cc63f3ac00';
$json['data']['ret']['itemInfo'][17]['levels'][0]['cdn']['100x100'] = '6f332bdc590ad65c8095d1c303cebf00';
$json['data']['ret']['itemInfo'][18]['L'] = 14;
$json['data']['ret']['itemInfo'][18]['name'] = 'Xenomit';
$json['data']['ret']['itemInfo'][18]['T'] = 15;
$json['data']['ret']['itemInfo'][18]['C'] = 'ship';
$json['data']['ret']['itemInfo'][18]['levels'] = array();
$json['data']['ret']['itemInfo'][18]['levels'][0]['cdn']['30x30'] = 'd10e834af73134303743011556568a00';
$json['data']['ret']['itemInfo'][18]['levels'][0]['cdn']['63x63'] = 'ea8d8fe20c3a61d2cf90f913f8f48000';
$json['data']['ret']['itemInfo'][19]['L'] = 15;
$json['data']['ret']['itemInfo'][19]['name'] = 'PLT-2021';
$json['data']['ret']['itemInfo'][19]['T'] = 14;
$json['data']['ret']['itemInfo'][19]['C'] = 'battery';
$json['data']['ret']['itemInfo'][19]['levels'] = array();
$json['data']['ret']['itemInfo'][19]['levels'][0]['selling']['credits'] = 12;
$json['data']['ret']['itemInfo'][19]['levels'][0]['cdn']['30x30'] = 'b61ed2d31f27dca205aabf6825117d00';
$json['data']['ret']['itemInfo'][19]['levels'][0]['cdn']['63x63'] = '4913b7d593e9d812b05c4f3eaaf40100';
$json['data']['ret']['itemInfo'][19]['levels'][0]['cdn']['100x100'] = '57dc1c46160862d3e6e73e451764ab00';
$json['data']['ret']['itemInfo'][20]['L'] = 16;
$json['data']['ret']['itemInfo'][20]['name'] = 'PLT-2026';
$json['data']['ret']['itemInfo'][20]['T'] = 14;
$json['data']['ret']['itemInfo'][20]['C'] = 'battery';
$json['data']['ret']['itemInfo'][20]['levels'] = array();
$json['data']['ret']['itemInfo'][20]['levels'][0]['selling']['credits'] = 250;
$json['data']['ret']['itemInfo'][20]['levels'][0]['cdn']['30x30'] = '0eb7d727d0e8d7c05ad9121573a6b200';
$json['data']['ret']['itemInfo'][20]['levels'][0]['cdn']['63x63'] = 'c6bfdcd09949f7b61b98ead3c6773500';
$json['data']['ret']['itemInfo'][20]['levels'][0]['cdn']['100x100'] = '58fdf543bd4fbd7bfd7bcb011c9d1100';
$json['data']['ret']['itemInfo'][21]['L'] = 17;
$json['data']['ret']['itemInfo'][21]['name'] = 'LF-3';
$json['data']['ret']['itemInfo'][21]['T'] = 0;
$json['data']['ret']['itemInfo'][21]['C'] = 'laser';
$json['data']['ret']['itemInfo'][21]['levels'] = array();
$json['data']['ret']['itemInfo'][21]['levels'][0]['selling']['credits'] = 25000;
$json['data']['ret']['itemInfo'][21]['levels'][0]['cdn']['30x30'] = 'dc3f2118a4fae31b28744f5f69b53e00';
$json['data']['ret']['itemInfo'][21]['levels'][0]['cdn']['63x63'] = 'b8ec173f11257347acc378cf2b19c300';
$json['data']['ret']['itemInfo'][21]['levels'][0]['cdn']['100x100'] = '5ced49170920715d57158fe1773a4400';
$json['data']['ret']['itemInfo'][22]['L'] = 18;
$json['data']['ret']['itemInfo'][22]['name'] = 'Ammunition Buy CPU 1';
$json['data']['ret']['itemInfo'][22]['T'] = 7;
$json['data']['ret']['itemInfo'][22]['C'] = 'special';
$json['data']['ret']['itemInfo'][22]['levels'] = array();
$json['data']['ret']['itemInfo'][22]['levels'][0]['selling']['credits'] = 37500;
$json['data']['ret']['itemInfo'][22]['levels'][0]['cdn']['30x30'] = 'b958f5e2676c44aef2a6d784ba15ef00';
$json['data']['ret']['itemInfo'][22]['levels'][0]['cdn']['63x63'] = 'a217c1dc6139d3e5000022123d94cf00';
$json['data']['ret']['itemInfo'][22]['levels'][0]['cdn']['100x100'] = '21e336721d12e791fb7e7c6414d86300';
$json['data']['ret']['itemInfo'][23]['L'] = 8;
$json['data']['ret']['itemInfo'][23]['name'] = 'MCB-50';
$json['data']['ret']['itemInfo'][23]['T'] = 14;
$json['data']['ret']['itemInfo'][23]['C'] = 'special';
$json['data']['ret']['itemInfo'][23]['levels'] = array();
$json['data']['ret']['itemInfo'][23]['levels'][0]['selling']['credits'] = 37500;
$json['data']['ret']['itemInfo'][23]['levels'][0]['cdn']['30x30'] = 'b958f5e2676c44aef2a6d784ba15ef00';
$json['data']['ret']['itemInfo'][23]['levels'][0]['cdn']['63x63'] = 'a217c1dc6139d3e5000022123d94cf00';
$json['data']['ret']['itemInfo'][23]['levels'][0]['cdn']['100x100'] = '21e336721d12e791fb7e7c6414d86300';
$json['data']['ret']['itemInfo'][24]['L'] = 19;
$json['data']['ret']['itemInfo'][24]['name'] = 'Auto-Rocket CPU 1';
$json['data']['ret']['itemInfo'][24]['T'] = 7;
$json['data']['ret']['itemInfo'][24]['C'] = 'special';
$json['data']['ret']['itemInfo'][24]['levels'] = array();
$json['data']['ret']['itemInfo'][24]['levels'][0]['selling']['credits'] = 62500;
$json['data']['ret']['itemInfo'][24]['levels'][0]['cdn']['30x30'] = '75c5dc20096b5056351b29efd6ceb700';
$json['data']['ret']['itemInfo'][24]['levels'][0]['cdn']['63x63'] = 'ac60d633a4eba6f094d4744ece618200';
$json['data']['ret']['itemInfo'][24]['levels'][0]['cdn']['100x100'] = '30df149638e4298594447363931c9a00';
$json['data']['ret']['itemInfo'][25]['L'] = 20;
$json['data']['ret']['itemInfo'][25]['name'] = 'Hellstorm-Auto CPU 1';
$json['data']['ret']['itemInfo'][25]['T'] = 7;
$json['data']['ret']['itemInfo'][25]['C'] = 'special';
$json['data']['ret']['itemInfo'][25]['levels'] = array();
$json['data']['ret']['itemInfo'][25]['levels'][0]['selling']['credits'] = 62500;
$json['data']['ret']['itemInfo'][25]['levels'][0]['cdn']['30x30'] = 'ad70453dead7077704b34dcbef4b5d00';
$json['data']['ret']['itemInfo'][25]['levels'][0]['cdn']['63x63'] = 'f86e532f0605f1befc3efab402dfbd00';
$json['data']['ret']['itemInfo'][25]['levels'][0]['cdn']['100x100'] = 'c02ef79c7fb09afb18efa7bacb68e300';
$json['data']['ret']['itemInfo'][26]['L'] = 21;
$json['data']['ret']['itemInfo'][26]['name'] = 'Slot CPU 4';
$json['data']['ret']['itemInfo'][26]['T'] = 7;
$json['data']['ret']['itemInfo'][26]['C'] = 'special';
$json['data']['ret']['itemInfo'][26]['levels'] = array();
$json['data']['ret']['itemInfo'][26]['levels'][0]['selling']['credits'] = 1250000;
$json['data']['ret']['itemInfo'][26]['levels'][0]['cdn']['30x30'] = '1a05e234c920672ee54f9c303e9df300';
$json['data']['ret']['itemInfo'][26]['levels'][0]['cdn']['63x63'] = '33d7086513c36d8f5d70660993f70800';
$json['data']['ret']['itemInfo'][26]['levels'][0]['cdn']['100x100'] = '688a792d359998af68958acb7fbce500';
$json['data']['ret']['itemInfo'][27]['L'] = 22;
$json['data']['ret']['itemInfo'][27]['name'] = 'Rocket-Buy CPU 1';
$json['data']['ret']['itemInfo'][27]['T'] = 7;
$json['data']['ret']['itemInfo'][27]['C'] = 'special';
$json['data']['ret']['itemInfo'][27]['levels'] = array();
$json['data']['ret']['itemInfo'][27]['levels'][0]['selling']['credits'] = 37500;
$json['data']['ret']['itemInfo'][27]['levels'][0]['cdn']['30x30'] = 'abe256af4fdc99d78525c8bef7822200';
$json['data']['ret']['itemInfo'][27]['levels'][0]['cdn']['63x63'] = '2bf41c6f21d7b0f8d99de39d5134e400';
$json['data']['ret']['itemInfo'][27]['levels'][0]['cdn']['100x100'] = 'a0c408176a8fa5c7dd6f6a004164a00';
$json['data']['ret']['itemInfo'][28]['L'] = 28;
$json['data']['ret']['itemInfo'][28]['name'] = 'ECO-10';
$json['data']['ret']['itemInfo'][28]['T'] = 14;
$json['data']['ret']['itemInfo'][28]['C'] = 'battery';
$json['data']['ret']['itemInfo'][28]['levels'] = array();
$json['data']['ret']['itemInfo'][28]['levels'][0]['selling']['credits'] = 750;
$json['data']['ret']['itemInfo'][28]['levels'][0]['cdn']['30x30'] = 'a6bb8b0876c9563f87e928b0da2bd600';
$json['data']['ret']['itemInfo'][28]['levels'][0]['cdn']['63x63'] = '12045ffd885f2549b7898a8b541e2700';
$json['data']['ret']['itemInfo'][28]['levels'][0]['cdn']['100x100'] = '64ae584f553ab15e1dcacd7a7a595e00';
$json['data']['ret']['itemInfo'][29]['L'] = 54;
$json['data']['ret']['itemInfo'][29]['name'] = 'R-310';
$json['data']['ret']['itemInfo'][29]['T'] = 14;
$json['data']['ret']['itemInfo'][29]['C'] = 'battery';
$json['data']['ret']['itemInfo'][29]['levels'] = array();
$json['data']['ret']['itemInfo'][29]['levels'][0]['selling']['credits'] = 50;
$json['data']['ret']['itemInfo'][29]['levels'][0]['cdn']['30x30'] = '68af73bca9114add674a573fee166200';
$json['data']['ret']['itemInfo'][29]['levels'][0]['cdn']['63x63'] = 'bd4b785081ad98c8a38efd38c1443b00';
$json['data']['ret']['itemInfo'][29]['levels'][0]['cdn']['100x100'] = '9d29b47ca17ee0316f80a4bee39c9600';
$json['data']['ret']['itemInfo'][30]['L'] = 55;
$json['data']['ret']['itemInfo'][30]['name'] = 'PLT-3030';
$json['data']['ret']['itemInfo'][30]['T'] = 14;
$json['data']['ret']['itemInfo'][30]['C'] = 'battery';
$json['data']['ret']['itemInfo'][30]['levels'] = array();
$json['data']['ret']['itemInfo'][30]['levels'][0]['selling']['credits'] = 17;
$json['data']['ret']['itemInfo'][30]['levels'][0]['cdn']['30x30'] = 'f74083184d618e864737f9d02d88cc00';
$json['data']['ret']['itemInfo'][30]['levels'][0]['cdn']['63x63'] = 'f7a4edcb86596809deb924083bfcef00';
$json['data']['ret']['itemInfo'][30]['levels'][0]['cdn']['100x100'] = '43ea84fc8e020f3f93a7ae004be4b600';
$json['data']['ret']['itemInfo'][31]['L'] = 23;
$json['data']['ret']['itemInfo'][31]['name'] = 'Repair Robot 4';
$json['data']['ret']['itemInfo'][31]['T'] = 9;
$json['data']['ret']['itemInfo'][31]['C'] = 'special';
$json['data']['ret']['itemInfo'][31]['levels'] = array();
$json['data']['ret']['itemInfo'][31]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][31]['levels'][0]['cdn']['30x30'] = '245a28e891d9de0f67e70494e3912e00';
$json['data']['ret']['itemInfo'][31]['levels'][0]['cdn']['63x63'] = 'ad1d8c5d7166551c71182eecc5a67e00';
$json['data']['ret']['itemInfo'][31]['levels'][0]['cdn']['100x100'] = 'f319657ad942b61c8863b6492de48e00';
$json['data']['ret']['itemInfo'][32]['L'] = 24;
$json['data']['ret']['itemInfo'][32]['name'] = 'SG3N-B02';
$json['data']['ret']['itemInfo'][32]['T'] = 4;
$json['data']['ret']['itemInfo'][32]['C'] = 'generator';
$json['data']['ret']['itemInfo'][32]['levels'] = array();
$json['data']['ret']['itemInfo'][32]['levels'][0]['selling']['credits'] = 25000;
$json['data']['ret']['itemInfo'][32]['levels'][0]['cdn']['30x30'] = '21b02c8c30414a8f17b3926fffb5ca00';
$json['data']['ret']['itemInfo'][32]['levels'][0]['cdn']['63x63'] = 'b718b6cf1c30cde1d53056c8ad186c00';
$json['data']['ret']['itemInfo'][32]['levels'][0]['cdn']['100x100'] = 'b82b382ccdeaea0716ea15f49ff47300';
$json['data']['ret']['itemInfo'][33]['L'] = 25;
$json['data']['ret']['itemInfo'][33]['name'] = 'SAR-02';
$json['data']['ret']['itemInfo'][33]['T'] = 14;
$json['data']['ret']['itemInfo'][33]['C'] = 'battery';
$json['data']['ret']['itemInfo'][33]['levels'] = array();
$json['data']['ret']['itemInfo'][33]['levels'][0]['selling']['credits'] = 50;
$json['data']['ret']['itemInfo'][33]['levels'][0]['cdn']['30x30'] = '6622c2e830046ff7c3dfedd2f15a4400';
$json['data']['ret']['itemInfo'][33]['levels'][0]['cdn']['63x63'] = '2ffb6474019b25ee050b23c598ea4f00';
$json['data']['ret']['itemInfo'][33]['levels'][0]['cdn']['100x100'] = 'e71bbf67775146cacab9fd82bb4e5e00';
$json['data']['ret']['itemInfo'][34]['L'] = 26;
$json['data']['ret']['itemInfo'][34]['name'] = 'PLD-8';
$json['data']['ret']['itemInfo'][34]['T'] = 14;
$json['data']['ret']['itemInfo'][34]['C'] = 'battery';
$json['data']['ret']['itemInfo'][34]['levels'] = array();
$json['data']['ret']['itemInfo'][34]['levels'][0]['selling']['credits'] = 250;
$json['data']['ret']['itemInfo'][34]['levels'][0]['cdn']['30x30'] = 'ecf4f2113b1e9eaf205e7951cf095400';
$json['data']['ret']['itemInfo'][34]['levels'][0]['cdn']['63x63'] = 'd6e6ddf8da138658639a25468b067e00';
$json['data']['ret']['itemInfo'][34]['levels'][0]['cdn']['100x100'] = 'a36af5f0b4d96fdf49506edd3b42f300';
$json['data']['ret']['itemInfo'][35]['L'] = 27;
$json['data']['ret']['itemInfo'][35]['name'] = 'Wizard';
$json['data']['ret']['itemInfo'][35]['T'] = 14;
$json['data']['ret']['itemInfo'][35]['C'] = 'battery';
$json['data']['ret']['itemInfo'][35]['levels'] = array();
$json['data']['ret']['itemInfo'][35]['levels'][0]['selling']['credits'] = 250;
$json['data']['ret']['itemInfo'][35]['levels'][0]['cdn']['30x30'] = '522300456f6b4bec5164514cdccab400';
$json['data']['ret']['itemInfo'][35]['levels'][0]['cdn']['63x63'] = 'c358781d73d4ae07256403bf543ea400';
$json['data']['ret']['itemInfo'][35]['levels'][0]['cdn']['100x100'] = 'b4b7d1ed6af0a1b5031fb0a3a6861900';
$json['data']['ret']['itemInfo'][36]['L'] = 29;
$json['data']['ret']['itemInfo'][36]['name'] = 'SL-M01';
$json['data']['ret']['itemInfo'][36]['T'] = 14;
$json['data']['ret']['itemInfo'][36]['C'] = 'battery';
$json['data']['ret']['itemInfo'][36]['textReplace']['%TIME%'] = 5;
$json['data']['ret']['itemInfo'][36]['textReplace']['%AMOUNT%'] = 50;
$json['data']['ret']['itemInfo'][36]['levels'] = array();
$json['data']['ret']['itemInfo'][36]['levels'][0]['selling']['credits'] = 125;
$json['data']['ret']['itemInfo'][36]['levels'][0]['cdn']['30x30'] = '6e41e6ce998b8a3bb07ca1190d1deb00';
$json['data']['ret']['itemInfo'][36]['levels'][0]['cdn']['63x63'] = '7712a19b219d98191682ed7247715600';
$json['data']['ret']['itemInfo'][36]['levels'][0]['cdn']['100x100'] = '423a7429701436f742babda30b43bc00';
$json['data']['ret']['itemInfo'][37]['L'] = 30;
$json['data']['ret']['itemInfo'][37]['name'] = 'UCB-100';
$json['data']['ret']['itemInfo'][37]['T'] = 14;
$json['data']['ret']['itemInfo'][37]['C'] = 'battery';
$json['data']['ret']['itemInfo'][37]['levels'] = array();
$json['data']['ret']['itemInfo'][37]['levels'][0]['selling']['credits'] = 12;
$json['data']['ret']['itemInfo'][37]['levels'][0]['cdn']['30x30'] = '2e499cee32127be3df4cf200e1c73b00';
$json['data']['ret']['itemInfo'][37]['levels'][0]['cdn']['63x63'] = 'ae0e01beae2df1545d25728995151200';
$json['data']['ret']['itemInfo'][37]['levels'][0]['cdn']['100x100'] = 'b56716a7918c9bfb6fe917d63eefb700';
$json['data']['ret']['itemInfo'][38]['L'] = 31;
$json['data']['ret']['itemInfo'][38]['name'] = 'ACM 1';
$json['data']['ret']['itemInfo'][38]['T'] = 14;
$json['data']['ret']['itemInfo'][38]['C'] = 'battery';
$json['data']['ret']['itemInfo'][38]['levels'] = array();
$json['data']['ret']['itemInfo'][38]['levels'][0]['selling']['credits'] = 250;
$json['data']['ret']['itemInfo'][38]['levels'][0]['cdn']['30x30'] = '135566859f94cc51246f401ec8978200';
$json['data']['ret']['itemInfo'][38]['levels'][0]['cdn']['63x63'] = '084100df3c5bed4eea0af67e4c4bfd00';
$json['data']['ret']['itemInfo'][38]['levels'][0]['cdn']['100x100'] = '7111672f8762e1eb473248272678ea00';
$json['data']['ret']['itemInfo'][39]['L'] = 32;
$json['data']['ret']['itemInfo'][39]['name'] = 'BDR-1212';
$json['data']['ret']['itemInfo'][39]['T'] = 14;
$json['data']['ret']['itemInfo'][39]['C'] = 'battery';
$json['data']['ret']['itemInfo'][39]['levels'] = array();
$json['data']['ret']['itemInfo'][39]['levels'][0]['selling']['credits'] = 55;
$json['data']['ret']['itemInfo'][39]['levels'][0]['cdn']['30x30'] = 'da033620112a12d6e346e265cb871f00';
$json['data']['ret']['itemInfo'][39]['levels'][0]['cdn']['63x63'] = '235e1a716e4174baba964e9b04657f00';
$json['data']['ret']['itemInfo'][39]['levels'][0]['cdn']['100x100'] = '2f5603eb70f8c96c4be3e8451267fe00';
$json['data']['ret']['itemInfo'][40]['L'] = 33;
$json['data']['ret']['itemInfo'][40]['name'] = 'Fireworks 09M';
$json['data']['ret']['itemInfo'][40]['T'] = 14;
$json['data']['ret']['itemInfo'][40]['C'] = 'battery';
$json['data']['ret']['itemInfo'][40]['levels'] = array();
$json['data']['ret']['itemInfo'][40]['levels'][0]['selling']['credits'] = 25;
$json['data']['ret']['itemInfo'][40]['levels'][0]['cdn']['30x30'] = '32294c0f033f6141386acfd716474d00';
$json['data']['ret']['itemInfo'][40]['levels'][0]['cdn']['63x63'] = '97971aa7396b8a511a80cccf2be43600';
$json['data']['ret']['itemInfo'][40]['levels'][0]['cdn']['100x100'] = '8498a18b64bf5f7708d43735470f8900';
$json['data']['ret']['itemInfo'][41]['L'] = 34;
$json['data']['ret']['itemInfo'][41]['name'] = 'Fireworks 09L';
$json['data']['ret']['itemInfo'][41]['T'] = 14;
$json['data']['ret']['itemInfo'][41]['C'] = 'battery';
$json['data']['ret']['itemInfo'][41]['levels'] = array();
$json['data']['ret']['itemInfo'][41]['levels'][0]['selling']['credits'] = 50;
$json['data']['ret']['itemInfo'][41]['levels'][0]['cdn']['30x30'] = '9ab2e07e0db58a9a5019b81c5a54d200';
$json['data']['ret']['itemInfo'][41]['levels'][0]['cdn']['63x63'] = '03e220381c3f61536dc7e6f1bf5b6e00';
$json['data']['ret']['itemInfo'][41]['levels'][0]['cdn']['100x100'] = 'c28e07ba4d7d961366f82d9384a48b00';
$json['data']['ret']['itemInfo'][42]['L'] = 35;
$json['data']['ret']['itemInfo'][42]['name'] = 'Fireworks 09S';
$json['data']['ret']['itemInfo'][42]['T'] = 14;
$json['data']['ret']['itemInfo'][42]['C'] = 'battery';
$json['data']['ret']['itemInfo'][42]['levels'] = array();
$json['data']['ret']['itemInfo'][42]['levels'][0]['selling']['credits'] = 500;
$json['data']['ret']['itemInfo'][42]['levels'][0]['cdn']['30x30'] = 'f31d766e4172ea7da1d2da8691733200';
$json['data']['ret']['itemInfo'][42]['levels'][0]['cdn']['63x63'] = 'a45fdf5e4e251f9de4e49d2b4617ce00';
$json['data']['ret']['itemInfo'][42]['levels'][0]['cdn']['100x100'] = '7139453fccf623b7933eb477714e7300';
$json['data']['ret']['itemInfo'][43]['L'] = 36;
$json['data']['ret']['itemInfo'][43]['name'] = 'Seprom';
$json['data']['ret']['itemInfo'][43]['T'] = 15;
$json['data']['ret']['itemInfo'][43]['C'] = 'ship';
$json['data']['ret']['itemInfo'][43]['levels'] = array();
$json['data']['ret']['itemInfo'][43]['levels'][0]['cdn']['30x30'] = '8bd534e55e350281963526f256a13f00';
$json['data']['ret']['itemInfo'][43]['levels'][0]['cdn']['63x63'] = 'a8d0853733ebc9f36141d86c2e354900';
$json['data']['ret']['itemInfo'][44]['L'] = 37;
$json['data']['ret']['itemInfo'][44]['name'] = 'EMP-M01';
$json['data']['ret']['itemInfo'][44]['T'] = 14;
$json['data']['ret']['itemInfo'][44]['C'] = 'battery';
$json['data']['ret']['itemInfo'][44]['levels'] = array();
$json['data']['ret']['itemInfo'][44]['levels'][0]['selling']['credits'] = 375;
$json['data']['ret']['itemInfo'][44]['levels'][0]['cdn']['30x30'] = 'b5bbdd393160dea5072c9c29925fb600';
$json['data']['ret']['itemInfo'][44]['levels'][0]['cdn']['63x63'] = '23688e527b8f6d6263134a5cbcc8b100';
$json['data']['ret']['itemInfo'][44]['levels'][0]['cdn']['100x100'] = '38b506ca821f324b01415507d2df3900';
$json['data']['ret']['itemInfo'][45]['L'] = 38;
$json['data']['ret']['itemInfo'][45]['name'] = 'SAB-M01';
$json['data']['ret']['itemInfo'][45]['T'] = 14;
$json['data']['ret']['itemInfo'][45]['C'] = 'battery';
$json['data']['ret']['itemInfo'][45]['levels'] = array();
$json['data']['ret']['itemInfo'][45]['levels'][0]['selling']['credits'] = 375;
$json['data']['ret']['itemInfo'][45]['levels'][0]['cdn']['30x30'] = '9a5f9f1601210579c27e8ad45cf4ec00';
$json['data']['ret']['itemInfo'][45]['levels'][0]['cdn']['63x63'] = 'c9d8d6a03a9d4881b09cc2409b056f00';
$json['data']['ret']['itemInfo'][45]['levels'][0]['cdn']['100x100'] = '4c7dd63001053a9de0c5d3d335470e00';
$json['data']['ret']['itemInfo'][46]['L'] = 39;
$json['data']['ret']['itemInfo'][46]['name'] = 'HST-2';
$json['data']['ret']['itemInfo'][46]['T'] = 1;
$json['data']['ret']['itemInfo'][46]['C'] = 'laser';
$json['data']['ret']['itemInfo'][46]['levels'] = array();
$json['data']['ret']['itemInfo'][46]['levels'][0]['selling']['credits'] = 37500;
$json['data']['ret']['itemInfo'][46]['levels'][0]['cdn']['30x30'] = 'b50011779dba406b663876c313436c00';
$json['data']['ret']['itemInfo'][46]['levels'][0]['cdn']['63x63'] = 'db076f6c66bc0760c650bd1e5a5c2c00';
$json['data']['ret']['itemInfo'][46]['levels'][0]['cdn']['100x100'] = '189476e918a7a7c792f09272db412400';
$json['data']['ret']['itemInfo'][47]['L'] = 40;
$json['data']['ret']['itemInfo'][47]['name'] = 'HSTRM-01';
$json['data']['ret']['itemInfo'][47]['T'] = 14;
$json['data']['ret']['itemInfo'][47]['C'] = 'battery';
$json['data']['ret']['itemInfo'][47]['levels'] = array();
$json['data']['ret']['itemInfo'][47]['levels'][0]['selling']['credits'] = 62;
$json['data']['ret']['itemInfo'][47]['levels'][0]['cdn']['30x30'] = '806ebd3b5a8e565af5a30e382af05100';
$json['data']['ret']['itemInfo'][47]['levels'][0]['cdn']['63x63'] = 'df51889c45224761dd5d715d0545af00';
$json['data']['ret']['itemInfo'][47]['levels'][0]['cdn']['100x100'] = 'be2503f2e93334f320dce9156363fc00';
$json['data']['ret']['itemInfo'][48]['L'] = 41;
$json['data']['ret']['itemInfo'][48]['name'] = 'LF-4';
$json['data']['ret']['itemInfo'][48]['T'] = 0;
$json['data']['ret']['itemInfo'][48]['C'] = 'laser';
$json['data']['ret']['itemInfo'][48]['levels'] = array();
$json['data']['ret']['itemInfo'][48]['levels'][0]['selling']['credits'] = 75000;
$json['data']['ret']['itemInfo'][48]['levels'][0]['cdn']['30x30'] = '12046c7960d4b8dcb3b42b9ae3bbbe00';
$json['data']['ret']['itemInfo'][48]['levels'][0]['cdn']['63x63'] = 'ddd3dc54b0e1fad5c7d893c9d1b19400';
$json['data']['ret']['itemInfo'][48]['levels'][0]['cdn']['100x100'] = 'eb976bb32197c21a8b6be56eb65e1d00';
$json['data']['ret']['itemInfo'][49]['L'] = 42;
$json['data']['ret']['itemInfo'][49]['name'] = 'DD-M01';
$json['data']['ret']['itemInfo'][49]['T'] = 14;
$json['data']['ret']['itemInfo'][49]['C'] = 'battery';
$json['data']['ret']['itemInfo'][49]['levels'] = array();
$json['data']['ret']['itemInfo'][49]['levels'][0]['selling']['credits'] = 375;
$json['data']['ret']['itemInfo'][49]['levels'][0]['cdn']['30x30'] = 'c8300a9d1b414c5dc4e868daf247e100';
$json['data']['ret']['itemInfo'][49]['levels'][0]['cdn']['63x63'] = '9a5703e6ad36fdf964bc16299934e000';
$json['data']['ret']['itemInfo'][49]['levels'][0]['cdn']['100x100'] = '7041b21050caa6ba09b52096aadf7400';
$json['data']['ret']['itemInfo'][50]['L'] = 43;
$json['data']['ret']['itemInfo'][50]['name'] = 'Laser Turret Module - Mid Range';
$json['data']['ret']['itemInfo'][50]['T'] = 18;
$json['data']['ret']['itemInfo'][50]['C'] = 'module';
$json['data']['ret']['itemInfo'][50]['levels'] = array();
$json['data']['ret']['itemInfo'][50]['levels'][0]['selling']['credits'] = 5000;
$json['data']['ret']['itemInfo'][50]['levels'][0]['cdn']['30x30'] = 'cddbcf50789a8fc0a0047a06b57a2900';
$json['data']['ret']['itemInfo'][50]['levels'][0]['cdn']['63x63'] = 'e7ff5188f0e15ac83c8cdafb20c96100';
$json['data']['ret']['itemInfo'][50]['levels'][0]['cdn']['100x100'] = 'e9f0a1183b88a78720b445536dd12c00';
$json['data']['ret']['itemInfo'][51]['L'] = 44;
$json['data']['ret']['itemInfo'][51]['name'] = 'Rocket Turbo 1';
$json['data']['ret']['itemInfo'][51]['T'] = 7;
$json['data']['ret']['itemInfo'][51]['C'] = 'special';
$json['data']['ret']['itemInfo'][51]['levels'] = array();
$json['data']['ret']['itemInfo'][51]['levels'][0]['selling']['credits'] = 25000;
$json['data']['ret']['itemInfo'][51]['levels'][0]['cdn']['30x30'] = '9670fe405d1999f3e075d4e065cd8700';
$json['data']['ret']['itemInfo'][51]['levels'][0]['cdn']['63x63'] = '6ecb7fdfb1593bb65b43b39476aae200';
$json['data']['ret']['itemInfo'][51]['levels'][0]['cdn']['100x100'] = '92eb30597b6a0e5e739c25ca824c4100';
$json['data']['ret']['itemInfo'][52]['L'] = 45;
$json['data']['ret']['itemInfo'][52]['name'] = 'Cargo Compressor';
$json['data']['ret']['itemInfo'][52]['T'] = 10;
$json['data']['ret']['itemInfo'][52]['C'] = 'special';
$json['data']['ret']['itemInfo'][52]['levels'] = array();
$json['data']['ret']['itemInfo'][52]['levels'][0]['selling']['credits'] = 25000;
$json['data']['ret']['itemInfo'][52]['levels'][0]['cdn']['30x30'] = 'a65e0a5ff26274b490f9980a2ee9d900';
$json['data']['ret']['itemInfo'][52]['levels'][0]['cdn']['63x63'] = '472cdbd24653ffd02cfa9d78f109c700';
$json['data']['ret']['itemInfo'][52]['levels'][0]['cdn']['100x100'] = '52722009436318d043bee1373878f500';
$json['data']['ret']['itemInfo'][53]['L'] = 46;
$json['data']['ret']['itemInfo'][53]['name'] = 'Radar CPU';
$json['data']['ret']['itemInfo'][53]['T'] = 7;
$json['data']['ret']['itemInfo'][53]['C'] = 'special';
$json['data']['ret']['itemInfo'][53]['levels'] = array();
$json['data']['ret']['itemInfo'][53]['levels'][0]['selling']['credits'] = 37500;
$json['data']['ret']['itemInfo'][53]['levels'][0]['cdn']['30x30'] = '38460efefdf781692acac6ff10fc5900';
$json['data']['ret']['itemInfo'][53]['levels'][0]['cdn']['63x63'] = '7849dcc2fef033269c2d3473ca522300';
$json['data']['ret']['itemInfo'][53]['levels'][0]['cdn']['100x100'] = '597c2f3075c6a0453bae7dd1902dda00';
$json['data']['ret']['itemInfo'][54]['L'] = 47;
$json['data']['ret']['itemInfo'][54]['name'] = 'Advanced Jump CPU 1';
$json['data']['ret']['itemInfo'][54]['T'] = 7;
$json['data']['ret']['itemInfo'][54]['C'] = 'special';
$json['data']['ret']['itemInfo'][54]['levels'] = array();
$json['data']['ret']['itemInfo'][54]['levels'][0]['selling']['credits'] = 178500;
$json['data']['ret']['itemInfo'][54]['levels'][0]['cdn']['30x30'] = '513cb86be4b07adda776f39f45147800';
$json['data']['ret']['itemInfo'][54]['levels'][0]['cdn']['63x63'] = '7799fecfd4fce1f89d900d4304c21000';
$json['data']['ret']['itemInfo'][54]['levels'][0]['cdn']['100x100'] = 'd4c05b61300e6f836963dd6d27bb6600';
$json['data']['ret']['itemInfo'][55]['L'] = 48;
$json['data']['ret']['itemInfo'][55]['name'] = 'Blueprint - Apis Part';
$json['data']['ret']['itemInfo'][55]['T'] = 25;
$json['data']['ret']['itemInfo'][55]['C'] = 'special';
$json['data']['ret']['itemInfo'][55]['levels'] = array();
$json['data']['ret']['itemInfo'][55]['levels'][0]['cdn']['30x30'] = '9dc8a706550809bf37253db69962b400';
$json['data']['ret']['itemInfo'][55]['levels'][0]['cdn']['63x63'] = '37459d31f6c40151ebb709c1cf940b00';
$json['data']['ret']['itemInfo'][56]['L'] = 49;
$json['data']['ret']['itemInfo'][56]['name'] = 'Palladium';
$json['data']['ret']['itemInfo'][56]['T'] = 15;
$json['data']['ret']['itemInfo'][56]['C'] = 'ship';
$json['data']['ret']['itemInfo'][56]['levels'] = array();
$json['data']['ret']['itemInfo'][56]['levels'][0]['cdn']['30x30'] = '739d31694cf4adb3efc93ff72d516d00';
$json['data']['ret']['itemInfo'][56]['levels'][0]['cdn']['63x63'] = '1265217356d6dda552d24354897afc00';
$json['data']['ret']['itemInfo'][57]['L'] = 56;
$json['data']['ret']['itemInfo'][57]['name'] = 'Booty Key';
$json['data']['ret']['itemInfo'][57]['T'] = 15;
$json['data']['ret']['itemInfo'][57]['C'] = 'special';
$json['data']['ret']['itemInfo'][57]['levels'] = array();
$json['data']['ret']['itemInfo'][57]['levels'][0]['cdn']['30x30'] = 'ffbc72514edc29adbcb69b1da2c23a00';
$json['data']['ret']['itemInfo'][57]['levels'][0]['cdn']['63x63'] = '2c2649217fac98e086c9cd8fcec30300';
$json['data']['ret']['itemInfo'][57]['levels'][0]['cdn']['100x100'] = 'ef618aff20a6e2bcc88d806284cfcb00';
$json['data']['ret']['itemInfo'][58]['L'] = 57;
$json['data']['ret']['itemInfo'][58]['name'] = 'RSB-75';
$json['data']['ret']['itemInfo'][58]['T'] = 14;
$json['data']['ret']['itemInfo'][58]['C'] = 'battery';
$json['data']['ret']['itemInfo'][58]['levels'] = array();
$json['data']['ret']['itemInfo'][58]['levels'][0]['selling']['credits'] = 12;
$json['data']['ret']['itemInfo'][58]['levels'][0]['cdn']['30x30'] = '12c893d480540c5fc1279664048b4100';
$json['data']['ret']['itemInfo'][58]['levels'][0]['cdn']['63x63'] = '50206543ccd2bc1002d106f117756600';
$json['data']['ret']['itemInfo'][58]['levels'][0]['cdn']['100x100'] = '48f8b984ca0a6fe6294c143a17b2ca00';
$json['data']['ret']['itemInfo'][59]['L'] = 58;
$json['data']['ret']['itemInfo'][59]['name'] = 'Prometium';
$json['data']['ret']['itemInfo'][59]['T'] = 15;
$json['data']['ret']['itemInfo'][59]['C'] = 'ship';
$json['data']['ret']['itemInfo'][59]['levels'] = array();
$json['data']['ret']['itemInfo'][59]['levels'][0]['cdn']['30x30'] = '3dfd3ed97d4f5b039d81aa3d0ba3cd00';
$json['data']['ret']['itemInfo'][59]['levels'][0]['cdn']['63x63'] = 'cea1d899667583722409741b9ab5b400';
$json['data']['ret']['itemInfo'][60]['L'] = 59;
$json['data']['ret']['itemInfo'][60]['name'] = 'Endurium';
$json['data']['ret']['itemInfo'][60]['T'] = 15;
$json['data']['ret']['itemInfo'][60]['C'] = 'ship';
$json['data']['ret']['itemInfo'][60]['levels'] = array();
$json['data']['ret']['itemInfo'][60]['levels'][0]['cdn']['30x30'] = 'a5481c8246e83a82988db623e3e53100';
$json['data']['ret']['itemInfo'][60]['levels'][0]['cdn']['63x63'] = '458fc20aa365cf46032ec748fa143500';
$json['data']['ret']['itemInfo'][61]['L'] = 60;
$json['data']['ret']['itemInfo'][61]['name'] = 'Terbium';
$json['data']['ret']['itemInfo'][61]['T'] = 15;
$json['data']['ret']['itemInfo'][61]['C'] = 'ship';
$json['data']['ret']['itemInfo'][61]['levels'] = array();
$json['data']['ret']['itemInfo'][61]['levels'][0]['cdn']['30x30'] = 'e973ca28960c9f31091c08cc57157e00';
$json['data']['ret']['itemInfo'][61]['levels'][0]['cdn']['63x63'] = '6c2fb01e0f3e51a3ed2965d63a707900';
$json['data']['ret']['itemInfo'][62]['L'] = 61;
$json['data']['ret']['itemInfo'][62]['name'] = 'Prometid';
$json['data']['ret']['itemInfo'][62]['T'] = 15;
$json['data']['ret']['itemInfo'][62]['C'] = 'ship';
$json['data']['ret']['itemInfo'][62]['levels'] = array();
$json['data']['ret']['itemInfo'][62]['levels'][0]['cdn']['30x30'] = 'df535e1d9dd1deabcff16d7a4fdb2f00';
$json['data']['ret']['itemInfo'][62]['levels'][0]['cdn']['63x63'] = '1e8dbf2955df6513a172a28b57fbc800';
$json['data']['ret']['itemInfo'][63]['L'] = 62;
$json['data']['ret']['itemInfo'][63]['name'] = 'Duranium';
$json['data']['ret']['itemInfo'][63]['T'] = 15;
$json['data']['ret']['itemInfo'][63]['C'] = 'ship';
$json['data']['ret']['itemInfo'][63]['levels'] = array();
$json['data']['ret']['itemInfo'][63]['levels'][0]['cdn']['30x30'] = '6bb6f068deff7b4d7f311e82cda5f600';
$json['data']['ret']['itemInfo'][63]['levels'][0]['cdn']['63x63'] = 'c027e1e4299b8f6bca072a13a4b8300';
$json['data']['ret']['itemInfo'][64]['L'] = 63;
$json['data']['ret']['itemInfo'][64]['name'] = 'Promerium';
$json['data']['ret']['itemInfo'][64]['T'] = 15;
$json['data']['ret']['itemInfo'][64]['C'] = 'ship';
$json['data']['ret']['itemInfo'][64]['levels'] = array();
$json['data']['ret']['itemInfo'][64]['levels'][0]['cdn']['30x30'] = 'e814113277b6260618e4ab5969e20a00';
$json['data']['ret']['itemInfo'][64]['levels'][0]['cdn']['63x63'] = 'b244214822eee368245b2940e1b5300';
$json['data']['ret']['itemInfo'][65]['L'] = 64;
$json['data']['ret']['itemInfo'][65]['name'] = 'CBO-100';
$json['data']['ret']['itemInfo'][65]['T'] = 14;
$json['data']['ret']['itemInfo'][65]['C'] = 'battery';
$json['data']['ret']['itemInfo'][65]['levels'] = array();
$json['data']['ret']['itemInfo'][65]['levels'][0]['selling']['credits'] = 375;
$json['data']['ret']['itemInfo'][65]['levels'][0]['cdn']['30x30'] = 'db93d3453bc121ed8ce8347aad962d00';
$json['data']['ret']['itemInfo'][65]['levels'][0]['cdn']['63x63'] = '832dc957ba163cef756386d74c7ad300';
$json['data']['ret']['itemInfo'][65]['levels'][0]['cdn']['100x100'] = 'ebfb7a43a0b8ae1a28ca3a20588b8600';
$json['data']['ret']['itemInfo'][66]['L'] = 65;
$json['data']['ret']['itemInfo'][66]['name'] = 'DCR-250';
$json['data']['ret']['itemInfo'][66]['T'] = 14;
$json['data']['ret']['itemInfo'][66]['C'] = 'battery';
$json['data']['ret']['itemInfo'][66]['levels'] = array();
$json['data']['ret']['itemInfo'][66]['levels'][0]['selling']['credits'] = 250;
$json['data']['ret']['itemInfo'][66]['levels'][0]['cdn']['30x30'] = '65a635a931ead9d7948c4539e4edb300';
$json['data']['ret']['itemInfo'][66]['levels'][0]['cdn']['63x63'] = '4aba291a99722abe227bccbf8989cd00';
$json['data']['ret']['itemInfo'][66]['levels'][0]['cdn']['100x100'] = 'afa8d1471065deb26672ce7c88c9ab00';
$json['data']['ret']['itemInfo'][67]['L'] = 66;
$json['data']['ret']['itemInfo'][67]['name'] = 'UBR-100';
$json['data']['ret']['itemInfo'][67]['T'] = 14;
$json['data']['ret']['itemInfo'][67]['C'] = 'battery';
$json['data']['ret']['itemInfo'][67]['levels'] = array();
$json['data']['ret']['itemInfo'][67]['levels'][0]['selling']['credits'] = 62;
$json['data']['ret']['itemInfo'][67]['levels'][0]['cdn']['30x30'] = 'eb3e5b22d91cc6445902fb1f0862d200';
$json['data']['ret']['itemInfo'][67]['levels'][0]['cdn']['63x63'] = 'da933c5c09121a0b39f6d573ec8c4700';
$json['data']['ret']['itemInfo'][67]['levels'][0]['cdn']['100x100'] = 'c6ca51af1bb56f163268ae1f5564f400';
$json['data']['ret']['itemInfo'][68]['L'] = 67;
$json['data']['ret']['itemInfo'][68]['name'] = 'SAR-01';
$json['data']['ret']['itemInfo'][68]['T'] = 14;
$json['data']['ret']['itemInfo'][68]['C'] = 'battery';
$json['data']['ret']['itemInfo'][68]['levels'] = array();
$json['data']['ret']['itemInfo'][68]['levels'][0]['selling']['credits'] = 62;
$json['data']['ret']['itemInfo'][68]['levels'][0]['cdn']['30x30'] = '34c10962ae93f40d84b8a08f1f433f00';
$json['data']['ret']['itemInfo'][68]['levels'][0]['cdn']['63x63'] = 'e3af8f0c66922b9d0a7654a47f01000';
$json['data']['ret']['itemInfo'][68]['levels'][0]['cdn']['100x100'] = '8a240cd56aafb6e2f731693a9eda5c00';
$json['data']['ret']['itemInfo'][69]['L'] = 68;
$json['data']['ret']['itemInfo'][69]['name'] = 'CBR';
$json['data']['ret']['itemInfo'][69]['T'] = 14;
$json['data']['ret']['itemInfo'][69]['C'] = 'battery';
$json['data']['ret']['itemInfo'][69]['levels'] = array();
$json['data']['ret']['itemInfo'][69]['levels'][0]['selling']['credits'] = 62;
$json['data']['ret']['itemInfo'][69]['levels'][0]['cdn']['30x30'] = 'b10e1faead68930ee8f6a4f3c20d1700';
$json['data']['ret']['itemInfo'][69]['levels'][0]['cdn']['63x63'] = '4d2f59cc61f9af5b5e60bd486f620200';
$json['data']['ret']['itemInfo'][69]['levels'][0]['cdn']['100x100'] = '7c63e13d99624851eb73cdb866482400';
$json['data']['ret']['itemInfo'][70]['L'] = 69;
$json['data']['ret']['itemInfo'][70]['name'] = 'Repair Robot 1';
$json['data']['ret']['itemInfo'][70]['T'] = 9;
$json['data']['ret']['itemInfo'][70]['C'] = 'special';
$json['data']['ret']['itemInfo'][70]['levels'] = array();
$json['data']['ret']['itemInfo'][70]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][70]['levels'][0]['cdn']['30x30'] = '97af32751588b8430fac9b699c19b600';
$json['data']['ret']['itemInfo'][70]['levels'][0]['cdn']['63x63'] = 'edf977c8aee8eae95927fa2a6ceced00';
$json['data']['ret']['itemInfo'][70]['levels'][0]['cdn']['100x100'] = '40bf974da2bd1ca828036a84bebf3900';
$json['data']['ret']['itemInfo'][71]['L'] = 70;
$json['data']['ret']['itemInfo'][71]['name'] = 'Repair Robot 2';
$json['data']['ret']['itemInfo'][71]['T'] = 9;
$json['data']['ret']['itemInfo'][71]['C'] = 'special';
$json['data']['ret']['itemInfo'][71]['levels'] = array();
$json['data']['ret']['itemInfo'][71]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][71]['levels'][0]['cdn']['30x30'] = 'e24096312c50b1d21fa3210bcb375a00';
$json['data']['ret']['itemInfo'][71]['levels'][0]['cdn']['63x63'] = 'dd0c4c214428f0aa690c0ee3e5fdf500';
$json['data']['ret']['itemInfo'][71]['levels'][0]['cdn']['100x100'] = '90cbd18d53f4340e7a28254367338800';
$json['data']['ret']['itemInfo'][72]['L'] = 71;
$json['data']['ret']['itemInfo'][72]['name'] = 'Repair Robot 3';
$json['data']['ret']['itemInfo'][72]['T'] = 9;
$json['data']['ret']['itemInfo'][72]['C'] = 'special';
$json['data']['ret']['itemInfo'][72]['levels'] = array();
$json['data']['ret']['itemInfo'][72]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][72]['levels'][0]['cdn']['30x30'] = '7ee2b08d9e7d1fc4cf84a0f3d70d7700';
$json['data']['ret']['itemInfo'][72]['levels'][0]['cdn']['63x63'] = 'e37e71fcb60e174b103aa397522f8400';
$json['data']['ret']['itemInfo'][72]['levels'][0]['cdn']['100x100'] = '3417fb53c3493f1d8baf68c70e8da400';
$json['data']['ret']['itemInfo'][73]['L'] = 72;
$json['data']['ret']['itemInfo'][73]['name'] = 'Mine Turbo';
$json['data']['ret']['itemInfo'][73]['T'] = 9;
$json['data']['ret']['itemInfo'][73]['C'] = 'special';
$json['data']['ret']['itemInfo'][73]['levels'] = array();
$json['data']['ret']['itemInfo'][73]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][73]['levels'][0]['cdn']['30x30'] = 'f5ab19ee9afbb11bda57d07a1501c900';
$json['data']['ret']['itemInfo'][73]['levels'][0]['cdn']['63x63'] = '270e37e5766c4189d592f6ee1c1b8700';
$json['data']['ret']['itemInfo'][73]['levels'][0]['cdn']['100x100'] = '400dcee2a5b91e04547080457ffa8900';
$json['data']['ret']['itemInfo'][74]['L'] = 73;
$json['data']['ret']['itemInfo'][74]['name'] = 'CPU Mine Turbo';
$json['data']['ret']['itemInfo'][74]['T'] = 9;
$json['data']['ret']['itemInfo'][74]['C'] = 'special';
$json['data']['ret']['itemInfo'][74]['levels'] = array();
$json['data']['ret']['itemInfo'][74]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][74]['levels'][0]['cdn']['30x30'] = 'f7e8d54dd3c17591084c4bf1f2854100';
$json['data']['ret']['itemInfo'][74]['levels'][0]['cdn']['63x63'] = '6df6600f801c02ffa658825604118f00';
$json['data']['ret']['itemInfo'][74]['levels'][0]['cdn']['100x100'] = 'e29b05eeb8152c061a02f425c66a7400';
$json['data']['ret']['itemInfo'][75]['L'] = 74;
$json['data']['ret']['itemInfo'][75]['name'] = 'Camouflage';
$json['data']['ret']['itemInfo'][75]['T'] = 9;
$json['data']['ret']['itemInfo'][75]['C'] = 'special';
$json['data']['ret']['itemInfo'][75]['levels'] = array();
$json['data']['ret']['itemInfo'][75]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][75]['levels'][0]['cdn']['30x30'] = 'ff4a801692d7e78b75491daa5af27300';
$json['data']['ret']['itemInfo'][75]['levels'][0]['cdn']['63x63'] = '4a89f361f6c950d480ffe842166e4d00';
$json['data']['ret']['itemInfo'][75]['levels'][0]['cdn']['100x100'] = '5579d611e2f505fd3317a4ee4e70ee00';
$json['data']['ret']['itemInfo'][76]['L'] = 75;
$json['data']['ret']['itemInfo'][76]['name'] = 'CPU de Camuflagem';
$json['data']['ret']['itemInfo'][76]['T'] = 9;
$json['data']['ret']['itemInfo'][76]['C'] = 'special';
$json['data']['ret']['itemInfo'][76]['levels'] = array();
$json['data']['ret']['itemInfo'][76]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][76]['levels'][0]['cdn']['30x30'] = '69d7b48403e27694ba1e567c65ede300';
$json['data']['ret']['itemInfo'][76]['levels'][0]['cdn']['63x63'] = '2389a6be163abc512ad8845f53494400';
$json['data']['ret']['itemInfo'][76]['levels'][0]['cdn']['100x100'] = '44ceb70cb4a7cfd94ec4b75708208a00';
$json['data']['ret']['itemInfo'][77]['L'] = 76;
$json['data']['ret']['itemInfo'][77]['name'] = 'CPU de Camuflagem XL';
$json['data']['ret']['itemInfo'][77]['T'] = 9;
$json['data']['ret']['itemInfo'][77]['C'] = 'special';
$json['data']['ret']['itemInfo'][77]['levels'] = array();
$json['data']['ret']['itemInfo'][77]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][77]['levels'][0]['cdn']['30x30'] = '7064cbe10da5fddb20fa4cd47f403100';
$json['data']['ret']['itemInfo'][77]['levels'][0]['cdn']['63x63'] = '3c3954049d50e00d9e4c41e2455cde00';
$json['data']['ret']['itemInfo'][77]['levels'][0]['cdn']['100x100'] = '5378f0fbbdf4e36ee572672a89967e00';
$json['data']['ret']['itemInfo'][78]['L'] = 77;
$json['data']['ret']['itemInfo'][78]['name'] = 'CPU de Laboratório';
$json['data']['ret']['itemInfo'][78]['T'] = 9;
$json['data']['ret']['itemInfo'][78]['C'] = 'special';
$json['data']['ret']['itemInfo'][78]['levels'] = array();
$json['data']['ret']['itemInfo'][78]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][78]['levels'][0]['cdn']['30x30'] = 'ab35aad749b236d4975a977110ff1400';
$json['data']['ret']['itemInfo'][78]['levels'][0]['cdn']['63x63'] = 'ec1c7aae930d30936fdeb954b1bc2000';
$json['data']['ret']['itemInfo'][78]['levels'][0]['cdn']['100x100'] = 'b4df32b610682314306316c06eed2600';
$json['data']['ret']['itemInfo'][79]['L'] = 78;
$json['data']['ret']['itemInfo'][79]['name'] = 'CPU 2 - Labor';
$json['data']['ret']['itemInfo'][79]['T'] = 9;
$json['data']['ret']['itemInfo'][79]['C'] = 'special';
$json['data']['ret']['itemInfo'][79]['levels'] = array();
$json['data']['ret']['itemInfo'][79]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][79]['levels'][0]['cdn']['30x30'] = '99848aaf0ac0f38978aae0ae6aac3500';
$json['data']['ret']['itemInfo'][79]['levels'][0]['cdn']['63x63'] = '3c497366b02260af50dc4dc22b257200';
$json['data']['ret']['itemInfo'][79]['levels'][0]['cdn']['100x100'] = 'dd4d95f1e348e27ba53a6edf5f0ae000';
$json['data']['ret']['itemInfo'][80]['L'] = 79;
$json['data']['ret']['itemInfo'][80]['name'] = 'CPU 3 - Lab.';
$json['data']['ret']['itemInfo'][80]['T'] = 9;
$json['data']['ret']['itemInfo'][80]['C'] = 'special';
$json['data']['ret']['itemInfo'][80]['levels'] = array();
$json['data']['ret']['itemInfo'][80]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][80]['levels'][0]['cdn']['30x30'] = '7dd3ea69155e835d98374c9974dab800';
$json['data']['ret']['itemInfo'][80]['levels'][0]['cdn']['63x63'] = '64c6d5d1eb9e944ccde6cebf5f3a3900';
$json['data']['ret']['itemInfo'][80]['levels'][0]['cdn']['100x100'] = '6fdf3acc1f31b4df0c353bbcd470f400';
$json['data']['ret']['itemInfo'][81]['L'] = 80;
$json['data']['ret']['itemInfo'][81]['name'] = 'Armory Upgrade 1';
$json['data']['ret']['itemInfo'][81]['T'] = 9;
$json['data']['ret']['itemInfo'][81]['C'] = 'special';
$json['data']['ret']['itemInfo'][81]['levels'] = array();
$json['data']['ret']['itemInfo'][81]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][81]['levels'][0]['cdn']['30x30'] = '5b5088d2c981e0cd73df005aca6ed700';
$json['data']['ret']['itemInfo'][81]['levels'][0]['cdn']['63x63'] = '635279b6d663b3652e7074336543db00';
$json['data']['ret']['itemInfo'][81]['levels'][0]['cdn']['100x100'] = '46757641047c86c7f07da1a35ccfb000';
$json['data']['ret']['itemInfo'][82]['L'] = 81;
$json['data']['ret']['itemInfo'][82]['name'] = 'Armory Upgrade 2';
$json['data']['ret']['itemInfo'][82]['T'] = 9;
$json['data']['ret']['itemInfo'][82]['C'] = 'special';
$json['data']['ret']['itemInfo'][82]['levels'] = array();
$json['data']['ret']['itemInfo'][82]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][82]['levels'][0]['cdn']['30x30'] = 'ae7bb5c8e700673a44d4ff081ca01900';
$json['data']['ret']['itemInfo'][82]['levels'][0]['cdn']['63x63'] = '9269d541d93e9f1fe009f6c7b8a18600';
$json['data']['ret']['itemInfo'][82]['levels'][0]['cdn']['100x100'] = 'b3287b51cb87d9da908c44fb22bc5000';
$json['data']['ret']['itemInfo'][83]['L'] = 82;
$json['data']['ret']['itemInfo'][83]['name'] = 'Armory Upgrade 3';
$json['data']['ret']['itemInfo'][83]['T'] = 9;
$json['data']['ret']['itemInfo'][83]['C'] = 'special';
$json['data']['ret']['itemInfo'][83]['levels'] = array();
$json['data']['ret']['itemInfo'][83]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][83]['levels'][0]['cdn']['30x30'] = '17199cbe04adefc915a5d23d889cd800';
$json['data']['ret']['itemInfo'][83]['levels'][0]['cdn']['63x63'] = '94572a3d2354e68f99bf55a41fc7300';
$json['data']['ret']['itemInfo'][83]['levels'][0]['cdn']['100x100'] = '70e1d6e1de75b7db34bb8859382a2600';
$json['data']['ret']['itemInfo'][84]['L'] = 83;
$json['data']['ret']['itemInfo'][84]['name'] = 'CPU 1- Slot';
$json['data']['ret']['itemInfo'][84]['T'] = 9;
$json['data']['ret']['itemInfo'][84]['C'] = 'special';
$json['data']['ret']['itemInfo'][84]['levels'] = array();
$json['data']['ret']['itemInfo'][84]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][84]['levels'][0]['cdn']['30x30'] = '5f748e92b9b00e73049a8fe1ed6cf300';
$json['data']['ret']['itemInfo'][84]['levels'][0]['cdn']['63x63'] = '4c8b2134dc2163588182776c483d8a00';
$json['data']['ret']['itemInfo'][84]['levels'][0]['cdn']['100x100'] = '99ea1c9b0f2945903e1940e185656000';
$json['data']['ret']['itemInfo'][85]['L'] = 84;
$json['data']['ret']['itemInfo'][85]['name'] = 'CPU 2- Slot';
$json['data']['ret']['itemInfo'][85]['T'] = 9;
$json['data']['ret']['itemInfo'][85]['C'] = 'special';
$json['data']['ret']['itemInfo'][85]['levels'] = array();
$json['data']['ret']['itemInfo'][85]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][85]['levels'][0]['cdn']['30x30'] = '82acde6ea5a6b3a82dd3e8d29251f600';
$json['data']['ret']['itemInfo'][85]['levels'][0]['cdn']['63x63'] = '956bbd4b1e79ee5c5b213f5293d1d600';
$json['data']['ret']['itemInfo'][85]['levels'][0]['cdn']['100x100'] = '9220f90c1874ed7d71b696d38d12e600';
$json['data']['ret']['itemInfo'][86]['L'] = 85;
$json['data']['ret']['itemInfo'][86]['name'] = 'CPU 3- Slot';
$json['data']['ret']['itemInfo'][86]['T'] = 9;
$json['data']['ret']['itemInfo'][86]['C'] = 'special';
$json['data']['ret']['itemInfo'][86]['levels'] = array();
$json['data']['ret']['itemInfo'][86]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][86]['levels'][0]['cdn']['30x30'] = 'd2d48e9d0a40e19d766c39f04d058000';
$json['data']['ret']['itemInfo'][86]['levels'][0]['cdn']['63x63'] = '5f31f312cf522e4258effcefb0022c00';
$json['data']['ret']['itemInfo'][86]['levels'][0]['cdn']['100x100'] = '4676fbf3832998139092e35c0b6e8000';
$json['data']['ret']['itemInfo'][87]['L'] = 86;
$json['data']['ret']['itemInfo'][87]['name'] = 'Drone Repair 1';
$json['data']['ret']['itemInfo'][87]['T'] = 9;
$json['data']['ret']['itemInfo'][87]['C'] = 'special';
$json['data']['ret']['itemInfo'][87]['levels'] = array();
$json['data']['ret']['itemInfo'][87]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][87]['levels'][0]['cdn']['30x30'] = '71ac401223c8dcfe83cec0582d42bf00';
$json['data']['ret']['itemInfo'][87]['levels'][0]['cdn']['63x63'] = '30f24a22fb123ab3409edbaae0c3b700';
$json['data']['ret']['itemInfo'][87]['levels'][0]['cdn']['100x100'] = 'ac134270b2d6c46d48ff94bfbacfa300';
$json['data']['ret']['itemInfo'][88]['L'] = 87;
$json['data']['ret']['itemInfo'][88]['name'] = 'Drone Repair 2';
$json['data']['ret']['itemInfo'][88]['T'] = 9;
$json['data']['ret']['itemInfo'][88]['C'] = 'special';
$json['data']['ret']['itemInfo'][88]['levels'] = array();
$json['data']['ret']['itemInfo'][88]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][88]['levels'][0]['cdn']['30x30'] = '4ff7b62c45133a5a0afa1c3fa14a7100';
$json['data']['ret']['itemInfo'][88]['levels'][0]['cdn']['63x63'] = '7fe8bc7aabcff5e7a146f6afaae5600';
$json['data']['ret']['itemInfo'][88]['levels'][0]['cdn']['100x100'] = '2cd2ee99cfa7e803424786d9db551900';
$json['data']['ret']['itemInfo'][89]['L'] = 88;
$json['data']['ret']['itemInfo'][89]['name'] = 'CPU Salto 1';
$json['data']['ret']['itemInfo'][89]['T'] = 9;
$json['data']['ret']['itemInfo'][89]['C'] = 'special';
$json['data']['ret']['itemInfo'][89]['levels'] = array();
$json['data']['ret']['itemInfo'][89]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][89]['levels'][0]['cdn']['30x30'] = '41aa74ce7c4a9dfd0004631cc1564300';
$json['data']['ret']['itemInfo'][89]['levels'][0]['cdn']['63x63'] = 'ddf568bb7d315e635c4850c413a1d00';
$json['data']['ret']['itemInfo'][89]['levels'][0]['cdn']['100x100'] = 'f39a6876287a428f21a0b84eeb16fa00';
$json['data']['ret']['itemInfo'][90]['L'] = 89;
$json['data']['ret']['itemInfo'][90]['name'] = 'CPU Salto 2';
$json['data']['ret']['itemInfo'][90]['T'] = 9;
$json['data']['ret']['itemInfo'][90]['C'] = 'special';
$json['data']['ret']['itemInfo'][90]['levels'] = array();
$json['data']['ret']['itemInfo'][90]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][90]['levels'][0]['cdn']['30x30'] = '853fa6be9494eb505fce988f418f6000';
$json['data']['ret']['itemInfo'][90]['levels'][0]['cdn']['63x63'] = '71448635257c7a2f48dab8bc67a3be00';
$json['data']['ret']['itemInfo'][90]['levels'][0]['cdn']['100x100'] = '4c714d0033db967ba3a2720032ae8800';
$json['data']['ret']['itemInfo'][91]['L'] = 90;
$json['data']['ret']['itemInfo'][91]['name'] = 'CPU Compra de Combustivel';
$json['data']['ret']['itemInfo'][91]['T'] = 9;
$json['data']['ret']['itemInfo'][91]['C'] = 'special';
$json['data']['ret']['itemInfo'][91]['levels'] = array();
$json['data']['ret']['itemInfo'][91]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][91]['levels'][0]['cdn']['30x30'] = '7b2a9d2965073c0a9260b7549283a500';
$json['data']['ret']['itemInfo'][91]['levels'][0]['cdn']['63x63'] = 'cb83875eb5c3da164879605c02d65900';
$json['data']['ret']['itemInfo'][91]['levels'][0]['cdn']['100x100'] = 'e06d39c29ea36fb5e9327bd606e95200';
$json['data']['ret']['itemInfo'][92]['L'] = 91;
$json['data']['ret']['itemInfo'][92]['name'] = 'CPU Bomba inteligente';
$json['data']['ret']['itemInfo'][92]['T'] = 9;
$json['data']['ret']['itemInfo'][92]['C'] = 'special';
$json['data']['ret']['itemInfo'][92]['levels'] = array();
$json['data']['ret']['itemInfo'][92]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][92]['levels'][0]['cdn']['30x30'] = '5a0257eec5625b07599eddcc1b8700';
$json['data']['ret']['itemInfo'][92]['levels'][0]['cdn']['63x63'] = '9915c23f7b56ca05388afc2a0dc1b900';
$json['data']['ret']['itemInfo'][92]['levels'][0]['cdn']['100x100'] = 'ad7e7ff45f564293dcac06b878e57b00';
$json['data']['ret']['itemInfo'][93]['L'] = 92;
$json['data']['ret']['itemInfo'][93]['name'] = 'CPU de Escudo-Instantâneo';
$json['data']['ret']['itemInfo'][93]['T'] = 9;
$json['data']['ret']['itemInfo'][93]['C'] = 'special';
$json['data']['ret']['itemInfo'][93]['levels'] = array();
$json['data']['ret']['itemInfo'][93]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][93]['levels'][0]['cdn']['30x30'] = 'b5303220b6ebbf91ae9f1203d99b1900';
$json['data']['ret']['itemInfo'][93]['levels'][0]['cdn']['63x63'] = '59ebb45a483b69b03c878f8ef7381f00';
$json['data']['ret']['itemInfo'][93]['levels'][0]['cdn']['100x100'] = 'ba929c263af782b8fb64046ee2b94d00';
$json['data']['ret']['itemInfo'][94]['L'] = 93;
$json['data']['ret']['itemInfo'][94]['name'] = 'CPU de Motor propulsor';
$json['data']['ret']['itemInfo'][94]['T'] = 9;
$json['data']['ret']['itemInfo'][94]['C'] = 'special';
$json['data']['ret']['itemInfo'][94]['levels'] = array();
$json['data']['ret']['itemInfo'][94]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][94]['levels'][0]['cdn']['30x30'] = 'ec4b1bb40a78d57ed0b3fc5a8127e00';
$json['data']['ret']['itemInfo'][94]['levels'][0]['cdn']['63x63'] = '8f667662bd9a919ccd1829c0da10b700';
$json['data']['ret']['itemInfo'][94]['levels'][0]['cdn']['100x100'] = 'a6203985f4baacdba419e68daef9700';
$json['data']['ret']['itemInfo'][95]['L'] = 94;
$json['data']['ret']['itemInfo'][95]['name'] = 'CPU 1 de Guia de Alvo';
$json['data']['ret']['itemInfo'][95]['T'] = 9;
$json['data']['ret']['itemInfo'][95]['C'] = 'special';
$json['data']['ret']['itemInfo'][95]['levels'] = array();
$json['data']['ret']['itemInfo'][95]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][95]['levels'][0]['cdn']['30x30'] = '9756bd9c4757888927ccad2897fcec00';
$json['data']['ret']['itemInfo'][95]['levels'][0]['cdn']['63x63'] = 'b01ffaf8334bd3f76bc2cadad6198200';
$json['data']['ret']['itemInfo'][95]['levels'][0]['cdn']['100x100'] = '9b5cb30e69d3871b077b2c9a16138600';
$json['data']['ret']['itemInfo'][96]['L'] = 95;
$json['data']['ret']['itemInfo'][96]['name'] = 'CPU 2 de Guia de Alvo';
$json['data']['ret']['itemInfo'][96]['T'] = 9;
$json['data']['ret']['itemInfo'][96]['C'] = 'special';
$json['data']['ret']['itemInfo'][96]['levels'] = array();
$json['data']['ret']['itemInfo'][96]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][96]['levels'][0]['cdn']['30x30'] = '48e8e4664be8a48f661625110fd5a400';
$json['data']['ret']['itemInfo'][96]['levels'][0]['cdn']['63x63'] = '75b281fb1c866780d65cbf121186ec00';
$json['data']['ret']['itemInfo'][96]['levels'][0]['cdn']['100x100'] = 'b8d5a02cf8bd3f5080007615048d0d00';
$json['data']['ret']['itemInfo'][97]['L'] = 96;
$json['data']['ret']['itemInfo'][97]['name'] = 'CPU lançador de mísseis';
$json['data']['ret']['itemInfo'][97]['T'] = 9;
$json['data']['ret']['itemInfo'][97]['C'] = 'special';
$json['data']['ret']['itemInfo'][97]['levels'] = array();
$json['data']['ret']['itemInfo'][97]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][97]['levels'][0]['cdn']['30x30'] = 'ad70453dead7077704b34dcbef4b5d00';
$json['data']['ret']['itemInfo'][97]['levels'][0]['cdn']['63x63'] = 'f86e532f0605f1befc3efab402dfbd00';
$json['data']['ret']['itemInfo'][97]['levels'][0]['cdn']['100x100'] = 'c02ef79c7fb09afb18efa7bacb68e300';
$json['data']['ret']['itemInfo'][98]['L'] = 97;
$json['data']['ret']['itemInfo'][98]['name'] = 'VANT comercial HM7';
$json['data']['ret']['itemInfo'][98]['T'] = 9;
$json['data']['ret']['itemInfo'][98]['C'] = 'special';
$json['data']['ret']['itemInfo'][98]['levels'] = array();
$json['data']['ret']['itemInfo'][98]['levels'][0]['selling']['credits'] = 50000;
$json['data']['ret']['itemInfo'][98]['levels'][0]['cdn']['30x30'] = '82fc02e71a87a1c22d3c60d097293100';
$json['data']['ret']['itemInfo'][98]['levels'][0]['cdn']['63x63'] = '4dfcc90a5f2eaba7353fabadc4c0200';
$json['data']['ret']['itemInfo'][98]['levels'][0]['cdn']['100x100'] = '13dee6dcb1f39fc812db55e2db0ec800';
$json['data']['ret']['itemInfo'][99]['L'] = 98;
$json['data']['ret']['itemInfo'][99]['name'] = 'LF-1';
$json['data']['ret']['itemInfo'][99]['T'] = 0;
$json['data']['ret']['itemInfo'][99]['C'] = 'laser';
$json['data']['ret']['itemInfo'][99]['levels'] = array();
$json['data']['ret']['itemInfo'][99]['levels'][0]['selling']['credits'] = 75000;
$json['data']['ret']['itemInfo'][99]['levels'][0]['cdn']['30x30'] = '38b6e7ac566392a42b5058b957877400';
$json['data']['ret']['itemInfo'][99]['levels'][0]['cdn']['63x63'] = '21840bc7163a5ba6b23a843b00b34500';
$json['data']['ret']['itemInfo'][99]['levels'][0]['cdn']['100x100'] = '63996742896b58647fcd48dda079e300';
$json['data']['ret']['itemInfo'][100]['L'] = 99;
$json['data']['ret']['itemInfo'][100]['name'] = 'HST-1';
$json['data']['ret']['itemInfo'][100]['T'] = 1;
$json['data']['ret']['itemInfo'][100]['C'] = 'laser';
$json['data']['ret']['itemInfo'][100]['levels'] = array();
$json['data']['ret']['itemInfo'][100]['levels'][0]['selling']['credits'] = 75000;
$json['data']['ret']['itemInfo'][100]['levels'][0]['cdn']['30x30'] = 'b0c7fd370207805934235a4a87735e00';
$json['data']['ret']['itemInfo'][100]['levels'][0]['cdn']['63x63'] = '7e61b1762e2b96671390e0ff30524700';
$json['data']['ret']['itemInfo'][100]['levels'][0]['cdn']['100x100'] = '4d3a4c3fcc183b86a549d099de824800';
$json['data']['ret']['itemInfo'][101]['L'] = 100;
$json['data']['ret']['itemInfo'][101]['name'] = 'G3N-6900';
$json['data']['ret']['itemInfo'][101]['T'] = 3;
$json['data']['ret']['itemInfo'][101]['C'] = 'generator';
$json['data']['ret']['itemInfo'][101]['levels'] = array();
$json['data']['ret']['itemInfo'][101]['levels'][0]['selling']['credits'] = 5000;
$json['data']['ret']['itemInfo'][101]['levels'][0]['cdn']['30x30'] = 'd7b869fd976e4aa747579b34ddf7c600';
$json['data']['ret']['itemInfo'][101]['levels'][0]['cdn']['63x63'] = 'd3511da1ba864dbfb783a1a694842100';
$json['data']['ret']['itemInfo'][101]['levels'][0]['cdn']['100x100'] = 'ebd1850eecd35679b614d38a62786f00';
$json['data']['ret']['itemInfo'][102]['L'] = 101;
$json['data']['ret']['itemInfo'][102]['name'] = 'G3N-3310';
$json['data']['ret']['itemInfo'][102]['T'] = 3;
$json['data']['ret']['itemInfo'][102]['C'] = 'generator';
$json['data']['ret']['itemInfo'][102]['levels'] = array();
$json['data']['ret']['itemInfo'][102]['levels'][0]['selling']['credits'] = 5000;
$json['data']['ret']['itemInfo'][102]['levels'][0]['cdn']['30x30'] = '9c7619637fe2f4db057a26a693dfcc00';
$json['data']['ret']['itemInfo'][102]['levels'][0]['cdn']['63x63'] = '342496a568aeded33543c7b508570700';
$json['data']['ret']['itemInfo'][102]['levels'][0]['cdn']['100x100'] = '47a6fad8c0e6e5985cf7efd933c1d200';
$json['data']['ret']['itemInfo'][103]['L'] = 102;
$json['data']['ret']['itemInfo'][103]['name'] = 'G3N-3210';
$json['data']['ret']['itemInfo'][103]['T'] = 3;
$json['data']['ret']['itemInfo'][103]['C'] = 'generator';
$json['data']['ret']['itemInfo'][103]['levels'] = array();
$json['data']['ret']['itemInfo'][103]['levels'][0]['selling']['credits'] = 5000;
$json['data']['ret']['itemInfo'][103]['levels'][0]['cdn']['30x30'] = 'f0bb2d49c69daf1b7125623d78c1b700';
$json['data']['ret']['itemInfo'][103]['levels'][0]['cdn']['63x63'] = '4ba91775f4edfe8df7403076a2e96000';
$json['data']['ret']['itemInfo'][103]['levels'][0]['cdn']['100x100'] = '5d50a4d1ad1ff13a891ee79b15b31100';
$json['data']['ret']['itemInfo'][104]['L'] = 103;
$json['data']['ret']['itemInfo'][104]['name'] = 'G3N-2010';
$json['data']['ret']['itemInfo'][104]['T'] = 3;
$json['data']['ret']['itemInfo'][104]['C'] = 'generator';
$json['data']['ret']['itemInfo'][104]['levels'] = array();
$json['data']['ret']['itemInfo'][104]['levels'][0]['selling']['credits'] = 5000;
$json['data']['ret']['itemInfo'][104]['levels'][0]['cdn']['30x30'] = '205d6901282719db5574e251935cf800';
$json['data']['ret']['itemInfo'][104]['levels'][0]['cdn']['63x63'] = 'b1497b51c32fa9f3494555ded7ce5100';
$json['data']['ret']['itemInfo'][104]['levels'][0]['cdn']['100x100'] = '6d7f8f5feb80ad35a1f47b76c0216700';
$json['data']['ret']['itemInfo'][105]['L'] = 104;
$json['data']['ret']['itemInfo'][105]['name'] = 'G3N-1010';
$json['data']['ret']['itemInfo'][105]['T'] = 3;
$json['data']['ret']['itemInfo'][105]['C'] = 'generator';
$json['data']['ret']['itemInfo'][105]['levels'] = array();
$json['data']['ret']['itemInfo'][105]['levels'][0]['selling']['credits'] = 5000;
$json['data']['ret']['itemInfo'][105]['levels'][0]['cdn']['30x30'] = 'e5674130f14944e7411e5462960200';
$json['data']['ret']['itemInfo'][105]['levels'][0]['cdn']['63x63'] = 'c1836b133fef276221ded016d6fe8800';
$json['data']['ret']['itemInfo'][105]['levels'][0]['cdn']['100x100'] = '110b421b9d7913c5384e9ef9d65c3d00';
$json['data']['ret']['itemInfo'][106]['L'] = 105;
$json['data']['ret']['itemInfo'][106]['name'] = 'SG3N-A02';
$json['data']['ret']['itemInfo'][106]['T'] = 4;
$json['data']['ret']['itemInfo'][106]['C'] = 'generator';
$json['data']['ret']['itemInfo'][106]['levels'] = array();
$json['data']['ret']['itemInfo'][106]['levels'][0]['selling']['credits'] = 4000;
$json['data']['ret']['itemInfo'][106]['levels'][0]['cdn']['30x30'] = '6f85775b2b55616a538ef62826b8f300';
$json['data']['ret']['itemInfo'][106]['levels'][0]['cdn']['63x63'] = '311654cd6187f4d509c3a0322ea09500';
$json['data']['ret']['itemInfo'][106]['levels'][0]['cdn']['100x100'] = '42a5f4011eaed1818feecd88636a3700';
$json['data']['ret']['itemInfo'][107]['L'] = 106;
$json['data']['ret']['itemInfo'][107]['name'] = 'SG3N-A03';
$json['data']['ret']['itemInfo'][107]['T'] = 4;
$json['data']['ret']['itemInfo'][107]['C'] = 'generator';
$json['data']['ret']['itemInfo'][107]['levels'] = array();
$json['data']['ret']['itemInfo'][107]['levels'][0]['selling']['credits'] = 4000;
$json['data']['ret']['itemInfo'][107]['levels'][0]['cdn']['30x30'] = 'f4d2d254f93608126c7db06a85de0800';
$json['data']['ret']['itemInfo'][107]['levels'][0]['cdn']['63x63'] = 'e775ee19bac6ca833965f19f7f8d3a00';
$json['data']['ret']['itemInfo'][107]['levels'][0]['cdn']['100x100'] = 'e1b79125e9f9c2fdb8711d3cb7774c00';
$json['data']['ret']['itemInfo'][108]['L'] = 107;
$json['data']['ret']['itemInfo'][108]['name'] = 'Apis Drone';
$json['data']['ret']['itemInfo'][108]['T'] = 24;
$json['data']['ret']['itemInfo'][108]['C'] = 'drone';
$json['data']['ret']['itemInfo'][108]['repair'] = 0;
$json['data']['ret']['itemInfo'][108]['levels'] = array();
$json['data']['ret']['itemInfo'][108]['levels'][0]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][108]['levels'][0]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][108]['levels'][0]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][108]['levels'][0]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][108]['levels'][0]['selling']['credits'] = 100000;
$json['data']['ret']['itemInfo'][108]['levels'][0]['cdn']['30x30'] = '14ebb8db8014dc4bd757fa2ef74de400';
$json['data']['ret']['itemInfo'][108]['levels'][0]['cdn']['63x63'] = '9e918d6b19b7d5ead16addad0cc35200';
$json['data']['ret']['itemInfo'][108]['levels'][0]['cdn']['100x100'] = 'afba9239e233f506eff21528ab4e8f00';
$json['data']['ret']['itemInfo'][108]['levels'][0]['cdn']['top'] = '79b048a4b8e05add7a2245ebe95d5e00';
$json['data']['ret']['itemInfo'][108]['levels'][1]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][108]['levels'][1]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][108]['levels'][1]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][108]['levels'][1]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][108]['levels'][1]['selling']['credits'] = 150000;
$json['data']['ret']['itemInfo'][108]['levels'][1]['cdn']['30x30'] = 'd951657b84dd80549297702f018b1f00';
$json['data']['ret']['itemInfo'][108]['levels'][1]['cdn']['63x63'] = '66f6d38952f8fb800abbd5e5d96f7700';
$json['data']['ret']['itemInfo'][108]['levels'][1]['cdn']['100x100'] = '3b12423b93122055a76f250f307dee00';
$json['data']['ret']['itemInfo'][108]['levels'][1]['cdn']['top'] = 'cdcc2dc2ac60191715615ac48100e300';
$json['data']['ret']['itemInfo'][108]['levels'][2]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][108]['levels'][2]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][108]['levels'][2]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][108]['levels'][2]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][108]['levels'][2]['selling']['credits'] = 210000;
$json['data']['ret']['itemInfo'][108]['levels'][2]['cdn']['30x30'] = 'b10d193b55f89656936668c1bc559900';
$json['data']['ret']['itemInfo'][108]['levels'][2]['cdn']['63x63'] = 'e3ab25f382927dfd082f290967524500';
$json['data']['ret']['itemInfo'][108]['levels'][2]['cdn']['100x100'] = 'e0dbd77afe0b998abb1be914ff0ca800';
$json['data']['ret']['itemInfo'][108]['levels'][2]['cdn']['top'] = '9c4888900962a7ac074714cfaa206200';
$json['data']['ret']['itemInfo'][108]['levels'][3]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][108]['levels'][3]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][108]['levels'][3]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][108]['levels'][3]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][108]['levels'][3]['selling']['credits'] = 240000;
$json['data']['ret']['itemInfo'][108]['levels'][3]['cdn']['30x30'] = '9c481125952808f464742ffbb0a43500';
$json['data']['ret']['itemInfo'][108]['levels'][3]['cdn']['63x63'] = 'dd3a4359bfadba07d03989ec042b5e00';
$json['data']['ret']['itemInfo'][108]['levels'][3]['cdn']['100x100'] = 'a71d6fe22419ea188a5d2dd78e7b6900';
$json['data']['ret']['itemInfo'][108]['levels'][3]['cdn']['top'] = '873f7968e96ba2b2aa6a867938171b00';
$json['data']['ret']['itemInfo'][108]['levels'][4]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][108]['levels'][4]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][108]['levels'][4]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][108]['levels'][4]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][108]['levels'][4]['selling']['credits'] = 315000;
$json['data']['ret']['itemInfo'][108]['levels'][4]['cdn']['30x30'] = '9cb3929ed0ea6e938eb50599a854d400';
$json['data']['ret']['itemInfo'][108]['levels'][4]['cdn']['63x63'] = '18d7b8fbe928f1b26ae05e8cf8eab200';
$json['data']['ret']['itemInfo'][108]['levels'][4]['cdn']['100x100'] = '0227efd2ca7b8749575885abd3d33e00';
$json['data']['ret']['itemInfo'][108]['levels'][4]['cdn']['top'] = 'e65761d42de94f1eeaa0c30e29d88e00';
$json['data']['ret']['itemInfo'][108]['levels'][5]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][108]['levels'][5]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][108]['levels'][5]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][108]['levels'][5]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][108]['levels'][5]['selling']['credits'] = 500000;
$json['data']['ret']['itemInfo'][108]['levels'][5]['cdn']['30x30'] = '40860d1594e9b6841ccfa87963f8d800';
$json['data']['ret']['itemInfo'][108]['levels'][5]['cdn']['63x63'] = '0cd363e0f68297796aeb1a1dc8725500';
$json['data']['ret']['itemInfo'][108]['levels'][5]['cdn']['100x100'] = '915c51fde19ca5d0c4878221ae305f00';
$json['data']['ret']['itemInfo'][108]['levels'][5]['cdn']['top'] = 'b6aae2912b6e0eb1b49d50ab5caef400';
$json['data']['ret']['itemInfo'][109]['L'] = 108;
$json['data']['ret']['itemInfo'][109]['name'] = 'Zeus Drone';
$json['data']['ret']['itemInfo'][109]['T'] = 24;
$json['data']['ret']['itemInfo'][109]['C'] = 'drone';
$json['data']['ret']['itemInfo'][109]['repair'] = 0;
$json['data']['ret']['itemInfo'][109]['levels'] = array();
$json['data']['ret']['itemInfo'][109]['levels'][0]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][109]['levels'][0]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][109]['levels'][0]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][109]['levels'][0]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][109]['levels'][0]['selling']['credits'] = 100000;
$json['data']['ret']['itemInfo'][109]['levels'][0]['cdn']['30x30'] = '14ebb8db8014dc4bd757fa2ef74de400';
$json['data']['ret']['itemInfo'][109]['levels'][0]['cdn']['63x63'] = '9e918d6b19b7d5ead16addad0cc35200';
$json['data']['ret']['itemInfo'][109]['levels'][0]['cdn']['100x100'] = 'afba9239e233f506eff21528ab4e8f00';
$json['data']['ret']['itemInfo'][109]['levels'][0]['cdn']['top'] = '79b048a4b8e05add7a2245ebe95d5e00';
$json['data']['ret']['itemInfo'][109]['levels'][1]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][109]['levels'][1]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][109]['levels'][1]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][109]['levels'][1]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][109]['levels'][1]['selling']['credits'] = 150000;
$json['data']['ret']['itemInfo'][109]['levels'][1]['cdn']['30x30'] = 'd951657b84dd80549297702f018b1f00';
$json['data']['ret']['itemInfo'][109]['levels'][1]['cdn']['63x63'] = '66f6d38952f8fb800abbd5e5d96f7700';
$json['data']['ret']['itemInfo'][109]['levels'][1]['cdn']['100x100'] = '3b12423b93122055a76f250f307dee00';
$json['data']['ret']['itemInfo'][109]['levels'][1]['cdn']['top'] = 'cdcc2dc2ac60191715615ac48100e300';
$json['data']['ret']['itemInfo'][109]['levels'][2]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][109]['levels'][2]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][109]['levels'][2]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][109]['levels'][2]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][109]['levels'][2]['selling']['credits'] = 210000;
$json['data']['ret']['itemInfo'][109]['levels'][2]['cdn']['30x30'] = 'b10d193b55f89656936668c1bc559900';
$json['data']['ret']['itemInfo'][109]['levels'][2]['cdn']['63x63'] = 'e3ab25f382927dfd082f290967524500';
$json['data']['ret']['itemInfo'][109]['levels'][2]['cdn']['100x100'] = 'e0dbd77afe0b998abb1be914ff0ca800';
$json['data']['ret']['itemInfo'][109]['levels'][2]['cdn']['top'] = '9c4888900962a7ac074714cfaa206200';
$json['data']['ret']['itemInfo'][109]['levels'][3]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][109]['levels'][3]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][109]['levels'][3]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][109]['levels'][3]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][109]['levels'][3]['selling']['credits'] = 240000;
$json['data']['ret']['itemInfo'][109]['levels'][3]['cdn']['30x30'] = '9c481125952808f464742ffbb0a43500';
$json['data']['ret']['itemInfo'][109]['levels'][3]['cdn']['63x63'] = 'dd3a4359bfadba07d03989ec042b5e00';
$json['data']['ret']['itemInfo'][109]['levels'][3]['cdn']['100x100'] = 'a71d6fe22419ea188a5d2dd78e7b6900';
$json['data']['ret']['itemInfo'][109]['levels'][3]['cdn']['top'] = '873f7968e96ba2b2aa6a867938171b00';
$json['data']['ret']['itemInfo'][109]['levels'][4]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][109]['levels'][4]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][109]['levels'][4]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][109]['levels'][4]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][109]['levels'][4]['selling']['credits'] = 315000;
$json['data']['ret']['itemInfo'][109]['levels'][4]['cdn']['30x30'] = '9cb3929ed0ea6e938eb50599a854d400';
$json['data']['ret']['itemInfo'][109]['levels'][4]['cdn']['63x63'] = '18d7b8fbe928f1b26ae05e8cf8eab200';
$json['data']['ret']['itemInfo'][109]['levels'][4]['cdn']['100x100'] = '0227efd2ca7b8749575885abd3d33e00';
$json['data']['ret']['itemInfo'][109]['levels'][4]['cdn']['top'] = 'e65761d42de94f1eeaa0c30e29d88e00';
$json['data']['ret']['itemInfo'][109]['levels'][5]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][109]['levels'][5]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][109]['levels'][5]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][109]['levels'][5]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][109]['levels'][5]['selling']['credits'] = 500000;
$json['data']['ret']['itemInfo'][109]['levels'][5]['cdn']['30x30'] = '40860d1594e9b6841ccfa87963f8d800';
$json['data']['ret']['itemInfo'][109]['levels'][5]['cdn']['63x63'] = '0cd363e0f68297796aeb1a1dc8725500';
$json['data']['ret']['itemInfo'][109]['levels'][5]['cdn']['100x100'] = '915c51fde19ca5d0c4878221ae305f00';
$json['data']['ret']['itemInfo'][109]['levels'][5]['cdn']['top'] = 'b6aae2912b6e0eb1b49d50ab5caef400';
$json['data']['ret']['itemInfo'][110]['L'] = 109;
$json['data']['ret']['itemInfo'][110]['name'] = 'Venom';
$json['data']['ret']['itemInfo'][110]['T'] = 21;
$json['data']['ret']['itemInfo'][110]['C'] = 'ship';
$json['data']['ret']['itemInfo'][110]['levels'] = array();
$json['data']['ret']['itemInfo'][110]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][110]['levels'][0]['slotsets']['lasers']['Q'] = 15;
$json['data']['ret']['itemInfo'][110]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][110]['levels'][0]['slotsets']['generators']['Q'] = 15;
$json['data']['ret']['itemInfo'][110]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][110]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][110]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][110]['levels'][0]['slotsets']['extras']['Q'] = 3;
$json['data']['ret']['itemInfo'][110]['levels'][0]['cdn']['30x30'] = '8f1947a36237030a042d49fc2db38b00';
$json['data']['ret']['itemInfo'][110]['levels'][0]['cdn']['63x63'] = '3c4547b6d7a21fabdc28c1930521c100';
$json['data']['ret']['itemInfo'][110]['levels'][0]['cdn']['100x100'] = '2d89b696366df9a1559dc8d702d08f00';
$json['data']['ret']['itemInfo'][110]['levels'][0]['cdn']['top'] = '13e3a904adbf3017e4561b98a2e14a00';
$json['data']['ret']['itemInfo'][111]['L'] = 110;
$json['data']['ret']['itemInfo'][111]['name'] = 'Solace';
$json['data']['ret']['itemInfo'][111]['T'] = 21;
$json['data']['ret']['itemInfo'][111]['C'] = 'ship';
$json['data']['ret']['itemInfo'][111]['levels'] = array();
$json['data']['ret']['itemInfo'][111]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][111]['levels'][0]['slotsets']['lasers']['Q'] = 15;
$json['data']['ret']['itemInfo'][111]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][111]['levels'][0]['slotsets']['generators']['Q'] = 15;
$json['data']['ret']['itemInfo'][111]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][111]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][111]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][111]['levels'][0]['slotsets']['extras']['Q'] = 3;
$json['data']['ret']['itemInfo'][111]['levels'][0]['cdn']['30x30'] = 'c8ac358b4f8ea162b42f56ba05421d00';
$json['data']['ret']['itemInfo'][111]['levels'][0]['cdn']['63x63'] = '7e579597ee5b6fd540112b5733634400';
$json['data']['ret']['itemInfo'][111]['levels'][0]['cdn']['100x100'] = '1f2e50beede5485d5852a2fb64d3df00';
$json['data']['ret']['itemInfo'][111]['levels'][0]['cdn']['top'] = 'd6e8b527b1a90dfcc07bd0748cd0ab00';
$json['data']['ret']['itemInfo'][112]['L'] = 111;
$json['data']['ret']['itemInfo'][112]['name'] = 'Diminisher';
$json['data']['ret']['itemInfo'][112]['T'] = 21;
$json['data']['ret']['itemInfo'][112]['C'] = 'ship';
$json['data']['ret']['itemInfo'][112]['levels'] = array();
$json['data']['ret']['itemInfo'][112]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][112]['levels'][0]['slotsets']['lasers']['Q'] = 15;
$json['data']['ret']['itemInfo'][112]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][112]['levels'][0]['slotsets']['generators']['Q'] = 15;
$json['data']['ret']['itemInfo'][112]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][112]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][112]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][112]['levels'][0]['slotsets']['extras']['Q'] = 3;
$json['data']['ret']['itemInfo'][112]['levels'][0]['cdn']['30x30'] = '13bd3045938ff7e1387e3810f4ef9e00';
$json['data']['ret']['itemInfo'][112]['levels'][0]['cdn']['63x63'] = '95450a80fa1ff26c8b61f303474cf500';
$json['data']['ret']['itemInfo'][112]['levels'][0]['cdn']['100x100'] = 'f981e84575292b34e18f0a03df235000';
$json['data']['ret']['itemInfo'][112]['levels'][0]['cdn']['top'] = '7d00aa39cd2b1944649100c408887400';
$json['data']['ret']['itemInfo'][113]['L'] = 112;
$json['data']['ret']['itemInfo'][113]['name'] = 'Spectrum';
$json['data']['ret']['itemInfo'][113]['T'] = 21;
$json['data']['ret']['itemInfo'][113]['C'] = 'ship';
$json['data']['ret']['itemInfo'][113]['levels'] = array();
$json['data']['ret']['itemInfo'][113]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][113]['levels'][0]['slotsets']['lasers']['Q'] = 15;
$json['data']['ret']['itemInfo'][113]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][113]['levels'][0]['slotsets']['generators']['Q'] = 15;
$json['data']['ret']['itemInfo'][113]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][113]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][113]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][113]['levels'][0]['slotsets']['extras']['Q'] = 3;
$json['data']['ret']['itemInfo'][113]['levels'][0]['cdn']['30x30'] = 'fcb6bc75b23042a5bbfe589b4965f000';
$json['data']['ret']['itemInfo'][113]['levels'][0]['cdn']['63x63'] = 'dd45110cd14d657cee0ba24b27eae00';
$json['data']['ret']['itemInfo'][113]['levels'][0]['cdn']['100x100'] = '35f4bb3311c6b4aa47a16fd180008900';
$json['data']['ret']['itemInfo'][113]['levels'][0]['cdn']['top'] = '5dec1c18adf1890dd4a73ae60403e300';
$json['data']['ret']['itemInfo'][114]['L'] = 113;
$json['data']['ret']['itemInfo'][114]['name'] = 'Sentinel';
$json['data']['ret']['itemInfo'][114]['T'] = 21;
$json['data']['ret']['itemInfo'][114]['C'] = 'ship';
$json['data']['ret']['itemInfo'][114]['levels'] = array();
$json['data']['ret']['itemInfo'][114]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][114]['levels'][0]['slotsets']['lasers']['Q'] = 15;
$json['data']['ret']['itemInfo'][114]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][114]['levels'][0]['slotsets']['generators']['Q'] = 15;
$json['data']['ret']['itemInfo'][114]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][114]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][114]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][114]['levels'][0]['slotsets']['extras']['Q'] = 3;
$json['data']['ret']['itemInfo'][114]['levels'][0]['cdn']['30x30'] = 'aebc8c1ee1d83f778a61e7c75f258800';
$json['data']['ret']['itemInfo'][114]['levels'][0]['cdn']['63x63'] = '83c788413d184255f3d91222b55ff400';
$json['data']['ret']['itemInfo'][114]['levels'][0]['cdn']['100x100'] = 'f34f8253592a74a52c37bf4962a3d100';
$json['data']['ret']['itemInfo'][114]['levels'][0]['cdn']['top'] = 'b518d3153b54198589baf8b385dedd00';
$json['data']['ret']['itemInfo'][115]['L'] = 114;
$json['data']['ret']['itemInfo'][115]['name'] = 'Phoenix';
$json['data']['ret']['itemInfo'][115]['T'] = 21;
$json['data']['ret']['itemInfo'][115]['C'] = 'ship';
$json['data']['ret']['itemInfo'][115]['levels'] = array();
$json['data']['ret']['itemInfo'][115]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][115]['levels'][0]['slotsets']['lasers']['Q'] = 1;
$json['data']['ret']['itemInfo'][115]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][115]['levels'][0]['slotsets']['generators']['Q'] = 1;
$json['data']['ret']['itemInfo'][115]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][115]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][115]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][115]['levels'][0]['slotsets']['extras']['Q'] = 1;
$json['data']['ret']['itemInfo'][115]['levels'][0]['cdn']['30x30'] = '910ad3dc8468f831274081d0fd79a700';
$json['data']['ret']['itemInfo'][115]['levels'][0]['cdn']['63x63'] = 'b2a8f157eec6af66d9f4f2fcdfa5dd00';
$json['data']['ret']['itemInfo'][115]['levels'][0]['cdn']['100x100'] = '8b447eee59e1500e4367eba7578b0300';
$json['data']['ret']['itemInfo'][115]['levels'][0]['cdn']['top'] = 'aa24e60e333abc872ffe39b171b41200';
$json['data']['ret']['itemInfo'][116]['L'] = 115;
$json['data']['ret']['itemInfo'][116]['name'] = 'Yamato';
$json['data']['ret']['itemInfo'][116]['T'] = 22;
$json['data']['ret']['itemInfo'][116]['C'] = 'ship';
$json['data']['ret']['itemInfo'][116]['levels'] = array();
$json['data']['ret']['itemInfo'][116]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][116]['levels'][0]['slotsets']['lasers']['Q'] = 2;
$json['data']['ret']['itemInfo'][116]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][116]['levels'][0]['slotsets']['generators']['Q'] = 2;
$json['data']['ret']['itemInfo'][116]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][116]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][116]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][116]['levels'][0]['slotsets']['extras']['Q'] = 1;
$json['data']['ret']['itemInfo'][116]['levels'][0]['selling']['credits'] = 200000;
$json['data']['ret']['itemInfo'][116]['levels'][0]['cdn']['63x63'] = 'c6c8a09a4749af691b6a9947cf2c6900';
$json['data']['ret']['itemInfo'][116]['levels'][0]['cdn']['100x100'] = '5fcdb83e69b401d92cc1ae6abb172300';
$json['data']['ret']['itemInfo'][116]['levels'][0]['cdn']['top'] = 'a604cd4669b80a0ddd89fa54fc946300';
$json['data']['ret']['itemInfo'][117]['L'] = 116;
$json['data']['ret']['itemInfo'][117]['name'] = 'Leonov';
$json['data']['ret']['itemInfo'][117]['T'] = 22;
$json['data']['ret']['itemInfo'][117]['C'] = 'ship';
$json['data']['ret']['itemInfo'][117]['levels'] = array();
$json['data']['ret']['itemInfo'][117]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][117]['levels'][0]['slotsets']['lasers']['Q'] = 6;
$json['data']['ret']['itemInfo'][117]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][117]['levels'][0]['slotsets']['generators']['Q'] = 6;
$json['data']['ret']['itemInfo'][117]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][117]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][117]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][117]['levels'][0]['slotsets']['extras']['Q'] = 1;
$json['data']['ret']['itemInfo'][117]['levels'][0]['selling']['credits'] = 200000;
$json['data']['ret']['itemInfo'][117]['levels'][0]['cdn']['63x63'] = 'c6c8a09a4749af691b6a9947cf2c6900';
$json['data']['ret']['itemInfo'][117]['levels'][0]['cdn']['100x100'] = '5fcdb83e69b401d92cc1ae6abb172300';
$json['data']['ret']['itemInfo'][117]['levels'][0]['cdn']['top'] = 'a604cd4669b80a0ddd89fa54fc946300';
$json['data']['ret']['itemInfo'][118]['L'] = 117;
$json['data']['ret']['itemInfo'][118]['name'] = 'Defcom';
$json['data']['ret']['itemInfo'][118]['T'] = 22;
$json['data']['ret']['itemInfo'][118]['C'] = 'ship';
$json['data']['ret']['itemInfo'][118]['levels'] = array();
$json['data']['ret']['itemInfo'][118]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][118]['levels'][0]['slotsets']['lasers']['Q'] = 3;
$json['data']['ret']['itemInfo'][118]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][118]['levels'][0]['slotsets']['generators']['Q'] = 5;
$json['data']['ret']['itemInfo'][118]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][118]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][118]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][118]['levels'][0]['slotsets']['extras']['Q'] = 2;
$json['data']['ret']['itemInfo'][118]['levels'][0]['selling']['credits'] = 200000;
$json['data']['ret']['itemInfo'][118]['levels'][0]['cdn']['63x63'] = 'c6c8a09a4749af691b6a9947cf2c6900';
$json['data']['ret']['itemInfo'][118]['levels'][0]['cdn']['100x100'] = '5fcdb83e69b401d92cc1ae6abb172300';
$json['data']['ret']['itemInfo'][118]['levels'][0]['cdn']['top'] = 'a604cd4669b80a0ddd89fa54fc946300';
$json['data']['ret']['itemInfo'][119]['L'] = 118;
$json['data']['ret']['itemInfo'][119]['name'] = 'Liberator';
$json['data']['ret']['itemInfo'][119]['T'] = 22;
$json['data']['ret']['itemInfo'][119]['C'] = 'ship';
$json['data']['ret']['itemInfo'][119]['levels'] = array();
$json['data']['ret']['itemInfo'][119]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][119]['levels'][0]['slotsets']['lasers']['Q'] = 4;
$json['data']['ret']['itemInfo'][119]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][119]['levels'][0]['slotsets']['generators']['Q'] = 6;
$json['data']['ret']['itemInfo'][119]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][119]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][119]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][119]['levels'][0]['slotsets']['extras']['Q'] = 2;
$json['data']['ret']['itemInfo'][119]['levels'][0]['selling']['credits'] = 200000;
$json['data']['ret']['itemInfo'][119]['levels'][0]['cdn']['63x63'] = 'c6c8a09a4749af691b6a9947cf2c6900';
$json['data']['ret']['itemInfo'][119]['levels'][0]['cdn']['100x100'] = '5fcdb83e69b401d92cc1ae6abb172300';
$json['data']['ret']['itemInfo'][119]['levels'][0]['cdn']['top'] = 'a604cd4669b80a0ddd89fa54fc946300';
$json['data']['ret']['itemInfo'][120]['L'] = 119;
$json['data']['ret']['itemInfo'][120]['name'] = 'Piranha';
$json['data']['ret']['itemInfo'][120]['T'] = 22;
$json['data']['ret']['itemInfo'][120]['C'] = 'ship';
$json['data']['ret']['itemInfo'][120]['levels'] = array();
$json['data']['ret']['itemInfo'][120]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][120]['levels'][0]['slotsets']['lasers']['Q'] = 6;
$json['data']['ret']['itemInfo'][120]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][120]['levels'][0]['slotsets']['generators']['Q'] = 8;
$json['data']['ret']['itemInfo'][120]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][120]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][120]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][120]['levels'][0]['slotsets']['extras']['Q'] = 2;
$json['data']['ret']['itemInfo'][120]['levels'][0]['selling']['credits'] = 200000;
$json['data']['ret']['itemInfo'][120]['levels'][0]['cdn']['63x63'] = 'c6c8a09a4749af691b6a9947cf2c6900';
$json['data']['ret']['itemInfo'][120]['levels'][0]['cdn']['100x100'] = '5fcdb83e69b401d92cc1ae6abb172300';
$json['data']['ret']['itemInfo'][120]['levels'][0]['cdn']['top'] = 'a604cd4669b80a0ddd89fa54fc946300';
$json['data']['ret']['itemInfo'][121]['L'] = 120;
$json['data']['ret']['itemInfo'][121]['name'] = 'Nostromo';
$json['data']['ret']['itemInfo'][121]['T'] = 22;
$json['data']['ret']['itemInfo'][121]['C'] = 'ship';
$json['data']['ret']['itemInfo'][121]['levels'] = array();
$json['data']['ret']['itemInfo'][121]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][121]['levels'][0]['slotsets']['lasers']['Q'] = 7;
$json['data']['ret']['itemInfo'][121]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][121]['levels'][0]['slotsets']['generators']['Q'] = 10;
$json['data']['ret']['itemInfo'][121]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][121]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][121]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][121]['levels'][0]['slotsets']['extras']['Q'] = 3;
$json['data']['ret']['itemInfo'][121]['levels'][0]['selling']['credits'] = 200000;
$json['data']['ret']['itemInfo'][121]['levels'][0]['cdn']['63x63'] = 'c6c8a09a4749af691b6a9947cf2c6900';
$json['data']['ret']['itemInfo'][121]['levels'][0]['cdn']['100x100'] = '5fcdb83e69b401d92cc1ae6abb172300';
$json['data']['ret']['itemInfo'][121]['levels'][0]['cdn']['top'] = 'a604cd4669b80a0ddd89fa54fc946300';
$json['data']['ret']['itemInfo'][122]['L'] = 121;
$json['data']['ret']['itemInfo'][122]['name'] = 'Vengeance';
$json['data']['ret']['itemInfo'][122]['T'] = 22;
$json['data']['ret']['itemInfo'][122]['C'] = 'ship';
$json['data']['ret']['itemInfo'][122]['levels'] = array();
$json['data']['ret']['itemInfo'][122]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][122]['levels'][0]['slotsets']['lasers']['Q'] = 10;
$json['data']['ret']['itemInfo'][122]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][122]['levels'][0]['slotsets']['generators']['Q'] = 10;
$json['data']['ret']['itemInfo'][122]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][122]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][122]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][122]['levels'][0]['slotsets']['extras']['Q'] = 2;
$json['data']['ret']['itemInfo'][122]['levels'][0]['selling']['credits'] = 200000;
$json['data']['ret']['itemInfo'][122]['levels'][0]['cdn']['63x63'] = 'c6c8a09a4749af691b6a9947cf2c6900';
$json['data']['ret']['itemInfo'][122]['levels'][0]['cdn']['100x100'] = '5fcdb83e69b401d92cc1ae6abb172300';
$json['data']['ret']['itemInfo'][122]['levels'][0]['cdn']['top'] = 'a604cd4669b80a0ddd89fa54fc946300';
$json['data']['ret']['itemInfo'][123]['L'] = 122;
$json['data']['ret']['itemInfo'][123]['name'] = 'Bigboy';
$json['data']['ret']['itemInfo'][123]['T'] = 22;
$json['data']['ret']['itemInfo'][123]['C'] = 'ship';
$json['data']['ret']['itemInfo'][123]['levels'] = array();
$json['data']['ret']['itemInfo'][123]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][123]['levels'][0]['slotsets']['lasers']['Q'] = 8;
$json['data']['ret']['itemInfo'][123]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][123]['levels'][0]['slotsets']['generators']['Q'] = 15;
$json['data']['ret']['itemInfo'][123]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][123]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][123]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][123]['levels'][0]['slotsets']['extras']['Q'] = 3;
$json['data']['ret']['itemInfo'][123]['levels'][0]['selling']['credits'] = 200000;
$json['data']['ret']['itemInfo'][123]['levels'][0]['cdn']['63x63'] = 'c6c8a09a4749af691b6a9947cf2c6900';
$json['data']['ret']['itemInfo'][123]['levels'][0]['cdn']['100x100'] = '5fcdb83e69b401d92cc1ae6abb172300';
$json['data']['ret']['itemInfo'][123]['levels'][0]['cdn']['top'] = 'a604cd4669b80a0ddd89fa54fc946300';
$json['data']['ret']['itemInfo'][124]['L'] = 123;
$json['data']['ret']['itemInfo'][124]['name'] = 'Aegis';
$json['data']['ret']['itemInfo'][124]['T'] = 22;
$json['data']['ret']['itemInfo'][124]['C'] = 'ship';
$json['data']['ret']['itemInfo'][124]['FD'] = '1';
$json['data']['ret']['itemInfo'][124]['levels'] = array();
$json['data']['ret']['itemInfo'][124]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][124]['levels'][0]['slotsets']['lasers']['Q'] = 10;
$json['data']['ret']['itemInfo'][124]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][124]['levels'][0]['slotsets']['generators']['Q'] = 15;
$json['data']['ret']['itemInfo'][124]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][124]['levels'][0]['slotsets']['heavy_guns']['Q'] = 1;
$json['data']['ret']['itemInfo'][124]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][124]['levels'][0]['slotsets']['extras']['Q'] = 3;
$json['data']['ret']['itemInfo'][124]['levels'][0]['selling']['credits'] = 200000;
$json['data']['ret']['itemInfo'][124]['levels'][0]['cdn']['63x63'] = 'c6c8a09a4749af691b6a9947cf2c6900';
$json['data']['ret']['itemInfo'][124]['levels'][0]['cdn']['100x100'] = '5fcdb83e69b401d92cc1ae6abb172300';
$json['data']['ret']['itemInfo'][124]['levels'][0]['cdn']['top'] = 'a604cd4669b80a0ddd89fa54fc946300';
$json['data']['ret']['itemInfo'][125]['L'] = 124;
$json['data']['ret']['itemInfo'][125]['name'] = 'Citadel';
$json['data']['ret']['itemInfo'][125]['T'] = 22;
$json['data']['ret']['itemInfo'][125]['C'] = 'ship';
$json['data']['ret']['itemInfo'][125]['FD'] = '1';
$json['data']['ret']['itemInfo'][125]['levels'] = array();
$json['data']['ret']['itemInfo'][125]['levels'][0]['slotsets']['lasers']['T'] = array(0);
$json['data']['ret']['itemInfo'][125]['levels'][0]['slotsets']['lasers']['Q'] = 7;
$json['data']['ret']['itemInfo'][125]['levels'][0]['slotsets']['generators']['T'] = array(3,4);
$json['data']['ret']['itemInfo'][125]['levels'][0]['slotsets']['generators']['Q'] = 20;
$json['data']['ret']['itemInfo'][125]['levels'][0]['slotsets']['heavy_guns']['T'] = array(1);
$json['data']['ret']['itemInfo'][125]['levels'][0]['slotsets']['heavy_guns']['Q'] = 2;
$json['data']['ret']['itemInfo'][125]['levels'][0]['slotsets']['extras']['T'] = array(11,9,7,8,10,6);
$json['data']['ret']['itemInfo'][125]['levels'][0]['slotsets']['extras']['Q'] = 5;
$json['data']['ret']['itemInfo'][125]['levels'][0]['selling']['credits'] = 200000;
$json['data']['ret']['itemInfo'][125]['levels'][0]['cdn']['63x63'] = 'c6c8a09a4749af691b6a9947cf2c6900';
$json['data']['ret']['itemInfo'][125]['levels'][0]['cdn']['100x100'] = '5fcdb83e69b401d92cc1ae6abb172300';
$json['data']['ret']['itemInfo'][125]['levels'][0]['cdn']['top'] = 'a604cd4669b80a0ddd89fa54fc946300';


$json['data']['ret']['itemInfo'][126]['L'] = 125;
$json['data']['ret']['itemInfo'][126]['name'] = 'Flax Drone';
$json['data']['ret']['itemInfo'][126]['T'] = 24;
$json['data']['ret']['itemInfo'][126]['C'] = 'drone';
$json['data']['ret']['itemInfo'][126]['repair'] = 0;
$json['data']['ret']['itemInfo'][126]['levels'] = array();
$json['data']['ret']['itemInfo'][126]['levels'][0]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][126]['levels'][0]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][126]['levels'][0]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][126]['levels'][0]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][126]['levels'][0]['selling']['credits'] = 100000;
$json['data']['ret']['itemInfo'][126]['levels'][0]['cdn']['30x30'] = '14ebb8db8014dc4bd757fa2ef74de400';
$json['data']['ret']['itemInfo'][126]['levels'][0]['cdn']['63x63'] = '9e918d6b19b7d5ead16addad0cc35200';
$json['data']['ret']['itemInfo'][126]['levels'][0]['cdn']['100x100'] = 'afba9239e233f506eff21528ab4e8f00';
$json['data']['ret']['itemInfo'][126]['levels'][0]['cdn']['top'] = '79b048a4b8e05add7a2245ebe95d5e00';
$json['data']['ret']['itemInfo'][126]['levels'][1]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][126]['levels'][1]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][126]['levels'][1]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][126]['levels'][1]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][126]['levels'][1]['selling']['credits'] = 150000;
$json['data']['ret']['itemInfo'][126]['levels'][1]['cdn']['30x30'] = 'd951657b84dd80549297702f018b1f00';
$json['data']['ret']['itemInfo'][126]['levels'][1]['cdn']['63x63'] = '66f6d38952f8fb800abbd5e5d96f7700';
$json['data']['ret']['itemInfo'][126]['levels'][1]['cdn']['100x100'] = '3b12423b93122055a76f250f307dee00';
$json['data']['ret']['itemInfo'][126]['levels'][1]['cdn']['top'] = 'cdcc2dc2ac60191715615ac48100e300';
$json['data']['ret']['itemInfo'][126]['levels'][2]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][126]['levels'][2]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][126]['levels'][2]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][126]['levels'][2]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][126]['levels'][2]['selling']['credits'] = 210000;
$json['data']['ret']['itemInfo'][126]['levels'][2]['cdn']['30x30'] = 'b10d193b55f89656936668c1bc559900';
$json['data']['ret']['itemInfo'][126]['levels'][2]['cdn']['63x63'] = 'e3ab25f382927dfd082f290967524500';
$json['data']['ret']['itemInfo'][126]['levels'][2]['cdn']['100x100'] = 'e0dbd77afe0b998abb1be914ff0ca800';
$json['data']['ret']['itemInfo'][126]['levels'][2]['cdn']['top'] = '9c4888900962a7ac074714cfaa206200';
$json['data']['ret']['itemInfo'][126]['levels'][3]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][126]['levels'][3]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][126]['levels'][3]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][126]['levels'][3]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][126]['levels'][3]['selling']['credits'] = 240000;
$json['data']['ret']['itemInfo'][126]['levels'][3]['cdn']['30x30'] = '9c481125952808f464742ffbb0a43500';
$json['data']['ret']['itemInfo'][126]['levels'][3]['cdn']['63x63'] = 'dd3a4359bfadba07d03989ec042b5e00';
$json['data']['ret']['itemInfo'][126]['levels'][3]['cdn']['100x100'] = 'a71d6fe22419ea188a5d2dd78e7b6900';
$json['data']['ret']['itemInfo'][126]['levels'][3]['cdn']['top'] = '873f7968e96ba2b2aa6a867938171b00';
$json['data']['ret']['itemInfo'][126]['levels'][4]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][126]['levels'][4]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][126]['levels'][4]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][126]['levels'][4]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][126]['levels'][4]['selling']['credits'] = 315000;
$json['data']['ret']['itemInfo'][126]['levels'][4]['cdn']['30x30'] = '9cb3929ed0ea6e938eb50599a854d400';
$json['data']['ret']['itemInfo'][126]['levels'][4]['cdn']['63x63'] = '18d7b8fbe928f1b26ae05e8cf8eab200';
$json['data']['ret']['itemInfo'][126]['levels'][4]['cdn']['100x100'] = '0227efd2ca7b8749575885abd3d33e00';
$json['data']['ret']['itemInfo'][126]['levels'][4]['cdn']['top'] = 'e65761d42de94f1eeaa0c30e29d88e00';
$json['data']['ret']['itemInfo'][126]['levels'][5]['slotsets']['default']['T'] = array(0, 4, 11, 9, 7, 8, 10);
$json['data']['ret']['itemInfo'][126]['levels'][5]['slotsets']['default']['Q'] = 2;
$json['data']['ret']['itemInfo'][126]['levels'][5]['slotsets']['design']['T'] = array(16);
$json['data']['ret']['itemInfo'][126]['levels'][5]['slotsets']['design']['Q'] = 1;
$json['data']['ret']['itemInfo'][126]['levels'][5]['selling']['credits'] = 500000;
$json['data']['ret']['itemInfo'][126]['levels'][5]['cdn']['30x30'] = '40860d1594e9b6841ccfa87963f8d800';
$json['data']['ret']['itemInfo'][126]['levels'][5]['cdn']['63x63'] = '0cd363e0f68297796aeb1a1dc8725500';
$json['data']['ret']['itemInfo'][126]['levels'][5]['cdn']['100x100'] = '915c51fde19ca5d0c4878221ae305f00';
$json['data']['ret']['itemInfo'][126]['levels'][5]['cdn']['top'] = 'b6aae2912b6e0eb1b49d50ab5caef400';

$json['data']['ret']['userInfo']['factionRelated'] = $faction;
$json['data']['money']['uridium'] = $uridium;
$json['data']['money']['credits'] = $credits;

$json['data']['map']['types'] = array('Weapon_LaserType','Weapon_HellstormLauncherType','Weapon_WeaponType','Generator_EngineType','Generator_ShieldType','Generator_GeneratorType','Extra_BoosterType','Extra_Cpu_CPUType','Extra_ModuleType','Extra_RobotType','Extra_UpgradeType','Extra_ExtraType','Weapon_Ammo_LaserType','Weapon_Ammo_RocketType','Weapon_Ammo_AmmunitionType','Resource_OreType','Drone_Design_DroneDesignType','Drone_Formation_DroneFormationType','Module_StationModuleType','Pet_PetGearType','Pet_AIProtocolType','Ship_ShipDesignType','Ship_ShipType','Pet_PetType','Drone_DroneType','Item_ItemType');
$json['data']['map']['lootIds'] = array('ship_goliath_design_bastion','pet_pet10','drone_iris','equipment_generator_shield_sg3n-a01','equipment_weapon_laser_mp-1','ammunition_laser_lcb-10','equipment_extra_repbot_rep-s','ammunition_laser_mcb-25','ammunition_laser_mcb-50','ammunition_laser_sab-50','equipment_weapon_laser_lf-2','equipment_extra_cpu_nc-rrb-x','equipment_generator_shield_sg3n-b01','equipment_generator_speed_g3n-7900','resource_ore_xenomit','ammunition_rocket_plt-2021','ammunition_rocket_plt-2026','equipment_weapon_laser_lf-3','equipment_extra_cpu_alb-x','equipment_extra_cpu_arol-x','equipment_extra_cpu_rllb-x','equipment_extra_cpu_sle-04','equipment_extra_cpu_rb-x','equipment_extra_repbot_rep-4','equipment_generator_shield_sg3n-b02','ammunition_rocketlauncher_sar-02','ammunition_specialammo_pld-8','ammunition_specialammo_wiz-x','ammunition_rocketlauncher_eco-10','ammunition_mine_slm-01','ammunition_laser_ucb-100','ammunition_mine_acm-01','ammunition_rocketlauncher_bdr1212','ammunition_firework_fwx-m','ammunition_firework_fwx-l','ammunition_firework_fwx-s','resource_ore_seprom','ammunition_mine_empm-01','ammunition_mine_sabm-01','equipment_weapon_rocketlauncher_hst-2','ammunition_rocketlauncher_hstrm-01','equipment_weapon_laser_lf-4','ammunition_mine_ddm-01','module_ltm-mr','equipment_extra_cpu_rok-t01','equipment_extra_cpu_g3x-crgo-x','equipment_extra_cpu_rd-x','equipment_extra_cpu_ajp-01','resource_blueprint_apis-part','resource_ore_palladium','ship_goliath','ship_goliath_design_veteran','ship_goliath_design_exalted','ship_goliath_design_enforcer','ammunition_rocket_r-310','ammunition_rocket_plt-3030','resource_booty-key','ammunition_laser_rsb-75','resource_ore_prometium','resource_ore_endurium','resource_ore_terbium','resource_ore_prometid','resource_ore_duranium','resource_ore_promerium','ammunition_laser_cbo-100','ammunition_specialammo_dcr-250','ammunition_rocketlauncher_ubr-100','ammunition_rocketlauncher_sar-01','ammunition_rocketlauncher_cbr','equipment_extra_repbot_rep-1','equipment_extra_repbot_rep-2','equipment_extra_repbot_rep-3','equipment_extra_cpu_min-t01','equipment_extra_cpu_min-t02','equipment_extra_cpu_cl04k-xs','equipment_extra_cpu_cl04k-m','equipment_extra_cpu_cl04k-xl','equipment_extra_cpu_nc-awb-x','equipment_extra_cpu_nc-awr-x','equipment_extra_cpu_nc-awl-x','equipment_extra_cpu_g3x-amry-s','equipment_extra_cpu_g3x-amry-m','equipment_extra_cpu_g3x-amry-l','equipment_extra_cpu_sle-01','equipment_extra_cpu_sle-02','equipment_extra_cpu_sle-03','equipment_extra_cpu_dr-01','equipment_extra_cpu_dr-02','equipment_extra_cpu_jp-01','equipment_extra_cpu_jp-02','equipment_extra_cpu_fb-x','equipment_extra_cpu_smb-01','equipment_extra_cpu_ish-01','equipment_extra_cpu_nc-agb-x','equipment_extra_cpu_aim-01','equipment_extra_cpu_aim-02','equipment_extra_cpu_rllb-x','equipment_extra_hmd-07','equipment_weapon_laser_lf-1','equipment_weapon_rocketlauncher_hst-1','equipment_generator_speed_g3n-6900','equipment_generator_speed_g3n-3310','equipment_generator_speed_g3n-3210','equipment_generator_speed_g3n-2010','equipment_generator_speed_g3n-1010','equipment_generator_shield_sg3n-a02','equipment_generator_shield_sg3n-a03','drone_apis','drone_zeus','ship_goliath_design_venom','ship_goliath_design_solace','ship_goliath_design_diminisher','ship_goliath_design_spectrum','ship_goliath_design_sentinel','ship_phoenix','ship_yamato','ship_leonov','ship_defcom','ship_liberator','ship_piranha','ship_nostromo','ship_vengeance','ship_bigboy','ship_aegis','ship_citadel','drone_flax');

echo base64_encode(json_encode($json));
//                    {"isError":0,"data":{"ret":{"filters":{"weapons":[0,1,2],"generators":[3,4,5],"extras":[6,7,8,9,10,11],"ammunition":[12,13,14],"resources":[15],"drone_related":[16,17],"modules":[18],"pet_related":[19,20]},"hangars":[{"hangarID":"196834","name":"","hangar_is_active":true,"hangar_is_selected":true,"general":{"ship":{"I":"5","HP":"16000","L":0,"SM":"ship_liberator","M":["ship_liberator"]},"drones":[]},"config":{"1":{"ship":{"EQ":[]}},"2":{"ship":{"EQ":[]}}}}],"items":[{"I":"8742616","LV":0,"L":1,"S":3,"Q":18},{"I":"8742618","LV":0,"L":2,"S":5,"Q":1},{"I":"8751138","LV":0,"L":3,"S":0,"Q":54},{"I":"8755299","LV":0,"L":4,"S":1,"Q":300}],"itemInfo":[{"L":0,"name":"Liberator","T":21,"C":"ship","levels":[{"slotsets":{"lasers":{"T":[0],"Q":4},"generators":{"T":[3,4],"Q":6},"heavy_guns":{"T":[1],"Q":1},"extras":{"T":[11,9,7,8,10,6],"Q":2}},"selling":{"credits":32000},"cdn":{"63x63":"1fd1699b162b315e7d7097c79019e700","100x100":"12811c57da5f73380b089c37aebde700","top":"4d48488a8ca0d9946c12ab1241d46c00"}}]},{"L":1,"name":"R-310","T":14,"C":"battery","levels":[{"selling":{"credits":50},"cdn":{"30x30":"68af73bca9114add674a573fee166200","63x63":"bd4b785081ad98c8a38efd38c1443b00","100x100":"9d29b47ca17ee0316f80a4bee39c9600"}}]},{"L":2,"name":"Booty Key","T":22,"C":"special","levels":[{"cdn":{"30x30":"ffbc72514edc29adbcb69b1da2c23a00","63x63":"2c2649217fac98e086c9cd8fcec30300","100x100":"ef618aff20a6e2bcc88d806284cfcb00"}}]},{"L":3,"name":"PLT-2026","T":14,"C":"battery","levels":[{"selling":{"credits":250},"cdn":{"30x30":"0eb7d727d0e8d7c05ad9121573a6b200","63x63":"c6bfdcd09949f7b61b98ead3c6773500","100x100":"58fdf543bd4fbd7bfd7bcb011c9d1100"}}]},{"L":4,"name":"MCB-25","T":14,"C":"battery","levels":[{"selling":{"credits":1},"cdn":{"30x30":"becac3718527c5212ffbaef4de6beb00","63x63":"86c2c2d261ef196310b34fb3f92c6800","100x100":"fa407a1644e0563e5138b0499c682100"}}]}],"userInfo":{"factionRelated":"$faction"}},"money":{"uridium":"10,003","credits":"68,950"},"map":{"types":["Weapon_LaserType","Weapon_HellstormLauncherType","Weapon_WeaponType","Generator_EngineType","Generator_ShieldType","Generator_GeneratorType","Extra_BoosterType","Extra_Cpu_CPUType","Extra_ModuleType","Extra_RobotType","Extra_UpgradeType","Extra_ExtraType","Weapon_Ammo_LaserType","Weapon_Ammo_RocketType","Weapon_Ammo_AmmunitionType","Resource_OreType","Drone_Design_DroneDesignType","Drone_Formation_DroneFormationType","Module_StationModuleType","Pet_PetGearType","Pet_AIProtocolType","Ship_ShipType","Item_ItemType"],"lootIds":["ship_liberator","ammunition_rocket_r-310","resource_booty-key","ammunition_rocket_plt-2026","ammunition_laser_mcb-25"]}}}
//                    {"isError":0,"data":{"ret":{"filters":{"weapons":[0,1,2],"generators":[3,4,5],"extras":[6,7,8,9,10,11],"ammunition":[12,13,14],"resources":[15],"drone_related":[16,17],"modules":[18],"pet_related":[19,20]},"hangars":[{"hangarID":"196834","name":"","hangar_is_active":true,"hangar_is_selected":true,"general":{"ship":{"I":"1","HP":"4000","L":0,"SM":"ship_police","M":["ship_police"]},"drones":[]},"config":{"1":{"ship":{"EQ":[]}},"2":{"ship":{"EQ":[]}}}}],"items":[{"I":"8742613","LV":0,"L":1,"S":0},{"I":"8742614","LV":0,"L":2,"S":1},{"I":"8742617","LV":0,"L":3,"S":2,"Q":2000}],"itemInfo":[{"L":0,"name":"Phoenix","T":21,"C":"ship","levels":[{"slotsets":{"lasers":{"T":[0],"Q":1},"generators":{"T":[3,4],"Q":1},"heavy_guns":{"T":[1],"Q":1},"extras":{"T":[11,9,7,8,10,6],"Q":1}},"selling":{"credits":0},"cdn":{"63x63":"cd8f64340c58ff3442bbd1e7ae715500","100x100":"c8fdab3ed091595e5a4d122ef33eee00","top":"c96f80f53d3010ddbdfa5f88ad2d4e00"}}]},{"L":0,"name":"SG3N-A01","T":4,"C":"generator","levels":[{"selling":{"credits":4000},"cdn":{"30x30":"8c0b74bf0cc43c58fb39e6d48c495000","63x63":"d2fc1d2a80f3ef4376c9b63145b10c00","100x100":"19228ba81b387583a63ed8c9a9465400"}}]},{"L":2,"name":"MP-1","T":0,"C":"laser","levels":[{"selling":{"credits":20000},"cdn":{"30x30":"cfde29bcddbbfbcf4abccb06a1bad900","63x63":"52eb84ef703379bc9cc9268f59ff5a00","100x100":"23ad6cc5c949ffce0e6ff2683b16e700"}}]},{"L":3,"name":"LCB-10","T":14,"C":"battery","levels":[{"selling":{"credits":5},"cdn":{"30x30":"dae4f308e45cc4a93ac36451afabc700","63x63":"c02154d2ce135d660f647631dbbfbc00","100x100":"d8db5c48fe907c65a74b77b7206a5e00"}}]},{"L":4,"name":"R-310","T":14,"C":"battery","levels":[{"selling":{"credits":50},"cdn":{"30x30":"68af73bca9114add674a573fee166200","63x63":"bd4b785081ad98c8a38efd38c1443b00","100x100":"9d29b47ca17ee0316f80a4bee39c9600"}}]},{"L":5,"name":"Repair Robot Basic","T":9,"C":"special","levels":[{"selling":{"credits":3750},"cdn":{"30x30":"6512f6cf8e8d40ff25c73b0c225e5500","63x63":"c82f70710b97fc05410bb53b6b8e7400","100x100":"d474477ba5d66d7f3255fb1068eeea00"}}]},{"L":6,"name":"Booty Key","T":22,"C":"special","levels":[{"cdn":{"30x30":"ffbc72514edc29adbcb69b1da2c23a00","63x63":"2c2649217fac98e086c9cd8fcec30300","100x100":"ef618aff20a6e2bcc88d806284cfcb00"}}]}],"userInfo":{"factionRelated":"$faction"}},"money":{"uridium":"10,000","credits":"30,000"},"map":{"types":["Weapon_LaserType","Weapon_HellstormLauncherType","Weapon_WeaponType","Generator_EngineType","Generator_ShieldType","Generator_GeneratorType","Extra_BoosterType","Extra_Cpu_CPUType","Extra_ModuleType","Extra_RobotType","Extra_UpgradeType","Extra_ExtraType","Weapon_Ammo_LaserType","Weapon_Ammo_RocketType","Weapon_Ammo_AmmunitionType","Resource_OreType","Drone_Design_DroneDesignType","Drone_Formation_DroneFormationType","Module_StationModuleType","Pet_PetGearType","Pet_AIProtocolType","Ship_ShipType","Item_ItemType"],"lootIds":["ship_police","equipment_generator_shield_sg3n-a01","equipment_weapon_laser_mp-1","ammunition_laser_lcb-10","ammunition_rocket_r-310","equipment_extra_repbot_rep-s","resource_booty-key"]}}}
//echo base64_encode('{"isError":0,"data":{"ret":{"filters":{"weapons":[0,1,2],"generators":[3,4,5],"extras":[6,7,8,9,10,11],"ammunition":[12,13,14],"resources":[15],"drone_related":[16,17],"modules":[18],"pet_related":[19,20]},"hangars":[{"hangarID":"196834","name":"","hangar_is_active":true,"hangar_is_selected":true,"general":{"ship":{"I":"1","HP":"4000","L":0,"SM":"ship_police","M":["ship_police"]},"drones":[]},"config":{"1":{"ship":{"EQ":[]}},"2":{"ship":{"EQ":[]}}}}],"items":[{"I":"8742618","LV":0,"L":1,"S":5,"Q":1}],"itemInfo":[{"L":0,"name":"Phoenix","T":21,"C":"ship","levels":[{"slotsets":{"lasers":{"T":[0],"Q":1},"generators":{"T":[3,4],"Q":1},"heavy_guns":{"T":[1],"Q":1},"extras":{"T":[11,9,7,8,10,6],"Q":1}},"selling":{"credits":0},"cdn":{"63x63":"cd8f64340c58ff3442bbd1e7ae715500","100x100":"c8fdab3ed091595e5a4d122ef33eee00","top":"c96f80f53d3010ddbdfa5f88ad2d4e00"}}]},{"L":1,"name":"Booty Key","T":22,"C":"special","levels":[{"cdn":{"30x30":"ffbc72514edc29adbcb69b1da2c23a00","63x63":"2c2649217fac98e086c9cd8fcec30300","100x100":"ef618aff20a6e2bcc88d806284cfcb00"}}]}],"userInfo":{"factionRelated":"$faction"}},"money":{"uridium":"10,000","credits":"72,750"},"map":{"types":["Weapon_LaserType","Weapon_HellstormLauncherType","Weapon_WeaponType","Generator_EngineType","Generator_ShieldType","Generator_GeneratorType","Extra_BoosterType","Extra_Cpu_CPUType","Extra_ModuleType","Extra_RobotType","Extra_UpgradeType","Extra_ExtraType","Weapon_Ammo_LaserType","Weapon_Ammo_RocketType","Weapon_Ammo_AmmunitionType","Resource_OreType","Drone_Design_DroneDesignType","Drone_Formation_DroneFormationType","Module_StationModuleType","Pet_PetGearType","Pet_AIProtocolType","Ship_ShipType","Item_ItemType"],"lootIds":["ship_police","resource_booty-key"]}}}');
}
else if ($action == "move")
{

mysqli_query($con,"UPDATE players SET changedconfiguration=1 WHERE playerID=$ID");
$post = $_POST["params"];
$params = base64_decode($post);
$result = json_decode($params);
$from = $result->from->target;
$to = $result->to->target;
$items = $result->from->items;
$count = count($items);
if ($row2['shipnotbase'] == 0)
{
if ($from == "inventory" && $to == "inventory")
{
echo base64_encode('{"isError":1, "error":{"message":"Error"}}');
}
else
{
$configId = $result->from->configId;
$sl = 0;
$q = false;
$w = false;
$json2 = array('isError' => 0, 'data' => array());
$json2['data']['ret'] = array();
$json2['data']['money']['uridium'] = $uridium;
$json2['data']['money']['credits'] = $credits;
$heavy = 1;
$extras = 15;
if ($shipId == 1)
{
$lasersq = 1;
$generatorq = 1;
}
else if ($shipId == 2)
{
$lasersq = 2;
$generatorq = 2;
}
else if ($shipId == 3)
{
$lasersq = 6;
$generatorq = 6;
}
else if ($shipId == 4)
{
$lasersq = 3;
$generatorq = 5;
}
else if ($shipId == 5)
{
$lasersq = 4;
$generatorq = 6;
}
else if ($shipId == 6)
{
$lasersq = 6;
$generatorq = 8;
}
else if ($shipId == 7)
{
$lasersq = 7;
$generatorq = 10;
}
else if ($shipId == 8)
{
$lasersq = 10;
$generatorq = 10;
}
else if ($shipId == 9)
{
$lasersq = 8;
$generatorq = 15;
}
else if ($shipId == 128)
{
$lasersq = 10;
$generatorq = 15;
}
else if ($shipId == 129)
{
$lasersq = 7;
$generatorq = 20;
$heavy = 2;
}
else
{
$lasersq = 15;
$generatorq = 15;
}
$result2 = mysqli_query($con,"SELECT * FROM players_equipment
WHERE playerID=$ID");
$row2 = mysqli_fetch_array($result2);
if ($configId == 1){
$config1_lasers_slot1 = $row2["config1_lasers_slot1"];
$config1_lasers_slot2 = $row2["config1_lasers_slot2"];
$config1_lasers_slot3 = $row2["config1_lasers_slot3"];
$config1_lasers_slot4 = $row2["config1_lasers_slot4"];
$config1_lasers_slot5 = $row2["config1_lasers_slot5"];
$config1_lasers_slot6 = $row2["config1_lasers_slot6"];
$config1_lasers_slot7 = $row2["config1_lasers_slot7"];
$config1_lasers_slot8 = $row2["config1_lasers_slot8"];
$config1_lasers_slot9 = $row2["config1_lasers_slot9"];
$config1_lasers_slot10 = $row2["config1_lasers_slot10"];
$config1_lasers_slot11 = $row2["config1_lasers_slot11"];
$config1_lasers_slot12 = $row2["config1_lasers_slot12"];
$config1_lasers_slot13 = $row2["config1_lasers_slot13"];
$config1_lasers_slot14 = $row2["config1_lasers_slot14"];
$config1_lasers_slot15 = $row2["config1_lasers_slot15"];
$config1_lasers_slot16 = $row2["config1_lasers_slot16"];
$config1_lasers_slot17 = $row2["config1_lasers_slot17"];
$config1_lasers_slot18 = $row2["config1_lasers_slot18"];
$config1_lasers_slot19 = $row2["config1_lasers_slot19"];
$config1_lasers_slot20 = $row2["config1_lasers_slot20"];
$config1_generators_slot1 = $row2["config1_generators_slot1"];
$config1_generators_slot2 = $row2["config1_generators_slot2"];
$config1_generators_slot3 = $row2["config1_generators_slot3"];
$config1_generators_slot4 = $row2["config1_generators_slot4"];
$config1_generators_slot5 = $row2["config1_generators_slot5"];
$config1_generators_slot6 = $row2["config1_generators_slot6"];
$config1_generators_slot7 = $row2["config1_generators_slot7"];
$config1_generators_slot8 = $row2["config1_generators_slot8"];
$config1_generators_slot9 = $row2["config1_generators_slot9"];
$config1_generators_slot10 = $row2["config1_generators_slot10"];
$config1_generators_slot11 = $row2["config1_generators_slot11"];
$config1_generators_slot12 = $row2["config1_generators_slot12"];
$config1_generators_slot13 = $row2["config1_generators_slot13"];
$config1_generators_slot14 = $row2["config1_generators_slot14"];
$config1_generators_slot15 = $row2["config1_generators_slot15"];
$config1_generators_slot16 = $row2["config1_generators_slot16"];
$config1_generators_slot17 = $row2["config1_generators_slot17"];
$config1_generators_slot18 = $row2["config1_generators_slot18"];
$config1_generators_slot19 = $row2["config1_generators_slot19"];
$config1_generators_slot20 = $row2["config1_generators_slot20"];
$config1_drone1_slot1 = $row2["config1_drone1_slot1"];
$config1_drone1_slot2 = $row2["config1_drone1_slot2"];
$config1_drone2_slot1 = $row2["config1_drone2_slot1"];
$config1_drone2_slot2 = $row2["config1_drone2_slot2"];
$config1_drone3_slot1 = $row2["config1_drone3_slot1"];
$config1_drone3_slot2 = $row2["config1_drone3_slot2"];
$config1_drone4_slot1 = $row2["config1_drone4_slot1"];
$config1_drone4_slot2 = $row2["config1_drone4_slot2"];
$config1_drone5_slot1 = $row2["config1_drone5_slot1"];
$config1_drone5_slot2 = $row2["config1_drone5_slot2"];
$config1_drone6_slot1 = $row2["config1_drone6_slot1"];
$config1_drone6_slot2 = $row2["config1_drone6_slot2"];
$config1_drone7_slot1 = $row2["config1_drone7_slot1"];
$config1_drone7_slot2 = $row2["config1_drone7_slot2"];
$config1_drone8_slot1 = $row2["config1_drone8_slot1"];
$config1_drone8_slot2 = $row2["config1_drone8_slot2"];
$config1_drone9_slot1 = $row2["config1_drone9_slot1"];
$config1_drone9_slot2 = $row2["config1_drone9_slot2"];
$config1_drone10_slot1 = $row2["config1_drone10_slot1"];
$config1_drone10_slot2 = $row2["config1_drone10_slot2"];
$config1_heavy_guns_slot1 = $row2['config1_heavy_guns_slot1'];
$config1_heavy_guns_slot2 = $row2['config1_heavy_guns_slot2'];
$config1_extras_slot1 = $row2["config1_extras_slot1"];
$config1_extras_slot2 = $row2["config1_extras_slot2"];
$config1_extras_slot3 = $row2["config1_extras_slot3"];
$config1_extras_slot4 = $row2["config1_extras_slot4"];
$config1_extras_slot5 = $row2["config1_extras_slot5"];
$config1_extras_slot6 = $row2["config1_extras_slot6"];
$config1_extras_slot7 = $row2["config1_extras_slot7"];
$config1_extras_slot8 = $row2["config1_extras_slot8"];
$config1_extras_slot9 = $row2["config1_extras_slot9"];
$config1_extras_slot10 = $row2["config1_extras_slot10"];
$config1_extras_slot11 = $row2["config1_extras_slot11"];
$config1_extras_slot12 = $row2["config1_extras_slot12"];
$config1_extras_slot13 = $row2["config1_extras_slot13"];
$config1_extras_slot14 = $row2["config1_extras_slot14"];
$config1_extras_slot15 = $row2["config1_extras_slot15"];
if ($from == "ship" && $to == "inventory")
{
$slotset = $result->from->slotset;
if ($slotset == "lasers")
{
foreach($items as &$value)
{
if ($value > 739999 && $value < 750000)
{
$dmg1 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 -= 150;
}
$sl++;
if ($value == $config1_lasers_slot1)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot1='$config1_lasers_slot2', config1_lasers_slot2='$config1_lasers_slot3', config1_lasers_slot3='$config1_lasers_slot4', config1_lasers_slot4='$config1_lasers_slot5', config1_lasers_slot5='$config1_lasers_slot6', config1_lasers_slot6='$config1_lasers_slot7', config1_lasers_slot7='$config1_lasers_slot8', config1_lasers_slot8='$config1_lasers_slot9', config1_lasers_slot9='$config1_lasers_slot10', config1_lasers_slot10='$config1_lasers_slot11', config1_lasers_slot11='$config1_lasers_slot12', config1_lasers_slot12='$config1_lasers_slot13', config1_lasers_slot13='$config1_lasers_slot14', config1_lasers_slot14='$config1_lasers_slot15', config1_lasers_slot15='$config1_lasers_slot16', config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot1 = $config1_lasers_slot2;
$config1_lasers_slot2 = $config1_lasers_slot3;
$config1_lasers_slot3 = $config1_lasers_slot4;
$config1_lasers_slot4 = $config1_lasers_slot5;
$config1_lasers_slot5 = $config1_lasers_slot6;
$config1_lasers_slot6 = $config1_lasers_slot7;
$config1_lasers_slot7 = $config1_lasers_slot8;
$config1_lasers_slot8 = $config1_lasers_slot9;
$config1_lasers_slot9 = $config1_lasers_slot10;
$config1_lasers_slot10 = $config1_lasers_slot11;
$config1_lasers_slot11 = $config1_lasers_slot12;
$config1_lasers_slot12 = $config1_lasers_slot13;
$config1_lasers_slot13 = $config1_lasers_slot14;
$config1_lasers_slot14 = $config1_lasers_slot15;
$config1_lasers_slot15 = $config1_lasers_slot16;
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot2)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot2='$config1_lasers_slot3', config1_lasers_slot3='$config1_lasers_slot4', config1_lasers_slot4='$config1_lasers_slot5', config1_lasers_slot5='$config1_lasers_slot6', config1_lasers_slot6='$config1_lasers_slot7', config1_lasers_slot7='$config1_lasers_slot8', config1_lasers_slot8='$config1_lasers_slot9', config1_lasers_slot9='$config1_lasers_slot10', config1_lasers_slot10='$config1_lasers_slot11', config1_lasers_slot11='$config1_lasers_slot12', config1_lasers_slot12='$config1_lasers_slot13', config1_lasers_slot13='$config1_lasers_slot14', config1_lasers_slot14='$config1_lasers_slot15', config1_lasers_slot15='$config1_lasers_slot16', config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot2 = $config1_lasers_slot3;
$config1_lasers_slot3 = $config1_lasers_slot4;
$config1_lasers_slot4 = $config1_lasers_slot5;
$config1_lasers_slot5 = $config1_lasers_slot6;
$config1_lasers_slot6 = $config1_lasers_slot7;
$config1_lasers_slot7 = $config1_lasers_slot8;
$config1_lasers_slot8 = $config1_lasers_slot9;
$config1_lasers_slot9 = $config1_lasers_slot10;
$config1_lasers_slot10 = $config1_lasers_slot11;
$config1_lasers_slot11 = $config1_lasers_slot12;
$config1_lasers_slot12 = $config1_lasers_slot13;
$config1_lasers_slot13 = $config1_lasers_slot14;
$config1_lasers_slot14 = $config1_lasers_slot15;
$config1_lasers_slot15 = $config1_lasers_slot16;
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot3)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot3='$config1_lasers_slot4', config1_lasers_slot4='$config1_lasers_slot5', config1_lasers_slot5='$config1_lasers_slot6', config1_lasers_slot6='$config1_lasers_slot7', config1_lasers_slot7='$config1_lasers_slot8', config1_lasers_slot8='$config1_lasers_slot9', config1_lasers_slot9='$config1_lasers_slot10', config1_lasers_slot10='$config1_lasers_slot11', config1_lasers_slot11='$config1_lasers_slot12', config1_lasers_slot12='$config1_lasers_slot13', config1_lasers_slot13='$config1_lasers_slot14', config1_lasers_slot14='$config1_lasers_slot15', config1_lasers_slot15='$config1_lasers_slot16', config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot3 = $config1_lasers_slot4;
$config1_lasers_slot4 = $config1_lasers_slot5;
$config1_lasers_slot5 = $config1_lasers_slot6;
$config1_lasers_slot6 = $config1_lasers_slot7;
$config1_lasers_slot7 = $config1_lasers_slot8;
$config1_lasers_slot8 = $config1_lasers_slot9;
$config1_lasers_slot9 = $config1_lasers_slot10;
$config1_lasers_slot10 = $config1_lasers_slot11;
$config1_lasers_slot11 = $config1_lasers_slot12;
$config1_lasers_slot12 = $config1_lasers_slot13;
$config1_lasers_slot13 = $config1_lasers_slot14;
$config1_lasers_slot14 = $config1_lasers_slot15;
$config1_lasers_slot15 = $config1_lasers_slot16;
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot4)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot4='$config1_lasers_slot5', config1_lasers_slot5='$config1_lasers_slot6', config1_lasers_slot6='$config1_lasers_slot7', config1_lasers_slot7='$config1_lasers_slot8', config1_lasers_slot8='$config1_lasers_slot9', config1_lasers_slot9='$config1_lasers_slot10', config1_lasers_slot10='$config1_lasers_slot11', config1_lasers_slot11='$config1_lasers_slot12', config1_lasers_slot12='$config1_lasers_slot13', config1_lasers_slot13='$config1_lasers_slot14', config1_lasers_slot14='$config1_lasers_slot15', config1_lasers_slot15='$config1_lasers_slot16', config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot4 = $config1_lasers_slot5;
$config1_lasers_slot5 = $config1_lasers_slot6;
$config1_lasers_slot6 = $config1_lasers_slot7;
$config1_lasers_slot7 = $config1_lasers_slot8;
$config1_lasers_slot8 = $config1_lasers_slot9;
$config1_lasers_slot9 = $config1_lasers_slot10;
$config1_lasers_slot10 = $config1_lasers_slot11;
$config1_lasers_slot11 = $config1_lasers_slot12;
$config1_lasers_slot12 = $config1_lasers_slot13;
$config1_lasers_slot13 = $config1_lasers_slot14;
$config1_lasers_slot14 = $config1_lasers_slot15;
$config1_lasers_slot15 = $config1_lasers_slot16;
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot5)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot5='$config1_lasers_slot6', config1_lasers_slot6='$config1_lasers_slot7', config1_lasers_slot7='$config1_lasers_slot8', config1_lasers_slot8='$config1_lasers_slot9', config1_lasers_slot9='$config1_lasers_slot10', config1_lasers_slot10='$config1_lasers_slot11', config1_lasers_slot11='$config1_lasers_slot12', config1_lasers_slot12='$config1_lasers_slot13', config1_lasers_slot13='$config1_lasers_slot14', config1_lasers_slot14='$config1_lasers_slot15', config1_lasers_slot15='$config1_lasers_slot16', config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot5 = $config1_lasers_slot6;
$config1_lasers_slot6 = $config1_lasers_slot7;
$config1_lasers_slot7 = $config1_lasers_slot8;
$config1_lasers_slot8 = $config1_lasers_slot9;
$config1_lasers_slot9 = $config1_lasers_slot10;
$config1_lasers_slot10 = $config1_lasers_slot11;
$config1_lasers_slot11 = $config1_lasers_slot12;
$config1_lasers_slot12 = $config1_lasers_slot13;
$config1_lasers_slot13 = $config1_lasers_slot14;
$config1_lasers_slot14 = $config1_lasers_slot15;
$config1_lasers_slot15 = $config1_lasers_slot16;
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot6)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot6='$config1_lasers_slot7', config1_lasers_slot7='$config1_lasers_slot8', config1_lasers_slot8='$config1_lasers_slot9', config1_lasers_slot9='$config1_lasers_slot10', config1_lasers_slot10='$config1_lasers_slot11', config1_lasers_slot11='$config1_lasers_slot12', config1_lasers_slot12='$config1_lasers_slot13', config1_lasers_slot13='$config1_lasers_slot14', config1_lasers_slot14='$config1_lasers_slot15', config1_lasers_slot15='$config1_lasers_slot16', config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot6 = $config1_lasers_slot7;
$config1_lasers_slot7 = $config1_lasers_slot8;
$config1_lasers_slot8 = $config1_lasers_slot9;
$config1_lasers_slot9 = $config1_lasers_slot10;
$config1_lasers_slot10 = $config1_lasers_slot11;
$config1_lasers_slot11 = $config1_lasers_slot12;
$config1_lasers_slot12 = $config1_lasers_slot13;
$config1_lasers_slot13 = $config1_lasers_slot14;
$config1_lasers_slot14 = $config1_lasers_slot15;
$config1_lasers_slot15 = $config1_lasers_slot16;
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot7)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot7='$config1_lasers_slot8', config1_lasers_slot8='$config1_lasers_slot9', config1_lasers_slot9='$config1_lasers_slot10', config1_lasers_slot10='$config1_lasers_slot11', config1_lasers_slot11='$config1_lasers_slot12', config1_lasers_slot12='$config1_lasers_slot13', config1_lasers_slot13='$config1_lasers_slot14', config1_lasers_slot14='$config1_lasers_slot15', config1_lasers_slot15='$config1_lasers_slot16', config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot7 = $config1_lasers_slot8;
$config1_lasers_slot8 = $config1_lasers_slot9;
$config1_lasers_slot9 = $config1_lasers_slot10;
$config1_lasers_slot10 = $config1_lasers_slot11;
$config1_lasers_slot11 = $config1_lasers_slot12;
$config1_lasers_slot12 = $config1_lasers_slot13;
$config1_lasers_slot13 = $config1_lasers_slot14;
$config1_lasers_slot14 = $config1_lasers_slot15;
$config1_lasers_slot15 = $config1_lasers_slot16;
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot8)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot8='$config1_lasers_slot9', config1_lasers_slot9='$config1_lasers_slot10', config1_lasers_slot10='$config1_lasers_slot11', config1_lasers_slot11='$config1_lasers_slot12', config1_lasers_slot12='$config1_lasers_slot13', config1_lasers_slot13='$config1_lasers_slot14', config1_lasers_slot14='$config1_lasers_slot15', config1_lasers_slot15='$config1_lasers_slot16', config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot8 = $config1_lasers_slot9;
$config1_lasers_slot9 = $config1_lasers_slot10;
$config1_lasers_slot10 = $config1_lasers_slot11;
$config1_lasers_slot11 = $config1_lasers_slot12;
$config1_lasers_slot12 = $config1_lasers_slot13;
$config1_lasers_slot13 = $config1_lasers_slot14;
$config1_lasers_slot14 = $config1_lasers_slot15;
$config1_lasers_slot15 = $config1_lasers_slot16;
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot9)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot9='$config1_lasers_slot10', config1_lasers_slot10='$config1_lasers_slot11', config1_lasers_slot11='$config1_lasers_slot12', config1_lasers_slot12='$config1_lasers_slot13', config1_lasers_slot13='$config1_lasers_slot14', config1_lasers_slot14='$config1_lasers_slot15', config1_lasers_slot15='$config1_lasers_slot16', config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot9 = $config1_lasers_slot10;
$config1_lasers_slot10 = $config1_lasers_slot11;
$config1_lasers_slot11 = $config1_lasers_slot12;
$config1_lasers_slot12 = $config1_lasers_slot13;
$config1_lasers_slot13 = $config1_lasers_slot14;
$config1_lasers_slot14 = $config1_lasers_slot15;
$config1_lasers_slot15 = $config1_lasers_slot16;
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot10)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot10='$config1_lasers_slot11', config1_lasers_slot11='$config1_lasers_slot12', config1_lasers_slot12='$config1_lasers_slot13', config1_lasers_slot13='$config1_lasers_slot14', config1_lasers_slot14='$config1_lasers_slot15', config1_lasers_slot15='$config1_lasers_slot16', config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot10 = $config1_lasers_slot11;
$config1_lasers_slot11 = $config1_lasers_slot12;
$config1_lasers_slot12 = $config1_lasers_slot13;
$config1_lasers_slot13 = $config1_lasers_slot14;
$config1_lasers_slot14 = $config1_lasers_slot15;
$config1_lasers_slot15 = $config1_lasers_slot16;
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot11)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot11='$config1_lasers_slot12', config1_lasers_slot12='$config1_lasers_slot13', config1_lasers_slot13='$config1_lasers_slot14', config1_lasers_slot14='$config1_lasers_slot15', config1_lasers_slot15='$config1_lasers_slot16', config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot11 = $config1_lasers_slot12;
$config1_lasers_slot12 = $config1_lasers_slot13;
$config1_lasers_slot13 = $config1_lasers_slot14;
$config1_lasers_slot14 = $config1_lasers_slot15;
$config1_lasers_slot15 = $config1_lasers_slot16;
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot12)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot12='$config1_lasers_slot13', config1_lasers_slot13='$config1_lasers_slot14', config1_lasers_slot14='$config1_lasers_slot15', config1_lasers_slot15='$config1_lasers_slot16', config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot12 = $config1_lasers_slot13;
$config1_lasers_slot13 = $config1_lasers_slot14;
$config1_lasers_slot14 = $config1_lasers_slot15;
$config1_lasers_slot15 = $config1_lasers_slot16;
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot13)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot13='$config1_lasers_slot14', config1_lasers_slot14='$config1_lasers_slot15', config1_lasers_slot15='$config1_lasers_slot16', config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot13 = $config1_lasers_slot14;
$config1_lasers_slot14 = $config1_lasers_slot15;
$config1_lasers_slot15 = $config1_lasers_slot16;
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot14)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$config1_lasers_slot15', config1_lasers_slot15='$config1_lasers_slot16', config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot14 = $config1_lasers_slot15;
$config1_lasers_slot15 = $config1_lasers_slot16;
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot15)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15='$config1_lasers_slot16', config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot15 = $config1_lasers_slot16;
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot16)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot16='$config1_lasers_slot17', config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot16 = $config1_lasers_slot17;
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot17)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot17='$config1_lasers_slot18', config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot17 = $config1_lasers_slot18;
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot18)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot18='$config1_lasers_slot19', config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot18 = $config1_lasers_slot19;
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot19)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot19='$config1_lasers_slot20', config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot19 = $config1_lasers_slot20;
$config1_lasers_slot20 = 0;
}
else if ($value == $config1_lasers_slot20)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot20=0 WHERE playerID=$ID");
$config1_lasers_slot20 = 0;
}
}
}
else if ($slotset == "generators")
{
foreach($items as &$value)
{
if ($value > 1269999 && $value < 1280000)
{
$speed1 -= 10;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 -= 10000;
}
$sl++;
if ($value == $config1_generators_slot1)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot1='$config1_generators_slot2', config1_generators_slot2='$config1_generators_slot3', config1_generators_slot3='$config1_generators_slot4', config1_generators_slot4='$config1_generators_slot5', config1_generators_slot5='$config1_generators_slot6', config1_generators_slot6='$config1_generators_slot7', config1_generators_slot7='$config1_generators_slot8', config1_generators_slot8='$config1_generators_slot9', config1_generators_slot9='$config1_generators_slot10', config1_generators_slot10='$config1_generators_slot11', config1_generators_slot11='$config1_generators_slot12', config1_generators_slot12='$config1_generators_slot13', config1_generators_slot13='$config1_generators_slot14', config1_generators_slot14='$config1_generators_slot15', config1_generators_slot15='$config1_generators_slot16', config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot1 = $config1_generators_slot2;
$config1_generators_slot2 = $config1_generators_slot3;
$config1_generators_slot3 = $config1_generators_slot4;
$config1_generators_slot4 = $config1_generators_slot5;
$config1_generators_slot5 = $config1_generators_slot6;
$config1_generators_slot6 = $config1_generators_slot7;
$config1_generators_slot7 = $config1_generators_slot8;
$config1_generators_slot8 = $config1_generators_slot9;
$config1_generators_slot9 = $config1_generators_slot10;
$config1_generators_slot10 = $config1_generators_slot11;
$config1_generators_slot11 = $config1_generators_slot12;
$config1_generators_slot12 = $config1_generators_slot13;
$config1_generators_slot13 = $config1_generators_slot14;
$config1_generators_slot14 = $config1_generators_slot15;
$config1_generators_slot15 = $config1_generators_slot16;
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot2)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot2='$config1_generators_slot3', config1_generators_slot3='$config1_generators_slot4', config1_generators_slot4='$config1_generators_slot5', config1_generators_slot5='$config1_generators_slot6', config1_generators_slot6='$config1_generators_slot7', config1_generators_slot7='$config1_generators_slot8', config1_generators_slot8='$config1_generators_slot9', config1_generators_slot9='$config1_generators_slot10', config1_generators_slot10='$config1_generators_slot11', config1_generators_slot11='$config1_generators_slot12', config1_generators_slot12='$config1_generators_slot13', config1_generators_slot13='$config1_generators_slot14', config1_generators_slot14='$config1_generators_slot15', config1_generators_slot15='$config1_generators_slot16', config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot2 = $config1_generators_slot3;
$config1_generators_slot3 = $config1_generators_slot4;
$config1_generators_slot4 = $config1_generators_slot5;
$config1_generators_slot5 = $config1_generators_slot6;
$config1_generators_slot6 = $config1_generators_slot7;
$config1_generators_slot7 = $config1_generators_slot8;
$config1_generators_slot8 = $config1_generators_slot9;
$config1_generators_slot9 = $config1_generators_slot10;
$config1_generators_slot10 = $config1_generators_slot11;
$config1_generators_slot11 = $config1_generators_slot12;
$config1_generators_slot12 = $config1_generators_slot13;
$config1_generators_slot13 = $config1_generators_slot14;
$config1_generators_slot14 = $config1_generators_slot15;
$config1_generators_slot15 = $config1_generators_slot16;
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot3)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot3='$config1_generators_slot4', config1_generators_slot4='$config1_generators_slot5', config1_generators_slot5='$config1_generators_slot6', config1_generators_slot6='$config1_generators_slot7', config1_generators_slot7='$config1_generators_slot8', config1_generators_slot8='$config1_generators_slot9', config1_generators_slot9='$config1_generators_slot10', config1_generators_slot10='$config1_generators_slot11', config1_generators_slot11='$config1_generators_slot12', config1_generators_slot12='$config1_generators_slot13', config1_generators_slot13='$config1_generators_slot14', config1_generators_slot14='$config1_generators_slot15', config1_generators_slot15='$config1_generators_slot16', config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot3 = $config1_generators_slot4;
$config1_generators_slot4 = $config1_generators_slot5;
$config1_generators_slot5 = $config1_generators_slot6;
$config1_generators_slot6 = $config1_generators_slot7;
$config1_generators_slot7 = $config1_generators_slot8;
$config1_generators_slot8 = $config1_generators_slot9;
$config1_generators_slot9 = $config1_generators_slot10;
$config1_generators_slot10 = $config1_generators_slot11;
$config1_generators_slot11 = $config1_generators_slot12;
$config1_generators_slot12 = $config1_generators_slot13;
$config1_generators_slot13 = $config1_generators_slot14;
$config1_generators_slot14 = $config1_generators_slot15;
$config1_generators_slot15 = $config1_generators_slot16;
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot4)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot4='$config1_generators_slot5', config1_generators_slot5='$config1_generators_slot6', config1_generators_slot6='$config1_generators_slot7', config1_generators_slot7='$config1_generators_slot8', config1_generators_slot8='$config1_generators_slot9', config1_generators_slot9='$config1_generators_slot10', config1_generators_slot10='$config1_generators_slot11', config1_generators_slot11='$config1_generators_slot12', config1_generators_slot12='$config1_generators_slot13', config1_generators_slot13='$config1_generators_slot14', config1_generators_slot14='$config1_generators_slot15', config1_generators_slot15='$config1_generators_slot16', config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot4 = $config1_generators_slot5;
$config1_generators_slot5 = $config1_generators_slot6;
$config1_generators_slot6 = $config1_generators_slot7;
$config1_generators_slot7 = $config1_generators_slot8;
$config1_generators_slot8 = $config1_generators_slot9;
$config1_generators_slot9 = $config1_generators_slot10;
$config1_generators_slot10 = $config1_generators_slot11;
$config1_generators_slot11 = $config1_generators_slot12;
$config1_generators_slot12 = $config1_generators_slot13;
$config1_generators_slot13 = $config1_generators_slot14;
$config1_generators_slot14 = $config1_generators_slot15;
$config1_generators_slot15 = $config1_generators_slot16;
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot5)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot5='$config1_generators_slot6', config1_generators_slot6='$config1_generators_slot7', config1_generators_slot7='$config1_generators_slot8', config1_generators_slot8='$config1_generators_slot9', config1_generators_slot9='$config1_generators_slot10', config1_generators_slot10='$config1_generators_slot11', config1_generators_slot11='$config1_generators_slot12', config1_generators_slot12='$config1_generators_slot13', config1_generators_slot13='$config1_generators_slot14', config1_generators_slot14='$config1_generators_slot15', config1_generators_slot15='$config1_generators_slot16', config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot5 = $config1_generators_slot6;
$config1_generators_slot6 = $config1_generators_slot7;
$config1_generators_slot7 = $config1_generators_slot8;
$config1_generators_slot8 = $config1_generators_slot9;
$config1_generators_slot9 = $config1_generators_slot10;
$config1_generators_slot10 = $config1_generators_slot11;
$config1_generators_slot11 = $config1_generators_slot12;
$config1_generators_slot12 = $config1_generators_slot13;
$config1_generators_slot13 = $config1_generators_slot14;
$config1_generators_slot14 = $config1_generators_slot15;
$config1_generators_slot15 = $config1_generators_slot16;
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot6)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot6='$config1_generators_slot7', config1_generators_slot7='$config1_generators_slot8', config1_generators_slot8='$config1_generators_slot9', config1_generators_slot9='$config1_generators_slot10', config1_generators_slot10='$config1_generators_slot11', config1_generators_slot11='$config1_generators_slot12', config1_generators_slot12='$config1_generators_slot13', config1_generators_slot13='$config1_generators_slot14', config1_generators_slot14='$config1_generators_slot15', config1_generators_slot15='$config1_generators_slot16', config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot6 = $config1_generators_slot7;
$config1_generators_slot7 = $config1_generators_slot8;
$config1_generators_slot8 = $config1_generators_slot9;
$config1_generators_slot9 = $config1_generators_slot10;
$config1_generators_slot10 = $config1_generators_slot11;
$config1_generators_slot11 = $config1_generators_slot12;
$config1_generators_slot12 = $config1_generators_slot13;
$config1_generators_slot13 = $config1_generators_slot14;
$config1_generators_slot14 = $config1_generators_slot15;
$config1_generators_slot15 = $config1_generators_slot16;
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot7)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot7='$config1_generators_slot8', config1_generators_slot8='$config1_generators_slot9', config1_generators_slot9='$config1_generators_slot10', config1_generators_slot10='$config1_generators_slot11', config1_generators_slot11='$config1_generators_slot12', config1_generators_slot12='$config1_generators_slot13', config1_generators_slot13='$config1_generators_slot14', config1_generators_slot14='$config1_generators_slot15', config1_generators_slot15='$config1_generators_slot16', config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot7 = $config1_generators_slot8;
$config1_generators_slot8 = $config1_generators_slot9;
$config1_generators_slot9 = $config1_generators_slot10;
$config1_generators_slot10 = $config1_generators_slot11;
$config1_generators_slot11 = $config1_generators_slot12;
$config1_generators_slot12 = $config1_generators_slot13;
$config1_generators_slot13 = $config1_generators_slot14;
$config1_generators_slot14 = $config1_generators_slot15;
$config1_generators_slot15 = $config1_generators_slot16;
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot8)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot8='$config1_generators_slot9', config1_generators_slot9='$config1_generators_slot10', config1_generators_slot10='$config1_generators_slot11', config1_generators_slot11='$config1_generators_slot12', config1_generators_slot12='$config1_generators_slot13', config1_generators_slot13='$config1_generators_slot14', config1_generators_slot14='$config1_generators_slot15', config1_generators_slot15='$config1_generators_slot16', config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot8 = $config1_generators_slot9;
$config1_generators_slot9 = $config1_generators_slot10;
$config1_generators_slot10 = $config1_generators_slot11;
$config1_generators_slot11 = $config1_generators_slot12;
$config1_generators_slot12 = $config1_generators_slot13;
$config1_generators_slot13 = $config1_generators_slot14;
$config1_generators_slot14 = $config1_generators_slot15;
$config1_generators_slot15 = $config1_generators_slot16;
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot9)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot9='$config1_generators_slot10', config1_generators_slot10='$config1_generators_slot11', config1_generators_slot11='$config1_generators_slot12', config1_generators_slot12='$config1_generators_slot13', config1_generators_slot13='$config1_generators_slot14', config1_generators_slot14='$config1_generators_slot15', config1_generators_slot15='$config1_generators_slot16', config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot9 = $config1_generators_slot10;
$config1_generators_slot10 = $config1_generators_slot11;
$config1_generators_slot11 = $config1_generators_slot12;
$config1_generators_slot12 = $config1_generators_slot13;
$config1_generators_slot13 = $config1_generators_slot14;
$config1_generators_slot14 = $config1_generators_slot15;
$config1_generators_slot15 = $config1_generators_slot16;
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot10)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot10='$config1_generators_slot11', config1_generators_slot11='$config1_generators_slot12', config1_generators_slot12='$config1_generators_slot13', config1_generators_slot13='$config1_generators_slot14', config1_generators_slot14='$config1_generators_slot15', config1_generators_slot15='$config1_generators_slot16', config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot10 = $config1_generators_slot11;
$config1_generators_slot11 = $config1_generators_slot12;
$config1_generators_slot12 = $config1_generators_slot13;
$config1_generators_slot13 = $config1_generators_slot14;
$config1_generators_slot14 = $config1_generators_slot15;
$config1_generators_slot15 = $config1_generators_slot16;
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot11)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot11='$config1_generators_slot12', config1_generators_slot12='$config1_generators_slot13', config1_generators_slot13='$config1_generators_slot14', config1_generators_slot14='$config1_generators_slot15', config1_generators_slot15='$config1_generators_slot16', config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot11 = $config1_generators_slot12;
$config1_generators_slot12 = $config1_generators_slot13;
$config1_generators_slot13 = $config1_generators_slot14;
$config1_generators_slot14 = $config1_generators_slot15;
$config1_generators_slot15 = $config1_generators_slot16;
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot12)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot12='$config1_generators_slot13', config1_generators_slot13='$config1_generators_slot14', config1_generators_slot14='$config1_generators_slot15', config1_generators_slot15='$config1_generators_slot16', config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot12 = $config1_generators_slot13;
$config1_generators_slot13 = $config1_generators_slot14;
$config1_generators_slot14 = $config1_generators_slot15;
$config1_generators_slot15 = $config1_generators_slot16;
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot13)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot13='$config1_generators_slot14', config1_generators_slot14='$config1_generators_slot15', config1_generators_slot15='$config1_generators_slot16', config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot13 = $config1_generators_slot14;
$config1_generators_slot14 = $config1_generators_slot15;
$config1_generators_slot15 = $config1_generators_slot16;
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot14)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot14='$config1_generators_slot15', config1_generators_slot15='$config1_generators_slot16', config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot14 = $config1_generators_slot15;
$config1_generators_slot15 = $config1_generators_slot16;
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot15)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot15='$config1_generators_slot16', config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot15 = $config1_generators_slot16;
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot16)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot16='$config1_generators_slot17', config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot16 = $config1_generators_slot17;
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot17)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot17='$config1_generators_slot18', config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot17 = $config1_generators_slot18;
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot18)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot18='$config1_generators_slot19', config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot18 = $config1_generators_slot19;
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot19)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot19='$config1_generators_slot20', config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot19 = $config1_generators_slot20;
$config1_generators_slot20 = 0;
}
else if ($value == $config1_generators_slot20)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot20=0 WHERE playerID=$ID");
$config1_generators_slot20 = 0;
}
}
}
else if ($slotset == "heavy_guns")
{
foreach($items as &$value)
{
$sl++;
if ($value == $config1_heavy_guns_slot1)
{
mysqli_query($con,"UPDATE players_equipment SET config1_heavy_guns_slot1=0 WHERE playerID=$ID");
}
else if ($value == $config1_heavy_guns_slot2)
{
mysqli_query($con,"UPDATE players_equipment SET config1_heavy_guns_slot2=0 WHERE playerID=$ID");
}
}
}
else if ($slotset == "extras")
{
foreach($items as &$value)
{
$sl++;
if ($value == $config1_extras_slot1)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot1='$config1_extras_slot2', config1_extras_slot2='$config1_extras_slot3', config1_extras_slot3='$config1_extras_slot4', config1_extras_slot4='$config1_extras_slot5', config1_extras_slot5='$config1_extras_slot6', config1_extras_slot6='$config1_extras_slot7', config1_extras_slot7='$config1_extras_slot8', config1_extras_slot8='$config1_extras_slot9', config1_extras_slot9='$config1_extras_slot10', config1_extras_slot10='$config1_extras_slot11', config1_extras_slot11='$config1_extras_slot12', config1_extras_slot12='$config1_extras_slot13', config1_extras_slot13='$config1_extras_slot14', config1_extras_slot14='$config1_extras_slot15', config1_extras_slot15=0 WHERE playerID=$ID");
$config1_extras_slot1 = $config1_extras_slot2;
$config1_extras_slot2 = $config1_extras_slot3;
$config1_extras_slot3 = $config1_extras_slot4;
$config1_extras_slot4 = $config1_extras_slot5;
$config1_extras_slot5 = $config1_extras_slot6;
$config1_extras_slot6 = $config1_extras_slot7;
$config1_extras_slot7 = $config1_extras_slot8;
$config1_extras_slot8 = $config1_extras_slot9;
$config1_extras_slot9 = $config1_extras_slot10;
$config1_extras_slot10 = $config1_extras_slot11;
$config1_extras_slot11 = $config1_extras_slot12;
$config1_extras_slot12 = $config1_extras_slot13;
$config1_extras_slot13 = $config1_extras_slot14;
$config1_extras_slot14 = $config1_extras_slot15;
$config1_extras_slot15 = 0;
}
else if ($value == $config1_extras_slot2)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot2='$config1_extras_slot3', config1_extras_slot3='$config1_extras_slot4', config1_extras_slot4='$config1_extras_slot5', config1_extras_slot5='$config1_extras_slot6', config1_extras_slot6='$config1_extras_slot7', config1_extras_slot7='$config1_extras_slot8', config1_extras_slot8='$config1_extras_slot9', config1_extras_slot9='$config1_extras_slot10', config1_extras_slot10='$config1_extras_slot11', config1_extras_slot11='$config1_extras_slot12', config1_extras_slot12='$config1_extras_slot13', config1_extras_slot13='$config1_extras_slot14', config1_extras_slot14='$config1_extras_slot15', config1_extras_slot15=0 WHERE playerID=$ID");
$config1_extras_slot2 = $config1_extras_slot3;
$config1_extras_slot3 = $config1_extras_slot4;
$config1_extras_slot4 = $config1_extras_slot5;
$config1_extras_slot5 = $config1_extras_slot6;
$config1_extras_slot6 = $config1_extras_slot7;
$config1_extras_slot7 = $config1_extras_slot8;
$config1_extras_slot8 = $config1_extras_slot9;
$config1_extras_slot9 = $config1_extras_slot10;
$config1_extras_slot10 = $config1_extras_slot11;
$config1_extras_slot11 = $config1_extras_slot12;
$config1_extras_slot12 = $config1_extras_slot13;
$config1_extras_slot13 = $config1_extras_slot14;
$config1_extras_slot14 = $config1_extras_slot15;
$config1_extras_slot15 = 0;
}
else if ($value == $config1_extras_slot3)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot3='$config1_extras_slot4', config1_extras_slot4='$config1_extras_slot5', config1_extras_slot5='$config1_extras_slot6', config1_extras_slot6='$config1_extras_slot7', config1_extras_slot7='$config1_extras_slot8', config1_extras_slot8='$config1_extras_slot9', config1_extras_slot9='$config1_extras_slot10', config1_extras_slot10='$config1_extras_slot11', config1_extras_slot11='$config1_extras_slot12', config1_extras_slot12='$config1_extras_slot13', config1_extras_slot13='$config1_extras_slot14', config1_extras_slot14='$config1_extras_slot15', config1_extras_slot15=0 WHERE playerID=$ID");
$config1_extras_slot3 = $config1_extras_slot4;
$config1_extras_slot4 = $config1_extras_slot5;
$config1_extras_slot5 = $config1_extras_slot6;
$config1_extras_slot6 = $config1_extras_slot7;
$config1_extras_slot7 = $config1_extras_slot8;
$config1_extras_slot8 = $config1_extras_slot9;
$config1_extras_slot9 = $config1_extras_slot10;
$config1_extras_slot10 = $config1_extras_slot11;
$config1_extras_slot11 = $config1_extras_slot12;
$config1_extras_slot12 = $config1_extras_slot13;
$config1_extras_slot13 = $config1_extras_slot14;
$config1_extras_slot14 = $config1_extras_slot15;
$config1_extras_slot15 = 0;
}
else if ($value == $config1_extras_slot4)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot4='$config1_extras_slot5', config1_extras_slot5='$config1_extras_slot6', config1_extras_slot6='$config1_extras_slot7', config1_extras_slot7='$config1_extras_slot8', config1_extras_slot8='$config1_extras_slot9', config1_extras_slot9='$config1_extras_slot10', config1_extras_slot10='$config1_extras_slot11', config1_extras_slot11='$config1_extras_slot12', config1_extras_slot12='$config1_extras_slot13', config1_extras_slot13='$config1_extras_slot14', config1_extras_slot14='$config1_extras_slot15', config1_extras_slot15=0 WHERE playerID=$ID");
$config1_extras_slot4 = $config1_extras_slot5;
$config1_extras_slot5 = $config1_extras_slot6;
$config1_extras_slot6 = $config1_extras_slot7;
$config1_extras_slot7 = $config1_extras_slot8;
$config1_extras_slot8 = $config1_extras_slot9;
$config1_extras_slot9 = $config1_extras_slot10;
$config1_extras_slot10 = $config1_extras_slot11;
$config1_extras_slot11 = $config1_extras_slot12;
$config1_extras_slot12 = $config1_extras_slot13;
$config1_extras_slot13 = $config1_extras_slot14;
$config1_extras_slot14 = $config1_extras_slot15;
$config1_extras_slot15 = 0;
}
else if ($value == $config1_extras_slot5)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot5='$config1_extras_slot6', config1_extras_slot6='$config1_extras_slot7', config1_extras_slot7='$config1_extras_slot8', config1_extras_slot8='$config1_extras_slot9', config1_extras_slot9='$config1_extras_slot10', config1_extras_slot10='$config1_extras_slot11', config1_extras_slot11='$config1_extras_slot12', config1_extras_slot12='$config1_extras_slot13', config1_extras_slot13='$config1_extras_slot14', config1_extras_slot14='$config1_extras_slot15', config1_extras_slot15=0 WHERE playerID=$ID");
$config1_extras_slot5 = $config1_extras_slot6;
$config1_extras_slot6 = $config1_extras_slot7;
$config1_extras_slot7 = $config1_extras_slot8;
$config1_extras_slot8 = $config1_extras_slot9;
$config1_extras_slot9 = $config1_extras_slot10;
$config1_extras_slot10 = $config1_extras_slot11;
$config1_extras_slot11 = $config1_extras_slot12;
$config1_extras_slot12 = $config1_extras_slot13;
$config1_extras_slot13 = $config1_extras_slot14;
$config1_extras_slot14 = $config1_extras_slot15;
$config1_extras_slot15 = 0;
}
else if ($value == $config1_extras_slot6)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot6='$config1_extras_slot7', config1_extras_slot7='$config1_extras_slot8', config1_extras_slot8='$config1_extras_slot9', config1_extras_slot9='$config1_extras_slot10', config1_extras_slot10='$config1_extras_slot11', config1_extras_slot11='$config1_extras_slot12', config1_extras_slot12='$config1_extras_slot13', config1_extras_slot13='$config1_extras_slot14', config1_extras_slot14='$config1_extras_slot15', config1_extras_slot15=0 WHERE playerID=$ID");
$config1_extras_slot6 = $config1_extras_slot7;
$config1_extras_slot7 = $config1_extras_slot8;
$config1_extras_slot8 = $config1_extras_slot9;
$config1_extras_slot9 = $config1_extras_slot10;
$config1_extras_slot10 = $config1_extras_slot11;
$config1_extras_slot11 = $config1_extras_slot12;
$config1_extras_slot12 = $config1_extras_slot13;
$config1_extras_slot13 = $config1_extras_slot14;
$config1_extras_slot14 = $config1_extras_slot15;
$config1_extras_slot15 = 0;
}
else if ($value == $config1_extras_slot7)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot7='$config1_extras_slot8', config1_extras_slot8='$config1_extras_slot9', config1_extras_slot9='$config1_extras_slot10', config1_extras_slot10='$config1_extras_slot11', config1_extras_slot11='$config1_extras_slot12', config1_extras_slot12='$config1_extras_slot13', config1_extras_slot13='$config1_extras_slot14', config1_extras_slot14='$config1_extras_slot15', config1_extras_slot15=0 WHERE playerID=$ID");
$config1_extras_slot7 = $config1_extras_slot8;
$config1_extras_slot8 = $config1_extras_slot9;
$config1_extras_slot9 = $config1_extras_slot10;
$config1_extras_slot10 = $config1_extras_slot11;
$config1_extras_slot11 = $config1_extras_slot12;
$config1_extras_slot12 = $config1_extras_slot13;
$config1_extras_slot13 = $config1_extras_slot14;
$config1_extras_slot14 = $config1_extras_slot15;
$config1_extras_slot15 = 0;
}
else if ($value == $config1_extras_slot8)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot8='$config1_extras_slot9', config1_extras_slot9='$config1_extras_slot10', config1_extras_slot10='$config1_extras_slot11', config1_extras_slot11='$config1_extras_slot12', config1_extras_slot12='$config1_extras_slot13', config1_extras_slot13='$config1_extras_slot14', config1_extras_slot14='$config1_extras_slot15', config1_extras_slot15=0 WHERE playerID=$ID");
$config1_extras_slot8 = $config1_extras_slot9;
$config1_extras_slot9 = $config1_extras_slot10;
$config1_extras_slot10 = $config1_extras_slot11;
$config1_extras_slot11 = $config1_extras_slot12;
$config1_extras_slot12 = $config1_extras_slot13;
$config1_extras_slot13 = $config1_extras_slot14;
$config1_extras_slot14 = $config1_extras_slot15;
$config1_extras_slot15 = 0;
}
else if ($value == $config1_extras_slot9)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot9='$config1_extras_slot10', config1_extras_slot10='$config1_extras_slot11', config1_extras_slot11='$config1_extras_slot12', config1_extras_slot12='$config1_extras_slot13', config1_extras_slot13='$config1_extras_slot14', config1_extras_slot14='$config1_extras_slot15', config1_extras_slot15=0 WHERE playerID=$ID");
$config1_extras_slot9 = $config1_extras_slot10;
$config1_extras_slot10 = $config1_extras_slot11;
$config1_extras_slot11 = $config1_extras_slot12;
$config1_extras_slot12 = $config1_extras_slot13;
$config1_extras_slot13 = $config1_extras_slot14;
$config1_extras_slot14 = $config1_extras_slot15;
$config1_extras_slot15 = 0;
}
else if ($value == $config1_extras_slot10)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot10='$config1_extras_slot11', config1_extras_slot11='$config1_extras_slot12', config1_extras_slot12='$config1_extras_slot13', config1_extras_slot13='$config1_extras_slot14', config1_extras_slot14='$config1_extras_slot15', config1_extras_slot15=0 WHERE playerID=$ID");
$config1_extras_slot10 = $config1_extras_slot11;
$config1_extras_slot11 = $config1_extras_slot12;
$config1_extras_slot12 = $config1_extras_slot13;
$config1_extras_slot13 = $config1_extras_slot14;
$config1_extras_slot14 = $config1_extras_slot15;
$config1_extras_slot15 = 0;
}
else if ($value == $config1_extras_slot11)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot11='$config1_extras_slot12', config1_extras_slot12='$config1_extras_slot13', config1_extras_slot13='$config1_extras_slot14', config1_extras_slot14='$config1_extras_slot15', config1_extras_slot15=0 WHERE playerID=$ID");
$config1_extras_slot11 = $config1_extras_slot12;
$config1_extras_slot12 = $config1_extras_slot13;
$config1_extras_slot13 = $config1_extras_slot14;
$config1_extras_slot14 = $config1_extras_slot15;
$config1_extras_slot15 = 0;
}
else if ($value == $config1_extras_slot12)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot12='$config1_extras_slot13', config1_extras_slot13='$config1_extras_slot14', config1_extras_slot14='$config1_extras_slot15', config1_extras_slot15=0 WHERE playerID=$ID");
$config1_extras_slot12 = $config1_extras_slot13;
$config1_extras_slot13 = $config1_extras_slot14;
$config1_extras_slot14 = $config1_extras_slot15;
$config1_extras_slot15 = 0;
}
else if ($value == $config1_extras_slot13)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot13='$config1_extras_slot14', config1_extras_slot14='$config1_extras_slot15', config1_extras_slot15=0 WHERE playerID=$ID");
$config1_extras_slot13 = $config1_extras_slot14;
$config1_extras_slot14 = $config1_extras_slot15;
$config1_extras_slot15 = 0;
}
else if ($value == $config1_extras_slot14)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot14='$config1_extras_slot15', config1_extras_slot15=0 WHERE playerID=$ID");
$config1_extras_slot14 = $config1_extras_slot15;
$config1_extras_slot15 = 0;
}
else if ($value == $config1_extras_slot15)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot15=0 WHERE playerID=$ID");
$config1_extras_slot15 = 0;
}
}
}
}
else if ($from == "inventory" && $to == "ship")
{
foreach($items as &$value)
{
if ($value > 739999 && $value < 750000)
{
$dmg1 += 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 += 150;
}
else if ($value > 1269999 && $value < 1280000)
{
$speed1 += 10;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 += 10000;
}
$sl++;
$slotset = $result->to->slotset;
if ($slotset == "lasers")
{
if ($config1_lasers_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot1='$value' WHERE playerID=$ID");
$config1_lasers_slot1 = $value;
}
else if ($config1_lasers_slot2 == 0 && $lasersq >= 2)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot2='$value' WHERE playerID=$ID");
$config1_lasers_slot2 = $value;
}
else if ($config1_lasers_slot3 == 0 && $lasersq >= 3)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot3='$value' WHERE playerID=$ID");
$config1_lasers_slot3 = $value;
}
else if ($config1_lasers_slot4 == 0 && $lasersq >= 4)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot4='$value' WHERE playerID=$ID");
$config1_lasers_slot4 = $value;
}
else if ($config1_lasers_slot5 == 0 && $lasersq >= 5)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot5='$value' WHERE playerID=$ID");
$config1_lasers_slot5 = $value;
}
else if ($config1_lasers_slot6 == 0 && $lasersq >= 6)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot6='$value' WHERE playerID=$ID");
$config1_lasers_slot6 = $value;
}
else if ($config1_lasers_slot7 == 0 && $lasersq >= 7)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot7='$value' WHERE playerID=$ID");
$config1_lasers_slot7 = $value;
}
else if ($config1_lasers_slot8 == 0 && $lasersq >= 8)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot8='$value' WHERE playerID=$ID");
$config1_lasers_slot8 = $value;
}
else if ($config1_lasers_slot9 == 0 && $lasersq >= 9)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot9='$value' WHERE playerID=$ID");
$config1_lasers_slot9 = $value;
}
else if ($config1_lasers_slot10 == 0 && $lasersq >= 10)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot10='$value' WHERE playerID=$ID");
$config1_lasers_slot10 = $value;
}
else if ($config1_lasers_slot11 == 0 && $lasersq >= 11)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot11='$value' WHERE playerID=$ID");
$config1_lasers_slot11 = $value;
}
else if ($config1_lasers_slot12 == 0 && $lasersq >= 12)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot12='$value' WHERE playerID=$ID");
$config1_lasers_slot12 = $value;
}
else if ($config1_lasers_slot13 == 0 && $lasersq >= 13)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot13='$value' WHERE playerID=$ID");
$config1_lasers_slot13 = $value;
}
else if ($config1_lasers_slot14 == 0 && $lasersq >= 14)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$value' WHERE playerID=$ID");
$config1_lasers_slot14 = $value;
}
else if ($config1_lasers_slot15 == 0 && $lasersq >= 15)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15='$value' WHERE playerID=$ID");
$config1_lasers_slot15 = $value;
}
else if ($config1_lasers_slot16 == 0 && $lasersq >= 16)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot16='$value' WHERE playerID=$ID");
$config1_lasers_slot16 = $value;
}
else if ($config1_lasers_slot17 == 0 && $lasersq >= 17)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot17='$value' WHERE playerID=$ID");
$config1_lasers_slot17 = $value;
}
else if ($config1_lasers_slot18 == 0 && $lasersq >= 18)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot18='$value' WHERE playerID=$ID");
$config1_lasers_slot18 = $value;
}
else if ($config1_lasers_slot19 == 0 && $lasersq >= 19)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot19='$value' WHERE playerID=$ID");
$config1_lasers_slot19 = $value;
}
else if ($config1_lasers_slot20 == 0 && $lasersq >= 20)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot20='$value' WHERE playerID=$ID");
$config1_lasers_slot20 = $value;
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg1 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 -= 150;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($slotset == "generators")
{
if ($config1_generators_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot1='$value' WHERE playerID=$ID");
$config1_generators_slot1 = $value;
}
else if ($config1_generators_slot2 == 0 && $generatorq >= 2)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot2='$value' WHERE playerID=$ID");
$config1_generators_slot2 = $value;
}
else if ($config1_generators_slot3 == 0 && $generatorq >= 3)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot3='$value' WHERE playerID=$ID");
$config1_generators_slot3 = $value;
}
else if ($config1_generators_slot4 == 0 && $generatorq >= 4)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot4='$value' WHERE playerID=$ID");
$config1_generators_slot4 = $value;
}
else if ($config1_generators_slot5 == 0 && $generatorq >= 5)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot5='$value' WHERE playerID=$ID");
$config1_generators_slot5 = $value;
}
else if ($config1_generators_slot6 == 0 && $generatorq >= 6)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot6='$value' WHERE playerID=$ID");
$config1_generators_slot6 = $value;
}
else if ($config1_generators_slot7 == 0 && $generatorq >= 7)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot7='$value' WHERE playerID=$ID");
$config1_generators_slot7 = $value;
}
else if ($config1_generators_slot8 == 0 && $generatorq >= 8)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot8='$value' WHERE playerID=$ID");
$config1_generators_slot8 = $value;
}
else if ($config1_generators_slot9 == 0 && $generatorq >= 9)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot9='$value' WHERE playerID=$ID");
$config1_generators_slot9 = $value;
}
else if ($config1_generators_slot10 == 0 && $generatorq >= 10)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot10='$value' WHERE playerID=$ID");
$config1_generators_slot10 = $value;
}
else if ($config1_generators_slot11 == 0 && $generatorq >= 11)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot11='$value' WHERE playerID=$ID");
$config1_generators_slot11 = $value;
}
else if ($config1_generators_slot12 == 0 && $generatorq >= 12)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot12='$value' WHERE playerID=$ID");
$config1_generators_slot12 = $value;
}
else if ($config1_generators_slot13 == 0 && $generatorq >= 13)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot13='$value' WHERE playerID=$ID");
$config1_generators_slot13 = $value;
}
else if ($config1_generators_slot14 == 0 && $generatorq >= 14)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot14='$value' WHERE playerID=$ID");
$config1_generators_slot14 = $value;
}
else if ($config1_generators_slot15 == 0 && $generatorq >= 15)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot15='$value' WHERE playerID=$ID");
$config1_generators_slot15 = $value;
}
else if ($config1_generators_slot16 == 0 && $generatorq >= 16)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot16='$value' WHERE playerID=$ID");
$config1_generators_slot16 = $value;
}
else if ($config1_generators_slot17 == 0 && $generatorq >= 17)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot17='$value' WHERE playerID=$ID");
$config1_generators_slot17 = $value;
}
else if ($config1_generators_slot18 == 0 && $generatorq >= 18)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot18='$value' WHERE playerID=$ID");
$config1_generators_slot18 = $value;
}
else if ($config1_generators_slot19 == 0 && $generatorq >= 19)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot19='$value' WHERE playerID=$ID");
$config1_generators_slot19 = $value;
}
else if ($config1_generators_slot20 == 0 && $generatorq >= 20)
{
mysqli_query($con,"UPDATE players_equipment SET config1_generators_slot20='$value' WHERE playerID=$ID");
$config1_generators_slot20 = $value;
}
else
{
if ($value > 1269999 && $value < 1280000)
{
$speed1 -= 10;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($slotset == "heavy_guns")
{
if ($config1_heavy_guns_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_heavy_guns_slot1='$value' WHERE playerID=$ID");
$config1_heavy_guns_slot1 = $value;
}
else if ($config1_heavy_guns_slot2 == 0 && $heavy >= 2)
{
mysqli_query($con,"UPDATE players_equipment SET config1_heavy_guns_slot2='$value' WHERE playerID=$ID");
$config1_heavy_guns_slot2 = $value;
}
else
{
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($slotset == "extras")
{
if ($config1_extras_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot1='$value' WHERE playerID=$ID");
$config1_extras_slot1 = $value;
}
else if ($config1_extras_slot2 == 0 && $extras >= 2)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot2='$value' WHERE playerID=$ID");
$config1_extras_slot2 = $value;
}
else if ($config1_extras_slot3 == 0 && $extras >= 3)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot3='$value' WHERE playerID=$ID");
$config1_extras_slot3 = $value;
}
else if ($config1_extras_slot4 == 0 && $extras >= 4)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot4='$value' WHERE playerID=$ID");
$config1_extras_slot4 = $value;
}
else if ($config1_extras_slot5 == 0 && $extras >= 5)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot5='$value' WHERE playerID=$ID");
$config1_extras_slot5 = $value;
}
else if ($config1_extras_slot6 == 0 && $extras >= 6)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot6='$value' WHERE playerID=$ID");
$config1_extras_slot6 = $value;
}
else if ($config1_extras_slot7 == 0 && $extras >= 7)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot7='$value' WHERE playerID=$ID");
$config1_extras_slot7 = $value;
}
else if ($config1_extras_slot8 == 0 && $extras >= 8)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot8='$value' WHERE playerID=$ID");
$config1_extras_slot8 = $value;
}
else if ($config1_extras_slot9 == 0 && $extras >= 9)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot9='$value' WHERE playerID=$ID");
$config1_extras_slot9 = $value;
}
else if ($config1_extras_slot10 == 0 && $extras >= 10)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot10='$value' WHERE playerID=$ID");
$config1_extras_slot10 = $value;
}
else if ($config1_extras_slot11 == 0 && $extras >= 11)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot11='$value' WHERE playerID=$ID");
$config1_extras_slot11 = $value;
}
else if ($config1_extras_slot12 == 0 && $extras >= 12)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot12='$value' WHERE playerID=$ID");
$config1_extras_slot12 = $value;
}
else if ($config1_extras_slot13 == 0 && $extras >= 13)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot13='$value' WHERE playerID=$ID");
$config1_extras_slot13 = $value;
}
else if ($config1_extras_slot14 == 0 && $extras >= 14)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot14='$value' WHERE playerID=$ID");
$config1_extras_slot14 = $value;
}
else if ($config1_extras_slot15 == 0 && $extras >= 15)
{
mysqli_query($con,"UPDATE players_equipment SET config1_extras_slot15='$value' WHERE playerID=$ID");
$config1_extras_slot15 = $value;
}
else
{
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
}
}
else if ($from == "inventory" && $to == "drone")
{
foreach($items as &$value)
{
if ($value > 739999 && $value < 750000)
{
$dmg1 += 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 += 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 += 10000;
}
$sl++;
$droneId = $result->to->droneId;
if ($droneId  == "500")
{
if ($config1_drone5_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone5_slot1='$value' WHERE playerID=$ID");
}
else if ($config1_drone5_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone5_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg1 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "501")
{
if ($config1_drone2_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone2_slot1='$value' WHERE playerID=$ID");
}
else if ($config1_drone2_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone2_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg1 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "502")
{
if ($config1_drone3_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone3_slot1='$value' WHERE playerID=$ID");
}
else if ($config1_drone3_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone3_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg1 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "503")
{
if ($config1_drone4_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone4_slot1='$value' WHERE playerID=$ID");
}
else if ($config1_drone4_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone4_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg1 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "504")
{
if ($config1_drone1_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone1_slot1='$value' WHERE playerID=$ID");
}
else if ($config1_drone1_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone1_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg1 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "505")
{
if ($config1_drone6_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone6_slot1='$value' WHERE playerID=$ID");
}
else if ($config1_drone6_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone6_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg1 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "506")
{
if ($config1_drone7_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone7_slot1='$value' WHERE playerID=$ID");
}
else if ($config1_drone7_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone7_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg1 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "507")
{
if ($config1_drone8_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone8_slot1='$value' WHERE playerID=$ID");
}
else if ($config1_drone8_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone8_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg1 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "508")
{
if ($config1_drone9_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone9_slot1='$value' WHERE playerID=$ID");
}
else if ($config1_drone9_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone9_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg1 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "509")
{
if ($config1_drone10_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone10_slot1='$value' WHERE playerID=$ID");
}
else if ($config1_drone10_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone10_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg1 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
}
}
else if ($from == "drone" && $to == "inventory")
{
foreach($items as &$value)
{
if ($value > 739999 && $value < 750000)
{
$dmg1 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 -= 10000;
}
$sl++;
$droneId = $result->from->droneId;
if ($droneId  == "504")
{
if ($config1_drone1_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone1_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone1_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "501")
{
if ($config1_drone2_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone2_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone2_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "502")
{
if ($config1_drone3_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone3_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone3_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "503")
{
if ($config1_drone4_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone4_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone4_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "500")
{
if ($config1_drone5_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone5_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone5_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "505")
{
if ($config1_drone6_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone6_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone6_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "506")
{
if ($config1_drone7_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone7_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone7_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "507")
{
if ($config1_drone8_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone8_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone8_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "508")
{
if ($config1_drone9_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone9_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone9_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "509")
{
if ($config1_drone10_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone10_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone10_slot1=0 WHERE playerID=$ID");
}
}
}
}
}
else if ($configId == 2){
$config2_lasers_slot1 = $row2["config2_lasers_slot1"];
$config2_lasers_slot2 = $row2["config2_lasers_slot2"];
$config2_lasers_slot3 = $row2["config2_lasers_slot3"];
$config2_lasers_slot4 = $row2["config2_lasers_slot4"];
$config2_lasers_slot5 = $row2["config2_lasers_slot5"];
$config2_lasers_slot6 = $row2["config2_lasers_slot6"];
$config2_lasers_slot7 = $row2["config2_lasers_slot7"];
$config2_lasers_slot8 = $row2["config2_lasers_slot8"];
$config2_lasers_slot9 = $row2["config2_lasers_slot9"];
$config2_lasers_slot10 = $row2["config2_lasers_slot10"];
$config2_lasers_slot11 = $row2["config2_lasers_slot11"];
$config2_lasers_slot12 = $row2["config2_lasers_slot12"];
$config2_lasers_slot13 = $row2["config2_lasers_slot13"];
$config2_lasers_slot14 = $row2["config2_lasers_slot14"];
$config2_lasers_slot15 = $row2["config2_lasers_slot15"];
$config2_lasers_slot16 = $row2["config2_lasers_slot16"];
$config2_lasers_slot17 = $row2["config2_lasers_slot17"];
$config2_lasers_slot18 = $row2["config2_lasers_slot18"];
$config2_lasers_slot19 = $row2["config2_lasers_slot19"];
$config2_lasers_slot20 = $row2["config2_lasers_slot20"];
$config2_generators_slot1 = $row2["config2_generators_slot1"];
$config2_generators_slot2 = $row2["config2_generators_slot2"];
$config2_generators_slot3 = $row2["config2_generators_slot3"];
$config2_generators_slot4 = $row2["config2_generators_slot4"];
$config2_generators_slot5 = $row2["config2_generators_slot5"];
$config2_generators_slot6 = $row2["config2_generators_slot6"];
$config2_generators_slot7 = $row2["config2_generators_slot7"];
$config2_generators_slot8 = $row2["config2_generators_slot8"];
$config2_generators_slot9 = $row2["config2_generators_slot9"];
$config2_generators_slot10 = $row2["config2_generators_slot10"];
$config2_generators_slot11 = $row2["config2_generators_slot11"];
$config2_generators_slot12 = $row2["config2_generators_slot12"];
$config2_generators_slot13 = $row2["config2_generators_slot13"];
$config2_generators_slot14 = $row2["config2_generators_slot14"];
$config2_generators_slot15 = $row2["config2_generators_slot15"];
$config2_generators_slot16 = $row2["config2_generators_slot16"];
$config2_generators_slot17 = $row2["config2_generators_slot17"];
$config2_generators_slot18 = $row2["config2_generators_slot18"];
$config2_generators_slot19 = $row2["config2_generators_slot19"];
$config2_generators_slot20 = $row2["config2_generators_slot20"];
$config2_drone1_slot1 = $row2["config2_drone1_slot1"];
$config2_drone1_slot2 = $row2["config2_drone1_slot2"];
$config2_drone2_slot1 = $row2["config2_drone2_slot1"];
$config2_drone2_slot2 = $row2["config2_drone2_slot2"];
$config2_drone3_slot1 = $row2["config2_drone3_slot1"];
$config2_drone3_slot2 = $row2["config2_drone3_slot2"];
$config2_drone4_slot1 = $row2["config2_drone4_slot1"];
$config2_drone4_slot2 = $row2["config2_drone4_slot2"];
$config2_drone5_slot1 = $row2["config2_drone5_slot1"];
$config2_drone5_slot2 = $row2["config2_drone5_slot2"];
$config2_drone6_slot1 = $row2["config2_drone6_slot1"];
$config2_drone6_slot2 = $row2["config2_drone6_slot2"];
$config2_drone7_slot1 = $row2["config2_drone7_slot1"];
$config2_drone7_slot2 = $row2["config2_drone7_slot2"];
$config2_drone8_slot1 = $row2["config2_drone8_slot1"];
$config2_drone8_slot2 = $row2["config2_drone8_slot2"];
$config2_drone9_slot1 = $row2["config2_drone9_slot1"];
$config2_drone9_slot2 = $row2["config2_drone9_slot2"];
$config2_drone10_slot1 = $row2["config2_drone10_slot1"];
$config2_drone10_slot2 = $row2["config2_drone10_slot2"];
$config2_heavy_guns_slot1 = $row2['config2_heavy_guns_slot1'];
$config2_heavy_guns_slot2 = $row2['config2_heavy_guns_slot2'];
$config2_extras_slot1 = $row2["config2_extras_slot1"];
$config2_extras_slot2 = $row2["config2_extras_slot2"];
$config2_extras_slot3 = $row2["config2_extras_slot3"];
$config2_extras_slot4 = $row2["config2_extras_slot4"];
$config2_extras_slot5 = $row2["config2_extras_slot5"];
$config2_extras_slot6 = $row2["config2_extras_slot6"];
$config2_extras_slot7 = $row2["config2_extras_slot7"];
$config2_extras_slot8 = $row2["config2_extras_slot8"];
$config2_extras_slot9 = $row2["config2_extras_slot9"];
$config2_extras_slot10 = $row2["config2_extras_slot10"];
$config2_extras_slot11 = $row2["config2_extras_slot11"];
$config2_extras_slot12 = $row2["config2_extras_slot12"];
$config2_extras_slot13 = $row2["config2_extras_slot13"];
$config2_extras_slot14 = $row2["config2_extras_slot14"];
$config2_extras_slot15 = $row2["config2_extras_slot15"];
if ($from == "ship" && $to == "inventory")
{
$slotset = $result->from->slotset;
if ($slotset == "lasers")
{
foreach($items as &$value)
{
if ($value > 739999 && $value < 750000)
{
$dmg2 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 -= 150;
}
$sl++;
if ($value == $config2_lasers_slot1)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot1='$config2_lasers_slot2', config2_lasers_slot2='$config2_lasers_slot3', config2_lasers_slot3='$config2_lasers_slot4', config2_lasers_slot4='$config2_lasers_slot5', config2_lasers_slot5='$config2_lasers_slot6', config2_lasers_slot6='$config2_lasers_slot7', config2_lasers_slot7='$config2_lasers_slot8', config2_lasers_slot8='$config2_lasers_slot9', config2_lasers_slot9='$config2_lasers_slot10', config2_lasers_slot10='$config2_lasers_slot11', config2_lasers_slot11='$config2_lasers_slot12', config2_lasers_slot12='$config2_lasers_slot13', config2_lasers_slot13='$config2_lasers_slot14', config2_lasers_slot14='$config2_lasers_slot15', config2_lasers_slot15='$config2_lasers_slot16', config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot1 = $config2_lasers_slot2;
$config2_lasers_slot2 = $config2_lasers_slot3;
$config2_lasers_slot3 = $config2_lasers_slot4;
$config2_lasers_slot4 = $config2_lasers_slot5;
$config2_lasers_slot5 = $config2_lasers_slot6;
$config2_lasers_slot6 = $config2_lasers_slot7;
$config2_lasers_slot7 = $config2_lasers_slot8;
$config2_lasers_slot8 = $config2_lasers_slot9;
$config2_lasers_slot9 = $config2_lasers_slot10;
$config2_lasers_slot10 = $config2_lasers_slot11;
$config2_lasers_slot11 = $config2_lasers_slot12;
$config2_lasers_slot12 = $config2_lasers_slot13;
$config2_lasers_slot13 = $config2_lasers_slot14;
$config2_lasers_slot14 = $config2_lasers_slot15;
$config2_lasers_slot15 = $config2_lasers_slot16;
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot2)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot2='$config2_lasers_slot3', config2_lasers_slot3='$config2_lasers_slot4', config2_lasers_slot4='$config2_lasers_slot5', config2_lasers_slot5='$config2_lasers_slot6', config2_lasers_slot6='$config2_lasers_slot7', config2_lasers_slot7='$config2_lasers_slot8', config2_lasers_slot8='$config2_lasers_slot9', config2_lasers_slot9='$config2_lasers_slot10', config2_lasers_slot10='$config2_lasers_slot11', config2_lasers_slot11='$config2_lasers_slot12', config2_lasers_slot12='$config2_lasers_slot13', config2_lasers_slot13='$config2_lasers_slot14', config2_lasers_slot14='$config2_lasers_slot15', config2_lasers_slot15='$config2_lasers_slot16', config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot2 = $config2_lasers_slot3;
$config2_lasers_slot3 = $config2_lasers_slot4;
$config2_lasers_slot4 = $config2_lasers_slot5;
$config2_lasers_slot5 = $config2_lasers_slot6;
$config2_lasers_slot6 = $config2_lasers_slot7;
$config2_lasers_slot7 = $config2_lasers_slot8;
$config2_lasers_slot8 = $config2_lasers_slot9;
$config2_lasers_slot9 = $config2_lasers_slot10;
$config2_lasers_slot10 = $config2_lasers_slot11;
$config2_lasers_slot11 = $config2_lasers_slot12;
$config2_lasers_slot12 = $config2_lasers_slot13;
$config2_lasers_slot13 = $config2_lasers_slot14;
$config2_lasers_slot14 = $config2_lasers_slot15;
$config2_lasers_slot15 = $config2_lasers_slot16;
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot3)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot3='$config2_lasers_slot4', config2_lasers_slot4='$config2_lasers_slot5', config2_lasers_slot5='$config2_lasers_slot6', config2_lasers_slot6='$config2_lasers_slot7', config2_lasers_slot7='$config2_lasers_slot8', config2_lasers_slot8='$config2_lasers_slot9', config2_lasers_slot9='$config2_lasers_slot10', config2_lasers_slot10='$config2_lasers_slot11', config2_lasers_slot11='$config2_lasers_slot12', config2_lasers_slot12='$config2_lasers_slot13', config2_lasers_slot13='$config2_lasers_slot14', config2_lasers_slot14='$config2_lasers_slot15', config2_lasers_slot15='$config2_lasers_slot16', config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot3 = $config2_lasers_slot4;
$config2_lasers_slot4 = $config2_lasers_slot5;
$config2_lasers_slot5 = $config2_lasers_slot6;
$config2_lasers_slot6 = $config2_lasers_slot7;
$config2_lasers_slot7 = $config2_lasers_slot8;
$config2_lasers_slot8 = $config2_lasers_slot9;
$config2_lasers_slot9 = $config2_lasers_slot10;
$config2_lasers_slot10 = $config2_lasers_slot11;
$config2_lasers_slot11 = $config2_lasers_slot12;
$config2_lasers_slot12 = $config2_lasers_slot13;
$config2_lasers_slot13 = $config2_lasers_slot14;
$config2_lasers_slot14 = $config2_lasers_slot15;
$config2_lasers_slot15 = $config2_lasers_slot16;
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot4)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot4='$config2_lasers_slot5', config2_lasers_slot5='$config2_lasers_slot6', config2_lasers_slot6='$config2_lasers_slot7', config2_lasers_slot7='$config2_lasers_slot8', config2_lasers_slot8='$config2_lasers_slot9', config2_lasers_slot9='$config2_lasers_slot10', config2_lasers_slot10='$config2_lasers_slot11', config2_lasers_slot11='$config2_lasers_slot12', config2_lasers_slot12='$config2_lasers_slot13', config2_lasers_slot13='$config2_lasers_slot14', config2_lasers_slot14='$config2_lasers_slot15', config2_lasers_slot15='$config2_lasers_slot16', config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot4 = $config2_lasers_slot5;
$config2_lasers_slot5 = $config2_lasers_slot6;
$config2_lasers_slot6 = $config2_lasers_slot7;
$config2_lasers_slot7 = $config2_lasers_slot8;
$config2_lasers_slot8 = $config2_lasers_slot9;
$config2_lasers_slot9 = $config2_lasers_slot10;
$config2_lasers_slot10 = $config2_lasers_slot11;
$config2_lasers_slot11 = $config2_lasers_slot12;
$config2_lasers_slot12 = $config2_lasers_slot13;
$config2_lasers_slot13 = $config2_lasers_slot14;
$config2_lasers_slot14 = $config2_lasers_slot15;
$config2_lasers_slot15 = $config2_lasers_slot16;
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot5)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot5='$config2_lasers_slot6', config2_lasers_slot6='$config2_lasers_slot7', config2_lasers_slot7='$config2_lasers_slot8', config2_lasers_slot8='$config2_lasers_slot9', config2_lasers_slot9='$config2_lasers_slot10', config2_lasers_slot10='$config2_lasers_slot11', config2_lasers_slot11='$config2_lasers_slot12', config2_lasers_slot12='$config2_lasers_slot13', config2_lasers_slot13='$config2_lasers_slot14', config2_lasers_slot14='$config2_lasers_slot15', config2_lasers_slot15='$config2_lasers_slot16', config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot5 = $config2_lasers_slot6;
$config2_lasers_slot6 = $config2_lasers_slot7;
$config2_lasers_slot7 = $config2_lasers_slot8;
$config2_lasers_slot8 = $config2_lasers_slot9;
$config2_lasers_slot9 = $config2_lasers_slot10;
$config2_lasers_slot10 = $config2_lasers_slot11;
$config2_lasers_slot11 = $config2_lasers_slot12;
$config2_lasers_slot12 = $config2_lasers_slot13;
$config2_lasers_slot13 = $config2_lasers_slot14;
$config2_lasers_slot14 = $config2_lasers_slot15;
$config2_lasers_slot15 = $config2_lasers_slot16;
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot6)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot6='$config2_lasers_slot7', config2_lasers_slot7='$config2_lasers_slot8', config2_lasers_slot8='$config2_lasers_slot9', config2_lasers_slot9='$config2_lasers_slot10', config2_lasers_slot10='$config2_lasers_slot11', config2_lasers_slot11='$config2_lasers_slot12', config2_lasers_slot12='$config2_lasers_slot13', config2_lasers_slot13='$config2_lasers_slot14', config2_lasers_slot14='$config2_lasers_slot15', config2_lasers_slot15='$config2_lasers_slot16', config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot6 = $config2_lasers_slot7;
$config2_lasers_slot7 = $config2_lasers_slot8;
$config2_lasers_slot8 = $config2_lasers_slot9;
$config2_lasers_slot9 = $config2_lasers_slot10;
$config2_lasers_slot10 = $config2_lasers_slot11;
$config2_lasers_slot11 = $config2_lasers_slot12;
$config2_lasers_slot12 = $config2_lasers_slot13;
$config2_lasers_slot13 = $config2_lasers_slot14;
$config2_lasers_slot14 = $config2_lasers_slot15;
$config2_lasers_slot15 = $config2_lasers_slot16;
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot7)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot7='$config2_lasers_slot8', config2_lasers_slot8='$config2_lasers_slot9', config2_lasers_slot9='$config2_lasers_slot10', config2_lasers_slot10='$config2_lasers_slot11', config2_lasers_slot11='$config2_lasers_slot12', config2_lasers_slot12='$config2_lasers_slot13', config2_lasers_slot13='$config2_lasers_slot14', config2_lasers_slot14='$config2_lasers_slot15', config2_lasers_slot15='$config2_lasers_slot16', config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot7 = $config2_lasers_slot8;
$config2_lasers_slot8 = $config2_lasers_slot9;
$config2_lasers_slot9 = $config2_lasers_slot10;
$config2_lasers_slot10 = $config2_lasers_slot11;
$config2_lasers_slot11 = $config2_lasers_slot12;
$config2_lasers_slot12 = $config2_lasers_slot13;
$config2_lasers_slot13 = $config2_lasers_slot14;
$config2_lasers_slot14 = $config2_lasers_slot15;
$config2_lasers_slot15 = $config2_lasers_slot16;
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot8)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot8='$config2_lasers_slot9', config2_lasers_slot9='$config2_lasers_slot10', config2_lasers_slot10='$config2_lasers_slot11', config2_lasers_slot11='$config2_lasers_slot12', config2_lasers_slot12='$config2_lasers_slot13', config2_lasers_slot13='$config2_lasers_slot14', config2_lasers_slot14='$config2_lasers_slot15', config2_lasers_slot15='$config2_lasers_slot16', config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot8 = $config2_lasers_slot9;
$config2_lasers_slot9 = $config2_lasers_slot10;
$config2_lasers_slot10 = $config2_lasers_slot11;
$config2_lasers_slot11 = $config2_lasers_slot12;
$config2_lasers_slot12 = $config2_lasers_slot13;
$config2_lasers_slot13 = $config2_lasers_slot14;
$config2_lasers_slot14 = $config2_lasers_slot15;
$config2_lasers_slot15 = $config2_lasers_slot16;
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot9)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot9='$config2_lasers_slot10', config2_lasers_slot10='$config2_lasers_slot11', config2_lasers_slot11='$config2_lasers_slot12', config2_lasers_slot12='$config2_lasers_slot13', config2_lasers_slot13='$config2_lasers_slot14', config2_lasers_slot14='$config2_lasers_slot15', config2_lasers_slot15='$config2_lasers_slot16', config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot9 = $config2_lasers_slot10;
$config2_lasers_slot10 = $config2_lasers_slot11;
$config2_lasers_slot11 = $config2_lasers_slot12;
$config2_lasers_slot12 = $config2_lasers_slot13;
$config2_lasers_slot13 = $config2_lasers_slot14;
$config2_lasers_slot14 = $config2_lasers_slot15;
$config2_lasers_slot15 = $config2_lasers_slot16;
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot10)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot10='$config2_lasers_slot11', config2_lasers_slot11='$config2_lasers_slot12', config2_lasers_slot12='$config2_lasers_slot13', config2_lasers_slot13='$config2_lasers_slot14', config2_lasers_slot14='$config2_lasers_slot15', config2_lasers_slot15='$config2_lasers_slot16', config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot10 = $config2_lasers_slot11;
$config2_lasers_slot11 = $config2_lasers_slot12;
$config2_lasers_slot12 = $config2_lasers_slot13;
$config2_lasers_slot13 = $config2_lasers_slot14;
$config2_lasers_slot14 = $config2_lasers_slot15;
$config2_lasers_slot15 = $config2_lasers_slot16;
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot11)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot11='$config2_lasers_slot12', config2_lasers_slot12='$config2_lasers_slot13', config2_lasers_slot13='$config2_lasers_slot14', config2_lasers_slot14='$config2_lasers_slot15', config2_lasers_slot15='$config2_lasers_slot16', config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot11 = $config2_lasers_slot12;
$config2_lasers_slot12 = $config2_lasers_slot13;
$config2_lasers_slot13 = $config2_lasers_slot14;
$config2_lasers_slot14 = $config2_lasers_slot15;
$config2_lasers_slot15 = $config2_lasers_slot16;
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot12)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot12='$config2_lasers_slot13', config2_lasers_slot13='$config2_lasers_slot14', config2_lasers_slot14='$config2_lasers_slot15', config2_lasers_slot15='$config2_lasers_slot16', config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot12 = $config2_lasers_slot13;
$config2_lasers_slot13 = $config2_lasers_slot14;
$config2_lasers_slot14 = $config2_lasers_slot15;
$config2_lasers_slot15 = $config2_lasers_slot16;
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot13)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot13='$config2_lasers_slot14', config2_lasers_slot14='$config2_lasers_slot15', config2_lasers_slot15='$config2_lasers_slot16', config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot13 = $config2_lasers_slot14;
$config2_lasers_slot14 = $config2_lasers_slot15;
$config2_lasers_slot15 = $config2_lasers_slot16;
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot14)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$config2_lasers_slot15', config2_lasers_slot15='$config2_lasers_slot16', config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot14 = $config2_lasers_slot15;
$config2_lasers_slot15 = $config2_lasers_slot16;
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot15)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15='$config2_lasers_slot16', config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot15 = $config2_lasers_slot16;
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot16)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot16='$config2_lasers_slot17', config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot16 = $config2_lasers_slot17;
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot17)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot17='$config2_lasers_slot18', config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot17 = $config2_lasers_slot18;
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot18)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot18='$config2_lasers_slot19', config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot18 = $config2_lasers_slot19;
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot19)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot19='$config2_lasers_slot20', config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot19 = $config2_lasers_slot20;
$config2_lasers_slot20 = 0;
}
else if ($value == $config2_lasers_slot20)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot20=0 WHERE playerID=$ID");
$config2_lasers_slot20 = 0;
}
}
}
else if ($slotset == "generators")
{
foreach($items as &$value)
{
if ($value > 1269999 && $value < 1280000)
{
$speed2 -= 10;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 -= 10000;
}
$sl++;
if ($value == $config2_generators_slot1)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot1='$config2_generators_slot2', config2_generators_slot2='$config2_generators_slot3', config2_generators_slot3='$config2_generators_slot4', config2_generators_slot4='$config2_generators_slot5', config2_generators_slot5='$config2_generators_slot6', config2_generators_slot6='$config2_generators_slot7', config2_generators_slot7='$config2_generators_slot8', config2_generators_slot8='$config2_generators_slot9', config2_generators_slot9='$config2_generators_slot10', config2_generators_slot10='$config2_generators_slot11', config2_generators_slot11='$config2_generators_slot12', config2_generators_slot12='$config2_generators_slot13', config2_generators_slot13='$config2_generators_slot14', config2_generators_slot14='$config2_generators_slot15', config2_generators_slot15='$config2_generators_slot16', config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot1 = $config2_generators_slot2;
$config2_generators_slot2 = $config2_generators_slot3;
$config2_generators_slot3 = $config2_generators_slot4;
$config2_generators_slot4 = $config2_generators_slot5;
$config2_generators_slot5 = $config2_generators_slot6;
$config2_generators_slot6 = $config2_generators_slot7;
$config2_generators_slot7 = $config2_generators_slot8;
$config2_generators_slot8 = $config2_generators_slot9;
$config2_generators_slot9 = $config2_generators_slot10;
$config2_generators_slot10 = $config2_generators_slot11;
$config2_generators_slot11 = $config2_generators_slot12;
$config2_generators_slot12 = $config2_generators_slot13;
$config2_generators_slot13 = $config2_generators_slot14;
$config2_generators_slot14 = $config2_generators_slot15;
$config2_generators_slot15 = $config2_generators_slot16;
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot2)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot2='$config2_generators_slot3', config2_generators_slot3='$config2_generators_slot4', config2_generators_slot4='$config2_generators_slot5', config2_generators_slot5='$config2_generators_slot6', config2_generators_slot6='$config2_generators_slot7', config2_generators_slot7='$config2_generators_slot8', config2_generators_slot8='$config2_generators_slot9', config2_generators_slot9='$config2_generators_slot10', config2_generators_slot10='$config2_generators_slot11', config2_generators_slot11='$config2_generators_slot12', config2_generators_slot12='$config2_generators_slot13', config2_generators_slot13='$config2_generators_slot14', config2_generators_slot14='$config2_generators_slot15', config2_generators_slot15='$config2_generators_slot16', config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot2 = $config2_generators_slot3;
$config2_generators_slot3 = $config2_generators_slot4;
$config2_generators_slot4 = $config2_generators_slot5;
$config2_generators_slot5 = $config2_generators_slot6;
$config2_generators_slot6 = $config2_generators_slot7;
$config2_generators_slot7 = $config2_generators_slot8;
$config2_generators_slot8 = $config2_generators_slot9;
$config2_generators_slot9 = $config2_generators_slot10;
$config2_generators_slot10 = $config2_generators_slot11;
$config2_generators_slot11 = $config2_generators_slot12;
$config2_generators_slot12 = $config2_generators_slot13;
$config2_generators_slot13 = $config2_generators_slot14;
$config2_generators_slot14 = $config2_generators_slot15;
$config2_generators_slot15 = $config2_generators_slot16;
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot3)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot3='$config2_generators_slot4', config2_generators_slot4='$config2_generators_slot5', config2_generators_slot5='$config2_generators_slot6', config2_generators_slot6='$config2_generators_slot7', config2_generators_slot7='$config2_generators_slot8', config2_generators_slot8='$config2_generators_slot9', config2_generators_slot9='$config2_generators_slot10', config2_generators_slot10='$config2_generators_slot11', config2_generators_slot11='$config2_generators_slot12', config2_generators_slot12='$config2_generators_slot13', config2_generators_slot13='$config2_generators_slot14', config2_generators_slot14='$config2_generators_slot15', config2_generators_slot15='$config2_generators_slot16', config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot3 = $config2_generators_slot4;
$config2_generators_slot4 = $config2_generators_slot5;
$config2_generators_slot5 = $config2_generators_slot6;
$config2_generators_slot6 = $config2_generators_slot7;
$config2_generators_slot7 = $config2_generators_slot8;
$config2_generators_slot8 = $config2_generators_slot9;
$config2_generators_slot9 = $config2_generators_slot10;
$config2_generators_slot10 = $config2_generators_slot11;
$config2_generators_slot11 = $config2_generators_slot12;
$config2_generators_slot12 = $config2_generators_slot13;
$config2_generators_slot13 = $config2_generators_slot14;
$config2_generators_slot14 = $config2_generators_slot15;
$config2_generators_slot15 = $config2_generators_slot16;
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot4)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot4='$config2_generators_slot5', config2_generators_slot5='$config2_generators_slot6', config2_generators_slot6='$config2_generators_slot7', config2_generators_slot7='$config2_generators_slot8', config2_generators_slot8='$config2_generators_slot9', config2_generators_slot9='$config2_generators_slot10', config2_generators_slot10='$config2_generators_slot11', config2_generators_slot11='$config2_generators_slot12', config2_generators_slot12='$config2_generators_slot13', config2_generators_slot13='$config2_generators_slot14', config2_generators_slot14='$config2_generators_slot15', config2_generators_slot15='$config2_generators_slot16', config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot4 = $config2_generators_slot5;
$config2_generators_slot5 = $config2_generators_slot6;
$config2_generators_slot6 = $config2_generators_slot7;
$config2_generators_slot7 = $config2_generators_slot8;
$config2_generators_slot8 = $config2_generators_slot9;
$config2_generators_slot9 = $config2_generators_slot10;
$config2_generators_slot10 = $config2_generators_slot11;
$config2_generators_slot11 = $config2_generators_slot12;
$config2_generators_slot12 = $config2_generators_slot13;
$config2_generators_slot13 = $config2_generators_slot14;
$config2_generators_slot14 = $config2_generators_slot15;
$config2_generators_slot15 = $config2_generators_slot16;
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot5)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot5='$config2_generators_slot6', config2_generators_slot6='$config2_generators_slot7', config2_generators_slot7='$config2_generators_slot8', config2_generators_slot8='$config2_generators_slot9', config2_generators_slot9='$config2_generators_slot10', config2_generators_slot10='$config2_generators_slot11', config2_generators_slot11='$config2_generators_slot12', config2_generators_slot12='$config2_generators_slot13', config2_generators_slot13='$config2_generators_slot14', config2_generators_slot14='$config2_generators_slot15', config2_generators_slot15='$config2_generators_slot16', config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot5 = $config2_generators_slot6;
$config2_generators_slot6 = $config2_generators_slot7;
$config2_generators_slot7 = $config2_generators_slot8;
$config2_generators_slot8 = $config2_generators_slot9;
$config2_generators_slot9 = $config2_generators_slot10;
$config2_generators_slot10 = $config2_generators_slot11;
$config2_generators_slot11 = $config2_generators_slot12;
$config2_generators_slot12 = $config2_generators_slot13;
$config2_generators_slot13 = $config2_generators_slot14;
$config2_generators_slot14 = $config2_generators_slot15;
$config2_generators_slot15 = $config2_generators_slot16;
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot6)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot6='$config2_generators_slot7', config2_generators_slot7='$config2_generators_slot8', config2_generators_slot8='$config2_generators_slot9', config2_generators_slot9='$config2_generators_slot10', config2_generators_slot10='$config2_generators_slot11', config2_generators_slot11='$config2_generators_slot12', config2_generators_slot12='$config2_generators_slot13', config2_generators_slot13='$config2_generators_slot14', config2_generators_slot14='$config2_generators_slot15', config2_generators_slot15='$config2_generators_slot16', config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot6 = $config2_generators_slot7;
$config2_generators_slot7 = $config2_generators_slot8;
$config2_generators_slot8 = $config2_generators_slot9;
$config2_generators_slot9 = $config2_generators_slot10;
$config2_generators_slot10 = $config2_generators_slot11;
$config2_generators_slot11 = $config2_generators_slot12;
$config2_generators_slot12 = $config2_generators_slot13;
$config2_generators_slot13 = $config2_generators_slot14;
$config2_generators_slot14 = $config2_generators_slot15;
$config2_generators_slot15 = $config2_generators_slot16;
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot7)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot7='$config2_generators_slot8', config2_generators_slot8='$config2_generators_slot9', config2_generators_slot9='$config2_generators_slot10', config2_generators_slot10='$config2_generators_slot11', config2_generators_slot11='$config2_generators_slot12', config2_generators_slot12='$config2_generators_slot13', config2_generators_slot13='$config2_generators_slot14', config2_generators_slot14='$config2_generators_slot15', config2_generators_slot15='$config2_generators_slot16', config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot7 = $config2_generators_slot8;
$config2_generators_slot8 = $config2_generators_slot9;
$config2_generators_slot9 = $config2_generators_slot10;
$config2_generators_slot10 = $config2_generators_slot11;
$config2_generators_slot11 = $config2_generators_slot12;
$config2_generators_slot12 = $config2_generators_slot13;
$config2_generators_slot13 = $config2_generators_slot14;
$config2_generators_slot14 = $config2_generators_slot15;
$config2_generators_slot15 = $config2_generators_slot16;
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot8)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot8='$config2_generators_slot9', config2_generators_slot9='$config2_generators_slot10', config2_generators_slot10='$config2_generators_slot11', config2_generators_slot11='$config2_generators_slot12', config2_generators_slot12='$config2_generators_slot13', config2_generators_slot13='$config2_generators_slot14', config2_generators_slot14='$config2_generators_slot15', config2_generators_slot15='$config2_generators_slot16', config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot8 = $config2_generators_slot9;
$config2_generators_slot9 = $config2_generators_slot10;
$config2_generators_slot10 = $config2_generators_slot11;
$config2_generators_slot11 = $config2_generators_slot12;
$config2_generators_slot12 = $config2_generators_slot13;
$config2_generators_slot13 = $config2_generators_slot14;
$config2_generators_slot14 = $config2_generators_slot15;
$config2_generators_slot15 = $config2_generators_slot16;
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot9)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot9='$config2_generators_slot10', config2_generators_slot10='$config2_generators_slot11', config2_generators_slot11='$config2_generators_slot12', config2_generators_slot12='$config2_generators_slot13', config2_generators_slot13='$config2_generators_slot14', config2_generators_slot14='$config2_generators_slot15', config2_generators_slot15='$config2_generators_slot16', config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot9 = $config2_generators_slot10;
$config2_generators_slot10 = $config2_generators_slot11;
$config2_generators_slot11 = $config2_generators_slot12;
$config2_generators_slot12 = $config2_generators_slot13;
$config2_generators_slot13 = $config2_generators_slot14;
$config2_generators_slot14 = $config2_generators_slot15;
$config2_generators_slot15 = $config2_generators_slot16;
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot10)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot10='$config2_generators_slot11', config2_generators_slot11='$config2_generators_slot12', config2_generators_slot12='$config2_generators_slot13', config2_generators_slot13='$config2_generators_slot14', config2_generators_slot14='$config2_generators_slot15', config2_generators_slot15='$config2_generators_slot16', config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot10 = $config2_generators_slot11;
$config2_generators_slot11 = $config2_generators_slot12;
$config2_generators_slot12 = $config2_generators_slot13;
$config2_generators_slot13 = $config2_generators_slot14;
$config2_generators_slot14 = $config2_generators_slot15;
$config2_generators_slot15 = $config2_generators_slot16;
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot11)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot11='$config2_generators_slot12', config2_generators_slot12='$config2_generators_slot13', config2_generators_slot13='$config2_generators_slot14', config2_generators_slot14='$config2_generators_slot15', config2_generators_slot15='$config2_generators_slot16', config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot11 = $config2_generators_slot12;
$config2_generators_slot12 = $config2_generators_slot13;
$config2_generators_slot13 = $config2_generators_slot14;
$config2_generators_slot14 = $config2_generators_slot15;
$config2_generators_slot15 = $config2_generators_slot16;
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot12)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot12='$config2_generators_slot13', config2_generators_slot13='$config2_generators_slot14', config2_generators_slot14='$config2_generators_slot15', config2_generators_slot15='$config2_generators_slot16', config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot12 = $config2_generators_slot13;
$config2_generators_slot13 = $config2_generators_slot14;
$config2_generators_slot14 = $config2_generators_slot15;
$config2_generators_slot15 = $config2_generators_slot16;
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot13)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot13='$config2_generators_slot14', config2_generators_slot14='$config2_generators_slot15', config2_generators_slot15='$config2_generators_slot16', config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot13 = $config2_generators_slot14;
$config2_generators_slot14 = $config2_generators_slot15;
$config2_generators_slot15 = $config2_generators_slot16;
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot14)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot14='$config2_generators_slot15', config2_generators_slot15='$config2_generators_slot16', config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot14 = $config2_generators_slot15;
$config2_generators_slot15 = $config2_generators_slot16;
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot15)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot15='$config2_generators_slot16', config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot15 = $config2_generators_slot16;
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot16)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot16='$config2_generators_slot17', config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot16 = $config2_generators_slot17;
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot17)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot17='$config2_generators_slot18', config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot17 = $config2_generators_slot18;
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot18)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot18='$config2_generators_slot19', config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot18 = $config2_generators_slot19;
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot19)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot19='$config2_generators_slot20', config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot19 = $config2_generators_slot20;
$config2_generators_slot20 = 0;
}
else if ($value == $config2_generators_slot20)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot20=0 WHERE playerID=$ID");
$config2_generators_slot20 = 0;
}
}
}
else if ($slotset == "heavy_guns")
{
foreach($items as &$value)
{
$sl++;
if ($value == $config2_heavy_guns_slot1)
{
mysqli_query($con,"UPDATE players_equipment SET config2_heavy_guns_slot1=0 WHERE playerID=$ID");
}
else if ($value == $config2_heavy_guns_slot2)
{
mysqli_query($con,"UPDATE players_equipment SET config2_heavy_guns_slot2=0 WHERE playerID=$ID");
}
}
}
else if ($slotset == "extras")
{
foreach($items as &$value)
{
$sl++;
if ($value == $config2_extras_slot1)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot1='$config2_extras_slot2', config2_extras_slot2='$config2_extras_slot3', config2_extras_slot3='$config2_extras_slot4', config2_extras_slot4='$config2_extras_slot5', config2_extras_slot5='$config2_extras_slot6', config2_extras_slot6='$config2_extras_slot7', config2_extras_slot7='$config2_extras_slot8', config2_extras_slot8='$config2_extras_slot9', config2_extras_slot9='$config2_extras_slot10', config2_extras_slot10='$config2_extras_slot11', config2_extras_slot11='$config2_extras_slot12', config2_extras_slot12='$config2_extras_slot13', config2_extras_slot13='$config2_extras_slot14', config2_extras_slot14='$config2_extras_slot15', config2_extras_slot15=0 WHERE playerID=$ID");
$config2_extras_slot1 = $config2_extras_slot2;
$config2_extras_slot2 = $config2_extras_slot3;
$config2_extras_slot3 = $config2_extras_slot4;
$config2_extras_slot4 = $config2_extras_slot5;
$config2_extras_slot5 = $config2_extras_slot6;
$config2_extras_slot6 = $config2_extras_slot7;
$config2_extras_slot7 = $config2_extras_slot8;
$config2_extras_slot8 = $config2_extras_slot9;
$config2_extras_slot9 = $config2_extras_slot10;
$config2_extras_slot10 = $config2_extras_slot11;
$config2_extras_slot11 = $config2_extras_slot12;
$config2_extras_slot12 = $config2_extras_slot13;
$config2_extras_slot13 = $config2_extras_slot14;
$config2_extras_slot14 = $config2_extras_slot15;
$config2_extras_slot15 = 0;
}
else if ($value == $config2_extras_slot2)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot2='$config2_extras_slot3', config2_extras_slot3='$config2_extras_slot4', config2_extras_slot4='$config2_extras_slot5', config2_extras_slot5='$config2_extras_slot6', config2_extras_slot6='$config2_extras_slot7', config2_extras_slot7='$config2_extras_slot8', config2_extras_slot8='$config2_extras_slot9', config2_extras_slot9='$config2_extras_slot10', config2_extras_slot10='$config2_extras_slot11', config2_extras_slot11='$config2_extras_slot12', config2_extras_slot12='$config2_extras_slot13', config2_extras_slot13='$config2_extras_slot14', config2_extras_slot14='$config2_extras_slot15', config2_extras_slot15=0 WHERE playerID=$ID");
$config2_extras_slot2 = $config2_extras_slot3;
$config2_extras_slot3 = $config2_extras_slot4;
$config2_extras_slot4 = $config2_extras_slot5;
$config2_extras_slot5 = $config2_extras_slot6;
$config2_extras_slot6 = $config2_extras_slot7;
$config2_extras_slot7 = $config2_extras_slot8;
$config2_extras_slot8 = $config2_extras_slot9;
$config2_extras_slot9 = $config2_extras_slot10;
$config2_extras_slot10 = $config2_extras_slot11;
$config2_extras_slot11 = $config2_extras_slot12;
$config2_extras_slot12 = $config2_extras_slot13;
$config2_extras_slot13 = $config2_extras_slot14;
$config2_extras_slot14 = $config2_extras_slot15;
$config2_extras_slot15 = 0;
}
else if ($value == $config2_extras_slot3)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot3='$config2_extras_slot4', config2_extras_slot4='$config2_extras_slot5', config2_extras_slot5='$config2_extras_slot6', config2_extras_slot6='$config2_extras_slot7', config2_extras_slot7='$config2_extras_slot8', config2_extras_slot8='$config2_extras_slot9', config2_extras_slot9='$config2_extras_slot10', config2_extras_slot10='$config2_extras_slot11', config2_extras_slot11='$config2_extras_slot12', config2_extras_slot12='$config2_extras_slot13', config2_extras_slot13='$config2_extras_slot14', config2_extras_slot14='$config2_extras_slot15', config2_extras_slot15=0 WHERE playerID=$ID");
$config2_extras_slot3 = $config2_extras_slot4;
$config2_extras_slot4 = $config2_extras_slot5;
$config2_extras_slot5 = $config2_extras_slot6;
$config2_extras_slot6 = $config2_extras_slot7;
$config2_extras_slot7 = $config2_extras_slot8;
$config2_extras_slot8 = $config2_extras_slot9;
$config2_extras_slot9 = $config2_extras_slot10;
$config2_extras_slot10 = $config2_extras_slot11;
$config2_extras_slot11 = $config2_extras_slot12;
$config2_extras_slot12 = $config2_extras_slot13;
$config2_extras_slot13 = $config2_extras_slot14;
$config2_extras_slot14 = $config2_extras_slot15;
$config2_extras_slot15 = 0;
}
else if ($value == $config2_extras_slot4)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot4='$config2_extras_slot5', config2_extras_slot5='$config2_extras_slot6', config2_extras_slot6='$config2_extras_slot7', config2_extras_slot7='$config2_extras_slot8', config2_extras_slot8='$config2_extras_slot9', config2_extras_slot9='$config2_extras_slot10', config2_extras_slot10='$config2_extras_slot11', config2_extras_slot11='$config2_extras_slot12', config2_extras_slot12='$config2_extras_slot13', config2_extras_slot13='$config2_extras_slot14', config2_extras_slot14='$config2_extras_slot15', config2_extras_slot15=0 WHERE playerID=$ID");
$config2_extras_slot4 = $config2_extras_slot5;
$config2_extras_slot5 = $config2_extras_slot6;
$config2_extras_slot6 = $config2_extras_slot7;
$config2_extras_slot7 = $config2_extras_slot8;
$config2_extras_slot8 = $config2_extras_slot9;
$config2_extras_slot9 = $config2_extras_slot10;
$config2_extras_slot10 = $config2_extras_slot11;
$config2_extras_slot11 = $config2_extras_slot12;
$config2_extras_slot12 = $config2_extras_slot13;
$config2_extras_slot13 = $config2_extras_slot14;
$config2_extras_slot14 = $config2_extras_slot15;
$config2_extras_slot15 = 0;
}
else if ($value == $config2_extras_slot5)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot5='$config2_extras_slot6', config2_extras_slot6='$config2_extras_slot7', config2_extras_slot7='$config2_extras_slot8', config2_extras_slot8='$config2_extras_slot9', config2_extras_slot9='$config2_extras_slot10', config2_extras_slot10='$config2_extras_slot11', config2_extras_slot11='$config2_extras_slot12', config2_extras_slot12='$config2_extras_slot13', config2_extras_slot13='$config2_extras_slot14', config2_extras_slot14='$config2_extras_slot15', config2_extras_slot15=0 WHERE playerID=$ID");
$config2_extras_slot5 = $config2_extras_slot6;
$config2_extras_slot6 = $config2_extras_slot7;
$config2_extras_slot7 = $config2_extras_slot8;
$config2_extras_slot8 = $config2_extras_slot9;
$config2_extras_slot9 = $config2_extras_slot10;
$config2_extras_slot10 = $config2_extras_slot11;
$config2_extras_slot11 = $config2_extras_slot12;
$config2_extras_slot12 = $config2_extras_slot13;
$config2_extras_slot13 = $config2_extras_slot14;
$config2_extras_slot14 = $config2_extras_slot15;
$config2_extras_slot15 = 0;
}
else if ($value == $config2_extras_slot6)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot6='$config2_extras_slot7', config2_extras_slot7='$config2_extras_slot8', config2_extras_slot8='$config2_extras_slot9', config2_extras_slot9='$config2_extras_slot10', config2_extras_slot10='$config2_extras_slot11', config2_extras_slot11='$config2_extras_slot12', config2_extras_slot12='$config2_extras_slot13', config2_extras_slot13='$config2_extras_slot14', config2_extras_slot14='$config2_extras_slot15', config2_extras_slot15=0 WHERE playerID=$ID");
$config2_extras_slot6 = $config2_extras_slot7;
$config2_extras_slot7 = $config2_extras_slot8;
$config2_extras_slot8 = $config2_extras_slot9;
$config2_extras_slot9 = $config2_extras_slot10;
$config2_extras_slot10 = $config2_extras_slot11;
$config2_extras_slot11 = $config2_extras_slot12;
$config2_extras_slot12 = $config2_extras_slot13;
$config2_extras_slot13 = $config2_extras_slot14;
$config2_extras_slot14 = $config2_extras_slot15;
$config2_extras_slot15 = 0;
}
else if ($value == $config2_extras_slot7)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot7='$config2_extras_slot8', config2_extras_slot8='$config2_extras_slot9', config2_extras_slot9='$config2_extras_slot10', config2_extras_slot10='$config2_extras_slot11', config2_extras_slot11='$config2_extras_slot12', config2_extras_slot12='$config2_extras_slot13', config2_extras_slot13='$config2_extras_slot14', config2_extras_slot14='$config2_extras_slot15', config2_extras_slot15=0 WHERE playerID=$ID");
$config2_extras_slot7 = $config2_extras_slot8;
$config2_extras_slot8 = $config2_extras_slot9;
$config2_extras_slot9 = $config2_extras_slot10;
$config2_extras_slot10 = $config2_extras_slot11;
$config2_extras_slot11 = $config2_extras_slot12;
$config2_extras_slot12 = $config2_extras_slot13;
$config2_extras_slot13 = $config2_extras_slot14;
$config2_extras_slot14 = $config2_extras_slot15;
$config2_extras_slot15 = 0;
}
else if ($value == $config2_extras_slot8)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot8='$config2_extras_slot9', config2_extras_slot9='$config2_extras_slot10', config2_extras_slot10='$config2_extras_slot11', config2_extras_slot11='$config2_extras_slot12', config2_extras_slot12='$config2_extras_slot13', config2_extras_slot13='$config2_extras_slot14', config2_extras_slot14='$config2_extras_slot15', config2_extras_slot15=0 WHERE playerID=$ID");
$config2_extras_slot8 = $config2_extras_slot9;
$config2_extras_slot9 = $config2_extras_slot10;
$config2_extras_slot10 = $config2_extras_slot11;
$config2_extras_slot11 = $config2_extras_slot12;
$config2_extras_slot12 = $config2_extras_slot13;
$config2_extras_slot13 = $config2_extras_slot14;
$config2_extras_slot14 = $config2_extras_slot15;
$config2_extras_slot15 = 0;
}
else if ($value == $config2_extras_slot9)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot9='$config2_extras_slot10', config2_extras_slot10='$config2_extras_slot11', config2_extras_slot11='$config2_extras_slot12', config2_extras_slot12='$config2_extras_slot13', config2_extras_slot13='$config2_extras_slot14', config2_extras_slot14='$config2_extras_slot15', config2_extras_slot15=0 WHERE playerID=$ID");
$config2_extras_slot9 = $config2_extras_slot10;
$config2_extras_slot10 = $config2_extras_slot11;
$config2_extras_slot11 = $config2_extras_slot12;
$config2_extras_slot12 = $config2_extras_slot13;
$config2_extras_slot13 = $config2_extras_slot14;
$config2_extras_slot14 = $config2_extras_slot15;
$config2_extras_slot15 = 0;
}
else if ($value == $config2_extras_slot10)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot10='$config2_extras_slot11', config2_extras_slot11='$config2_extras_slot12', config2_extras_slot12='$config2_extras_slot13', config2_extras_slot13='$config2_extras_slot14', config2_extras_slot14='$config2_extras_slot15', config2_extras_slot15=0 WHERE playerID=$ID");
$config2_extras_slot10 = $config2_extras_slot11;
$config2_extras_slot11 = $config2_extras_slot12;
$config2_extras_slot12 = $config2_extras_slot13;
$config2_extras_slot13 = $config2_extras_slot14;
$config2_extras_slot14 = $config2_extras_slot15;
$config2_extras_slot15 = 0;
}
else if ($value == $config2_extras_slot11)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot11='$config2_extras_slot12', config2_extras_slot12='$config2_extras_slot13', config2_extras_slot13='$config2_extras_slot14', config2_extras_slot14='$config2_extras_slot15', config2_extras_slot15=0 WHERE playerID=$ID");
$config2_extras_slot11 = $config2_extras_slot12;
$config2_extras_slot12 = $config2_extras_slot13;
$config2_extras_slot13 = $config2_extras_slot14;
$config2_extras_slot14 = $config2_extras_slot15;
$config2_extras_slot15 = 0;
}
else if ($value == $config2_extras_slot12)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot12='$config2_extras_slot13', config2_extras_slot13='$config2_extras_slot14', config2_extras_slot14='$config2_extras_slot15', config2_extras_slot15=0 WHERE playerID=$ID");
$config2_extras_slot12 = $config2_extras_slot13;
$config2_extras_slot13 = $config2_extras_slot14;
$config2_extras_slot14 = $config2_extras_slot15;
$config2_extras_slot15 = 0;
}
else if ($value == $config2_extras_slot13)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot13='$config2_extras_slot14', config2_extras_slot14='$config2_extras_slot15', config2_extras_slot15=0 WHERE playerID=$ID");
$config2_extras_slot13 = $config2_extras_slot14;
$config2_extras_slot14 = $config2_extras_slot15;
$config2_extras_slot15 = 0;
}
else if ($value == $config2_extras_slot14)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot14='$config2_extras_slot15', config2_extras_slot15=0 WHERE playerID=$ID");
$config2_extras_slot14 = $config2_extras_slot15;
$config2_extras_slot15 = 0;
}
else if ($value == $config2_extras_slot15)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot15=0 WHERE playerID=$ID");
$config2_extras_slot15 = 0;
}
}
}
}
else if ($from == "inventory" && $to == "ship")
{
foreach($items as &$value)
{
if ($value > 739999 && $value < 750000)
{
$dmg2 += 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 += 150;
}
else if ($value > 1269999 && $value < 1280000)
{
$speed2 += 10;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 += 10000;
}
$sl++;
$slotset = $result->to->slotset;
if ($slotset == "lasers")
{
if ($config2_lasers_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot1='$value' WHERE playerID=$ID");
$config2_lasers_slot1 = $value;
}
else if ($config2_lasers_slot2 == 0 && $lasersq >= 2)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot2='$value' WHERE playerID=$ID");
$config2_lasers_slot2 = $value;
}
else if ($config2_lasers_slot3 == 0 && $lasersq >= 3)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot3='$value' WHERE playerID=$ID");
$config2_lasers_slot3 = $value;
}
else if ($config2_lasers_slot4 == 0 && $lasersq >= 4)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot4='$value' WHERE playerID=$ID");
$config2_lasers_slot4 = $value;
}
else if ($config2_lasers_slot5 == 0 && $lasersq >= 5)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot5='$value' WHERE playerID=$ID");
$config2_lasers_slot5 = $value;
}
else if ($config2_lasers_slot6 == 0 && $lasersq >= 6)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot6='$value' WHERE playerID=$ID");
$config2_lasers_slot6 = $value;
}
else if ($config2_lasers_slot7 == 0 && $lasersq >= 7)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot7='$value' WHERE playerID=$ID");
$config2_lasers_slot7 = $value;
}
else if ($config2_lasers_slot8 == 0 && $lasersq >= 8)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot8='$value' WHERE playerID=$ID");
$config2_lasers_slot8 = $value;
}
else if ($config2_lasers_slot9 == 0 && $lasersq >= 9)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot9='$value' WHERE playerID=$ID");
$config2_lasers_slot9 = $value;
}
else if ($config2_lasers_slot10 == 0 && $lasersq >= 10)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot10='$value' WHERE playerID=$ID");
$config2_lasers_slot10 = $value;
}
else if ($config2_lasers_slot11 == 0 && $lasersq >= 11)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot11='$value' WHERE playerID=$ID");
$config2_lasers_slot11 = $value;
}
else if ($config2_lasers_slot12 == 0 && $lasersq >= 12)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot12='$value' WHERE playerID=$ID");
$config2_lasers_slot12 = $value;
}
else if ($config2_lasers_slot13 == 0 && $lasersq >= 13)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot13='$value' WHERE playerID=$ID");
$config2_lasers_slot13 = $value;
}
else if ($config2_lasers_slot14 == 0 && $lasersq >= 14)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$value' WHERE playerID=$ID");
$config2_lasers_slot14 = $value;
}
else if ($config2_lasers_slot15 == 0 && $lasersq >= 15)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15='$value' WHERE playerID=$ID");
$config2_lasers_slot15 = $value;
}
else if ($config2_lasers_slot16 == 0 && $lasersq >= 16)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot16='$value' WHERE playerID=$ID");
$config2_lasers_slot16 = $value;
}
else if ($config2_lasers_slot17 == 0 && $lasersq >= 17)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot17='$value' WHERE playerID=$ID");
$config2_lasers_slot17 = $value;
}
else if ($config2_lasers_slot18 == 0 && $lasersq >= 18)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot18='$value' WHERE playerID=$ID");
$config2_lasers_slot18 = $value;
}
else if ($config2_lasers_slot19 == 0 && $lasersq >= 19)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot19='$value' WHERE playerID=$ID");
$config2_lasers_slot19 = $value;
}
else if ($config2_lasers_slot20 == 0 && $lasersq >= 20)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot20='$value' WHERE playerID=$ID");
$config2_lasers_slot20 = $value;
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg2 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 -= 150;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($slotset == "generators")
{
if ($config2_generators_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot1='$value' WHERE playerID=$ID");
$config2_generators_slot1 = $value;
}
else if ($config2_generators_slot2 == 0 && $generatorq >= 2)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot2='$value' WHERE playerID=$ID");
$config2_generators_slot2 = $value;
}
else if ($config2_generators_slot3 == 0 && $generatorq >= 3)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot3='$value' WHERE playerID=$ID");
$config2_generators_slot3 = $value;
}
else if ($config2_generators_slot4 == 0 && $generatorq >= 4)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot4='$value' WHERE playerID=$ID");
$config2_generators_slot4 = $value;
}
else if ($config2_generators_slot5 == 0 && $generatorq >= 5)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot5='$value' WHERE playerID=$ID");
$config2_generators_slot5 = $value;
}
else if ($config2_generators_slot6 == 0 && $generatorq >= 6)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot6='$value' WHERE playerID=$ID");
$config2_generators_slot6 = $value;
}
else if ($config2_generators_slot7 == 0 && $generatorq >= 7)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot7='$value' WHERE playerID=$ID");
$config2_generators_slot7 = $value;
}
else if ($config2_generators_slot8 == 0 && $generatorq >= 8)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot8='$value' WHERE playerID=$ID");
$config2_generators_slot8 = $value;
}
else if ($config2_generators_slot9 == 0 && $generatorq >= 9)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot9='$value' WHERE playerID=$ID");
$config2_generators_slot9 = $value;
}
else if ($config2_generators_slot10 == 0 && $generatorq >= 10)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot10='$value' WHERE playerID=$ID");
$config2_generators_slot10 = $value;
}
else if ($config2_generators_slot11 == 0 && $generatorq >= 11)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot11='$value' WHERE playerID=$ID");
$config2_generators_slot11 = $value;
}
else if ($config2_generators_slot12 == 0 && $generatorq >= 12)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot12='$value' WHERE playerID=$ID");
$config2_generators_slot12 = $value;
}
else if ($config2_generators_slot13 == 0 && $generatorq >= 13)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot13='$value' WHERE playerID=$ID");
$config2_generators_slot13 = $value;
}
else if ($config2_generators_slot14 == 0 && $generatorq >= 14)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot14='$value' WHERE playerID=$ID");
$config2_generators_slot14 = $value;
}
else if ($config2_generators_slot15 == 0 && $generatorq >= 15)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot15='$value' WHERE playerID=$ID");
$config2_generators_slot15 = $value;
}
else if ($config2_generators_slot16 == 0 && $generatorq >= 16)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot16='$value' WHERE playerID=$ID");
$config2_generators_slot16 = $value;
}
else if ($config2_generators_slot17 == 0 && $generatorq >= 17)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot17='$value' WHERE playerID=$ID");
$config2_generators_slot17 = $value;
}
else if ($config2_generators_slot18 == 0 && $generatorq >= 18)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot18='$value' WHERE playerID=$ID");
$config2_generators_slot18 = $value;
}
else if ($config2_generators_slot19 == 0 && $generatorq >= 19)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot19='$value' WHERE playerID=$ID");
$config2_generators_slot19 = $value;
}
else if ($config2_generators_slot20 == 0 && $generatorq >= 20)
{
mysqli_query($con,"UPDATE players_equipment SET config2_generators_slot20='$value' WHERE playerID=$ID");
$config2_generators_slot20 = $value;
}
else
{
if ($value > 1269999 && $value < 1280000)
{
$speed2 -= 10;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($slotset == "heavy_guns")
{
if ($config2_heavy_guns_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_heavy_guns_slot1='$value' WHERE playerID=$ID");
$config2_heavy_guns_slot1 = $value;
}
else if ($config2_heavy_guns_slot2 == 0 && $heavy >= 2)
{
mysqli_query($con,"UPDATE players_equipment SET config2_heavy_guns_slot2='$value' WHERE playerID=$ID");
$config2_heavy_guns_slot2 = $value;
}
else
{
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($slotset == "extras")
{
if ($config2_extras_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot1='$value' WHERE playerID=$ID");
$config2_extras_slot1 = $value;
}
else if ($config2_extras_slot2 == 0 && $extras >= 2)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot2='$value' WHERE playerID=$ID");
$config2_extras_slot2 = $value;
}
else if ($config2_extras_slot3 == 0 && $extras >= 3)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot3='$value' WHERE playerID=$ID");
$config2_extras_slot3 = $value;
}
else if ($config2_extras_slot4 == 0 && $extras >= 4)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot4='$value' WHERE playerID=$ID");
$config2_extras_slot4 = $value;
}
else if ($config2_extras_slot5 == 0 && $extras >= 5)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot5='$value' WHERE playerID=$ID");
$config2_extras_slot5 = $value;
}
else if ($config2_extras_slot6 == 0 && $extras >= 6)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot6='$value' WHERE playerID=$ID");
$config2_extras_slot6 = $value;
}
else if ($config2_extras_slot7 == 0 && $extras >= 7)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot7='$value' WHERE playerID=$ID");
$config2_extras_slot7 = $value;
}
else if ($config2_extras_slot8 == 0 && $extras >= 8)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot8='$value' WHERE playerID=$ID");
$config2_extras_slot8 = $value;
}
else if ($config2_extras_slot9 == 0 && $extras >= 9)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot9='$value' WHERE playerID=$ID");
$config2_extras_slot9 = $value;
}
else if ($config2_extras_slot10 == 0 && $extras >= 10)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot10='$value' WHERE playerID=$ID");
$config2_extras_slot10 = $value;
}
else if ($config2_extras_slot11 == 0 && $extras >= 11)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot11='$value' WHERE playerID=$ID");
$config2_extras_slot11 = $value;
}
else if ($config2_extras_slot12 == 0 && $extras >= 12)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot12='$value' WHERE playerID=$ID");
$config2_extras_slot12 = $value;
}
else if ($config2_extras_slot13 == 0 && $extras >= 13)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot13='$value' WHERE playerID=$ID");
$config2_extras_slot13 = $value;
}
else if ($config2_extras_slot14 == 0 && $extras >= 14)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot14='$value' WHERE playerID=$ID");
$config2_extras_slot14 = $value;
}
else if ($config2_extras_slot15 == 0 && $extras >= 15)
{
mysqli_query($con,"UPDATE players_equipment SET config2_extras_slot15='$value' WHERE playerID=$ID");
$config2_extras_slot15 = $value;
}
else
{
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
}
}
else if ($from == "inventory" && $to == "drone")
{
foreach($items as &$value)
{
if ($value > 739999 && $value < 750000)
{
$dmg2 += 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 += 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 += 10000;
}
$sl++;
$droneId = $result->to->droneId;
if ($droneId  == "500")
{
if ($config2_drone5_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone5_slot1='$value' WHERE playerID=$ID");
}
else if ($config2_drone5_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone5_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg2 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "501")
{
if ($config2_drone2_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone2_slot1='$value' WHERE playerID=$ID");
}
else if ($config2_drone2_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone2_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg2 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "502")
{
if ($config2_drone3_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone3_slot1='$value' WHERE playerID=$ID");
}
else if ($config2_drone3_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone3_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg2 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "503")
{
if ($config2_drone4_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone4_slot1='$value' WHERE playerID=$ID");
}
else if ($config2_drone4_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone4_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg2 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "504")
{
if ($config2_drone1_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone1_slot1='$value' WHERE playerID=$ID");
}
else if ($config2_drone1_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone1_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg2 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "505")
{
if ($config2_drone6_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone6_slot1='$value' WHERE playerID=$ID");
}
else if ($config2_drone6_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone6_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg2 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "506")
{
if ($config2_drone7_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone7_slot1='$value' WHERE playerID=$ID");
}
else if ($config2_drone7_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone7_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg2 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "507")
{
if ($config2_drone8_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone8_slot1='$value' WHERE playerID=$ID");
}
else if ($config2_drone8_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone8_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg2 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "508")
{
if ($config2_drone9_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone9_slot1='$value' WHERE playerID=$ID");
}
else if ($config2_drone9_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone9_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg2 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
else if ($droneId  == "509")
{
if ($config2_drone10_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone10_slot1='$value' WHERE playerID=$ID");
}
else if ($config2_drone10_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone10_slot2='$value' WHERE playerID=$ID");
}
else
{
if ($value > 739999 && $value < 750000)
{
$dmg2 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 -= 10000;
}
if ($q == false)
{
$sl = 0;
$q = true;
$json2['data']['ret'] = array();
}
$json2['data']['ret'][$sl] = $value;
}
}
}
}
else if ($from == "drone" && $to == "inventory")
{
foreach($items as &$value)
{
if ($value > 739999 && $value < 750000)
{
$dmg2 -= 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 -= 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 -= 10000;
}
$sl++;
$droneId = $result->from->droneId;
if ($droneId  == "504")
{
if ($config2_drone1_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone1_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone1_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "501")
{
if ($config2_drone2_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone2_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone2_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "502")
{
if ($config2_drone3_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone3_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone3_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "503")
{
if ($config2_drone4_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone4_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone4_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "500")
{
if ($config2_drone5_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone5_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone5_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "505")
{
if ($config2_drone6_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone6_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone6_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "506")
{
if ($config2_drone7_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone7_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone7_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "507")
{
if ($config2_drone8_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone8_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone8_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "508")
{
if ($config2_drone9_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone9_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone9_slot1=0 WHERE playerID=$ID");
}
}
else if ($droneId  == "509")
{
if ($config2_drone10_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone10_slot2=0 WHERE playerID=$ID");
}
else
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone10_slot1=0 WHERE playerID=$ID");
}
}
}
}
}
echo base64_encode(json_encode($json2));
}
}
else
{
$json = '{"isError":1,"data":{"ret":0,"money":{"uridium":"650","credits":"4.735.316"}},"error":{"message":"N\u00e3o \u00e9 poss\u00edvel colocar o equipamento! Vai primeiro at\u00e9 \u00e0 tua esta\u00e7\u00e3o espacial."}}';
echo base64_encode($json);
}
mysqli_query($con,"UPDATE players SET dmg1='$dmg1' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players SET dmg2='$dmg2' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players SET speed1='$speed1' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players SET speed2='$speed2' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players SET maxShield1='$shield1' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players SET maxShield2='$shield2' WHERE playerID=$ID");
}
else if ($action == "droneEquip")
{
mysqli_query($con,"UPDATE players SET changedconfiguration=1 WHERE playerID=$ID");
$post = $_POST["params"];
$params = base64_decode($post);
$result = json_decode($params);
$droneItems = $result->from->droneItems;
$configId = $result->from->configId;
$json2 = array('isError' => 0, 'data' => array());
$json2['data']['ret'] = array();
$json2['data']['money']['uridium'] = $uridium;
$json2['data']['money']['credits'] = $credits;
echo base64_encode(json_encode($json2));
if ($configId == 1)
{
$config1_drone1_slot1 = $row2["config1_drone1_slot1"];
$config1_drone1_slot2 = $row2["config1_drone1_slot2"];
$config1_drone2_slot1 = $row2["config1_drone2_slot1"];
$config1_drone2_slot2 = $row2["config1_drone2_slot2"];
$config1_drone3_slot1 = $row2["config1_drone3_slot1"];
$config1_drone3_slot2 = $row2["config1_drone3_slot2"];
$config1_drone4_slot1 = $row2["config1_drone4_slot1"];
$config1_drone4_slot2 = $row2["config1_drone4_slot2"];
$config1_drone5_slot1 = $row2["config1_drone5_slot1"];
$config1_drone5_slot2 = $row2["config1_drone5_slot2"];
$config1_drone6_slot1 = $row2["config1_drone6_slot1"];
$config1_drone6_slot2 = $row2["config1_drone6_slot2"];
$config1_drone7_slot1 = $row2["config1_drone7_slot1"];
$config1_drone7_slot2 = $row2["config1_drone7_slot2"];
$config1_drone8_slot1 = $row2["config1_drone8_slot1"];
$config1_drone8_slot2 = $row2["config1_drone8_slot2"];
$config1_drone9_slot1 = $row2["config1_drone9_slot1"];
$config1_drone9_slot2 = $row2["config1_drone9_slot2"];
$config1_drone10_slot1 = $row2["config1_drone10_slot1"];
$config1_drone10_slot2 = $row2["config1_drone10_slot2"];
foreach ($droneItems as $key => $val)
{
$droneId = $key;
foreach($val as $value)
{
if ($value > 739999 && $value < 750000)
{
$dmg1 += 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg1 += 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield1 += 10000;
}
$sl++;
if ($droneId  == "500")
{
if ($config1_drone5_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone5_slot1='$value' WHERE playerID=$ID");
$config1_drone5_slot1 = $value;
}
else if ($config1_drone5_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone5_slot2='$value' WHERE playerID=$ID");
$config1_drone5_slot2 = $value;
}
}
else if ($droneId  == "501")
{
if ($config1_drone2_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone2_slot1='$value' WHERE playerID=$ID");
$config1_drone2_slot1 = $value;
}
else if ($config1_drone2_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone2_slot2='$value' WHERE playerID=$ID");
$config1_drone2_slot2 = $value;
}
}
else if ($droneId  == "502")
{
if ($config1_drone3_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone3_slot1='$value' WHERE playerID=$ID");
$config1_drone3_slot1 = $value;
}
else if ($config1_drone3_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone3_slot2='$value' WHERE playerID=$ID");
$config1_drone3_slot2 = $value;
}
}
else if ($droneId  == "503")
{
if ($config1_drone4_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone4_slot1='$value' WHERE playerID=$ID");
$config1_drone4_slot1 = $value;
}
else if ($config1_drone4_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone4_slot2='$value' WHERE playerID=$ID");
$config1_drone4_slot2 = $value;
}
}
else if ($droneId  == "504")
{
if ($config1_drone1_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone1_slot1='$value' WHERE playerID=$ID");
$config1_drone1_slot1 = $value;
}
else if ($config1_drone1_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone1_slot2='$value' WHERE playerID=$ID");
$config1_drone1_slot2 = $value;
}
}
else if ($droneId  == "505")
{
if ($config1_drone6_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone6_slot1='$value' WHERE playerID=$ID");
$config1_drone6_slot1 = $value;
}
else if ($config1_drone6_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone6_slot2='$value' WHERE playerID=$ID");
$config1_drone6_slot2 = $value;
}
}
else if ($droneId  == "506")
{
if ($config1_drone7_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone7_slot1='$value' WHERE playerID=$ID");
$config1_drone7_slot1 = $value;
}
else if ($config1_drone7_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone7_slot2='$value' WHERE playerID=$ID");
$config1_drone7_slot2 = $value;
}
}
else if ($droneId  == "507")
{
if ($config1_drone8_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone8_slot1='$value' WHERE playerID=$ID");
$config1_drone8_slot1 = $value;
}
else if ($config1_drone8_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone8_slot2='$value' WHERE playerID=$ID");
$config1_drone8_slot2 = $value;
}
}
else if ($droneId  == "508")
{
if ($config1_drone9_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone9_slot1='$value' WHERE playerID=$ID");
$config1_drone9_slot1 = $value;
}
else if ($config1_drone9_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone9_slot2='$value' WHERE playerID=$ID");
$config1_drone9_slot2 = $value;
}
}
else if ($droneId  == "509")
{
if ($config1_drone10_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone10_slot1='$value' WHERE playerID=$ID");
$config1_drone10_slot1 = $value;
}
else if ($config1_drone10_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config1_drone10_slot2='$value' WHERE playerID=$ID");
$config1_drone10_slot2 = $value;
}
}
}
}
}
else if ($configId == 2)
{
$config2_drone1_slot1 = $row2["config2_drone1_slot1"];
$config2_drone1_slot2 = $row2["config2_drone1_slot2"];
$config2_drone2_slot1 = $row2["config2_drone2_slot1"];
$config2_drone2_slot2 = $row2["config2_drone2_slot2"];
$config2_drone3_slot1 = $row2["config2_drone3_slot1"];
$config2_drone3_slot2 = $row2["config2_drone3_slot2"];
$config2_drone4_slot1 = $row2["config2_drone4_slot1"];
$config2_drone4_slot2 = $row2["config2_drone4_slot2"];
$config2_drone5_slot1 = $row2["config2_drone5_slot1"];
$config2_drone5_slot2 = $row2["config2_drone5_slot2"];
$config2_drone6_slot1 = $row2["config2_drone6_slot1"];
$config2_drone6_slot2 = $row2["config2_drone6_slot2"];
$config2_drone7_slot1 = $row2["config2_drone7_slot1"];
$config2_drone7_slot2 = $row2["config2_drone7_slot2"];
$config2_drone8_slot1 = $row2["config2_drone8_slot1"];
$config2_drone8_slot2 = $row2["config2_drone8_slot2"];
$config2_drone9_slot1 = $row2["config2_drone9_slot1"];
$config2_drone9_slot2 = $row2["config2_drone9_slot2"];
$config2_drone10_slot1 = $row2["config2_drone10_slot1"];
$config2_drone10_slot2 = $row2["config2_drone10_slot2"];
foreach ($droneItems as $key => $val)
{
$droneId = $key;
foreach($val as $value)
{
if ($value > 739999 && $value < 750000)
{
$dmg2 += 200;
}
else if ($value > 579999 && $value < 590000)
{
$dmg2 += 150;
}
else if ($value > 1919999 && $value < 1930000)
{
$shield2 += 10000;
}
if ($droneId  == "500")
{
if ($config2_drone5_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone5_slot1='$value' WHERE playerID=$ID");
$config2_drone5_slot1 = $value;
}
else if ($config2_drone5_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone5_slot2='$value' WHERE playerID=$ID");
$config2_drone5_slot2 = $value;
}
}
else if ($droneId  == "501")
{
if ($config2_drone2_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone2_slot1='$value' WHERE playerID=$ID");
$config2_drone2_slot1 = $value;
}
else if ($config2_drone2_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone2_slot2='$value' WHERE playerID=$ID");
$config2_drone2_slot2 = $value;
}
}
else if ($droneId  == "502")
{
if ($config2_drone3_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone3_slot1='$value' WHERE playerID=$ID");
$config2_drone3_slot1 = $value;
}
else if ($config2_drone3_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone3_slot2='$value' WHERE playerID=$ID");
$config2_drone3_slot2 = $value;
}
}
else if ($droneId  == "503")
{
if ($config2_drone4_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone4_slot1='$value' WHERE playerID=$ID");
$config2_drone4_slot1 = $value;
}
else if ($config2_drone4_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone4_slot2='$value' WHERE playerID=$ID");
$config2_drone4_slot2 = $value;
}
}
else if ($droneId  == "504")
{
if ($config2_drone1_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone1_slot1='$value' WHERE playerID=$ID");
$config2_drone1_slot1 = $value;
}
else if ($config2_drone1_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone1_slot2='$value' WHERE playerID=$ID");
$config2_drone1_slot2 = $value;
}
}
else if ($droneId  == "505")
{
if ($config2_drone6_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone6_slot1='$value' WHERE playerID=$ID");
$config2_drone6_slot1 = $value;
}
else if ($config2_drone6_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone6_slot2='$value' WHERE playerID=$ID");
$config2_drone6_slot2 = $value;
}
}
else if ($droneId  == "506")
{
if ($config2_drone7_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone7_slot1='$value' WHERE playerID=$ID");
$config2_drone7_slot1 = $value;
}
else if ($config2_drone7_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone7_slot2='$value' WHERE playerID=$ID");
$config2_drone7_slot2 = $value;
}
}
else if ($droneId  == "507")
{
if ($config2_drone8_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone8_slot1='$value' WHERE playerID=$ID");
$config2_drone8_slot1 = $value;
}
else if ($config2_drone8_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone8_slot2='$value' WHERE playerID=$ID");
$config2_drone8_slot2 = $value;
}
}
else if ($droneId  == "508")
{
if ($config2_drone9_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone9_slot1='$value' WHERE playerID=$ID");
$config2_drone9_slot1 = $value;
}
else if ($config2_drone9_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone9_slot2='$value' WHERE playerID=$ID");
$config2_drone9_slot2 = $value;
}
}
else if ($droneId  == "509")
{
if ($config2_drone10_slot1 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone10_slot1='$value' WHERE playerID=$ID");
$config2_drone10_slot1 = $value;
}
else if ($config2_drone10_slot2 == 0)
{
mysqli_query($con,"UPDATE players_equipment SET config2_drone10_slot2='$value' WHERE playerID=$ID");
$config2_drone10_slot2 = $value;
}
}
}
}
}
mysqli_query($con,"UPDATE players SET dmg1='$dmg1' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players SET dmg2='$dmg2' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players SET maxShield1='$shield1' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players SET maxShield2='$shield2' WHERE playerID=$ID");
}
else if ($action == "sell")
{
$result2 = mysqli_query($con,"SELECT * FROM players_equipment
WHERE playerID=$ID");
$row2 = mysqli_fetch_array($result2);
$config1_lasers_slot1 = $row2["config1_lasers_slot1"];
$config1_lasers_slot2 = $row2["config1_lasers_slot2"];
$config1_lasers_slot3 = $row2["config1_lasers_slot3"];
$config1_lasers_slot4 = $row2["config1_lasers_slot4"];
$config1_lasers_slot5 = $row2["config1_lasers_slot5"];
$config1_lasers_slot6 = $row2["config1_lasers_slot6"];
$config1_lasers_slot7 = $row2["config1_lasers_slot7"];
$config1_lasers_slot8 = $row2["config1_lasers_slot8"];
$config1_lasers_slot9 = $row2["config1_lasers_slot9"];
$config1_lasers_slot10 = $row2["config1_lasers_slot10"];
$config1_lasers_slot11 = $row2["config1_lasers_slot11"];
$config1_lasers_slot12 = $row2["config1_lasers_slot12"];
$config1_lasers_slot13 = $row2["config1_lasers_slot13"];
$config1_lasers_slot14 = $row2["config1_lasers_slot14"];
$config1_lasers_slot15 = $row2["config1_lasers_slot15"];
$config1_generators_slot1 = $row2["config1_generators_slot1"];
$config1_generators_slot2 = $row2["config1_generators_slot2"];
$config1_generators_slot3 = $row2["config1_generators_slot3"];
$config1_generators_slot4 = $row2["config1_generators_slot4"];
$config1_generators_slot5 = $row2["config1_generators_slot5"];
$config1_generators_slot6 = $row2["config1_generators_slot6"];
$config1_generators_slot7 = $row2["config1_generators_slot7"];
$config1_generators_slot8 = $row2["config1_generators_slot8"];
$config1_generators_slot9 = $row2["config1_generators_slot9"];
$config1_generators_slot10 = $row2["config1_generators_slot10"];
$config1_generators_slot11 = $row2["config1_generators_slot11"];
$config1_generators_slot12 = $row2["config1_generators_slot12"];
$config1_generators_slot13 = $row2["config1_generators_slot13"];
$config1_generators_slot14 = $row2["config1_generators_slot14"];
$config1_generators_slot15 = $row2["config1_generators_slot15"];
$config1_drone1_slot1 = $row2["config1_drone1_slot1"];
$config1_drone1_slot2 = $row2["config1_drone1_slot2"];
$config1_drone2_slot1 = $row2["config1_drone2_slot1"];
$config1_drone2_slot2 = $row2["config1_drone2_slot2"];
$config1_drone3_slot1 = $row2["config1_drone3_slot1"];
$config1_drone3_slot2 = $row2["config1_drone3_slot2"];
$config1_drone4_slot1 = $row2["config1_drone4_slot1"];
$config1_drone4_slot2 = $row2["config1_drone4_slot2"];
$config1_drone5_slot1 = $row2["config1_drone5_slot1"];
$config1_drone5_slot2 = $row2["config1_drone5_slot2"];
$config1_drone6_slot1 = $row2["config1_drone6_slot1"];
$config1_drone6_slot2 = $row2["config1_drone6_slot2"];
$config1_drone7_slot1 = $row2["config1_drone7_slot1"];
$config1_drone7_slot2 = $row2["config1_drone7_slot2"];
$config1_drone8_slot1 = $row2["config1_drone8_slot1"];
$config1_drone8_slot2 = $row2["config1_drone8_slot2"];
$config2_lasers_slot1 = $row2["config2_lasers_slot1"];
$config2_lasers_slot2 = $row2["config2_lasers_slot2"];
$config2_lasers_slot3 = $row2["config2_lasers_slot3"];
$config2_lasers_slot4 = $row2["config2_lasers_slot4"];
$config2_lasers_slot5 = $row2["config2_lasers_slot5"];
$config2_lasers_slot6 = $row2["config2_lasers_slot6"];
$config2_lasers_slot7 = $row2["config2_lasers_slot7"];
$config2_lasers_slot8 = $row2["config2_lasers_slot8"];
$config2_lasers_slot9 = $row2["config2_lasers_slot9"];
$config2_lasers_slot10 = $row2["config2_lasers_slot10"];
$config2_lasers_slot11 = $row2["config2_lasers_slot11"];
$config2_lasers_slot12 = $row2["config2_lasers_slot12"];
$config2_lasers_slot13 = $row2["config2_lasers_slot13"];
$config2_lasers_slot14 = $row2["config2_lasers_slot14"];
$config2_lasers_slot15 = $row2["config2_lasers_slot15"];
$config2_generators_slot1 = $row2["config2_generators_slot1"];
$config2_generators_slot2 = $row2["config2_generators_slot2"];
$config2_generators_slot3 = $row2["config2_generators_slot3"];
$config2_generators_slot4 = $row2["config2_generators_slot4"];
$config2_generators_slot5 = $row2["config2_generators_slot5"];
$config2_generators_slot6 = $row2["config2_generators_slot6"];
$config2_generators_slot7 = $row2["config2_generators_slot7"];
$config2_generators_slot8 = $row2["config2_generators_slot8"];
$config2_generators_slot9 = $row2["config2_generators_slot9"];
$config2_generators_slot10 = $row2["config2_generators_slot10"];
$config2_generators_slot11 = $row2["config2_generators_slot11"];
$config2_generators_slot12 = $row2["config2_generators_slot12"];
$config2_generators_slot13 = $row2["config2_generators_slot13"];
$config2_generators_slot14 = $row2["config2_generators_slot14"];
$config2_generators_slot15 = $row2["config2_generators_slot15"];
$config2_drone1_slot1 = $row2["config2_drone1_slot1"];
$config2_drone1_slot2 = $row2["config2_drone1_slot2"];
$config2_drone2_slot1 = $row2["config2_drone2_slot1"];
$config2_drone2_slot2 = $row2["config2_drone2_slot2"];
$config2_drone3_slot1 = $row2["config2_drone3_slot1"];
$config2_drone3_slot2 = $row2["config2_drone3_slot2"];
$config2_drone4_slot1 = $row2["config2_drone4_slot1"];
$config2_drone4_slot2 = $row2["config2_drone4_slot2"];
$config2_drone5_slot1 = $row2["config2_drone5_slot1"];
$config2_drone5_slot2 = $row2["config2_drone5_slot2"];
$config2_drone6_slot1 = $row2["config2_drone6_slot1"];
$config2_drone6_slot2 = $row2["config2_drone6_slot2"];
$config2_drone7_slot1 = $row2["config2_drone7_slot1"];
$config2_drone7_slot2 = $row2["config2_drone7_slot2"];
$config2_drone8_slot1 = $row2["config2_drone8_slot1"];
$config2_drone8_slot2 = $row2["config2_drone8_slot2"];
$post = $_POST["params"];
$params = base64_decode($post);
$result = json_decode($params);
$itemId = $result->itemId;
if ($itemId == 1017)
{
$number = $row['BK100'] - 1;
mysqli_query($con,"UPDATE players_equipment SET BK100='$number' WHERE playerID=$ID");
}
else if ($itemId > 1999 && $itemId < 3000)
{
$number = $row['AJP01'] - 1;
mysqli_query($con,"UPDATE players_equipment SET AJP01='$number' WHERE playerID=$ID");
$value = 2000 + ($row['AJP01'] - 1);
}
// REP-S
else if ($itemId > 3999 && $itemId < 5000)
{
$number = $row['REP1'] - 1;
mysqli_query($con,"UPDATE players_equipment SET REP1='$number' WHERE playerID=$ID");
$value = 4000 + ($row['REP1'] - 1);
}
else if ($itemId > 4999 && $itemId < 6000)
{
$number = $row['REP2'] - 1;
mysqli_query($con,"UPDATE players_equipment SET REP2='$number' WHERE playerID=$ID");
$value = 2000 + ($row['REP1'] - 1);
}
else if ($itemId > 5999 && $itemId < 7000)
{
$number = $row['REP3'] - 1;
mysqli_query($con,"UPDATE players_equipment SET REP3='$number' WHERE playerID=$ID");
$value = 6000 + ($row['REP3'] - 1);
}
else if ($itemId > 6999 && $itemId < 8000)
{
$number = $row['REP4'] - 1;
mysqli_query($con,"UPDATE players_equipment SET REP4='$number' WHERE playerID=$ID");
$value = 7000 + ($row['REP4'] - 1);
}
else if ($itemId > 7999 && $itemId < 9000)
{
$number = $row['ROKT01'] - 1;
mysqli_query($con,"UPDATE players_equipment SET ROKT01='$number' WHERE playerID=$ID");
$value = 8000 + ($row['ROKT01'] - 1);
}
else if ($itemId > 8999 && $itemId < 10000)
{
$number = $row['MINT01'] - 1;
mysqli_query($con,"UPDATE players_equipment SET MINT01='$number' WHERE playerID=$ID");
$value = 9000 + ($row['MINT01'] - 1);
}
else if ($itemId > 9999 && $itemId < 11000)
{
$number = $row['MINT02'] - 1;
mysqli_query($con,"UPDATE players_equipment SET MINT02='$number' WHERE playerID=$ID");
$value = 10000 + ($row['MINT02'] - 1);
}
else if ($itemId > 10999 && $itemId < 12000)
{
$number = $row['NCRRB'] - 1;
mysqli_query($con,"UPDATE players_equipment SET NCRRB='$number' WHERE playerID=$ID");
$value = 11000 + ($row['NCRRB'] - 1);
}
else if ($itemId > 11999 && $itemId < 13000)
{
$number = $row['CL04KMOD'] - 1;
mysqli_query($con,"UPDATE players_equipment SET CL04KMOD='$number' WHERE playerID=$ID");
$value = 12000 + ($row['CL04KMOD'] - 1);
}
else if ($itemId > 12999 && $itemId < 14000)
{
$number = $row['AROLX'] - 1;
mysqli_query($con,"UPDATE players_equipment SET AROLX='$number' WHERE playerID=$ID");
$value = 13000 + ($row['AROLX'] - 1);
}
else if ($itemId > 13999 && $itemId < 15000)
{
$number = $row['CL04K'] - 1;
mysqli_query($con,"UPDATE players_equipment SET CL04K='$number' WHERE playerID=$ID");
$value = 14000 + ($row['CL04K'] - 1);
}
else if ($itemId > 14999 && $itemId < 16000)
{
$number = $row['CL04KXLCPU'] - 1;
mysqli_query($con,"UPDATE players_equipment SET CL04KXLCPU='$number' WHERE playerID=$ID");
$value = 15000 + ($row['CL04KXLCPU'] - 1);
}
else if ($itemId > 15999 && $itemId < 17000)
{
$number = $row['NCAWB'] - 1;
mysqli_query($con,"UPDATE players_equipment SET NCAWB='$number' WHERE playerID=$ID");
$value = 16000 + ($row['NCAWB'] - 1);
}
else if ($itemId > 16999 && $itemId < 18000)
{
$number = $row['NCAWR'] - 1;
mysqli_query($con,"UPDATE players_equipment SET NCAWR='$number' WHERE playerID=$ID");
$value = 17000 + ($row['NCAWR'] - 1);
}
else if ($itemId > 17999 && $itemId < 19000)
{
$number = $row['NCAWL'] - 1;
mysqli_query($con,"UPDATE players_equipment SET NCAWL='$number' WHERE playerID=$ID");
$value = 18000 + ($row['NCAWL'] - 1);
}
else if ($itemId > 18999 && $itemId < 20000)
{
$number = $row['GEMXL'] - 1;
mysqli_query($con,"UPDATE players_equipment SET GEMXL='$number' WHERE playerID=$ID");
$value = 19000 + ($row['GEMXL'] - 1);
}
else if ($itemId > 19999 && $itemId < 21000)
{
$number = $row['GEMAC'] - 1;
mysqli_query($con,"UPDATE players_equipment SET GEMAC='$number' WHERE playerID=$ID");
$value = 20000 + ($row['GEMAC'] - 1);
}
else if ($itemId > 20999 && $itemId < 22000)
{
$number = $row['GEMACC'] - 1;
mysqli_query($con,"UPDATE players_equipment SET GEMACC='$number' WHERE playerID=$ID");
$value = 21000 + ($row['GEMACC'] - 1);
}
else if ($itemId > 21999 && $itemId < 23000)
{
$number = $row['GEMACC+'] - 1;
mysqli_query($con,"UPDATE players_equipment SET GEMACC+='$number' WHERE playerID=$ID");
$value = 22000 + ($row['GEMACC+'] - 1);
}
else if ($itemId > 22999 && $itemId < 24000)
{
$number = $row['S01CPU'] - 1;
mysqli_query($con,"UPDATE players_equipment SET S01CPU='$number' WHERE playerID=$ID");
$value = 23000 + ($row['S01CPU'] - 1);
}
else if ($itemId > 23999 && $itemId < 25000)
{
$number = $row['S02CPU'] - 1;
mysqli_query($con,"UPDATE players_equipment SET S02CPU='$number' WHERE playerID=$ID");
$value = 24000 + ($row['S02CPU'] - 1);
}
else if ($itemId > 24999 && $itemId < 26000)
{
$number = $row['S03CPU'] - 1;
mysqli_query($con,"UPDATE players_equipment SET S03CPU='$number' WHERE playerID=$ID");
$value = 25000 + ($row['S03CPU'] - 1);
}
else if ($itemId > 25999 && $itemId < 27000)
{
$number = $row['S04CPU'] - 1;
mysqli_query($con,"UPDATE players_equipment SET S04CPU='$number' WHERE playerID=$ID");
$value = 26000 + ($row['S04CPU'] - 1);
}
else if ($itemId > 26999 && $itemId < 28000)
{
$number = $row['DRO01'] - 1;
mysqli_query($con,"UPDATE players_equipment SET DRO01='$number' WHERE playerID=$ID");
$value = 27000 + ($row['DRO01'] - 1);
}
else if ($itemId > 27999 && $itemId < 29000)
{
$number = $row['DRO02'] - 1;
mysqli_query($con,"UPDATE players_equipment SET DRO02='$number' WHERE playerID=$ID");
$value = 28000 + ($row['DRO02'] - 1);
}
else if ($itemId > 28999 && $itemId < 30000)
{
$number = $row['RDCPU'] - 1;
mysqli_query($con,"UPDATE players_equipment SET RDCPU='$number' WHERE playerID=$ID");
$value = 29000 + ($row['RDCPU'] - 1);
}
else if ($itemId > 29999 && $itemId < 31000)
{
$number = $row['JP1CPU'] - 1;
mysqli_query($con,"UPDATE players_equipment SET JP1CPU='$number' WHERE playerID=$ID");
$value = 30000 + ($row['JP1CPU'] - 1);
}
else if ($itemId > 30999 && $itemId < 32000)
{
$number = $row['JP2CPU'] - 1;
mysqli_query($con,"UPDATE players_equipment SET JP2CPU='$number' WHERE playerID=$ID");
$value = 31000 + ($row['JP2CPU'] - 1);
}
else if ($itemId > 31999 && $itemId < 33000)
{
$number = $row['FBX'] - 1;
mysqli_query($con,"UPDATE players_equipment SET FBX='$number' WHERE playerID=$ID");
$value = 32000 + ($row['FBX'] - 1);
}
else if ($itemId > 32999 && $itemId < 34000)
{
$number = $row['AMCPU'] - 1;
mysqli_query($con,"UPDATE players_equipment SET AMCPU='$number' WHERE playerID=$ID");
$value = 33000 + ($row['AMCPU'] - 1);
}
else if ($itemId > 33999 && $itemId < 35000)
{
$number = $row['RBCPU'] - 1;
mysqli_query($con,"UPDATE players_equipment SET RBCPU='$number' WHERE playerID=$ID");
$value = 34000 + ($row['RBCPU'] - 1);
}
else if ($itemId > 34999 && $itemId < 36000)
{
$number = $row['SMB01'] - 1;
mysqli_query($con,"UPDATE players_equipment SET SMB01='$number' WHERE playerID=$ID");
$value = 35000 + ($row['SMB01'] - 1);
}
else if ($itemId > 35999 && $itemId < 37000)
{
$number = $row['ISH01'] - 1;
mysqli_query($con,"UPDATE players_equipment SET ISH01='$number' WHERE playerID=$ID");
$value = 36000 + ($row['ISH01'] - 1);
}
else if ($itemId > 36999 && $itemId < 38000)
{
$number = $row['NCAGB'] - 1;
mysqli_query($con,"UPDATE players_equipment SET NCAGB='$number' WHERE playerID=$ID");
$value = 37000 + ($row['NCAGB'] - 1);
}
else if ($itemId > 37999 && $itemId < 39000)
{
$number = $row['AIM01'] - 1;
mysqli_query($con,"UPDATE players_equipment SET AIM01='$number' WHERE playerID=$ID");
$value = 38000 + ($row['AIM01'] - 1);
}
else if ($itemId > 38999 && $itemId < 40000)
{
$number = $row['AIM02'] - 1;
mysqli_query($con,"UPDATE players_equipment SET AIM02='$number' WHERE playerID=$ID");
$value = 39000 + ($row['AIM02'] - 1);
}
else if ($itemId > 39999 && $itemId < 41000)
{
$number = $row['RLLB1'] - 1;
mysqli_query($con,"UPDATE players_equipment SET RLLB1='$number' WHERE playerID=$ID");
$value = 40000 + ($row['RLLB1'] - 1);
}
else if ($itemId > 40999 && $itemId < 42000)
{
$number = $row['HM7'] - 1;
mysqli_query($con,"UPDATE players_equipment SET HM7='$number' WHERE playerID=$ID");
$value = 41000 + ($row['HM7'] - 1);
}
else if ($itemId > 99999 && $itemId < 110000)
{
$number = $row['lf1_1'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_1='$number' WHERE playerID=$ID");
$value = 100000 + ($row['lf1_1'] - 1);
}
else if ($itemId > 109999 && $itemId < 120000)
{
$number = $row['lf1_2'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_2='$number' WHERE playerID=$ID");
$value = 110000 + ($row['lf1_2'] - 1);
}
else if ($itemId > 119999 && $itemId < 130000)
{
$number = $row['lf1_3'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_3='$number' WHERE playerID=$ID");
$value = 120000 + ($row['lf1_3'] - 1);
}
else if ($itemId > 129999 && $itemId < 140000)
{
$number = $row['lf1_4'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_4='$number' WHERE playerID=$ID");
$value = 130000 + ($row['lf1_4'] - 1);
}
else if ($itemId > 139999 && $itemId < 150000)
{
$number = $row['lf1_5'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_5='$number' WHERE playerID=$ID");
$value = 140000 + ($row['lf1_5'] - 1);
}
else if ($itemId > 149999 && $itemId < 160000)
{
$number = $row['lf1_6'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_6='$number' WHERE playerID=$ID");
$value = 150000 + ($row['lf1_6'] - 1);
}
else if ($itemId > 159999 && $itemId < 170000)
{
$number = $row['lf1_7'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_7='$number' WHERE playerID=$ID");
$value = 160000 + ($row['lf1_7'] - 1);
}
else if ($itemId > 169999 && $itemId < 180000)
{
$number = $row['lf1_8'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_8='$number' WHERE playerID=$ID");
$value = 170000 + ($row['lf1_8'] - 1);
}
else if ($itemId > 179999 && $itemId < 190000)
{
$number = $row['lf1_9'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_9='$number' WHERE playerID=$ID");
$value = 180000 + ($row['lf1_9'] - 1);
}
else if ($itemId > 189999 && $itemId < 200000)
{
$number = $row['lf1_10'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_10='$number' WHERE playerID=$ID");
$value = 190000 + ($row['lf1_10'] - 1);
}
else if ($itemId > 199999 && $itemId < 210000)
{
$number = $row['lf1_11'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_11='$number' WHERE playerID=$ID");
$value = 200000 + ($row['lf1_11'] - 1);
}
else if ($itemId > 209999 && $itemId < 220000)
{
$number = $row['lf1_12'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_12='$number' WHERE playerID=$ID");
$value = 210000 + ($row['lf1_12'] - 1);
}
else if ($itemId > 219999 && $itemId < 230000)
{
$number = $row['lf1_13'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_13='$number' WHERE playerID=$ID");
$value = 220000 + ($row['lf1_13'] - 1);
}
else if ($itemId > 229999 && $itemId < 240000)
{
$number = $row['lf1_14'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_14='$number' WHERE playerID=$ID");
$value = 230000 + ($row['lf1_14'] - 1);
}
else if ($itemId > 239999 && $itemId < 250000)
{
$number = $row['lf1_15'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_15='$number' WHERE playerID=$ID");
$value = 240000 + ($row['lf1_15'] - 1);
}
else if ($itemId > 249999 && $itemId < 260000)
{
$number = $row['lf1_16'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf1_16='$number' WHERE playerID=$ID");
$value = 250000 + ($row['lf1_16'] - 1);
}
else if ($itemId > 259999 && $itemId < 270000)
{
$number = $row['mp1_1'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_1='$number' WHERE playerID=$ID");
$value = 260000 + ($row['mp1_1'] - 1);
}
else if ($itemId > 269999 && $itemId < 280000)
{
$number = $row['mp1_2'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_2='$number' WHERE playerID=$ID");
$value = 270000 + ($row['mp1_2'] - 1);
}
else if ($itemId > 279999 && $itemId < 290000)
{
$number = $row['mp1_3'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_3='$number' WHERE playerID=$ID");
$value = 280000 + ($row['mp1_3'] - 1);
}
else if ($itemId > 289999 && $itemId < 300000)
{
$number = $row['mp1_4'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_4='$number' WHERE playerID=$ID");
$value = 290000 + ($row['mp1_4'] - 1);
}
else if ($itemId > 299999 && $itemId < 310000)
{
$number = $row['mp1_5'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_5='$number' WHERE playerID=$ID");
$value = 300000 + ($row['mp1_5'] - 1);
}
else if ($itemId > 309999 && $itemId < 320000)
{
$number = $row['mp1_6'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_6='$number' WHERE playerID=$ID");
$value = 310000 + ($row['mp1_6'] - 1);
}
else if ($itemId > 319999 && $itemId < 330000)
{
$number = $row['mp1_7'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_7='$number' WHERE playerID=$ID");
$value = 320000 + ($row['mp1_7'] - 1);
}
else if ($itemId > 329999 && $itemId < 340000)
{
$number = $row['mp1_8'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_8='$number' WHERE playerID=$ID");
$value = 330000 + ($row['mp1_8'] - 1);
}
else if ($itemId > 339999 && $itemId < 350000)
{
$number = $row['mp1_9'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_9='$number' WHERE playerID=$ID");
$value = 340000 + ($row['mp1_9'] - 1);
}
else if ($itemId > 349999 && $itemId < 360000)
{
$number = $row['mp1_10'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_10='$number' WHERE playerID=$ID");
$value = 350000 + ($row['mp1_10'] - 1);
}
else if ($itemId > 359999 && $itemId < 370000)
{
$number = $row['mp1_11'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_11='$number' WHERE playerID=$ID");
$value = 360000 + ($row['mp1_11'] - 1);
}
else if ($itemId > 369999 && $itemId < 380000)
{
$number = $row['mp1_12'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_12='$number' WHERE playerID=$ID");
$value = 370000 + ($row['mp1_12'] - 1);
}
else if ($itemId > 379999 && $itemId < 390000)
{
$number = $row['mp1_13'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_13='$number' WHERE playerID=$ID");
$value = 380000 + ($row['mp1_13'] - 1);
}
else if ($itemId > 389999 && $itemId < 400000)
{
$number = $row['mp1_14'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_14='$number' WHERE playerID=$ID");
$value = 390000 + ($row['mp1_14'] - 1);
}
else if ($itemId > 399999 && $itemId < 410000)
{
$number = $row['mp1_15'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_15='$number' WHERE playerID=$ID");
$value = 400000 + ($row['mp1_15'] - 1);
}
else if ($itemId > 409999 && $itemId < 420000)
{
$number = $row['mp1_16'] - 1;
mysqli_query($con,"UPDATE players_equipment SET mp1_16='$number' WHERE playerID=$ID");
$value = 410000 + ($row['mp1_16'] - 1);
}
else if ($itemId > 419999 && $itemId < 430000)
{
$number = $row['lf2_1'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_1='$number' WHERE playerID=$ID");
$value = 420000 + ($row['lf2_1'] - 1);
}
else if ($itemId > 429999 && $itemId < 440000)
{
$number = $row['lf2_2'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_2='$number' WHERE playerID=$ID");
$value = 430000 + ($row['lf2_2'] - 1);
}
else if ($itemId > 439999 && $itemId < 450000)
{
$number = $row['lf2_3'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_3='$number' WHERE playerID=$ID");
$value = 440000 + ($row['lf2_3'] - 1);
}
else if ($itemId > 449999 && $itemId < 460000)
{
$number = $row['lf2_4'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_4='$number' WHERE playerID=$ID");
$value = 450000 + ($row['lf2_4'] - 1);
}
else if ($itemId > 459999 && $itemId < 470000)
{
$number = $row['lf2_5'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_5='$number' WHERE playerID=$ID");
$value = 460000 + ($row['lf2_5'] - 1);
}
else if ($itemId > 469999 && $itemId < 480000)
{
$number = $row['lf2_6'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_6='$number' WHERE playerID=$ID");
$value = 470000 + ($row['lf2_6'] - 1);
}
else if ($itemId > 479999 && $itemId < 490000)
{
$number = $row['lf2_7'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_7='$number' WHERE playerID=$ID");
$value = 480000 + ($row['lf2_7'] - 1);
}
else if ($itemId > 489999 && $itemId < 500000)
{
$number = $row['lf2_8'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_8='$number' WHERE playerID=$ID");
$value = 490000 + ($row['lf2_8'] - 1);
}
else if ($itemId > 499999 && $itemId < 510000)
{
$number = $row['lf2_9'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_9='$number' WHERE playerID=$ID");
$value = 500000 + ($row['lf2_9'] - 1);
}
else if ($itemId > 509999 && $itemId < 520000)
{
$number = $row['lf2_10'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_10='$number' WHERE playerID=$ID");
$value = 510000 + ($row['lf2_10'] - 1);
}
else if ($itemId > 519999 && $itemId < 530000)
{
$number = $row['lf2_11'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_11='$number' WHERE playerID=$ID");
$value = 520000 + ($row['lf2_11'] - 1);
}
else if ($itemId > 529999 && $itemId < 540000)
{
$number = $row['lf2_12'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_12='$number' WHERE playerID=$ID");
$value = 530000 + ($row['lf2_12'] - 1);
}
else if ($itemId > 539999 && $itemId < 550000)
{
$number = $row['lf2_13'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_13='$number' WHERE playerID=$ID");
$value = 540000 + ($row['lf2_13'] - 1);
}
else if ($itemId > 549999 && $itemId < 560000)
{
$number = $row['lf2_14'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_14='$number' WHERE playerID=$ID");
$value = 550000 + ($row['lf2_14'] - 1);
}
else if ($itemId > 559999 && $itemId < 570000)
{
$number = $row['lf2_15'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_15='$number' WHERE playerID=$ID");
$value = 560000 + ($row['lf2_15'] - 1);
}
else if ($itemId > 569999 && $itemId < 580000)
{
$number = $row['lf2_16'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf2_16='$number' WHERE playerID=$ID");
$value = 570000 + ($row['lf2_16'] - 1);
}
else if ($itemId > 579999 && $itemId < 590000)
{
$number = $row['lf3_1'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_1='$number' WHERE playerID=$ID");
$value = 580000 + ($row['lf3_1'] - 1);
}
else if ($itemId > 589999 && $itemId < 600000)
{
$number = $row['lf3_2'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_2='$number' WHERE playerID=$ID");
$value = 590000 + ($row['lf3_2'] - 1);
}
else if ($itemId > 599999 && $itemId < 610000)
{
$number = $row['lf3_3'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_3='$number' WHERE playerID=$ID");
$value = 600000 + ($row['lf3_3'] - 1);
}
else if ($itemId > 609999 && $itemId < 620000)
{
$number = $row['lf3_4'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_4='$number' WHERE playerID=$ID");
$value = 610000 + ($row['lf3_4'] - 1);
}
else if ($itemId > 619999 && $itemId < 630000)
{
$number = $row['lf3_5'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_5='$number' WHERE playerID=$ID");
$value = 620000 + ($row['lf3_5'] - 1);
}
else if ($itemId > 629999 && $itemId < 640000)
{
$number = $row['lf3_6'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_6='$number' WHERE playerID=$ID");
$value = 630000 + ($row['lf3_6'] - 1);
}
else if ($itemId > 639999 && $itemId < 650000)
{
$number = $row['lf3_7'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_7='$number' WHERE playerID=$ID");
$value = 640000 + ($row['lf3_7'] - 1);
}
else if ($itemId > 649999 && $itemId < 660000)
{
$number = $row['lf3_8'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_8='$number' WHERE playerID=$ID");
$value = 650000 + ($row['lf3_8'] - 1);
}
else if ($itemId > 659999 && $itemId < 670000)
{
$number = $row['lf3_9'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_9='$number' WHERE playerID=$ID");
$value = 660000 + ($row['lf3_9'] - 1);
}
else if ($itemId > 669999 && $itemId < 680000)
{
$number = $row['lf3_10'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_10='$number' WHERE playerID=$ID");
$value = 670000 + ($row['lf3_10'] - 1);
}
else if ($itemId > 679999 && $itemId < 690000)
{
$number = $row['lf3_11'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_11='$number' WHERE playerID=$ID");
$value = 680000 + ($row['lf3_11'] - 1);
}
else if ($itemId > 689999 && $itemId < 700000)
{
$number = $row['lf3_12'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_12='$number' WHERE playerID=$ID");
$value = 690000 + ($row['lf3_12'] - 1);
}
else if ($itemId > 699999 && $itemId < 710000)
{
$number = $row['lf3_13'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_13='$number' WHERE playerID=$ID");
$value = 700000 + ($row['lf3_13'] - 1);
}
else if ($itemId > 709999 && $itemId < 720000)
{
$number = $row['lf3_14'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_14='$number' WHERE playerID=$ID");
$value = 710000 + ($row['lf3_14'] - 1);
}
else if ($itemId > 719999 && $itemId < 730000)
{
$number = $row['lf3_15'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_15='$number' WHERE playerID=$ID");
$value = 720000 + ($row['lf3_15'] - 1);
}
else if ($itemId > 729999 && $itemId < 740000)
{
$number = $row['lf3_16'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf3_16='$number' WHERE playerID=$ID");
$value = 730000 + ($row['lf3_16'] - 1);
}
else if ($itemId > 739999 && $itemId < 750000)
{
$number = $row['lf4_1'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_1='$number' WHERE playerID=$ID");
$value = 740000 + ($row['lf4_1'] - 1);
}
else if ($itemId > 749999 && $itemId < 760000)
{
$number = $row['lf4_2'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_2='$number' WHERE playerID=$ID");
$value = 750000 + ($row['lf4_2'] - 1);
}
else if ($itemId > 759999 && $itemId < 770000)
{
$number = $row['lf4_3'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_3='$number' WHERE playerID=$ID");
$value = 760000 + ($row['lf4_3'] - 1);
}
else if ($itemId > 769999 && $itemId < 780000)
{
$number = $row['lf4_4'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_4='$number' WHERE playerID=$ID");
$value = 770000 + ($row['lf4_4'] - 1);
}
else if ($itemId > 779999 && $itemId < 790000)
{
$number = $row['lf4_5'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_5='$number' WHERE playerID=$ID");
$value = 780000 + ($row['lf4_5'] - 1);
}
else if ($itemId > 789999 && $itemId < 800000)
{
$number = $row['lf4_6'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_6='$number' WHERE playerID=$ID");
$value = 790000 + ($row['lf4_6'] - 1);
}
else if ($itemId > 799999 && $itemId < 810000)
{
$number = $row['lf4_7'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_7='$number' WHERE playerID=$ID");
$value = 800000 + ($row['lf4_7'] - 1);
}
else if ($itemId > 809999 && $itemId < 820000)
{
$number = $row['lf4_8'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_8='$number' WHERE playerID=$ID");
$value = 810000 + ($row['lf4_8'] - 1);
}
else if ($itemId > 819999 && $itemId < 830000)
{
$number = $row['lf4_9'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_9='$number' WHERE playerID=$ID");
$value = 820000 + ($row['lf4_9'] - 1);
}
else if ($itemId > 829999 && $itemId < 840000)
{
$number = $row['lf4_10'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_10='$number' WHERE playerID=$ID");
$value = 830000 + ($row['lf4_10'] - 1);
}
else if ($itemId > 839999 && $itemId < 850000)
{
$number = $row['lf4_11'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_11='$number' WHERE playerID=$ID");
$value = 840000 + ($row['lf4_11'] - 1);
}
else if ($itemId > 849999 && $itemId < 860000)
{
$number = $row['lf4_12'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_12='$number' WHERE playerID=$ID");
$value = 850000 + ($row['lf4_12'] - 1);
}
else if ($itemId > 859999 && $itemId < 870000)
{
$number = $row['lf4_13'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_13='$number' WHERE playerID=$ID");
$value = 860000 + ($row['lf4_13'] - 1);
}
else if ($itemId > 869999 && $itemId < 880000)
{
$number = $row['lf4_14'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_14='$number' WHERE playerID=$ID");
$value = 870000 + ($row['lf4_14'] - 1);
}
else if ($itemId > 879999 && $itemId < 890000)
{
$number = $row['lf4_15'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_15='$number' WHERE playerID=$ID");
$value = 880000 + ($row['lf4_15'] - 1);
}
else if ($itemId > 889999 && $itemId < 900000)
{
$number = $row['lf4_16'] - 1;
mysqli_query($con,"UPDATE players_equipment SET lf4_16='$number' WHERE playerID=$ID");
$value = 890000 + ($row['lf4_16'] - 1);
}
else if ($itemId > 899999 && $itemId < 910000)
{
$number = $row['hst1_1'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_1='$number' WHERE playerID=$ID");
$value = 900000 + ($row['hst1_1'] - 1);
}
else if ($itemId > 909999 && $itemId < 920000)
{
$number = $row['hst1_2'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_2='$number' WHERE playerID=$ID");
$value = 910000 + ($row['hst1_2'] - 1);
}
else if ($itemId > 919999 && $itemId < 930000)
{
$number = $row['hst1_3'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_3='$number' WHERE playerID=$ID");
$value = 920000 + ($row['hst1_3'] - 1);
}
else if ($itemId > 929999 && $itemId < 940000)
{
$number = $row['hst1_4'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_4='$number' WHERE playerID=$ID");
$value = 930000 + ($row['hst1_4'] - 1);
}
else if ($itemId > 939999 && $itemId < 950000)
{
$number = $row['hst1_5'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_5='$number' WHERE playerID=$ID");
$value = 940000 + ($row['hst1_5'] - 1);
}
else if ($itemId > 949999 && $itemId < 960000)
{
$number = $row['hst1_6'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_6='$number' WHERE playerID=$ID");
$value = 950000 + ($row['hst1_6'] - 1);
}
else if ($itemId > 959999 && $itemId < 970000)
{
$number = $row['hst1_7'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_7='$number' WHERE playerID=$ID");
$value = 960000 + ($row['hst1_7'] - 1);
}
else if ($itemId > 969999 && $itemId < 980000)
{
$number = $row['hst1_8'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_8='$number' WHERE playerID=$ID");
$value = 970000 + ($row['hst1_8'] - 1);
}
else if ($itemId > 979999 && $itemId < 990000)
{
$number = $row['hst1_9'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_9='$number' WHERE playerID=$ID");
$value = 980000 + ($row['hst1_9'] - 1);
}
else if ($itemId > 989999 && $itemId < 1000000)
{
$number = $row['hst1_10'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_10='$number' WHERE playerID=$ID");
$value = 990000 + ($row['hst1_10'] - 1);
}
else if ($itemId > 999999 && $itemId < 1010000)
{
$number = $row['hst1_11'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_11='$number' WHERE playerID=$ID");
$value = 1000000 + ($row['hst1_11'] - 1);
}
else if ($itemId > 1009999 && $itemId < 1020000)
{
$number = $row['hst1_12'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_12='$number' WHERE playerID=$ID");
$value = 1010000 + ($row['hst1_12'] - 1);
}
else if ($itemId > 1019999 && $itemId < 1030000)
{
$number = $row['hst1_13'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_13='$number' WHERE playerID=$ID");
$value = 1020000 + ($row['hst1_13_13'] - 1);
}
else if ($itemId > 1029999 && $itemId < 1040000)
{
$number = $row['hst1_14'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_14='$number' WHERE playerID=$ID");
$value = 1030000 + ($row['hst1_14_14'] - 1);
}
else if ($itemId > 1039999 && $itemId < 1050000)
{
$number = $row['hst1_15'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_15='$number' WHERE playerID=$ID");
$value = 1040000 + ($row['hst1_15_15'] - 1);
}
else if ($itemId > 1049999 && $itemId < 1060000)
{
$number = $row['hst1_16'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst1_16='$number' WHERE playerID=$ID");
$value = 1050000 + ($row['hst1_16'] - 1);
}
else if ($itemId > 1059999 && $itemId < 1070000)
{
$number = $row['hst2_1'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_1='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_1'] - 1);
}
else if ($itemId > 1069999 && $itemId < 1080000)
{
$number = $row['hst2_2'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_2='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_2'] - 1);
}
else if ($itemId > 1079999 && $itemId < 1090000)
{
$number = $row['hst2_3'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_3='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_3'] - 1);
}
else if ($itemId > 1089999 && $itemId < 1100000)
{
$number = $row['hst2_4'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_4='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_4'] - 1);
}
else if ($itemId > 1099999 && $itemId < 1110000)
{
$number = $row['hst2_5'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_5='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_5'] - 1);
}
else if ($itemId > 1109999 && $itemId < 1120000)
{
$number = $row['hst2_6'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_6='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_6'] - 1);
}
else if ($itemId > 1119999 && $itemId < 1130000)
{
$number = $row['hst2_7'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_7='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_7'] - 1);
}
else if ($itemId > 1129999 && $itemId < 1140000)
{
$number = $row['hst2_8'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_8='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_8'] - 1);
}
else if ($itemId > 1139999 && $itemId < 1150000)
{
$number = $row['hst2_9'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_9='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_9'] - 1);
}
else if ($itemId > 1149999 && $itemId < 1160000)
{
$number = $row['hst2_10'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_10='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_10'] - 1);
}
else if ($itemId > 1159999 && $itemId < 1170000)
{
$number = $row['hst2_11'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_11='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_11'] - 1);
}
else if ($itemId > 1169999 && $itemId < 1180000)
{
$number = $row['hst2_12'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_12='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_12'] - 1);
}
else if ($itemId > 1179999 && $itemId < 1190000)
{
$number = $row['hst2_13'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_13='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_13'] - 1);
}
else if ($itemId > 1189999 && $itemId < 1200000)
{
$number = $row['hst2_14'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_14='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_14'] - 1);
}
else if ($itemId > 1199999 && $itemId < 1210000)
{
$number = $row['hst2_15'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_15='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_15'] - 1);
}
else if ($itemId > 1209999 && $itemId < 220000)
{
$number = $row['hst2_16'] - 1;
mysqli_query($con,"UPDATE players_equipment SET hst2_16='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['hst2_16'] - 1);
}
else if ($itemId > 1219999 && $itemId < 1230000)
{
$number = $row['g3n_1010'] - 1;
mysqli_query($con,"UPDATE players_equipment SET g3n_1010='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['g3n_1010'] - 1);
}
else if ($itemId > 1229999 && $itemId < 1240000)
{
$number = $row['g3n_2010'] - 1;
mysqli_query($con,"UPDATE players_equipment SET g3n_2010='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['g3n_2010'] - 1);
}
else if ($itemId > 1239999 && $itemId < 1250000)
{
$number = $row['g3n_3210'] - 1;
mysqli_query($con,"UPDATE players_equipment SET g3n_3210='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['g3n_3210'] - 1);
}
else if ($itemId > 1249999 && $itemId < 1260000)
{
$number = $row['g3n_3310'] - 1;
mysqli_query($con,"UPDATE players_equipment SET g3n_3310='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['g3n_3310'] - 1);
}
else if ($itemId > 1259999 && $itemId < 1270000)
{
$number = $row['g3n_6900'] - 1;
mysqli_query($con,"UPDATE players_equipment SET g3n_6900='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['g3n_6900'] - 1);
}
else if ($itemId > 1269999 && $itemId < 1280000)
{
$number = $row['g3n_7900'] - 1;
mysqli_query($con,"UPDATE players_equipment SET g3n_7900='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['g3n_7900'] - 1);
}
else if ($itemId > 1279999 && $itemId < 1290000)
{
$number = $row['sg3n_a01_1'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_1='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_1'] - 1);
}
else if ($itemId > 1289999 && $itemId < 1300000)
{
$number = $row['sg3n_a01_2'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_2='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_2'] - 1);
}
else if ($itemId > 1299999 && $itemId < 1310000)
{
$number = $row['sg3n_a01_3'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_3='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_3'] - 1);
}
else if ($itemId > 1309999 && $itemId < 1320000)
{
$number = $row['sg3n_a01_4'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_4='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_4'] - 1);
}
else if ($itemId > 1319999 && $itemId < 1330000)
{
$number = $row['sg3n_a01_5'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_5='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_5'] - 1);
}
else if ($itemId > 1329999 && $itemId < 1340000)
{
$number = $row['sg3n_a01_6'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_6='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_6'] - 1);
}
else if ($itemId > 1339999 && $itemId < 1350000)
{
$number = $row['sg3n_a01_7'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_7='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_7'] - 1);
}
else if ($itemId > 1349999 && $itemId < 1360000)
{
$number = $row['sg3n_a01_8'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_8='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_8'] - 1);
}
else if ($itemId > 1359999 && $itemId < 1370000)
{
$number = $row['sg3n_a01_9'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_9='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_9'] - 1);
}
else if ($itemId > 1369999 && $itemId < 1380000)
{
$number = $row['sg3n_a01_10'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_10='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_10'] - 1);
}
else if ($itemId > 1379999 && $itemId < 1390000)
{
$number = $row['sg3n_a01_11'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_11='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_11'] - 1);
}
else if ($itemId > 1389999 && $itemId < 1400000)
{
$number = $row['sg3n_a01_12'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_12='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_12'] - 1);
}
else if ($itemId > 1399999 && $itemId < 1410000)
{
$number = $row['sg3n_a01_13'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_13='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_13'] - 1);
}
else if ($itemId > 1409999 && $itemId < 1420000)
{
$number = $row['sg3n_a01_14'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_14='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_14'] - 1);
}
else if ($itemId > 1419999 && $itemId < 1430000)
{
$number = $row['sg3n_a01_15'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_15='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_15'] - 1);
}
else if ($itemId > 1429999 && $itemId < 1440000)
{
$number = $row['sg3n_a01_16'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a01_16='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a01_16'] - 1);
}
else if ($itemId > 1439999 && $itemId < 1450000)
{
$number = $row['sg3n_a02_1'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_1='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_1'] - 1);
}
else if ($itemId > 1449999 && $itemId < 1460000)
{
$number = $row['sg3n_a02_2'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_2='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_2'] - 1);
}
else if ($itemId > 1459999 && $itemId < 1470000)
{
$number = $row['sg3n_a02_3'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_3='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_3'] - 1);
}
else if ($itemId > 1469999 && $itemId < 1480000)
{
$number = $row['sg3n_a02_4'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_4='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_4'] - 1);
}
else if ($itemId > 1479999 && $itemId < 1490000)
{
$number = $row['sg3n_a02_5'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_5='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_5'] - 1);
}
else if ($itemId > 1489999 && $itemId < 1500000)
{
$number = $row['sg3n_a02_6'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_6='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_6'] - 1);
}
else if ($itemId > 1499999 && $itemId < 1510000)
{
$number = $row['sg3n_a02_7'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_7='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_7'] - 1);
}
else if ($itemId > 1509999 && $itemId < 1520000)
{
$number = $row['sg3n_a02_8'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_8='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_8'] - 1);
}
else if ($itemId > 1519999 && $itemId < 1530000)
{
$number = $row['sg3n_a02_9'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_9='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_9'] - 1);
}
else if ($itemId > 1529999 && $itemId < 1540000)
{
$number = $row['sg3n_a02_10'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_10='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_10'] - 1);
}
else if ($itemId > 1539999 && $itemId < 1550000)
{
$number = $row['sg3n_a02_11'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_11='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_11'] - 1);
}
else if ($itemId > 1549999 && $itemId < 1560000)
{
$number = $row['sg3n_a02_12'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_12='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_12'] - 1);
}
else if ($itemId > 1559999 && $itemId < 1570000)
{
$number = $row['sg3n_a02_13'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_13='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_13'] - 1);
}
else if ($itemId > 1569999 && $itemId < 1580000)
{
$number = $row['sg3n_a02_14'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_14='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_14'] - 1);
}
else if ($itemId > 1579999 && $itemId < 1590000)
{
$number = $row['sg3n_a02_15'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_15='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_15'] - 1);
}
else if ($itemId > 1589999 && $itemId < 1600000)
{
$number = $row['sg3n_a02_16'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a02_16='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a02_16'] - 1);
}
else if ($itemId > 1599999 && $itemId < 1610000)
{
$number = $row['sg3n_a03_1'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_1='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_1'] - 1);
}
else if ($itemId > 1609999 && $itemId < 1620000)
{
$number = $row['sg3n_a03_2'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_2='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_2'] - 1);
}
else if ($itemId > 1619999 && $itemId < 1630000)
{
$number = $row['sg3n_a03_3'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_3='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_3'] - 1);
}
else if ($itemId > 1629999 && $itemId < 1640000)
{
$number = $row['sg3n_a03_4'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_4='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_4'] - 1);
}
else if ($itemId > 1639999 && $itemId < 1650000)
{
$number = $row['sg3n_a03_5'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_5='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_5'] - 1);
}
else if ($itemId > 1649999 && $itemId < 1660000)
{
$number = $row['sg3n_a03_6'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_6='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_6'] - 1);
}
else if ($itemId > 1659999 && $itemId < 1670000)
{
$number = $row['sg3n_a03_7'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_7='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_7'] - 1);
}
else if ($itemId > 1669999 && $itemId < 1680000)
{
$number = $row['sg3n_a03_8'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_8='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_8'] - 1);
}
else if ($itemId > 1679999 && $itemId < 1690000)
{
$number = $row['sg3n_a03_9'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_9='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_9'] - 1);
}
else if ($itemId > 1689999 && $itemId < 1700000)
{
$number = $row['sg3n_a03_10'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_10='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_10'] - 1);
}
else if ($itemId > 1699999 && $itemId < 1710000)
{
$number = $row['sg3n_a03_11'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_11='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_11'] - 1);
}
else if ($itemId > 1709999 && $itemId < 1720000)
{
$number = $row['sg3n_a03_12'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_12='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_12'] - 1);
}
else if ($itemId > 1719999 && $itemId < 1730000)
{
$number = $row['sg3n_a03_13'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_13='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_13'] - 1);
}
else if ($itemId > 1729999 && $itemId < 1740000)
{
$number = $row['sg3n_a03_14'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_14='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_14'] - 1);
}
else if ($itemId > 1739999 && $itemId < 1750000)
{
$number = $row['sg3n_a03_15'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_15='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_15'] - 1);
}
else if ($itemId > 1749999 && $itemId < 1760000)
{
$number = $row['sg3n_a03_16'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_a03_16='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_a03_16'] - 1);
}
else if ($itemId > 1759999 && $itemId < 1770000)
{
$number = $row['sg3n_b01_1'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_1='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_1'] - 1);
}
else if ($itemId > 1769999 && $itemId < 1780000)
{
$number = $row['sg3n_b01_2'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_2='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_2'] - 1);
}
else if ($itemId > 1779999 && $itemId < 1790000)
{
$number = $row['sg3n_b01_3'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_3='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_3'] - 1);
}
else if ($itemId > 1789999 && $itemId < 1800000)
{
$number = $row['sg3n_b01_4'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_4='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_4'] - 1);
}
else if ($itemId > 1799999 && $itemId < 1810000)
{
$number = $row['sg3n_b01_5'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_5='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_5'] - 1);
}
else if ($itemId > 1809999 && $itemId < 1820000)
{
$number = $row['sg3n_b01_6'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_6='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_6'] - 1);
}
else if ($itemId > 1819999 && $itemId < 1830000)
{
$number = $row['sg3n_b01_7'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_7='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_7'] - 1);
}
else if ($itemId > 1829999 && $itemId < 1840000)
{
$number = $row['sg3n_b01_8'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_8='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_8'] - 1);
}
else if ($itemId > 1839999 && $itemId < 1850000)
{
$number = $row['sg3n_b01_9'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_9='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_9'] - 1);
}
else if ($itemId > 1849999 && $itemId < 1860000)
{
$number = $row['sg3n_b01_10'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_10='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_10'] - 1);
}
else if ($itemId > 1859999 && $itemId < 1870000)
{
$number = $row['sg3n_b01_11'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_11='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_11'] - 1);
}
else if ($itemId > 1869999 && $itemId < 1880000)
{
$number = $row['sg3n_b01_12'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_12='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_12'] - 1);
}
else if ($itemId > 1879999 && $itemId < 1890000)
{
$number = $row['sg3n_b01_13'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_13='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_13'] - 1);
}
else if ($itemId > 1889999 && $itemId < 1900000)
{
$number = $row['sg3n_b01_14'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_14='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_14'] - 1);
}
else if ($itemId > 1899999 && $itemId < 1910000)
{
$number = $row['sg3n_b01_15'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_15='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_15'] - 1);
}
else if ($itemId > 1909999 && $itemId < 1920000)
{
$number = $row['sg3n_b01_16'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b01_16='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b01_16'] - 1);
}
else if ($itemId > 1919999 && $itemId < 1930000)
{
$number = $row['sg3n_b02_1'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_1='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_1'] - 1);
}
else if ($itemId > 1929999 && $itemId < 1940000)
{
$number = $row['sg3n_b02_2'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_2='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_2'] - 1);
}
else if ($itemId > 1939999 && $itemId < 1950000)
{
$number = $row['sg3n_b02_3'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_3='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_3'] - 1);
}
else if ($itemId > 1949999 && $itemId < 1960000)
{
$number = $row['sg3n_b02_4'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_4='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_4'] - 1);
}
else if ($itemId > 1959999 && $itemId < 1970000)
{
$number = $row['sg3n_b02_5'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_5='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_5'] - 1);
}
else if ($itemId > 1969999 && $itemId < 1980000)
{
$number = $row['sg3n_b02_6'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_6='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_6'] - 1);
}
else if ($itemId > 1979999 && $itemId < 1990000)
{
$number = $row['sg3n_b02_7'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_7='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_7'] - 1);
}
else if ($itemId > 1989999 && $itemId < 2000000)
{
$number = $row['sg3n_b02_8'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_8='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_8'] - 1);
}
else if ($itemId > 1999999 && $itemId < 2010000)
{
$number = $row['sg3n_b02_9'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_9='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_9'] - 1);
}
else if ($itemId > 2009999 && $itemId < 2020000)
{
$number = $row['sg3n_b02_10'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_10='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_10'] - 1);
}
else if ($itemId > 2019999 && $itemId < 2030000)
{
$number = $row['sg3n_b02_11'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_11='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_11'] - 1);
}
else if ($itemId > 2029999 && $itemId < 2040000)
{
$number = $row['sg3n_b02_12'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_12='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_12'] - 1);
}
else if ($itemId > 2039999 && $itemId < 2050000)
{
$number = $row['sg3n_b02_13'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_13='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_13'] - 1);
}
else if ($itemId > 2049999 && $itemId < 2060000)
{
$number = $row['sg3n_b02_14'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_14='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_14'] - 1);
}
else if ($itemId > 2059999 && $itemId < 2070000)
{
$number = $row['sg3n_b02_15'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_15='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_15'] - 1);
}
else if ($itemId > 2069999 && $itemId < 2080000)
{
$number = $row['sg3n_b02_16'] - 1;
mysqli_query($con,"UPDATE players_equipment SET sg3n_b02_16='$number' WHERE playerID=$ID");
$value = $fast + 1 + ($row['sg3n_b02_16'] - 1);
}
if ($value == $config1_lasers_slot1)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot1='$config1_lasers_slot2' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot2='$config1_lasers_slot3' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot3='$config1_lasers_slot4' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot4='$config1_lasers_slot5' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot5='$config1_lasers_slot6' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot6='$config1_lasers_slot7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot7='$config1_lasers_slot8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot8='$config1_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot9='$config1_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot10='$config1_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot11='$config1_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot12='$config1_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot13='$config1_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$config1_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config1_lasers_slot2)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot2='$config1_lasers_slot3' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot3='$config1_lasers_slot4' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot4='$config1_lasers_slot5' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot5='$config1_lasers_slot6' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot6='$config1_lasers_slot7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot7='$config1_lasers_slot8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot8='$config1_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot9='$config1_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot10='$config1_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot11='$config1_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot12='$config1_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot13='$config1_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$config1_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config1_lasers_slot3)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot3='$config1_lasers_slot4' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot4='$config1_lasers_slot5' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot5='$config1_lasers_slot6' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot6='$config1_lasers_slot7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot7='$config1_lasers_slot8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot8='$config1_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot9='$config1_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot10='$config1_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot11='$config1_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot12='$config1_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot13='$config1_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$config1_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config1_lasers_slot4)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot4='$config1_lasers_slot5' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot5='$config1_lasers_slot6' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot6='$config1_lasers_slot7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot7='$config1_lasers_slot8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot8='$config1_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot9='$config1_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot10='$config1_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot11='$config1_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot12='$config1_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot13='$config1_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$config1_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config1_lasers_slot5)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot5='$config1_lasers_slot6' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot6='$config1_lasers_slot7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot7='$config1_lasers_slot8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot8='$config1_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot9='$config1_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot10='$config1_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot11='$config1_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot12='$config1_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot13='$config1_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$config1_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config1_lasers_slot6)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot6='$config1_lasers_slot7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot7='$config1_lasers_slot8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot8='$config1_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot9='$config1_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot10='$config1_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot11='$config1_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot12='$config1_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot13='$config1_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$config1_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config1_lasers_slot7)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot7='$config1_lasers_slot8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot8='$config1_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot9='$config1_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot10='$config1_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot11='$config1_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot12='$config1_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot13='$config1_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$config1_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config1_lasers_slot8)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot8='$config1_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot9='$config1_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot10='$config1_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot11='$config1_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot12='$config1_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot13='$config1_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$config1_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config1_lasers_slot9)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot9='$config1_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot10='$config1_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot11='$config1_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot12='$config1_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot13='$config1_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$config1_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config1_lasers_slot10)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot10='$config1_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot11='$config1_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot12='$config1_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot13='$config1_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$config1_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config1_lasers_slot11)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot11='$config1_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot12='$config1_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot13='$config1_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$config1_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config1_lasers_slot12)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot12='$config1_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot13='$config1_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$config1_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config1_lasers_slot13)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot13='$config1_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$config1_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config1_lasers_slot14)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot14='$config1_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config1_lasers_slot15)
{
mysqli_query($con,"UPDATE players_equipment SET config1_lasers_slot15=0 WHERE playerID=$ID");
}
if ($value == $config2_lasers_slot1)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot1='$config2_lasers_slot2' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot2='$config2_lasers_slot3' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot3='$config2_lasers_slot4' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot4='$config2_lasers_slot5' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot5='$config2_lasers_slot6' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot6='$config2_lasers_slot7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot7='$config2_lasers_slot8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot8='$config2_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot9='$config2_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot10='$config2_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot11='$config2_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot12='$config2_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot13='$config2_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$config2_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config2_lasers_slot2)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot2='$config2_lasers_slot3' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot3='$config2_lasers_slot4' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot4='$config2_lasers_slot5' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot5='$config2_lasers_slot6' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot6='$config2_lasers_slot7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot7='$config2_lasers_slot8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot8='$config2_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot9='$config2_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot10='$config2_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot11='$config2_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot12='$config2_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot13='$config2_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$config2_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config2_lasers_slot3)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot3='$config2_lasers_slot4' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot4='$config2_lasers_slot5' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot5='$config2_lasers_slot6' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot6='$config2_lasers_slot7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot7='$config2_lasers_slot8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot8='$config2_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot9='$config2_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot10='$config2_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot11='$config2_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot12='$config2_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot13='$config2_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$config2_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config2_lasers_slot4)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot4='$config2_lasers_slot5' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot5='$config2_lasers_slot6' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot6='$config2_lasers_slot7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot7='$config2_lasers_slot8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot8='$config2_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot9='$config2_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot10='$config2_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot11='$config2_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot12='$config2_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot13='$config2_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$config2_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config2_lasers_slot5)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot5='$config2_lasers_slot6' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot6='$config2_lasers_slot7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot7='$config2_lasers_slot8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot8='$config2_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot9='$config2_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot10='$config2_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot11='$config2_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot12='$config2_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot13='$config2_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$config2_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config2_lasers_slot6)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot6='$config2_lasers_slot7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot7='$config2_lasers_slot8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot8='$config2_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot9='$config2_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot10='$config2_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot11='$config2_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot12='$config2_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot13='$config2_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$config2_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config2_lasers_slot7)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot7='$config2_lasers_slot8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot8='$config2_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot9='$config2_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot10='$config2_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot11='$config2_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot12='$config2_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot13='$config2_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$config2_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config2_lasers_slot8)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot8='$config2_lasers_slot9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot9='$config2_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot10='$config2_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot11='$config2_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot12='$config2_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot13='$config2_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$config2_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config2_lasers_slot9)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot9='$config2_lasers_slot10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot10='$config2_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot11='$config2_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot12='$config2_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot13='$config2_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$config2_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config2_lasers_slot10)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot10='$config2_lasers_slot11' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot11='$config2_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot12='$config2_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot13='$config2_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$config2_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config2_lasers_slot11)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot11='$config2_lasers_slot12' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot12='$config2_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot13='$config2_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$config2_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config2_lasers_slot12)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot12='$config2_lasers_slot13' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot13='$config2_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$config2_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config2_lasers_slot13)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot13='$config2_lasers_slot14' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$config2_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config2_lasers_slot14)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot14='$config2_lasers_slot15' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15=0 WHERE playerID=$ID");
}
else if ($value == $config2_lasers_slot15)
{
mysqli_query($con,"UPDATE players_equipment SET config2_lasers_slot15=0 WHERE playerID=$ID");
}
$json2 = array('isError' => 0, 'data' => array());
$json2['data']['ret'] = 1;
$json2['data']['money']['uridium'] = $uridium;
$json2['data']['money']['credits'] = $credits;
$json2['data']['update']['deleted'] = array();
$json2['data']['update']['deleted'][0] = $itemId;
echo base64_encode(json_encode($json2));
}
else if ($action == "changeShipModel")
{
if ($row2['shipnotbase'] == 0)
{
mysqli_query($con,"UPDATE players SET changedconfiguration=1 WHERE playerID=$ID");
$post = $_POST["params"];
$params = base64_decode($post);
$result = json_decode($params);
$lootId = $result->lootId;
$json2 = array('isError' => 0, 'data' => array());
$json2['data']['ret'] = 1;
$json2['data']['money']['uridium'] = $uridium;
$json2['data']['money']['credits'] = $credits;
echo base64_encode(json_encode($json2));
if ($lootId == "ship_goliath")
{
mysqli_query($con,"UPDATE players SET shipId=10 WHERE playerID=$ID");
}
else if ($lootId == "ship_goliath_design_enforcer")
{
mysqli_query($con,"UPDATE players SET shipId=56 WHERE playerID=$ID");
}
else if ($lootId == "ship_goliath_design_bastion")
{
mysqli_query($con,"UPDATE players SET shipId=59 WHERE playerID=$ID");
}
else if ($lootId == "ship_goliath_design_veteran")
{
mysqli_query($con,"UPDATE players SET shipId=61 WHERE playerID=$ID");
}
else if ($lootId == "ship_goliath_design_exalted")
{
mysqli_query($con,"UPDATE players SET shipId=62 WHERE playerID=$ID");
}
else if ($lootId == "ship_goliath_design_solace")
{
mysqli_query($con,"UPDATE players SET shipId=63 WHERE playerID=$ID");
}
else if ($lootId == "ship_goliath_design_diminisher")
{
mysqli_query($con,"UPDATE players SET shipId=64 WHERE playerID=$ID");
}
else if ($lootId == "ship_goliath_design_spectrum")
{
mysqli_query($con,"UPDATE players SET shipId=65 WHERE playerID=$ID");
}
else if ($lootId == "ship_goliath_design_sentinel")
{
mysqli_query($con,"UPDATE players SET shipId=66 WHERE playerID=$ID");
}
else if ($lootId == "ship_goliath_design_venom")
{
mysqli_query($con,"UPDATE players SET shipId=67 WHERE playerID=$ID");
}
}
else
{
$json = '{"isError":1,"data":{"ret":0,"money":{"uridium":"650","credits":"4.735.316"}},"error":{"message":"N\u00e3o \u00e9 poss\u00edvel colocar o equipamento! Vai primeiro at\u00e9 \u00e0 tua esta\u00e7\u00e3o espacial."}}';
echo base64_encode($json);
}
}
else if ($action == "sellDrone")
{
$post = $_POST["params"];
$params = base64_decode($post);
$result = json_decode($params);
$itemId = $result->itemId;
$iris = $row['iris'] - 1;
$config1_vant10 = $row['config1_vant10'];
$config1_vant9 = $row['config1_vant9'];
$config1_vant8 = $row['config1_vant8'];
$config1_vant7 = $row['config1_vant7'];
$config1_vant6 = $row['config1_vant6'];
$config1_vant5 = $row['config1_vant5'];
$config1_vant4 = $row['config1_vant4'];
$config1_vant3 = $row['config1_vant3'];
$config1_vant2 = $row['config1_vant2'];
$config1_vant1 = $row['config1_vant1'];
if ($itemId == 500)
{
if ($row['config1_vant1'] == 25)
{
mysqli_query($con,"UPDATE players_equipment SET iris='$iris' WHERE playerID=$ID");
}
mysqli_query($con,"UPDATE players_equipment SET config1_vant9='$config1_vant10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant8='$config1_vant9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant7='$config1_vant8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant6='$config1_vant7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant5='$config1_vant6' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant4='$config1_vant5' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant3='$config1_vant4' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant2='$config1_vant3' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant1='$config1_vant2' WHERE playerID=$ID");
}
else if ($itemId == 501)
{
if ($row['config1_vant2'] == 25)
{
mysqli_query($con,"UPDATE players_equipment SET iris='$iris - 1' WHERE playerID=$ID");
}
mysqli_query($con,"UPDATE players_equipment SET config1_vant9='$config1_vant10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant8='$config1_vant9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant7='$config1_vant8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant6='$config1_vant7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant5='$config1_vant6' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant4='$config1_vant5' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant3='$config1_vant4' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant2='$config1_vant3' WHERE playerID=$ID");
}
else if ($itemId == 502)
{
if ($row['config1_vant3'] == 25)
{
mysqli_query($con,"UPDATE players_equipment SET iris='$iris - 1' WHERE playerID=$ID");
}
mysqli_query($con,"UPDATE players_equipment SET config1_vant9='$config1_vant10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant8='$config1_vant9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant7='$config1_vant8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant6='$config1_vant7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant5='$config1_vant6' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant4='$config1_vant5' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant3='$config1_vant4' WHERE playerID=$ID");
}
else if ($itemId == 503)
{
if ($row['config1_vant4'] == 25)
{
mysqli_query($con,"UPDATE players_equipment SET iris='$iris - 1' WHERE playerID=$ID");
}
mysqli_query($con,"UPDATE players_equipment SET config1_vant9='$config1_vant10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant8='$config1_vant9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant7='$config1_vant8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant6='$config1_vant7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant5='$config1_vant6' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant4='$config1_vant5' WHERE playerID=$ID");
}
else if ($itemId == 504)
{
if ($row['config1_vant5'] == 25)
{
mysqli_query($con,"UPDATE players_equipment SET iris='$iris - 1' WHERE playerID=$ID");
}
mysqli_query($con,"UPDATE players_equipment SET config1_vant9='$config1_vant10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant8='$config1_vant9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant7='$config1_vant8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant6='$config1_vant7' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant5='$config1_vant6' WHERE playerID=$ID");
}
else if ($itemId == 505)
{
if ($row['config1_vant6'] == 25)
{
mysqli_query($con,"UPDATE players_equipment SET iris='$iris - 1' WHERE playerID=$ID");
}
mysqli_query($con,"UPDATE players_equipment SET config1_vant9='$config1_vant10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant8='$config1_vant9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant7='$config1_vant8' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant6='$config1_vant7' WHERE playerID=$ID");
}
else if ($itemId == 506)
{
if ($row['config1_vant7'] == 25)
{
mysqli_query($con,"UPDATE players_equipment SET iris='$iris - 1' WHERE playerID=$ID");
}
mysqli_query($con,"UPDATE players_equipment SET config1_vant9='$config1_vant10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant8='$config1_vant9' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant7='$config1_vant8' WHERE playerID=$ID");
}
else if ($itemId == 507)
{
if ($row['config1_vant8'] == 25)
{
mysqli_query($con,"UPDATE players_equipment SET iris='$iris - 1' WHERE playerID=$ID");
}
mysqli_query($con,"UPDATE players_equipment SET config1_vant9='$config1_vant10' WHERE playerID=$ID");
mysqli_query($con,"UPDATE players_equipment SET config1_vant8='$config1_vant9' WHERE playerID=$ID");
}
else if ($itemId == 508)
{
if ($row['config1_vant9'] == 25)
{
mysqli_query($con,"UPDATE players_equipment SET iris='$iris - 1' WHERE playerID=$ID");
}
mysqli_query($con,"UPDATE players_equipment SET config1_vant9='$config1_vant10' WHERE playerID=$ID");
}
else if ($itemId == 509)
{
if ($row['config1_vant10'] == 25)
{
mysqli_query($con,"UPDATE players_equipment SET iris='$iris - 1' WHERE playerID=$ID");
}
mysqli_query($con,"UPDATE players_equipment SET config1_vant10=0 WHERE playerID=$ID");
}
$json2 = array('isError' => 0, 'data' => array());
$json2['data']['ret'] = array();
$json2['data']['money']['uridium'] = $uridium;
$json2['data']['money']['credits'] = $credits;
echo base64_encode(json_encode($json2));
}
mysqli_close($con);
?>