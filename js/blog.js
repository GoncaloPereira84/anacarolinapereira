$(".blog-wrapper .moreBox").slice(3, $(".moreBox").length).addClass('hidden');

$(".blog-wrapper-mobile .moreBox").slice(3, $(".moreBox").length).addClass('hidden');

// Set the options globally
// to make LazyLoad self-initialize
window.lazyLoadOptions = {
	// Your custom settings go here
};

// Listen to the initialization event
// and get the instance of LazyLoad
window.addEventListener("LazyLoad::Initialized", function (event) {
	window.lazyLoadInstance = event.detail.instance;
}, false);

function addClassAll(el, cls){
	for (var i = 0; i < el.length; ++i){
		if (!el[i].className.match('(?:^|\\s)'+cls+'(?!\\S)')){ el[i].className += ' '+cls; } 
	}
}
function delClassAll(el, cls){
	for (var i = 0; i < el.length; ++i){
		el[i].className = el[i].className.replace(new RegExp('(?:^|\\s)'+cls+'(?!\\S)'),'');
	}
}

function contentFilter(filterID, filterType){  
	var id = filterID;
	document.querySelector(id+' .filter-categories').onclick = function(evt) { 
		evt = evt || window.event;
		var elem = evt.target || evt.srcElement, 
		    wrap = document.querySelectorAll(id+' .artigos-wrapper'),
		    items = document.querySelectorAll(id+' .artigos'),
		    inputs = document.querySelectorAll(id+' .cat-checkbox'),
		    filters = [],
		    noitem = document.querySelectorAll(id+' .filter-no-item'), 
		    mask = document.querySelectorAll(id+' .filter-mask'), 
		    type = filterType;
		addClassAll(mask, 'filter-mask-active');
		setTimeout(function() { delClassAll(mask, 'filter-mask-active'); }, 1000); 
		if (elem.className.match('(?:^|\\s)filter-all(?!\\S)')) { // #filter-all
			for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
				inputs[i].checked = false; // uncheck all other inputs
			}
			setTimeout(function() { 
				delClassAll(items, 'selected');
				delClassAll(items, 'hidden');
				$(id + " .moreBox").slice(3, $(id + " .moreBox").length).addClass('hidden');
				delClassAll(wrap, 'filtered-'+type); 
				delClassAll(noitem, 'filter-no-item-active'); 
			}, 500); 
		} else { // another filter is checked
			inputs[0].checked = false; // uncheck #filter-all
			for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
				if (inputs[i].checked) { filters.push(inputs[i].id); } // add checked inputs to filters array 
			}
			setTimeout(function() { 
				delClassAll(items, 'selected'); 
				addClassAll(wrap, 'filtered-'+type);  
				if (type == 'inclusive') {
					if (filters.length > 0) {
						addClassAll(document.querySelectorAll(id+' .artigos.'+filters.join('.')), 'selected');
						$(id+' .artigos.'+filters.join('.')).slice(3, $(id+' .artigos.'+filters.join('.')).length).addClass('hidden');
						$(id+' .artigos.'+filters.join('.')).slice(0, 3).removeClass('hidden');
					} // build css selector from filters array
					document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active') : delClassAll(noitem, 'filter-no-item-active'); 
				} else {
					// $(id+' .artigos.'+filters.join('.')).removeClass('hidden');
				}
				var checkCount = 0;  
				for (var i = 0; i < inputs.length; ++i) {
					checkCount += inputs[i].checked ? 1 : 0; 
					}
				if (checkCount == 0) {inputs[0].checked = true;}
				if (inputs[0].checked) {
					delClassAll(wrap, 'filtered-'+type);
					delClassAll(noitem, 'filter-no-item-active');
					}
				}, 500); 
		}
	}
	
	document.querySelector(id+' .filter-categories1').onclick = function(evt) { 
		evt = evt || window.event;
		var elem = evt.target || evt.srcElement, 
		    wrap = document.querySelectorAll(id+' .artigos-wrapper'),
		    items = document.querySelectorAll(id+' .artigos'),
		    inputs = document.querySelectorAll(id+' .cat-checkbox'),
		    filters = [],
		    noitem = document.querySelectorAll(id+' .filter-no-item'), 
		    mask = document.querySelectorAll(id+' .filter-mask'), 
		    type = filterType;
		addClassAll(mask, 'filter-mask-active');
		setTimeout(function() { delClassAll(mask, 'filter-mask-active'); }, 1000); 
		if (elem.className.match('(?:^|\\s)filter-all(?!\\S)')) { // #filter-all
			for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
				inputs[i].checked = false; // uncheck all other inputs
			}
			setTimeout(function() { 
				delClassAll(items, 'selected');
				delClassAll(items, 'hidden');
				$(id + " .moreBox").slice(3, $(id + " .moreBox").length).addClass('hidden');
				delClassAll(wrap, 'filtered-'+type); 
				delClassAll(noitem, 'filter-no-item-active'); 
			}, 500); 
		} else { // another filter is checked
			inputs[0].checked = false; // uncheck #filter-all
			for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
				if (inputs[i].checked) { filters.push(inputs[i].id); } // add checked inputs to filters array 
				}
			setTimeout(function() { 
				delClassAll(items, 'selected'); 
				addClassAll(wrap, 'filtered-'+type);  
				if (type == 'inclusive') {
					if (filters.length > 0) {
						addClassAll(document.querySelectorAll(id+' .artigos.'+filters.join('.')), 'selected');
						$(id+' .artigos.'+filters.join('.')).slice(3, $(id+' .artigos.'+filters.join('.')).length).addClass('hidden');
						$(id+' .artigos.'+filters.join('.')).slice(0, 3).removeClass('hidden');
					} // build css selector from filters array
					document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active') : delClassAll(noitem, 'filter-no-item-active'); 
				} else {
					// $(id+' .artigos.'+filters.join('.')).removeClass('hidden');
				}
				var checkCount = 0;  
				for (var i = 0; i < inputs.length; ++i) {
					checkCount += inputs[i].checked ? 1 : 0; 
					}
				if (checkCount == 0) {inputs[0].checked = true;}
				if (inputs[0].checked) {
					delClassAll(wrap, 'filtered-'+type);
					delClassAll(noitem, 'filter-no-item-active');
					}
				}, 500); 
		}
	}
}

function contentFilterMobile(filterID, filterType){  
	var id = filterID;
	document.querySelector(id+' .filter-categories-mobile').onclick = function(evt) { 
		evt = evt || window.event;
		var elem = evt.target || evt.srcElement, 
		    wrap = document.querySelectorAll(id+' .artigos-wrapper-mobile'),
		    items = document.querySelectorAll(id+' .artigos-mobile'),
		    inputs = document.querySelectorAll(id+' .cat-checkbox-mobile'),
		    filters = [],
		    noitem = document.querySelectorAll(id+' .filter-no-item-mobile'), 
		    mask = document.querySelectorAll(id+' .filter-mask-mobile'), 
		    type = filterType;
		addClassAll(mask, 'filter-mask-active-mobile');
		setTimeout(function() { delClassAll(mask, 'filter-mask-active-mobile'); }, 1000); 
		if (elem.className.match('(?:^|\\s)filter-all-mobile(?!\\S)')) { // #filter-all
			for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
				inputs[i].checked = false; // uncheck all other inputs
			}
			setTimeout(function() { 
				delClassAll(items, 'selected');
				delClassAll(items, 'hidden');
				$(id + " .moreBox").slice(3, $(id + " .moreBox").length).addClass('hidden');
				delClassAll(wrap, 'filtered-'+type); 
				delClassAll(noitem, 'filter-no-item-active-mobile'); 
			}, 500); 
		} else { // another filter is checked
			inputs[0].checked = false; // uncheck #filter-all
			for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
				if (inputs[i].checked) { filters.push(inputs[i].id); } // add checked inputs to filters array 
			}
			setTimeout(function() { 
				delClassAll(items, 'selected'); 
				addClassAll(wrap, 'filtered-'+type);  
				if (type == 'inclusive') {
					if (filters.length > 0) {
						addClassAll(document.querySelectorAll(id+' .artigos-mobile.'+filters.join('.')), 'selected');
						$(id+' .artigos-mobile.'+filters.join('.')).slice(3, $(id+' .artigos-mobile.'+filters.join('.')).length).addClass('hidden');
						$(id+' .artigos-mobile.'+filters.join('.')).slice(0, 3).removeClass('hidden');
						$('.blog-wrapper-mobile .filters-section').removeClass('opened');
					} // build css selector from filters array
					document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active-mobile') : delClassAll(noitem, 'filter-no-item-active-mobile'); 
				} else {
					// $(id+' .artigos.'+filters.join('.')).removeClass('hidden');
				}
				var checkCount = 0;  
				for (var i = 0; i < inputs.length; ++i) {
					checkCount += inputs[i].checked ? 1 : 0; 
					}
				if (checkCount == 0) {inputs[0].checked = true;}
				if (inputs[0].checked) {
					delClassAll(wrap, 'filtered-'+type);
					delClassAll(noitem, 'filter-no-item-active-mobile');
					}
				}, 500); 
		}
	}
	
	document.querySelector(id+' .filter-categories1-mobile').onclick = function(evt) { 
		evt = evt || window.event;
		var elem = evt.target || evt.srcElement, 
		    wrap = document.querySelectorAll(id+' .artigos-wrapper-mobile'),
		    items = document.querySelectorAll(id+' .artigos-mobile'),
		    inputs = document.querySelectorAll(id+' .cat-checkbox-mobile'),
		    filters = [],
		    noitem = document.querySelectorAll(id+' .filter-no-item-mobile'), 
		    mask = document.querySelectorAll(id+' .filter-mask-mobile'), 
		    type = filterType;
		addClassAll(mask, 'filter-mask-active-mobile');
		setTimeout(function() { delClassAll(mask, 'filter-mask-active-mobile'); }, 1000); 
		if (elem.className.match('(?:^|\\s)filter-all-mobile(?!\\S)')) { // #filter-all
			for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
				inputs[i].checked = false; // uncheck all other inputs
			}
			setTimeout(function() { 
				delClassAll(items, 'selected');
				delClassAll(items, 'hidden');
				$(id + " .moreBox").slice(3, $(id + " .moreBox").length).addClass('hidden');
				delClassAll(wrap, 'filtered-'+type); 
				delClassAll(noitem, 'filter-no-item-active-mobile'); 
			}, 500); 
		} else { // another filter is checked
			inputs[0].checked = false; // uncheck #filter-all
			for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
				if (inputs[i].checked) { filters.push(inputs[i].id); } // add checked inputs to filters array 
			}
			setTimeout(function() { 
				delClassAll(items, 'selected'); 
				addClassAll(wrap, 'filtered-'+type);  
				if (type == 'inclusive') {
					if (filters.length > 0) {
						addClassAll(document.querySelectorAll(id+' .artigos-mobile.'+filters.join('.')), 'selected');
						$(id+' .artigos-mobile.'+filters.join('.')).slice(3, $(id+' .artigos-mobile.'+filters.join('.')).length).addClass('hidden');
						$(id+' .artigos-mobile.'+filters.join('.')).slice(0, 3).removeClass('hidden');
						$('.blog-wrapper-mobile .filters-section').removeClass('opened');
					} // build css selector from filters array
					document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active-mobile') : delClassAll(noitem, 'filter-no-item-active-mobile'); 
				} else {
					// $(id+' .artigos.'+filters.join('.')).removeClass('hidden');
				}
				var checkCount = 0;  
				for (var i = 0; i < inputs.length; ++i) {
					checkCount += inputs[i].checked ? 1 : 0; 
					}
				if (checkCount == 0) {inputs[0].checked = true;}
				if (inputs[0].checked) {
					delClassAll(wrap, 'filtered-'+type);
					delClassAll(noitem, 'filter-no-item-active-mobile');
					}
				}, 500); 
		}
	}
}

contentFilterMobile('.blog-wrapper-mobile', 'inclusive');
contentFilter('.blog-wrapper', 'inclusive');

$(".months input:checkbox").on('click', function() {
	// in the handler, 'this' refers to the box clicked on
	var $box = $(this);
	if ($box.is(":checked")) {
	  // the name of the box is retrieved using the .attr() method
	  // as it is assumed and expected to be immutable
	  var group = "input:checkbox[name='" + $box.attr("name") + "']";
	  // the checked state of the group/box on the other hand will change
	  // and the current value is retrieved using .prop() method
	  $(group).prop("checked", false);
	  $box.prop("checked", true);
	} else {
	  $box.prop("checked", false);
	}
});

var allPanels = $('.years .months').hide();
var allArrows = $('.years .year svg');

$('.years .year a').click(function() {
	allPanels.slideUp();
	allArrows.removeClass('opened');
	$(this).parent().next().slideDown();
	$(this).next().addClass('opened');
	return false;
});

$('.years .year svg').click(function() {
	allPanels.slideUp();
	allArrows.removeClass('opened');
	$(this).parent().next().slideDown();
	$(this).next().addClass('opened');
	return false;
});

$(".months-mobile input:checkbox").on('click', function() {
	// in the handler, 'this' refers to the box clicked on
	var $box = $(this);
	if ($box.is(":checked")) {
	  // the name of the box is retrieved using the .attr() method
	  // as it is assumed and expected to be immutable
	  var group = "input:checkbox[name='" + $box.attr("name") + "']";
	  // the checked state of the group/box on the other hand will change
	  // and the current value is retrieved using .prop() method
	  $(group).prop("checked", false);
	  $box.prop("checked", true);
	} else {
	  $box.prop("checked", false);
	}
});

var allPanelsMobile = $('.years-mobile .months-mobile').hide();
var allArrowsMobile = $('.years-mobile .year-mobile svg');

$('.years-mobile .year-mobile a').click(function() {
	allPanelsMobile.slideUp();
	allArrowsMobile.removeClass('opened');
	$(this).parent().next().slideDown();
	$(this).next().addClass('opened');
	return false;
});

$('.years-mobile .year-mobile svg').click(function() {
	allPanelsMobile.slideUp();
	allArrowsMobile.removeClass('opened');
	$(this).parent().next().slideDown();
	$(this).next().addClass('opened');
	return false;
});

var map = Array.prototype.map;
window.addEventListener("scroll", function(){
	setTimeout(() => {
		var artigosDivsVisible = document.querySelectorAll('.blog-wrapper .moreBox:not(.hidden');
		const lastItem = artigosDivsVisible[artigosDivsVisible.length - 1];

		var artigosDivsVisibleMob = document.querySelectorAll('.blog-wrapper-mobile .moreBox:not(.hidden');
		const lastItemMob = artigosDivsVisibleMob[artigosDivsVisibleMob.length - 1];
		
		function isScrolledIntoView(el) {
			var rect = el.getBoundingClientRect();
			var elemTop = rect.top;
			var elemBottom = rect.bottom;
		
			// Only completely visible elements return true:
			var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
			// Partially visible elements return true:
			//isVisible = elemTop < window.innerHeight && elemBottom >= 0;
			return isVisible;
		}
		
		if(isScrolledIntoView(lastItem)) {
			$('.blog-wrapper .moreBox.hidden').slice(0, 1).removeClass('hidden');
		}
		
		if(isScrolledIntoView(lastItemMob)) {
			$('.blog-wrapper-mobile .moreBox.hidden').slice(0, 1).removeClass('hidden');
		}
	}, 1000);
});

$('.blog-wrapper-mobile .filters-section .btn').on('click', function(){
	$('.blog-wrapper-mobile .filters-section').toggleClass('opened');
})