function search_init(){
	var bar = document.getElementById('edit-search-block-form-1');
	bar.value = "Search";
	bar.onfocus = function(){
		if(this.value == "Search") this.value="";
		this.style.fontWeight = "normal";
		this.style.color = "#000000";
	}
	bar.onblur = function(){
		if(this.value == "") {
			this.style.fontWeight = "bold";
			this.style.color = "#999999";
			this.value="Search";
		}
	}
}

function addLoadEvent(func){
	var oldonload = window.onload;
	if(typeof window.onload != 'function'){
		window.onload = func;
	}else{
		window.onload = function(){
			oldonload();
			func();
		}
	}
}
addLoadEvent(search_init);