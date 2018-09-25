/**
 * Paste rows or/and cells data in textarea
 */
(function($) {
  $.fn.tablePaster = function(newSettings) {
    var settings = $.extend({
      removeEmptyRows: false,
      appendClipboard: false, // if textarea is not empty, add delimiter after
      trimData: true,
      charactersToReplace: ["\r\n", "\n", "\r", "\t"], // windows, linux, mac endings, \t for rows
      delimiter: ","
    }, newSettings);

    // element not found error
    if(typeof this[0] === "undefined") {
      throw 'tablePaster: The element you are trying to access does not exist.';
    }

    // element not allowed
    if(this[0].type !== 'textarea') {
      throw 'tablePaster: The element you are trying to access must be a textarea.';
    }

    $(this).on('paste', function(event) {
      // prevent and stop propagation
      event.stopPropagation();
      event.preventDefault();

      var clipboardText = event.originalEvent.clipboardData.getData('text/plain');

      // trimData option
      if(settings.trimData) {
        clipboardText = clipboardText.trim();
      }

      // removeEmptyRows option
      if(settings.removeEmptyRows) {
        // windows, linux, mac
        clipboardText = clipboardText.replace(/(?:\r\n\r\n\r\n|\r\n\r\n|\n\n\n|\n\n|\r\r\r|\r\r\|)/g, ',');
      }

      // replace the characters with the delimiter
      clipboardText = clipboardText.replace(
        new RegExp('(?:' + settings.charactersToReplace.join("|") + ')', 'g'),
        settings.delimiter
      );

      // replace or append data to the element
      if(settings.appendClipboard) {
        $(event.target).val($(event.target).val() + clipboardText + settings.delimiter);
      } else {
        $(event.target).val(clipboardText);
      }
    });
  };
}(jQuery));
