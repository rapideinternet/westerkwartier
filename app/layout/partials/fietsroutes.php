<div class="row route-grid">
    <div class="col-12">
        <h1 class="small-title">Fietsroutes</h1>
        <p>
            Er zijn vijf fietsroute uitgezet, vier daarvan in lengte variërend van 50 tot circa 65 kilometer. Per route kunt u echter ook kiezen
            voor een verkorte versie. Één van de etsroutes betreft de Rietdalroute. Deze fietsroute van circa 120 km lang is opgedeeld in
            vier tracés. Tijdens het fietsen van deze route krijgt u een goed beeld van de diversiteit aan landschappen binnen het
            Westerkwartier.
        </p>
    </div>
    <?php for ($i=0; $i<=4; $i++) :?>
        <div class="col-12 col-md-6 route-card">
            <a href="../../pages/fietsroutes/wierdenland.php">
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
            </a>
        </div>
    <?php endfor; ?>
</div>