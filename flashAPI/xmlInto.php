<?php
require_once '../../KERNEL-DOCMS/Init.php';
//$inven = new Inventory();
$pram ='{
  "filecollection": {
    "location": [
      {
        "-path": "items/",
        "-id": "items"
      },
      {
        "-path": "items/ammunition/",
        "-id": "items_ammunition"
      },
      {
        "-path": "items/ammunition/firework/",
        "-id": "items_ammunition_firework"
      },
      {
        "-path": "items/ammunition/laser/",
        "-id": "items_ammunition_laser"
      },
      {
        "-path": "items/ammunition/mine/",
        "-id": "items_ammunition_mine"
      },
      {
        "-path": "items/ammunition/rocket/",
        "-id": "items_ammunition_rocket"
      },
      {
        "-path": "items/ammunition/rocketlauncher/",
        "-id": "items_ammunition_rocketlauncher"
      },
      {
        "-path": "items/ammunition/specialammo/",
        "-id": "items_ammunition_specialammo"
      },
      {
        "-path": "items/drone/",
        "-id": "items_drone"
      },
      {
        "-path": "items/drone/designs/",
        "-id": "items_drone_designs"
      },
      {
        "-path": "items/drone/formation/",
        "-id": "items_drone_formation"
      },
      {
        "-path": "items/equipment/",
        "-id": "items_equipment"
      },
      {
        "-path": "items/equipment/aiprotocol/",
        "-id": "items_equipment_aiprotocol"
      },
      {
        "-path": "items/equipment/booster/",
        "-id": "items_equipment_booster"
      },
      {
        "-path": "items/equipment/extra/",
        "-id": "items_equipment_extra"
      },
      {
        "-path": "items/equipment/extra/cpu/",
        "-id": "items_equipment_extra_cpu"
      },
      {
        "-path": "items/equipment/extra/repbot/",
        "-id": "items_equipment_extra_repbot"
      },
      {
        "-path": "items/equipment/generator/",
        "-id": "items_equipment_generator"
      },
      {
        "-path": "items/equipment/generator/shield/",
        "-id": "items_equipment_generator_shield"
      },
      {
        "-path": "items/equipment/generator/speed/",
        "-id": "items_equipment_generator_speed"
      },
      {
        "-path": "items/equipment/petgear/",
        "-id": "items_equipment_petgear"
      },
      {
        "-path": "items/equipment/weapon/",
        "-id": "items_equipment_weapon"
      },
      {
        "-path": "items/equipment/weapon/laser/",
        "-id": "items_equipment_weapon_laser"
      },
      {
        "-path": "items/equipment/weapon/rocketlauncher/",
        "-id": "items_equipment_weapon_rocketlauncher"
      },
      {
        "-path": "items/pet/",
        "-id": "items_pet"
      },
      {
        "-path": "items/resource/",
        "-id": "items_resource"
      },
      {
        "-path": "items/resource/blueprint/",
        "-id": "items_resource_blueprint"
      },
      {
        "-path": "items/resource/ore/",
        "-id": "items_resource_ore"
      },
      {
        "-path": "items/ship/",
        "-id": "items_ship"
      },
      {
        "-path": "items/ship/bigboy/",
        "-id": "items_ship_bigboy"
      },
      {
        "-path": "items/ship/bigboy/design/",
        "-id": "items_ship_bigboy_design"
      },
      {
        "-path": "items/ship/goliath/",
        "-id": "items_ship_goliath"
      },
      {
        "-path": "items/ship/goliath/design/",
        "-id": "items_ship_goliath_design"
      },
      {
        "-path": "items/ship/model/",
        "-id": "items_ship_model"
      },
      {
        "-path": "items/ship/vengeance/",
        "-id": "items_ship_vengeance"
      },
      {
        "-path": "items/ship/vengeance/design/",
        "-id": "items_ship_vengeance_design"
      }
    ],
    "file": [
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-1_63x63",
        "-location": "items_drone_designs",
        "-id": "havoc-1_63x63",
        "-hash": "9328098cf6f61f9a15c186cda93bb400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cbo-100_30x30",
        "-location": "items_ammunition_laser",
        "-id": "cbo-100_30x30",
        "-hash": "db93d3453bc121ed8ce8347aad962d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc_30x30",
        "-location": "items_drone_designs",
        "-id": "havoc_30x30",
        "-hash": "3d777293c382668bf651ce89c3523f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "plt-2026_100x100",
        "-location": "items_ammunition_rocket",
        "-id": "plt-2026_100x100",
        "-hash": "58fdf543bd4fbd7bfd7bcb011c9d1100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ammo_lcb-10_100x100",
        "-location": "items",
        "-id": "ammo_lcb-10_100x100",
        "-hash": "7241b4a25938dfc308c872ddc8376000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "dr-02_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "dr-02_30x30",
        "-hash": "4ff7b62c45133a5a0afa1c3fa14a7100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-5_top",
        "-location": "items_drone_designs",
        "-id": "havoc-5_top",
        "-hash": "eefe025cd0af4d1d82f0b324d787200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-2010_100x100",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-2010_100x100",
        "-hash": "6d7f8f5feb80ad35a1f47b76c0216700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-2010_30x30",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-2010_30x30",
        "-hash": "205d6901282719db5574e251935cf800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "aim-01_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "aim-01_100x100",
        "-hash": "9b5cb30e69d3871b077b2c9a16138600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "phoenix_100x100",
        "-location": "items_ship",
        "-id": "phoenix_100x100",
        "-hash": "c8fdab3ed091595e5a4d122ef33eee00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "shd-b01_100x100",
        "-location": "items_equipment_booster",
        "-id": "shd-b01_100x100",
        "-hash": "26828274f23f698b9b5fc8b882f48300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "resource-deal-bk-102_100x100",
        "-location": "items",
        "-id": "resource-deal-bk-102_100x100",
        "-hash": "b1766983bc556105d36c282cdfe77a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "venom_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "venom_63x63",
        "-hash": "3c4547b6d7a21fabdc28c1930521c100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mamba_100x100",
        "-location": "items_ship_bigboy_design",
        "-id": "mamba_100x100",
        "-hash": "1845671280176e9e3002aae4f38a0c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-al1_100x100",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-al1_100x100",
        "-hash": "e2fe99aff30dc11255e7398acc5dcd00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_formation_f-12-ba_100x100",
        "-location": "items",
        "-id": "drone_formation_f-12-ba_100x100",
        "-hash": "2f1585c4255fada896ece0bf0e314700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "r-310_63x63",
        "-location": "items_ammunition_rocket",
        "-id": "r-310_63x63",
        "-hash": "bd4b785081ad98c8a38efd38c1443b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-3_63x63",
        "-location": "items_drone",
        "-id": "apis-3_63x63",
        "-hash": "2357d5c44516a90c65f7e6f849c09b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_leonov_100x100",
        "-location": "items",
        "-id": "ship_leonov_100x100",
        "-hash": "172d74c4abfc1b827480d2dc8231a300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "icon_elite_12x7",
        "-location": "items",
        "-id": "icon_elite_12x7",
        "-hash": "c523d96d2d16699f5651528ac3b7d400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lightning_100x100",
        "-location": "items_ship_vengeance_design",
        "-id": "lightning_100x100",
        "-hash": "a8f63bb998c50d36cfa4c4e03b1c4d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-sm1_63x63",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-sm1_63x63",
        "-hash": "e03deebe495a15d898e166dee04a0d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "shd-b02_30x30",
        "-location": "items_equipment_booster",
        "-id": "shd-b02_30x30",
        "-hash": "22486a4c1c487dc763a0e534e5c08300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "solace_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "solace_100x100",
        "-hash": "1f2e50beede5485d5852a2fb64d3df00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "generator_g3n-3210_100x100",
        "-location": "items",
        "-id": "generator_g3n-3210_100x100",
        "-hash": "6878cd26b75211cf0bbb0c0465ac9d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "dcr-250_100x100",
        "-location": "items_ammunition_specialammo",
        "-id": "dcr-250_100x100",
        "-hash": "afa8d1471065deb26672ce7c88c9ab00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rd-x_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "rd-x_100x100",
        "-hash": "597c2f3075c6a0453bae7dd1902dda00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-1_63x63",
        "-location": "items_drone",
        "-id": "iris-1_63x63",
        "-hash": "66f6d38952f8fb800abbd5e5d96f7700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lf-4_100x100",
        "-location": "items_equipment_weapon_laser",
        "-id": "lf-4_100x100",
        "-hash": "eb976bb32197c21a8b6be56eb65e1d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-3_30x30",
        "-location": "items_drone_designs",
        "-id": "havoc-3_30x30",
        "-hash": "1e46e2cef4d5c5d3800098f043877e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_formation_f-10-cr_100x100",
        "-location": "items",
        "-id": "drone_formation_f-10-cr_100x100",
        "-hash": "f92c0bec627cfffc18d5c229fc65500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "plt-2021_100x100",
        "-location": "items_ammunition_rocket",
        "-id": "plt-2021_100x100",
        "-hash": "57dc1c46160862d3e6e73e451764ab00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "eco-10_100x100",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "eco-10_100x100",
        "-hash": "64ae584f553ab15e1dcacd7a7a595e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "fwx-s_63x63",
        "-location": "items_ammunition_firework",
        "-id": "fwx-s_63x63",
        "-hash": "a45fdf5e4e251f9de4e49d2b4617ce00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_d-av-01_100x100",
        "-location": "items",
        "-id": "design_d-av-01_100x100",
        "-hash": "37f86e60f270682f6fd338f29e017000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_yamato_100x100",
        "-location": "items",
        "-id": "ship_yamato_100x100",
        "-hash": "38313bf68823727d204e898fa676e000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-al1_63x63",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-al1_63x63",
        "-hash": "872b980001c1dedc590c9143dcf2f000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "defcom-default_top",
        "-location": "items_ship_model",
        "-id": "defcom-default_top",
        "-hash": "52aaa11eae4b9a0ca19bfa1601a44200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-1_top",
        "-location": "items_drone_designs",
        "-id": "havoc-1_top",
        "-hash": "ebc18fd76fd5733d370a8cd5cbfb0200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_sd-all_100x100",
        "-location": "items",
        "-id": "design_sd-all_100x100",
        "-hash": "292ad26a7e57434b03d20e4b6f2e0700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "saturn_30x30",
        "-location": "items_ship",
        "-id": "saturn_30x30",
        "-hash": "9fb81a05a011a164cd6a52b53defab00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sar-02_100x100",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "sar-02_100x100",
        "-hash": "e71bbf67775146cacab9fd82bb4e5e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "alb-x_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "alb-x_30x30",
        "-hash": "b958f5e2676c44aef2a6d784ba15ef00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sg3n-b02_63x63",
        "-location": "items_equipment_generator_shield",
        "-id": "sg3n-b02_63x63",
        "-hash": "b718b6cf1c30cde1d53056c8ad186c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "eco-10_100x100",
        "-location": "items_ammunition_rocket",
        "-id": "eco-10_100x100",
        "-hash": "f2728f6bf3b750a5b68d7adf3a898200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-el1_100x100",
        "-location": "items_equipment_petgear",
        "-id": "g-el1_100x100",
        "-hash": "fa541d3a91aabc670fb9b48223a3c000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "spectrum_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "spectrum_63x63",
        "-hash": "dd45110cd14d657cee0ba24b27eae00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_goliath_design_centaur_30x30",
        "-location": "items",
        "-id": "ship_goliath_design_centaur_30x30",
        "-hash": "ccf58011657784838ce3f78297e12200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "vengeance_100x100",
        "-location": "items_ship",
        "-id": "vengeance_100x100",
        "-hash": "c54de458c43424b804b155068265600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "xp-b01_30x30",
        "-location": "items_equipment_booster",
        "-id": "xp-b01_30x30",
        "-hash": "7c3a42aac82c076cf6cddfaca9613b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "palladium_63x63",
        "-location": "items_resource_ore",
        "-id": "palladium_63x63",
        "-hash": "1265217356d6dda552d24354897afc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "xp-b02_63x63",
        "-location": "items_equipment_booster",
        "-id": "xp-b02_63x63",
        "-hash": "8b435dd5e42858ff2945f2ca2a205300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-r1_63x63",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-r1_63x63",
        "-hash": "f3a9e70662dea822ae60c589629d8400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mcb-50_63x63",
        "-location": "items_ammunition_laser",
        "-id": "mcb-50_63x63",
        "-hash": "386dd5328b039cc7594c36f8875af400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ammo_rsb-75_100x100",
        "-location": "items",
        "-id": "ammo_rsb-75_100x100",
        "-hash": "48f8b984ca0a6fe6294c143a17b2ca00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lf-1_63x63",
        "-location": "items_equipment_weapon_laser",
        "-id": "lf-1_63x63",
        "-hash": "21840bc7163a5ba6b23a843b00b34500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "plt-2026_30x30",
        "-location": "items_ammunition_rocket",
        "-id": "plt-2026_30x30",
        "-hash": "eb7d727d0e8d7c05ad9121573a6b200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "spearhead-vru_top",
        "-location": "items_ship",
        "-id": "spearhead-vru_top",
        "-hash": "72a14351239d131a9a41ecfa7477f200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ammo_ucb-100_100x100",
        "-location": "items",
        "-id": "ammo_ucb-100_100x100",
        "-hash": "6749034315a317f9cae2e58124afe600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_dr-01_100x100",
        "-location": "items",
        "-id": "cpu_dr-01_100x100",
        "-hash": "54ea6eb6a3ccb5d88041bd799443cb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cl04k-m_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "cl04k-m_63x63",
        "-hash": "2389a6be163abc512ad8845f53494400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_sar-02_100x100",
        "-location": "items",
        "-id": "rocket_sar-02_100x100",
        "-hash": "e71bbf67775146cacab9fd82bb4e5e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "palladium_30x30",
        "-location": "items_resource_ore",
        "-id": "palladium_30x30",
        "-hash": "739d31694cf4adb3efc93ff72d516d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "corsair_top",
        "-location": "items_ship_vengeance_design",
        "-id": "corsair_top",
        "-hash": "8a276cc4e482e42c36e7b0ac101de200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-part_63x63",
        "-location": "items_resource_blueprint",
        "-id": "zeus-part_63x63",
        "-hash": "7e7707b4db2fa9350102f6ea07bd8f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-12_top",
        "-location": "items_pet",
        "-id": "pet10-12_top",
        "-hash": "8e17281870f0063a0b88200d3625eb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sl-01_100x100",
        "-location": "items_ammunition_mine",
        "-id": "sl-01_100x100",
        "-hash": "8705e1b6cb2aecd1038773cbae391200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_smb-01_100x100",
        "-location": "items",
        "-id": "cpu_smb-01_100x100",
        "-hash": "17047edb64b4e9465cf62d689a737400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "gif",
        "-name": "design_d-all_100x100",
        "-location": "items",
        "-id": "design_d-all_100x100",
        "-hash": "85da4c35a0b4db2ef388e1e9aac4b600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "robot_rep-4_100x100",
        "-location": "items",
        "-id": "robot_rep-4_100x100",
        "-hash": "f319657ad942b61c8863b6492de48e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booty-key-red_30x30",
        "-location": "items_resource",
        "-id": "booty-key-red_30x30",
        "-hash": "c83bfff4da634da06045fa7e201bae00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "bastion_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "bastion_100x100",
        "-hash": "c7844e1cfd08b5709cf816acc4a00000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rok-t01_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "rok-t01_63x63",
        "-hash": "6ecb7fdfb1593bb65b43b39476aae200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-al1_100x100",
        "-location": "items_equipment_petgear",
        "-id": "g-al1_100x100",
        "-hash": "3a6fe2c1d7e793fec4d697b90721f700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-0_30x30",
        "-location": "items_drone",
        "-id": "flax-0_30x30",
        "-hash": "642f6be370832ed3b213cb8420475c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_xp-b01_100x100",
        "-location": "items",
        "-id": "booster_xp-b01_100x100",
        "-hash": "73a676e5f07c511c1cac6eb8cab1d700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-0_100x100",
        "-location": "items_drone",
        "-id": "iris-0_100x100",
        "-hash": "afba9239e233f506eff21528ab4e8f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "icon_design_28x7",
        "-location": "items",
        "-id": "icon_design_28x7",
        "-hash": "e3a25f01cba8fa8d8e02f33ae3db2800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "spectrum_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "spectrum_100x100",
        "-hash": "35f4bb3311c6b4aa47a16fd180008900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-2_30x30",
        "-location": "items_drone",
        "-id": "zeus-2_30x30",
        "-hash": "91e6fb4a78451d59f6ccb587b351500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_spearhead-mmo_100x100",
        "-location": "items",
        "-id": "ship_spearhead-mmo_100x100",
        "-hash": "12de6f44a46e0c64accde5398ba25f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hercules_30x30",
        "-location": "items_drone_designs",
        "-id": "hercules_30x30",
        "-hash": "81fcb28481530aea405e79da7f959000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sapphire_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "sapphire_30x30",
        "-hash": "140905e7ecc7ee7e6ed1df1c058faa00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mp-1_63x63",
        "-location": "items_equipment_weapon_laser",
        "-id": "mp-1_63x63",
        "-hash": "52eb84ef703379bc9cc9268f59ff5a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sreg-b01_100x100",
        "-location": "items_equipment_booster",
        "-id": "sreg-b01_100x100",
        "-hash": "3c700738b5565b7352285dd259c5c200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-5_63x63",
        "-location": "items_drone",
        "-id": "apis-5_63x63",
        "-hash": "691122b1882ae1f6eeef9ddbc166c200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "empm-01_30x30",
        "-location": "items_ammunition_mine",
        "-id": "empm-01_30x30",
        "-hash": "b5bbdd393160dea5072c9c29925fb600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-0_top",
        "-location": "items_drone",
        "-id": "apis-0_top",
        "-hash": "f3bfce2ad389d3f2439b0619f9884800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nostromo_top",
        "-location": "items_ship",
        "-id": "nostromo_top",
        "-hash": "ff51eab9cb12377314f48ca78cffc500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sentinel_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "sentinel_30x30",
        "-hash": "aebc8c1ee1d83f778a61e7c75f258800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-2_63x63",
        "-location": "items_drone_designs",
        "-id": "havoc-2_63x63",
        "-hash": "6e5545393ae996b3d88176e082881f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "goal_top",
        "-location": "items_ship_goliath_design",
        "-id": "goal_top",
        "-hash": "95cc2e4d7028f5edd9d426420315ea00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_g-tra1_100x100",
        "-location": "items",
        "-id": "pet_protocol_g-tra1_100x100",
        "-hash": "50e590b94a922247a8ab07f0dc851c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nc-awb-x_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "nc-awb-x_63x63",
        "-hash": "ec1c7aae930d30936fdeb954b1bc2000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-3210_100x100",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-3210_100x100",
        "-hash": "5d50a4d1ad1ff13a891ee79b15b31100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-01-tu_63x63",
        "-location": "items_drone_formation",
        "-id": "f-01-tu_63x63",
        "-hash": "40039420f0bf49d22a9026845750bc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "slm-01_63x63",
        "-location": "items_ammunition_mine",
        "-id": "slm-01_63x63",
        "-hash": "7712a19b219d98191682ed7247715600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-1_63x63",
        "-location": "items_drone",
        "-id": "flax-1_63x63",
        "-hash": "285ba0eda8d9bd9700569b41c1353800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hon-b01_30x30",
        "-location": "items_equipment_booster",
        "-id": "hon-b01_30x30",
        "-hash": "6051aa706c4b66386bac6575efd32700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-sm1_30x30",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-sm1_30x30",
        "-hash": "fed796ecf85c4e4650c495579a0b3000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-0_63x63",
        "-location": "items_drone_designs",
        "-id": "havoc-0_63x63",
        "-hash": "4cc2e5f6780d0a710d0c537d29551500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_nostromo_100x100",
        "-location": "items",
        "-id": "ship_nostromo_100x100",
        "-hash": "6a6459196c67064af8acc4e155fa4700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_sle-03_100x100",
        "-location": "items",
        "-id": "cpu_sle-03_100x100",
        "-hash": "7dba4b4ec08654033b2fa98f5de56000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nc-rrb-x_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "nc-rrb-x_30x30",
        "-hash": "b476120c9737e4789f1da17faaecf600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-4_63x63",
        "-location": "items_drone",
        "-id": "flax-4_63x63",
        "-hash": "4439186801e3196bb7c0fc411a7000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_d-re-01_100x100",
        "-location": "items",
        "-id": "design_d-re-01_100x100",
        "-hash": "423d589e609d7a3d2396910e55348b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-0_top",
        "-location": "items_drone_designs",
        "-id": "havoc-0_top",
        "-hash": "f3bfce2ad389d3f2439b0619f9884800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sar-01_100x100",
        "-location": "items",
        "-id": "sar-01_100x100",
        "-hash": "8a240cd56aafb6e2f731693a9eda5c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-0_63x63",
        "-location": "items_drone",
        "-id": "iris-0_63x63",
        "-hash": "9e918d6b19b7d5ead16addad0cc35200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mine_ddm-01_100x100",
        "-location": "items",
        "-id": "mine_ddm-01_100x100",
        "-hash": "730ef0a3b8c50efdac01d77cc5c93700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_formation_f-02-ar_100x100",
        "-location": "items",
        "-id": "drone_formation_f-02-ar_100x100",
        "-hash": "5a93c4393ab8d47e51d8be0b8ef69300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-4_100x100",
        "-location": "items_drone",
        "-id": "flax-4_100x100",
        "-hash": "dd309b7a069bfa3b796a1356e602b200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sreg-b02_100x100",
        "-location": "items_equipment_booster",
        "-id": "sreg-b02_100x100",
        "-hash": "2c18bcff3eee30f4c973116ab316f800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "yamato-default_top",
        "-location": "items_ship_model",
        "-id": "yamato-default_top",
        "-hash": "d12641e622d8655aae4a22f816da8f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "promerium_63x63",
        "-location": "items_resource_ore",
        "-id": "promerium_63x63",
        "-hash": "b244214822eee368245b2940e1b5300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-3_top",
        "-location": "items_drone",
        "-id": "iris-3_top",
        "-hash": "873f7968e96ba2b2aa6a867938171b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "bdr-1211_63x63",
        "-location": "items_ammunition_rocket",
        "-id": "bdr-1211_63x63",
        "-hash": "469999ff72fe170e7341636c620b0600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-tra1_100x100",
        "-location": "items_equipment_petgear",
        "-id": "g-tra1_100x100",
        "-hash": "971fa24c7f7da534d8280f558c08f600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sle-01_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "sle-01_63x63",
        "-hash": "4c8b2134dc2163588182776c483d8a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "yamato_63x63",
        "-location": "items_ship",
        "-id": "yamato_63x63",
        "-hash": "a22af71d3f9f6b3565475c005300ac00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sreg-b01_30x30",
        "-location": "items_equipment_booster",
        "-id": "sreg-b01_30x30",
        "-hash": "a0407f48f4a3b0d21cef8c0f02a54e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rsb-75_63x63",
        "-location": "items_ammunition_laser",
        "-id": "rsb-75_63x63",
        "-hash": "50206543ccd2bc1002d106f117756600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-5_30x30",
        "-location": "items_drone",
        "-id": "zeus-5_30x30",
        "-hash": "4ee8791ebb639511adef50aaf9c5b600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-0_100x100",
        "-location": "items_drone",
        "-id": "zeus-0_100x100",
        "-hash": "811fd8fc71c0e6aa74b129d7fa6d2200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-15_top",
        "-location": "items_pet",
        "-id": "pet10-15_top",
        "-hash": "ec53e1b9c8177ea21cf9f70656854100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lcb-10_30x30",
        "-location": "items_ammunition_laser",
        "-id": "lcb-10_30x30",
        "-hash": "dae4f308e45cc4a93ac36451afabc700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "venom_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "venom_100x100",
        "-hash": "2d89b696366df9a1559dc8d702d08f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lgf_100x100",
        "-location": "items_resource",
        "-id": "lgf_100x100",
        "-hash": "69a613d0e4cd72e90afd6cdc68fcfb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sab-50_100x100",
        "-location": "items_ammunition_laser",
        "-id": "sab-50_100x100",
        "-hash": "8c128831210a77fdebfc8085f0de2700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_citadel-eic_100x100",
        "-location": "items",
        "-id": "ship_citadel-eic_100x100",
        "-hash": "539e9d9f2f14266e5d05519cb4c35100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-12-ba_63x63",
        "-location": "items_drone_formation",
        "-id": "f-12-ba_63x63",
        "-hash": "327081fa1cdb923ad20ac36d43b9d700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ish-01_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "ish-01_30x30",
        "-hash": "b5303220b6ebbf91ae9f1203d99b1900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-ex1_30x30",
        "-location": "items_equipment_petgear",
        "-id": "g-ex1_30x30",
        "-hash": "1b2a1bf981d2718438c924a17081de00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "plt-2021_63x63",
        "-location": "items_ammunition_rocket",
        "-id": "plt-2021_63x63",
        "-hash": "4913b7d593e9d812b05c4f3eaaf40100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "referee_top",
        "-location": "items_ship_goliath_design",
        "-id": "referee_top",
        "-hash": "5f60a1ad5ecaf8246c0873ae10838d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-1_30x30",
        "-location": "items_drone",
        "-id": "flax-1_30x30",
        "-hash": "341f84cf5421047ef7f7f6dd8221ac00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "saturn_top",
        "-location": "items_ship",
        "-id": "saturn_top",
        "-hash": "74b03339d4a0466c3c0c791c24146600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_pack-trinity-mmo_100x100",
        "-location": "items",
        "-id": "ship_pack-trinity-mmo_100x100",
        "-hash": "58552692b26643098082e055975100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "xp-b02_30x30",
        "-location": "items_equipment_booster",
        "-id": "xp-b02_30x30",
        "-hash": "2befa14e50165953e40edf7a2d3faf00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-05-pi_63x63",
        "-location": "items_drone_formation",
        "-id": "f-05-pi_63x63",
        "-hash": "20452d49362eb16ca7165110108eea00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cl04k-m_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "cl04k-m_30x30",
        "-hash": "69d7b48403e27694ba1e567c65ede300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hst-1_63x63",
        "-location": "items_equipment_weapon_rocketlauncher",
        "-id": "hst-1_63x63",
        "-hash": "7e61b1762e2b96671390e0ff30524700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3x-crgo-x_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "g3x-crgo-x_63x63",
        "-hash": "472cdbd24653ffd02cfa9d78f109c700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "centaur_top",
        "-location": "items_ship_goliath_design",
        "-id": "centaur_top",
        "-hash": "10e97f1d09ae38fb6cd4761239df2700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_formation_f-11-he_100x100",
        "-location": "items",
        "-id": "drone_formation_f-11-he_100x100",
        "-hash": "d2e530e6ce2a0e187c6ecb0fd7148100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sle-01_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "sle-01_100x100",
        "-hash": "99ea1c9b0f2945903e1940e185656000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cl04k-xs_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "cl04k-xs_30x30",
        "-hash": "ff4a801692d7e78b75491daa5af27300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "bigboy_63x63",
        "-location": "items_ship",
        "-id": "bigboy_63x63",
        "-hash": "84f9930b0a6dcc761e8181809002cc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "eco-10_63x63",
        "-location": "items_ammunition_rocket",
        "-id": "eco-10_63x63",
        "-hash": "12045ffd885f2549b7898a8b541e2700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10_63x63",
        "-location": "items_pet",
        "-id": "pet10_63x63",
        "-hash": "914f7da0e50393dd5acf247001f22500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booty-key_30x30",
        "-location": "items_resource",
        "-id": "booty-key_30x30",
        "-hash": "ffbc72514edc29adbcb69b1da2c23a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-4_top",
        "-location": "items_drone_designs",
        "-id": "havoc-4_top",
        "-hash": "2c343d1411545d71f2ac5d473be80f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10_100x100",
        "-location": "items_pet",
        "-id": "pet10_100x100",
        "-hash": "e8bbd8e957933caf10200c8ae422b400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-2_30x30",
        "-location": "items_drone",
        "-id": "iris-2_30x30",
        "-hash": "b10d193b55f89656936668c1bc559900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-03-la_63x63",
        "-location": "items_drone_formation",
        "-id": "f-03-la_63x63",
        "-hash": "d9f4cea713c8fc5adf8a05edf1be5000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hmd-07_100x100",
        "-location": "items_equipment_extra",
        "-id": "hmd-07_100x100",
        "-hash": "13dee6dcb1f39fc812db55e2db0ec800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_hon-b01_100x100",
        "-location": "items",
        "-id": "booster_hon-b01_100x100",
        "-hash": "afec998665bc16f87d4974d82dc82400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rllb-x_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "rllb-x_100x100",
        "-hash": "c02ef79c7fb09afb18efa7bacb68e300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_aegis-eic_100x100",
        "-location": "items",
        "-id": "ship_aegis-eic_100x100",
        "-hash": "b312183f3ac97b0e0caada25ef7c800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "aegis-mmo_63x63",
        "-location": "items_ship",
        "-id": "aegis-mmo_63x63",
        "-hash": "e22393125d160cd92dc6548106523c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nc-rrb-x_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "nc-rrb-x_63x63",
        "-hash": "a08b6fd485a562a84505c37f4b226200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rb-02_100x100",
        "-location": "items_ammunition_mine",
        "-id": "rb-02_100x100",
        "-hash": "10afe33dcf289a7f8ed03eda793aa200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "shg-01_100x100",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "shg-01_100x100",
        "-hash": "9706f47d9c8c2dd290a869fdb7b7eb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-5_100x100",
        "-location": "items_drone",
        "-id": "zeus-5_100x100",
        "-hash": "98e8d2cdceb6412e5b9c69ebb7444a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-02-ar_63x63",
        "-location": "items_drone_formation",
        "-id": "f-02-ar_63x63",
        "-hash": "46d6a4e6f63e31a827ba49311c0d2000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "bigboy_100x100",
        "-location": "items_ship",
        "-id": "bigboy_100x100",
        "-hash": "47451983296c2b3216aa523e944ced00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "res-b01_30x30",
        "-location": "items_equipment_booster",
        "-id": "res-b01_30x30",
        "-hash": "64c6ae622588f1f1d88ee18099faae00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-5_63x63",
        "-location": "items_drone",
        "-id": "iris-5_63x63",
        "-hash": "cd363e0f68297796aeb1a1dc8725500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-11-he_100x100",
        "-location": "items_drone_formation",
        "-id": "f-11-he_100x100",
        "-hash": "d2e530e6ce2a0e187c6ecb0fd7148100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rok-t01_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "rok-t01_30x30",
        "-hash": "9670fe405d1999f3e075d4e065cd8700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-03-la_100x100",
        "-location": "items_drone_formation",
        "-id": "f-03-la_100x100",
        "-hash": "a4fcab3976f58229ef5b722a22dfeb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "generator_sg3n-a01_100x100",
        "-location": "items",
        "-id": "generator_sg3n-a01_100x100",
        "-hash": "19228ba81b387583a63ed8c9a9465400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ajp-01_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "ajp-01_30x30",
        "-hash": "513cb86be4b07adda776f39f45147800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sg3n-a02_63x63",
        "-location": "items_equipment_generator_shield",
        "-id": "sg3n-a02_63x63",
        "-hash": "311654cd6187f4d509c3a0322ea09500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "xp-b01_100x100",
        "-location": "items_equipment_booster",
        "-id": "xp-b01_100x100",
        "-hash": "604d97b01116e0e162f45ca9d2da7c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-2_top",
        "-location": "items_drone",
        "-id": "flax-2_top",
        "-hash": "4f590ee2ee587d4df9e41729f63f0900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sg3n-a01_30x30",
        "-location": "items_equipment_generator_shield",
        "-id": "sg3n-a01_30x30",
        "-hash": "8c0b74bf0cc43c58fb39e6d48c495000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_g3x-amry-l_100x100",
        "-location": "items",
        "-id": "cpu_g3x-amry-l_100x100",
        "-hash": "f81bfb978d2b0c6eeadd2fbbdb033600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sl-01_63x63",
        "-location": "items_ammunition_mine",
        "-id": "sl-01_63x63",
        "-hash": "1b601c1d7b1fc78ef8c334cbb7b5f500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "weapon_hst2_100x100",
        "-location": "items",
        "-id": "weapon_hst2_100x100",
        "-hash": "9e2396f334d914c89f3f5371c22ce300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hst-2_30x30",
        "-location": "items_equipment_weapon_rocketlauncher",
        "-id": "hst-2_30x30",
        "-hash": "b50011779dba406b663876c313436c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "aegis-eic_top",
        "-location": "items_ship",
        "-id": "aegis-eic_top",
        "-hash": "73a4596f78155b457fc9ac150e1c3700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hon-b02_30x30",
        "-location": "items_equipment_booster",
        "-id": "hon-b02_30x30",
        "-hash": "1def246555fcbeab09549afd94807600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nc-awb-x_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "nc-awb-x_30x30",
        "-hash": "ab35aad749b236d4975a977110ff1400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-b01_100x100",
        "-location": "items_equipment_booster",
        "-id": "rep-b01_100x100",
        "-hash": "7653d8de407d2c4adbb74d7e99894b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rb-e02_100x100",
        "-location": "items_ammunition_mine",
        "-id": "rb-e02_100x100",
        "-hash": "975eabb65ef0c789fc3fcdf16c5c5e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_rb-x_100x100",
        "-location": "items",
        "-id": "cpu_rb-x_100x100",
        "-hash": "a8507e2d497fda2462ccc64316542000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_g-pd1_100x100",
        "-location": "items",
        "-id": "pet_protocol_g-pd1_100x100",
        "-hash": "9c8ce79b8f0efd3ae4ab8b9e905db300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3x-amry-s_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "g3x-amry-s_30x30",
        "-hash": "5b5088d2c981e0cd73df005aca6ed700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_ish-01_100x100",
        "-location": "items",
        "-id": "cpu_ish-01_100x100",
        "-hash": "9689d1a02ee2e740590ad744904b8000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "corsair_100x100",
        "-location": "items_ship_vengeance_design",
        "-id": "corsair_100x100",
        "-hash": "fdb5d76fec778ab933511af5c45a8e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-rl1_30x30",
        "-location": "items_equipment_petgear",
        "-id": "g-rl1_30x30",
        "-hash": "8251de16a588598e3c175e23139d2f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-6900_100x100",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-6900_100x100",
        "-hash": "ebd1850eecd35679b614d38a62786f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "saturn_100x100",
        "-location": "items_ship",
        "-id": "saturn_100x100",
        "-hash": "37621b30d34eb7bd11a6112f967ad600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "exalted_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "exalted_63x63",
        "-hash": "ac8e12195d070eed94ce15b3523ba500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "emp-01_30x30",
        "-location": "items_ammunition_specialammo",
        "-id": "emp-01_30x30",
        "-hash": "738e8f623811f85c1235b1c8c56c1100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "crimson_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "crimson_30x30",
        "-hash": "12f6523bf590a66e9d6ca1348433d900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "terbium_63x63",
        "-location": "items_resource_ore",
        "-id": "terbium_63x63",
        "-hash": "6c2fb01e0f3e51a3ed2965d63a707900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "independence_top",
        "-location": "items_ship_goliath_design",
        "-id": "independence_top",
        "-hash": "2da9e0c7f20f73fc1264316bcc7e6b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lf-3_30x30",
        "-location": "items_equipment_weapon_laser",
        "-id": "lf-3_30x30",
        "-hash": "dc3f2118a4fae31b28744f5f69b53e00",
        "-debugView": "false"
      },
	     {
        "-version": "1",
        "-type": "png",
        "-name": "lf-5_30x30",
        "-location": "items_equipment_weapon_laser",
        "-id": "lf-5_30x30",
        "-hash": "dc3f2118a4fae31b28744f5f69b53e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-14_top",
        "-location": "items_pet",
        "-id": "pet10-14_top",
        "-hash": "179a5e30a4a8324ac3ff0d91ab204200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_rep-b02_100x100",
        "-location": "items",
        "-id": "booster_rep-b02_100x100",
        "-hash": "1d5c97b1b866d233d0e064cb65364b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-6900_63x63",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-6900_63x63",
        "-hash": "d3511da1ba864dbfb783a1a694842100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "goal_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "goal_63x63",
        "-hash": "17f9935c499ab4e909f7ca10a2d1e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "res-b01_63x63",
        "-location": "items_equipment_booster",
        "-id": "res-b01_63x63",
        "-hash": "f70b3a463a9cf513bbf95c8f7da9dd00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mcb-50_30x30",
        "-location": "items_ammunition_laser",
        "-id": "mcb-50_30x30",
        "-hash": "e6c8656cf822817bf38242c131a9c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "eco-10_63x63",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "eco-10_63x63",
        "-hash": "12045ffd885f2549b7898a8b541e2700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_hp-b02_100x100",
        "-location": "items",
        "-id": "booster_hp-b02_100x100",
        "-hash": "8742e9f899c493713e40d94a7f59e300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-ar1_30x30",
        "-location": "items_equipment_petgear",
        "-id": "g-ar1_30x30",
        "-hash": "56078f012cb43df403c4781f8ddfb000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_d-ex-01_100x100",
        "-location": "items",
        "-id": "design_d-ex-01_100x100",
        "-hash": "8fd1fc0f89195efbde9bca22c21e3600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_g3x-amry-m_100x100",
        "-location": "items",
        "-id": "cpu_g3x-amry-m_100x100",
        "-hash": "6cf64d0c65a33d16ad6c56d39ccdf400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "shg-01_30x30",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "shg-01_30x30",
        "-hash": "e504895a8f3a276638388748ebe97900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-06-da_30x30",
        "-location": "items_drone_formation",
        "-id": "f-06-da_30x30",
        "-hash": "f03ffc87eb8c8d9f5c2fbcbf8f35a300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "alb-x_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "alb-x_100x100",
        "-hash": "21e336721d12e791fb7e7c6414d86300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "saturn_63x63",
        "-location": "items_ship",
        "-id": "saturn_63x63",
        "-hash": "54439862c283606a1ec37aa2c7eeca00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lf-2_100x100",
        "-location": "items_equipment_weapon_laser",
        "-id": "lf-2_100x100",
        "-hash": "803197c677b55ef80655269c1efc0100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "res-b01_100x100",
        "-location": "items_equipment_booster",
        "-id": "res-b01_100x100",
        "-hash": "f6ea27eb30cc27d1ab0d0610ffcc5c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_pack-trinity-eic_100x100",
        "-location": "items",
        "-id": "ship_pack-trinity-eic_100x100",
        "-hash": "9b6afbd2809393b65a93fe237d09e300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "empm-01_63x63",
        "-location": "items_ammunition_mine",
        "-id": "empm-01_63x63",
        "-hash": "23688e527b8f6d6263134a5cbcc8b100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "resource_lgf_100x100",
        "-location": "items",
        "-id": "resource_lgf_100x100",
        "-hash": "69a613d0e4cd72e90afd6cdc68fcfb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-2_30x30",
        "-location": "items_drone_designs",
        "-id": "havoc-2_30x30",
        "-hash": "dbc0d478691de052745cf612593e0100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "res-b02_30x30",
        "-location": "items_equipment_booster",
        "-id": "res-b02_30x30",
        "-hash": "14a021121b8a1ee16e1533570db15b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-5_top",
        "-location": "items_drone",
        "-id": "iris-5_top",
        "-hash": "b6aae2912b6e0eb1b49d50ab5caef400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_formation_f-03-la_100x100",
        "-location": "items",
        "-id": "drone_formation_f-03-la_100x100",
        "-hash": "a4fcab3976f58229ef5b722a22dfeb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-2_30x30",
        "-location": "items_equipment_extra_repbot",
        "-id": "rep-2_30x30",
        "-hash": "e24096312c50b1d21fa3210bcb375a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "weapon_hst1_100x100",
        "-location": "items",
        "-id": "weapon_hst1_100x100",
        "-hash": "3a8b87400f4d2346282fc7400a499200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "phoenix_top",
        "-location": "items_ship",
        "-id": "phoenix_top",
        "-hash": "c96f80f53d3010ddbdfa5f88ad2d4e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nc-awr-x_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "nc-awr-x_100x100",
        "-hash": "dd4d95f1e348e27ba53a6edf5f0ae000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nostromo_63x63",
        "-location": "items_ship",
        "-id": "nostromo_63x63",
        "-hash": "c6c9e599093f98c72f19c07ca342ac00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "aim-01_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "aim-01_63x63",
        "-hash": "b01ffaf8334bd3f76bc2cadad6198200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sreg-b01_63x63",
        "-location": "items_equipment_booster",
        "-id": "sreg-b01_63x63",
        "-hash": "c6bd6117d3f1a9562b4ac9459a365c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-sm1_100x100",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-sm1_100x100",
        "-hash": "4d7b65b79553a236d3b0c3399066d500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-kk1_100x100",
        "-location": "items_equipment_petgear",
        "-id": "g-kk1_100x100",
        "-hash": "ea7e148224933dbbfc36ddee26f79600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_r-310_100x100",
        "-location": "items",
        "-id": "rocket_r-310_100x100",
        "-hash": "9d29b47ca17ee0316f80a4bee39c9600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-s1_30x30",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-s1_30x30",
        "-hash": "5dc683cb08cc876f303ce5aa557da400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sreg-b02_30x30",
        "-location": "items_equipment_booster",
        "-id": "sreg-b02_30x30",
        "-hash": "22486a4c1c487dc763a0e534e5c08300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mine_empm-01_100x100",
        "-location": "items",
        "-id": "mine_empm-01_100x100",
        "-hash": "91508c385e69742234cd5f2b79b64a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_formation_f-06-da_100x100",
        "-location": "items",
        "-id": "drone_formation_f-06-da_100x100",
        "-hash": "e1263fdb07300b3f650afba760dc2800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_nc-agb-x_100x100",
        "-location": "items",
        "-id": "cpu_nc-agb-x_100x100",
        "-hash": "3e34977abf7981ec9af64c47ec050000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-3_63x63",
        "-location": "items_drone",
        "-id": "flax-3_63x63",
        "-hash": "b38a0a555f3df682bd86e68dec933700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mamba_63x63",
        "-location": "items_ship_bigboy_design",
        "-id": "mamba_63x63",
        "-hash": "95e9033f03752c48df8852823d483200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "generator_sg3n-b01_100x100",
        "-location": "items",
        "-id": "generator_sg3n-b01_100x100",
        "-hash": "cc4139423007199f359dd4b10d20be00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-09-mo_63x63",
        "-location": "items_drone_formation",
        "-id": "f-09-mo_63x63",
        "-hash": "ba0c62f66247f42903c4a7e4ad99a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-2_63x63",
        "-location": "items_drone",
        "-id": "iris-2_63x63",
        "-hash": "e3ab25f382927dfd082f290967524500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "shipempty_top",
        "-location": "items_ship",
        "-id": "shipempty_top",
        "-hash": "b32af8472fe0942be26fecfc71ac5800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "resource-deal-lgf-100_100x100",
        "-location": "items",
        "-id": "resource-deal-lgf-100_100x100",
        "-hash": "442d63f845b88b340554e42e1fa56200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_formation_f-01-tu_100x100",
        "-location": "items",
        "-id": "drone_formation_f-01-tu_100x100",
        "-hash": "81f6c046cba728960a9ee7138b54600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-3_30x30",
        "-location": "items_drone",
        "-id": "apis-3_30x30",
        "-hash": "1e46e2cef4d5c5d3800098f043877e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "generator_g3n-7900_100x100",
        "-location": "items",
        "-id": "generator_g3n-7900_100x100",
        "-hash": "6f332bdc590ad65c8095d1c303cebf00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-b01_63x63",
        "-location": "items_equipment_booster",
        "-id": "rep-b01_63x63",
        "-hash": "901b96b36798672405a0dde74e71f700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-10-cr_100x100",
        "-location": "items_drone_formation",
        "-id": "f-10-cr_100x100",
        "-hash": "f92c0bec627cfffc18d5c229fc65500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sg3n-a03_63x63",
        "-location": "items_equipment_generator_shield",
        "-id": "sg3n-a03_63x63",
        "-hash": "e775ee19bac6ca833965f19f7f8d3a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "generator_sg3n-a03_100x100",
        "-location": "items",
        "-id": "generator_sg3n-a03_100x100",
        "-hash": "9ed860db285c3c820f1d36f70764200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-3210_30x30",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-3210_30x30",
        "-hash": "f0bb2d49c69daf1b7125623d78c1b700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-2_100x100",
        "-location": "items_drone",
        "-id": "zeus-2_100x100",
        "-hash": "1efc2236c0a9a0110b622ee5c0a02200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lf-4_30x30",
        "-location": "items_equipment_weapon_laser",
        "-id": "lf-4_30x30",
        "-hash": "12046c7960d4b8dcb3b42b9ae3bbbe00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "adept_30x30",
        "-location": "items_ship_vengeance_design",
        "-id": "adept_30x30",
        "-hash": "fd0cbde8e47cd940de99ea626a3fb100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-3_100x100",
        "-location": "items_drone",
        "-id": "apis-3_100x100",
        "-hash": "3185178fc45a92070ddd8afead91f800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "smb-01_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "smb-01_100x100",
        "-hash": "ad7e7ff45f564293dcac06b878e57b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-10_top",
        "-location": "items_pet",
        "-id": "pet10-10_top",
        "-hash": "1185755c1a4bf5bda75d0f81ab89300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_piranha_100x100",
        "-location": "items",
        "-id": "ship_piranha_100x100",
        "-hash": "630fd839a82e967325c0b1de5267c200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ddm-01_30x30",
        "-location": "items_ammunition_mine",
        "-id": "ddm-01_30x30",
        "-hash": "c8300a9d1b414c5dc4e868daf247e100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "dmg-b02_100x100",
        "-location": "items_equipment_booster",
        "-id": "dmg-b02_100x100",
        "-hash": "7476a8dfc78fb115dca50581932beb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "spearhead-eic_63x63",
        "-location": "items_ship",
        "-id": "spearhead-eic_63x63",
        "-hash": "e298dbf18f7525d1f70d9e0a4b8e8200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "venom_top",
        "-location": "items_ship_goliath_design",
        "-id": "venom_top",
        "-hash": "13e3a904adbf3017e4561b98a2e14a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-aim1_30x30",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-aim1_30x30",
        "-hash": "88cc1eb2a2b8d502de9f80a0dca65500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-12-ba_100x100",
        "-location": "items_drone_formation",
        "-id": "f-12-ba_100x100",
        "-hash": "2f1585c4255fada896ece0bf0e314700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_rllb-x_100x100",
        "-location": "items",
        "-id": "cpu_rllb-x_100x100",
        "-hash": "cc731159b70f573ba8aa73c900c54700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lf-2_30x30",
        "-location": "items_equipment_weapon_laser",
        "-id": "lf-2_30x30",
        "-hash": "156cf2ddc0e14ff43bfe6552f1585f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-2_100x100",
        "-location": "items_equipment_extra_repbot",
        "-id": "rep-2_100x100",
        "-hash": "90cbd18d53f4340e7a28254367338800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "csr-02_63x63",
        "-location": "items_equipment_aiprotocol",
        "-id": "csr-02_63x63",
        "-hash": "1db69aa1af5ac186b2c427f0d576ba00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "exalted_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "exalted_30x30",
        "-hash": "72c2127019b2e3e28757998649a5cb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-1_63x63",
        "-location": "items_drone",
        "-id": "zeus-1_63x63",
        "-hash": "365124dd741333c886ee48bded223800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-cr1_30x30",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-cr1_30x30",
        "-hash": "ac92207def2860061b3ff02d00f12000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hmd-07_30x30",
        "-location": "items_equipment_extra",
        "-id": "hmd-07_30x30",
        "-hash": "82fc02e71a87a1c22d3c60d097293100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "liberator_63x63",
        "-location": "items_ship",
        "-id": "liberator_63x63",
        "-hash": "1fd1699b162b315e7d7097c79019e700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-5_30x30",
        "-location": "items_drone",
        "-id": "flax-5_30x30",
        "-hash": "9f39bee7d90fee95bee00070f29bc900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "r-310_100x100",
        "-location": "items_ammunition_rocket",
        "-id": "r-310_100x100",
        "-hash": "9d29b47ca17ee0316f80a4bee39c9600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hst-1_100x100",
        "-location": "items_equipment_weapon_rocketlauncher",
        "-id": "hst-1_100x100",
        "-hash": "4d3a4c3fcc183b86a549d099de824800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "independence_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "independence_100x100",
        "-hash": "c87ee15e93461ae67bc0c84855d3f000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cl04k-xl_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "cl04k-xl_63x63",
        "-hash": "3c3954049d50e00d9e4c41e2455cde00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "res-b02_63x63",
        "-location": "items_equipment_booster",
        "-id": "res-b02_63x63",
        "-hash": "2c72acdaad285520f34506a31bc05900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lcb-10_63x63",
        "-location": "items_ammunition_laser",
        "-id": "lcb-10_63x63",
        "-hash": "c02154d2ce135d660f647631dbbfbc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "promerium_30x30",
        "-location": "items_resource_ore",
        "-id": "promerium_30x30",
        "-hash": "e814113277b6260618e4ab5969e20a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_goliath_100x100",
        "-location": "items",
        "-id": "ship_goliath_100x100",
        "-hash": "acd0fabe9cd93bf02fb5083427849c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_phoenix_100x100",
        "-location": "items",
        "-id": "ship_phoenix_100x100",
        "-hash": "e2a946abe6dad13b4e7bc8080649cc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "leonov-default_top",
        "-location": "items_ship_model",
        "-id": "leonov-default_top",
        "-hash": "415d77665462f6e1610485619a4000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hangar_slot_100x100",
        "-location": "items",
        "-id": "hangar_slot_100x100",
        "-hash": "4103cd5f4ead22d15ffa746e06a99300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-0_63x63",
        "-location": "items_drone",
        "-id": "zeus-0_63x63",
        "-hash": "95b0b3e0577188d582bf2fdd85cb2d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-lm1_100x100",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-lm1_100x100",
        "-hash": "b5bd078a802e328c0c21032534aa8100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sreg-b02_63x63",
        "-location": "items_equipment_booster",
        "-id": "sreg-b02_63x63",
        "-hash": "2caf5f4659048e2571ad327a1ded0100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ish-01_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "ish-01_100x100",
        "-hash": "ba929c263af782b8fb64046ee2b94d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-s_63x63",
        "-location": "items_equipment_extra_repbot",
        "-id": "rep-s_63x63",
        "-hash": "c82f70710b97fc05410bb53b6b8e7400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lf-1_100x100",
        "-location": "items_equipment_weapon_laser",
        "-id": "lf-1_100x100",
        "-hash": "63996742896b58647fcd48dda079e300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_sar-01_100x100",
        "-location": "items",
        "-id": "rocket_sar-01_100x100",
        "-hash": "8a240cd56aafb6e2f731693a9eda5c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "seprom_30x30",
        "-location": "items_resource_ore",
        "-id": "seprom_30x30",
        "-hash": "8bd534e55e350281963526f256a13f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mamba_30x30",
        "-location": "items_ship_bigboy_design",
        "-id": "mamba_30x30",
        "-hash": "2b509245b27a71724ffb484ccf862f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-aim1_100x100",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-aim1_100x100",
        "-hash": "bf3768775cdea7a275fdc03d7e992100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "fwx-l_63x63",
        "-location": "items_ammunition_firework",
        "-id": "fwx-l_63x63",
        "-hash": "3e220381c3f61536dc7e6f1bf5b6e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "plt-2021_30x30",
        "-location": "items_ammunition_rocket",
        "-id": "plt-2021_30x30",
        "-hash": "b61ed2d31f27dca205aabf6825117d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-hp1_63x63",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-hp1_63x63",
        "-hash": "faaf4bb645a2f3a6a2c86780ae2bb100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "prometium_63x63",
        "-location": "items_resource_ore",
        "-id": "prometium_63x63",
        "-hash": "cea1d899667583722409741b9ab5b400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "crimson_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "crimson_100x100",
        "-hash": "abb4181ed16fbbd2cd918bb85460c200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_ai-cr1_100x100",
        "-location": "items",
        "-id": "pet_protocol_ai-cr1_100x100",
        "-hash": "b1e436079e9c1daa88ee90a1e2960000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lgf_30x30",
        "-location": "items_resource",
        "-id": "lgf_30x30",
        "-hash": "b12326b73cc0a0ea9776deb3e9ee7000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rllb-x_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "rllb-x_30x30",
        "-hash": "ad70453dead7077704b34dcbef4b5d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-2010_63x63",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-2010_63x63",
        "-hash": "b1497b51c32fa9f3494555ded7ce5100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sg3n-a01_100x100",
        "-location": "items_equipment_generator_shield",
        "-id": "sg3n-a01_100x100",
        "-hash": "19228ba81b387583a63ed8c9a9465400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "robot_rep-s_100x100",
        "-location": "items",
        "-id": "robot_rep-s_100x100",
        "-hash": "d474477ba5d66d7f3255fb1068eeea00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-2_63x63",
        "-location": "items_drone",
        "-id": "zeus-2_63x63",
        "-hash": "f7fe38c128c3c13d9097bfce85891c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_cbr_100x100",
        "-location": "items",
        "-id": "rocket_cbr_100x100",
        "-hash": "7c63e13d99624851eb73cdb866482400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-11_top",
        "-location": "items_pet",
        "-id": "pet10-11_top",
        "-hash": "6858e2ab0c16c16ed982763fa9645d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_top_empty",
        "-location": "items_ship",
        "-id": "ship_top_empty",
        "-hash": "b32af8472fe0942be26fecfc71ac5800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lottery-euro-2012_30x30",
        "-location": "items_resource",
        "-id": "lottery-euro-2012_30x30",
        "-hash": "37e4c751e8dd5e36e13475a18abc9600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "crimson_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "crimson_63x63",
        "-hash": "84c63772c5d3b306af523134e1898200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-b02_30x30",
        "-location": "items_equipment_booster",
        "-id": "rep-b02_30x30",
        "-hash": "4cf86fe06340830e9173bf21d380ee00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "yamato_100x100",
        "-location": "items_ship",
        "-id": "yamato_100x100",
        "-hash": "593ad8d6d4ae1230ef58268a50c47100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-02-ar_30x30",
        "-location": "items_drone_formation",
        "-id": "f-02-ar_30x30",
        "-hash": "9652aa854d4173047297cbab9e2d500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "diminisher_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "diminisher_30x30",
        "-hash": "13bd3045938ff7e1387e3810f4ef9e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10_30x30",
        "-location": "items_pet",
        "-id": "pet10_30x30",
        "-hash": "64d37f39e6afc9ccfd3fad221a3f1a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-6900_30x30",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-6900_30x30",
        "-hash": "d7b869fd976e4aa747579b34ddf7c600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "bastion_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "bastion_30x30",
        "-hash": "45177fe09e92307b3d1bf8d0036ea200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "acm-01_30x30",
        "-location": "items_ammunition_mine",
        "-id": "acm-01_30x30",
        "-hash": "135566859f94cc51246f401ec8978200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cl04k-xl_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "cl04k-xl_30x30",
        "-hash": "7064cbe10da5fddb20fa4cd47f403100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_goliath_design_goal_100x100",
        "-location": "items",
        "-id": "ship_goliath_design_goal_100x100",
        "-hash": "87fd0214874eda3606393579a516800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-rep1_100x100",
        "-location": "items_equipment_petgear",
        "-id": "g-rep1_100x100",
        "-hash": "574370c2191e3afe9f73d59fe45b6c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "citadel-vru_63x63",
        "-location": "items_ship",
        "-id": "citadel-vru_63x63",
        "-hash": "4324879c69457380efb2d67f8dd7d300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sar-01_100x100",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "sar-01_100x100",
        "-hash": "8a240cd56aafb6e2f731693a9eda5c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "robot_rep-2_100x100",
        "-location": "items",
        "-id": "robot_rep-2_100x100",
        "-hash": "90cbd18d53f4340e7a28254367338800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-1_63x63",
        "-location": "items_drone",
        "-id": "apis-1_63x63",
        "-hash": "9328098cf6f61f9a15c186cda93bb400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_shd-b01_100x100",
        "-location": "items",
        "-id": "booster_shd-b01_100x100",
        "-hash": "46e4c9c3c367091cb0a4106b673a6000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-e1_63x63",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-e1_63x63",
        "-hash": "95edfabfb98c3495835cc6b53ee41c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-0_30x30",
        "-location": "items_drone",
        "-id": "apis-0_30x30",
        "-hash": "36ff14ea6f9929bbe251c97c7aa9c100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sar-02_30x30",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "sar-02_30x30",
        "-hash": "6622c2e830046ff7c3dfedd2f15a4400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_g-arl1_100x100",
        "-location": "items",
        "-id": "pet_protocol_g-arl1_100x100",
        "-hash": "23a4625ec502f15b3dfd0b5167560d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "vengeance_top",
        "-location": "items_ship",
        "-id": "vengeance_top",
        "-hash": "e187575f818b93005d2cf3c693d5d600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cbr_63x63",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "cbr_63x63",
        "-hash": "4d2f59cc61f9af5b5e60bd486f620200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sapphire_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "sapphire_100x100",
        "-hash": "ca01b887ffa464f1c21c731d99f9e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-3_100x100",
        "-location": "items_drone",
        "-id": "iris-3_100x100",
        "-hash": "a71d6fe22419ea188a5d2dd78e7b6900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_nc-awl-x_100x100",
        "-location": "items",
        "-id": "cpu_nc-awl-x_100x100",
        "-hash": "e0774ad6fd71158f689da79507b05200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "min-t02_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "min-t02_63x63",
        "-hash": "6df6600f801c02ffa658825604118f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rb-x_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "rb-x_63x63",
        "-hash": "2bf41c6f21d7b0f8d99de39d5134e400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "generator_g3n-1010_100x100",
        "-location": "items",
        "-id": "generator_g3n-1010_100x100",
        "-hash": "facd60d52a15bf5f617df4c0813d5400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "robot_rep-1_100x100",
        "-location": "items",
        "-id": "robot_rep-1_100x100",
        "-hash": "40bf974da2bd1ca828036a84bebf3900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_d-tri_100x100",
        "-location": "items",
        "-id": "design_d-tri_100x100",
        "-hash": "65cca8ad7bc202d1d8a23e459d500100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-0_top",
        "-location": "items_pet",
        "-id": "pet10-0_top",
        "-hash": "15956f5b638557555c72dd0e3a005400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nc-awb-x_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "nc-awb-x_100x100",
        "-hash": "b4df32b610682314306316c06eed2600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-1_top",
        "-location": "items_drone",
        "-id": "iris-1_top",
        "-hash": "cdcc2dc2ac60191715615ac48100e300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "dr-02_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "dr-02_63x63",
        "-hash": "7fe8bc7aabcff5e7a146f6afaae5600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nc-awr-x_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "nc-awr-x_63x63",
        "-hash": "3c497366b02260af50dc4dc22b257200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "dr-01_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "dr-01_100x100",
        "-hash": "ac134270b2d6c46d48ff94bfbacfa300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nc-agb-x_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "nc-agb-x_30x30",
        "-hash": "ec4b1bb40a78d57ed0b3fc5a8127e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "robot_rep-3_100x100",
        "-location": "items",
        "-id": "robot_rep-3_100x100",
        "-hash": "3417fb53c3493f1d8baf68c70e8da400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hercules_63x63",
        "-location": "items_drone_designs",
        "-id": "hercules_63x63",
        "-hash": "ff679f4f9829a77f8142d0bf667e5b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "aegis-vru_63x63",
        "-location": "items_ship",
        "-id": "aegis-vru_63x63",
        "-hash": "406d8d73890218d2715bdb1ca235c100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mcb-50_100x100",
        "-location": "items_ammunition_laser",
        "-id": "mcb-50_100x100",
        "-hash": "86f834298693b605147ccf579bb84d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-part_63x63",
        "-location": "items_resource_blueprint",
        "-id": "apis-part_63x63",
        "-hash": "37459d31f6c40151ebb709c1cf940b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booty-key-blue_30x30",
        "-location": "items_resource",
        "-id": "booty-key-blue_30x30",
        "-hash": "91c718dd79b90a25792ae1877cf85800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_goliath_design_centaur_100x100",
        "-location": "items",
        "-id": "ship_goliath_design_centaur_100x100",
        "-hash": "57c56df19f6cf14092d0ac557ee6ed00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-7900_30x30",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-7900_30x30",
        "-hash": "ea805e03b2d3fa173b723f1f846bc900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hp-b02_63x63",
        "-location": "items_equipment_booster",
        "-id": "hp-b02_63x63",
        "-hash": "697e1d0389200afd59e17e59756a0900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "amber_top",
        "-location": "items_ship_goliath_design",
        "-id": "amber_top",
        "-hash": "65981797a3794ac36a686a6e05633200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-3_100x100",
        "-location": "items_equipment_extra_repbot",
        "-id": "rep-3_100x100",
        "-hash": "3417fb53c3493f1d8baf68c70e8da400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "equipment_extra_cpu_fb-x_100x100",
        "-location": "items",
        "-id": "equipment_extra_cpu_fb-x_100x100",
        "-hash": "e06d39c29ea36fb5e9327bd606e95200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_sd-di-01_100x100",
        "-location": "items",
        "-id": "design_sd-di-01_100x100",
        "-hash": "914089c188f57b51ba4ab29f4de0a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-4_63x63",
        "-location": "items_drone",
        "-id": "apis-4_63x63",
        "-hash": "ba6b46d4cac1d0d819915c1a8037e900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rd-x_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "rd-x_30x30",
        "-hash": "38460efefdf781692acac6ff10fc5900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mp-1_100x100",
        "-location": "items_equipment_weapon_laser",
        "-id": "mp-1_100x100",
        "-hash": "23ad6cc5c949ffce0e6ff2683b16e700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-rep1_63x63",
        "-location": "items_equipment_petgear",
        "-id": "g-rep1_63x63",
        "-hash": "ece99d0c722aaffb1a0dbea09ad58000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_eco-10_100x100",
        "-location": "items",
        "-id": "rocket_eco-10_100x100",
        "-hash": "f2728f6bf3b750a5b68d7adf3a898200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_d-ja-01_100x100",
        "-location": "items",
        "-id": "design_d-ja-01_100x100",
        "-hash": "818e123d12a61938bfeebebd65bc3600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_aim-02_100x100",
        "-location": "items",
        "-id": "cpu_aim-02_100x100",
        "-hash": "7b8d24af168a0504c797205ea2b91b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "resource-deal-ee-100_100x100",
        "-location": "items",
        "-id": "resource-deal-ee-100_100x100",
        "-hash": "5539e9a32dfc3734377898983a8e5c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_bigboy_100x100",
        "-location": "items",
        "-id": "ship_bigboy_100x100",
        "-hash": "a29c4f378adce9d937bc4a1ddb23c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-5_63x63",
        "-location": "items_drone_designs",
        "-id": "havoc-5_63x63",
        "-hash": "691122b1882ae1f6eeef9ddbc166c200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-0_100x100",
        "-location": "items_drone_designs",
        "-id": "havoc-0_100x100",
        "-hash": "b8a0037a61ed96bd3049a49698510700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "diminisher_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "diminisher_63x63",
        "-hash": "95450a80fa1ff26c8b61f303474cf500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-09-mo_100x100",
        "-location": "items_drone_formation",
        "-id": "f-09-mo_100x100",
        "-hash": "7926f9c892ed08f4bd5128cccd09fc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sabm-01_30x30",
        "-location": "items_ammunition_mine",
        "-id": "sabm-01_30x30",
        "-hash": "9a5f9f1601210579c27e8ad45cf4ec00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "weapon_lf3_100x100",
        "-location": "items",
        "-id": "weapon_lf3_100x100",
        "-hash": "996cf889c3a2e2f455376c64b4a20c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-10-cr_30x30",
        "-location": "items_drone_formation",
        "-id": "f-10-cr_30x30",
        "-hash": "d9f2923538c09e6c1794454546766d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sg3n-b02_30x30",
        "-location": "items_equipment_generator_shield",
        "-id": "sg3n-b02_30x30",
        "-hash": "21b02c8c30414a8f17b3926fffb5ca00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "crimson_top",
        "-location": "items_ship_goliath_design",
        "-id": "crimson_top",
        "-hash": "b72997e945300eebd9763e1ad1038700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hon-b02_63x63",
        "-location": "items_equipment_booster",
        "-id": "hon-b02_63x63",
        "-hash": "85ad27ebece47e61064cffd0432c1300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mcb-25_63x63",
        "-location": "items_ammunition_laser",
        "-id": "mcb-25_63x63",
        "-hash": "86c2c2d261ef196310b34fb3f92c6800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cgm-02_63x63",
        "-location": "items_equipment_aiprotocol",
        "-id": "cgm-02_63x63",
        "-hash": "dfb6dd82cd1c91db14cb8474a048a300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "citadel-eic_63x63",
        "-location": "items_ship",
        "-id": "citadel-eic_63x63",
        "-hash": "b6300c86b05c4cf9fd0c21161a18bc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "citadel-vru_top",
        "-location": "items_ship",
        "-id": "citadel-vru_top",
        "-hash": "18bcb8c4a7fac1cb8b6d936832690c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-06-da_100x100",
        "-location": "items_drone_formation",
        "-id": "f-06-da_100x100",
        "-hash": "e1263fdb07300b3f650afba760dc2800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "spearhead-vru_63x63",
        "-location": "items_ship",
        "-id": "spearhead-vru_63x63",
        "-hash": "dc5f4f03f1333e69032b39837b24b100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "xenomit_63x63",
        "-location": "items_resource_ore",
        "-id": "xenomit_63x63",
        "-hash": "ea8d8fe20c3a61d2cf90f913f8f48000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "gif",
        "-name": "design_sd-all_100x100",
        "-location": "items",
        "-id": "design_sd-all_100x100",
        "-hash": "ad245593aad013c7c8fd93add4527700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-10-cr_63x63",
        "-location": "items_drone_formation",
        "-id": "f-10-cr_63x63",
        "-hash": "a8344c7b5dad6d908287762fda3a8300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_citadel-mmo_100x100",
        "-location": "items",
        "-id": "ship_citadel-mmo_100x100",
        "-hash": "d43662ca1a65a25f5f9ce73f10e44000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ucb-100_100x100",
        "-location": "items_ammunition_laser",
        "-id": "ucb-100_100x100",
        "-hash": "b56716a7918c9bfb6fe917d63eefb700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_g3x-amry-s_100x100",
        "-location": "items",
        "-id": "cpu_g3x-amry-s_100x100",
        "-hash": "46757641047c86c7f07da1a35ccfb000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "smb-01_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "smb-01_30x30",
        "-hash": "5a0257eec5625b07599eddcc1b8700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-4_63x63",
        "-location": "items_drone_designs",
        "-id": "havoc-4_63x63",
        "-hash": "ba6b46d4cac1d0d819915c1a8037e900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ajp-01_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "ajp-01_63x63",
        "-hash": "7799fecfd4fce1f89d900d4304c21000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_sd-li-01_100x100",
        "-location": "items",
        "-id": "design_sd-li-01_100x100",
        "-hash": "a8f63bb998c50d36cfa4c4e03b1c4d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "defcom_63x63",
        "-location": "items_ship",
        "-id": "defcom_63x63",
        "-hash": "4feb63598001652fa723a3cb9d6c4100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "jp-02_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "jp-02_100x100",
        "-hash": "4c714d0033db967ba3a2720032ae8800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cgm-02_30x30",
        "-location": "items_equipment_aiprotocol",
        "-id": "cgm-02_30x30",
        "-hash": "60e8cf8e032f9d69934e1f58b7e1d800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ignite_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "ignite_63x63",
        "-hash": "cbb08e9e9528ee46634ba56a540cf300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "eco-10_30x30",
        "-location": "items_ammunition_rocket",
        "-id": "eco-10_30x30",
        "-hash": "a6bb8b0876c9563f87e928b0da2bd600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "wiz-x_30x30",
        "-location": "items_ammunition_specialammo",
        "-id": "wiz-x_30x30",
        "-hash": "522300456f6b4bec5164514cdccab400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "alb-x_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "alb-x_63x63",
        "-hash": "a217c1dc6139d3e5000022123d94cf00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hon-b01_100x100",
        "-location": "items_equipment_booster",
        "-id": "hon-b01_100x100",
        "-hash": "c185017fd6a72c183e6c3d53c11a8300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sg3n-b01_63x63",
        "-location": "items_equipment_generator_shield",
        "-id": "sg3n-b01_63x63",
        "-hash": "88a331209f4d8680e14a42962bf79400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-3_top",
        "-location": "items_drone_designs",
        "-id": "havoc-3_top",
        "-hash": "ad4ff5cc9d6db5ae6fa3884c57b32b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-aim1_63x63",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-aim1_63x63",
        "-hash": "896704a193608ae9b372b4633ba61600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hp-b01_30x30",
        "-location": "items_equipment_booster",
        "-id": "hp-b01_30x30",
        "-hash": "b73402577e766b17c73800a9bd7ba600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "jp-01_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "jp-01_30x30",
        "-hash": "41aa74ce7c4a9dfd0004631cc1564300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-1_63x63",
        "-location": "items_equipment_extra_repbot",
        "-id": "rep-1_63x63",
        "-hash": "edf977c8aee8eae95927fa2a6ceced00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-el1_63x63",
        "-location": "items_equipment_petgear",
        "-id": "g-el1_63x63",
        "-hash": "114689366f97fb5af9243b31fb4e8300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_iris-1_100x100",
        "-location": "items",
        "-id": "drone_iris-1_100x100",
        "-hash": "afba9239e233f506eff21528ab4e8f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "smb-01_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "smb-01_63x63",
        "-hash": "9915c23f7b56ca05388afc2a0dc1b900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ammo_mcb-50_100x100",
        "-location": "items",
        "-id": "ammo_mcb-50_100x100",
        "-hash": "86f834298693b605147ccf579bb84d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-3_63x63",
        "-location": "items_equipment_extra_repbot",
        "-id": "rep-3_63x63",
        "-hash": "e37e71fcb60e174b103aa397522f8400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ammo_cbo-100_100x100",
        "-location": "items",
        "-id": "ammo_cbo-100_100x100",
        "-hash": "ebfb7a43a0b8ae1a28ca3a20588b8600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "resource-deal-bk-100_100x100",
        "-location": "items",
        "-id": "resource-deal-bk-100_100x100",
        "-hash": "d49dea6e0addc231421e4fbdabc17700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lightning_63x63",
        "-location": "items_ship_vengeance_design",
        "-id": "lightning_63x63",
        "-hash": "3e6f07fe13d2d8fd8d2b1dc7a2328000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-s_30x30",
        "-location": "items_equipment_extra_repbot",
        "-id": "rep-s_30x30",
        "-hash": "6512f6cf8e8d40ff25c73b0c225e5500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "independence_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "independence_63x63",
        "-hash": "663367a253c2c6549c3b20472088f800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "shd-b01_30x30",
        "-location": "items_equipment_booster",
        "-id": "shd-b01_30x30",
        "-hash": "a0407f48f4a3b0d21cef8c0f02a54e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-04-st_100x100",
        "-location": "items_drone_formation",
        "-id": "f-04-st_100x100",
        "-hash": "5416a095f411041c45b021b2931a4b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-01-tu_30x30",
        "-location": "items_drone_formation",
        "-id": "f-01-tu_30x30",
        "-hash": "f8dc4dc044d5bc6ebed961e49bfd5300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "csr-02_100x100",
        "-location": "items_equipment_aiprotocol",
        "-id": "csr-02_100x100",
        "-hash": "960c611231888aaffb9da730a1a72200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-eco1_100x100",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-eco1_100x100",
        "-hash": "a191fa2f6956a649cb7512674092c600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_d-cr-01_100x100",
        "-location": "items",
        "-id": "design_d-cr-01_100x100",
        "-hash": "c4a5835a62ae621393afef387e296d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "aegis-mmo_top",
        "-location": "items_ship",
        "-id": "aegis-mmo_top",
        "-hash": "4a538391cbbe85e149b393c055601e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3x-amry-l_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "g3x-amry-l_63x63",
        "-hash": "94572a3d2354e68f99bf55a41fc7300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-13_top",
        "-location": "items_pet",
        "-id": "pet10-13_top",
        "-hash": "e5ac09b36505960cb9cb6e1c2d079300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ignite_top",
        "-location": "items_ship_goliath_design",
        "-id": "ignite_top",
        "-hash": "e1c2c5cf5d6e55f948ff16daa4108300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc_63x63",
        "-location": "items_drone_designs",
        "-id": "havoc_63x63",
        "-hash": "ada51f4195e9e66baa7741514f16b400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_dr-02_100x100",
        "-location": "items",
        "-id": "cpu_dr-02_100x100",
        "-hash": "9a1b1578571fb6b73126da27d81b6900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-3_top",
        "-location": "items_drone",
        "-id": "flax-3_top",
        "-hash": "a3cd0a8df7fdb045e3f9eb656dc47700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "exalted_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "exalted_100x100",
        "-hash": "ffca22d5ba92a62dca8439dce584ae00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-0_30x30",
        "-location": "items_drone",
        "-id": "zeus-0_30x30",
        "-hash": "92994f06e00e51a63769f5de3c240000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-4_top",
        "-location": "items_drone",
        "-id": "flax-4_top",
        "-hash": "9d85552ccb90056a65c15dba71179e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ajp-01_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "ajp-01_100x100",
        "-hash": "d4c05b61300e6f836963dd6d27bb6600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-7900_100x100",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-7900_100x100",
        "-hash": "8a3934d949413335366fd8c5fd831c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-cr1_63x63",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-cr1_63x63",
        "-hash": "e82b294d86c070c6de1866c2717a4300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sapphire_top",
        "-location": "items_ship_goliath_design",
        "-id": "sapphire_top",
        "-hash": "2d85e440f61e351a124ec3c14e5f0e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mcb-25_30x30",
        "-location": "items_ammunition_laser",
        "-id": "mcb-25_30x30",
        "-hash": "becac3718527c5212ffbaef4de6beb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "fwx-s_100x100",
        "-location": "items_ammunition_firework",
        "-id": "fwx-s_100x100",
        "-hash": "7139453fccf623b7933eb477714e7300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "min-t02_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "min-t02_100x100",
        "-hash": "e29b05eeb8152c061a02f425c66a7400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-08-ch_100x100",
        "-location": "items_drone_formation",
        "-id": "f-08-ch_100x100",
        "-hash": "2323c89ef67892a981533c4f490a7000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-07-di_63x63",
        "-location": "items_drone_formation",
        "-id": "f-07-di_63x63",
        "-hash": "aa3a416527a1c10e87bccd0c49630600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-3_100x100",
        "-location": "items_drone",
        "-id": "zeus-3_100x100",
        "-hash": "85d82125fb965cf79a5e0afa710fe400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hon-b01_63x63",
        "-location": "items_equipment_booster",
        "-id": "hon-b01_63x63",
        "-hash": "695f9f469982a5baa0e9b290c183b100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sle-01_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "sle-01_30x30",
        "-hash": "5f748e92b9b00e73049a8fe1ed6cf300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_d-co-01_100x100",
        "-location": "items",
        "-id": "design_d-co-01_100x100",
        "-hash": "fdb5d76fec778ab933511af5c45a8e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lf-4_63x63",
        "-location": "items_equipment_weapon_laser",
        "-id": "lf-4_63x63",
        "-hash": "ddd3dc54b0e1fad5c7d893c9d1b19400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-tra1_63x63",
        "-location": "items_equipment_petgear",
        "-id": "g-tra1_63x63",
        "-hash": "9f16fdb60862d771707f5a3d0bdb5500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ubr-100_63x63",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "ubr-100_63x63",
        "-hash": "da933c5c09121a0b39f6d573ec8c4700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sar-01_30x30",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "sar-01_30x30",
        "-hash": "34c10962ae93f40d84b8a08f1f433f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-3310_100x100",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-3310_100x100",
        "-hash": "47a6fad8c0e6e5985cf7efd933c1d200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_cgm-02_100x100",
        "-location": "items",
        "-id": "pet_protocol_cgm-02_100x100",
        "-hash": "c072755cbb15d3922a0762d0189a5b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_formation_f-09-mo_100x100",
        "-location": "items",
        "-id": "drone_formation_f-09-mo_100x100",
        "-hash": "7926f9c892ed08f4bd5128cccd09fc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "enforcer_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "enforcer_100x100",
        "-hash": "d3ca78360453fbef723b73d2b724500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "dmg-b02_30x30",
        "-location": "items_equipment_booster",
        "-id": "dmg-b02_30x30",
        "-hash": "7b573c1712bd2b4b200c66219784da00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-08-ch_30x30",
        "-location": "items_drone_formation",
        "-id": "f-08-ch_30x30",
        "-hash": "f26c9dda746d34604c7540a05edb2d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "min-t02_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "min-t02_30x30",
        "-hash": "f7e8d54dd3c17591084c4bf1f2854100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "liberator_100x100",
        "-location": "items_ship",
        "-id": "liberator_100x100",
        "-hash": "12811c57da5f73380b089c37aebde700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hst-2_100x100",
        "-location": "items_equipment_weapon_rocketlauncher",
        "-id": "hst-2_100x100",
        "-hash": "189476e918a7a7c792f09272db412400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "xp-b01_63x63",
        "-location": "items_equipment_booster",
        "-id": "xp-b01_63x63",
        "-hash": "6810cb34f3b15cb294d97bb06993bc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_rep-b01_100x100",
        "-location": "items",
        "-id": "booster_rep-b01_100x100",
        "-hash": "b6c8987effa8dc76aebbd189363b2c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_citadel-vru_100x100",
        "-location": "items",
        "-id": "ship_citadel-vru_100x100",
        "-hash": "a6766e253885443ce104850894317700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-07-di_100x100",
        "-location": "items_drone_formation",
        "-id": "f-07-di_100x100",
        "-hash": "9ce48c588deb64538a5fc8b225df2d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_g-al1_100x100",
        "-location": "items",
        "-id": "pet_protocol_g-al1_100x100",
        "-hash": "d5596feff20319314bf50ebf2b0c6d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "duranium_63x63",
        "-location": "items_resource_ore",
        "-id": "duranium_63x63",
        "-hash": "c027e1e4299b8f6bca072a13a4b8300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hstrm-01_63x63",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "hstrm-01_63x63",
        "-hash": "df51889c45224761dd5d715d0545af00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lightning_30x30",
        "-location": "items_ship_vengeance_design",
        "-id": "lightning_30x30",
        "-hash": "35e5cf870633ff463f0fbd22977b3600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "piranha-default_top",
        "-location": "items_ship_model",
        "-id": "piranha-default_top",
        "-hash": "4590700ffd12fc189ec94ff492d1e300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lf-3_100x100",
        "-location": "items_equipment_weapon_laser",
        "-id": "lf-3_100x100",
        "-hash": "5ced49170920715d57158fe1773a4400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_ai-sm1_100x100",
        "-location": "items",
        "-id": "pet_protocol_ai-sm1_100x100",
        "-hash": "fb4ffcb9e3f355a612aae62d2efe0700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "citadel-mmo_top",
        "-location": "items_ship",
        "-id": "citadel-mmo_top",
        "-hash": "8efde209bef3f6619470a3fd3fab8f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "dcr-250_63x63",
        "-location": "items_ammunition_specialammo",
        "-id": "dcr-250_63x63",
        "-hash": "4aba291a99722abe227bccbf8989cd00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sabm-01_100x100",
        "-location": "items_ammunition_mine",
        "-id": "sabm-01_100x100",
        "-hash": "4c7dd63001053a9de0c5d3d335470e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_rd-x_100x100",
        "-location": "items",
        "-id": "cpu_rd-x_100x100",
        "-hash": "e28b1d72ff73c037ccf13dff48a37f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "fb-x_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "fb-x_63x63",
        "-hash": "cb83875eb5c3da164879605c02d65900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "spectrum_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "spectrum_30x30",
        "-hash": "fcb6bc75b23042a5bbfe589b4965f000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "shg-02_63x63",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "shg-02_63x63",
        "-hash": "30409e13074359b07c084be07b4e3b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mamba_top",
        "-location": "items_ship_bigboy_design",
        "-id": "mamba_top",
        "-hash": "84f362c5f0bafea11339df53a4f49500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "endurium_30x30",
        "-location": "items_resource_ore",
        "-id": "endurium_30x30",
        "-hash": "a5481c8246e83a82988db623e3e53100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_aegis-mmo_100x100",
        "-location": "items",
        "-id": "ship_aegis-mmo_100x100",
        "-hash": "89907c440812462e67ad63192d91b700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sle-04_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "sle-04_100x100",
        "-hash": "688a792d359998af68958acb7fbce500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "generator_g3n-3310_100x100",
        "-location": "items",
        "-id": "generator_g3n-3310_100x100",
        "-hash": "7a6f3541139d129e76cffd68608b5700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-1_top",
        "-location": "items_drone",
        "-id": "flax-1_top",
        "-hash": "c25a2bbba8b08885a4d116ceab620100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ammo_emp-01_100x100",
        "-location": "items",
        "-id": "ammo_emp-01_100x100",
        "-hash": "6286c55936087969b8f0ef401a58ec00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "resource-deal-bk-101_100x100",
        "-location": "items",
        "-id": "resource-deal-bk-101_100x100",
        "-hash": "803bfa6cacad9b20f89c98ec29511200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nc-agb-x_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "nc-agb-x_100x100",
        "-hash": "a6203985f4baacdba419e68daef9700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-5_top",
        "-location": "items_drone",
        "-id": "zeus-5_top",
        "-hash": "ebb1343e99865e7309a8dd443996bd00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_liberator_100x100",
        "-location": "items",
        "-id": "ship_liberator_100x100",
        "-hash": "874ca91fc14df069276b0c8dfb16300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_dmg-b01_100x100",
        "-location": "items",
        "-id": "booster_dmg-b01_100x100",
        "-hash": "8b189d52f44817a3d8d162770c30d900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rb-e02_30x30",
        "-location": "items_ammunition_mine",
        "-id": "rb-e02_30x30",
        "-hash": "690ba1d6e1f1967d8ce04026c32b8100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_flax-1_100x100",
        "-location": "items",
        "-id": "drone_flax-1_100x100",
        "-hash": "e323be5e214e82341e31e6adeec32e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rb-e02_63x63",
        "-location": "items_ammunition_mine",
        "-id": "rb-e02_63x63",
        "-hash": "18b7f690645632059589645611857500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ddm-01_100x100",
        "-location": "items_ammunition_mine",
        "-id": "ddm-01_100x100",
        "-hash": "7041b21050caa6ba09b52096aadf7400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "prometium_30x30",
        "-location": "items_resource_ore",
        "-id": "prometium_30x30",
        "-hash": "3dfd3ed97d4f5b039d81aa3d0ba3cd00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-7_top",
        "-location": "items_pet",
        "-id": "pet10-7_top",
        "-hash": "603e0b55136eabd275813b1541c7f900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-5_30x30",
        "-location": "items_drone",
        "-id": "apis-5_30x30",
        "-hash": "6e16da5f146db3d66aa2bb78849eba00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "dcr-250_30x30",
        "-location": "items_ammunition_specialammo",
        "-id": "dcr-250_30x30",
        "-hash": "65a635a931ead9d7948c4539e4edb300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ubr-100_100x100",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "ubr-100_100x100",
        "-hash": "c6ca51af1bb56f163268ae1f5564f400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ubr-100_30x30",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "ubr-100_30x30",
        "-hash": "eb3e5b22d91cc6445902fb1f0862d200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_formation_f-05-pi_100x100",
        "-location": "items",
        "-id": "drone_formation_f-05-pi_100x100",
        "-hash": "c86f0ab13d1bc14d81eaccb7ad89e400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_min-t01_100x100",
        "-location": "items",
        "-id": "cpu_min-t01_100x100",
        "-hash": "400dcee2a5b91e04547080457ffa8900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "diminisher_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "diminisher_100x100",
        "-hash": "f981e84575292b34e18f0a03df235000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_g-ex1_100x100",
        "-location": "items",
        "-id": "pet_protocol_g-ex1_100x100",
        "-hash": "9b20bf806a3397bd90d1407014338d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "phoenix-default_top",
        "-location": "items_ship_model",
        "-id": "phoenix-default_top",
        "-hash": "c96f80f53d3010ddbdfa5f88ad2d4e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_dmg-b02_100x100",
        "-location": "items",
        "-id": "booster_dmg-b02_100x100",
        "-hash": "7476a8dfc78fb115dca50581932beb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sl-01_30x30",
        "-location": "items_ammunition_mine",
        "-id": "sl-01_30x30",
        "-hash": "6e41e6ce998b8a3bb07ca1190d1deb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_police_100x100",
        "-location": "items",
        "-id": "ship_police_100x100",
        "-hash": "37860e39118a6e506694644bbe42f900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-0_top",
        "-location": "items_drone",
        "-id": "flax-0_top",
        "-hash": "ef72344f330db0e32eca8d2b43a37b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3x-amry-m_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "g3x-amry-m_63x63",
        "-hash": "9269d541d93e9f1fe009f6c7b8a18600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hst-1_30x30",
        "-location": "items_equipment_weapon_rocketlauncher",
        "-id": "hst-1_30x30",
        "-hash": "b0c7fd370207805934235a4a87735e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sg3n-b02_100x100",
        "-location": "items_equipment_generator_shield",
        "-id": "sg3n-b02_100x100",
        "-hash": "b82b382ccdeaea0716ea15f49ff47300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "terbium_30x30",
        "-location": "items_resource_ore",
        "-id": "terbium_30x30",
        "-hash": "e973ca28960c9f31091c08cc57157e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-0_30x30",
        "-location": "items_drone",
        "-id": "iris-0_30x30",
        "-hash": "14ebb8db8014dc4bd757fa2ef74de400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rb-x_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "rb-x_30x30",
        "-hash": "abe256af4fdc99d78525c8bef7822200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "adept_100x100",
        "-location": "items_ship_vengeance_design",
        "-id": "adept_100x100",
        "-hash": "70e087e02264296ae8a18b13c9421100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hp-b01_63x63",
        "-location": "items_equipment_booster",
        "-id": "hp-b01_63x63",
        "-hash": "2fbc951628b2cd6012af28e4a2150a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mine_rb-e01_100x100",
        "-location": "items",
        "-id": "mine_rb-e01_100x100",
        "-hash": "ad5cac8e306177020e77861d27ef3a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-4_63x63",
        "-location": "items_drone",
        "-id": "zeus-4_63x63",
        "-hash": "2c65fd24140f981b50a477ef28c0cb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-tra1_30x30",
        "-location": "items_equipment_petgear",
        "-id": "g-tra1_30x30",
        "-hash": "880636eab8ea27361d95b6f138bb3c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-6_top",
        "-location": "items_pet",
        "-id": "pet10-6_top",
        "-hash": "a7216e73bf2f05cbd84315d5c6511300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-1_30x30",
        "-location": "items_drone",
        "-id": "iris-1_30x30",
        "-hash": "d951657b84dd80549297702f018b1f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_res-b02_100x100",
        "-location": "items",
        "-id": "booster_res-b02_100x100",
        "-hash": "3a4cb9141ef6bec35854f7c8b7070a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pld-8_30x30",
        "-location": "items_ammunition_specialammo",
        "-id": "pld-8_30x30",
        "-hash": "ecf4f2113b1e9eaf205e7951cf095400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ammo_sab-50_100x100",
        "-location": "items",
        "-id": "ammo_sab-50_100x100",
        "-hash": "8c128831210a77fdebfc8085f0de2700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_defcom_100x100",
        "-location": "items",
        "-id": "ship_defcom_100x100",
        "-hash": "cbd576b9ed1e28018960bfd834f2f300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cgm-02_100x100",
        "-location": "items_equipment_aiprotocol",
        "-id": "cgm-02_100x100",
        "-hash": "c072755cbb15d3922a0762d0189a5b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-4_30x30",
        "-location": "items_drone",
        "-id": "flax-4_30x30",
        "-hash": "d8e1788c20d90cadcfa81ecf6d9a9e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_zeus-1_100x100",
        "-location": "items",
        "-id": "drone_zeus-1_100x100",
        "-hash": "811fd8fc71c0e6aa74b129d7fa6d2200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-2_top",
        "-location": "items_drone",
        "-id": "apis-2_top",
        "-hash": "8409d6353aaa143cec73a5618fd2fd00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "fuel-100_63x63",
        "-location": "items_pet",
        "-id": "fuel-100_63x63",
        "-hash": "e91329cbf30b12a38f905369fd34f500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-3_30x30",
        "-location": "items_drone",
        "-id": "zeus-3_30x30",
        "-hash": "48640acba410b37c287403e270da0c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-b02_63x63",
        "-location": "items_equipment_booster",
        "-id": "rep-b02_63x63",
        "-hash": "822d59d51f01db08436c19f036dca600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_ai-pm1_100x100",
        "-location": "items",
        "-id": "pet_protocol_ai-pm1_100x100",
        "-hash": "8f8318689e587ca9774300e06e6cf400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3x-amry-m_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "g3x-amry-m_100x100",
        "-hash": "b3287b51cb87d9da908c44fb22bc5000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-pd1_63x63",
        "-location": "items_equipment_petgear",
        "-id": "g-pd1_63x63",
        "-hash": "acb54fd7b3c0fde9fd98bb98ba0400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-9_top",
        "-location": "items_pet",
        "-id": "pet10-9_top",
        "-hash": "9d8b77af30f4943b72d09eabab57bd00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3x-amry-l_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "g3x-amry-l_100x100",
        "-hash": "70e1d6e1de75b7db34bb8859382a2600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_goliath_design_centaur_63x63",
        "-location": "items",
        "-id": "ship_goliath_design_centaur_63x63",
        "-hash": "221adffb5225534383e4047e8f974c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nc-rrb-x_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "nc-rrb-x_100x100",
        "-hash": "862d24f30519c5e53a13f4d3ec995500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "arol-x_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "arol-x_100x100",
        "-hash": "30df149638e4298594447363931c9a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-1_100x100",
        "-location": "items_drone",
        "-id": "apis-1_100x100",
        "-hash": "54709c56db2e1f2f902d4779b243de00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "referee_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "referee_63x63",
        "-hash": "9644a0d452a25aa0dc6310e6e0b3e700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-02-ar_100x100",
        "-location": "items_drone_formation",
        "-id": "f-02-ar_100x100",
        "-hash": "5a93c4393ab8d47e51d8be0b8ef69300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "plt-3030_100x100",
        "-location": "items_ammunition_rocket",
        "-id": "plt-3030_100x100",
        "-hash": "43ea84fc8e020f3f93a7ae004be4b600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lgf_63x63",
        "-location": "items_resource",
        "-id": "lgf_63x63",
        "-hash": "753ac1eddb627166b371ce6add2a4800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-rl1_100x100",
        "-location": "items_equipment_petgear",
        "-id": "g-rl1_100x100",
        "-hash": "d884c83b62690cd03d8f1f0fd6c6e000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-ar1_100x100",
        "-location": "items_equipment_petgear",
        "-id": "g-ar1_100x100",
        "-hash": "8a45f18eb3d3af23fdf234bb80807b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "revenge_100x100",
        "-location": "items_ship_vengeance_design",
        "-id": "revenge_100x100",
        "-hash": "423d589e609d7a3d2396910e55348b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "aim-01_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "aim-01_30x30",
        "-hash": "9756bd9c4757888927ccad2897fcec00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "spectrum_top",
        "-location": "items_ship_goliath_design",
        "-id": "spectrum_top",
        "-hash": "5dec1c18adf1890dd4a73ae60403e300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3x-amry-s_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "g3x-amry-s_63x63",
        "-hash": "635279b6d663b3652e7074336543db00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-1_top",
        "-location": "items_drone",
        "-id": "apis-1_top",
        "-hash": "ebc18fd76fd5733d370a8cd5cbfb0200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sle-02_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "sle-02_30x30",
        "-hash": "82acde6ea5a6b3a82dd3e8d29251f600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "min-t01_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "min-t01_100x100",
        "-hash": "400dcee2a5b91e04547080457ffa8900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_plt-2026_100x100",
        "-location": "items",
        "-id": "rocket_plt-2026_100x100",
        "-hash": "58fdf543bd4fbd7bfd7bcb011c9d1100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "goliath_top",
        "-location": "items_ship",
        "-id": "goliath_top",
        "-hash": "a604cd4669b80a0ddd89fa54fc946300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "avenger_100x100",
        "-location": "items_ship_vengeance_design",
        "-id": "avenger_100x100",
        "-hash": "37f86e60f270682f6fd338f29e017000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "leonov_63x63",
        "-location": "items_ship",
        "-id": "leonov_63x63",
        "-hash": "28352fd6f76f7f69fde60be651d28b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ignite_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "ignite_30x30",
        "-hash": "542e254d8fb1da1e2a1e0038d7542d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "aim-02_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "aim-02_63x63",
        "-hash": "75b281fb1c866780d65cbf121186ec00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-05-pi_100x100",
        "-location": "items_drone_formation",
        "-id": "f-05-pi_100x100",
        "-hash": "c86f0ab13d1bc14d81eaccb7ad89e400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sar-02_100x100",
        "-location": "items",
        "-id": "sar-02_100x100",
        "-hash": "e71bbf67775146cacab9fd82bb4e5e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-4_top",
        "-location": "items_drone",
        "-id": "apis-4_top",
        "-hash": "2c343d1411545d71f2ac5d473be80f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "police-default_top",
        "-location": "items_ship_model",
        "-id": "police-default_top",
        "-hash": "8eef551a4d7b222fac97eb14e59a8300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pld-8_63x63",
        "-location": "items_ammunition_specialammo",
        "-id": "pld-8_63x63",
        "-hash": "d6e6ddf8da138658639a25468b067e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hp-b02_30x30",
        "-location": "items_equipment_booster",
        "-id": "hp-b02_30x30",
        "-hash": "7125a4fd94cfbeff533bda8c6f2c9500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-rl1_63x63",
        "-location": "items_equipment_petgear",
        "-id": "g-rl1_63x63",
        "-hash": "99118c207d7f278bf4374061c86ded00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "leonov_100x100",
        "-location": "items_ship",
        "-id": "leonov_100x100",
        "-hash": "514e12b1ca5c27a22b6ef646fb9b8a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_dcr-250_100x100",
        "-location": "items",
        "-id": "rocket_dcr-250_100x100",
        "-hash": "afa8d1471065deb26672ce7c88c9ab00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-b02_100x100",
        "-location": "items_equipment_booster",
        "-id": "rep-b02_100x100",
        "-hash": "1d5c97b1b866d233d0e064cb65364b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3x-amry-s_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "g3x-amry-s_100x100",
        "-hash": "f1f5786b7dad796b927debefcad24800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rsb-75_100x100",
        "-location": "items_ammunition_laser",
        "-id": "rsb-75_100x100",
        "-hash": "ed334efd4833335cb183b8b3fbb11500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rd-x_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "rd-x_63x63",
        "-hash": "7849dcc2fef033269c2d3473ca522300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_d-ef-01_100x100",
        "-location": "items",
        "-id": "design_d-ef-01_100x100",
        "-hash": "95f8c1de395e04d64dcfe2a0d4746000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sabm-01_63x63",
        "-location": "items_ammunition_mine",
        "-id": "sabm-01_63x63",
        "-hash": "c9d8d6a03a9d4881b09cc2409b056f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "jp-02_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "jp-02_30x30",
        "-hash": "853fa6be9494eb505fce988f418f6000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rb-02_63x63",
        "-location": "items_ammunition_mine",
        "-id": "rb-02_63x63",
        "-hash": "287855f0777f446500bbe5c740fcdd00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_goliath-red_100x100",
        "-location": "items",
        "-id": "design_goliath-red_100x100",
        "-hash": "c4a5835a62ae621393afef387e296d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "fb-x_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "fb-x_100x100",
        "-hash": "e06d39c29ea36fb5e9327bd606e95200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "firework_fwx-m_100x100",
        "-location": "items",
        "-id": "firework_fwx-m_100x100",
        "-hash": "d412ff79067aa13e91403a960245ef00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-1_30x30",
        "-location": "items_equipment_extra_repbot",
        "-id": "rep-1_30x30",
        "-hash": "97af32751588b8430fac9b699c19b600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-hp1_100x100",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-hp1_100x100",
        "-hash": "32c73bc7c6aff534e72d79615ea80a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "liberator_top",
        "-location": "items_ship",
        "-id": "liberator_top",
        "-hash": "4d48488a8ca0d9946c12ab1241d46c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-5_100x100",
        "-location": "items_drone",
        "-id": "flax-5_100x100",
        "-hash": "71708ef72bf36e293186a48e088c3100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_ai-al1_100x100",
        "-location": "items",
        "-id": "pet_protocol_ai-al1_100x100",
        "-hash": "e66e287de9598c476752cc10494a9200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_ai-eco1_100x100",
        "-location": "items",
        "-id": "pet_protocol_ai-eco1_100x100",
        "-hash": "64b39074ab5ee8ad99fe31d6817b900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lottery-euro-2012_63x63",
        "-location": "items_resource",
        "-id": "lottery-euro-2012_63x63",
        "-hash": "e3eb29bb67fc2dc862f630e1e71bd800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "veteran_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "veteran_63x63",
        "-hash": "3fd73f6bc3611a9fe8f2367f4575b600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-01-tu_100x100",
        "-location": "items_drone_formation",
        "-id": "f-01-tu_100x100",
        "-hash": "81f6c046cba728960a9ee7138b54600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_min-t02_100x100",
        "-location": "items",
        "-id": "cpu_min-t02_100x100",
        "-hash": "8e54f362742f0187d644bdda12451a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nc-awl-x_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "nc-awl-x_100x100",
        "-hash": "6fdf3acc1f31b4df0c353bbcd470f400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mp-1_30x30",
        "-location": "items_equipment_weapon_laser",
        "-id": "mp-1_30x30",
        "-hash": "cfde29bcddbbfbcf4abccb06a1bad900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "fwx-l_100x100",
        "-location": "items_ammunition_firework",
        "-id": "fwx-l_100x100",
        "-hash": "c28e07ba4d7d961366f82d9384a48b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-12-ba_30x30",
        "-location": "items_drone_formation",
        "-id": "f-12-ba_30x30",
        "-hash": "fac6ef4761dcf3bdcd88645b16da5600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-3_100x100",
        "-location": "items_drone",
        "-id": "flax-3_100x100",
        "-hash": "e8a5eefb0f5c3081e79e8a1632222e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sle-02_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "sle-02_100x100",
        "-hash": "9220f90c1874ed7d71b696d38d12e600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-1_100x100",
        "-location": "items_equipment_extra_repbot",
        "-id": "rep-1_100x100",
        "-hash": "40bf974da2bd1ca828036a84bebf3900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sg3n-a02_30x30",
        "-location": "items_equipment_generator_shield",
        "-id": "sg3n-a02_30x30",
        "-hash": "6f85775b2b55616a538ef62826b8f300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-3_63x63",
        "-location": "items_drone",
        "-id": "zeus-3_63x63",
        "-hash": "cd0de869358e2f9ae36b7252c595b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-1010_30x30",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-1010_30x30",
        "-hash": "e5674130f14944e7411e5462960200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-hp1_30x30",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-hp1_30x30",
        "-hash": "2742b9501c4dcd1deb5cbc8d69fa6600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_ai-r1_100x100",
        "-location": "items",
        "-id": "pet_protocol_ai-r1_100x100",
        "-hash": "95fcc6194268982fdfb00e002a267b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-4_30x30",
        "-location": "items_drone",
        "-id": "iris-4_30x30",
        "-hash": "9cb3929ed0ea6e938eb50599a854d400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mine_rb-e02_100x100",
        "-location": "items",
        "-id": "mine_rb-e02_100x100",
        "-hash": "975eabb65ef0c789fc3fcdf16c5c5e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_spearhead-eic_100x100",
        "-location": "items",
        "-id": "ship_spearhead-eic_100x100",
        "-hash": "8e69aef81d084d2798500ac0f63a8c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "plt-2026_63x63",
        "-location": "items_ammunition_rocket",
        "-id": "plt-2026_63x63",
        "-hash": "c6bfdcd09949f7b61b98ead3c6773500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "aim-02_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "aim-02_30x30",
        "-hash": "48e8e4664be8a48f661625110fd5a400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nc-awr-x_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "nc-awr-x_30x30",
        "-hash": "99848aaf0ac0f38978aae0ae6aac3500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "wiz-x_100x100",
        "-location": "items_ammunition_specialammo",
        "-id": "wiz-x_100x100",
        "-hash": "b4b7d1ed6af0a1b5031fb0a3a6861900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "min-t01_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "min-t01_63x63",
        "-hash": "270e37e5766c4189d592f6ee1c1b8700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_pet10_100x100",
        "-location": "items",
        "-id": "pet_pet10_100x100",
        "-hash": "83ddef9a8fe8199cd787f6e07294d400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lf-3_63x63",
        "-location": "items_equipment_weapon_laser",
        "-id": "lf-3_63x63",
        "-hash": "b8ec173f11257347acc378cf2b19c300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "gif",
        "-name": "design_d-har_100x100",
        "-location": "items",
        "-id": "design_d-har_100x100",
        "-hash": "6ba6bea987a91dfcb4cbeece6bc28000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "defcom_top",
        "-location": "items_ship",
        "-id": "defcom_top",
        "-hash": "52aaa11eae4b9a0ca19bfa1601a44200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-0_63x63",
        "-location": "items_drone",
        "-id": "flax-0_63x63",
        "-hash": "7ddabff5865f4c074e8364a28753b900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "prometid_63x63",
        "-location": "items_resource_ore",
        "-id": "prometid_63x63",
        "-hash": "1e8dbf2955df6513a172a28b57fbc800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-5_30x30",
        "-location": "items_drone",
        "-id": "iris-5_30x30",
        "-hash": "40860d1594e9b6841ccfa87963f8d800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_ai-s1_100x100",
        "-location": "items",
        "-id": "pet_protocol_ai-s1_100x100",
        "-hash": "b1281f9f6de04dbd7932d0c9043c9200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-3_30x30",
        "-location": "items_drone",
        "-id": "iris-3_30x30",
        "-hash": "9c481125952808f464742ffbb0a43500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-4_30x30",
        "-location": "items_drone",
        "-id": "zeus-4_30x30",
        "-hash": "3f25e8dd16b66974e994a002602db500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "shg-02_30x30",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "shg-02_30x30",
        "-hash": "9af48efd1dfe947e444ff86ccec9a400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-2_top",
        "-location": "items_drone",
        "-id": "zeus-2_top",
        "-hash": "87bb3cdee3f7a4175aa7be80db7d5800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-5_top",
        "-location": "items_pet",
        "-id": "pet10-5_top",
        "-hash": "3a97ee94c69faebebdd2220e563ad000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sg3n-b01_100x100",
        "-location": "items_equipment_generator_shield",
        "-id": "sg3n-b01_100x100",
        "-hash": "15ad773d10eb9b696d049632d685c600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "revenge_63x63",
        "-location": "items_ship_vengeance_design",
        "-id": "revenge_63x63",
        "-hash": "3f47bf0099969d63c706af592914fb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-1_top",
        "-location": "items_pet",
        "-id": "pet10-1_top",
        "-hash": "15956f5b638557555c72dd0e3a005400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nostromo_100x100",
        "-location": "items_ship",
        "-id": "nostromo_100x100",
        "-hash": "a14faf254feda58ff45c8e3cef56ed00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-11-he_30x30",
        "-location": "items_drone_formation",
        "-id": "f-11-he_30x30",
        "-hash": "c463c4cd120b034826fe509c9e65fb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "dmg-b01_63x63",
        "-location": "items_equipment_booster",
        "-id": "dmg-b01_63x63",
        "-hash": "49ca8b50eda77fce3905036b6b7aab00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "generator_sg3n-a02_100x100",
        "-location": "items",
        "-id": "generator_sg3n-a02_100x100",
        "-hash": "174cc9342c8df4d49b13d2bb71ff7500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-1_100x100",
        "-location": "items_drone",
        "-id": "iris-1_100x100",
        "-hash": "3b12423b93122055a76f250f307dee00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-s1_100x100",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-s1_100x100",
        "-hash": "793a19100a3319cab25edd1686f59300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-pd1_100x100",
        "-location": "items_equipment_petgear",
        "-id": "g-pd1_100x100",
        "-hash": "8750226e3a89bbfa14ad8deb2c42df00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_d-am-01_100x100",
        "-location": "items",
        "-id": "design_d-am-01_100x100",
        "-hash": "12a14d507f20dfab1d65f33eff38900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "solace_top",
        "-location": "items_ship_goliath_design",
        "-id": "solace_top",
        "-hash": "d6e8b527b1a90dfcc07bd0748cd0ab00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booty-key_63x63",
        "-location": "items_resource",
        "-id": "booty-key_63x63",
        "-hash": "2c2649217fac98e086c9cd8fcec30300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sg3n-a01_63x63",
        "-location": "items_equipment_generator_shield",
        "-id": "sg3n-a01_63x63",
        "-hash": "d2fc1d2a80f3ef4376c9b63145b10c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "centaur_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "centaur_100x100",
        "-hash": "e1723e7e5175fb1e24342f65e30d7400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_d-sa-03_100x100",
        "-location": "items",
        "-id": "design_d-sa-03_100x100",
        "-hash": "e3ed12ea830fb683eb0f60c546e32c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-03-la_100x100",
        "-location": "items",
        "-id": "f-03-la_100x100",
        "-hash": "a4fcab3976f58229ef5b722a22dfeb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_xp-b02_100x100",
        "-location": "items",
        "-id": "booster_xp-b02_100x100",
        "-hash": "4e837365e6d6cc8716772d0d77847200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_shd-b02_100x100",
        "-location": "items",
        "-id": "booster_shd-b02_100x100",
        "-hash": "8f0b81cc566695b236c6d206fe98f500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sar-01_63x63",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "sar-01_63x63",
        "-hash": "e3af8f0c66922b9d0a7654a47f01000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sab-50_63x63",
        "-location": "items_ammunition_laser",
        "-id": "sab-50_63x63",
        "-hash": "665c3f7e4614d679369d77011c2c900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "dr-02_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "dr-02_100x100",
        "-hash": "2cd2ee99cfa7e803424786d9db551900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-ex1_63x63",
        "-location": "items_equipment_petgear",
        "-id": "g-ex1_63x63",
        "-hash": "83f800b2216decccce1c4d4b5ff29000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-2_63x63",
        "-location": "items_equipment_extra_repbot",
        "-id": "rep-2_63x63",
        "-hash": "dd0c4c214428f0aa690c0ee3e5fdf500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-4_100x100",
        "-location": "items_drone",
        "-id": "zeus-4_100x100",
        "-hash": "f14dea9d5d542454f814b04a4c027000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "jade_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "jade_30x30",
        "-hash": "55c1321eae9086b1e7af6dbbff27f300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-3210_63x63",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-3210_63x63",
        "-hash": "4ba91775f4edfe8df7403076a2e96000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-4_30x30",
        "-location": "items_drone_designs",
        "-id": "havoc-4_30x30",
        "-hash": "193660b268e6896e96148d21531d1f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-0_30x30",
        "-location": "items_drone_designs",
        "-id": "havoc-0_30x30",
        "-hash": "36ff14ea6f9929bbe251c97c7aa9c100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-r1_30x30",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-r1_30x30",
        "-hash": "af079dc358abba6624223176ecfabe00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-1_30x30",
        "-location": "items_drone",
        "-id": "apis-1_30x30",
        "-hash": "97089fe60227b13d097608d2c0dad300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_sle-02_100x100",
        "-location": "items",
        "-id": "cpu_sle-02_100x100",
        "-hash": "bd126fed4258eb45a9aadc8303eff100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "enforcer_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "enforcer_30x30",
        "-hash": "910ad3dc8468f831274081d0fd79a700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_sle-01_100x100",
        "-location": "items",
        "-id": "cpu_sle-01_100x100",
        "-hash": "2588a2c25653b6d8dfa26e6ceb082800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "emp-01_100x100",
        "-location": "items_ammunition_specialammo",
        "-id": "emp-01_100x100",
        "-hash": "55fa7a5cd26d00b39f963795c3ab1900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rb-e01_63x63",
        "-location": "items_ammunition_mine",
        "-id": "rb-e01_63x63",
        "-hash": "828360d9764bc9b08cc9830542b1000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "citadel-eic_top",
        "-location": "items_ship",
        "-id": "citadel-eic_top",
        "-hash": "256d329dbf3805fd0bf62ef66931c100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "fwx-l_30x30",
        "-location": "items_ammunition_firework",
        "-id": "fwx-l_30x30",
        "-hash": "9ab2e07e0db58a9a5019b81c5a54d200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-1_30x30",
        "-location": "items_drone_designs",
        "-id": "havoc-1_30x30",
        "-hash": "97089fe60227b13d097608d2c0dad300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_ai-e1_100x100",
        "-location": "items",
        "-id": "pet_protocol_ai-e1_100x100",
        "-hash": "6b9010e7924bcdfc58e00e651f425a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_goliath_design_referee_100x100",
        "-location": "items",
        "-id": "ship_goliath_design_referee_100x100",
        "-hash": "ad758a60359631ec2ca8335140fff200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "slm-01_100x100",
        "-location": "items_ammunition_mine",
        "-id": "slm-01_100x100",
        "-hash": "423a7429701436f742babda30b43bc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "dmg-b01_100x100",
        "-location": "items_equipment_booster",
        "-id": "dmg-b01_100x100",
        "-hash": "511e503b45224a9bd5433a59c848ef00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_goliath_design_kick_100x100",
        "-location": "items",
        "-id": "ship_goliath_design_kick_100x100",
        "-hash": "8d136dd767f3f260a0097ab92f3eca00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "spearhead-mmo_top",
        "-location": "items_ship",
        "-id": "spearhead-mmo_top",
        "-hash": "cf41509d651ecd2059ecc132aab2b100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "police_100x100",
        "-location": "items_ship",
        "-id": "police_100x100",
        "-hash": "4710d8cb32647798398436750a07e800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "phoenix_63x63",
        "-location": "items_ship",
        "-id": "phoenix_63x63",
        "-hash": "cd8f64340c58ff3442bbd1e7ae715500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "generator_g3n-6900_100x100",
        "-location": "items",
        "-id": "generator_g3n-6900_100x100",
        "-hash": "61ef63b7b902022fef875fc679d83500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_csr-02_100x100",
        "-location": "items",
        "-id": "pet_protocol_csr-02_100x100",
        "-hash": "960c611231888aaffb9da730a1a72200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-e1_30x30",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-e1_30x30",
        "-hash": "9b76a4b353c973b569db9ec5f747c100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_d-ba-01_100x100",
        "-location": "items",
        "-id": "design_d-ba-01_100x100",
        "-hash": "9564602615991fd3df7bb4df0d66b600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3x-amry-m_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "g3x-amry-m_30x30",
        "-hash": "ae7bb5c8e700673a44d4ff081ca01900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-09-mo_30x30",
        "-location": "items_drone_formation",
        "-id": "f-09-mo_30x30",
        "-hash": "a7515c9fa9cfacf21580b562d30f7500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nostromo-default_top",
        "-location": "items_ship_model",
        "-id": "nostromo-default_top",
        "-hash": "ff51eab9cb12377314f48ca78cffc500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nc-awl-x_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "nc-awl-x_63x63",
        "-hash": "64c6d5d1eb9e944ccde6cebf5f3a3900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_plt-2021_100x100",
        "-location": "items",
        "-id": "rocket_plt-2021_100x100",
        "-hash": "57dc1c46160862d3e6e73e451764ab00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-5_100x100",
        "-location": "items_drone",
        "-id": "apis-5_100x100",
        "-hash": "3b2b4d09b1207a3c007f2eb690a09000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rok-t01_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "rok-t01_100x100",
        "-hash": "92eb30597b6a0e5e739c25ca824c4100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-5_63x63",
        "-location": "items_drone",
        "-id": "zeus-5_63x63",
        "-hash": "987d62a9a2c60290639f7714909e6600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_ai-lm1_100x100",
        "-location": "items",
        "-id": "pet_protocol_ai-lm1_100x100",
        "-hash": "6b962ec3235eabfd3382e6b8de341500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "piranha_100x100",
        "-location": "items_ship",
        "-id": "piranha_100x100",
        "-hash": "dafebc613914a8d39de7740bf987f800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-3_63x63",
        "-location": "items_drone_designs",
        "-id": "havoc-3_63x63",
        "-hash": "2357d5c44516a90c65f7e6f849c09b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-4_63x63",
        "-location": "items_equipment_extra_repbot",
        "-id": "rep-4_63x63",
        "-hash": "ad1d8c5d7166551c71182eecc5a67e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "adept_top",
        "-location": "items_ship_vengeance_design",
        "-id": "adept_top",
        "-hash": "db4c468575364c029c941103b559b800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hst-2_63x63",
        "-location": "items_equipment_weapon_rocketlauncher",
        "-id": "hst-2_63x63",
        "-hash": "db076f6c66bc0760c650bd1e5a5c2c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "generator_sg3n-b02_100x100",
        "-location": "items",
        "-id": "generator_sg3n-b02_100x100",
        "-hash": "e5053ec40d9861e2073bf9ce3f867a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "aegis-eic_63x63",
        "-location": "items_ship",
        "-id": "aegis-eic_63x63",
        "-hash": "bb7378dd7407480df0e8e31fb5056200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "shd-b02_100x100",
        "-location": "items_equipment_booster",
        "-id": "shd-b02_100x100",
        "-hash": "8f0b81cc566695b236c6d206fe98f500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-3310_63x63",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-3310_63x63",
        "-hash": "342496a568aeded33543c7b508570700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "jp-01_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "jp-01_100x100",
        "-hash": "5632c2889dd72df6178de4f1f579e100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sle-02_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "sle-02_63x63",
        "-hash": "956bbd4b1e79ee5c5b213f5293d1d600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sapphire_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "sapphire_63x63",
        "-hash": "719eed455a30fd6819df412fd31b6c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_shg-01_100x100",
        "-location": "items",
        "-id": "rocket_shg-01_100x100",
        "-hash": "9706f47d9c8c2dd290a869fdb7b7eb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "fwx-m_30x30",
        "-location": "items_ammunition_firework",
        "-id": "fwx-m_30x30",
        "-hash": "32294c0f033f6141386acfd716474d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "fuel-100_100x100",
        "-location": "items_pet",
        "-id": "fuel-100_100x100",
        "-hash": "35b45d995c7191af632fbeca330dbb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-2_30x30",
        "-location": "items_drone",
        "-id": "flax-2_30x30",
        "-hash": "bbe4e84e54aa3218ef61c5e88692ae00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-1010_100x100",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-1010_100x100",
        "-hash": "110b421b9d7913c5384e9ef9d65c3d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_ai-hp1_100x100",
        "-location": "items",
        "-id": "pet_protocol_ai-hp1_100x100",
        "-hash": "3466a46ee9022e2ee86fdfb971b0c300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sle-03_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "sle-03_30x30",
        "-hash": "d2d48e9d0a40e19d766c39f04d058000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "venom_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "venom_30x30",
        "-hash": "8f1947a36237030a042d49fc2db38b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-3_top",
        "-location": "items_drone",
        "-id": "zeus-3_top",
        "-hash": "1e84e1e4fd83abae7dd5a75395a6000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "aegis-vru_top",
        "-location": "items_ship",
        "-id": "aegis-vru_top",
        "-hash": "f1f476c3a5817e509cd2c43df8883700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-1_100x100",
        "-location": "items_drone",
        "-id": "zeus-1_100x100",
        "-hash": "c55b8677a096125cfa14888d7b120100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_goliath_design_independence_100x100",
        "-location": "items",
        "-id": "ship_goliath_design_independence_100x100",
        "-hash": "54766b23f3d2aca9d89d4b8ce869a700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "min-t01_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "min-t01_30x30",
        "-hash": "f5ab19ee9afbb11bda57d07a1501c900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_wiz-x_100x100",
        "-location": "items",
        "-id": "rocket_wiz-x_100x100",
        "-hash": "1fe528828ce651832a3a0b97301ac000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_ajp-01_100x100",
        "-location": "items",
        "-id": "cpu_ajp-01_100x100",
        "-hash": "d4c05b61300e6f836963dd6d27bb6600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-7900_63x63",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-7900_63x63",
        "-hash": "768dea8b4af9ee7381b707cc63f3ac00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ddm-01_63x63",
        "-location": "items_ammunition_mine",
        "-id": "ddm-01_63x63",
        "-hash": "9a5703e6ad36fdf964bc16299934e000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mine_sabm-01_100x100",
        "-location": "items",
        "-id": "mine_sabm-01_100x100",
        "-hash": "af16a43e81417062c55f6434aff01300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_arol-x_100x100",
        "-location": "items",
        "-id": "cpu_arol-x_100x100",
        "-hash": "56cf3804cfa9aeb69d81333283d52d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_g-rep1_100x100",
        "-location": "items",
        "-id": "pet_protocol_g-rep1_100x100",
        "-hash": "1e352d53e64fe6e93f94722a5e443700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "firework_fwx-s_100x100",
        "-location": "items",
        "-id": "firework_fwx-s_100x100",
        "-hash": "7139453fccf623b7933eb477714e7300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_nc-awr-x_100x100",
        "-location": "items",
        "-id": "cpu_nc-awr-x_100x100",
        "-hash": "93cced995f50249e8d2f7ac6b8f22d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_d-ig-01_100x100",
        "-location": "items",
        "-id": "design_d-ig-01_100x100",
        "-hash": "114edd6371258e4f1f59568ad0523400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_nc-rrb-x_100x100",
        "-location": "items",
        "-id": "cpu_nc-rrb-x_100x100",
        "-hash": "3f97d3415848cc7500a39ef0bf782300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "veteran_top",
        "-location": "items_ship_goliath_design",
        "-id": "veteran_top",
        "-hash": "2d388ee819077143b8e78d3dc7ceae00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-s_100x100",
        "-location": "items_equipment_extra_repbot",
        "-id": "rep-s_100x100",
        "-hash": "d474477ba5d66d7f3255fb1068eeea00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-pm1_100x100",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-pm1_100x100",
        "-hash": "632102227c010d54711778d3c7f4b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-r1_100x100",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-r1_100x100",
        "-hash": "f62fdb492ff21973a75ddb4a264be400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-3_top",
        "-location": "items_pet",
        "-id": "pet10-3_top",
        "-hash": "7aa539bb67e5061c1f8da7593c900500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hp-b02_100x100",
        "-location": "items_equipment_booster",
        "-id": "hp-b02_100x100",
        "-hash": "8742e9f899c493713e40d94a7f59e300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_g-kk1_100x100",
        "-location": "items",
        "-id": "pet_protocol_g-kk1_100x100",
        "-hash": "7899feb005519e153c2710440e204000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_plt-3030_100x100",
        "-location": "items",
        "-id": "rocket_plt-3030_100x100",
        "-hash": "cca35acb824621b1d25ac913c7fd3d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "police_63x63",
        "-location": "items_ship",
        "-id": "police_63x63",
        "-hash": "be5917baf12f9700ef52e873c3e28100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "amber_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "amber_30x30",
        "-hash": "63a4fcf3146574417692f02683ee1600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-3310_30x30",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-3310_30x30",
        "-hash": "9c7619637fe2f4db057a26a693dfcc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "r-310_30x30",
        "-location": "items_ammunition_rocket",
        "-id": "r-310_30x30",
        "-hash": "68af73bca9114add674a573fee166200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "prometid_30x30",
        "-location": "items_resource_ore",
        "-id": "prometid_30x30",
        "-hash": "df535e1d9dd1deabcff16d7a4fdb2f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ammo_mcb-25_100x100",
        "-location": "items",
        "-id": "ammo_mcb-25_100x100",
        "-hash": "fa407a1644e0563e5138b0499c682100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "avenger_63x63",
        "-location": "items_ship_vengeance_design",
        "-id": "avenger_63x63",
        "-hash": "bfbdd480f34e0a87a3fbb329f48ef600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-06-da_63x63",
        "-location": "items_drone_formation",
        "-id": "f-06-da_63x63",
        "-hash": "bc0461469e2eb811d1952455f0516600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_formation_f-08-ch_100x100",
        "-location": "items",
        "-id": "drone_formation_f-08-ch_100x100",
        "-hash": "2323c89ef67892a981533c4f490a7000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-11-he_63x63",
        "-location": "items_drone_formation",
        "-id": "f-11-he_63x63",
        "-hash": "76f2703dc13300e01c80a054b2972700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cl04k-m_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "cl04k-m_100x100",
        "-hash": "44ceb70cb4a7cfd94ec4b75708208a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc_100x100",
        "-location": "items_drone_designs",
        "-id": "havoc_100x100",
        "-hash": "9ba2ab733b96e06b9d3d84694260f800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "weapon_lf2_100x100",
        "-location": "items",
        "-id": "weapon_lf2_100x100",
        "-hash": "d63be8282e0768568bfc40679bce6300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-pm1_63x63",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-pm1_63x63",
        "-hash": "7b43bdcb05d41e52079703f1cca3bc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "plt-3030_63x63",
        "-location": "items_ammunition_rocket",
        "-id": "plt-3030_63x63",
        "-hash": "f7a4edcb86596809deb924083bfcef00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_hon-b02_100x100",
        "-location": "items",
        "-id": "booster_hon-b02_100x100",
        "-hash": "f44c7692a0880871d9449919e235d600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lf-1_30x30",
        "-location": "items_equipment_weapon_laser",
        "-id": "lf-1_30x30",
        "-hash": "38b6e7ac566392a42b5058b957877400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_formation_f-04-st_100x100",
        "-location": "items",
        "-id": "drone_formation_f-04-st_100x100",
        "-hash": "5416a095f411041c45b021b2931a4b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-el1_30x30",
        "-location": "items_equipment_petgear",
        "-id": "g-el1_30x30",
        "-hash": "85405afdf7ebda0df694bc916f1fe000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "fwx-m_63x63",
        "-location": "items_ammunition_firework",
        "-id": "fwx-m_63x63",
        "-hash": "97971aa7396b8a511a80cccf2be43600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_jp-02_100x100",
        "-location": "items",
        "-id": "cpu_jp-02_100x100",
        "-hash": "38fdbee47a9f1a5003a58a1130b00700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_hstrm-01_100x100",
        "-location": "items",
        "-id": "rocket_hstrm-01_100x100",
        "-hash": "be2503f2e93334f320dce9156363fc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_formation_f-07-di_100x100",
        "-location": "items",
        "-id": "drone_formation_f-07-di_100x100",
        "-hash": "9ce48c588deb64538a5fc8b225df2d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-0_top",
        "-location": "items_drone",
        "-id": "zeus-0_top",
        "-hash": "d6d65afbc6af7412b8cd718e55164400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_ubr-100_100x100",
        "-location": "items",
        "-id": "rocket_ubr-100_100x100",
        "-hash": "c6ca51af1bb56f163268ae1f5564f400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-pd1_30x30",
        "-location": "items_equipment_petgear",
        "-id": "g-pd1_30x30",
        "-hash": "7ee3df0e675d93242a22008cda835200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-al1_30x30",
        "-location": "items_equipment_petgear",
        "-id": "g-al1_30x30",
        "-hash": "699502e677e3d898f5b1185027356d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-pm1_30x30",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-pm1_30x30",
        "-hash": "adc34bdce22ea52f45b4c5d962346600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sg3n-a02_100x100",
        "-location": "items_equipment_generator_shield",
        "-id": "sg3n-a02_100x100",
        "-hash": "42a5f4011eaed1818feecd88636a3700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_shg-02_100x100",
        "-location": "items",
        "-id": "rocket_shg-02_100x100",
        "-hash": "ae5e512dfa7cb9448d5b846e969a4f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_cl04k-xl_100x100",
        "-location": "items",
        "-id": "cpu_cl04k-xl_100x100",
        "-hash": "db3be4c55f15974faacf45f46b5bd600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lightning_top",
        "-location": "items_ship_vengeance_design",
        "-id": "lightning_top",
        "-hash": "8a21d30900a7cb1b5041107a5762f100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "enforcer_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "enforcer_63x63",
        "-hash": "b2a8f157eec6af66d9f4f2fcdfa5dd00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pld-8_100x100",
        "-location": "items_ammunition_specialammo",
        "-id": "pld-8_100x100",
        "-hash": "a36af5f0b4d96fdf49506edd3b42f300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-3_30x30",
        "-location": "items_equipment_extra_repbot",
        "-id": "rep-3_30x30",
        "-hash": "7ee2b08d9e7d1fc4cf84a0f3d70d7700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "resource-deal-jv-100_100x100",
        "-location": "items",
        "-id": "resource-deal-jv-100_100x100",
        "-hash": "777a8130cc0c6d6551ca465e3df05a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-2_100x100",
        "-location": "items_drone",
        "-id": "flax-2_100x100",
        "-hash": "61cd76dc625f00badc9d07e5e746be00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "piranha_63x63",
        "-location": "items_ship",
        "-id": "piranha_63x63",
        "-hash": "5386619ecc0e429215b13c40a1784800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-al1_30x30",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-al1_30x30",
        "-hash": "a51de7284ade3b6eff98b909131afb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cl04k-xs_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "cl04k-xs_100x100",
        "-hash": "5579d611e2f505fd3317a4ee4e70ee00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-kk1_30x30",
        "-location": "items_equipment_petgear",
        "-id": "g-kk1_30x30",
        "-hash": "5970b1599f56c77a1de4227c01c5e900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-2_100x100",
        "-location": "items_drone",
        "-id": "apis-2_100x100",
        "-hash": "7b8fb5815e70c27edeb0b3476d877600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-4_30x30",
        "-location": "items_equipment_extra_repbot",
        "-id": "rep-4_30x30",
        "-hash": "245a28e891d9de0f67e70494e3912e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "bastion_top",
        "-location": "items_ship_goliath_design",
        "-id": "bastion_top",
        "-hash": "5970790943b53a8e113d4232e5714500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "csr-02_30x30",
        "-location": "items_equipment_aiprotocol",
        "-id": "csr-02_30x30",
        "-hash": "8707331efdd6d7c8c02e74c1c301c700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nc-awl-x_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "nc-awl-x_30x30",
        "-hash": "7dd3ea69155e835d98374c9974dab800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "acm-01_100x100",
        "-location": "items_ammunition_mine",
        "-id": "acm-01_100x100",
        "-hash": "7111672f8762e1eb473248272678ea00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rb-02_30x30",
        "-location": "items_ammunition_mine",
        "-id": "rb-02_30x30",
        "-hash": "690ba1d6e1f1967d8ce04026c32b8100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "defcom_100x100",
        "-location": "items_ship",
        "-id": "defcom_100x100",
        "-hash": "c1901f2255ba6f266f52a7c593ebfa00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_bdr-1211_100x100",
        "-location": "items",
        "-id": "rocket_bdr-1211_100x100",
        "-hash": "36722fa5af808de5a0af0e640ab1a100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_sd-so-01_100x100",
        "-location": "items",
        "-id": "design_sd-so-01_100x100",
        "-hash": "d5243a1181eac88b62fceed2b1c31700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "avenger_30x30",
        "-location": "items_ship_vengeance_design",
        "-id": "avenger_30x30",
        "-hash": "4990936e482a17c51d576c2dd2f65f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ignite_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "ignite_100x100",
        "-hash": "f62fca921dc81f879515a66935658500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ish-01_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "ish-01_63x63",
        "-hash": "59ebb45a483b69b03c878f8ef7381f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "veteran_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "veteran_100x100",
        "-hash": "833a594556f2440ed2695097cf528f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_sd-ve-01_100x100",
        "-location": "items",
        "-id": "design_sd-ve-01_100x100",
        "-hash": "e9fcc9b8d81a77696bc92dfdf7c22c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-3_top",
        "-location": "items_drone",
        "-id": "apis-3_top",
        "-hash": "ad4ff5cc9d6db5ae6fa3884c57b32b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_cd-b01_100x100",
        "-location": "items",
        "-id": "booster_cd-b01_100x100",
        "-hash": "c7216aa63a1f0271b90174f66a5c4700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sentinel_top",
        "-location": "items_ship_goliath_design",
        "-id": "sentinel_top",
        "-hash": "b518d3153b54198589baf8b385dedd00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3x-amry-l_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "g3x-amry-l_30x30",
        "-hash": "17199cbe04adefc915a5d23d889cd800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-2_top",
        "-location": "items_drone",
        "-id": "iris-2_top",
        "-hash": "9c4888900962a7ac074714cfaa206200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "revenge_30x30",
        "-location": "items_ship_vengeance_design",
        "-id": "revenge_30x30",
        "-hash": "ad23fce2e6f415bb733b1791da1b1800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_ai-aim1_100x100",
        "-location": "items",
        "-id": "pet_protocol_ai-aim1_100x100",
        "-hash": "5c080aa4bb9aea04b4302157a24e800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-0_100x100",
        "-location": "items_drone",
        "-id": "apis-0_100x100",
        "-hash": "b8a0037a61ed96bd3049a49698510700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "leonov_top",
        "-location": "items_ship",
        "-id": "leonov_top",
        "-hash": "415d77665462f6e1610485619a4000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-5_top",
        "-location": "items_drone",
        "-id": "apis-5_top",
        "-hash": "eefe025cd0af4d1d82f0b324d787200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "bigboy_top",
        "-location": "items_ship",
        "-id": "bigboy_top",
        "-hash": "6a161ca8660e19046ed1ce5d46c71600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "fb-x_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "fb-x_30x30",
        "-hash": "7b2a9d2965073c0a9260b7549283a500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-2_top",
        "-location": "items_drone_designs",
        "-id": "havoc-2_top",
        "-hash": "8409d6353aaa143cec73a5618fd2fd00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-2_top",
        "-location": "items_pet",
        "-id": "pet10-2_top",
        "-hash": "25d344b7514ed46f037cef93f8a43c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "weapon_mp1_100x100",
        "-location": "items",
        "-id": "weapon_mp1_100x100",
        "-hash": "529a4b83b608703bead847c9c440c300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-2_30x30",
        "-location": "items_drone",
        "-id": "apis-2_30x30",
        "-hash": "dbc0d478691de052745cf612593e0100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-2_63x63",
        "-location": "items_drone",
        "-id": "apis-2_63x63",
        "-hash": "6e5545393ae996b3d88176e082881f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "vengeance_63x63",
        "-location": "items_ship",
        "-id": "vengeance_63x63",
        "-hash": "b86c7e3fdd307579155116788782c100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_aim-01_100x100",
        "-location": "items",
        "-id": "cpu_aim-01_100x100",
        "-hash": "ba7b552114168eb41cf178061e640d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ucb-100_63x63",
        "-location": "items_ammunition_laser",
        "-id": "ucb-100_63x63",
        "-hash": "ae0e01beae2df1545d25728995151200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cl04k-xs_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "cl04k-xs_63x63",
        "-hash": "4a89f361f6c950d480ffe842166e4d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sle-04_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "sle-04_63x63",
        "-hash": "33d7086513c36d8f5d70660993f70800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3x-crgo-x_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "g3x-crgo-x_30x30",
        "-hash": "a65e0a5ff26274b490f9980a2ee9d900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "eco-10_30x30",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "eco-10_30x30",
        "-hash": "a6bb8b0876c9563f87e928b0da2bd600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_d-sa-01_100x100",
        "-location": "items",
        "-id": "design_d-sa-01_100x100",
        "-hash": "ca01b887ffa464f1c21c731d99f9e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-e1_100x100",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-e1_100x100",
        "-hash": "c3bf86bd2483382e8422e0e3d153a900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-5_63x63",
        "-location": "items_drone",
        "-id": "flax-5_63x63",
        "-hash": "6b36275da5cb21f5011c7a678f1e7000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "xenomit_30x30",
        "-location": "items_resource_ore",
        "-id": "xenomit_30x30",
        "-hash": "d10e834af73134303743011556568a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mcb-25_100x100",
        "-location": "items_ammunition_laser",
        "-id": "mcb-25_100x100",
        "-hash": "fa407a1644e0563e5138b0499c682100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "exalted_top",
        "-location": "items_ship_goliath_design",
        "-id": "exalted_top",
        "-hash": "fa46264bde239ff63b9313cd3f954c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "diminisher_top",
        "-location": "items_ship_goliath_design",
        "-id": "diminisher_top",
        "-hash": "7d00aa39cd2b1944649100c408887400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-4_100x100",
        "-location": "items_drone",
        "-id": "apis-4_100x100",
        "-hash": "49a3126a4903f48a7f96cf64c7b6bf00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "centaur_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "centaur_63x63",
        "-hash": "221adffb5225534383e4047e8f974c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "dmg-b01_30x30",
        "-location": "items_equipment_booster",
        "-id": "dmg-b01_30x30",
        "-hash": "ded2fa76d2fe23377232650eb8a9bc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "plt-3030_30x30",
        "-location": "items_ammunition_rocket",
        "-id": "plt-3030_30x30",
        "-hash": "f74083184d618e864737f9d02d88cc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_g3x-crgo-x_100x100",
        "-location": "items",
        "-id": "cpu_g3x-crgo-x_100x100",
        "-hash": "a57dd4c8fd3511b91d46e9b0e0c0f500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-al1_63x63",
        "-location": "items_equipment_petgear",
        "-id": "g-al1_63x63",
        "-hash": "16ac6c270f7ed589252111058b50cb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_g-rl1_100x100",
        "-location": "items",
        "-id": "pet_protocol_g-rl1_100x100",
        "-hash": "88fa481896e582e0f09faf9c2e733c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-4_top",
        "-location": "items_pet",
        "-id": "pet10-4_top",
        "-hash": "6781ce11fae9617949f24f1c353e9300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "corsair_30x30",
        "-location": "items_ship_vengeance_design",
        "-id": "corsair_30x30",
        "-hash": "850d5c29573990dfac9dd49f30b75700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rb-x_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "rb-x_100x100",
        "-hash": "a0c408176a8fa5c7dd6f6a004164a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sentinel_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "sentinel_63x63",
        "-hash": "83c788413d184255f3d91222b55ff400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sle-04_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "sle-04_30x30",
        "-hash": "1a05e234c920672ee54f9c303e9df300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "fwx-m_100x100",
        "-location": "items_ammunition_firework",
        "-id": "fwx-m_100x100",
        "-hash": "8498a18b64bf5f7708d43735470f8900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hstrm-01_30x30",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "hstrm-01_30x30",
        "-hash": "806ebd3b5a8e565af5a30e382af05100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "spearhead-eic_top",
        "-location": "items_ship",
        "-id": "spearhead-eic_top",
        "-hash": "1fcc49ae3a3a315f7253654d2eb11600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_alb-x_100x100",
        "-location": "items",
        "-id": "cpu_alb-x_100x100",
        "-hash": "defdbacf85a97a479737de7d99677c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-1_100x100",
        "-location": "items_drone",
        "-id": "flax-1_100x100",
        "-hash": "ab3b1a2621ccbd2c1db4f48bb61dbb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hp-b01_100x100",
        "-location": "items_equipment_booster",
        "-id": "hp-b01_100x100",
        "-hash": "33bff4aa0db046adf001b3bbf68a4e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "havoc-5_30x30",
        "-location": "items_drone_designs",
        "-id": "havoc-5_30x30",
        "-hash": "6e16da5f146db3d66aa2bb78849eba00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mine_slm-01_100x100",
        "-location": "items",
        "-id": "mine_slm-01_100x100",
        "-hash": "423a7429701436f742babda30b43bc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-4_top",
        "-location": "items_drone",
        "-id": "iris-4_top",
        "-hash": "e65761d42de94f1eeaa0c30e29d88e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "arol-x_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "arol-x_63x63",
        "-hash": "ac60d633a4eba6f094d4744ece618200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-05-pi_30x30",
        "-location": "items_drone_formation",
        "-id": "f-05-pi_30x30",
        "-hash": "d401ca33935ada050c68c42f4b064600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-5_top",
        "-location": "items_drone",
        "-id": "flax-5_top",
        "-hash": "409fbfcc3cbc34dee4e1cb5b6ee94600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_sd-sp-01_100x100",
        "-location": "items",
        "-id": "design_sd-sp-01_100x100",
        "-hash": "b6ea502b27f383fe167359e56958c200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sar-02_63x63",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "sar-02_63x63",
        "-hash": "2ffb6474019b25ee050b23c598ea4f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_rok-t01_100x100",
        "-location": "items",
        "-id": "cpu_rok-t01_100x100",
        "-hash": "b8510004a941c92022b4b717a538ef00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "amber_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "amber_63x63",
        "-hash": "ec7f1aa0b74835d9c0ffa4082525f900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_res-b01_100x100",
        "-location": "items",
        "-id": "booster_res-b01_100x100",
        "-hash": "577f2d441bcc710387f87c74237a9700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_cl04k-m_100x100",
        "-location": "items",
        "-id": "cpu_cl04k-m_100x100",
        "-hash": "44ceb70cb4a7cfd94ec4b75708208a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "duranium_30x30",
        "-location": "items_resource_ore",
        "-id": "duranium_30x30",
        "-hash": "6bb6f068deff7b4d7f311e82cda5f600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booty-key-red_63x63",
        "-location": "items_resource",
        "-id": "booty-key-red_63x63",
        "-hash": "8815ffc124bb4a519e14370296bcec00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "shg-01_63x63",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "shg-01_63x63",
        "-hash": "ca59d6dda55560a51aab987288bc3c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "shipempty_63x63",
        "-location": "items_ship",
        "-id": "shipempty_63x63",
        "-hash": "2f130ddafef10f75fa3cfc8444b0500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-lm1_30x30",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-lm1_30x30",
        "-hash": "7cfdaa6b1f5690e1349c1fcbe635d500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sg3n-b01_30x30",
        "-location": "items_equipment_generator_shield",
        "-id": "sg3n-b01_30x30",
        "-hash": "e46db23c78d55f3cea22b36a7942e600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-1_30x30",
        "-location": "items_drone",
        "-id": "zeus-1_30x30",
        "-hash": "22f7f8fed694c8d07adb9436c8d2c100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "fwx-s_30x30",
        "-location": "items_ammunition_firework",
        "-id": "fwx-s_30x30",
        "-hash": "f31d766e4172ea7da1d2da8691733200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "fuel-100_30x30",
        "-location": "items_pet",
        "-id": "fuel-100_30x30",
        "-hash": "97d432601b2b9ee2b10a8998304db600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-1_top",
        "-location": "items_drone",
        "-id": "zeus-1_top",
        "-hash": "a0c763c62dabf732468815243b06ca00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booty-key-blue_63x63",
        "-location": "items_resource",
        "-id": "booty-key-blue_63x63",
        "-hash": "672fcc1ec8ecd2bbdfa915b2d3d61a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-5_100x100",
        "-location": "items_drone",
        "-id": "iris-5_100x100",
        "-hash": "915c51fde19ca5d0c4878221ae305f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "res-b02_100x100",
        "-location": "items_equipment_booster",
        "-id": "res-b02_100x100",
        "-hash": "3a4cb9141ef6bec35854f7c8b7070a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "goliath_100x100",
        "-location": "items_ship",
        "-id": "goliath_100x100",
        "-hash": "5fcdb83e69b401d92cc1ae6abb172300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "kick_top",
        "-location": "items_ship_goliath_design",
        "-id": "kick_top",
        "-hash": "e118a7072e8c8907e5e493d7f5f0b200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "amber_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "amber_100x100",
        "-hash": "12a14d507f20dfab1d65f33eff38900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "independence_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "independence_30x30",
        "-hash": "4eb59f6195aeedf3d4733149c1089500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_protocol_g-el1_100x100",
        "-location": "items",
        "-id": "pet_protocol_g-el1_100x100",
        "-hash": "a5f04938b89d5877db41c2b273346c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_fuel_fuel-100_100x100",
        "-location": "items",
        "-id": "pet_fuel_fuel-100_100x100",
        "-hash": "25f322a4bb44053d71359c91523f5700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "solace_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "solace_30x30",
        "-hash": "c8ac358b4f8ea162b42f56ba05421d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lf-2_63x63",
        "-location": "items_equipment_weapon_laser",
        "-id": "lf-2_63x63",
        "-hash": "cbf50911027835ffa8e9f190e42e7e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "jade_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "jade_100x100",
        "-hash": "818e123d12a61938bfeebebd65bc3600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "dr-01_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "dr-01_30x30",
        "-hash": "71ac401223c8dcfe83cec0582d42bf00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-part_30x30",
        "-location": "items_resource_blueprint",
        "-id": "apis-part_30x30",
        "-hash": "9dc8a706550809bf37253db69962b400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3n-1010_63x63",
        "-location": "items_equipment_generator_speed",
        "-id": "g3n-1010_63x63",
        "-hash": "c1836b133fef276221ded016d6fe8800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-eco1_30x30",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-eco1_30x30",
        "-hash": "3b590f6bfa9f48202a61cc6ff236fc00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cbo-100_63x63",
        "-location": "items_ammunition_laser",
        "-id": "cbo-100_63x63",
        "-hash": "832dc957ba163cef756386d74c7ad300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet10-8_top",
        "-location": "items_pet",
        "-id": "pet10-8_top",
        "-hash": "18e0984a49aab4105a3aaaa22a70900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-ex1_100x100",
        "-location": "items_equipment_petgear",
        "-id": "g-ex1_100x100",
        "-hash": "6b551e6c7762a5cdc2a93d2856b9a100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-rep1_30x30",
        "-location": "items_equipment_petgear",
        "-id": "g-rep1_30x30",
        "-hash": "43945a993e025e65d07aa6f122368200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "yamato_top",
        "-location": "items_ship",
        "-id": "yamato_top",
        "-hash": "d12641e622d8655aae4a22f816da8f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-08-ch_63x63",
        "-location": "items_drone_formation",
        "-id": "f-08-ch_63x63",
        "-hash": "68e9483930556ba9b5b4986433e56a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "avenger_top",
        "-location": "items_ship_vengeance_design",
        "-id": "avenger_top",
        "-hash": "bde08168336c7523c25ba94208e3a300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "revenge_top",
        "-location": "items_ship_vengeance_design",
        "-id": "revenge_top",
        "-hash": "4f2d6ec23ff806621056c9e8e8723a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cbr_30x30",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "cbr_30x30",
        "-hash": "b10e1faead68930ee8f6a4f3c20d1700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sab-50_30x30",
        "-location": "items_ammunition_laser",
        "-id": "sab-50_30x30",
        "-hash": "951e7ce7907a737f2c94d5cda23cfd00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-part_30x30",
        "-location": "items_resource_blueprint",
        "-id": "zeus-part_30x30",
        "-hash": "eeded406a696ccb581cb1b142f5fde00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "empm-01_100x100",
        "-location": "items_ammunition_mine",
        "-id": "empm-01_100x100",
        "-hash": "38b506ca821f324b01415507d2df3900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "slm-01_30x30",
        "-location": "items_ammunition_mine",
        "-id": "slm-01_30x30",
        "-hash": "6e41e6ce998b8a3bb07ca1190d1deb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cbo-100_100x100",
        "-location": "items_ammunition_laser",
        "-id": "cbo-100_100x100",
        "-hash": "ebfb7a43a0b8ae1a28ca3a20588b8600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "corsair_63x63",
        "-location": "items_ship_vengeance_design",
        "-id": "corsair_63x63",
        "-hash": "53bc801fa8ce31198f62fee89f0eb900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_sle-04_100x100",
        "-location": "items",
        "-id": "cpu_sle-04_100x100",
        "-hash": "a3ffb9a9f684dce13deec9c00df25d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hon-b02_100x100",
        "-location": "items_equipment_booster",
        "-id": "hon-b02_100x100",
        "-hash": "f44c7692a0880871d9449919e235d600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "weapon_lf1_100x100",
        "-location": "items",
        "-id": "weapon_lf1_100x100",
        "-hash": "55abda21f89891ab193e6913fd4c4000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-04-st_30x30",
        "-location": "items_drone_formation",
        "-id": "f-04-st_30x30",
        "-hash": "4687c81a4040b7f81abe044de0fd6e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "nc-agb-x_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "nc-agb-x_63x63",
        "-hash": "8f667662bd9a919ccd1829c0da10b700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-ar1_63x63",
        "-location": "items_equipment_petgear",
        "-id": "g-ar1_63x63",
        "-hash": "ed674c42f1cf9bf5c833f8785bc66e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "piranha_top",
        "-location": "items_ship",
        "-id": "piranha_top",
        "-hash": "4590700ffd12fc189ec94ff492d1e300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "spearhead-mmo_63x63",
        "-location": "items_ship",
        "-id": "spearhead-mmo_63x63",
        "-hash": "ffb85c27ec6f831554ec317c036fe900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "goliath_63x63",
        "-location": "items_ship",
        "-id": "goliath_63x63",
        "-hash": "c6c8a09a4749af691b6a9947cf2c6900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "enforcer_top",
        "-location": "items_ship_goliath_design",
        "-id": "enforcer_top",
        "-hash": "aa24e60e333abc872ffe39b171b41200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_fb-x_100x100",
        "-location": "items",
        "-id": "cpu_fb-x_100x100",
        "-hash": "e06d39c29ea36fb5e9327bd606e95200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "gif",
        "-name": "design_d-tri_100x100",
        "-location": "items",
        "-id": "design_d-tri_100x100",
        "-hash": "445f1738a4d4dff79fd2e3fb7dfbe00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "liberator-default_top",
        "-location": "items_ship_model",
        "-id": "liberator-default_top",
        "-hash": "4d48488a8ca0d9946c12ab1241d46c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-0_63x63",
        "-location": "items_drone",
        "-id": "apis-0_63x63",
        "-hash": "4cc2e5f6780d0a710d0c537d29551500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_vengeance_100x100",
        "-location": "items",
        "-id": "ship_vengeance_100x100",
        "-hash": "ddf859cc09cdd3f64bcfa9adcff1ef00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_sreg-b02_100x100",
        "-location": "items",
        "-id": "booster_sreg-b02_100x100",
        "-hash": "2c18bcff3eee30f4c973116ab316f800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-4_100x100",
        "-location": "items_equipment_extra_repbot",
        "-id": "rep-4_100x100",
        "-hash": "f319657ad942b61c8863b6492de48e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_d-ve-01_100x100",
        "-location": "items",
        "-id": "design_d-ve-01_100x100",
        "-hash": "6231d592a318a2f918228ce17b931e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_nc-awb-x_100x100",
        "-location": "items",
        "-id": "cpu_nc-awb-x_100x100",
        "-hash": "c6089ef3c9e35c9740340225e81d7200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rb-e01_30x30",
        "-location": "items_ammunition_mine",
        "-id": "rb-e01_30x30",
        "-hash": "73f78c74fd9baf24825853f719fbd800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g3x-crgo-x_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "g3x-crgo-x_100x100",
        "-hash": "52722009436318d043bee1373878f500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sle-03_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "sle-03_63x63",
        "-hash": "5f31f312cf522e4258effcefb0022c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-04-st_63x63",
        "-location": "items_drone_formation",
        "-id": "f-04-st_63x63",
        "-hash": "841344ebe1b8bfb8068f245335e7ce00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "generator_g3n-2010_100x100",
        "-location": "items",
        "-id": "generator_g3n-2010_100x100",
        "-hash": "7a94929a608ed53b95f68acb59262600",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "apis-4_30x30",
        "-location": "items_drone",
        "-id": "apis-4_30x30",
        "-hash": "193660b268e6896e96148d21531d1f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "seprom_63x63",
        "-location": "items_resource_ore",
        "-id": "seprom_63x63",
        "-hash": "a8d0853733ebc9f36141d86c2e354900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "shd-b02_63x63",
        "-location": "items_equipment_booster",
        "-id": "shd-b02_63x63",
        "-hash": "9308b95a2e2bb17d735d5dbc7f5a3000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-4_63x63",
        "-location": "items_drone",
        "-id": "iris-4_63x63",
        "-hash": "18d7b8fbe928f1b26ae05e8cf8eab200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "police_top",
        "-location": "items_ship",
        "-id": "police_top",
        "-hash": "8eef551a4d7b222fac97eb14e59a8300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "acm-01_63x63",
        "-location": "items_ammunition_mine",
        "-id": "acm-01_63x63",
        "-hash": "84100df3c5bed4eea0af67e4c4bfd00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-cr1_100x100",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-cr1_100x100",
        "-hash": "27af412ab7843c55ac60946557fb1e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "jp-01_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "jp-01_63x63",
        "-hash": "ddf568bb7d315e635c4850c413a1d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_sd-se-01_100x100",
        "-location": "items",
        "-id": "design_sd-se-01_100x100",
        "-hash": "f446dcc34209c2584cca8387a5e90b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-07-di_30x30",
        "-location": "items_drone_formation",
        "-id": "f-07-di_30x30",
        "-hash": "fc3caac572c57e21867b120bf313ab00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "xp-b02_100x100",
        "-location": "items_equipment_booster",
        "-id": "xp-b02_100x100",
        "-hash": "4e837365e6d6cc8716772d0d77847200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-lm1_63x63",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-lm1_63x63",
        "-hash": "8570b4d46b5bbec7eb78f3e2f0869800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_spearhead-vru_100x100",
        "-location": "items",
        "-id": "ship_spearhead-vru_100x100",
        "-hash": "a5c5e904c1c330b838a7b37f6dbbd500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "adept_63x63",
        "-location": "items_ship_vengeance_design",
        "-id": "adept_63x63",
        "-hash": "25a119d1a7577671039686e5b2137c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "shg-02_100x100",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "shg-02_100x100",
        "-hash": "ae5e512dfa7cb9448d5b846e969a4f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_sreg-b01_100x100",
        "-location": "items",
        "-id": "booster_sreg-b01_100x100",
        "-hash": "c35ebd4e97ee5e41d68a4cb7cd8ca400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-2_100x100",
        "-location": "items_drone",
        "-id": "iris-2_100x100",
        "-hash": "e0dbd77afe0b998abb1be914ff0ca800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "jade_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "jade_63x63",
        "-hash": "ad668440af64e92129c2a086a7b98a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "kick_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "kick_63x63",
        "-hash": "7bda5d3c248edbf2319ab5776c6ced00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "jp-02_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "jp-02_63x63",
        "-hash": "71448635257c7a2f48dab8bc67a3be00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sg3n-a03_100x100",
        "-location": "items_equipment_generator_shield",
        "-id": "sg3n-a03_100x100",
        "-hash": "e1b79125e9f9c2fdb8711d3cb7774c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hmd-07_63x63",
        "-location": "items_equipment_extra",
        "-id": "hmd-07_63x63",
        "-hash": "4dfcc90a5f2eaba7353fabadc4c0200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "centaur_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "centaur_30x30",
        "-hash": "ccf58011657784838ce3f78297e12200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "dmg-b02_63x63",
        "-location": "items_equipment_booster",
        "-id": "dmg-b02_63x63",
        "-hash": "b2b47f42c82519c52ebecd3e5a8a4c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_hmd-07_100x100",
        "-location": "items",
        "-id": "drone_hmd-07_100x100",
        "-hash": "13dee6dcb1f39fc812db55e2db0ec800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "aim-02_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "aim-02_100x100",
        "-hash": "b8d5a02cf8bd3f5080007615048d0d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_hp-b01_100x100",
        "-location": "items",
        "-id": "booster_hp-b01_100x100",
        "-hash": "8a7bb216cbff9eab0963433590d1e400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_upgrade_g-hp1_100x100",
        "-location": "items",
        "-id": "pet_upgrade_g-hp1_100x100",
        "-hash": "6f8f6d2b6a20724e9082cb0ee8778c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-3_30x30",
        "-location": "items_drone",
        "-id": "flax-3_30x30",
        "-hash": "b4d7617b2328bd26a878ba534a822500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rb-e01_100x100",
        "-location": "items_ammunition_mine",
        "-id": "rb-e01_100x100",
        "-hash": "ad5cac8e306177020e77861d27ef3a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sle-03_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "sle-03_100x100",
        "-hash": "4676fbf3832998139092e35c0b6e8000",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sg3n-a03_30x30",
        "-location": "items_equipment_generator_shield",
        "-id": "sg3n-a03_30x30",
        "-hash": "f4d2d254f93608126c7db06a85de0800",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "bastion_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "bastion_63x63",
        "-hash": "80981e18bb9a5ca616833d5c7ee05c00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "solace_63x63",
        "-location": "items_ship_goliath_design",
        "-id": "solace_63x63",
        "-hash": "7e579597ee5b6fd540112b5733634400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rocket_pld-8_100x100",
        "-location": "items",
        "-id": "rocket_pld-8_100x100",
        "-hash": "840b0ee5b4313c4f6e4e6cb334043d00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "design_d-ad-01_100x100",
        "-location": "items",
        "-id": "design_d-ad-01_100x100",
        "-hash": "70e087e02264296ae8a18b13c9421100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "pet_deal_100x100",
        "-location": "items",
        "-id": "pet_deal_100x100",
        "-hash": "90f11592333ba5941d7d040cceb3a500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "emp-01_63x63",
        "-location": "items_ammunition_specialammo",
        "-id": "emp-01_63x63",
        "-hash": "9de00cb647c1a6a934f6a65f25168500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "endurium_63x63",
        "-location": "items_resource_ore",
        "-id": "endurium_63x63",
        "-hash": "458fc20aa365cf46032ec748fa143500",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_aegis-vru_100x100",
        "-location": "items",
        "-id": "ship_aegis-vru_100x100",
        "-hash": "70e9502d54588a2a852e70846adb3f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "dr-01_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "dr-01_63x63",
        "-hash": "30f24a22fb123ab3409edbaae0c3b700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rllb-x_63x63",
        "-location": "items_equipment_extra_cpu",
        "-id": "rllb-x_63x63",
        "-hash": "f86e532f0605f1befc3efab402dfbd00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-0_top",
        "-location": "items_drone",
        "-id": "iris-0_top",
        "-hash": "79b048a4b8e05add7a2245ebe95d5e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "zeus-4_top",
        "-location": "items_drone",
        "-id": "zeus-4_top",
        "-hash": "40d36e3b57514a902072885b57b1ae00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-3_63x63",
        "-location": "items_drone",
        "-id": "iris-3_63x63",
        "-hash": "dd3a4359bfadba07d03989ec042b5e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "citadel-mmo_63x63",
        "-location": "items_ship",
        "-id": "citadel-mmo_63x63",
        "-hash": "674d1ff3a2a6be1a95a4797cffa4d300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ucb-100_30x30",
        "-location": "items_ammunition_laser",
        "-id": "ucb-100_30x30",
        "-hash": "2e499cee32127be3df4cf200e1c73b00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "wiz-x_63x63",
        "-location": "items_ammunition_specialammo",
        "-id": "wiz-x_63x63",
        "-hash": "c358781d73d4ae07256403bf543ea400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "firework_fwx-l_100x100",
        "-location": "items",
        "-id": "firework_fwx-l_100x100",
        "-hash": "5385efe3beb94909b26f4f127646e200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "iris-4_100x100",
        "-location": "items_drone",
        "-id": "iris-4_100x100",
        "-hash": "227efd2ca7b8749575885abd3d33e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "mine_acm-01_100x100",
        "-location": "items",
        "-id": "mine_acm-01_100x100",
        "-hash": "7111672f8762e1eb473248272678ea00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cl04k-xl_100x100",
        "-location": "items_equipment_extra_cpu",
        "-id": "cl04k-xl_100x100",
        "-hash": "5378f0fbbdf4e36ee572672a89967e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "bdr-1211_100x100",
        "-location": "items_ammunition_rocket",
        "-id": "bdr-1211_100x100",
        "-hash": "36722fa5af808de5a0af0e640ab1a100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "jade_top",
        "-location": "items_ship_goliath_design",
        "-id": "jade_top",
        "-hash": "812a9b8eac5ba9c6a7e522c5b6ff5a00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-s1_63x63",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-s1_63x63",
        "-hash": "2f662e021563fc607ea4b20838458100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_cl04k-xs_100x100",
        "-location": "items",
        "-id": "cpu_cl04k-xs_100x100",
        "-hash": "5579d611e2f505fd3317a4ee4e70ee00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "sentinel_100x100",
        "-location": "items_ship_goliath_design",
        "-id": "sentinel_100x100",
        "-hash": "f34f8253592a74a52c37bf4962a3d100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "shd-b01_63x63",
        "-location": "items_equipment_booster",
        "-id": "shd-b01_63x63",
        "-hash": "a1ba5217e40783c6fa2f0ef01e67be00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "drone_apis-1_100x100",
        "-location": "items",
        "-id": "drone_apis-1_100x100",
        "-hash": "b8a0037a61ed96bd3049a49698510700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ai-eco1_63x63",
        "-location": "items_equipment_aiprotocol",
        "-id": "ai-eco1_63x63",
        "-hash": "f3221170727abd2cd60e22a3340b3200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rep-b01_30x30",
        "-location": "items_equipment_booster",
        "-id": "rep-b01_30x30",
        "-hash": "ee106e1ff4f967fca12e286a0e699f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "resource_bk-100_100x100",
        "-location": "items",
        "-id": "resource_bk-100_100x100",
        "-hash": "ef618aff20a6e2bcc88d806284cfcb00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-0_100x100",
        "-location": "items_drone",
        "-id": "flax-0_100x100",
        "-hash": "38bea08f983fa9f8ff1e26735d970300",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "lcb-10_100x100",
        "-location": "items_ammunition_laser",
        "-id": "lcb-10_100x100",
        "-hash": "d8db5c48fe907c65a74b77b7206a5e00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "ship_pack-trinity-vru_100x100",
        "-location": "items",
        "-id": "ship_pack-trinity-vru_100x100",
        "-hash": "f81ff1d8603d72beb2596feb198dbd00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "rsb-75_30x30",
        "-location": "items_ammunition_laser",
        "-id": "rsb-75_30x30",
        "-hash": "12c893d480540c5fc1279664048b4100",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "f-03-la_30x30",
        "-location": "items_drone_formation",
        "-id": "f-03-la_30x30",
        "-hash": "19caa6e180886a14fa61bb12772f4200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "booster_cd-b02_100x100",
        "-location": "items",
        "-id": "booster_cd-b02_100x100",
        "-hash": "99c0ed15655fda3859921a4a9709c200",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "flax-2_63x63",
        "-location": "items_drone",
        "-id": "flax-2_63x63",
        "-hash": "4b771ddf5635c65836287e3c59641f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "bdr-1211_30x30",
        "-location": "items_ammunition_rocket",
        "-id": "bdr-1211_30x30",
        "-hash": "31e5be8b86058dfd9dee1c19ecf64900",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "g-kk1_63x63",
        "-location": "items_equipment_petgear",
        "-id": "g-kk1_63x63",
        "-hash": "351761b8252c9449fddc5139abd7f00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "cpu_jp-01_100x100",
        "-location": "items",
        "-id": "cpu_jp-01_100x100",
        "-hash": "f39a6876287a428f21a0b84eeb16fa00",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "arol-x_30x30",
        "-location": "items_equipment_extra_cpu",
        "-id": "arol-x_30x30",
        "-hash": "75c5dc20096b5056351b29efd6ceb700",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "veteran_30x30",
        "-location": "items_ship_goliath_design",
        "-id": "veteran_30x30",
        "-hash": "9d6eabcab5911bfc2c4a2d56676ce400",
        "-debugView": "false"
      },
      {
        "-version": "1",
        "-type": "png",
        "-name": "hstrm-01_100x100",
        "-location": "items_ammunition_rocketlauncher",
        "-id": "hstrm-01_100x100",
        "-hash": "be2503f2e93334f320dce9156363fc00",
        "-debugView": "false"
      }
    ]
  }
}';

$itemstest = '{
    "isError": 0,
    "data": {
        "ret": {
            "filters": {
                "weapons": [
                    0,
                    1,
                    2
                ],
                "generators": [
                    3,
                    4,
                    5
                ],
                "extras": [
                    6,
                    7,
                    8,
                    9,
                    10,
                    11
                ],
                "ammunition": [
                    12,
                    13,
                    14
                ],
                "resources": [
                    15
                ],
                "drone_related": [
                    16,
                    17
                ],
                "modules": [
                    18
                ],
                "pet_related": [
                    19,
                    20
                ]
            },
            "hangars": [
                {
                    "hangarID": "12421",
                    "name": "ONLYT64",
                    "hangar_is_active": true,
                    "hangar_is_selected": true,
                    "general": {
                        "ship": {
                            "I": 10,
                            "HP": "336600",
                            "L": 0,
                            "SM": "ship_goliath_design_sentinel",
                            "M": [
                                "ship_goliath_design_crimson",
                                "ship_goliath_design_exalted",
                                "ship_goliath_design_veteran",
                                "ship_goliath_design_enforcer",
                                "ship_goliath_design_bastion",
                                "ship_goliath_design_sentinel",
                                "ship_goliath"
                            ]
                        },
                        "pet": {
                            "I": "111403837",
                            "HP": "0",
                            "LV": 8,
                            "PN": "Artifact",
                            "L": 1,
                            "lockedSlots": {
                                "lasers": 4,
                                "generators": 8,
                                "gears": 3,
                                "protocols": 4
                            }
                        },
                        "drones": [
                            {
                                "I": "586127",
                                "L": 2,
                                "LV": 5,
                                "HP": "33%",
                                "EF": "10%/20%",
                                "SP": 25000,
                                "DE": "",
                                "DL": 1,
                                "SL": 1,
                                "repair": 500,
                                "currency": "uridium"
                            },
                            {
                                "I": "586156",
                                "L": 2,
                                "LV": 5,
                                "HP": "33%",
                                "EF": "10%/20%",
                                "SP": 40000,
                                "DE": "",
                                "DL": 1,
                                "SL": 1,
                                "repair": 500,
                                "currency": "uridium"
                            },
                            {
                                "I": "586401",
                                "L": 2,
                                "LV": 5,
                                "HP": "32%",
                                "EF": "10%/20%",
                                "SP": 71750,
                                "DE": "drone_designs_havoc",
                                "DL": 2,
                                "SL": 2,
                                "repair": 500,
                                "currency": "uridium"
                            },
                            {
                                "I": "586778",
                                "L": 2,
                                "LV": 5,
                                "HP": "32%",
                                "EF": "10%/20%",
                                "SP": 102500,
                                "DE": "",
                                "DL": 1,
                                "SL": 1,
                                "repair": 500,
                                "currency": "uridium"
                            },
                            {
                                "I": "586789",
                                "L": 2,
                                "LV": 5,
                                "HP": "32%",
                                "EF": "10%/20%",
                                "SP": 143500,
                                "DE": "drone_designs_havoc",
                                "DL": 2,
                                "SL": 2,
                                "repair": 500,
                                "currency": "uridium"
                            },
                            {
                                "I": "587522",
                                "L": 2,
                                "LV": 4,
                                "HP": "2%",
                                "EF": "8%/16%",
                                "SP": 236000,
                                "DE": "drone_designs_hercules",
                                "DL": 2,
                                "SL": 2,
                                "repair": 500,
                                "currency": "uridium"
                            },
                            {
                                "I": "587551",
                                "L": 2,
                                "LV": 4,
                                "HP": "2%",
                                "EF": "8%/16%",
                                "SP": 309750,
                                "DE": "",
                                "DL": 2,
                                "SL": 2,
                                "repair": 500,
                                "currency": "uridium"
                            },
                            {
                                "I": "587832",
                                "L": 2,
                                "LV": 4,
                                "HP": "2%",
                                "EF": "8%/16%",
                                "SP": 491667,
                                "DE": "",
                                "DL": 2,
                                "SL": 2,
                                "repair": 500,
                                "currency": "uridium"
                            }
                        ]
                    },
                    "config": {
                        "1": {
                            "ship": {
                                "EQ": {
                                    "lasers": [
                                        "2635614",
                                        "3714526",
                                        "3677607",
                                        "3677608",
                                        "4682199",
                                        "4700303",
                                        "4698582",
                                        "4683764",
                                        "4683763",
                                        "4682913",
                                        "4682914",
                                        "4682910",
                                        "4682912",
                                        "4698583"
                                    ],
                                    "generators": [
                                        "2635610",
                                        "3672884",
                                        "3672885",
                                        "3672886",
                                        "3672887",
                                        "3672888",
                                        "3672889",
                                        "3672890",
                                        "3672891",
                                        "3672892",
                                        "3672893",
                                        "3672894",
                                        "3672895",
                                        "3672896",
                                        "3672897"
                                    ],
                                    "heavy_guns": [
                                        "4682241"
                                    ],
                                    "extras": [
                                        "3851634",
                                        "3859146",
                                        "4682247",
                                        "4682234",
                                        "4682246",
                                        "3859147",
                                        "4682690",
                                        "2635550",
                                        "3845823",
                                        "4682237",
                                        "4682232",
                                        "4682240",
                                        "4729701"
                                    ]
                                }
                            },
                            "drones": {
                                "586127": {
                                    "EQ": {
                                        "default": [
                                            "4722529",
                                            "4723002"
                                        ]
                                    }
                                },
                                "586156": {
                                    "EQ": {
                                        "default": [
                                            "4698630",
                                            "4698631"
                                        ]
                                    }
                                },
                                "586401": {
                                    "EQ": {
                                        "default": [
                                            "4698629",
                                            "4698616"
                                        ]
                                    }
                                },
                                "586778": {
                                    "EQ": {
                                        "default": [
                                            "3703944",
                                            "3714525"
                                        ]
                                    }
                                },
                                "586789": {
                                    "EQ": {
                                        "default": [
                                            "4682972",
                                            "4682971"
                                        ],
                                        "design": [
                                            "4712511"
                                        ]
                                    }
                                },
                                "587522": {
                                    "EQ": {
                                        "default": [
                                            "4698615",
                                            "4682973"
                                        ]
                                    }
                                },
                                "587551": {
                                    "EQ": {
                                        "default": [
                                            "3723248",
                                            "3719466"
                                        ]
                                    }
                                },
                                "587832": {
                                    "EQ": {
                                        "default": [
                                            "4722444",
                                            "4722775"
                                        ]
                                    }
                                }
                            },
                            "pet": {
                                "EQ": {
                                    "gears": [
                                        "4736588",
                                        "4754288"
                                    ],
                                    "protocols": [
                                        "4689814",
                                        "4689812",
                                        "4689811",
                                        "4689813",
                                        "4689815",
                                        "4689816"
                                    ]
                                }
                            }
                        },
                        "2": {
                            "ship": {
                                "EQ": {
                                    "lasers": [
                                        "3714526",
                                        "4727817",
                                        "4726979",
                                        "4723676",
                                        "4723131",
                                        "4723159",
                                        "4726944",
                                        "4700305",
                                        "4701030",
                                        "4722894",
                                        "4722776",
                                        "4722528",
                                        "4724090",
                                        "4724091",
                                        "4727691"
                                    ],
                                    "generators": [
                                        "3714525",
                                        "3703944",
                                        "3719466",
                                        "3723248",
                                        "4722775",
                                        "4722444",
                                        "4698629",
                                        "4698616",
                                        "4698630",
                                        "4698615",
                                        "4698631",
                                        "4722529",
                                        "4682971",
                                        "4682972",
                                        "4682973"
                                    ],
                                    "heavy_guns": [
                                        "4682241"
                                    ],
                                    "extras": [
                                        "3851634",
                                        "2635550",
                                        "3859146",
                                        "4682246",
                                        "4682234",
                                        "4682247",
                                        "3845823",
                                        "4682232",
                                        "4682237",
                                        "3859147",
                                        "4682240",
                                        "4682999",
                                        "4729701"
                                    ]
                                }
                            },
                            "drones": {
                                "586127": {
                                    "EQ": {
                                        "default": [
                                            "3677608",
                                            "3677607"
                                        ]
                                    }
                                },
                                "586156": {
                                    "EQ": {
                                        "default": [
                                            "4682910",
                                            "4682199"
                                        ]
                                    }
                                },
                                "586401": {
                                    "EQ": {
                                        "default": [
                                            "4763360",
                                            "4683763"
                                        ],
                                        "design": [
                                            "4762526"
                                        ]
                                    }
                                },
                                "586778": {
                                    "EQ": {
                                        "default": [
                                            "4682912",
                                            "4682911"
                                        ]
                                    }
                                },
                                "586789": {
                                    "EQ": {
                                        "default": [
                                            "4682914",
                                            "2635614"
                                        ],
                                        "design": [
                                            "4712511"
                                        ]
                                    }
                                },
                                "587522": {
                                    "EQ": {
                                        "default": [
                                            "4698582",
                                            "4682913"
                                        ],
                                        "design": [
                                            "4740204"
                                        ]
                                    }
                                },
                                "587551": {
                                    "EQ": {
                                        "default": [
                                            "4700304",
                                            "4700303"
                                        ]
                                    }
                                },
                                "587832": {
                                    "EQ": {
                                        "default": [
                                            "4698583",
                                            "4722443"
                                        ]
                                    }
                                }
                            },
                            "pet": {
                                "EQ": {
                                    "generators": [
                                        "2943815"
                                    ],
                                    "gears": [
                                        "4736588",
                                        "4754288"
                                    ],
                                    "protocols": [
                                        "4689814",
                                        "4689815",
                                        "4689812",
                                        "4689811",
                                        "4689813",
                                        "4689816"
                                    ]
                                }
                            }
                        }
                    }
                },
                {
                    "hangarID": "79066",
                    "name": "",
                    "hangar_is_active": false,
                    "hangar_is_selected": false,
                    "general": {
                        "ship": {
                            "I": 7,
                            "HP": "120000",
                            "L": 3,
                            "SM": "ship_nostromo",
                            "M": [
                                "ship_nostromo"
                            ]
                        },
                        "pet": {
                            "I": "111403837",
                            "HP": "0",
                            "LV": 8,
                            "PN": "Artifact",
                            "L": 1,
                            "lockedSlots": {
                                "lasers": 4,
                                "generators": 8,
                                "gears": 3,
                                "protocols": 4
                            }
                        },
                        "drones": [
                            {
                                "I": "586127",
                                "L": 2,
                                "LV": 5,
                                "HP": "33%",
                                "EF": "10%/20%",
                                "SP": 25000,
                                "DE": "",
                                "DL": 1,
                                "SL": 1,
                                "repair": 500,
                                "currency": "uridium"
                            },
                            {
                                "I": "586156",
                                "L": 2,
                                "LV": 5,
                                "HP": "33%",
                                "EF": "10%/20%",
                                "SP": 40000,
                                "DE": "",
                                "DL": 1,
                                "SL": 1,
                                "repair": 500,
                                "currency": "uridium"
                            },
                            {
                                "I": "586401",
                                "L": 2,
                                "LV": 5,
                                "HP": "32%",
                                "EF": "10%/20%",
                                "SP": 71750,
                                "DE": "drone_designs_havoc",
                                "DL": 2,
                                "SL": 2,
                                "repair": 500,
                                "currency": "uridium"
                            },
                            {
                                "I": "586778",
                                "L": 2,
                                "LV": 5,
                                "HP": "32%",
                                "EF": "10%/20%",
                                "SP": 102500,
                                "DE": "",
                                "DL": 1,
                                "SL": 1,
                                "repair": 500,
                                "currency": "uridium"
                            },
                            {
                                "I": "586789",
                                "L": 2,
                                "LV": 5,
                                "HP": "32%",
                                "EF": "10%/20%",
                                "SP": 143500,
                                "DE": "drone_designs_havoc",
                                "DL": 2,
                                "SL": 2,
                                "repair": 500,
                                "currency": "uridium"
                            },
                            {
                                "I": "587522",
                                "L": 2,
                                "LV": 4,
                                "HP": "2%",
                                "EF": "8%/16%",
                                "SP": 236000,
                                "DE": "drone_designs_hercules",
                                "DL": 2,
                                "SL": 2,
                                "repair": 500,
                                "currency": "uridium"
                            },
                            {
                                "I": "587551",
                                "L": 2,
                                "LV": 4,
                                "HP": "2%",
                                "EF": "8%/16%",
                                "SP": 309750,
                                "DE": "",
                                "DL": 2,
                                "SL": 2,
                                "repair": 500,
                                "currency": "uridium"
                            },
                            {
                                "I": "587832",
                                "L": 2,
                                "LV": 4,
                                "HP": "2%",
                                "EF": "8%/16%",
                                "SP": 491667,
                                "DE": "",
                                "DL": 2,
                                "SL": 2,
                                "repair": 500,
                                "currency": "uridium"
                            }
                        ]
                    },
                    "config": {
                        "1": {
                            "ship": {
                                "EQ": []
                            },
                            "drones": {
                                "586127": {
                                    "EQ": []
                                },
                                "586156": {
                                    "EQ": []
                                },
                                "586401": {
                                    "EQ": []
                                },
                                "586778": {
                                    "EQ": []
                                },
                                "586789": {
                                    "EQ": []
                                },
                                "587522": {
                                    "EQ": []
                                },
                                "587551": {
                                    "EQ": []
                                },
                                "587832": {
                                    "EQ": []
                                }
                            },
                            "pet": {
                                "EQ": []
                            }
                        },
                        "2": {
                            "ship": {
                                "EQ": []
                            },
                            "drones": {
                                "586127": {
                                    "EQ": []
                                },
                                "586156": {
                                    "EQ": []
                                },
                                "586401": {
                                    "EQ": []
                                },
                                "586778": {
                                    "EQ": []
                                },
                                "586789": {
                                    "EQ": []
                                },
                                "587522": {
                                    "EQ": []
                                },
                                "587551": {
                                    "EQ": []
                                },
                                "587832": {
                                    "EQ": []
                                }
                            },
                            "pet": {
                                "EQ": []
                            }
                        }
                    }
                }
            ],
            "items": [
                {
                    "I": "2635515",
                    "LV": 0,
                    "L": 4,
                    "S": 1
                },
                {
                    "I": "2635516",
                    "LV": 0,
                    "L": 5,
                    "S": 2,
                    "Q": 4179
                },
                {
                    "I": "2635520",
                    "LV": 0,
                    "L": 4,
                    "S": 6
                },
                {
                    "I": "2635521",
                    "LV": 0,
                    "L": 4,
                    "S": 7
                },
                {
                    "I": "2635522",
                    "LV": 0,
                    "L": 4,
                    "S": 8
                },
                {
                    "I": "2635523",
                    "LV": 0,
                    "L": 4,
                    "S": 9
                },
                {
                    "I": "2635524",
                    "LV": 0,
                    "L": 4,
                    "S": 10
                },
                {
                    "I": "2635525",
                    "LV": 0,
                    "L": 4,
                    "S": 11
                },
                {
                    "I": "2635526",
                    "LV": 0,
                    "L": 4,
                    "S": 12
                },
                {
                    "I": "2635527",
                    "LV": 0,
                    "L": 4,
                    "S": 13
                },
                {
                    "I": "2635528",
                    "LV": 0,
                    "L": 4,
                    "S": 14
                },
                {
                    "I": "2635529",
                    "LV": 0,
                    "L": 4,
                    "S": 15
                },
                {
                    "I": "2635530",
                    "LV": 0,
                    "L": 6,
                    "S": 16,
                    "Q": 645533
                },
                {
                    "I": "2635531",
                    "LV": 0,
                    "L": 7,
                    "S": 17,
                    "Q": 313
                },
                {
                    "I": "2635533",
                    "LV": 0,
                    "L": 8,
                    "S": 18,
                    "Q": 33
                },
                {
                    "I": "2635535",
                    "LV": 0,
                    "L": 9,
                    "S": 19,
                    "Q": 23
                },
                {
                    "I": "2635536",
                    "LV": 0,
                    "L": 10,
                    "S": 20,
                    "Q": 33
                },
                {
                    "I": "2635540",
                    "LV": 0,
                    "L": 11,
                    "S": 21
                },
                {
                    "I": "2635547",
                    "LV": 0,
                    "L": 12,
                    "S": 22
                },
                {
                    "I": "2635550",
                    "LV": 0,
                    "L": 13,
                    "S": 23
                },
                {
                    "I": "2635571",
                    "LV": 0,
                    "L": 14,
                    "S": 24,
                    "Q": 251027
                },
                {
                    "I": "2635597",
                    "LV": 0,
                    "L": 15,
                    "S": 25,
                    "Q": 7785
                },
                {
                    "I": "2635610",
                    "LV": 0,
                    "L": 16,
                    "S": 26
                },
                {
                    "I": "2635612",
                    "LV": 0,
                    "L": 17,
                    "S": 27,
                    "Q": 3200
                },
                {
                    "I": "2635614",
                    "LV": 0,
                    "L": 18,
                    "S": 28
                },
                {
                    "I": "2638449",
                    "LV": 0,
                    "L": 19,
                    "S": 30,
                    "Q": 23297
                },
                {
                    "I": "2638481",
                    "LV": 0,
                    "L": 20,
                    "S": 31,
                    "Q": 118766
                },
                {
                    "I": "2638788",
                    "LV": 0,
                    "L": 21,
                    "S": 33,
                    "Q": 4
                },
                {
                    "I": "2638789",
                    "LV": 0,
                    "L": 22,
                    "S": 34,
                    "Q": 4
                },
                {
                    "I": "2667612",
                    "LV": 0,
                    "L": 23,
                    "S": 4,
                    "Q": 886
                },
                {
                    "I": "2940868",
                    "LV": 0,
                    "L": 24,
                    "S": 40,
                    "Q": 157577
                },
                {
                    "I": "2943709",
                    "LV": 0,
                    "L": 25,
                    "S": 46
                },
                {
                    "I": "2943710",
                    "LV": 0,
                    "L": 25,
                    "S": 47
                },
                {
                    "I": "2943711",
                    "LV": 0,
                    "L": 25,
                    "S": 48
                },
                {
                    "I": "2943712",
                    "LV": 0,
                    "L": 25,
                    "S": 49
                },
                {
                    "I": "2943713",
                    "LV": 0,
                    "L": 25,
                    "S": 50
                },
                {
                    "I": "2943814",
                    "LV": 0,
                    "L": 25,
                    "S": 55
                },
                {
                    "I": "2943815",
                    "LV": 0,
                    "L": 25,
                    "S": 56
                },
                {
                    "I": "2943816",
                    "LV": 0,
                    "L": 25,
                    "S": 57
                },
                {
                    "I": "3672884",
                    "LV": 0,
                    "L": 16,
                    "S": 59
                },
                {
                    "I": "3672885",
                    "LV": 0,
                    "L": 16,
                    "S": 60
                },
                {
                    "I": "3672886",
                    "LV": 0,
                    "L": 16,
                    "S": 61
                },
                {
                    "I": "3672887",
                    "LV": 0,
                    "L": 16,
                    "S": 62
                },
                {
                    "I": "3672888",
                    "LV": 0,
                    "L": 16,
                    "S": 63
                },
                {
                    "I": "3672889",
                    "LV": 0,
                    "L": 16,
                    "S": 64
                },
                {
                    "I": "3672890",
                    "LV": 0,
                    "L": 16,
                    "S": 65
                },
                {
                    "I": "3672891",
                    "LV": 0,
                    "L": 16,
                    "S": 66
                },
                {
                    "I": "3672892",
                    "LV": 0,
                    "L": 16,
                    "S": 67
                },
                {
                    "I": "3672893",
                    "LV": 0,
                    "L": 16,
                    "S": 68
                },
                {
                    "I": "3672894",
                    "LV": 0,
                    "L": 16,
                    "S": 69
                },
                {
                    "I": "3672895",
                    "LV": 0,
                    "L": 16,
                    "S": 70
                },
                {
                    "I": "3672896",
                    "LV": 0,
                    "L": 16,
                    "S": 71
                },
                {
                    "I": "3672897",
                    "LV": 0,
                    "L": 16,
                    "S": 72
                },
                {
                    "I": "3677607",
                    "LV": 0,
                    "L": 18,
                    "S": 73
                },
                {
                    "I": "3677608",
                    "LV": 0,
                    "L": 18,
                    "S": 74
                },
                {
                    "I": "3701573",
                    "LV": 0,
                    "L": 25,
                    "S": 35
                },
                {
                    "I": "3701574",
                    "LV": 0,
                    "L": 25,
                    "S": 36
                },
                {
                    "I": "3703944",
                    "LV": 0,
                    "L": 26,
                    "S": 38
                },
                {
                    "I": "3714525",
                    "LV": 0,
                    "L": 26,
                    "S": 37
                },
                {
                    "I": "3714526",
                    "LV": 0,
                    "L": 18,
                    "S": 39
                },
                {
                    "I": "3719466",
                    "LV": 0,
                    "L": 26,
                    "S": 41
                },
                {
                    "I": "3723248",
                    "LV": 0,
                    "L": 26,
                    "S": 42
                },
                {
                    "I": "3845823",
                    "LV": 0,
                    "L": 27,
                    "S": 43,
                    "properties": {
                        "durability": 0,
                        "active": 0,
                        "attachedAmmo": "ammunition_laser_lcb-10"
                    }
                },
                {
                    "I": "3847586",
                    "LV": 0,
                    "L": 28,
                    "S": 75,
                    "Q": 22
                },
                {
                    "I": "3847591",
                    "LV": 0,
                    "L": 29,
                    "S": 76,
                    "Q": 38
                },
                {
                    "I": "3847592",
                    "LV": 0,
                    "L": 30,
                    "S": 77,
                    "Q": 240
                },
                {
                    "I": "3847603",
                    "LV": 0,
                    "L": 31,
                    "S": 78,
                    "Q": 36
                },
                {
                    "I": "3847607",
                    "LV": 0,
                    "L": 32,
                    "S": 79,
                    "Q": 351
                },
                {
                    "I": "3847697",
                    "LV": 0,
                    "L": 33,
                    "S": 80,
                    "Q": 15
                },
                {
                    "I": "3847698",
                    "LV": 0,
                    "L": 34,
                    "S": 81,
                    "Q": 520
                },
                {
                    "I": "3851634",
                    "LV": 0,
                    "L": 35,
                    "S": 44,
                    "properties": {
                        "durability": 10,
                        "active": 0
                    }
                },
                {
                    "I": "3859146",
                    "LV": 0,
                    "L": 36,
                    "S": 45,
                    "properties": {
                        "durability": 50,
                        "active": 0
                    }
                },
                {
                    "I": "3859147",
                    "LV": 0,
                    "L": 37,
                    "S": 51,
                    "properties": {
                        "durability": "0",
                        "active": "1"
                    }
                },
                {
                    "I": "3959234",
                    "LV": 0,
                    "L": 38,
                    "S": 0,
                    "Q": 2220
                },
                {
                    "I": "4682153",
                    "LV": 0,
                    "L": 11,
                    "S": 83
                },
                {
                    "I": "4682155",
                    "LV": 0,
                    "L": 12,
                    "S": 85
                },
                {
                    "I": "4682191",
                    "LV": 0,
                    "L": 16,
                    "S": 86
                },
                {
                    "I": "4682199",
                    "LV": 0,
                    "L": 18,
                    "S": 87
                },
                {
                    "I": "4682232",
                    "LV": 0,
                    "L": 39,
                    "S": 52,
                    "properties": {
                        "durability": 75000,
                        "active": 0
                    }
                },
                {
                    "I": "4682234",
                    "LV": 0,
                    "L": 40,
                    "S": 53,
                    "properties": {
                        "durability": 0,
                        "active": 0
                    }
                },
                {
                    "I": "4682237",
                    "LV": 0,
                    "L": 41,
                    "S": 54,
                    "properties": {
                        "durability": 10,
                        "active": 0
                    }
                },
                {
                    "I": "4682240",
                    "LV": 0,
                    "L": 42,
                    "S": 58,
                    "properties": {
                        "durability": 200,
                        "active": 0
                    }
                },
                {
                    "I": "4682241",
                    "LV": 0,
                    "L": 43,
                    "S": 88
                },
                {
                    "I": "4682246",
                    "LV": 0,
                    "L": 44,
                    "S": 89,
                    "properties": {
                        "durability": "13",
                        "active": "0"
                    },
                    "CH": "Ladning: 13"
                },
                {
                    "I": "4682247",
                    "LV": 0,
                    "L": 45,
                    "S": 90,
                    "properties": {
                        "durability": "0",
                        "active": "1"
                    }
                },
                {
                    "I": "4682690",
                    "LV": 0,
                    "L": 46,
                    "S": 84,
                    "properties": {
                        "durability": 0,
                        "active": 0,
                        "attachedAmmo": "ammunition_rocket_plt-2026"
                    }
                },
                {
                    "I": "4682729",
                    "LV": 0,
                    "L": 4,
                    "S": 32
                },
                {
                    "I": "4682730",
                    "LV": 0,
                    "L": 4,
                    "S": 91
                },
                {
                    "I": "4682731",
                    "LV": 0,
                    "L": 4,
                    "S": 92
                },
                {
                    "I": "4682732",
                    "LV": 0,
                    "L": 4,
                    "S": 93
                },
                {
                    "I": "4682733",
                    "LV": 0,
                    "L": 4,
                    "S": 94
                },
                {
                    "I": "4682910",
                    "LV": 0,
                    "L": 18,
                    "S": 95
                },
                {
                    "I": "4682911",
                    "LV": 0,
                    "L": 18,
                    "S": 96
                },
                {
                    "I": "4682912",
                    "LV": 0,
                    "L": 18,
                    "S": 97
                },
                {
                    "I": "4682913",
                    "LV": 0,
                    "L": 18,
                    "S": 98
                },
                {
                    "I": "4682914",
                    "LV": 0,
                    "L": 18,
                    "S": 99
                },
                {
                    "I": "4682971",
                    "LV": 0,
                    "L": 26,
                    "S": 100
                },
                {
                    "I": "4682972",
                    "LV": 0,
                    "L": 26,
                    "S": 101
                },
                {
                    "I": "4682973",
                    "LV": 0,
                    "L": 26,
                    "S": 102
                },
                {
                    "I": "4682999",
                    "LV": 0,
                    "L": 46,
                    "S": 103,
                    "properties": {
                        "durability": 0,
                        "active": 0,
                        "attachedAmmo": "ammunition_rocketlauncher_eco-10"
                    }
                },
                {
                    "I": "4683763",
                    "LV": 0,
                    "L": 18,
                    "S": 104
                },
                {
                    "I": "4683764",
                    "LV": 0,
                    "L": 18,
                    "S": 105
                },
                {
                    "I": "4689808",
                    "LV": 0,
                    "L": 47,
                    "S": 107,
                    "LT": "Level: 1"
                },
                {
                    "I": "4689809",
                    "LV": 0,
                    "L": 48,
                    "S": 108,
                    "LT": "Level: 1"
                },
                {
                    "I": "4689810",
                    "LV": 0,
                    "L": 49,
                    "S": 109,
                    "LT": "Level: 1"
                },
                {
                    "I": "4689811",
                    "LV": 0,
                    "L": 50,
                    "S": 110,
                    "LT": "Level: 1"
                },
                {
                    "I": "4689812",
                    "LV": 0,
                    "L": 50,
                    "S": 111,
                    "LT": "Level: 1"
                },
                {
                    "I": "4689813",
                    "LV": 0,
                    "L": 50,
                    "S": 112,
                    "LT": "Level: 1"
                },
                {
                    "I": "4689814",
                    "LV": 0,
                    "L": 50,
                    "S": 113,
                    "LT": "Level: 1"
                },
                {
                    "I": "4689815",
                    "LV": 0,
                    "L": 50,
                    "S": 114,
                    "LT": "Level: 1"
                },
                {
                    "I": "4689816",
                    "LV": 0,
                    "L": 50,
                    "S": 115,
                    "LT": "Level: 1"
                },
                {
                    "I": "4698582",
                    "LV": 0,
                    "L": 18,
                    "S": 116
                },
                {
                    "I": "4698583",
                    "LV": 0,
                    "L": 18,
                    "S": 117
                },
                {
                    "I": "4698615",
                    "LV": 0,
                    "L": 26,
                    "S": 118
                },
                {
                    "I": "4698616",
                    "LV": 0,
                    "L": 26,
                    "S": 119
                },
                {
                    "I": "4698629",
                    "LV": 0,
                    "L": 26,
                    "S": 120
                },
                {
                    "I": "4698630",
                    "LV": 0,
                    "L": 26,
                    "S": 121
                },
                {
                    "I": "4698631",
                    "LV": 0,
                    "L": 26,
                    "S": 122
                },
                {
                    "I": "4700303",
                    "LV": 0,
                    "L": 18,
                    "S": 29
                },
                {
                    "I": "4700304",
                    "LV": 0,
                    "L": 18,
                    "S": 123
                },
                {
                    "I": "4700305",
                    "LV": 0,
                    "L": 18,
                    "S": 124
                },
                {
                    "I": "4700998",
                    "LV": 0,
                    "L": 51,
                    "S": 125,
                    "IN": false,
                    "properties": {
                        "installDate": "",
                        "hitPoints": "1040000"
                    },
                    "HP": 1040000,
                    "MHP": 1040000,
                    "RC": 0
                },
                {
                    "I": "4701030",
                    "LV": 0,
                    "L": 18,
                    "S": 126
                },
                {
                    "I": "4701031",
                    "LV": 0,
                    "L": 52,
                    "S": 127,
                    "Q": 2
                },
                {
                    "I": "4701033",
                    "LV": 0,
                    "L": 53,
                    "S": 128,
                    "Q": 28
                },
                {
                    "I": "4712511",
                    "LV": 0,
                    "L": 54,
                    "S": 130
                },
                {
                    "I": "4722443",
                    "LV": 0,
                    "L": 18,
                    "S": 131
                },
                {
                    "I": "4722444",
                    "LV": 0,
                    "L": 26,
                    "S": 132
                },
                {
                    "I": "4722528",
                    "LV": 0,
                    "L": 18,
                    "S": 133
                },
                {
                    "I": "4722529",
                    "LV": 0,
                    "L": 26,
                    "S": 134
                },
                {
                    "I": "4722775",
                    "LV": 0,
                    "L": 26,
                    "S": 135
                },
                {
                    "I": "4722776",
                    "LV": 0,
                    "L": 18,
                    "S": 136
                },
                {
                    "I": "4722894",
                    "LV": 0,
                    "L": 18,
                    "S": 137
                },
                {
                    "I": "4723002",
                    "LV": 0,
                    "L": 26,
                    "S": 138
                },
                {
                    "I": "4723096",
                    "LV": 0,
                    "L": 55,
                    "S": 139,
                    "Q": 695
                },
                {
                    "I": "4723131",
                    "LV": 0,
                    "L": 18,
                    "S": 141
                },
                {
                    "I": "4723159",
                    "LV": 0,
                    "L": 18,
                    "S": 142
                },
                {
                    "I": "4723676",
                    "LV": 0,
                    "L": 18,
                    "S": 143
                },
                {
                    "I": "4724090",
                    "LV": 0,
                    "L": 18,
                    "S": 144
                },
                {
                    "I": "4724091",
                    "LV": 0,
                    "L": 18,
                    "S": 145
                },
                {
                    "I": "4726056",
                    "LV": 0,
                    "L": 56,
                    "S": 146,
                    "IN": false,
                    "properties": {
                        "installDate": "1379706879348",
                        "hitPoints": "1040000"
                    },
                    "HP": 1040000,
                    "MHP": 1040000,
                    "RC": 0
                },
                {
                    "I": "4726058",
                    "LV": 0,
                    "L": 57,
                    "S": 147,
                    "Q": 4
                },
                {
                    "I": "4726082",
                    "LV": 0,
                    "L": 58,
                    "S": 148,
                    "Q": 57
                },
                {
                    "I": "4726944",
                    "LV": 0,
                    "L": 18,
                    "S": 149
                },
                {
                    "I": "4726979",
                    "LV": 0,
                    "L": 18,
                    "S": 150
                },
                {
                    "I": "4727691",
                    "LV": 0,
                    "L": 18,
                    "S": 151
                },
                {
                    "I": "4727817",
                    "LV": 0,
                    "L": 18,
                    "S": 152
                },
                {
                    "I": "4729701",
                    "LV": 0,
                    "L": 59,
                    "S": 153,
                    "properties": {
                        "durability": 200,
                        "active": 0
                    }
                },
                {
                    "I": "4736588",
                    "LV": 2,
                    "L": 60,
                    "S": 154,
                    "LT": "Level: 3"
                },
                {
                    "I": "4740204",
                    "LV": 0,
                    "L": 61,
                    "S": 155
                },
                {
                    "I": "4740941",
                    "LV": 0,
                    "L": 62,
                    "S": 156,
                    "IN": false,
                    "properties": {
                        "installDate": "",
                        "hitPoints": "1040000"
                    },
                    "HP": 1040000,
                    "MHP": 1040000,
                    "RC": 0
                },
                {
                    "I": "4747164",
                    "LV": 0,
                    "L": 63,
                    "S": 157
                },
                {
                    "I": "4747165",
                    "LV": 0,
                    "L": 64,
                    "S": 158
                },
                {
                    "I": "4754288",
                    "LV": 2,
                    "L": 65,
                    "S": 159,
                    "LT": "Level: 3"
                },
                {
                    "I": "4762526",
                    "LV": 0,
                    "L": 54,
                    "S": 160
                },
                {
                    "I": "4763360",
                    "LV": 0,
                    "L": 66,
                    "S": 161
                },
                {
                    "I": "4790521",
                    "LV": 0,
                    "L": 67,
                    "S": 162,
                    "Q": 10
                },
                {
                    "I": "4791847",
                    "LV": 0,
                    "L": 68,
                    "S": 163,
                    "properties": {
                        "durability": 0,
                        "active": 0
                    }
                }
            ],
            "itemInfo": [
                {
                    "L": 69,
                    "name": "Crimson",
                    "T": 21,
                    "C": "ship",
                    "levels": [
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 15
                                },
                                "generators": {
                                    "T": [
                                        3,
                                        4
                                    ],
                                    "Q": 15
                                },
                                "heavy_guns": {
                                    "T": [
                                        1
                                    ],
                                    "Q": 1
                                },
                                "extras": {
                                    "T": [
                                        11,
                                        9,
                                        7,
                                        8,
                                        10,
                                        6
                                    ],
                                    "Q": 3
                                }
                            },
                            "cdn": {
                                "30x30": "12f6523bf590a66e9d6ca1348433d900",
                                "63x63": "84c63772c5d3b306af523134e1898200",
                                "100x100": "2e949eba817453a0f3c1ce72de781000",
                                "top": "b72997e945300eebd9763e1ad1038700"
                            }
                        }
                    ]
                },
                {
                    "L": 70,
                    "name": "Exalted",
                    "T": 21,
                    "C": "ship",
                    "levels": [
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 15
                                },
                                "generators": {
                                    "T": [
                                        3,
                                        4
                                    ],
                                    "Q": 15
                                },
                                "heavy_guns": {
                                    "T": [
                                        1
                                    ],
                                    "Q": 1
                                },
                                "extras": {
                                    "T": [
                                        11,
                                        9,
                                        7,
                                        8,
                                        10,
                                        6
                                    ],
                                    "Q": 3
                                }
                            },
                            "cdn": {
                                "30x30": "72c2127019b2e3e28757998649a5cb00",
                                "63x63": "ac8e12195d070eed94ce15b3523ba500",
                                "100x100": "88044e52b74d1062a9a38e596e465400",
                                "top": "fa46264bde239ff63b9313cd3f954c00"
                            }
                        }
                    ]
                },
                {
                    "L": 71,
                    "name": "Veteran",
                    "T": 21,
                    "C": "ship",
                    "levels": [
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 15
                                },
                                "generators": {
                                    "T": [
                                        3,
                                        4
                                    ],
                                    "Q": 15
                                },
                                "heavy_guns": {
                                    "T": [
                                        1
                                    ],
                                    "Q": 1
                                },
                                "extras": {
                                    "T": [
                                        11,
                                        9,
                                        7,
                                        8,
                                        10,
                                        6
                                    ],
                                    "Q": 3
                                }
                            },
                            "cdn": {
                                "30x30": "9d6eabcab5911bfc2c4a2d56676ce400",
                                "63x63": "3fd73f6bc3611a9fe8f2367f4575b600",
                                "100x100": "81a16a8cd2cddfdc3c82af51990d8700",
                                "top": "2d388ee819077143b8e78d3dc7ceae00"
                            }
                        }
                    ]
                },
                {
                    "L": 72,
                    "name": "Enforcer",
                    "T": 21,
                    "C": "ship",
                    "levels": [
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 15
                                },
                                "generators": {
                                    "T": [
                                        3,
                                        4
                                    ],
                                    "Q": 15
                                },
                                "heavy_guns": {
                                    "T": [
                                        1
                                    ],
                                    "Q": 1
                                },
                                "extras": {
                                    "T": [
                                        11,
                                        9,
                                        7,
                                        8,
                                        10,
                                        6
                                    ],
                                    "Q": 3
                                }
                            },
                            "cdn": {
                                "30x30": "910ad3dc8468f831274081d0fd79a700",
                                "63x63": "b2a8f157eec6af66d9f4f2fcdfa5dd00",
                                "100x100": "8b447eee59e1500e4367eba7578b0300",
                                "top": "aa24e60e333abc872ffe39b171b41200"
                            }
                        }
                    ]
                },
                {
                    "L": 73,
                    "name": "Bastion",
                    "T": 21,
                    "C": "ship",
                    "levels": [
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 15
                                },
                                "generators": {
                                    "T": [
                                        3,
                                        4
                                    ],
                                    "Q": 15
                                },
                                "heavy_guns": {
                                    "T": [
                                        1
                                    ],
                                    "Q": 1
                                },
                                "extras": {
                                    "T": [
                                        11,
                                        9,
                                        7,
                                        8,
                                        10,
                                        6
                                    ],
                                    "Q": 3
                                }
                            },
                            "cdn": {
                                "30x30": "45177fe09e92307b3d1bf8d0036ea200",
                                "63x63": "80981e18bb9a5ca616833d5c7ee05c00",
                                "100x100": "e934df028791f9eac43b2e3b60de3100",
                                "top": "5970790943b53a8e113d4232e5714500"
                            }
                        }
                    ]
                },
                {
                    "L": 0,
                    "name": "Sentinel",
                    "T": 21,
                    "C": "ship",
                    "levels": [
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 15
                                },
                                "generators": {
                                    "T": [
                                        3,
                                        4
                                    ],
                                    "Q": 15
                                },
                                "heavy_guns": {
                                    "T": [
                                        1
                                    ],
                                    "Q": 1
                                },
                                "extras": {
                                    "T": [
                                        11,
                                        9,
                                        7,
                                        8,
                                        10,
                                        6
                                    ],
                                    "Q": 3
                                }
                            },
                            "cdn": {
                                "30x30": "aebc8c1ee1d83f778a61e7c75f258800",
                                "63x63": "83c788413d184255f3d91222b55ff400",
                                "100x100": "f34f8253592a74a52c37bf4962a3d100",
                                "top": "b518d3153b54198589baf8b385dedd00"
                            }
                        }
                    ]
                },
                {
                    "L": 74,
                    "name": "Goliath",
                    "T": 22,
                    "C": "ship",
                    "levels": [
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 15
                                },
                                "generators": {
                                    "T": [
                                        3,
                                        4
                                    ],
                                    "Q": 15
                                },
                                "heavy_guns": {
                                    "T": [
                                        1
                                    ],
                                    "Q": 1
                                },
                                "extras": {
                                    "T": [
                                        11,
                                        9,
                                        7,
                                        8,
                                        10,
                                        6
                                    ],
                                    "Q": 3
                                }
                            },
                            "selling": {
                                "credits": 200000
                            },
                            "cdn": {
                                "63x63": "c6c8a09a4749af691b6a9947cf2c6900",
                                "100x100": "5fcdb83e69b401d92cc1ae6abb172300",
                                "top": "a604cd4669b80a0ddd89fa54fc946300"
                            }
                        }
                    ]
                },
                {
                    "L": 1,
                    "name": "P.E.T.10",
                    "T": 23,
                    "C": "petGear",
                    "rename": 3000,
                    "costWeaponSlot": "3000",
                    "costGeneratorSlot": "5000",
                    "costGearSlot": "20000",
                    "costProtocolSlot": "19000",
                    "levels": [
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 1
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 2
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 1
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 2
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        },
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 2
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 3
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 2
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 3
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        },
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 2
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 4
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 2
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 4
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        },
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 3
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 5
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 3
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 5
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        },
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 3
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 6
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 3
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 6
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        },
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 4
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 7
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 4
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 7
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        },
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 4
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 8
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 4
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 8
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        },
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 5
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 9
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 5
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 9
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        },
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 5
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 10
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 5
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 10
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        },
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 6
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 11
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 6
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 11
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        },
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 6
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 12
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 6
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 12
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        },
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 7
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 13
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 6
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 12
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        },
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 7
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 14
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 6
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 12
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        },
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 8
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 15
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 6
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 12
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        },
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 9
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 16
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 6
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 12
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        },
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 10
                                },
                                "generators": {
                                    "T": [
                                        4
                                    ],
                                    "Q": 17
                                },
                                "gears": {
                                    "T": [
                                        19
                                    ],
                                    "Q": 6
                                },
                                "protocols": {
                                    "T": [
                                        20
                                    ],
                                    "Q": 12
                                }
                            },
                            "cdn": {
                                "30x30": "64d37f39e6afc9ccfd3fad221a3f1a00",
                                "63x63": "914f7da0e50393dd5acf247001f22500",
                                "100x100": "e8bbd8e957933caf10200c8ae422b400"
                            }
                        }
                    ]
                },
                {
                    "L": 2,
                    "name": "Iris Drone",
                    "T": 24,
                    "C": "drone",
                    "repair": 0,
                    "levels": [
                        {
                            "slotsets": {
                                "default": {
                                    "T": [
                                        0,
                                        4,
                                        11,
                                        9,
                                        7,
                                        8,
                                        10
                                    ],
                                    "Q": 2
                                },
                                "design": {
                                    "T": [
                                        16
                                    ],
                                    "Q": 1
                                }
                            },
                            "selling": {
                                "credits": 100000
                            },
                            "cdn": {
                                "30x30": "14ebb8db8014dc4bd757fa2ef74de400",
                                "63x63": "9e918d6b19b7d5ead16addad0cc35200",
                                "100x100": "afba9239e233f506eff21528ab4e8f00",
                                "top": "79b048a4b8e05add7a2245ebe95d5e00"
                            }
                        },
                        {
                            "slotsets": {
                                "default": {
                                    "T": [
                                        0,
                                        4,
                                        11,
                                        9,
                                        7,
                                        8,
                                        10
                                    ],
                                    "Q": 2
                                },
                                "design": {
                                    "T": [
                                        16
                                    ],
                                    "Q": 1
                                }
                            },
                            "selling": {
                                "credits": 150000
                            },
                            "cdn": {
                                "30x30": "d951657b84dd80549297702f018b1f00",
                                "63x63": "66f6d38952f8fb800abbd5e5d96f7700",
                                "100x100": "3b12423b93122055a76f250f307dee00",
                                "top": "cdcc2dc2ac60191715615ac48100e300"
                            }
                        },
                        {
                            "slotsets": {
                                "default": {
                                    "T": [
                                        0,
                                        4,
                                        11,
                                        9,
                                        7,
                                        8,
                                        10
                                    ],
                                    "Q": 2
                                },
                                "design": {
                                    "T": [
                                        16
                                    ],
                                    "Q": 1
                                }
                            },
                            "selling": {
                                "credits": 210000
                            },
                            "cdn": {
                                "30x30": "b10d193b55f89656936668c1bc559900",
                                "63x63": "e3ab25f382927dfd082f290967524500",
                                "100x100": "e0dbd77afe0b998abb1be914ff0ca800",
                                "top": "9c4888900962a7ac074714cfaa206200"
                            }
                        },
                        {
                            "slotsets": {
                                "default": {
                                    "T": [
                                        0,
                                        4,
                                        11,
                                        9,
                                        7,
                                        8,
                                        10
                                    ],
                                    "Q": 2
                                },
                                "design": {
                                    "T": [
                                        16
                                    ],
                                    "Q": 1
                                }
                            },
                            "selling": {
                                "credits": 240000
                            },
                            "cdn": {
                                "30x30": "9c481125952808f464742ffbb0a43500",
                                "63x63": "dd3a4359bfadba07d03989ec042b5e00",
                                "100x100": "a71d6fe22419ea188a5d2dd78e7b6900",
                                "top": "873f7968e96ba2b2aa6a867938171b00"
                            }
                        },
                        {
                            "slotsets": {
                                "default": {
                                    "T": [
                                        0,
                                        4,
                                        11,
                                        9,
                                        7,
                                        8,
                                        10
                                    ],
                                    "Q": 2
                                },
                                "design": {
                                    "T": [
                                        16
                                    ],
                                    "Q": 1
                                }
                            },
                            "selling": {
                                "credits": 315000
                            },
                            "cdn": {
                                "30x30": "9cb3929ed0ea6e938eb50599a854d400",
                                "63x63": "18d7b8fbe928f1b26ae05e8cf8eab200",
                                "100x100": "0227efd2ca7b8749575885abd3d33e00",
                                "top": "e65761d42de94f1eeaa0c30e29d88e00"
                            }
                        },
                        {
                            "slotsets": {
                                "default": {
                                    "T": [
                                        0,
                                        4,
                                        11,
                                        9,
                                        7,
                                        8,
                                        10
                                    ],
                                    "Q": 2
                                },
                                "design": {
                                    "T": [
                                        16
                                    ],
                                    "Q": 1
                                }
                            },
                            "selling": {
                                "credits": 500000
                            },
                            "cdn": {
                                "30x30": "40860d1594e9b6841ccfa87963f8d800",
                                "63x63": "0cd363e0f68297796aeb1a1dc8725500",
                                "100x100": "915c51fde19ca5d0c4878221ae305f00",
                                "top": "b6aae2912b6e0eb1b49d50ab5caef400"
                            }
                        }
                    ]
                },
                {
                    "L": 3,
                    "name": "Nostromo",
                    "T": 22,
                    "C": "ship",
                    "levels": [
                        {
                            "slotsets": {
                                "lasers": {
                                    "T": [
                                        0
                                    ],
                                    "Q": 7
                                },
                                "generators": {
                                    "T": [
                                        3,
                                        4
                                    ],
                                    "Q": 10
                                },
                                "heavy_guns": {
                                    "T": [
                                        1
                                    ],
                                    "Q": 1
                                },
                                "extras": {
                                    "T": [
                                        11,
                                        9,
                                        7,
                                        8,
                                        10,
                                        6
                                    ],
                                    "Q": 3
                                }
                            },
                            "selling": {
                                "credits": 97500
                            },
                            "cdn": {
                                "63x63": "f81d0170bca4fe0de6a859d158ac1600",
                                "100x100": "c32fd5c4ba7687cabdfd8e592f6e6800",
                                "top": "e89830fa570f32161e8b362b78b72700"
                            }
                        }
                    ]
                },
                {
                    "L": 4,
                    "name": "MP-1",
                    "T": 0,
                    "C": "laser",
                    "levels": [
                        {
                            "selling": {
                                "credits": 10000
                            },
                            "cdn": {
                                "30x30": "cfde29bcddbbfbcf4abccb06a1bad900",
                                "63x63": "52eb84ef703379bc9cc9268f59ff5a00",
                                "100x100": "23ad6cc5c949ffce0e6ff2683b16e700"
                            }
                        }
                    ]
                },
                {
                    "L": 5,
                    "name": "LCB-10",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 5
                            },
                            "cdn": {
                                "30x30": "dae4f308e45cc4a93ac36451afabc700",
                                "63x63": "c02154d2ce135d660f647631dbbfbc00",
                                "100x100": "d8db5c48fe907c65a74b77b7206a5e00"
                            }
                        }
                    ]
                },
                {
                    "L": 6,
                    "name": "MCB-25",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 1
                            },
                            "cdn": {
                                "30x30": "becac3718527c5212ffbaef4de6beb00",
                                "63x63": "86c2c2d261ef196310b34fb3f92c6800",
                                "100x100": "fa407a1644e0563e5138b0499c682100"
                            }
                        }
                    ]
                },
                {
                    "L": 7,
                    "name": "PLT-2026",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 250
                            },
                            "cdn": {
                                "30x30": "0eb7d727d0e8d7c05ad9121573a6b200",
                                "63x63": "c6bfdcd09949f7b61b98ead3c6773500",
                                "100x100": "58fdf543bd4fbd7bfd7bcb011c9d1100"
                            }
                        }
                    ]
                },
                {
                    "L": 8,
                    "name": "Terbium",
                    "T": 15,
                    "C": "ship",
                    "levels": [
                        {
                            "cdn": {
                                "30x30": "e973ca28960c9f31091c08cc57157e00",
                                "63x63": "6c2fb01e0f3e51a3ed2965d63a707900"
                            }
                        }
                    ]
                },
                {
                    "L": 9,
                    "name": "Prometium",
                    "T": 15,
                    "C": "ship",
                    "levels": [
                        {
                            "cdn": {
                                "30x30": "3dfd3ed97d4f5b039d81aa3d0ba3cd00",
                                "63x63": "cea1d899667583722409741b9ab5b400"
                            }
                        }
                    ]
                },
                {
                    "L": 10,
                    "name": "Endurium",
                    "T": 15,
                    "C": "ship",
                    "levels": [
                        {
                            "cdn": {
                                "30x30": "a5481c8246e83a82988db623e3e53100",
                                "63x63": "458fc20aa365cf46032ec748fa143500"
                            }
                        }
                    ]
                },
                {
                    "L": 11,
                    "name": "LF-2",
                    "T": 0,
                    "C": "laser",
                    "levels": [
                        {
                            "selling": {
                                "credits": 12500
                            },
                            "cdn": {
                                "30x30": "156cf2ddc0e14ff43bfe6552f1585f00",
                                "63x63": "cbf50911027835ffa8e9f190e42e7e00",
                                "100x100": "803197c677b55ef80655269c1efc0100"
                            }
                        }
                    ]
                },
                {
                    "L": 12,
                    "name": "SG3N-B01",
                    "T": 4,
                    "C": "generator",
                    "levels": [
                        {
                            "selling": {
                                "credits": 6250
                            },
                            "cdn": {
                                "30x30": "e46db23c78d55f3cea22b36a7942e600",
                                "63x63": "88a331209f4d8680e14a42962bf79400",
                                "100x100": "15ad773d10eb9b696d049632d685c600"
                            }
                        }
                    ]
                },
                {
                    "L": 13,
                    "name": "Repair-Bot Auto CPU",
                    "T": 7,
                    "C": "special",
                    "levels": [
                        {
                            "selling": {
                                "credits": 25000
                            },
                            "cdn": {
                                "30x30": "b476120c9737e4789f1da17faaecf600",
                                "63x63": "a08b6fd485a562a84505c37f4b226200",
                                "100x100": "862d24f30519c5e53a13f4d3ec995500"
                            }
                        }
                    ]
                },
                {
                    "L": 14,
                    "name": "MCB-50",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 2
                            },
                            "cdn": {
                                "30x30": "0e6c8656cf822817bf38242c131a9c00",
                                "63x63": "386dd5328b039cc7594c36f8875af400",
                                "100x100": "86f834298693b605147ccf579bb84d00"
                            }
                        }
                    ]
                },
                {
                    "L": 15,
                    "name": "PLT-2021",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 12
                            },
                            "cdn": {
                                "30x30": "b61ed2d31f27dca205aabf6825117d00",
                                "63x63": "4913b7d593e9d812b05c4f3eaaf40100",
                                "100x100": "57dc1c46160862d3e6e73e451764ab00"
                            }
                        }
                    ]
                },
                {
                    "L": 16,
                    "name": "G3N-7900",
                    "T": 3,
                    "C": "generator",
                    "levels": [
                        {
                            "selling": {
                                "credits": 5000
                            },
                            "cdn": {
                                "30x30": "ea805e03b2d3fa173b723f1f846bc900",
                                "63x63": "768dea8b4af9ee7381b707cc63f3ac00",
                                "100x100": "6f332bdc590ad65c8095d1c303cebf00"
                            }
                        }
                    ]
                },
                {
                    "L": 17,
                    "name": "Promerium",
                    "T": 15,
                    "C": "ship",
                    "levels": [
                        {
                            "cdn": {
                                "30x30": "e814113277b6260618e4ab5969e20a00",
                                "63x63": "0b244214822eee368245b2940e1b5300"
                            }
                        }
                    ]
                },
                {
                    "L": 18,
                    "name": "LF-3",
                    "T": 0,
                    "C": "laser",
                    "levels": [
                        {
                            "selling": {
                                "credits": 25000
                            },
                            "cdn": {
                                "30x30": "dc3f2118a4fae31b28744f5f69b53e00",
                                "63x63": "b8ec173f11257347acc378cf2b19c300",
                                "100x100": "5ced49170920715d57158fe1773a4400"
                            }
                        }
                    ]
                },
                {
                    "L": 19,
                    "name": "Xenomit",
                    "T": 15,
                    "C": "ship",
                    "levels": [
                        {
                            "cdn": {
                                "30x30": "d10e834af73134303743011556568a00",
                                "63x63": "ea8d8fe20c3a61d2cf90f913f8f48000"
                            }
                        }
                    ]
                },
                {
                    "L": 20,
                    "name": "SAB-50",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 2
                            },
                            "cdn": {
                                "30x30": "951e7ce7907a737f2c94d5cda23cfd00",
                                "63x63": "0665c3f7e4614d679369d77011c2c900",
                                "100x100": "8c128831210a77fdebfc8085f0de2700"
                            }
                        }
                    ]
                },
                {
                    "L": 21,
                    "name": "Duranium",
                    "T": 15,
                    "C": "ship",
                    "levels": [
                        {
                            "cdn": {
                                "30x30": "6bb6f068deff7b4d7f311e82cda5f600",
                                "63x63": "0c027e1e4299b8f6bca072a13a4b8300"
                            }
                        }
                    ]
                },
                {
                    "L": 22,
                    "name": "Prometid",
                    "T": 15,
                    "C": "ship",
                    "levels": [
                        {
                            "cdn": {
                                "30x30": "df535e1d9dd1deabcff16d7a4fdb2f00",
                                "63x63": "1e8dbf2955df6513a172a28b57fbc800"
                            }
                        }
                    ]
                },
                {
                    "L": 23,
                    "name": "ACM 1",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 250
                            },
                            "cdn": {
                                "30x30": "135566859f94cc51246f401ec8978200",
                                "63x63": "084100df3c5bed4eea0af67e4c4bfd00",
                                "100x100": "7111672f8762e1eb473248272678ea00"
                            }
                        }
                    ]
                },
                {
                    "L": 24,
                    "name": "UCB-100",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 12
                            },
                            "cdn": {
                                "30x30": "2e499cee32127be3df4cf200e1c73b00",
                                "63x63": "ae0e01beae2df1545d25728995151200",
                                "100x100": "b56716a7918c9bfb6fe917d63eefb700"
                            }
                        }
                    ]
                },
                {
                    "L": 25,
                    "name": "SG3N-A03",
                    "T": 4,
                    "C": "generator",
                    "levels": [
                        {
                            "selling": {
                                "credits": 128000
                            },
                            "cdn": {
                                "30x30": "f4d2d254f93608126c7db06a85de0800",
                                "63x63": "e775ee19bac6ca833965f19f7f8d3a00",
                                "100x100": "e1b79125e9f9c2fdb8711d3cb7774c00"
                            }
                        }
                    ]
                },
                {
                    "L": 26,
                    "name": "SG3N-B02",
                    "T": 4,
                    "C": "generator",
                    "levels": [
                        {
                            "selling": {
                                "credits": 25000
                            },
                            "cdn": {
                                "30x30": "21b02c8c30414a8f17b3926fffb5ca00",
                                "63x63": "b718b6cf1c30cde1d53056c8ad186c00",
                                "100x100": "b82b382ccdeaea0716ea15f49ff47300"
                            }
                        }
                    ]
                },
                {
                    "L": 27,
                    "name": "Ammunition Buy CPU 1",
                    "T": 7,
                    "C": "special",
                    "levels": [
                        {
                            "selling": {
                                "credits": 37500
                            },
                            "cdn": {
                                "30x30": "b958f5e2676c44aef2a6d784ba15ef00",
                                "63x63": "a217c1dc6139d3e5000022123d94cf00",
                                "100x100": "21e336721d12e791fb7e7c6414d86300"
                            }
                        }
                    ]
                },
                {
                    "L": 28,
                    "name": "Fireworks 09M",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 25
                            },
                            "cdn": {
                                "30x30": "32294c0f033f6141386acfd716474d00",
                                "63x63": "97971aa7396b8a511a80cccf2be43600",
                                "100x100": "8498a18b64bf5f7708d43735470f8900"
                            }
                        }
                    ]
                },
                {
                    "L": 29,
                    "name": "SL-M01",
                    "T": 14,
                    "C": "battery",
                    "textReplace": {
                        "%TIME%": 5,
                        "%AMOUNT%": 50
                    },
                    "levels": [
                        {
                            "selling": {
                                "credits": 125
                            },
                            "cdn": {
                                "30x30": "6e41e6ce998b8a3bb07ca1190d1deb00",
                                "63x63": "7712a19b219d98191682ed7247715600",
                                "100x100": "423a7429701436f742babda30b43bc00"
                            }
                        }
                    ]
                },
                {
                    "L": 30,
                    "name": "ECO-10",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 750
                            },
                            "cdn": {
                                "30x30": "a6bb8b0876c9563f87e928b0da2bd600",
                                "63x63": "12045ffd885f2549b7898a8b541e2700",
                                "100x100": "64ae584f553ab15e1dcacd7a7a595e00"
                            }
                        }
                    ]
                },
                {
                    "L": 31,
                    "name": "Fireworks 09S",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 500
                            },
                            "cdn": {
                                "30x30": "f31d766e4172ea7da1d2da8691733200",
                                "63x63": "a45fdf5e4e251f9de4e49d2b4617ce00",
                                "100x100": "7139453fccf623b7933eb477714e7300"
                            }
                        }
                    ]
                },
                {
                    "L": 32,
                    "name": "SAR-02",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 50
                            },
                            "cdn": {
                                "30x30": "6622c2e830046ff7c3dfedd2f15a4400",
                                "63x63": "2ffb6474019b25ee050b23c598ea4f00",
                                "100x100": "e71bbf67775146cacab9fd82bb4e5e00"
                            }
                        }
                    ]
                },
                {
                    "L": 33,
                    "name": "Fireworks 09L",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 50
                            },
                            "cdn": {
                                "30x30": "9ab2e07e0db58a9a5019b81c5a54d200",
                                "63x63": "03e220381c3f61536dc7e6f1bf5b6e00",
                                "100x100": "c28e07ba4d7d961366f82d9384a48b00"
                            }
                        }
                    ]
                },
                {
                    "L": 34,
                    "name": "PLD-8",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 250
                            },
                            "cdn": {
                                "30x30": "ecf4f2113b1e9eaf205e7951cf095400",
                                "63x63": "d6e6ddf8da138658639a25468b067e00",
                                "100x100": "a36af5f0b4d96fdf49506edd3b42f300"
                            }
                        }
                    ]
                },
                {
                    "L": 35,
                    "name": "Slot CPU 4",
                    "T": 7,
                    "C": "special",
                    "levels": [
                        {
                            "selling": {
                                "credits": 1250000
                            },
                            "cdn": {
                                "30x30": "1a05e234c920672ee54f9c303e9df300",
                                "63x63": "33d7086513c36d8f5d70660993f70800",
                                "100x100": "688a792d359998af68958acb7fbce500"
                            }
                        }
                    ]
                },
                {
                    "L": 36,
                    "name": "Rocket Turbo 1",
                    "T": 7,
                    "C": "special",
                    "levels": [
                        {
                            "selling": {
                                "credits": 25000
                            },
                            "cdn": {
                                "30x30": "9670fe405d1999f3e075d4e065cd8700",
                                "63x63": "6ecb7fdfb1593bb65b43b39476aae200",
                                "100x100": "92eb30597b6a0e5e739c25ca824c4100"
                            }
                        }
                    ]
                },
                {
                    "L": 37,
                    "name": "Auto-Rocket CPU 1",
                    "T": 7,
                    "C": "special",
                    "levels": [
                        {
                            "selling": {
                                "credits": 62500
                            },
                            "cdn": {
                                "30x30": "75c5dc20096b5056351b29efd6ceb700",
                                "63x63": "ac60d633a4eba6f094d4744ece618200",
                                "100x100": "30df149638e4298594447363931c9a00"
                            }
                        }
                    ]
                },
                {
                    "L": 38,
                    "name": "PLT-3030",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 17
                            },
                            "cdn": {
                                "30x30": "f74083184d618e864737f9d02d88cc00",
                                "63x63": "f7a4edcb86596809deb924083bfcef00",
                                "100x100": "43ea84fc8e020f3f93a7ae004be4b600"
                            }
                        }
                    ]
                },
                {
                    "L": 39,
                    "name": "Repair Robot 4",
                    "T": 9,
                    "C": "special",
                    "levels": [
                        {
                            "selling": {
                                "credits": 50000
                            },
                            "cdn": {
                                "30x30": "245a28e891d9de0f67e70494e3912e00",
                                "63x63": "ad1d8c5d7166551c71182eecc5a67e00",
                                "100x100": "f319657ad942b61c8863b6492de48e00"
                            }
                        }
                    ]
                },
                {
                    "L": 40,
                    "name": "Instashield CPU 1",
                    "T": 7,
                    "C": "special",
                    "levels": [
                        {
                            "selling": {
                                "credits": 125000
                            },
                            "cdn": {
                                "30x30": "b5303220b6ebbf91ae9f1203d99b1900",
                                "63x63": "59ebb45a483b69b03c878f8ef7381f00",
                                "100x100": "ba929c263af782b8fb64046ee2b94d00"
                            }
                        }
                    ]
                },
                {
                    "L": 41,
                    "name": "Advanced Jump CPU 1",
                    "T": 7,
                    "C": "special",
                    "levels": [
                        {
                            "selling": {
                                "credits": 178500
                            },
                            "cdn": {
                                "30x30": "513cb86be4b07adda776f39f45147800",
                                "63x63": "7799fecfd4fce1f89d900d4304c21000",
                                "100x100": "d4c05b61300e6f836963dd6d27bb6600"
                            }
                        }
                    ]
                },
                {
                    "L": 42,
                    "name": "Cargo Compressor",
                    "T": 10,
                    "C": "special",
                    "levels": [
                        {
                            "selling": {
                                "credits": 25000
                            },
                            "cdn": {
                                "30x30": "a65e0a5ff26274b490f9980a2ee9d900",
                                "63x63": "472cdbd24653ffd02cfa9d78f109c700",
                                "100x100": "52722009436318d043bee1373878f500"
                            }
                        }
                    ]
                },
                {
                    "L": 43,
                    "name": "HST-2",
                    "T": 1,
                    "C": "laser",
                    "levels": [
                        {
                            "selling": {
                                "credits": 37500
                            },
                            "cdn": {
                                "30x30": "b50011779dba406b663876c313436c00",
                                "63x63": "db076f6c66bc0760c650bd1e5a5c2c00",
                                "100x100": "189476e918a7a7c792f09272db412400"
                            }
                        }
                    ]
                },
                {
                    "L": 44,
                    "name": "Jump CPU 2",
                    "T": 7,
                    "C": "special",
                    "levels": [
                        {
                            "selling": {
                                "credits": 37500
                            },
                            "cdn": {
                                "30x30": "853fa6be9494eb505fce988f418f6000",
                                "63x63": "71448635257c7a2f48dab8bc67a3be00",
                                "100x100": "4c714d0033db967ba3a2720032ae8800"
                            }
                        }
                    ]
                },
                {
                    "L": 45,
                    "name": "Hellstorm-Auto CPU 1",
                    "T": 7,
                    "C": "special",
                    "levels": [
                        {
                            "selling": {
                                "credits": 62500
                            },
                            "cdn": {
                                "30x30": "ad70453dead7077704b34dcbef4b5d00",
                                "63x63": "f86e532f0605f1befc3efab402dfbd00",
                                "100x100": "c02ef79c7fb09afb18efa7bacb68e300"
                            }
                        }
                    ]
                },
                {
                    "L": 46,
                    "name": "Rocket-Buy CPU 1",
                    "T": 7,
                    "C": "special",
                    "levels": [
                        {
                            "selling": {
                                "credits": 37500
                            },
                            "cdn": {
                                "30x30": "abe256af4fdc99d78525c8bef7822200",
                                "63x63": "2bf41c6f21d7b0f8d99de39d5134e400",
                                "100x100": "0a0c408176a8fa5c7dd6f6a004164a00"
                            }
                        }
                    ]
                },
                {
                    "L": 75,
                    "name": "R-310",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 50
                            },
                            "cdn": {
                                "30x30": "68af73bca9114add674a573fee166200",
                                "63x63": "bd4b785081ad98c8a38efd38c1443b00",
                                "100x100": "9d29b47ca17ee0316f80a4bee39c9600"
                            }
                        }
                    ]
                },
                {
                    "L": 47,
                    "name": "G-REP1",
                    "T": 19,
                    "C": "petGear",
                    "levels": [
                        {
                            "selling": {
                                "credits": 6250
                            },
                            "textKeys": {
                                "amount": 2000
                            },
                            "cdn": {
                                "30x30": "43945a993e025e65d07aa6f122368200",
                                "63x63": "ece99d0c722aaffb1a0dbea09ad58000",
                                "100x100": "574370c2191e3afe9f73d59fe45b6c00"
                            }
                        },
                        {
                            "selling": {
                                "credits": 15000
                            },
                            "textKeys": {
                                "amount": 6000
                            },
                            "cdn": {
                                "30x30": "43945a993e025e65d07aa6f122368200",
                                "63x63": "ece99d0c722aaffb1a0dbea09ad58000",
                                "100x100": "574370c2191e3afe9f73d59fe45b6c00"
                            }
                        },
                        {
                            "selling": {
                                "credits": 31250
                            },
                            "textKeys": {
                                "amount": 12000
                            },
                            "cdn": {
                                "30x30": "43945a993e025e65d07aa6f122368200",
                                "63x63": "ece99d0c722aaffb1a0dbea09ad58000",
                                "100x100": "574370c2191e3afe9f73d59fe45b6c00"
                            }
                        }
                    ]
                },
                {
                    "L": 48,
                    "name": "G-AL1",
                    "T": 19,
                    "C": "petGear",
                    "levels": [
                        {
                            "selling": {
                                "credits": 18750
                            },
                            "cdn": {
                                "30x30": "699502e677e3d898f5b1185027356d00",
                                "63x63": "16ac6c270f7ed589252111058b50cb00",
                                "100x100": "3a6fe2c1d7e793fec4d697b90721f700"
                            }
                        },
                        {
                            "selling": {
                                "credits": 43750
                            },
                            "cdn": {
                                "30x30": "699502e677e3d898f5b1185027356d00",
                                "63x63": "16ac6c270f7ed589252111058b50cb00",
                                "100x100": "3a6fe2c1d7e793fec4d697b90721f700"
                            }
                        },
                        {
                            "selling": {
                                "credits": 93750
                            },
                            "cdn": {
                                "30x30": "699502e677e3d898f5b1185027356d00",
                                "63x63": "16ac6c270f7ed589252111058b50cb00",
                                "100x100": "3a6fe2c1d7e793fec4d697b90721f700"
                            }
                        }
                    ]
                },
                {
                    "L": 49,
                    "name": "G-TRA1",
                    "T": 19,
                    "C": "petGear",
                    "levels": [
                        {
                            "selling": {
                                "credits": 15000
                            },
                            "cdn": {
                                "30x30": "880636eab8ea27361d95b6f138bb3c00",
                                "63x63": "9f16fdb60862d771707f5a3d0bdb5500",
                                "100x100": "971fa24c7f7da534d8280f558c08f600"
                            }
                        },
                        {
                            "selling": {
                                "credits": 31250
                            },
                            "cdn": {
                                "30x30": "880636eab8ea27361d95b6f138bb3c00",
                                "63x63": "9f16fdb60862d771707f5a3d0bdb5500",
                                "100x100": "971fa24c7f7da534d8280f558c08f600"
                            }
                        },
                        {
                            "selling": {
                                "credits": 93750
                            },
                            "cdn": {
                                "30x30": "880636eab8ea27361d95b6f138bb3c00",
                                "63x63": "9f16fdb60862d771707f5a3d0bdb5500",
                                "100x100": "971fa24c7f7da534d8280f558c08f600"
                            }
                        }
                    ]
                },
                {
                    "L": 50,
                    "name": "AI-R1",
                    "T": 20,
                    "C": "petProtocol",
                    "levels": [
                        {
                            "selling": {
                                "credits": 7500
                            },
                            "textKeys": {
                                "amount": "2"
                            },
                            "cdn": {
                                "30x30": "af079dc358abba6624223176ecfabe00",
                                "63x63": "f3a9e70662dea822ae60c589629d8400",
                                "100x100": "f62fdb492ff21973a75ddb4a264be400"
                            }
                        },
                        {
                            "selling": {
                                "credits": 18750
                            },
                            "textKeys": {
                                "amount": "6"
                            },
                            "cdn": {
                                "30x30": "af079dc358abba6624223176ecfabe00",
                                "63x63": "f3a9e70662dea822ae60c589629d8400",
                                "100x100": "f62fdb492ff21973a75ddb4a264be400"
                            }
                        },
                        {
                            "selling": {
                                "credits": 625000
                            },
                            "textKeys": {
                                "amount": "12"
                            },
                            "cdn": {
                                "30x30": "af079dc358abba6624223176ecfabe00",
                                "63x63": "f3a9e70662dea822ae60c589629d8400",
                                "100x100": "f62fdb492ff21973a75ddb4a264be400"
                            }
                        }
                    ]
                },
                {
                    "L": 51,
                    "name": "Laser Turret Module - Mid Range",
                    "T": 18,
                    "C": "module",
                    "levels": [
                        {
                            "selling": {
                                "credits": 5000
                            },
                            "cdn": {
                                "30x30": "cddbcf50789a8fc0a0047a06b57a2900",
                                "63x63": "e7ff5188f0e15ac83c8cdafb20c96100",
                                "100x100": "e9f0a1183b88a78720b445536dd12c00"
                            }
                        }
                    ]
                },
                {
                    "L": 52,
                    "name": "Blueprint - Apis Part",
                    "T": 25,
                    "C": "special",
                    "levels": [
                        {
                            "cdn": {
                                "30x30": "9dc8a706550809bf37253db69962b400",
                                "63x63": "37459d31f6c40151ebb709c1cf940b00"
                            }
                        }
                    ]
                },
                {
                    "L": 53,
                    "name": "DD-M01",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 375
                            },
                            "cdn": {
                                "30x30": "c8300a9d1b414c5dc4e868daf247e100",
                                "63x63": "9a5703e6ad36fdf964bc16299934e000",
                                "100x100": "7041b21050caa6ba09b52096aadf7400"
                            }
                        }
                    ]
                },
                {
                    "L": 54,
                    "name": "Havoc",
                    "T": 16,
                    "C": "ship",
                    "levels": [
                        {
                            "selling": {
                                "credits": 75000
                            },
                            "cdn": {
                                "30x30": "3d777293c382668bf651ce89c3523f00",
                                "63x63": "ada51f4195e9e66baa7741514f16b400",
                                "100x100": "9ba2ab733b96e06b9d3d84694260f800"
                            }
                        }
                    ]
                },
                {
                    "L": 55,
                    "name": "RSB-75",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 12
                            },
                            "cdn": {
                                "30x30": "12c893d480540c5fc1279664048b4100",
                                "63x63": "50206543ccd2bc1002d106f117756600",
                                "100x100": "ed334efd4833335cb183b8b3fbb11500"
                            }
                        }
                    ]
                },
                {
                    "L": 56,
                    "name": "Rocket Array Module - Mid Accuracy",
                    "T": 18,
                    "C": "module",
                    "levels": [
                        {
                            "selling": {
                                "credits": 5000
                            },
                            "cdn": {
                                "30x30": "c346feb135abff40784c87e9cbba7f00",
                                "63x63": "770c9c835c6dba1077988fcc7deea300",
                                "100x100": "abc404e3307789dd38492ac114f79300"
                            }
                        }
                    ]
                },
                {
                    "L": 57,
                    "name": "EMP-M01",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 375
                            },
                            "cdn": {
                                "30x30": "b5bbdd393160dea5072c9c29925fb600",
                                "63x63": "23688e527b8f6d6263134a5cbcc8b100",
                                "100x100": "38b506ca821f324b01415507d2df3900"
                            }
                        }
                    ]
                },
                {
                    "L": 58,
                    "name": "HSTRM-01",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 62
                            },
                            "cdn": {
                                "30x30": "806ebd3b5a8e565af5a30e382af05100",
                                "63x63": "df51889c45224761dd5d715d0545af00",
                                "100x100": "be2503f2e93334f320dce9156363fc00"
                            }
                        }
                    ]
                },
                {
                    "L": 59,
                    "name": "Armory Upgrade 2",
                    "T": 10,
                    "C": "special",
                    "levels": [
                        {
                            "selling": {
                                "credits": 25000
                            },
                            "cdn": {
                                "30x30": "ae7bb5c8e700673a44d4ff081ca01900",
                                "63x63": "9269d541d93e9f1fe009f6c7b8a18600",
                                "100x100": "b3287b51cb87d9da908c44fb22bc5000"
                            }
                        }
                    ]
                },
                {
                    "L": 60,
                    "name": "G-KK1",
                    "T": 19,
                    "C": "petGear",
                    "levels": [
                        {
                            "selling": {
                                "credits": 18750
                            },
                            "cdn": {
                                "30x30": "5970b1599f56c77a1de4227c01c5e900",
                                "63x63": "0351761b8252c9449fddc5139abd7f00",
                                "100x100": "ea7e148224933dbbfc36ddee26f79600"
                            }
                        },
                        {
                            "selling": {
                                "credits": 43750
                            },
                            "cdn": {
                                "30x30": "5970b1599f56c77a1de4227c01c5e900",
                                "63x63": "0351761b8252c9449fddc5139abd7f00",
                                "100x100": "ea7e148224933dbbfc36ddee26f79600"
                            }
                        },
                        {
                            "selling": {
                                "credits": 125000
                            },
                            "cdn": {
                                "30x30": "5970b1599f56c77a1de4227c01c5e900",
                                "63x63": "0351761b8252c9449fddc5139abd7f00",
                                "100x100": "ea7e148224933dbbfc36ddee26f79600"
                            }
                        }
                    ]
                },
                {
                    "L": 61,
                    "name": "Hercules",
                    "T": 16,
                    "C": "ship",
                    "levels": [
                        {
                            "selling": {
                                "credits": 75000
                            },
                            "cdn": {
                                "30x30": "81fcb28481530aea405e79da7f959000",
                                "63x63": "ff679f4f9829a77f8142d0bf667e5b00"
                            }
                        }
                    ]
                },
                {
                    "L": 62,
                    "name": "Rocket Array Module - Low Accuracy",
                    "T": 18,
                    "C": "module",
                    "levels": [
                        {
                            "selling": {
                                "credits": 5000
                            },
                            "cdn": {
                                "30x30": "03c9fc0ad742ae28ec949252e9135000",
                                "63x63": "8aa8f5b5057cd269f59b4c93b1d5ba00",
                                "100x100": "5895065807fc02a256603b05631f8300"
                            }
                        }
                    ]
                },
                {
                    "L": 63,
                    "name": "F-01-TU",
                    "T": 17,
                    "C": "drone",
                    "levels": [
                        {
                            "selling": {
                                "credits": 500000
                            },
                            "cdn": {
                                "30x30": "f8dc4dc044d5bc6ebed961e49bfd5300",
                                "63x63": "40039420f0bf49d22a9026845750bc00",
                                "100x100": "081f6c046cba728960a9ee7138b54600"
                            }
                        }
                    ]
                },
                {
                    "L": 64,
                    "name": "F-02-AR",
                    "T": 17,
                    "C": "drone",
                    "levels": [
                        {
                            "selling": {
                                "credits": 500000
                            },
                            "cdn": {
                                "30x30": "09652aa854d4173047297cbab9e2d500",
                                "63x63": "46d6a4e6f63e31a827ba49311c0d2000",
                                "100x100": "5a93c4393ab8d47e51d8be0b8ef69300"
                            }
                        }
                    ]
                },
                {
                    "L": 65,
                    "name": "G-AR1",
                    "T": 19,
                    "C": "petGear",
                    "levels": [
                        {
                            "selling": {
                                "credits": 6250
                            },
                            "cdn": {
                                "30x30": "56078f012cb43df403c4781f8ddfb000",
                                "63x63": "ed674c42f1cf9bf5c833f8785bc66e00",
                                "100x100": "8a45f18eb3d3af23fdf234bb80807b00"
                            }
                        },
                        {
                            "selling": {
                                "credits": 15000
                            },
                            "cdn": {
                                "30x30": "56078f012cb43df403c4781f8ddfb000",
                                "63x63": "ed674c42f1cf9bf5c833f8785bc66e00",
                                "100x100": "8a45f18eb3d3af23fdf234bb80807b00"
                            }
                        },
                        {
                            "selling": {
                                "credits": 43750
                            },
                            "cdn": {
                                "30x30": "56078f012cb43df403c4781f8ddfb000",
                                "63x63": "ed674c42f1cf9bf5c833f8785bc66e00",
                                "100x100": "8a45f18eb3d3af23fdf234bb80807b00"
                            }
                        }
                    ]
                },
                {
                    "L": 66,
                    "name": "LF-4",
                    "T": 0,
                    "C": "laser",
                    "levels": [
                        {
                            "selling": {
                                "credits": 75000
                            },
                            "cdn": {
                                "30x30": "12046c7960d4b8dcb3b42b9ae3bbbe00",
                                "63x63": "ddd3dc54b0e1fad5c7d893c9d1b19400",
                                "100x100": "eb976bb32197c21a8b6be56eb65e1d00"
                            }
                        }
                    ]
                },
                {
                    "L": 67,
                    "name": "SAB-M01",
                    "T": 14,
                    "C": "battery",
                    "levels": [
                        {
                            "selling": {
                                "credits": 375
                            },
                            "cdn": {
                                "30x30": "9a5f9f1601210579c27e8ad45cf4ec00",
                                "63x63": "c9d8d6a03a9d4881b09cc2409b056f00",
                                "100x100": "4c7dd63001053a9de0c5d3d335470e00"
                            }
                        }
                    ]
                },
                {
                    "L": 68,
                    "name": "Cloak Module Typ A",
                    "T": 8,
                    "C": "special",
                    "levels": [
                        {
                            "cdn": {
                                "30x30": "ff4a801692d7e78b75491daa5af27300",
                                "63x63": "4a89f361f6c950d480ffe842166e4d00",
                                "100x100": "5579d611e2f505fd3317a4ee4e70ee00"
                            }
                        }
                    ]
                }
            ],
            "userInfo": {
                "factionRelated": "vru"
            }
        },
        "money": {
            "uridium": "2.102",
            "credits": "482.139.039"
        },
        "map": {
            "types": [
                "Weapon_LaserType",
                "Weapon_HellstormLauncherType",
                "Weapon_WeaponType",
                "Generator_EngineType",
                "Generator_ShieldType",
                "Generator_GeneratorType",
                "Extra_BoosterType",
                "Extra_Cpu_CPUType",
                "Extra_ModuleType",
                "Extra_RobotType",
                "Extra_UpgradeType",
                "Extra_ExtraType",
                "Weapon_Ammo_LaserType",
                "Weapon_Ammo_RocketType",
                "Weapon_Ammo_AmmunitionType",
                "Resource_OreType",
                "Drone_Design_DroneDesignType",
                "Drone_Formation_DroneFormationType",
                "Module_StationModuleType",
                "Pet_PetGearType",
                "Pet_AIProtocolType",
                "Ship_ShipDesignType",
                "Ship_ShipType",
                "Pet_PetType",
                "Drone_DroneType",
                "Item_ItemType"
            ],
            "lootIds": [
                "ship_goliath_design_sentinel",
                "pet_pet10",
                "drone_iris",
                "ship_nostromo",
                "equipment_weapon_laser_mp-1",
                "ammunition_laser_lcb-10",
                "ammunition_laser_mcb-25",
                "ammunition_rocket_plt-2026",
                "resource_ore_terbium",
                "resource_ore_prometium",
                "resource_ore_endurium",
                "equipment_weapon_laser_lf-2",
                "equipment_generator_shield_sg3n-b01",
                "equipment_extra_cpu_nc-rrb-x",
                "ammunition_laser_mcb-50",
                "ammunition_rocket_plt-2021",
                "equipment_generator_speed_g3n-7900",
                "resource_ore_promerium",
                "equipment_weapon_laser_lf-3",
                "resource_ore_xenomit",
                "ammunition_laser_sab-50",
                "resource_ore_duranium",
                "resource_ore_prometid",
                "ammunition_mine_acm-01",
                "ammunition_laser_ucb-100",
                "equipment_generator_shield_sg3n-a03",
                "equipment_generator_shield_sg3n-b02",
                "equipment_extra_cpu_alb-x",
                "ammunition_firework_fwx-m",
                "ammunition_mine_slm-01",
                "ammunition_rocketlauncher_eco-10",
                "ammunition_firework_fwx-s",
                "ammunition_rocketlauncher_sar-02",
                "ammunition_firework_fwx-l",
                "ammunition_specialammo_pld-8",
                "equipment_extra_cpu_sle-04",
                "equipment_extra_cpu_rok-t01",
                "equipment_extra_cpu_arol-x",
                "ammunition_rocket_plt-3030",
                "equipment_extra_repbot_rep-4",
                "equipment_extra_cpu_ish-01",
                "equipment_extra_cpu_ajp-01",
                "equipment_extra_cpu_g3x-crgo-x",
                "equipment_weapon_rocketlauncher_hst-2",
                "equipment_extra_cpu_jp-02",
                "equipment_extra_cpu_rllb-x",
                "equipment_extra_cpu_rb-x",
                "equipment_petgear_g-rep1",
                "equipment_petgear_g-al1",
                "equipment_petgear_g-tra1",
                "equipment_aiprotocol_ai-r1",
                "module_ltm-mr",
                "resource_blueprint_apis-part",
                "ammunition_mine_ddm-01",
                "drone_designs_havoc",
                "ammunition_laser_rsb-75",
                "module_ram-ma",
                "ammunition_mine_empm-01",
                "ammunition_rocketlauncher_hstrm-01",
                "equipment_extra_cpu_g3x-amry-m",
                "equipment_petgear_g-kk1",
                "drone_designs_hercules",
                "module_ram-la",
                "drone_formation_f-01-tu",
                "drone_formation_f-02-ar",
                "equipment_petgear_g-ar1",
                "equipment_weapon_laser_lf-4",
                "ammunition_mine_sabm-01",
                "equipment_extra_cpu_cl04k-xs",
                "ship_goliath_design_crimson",
                "ship_goliath_design_exalted",
                "ship_goliath_design_veteran",
                "ship_goliath_design_enforcer",
                "ship_goliath_design_bastion",
                "ship_goliath",
                "ammunition_rocket_r-310"
            ]
        }
    }
}';
$decod = json_decode($pram);
$testitems = json_decode($itemstest);
// useme code f0e0f0fa32a7010fb4a184168223bf6e
// f0e0f0fa32a7010fbre23trfergerg34gergre4a184168223bf6e
//$Inven->setInfo(6, 1005);
print_r($Inven->XmlFix('', $testitems));

echo "eyJpc0Vycm9yIjoxLCAiZXJyb3IiOnsibWVzc2FnZSI6IkVycm9yIn19";



?>