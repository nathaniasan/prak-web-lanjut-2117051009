<!-- JUMBOTRON -->
<section class="jumbotron text-center">
    <img src="<?= base_url('/assets/images/lopuol.jpg') ?>" alt="" width="200px"
        class="rounded-circle img-thumbnail shadow-lg" />
    <h1 class="display-4">PROFILE</h1>
    <hr class="my-4" />
    <div class="table-container pt-5">
        <table class="table table-borderless">
            <tr>
                <td>
                    <p class="lead">Nama </p>
                </td>
                <td>
                    <p class="lead">:</p>
                </td>
                <td>
                    <p class="lead">
                        <?= $nama; ?>
                    </p>
                </td>
            </tr>

            <tr>
                <td>
                    <p class="lead">Kelas </p>
                </td>
                <td>
                    <p class="lead">:</p>
                </td>
                <td>
                    <p class="lead">
                        <?= $kelas; ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="lead">NPM </p>
                </td>
                <td>
                    <p class="lead"> : </p>
                </td>
                <td>
                    <p class="lead">
                        <?= $npm; ?>
                    </p>
                </td>
            </tr>
        </table>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FFFFFF" fill-opacity="1"
            d="M0,256L34.3,261.3C68.6,267,137,277,206,261.3C274.3,245,343,203,411,208C480,213,549,267,617,245.3C685.7,224,754,128,823,122.7C891.4,117,960,203,1029,202.7C1097.1,203,1166,117,1234,112C1302.9,107,1371,181,1406,218.7L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
    <p></p>
</section>
<!--  JUMBOTRON END -->
<!-- Contact -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col text-center mb-3">
                <h2>Contact Me</h2>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col-md-8">
                    <form name="tokonbc-contact-form">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email" />
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                            </div>
                        </div>

                        <!-- pesan -->
                        <div class="mb-5">
                            <label for="pesaninput" class="form-label fw-bold">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                            <div id="pesan" class="form-text">We'll receive your message as soon as possible.</div>
                        </div>
                        <!-- <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" />
                </div> -->
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FA8" fill-opacity="1"
            d="M0,128L26.7,112C53.3,96,107,64,160,48C213.3,32,267,32,320,58.7C373.3,85,427,139,480,170.7C533.3,203,587,213,640,181.3C693.3,149,747,75,800,64C853.3,53,907,107,960,138.7C1013.3,171,1067,181,1120,202.7C1173.3,224,1227,256,1280,234.7C1333.3,213,1387,139,1413,101.3L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
        </path>
    </svg>
</section>
<!-- Contact END -->