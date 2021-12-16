
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#popupWrong">
      Wrong
    </button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#popupTooclose">
      Too Close
    </button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#popupNo">
      Nooo
    </button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#popupRight">
      Right
    </button>
   

    <!-- Modal -->
    <div class="versesPop modal fade" id="popupWrong" tabindex="-1" aria-labelledby="popupWrongLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">
          <div class="modal-header border-bottom-0">
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <div class="modal-body text-center text-uppercase">
            <div class="modalTitle">
              <span class="popIco"><i class="fas fa-exclamation"></i></span>
              <h2><img src="assets/images/popup/electro-popup.png" class="img-fluid" alt=""><span>Something's Wrong!</span></h2>
            </div>

            <div class="modalContent">
              <p>You still have 2 chances to get it right</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="versesPop modal fade" id="popupTooclose" tabindex="-1" aria-labelledby="popupToocloseLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">
          <div class="modal-header border-bottom-0">
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <div class="modal-body text-center text-uppercase">
            <div class="modalTitle">
              <span class="popIco"><i class="fas fa-exclamation"></i></span>
              <h2><img src="./assets/images/electro/electro-option-selected.png" class="img-fluid" alt=""><span>That was too close!</span></h2>
            </div>

            <div class="modalContent">
              <p>You still have 1 chances to get it right</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="versesPop modal fade" id="popupNo" tabindex="-1" aria-labelledby="popupNoLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">
          <div class="modal-header border-bottom-0">
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <div class="modal-body text-center text-uppercase">
            <div class="modalTitle">
              <span class="popIco"><i class="fas fa-exclamation"></i></span>
              <h2><img src="./assets/images/electro/electro-option-selected.png" class="img-fluid" alt=""><span>Nooooooooo!</span></h2>
            </div>

            <div class="modalContent">
              <p>You have failed this mission.<br>Try again after 24 Hours.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="versesPop modal fade" id="popupRight" tabindex="-1" aria-labelledby="popupRightLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">
          <div class="modal-header border-bottom-0">
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <div class="modal-body text-center text-uppercase">
            <div class="modalTitle">
              <span class="popIco"><i class="fas fa-check"></i></span>
              <h2><img src="./assets/images/electro/electro-option-selected.png" class="img-fluid" alt=""><span>That's Rrrrright!</span></h2>
            </div>

            <div class="modalContent">
              <p class="rightNote">Go to the remaining univerces by opening this website on another browser.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slim.min.js"></script>
    </body>

    </html>