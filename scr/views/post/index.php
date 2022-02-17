<?php include ('../src/views/layout/header.php') ?>

<br><br>

<div>
    <h2> Blog Übersicht / Blog overview </h2>
    <ul>
        <?php foreach ($posts as $post): ?> 
            <li>
              <a href="/index.php/post?id=<?php echo e($post->id);  ?> "><?php echo e($post->title);  ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<br>


<div class="row mb-2 text-white rounded bg-dark">
    <h2> Bootstrap Ansicht / Bootstrap View </h2>
    <?php foreach ($posts as $post): ?> 
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">PHP</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="/index.php/post?id=<?php echo e($post->id);  ?>"><?php echo e($post->title);  ?></a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
                <img class="card-img-left flex-auto d-none d-md-block" src="/thumbnail.svg" alt="Card image cap" style="width: 100px; height: 150px;">
                <p class="card-text mb-auto"><?php echo e(substr($post->content, 0, 200));  ?></p>
              <a href="/index.php/post?id=<?php echo e($post->id);  ?>">Continue reading</a>
            </div>
            
          </div>
        </div>
    <?php endforeach; ?>
</div>

<br>

<h3>Herzlich Willkommen!</h3><br>

Ich benutze hier das kostenlose bplaced.net für mein Beispiel Projekt einen Blog.<br>
Das ganze ist noch sehr ausbaufähig, soll mehr als Grundgerüst dienen.<br><br>

Auf Serverseite wird PHP benutzt. PDO, Abstracte Klassen, MySQL Datenbank/Tabellen.<br>
Um ein besseres Verständnis für Frameworks zu bekommen wird hier ein selbst geschriebenes benutzt. <br>
Mit Hauptfokus auf OOP mit einer „Container“ PHP Datei die Klassen zusammenbaut und  <br>
von Abstrakten Klassen ableitet. <br><br>

Im „View“ Ordner befinden sich die ausgelagerten HTML/CSS Code Schnipsel.  <br>
Für eine bessere Übersicht werden im „Core“ Ordner die Programmlogik abgelegt,  <br>
die HTML/CSS Schnipsel werden aufgeteilt und als wieder verwendbare PHP Dateien abgelegt. <br><br>

Quellcode kann unter Github eingesehen werden.
<a href="https://github.com/codeeasyi/php_blog_sample/">Github</a> <br><br>

Vielen Dank für den Besuch. Viele Grüße Ilja Dulsan. <br><br><br>

<hr>

<h3>Welcome to this site!</h3> <br>

I use the free bplaced.net for my example project a blog.<br>
The whole thing is still very expandable, should serve more as a basic framework.<br><br>

On server side PHP is used. PDO, abstract classes, MySQL database/tables. <br>
To get a better understanding of frameworks a self written one is used. <br>
With main focus on OOP with a "container" PHP file that assembles classes and  <br>
derives from abstract classes. <br><br>

In the "View" folder are the outsourced HTML/CSS code snippets.  <br>
For a better overview, the "Core" folder stores the program logic,  <br>
the HTML/CSS snippets are split and stored as reusable PHP files.<br>  <br>

Source code can be viewed at Github.
<a href="https://github.com/codeeasyi/php_blog_sample/">Github</a> <br><br>

Thank you very much for the visit. Many greetings Ilja Dulsan  <br><br>

<?php include ('../src/views/layout/footer.php') ?>
