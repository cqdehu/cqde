<?php



?>

<div class="p-4">
    <header class="container">
        <div class="row">
            <div class="col p-0 m-0 text-start">
                <p class="p-0 m-0 fs-4 text-light">Ábel</p>
            </div>
            <div class="col d-flex justify-content-end align-items-center p-0 m-0 text-end">
                <img src="/src/profile.svg" alt="" height="20px">
            </div>
        </div>
    </header>


    <!---->
    <main class="container mt-4">
        <div class="row gap-4 text-light" id="offers">

        </div>
    </main>
    <!---->

    <section class="container mt-4">
        <div class="row">
            <div class="col p-0 m-0">
                <div class="card rounded-4 border-0">
                    <div class="card-body">
                        <div class="container">
                            <div class="row row-cols-1 gap-3">
                                <div class="col p-0 m-0">
                                    <label for="" class="p-0 m-0 text-light">Name</label>
                                    <input type="text" class="form-control fw-bold border-0 rounded-3 mt-2" id="name_input">
                                </div>
                                <div class="col p-0 m-0">
                                    <label for="" class="p-0 m-0 text-light">Description</label>
                                    <textarea name="" class="form-control fw-bold border-0 rounded-3 mt-2" id="description_input"></textarea>
                                </div>
                                <div class="col p-0 m-0">
                                    <label for="" class="p-0 m-0 text-light">Price</label>
                                    <input type="text" class="form-control fw-bold border-0 rounded-3 mt-2" id="price_input">
                                </div>
                                <div class="col p-0 m-0">
                                    <label for="" class="p-0 m-0 text-light">Location</label>
                                    <input type="text" class="form-control fw-bold border-0 rounded-3 mt-2" id="location_input">
                                </div>
                                <div class="col p-0 m-0">
                                    <label for="" class="p-0 m-0 text-light">Area</label>
                                    <input type="text" class="form-control fw-bold border-0 rounded-3 mt-2" id="area_input">
                                </div>
                                <div class="col p-0 m-0">
                                    <label for="" class="p-0 m-0 text-light">Rate</label>
                                    <input type="text" class="form-control fw-bold border-0 rounded-3 mt-2" id="rate_input">
                                </div>
                                <div class="col p-0 m-0">
                                    <label for="" class="p-0 m-0 text-light">Person</label>
                                    <input type="text" class="form-control fw-bold border-0 rounded-3 mt-2" id="person_input">
                                </div>
                                <div class="col p-0 m-0">
                                    <label for="" class="p-0 m-0 text-light">Bed</label>
                                    <input type="text" class="form-control fw-bold border-0 rounded-3 mt-2" id="bed_input">
                                </div>
                                <div class="col p-0 m-0">
                                    <label for="" class="p-0 m-0 text-light">Room</label>
                                    <input type="text" class="form-control fw-bold border-0 rounded-3 mt-2" id="room_input">
                                </div>
                                <div class="col p-0 m-0">
                                    <label for="" class="p-0 m-0 text-light">Rent</label>
                                    <input type="text" class="form-control fw-bold border-0 rounded-3 mt-2" id="rent_input">
                                </div>
                                <div class="col p-0 m-0">
                                    <label for="" class="p-0 m-0 text-light">Cost</label>
                                    <input type="text" class="form-control fw-bold border-0 rounded-3 mt-2" id="cost_input">
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col p-0 m-0 d-grid">
                                    <button class="btn btn-success fw-bold rounded-3" id="add_button">
                                        ADD
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-4">
        <div class="row">
            <div class="col p-0 m-0">
                <div class="card rounded-4 border-0">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col p-0 m-0">
                                    <select class="form-select" id="list">
                                        <option selected="">Select...</option>

                                        <option value="64e29c78b211f">123</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col p-0 m-0">
                                    <button class="btn btn-danger" id="delete_offer_btn">
                                        DELETE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>