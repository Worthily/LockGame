<!DOCTYPE html>
<html lang="en"><head>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<meta charset="UTF-8">
	<title>GAME</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<style>
		h1 {
			margin: 105px;
		}
		.btn {
			margin: 10px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="loading-bar.css"/>
<script type="text/javascript" src="loading-bar.js"></script>
	<script>
		function randomInteger(min, max) {
		  let rand = min + Math.random() * (max + 1 - min);
		  return Math.floor(rand);
		}
		let random = false;
		window.localStorage.setItem(`a`, 6);
		window.localStorage.setItem(`b`, 3);
		window.localStorage.setItem(`c`, 6);
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<h1>
		<span id='a'></span>
		<span id='b'></span>
		<span id='c'></span>
	</h1>
	<button id='otm' class="btn" onClick="">Отмычка</button>
	<button id='shup' class="btn">Щуп</button>
	<button id='mol' class="btn">Молоток</button>
	<p style='margin-left: 10px;'>
		Отмычка -5 +6 -5<br>
		Щуп +3 -2 +3<br>
		Молоток +2 -1 +2
	</p>
		<div class="ldBar" data-value="1" data-preset="circle" id ='bar'/>
	<script>
		function upd() {
			document.getElementById(`a`).innerHTML = window.localStorage.getItem(`a`);
			document.getElementById(`b`).innerHTML = window.localStorage.getItem(`b`);
			document.getElementById(`c`).innerHTML = window.localStorage.getItem(`c`);
		}
		function check(){
			let a = +localStorage['a'];
			let b = +localStorage['b'];
			let c = +localStorage['c'];
			if(c == 6 && b == 6 && a == 6){
				let bar = new ldBar("#bar");
				bar.set(100);
				M.toast({html: 'Вы победитель!'})
			}
		}
		upd();
		document.getElementById(`otm`).addEventListener('click', () => {
			let a = +localStorage['a']-5;
			let b = +localStorage['b']+6;
			let c = +localStorage['c']-5;
			if(a > 0 && b < 10 && c > 0){
				localStorage.setItem(`a`, a);
				localStorage.setItem(`b`, b);
				localStorage.setItem(`c`, c);
				let bar = new ldBar("#bar");
				if(a+b+c == 14 && b == 8) bar.set(66); 
			}
			upd();
			check();
		})
		document.getElementById(`shup`).addEventListener('click', () => {
			let a = +localStorage['a']+3;
			let b = +localStorage['b']-2;
			let c = +localStorage['c']+3;
			if(a < 10 && b > 0 && c < 10){
				localStorage.setItem(`a`, a);
				localStorage.setItem(`b`, b);
				localStorage.setItem(`c`, c);
				let bar = new ldBar("#bar");
				if(a+b+c == 18) bar.set(99); 
			}
			upd();
			check();
		})
		document.getElementById(`mol`).addEventListener('click', () => {
			let a = +localStorage['a']+2;
			let b = +localStorage['b']-1;
			let c = +localStorage['c']+2;
			if(a < 10 && b > 0 && c < 10){
				localStorage.setItem(`a`, a);
				localStorage.setItem(`b`, b);
				localStorage.setItem(`c`, c);
				let bar = new ldBar("#bar");
				if(a+b+c == 18) bar.set(33); 
			}
			upd();
			check();
		})
		
	</script>
</body>
</html>