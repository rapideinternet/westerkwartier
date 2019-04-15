<div class="row route-grid">
    <div class="col-12">
        <h1 class="small-title">Wandelroutes</h1>
        <p>
            Naast de fietsroutes zijn er ook vijf wandelroutes uitgezet over het wandelknooppuntensysteem. Deze wandelroutes variëren
            in lengte van 7 tot maximaal 16 kilometer. Daarnaast zijn er vier speurtochten voor kinderen uitgezet. Dit zijn korte routes
            variërend van 2 tot 5 kilometer met leuke vragen en opdrachten onderweg.
        </p>
    </div>
    <?php for ($i=0; $i<=4; $i++) :?>
        <div class="col-12 col-md-6 route-card">
            <div class="row">
                <div class="col-md-4">
                    <img data-aos="flip-left" src="/assets/img/main.JPG" alt="...">
                </div>
                <div class="col-md-8">
                    <h5 class="small-title">Fietsroute Wierdenland</h5>
                    <p class="small-text">
                        Deze route gaat door het oudste cultuurlandschap van
                        Nederland, het Middag-Humsterland. U etst door ongerept
                        boerenland. Onderweg passeert u schilderachtige dorpen
                        waar het goed toeven is. Dit gebied is vanouds blootgesteld
                        aan de grillen van de zee.
                    </p>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>
</div>