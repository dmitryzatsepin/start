const grid = require('smart-grid');

module.exports = function smartGrid(done) {
	delete require.cache[require.resolve('../../smartgrid.js')];
	let settings = require('../../smartgrid.js');
	grid('./src/assets/styles/utils',settings);
	done();
};

