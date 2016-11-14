(function(window, $) {
    'use strict';

    function PhotonDataFormatter() {

        var self = this;

        /**
         * Not Available Formatter
         * @param item
         * @return {string}
         */
        this.notAvailable = function (item) {
            var i = getItemStatus(item);

            if (i.hasNoValue) {
                return '<span class="formatter-notavailable label label-default">N/A</span>';
            }

            return item;
        };

        /**
         * DateTime Formatter
         * @param item
         * @return {string}
         */
        this.dateTime = function (item) {
            return dateTimeFormatter(item, 'datetime');
        };

        /**
         * Date Formatter
         * @param item
         * @return {string}
         */
        this.date = function (item) {
            return dateTimeFormatter(item, 'date');
        };

        /**
         * Time Formatter
         * @param item
         * @return {string}
         */
        this.time = function (item) {
            return dateTimeFormatter(item, 'time');
        };

        /**
         * Id Formatter
         * @param item
         * @returns {string}
         */
        this.id = function (item) {
            var i = getItemStatus(item);

            if (i.hasNoValue) {
                return self.notAvailable();
            }

            return '<span class="formatter-id"><i>#</i> '  + item + '</span>';
        };

        /**
         * Cell UserEmail Formatter
         * @param item
         * @return {string}
         */
        this.userEmail = function (item) {
            var i = getItemStatus(item);

            if (i.hasNoValue || i.isNumber) {
                return self.notAvailable();
            }

            if (i.isString && !i.isJson) {
                return userEmailFormatterString(item);
            }


            if (i.isJson || i.isObject) {
                var userEmail = item;
                if (i.isJson) {
                    var userEmail = JSON.parse(item);
                }

                userEmail.user = getUser(userEmail);

                return userEmailFormatterString(userEmail.email, userEmail.user);
            }

            return item;
        };

        /**
         * Country Formatter
         * @param item
         * @param options
         * @param rowObject
         * @return {string}
         */
        this.country = function (item, options, rowObject) {
            var i = getItemStatus(item);

            if (i.hasNoValue || i.isNumber) {
                return self.notAvailable();
            }

            var rCountryCode = getItemStatus(rowObject.countryCode);

            if (rCountryCode.hasNoValue) {
                if (i.isString && !i.isJson) {
                    var countryCode = item.toString();
                    return countryFormatterString({country: item, countryCode: countryCode.toLowerCase()});
                }

                if (i.isJson) {
                    item = JSON.parse(item);
                }
                return countryFormatterString(item);
            }

            return countryFormatterString({country: item, countryCode: rowObject.countryCode});
        };

        /**
         * Actions buttons Formatter
         * @param item
         * @param options
         * @param rowObject
         * @return {string}
         */
        this.actionsButtons = function (item, options, rowObject) {
            var i = getItemStatus(item);

            if (i.isJson) {
                item = JSON.parse(item);
                i = getItemStatus(item);
            }

            if (!i.isArray) {
                console.error('jqGrid actions buttons cell data must be array of objects.');
                return '';
            }

            var buttonsGroups = {};

            $.each(item, function(index, element) {
                var currentButtonGroup;


                currentButtonGroup = getCurrentButtonGroup(buttonsGroups, element.group);

                if (typeof(buttonsGroups[currentButtonGroup]) == 'undefined') {
                    buttonsGroups[currentButtonGroup] = $('<div>', { class: 'btn-group' });
                }

                var attr = makeButtonSetup(element);

                if (element.dropdown instanceof Array && element.dropdown.length > 0) {
                    var dropdownContent = getDropdownContent(element.dropdown);

                    attr['data-content'] = dropdownContent.prop('outerHTML');
                }

                buttonsGroups[currentButtonGroup].append($('<a>', attr));
            });

            var actionsButtons = '';

            $.each(buttonsGroups, function(index, element) {
                actionsButtons += $(element).prop('outerHTML');
            });


            return actionsButtons;
        }

        /**
         * Badge and info Formatter
         * @param item
         * @param options
         * @param rowObject
         * @return {string}
         */
        this.badgeAndTooltip = function (item, options, rowObject) {
            var i = getItemStatus(item);

            if (i.hasNoValue) {
                return self.notAvailable();
            }

            if (i.isJson) {
                item = JSON.parse(item);
                i = getItemStatus(item);
            }

            var labelClass = 'label-default';

            if (i.isString) {
                return '<span class="label ' + labelClass + '">' + item + '</span>';
            }

            labelClass = item.labelClass || 'label-default';

            if (item.tooltip) {
                var tooltipType = item.tooltipType || 'default';

                item.tooltip = ' data-toggle="tooltip" data-placement="top" data-type="' + tooltipType + '" data-original-title="' + item.tooltip + '"';
                labelClass += ' label-with-tooltip';
            } else {
                item.tooltip = '';
            }

            return '<span class="label ' + labelClass + '"' + item.tooltip + '>' + item.label + '</span>';
        }

        /**
         * Check item properties
         * @param item
         * @return {object}
         */
        function getItemStatus (item) {
            return {
                hasNoValue: ( item == '' || item == null || typeof(item) == 'undefined' ),
                isNumber: (typeof(item) == 'number'),
                isJson: isJson(item),
                isObject: ( Object.prototype.toString.call(item) === '[object Object]' ),
                isString: ( typeof(item) == 'string' ),
                isArray: ( item instanceof Array ),
                isDateTimeArray: ( item instanceof Array && (item.length == 1 || item.length == 2) )
            };
        };

        /**
         * Test to see if it's json
         * @param str
         * @returns {boolean}
         */
        function isJson (str) {
            try {
                JSON.parse(str);
            } catch (e) {
                return false;
            }
            return true;
        };

        /**
         * Create DateTime formatter
         * @param item
         * @param type - Possible values: 'datetime', 'date', 'time'
         * @return {string}
         */
        function dateTimeFormatter(item, type) {
            if ($.inArray(type, ['datetime', 'date', 'time']) == -1) {
                return item;
            }

            var i = getItemStatus(item);

            if (i.hasNoValue || i.isNumber) {
                return self.notAvailable();
            }

            if ((i.isString && !i.isJson) || i.isDateTimeArray) {
                var dateTimeArray = item;
                if (i.isString) {
                    dateTimeArray = item.split(' ');
                }

                if (type == 'datetime') {
                    return dateTimeFormatterString({date: dateTimeArray[0], time: dateTimeArray[1]}, type);
                } else {
                    var dateOrTime = {};
                    dateOrTime[type] = dateTimeArray[0];
                    return dateTimeFormatterString(dateOrTime, type);
                }
            }

            if (i.isJson || i.isObject) {
                var dateTimeObject = item;
                if (i.isJson) {
                    dateTimeObject = JSON.parse(item);
                }

                return dateTimeFormatterString(dateTimeObject, type);
            }

            return item;
        };

        /**
         * Generate DateTime formatter's string
         * @param dateTime
         * @param type - Possible values: 'datetime', 'date', 'time'
         * @return {string}
         */
        function dateTimeFormatterString (dateTime, type) {
            var result = '<span class="formatter-' + type + '">';

            if (dateTime.date != '' && dateTime.date != null && typeof(dateTime.date) == 'string') {
                result += '<i class="fa fa-calendar"></i>' + ' ' + dateTime.date + ' ';
            }

            if (dateTime.time != '' && dateTime.time != null && typeof(dateTime.time) == 'string') {
                result += '<i class="fa fa-clock-o"></i>' + ' ' + dateTime.time + ' ';
            }

            result += '</span>';

            return result;
        };

        /**
         * Generate UserEmail formatter's string
         * @param email
         * @param user
         * @return {string}
         */
        function userEmailFormatterString (email, user) {
            var result = '<span class="formatter-useremail"><i class="fa fa-user"></i> <a href="mailto:' + email + '">';

            if (user != '' && user != null && typeof(user) == 'string') {
                result += user;
            } else {
                result += email;
            }

            result += '</a></span>';

            return result;
        };

        /**
         * Get user from userEmail object
         * @param userEmail
         * @return {string}
         */
        function getUser (userEmail) {
            var posibleVariableName = ['user', 'username', 'displayName', 'displayname', 'email'];
            var user = '';

            $.each(posibleVariableName, function(index, element) {
                if (userEmail[element] != '' && userEmail[element] != null && typeof(userEmail[element]) == 'string') {
                    user = userEmail[element];
                    return false;
                }
            });

            return user;
        };

        /**
         * Generate Country formatter's string
         * @param item
         * @return {string}
         */
        function countryFormatterString (item) {
            return '<span class="formatter-country" data-country="' + item.country + '"><i class="flag-icon flag-icon-' + item.countryCode + '"></i>'+ " " + item.country + '</span>';
        };

        /**
         * Get current button group
         * @param buttonsGroups
         * @param elementGroup
         * @return {*}
         */
        function getCurrentButtonGroup(buttonsGroups, elementGroup) {
            var currentButtonGroup;
            if (typeof(elementGroup) == 'undefined') {
                var buttonsGroupsKeys = Object.keys(buttonsGroups);
                currentButtonGroup = buttonsGroupsKeys[buttonsGroupsKeys.length - 1] + 1;
            } else {
                currentButtonGroup = elementGroup;
            }

            return currentButtonGroup;
        }

        /**
         * Create HTML for dropdown
         * @param elementDropdown
         * @return {object}
         */
        function getDropdownContent(elementDropdown) {
            var dropdownContent = $('<ul>', { class: 'dropdown-menu dropdown-default' });;

            $.each(elementDropdown, function(index, subElement) {
                var liContent = $('<li>');
                liContent.append( $('<a>', makeButtonSetup(subElement, false)) );
                dropdownContent.append(liContent);
            });

            return dropdownContent;
        }

        /**
         *
         * @param buttonData
         * @return {object}
         */
        function makeButtonSetup(buttonData, isButton) {
            var buttonSetup = buttonData.attr || {};
            buttonSetup.class = buttonSetup.class || '';

            if (isButton == undefined) {
                isButton = true;
            }

            if (isButton) {
                buttonSetup.class += ' btn btn-default btn-sm';
            }

            if (buttonData.dropdown instanceof Array && buttonData.dropdown.length > 0) {
                buttonSetup.class += ' more-actions';
            }

            buttonSetup.href = buttonSetup.href || 'javascript:void(0);';

            var buttonContentArray = [];
            if (buttonData.icon) {
                buttonContentArray.push('<i class="fa ' + buttonData.icon + '" aria-hidden="true"></i>');
            }
            if (buttonData.label) {
                buttonContentArray.push('<span>' + buttonData.label + '</span>');
            }
            buttonSetup.html = buttonContentArray.join(' ');

            return buttonSetup;
        };
    };

    var PhotonDataFormatter = new PhotonDataFormatter();

    window.PhotonDataFormatter = PhotonDataFormatter;

}(window, jQuery));