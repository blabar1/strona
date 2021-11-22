<div class="c-product-tile">
    <div class="c-product-tile__thumbnail" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
    <div class="c-product-tile__content">
        <div class="c-product-tile__category"><?php echo $category; ?></div>
        <div class="c-product-tile__name"><?php echo $name; ?></div>
        <div class="c-product-tile__price"><?php echo $price; ?></div>
        <div class="c-product-tile__button-container">
            <button data-toggle="modal" data-target="#modal-basket" class="c-product-title__button "><span class="c-product-title__button-span"><svg class="c-product-title__button-svg">
                        <path d="M11 7h1a.5.5 0 1 1 0 1h-1v1a.5.5 0 1 1-1 0V8H9a.5.5 0 0 1 0-1h1V6a.5.5 0 1 1 1 0v1zM5.323 4H8a.5.5 0 0 1 0 1H5.532l1.25 6h7.314l1.286-6H13a.5.5 0 1 1 0-1h3a.5.5 0 0 1 .489.605l-1.5 7A.5.5 0 0 1 14.5 12H6.99l.417 2H14a2 2 0 1 1-1.733 1H8.733a2 2 0 1 1-2.329-.91L4.094 3H2.5a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .49.398L5.322 4zM8 16a1 1 0 1 0-1.999-.001A1 1 0 0 0 8 16zm7 0a1 1 0 1 0-1.999-.001A1 1 0 0 0 15 16z"></path>
                    </svg></span></button>
        </div>
    </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="modal-basket" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Dodano do koszyka</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body-picture">
                    <div class="modal-product-tile__thumbnail" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
                </div>
                <div class="modal-body-text">
                    <div class="modal-body-title">Mycha</div>
                    <div class="modal-body-price">cena</div>
                
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" style="background-color:var(--orange);" data-dismiss="modal">Zamknij</button>
                <button type="button" class="btn " style="background-color:var(--orange);">Przejdz do koszyka</button>
            </div>
        </div>
    </div>
</div>