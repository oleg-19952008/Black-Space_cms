         var w = window.screen.width;
            var h = window.screen.height;
            var res_id = null;
            if (w >= 720) {
                res_id = 1
            }
            if (w >= 1023) {
                res_id = 2
            } if (w >= 1365) {
                res_id = 3
            }
             if (w >= 1439 ) {
                res_id = 4
            }
             if (w >= 1600) {
                 res_id = 5
             }
        console.log("Res ID = "+res_id)