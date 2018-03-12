	<html>
<head>
	 <title>NotEventim</title>
  <link href="style.css" rel="stylesheet">
<body>

	<div class="search">
		<div class="city"> 
	<form action="interogari.php" method="GET">
			<p id="titlu_cautare">1.Selecteaza un planner pentru a vedea evenimentele coordonate de acesta:</p> 
			<input type="radio" name="nad" value="Juganaru">Juganaru<br>
			<input type="radio" name="nad" value="Popescu">Popescu<br>
			<input type="radio" name="nad" value="Toader">Toader<br>
			<input type="radio" name="nad" value="Gaman">Gaman<br>
			<input type="radio" name="nad" value="Mitru">Mitru<br>
			
		<input type="submit" value="Afiseaza">
		</form>
	</div>
     </div>

    
			
	<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>1.Afisare evenimente coordonate de plannerul ales:</h3>";
					if ($_GET){
							$nadina=(!empty($_GET['nad']) ? $_GET['nad'] : null);
					
						require_once("conexiune.php");
						require_once("functii.php");
	                    $query= "SELECT E.Nume FROM evenimente E JOIN planneri P ON P.PlannerID=E.PlannerID WHERE P.Nume= '" . $nadina . "'; " ;
                         
							$result=executiequery($connection, $query);
							while ($row = mysqli_fetch_assoc($result))  
							{   
								 ?> 
								<?php  echo "Nume :  ".$row['Nume'];?><br>
								

								<?php
					}}
								?>
</div>	

</h2>


<div class="search">
		<div class="city"> 
	<form action="interogari.php" method="GET">
			<p id="titlu_cautare">2.Selecteaza un oras pentru a vedea evenimentele organizate:</p> 
			<input type="radio" name="in" value="Bucuresti"> Bucuresti<br>
			<input type="radio" name="in" value="Vama Veche"> Vama Veche<br>
			<input type="radio" name="in" value="Bontida"> Bontida<br>
			
		<input type="submit" value="Afiseaza">
		</form>
	</div>
     </div>

	
			
<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>2.Afisare evenimente ce au loc in orasul selectat</h3>";
						if ($_GET){
							$instructor=(!empty($_GET['in']) ? $_GET['in'] : null);
						require_once("conexiune.php");
						require_once("functii.php");
	                    $query1= " SELECT E.Nume FROM evenimente E
							JOIN Locatie L  
							ON L.LocatieID=E.LocatieID
					        WHERE L.Oras= '" . $instructor . "' " ;
                        
							$result1=executiequery($connection, $query1);
							while ($row = mysqli_fetch_assoc($result1))  
							{   
								 ?> 
								<?php  echo "Nume :  ".$row['Nume'];?><br>
								

								<?php
						}}
								?>
</div>	

</h2>
	 
	 
	 <div class="search">
		<div class="city"> 
	<form action="interogari.php" method="GET">
			<p id="titlu_cautare">3.Selecteaza un eveniment pentr a-i vedea plannerul:</p> 
			<input type="radio" name="marc" value="Gojira"> Gojira<br>
			<input type="radio" name="marc" value="Tool"> Tool<br>
			<input type="radio" name="marc" value="Folk You"> Folk You<br>
			<input type="radio" name="marc" value="Electric Castle"> Electric Castle<br>
			<input type="radio" name="marc" value="Shine"> Shine<br>
		<input type="submit" value="Afiseaza">
		</form>
	</div>
     </div>
	 
	
			
<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>3.Afisare planner ce coordoneaza evenimentul ales:</h3>";
						if ($_GET){
							$marca=(!empty($_GET['marc']) ? $_GET['marc'] : null);
						require_once("conexiune.php");
						require_once("functii.php");
	                    $query2= " SELECT P.Nume,P.Prenume FROM planneri P JOIN evenimente E ON E.PlannerID=P.PlannerID WHERE E.Nume='" . $marca . "' " ;
                        
							$result2=executiequery($connection, $query2);
							while ($row = mysqli_fetch_assoc($result2))  
							{   
								 ?> 
								<?php  echo "Nume :  ".$row['Nume'];?>
								<p> <?php echo " Prenume: " .$row['Prenume'];  ?> </p>
								

								<?php
						}}
								?>
</div>	

</h2>

 <div class="search">
		<div class="city"> 
	<form action="interogari.php" method="GET">
			<p id="titlu_cautare">4.Evenimente ce au primit de la sponsorul cu id-ul 1 o suma mai mare decat cea aleasa:</p> 
			<input type="radio" name="or" value="2000"> 2000<br>
			<input type="radio" name="or" value="3000"> 3000<br>
			<input type="radio" name="or" value="4000"> 4000<br>
		<input type="submit" value="Afiseaza">
		</form>
	</div>
     </div>
	 

			
<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>4.Afisare evenimentul ce a primit o suma mai mare decat cea aleasa de la sponsorul cu id-ul 1:</h3>";
						if ($_GET){
							$oras=(!empty($_GET['or']) ? $_GET['or'] : 99999);
						require_once("conexiune.php");
						require_once("functii.php");
	                    $query3=" SELECT E.Nume FROM evenimente E JOIN fonduri F ON F.EvenimentID=E.EvenimentID WHERE F.SponsorID=1 AND F.SumaOferita> " . $oras . " " ;
                        
							$result3=executiequery($connection, $query3);
							while ($row = mysqli_fetch_assoc($result3))  
							{   
								 ?> 
								<?php  echo "Nume :  ".$row['Nume'];?><br>
								
								

								<?php
						}}
								?>
</div>	





			

			
	
</h2>



	 

			
	<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>5.Sponsori ce au oferit unui eveniment suma de 3000 de lei:</h3>";
						
						require_once("conexiune.php");
						require_once("functii.php");
	                    $query6= " SELECT S.Nume FROM sponsori S JOIN fonduri F ON F.SponsorID=S.SponsorID WHERE F.SumaOferita= 3000 " ;
                        
							$result6=executiequery($connection, $query6);
							while ($row = mysqli_fetch_assoc($result6))  
							{   
								 ?> 
								<?php  echo "Nume :  ".$row['Nume'];?>
								
								<?php
						}
								?>
</div>	

</h2>
 
 
<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>6.Evenimentele la care exista un bilet care costa mai mult decat media:</h3>";
						
						require_once("conexiune.php");
						require_once("functii.php");
	                    $query7= " SELECT DISTINCT E.Nume FROM evenimente E JOIN bilete B on B.EvenimentID=E.EvenimentID WHERE B.Pret>(SELECT AVG(BB.Pret) FROM bilete BB)" ;
                        
						$result7=executiequery($connection, $query7);
						
							while ($row7 = mysqli_fetch_assoc($result7))  
							{   
								 ?> 
								<?php  echo "Nume :  " .$row7['Nume'];?><br>
								
								

								<?php
						}
								?>
</div>	

</h2>	


			
 
			
	<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>7.Evenimentele ale caror locatii au un spatiu mai mare decat media:</h3>";
						
						require_once("conexiune.php");
						require_once("functii.php");
	                    $query8= " SELECT E.Nume FROM evenimente E JOIN locatie L ON L.LocatieID=E.LocatieID WHERE L.Spatiu>(SELECT AVG (LL.Spatiu) FROM locatie LL) ;" ;
                        
							$result8=executiequery($connection, $query8);
							while ($row = mysqli_fetch_assoc($result8))  
							{   
								 ?> 
								<?php  echo "Nume :  " .$row['Nume'];?><br>

								<?php
						}
								?>
</div>	

</h2>
 	 

 
			
<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>8.Plannerii ai caror evenimente prezinta o limita de varsta mai mare decat media:</h3>";
						
						require_once("conexiune.php");
						require_once("functii.php");
	                    $query9= " SELECT P.Nume,P.Prenume FROM planneri P JOIN evenimente E ON E.PlannerID=P.PlannerID WHERE E.RestrictieVarsta>(SELECT AVG(EE.RestrictieVarsta) FROM evenimente EE) " ;
                        
							$result9=executiequery($connection, $query9);
							while ($row = mysqli_fetch_assoc($result9))  
							{   
								 ?> 
								 <?php  echo "Nume :  " .$row['Nume'];?>
								<p> <?php echo " Prenume: " .$row['Prenume'];  ?> </p>
								

								<?php
						}
								?>
</div>	

</h2>	 


			
<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>9.Evenimente organizate de plannerul Popescu in ordinea descrescatoare a datei de incepere:</h3>";
						
						require_once("conexiune.php");
						require_once("functii.php");
	                    $query10= " SELECT E.Nume FROM evenimente E JOIN planneri P ON P.PlannerID=E.PlannerID WHERE P.Nume='Popescu' ORDER BY (SELECT EE.DataInceperii FROM evenimente EE WHERE EE.EvenimentID=E.EvenimentID) DESC " ;
                        
							$result10=executiequery($connection, $query10);
							while ($row = mysqli_fetch_assoc($result10))  
							{   
								 ?> 
								 <?php  echo "Nume :  " .$row['Nume'];?><br>
								

								<?php
						}
								?>
</div>	

</h2>	 


<button onclick="goBack()",align="right">Inapoi</button>
<script>
function goBack() {
    window.history.back();
}
</script>


</body>
</head>
</html>