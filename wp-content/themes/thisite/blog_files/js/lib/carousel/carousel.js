;(function($){
	$.fn.corasock_carousel = function(config){
		let defaults = {
			developerMode: false,
			imgWidth: '195px',
		};

		function plugin(container, config){
			this.options = $.extend({}, defaults, config);
			//init value
            this.coreValue(container);
			this.itemWrapAnim(this);
            this.buttonUtilities(this);

			// //run
            this.init(this);
            
		}

		plugin.prototype.coreValue = function(container){
			this.$container = $(container);
			this.$items = this.$container.children();

			this.$itemHeight = this.$items.outerHeight(true);
			this.$itemCount = this.$items.length;

            this.$itemWrapperCount = 0;
		}

		plugin.prototype.buttonUtilities = function(self){
			//left button
            this.$btn_left = $(".btn-carausel-left");
			//right button
			this.$btn_right = $('.btn-carausel-right');
        }
        

        plugin.prototype.itemWrapAnim = function(self){
			this.$container.wrapAll("<div class='carousel'></div>");
			this.$container.wrapAll("<div class='carousel-mask'></div>");
			this.$parent = $('.carousel');
			this.$mask = $('.carousel-mask');
			this.$parent
				.append('<div class="btn-carausel btn-carausel-left"><</div>')
				.append('<div class="btn-carausel btn-carausel-right">></div>')
			this.$items.css('width', this.$mask.width())
			this.$container.css('min-width', this.$mask.width() * this.$itemCount)
			self.$actualWidth = this.$mask.width();



        }

		plugin.prototype.cutAndPaste = function(self, direction){

			if(direction == 'forward')
			{
				setTimeout(function () {
					$(self.$container).css('left', 0);
					for (let i = self.$items.length-1; i >=0;i--) {
						$(self.$container).append($(self.$items[i]));
						self.$items = $(self.$container).children()
					}
				}, 1100);
			}else{
				
			}

		}

		plugin.prototype.init = function(self){

			this.$btn_right.click(function(){
				$(self.$container).animate({left: "+=" +self.$actualWidth}, 1000);
				
			})

			this.$btn_left.click(function(){
				$(self.$container).animate({left: "-=" +self.$actualWidth}, 1000);
				self.cutAndPaste(self, 'forward');
			})
		}

		this.each(function(){
			$(this).data('corasock_carousel', new plugin(this, config));
		});

		return this;
	}
})(jQuery);

