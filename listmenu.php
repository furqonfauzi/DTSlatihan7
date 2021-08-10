<!DOCTYPE html> 
<html> 
	<head> 
		<title>Cara Membuat TodoList </title>
		<link rel="stylesheet" href="list.css">
	</head>

<body> 
	<div class="container">
		<div id="myDIV" class="header">
		  <h2 style="margin:5px">Makanan Kesukaan Saya</h2>
		  <input type="text" id="myInput" placeholder="Menu...">
		  <span onclick="newElement()" class="addBtn">Tambah</span>
		</div>
	
		<div class="list">
			<ul id="myUL">
			  <li>Martabak</li>
			  <li class="checked">Pempek Kapal Selam</li>
			  <li>Ayam Panggang</li>
			  <li>Piscok</li>
			  <li>Kacang</li>
			  <li>Coklat</li>
			</ul>
		</div>

	</div>		
<script src="script.js">
</script>
</body> 
</html>