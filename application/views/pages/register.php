<div id="regtitel">
    <h2>Registreren</h2>
    <p>Vul eerst uw persoonlijke gegevens in. Om volledig van deze site gebruik te kunnen maken moet u ook nog een persoonlijkheidstest maken, deze staat op de volgende pagina.</p>
</div>
    <div id="registreren">
        <?php
        echo form_open('register/register_validation');
        
        echo validation_errors();
        
        echo "<div class=\"persoonlijktekst\">Username:";
        echo form_input('username');
        echo "</div>";
        
        echo "<div class=\"persoonlijktekst\">Voornaam:";
        echo form_input('voornaam');
        echo "</div>";
        
        echo "<div class=\"persoonlijktekst\">Achternaam:";
        echo form_input('achternaam');
        echo "</div>";
        
        echo "<div class=\"persoonlijktekst\">Email:";
        echo form_input('mail');
        echo "</div>";        
        
        echo "<div class=\"persoonlijktekst\">Wachtwoord: ";
        echo form_password('password');
        echo "</div>";
        
        echo "<div class=\"persoonlijktekst\">Bevestig Wachtwoord: ";
        echo form_password('password');
        echo "</div>";
        
        $geslacht = array(
                  'male'  => 'Man',
                  'female' => 'Vrouw'
                );
        
        echo "<div>Geslacht: ";
        echo form_dropdown('geslacht', $geslacht, 'male');
        echo "</div>";
        
        echo "<div class=\"persoonlijktekst\">Geboortedatum:";
        echo form_input('date');
        echo "</div>";
        
        $geslachtvoorkeur = array(
                  'geen' => 'Geen',
                  'male'  => 'Man',
                  'female' => 'Vrouw',
                  'malefem' => 'Man en Vrouw'
                );
        
        echo "<div>Geslachtsvoorkeur: ";
        echo form_dropdown('ges_voorkeur', $geslachtvoorkeur, 'geen');
        echo "</div>";
        
        $leeftijdvoorkeur = array(
                  'geen' => 'Geen',
                  'twintdert'  => '20-30',
                  'dertveer' => '30-40',
                  'veervijf' => '40-50',
                  'vijfplus' => '50+'
                );
        
        echo "<div>Leeftijdsvoorkeur: ";
        echo form_dropdown('leef_voorkeur', $leeftijdvoorkeur, 'geen');
        echo "</div>";
        
		$data = array(	'name' => 'beschrijving',
						'id' => 'beschrijving',
						'maxlenght' => '500');
		
        echo "<div class=\"persoonlijktekst\">Beschrijving:";
        echo form_textarea($data);
        echo "</div>";
        
        echo "<div> Merkvoorkeuren: </div>";
        
		echo "<div id=\"checkboxes\">";
		
        echo "<ul><li><div>";
        echo form_checkbox('Coca-Cola');
        echo "Coca-Cola</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Pepsi');
        echo "Pepsi</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Nespresso');
        echo "Nespresso</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Douwe-Egberts');
        echo "Douwe-Egberts</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Starbucks');
        echo "Starbucks</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Apple');
        echo "Apple</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Microsoft');
        echo "Microsoft</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Philips');
        echo "Philips</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Samsung');
        echo "Samsung</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('HTC');
        echo "HTC</div></li></ul>";
        
        echo "<ul><li><div>";
        echo form_checkbox('Sony');
        echo "Sony</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Honig');
        echo "Honig</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Conimex');
        echo "Conimex</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('McDonalds');
        echo "McDonald's</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Burger King');
        echo "Burger King</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Subway');
        echo "Subway</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Unox');
        echo "Unox</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Nike');
        echo "Nike</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Adidas');
        echo "Adidas</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Ray-Ban');
        echo "Ray-Ban</div></li></ul>";
        
        echo "<ul><li><div>";
        echo form_checkbox('G-Star');
        echo "G-Star</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('McGreggor');
        echo "McGreggor</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Zeeman');
        echo "Zeeman</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Hema');
        echo "Hema</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('ScotchSoda');
        echo "Scotch &amp Soda</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Lonsdale');
        echo "Lonsdale</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('HM');
        echo "H&ampM</div></li>";
        
		echo "<li><div>";
		echo form_checkbox('ZARA');
		echo "ZARA</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Elmex');
        echo "Elmex</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Colgate');
        echo "Colgate</div></li></ul>";
        
        echo "<ul><li><div>";
        echo form_checkbox('Jumbo');
        echo "Jumbo</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Albert Heijn');
        echo "Albert Heijn</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('C1000');
        echo "C1000</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('BMW');
        echo "BMW</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Audi');
        echo "Audi</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Volkswagen');
        echo "Volkswagen</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Renault');
        echo "Renault</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Ajax');
        echo "Ajax</div></li>";

        echo "<li><div>";
        echo form_checkbox('Feyenoord');
        echo "Feyenoord</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('PSV');
        echo "PSV</div></li></ul>";
        
        echo "<ul><li><div>";
        echo form_checkbox('Kit Kat');
        echo "Kit Kat</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Mars');
        echo "Mars</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('HBO');
        echo "HBO</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('RTL 4');
        echo "RTL 4</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('RTL 5');
        echo "RTL 5</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Veronica');
        echo "Veronica</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Film 1');
        echo "Film 1</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Facebook');
        echo "Facebook</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Twitter');
        echo "Twitter</div></li>";
        
        echo "<li><div>";
        echo form_checkbox('Spotify');
        echo "Spotify</div></li></ul>";
		
		echo "</div>";

        echo "<div class=\"persoonlijktekst\" id=\"submitbutton\">";
        echo form_submit('register_submit', 'Maak de persoonlijkheidstest!');
        echo "</div>";

        echo form_close();
        
        ?>
</div>
