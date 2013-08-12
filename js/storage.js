////////////////////////////////////////////////////////////////////////////////
//
//  Additioanl functions for the local storage class.
//
////////////////////////////////////////////////////////////////////////////////

/**
 * Store an Object in the local storage with given key.
 * @param {String} key
 * @param {Object} value
 * @returns {undefined}
 */
Storage.prototype.setObject = function (key, value) {
    return this.setItem (key, JSON.stringify(value));
};

/**
 * Retrieve an Object from the local storage with given key.
 * @param {String} key
 * @returns {Object} the stored Object
 */
Storage.prototype.getObject = function (key) {
    var value = this.getItem (key);
    return value && JSON.parse (value);
};