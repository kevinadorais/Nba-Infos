<main>
	<section>
		<h2>Classement Confercence.</h2>
		<div class="rankingDetailDiv">
			<table>
				<thead>
					<tr>
						<th colspan="3">Classement de la <?=$conf?> 2018/2019</th>
					</tr>
					<tr>
						<th>Equipe</th>
						<th>V</th>
						<th>D</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php 
						foreach ($classement as $key => $value) {
							print("<tr><td><img src='img/team/".$value[2]."'><a href='rankingdetail.php?id=".$value[8]."'> ".$value[1]." ".$value[0]."</a></td>
							<td>".$value[9]."</td>
							<td>".$value[10]."</td></tr>");
						} ?>
						
					</tr>
					
				</tbody>
			</table>
			<br>
			<?php
			if ($conf == "Conference Est") {
				echo "<a href='ranking.php?conf=Conference Ouest'>Voir la Conference Ouest</a>";
			}
			if ($conf == "Conference Ouest") {
				echo "<a href='ranking.php?conf=Conference Est'>Voir la Conference Est</a>";
			}			
			?>
		</div>
		<div class="rankingDetailDiv transition">
			<?php
			echo "<h2>Infos des ".$selectedTeam[0][0]."</h2>
			<img class='teamLogo' src='img/team/".$selectedTeam[0][2]."'>
			<p>Conference : ".$selectedTeam[0][4]."</p>
			<p>Ville : ".$selectedTeam[0][1]."</p>
			<p>Salle : ".$selectedTeam[0][5]."</p>
			<p>Championnat NBA :<br>".$selectedTeam[0][6]."</p>
			<p>Maillots Retiré :<br>".$selectedTeam[0][7]."</p><br>
			<a href=teamDetails.php?team=".$selectedTeam[0][11].">Voir l'effectif</a>";
			?>
		</div>
	</section>
</main>