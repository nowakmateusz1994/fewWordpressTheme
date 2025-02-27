<?php $newsletter = get_field('newsletter', 'options'); ?>
<section class="newsletter">
    <div class="newsletter_content">
        <div class="newsletter_supertitle section-supertitle"><?= $newsletter['supertitle']; ?></div>
        <h3 class="newsletter_title section-title"><?= $newsletter['title']; ?></h3>
        <div class="newsletter_subtitle section-subtitle"><?= $newsletter['subtitle']; ?></div>

        <form>
            <div>
                <input placeholder="Wpisz swój adres e-mail" value="" type="email" name="your-email">
                <button class="button">
                    <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.82619 8.55775L1.94213 3.44225V13.6923C1.94213 13.7821 1.97054 13.8558 2.02737 13.9135C2.08421 13.9712 2.15689 14 2.24542 14H11.0581V15.5H2.24542C1.74757 15.5 1.32619 15.325 0.981259 14.975C0.636331 14.625 0.463867 14.1974 0.463867 13.6923V2.30775C0.463867 1.80258 0.636331 1.375 0.981259 1.025C1.32619 0.675 1.74757 0.5 2.24542 0.5H17.407C17.9048 0.5 18.3262 0.675 18.6711 1.025C19.016 1.375 19.1885 1.80258 19.1885 2.30775V9.25H17.7102V3.44225L9.82619 8.55775ZM9.82619 7L17.5587 2H2.09365L9.82619 7ZM16.5353 18.3943L15.5062 17.35L17.2953 15.5H12.8396V14H17.3047L15.4815 12.15L16.5353 11.1058L20.1267 14.75L16.5353 18.3943ZM1.94213 3.44225V14.8365V9.25V9.373V2V3.44225Z" fill="#FCFBF3" />
                    </svg>
                </button>
            </div>
            <label><input type="checkbox" name="acceptance">
                <span class="checkmark"></span>
                <span class="content">Risus quis varius quam quisque id. Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend. Sagittis aliquam malesuada bibendum arcu. Purus in mollis nunc sed id. Placerat duis ultricies lacus sed turpis tincidunt id.</span>
            </label>
        </form>
    </div>
</section>