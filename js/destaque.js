setInterval (vaiPraFrente, 2000)
	var nProximo= 2
	function vaiPraFrente(){
		var $img= document.querySelector("#destaque")
		$img.src= "img/destaque-home-"+nProximo+".png"
		if (nProximo<= 1){
			nProximo= nProximo +1
		}
		else{
		nProximo= 1
		}
	}