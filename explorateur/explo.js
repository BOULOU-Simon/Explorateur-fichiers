
                $('#essai').fileTree({
                    root: '../animaux/',
                    script: 'connectors/jqueryFileTree.php',
                    folderEvent: 'click',
                    expandSpeed: 750,
                    collapseSpeed: 750,
                },  function(file) {
                    $("#lorem").load(".//" + file)
                    
                });
                
                // $(window).load(function(){
                //     function readURL(input) {
                //         if (input.files && input.files[0]) {
                //             var reader = new FileReader();
                             
                //             reader.onload = function (e) {
                //                 $('#blah').attr('src', e.target.result);
                //             }
                             
                //             reader.readAsDataURL(input.files[0]);
                //         }
                //     }
                     
                //     $("#imgInp").change(function(){
                //         readURL(this);
                //     });
                // });

                