(function() {
  'use strict';

  var future = 'now';

  function hal() {
    console.log('Hello, world!');
  }

  if (future) {
    hal();
  }

})();