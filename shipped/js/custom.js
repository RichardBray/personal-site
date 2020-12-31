// SCGeezy - SVG fallback script
// --------------------------------------------------

var svgeezy = function() {

		return {

			init: function(avoid, filetype) {
				this.avoid = avoid || false;
				this.filetype = filetype || 'png';
				this.svgSupport = this.supportsSvg();
				if(!this.svgSupport) {
					this.images = document.getElementsByTagName('img');
					this.imgL = this.images.length;
					this.fallbacks();
				}
			},

			fallbacks: function() {
				while(this.imgL--) {
					if(!this.hasClass(this.images[this.imgL], this.avoid) || !this.avoid) {
						var src = this.images[this.imgL].getAttribute('src');
						if(src === null) {
							continue;
						}
						if(this.getFileExt(src) == 'svg') {
							var newSrc = src.replace('.svg', '.' + this.filetype);
							this.images[this.imgL].setAttribute('src', newSrc);
						}
					}
				}
			},

			getFileExt: function(src) {
				return src.split('.').pop();
			},

			hasClass: function(element, cls) {
				return(' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
			},

			supportsSvg: function() {
				return document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1");
			}
		};

	}();
	
svgeezy.init('nocheck', 'png');



$('.jump-to').click( function() {

	$('.numbers').toggle();
});


