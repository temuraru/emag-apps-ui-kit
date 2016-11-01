<!-- SCRIPTS:Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>
<script src="../dist/js/lib/jquery-ui.1.11.4.min.js"></script>
<script src="../dist/js/main_script.min.js"></script>

<!-- _plu_fancytree.php -->
<script src="../dist/plugins/fancytree/fancytree.min.js"></script>
<!-- wisiwig-->
<script src="../dist/plugins/summernote/summernote.min.js"></script>

<!-- PLUGIN: Magnific popup -->
<script src="../dist/plugins/magnific/magnific.min.js"></script>

<!-- PLUGIN: moment.js -->
<script src="../dist/plugins/datetimepicker/moment.2.10.6.min.js"></script>
<!-- PLUGIN: DateRangePicker -->
<script src="../dist/plugins/daterangepicker/daterangepicker.min.js"></script>

<!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
<script src="../dist/plugins/prism/prism.min.js"></script>
<script src="../dist/js/demo_helpers.js"></script>

<!-- SCRIPTS:End -->

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    //_plu_ajax_modals.php
    var modalContent = '<div class="pad-btm-20 text-center">This modal can contain any kind of info.<br>Check out the code documentation on the main page.</div><div class="embed-responsive embed-responsive-16by9"><iframe width="560" height="315" src="https://www.youtube.com/embed/HL1UzIK-flA" allowfullscreen=""></iframe></div>';
        var modalTest = new PhotonModal({
            id: 'testModal',
            title: 'This is an AJAX modal',
            content: modalContent,
            size: 'default',
            type: 'preview',
            buttons: {
                save: {
                    label: 'Wow, much save',
                    class: 'btn-success',
                    icon: 'fa fa-check',
                    closeModal: true
                },
                cancel: {
                    label: 'Very cancel',
                    class: 'btn-default',
                    icon: 'fa fa-times',
                    closeModal: true
                }
            }
        });                 

    $(document).ready(function () {
        console.log('Ready, Captain!');

        // This little old script is just for demo purposes. Chill!

        demoHelpers();  //Requires demo_helpers.js
        
        showcasing();   //Requires demo_helpers.js, prism.min.js and prism.min.css

        //layout.php
        $('input[name="sidebar_fixed_status"], input[name="sidebar_expanded_status"]').on('change', function() {
            updateSideBarCode();
        });

        $('input[name="footer_fixed_status"]').on('change', function() {
            updateFooterBarCode();
        });

        //authentication.php
        $('.user-actions').on('click', function (e) {
            e.preventDefault();
            $('.auth-box').addClass('hidden');
            var link = $(this).attr('href');
            $(link).toggleClass('hidden');
        });
        
        //css_components.php
        var i = 1;
        function blowWorld(selector, no) {
            var thing = document.getElementById(selector);
            thing.getElementsByClassName("badge")[0].innerHTML = no;
        };
        $('#blow_my_world').on('click', function () {
            var no = i++;
            if (no >= 100) {
                alert("Yeah, alright, we get it buddy... It's cool, chill!");
            } else {
                blowWorld(this.id, no);
            }
        });

        //js_components.php
        //This function is just fo sho. You don't really have to include it in your app, man.
        function modalSizing() {
            $('#mySmallDemoModal').on('click', function () {
                var mode = $(this).data('target');
                $(mode).find('.modal-dialog').addClass('modal-sm');
            });
            $('#myLargeDemoModal').on('click', function () {
                var mode = $(this).data('target');
                $(mode).find('.modal-dialog').addClass('modal-lg');
            });
            $('#myDemoModal').on('hidden.bs.modal', function (e) {
                $(this).find('.modal-dialog').attr('class', 'modal-dialog');
            });
        }
        
        modalSizing();

        //_plu_ajax_modals.php
        $('#ajax_modal_start').on('click', function(){
            modalTest.show();
        });

        //_plu_fancytree.php
        window.fancytreeContent = [{
            "key": 31,
            "title": "Software",
            "children": [{"key": 175, "title": "Antivirus", "children": [], "folder": true}, {
                "key": 221,
                "title": "Sisteme de operare",
                "children": [{"key": 225, "title": "Aplicatii desktop OEM", "children": []}, {
                    "key": 226,
                    "title": "Medii de dezvoltare OEM",
                    "children": []
                }, {"key": 227, "title": "Sisteme de operare server OEM", "children": []}, {
                    "key": 228,
                    "title": "Aplicatii server OEM",
                    "children": []
                }, {"key": 340, "title": "Clienti server OEM", "children": []}],
                "folder": true
            }, {
                "key": 222,
                "title": "Office & Aplicatii Desktop",
                "children": [{"key": 229, "title": "Sisteme de operare Retail", "children": []}, {
                    "key": 230,
                    "title": "Aplicatii desktop Retail",
                    "children": []
                }, {"key": 231, "title": "Medii de dezvoltare Retail", "children": []}, {
                    "key": 232,
                    "title": "Sisteme de operare server Retail",
                    "children": []
                }, {"key": 233, "title": "Aplicatii server Retail", "children": []}, {
                    "key": 274,
                    "title": "Documentatii Retail",
                    "children": []
                }, {"key": 344, "title": "Clienti server retail", "children": []}],
                "folder": true
            }, {"key": 361, "title": "Editare foto-video", "children": []}],
            "folder": true
        }, {"key": 1512, "title": "AC", "children": []}, {
            "key": 1513,
            "title": "Photo DSLR",
            "children": [{"key": 378, "title": "Aparate foto D-SLR", "children": []}, {
                "key": 407,
                "title": "Accesorii aparate foto DSLR si Mirrorless",
                "children": [{"key": 443, "title": "Kit curatare DSLR", "children": []}],
                "folder": true
            }, {"key": 1117, "title": "Aparate foto Mirrorless", "children": []}],
            "folder": true
        }, {
            "key": 1514,
            "title": "Photo Compact",
            "children": [{"key": 54, "title": "Aparate foto compacte", "children": []}],
            "folder": true
        }, {
            "key": 1517,
            "title": "AV & HiFi",
            "children": [{"key": 80, "title": "Videoproiectoare", "children": []}, {
                "key": 117,
                "title": "DVD & Blu-Ray Playere",
                "children": []
            }, {
                "key": 408,
                "title": "Audio HI-FI",
                "children": [{"key": 204, "title": "Playere & Receivere", "children": []}, {
                    "key": 539,
                    "title": "Amplificatoare",
                    "children": []
                }, {"key": 540, "title": "Playere", "children": []}, {
                    "key": 542,
                    "title": "Boxe",
                    "children": []
                }, {"key": 635, "title": "Sisteme audio wireless", "children": []}, {
                    "key": 1061,
                    "title": "Pick-Up",
                    "children": []
                }, {"key": 1150, "title": "Accesorii Audio Hi-Fi", "children": []}],
                "folder": true
            }, {"key": 467, "title": "Mediaplayere", "children": []}, {
                "key": 1133,
                "title": "Home Audio",
                "children": [{"key": 113, "title": "Sisteme Home Cinema", "children": []}, {
                    "key": 124,
                    "title": "Sisteme audio",
                    "children": []
                }, {"key": 162, "title": "Radiocasetofoane", "children": []}, {
                    "key": 1140,
                    "title": "Docking",
                    "children": []
                }],
                "folder": true
            }],
            "folder": true
        }, {"key": 1534, "title": "Other Products", "children": [], "folder": true}];
        window.fancytreeContentSelectOnlyLeafs = [{
            "key": 31,
            "title": "Software",
            "hideCheckbox": true,
            "children": [{"key": 175, "title": "Antivirus", "children": [], "folder": true}, {
                "key": 221,
                "title": "Sisteme de operare",
                "children": [{"key": 225, "title": "Aplicatii desktop OEM", "children": []}, {
                    "key": 226,
                    "title": "Medii de dezvoltare OEM",
                    "children": []
                }, {"key": 227, "title": "Sisteme de operare server OEM", "children": []}, {
                    "key": 228,
                    "title": "Aplicatii server OEM",
                    "children": []
                }, {"key": 340, "title": "Clienti server OEM", "children": []}],
                "folder": true
            }, {
                "key": 222,
                "title": "Office & Aplicatii Desktop",
                "children": [{"key": 229, "title": "Sisteme de operare Retail", "children": []}, {
                    "key": 230,
                    "title": "Aplicatii desktop Retail",
                    "children": []
                }, {"key": 231, "title": "Medii de dezvoltare Retail", "children": []}, {
                    "key": 232,
                    "title": "Sisteme de operare server Retail",
                    "children": []
                }, {"key": 233, "title": "Aplicatii server Retail", "children": []}, {
                    "key": 274,
                    "title": "Documentatii Retail",
                    "children": []
                }, {"key": 344, "title": "Clienti server retail", "children": []}],
                "folder": true
            }, {"key": 361, "title": "Editare foto-video", "children": []}],
            "folder": true
        }, {"key": 1512, "title": "AC", "children": []}, {
            "key": 1513,
            "title": "Photo DSLR",
            "hideCheckbox": true,
            "children": [{"key": 378, "title": "Aparate foto D-SLR", "children": []}, {
                "key": 407,
                "title": "Accesorii aparate foto DSLR si Mirrorless",
                "children": [{"key": 443, "title": "Kit curatare DSLR", "children": []}],
                "folder": true
            }, {"key": 1117, "title": "Aparate foto Mirrorless", "children": []}],
            "folder": true
        }, {
            "key": 1514,
            "title": "Photo Compact",
            "hideCheckbox": true,
            "children": [{"key": 54, "title": "Aparate foto compacte", "children": []}],
            "folder": true
        }, {
            "key": 1517,
            "title": "AV & HiFi",
            "hideCheckbox": true,
            "children": [{"key": 80, "title": "Videoproiectoare", "children": []}, {
                "key": 117,
                "title": "DVD & Blu-Ray Playere",
                "children": []
            }, {
                "key": 408,
                "title": "Audio HI-FI",
                "children": [{"key": 204, "title": "Playere & Receivere", "children": []}, {
                    "key": 539,
                    "title": "Amplificatoare",
                    "children": []
                }, {"key": 540, "title": "Playere", "children": []}, {
                    "key": 542,
                    "title": "Boxe",
                    "children": []
                }, {"key": 635, "title": "Sisteme audio wireless", "children": []}, {
                    "key": 1061,
                    "title": "Pick-Up",
                    "children": []
                }, {"key": 1150, "title": "Accesorii Audio Hi-Fi", "children": []}],
                "folder": true
            }, {"key": 467, "title": "Mediaplayere", "children": []}, {
                "key": 1133,
                "title": "Home Audio",
                "children": [{"key": 113, "title": "Sisteme Home Cinema", "children": []}, {
                    "key": 124,
                    "title": "Sisteme audio",
                    "children": []
                }, {"key": 162, "title": "Radiocasetofoane", "children": []}, {
                    "key": 1140,
                    "title": "Docking",
                    "children": []
                }],
                "folder": true
            }],
            "folder": true
        }, {"key": 1534, "title": "Other Products", "children": [], "folder": true}];

        var modalContent =
            "<div class='row'>" +
                "<div class='col-lg-12'>" +
                    "<div>" +
                        "<label for='exampleInputEmail1'>Search an item</label>" +
                        "<input type='text' class='form-control'>" +
                    "</div>" +
                "</div>" +
            "</div>" +
            "<div class='row'>" +
                "<div class='col-lg-4'>" +
                    "<div class='checkbox'>" +
                        "<label>" +
                            "<input type='checkbox'> Hide unmatched " +
                        "</label>" +
                    "</div>" +
                "</div>" +
                "<div class='col-lg-5'>" +
                    "<div class='checkbox'>" +
                        "<label>" +
                            "<input type='checkbox'> Hierarchical multi-selection " +
                        "</label>" +
                    "</div>" +
                "</div>" +
            "</div>" +
            "<div class='row'>" +
                "<div class='col-lg-12'>" +
                    "<div id='modalTree'></div>" +
                "</div>" +
            "</div>";

        //--------------- Fancytree inits ---------------
        $("#tree").fancytree({
            icon: false,
            checkbox: true,
            source: fancytreeContent
        });

        $("#show-fancytree-modal").on("click", function() {
            console.log("Show fancytree modal");
            var fancytreeModal = new PhotonModal({
                id: 'fancytreeModalId',
                title: 'Fancytree in modal',
                content: modalContent,
                type: 'preview',
                buttons: {
                    save: {
                        label: 'Select',
                        class: 'btn-success',
                        icon: 'fa fa-check',
                        closeModal: true
                    },
                    cancel: {
                        label: 'Cancel',
                        class: 'btn-default',
                        icon: 'fa fa-times',
                        closeModal: true
                    }
                },
                showCallback: function() {
                    //Todo: Make modal display buttons on left or right as user chooses (on the moment they are only displayed on right
                    //Task: http://jira:8080/browse/UI-3125
                    if(!$("#reset-btn-id").length) {
                        $("#fancytreeModalId").find(".modal-footer").append(
                            '<div class="pull-left panel-controls">' +
                            '<button class="btn btn-default" id="reset-btn-id" data-dismiss="modal"><span><i class="fa fa-undo"></i> Reset</span></button>' +
                            '</div>'
                        );
                    }
                    $("#modalTree").fancytree({
                        icon: false,
                        checkbox: true,
                        source: fancytreeContent
                    });
                }
            });
            fancytreeModal.show();
        });

        TreeTypeObject = $("#id_category_tree_default").TreeType({
            treeData: fancytreeContent,
            selectId: "category_tree_default"
        });
        TreeTypeObject = $("#id_category_tree_onlyleafs").TreeType({
            treeData: fancytreeContentSelectOnlyLeafs,
            selectId: "category_tree_onlyleafs",
            selectOnlyLeaves: 1
        });

        //wisiwig
        $('#summernote1').summernote({
            minHeight: 300,
            maxHeight: 600
        });
        $('#summernote2').summernote({
            airMode: true
        });
        
        //gallery

        $('#default_magnific').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    closeOnContentClick: false,
                    closeBtnInside: false,
                    mainClass: 'mfp-with-zoom mfp-img-mobile',
                    image: {
                        verticalFit: true,
                        titleSrc: function (item) {
                            return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank">image source</a>';
                        }
                    },
                    gallery: {
                        enabled: true
                    },
                    zoom: {
                        enabled: true,
                        duration: 300, // don't foget to change the duration also in CSS
                        opener: function (element) {
                            return element.find('img');
                        }
                    }
                });

                $('#btnajax_magnific').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    image: {
                        verticalFit: true
                    }

                });
                $('#youtube_magnific').magnificPopup({
                    //disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });

            //datetime

            $('#daterangepicker_standard').daterangepicker();
            $('#daterangepicker_standard_with_value').daterangepicker();
            $('#daterangepicker_standard_with_format').daterangepicker({
                timePicker: true,
                timePicker24Hour: true,
                locale: {
                    format: "YYYY-MM-DD HH:mm"
                }
            });
            $('#daterangepicker_standard_with_predefined_intervals').daterangepicker({
                alwaysShowCalendars: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()]
                },
                locale: {
                    format: 'YYYY-MM-DD'
                }
            });$('#daterangepicker_standard_with_predefined_intervals_no_calendar').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()]
                },
                locale: {
                    format: 'YYYY-MM-DD'
                }
            });

    });

    $(window).load(function () {
        $('.language-markup .token.tag:contains("nav")+.token.attr-name:contains("class")+.token.attr-value').each(function (index, element) {
            $(element).find('.token.punctuation').eq(2).before(' navbar-fixed-top');
        });
    });
</script>
<!-- DOCUMENT-READY:End -->