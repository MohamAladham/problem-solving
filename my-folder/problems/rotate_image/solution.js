/**
 * @param {number[][]} matrix
 * @return {void} Do not return anything, modify matrix in-place instead.
 */
var rotate = function(matrix) {
    let map = new Map();
  let column = matrix.length - 1;
  
  for (let row of matrix) {
    for (let i = 0; i < row.length; i++) {
      let el = row[i];
      let newAddress = [i, column];

      if(!map.has(el)) {
	  // We need to add element adress in empty array, because we have to store all adresses if element's value repeats
        map.set(el, [newAddress]);
      } else {
        map.get(el).push(newAddress);
      }
    }
    column--;
  }
  
  for (let key of map.keys()) {
    let addresses = [...map.get(key)];
    addresses.forEach(address => {
      let row = address[0];
      let el = address[1];
      matrix[row][el] = key;
    });
  }
};