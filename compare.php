<!doctype html>
<html lang="en-us">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8" />
		<title>Paints</title>
		<link rel="stylesheet" href="bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="compare_ss.css" type="text/css" />
	</head>

	<body>
		<div class="container-fluid" id="header">
			<div class="jumbotron" id="jumbo">
				<div class="col-md-2">
					<img src="logo.jpg" alt="logo" id="logo" />
				</div>
				<div class="col-md-10"></div>
			</div>	
		</div>

		<h1>Welcome To AapkaPainter!!</h1>
		<h2>Compare Box</h2>
		<div class="row" id="row1">
			<div class="col-md-3" id="dropbox1" ondragover="allowDrop(event)" ondrop="drop(event)">
			</div>

			<div class="col-md-3" id="col1">
				<div class="thumbnail display" id="div1">
					<img src="img1.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 1</h4>
				</div>
				<div class="thumbnail display" id="drag1" draggable="true" ondragstart="drag(event)" >
					<img src="img1.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 1</h4>
				</div>
			</div>

			<div class="col-md-3" id="col2">
				<div class="thumbnail display" id="div2">
					<img src="img2.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 2</h4>
				</div>
				<div class="thumbnail display" id="drag2" draggable="true" ondragstart="drag(event)" >
					<img src="img2.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 2</h4>
				</div>
			</div>

			<div class="col-md-3" id="col3">
				<div class="thumbnail display" id="div3">
					<img src="img3.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 3</h4>
				</div>
				<div class="thumbnail display" id="drag3" draggable="true" ondragstart="drag(event)">
					<img src="img3.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 3</h4>
				</div>
			</div>
		</div>

		<div class="row" id="row2">
			<div class="col-md-3" id="joiner" ondragover="allowDrop(event)" ondrop="drop(event)">
				<button type="submit" class="btn btn-success btn-lg" id="compare_button" onclick="comparePaint()" >Compare</button> 
				<button type="submit" class="btn btn-danger btn-lg" id="reset_button" onclick="resetData()">Reset</button> 
			</div>

			<div class="col-md-3" id="col4" >
				<div class="thumbnail display" id="div4">
					<img src="img4.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 4</h4>
				</div>
				<div class="thumbnail display" id="drag4" draggable="true" ondragstart="drag(event)">
					<img src="img4.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 4</h4>
				</div>
			</div>

			<div class="col-md-3" id="col5">
				<div class="thumbnail display" id="div5">
					<img src="img5.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 5</h4>
				</div>
				<div class="thumbnail display" id="drag5" draggable="true" ondragstart="drag(event)">
					<img src="img5.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 5</h4>
				</div>
			</div>

			<div class="col-md-3" id="col6">
				<div class="thumbnail display" id="div6">
					<img src="img6.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 6</h4>
				</div>
				<div class="thumbnail display" id="drag6" draggable="true" ondragstart="drag(event)">
					<img src="img6.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 6</h4>
				</div>
			</div>
		</div>

		<div class="row" id="row3">
			<div class="col-md-3" id="dropbox2" ondragover="allowDrop(event)" ondrop="drop(event)">
			</div>

			<div class="col-md-3" id="col7">
				<div class="thumbnail display" id="div7">
					<img src="img7.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 7</h4>
				</div>
				<div class="thumbnail display" id="drag7" draggable="true" ondragstart="drag(event)">
					<img src="img7.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 7</h4>
				</div>
			</div>

			<div class="col-md-3" id="col8">
				<div class="thumbnail display" id="div8">
					<img src="img8.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 8</h4>
				</div>
				<div class="thumbnail display" id="drag8" draggable="true" ondragstart="drag(event)">
					<img src="img8.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 8</h4>
				</div>
			</div>

			<div class="col-md-3" id="col9">
				<div class="thumbnail display" id="div9">
					<img src="img9.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 9</h4>
				</div>
				<div class="thumbnail display" id="drag9" draggable="true" ondragstart="drag(event)">
					<img src="img9.jpg" alt="sample of paint" class="img-responsive" />
					<h4>Product 9</h4>
				</div>
			</div>
		</div>
		<script>
			p1=document.getElementById("dropbox1");
			p2=document.getElementById("dropbox2");
			p3=document.getElementById("joiner");
				
			function resetData(){
				var parent1=document.getElementById("dropbox1");
				var child1=parent1.childNodes[1];
					
				var parent2=document.getElementById("dropbox2");
				var child2=parent2.childNodes[1];
				
				var parent3=document.getElementById("joiner");
				var child3=parent3.childNodes[5];
				
				if(parent3.childNodes.length==6 && parent2.childNodes.length==2){
				
					var str2=child2.id.substr(4,1);
					var z2="col"+str2;
					var newparent2=document.getElementById(z2);
					var newchild2=document.getElementById(child2.id);	
					parent2.removeChild(child2);
					newparent2.appendChild(newchild2);
					newchild2.style.marginTop="-250px";
					newchild2.style.marginLeft="0px";
						
					var str3=child3.id.substr(4,1);
					var z3="col"+str3;
					var newparent3=document.getElementById(z3);
					var newchild3=document.getElementById(child3.id);
					parent3.removeChild(child3);
					newparent3.appendChild(newchild3);
					newchild3.style.marginTop="-250px";
					newchild3.style.marginLeft="0px";
				}
				
				else if(parent2.childNodes.length==2 && parent1.childNodes.length==2){
				
					var str1=child1.id.substr(4,1);
					var z1="col"+str1;
					var newparent1=document.getElementById(z1);
					var newchild1=document.getElementById(child1.id);
					parent1.removeChild(child1);
					newparent1.appendChild(newchild1);
					newchild1.style.marginTop="-250px";
					newchild1.style.marginLeft="0px";
						
					var str2=child2.id.substr(4,1);
					var z2="col"+str2;
					var newparent2=document.getElementById(z2);
					var newchild2=document.getElementById(child2.id);
					parent2.removeChild(child2);
					newparent2.appendChild(newchild2);
					newchild2.style.marginTop="-250px";
					newchild2.style.marginLeft="0px";
				}
				
				else if(parent1.childNodes.length==2 && parent3.childNodes.length==6){
				
					var str1=child1.id.substr(4,1);
					var z1="col"+str1;
					var newparent1=document.getElementById(z1);
					var newchild1=document.getElementById(child1.id);
					parent1.removeChild(child1);
					newparent1.appendChild(newchild1);
					newchild1.style.marginTop="-250px";
					newchild1.style.marginLeft="0px";
					
					var str3=child3.id.substr(4,1);
					var z3="col"+str3;
					var newparent3=document.getElementById(z3);
					var newchild3=document.getElementById(child3.id);
					parent3.removeChild(child3);
					newparent3.appendChild(newchild3);
					newchild3.style.marginTop="-250px";
					newchild3.style.marginLeft="0px";
				}
				
			}

			function comparePaint(){
					
				if(p3.childNodes.length==6 && p2.childNodes.length==2){
				
					var y=document.getElementById("dropbox2").childNodes[1];
					product2Name=y.childNodes[3].firstChild.nodeValue;
					
					var z=document.getElementById("joiner").childNodes[5];
					product3Name=z.childNodes[3].firstChild.nodeValue;
					
					window.location.href="form.php?word1=" + product2Name + "&word2=" + product3Name;
				}
				
				else if(p3.childNodes.length==6 && p1.childNodes.length==2){

					var x=document.getElementById("dropbox1").childNodes[1];
					product1Name=x.childNodes[3].firstChild.nodeValue;
					
					var z=document.getElementById("joiner").childNodes[5];
					product3Name=z.childNodes[3].firstChild.nodeValue;
					
					window.location.href="form.php?word1=" + product1Name + "&word2=" + product3Name;
				}
				
				else if(p2.childNodes.length==2 && p1.childNodes.length==2){

					var x=document.getElementById("dropbox1").childNodes[1];
					product1Name=x.childNodes[3].firstChild.nodeValue;
					
					var y=document.getElementById("dropbox2").childNodes[1];
					product2Name=y.childNodes[3].firstChild.nodeValue;
					
					window.location.href="form.php?word1=" + product1Name + "&word2=" + product2Name;
				}
				 
			}

			function allowDrop(ev) {
				ev.preventDefault();
			}

			function drag(ev) {
				ev.dataTransfer.setData("text", ev.target.id);
			}

			function drop(ev) {
				ev.preventDefault();
				var data = ev.dataTransfer.getData("text");
				ev.target.appendChild(document.getElementById(data));
				var str=data.substr(4,1);
				name="div"+str;
				document.getElementById(data).style.marginTop="25px";
				document.getElementById(name).style.visibility="visible";
				var b=p3.childNodes[5];
				
				if(p1.childNodes.length==2){
					b.style.marginTop="157px";
					b.style.marginLeft="40px";
				}
				
				else if(p2.childNodes.length==2){
					b.style.marginTop="-439px";
					b.style.marginLeft="40px";
				}
				
				else{
					b.style.marginTop="-439px";
					b.style.marginLeft="40px";
				}
			}
		</script>
	</body>
</html>