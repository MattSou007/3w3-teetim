    <?php /** @var stdClass $_foot */ ?>
        
        <footer>
            <h2>teeTIM</h2>
            <div class="contenu">
                <section class="achats">
                    <h3><?= $_foot->purchase->title; ?></h3>
                    <nav>
                        <a href="faq.html" class="faq"><?= $_foot->purchase->navFaq; ?></a>
                        <a href="livraison.html" class="livraison"><?= $_foot->purchase->navDelivery; ?></a>
                        <a href="conditions.html" class="conditions"><?= $_foot->purchase->navCondtions; ?></a>
                        <a href="confidentialite.html" class="confidentialite"><?= $_foot->purchase->navConfid; ?></a>
                    </nav>
                </section>
                <section class="apropos">
                    <h3><?= $_foot->aboutUs->title; ?></h3>
                    <nav>
                        <a href="compagnie.html" class="faq"><?= $_foot->aboutUs->navCompany; ?></a>
                        <a href="equipe.html" class="livraison"><?= $_foot->aboutUs->navTeam; ?></a>
                        <a href="emploi.html" class="conditions"><?= $_foot->aboutUs->navJob; ?></a>
                    </nav>
                </section>
                <section class="coordonnees">
                    <h3><?= $_foot->contact->title; ?></h3>
                    <nav>
                        <span><?= $_foot->contact->tel; ?><b>1 866 888 6666</b></span>
                        <span><?= $_foot->contact->email; ?></span>
                    </nav>
                </section>
            </div>
            <p class="da">&copy; <?= $_foot->rights; ?>teeTIM 2023-<?php echo date ('Y'); ?></p>
        </footer>
    </div>
</body>
</html>