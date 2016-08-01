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
                return '<span class="formatter-notavailable badge">N/A</span>';
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

            var r = getItemStatus(rowObject);
            var rCountryCode = getItemStatus(rowObject.countryCode);

            if (r.hasNoValue || rCountryCode.hasNoValue) {
                if (i.isJson) {
                    item = JSON.parse(item);
                }

                return countryFormatterString(item);
            }

            return countryFormatterString({country: item, countryCode: rowObject.countryCode});
        };

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
    };

    var PhotonDataFormatter = new PhotonDataFormatter();

    window.PhotonDataFormatter = PhotonDataFormatter;

}(window, jQuery));