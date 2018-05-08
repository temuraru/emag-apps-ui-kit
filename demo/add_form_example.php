<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <title>Add form example - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>

    <link rel="stylesheet" href="../dist/css/lib/jquery-ui-custom.1.11.4.min.css">
    <link rel="stylesheet" href="../dist/plugins/fancytree/fancytree.min.css">
    <link rel="stylesheet" href="../dist/plugins/chosen/jQuery.chosen.min.css">
    <link rel="stylesheet" href="../dist/plugins/datetimepicker/bootstrap-datetimepicker.4.17.47.min.css">

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
                <div class="page-header">
                    <h1>
                        Add new product form example
                    </h1>
                </div>
                <div class="panel panel-default">
                    <form data-track-changes="false" id="product_example" name="product_example" method="post" action="" class="" autocomplete="off" novalidate>
                        <fieldset>
                            <legend class="sr-only">product_example</legend>
                            <div id="product_example">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label required" for="product_example_productName">Product name</label>
                                                <input type="text" id="product_example_productName" name="product_example[productName]" required="required" class="form-control" placeholder="Add product name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label required" for="product_example_productDescription">Product description</label>
                                                <textarea id="product_example_productDescription" name="product_example[productDescription]" required="required" class="form-control fixed-width-textarea" rows="5" placeholder="Add product description"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                            <label class="control-label required" for="category_treeDefault">Category tree</label>
                                                            <div class="hide-with-opacity">
                                                                <select id="product_example_productCategory" name="product_example[productCategory]" required="required" multiple="multiple">
                                                                    <option value=""></option>
                                                                    <option value="31">Software</option>
                                                                    <option value="175">Antivirus</option>
                                                                    <option value="221">Sisteme de operare</option>
                                                                    <option value="225">Aplicatii desktop OEM</option>
                                                                    <option value="226">Medii de dezvoltare OEM</option>
                                                                    <option value="227">Sisteme de operare server OEM</option>
                                                                    <option value="228">Aplicatii server OEM</option>
                                                                    <option value="340">Clienti server OEM</option>
                                                                    <option value="222">Office & Aplicatii Desktop</option>
                                                                    <option value="229">Sisteme de operare Retail</option>
                                                                    <option value="230">Aplicatii desktop Retail</option>
                                                                    <option value="231">Medii de dezvoltare Retail</option>
                                                                    <option value="232">Sisteme de operare server Retail</option>
                                                                    <option value="233">Aplicatii server Retail</option>
                                                                    <option value="274">Documentatii Retail</option>
                                                                    <option value="344">Clienti server retail</option>
                                                                    <option value="361">Editare foto-video</option>
                                                                    <option value="1512">AC</option>
                                                                    <option value="1513">Photo DSLR</option>
                                                                    <option value="378">Aparate foto D-SLR</option>
                                                                    <option value="407">Accesorii aparate foto DSLR si Mirrorless</option>
                                                                    <option value="443">Kit curatare DSLR</option>
                                                                    <option value="1117">Aparate foto Mirrorless</option>
                                                                    <option value="1514">Photo Compact</option>
                                                                    <option value="54">Aparate foto compacte</option>
                                                                    <option value="1517">AV & HiFi</option>
                                                                    <option value="80">Videoproiectoare</option>
                                                                    <option value="117">DVD & Blu-Ray Playere</option>
                                                                    <option value="408">Audio HI-FI</option>
                                                                    <option value="204">Playere & Receivere</option>
                                                                    <option value="539">Amplificatoare</option>
                                                                    <option value="540">Playere</option>
                                                                    <option value="542">Boxe</option>
                                                                    <option value="635">Sisteme audio wireless</option>
                                                                    <option value="1061">Pick-Up</option>
                                                                    <option value="1150">Accesorii Audio Hi-Fi</option>
                                                                    <option value="467">Mediaplayere</option>
                                                                    <option value="1133">Home Audio</option>
                                                                    <option value="113">Sisteme Home Cinema</option>
                                                                    <option value="124">Sisteme audio</option>
                                                                    <option value="162">Radiocasetofoane</option>
                                                                    <option value="1140">Docking</option>
                                                                    <option value="1534">Other Products</option>
                                                                </select>
                                                            </div>
                                                            <div class="input-group input-group-no-separation">
                                                                <div class="form-control" id="id_product_example_productCategory"></div>
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-sitemap"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                            <label class="control-label required" for="product_example_productCountry">Country</label>
                                                            <select id="product_example_productCountry" name="product_example[productCountry]" class="form-control chosen-select" required="required" data-placeholder="Select country" multiple="multiple">
                                                                <option value="" ></option>
                                                                <option value="RO" >Romania</option>
                                                                <option value="HU" >Hungary</option>
                                                                <option value="PL" >Poland</option>
                                                                <option value="BG" >Bulgaria</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <p><strong>Status</strong></p>
                                                    <div class="form-group">
                                                        <div class="radio">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="product_example[productStatus]" id="product_example_productStatus_active" class="form-radio-control" value="active"> Active
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="product_example[productStatus]" id="product_example_productStatus_inactive" class="form-radio-control" value="inactive"> Inactive
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <p><strong>Color</strong></p>
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="product_example[productColor][]" id="product_example_productColor_red" class="form-checkbox-control" value="red">
                                                                Red
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="product_example[productColor][]" id="product_example_productColor_blue" class="form-checkbox-control" value="blue">
                                                                Blue
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="product_example[productColor][]" id="product_example_productColor_white" class="form-checkbox-control" value="white">
                                                                White
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                            <label class="control-label required" for="formatted_example">Price (EUR)</label>
                                                            <input type="text" class="form-control text-right" name="product_example[productPrice]" id="product_example_productPrice" required="required" placeholder="Add price">
                                                        </div>
                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                            <label class="control-label" for="formatted_example">Promotion price (EUR)</label>
                                                            <input type="text" class="form-control text-right" name="product_example[productPromotionPrice]" id="product_example_productPromotionPrice" placeholder="Add promotion price">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                            <label class="control-label" for="product_example_productPromotionType">Promotion type</label>
                                                            <select id="product_example_productPromotionType" name="product_example[productPromotionType]" class="form-control">
                                                                <option value="">Select promotion type</option>
                                                                <option value="discount" >Discount</option>
                                                                <option value="fixed" >Fixed</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                            <label class="control-label" for="product_example_productPromotionPeriodStart">Promotion period</label>
                                                            <div class="input-daterange input-group">
                                                                <input type="text" class="form-control" id="product_example_productPromotionPeriodStart" name="product_example[productPromotionPeriodStart]" placeholder="Start date">
                                                                <span class="input-group-addon">to</span>
                                                                <input type="text" class="form-control" id="product_example_productPromotionPeriodEnd" name="product_example[productPromotionPeriodEnd]" placeholder="End date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">
                                        <div class="form-sep">
                                            <span class="required"></span> Mandatory fields
                                        </div>
                                    </span>
                                    <span class="pull-right panel-controls">
                                        <button type="submit" id="product_example_submitbar" class="btn btn-success submitbarButton">Save</button>
                                        <a href="javascript:window.location.replace(document.referrer)" class="btn btn-default backButton">Cancel</a>
                                    </span>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-3.2.1.min.js\">"+"<"+"/script>")</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>

<script src="../dist/js/lib/jquery-ui.1.11.4.min.js"></script>
<script src="../dist/plugins/datetimepicker/moment.2.10.6.min.js"></script>
<script src="../dist/plugins/fancytree/fancytree.min.js"></script>
<script src="../dist/plugins/chosen/jQuery.chosen.min.js"></script>
<script src="../dist/plugins/numberformatter/jQuery.numberFormatter-1.0.0.js"></script>
<script src="../dist/plugins/datetimepicker/bootstrap-datetimepicker.4.17.47.min.js"></script>
<script src="../dist/plugins/datetimepicker/locales/bootstrap-datetimepicker.min.en.js"></script>

<script src="../dist/js/main_script.min.js"></script>
<script src="../dist/js/demo_helpers.js"></script>
<!-- SCRIPTS:End -->

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
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

    var formErrors = {
        product_example_productName: 'Please fill product name',
        product_example_productDescription: 'Please fill product description',
        product_example_productCategory: 'Please select the product category',
        product_example_productCountry: 'Please select the country',
        product_example_productPrice: 'Please set the price'
    };

    $(document).ready(function () {
        console.log('Ready, Captain!');

        demoHelpers();  // Require demo_helpers.js

        TreeTypeObject = $("#id_product_example_productCategory").TreeType({
            treeData: window.fancytreeContent,
            selectId: "product_example_productCategory",
            modalTitle: 'Select',
            modalResetLabel: 'Reset',
            modalCancelLabel: 'Cancel',
            modalOkLabel: 'Select',
            textUnmatched: 'Hide unmatched',
            textSelectHierarchy: 'Hierarchical multi-selection',
            noResults: 'No results found',
            textSelected: 'selected',
            searchPlaceholder: 'Search'
        });

        $('#product_example_productCountry').chosen();

        $("#product_example_productPrice").numberFormatter({
            decimal_separator: ".",
            thousands_separator: ",",
            no_of_decimals: 2
        });
        $("#product_example_productPromotionPrice").numberFormatter({
            decimal_separator: ".",
            thousands_separator: ",",
            no_of_decimals: 2
        });


        $('#product_example_productPromotionPeriodStart').datetimepicker({format : 'DD/MM/YYYY'});
        $('#product_example_productPromotionPeriodEnd').datetimepicker({format : 'DD/MM/YYYY', useCurrent: false});

        $('#product_example').on('submit', function() {
            var $this = $(this);
            var noErrors = true;

            $this.find('input[required="required"], select[required="required"], textarea[required="required"]').each(function (index, element) {
                var $field = $(element);
                var $formGroup = $field.parents('.form-group');
                var fieldId = $field.attr('id');
                var fieldValue = $(this).val();

                if (fieldValue == null || (fieldValue instanceof Array && fieldValue.length == 0) || (typeof(fieldValue) == 'string' && fieldValue == '')) {
                    $formGroup.addClass('has-error');
                    if ($formGroup.find('.help-block').length == 0) {
                        $formGroup.append('<div class="help-block">' + formErrors[fieldId] + '</div>');
                    }

                    noErrors = false;
                } else {
                    $formGroup.removeClass('has-error');
                    $formGroup.find('.help-block').remove();
                }
            });

            if (noErrors) {
                $this[0].reset();
                $('#product_example_productCountry').trigger('chosen:updated.chosen');
                addNotification('<i class="fa fa-check-circle"></i><span>1 product has been added.</span>', 'success-full-color');
            } else {
                errorAlertModal('Please check the fields with errors.', 'Add product errors');
            }

            return false;
        });
    });
</script>
<!-- DOCUMENT-READY:End -->

</body>
</html>
