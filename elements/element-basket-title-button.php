<div class="o-wrapper">
    <div class="c-basket-container__wrapper">
        <div class="c-basket-container__title o-title">Koszyk <?php echo "(" . $quantity . ")"; ?>
        </div>
        <div class="c-basket-container__button">
            <button class="c-basket-container__button-element" data-toggle="modal" data-target="#deleteModal"> <span class="c-basket__buttonDelete-span"> <svg style="width: 100%;height: 100%;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g class="c-basket__buttonDelete-svg">
                            <path d="M8 7v12h8V7H8zM7 6h10v14H7V6z" fill-rule="nonzero"></path>
                            <path d="M10 5v1h4V5h-4zM9 4h6v3H9V4z" fill-rule="nonzero"></path>
                            <path d="M10 9h1v7h-1zM13 9h1v7h-1zM6 6h12v1H6z"></path>
                        </g>
                    </svg></span> Wyczyść koszyk</button>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Czy chcesz wyczyścić koszyk ? </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body c-basket__modal-body">
                Usuniesz wszystkie produkty z koszyka. Pamiętaj, że tej akcji nie można cofnąć.
            </div>
            <div class="modal-footer c-basket-modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
                <button onclick="basketDeleteAll()" type="button" class="c-basket-modal__button-clean">Wyczyść</button>
            </div>
        </div>
    </div>
</div>