<div id="testinleiding">
	<p>Aan de hand van deze vragenlijst stellen we jouw persoonlijkheid vast en kunnen we aan jou andere vrijgezellen matchen die bij jouw persoonlijkheid passen.</p>
	<p>Deze vragenlijst maak je maar &eacute&eacuten keer en kan je niet meer veranderen, dus denk goed na over wat bij je past.</p>
</div>

<div id="formulier"><br>

		<!--als value is "E" dan E met 10% verhogen en I met 10% verlagen
			als value is "I" dan I met 10% verhogen en E met 10% verlagen
			als value is "N" dan N met 12,5% verhogen en S met 12,5% verlagen
			als value is "S" dan S met 12,5% verhogen en N met 12,5% verlagen
			als value is "T" dan T met 12,5% verhogen en F met 12,5% verlagen
			als value is "F" dan F met 12,5% verhogen en T met 12,5% verlagen
			als value is "J" dan J met 8,3333% verhogen en P met 8,3333% verlagen
			als value is "P" dan P met 8,3333% verhogen en J met 8,3333% verlagen
			als value is "Neut" dan blijft score hetzelfde-->
	
	<?php
		
		echo form_open('');
		
		echo "<p class=\"vraag\">Vraag 1:</p>";
		echo form_radio('q1', 'E');
		echo "Ik geef de voorkeur aan grote groepen mensen, met grote diversiteit.<br>";
		echo form_radio('q1', 'I');
		echo "Ik geef de voorkeur aan intieme bijeenkomsten met uitsluitend goede vrienden.<br>";
		echo form_radio('q1', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 2:</p>";
		echo form_radio('q2', 'E');
		echo "Ik doe eerst, en dan denk ik.<br>";
		echo form_radio('q2', 'I');
		echo "Ik denk eerst, en dan doe ik.<br>";
		echo form_radio('q2', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 3:</p>";
		echo form_radio('q3', 'E');
		echo "Ik ben makkelijk afgeleid, met minder aandacht voor een enkele specifieke taak.<br>";
		echo form_radio('q3', 'I');
		echo "Ik kan me goed focussen, met minder aandacht voor het grote geheel.<br>";
		echo form_radio('q3', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 4:</p>";
		echo form_radio('q4', 'E');
		echo "Ik ben een makkelijke prater en ga graag uit.<br>";
		echo form_radio('q4', 'I');
		echo "Ik ben een goede luisteraar en meer een priv&eacute-persoon.<br>";
		echo form_radio('q4', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 5:</p>";
		echo form_radio('q5', 'E');
		echo "Als gastheer/-vrouw ben ik altijd het centrum van de belangstelling.<br>";
		echo form_radio('q5', 'I');
		echo "Als gastheer/-vrouw ben ik altijd achter de schermen bezig om te zorgen dat alles soepeltjes verloopt.<br>";
		echo form_radio('q5', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 6:</p>";
		echo form_radio('q6', 'N');
		echo "Ik geef de voorkeur aan concepten en het leren op basis van associaties.<br>";
		echo form_radio('q6', 'S');
		echo "Ik geef de voorkeur aan observaties en het leren op basis van feiten.<br>";
		echo form_radio('q6', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 7:</p>";
		echo form_radio('q7', 'N');
		echo "Ik heb een groot inbeeldingsvermogen en heb een globaal overzicht van een project.<br>";
		echo form_radio('q7', 'S');
		echo "Ik ben pragmatisch ingesteld en heb een gedetailleerd beeld van elke stap.<br>";
		echo form_radio('q7', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 8:</p>";
		echo form_radio('q8', 'N');
		echo "Ik kijk naar de toekomst.<br>";
		echo form_radio('q8', 'S');
		echo "Ik houd mijn blik op heden gericht.<br>";
		echo form_radio('q8', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 9:</p>";
		echo form_radio('q9', 'N');
		echo "Ik houd van de veranderlijkheid in relaties en taken.<br>";
		echo form_radio('q9', 'S');
		echo "Ik houd van de voorspelbaarheid in relaties en taken.<br>";
		echo form_radio('q9', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 10:</p>";
		echo form_radio('q10', 'T');
		echo "Ik overdenk een beslissing helemaal.<br>";
		echo form_radio('q10', 'F');
		echo "Ik beslis met mijn gevoel.<br>";
		echo form_radio('q10', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 11:</p>";
		echo form_radio('q11', 'T');
		echo "Ik werk het beste met een lijst plussen en minnen.<br>";
		echo form_radio('q11', 'F');
		echo "Ik beslis op basis van de gevolgen voor mensen.<br>";
		echo form_radio('q11', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 12:</p>";
		echo form_radio('q12', 'T');
		echo "Ik ben van nature kritisch.<br>";
		echo form_radio('q12', 'F');
		echo "Ik maak het mensen graag naar de zin.<br>";
		echo form_radio('q12', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 13:</p>";
		echo form_radio('q13', 'T');
		echo "Ik ben eerder eerlijk dan tactisch.<br>";
		echo form_radio('q13', 'F');
		echo "Ik ben eerder tactisch dan eerlijk.<br>";
		echo form_radio('q13', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 14:</p>";
		echo form_radio('q14', 'J');
		echo "Ik houd van vertrouwde situaties.<br>";
		echo form_radio('q14', 'P');
		echo "Ik houd van flexibele situaties.<br>";
		echo form_radio('q14', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 15:</p>";
		echo form_radio('q15', 'J');
		echo "Ik plan alles, met een to-do lijstje in mijn hand.<br>";
		echo form_radio('q15', 'P');
		echo "Ik wacht tot er meerdere idee&eumln opborrelen en kies dan on-the-fly wat te doen.<br>";
		echo form_radio('q15', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 16:</p>";
		echo form_radio('q16', 'J');
		echo "Ik houd van het afronden van projecten.<br>";
		echo form_radio('q16', 'P');
		echo "Ik houd van het opstarten van projecten.<br>";
		echo form_radio('q16', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 17:</p>";
		echo form_radio('q17', 'J');
		echo "Ik ervaar stress door een gebrek aan planning en abrupte wijzigingen.<br>";
		echo form_radio('q17', 'P');
		echo "Ik ervaar gedetailleerde plannen als benauwend en kijk uit naar veranderingen.<br>";
		echo form_radio('q17', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 18:</p>";
		echo form_radio('q18', 'J');
		echo "Het is waarschijnlijker dat ik een doel bereik.<br>";
		echo form_radio('q18', 'P');
		echo "Het is waarschijnlijker dat ik een kans zie.<br>";
		echo form_radio('q18', 'Neut');
		echo "Ik zit er eigenlijk tussenin.<br><hr>";
		
		echo "<p class=\"vraag\">Vraag 19:</p>";
		echo form_radio('q19', 'J');
		echo "\"All play and no work\" maakt dat het project niet afkomt.<br>";
		echo form_radio('q19', 'P');
		echo "\"All work and no play\" maakt je maar een saaie pief.<br>";
		echo form_radio('q19', 'Neut');
		echo "Ik zit er eigenlijk tussenin<br>";
		
		echo form_submit('', 'Verstuur');
		
		echo form_close();
	
	?>
		<br><br>
</div>