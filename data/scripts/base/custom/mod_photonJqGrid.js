/**
 * Created by george.vlada on 20.04.2016.
 */
(function(window, $) {
    "use strict";

    function PhotonJqGrid(parameters) {

        var $this = this;

        var customCallbacks = {
            'mergeGridComplete': 'gridComplete',
            'mergeLoadComplete': 'loadComplete',
            'mergeOnPaging': 'onPaging'
        };

        var defaultParams = {
            //For options details check here: http://www.trirand.com/jqgridwiki/doku.php?id=wiki:options
            table: '#grid-table',
            pager: '#grid-pager',
            loadtext: '<div class="loader-dots dark"><div class="sk-bounce1"></div><div class="sk-bounce2"></div><div class="sk-bounce3"></div></div>',
            datatype: 'jsonstring',
            mtype: 'POST',

            sortable: true,
            viewrecords: true,
            multiSort: true,
            rowNum: 100,
            rowList: [1, 2, 5, 10, 20, 75, 100],
            multiselect: false,
            multiboxonly: true,
            styleUI : 'fontAwesome',

            shrinkToFit: true,
            autoResizing: { compact: true },
            autowidth: true,
            width: 'auto',
            height: '100%',

            stickyButtons: false,

            mergeOnPaging: true,
            useAutocompleteRow: false,
            onPaging: function() {
                var jqGridOverlay = _getJqGridOverlay();
                jqGridOverlay.addClass('custom-overlay');
            },

            beforeRequest: function () {
                var jqGridOverlay = _getJqGridOverlay();
                //Make overlay background active
                jqGridOverlay.addClass('custom-overlay');
            },
            
            mergeLoadComplete: true,
            loadComplete: function () {
                var jqGridOverlay = _getJqGridOverlay();
                var tableIdSelector = gridOpts.table;
                var tableId = tableIdSelector.slice(1);
                var records = $(tableIdSelector).jqGrid('getGridParam', 'records');

                var $jqgridContainer = $('#' + $(tableIdSelector).attr('aria-labelledby'));
                _updateRecords($jqgridContainer, records);

                _displayNoRecordsMessage(tableId, records);

                jqGridOverlay.removeClass('custom-overlay');
                
                _formatDefaultButtons(tableId);
            },
            mergeGridComplete: true,
            gridComplete: function() {
                var tableIdSelector = gridOpts.table;
                var tableId = tableIdSelector.slice(1);
                var jqGridOverlay = _getJqGridOverlay();
                jqGridOverlay.removeClass('custom-overlay');

                if (gridOpts.stickyButtons && !gridOpts.stickyButtonsInitialized) {
                    _initStickyOnJqGrid(gridOpts);
                    gridOpts.stickyButtonsInitialized = true;
                } else if (gridOpts.stickyButtons) {
                    $(document.body).trigger("sticky_kit:recalc");
                }

                var $jqgridContainer = $('#' + $(tableIdSelector).attr('aria-labelledby'));
                var records = jQuery(tableIdSelector).jqGrid('getGridParam', 'records');

                if(!$jqgridContainer.find('.ui-pg-selbox-container').length){
                    _createContainerForPgSelbox($jqgridContainer,records);
                    _movePgSelbox($jqgridContainer);
                }

                _displayNoRecordsMessage(tableId, records);

                jqGridOverlay.removeClass('custom-overlay');
            },
            caption: null,
            useCustomColumnChooser: false,
            useCustomConfirmationModal: false,
            columnChooserOptions: {}
        };

        var gridOpts = $.extend({}, defaultParams, parameters || {});
        gridOpts.caption = null;
        gridOpts.altRows = null;

        function _formatDefaultButtons(tableId){
            var $table = $('#' + tableId);

            var $buttons = $table.find('.ui-inline-edit, .ui-inline-del, .ui-inline-save, .ui-inline-cancel');
            var noBorderClass = (gridOpts.styleUI == 'fontAwesomeNoBorder') ? ' btn-no-border' : '';

            $.each($buttons, function (index, value) {
                $this = $(this);
                if (!$this.parent().hasClass('btn-group')) {
                    $this.parent().addClass('btn-group').css({
                        'margin': '0'
                    });
                }
                $(this).addClass('btn btn-default btn-sm' + noBorderClass);
            });
            
            $table.off('jqGridInlineAfterRestoreRow', onJqGridInlineAfterRestoreRow)
                    .on('jqGridInlineAfterRestoreRow', onJqGridInlineAfterRestoreRow);

            $table.on('jqGridInlineAfterSaveRow',onJqGridInlineAfterSaveRow)
                    .on('jqGridInlineAfterSaveRow',onJqGridInlineAfterSaveRow);

            function onJqGridInlineAfterSaveRow (event, rowId){
                $table.find('tr').removeClass('success');
                setTimeout(function(){
                    $table.find('tr#' + rowId).addClass('success');
                },0)
            }

            function onJqGridInlineAfterRestoreRow(events,rowId){
                var $buttons = $table.find('tr#' + rowId).find('.ui-inline-edit, .ui-inline-del, .ui-inline-save, .ui-inline-cancel');
                var noBorderClass = (gridOpts.styleUI == 'fontAwesomeNoBorder') ? ' btn-no-border' : '';

                $.each($buttons, function (index, value) {
                    $this = $(this);
                    if (!$this.parent().hasClass('btn-group')) {
                        $this.parent().addClass('btn-group').css({
                            'margin': '0'
                        });
                    }
                    $(this).addClass('btn btn-default btn-sm' + noBorderClass);
                });
            }   
        }

        function _initStickyOnJqGrid(gridOpts){
            var tableId = '#gbox_'+ gridOpts.table.slice(1);
            var $tableHead = $(tableId + ' .ui-jqgrid-hdiv');
            var $tableBody = $(tableId + ' .ui-jqgrid-bdiv');

            _addClassForStickElements(tableId);
            initPhotonStick(tableId);

            $(window).on("sticky_kit:stick", function() {
                $tableHead.scrollLeft($tableBody.scrollLeft());
            }).on("sticky_kit:unstick", function() {
                $tableHead.scrollLeft($tableBody.scrollLeft());
            })
        }

        function _addClassForStickElements(tableId){
            $(tableId +' .ui-jqgrid-hdiv').addClass('stick');
        }

        function _getJqGridOverlay()
        {
            var table = gridOpts.table;
            return $("#lui_" + table.substr(1));
        }

        for(var mergeCallbackOption in customCallbacks) {
            if(_hasCustomCallback(mergeCallbackOption, customCallbacks[mergeCallbackOption])) {
                _mergeCustomCallback(customCallbacks[mergeCallbackOption]);
            }
        }

        function _initCustomConfirmationModal() {
            console.log('_initCustomConfirmationModal');

            $.extend($.jgrid,{
                showModal1 : function(h) {
                    //console.log('showModal');
                    //console.log(h)
                    //h.w.show();
                    h.w.modal('show');
                },

                createModal1 : function(aIDs, content, p, insertSelector, posSelector, appendsel, css) {
                    console.log(aIDs, content, p, insertSelector, posSelector, appendsel, css)
                    
                    p = $.extend(true, {}, $.jgrid.jqModal || {}, p); //merge recursiv, p este un nou obj cu prop si val combinate
		var self = this,
			rtlsup = $(p.gbox).attr("dir") === "rtl" ? true : false,
			classes = $.jgrid.styleUI[(p.styleUI || 'jQueryUI')].modal,
			common = $.jgrid.styleUI[(p.styleUI || 'jQueryUI')].common;

                    var errorTemplate = 
                    '<div tabindex="-1" class="modal modal-alert fade" id="' + aIDs.themodal + '" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="' + aIDs.themodal + 'Label">' +
                        '<div class="modal-dialog " role="document">' +
                            '<div class="modal-content">' +
                                '<div class="ui-jqdialog-content modal-body ' + classes.content + '">' + 
                                    '<h4 class="modal-title alert-modal-title text-danger">' + p.caption + '</h4>' +
                                    $(content).html() + 
                                '</div>' +//end modal-body
                            '</div>' +//end modal-content
                        '</div>' +//end modal-dialog
                    '</div>'//end modal

                    if(appendsel===true) { 
                        $('#pop_space').append(errorTemplate); 
                    } //append as first child in body -for alert dialog
                    else if (typeof appendsel === "string") {
                        $(appendsel).append(errorTemplate);
                    } else {
                        $(errorTemplate).insertBefore(insertSelector);
                    }

                    $('#pop_space').append(errorTemplate);   
                    
                },

                info_dialog1 : function(caption, content,c_b, modalopt) {
                    var mopt = {
                        width:290,
                        height:'auto',
                        dataheight: 'auto',
                        drag: false,
                        resize: false,
                        left:250,
                        top:170,
                        zIndex : 1000,
                        jqModal : true,
                        modal : false,
                        closeOnEscape : true,
                        align: 'left',
                        buttonalign : 'right',
                        buttons : []
                    };
                    $.extend(true, mopt, $.jgrid.jqModal || {}, {caption:"<b>"+caption+"</b>"}, modalopt || {});
                    
                    var jm = mopt.jqModal, self = this,
                    classes = $.jgrid.styleUI[(mopt.styleUI || 'jQueryUI')].modal,
                    common = $.jgrid.styleUI[(mopt.styleUI || 'jQueryUI')].common;
                    if($.fn.jqm && !jm) { jm = false; }
                    // in case there is no jqModal
                    var buttstr ="", i;
                    if(mopt.buttons.length > 0) {//nu stiu cand trece pe aici????
                        for(i=0;i<mopt.buttons.length;i++) {
                            if(mopt.buttons[i].id === undefined) { mopt.buttons[i].id = "info_button_"+i; }
                            buttstr += "<a id='"+mopt.buttons[i].id+"' class='fm-button " + common.button+"'>"+mopt.buttons[i].text+"</a>";
                        }
                    }
                    var dh = isNaN(mopt.dataheight) ? mopt.dataheight : mopt.dataheight+"px",// cred ca se poate declara un height fix pt ce intra in modal body
                    cn = "text-align:"+mopt.align+";";
                    var cnt = "<div class='alert-modal-content'><div id='info_id'>";
                    cnt += "<div id='infocnt' style='"+cn+"'>"+content+"</div>";
                    //daca exista custom btns adaug si butoanele in caz ca e unul il pun sau daca sunt mai multe le construiesc mai sus si le pun
                    cnt += c_b ? "</div></div><div class='clearfix'><div class='pull-right panel-controls'><a id='closedialog' class='fm-button btn btn-default error-alert-modal-ok " + common.button + "'>"+'OK'+"</a>"+buttstr+"</div></div>" :
                        buttstr !== ""  ? "</div></div><div class='clearfix'><div class='pull-right panel-controls'>"+buttstr+"</div>" : "";
                    cnt += "</div>";
            
                    try {
                        //if($("#info_dialog").attr("aria-hidden") === "false") {
                           // $.jgrid.hideModal("#info_dialog",{jqm:jm});
                        //}
                        $("#info_dialog").remove();
                        $('.modal-backdrop').remove();
                        $(body).removeClass('modal-open');
                    } catch (e){}


                    $.jgrid.createModal({
                        themodal:'info_dialog',
                        modalhead:'info_head',
                        modalcontent:'info_content',
                        scrollelm: 'infocnt'},
                        cnt,
                        mopt,
                        '','',true
                    );
                    // attach onclick after inserting into the dom
                    if(buttstr) {
                        $.each(mopt.buttons,function(i){
                            $("#"+$.jgrid.jqID(this.id),"#info_id").on('click',function(){mopt.buttons[i].onClick.call($("#info_dialog")); return false;});
                        });
                    }
                    $("#closedialog").on('click',function(){
                        self.hideModal("#info_dialog",{
                            jqm:jm,
                            onClose: $("#info_dialog").data("onClose") || mopt.onClose,
                            gb: $("#info_dialog").data("gbox") || mopt.gbox
                        });
                        return false;
                    });

                    if($.isFunction(mopt.beforeOpen) ) { mopt.beforeOpen(); }

                    $.jgrid.viewModal("#info_dialog",{
                        onHide: function(h) {
                            h.w.hide().remove();
                            if(h.o) { h.o.remove(); }
                        },
                        modal :mopt.modal,
                        jqm:jm
                    });
                    if($.isFunction(mopt.afterOpen) ) { mopt.afterOpen(); }
                    try{ $("#info_dialog").focus();} catch (m){}
                },

                hideModal1 : function (selector,o) {
                    o = $.extend({jqm : true, gb :'', removemodal: false, formprop: false, form : ''}, o || {});
                    var thisgrid = o.gb && typeof o.gb === "string" && o.gb.substr(0,6) === "#gbox_" ? $("#" + o.gb.substr(6))[0] : false;
                    if(o.onClose) {
                        var oncret = thisgrid ? o.onClose.call(thisgrid, selector) : o.onClose(selector);
                        if (typeof oncret === 'boolean'  && !oncret ) { return; }
                    }
                    if( o.formprop && thisgrid  && o.form) {
                        var fh = $(selector)[0].style.height,
                        fw = $(selector)[0].style.width;
                        if(fh.indexOf("px") > -1 ) {
                            fh = parseFloat(fh);
                        }
                        if(fw.indexOf("px") > -1 ) {
                            fw = parseFloat(fw);
                        }
                        var frmgr, frmdata;
                        if(o.form==='edit'){
                            frmgr = '#' +$.jgrid.jqID("FrmGrid_"+ o.gb.substr(6));
                            frmdata = "formProp";
                        } else if( o.form === 'view') {
                            frmgr = '#' +$.jgrid.jqID("ViewGrid_"+ o.gb.substr(6));
                            frmdata = "viewProp";
                        }
                        $(thisgrid).data(frmdata, {
                            top:parseFloat($(selector).css("top")),
                            left : parseFloat($(selector).css("left")),
                            width : fw,
                            height : fh,
                            dataheight : $(frmgr).height(),
                            datawidth: $(frmgr).width()
                        });
                    }
                    if ($.fn.jqm && o.jqm === true) {
                        $(selector).attr("aria-hidden","true").jqmHide();
                        $('.modal-backdrop').remove();
                        $('body').removeClass('modal-open');
                        $( window ).trigger('resize')
                    } else {
                        if(o.gb !== '') {
                            try {$(".jqgrid-overlay:first",o.gb).hide();} catch (e){}
                        }
                        $(selector).hide().attr("aria-hidden","true");
                        $('.modal-backdrop').remove();
                        $('body').removeClass('modal-open');
                        $( window ).trigger('resize')
                    }
                    if( o.removemodal ) {
                        $('.modal-backdrop').remove();
                        $('body').removeClass('modal-open');
                        $(selector).remove();
                        $( window ).trigger('resize')
                    }
                }
            })  
        }

        function _initCustomColumnChooser() {

            $.jgrid.extend({
                columnChooser: function() {

                    var defaultOptions = {
                        selectAllCheckboxLabel: 'Select all',
                        saveBtnLabel: 'Done',
                        cancelBtnLabel: 'Cancel',
                        actionButton: ''
                    };
                    var opts = $.extend(defaultOptions, gridOpts.columnChooserOptions);
                    var self = this;

                    var dropId = self[0].id + '_drop_jsc';
                    var drop;

                    var $body = $('body');
                    var $button = $(opts.actionButton);

                    _initDrop($button);

                    _initColumnChooserEvents();

                    function _initColumnChooserEvents() {
                        $body.on('input', '#' + dropId + ' .jsc-search', function() {
                            var searchString = $(this).val().toLowerCase();
                            var results = 0;
                            $('#' + dropId + ' .dd-jsc-checkbox-all-columns .checkbox .jsc-col-name').each(function (i) {
                                var $this = $(this);
                                var colName = $this.html();

                                if (colName.toLowerCase().indexOf(searchString) === -1) {
                                    $this.parents('.checkbox').parent().addClass('hide');
                                } else {
                                    $this.parents('.checkbox').parent().removeClass('hide');
                                    results++;
                                }
                            });

                            if (!results) {
                                $('#' + dropId + ' .dd-jsc-checkbox.dd-jsc-one-item').addClass('no-border-bottom');
                                $('#' + dropId + ' .dd-jsc-checkbox-all-columns').addClass('hide');
                            } else {
                                $('#' + dropId + ' .dd-jsc-checkbox.dd-jsc-one-item').removeClass('no-border-bottom');
                                $('#' + dropId + ' .dd-jsc-checkbox-all-columns').removeClass('hide');
                            }

                            $('#' + dropId + ' .dd-jsc-checkbox-all-columns li').removeClass('no-border-top');
                            $('#' + dropId + ' .dd-jsc-checkbox-all-columns').find('li:not(.hide)').eq(0).addClass('no-border-top');
                        });

                        $body.on('click', '#' + dropId + ' .jsc-checkbox-all', function() {
                            if (this.checked) {
                                $('#' + dropId + ' .jsc-search').val('');
                                $('#' + dropId + ' .dd-jsc-checkbox-all-columns li').removeClass('hide');
                                $('#' + dropId + ' .jsc-checkbox').prop('checked', true);
                                
                                $('#' + dropId + ' .btn-jsc-save-btn').prop('disabled', false);

                                $('#' + dropId + ' .dd-jsc-checkbox.dd-jsc-one-item').removeClass('no-border-bottom');
                                $('#' + dropId + ' .dd-jsc-checkbox-all-columns').removeClass('hide');
                            } else {
                                $('#' + dropId + ' .jsc-checkbox').prop('checked', false);

                                $('#' + dropId + ' .btn-jsc-save-btn').prop('disabled', true);
                            }
                        });

                        $body.on('click', '#' + dropId + ' .jsc-checkbox', function() {
                            if (!this.checked) {
                                $('#' + dropId + ' .jsc-checkbox-all').prop('checked', false);
                            }

                            if ($('#' + dropId + ' .jsc-checkbox:checked').length > 0) {
                                $('#' + dropId + ' .btn-jsc-save-btn').prop('disabled', false);
                            } else {
                                $('#' + dropId + ' .btn-jsc-save-btn').prop('disabled', true);
                            }
                        });

                        $body.off('click', '#' + dropId + ' .btn-jsc-save-btn');
                        $body.off('click', '#' + dropId + ' .btn-jsc-cancel-btn');

                        $body.on('click', '#' + dropId + ' .btn-jsc-save-btn', function() {
                            var colModel = self.jqGrid('getGridParam', 'colModel');

                            $('#' + dropId + ' .dd-jsc-checkbox-all-columns .jsc-checkbox').each(function (i) {
                                if (this.checked) {
                                    self.jqGrid('showCol', colModel[this.value].name);
                                } else {
                                    self.jqGrid('hideCol', colModel[this.value].name);
                                }
                            });
                            photonResizeGrid();
                            drop.close();
                        });

                        $body.on('click', '#' + dropId + ' .btn-jsc-cancel-btn', function() {
                            var colModel = self.jqGrid('getGridParam', 'colModel');
                            $.each(colModel, function (i) {
                                $('#' + dropId + ' .jsc-checkbox[value="' + i + '"]').prop('checked', !this.hidden);
                            });
                            drop.close();
                        });
                    }

                    function _initDrop($button) {
                        drop = new Drop({
                            target: $button[0],
                            classes: 'drop-actions',
                            content: '<div id="' + dropId + '">' +
                                    '<ul class="dropdown-menu dropdown-default dd-jqgrid-select-columns dd-jsc-one-item">' +
                                        '<li>' +
                                            '<input type="text" class="form-control jsc-search" placeholder="Search">' +
                                        '</li>' +
                                    '</ul>' +
                                    '<ul class="dropdown-menu dropdown-default dd-jqgrid-select-columns dd-jsc-checkbox dd-jsc-one-item">' +
                                        '<li>' +
                                            '<div class="checkbox"><label><input type="checkbox" class="form-checkbox-control jsc-checkbox-all" value="" checked=""> (' + opts.selectAllCheckboxLabel +')</label></div>' +
                                        '</li>' +
                                    '</ul>' +
                                    '<ul class="dropdown-menu dropdown-default dd-jqgrid-select-columns dd-jsc-checkbox dd-jsc-checkbox-all-columns">' +
                                        _getColumnsCheckboxes() +
                                    '</ul>' +
                                    '<ul class="dropdown-menu dropdown-default dd-jqgrid-select-columns dd-jsc-buttons">' +
                                        '<li>' +
                                            '<button type="button" class="btn btn-default btn-jsc-cancel-btn">' + opts.cancelBtnLabel + '</button> ' +
                                            '<button type="button" class="btn btn-primary btn-jsc-save-btn pull-right">' + opts.saveBtnLabel + '</button>' +
                                        '</li>' +
                                    '</ul>' +
                                '</div>',
                            position: 'bottom right',
                            openOn: 'click',
                            constrainToWindow: true,
                            constrainToScrollParent: false,
                            tetherOptions: {
                                offset: '-5px 0'
                            }
                        });
                    }

                    function _getColumnsCheckboxes() {
                        var columnsCheckboxes = '';
                        var colModel = self.jqGrid('getGridParam', 'colModel');
                        var colNames = self.jqGrid('getGridParam', 'colNames');

                        $.each(colModel, function(i) {
                            if (colModel[i].name !== 'cb') {
                                var checkedStatus = this.hidden? '' : 'checked="checked"';

                                columnsCheckboxes += '<li>' +
                                        '<div class="checkbox">' +
                                            '<label>' +
                                                '<input type="checkbox" class="form-checkbox-control jsc-checkbox" value="' + i + '"' + checkedStatus + '> ' +
                                                '<span class="jsc-col-name">' + colNames[i] + '</span>' +
                                            '</label>' +
                                        '</div>' +
                                    '</li>';
                            }
                        });

                        return columnsCheckboxes;
                    }
                }
            });
        }

        function _movePgSelbox($jqgridContainer){
            $.each( $jqgridContainer.find('.ui-pg-selbox'), function() {
                var $selbox = $(this);
                $selbox.appendTo($selbox.closest('.ui-pager-control').find('.ui-pg-selbox-container span').eq(0))
            });
        }

        function _createContainerForPgSelbox($jqgridContainer, records) {
            $jqgridContainer.find('.ui-pager-control').append(
                '<div class="ui-pg-selbox-container">' +
                photonTranslations.listing[photonPageLang].view +
                '<span></span>' +
                photonTranslations.listing[photonPageLang].of +
                ' <span class="no-items">' +
                records +
                '</span> ' +
                photonTranslations.listing[photonPageLang].items +
                '</div>'
            );
        }

        function _updateRecords($jqgridContainer, records){
            $jqgridContainer.find('.ui-pager-control .no-items').html(records);
        }

        function _displayNoRecordsMessage(tableId, records) {
            //Display no records message.
            var noRecordsMessage = photonTranslations.listing[photonPageLang].noResults;

            var emptyMessage = $(
                '<div class="custom-jqgrid-messages-'+ tableId +' custom-jqgrid-no-records-'+ tableId +' alert alert-info">' +
                '<i class="fa fa-info-circle"></i> ' +
                noRecordsMessage +
                '</div>'
            );

            if (records == 0) {
                $('.custom-jqgrid-messages-' + tableId).remove();
                $('#' + tableId).parent().append(emptyMessage);
                $('#gbox_'+ tableId +' .ui-jqgrid-pager').addClass('hide');
            } else {
                $('#gbox_'+ tableId +' .ui-jqgrid-pager').removeClass('hide');
                $('#'+ tableId ).removeClass('hide');
                $('.custom-jqgrid-messages-' + tableId).remove();
            }
        }

        this.init = function () {

            $.extend($.jgrid,{
                styleUI : {
                    jQueryUI : {
                        common : {
                            disabled: "ui-state-disabled",
                            highlight : "ui-state-highlight",
                            hover : "ui-state-hover",
                            cornerall: "ui-corner-all",
                            cornertop: "ui-corner-top",
                            cornerbottom : "ui-corner-bottom",
                            hidden : "ui-helper-hidden",
                            icon_base : "ui-icon",
                            overlay : "ui-widget-overlay",
                            active : "ui-state-active",
                            error : "ui-state-error",
                            button : "ui-state-default ui-corner-all",
                            content : "ui-widget-content"
                        },
                        base : {
                            entrieBox : "ui-widget ui-widget-content ui-corner-all", // entrie div  incl everthing
                            viewBox : "", // view diw
                            headerTable : "",
                            headerBox : "ui-state-default",
                            rowTable : "",
                            rowBox : "ui-widget-content",
                            stripedTable : "ui-jqgrid-table-striped",
                            footerTable : "",
                            footerBox : "ui-widget-content",
                            headerDiv : "ui-state-default",
                            gridtitleBox : "ui-widget-header ui-corner-top ui-helper-clearfix",
                            customtoolbarBox : "ui-state-default",
                            //overlayBox: "ui-widget-overlay",
                            loadingBox : "ui-state-default ui-state-active",
                            rownumBox :  "ui-state-default",
                            scrollBox : "ui-widget-content",
                            multiBox : "",
                            pagerBox : "ui-state-default ui-corner-bottom",
                            pagerTable : "",
                            toppagerBox : "ui-state-default",
                            pgInput : "ui-corner-all",
                            pgSelectBox : "ui-widget-content ui-corner-all",
                            pgButtonBox : "ui-corner-all",
                            icon_first : "ui-icon-seek-first",
                            icon_prev : "ui-icon-seek-prev",
                            icon_next: "ui-icon-seek-next",
                            icon_end: "ui-icon-seek-end",
                            icon_asc : "ui-icon-triangle-1-n",
                            icon_desc : "ui-icon-triangle-1-s",
                            icon_caption_open : "ui-icon-circle-triangle-n",
                            icon_caption_close : "ui-icon-circle-triangle-s"
                        },
                        modal : {
                            modal : "ui-widget ui-widget-content ui-corner-all ui-dialog",
                            header : "ui-widget-header ui-corner-all ui-helper-clearfix",
                            content :"ui-widget-content",
                            resizable : "ui-resizable-handle ui-resizable-se",
                            icon_close : "ui-icon-closethick",
                            icon_resizable : "ui-icon-gripsmall-diagonal-se"
                        },
                        celledit : {
                            inputClass : "ui-widget-content ui-corner-all"
                        },
                        inlinedit : {
                            inputClass : "ui-widget-content ui-corner-all",
                            icon_edit_nav : "ui-icon-pencil",
                            icon_add_nav : "ui-icon-plus",
                            icon_save_nav : "ui-icon-disk",
                            icon_cancel_nav : "ui-icon-cancel"
                        },
                        formedit : {
                            inputClass : "ui-widget-content ui-corner-all",
                            icon_prev : "ui-icon-triangle-1-w",
                            icon_next : "ui-icon-triangle-1-e",
                            icon_save : "ui-icon-disk",
                            icon_close : "ui-icon-close",
                            icon_del : "ui-icon-scissors",
                            icon_cancel : "ui-icon-cancel"
                        },
                        navigator : {
                            icon_edit_nav : "ui-icon-pencil",
                            icon_add_nav : "ui-icon-plus",
                            icon_del_nav : "ui-icon-trash",
                            icon_search_nav : "ui-icon-search",
                            icon_refresh_nav : "ui-icon-refresh",
                            icon_view_nav : "ui-icon-document",
                            icon_newbutton_nav : "ui-icon-newwin"
                        },
                        grouping : {
                            icon_plus : 'ui-icon-circlesmall-plus',
                            icon_minus : 'ui-icon-circlesmall-minus'
                        },
                        filter : {
                            table_widget : 'ui-widget ui-widget-content',
                            srSelect : 'ui-widget-content ui-corner-all',
                            srInput : 'ui-widget-content ui-corner-all',
                            menu_widget : 'ui-widget ui-widget-content ui-corner-all',
                            icon_search : 'ui-icon-search',
                            icon_reset : 'ui-icon-arrowreturnthick-1-w',
                            icon_query :'ui-icon-comment'
                        },
                        subgrid : {
                            icon_plus : 'ui-icon-plus',
                            icon_minus : 'ui-icon-minus',
                            icon_open : 'ui-icon-carat-1-sw'
                        },
                        treegrid : {
                            icon_plus : 'ui-icon-triangle-1-',
                            icon_minus : 'ui-icon-triangle-1-s',
                            icon_leaf : 'ui-icon-radio-off'
                        },
                        fmatter : {
                            icon_edit : "ui-icon-pencil",
                            icon_add : "ui-icon-plus",
                            icon_save : "ui-icon-disk",
                            icon_cancel : "ui-icon-cancel",
                            icon_del : "ui-icon-trash"
                        },
                        colmenu : {
                            menu_widget : 'ui-widget ui-widget-content ui-corner-all',
                            input_checkbox : "ui-widget ui-widget-content",
                            filter_select: "ui-widget-content ui-corner-all",
                            filter_input : "ui-widget-content ui-corner-all",
                            icon_menu : "ui-icon-comment",
                            icon_sort_asc : "ui-icon-arrow-1-n",
                            icon_sort_desc : "ui-icon-arrow-1-s",
                            icon_columns : "ui-icon-extlink",
                            icon_filter : "ui-icon-calculator",
                            icon_group : "ui-icon-grip-solid-horizontal",
                            icon_freeze : "ui-icon-grip-solid-vertical",
                            icon_move: "ui-icon-arrow-4"
                        }
                    },
                    Bootstrap : {
                        common : {
                            disabled: "ui-disabled",
                            highlight : "success",
                            hover : "active",
                            cornerall: "",
                            cornertop: "",
                            cornerbottom : "",
                            hidden : "",
                            icon_base : "glyphicon",
                            overlay: "ui-overlay",
                            active : "active",
                            error : "bg-danger",
                            button : "btn btn-default",
                            content : ""
                        },
                        base : {
                            entrieBox : "",
                            viewBox : "table-responsive",
                            headerTable : "table table-bordered",
                            headerBox : "",
                            rowTable : "table table-bordered",
                            rowBox : "",
                            stripedTable : "table-striped",
                            footerTable : "table table-bordered",
                            footerBox : "",
                            headerDiv : "",
                            gridtitleBox : "",
                            customtoolbarBox : "",
                            //overlayBox: "ui-overlay",
                            loadingBox : "row",
                            rownumBox :  "active",
                            scrollBox : "",
                            multiBox : "checkbox",
                            pagerBox : "",
                            pagerTable : "table",
                            toppagerBox : "",
                            pgInput : "form-control",
                            pgSelectBox : "form-control",
                            pgButtonBox : "",
                            icon_first : "glyphicon-step-backward",
                            icon_prev : "glyphicon-backward",
                            icon_next: "glyphicon-forward",
                            icon_end: "glyphicon-step-forward",
                            icon_asc : "glyphicon-triangle-top",
                            icon_desc : "glyphicon-triangle-bottom",
                            icon_caption_open : "glyphicon-circle-arrow-up",
                            icon_caption_close : "glyphicon-circle-arrow-down"
                        },
                        modal : {
                            modal : "modal-content",
                            header : "modal-header",
                            title : "modal-title",
                            content :"modal-body",
                            resizable : "ui-resizable-handle ui-resizable-se",
                            icon_close : "glyphicon-remove-circle",
                            icon_resizable : "glyphicon-import"
                        },
                        celledit : {
                            inputClass : 'form-control'
                        },
                        inlinedit : {
                            inputClass : 'form-control',
                            icon_edit_nav : "glyphicon-edit",
                            icon_add_nav : "glyphicon-plus",
                            icon_save_nav : "glyphicon-save",
                            icon_cancel_nav : "glyphicon-remove-circle"
                        },
                        formedit : {
                            inputClass : "form-control",
                            icon_prev : "glyphicon-step-backward",
                            icon_next : "glyphicon-step-forward",
                            icon_save : "glyphicon-save",
                            icon_close : "glyphicon-remove-circle",
                            icon_del : "glyphicon-trash",
                            icon_cancel : "glyphicon-remove-circle"
                        },
                        navigator : {
                            icon_edit_nav : "glyphicon-edit",
                            icon_add_nav : "glyphicon-plus",
                            icon_del_nav : "glyphicon-trash",
                            icon_search_nav : "glyphicon-search",
                            icon_refresh_nav : "glyphicon-refresh",
                            icon_view_nav : "glyphicon-info-sign",
                            icon_newbutton_nav : "glyphicon-new-window"
                        },
                        grouping : {
                            icon_plus : 'glyphicon-triangle-right',
                            icon_minus : 'glyphicon-triangle-bottom'
                        },
                        filter : {
                            table_widget : 'table table-condensed',
                            srSelect : 'form-control',
                            srInput : 'form-control',
                            menu_widget : '',
                            icon_search : 'glyphicon-search',
                            icon_reset : 'glyphicon-refresh',
                            icon_query :'glyphicon-comment'
                        },
                        subgrid : {
                            icon_plus : 'glyphicon-triangle-right',
                            icon_minus : 'glyphicon-triangle-bottom',
                            icon_open : 'glyphicon-indent-left'
                        },
                        treegrid : {
                            icon_plus : 'glyphicon-triangle-right',
                            icon_minus : 'glyphicon-triangle-bottom',
                            icon_leaf : 'glyphicon-unchecked'
                        },
                        fmatter : {
                            icon_edit : "glyphicon-edit",
                            icon_add : "glyphicon-plus",
                            icon_save : "glyphicon-save",
                            icon_cancel : "glyphicon-remove-circle",
                            icon_del : "glyphicon-trash"
                        },
                        colmenu : {
                            menu_widget : '',
                            input_checkbox : "",
                            filter_select: "form-control",
                            filter_input : "form-control",
                            icon_menu : "glyphicon-menu-hamburger",
                            icon_sort_asc : "glyphicon-sort-by-alphabet",
                            icon_sort_desc : "glyphicon-sort-by-alphabet-alt",
                            icon_columns : "glyphicon-list-alt",
                            icon_filter : "glyphicon-filter",
                            icon_group : "glyphicon-align-left",
                            icon_freeze : "glyphicon-object-align-horizontal",
                            icon_move: "glyphicon-move"
                        }
                    },
                    fontAwesome : {
                        common : {
                            disabled: "ui-disabled",
                            highlight : "highlight",
                            hover : "active",
                            cornerall: "2px",
                            cornertop: "2px",
                            cornerbottom : "2px",
                            hidden : "sr-only",
                            icon_base : "fa",
                            overlay: "ui-overlay",
                            active : "active",
                            error : "bg-danger",
                            button : "btn btn-default",
                            content : ""
                        },
                        base : {
                            entrieBox : "",
                            viewBox : "table-responsive",
                            headerTable : "table table-bordered",
                            headerBox : "",
                            rowTable : "table table-bordered",
                            rowBox : "",
                            footerTable : "table table-bordered",
                            footerBox : "",
                            headerDiv : "",
                            gridtitleBox : "",
                            customtoolbarBox : "",
                            //overlayBox: "ui-overlay",
                            loadingBox : "row",
                            rownumBox :  "active",
                            scrollBox : "",
                            multiBox : "checkbox",
                            pagerBox : "ui-pager-box",
                            pagerTable : "table",
                            toppagerBox : "",
                            pgInput : "form-control",
                            pgSelectBox : "form-control",
                            pgButtonBox : "btn btn-default",
                            icon_first : "fa-angle-double-left",
                            icon_prev : "fa-angle-left",
                            icon_next: "fa-angle-right",
                            icon_end: "fa-angle-double-right",
                            icon_asc : "fa-caret-up",
                            icon_desc : "fa-caret-down",
                            icon_caption_open : "fa-chevron-up",
                            icon_caption_close : "fa-chevron-down"
                        },
                        modal : {
                            modal : "modal-content",
                            header : "modal-header",
                            title : "modal-title",
                            content :"modal-body",
                            resizable : "",
                            icon_close : "fa-remove",
                            icon_resizable : ""
                        },
                        celledit : {
                            inputClass : 'form-control'
                        },
                        inlinedit : {
                            inputClass : 'form-control',
                            icon_edit_nav : "fa-pencil",
                            icon_add_nav : "fa-plus",
                            icon_save_nav : "fa-check-circle",
                            icon_cancel_nav : "fa-remove"
                        },
                        formedit : {
                            inputClass : "form-control",
                            icon_prev : "fa fa-chevron-left",
                            icon_next : "fa fa-chevron-right",
                            icon_save : "",
                            icon_close : "",
                            icon_del : "",
                            icon_cancel : ""
                        },
                        navigator : {
                            icon_edit_nav : "fa-pencil",
                            icon_add_nav : "fa-plus",
                            icon_del_nav : "fa-trash",
                            icon_search_nav : "fa-search",
                            icon_refresh_nav : "fa-refresh",
                            icon_view_nav : "fa-eye",
                            icon_newbutton_nav : "fa-external-link-square"
                        },
                        grouping : {
                            icon_plus : 'fa-expand',
                            icon_minus : 'fa-compress'
                        },
                        filter : {
                            table_widget : 'table table-condensed',
                            srSelect : 'form-control',
                            srInput : 'form-control',
                            menu_widget : '',
                            icon_search : 'fa-search',
                            icon_reset : 'fa-refresh',
                            icon_query :'fa-comment'
                        },
                        subgrid : {
                            icon_plus : 'fa-caret-right',
                            icon_minus : 'fa-caret-down',
                            icon_leaf : 'fa-circle-o'
                        },
                        treegrid : {
                            icon_plus : 'fa-caret-right',
                            icon_minus : 'fa-caret-down',
                            icon_leaf : 'fa-circle-o'
                        },
                        fmatter : {
                            icon_edit : "fa-pencil",
                            icon_add : "fa-plus",
                            icon_save : "fa-check-circle",
                            icon_cancel : "fa-remove",
                            icon_del : "fa-trash"
                        }
                    },
                    fontAwesomeNoBorder : {
                        common : {
                            disabled: "ui-disabled",
                            highlight : "highlight",
                            hover : "active",
                            cornerall: "2px",
                            cornertop: "2px",
                            cornerbottom : "2px",
                            hidden : "sr-only",
                            icon_base : "fa",
                            overlay: "ui-overlay",
                            active : "active",
                            error : "bg-danger",
                            button : "btn btn-default",
                            content : ""
                        },
                        base : {
                            entrieBox : "table-no-border",
                            viewBox : "table-responsive",
                            headerTable : "table table-bordered",
                            headerBox : "bb",
                            rowTable : "table table-bordered",
                            rowBox : "cc",
                            footerTable : "table table-bordered",
                            footerBox : "dd",
                            headerDiv : "ff",
                            gridtitleBox : "gg",
                            customtoolbarBox : "hh",
                            //overlayBox: "ui-overlay",
                            loadingBox : "row ii",
                            rownumBox :  "active",
                            scrollBox : "jj",
                            multiBox : "checkbox",
                            pagerBox : "ui-pager-box",
                            pagerTable : "table",
                            toppagerBox : "",
                            pgInput : "form-control",
                            pgSelectBox : "form-control",
                            pgButtonBox : "btn btn-default",
                            icon_first : "fa-angle-double-left",
                            icon_prev : "fa-angle-left",
                            icon_next: "fa-angle-right",
                            icon_end: "fa-angle-double-right",
                            icon_asc : "fa-caret-up",
                            icon_desc : "fa-caret-down",
                            icon_caption_open : "fa-chevron-up",
                            icon_caption_close : "fa-chevron-down"
                        },
                        modal : {
                            modal : "modal-content",
                            header : "modal-header",
                            title : "modal-title",
                            content :"modal-body",
                            resizable : "",
                            icon_close : "fa-remove",
                            icon_resizable : ""
                        },
                        celledit : {
                            inputClass : 'form-control'
                        },
                        inlinedit : {
                            inputClass : 'form-control',
                            icon_edit_nav : "fa-pencil",
                            icon_add_nav : "fa-plus",
                            icon_save_nav : "fa-check-circle",
                            icon_cancel_nav : "fa-remove"
                        },
                        formedit : {
                            inputClass : "form-control",
                            icon_prev : "fa fa-chevron-left",
                            icon_next : "fa fa-chevron-right",
                            icon_save : "",
                            icon_close : "",
                            icon_del : "",
                            icon_cancel : ""
                        },
                        navigator : {
                            icon_edit_nav : "fa-pencil",
                            icon_add_nav : "fa-plus",
                            icon_del_nav : "fa-trash",
                            icon_search_nav : "fa-search",
                            icon_refresh_nav : "fa-refresh",
                            icon_view_nav : "fa-eye",
                            icon_newbutton_nav : "fa-external-link-square"
                        },
                        grouping : {
                            icon_plus : 'fa-expand',
                            icon_minus : 'fa-compress'
                        },
                        filter : {
                            table_widget : 'table table-condensed',
                            srSelect : 'form-control',
                            srInput : 'form-control',
                            menu_widget : '',
                            icon_search : 'fa-search',
                            icon_reset : 'fa-refresh',
                            icon_query :'fa-comment'
                        },
                        subgrid : {
                            icon_plus : 'fa-caret-right',
                            icon_minus : 'fa-caret-down',
                            icon_leaf : 'fa-circle-o'
                        },
                        treegrid : {
                            icon_plus : 'fa-caret-right',
                            icon_minus : 'fa-caret-down',
                            icon_leaf : 'fa-circle-o'
                        },
                        fmatter : {
                            icon_edit : "fa-pencil",
                            icon_add : "fa-plus",
                            icon_save : "fa-check-circle",
                            icon_cancel : "fa-remove",
                            icon_del : "fa-trash"
                        }
                    }
                }
            });

            $this.grid = $(gridOpts.table).jqGrid(gridOpts);
            var jqGridOverlay = _getJqGridOverlay();
            //The overlay class should be added if data is added through ajax
            if(gridOpts.datatype && gridOpts.datatype !== 'jsonstring') {
                jqGridOverlay.removeClass('ui-overlay').addClass('custom-overlay');
            }
            if(gridOpts.useCustomColumnChooser) {
                _initCustomColumnChooser();
            }
            if(gridOpts.useCustomConfirmationModal) {
                _initCustomConfirmationModal();
            }
            if(gridOpts.useAutocompleteRow) {
                $($this.grid).parents('.ui-jqgrid-bdiv:first').addClass('reset-overflow');
                $($this.grid).parents('.ui-jqgrid-view:first').removeClass('table-responsive');
            }
        };

        function _mergeCustomCallback(callback) {
            var defaultCallback = defaultParams[callback];
            var customCallback = parameters[callback];
            gridOpts[callback] = function () {
                defaultCallback();
                customCallback(gridOpts.table);
            }
        }

        function _hasCustomCallback(mergeCallbackOption, callback) {
            return gridOpts[mergeCallbackOption] && typeof (parameters) !== 'undefined' && typeof(parameters[callback]) !== 'undefined';
        }
    }


    function photonAddGridError(message, gridId){
        if(gridId == undefined || gridId == ''){
            gridId = 'grid-table';
        }
        var customMessage = $(
            '<div class="custom-jqgrid-messages-'+ gridId +' custom-errors-'+ gridId +' alert alert-danger no-margin">' +
            '<i class="fa fa-exclamation-circle"></i>' +
            message +
            '</div>'
        );

        $('.custom-jqgrid-messages-' + gridId).remove();
        $('#' + gridId).parent().prepend(customMessage);
        $('#' + gridId).addClass('hide');
        $('#gbox_'+ gridId +' .ui-jqgrid-pager').addClass('hide');
    }

    function photonResizeGrid() {

        if ($('.ui-jqgrid table').length <= 0) {
            return false;
        }

        var resize = function (index, grid) {
            var width = $(grid).first().parent().width();
            $(grid).find('table').setGridWidth(width);
        };

        setTimeout(function () {
            $('.ui-jqgrid').each(function(index, value) {
                resize(index, value);
            });

        }, 0);

        return true;
    }

    //---- Events ----
    var $window = $(window);
    //Resize grid
    $window.on('resize', function () {
        photonResizeGrid();
    });

    //Resize after show collapse panel
    $window.on("show.bs.collapse", function(){
        $window.trigger('resize');
    });

    //Resize after closing or opening menu
    $('#toggle-sidebar-size-btn').on('click', function () {
        $window.trigger('resize');
    });

    //----  Public access to functions ----
    window.PhotonJqGrid = PhotonJqGrid;
    window.photonAddGridError = photonAddGridError;
    window.photonResizeGrid = photonResizeGrid;

}(window, jQuery));