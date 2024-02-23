// spikeJs for SPA'S
// created by Okeke Divine-Vessel
// production from 11/12/2022
// spikeJs.js


var spikeJs = {}
spikeJs.version = 1.0
spikeJs.url = 'spikejs.io'



spikeJs.urlPushState = (function(errorLevel,url){
	try {
		if(url == ''){throw "SpikeJs: Url can't be empty!";}
		window.history.pushState({page: url}, url, url);
	}catch(err){
		if(errorLevel =='on'){
			console.log(err);
		}
	}
});

var links = document.querySelectorAll('a');
links.forEach(link=>{
	link.addEventListener('click',function(e){
		spikeJsLinkAttr = link.getAttribute("spikeJsLinkAttr");
		if(spikeJsLinkAttr == 'spaDefault'){
			e.preventDefault();
			linkHref = link.getAttribute('href');
			if(linkHref != ''){
				// ---------------------------------------
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						// console.log(this.responseText);
						// document.write(this.responseText);
					}
				}
				xhttp.open("GET",linkHref,true);
				xhttp.send();
				// ---------------------------------------
				spikeJs.urlPushState('off',linkHref);
			}
		}else{
			//return
		}
	});
});

//