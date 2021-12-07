<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade top30" id="m<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Dodano do koszyka</h5>

            </div>
            <div class="modal-body">
                <div class="modal-body-picture">
                    <div class="modal-product-tile__thumbnail" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
                </div>
                <div class="modal-body-text">
                    <div class="modal-body-title"><?php echo $name; ?></div>
                    <div class="modal-body-price"><?php echo ($price . " zł"); ?></div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn c-modal-button" style="background-color:var(--orange); color:white;" data-dismiss="modal">Zamknij</button>
                <button type="button" class="btn c-modal-button" style="background-color:var(--orange); color:white;"><a class="o-href" href="basket.php">Przejdz do koszyka</a></button>
            </div>
        </div>
    </div>
</div>