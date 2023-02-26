<?php

?>





          <!-- =========================================== -->
                         <!-- The Start of Edit Modal -->
                 <!-- =========================================== -->











  <!-- =========================================== -->
                         <!-- The Start of Edit Modal -->
                 <!-- =========================================== -->

                 <div
        class="modal fade"
        id="EditModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
       >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Edit Announce
              </h1>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <form id="update_announce" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div id="modal_flex">
              <input type="hidden" name="announce_id" id="announce_id" >
                <div id="update_Image">
                  <img id="edit_Image" src="" alt="">
                  <input type="file" name="edit_Image">
                </div>
                <div>
                  <div>
                    <label>Title : </label>
                    <input type="text" class="container" name="Title" id="Title"/>
                  </div>
                  
                  <div>
                    <label>Description : </label>
                    <input type="text" class="container" name="Description" id="Description" />
                  </div>
                  <div>
                    <label>Area : </label>
                    <input type="text" class="container" name="Area" id="Area" />
                  </div>
                  <div>
                    <label>Adress : </label>
                    <input type="text" class="container" name="Address" id="Address" />
                  </div>
                  <div>
                    <label>Amount : </label>
                    <input type="number" class="container" name="Amount" id="Amount" />
                  </div>
                  <div>
                    <label>Announce Date : </label>
                    <input type="date" class="container" name="Announce_Date" id="Announce_Date" />
                  </div>
                  <div>
                    <label>Type : </label>
               
                    <select id="Type" name="Type" class="form-select" aria-label="Default select example">
                      <option selected value="Rental">Rental</option>
                      <option value="Sell">Sell</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-warning"
                data-bs-dismiss="modal"
              >
                Close
              </button>
              <button type="submit"
                type="button"
                class="btn btn-warning"
                data-bs-dismiss="modal"
              >
                Update
              </button>
            </div>
          </form>
          </div>
        </div>
      </div>

      <!-- =========================================== -->
                <!-- The End of Edit Modal -->
      <!-- =========================================== -->